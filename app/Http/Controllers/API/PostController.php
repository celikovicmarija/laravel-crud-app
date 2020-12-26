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
       // $posts = Post::latest()->paginate(5);
  
       // return  view('posts.index',compact('posts'))
       //     ->with('i', (request()->input('page', 1) - 1) * 5);
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
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

        //Post::create($request->all());
   
      //  return redirect()->route('posts.index')
      //                 ->with('success','Post created successfully.');
 
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

        //return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = PostModel::find($id);
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
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
        $post->title = $input['title'];
        $post->postContent = $input['postContent'];
        $post->author = $input['author'];
        $post->date = $input['date'];
        $post->topic = $input['topic'];
        $post->readingTime = $input['treadingTimeitle'];
        $post->save();

        return $this->sendResponse(new PostResource($post), ' Post updated successfully!');


        
  
        $post->update($request->all());
  
        return redirect()->route('posts.index')
                        ->with('success','Post updated successfully');

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
