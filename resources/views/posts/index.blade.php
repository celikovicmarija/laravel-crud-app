@extends('posts.layout') 
@section('content')
    <div class="row  pt-2 pb-2">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="leading-normal mt-0 text-indigo-800">Laravel CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('posts.create') }}"> Create New Post</a>
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
            <th class="align-middle" width="130px">Title</th>
            <th  class="align-middle"width="260px">Post content</th>
            <th class="align-middle" width="8px">Author</th>
            <th class="align-middle" >Date</th>
            <th class="align-middle">Topic</th>
            <th  class="align-middle"width="9px">Reading Time</th>
            <th class="align-middle" width="200px">Action</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
            <td class="align-middle">{{ $post->id }}</td>
            <td class="align-middle">{{ $post->title }}</td>
            <td class="align-middle">{{ $post->postContent }}</td>
            <td class="align-middle">{{ $post->contactId }}</td>
            <td class="align-middle">{{ $post->date }}</td>
            <td class="align-middle">{{ $post->topic }}</td>
            <td class="align-middle">{{ $post->readingTime }}</td>
            <td>
                <form action="{{ route('posts.destroy',$post->id) }}" method="POST">

                    <a class="btn btn-info mt-2 mb-2" href="{{ route('posts.show',$post->id) }}">Show</a>
                    <a class="btn btn-primary mt-2 mb-2" href="{{ route('posts.edit',$post->id) }}">Edit</a>
                    <a class="btn btn-success mt-2 mb-2" href="{{ route('contacts.show',$post->contactId) }}">Author</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger mt-2 mb-2">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    <div class="mx-auto">
    {!! $posts->links('pagination::bootstrap-4') !!}
</div>

      
@endsection