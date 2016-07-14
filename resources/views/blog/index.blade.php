@extends('index')
	
@section('container')
    
    <!-- Start Featured Carousel -->
    @if(!isset($search))
    <div class="container zerogrid">
        <div class="list_carousel">
        <ul id="featured-posts">
            @for($iter =0; $iter< 6; $iter++)
                <?php 
                if(!isset($latestPost[$iter]))
                    break;
                ?>
                @if($iter ==2 || $iter ==5)
                    <li class="last carousel-item">
                @else 
                    <li class="first carousel-item">
                @endif
                <div class="post-margin">
                <h6><a href="#">{{ $latestPost[$iter]->title }}</a></h6>
                <span><i class="fa fa-clock-o"></i>{{ $latestPost[$iter]->created_at}}</span>
            </div>
                    
                         <div class="featured-image">
            <img width="290" height="130" src=' {{ URL::asset("img/tumblr_". ($iter+1). ".png")}}'  />                <div class="post-icon">
                    <span class="fa-stack fa-lg">                   </span>
                </div>
            </div> 
                        
            <div class="post-margin">
                <p>{{ Regex::shortContent($latestPost[$iter]->title, 100)}}</p>
            </div>
        </li>

            @endfor
        
                
        </ul>
        
        <div class="clear"></div>
            
            <div class="carousel-controls">
                <a id="prev2" class="prev" href="#"><i class="fa fa-angle-left"></i></a>
                <a id="next2" class="next" href="#"><i class="fa fa-angle-right"></i></a>
              <div class="clear"></div>
            </div>
      </div>
    </div>
    @endif
    <!-- Start Featured Carousel -->
    
    	
    
    <!-- Start Main Container -->
    <div class="container zerogrid">
        <div id="header-nav-container"></div>
        <div class="wrap-col">
            <div class="post">
                <div class="post-margin">
                    <h6>Page Keeper</h6><br/>
                    <p>
                    {!! $notify !!}
                    </p>
                </div> 
                
            </div>
        </div>

        <!-- Start Posts Container -->
        <div class="col-2-3" id="post-container">

 			<div class="wrap-col">
        	<!-- Start Post Item -->


            @foreach($posts as $post)

            <div class="post">

                <div class="post-margin">
                
                <div class="post-avatar">
                    <div class="avatar-frame"></div>
                    <!-- Avatar -->
                    <img alt='' src='{{URL::asset('img/logodefault.png')}}' class='avatar avatar-70 photo' height='70' width='70' />                </div>
                <div class="post-title">
                <h4><a href= '{{ url('posts',  $post-> post_id)}}'>
                    {{ $post-> title}} 
                </a></h4>
                </div>
                    <ul class="post-status">
                    <li><i class="fa fa-clock-o"></i> {{ $post-> created_at }}</li>
                    <li><i class="fa fa-folder-open-o"></i>
                    <a href="#" title="View all posts in Illustration" rel="category">Illustration</a></li>
                    <li><i class="fa fa-comment-o"></i>No Comments</li>
                    </ul>
                    <div class="clear"></div>
                </div>
                
                    
                    {!!Regex::frameYoutube($post->content)!!}
                    <!--<img src="img/Port_Harbor1-610x350.jpg" class="attachment-post-standard "  />  -->

                    
                                
            <div class="post-margin">
            <p>
                {!!Regex::shortContent($post-> content)!!}
            </p>
            </div>
            
             <ul class="post-social">
             <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ url('posts',  $post-> post_id)}}" target="_blank">
             <i id="shareFacebook" class="fa fa-facebook"></i></a>

             </li>

                        
             <li>
             <a href="http://www.twitter.com/share?url={{ url('posts',  $post-> post_id)}}" target="_blank">
             <i class="fa fa-twitter"></i></a>
             </li>
                        
             <li>
             <a href="https://plus.google.com/share?url={{ url('posts',  $post-> post_id)}}" target="_blank">
             <i class="fa fa-google-plus"></i></a>
             </li>
            
            <li>
            <a href="https://www.linkedin.com/cws/share?url={{ url('posts',  $post-> post_id)}}" target="_blank">
            <i class="fa fa-linkedin"></i></a>
            </li>
            
            <li>
            <a href="{{ url('posts',  $post-> post_id)}}" class="readmore">Đọc thêm <i class="fa fa-arrow-circle-o-right"></i></a>
            </li>
            </ul>
            
            <div class="clear"></div>
            </div>
            <!-- End Post Item -->
            

            @endforeach
                 
        	

            
                        
        <!-- Start Pagination -->
            <div class="spacing-20"></div><ul class="pagination">
            @for($pagePagi = 1; $pagePagi< $totalRows/5 +1; $pagePagi++)
                @if($pagePagi == $currentPage)
                    <li class='current'><a href="{{url('index', $pagePagi, isset($search)?$search:null)}}">{{$pagePagi}}</a></li>
                @else
                    <li><a href="{{url('index', $pagePagi)}}">{{$pagePagi}}</a></li>
                @endif
            @endfor
            </ul>

            
        <!-- End Pagination -->
            
        <div class="clear"></div>
		</div>
        </div>
        <!-- End Posts Container -->
		
        <!-- Start Sidebar -->
    	<div class="col-1-3">
		<div class="wrap-col">


	    	<div class="widget-container">
            {{ Form::open(['method'=>'GET',  'url'=> 'index/1', 'class' =>'searchform' ]) }}
                <div>
                {{ Form::label('Search for:', null,  ['for'=> 's', 'class' =>'screen-reader-text']) }}

                {{ Form::text('search' , null, ['id'=>'s']) }}

                {{ Form::submit('Tìm kiếm', ['id'=>'searchsubmit']) }}
                </div>
            {{ Form::close() }}
            <div class="clear"></div>


            </div>




            <div class="widget-container"><h6 class="widget-title">Danh mục</h6>		<ul>
	<li class="cat-item cat-item-5"><a href="#" title="View all posts filed under Apps">Wakfu</a>
