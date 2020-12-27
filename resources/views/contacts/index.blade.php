@extends('contacts.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="leading-normal mt-0 text-indigo-800">Laravel CRUD</h2>
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
            <th class="align-middle">No</th>
            <th class="align-middle">First Name</th>
            <th class="align-middle">Last Name</th>
            <th class="align-middle">Email</th>
            <th class="align-middle">City</th>
            <th class="align-middle">Country</th>
            <th class="align-middle" width="110px">Birth Date</th>
            <th class="align-middle" width="230px">Action</th>
        </tr>
        @foreach ($contacts as $contact)
        <tr>
            <td class="align-middle">{{$contact->id}}</td>
            <td class="align-middle">{{ $contact->firstName }}</td>
            <td class="align-middle">{{ $contact->lastName }}</td>
            <td class="align-middle">{{ $contact->email }}</td>
            <td class="align-middle">{{ $contact->city }}</td>
            <td class="align-middle">{{ $contact->country }}</td>
            <td class="align-middle">{{ $contact->birthDate }}</td>
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
  <div class="mx-auto">
  {!! $contacts->links('pagination::bootstrap-4') !!}
</div>
  
     
@endsection