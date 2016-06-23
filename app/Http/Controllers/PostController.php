<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

use App\Providers\Regex\Regex;

// Request by Fizz
use App\Http\Requests\PostRequest;

// Declared by Fizz
use App\Post;

class PostController extends Controller
{
    // Index all posts, public, and saw by users
    public function index(){

    	$posts= Post::latest('created_at')-> get();
        //return Regex::frameYoutube('test');
    	return view('blog.index', compact('posts'));
    }

    // show a Post 
    public function showAPost($id){
    	$post= Post::where('post_id', $id)->firstOrFail();
    	return view('blog.post', compact('post'));
    }

    // return a creation blade
    public function create(){
    	return view('blog.create');
    }

    /**
     * Store on DB funtion
     * @param  PostRequest
     * @return redirect('index');
     */
    public function store(PostRequest $request){
    	// validate and store on database//
          
    	Post::create([
    		'title' => $request->get('title'),
    		'content'=> $request->get('content'),
    		'user_id'=> $request->get('user_id'),
    		'created_at' => Carbon::now(),
    		'updated_at' => Carbon::now()
    	]);
    	// or using 
		// Post::create($request->all());
       	return redirect('index');
    }

    /**
     * Edit function
     * @param  $id
     * @return blog.edit with post
     */
    public function edit($id){
    	$post = Post::where('post_id', $id)->firstOrFail();
    	return view('blog.edit', compact('post'));
    }

    //update function on DB
    public function update(PostRequest $request, $post_id){
    	$post = Post::where('post_id', $post_id)-> firstOrFail();
    	$post->title = $request->get('title');
    	$post->content = $request->get('content');
    	$post->save();
    	//$post-> update($request->all());
    	return redirect('posts/'.$post_id.'/edit');
    }
}







