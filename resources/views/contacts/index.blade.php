@extends('contacts.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('contacts.create') }}"> Create New Contact</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered text-center">
        <tr>
            <th>No</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>City</th>
            <th>Country</th>
            <th width="110px">Birth Date</th>
            <th width="230px">Action</th>
        </tr>
        @foreach ($contacts as $contact)
        <tr>
            <td>{{$contact->id}}</td>
            <td>{{ $contact->firstName }}</td>
            <td>{{ $contact->lastName }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->city }}</td>
            <td>{{ $contact->country }}</td>
            <td>{{ $contact->birthDate }}</td>
            <td>
                <form action="{{ route('contacts.destroy',$contact->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('contacts.show',$contact->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('contacts.edit',$contact->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
   {!! $contacts->links('pagination::bootstrap-4') !!}
     
@endsection