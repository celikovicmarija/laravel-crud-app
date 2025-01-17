@extends('contacts.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 class="text-5xl font-normal leading-normal mt-0 mb-2 text-indigo-800">Add New Author</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('contacts.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


   
<form action="{{ route('contacts.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="text-xl font-normal leading-normal mt-0 mb-2 text-teal-800">First Name:</strong>
                <input type="text" name="firstName" class="form-control" placeholder="FirstName">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="text-xl font-normal leading-normal mt-0 mb-2 text-teal-800">Last Name:</strong>
                <input type="text" name="lastName" class="form-control" placeholder="LastName">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="text-xl font-normal leading-normal mt-0 mb-2 text-teal-800">Email:</strong>
                <input type="text" name="email" class="form-control" placeholder="Email">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="text-xl font-normal leading-normal mt-0 mb-2 text-teal-800">City:</strong>
                <input class="form-control" name="city" placeholder="City">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="text-xl font-normal leading-normal mt-0 mb-2 text-teal-800">Country:</strong>
                <input class="form-control" name="country" placeholder="Country">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="text-xl font-normal leading-normal mt-0 mb-2 text-teal-800">Date of Birth:</strong>
                <input class="form-control" name="birthDate" placeholder="BirtDate">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center font-normal leading-normal mt-0 mb-2 text-teal-800">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection