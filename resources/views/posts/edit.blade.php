@extends('posts.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="leading-normal mt-0 text-indigo-800">Edit Post</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
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
  
    <form action="{{ route('posts.update',$post->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong class="text-xl font-normal leading-normal mt-0 mb-2 text-teal-800">Title:</strong>
                    <input type="text" name="title" value="{{ $post->title }}" class="form-control" placeholder="Title">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong class="text-xl font-normal leading-normal mt-0 mb-2 text-teal-800">Post Content:</strong>
                    <textarea class="form-control" style="height:150px" name="postContent" placeholder="PostContent">{{ $post->postContent }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong class="text-xl font-normal leading-normal mt-0 mb-2 text-teal-800">Author id:</strong>
                    <input type="text" name="contactId" value="{{ $post->contactId }}" class="form-control" placeholder="ContactId">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong class="text-xl font-normal leading-normal mt-0 mb-2 text-teal-800">Date:</strong>
                    <input type="text" name="date" value="{{ $post->date }}" class="form-control" placeholder="Date">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong class="text-xl font-normal leading-normal mt-0 mb-2 text-teal-800">Topic:</strong>
                    <textarea class="form-control" style="height:150px" name="topic" placeholder="Topic">{{ $post->topic }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong class="text-xl font-normal leading-normal mt-0 mb-2 text-teal-800">Reading time (minutes):</strong>
                    <input type="text" name="readingTime" value="{{ $post->readingTime }}" class="form-control" placeholder="ReadingTime">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection