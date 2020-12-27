@extends('posts.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="text-5xl font-normal leading-normal mt-0 mb-2 text-indigo-800"> Show Post</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong  class="text-xl font-normal leading-normal mt-0 mb-2 text-teal-800">Title:</strong>
                {{ $post->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong  class="text-xl font-normal leading-normal mt-0 mb-2 text-teal-800">Post Content:</strong>
                {{ $post->postContent }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong  class="text-xl font-normal leading-normal mt-0 mb-2 text-teal-800">ContactId:</strong>
                {{ $post->contactId }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong  class="text-xl font-normal leading-normal mt-0 mb-2 text-teal-800">Date:</strong>
                {{ $post->date }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong  class="text-xl font-normal leading-normal mt-0 mb-2 text-teal-800">Topic:</strong>
                {{ $post->topic }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong  class="text-xl font-normal leading-normal mt-0 mb-2 text-teal-800">Reading time:</strong>
                {{ $post->readingTime }}
            </div>
        </div>
    </div>
@endsection