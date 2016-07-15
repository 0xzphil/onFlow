<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

use App\Providers\Regex\Regex;

use Illuminate\Support\Facades\Input;

// Request by Fizz
use App\Http\Requests\PostRequest;

// Declared by Fizz
use App\Post;

class PostController extends Controller
{
    // Index all posts, public, and saw by users
    public function index($page = null){
        // page for paginaiton
        $search = Input::get('search');
        if($page==null){
            $page = 1;
        }

        // total rows for pagination
        if($search==null){
            $raw      = Post::latest('created_at');
            $totalRows= Post::count();
        } else {
            $raw      = Post::where('title', 'like', '%'.$search.'%');
            $totalRows= $raw->count();
        }
        
    	$posts       = $raw->skip(($page-1)*5)->take(5)-> get();
        $latestPost  = $raw->skip(0)->take(6)->get();
        $currentPage = $page;
        $notify      = $this->getNotification();
        
        if($search == null){
            return view('blog.index', compact('posts', 'latestPost', 'totalRows', 'currentPage', 'notify'));
        } else {
            if($totalRows == 0){
                $notify  = "Nothing found";
            } else $notify = "Tìm thấy ". $totalRows." bài viết , my mister!";
            return view('blog.index', compact('posts', 'latestPost', 'totalRows', 'currentPage', 'notify', 'search'));
        }
    	
    }

    private function getNotification(){
        $notification = "
            Page sẽ tiếp tục cập nhật các tính năng.
        ";
        return preg_replace("/\n/", "<br/>", $notification);
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
        
        // some pre-processor
        $content = preg_replace("/\n/", "<br/>", $request->get('content'));
        $post    = new Post([
            'title' => $request->get('title'),
            'content'=> $content,
            'user_id'=> $request->get('user_id'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        \Auth::user()->posts()->save($post);
    	
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
        if($post->user_id== \Auth::user()->user_id)
    	       return view('blog.edit', compact('post'));
        else return "You dont have permission to edit this post!!";
    }

    //update function on DB
    public function update(PostRequest $request, $post_id){
         // some pre-processor
        $content = preg_replace("/\n/", "<br/>", $request->get('content')); 
    	$post = Post::where('post_id', $post_id)-> firstOrFail();
    	$post->title = $request->get('title');
    	$post->content = $content;
    	$post->save();
    	//$post-> update($request->all());
    	return redirect('posts/'.$post_id.'/edit');
    }
}







