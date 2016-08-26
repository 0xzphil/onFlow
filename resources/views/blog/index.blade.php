@extends('index')
	
@section('container')
    
    <!-- Start Featured Carousel -->
    <!-- @if(!isset($search))
    <div class="container zerogrid">
        <div class="list_carousel">
        <ul id="featured-posts">
            @for($iter =0; $iter< 6; $iter++)
                <?php 
                //if(!isset($latestPost[$iter]))
                //    break;
                ?>
                @if($iter ==2 || $iter ==5)
                    <li class="last carousel-item">
                @else 
                    <li class="first carousel-item">
                @endif
                <div class="post-margin">
                <h6><a href="{{ url('posts',  $latestPost[$iter]->post_id)}}">{{  Regex::shortContent($latestPost[$iter]->title, 17) }}</a></h6>
                <span><i class="fa fa-clock-o"></i>{{ $latestPost[$iter]->created_at}}</span>
            </div>
                    
                         <div class="featured-image">
                         <a href="{{ url('posts',  $latestPost[$iter]->post_id)}}"> 
                            @if( Regex::youtube($latestPost[$iter]->content)!= null)
                                {!!Regex::youtube($latestPost[$iter]->content, 290, 130)!!}
                            @else 
                                <img alt='' width="290" height="130" src=' {{ URL::asset("img/tumblr_". ($iter+1). ".png")}}'  /> 
                            @endif
                        </a>
                           <div class="post-icon">

                    <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-picture-o fa-stack-1x fa-inverse"></i>
                    </span>

                </div>
            </div> 
                        
            <div class="post-margin">
            <br/><br/>
            <div class="clear"></div>
            <div class="clear"></div>
            <p>
            {{ Regex::shortContent($latestPost[$iter]->content, 45)}}
            </p>
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
    @endif -->
    <!-- Start Featured Carousel -->
    
    	
    
    <!-- Start Main Container -->
    <!-- temp.php -->
    <!-- End Widget -->
<div class="clear"></div></div>    <div class="clear"></div>
</div></div>        <!-- End Sidebar -->
    
    <div class="clear"></div>
    </div>
	<!-- End Main Container -->
	


@stop