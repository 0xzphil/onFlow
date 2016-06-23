@extends('index')
	
@section('container')
    
    <!-- Start Featured Carousel -->
    <div class="container zerogrid">
        <div class="list_carousel">
        <ul id="featured-posts">
        
        
                <li class="first carousel-item">
            <div class="post-margin">
                <h6><a href="#">The Lighthouse Effect</a></h6>
                <span><i class="fa fa-clock-o"></i> December 13, 2013</span>
            </div>
            
                        <div class="featured-image">
            <img width="290" height="130" src="img/HighRes-290x130.jpg"  />                <div class="post-icon">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-picture-o fa-stack-1x fa-inverse"></i>                    </span>
                </div>
            </div>
                        
            <div class="post-margin">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet auctor ligula. Donec eu</p>
            </div>
        </li>
                <li class="first carousel-item">
            <div class="post-margin">
                <h6><a href="#">One More Beer</a></h6>
                <span><i class="fa fa-clock-o"></i> December 13, 2013</span>
            </div>
            
                        <div class="featured-image">
            <img width="290" height="130" src="img/one-more-beer-290x130.png"  />                <div class="post-icon">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-play-circle-o fa-stack-1x fa-inverse"></i>                    </span>
                </div>
            </div>
                        
            <div class="post-margin">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet auctor ligula. Donec eu</p>
            </div>
        </li>
                <li class="last carousel-item">
            <div class="post-margin">
                <h6><a href="#">Port Harbor</a></h6>
                <span><i class="fa fa-clock-o"></i> December 13, 2013</span>
            </div>
            
                        <div class="featured-image">
            <img width="290" height="130" src="img/Port_Harbor1-290x130.jpg"  />                <div class="post-icon">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>                    </span>
                </div>
            </div>
                        
            <div class="post-margin">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet auctor ligula. Donec eu</p>
            </div>
        </li>
                <li class="first carousel-item">
            <div class="post-margin">
                <h6><a href="#">Underground Volcano</a></h6>
                <span><i class="fa fa-clock-o"></i> December 13, 2013</span>
            </div>
            
                        <div class="featured-image">
            <img width="290" height="130" src="img/Timothy-J-Reynolds-2560x14401-290x130.jpg"  />                <div class="post-icon">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>                    </span>
                </div>
            </div>
                        
            <div class="post-margin">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet auctor ligula. Donec eu</p>
            </div>
        </li>
                <li class="first carousel-item">
            <div class="post-margin">
                <h6><a href="#">We Are not alone</a></h6>
                <span><i class="fa fa-clock-o"></i> December 13, 2013</span>
            </div>
            
                        <div class="featured-image">
            <img width="290" height="130" src="img/UFO1-290x130.jpg"  />                <div class="post-icon">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>                    </span>
                </div>
            </div>
                        
            <div class="post-margin">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet auctor ligula. Donec eu</p>
            </div>
        </li>
                <li class="last carousel-item">
            <div class="post-margin">
                <h6><a href="#">Bearing water falls</a></h6>
                <span><i class="fa fa-clock-o"></i> December 13, 2013</span>
            </div>
            
                        <div class="featured-image">
            <img width="290" height="130" src="img/Diamantina-Full_Landscape-290x130.jpg"  />                <div class="post-icon">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>                    </span>
                </div>
            </div>
                       
            <div class="post-margin">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet auctor ligula. Donec eu</p>
            </div>
        </li>
                
        </ul>
        
        <div class="clear"></div>
            
            <div class="carousel-controls">
                <a id="prev2" class="prev" href="#"><i class="fa fa-angle-left"></i></a>
                <a id="next2" class="next" href="#"><i class="fa fa-angle-right"></i></a>
              <div class="clear"></div>
            </div>
      </div>
    </div>
    <!-- Start Featured Carousel -->
    
    	
    
    <!-- Start Main Container -->
    <div class="container zerogrid">
    
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
                    <img alt='' src='http://1.gravatar.com/avatar/16afd22c8bf5c2398b206a76c9316a3c?s=70&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D70&amp;r=G' class='avatar avatar-70 photo' height='70' width='70' />                </div>
                
                <h4 class="post-title"><a href= '{{ url('posts',  $post-> post_id)}}'>
                    {{ $post-> title}} 
                </a></h4>
                    <ul class="post-status">
                    <li><i class="fa fa-clock-o"></i> {{ $post-> created_at }}</li>
                    <li><i class="fa fa-folder-open-o"></i><a href="#" title="View all posts in Illustration" rel="category">Illustration</a></li>
                    <li><i class="fa fa-comment-o"></i>No Comments</li>
                    </ul>
                    <div class="clear"></div>
                </div>
                
                    
                    {!!Regex::frameYoutube($post->content)!!}
                    <!--<img src="img/Port_Harbor1-610x350.jpg" class="attachment-post-standard "  />  -->

                    
                                
            <div class="post-margin">
            <p>
            {{ $post-> content}}
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
            <a href="{{ url('posts',  $post-> post_id)}}" class="readmore">Read More <i class="fa fa-arrow-circle-o-right"></i></a>
            </li>
            </ul>
            
            <div class="clear"></div>
            </div>
            <!-- End Post Item -->
            

            @endforeach
                 
        	

            
                        
        <!-- Start Pagination -->
            <div class="spacing-20"></div><ul class="pagination"><li class='current'><a href=''>1</a></li><li><a href='http://demo.themesmarts.com/euclid/?paged=2'>2</a></li><li><a href='http://demo.themesmarts.com/euclid/?paged=3'>3</a></li><li><a href='http://demo.themesmarts.com/euclid/?paged=4'>4</a></li></ul>
        <!-- End Pagination -->
            
        <div class="clear"></div>
		</div>
        </div>
        <!-- End Posts Container -->
		
        <!-- Start Sidebar -->
    	<div class="col-1-3">
		<div class="wrap-col">
	    	<div class="widget-container"><form role="search" method="get" id="searchform" class="searchform" action="http://demo.themesmarts.com/euclid/">
				<div>
					<label class="screen-reader-text" for="s">Search for:</label>
					<input type="text" value="" name="s" id="s" />
					<input type="submit" id="searchsubmit" value="Search" />
				</div>
			</form><div class="clear"></div></div><div class="widget-container"><h6 class="widget-title">Categories</h6>		<ul>
	<li class="cat-item cat-item-5"><a href="#" title="View all posts filed under Apps">Apps</a>
