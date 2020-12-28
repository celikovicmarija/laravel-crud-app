<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Resources\Post as PostResource;
use App\Models\Post as PostModel;
use Illuminate\Support\Facades\Validator;


class PostController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts =PostModel::all();

        return $this->sendResponse(PostResource::collection($posts), 'Posts retrieved successfully');

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input,
        [
            'title' => 'required',
            'postContent' => 'required',
            'contactId' => 'required',
            'date' => 'required',
            'topic' => 'required',
            'readingTime' => 'required',
        ]);
        if($validator->fails()){
            return $this->sendError('Validation error.', $validator->errors());
        }

        $post = PostModel::create($input);
        return $this->sendResponse(new PostResource($post), ' Post created successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = PostModel::find($id);
        if(is_null($post)){
            return $this->sendError('Post not found.');
        }
        return $this->sendResponse(new PostResource($post), ' Post retrieved successfully');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostModel $post)
    {
        $input = $request->all();
        $validator = Validator::make($input,
        [
            'title' => 'required',
            'postContent' => 'required',
            'contactId' => 'required',
            'date' => 'required',
            'topic' => 'required',
            'readingTime' => 'required',
        ]);
        if($validator->fails()){
            return $this->sendError('Validation error.', $validator->errors());
        }
        $post->title = $request->get('title');
        $post->postContent =$request->get('postContent');
        $post->contactId = $request->get('contactId');
        $post->date = $request->get('date');
        $post->topic =$request->get('topic');
        $post->readingTime = $request->get('readingTime');
        $post->save();

        return $this->sendResponse(new PostResource($post), ' Post updated successfully!');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = PostModel::find($id);
        $post->delete();
        return $this->sendResponse([], ' Post deleted successfully!');

    }
}