</li>
	<li class="cat-item cat-item-3"><a href="#" title="View all posts filed under Illustration">Tree of Savior</a>
</li>
	<li class="cat-item cat-item-4"><a href="#" title="View all posts filed under Logo">Chia sẻ</a>
</li>
		</ul>
<div class="clear"></div></div><div class="widget-container"><h6 class="widget-title">Latest Posts</h6>	<!-- Start Widget -->
                <ul class="widget-recent-posts">
                                
                <li>
                <div class="post-image">
                <div class="post-mask"></div>
                <img width="70" height="70" src=" {{ URL::asset('img/HighRes-70x70.jpg')}}" class="attachment-post-widget #"  />                </div>
                
                <h6><a href="#">The Lighthouse Effect</a></h6>
                <span>November 02, 2013</span>
                <div class="clear"></div>
                </li> 
                
                                
                <li>
                <div class="post-image">
                <div class="post-mask"></div>
                <img width="70" height="70" src=" {{ URL::asset('img/one-more-beer-70x70.png')}}" class="attachment-post-widget #"  />                </div>
                
                <h6><a href="#">One More Beer</a></h6>
                <span>November 02, 2013</span>
                <div class="clear"></div>
                </li> 
                
                                
                <li>
                <div class="post-image">
                <div class="post-mask"></div>
                <img width="70" height="70" src=" {{ URL::asset('img/Port_Harbor1-70x70.jpg')}}" class="attachment-post-widget #"  />                </div>
                
                <h6><a href="#">Port Harbor</a></h6>
                <span>November 02, 2013</span>
                <div class="clear"></div>
                </li> 
                
                                
                <li>
                <div class="post-image">
                <div class="post-mask"></div>
                <img width="70" height="70" src=" {{ URL::asset('img/Timothy-J-Reynolds-2560x14401-70x70.jpg')}}" class="attachment-post-widget #"  />                </div>
                
                <h6><a href="#">Underground Volcano</a></h6>
                <span>November 02, 2013</span>
                <div class="clear"></div>
                </li> 
                
                 
                </ul>
   <!-- End Widget -->
<div class="clear"></div></div>    <div class="clear"></div>
</div></div>        <!-- End Sidebar -->
    
    <div class="clear"></div>
    </div>
	<!-- End Main Container -->
	


@stop