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

use App\Category;

class PostController extends Controller
{
    // Index all posts, public, and saw by users
    public function index($page = null){
        //return mb_substr("Hello Fizz, 
        //Hiện nay page vẫn còn nhiều thiếu sót.
        //sPage sẽ tiếp tục cập nhật. Mong các bạn thông cảm.", 0, 45, 'UTF-8');
       //return Regex::bbCode(' fdfd   [url=http://fb.com]fdf[/url]   fdfdf [url]http://fb.com[/url]  dfdf');
        // page for paginaiton
        $search = Input::get('search');
        $category = Input::get('category');

        if($page==null){
            $page = 1;
        }
        //
        $rawJoin = Post::leftJoin('categories', 'categories.category_id', '=', 'posts.category_id');
        //
        if($category!= null){
            $rawCg =  $rawJoin->where('posts.category_id', $category)->latest('post_id');
        } else $rawCg = $rawJoin->latest('post_id');

        // total rows for pagination
        if($search==null){
            $raw      = $rawCg;
        } else {
            $raw      = $rawCg->where('title', 'like', '%'.$search.'%');
        }
        //
        $totalRows   = $raw->count();
    	$posts       = $raw->skip(($page-1)*5)->take(5)-> get();
        $latestPost  = $raw->skip(0)->take(6)->get();
        $currentPage = $page;
        $notify      = $this->getNotification();
        $loggedInUser= \Auth::user();
        $paginate    = $this->returnForPagination($search, $category);
        $listCategory= $this->getListCategory();
        if($search == null){
        } else {
            if($totalRows == 0){
                $notify  = "Nothing found";
            } else $notify = "Tìm thấy ". $totalRows." bài viết , my mister!";
            
        }
    	//return $listCategory;
        return view('blog.index', compact('posts', 'latestPost', 'totalRows', 'currentPage', 'notify', 'loggedInUser', 'search', 'category', 'paginate' , 'listCategory'));
    }

    /**
     * 
     */
    private function getListCategory(){
        return Category::all();
    }

    /**
     * [returnForPagination description]
     * @param  [type] $search   [description]
     * @param  [type] $category [description]
     * @return [type]           [description]
     */
    private function returnForPagination($search = null, $category = null){

        $paginate = '';
        if($search == null && $category == null){
            return '';
        }
        $paginate .='?';
        if($search != null){
            $paginate .= 'search='.$search.'&';
        }
        if($category != null){
            $paginate .= 'category='.$category.'&';
        };
        $endChar  = substr($paginate, -1);
        if($endChar == '&'){
            $paginate = substr($paginate, 0, -1);
        }
        return $paginate;
    }
    /**
     * [getNotification description]
     * @return [type] [description]
     */
    private function getNotification(){
        $notification = "";
        if(\Auth::user()!=null){
            $notification .= "Hello ".\Auth::user()->username.", ";
        }
        $notification .= "
            Hiện nay page vẫn còn nhiều thiếu sót.
            Page sẽ tiếp tục cập nhật. Mong các bạn thông cảm.
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
        $user = \Auth::user();
        if(isset($user) && $user->role == "admin"){
            $listCategory= Category::lists('category_name', 'category_id');
            return view('blog.create', compact('listCategory'));
        } else {
            return "You dont have permission to do this";
        }
    }

    /**
     * Store on DB funtion
     * @param  PostRequest
     * @return redirect('index');
     */
    public function store(PostRequest $request){
    	// validate and store on database//
        $post    = new Post([
            'title' => $request->get('title'),
            'content'=> $request->get('content'),
            'user_id'=> $request->get('user_id'),
            'category_id' => $request->get('category_id'),
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
        if($post->user_id== \Auth::user()->user_id){
            $listCategory= Category::lists('category_name', 'category_id');
            return view('blog.edit', compact('post' , 'listCategory'));
        }
        else return "You dont have permission to edit this post!!";
    }

    //update function on DB
    public function update(PostRequest $request, $post_id){
         // some pre-processor
        //$content = preg_replace("/\n/", "<br/>", $request->get('content')); 
    	$post = Post::where('post_id', $post_id)-> firstOrFail();
    	$post->title = $request->get('title');
        $post->category_id = $request->get('category_id');
    	$post->content =  $request->get('content');
    	$post->save();
    	//$post-> update($request->all());
    	return redirect('posts/'.$post_id.'/edit');
    }
}







