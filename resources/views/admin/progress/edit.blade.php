@extends('layouts.master')
@section('title')
    Update Project Progress | {{ config('app.name', 'Laravel') }}
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('css/progress.css') }}">
@endpush
@section('content')
    <form method="POST" action="{{ route('progress.update', $progress->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header">
                        <h4>Update Project Progress
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
                                        <option value="{{ $i }}" {{ $progress->year == $i ? 'selected' : '' }}>
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
                                        <option value="{{ $month }}"
                                            {{ $progress->month == $month ? 'selected' : '' }}>{{ $month }}</option>
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
                                            {{ $progress->week == 'Week - ' . $i . '' ? 'selected' : '' }}>Week -
                                            {{ $i }}</option>
                                    @endfor
                                </select>
                                @error('week')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            @if ($progress->desc)
                                <div class="col-md-12">
                                    <label for="desc">Description</label>
                                    <textarea type="text" placeholder="Write your description." cols="50" rows="5" name="desc"
                                        id="desc" class="form-control">{{ old('desc') ? old('desc') : $progress->desc }}</textarea>
                                    @error('desc')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            @endif

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

                        <input type="submit" class="btn btn-primary" value="Update" />
                    </div>
                </div>
            </div>
            @if (count($medias))
                <div class="col-md-12 mt-2">
                    <div class="card">
                        <div class="card-header">All Medias</div>
                        <div class="card-body">
                            <div class="row ">
                                @php
                                    $image_mimes_array = ['jpeg', 'jpg', 'png', 'gif'];
                                    $video_mimes_array = ['mp4', '3gp', 'mov', 'wmv', 'mov'];
                                @endphp
                                @foreach ($medias as $key => $media)
                                    @php
                                        $data = explode('.', $media->media);
                                    @endphp
                                    <div class="col-md-3 mt-2  text-center">
                                        @if (in_array($data[1], $image_mimes_array))
                                            <img height="250" width="350"
                                                class="mt-2 img-thumbnail  rounded float-left"
                                                title="{{ $media->caption }}"
                                                src="{{ \Storage::url($media->media) }}" alt="">
                                        @elseif (in_array($data[1], $video_mimes_array))
                                            <video class="pl-2" style="padding-right: 5rem!important;" width="320" height="240" controls>
                                                <source src="{{ \Storage::url($media->media) }}"
                                                    type="video/mp4">
                                                <source src="{{ \Storage::url($media->media) }}"
                                                    type="video/ogg">
                                                Your browser does not support the video tag.
                                            </video>
                                        @endif

                                        <button type="button" data-id={{ $media->id }}
                                            class="mt-2 removeMedia btn-sm btn btn-primary text-white"> <i
                                                class="fa fa-trash"></i>
                                            Delete</button>

                                        <button type="button" data-id="{{ $media->caption }}"
                                            class="mt-2 caption btn-sm btn btn-info text-white"> <i class="fa fa-eye"></i>
                                            Show</button>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </form>

    <!-- Modal -->
    <div class="modal fade" id="captionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Caption</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="caption_data">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@if (isset($media->id))
    @push('js')
        <script>
            $.ajaxSetup({

                headers: {

                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                }
            });
            $(document).on('click', '.removeMedia', function() {

                if (confirm('Are you sure want to delete ?')) {

                    let media_id = $(this).data("id");

                    var url = "{{ route('remove.media', ':media_id') }}";

                    url = url.replace(':media_id', media_id);

                    $.ajax({

                        type: "delete",

                        url: url,

                        success: function(response) {

                            if (!response) {

                                alert('Something went wrong.')

                            }

                            location.reload(true);
                        }

                    });
                }
            });
        </script>
    @endpush
@endif

@push('js')
    <script>
        $(document).ready(function() {
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


@push('js')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.caption', function() {

                // ============= get the data attribute data
                let caption = $(this).attr("data-id");

                // ========set caption to modal
                $("#caption_data").text(caption);

                // =========show modal after set text to modal
                $('#captionModal').modal('show');

            });
        });
    </script>
@endpush
