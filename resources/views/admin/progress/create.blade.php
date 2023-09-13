@extends('layouts.master')
@section('title')
    Add Project Progress | {{ config('app.name', 'Laravel') }}
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('css/progress.css') }}">
@endpush
@section('content')
    <form method="POST" action="{{ route('progress.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Project Progress
                            <a href="{{ route('progress.index') }}" class="btn btn-primary btn-sm float-right">Back</a>
                        </h4>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-md-12  mb-0">
                                <label for="year">Year</label> <span class="text-danger">*</span>
                                <select name="year" id="year"
                                    class="form-control  @error('year') is-invalid @enderror ">
                                    <option value="">--Select Year--</option>
                                    @for ($i = 2022; $i <= 2024; $i++)
                                        <option value="{{ $i }}" {{ old('year') == $i ? 'selected' : '' }}>
                                            {{ $i }}</option>
                                    @endfor
                                </select>
                                @error('year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-12 mt-2 mb-0">
                                <label for="month">Month</label> <span class="text-danger">*</span>
                                <select name="month" id="month"
                                    class="form-control  @error('month') is-invalid @enderror ">
                                    <option value="">--Select Month--</option>
                                    @foreach (['JANUARY', 'FEBRUARY', 'MARCH', 'APRIL', 'MAY', 'JUNE', 'JULY', 'AUGUST', 'SEPTEMBER', 'OCTOBER', 'NOVEMBER', 'DECEMBER'] as $month)
                                        <option value="{{ $month }}" {{ old('month') == $month ? 'selected' : '' }}>
                                            {{ $month }}</option>
                                    @endforeach
                                </select>
                                @error('year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-md-12">
                                <label for="week">Weeks</label> <span class="text-danger">*</span>
                                <select name="week" id="week"
                                    class="form-control @error('week') is-invalid @enderror ">
                                    <option value="">--Select Week--</option>
                                    @for ($i = 1; $i <= 5; $i++)
                                        <option value="Week - {{ $i }}"
                                            {{ old('week') == 'Week - ' . $i . '' ? 'selected' : '' }}>Week -
                                            {{ $i }}</option>
                                    @endfor
                                </select>
                                @error('week')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <label for="desc">Description</label>
                                <textarea type="text" placeholder="Write your description." cols="50" rows="5" name="desc" id="desc" class="form-control">{{old('desc')}}</textarea>
                                @error('desc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <fieldset id="buildyourform">
                            <legend>Media Section <small>(Maximum upload size 5 mb of per field.)</small></legend>
                        </fieldset>
                        <input type="button" class="btn btn-primary" value="Add a field" class="add" id="add" />
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-2">
                <div class="card">
                    <div class="card-body">

                        <input type="submit" class="btn btn-primary" value="Submit" />
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection


@push('js')
    <script>
        $(document).ready(function() {
            $(window).on('load', function() {
                $("#add").click();
            });
            let count = 0;
            $("#add").click(function() {
                count += 1;
                if (count > 5) {
                    alert('You can not add more than 5 field');
                } else {
                    let lastField = $("#buildyourform div:last");
                    let intId = (lastField && lastField.length && lastField.data("idx") + 1) || 1;
                    let fieldWrapper = $("<div class=\"fieldwrapper\" id=\"field" + intId + "\"/>");
                    fieldWrapper.data("idx", intId);
                    let fName = $(
                        "<label for=\"media\">Media</label><span class=\"text-danger\">*</span><input type=\"file\" name=\"media[]\" class=\"form-control\" />"
                    );
                    let fType = $(
                        "<label for=\"caption\" class=\"mt-2\">Caption</label><span class=\"text-danger\">*</span><textarea  rows=\"4\" ows=\"50\" name=\"caption[]\" placeholder=\"Write your caption\" class=\"form-control\" ></textarea>"
                    );
                    let removeButton = $(
                        "<label for=\"caption\"></label><button type=\"button\" title=\"Delete this fieled\" class=\"remove delete btn btn-danger\"  ><i class=\"fa fa-trash\"></i></button>"
                    );
                    removeButton.click(function() {
                        $(this).parent().remove();
                    });
                    fieldWrapper.append(fName);
                    fieldWrapper.append(fType);
                    fieldWrapper.append(removeButton);
                    $("#buildyourform").append(fieldWrapper);
                }
            });
        });
    </script>
@endpush
