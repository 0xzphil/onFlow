@extends('index')
  
@section('container')
    <!-- Start Main Container -->
    <div class="container zerogrid">
    
        <!-- Start Posts Container -->
        <div class="col-full" id="post-container">
        	<div class="wrap-col">
            
            
            
                    	<!-- Start Post Item -->
            <div class="post">
            	<div class="post-margin">
                
                <div class="post-avatar">
                    <div class="avatar-frame"></div>
                    <img alt='' src='http://1.gravatar.com/avatar/16afd22c8bf5c2398b206a76c9316a3c?s=70&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D70&amp;r=G' class='avatar avatar-70 photo' height='70' width='70' />                </div>
                
                <h4>{{$post-> title}}</h4>
                	<ul class="post-status">
                    <li><i class="fa fa-clock-o"></i>{{ $post-> created_at}}</li>
                    <li><i class="fa fa-folder-open-o"></i><a href="#" title="View all posts in Illustration" rel="category">Illustration</a></li>
                    <li><i class="fa fa-comment-o"></i>No Comments</li>
                    </ul>
                </div>
                
           
            {!!Regex::youtube($post->content, null, null, 'iframepost')!!}

            <div class="post-margin">
            <!-- Content of a blog post -->
            {!!  nl2br(Regex::bbCode($post-> content)) !!}
            </div>
            
			<!-- Post Tags -->
            <div class="post-margin">
            <div class="post-tags">
            <span class="fa-stack fa-lg">
               <i class="fa fa-circle fa-stack-2x"></i>
               <i class="fa fa-tags fa-stack-1x fa-inverse"></i>
            </span>
            <a href="#" rel="tag">Color Schemes</a>, 
            <a href="#" rel="tag">Gallery</a>, 
            <a href="#" rel="tag">Images</a>, 
            <a href="#" rel="tag">Light</a>, 
            <a href="#" rel="tag">Post</a>, 
            <a href="#" rel="tag">Slider</a>, 
            <a href="#" rel="tag">Standard</a>
            </div>
            <div class="clear"></div>            <!-- End Post Tags -->
            
            </div>
            
            <!-- Post Social -->
            <ul class="post-social">
            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        
             <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        
             <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
            
            <li><a href="#" target="_blank">
            <i class="fa fa-linkedin"></i></a></li>
            </ul>
            <!-- End Post Social -->
            <div class="clear"></div>
            </div>
            <!-- End Post Item -->
            
            
                        
<!--           
<div class="post">
    <div class="post-margin">
        
    <!-- Start Related Item -->
    <!--
    <div class="related-posts">
    
    <div class="post-avatar">
    <div class="avatar-frame"></div>
    <img width="70" height="70" src="img/one-more-beer-70x70.png" class="attachment-post-widget #"  />    </div>
    
    <div class="related-posts-aligned">            
	<h6><a href="#">One More Beer</a></h6>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet auctor ligula. Donec eu</p>
    <div class="clear"></div>
    </div>
    
    <div class="clear"></div>
    </div>
    <!-- End Related Item -->
    
        
    <!-- Start Related Item -->
    <!--
    <div class="related-posts">
    
    <div class="post-avatar">
    <div class="avatar-frame"></div>
    <img width="70" height="70" src="img/Port_Harbor1-70x70.jpg" class="attachment-post-widget #"  />    </div>
    
    <div class="related-posts-aligned">            
	<h6><a href="#">Port Harbor</a></h6>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet auctor ligula. Donec eu</p>
    <div class="clear"></div>
    </div>
    
    <div class="clear"></div>
    </div>
    <!-- End Related Item -->
    
        
    <!-- Start Related Item -->
    <!--
    <div class="related-posts">
    
    <div class="post-avatar">
    <div class="avatar-frame"></div>
    <img width="70" height="70" src="img/Timothy-J-Reynolds-2560x14401-70x70.jpg" class="attachment-post-widget #"  />    </div>
    
    <div class="related-posts-aligned">            
	<h6><a href="#">Underground Volcano</a></h6>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet auctor ligula. Donec eu</p>
    <div class="clear"></div>
    </div>
    
    <div class="clear"></div>
    </div>
    <!-- End Related Item -->
    
        <!--<div class="clear"></div> -->
    <!--</div>
