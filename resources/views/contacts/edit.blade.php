@extends('contacts.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="leading-normal mt-0 text-indigo-800">Edit Author</h2>
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
  
    <form action="{{ route('contacts.update',$contact->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong class="text-xl font-normal leading-normal mt-0 mb-2 text-teal-800">First Name:</strong>
                    <input type="text" name="firstName" value="{{ $contact->firstName }}" class="form-control" placeholder="FirstName">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong class="text-xl font-normal leading-normal mt-0 mb-2 text-teal-800">Last Name:</strong>
                    <input type="text" name="lastName" value="{{ $contact->lastName }}" class="form-control" placeholder="LastName">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong class="text-xl font-normal leading-normal mt-0 mb-2 text-teal-800">Email:</strong>
                    <input type="text" name="email" value="{{ $contact->email }}" class="form-control" placeholder="Email">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong class="text-xl font-normal leading-normal mt-0 mb-2 text-teal-800">City:</strong>
                    <input type="text" name="city" value="{{ $contact->city }}" class="form-control" placeholder="City">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong class="text-xl font-normal leading-normal mt-0 mb-2 text-teal-800">Country:</strong>
                    <input type="text" name="country" value="{{ $contact->country }}" class="form-control" placeholder="Country">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong class="text-xl font-normal leading-normal mt-0 mb-2 text-teal-800">Date of Birth:</strong>
                    <input type="text" name="birthDate" value="{{ $contact->birthDate }}" class="form-control" placeholder="BirthDate">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection