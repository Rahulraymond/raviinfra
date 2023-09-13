@extends('layouts.master')
@section('title')
Project Progress | {{ config('app.name', 'Laravel') }}
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    Filter Records
                    <form action="" method="get">
                        <div class="row">
                            <div class="col-md-3  mt-2">
                                <select name="year" id="year"
                                    class="form-control">
                                    <option value="">--Select Year--</option>
                                    @for ($i = 2022; $i <= 2024; $i++)
                                        <option value="{{ $i }}" {{request('year') == $i ? "selected":""}}>{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col-md-3  mt-2">
                                <select name="month" id="month"
                                    class="form-control">
                                    <option value="">--Select Month--</option>
                                    @foreach (['JANUARY','FEBRUARY','MARCH','APRIL','MAY','JUNE','JULY','AUGUST','SEPTEMBER','OCTOBER','NOVEMBER','DECEMBER'] as $month)
                                        <option value="{{ $month }}"  {{request('month') == $month ? "selected":""}}>{{ $month }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3  mt-2">
                                <select name="week" id="week"
                                    class="form-control">
                                    <option value="">--Select Week--</option>
                                    @for ($i = 1; $i <= 5; $i++)
                                        <option value="{{ $i }}"  {{request('week') == $i  ? "selected":""}}>Week - {{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col-md-3 mt-2">
                                <button type="submit" class="btn btn-primary">Search</button>
                                <a href="{{ route('progress.index') }}" class="btn btn-primary">Reset</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-12 grid-margin stretch-card mt-2">
          
            <div class="card">
                <div class="card-header">
                    <h4>Project Progress <a href="{{ route('progress.create') }}" class="ml-3 btn btn-primary float-right"> Add</a></h4>
                </div>
                <div class="card-body pt-0">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>SN.</th>
                                    <th>Year</th>
                                    <th>Week</th>
                                    <th>Month</th>
                                    <th>Description</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($progress))
                                    @php
                                        $i = $progress->perPage() * ($progress->currentPage() - 1) + 1;
                                    @endphp
                                    @foreach ($progress as $key => $progres)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $progres->year }}</td>
                                            <td>{{ $progres->week }}</td>
                                            <td>{{ $progres->month }}</td>
                                            <td>{{ $progres->desc != '' ? strlen($progres->desc) > 25 ? substr($progres->desc, 0,25).' ...' : $progres->desc :'--' }}</td>
                                            <td>{{ $progres->created_at }}</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="{{ route('progress.edit', $progres->id) }}"
                                                        class="pt-1 pr-3 delete"> <i class="fa fa-edit"></i></a>
                                                    <form 
                                                        action="{{ route('progress.destroy', $progres->id) }}"
                                                        onsubmit="return confirm('Are you sure want to delete(All the media will be delete associated with this progress if you perform this actions.) ?')"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-primary delete btn-sm">
                                                            <i class="fa fa-trash"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td>No Records Found</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    {{ $progress->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
