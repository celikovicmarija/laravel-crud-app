@extends('contacts.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="leading-normal mt-0 text-indigo-800"> Show Author</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('contacts.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="text-xl font-normal leading-normal mt-0 mb-2 text-teal-800">First Name:</strong>
                {{ $contact->firstName }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="text-xl font-normal leading-normal mt-0 mb-2 text-teal-800">Last Name:</strong>
                {{ $contact->lastName}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="text-xl font-normal leading-normal mt-0 mb-2 text-teal-800">Email:</strong>
                {{ $contact->email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="text-xl font-normal leading-normal mt-0 mb-2 text-teal-800">City:</strong>
                {{ $contact->city }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="text-xl font-normal leading-normal mt-0 mb-2 text-teal-800">Country:</strong>
                {{ $contact->country }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="text-xl font-normal leading-normal mt-0 mb-2 text-teal-800">Date of Birth:</strong>
                {{ $contact->birthDate }}
            </div>
        </div>
    </div>
@endsection