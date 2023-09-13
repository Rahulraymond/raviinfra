@extends('layouts.master')
@section('title')
    {{ $contact->name }}'s Query | {{ config('app.name', 'Laravel') }}
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header">
                    <h4>Contacts of {{ $contact->name }}</h4>
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-md-6 p-2">
                            <p> Name : {{ $contact->name }}</p>
                        </div>
                        <div class="col-md-6 p-2">
                            <p> Email : {{ $contact->email }}</p>
                        </div>
                        <div class="col-md-6 p-2">
                            <p> Phone : {{ $contact->phone }}</p>
                        </div>
                        <div class="col-md-6 p-2">
                            <p> Query : {{ $contact->query }}</p>
                        </div>
                        <div class="col-md-12 p-2">
                            <hr>
                            <p>Additional Details : {{ $contact->details }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