</li>
	<li class="cat-item cat-item-3"><a href="#" title="View all posts filed under Illustration">Illustration</a>
</li>
	<li class="cat-item cat-item-4"><a href="#" title="View all posts filed under Logo">Logo</a>
</li>
		</ul>
<div class="clear"></div></div><div class="widget-container"><h6 class="widget-title">Latest Posts</h6>	<!-- Start Widget -->
                <ul class="widget-recent-posts">
                                
                <li>
                <div class="post-image">
                <div class="post-mask"></div>
                <img width="70" height="70" src="img/HighRes-70x70.jpg" class="attachment-post-widget #"  />                </div>
                
                <h6><a href="#">The Lighthouse Effect</a></h6>
                <span>November 02, 2013</span>
                <div class="clear"></div>
                </li> 
                
                                
                <li>
                <div class="post-image">
                <div class="post-mask"></div>
                <img width="70" height="70" src="img/one-more-beer-70x70.png" class="attachment-post-widget #"  />                </div>
                
                <h6><a href="#">One More Beer</a></h6>
                <span>November 02, 2013</span>
                <div class="clear"></div>
                </li> 
                
                                
                <li>
                <div class="post-image">
                <div class="post-mask"></div>
                <img width="70" height="70" src="img/Port_Harbor1-70x70.jpg" class="attachment-post-widget #"  />                </div>
                
                <h6><a href="#">Port Harbor</a></h6>
                <span>November 02, 2013</span>
                <div class="clear"></div>
                </li> 
                
                                
                <li>
                <div class="post-image">
                <div class="post-mask"></div>
                <img width="70" height="70" src="img/Timothy-J-Reynolds-2560x14401-70x70.jpg" class="attachment-post-widget #"  />                </div>
                
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