</div>      -->      
            
			<!-- Comments -->
            <!--
            <div class="comment-container">
            
            <h6 id="comment-header">No Comments, Be The First!</h6>
            
            <ul class="comment-list">
                        </ul>
            
            
            <!-- Comment Form -->
            <!--
            <div class="commen-form">
            								<div id="respond" class="comment-respond">
				<h3 id="reply-title" class="comment-reply-title"> <small><a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Cancel Reply</a></small></h3>
									<form action="http://demo.themesmarts.com/euclid/wp-comments-post.php" method="post" id="comment-form-container" class="comment-form">
																			<p class="comment-notes"></p>							<input type="text" name="author" placeholder="Enter Name" class="comment-name"  />
<input type="text" name="email" placeholder="Enter Email" class="comment-email"  />
<input type="text" name="url" placeholder="Enter URL" class="comment-url" />
												<textarea name="comment" placeholder="Enter Message Here" class="comment-text-area"></textarea>						<p class="form-allowed-tags"></p>						<p class="form-submit">
							<input name="submit" type="submit" id="comment-submit" value="Send Comment" />
							<input type='hidden' name='comment_post_ID' value='49' id='comment_post_ID' />
<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
						</p>
											</form>
							</div><!-- #respond -->
                            <!--
			            <div class="clear"></div>
            </form>
            </div>
            <!-- End Comment Form -->
            <!--
            </div>
            <!-- End Comments -->            
            
            
        <div class="clear"></div>
		</div>
        </div>
        <!-- End Posts Container -->
		
        <!-- Start Sidebar -->
		<div class="col-full">
        <div class="wrap-col">
			



            
<!--

<div class="widget-container"><form role="search" method="get" id="searchform" class="searchform" action="http://demo.themesmarts.com/euclid/">
                <div>
                    <label class="screen-reader-text" for="s">Search for:</label>
                    <input type="text" value="" name="s" id="s" />
                    <input type="submit" id="searchsubmit" value="Search" />
                </div>
            </form><div class="clear"></div></div>



<div class="widget-container"><h6 class="widget-title">Categories</h6>      <ul>
            <li class="cat-item cat-item-5"><a href="#" title="View all posts filed under Apps">Apps</a>
            </li>
            <li class="cat-item cat-item-3"><a href="#" title="View all posts filed under Illustration">Illustration</a>
            </li>
            <li class="cat-item cat-item-4"><a href="#" title="View all posts filed under Logo">Logo</a>
            </li>
        </ul>



<div class="clear"></div></div><div class="widget-container"><h6 class="widget-title">Latest Posts</h6>	<!-- Start Widget -->
                <!--<ul class="widget-recent-posts">
                                
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
                <div class="clear"></div></div>
   <!-- End Widget -->





<!-- Tag cloud -->
<div class="widget-container">
<h6 class="widget-title">Tag Cloud</h6>
<div class="tagcloud"><a href='#' class='tag-link-12' title='1 topic' style='font-size: 8pt;'>Color Schemes</a>
<a href='#gallery' class='tag-link-6' title='1 topic' style='font-size: 8pt;'>Gallery</a>
<a href='#images' class='tag-link-8' title='1 topic' style='font-size: 8pt;'>Images</a>
<a href='#light' class='tag-link-11' title='1 topic' style='font-size: 8pt;'>Light</a>
<a href='#post' class='tag-link-7' title='1 topic' style='font-size: 8pt;'>Post</a>
<a href='#slider' class='tag-link-9' title='1 topic' style='font-size: 8pt;'>Slider</a>
<a href='#standard' class='tag-link-10' title='1 topic' style='font-size: 8pt;'>Standard</a></div>
<div class="clear"></div></div> 
    <div class="clear"></div>
</div></div>        <!-- End Sidebar -->
    
    <div class="clear"></div>
    </div>
	<!-- End Main Container -->

    
@stop