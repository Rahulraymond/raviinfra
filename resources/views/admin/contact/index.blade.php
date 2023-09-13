@extends('layouts.master')
@section('title')
    Contact | {{ config('app.name', 'Laravel') }}
@endsection
@section('content')
        
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>Contacts</h4>
                    <div>
                      <form action="" method="get">
                        <div class="row">
                            <div class="col-md-8">
                                <input type="search" value="{{request('search')?request('search'):''}}" width="350" name="search" id="search" class="form-control float-right" placeholder="Write your keywords.">
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
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Actions</th>
                                    <th>SN.</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Query</th>
                                    <th>Details</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($contacts))
                                    @php
                                        $i = $contacts->perPage() * ($contacts->currentPage() - 1) + 1;
                                    @endphp
                                    @foreach ($contacts as $key => $contact)
                                        <tr>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-primary btn-sm" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i style="" class="fa">&#xf141;</i>
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item"
                                                            href="{{ route('contacts.show', $contact->id) }}"
                                                            class="edit pt-1" title="View {{ $contact->name }}'s Query"><i
                                                                class="fa fa-eye"></i>
                                                            View</a>
                                                        <form class="dropdown-item"
                                                            action="{{ route('contacts.destroy', $contact->id) }}"
                                                            onsubmit="return confirm('Are your sure want to delete ?')"
                                                            method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button title="Delete {{ $contact->name }}'s Query"
                                                                type="submit" class="btn btn-primary delete btn-sm"> <i
                                                                    class="fa fa-trash"></i> Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $contact->name }}</td>
                                            <td>{{ $contact->phone }}</td>
                                            <td>{{ $contact->email }}</td>
                                            <td>{{ $contact->query }}</td>
                                            <td>{{ Str::substr($contact->details, 0, 50) }} ...</td>
                                            <td>{{ $contact->created_at }}</td>
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
                @if (count($contacts))
                    <div class="card-footer">
                        {{ $contacts->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
