@extends('posts.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 class="text-5xl font-normal leading-normal mt-0 mb-2 text-indigo-800">Add New Post</h2>
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
   
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="text-xl font-normal leading-normal mt-0 mb-2 text-teal-800">Title:</strong>
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="text-xl font-normal leading-normal mt-0 mb-2 text-teal-800">Content of the post:</strong>
                <textarea class="form-control" style="height:150px" name="postContent" placeholder="PostContent"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="text-xl font-normal leading-normal mt-0 mb-2 text-teal-800">Author id:</strong>
                <input class="form-control" name="contactId" placeholder="ContactId">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="text-xl font-normal leading-normal mt-0 mb-2 text-teal-800">Date:</strong>
                <input class="form-control" name="date" placeholder="Date">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="text-xl font-normal leading-normal mt-0 mb-2 text-teal-800">Topic:</strong>
                <textarea class="form-control" style="height:90px" name="topic" placeholder="Topic"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="text-xl font-normal leading-normal mt-0 mb-2 text-teal-800">Reading time (minutes):</strong>
                <textarea class="form-control"name="readingTime" placeholder="ReadingTime"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center font-normal leading-normal mt-0 mb-2 text-teal-800">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection