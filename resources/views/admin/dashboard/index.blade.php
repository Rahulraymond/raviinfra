@extends('layouts.master')
@section('title')
    Home | Dashboard
@endsection
@section('content')
    <div class="row">
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card add-row">
                <div class="card-body">
                    <a href="{{route('grievances.index')}}"><h4>Grievances</h4>{{$total_grievances}}</a>
                </div>
            </div>
            <div class="card add-row ml-3">
                <div class="card-body">
                    <a href="{{route('contacts.index')}}"><h4>PD & RM</h4>{{$total_contacts}}</a>
                </div>
            </div>
            <div class="card add-row ml-3">
                <div class="card-body">
                    <a href="{{route('progress.index')}}"><h4>Project Progress</h4>{{$total_progress}}</a>
                </div>
            </div>
        </div>
    </div>
@endsection
