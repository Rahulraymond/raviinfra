@extends('layouts.master')
@section('title')
    Grievances | {{ config('app.name', 'Laravel') }}
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>Grievances</h4>
                    <div>
                      <form action="" method="get">
                        <div class="row">
                            <div class="col-md-8">
                                <input type="search" value="{{request('search')?request('search'):''}}" width="250" name="search" id="search" class="form-control float-right" placeholder="Write you keywords.">
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                      </form>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Actions</th>
                                    <th>SN.</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Location</th>
                                    <th>For</th>
                                    <th>Document</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($grievances))
                                    @php
                                        $i = $grievances->perPage() * ($grievances->currentPage() - 1) + 1;
                                    @endphp
                                    @foreach ($grievances as $key => $grievance)
                                        <tr>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-primary btn-sm" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i style="" class="fa">&#xf141;</i>
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <form class="dropdown-item"
                                                            action="{{ route('grievances.destroy', $grievance->id) }}"
                                                            onsubmit="return confirm('Are your sure want to delete ?')"
                                                            method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-primary delete btn-sm"> <i
                                                                    class="fa fa-trash"></i> Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $grievance->name }}</td>
                                            <td>{{ $grievance->phone }}</td>
                                            <td>{{ $grievance->email }}</td>
                                            <td>{{ $grievance->location }}</td>
                                            <td>{{ $grievance->for }}</td>
                                            <td> <img class="foo" src="{{ \Storage::url(''.$grievance->document) }}"
                                                    alt=""> </td>
                                            <td>{{ $grievance->created_at }}</td>

                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td>No Records founds.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                @if (count($grievances))
                    <div class="card-footer">
                        {{ $grievances->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
