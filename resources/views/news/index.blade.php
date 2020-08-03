@extends('layouts.layout')
@section('content')
<div id="content" class="site-content">
    <div class="vmagazine-breadcrumb-wrapper ">
       <div class="vmagazine-bread-home">
          <div class="vmagazine-bread-wrapp vmagazine-container">
              <div class="breadcrumb-title">
             </div>
        <div class="vmagazine-breadcrumb">
            <nav role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                <ul class="trail-items">
                    <li class="trail-item trail-begin"><a href="/" rel="home"> <span>Home</span></a> </li>
                    <li class="trail-item"> <a href=""> <span> {{ $category_name($news->sub_category)}} </span></a> </li>
                    <li class="trail-item trail-end current"><span> {{ $news->title}} </span> </li>
                </ul>
              </nav>
          </div>
        </div>
     </div>

</div>
<div class="vmagazine-container container-wrapp-inner">
<div id="primary" class="content-area post-single-layout1 vmagazine-content">
<main id="main" class="site-main" role="main">
<article id="post-496" class="post-496 post type-post status-publish format-standard has-post-thumbnail hentry category-fun category-sports tag-fashion tag-trending">

<span class="cat-links">
    <a href="#" class="cat-53" rel="category tag">{{ $category_name($news->category)}}</a>
    <a href="#" class="cat-30" rel="category tag">{{ $category_name($news->sub_category)}}</a>
</span>
    <header class="entry-header">
        <h1 class="entry-title">  {{ $news->title}}  </h1>
    </header><!-- .entry-header -->

  <div class="entry-meta clearfix">
     <span class="posted-on"><i class="fa fa-clock-o"></i>{{ date('M j, Y', strtotime($news->updated)) }}</span>
     <span class="comments"><i class="fa fa-comments"></i>{{ $news->comment }}</span>
     <span class="post-view"><i class="fa fa-eye"></i>{{ $news->read }}</span>
  </div><!-- .entry-meta -->
<div class="entry-thumb">
    <img width="1800" height="750" src="/vnews/wp-content/uploads/sites/2/2018/04/{{ $news->image}}" class="attachment-vmagazine-single-large size-vmagazine-single-large wp-post-image" alt="" srcset="" sizes="(max-width: 1800px) 100vw, 1800px" /></div>
<div class="entry-content clearfix">
  <div id="idTextPanel" class="jqDnR">
      {{ $news->body }}
  </div>
</div>
    <div class="entry-content clearfix">
      <div class="post-tag">
            {{-- <span class="tag-title">Related tags : </span>
             <span class="tags-links clearfix">
             <a href="../tag/fashion/index.html" rel="tag">fashion</a>
             <a href="../tag/trending/index.html" rel="tag">trending</a>
            </span> --}}
       </div>
        <div class="vmagazine-author-metabox clearfix">
        <h4 class="box-title">   <span class="title-bg">  About Author </span> </h4>

        <div class="vmag-author-wrapper">
      <div class="author-avatar">
        <a class="author-image" href="../author/access/index.html">
            <img alt='' src='https://secure.gravatar.com/avatar/aa496834096bde1d0db4979ea69063ae?s=132&amp;d=mm&amp;r=g' class='avatar avatar-132 photo' height='132' width='132' />  </a>
       </div><!-- .author-avatar -->
    <div class="author-desc-wrapper">
    <div class="author-desc-inner">
        <div class="author-desc-first-wrapper">
            <a class="author-title" href="../author/access/index.html">Access</a>
              <span class="author-location"></span>
        </div>
       <div class="author-social">
             <span class="social-icon-wrap"><a href="#" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></span>
             <span class="social-icon-wrap"><a href="#" target="_blank" title="Google+"><i class="fa fa-google-plus"></i></a></span>
             <span class="social-icon-wrap"><a href="#" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></span>
             <span class="social-icon-wrap"><a href="#" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></span>
             <span class="social-icon-wrap"><a href="#" target="_blank" title="Pinterest"><i class="fa fa-pinterest"></i></a></span>
       </div><!-- .author-social -->
   </div>
    <div class="author-description"> About an author. </div>
     </div><!-- .author-desc-wrapper-->
    </div>
 </div><!--vmagazine-author-metabox-->

    <!----------------------Previous Article--------------------->
    <nav class="navigation post-navigation" role="navigation" aria-label="Posts">
       <h2 class="screen-reader-text">Post navigation</h2>
            <div class="nav-links">
                <div class="nav-previous">
                    <a href="{{ route('news.index', $news->id -1)}}" rel="prev">
                    <span> Previous Article</span>
                    <p> {{ $previous_news }} </p>
                </a>
            </div>
      </div>
    </nav>
</div><!-- .entry-content -->

    <div class="vmagazine-related-wrapper">
      <h4 class="related-title">
        <span class="title-bg">Related Articles</span>
    </h4>
    <div class="related-posts-wrapper clearfix">
        @foreach($related_news as $news)
        <div class="single-post">
            <div class="post-thumb">
                <a href="">
                 <img src="/vnews/wp-content/uploads/sites/2/2018/04/{{ $news->image}}" alt="" title="" />
                 </a>
                <span class="cat-links"><a href="#" class="cat-30" rel="category tag"> {{ $category_name($news->sub_category) }}</a></span>                            </div>
             <div class="related-content-wrapper">
              <div class="post-meta">
                  <span class="posted-on"><i class="fa fa-clock-o"></i>{{ date('M j, Y', strtotime($news->updated)) }}</span>
                  <span class="comments"><i class="fa fa-comments"></i>{{ $news->comment }}</span>
                  <span class="post-view"><i class="fa fa-eye"></i>{{ $news->read }}</span>
             </div>
               <h3 class="small-font"><a href="">{{ $news->title }} </a></h3>
                 <div class="post-contents">  {{ $news->lead }} </div>
                 <a href="{{ route('news.index', $news->id) }}" class="vmagazine-related-more"> Read More </a>
             </div>
       </div>
       @endforeach
    </div>
   </div>

<div id="respond" class="comment-respond">
  <h4 id="reply-title" class="comment-reply-title">
       <span class="title-bg">Comment here
       <small> <a rel="nofollow" id="cancel-comment-reply-link" href="" style="display:none;">Cancel reply</a></small>
      </span>
  </h4>
       <p class="must-log-in">You must be <a href="">logged in</a> to post a comment.</p>
	</div>
   </article>
</main>
</div>

<aside id="secondary" class="widget-area vmagazine-sidebar" role="complementary">
<div class="theiaStickySidebar">
    <div id="vmagazine_recent_post-3" class="widget widget_vmagazine_recent_post">
       <h4 class="block-title"><span class="title-bg"> Recent News </span></h4>
        <div class="vmagazine-rec-posts recent-post-widget block_layout_1">
           @foreach ($recent_news as $news)
            <div class="recent-posts-content wow fadeInUp">
               <div class="image-recent-post post-thumb">
                  <a href="{{route('news.index', $news->id)}}" class="thumb-zoom">
                    <img class="lazy" src="/vnews/wp-content/uploads/sites/2/2018/04/{{ $news->image}}" alt="image" />
                    <div class="image-overlay"></div>
                  </a>
               </div>
               <div class="recent-post-content">
                 <span class="cat-links"><a href="#"> {{ $category_name( $news->sub_category ) }} </a></span>
                 <a href="index.html"> {{ $news->title }} </a>
              </div>
           </div>
          @endforeach
      </div>
        {{-- <div id="vmagazine_timeline_posts_list-2" class="widget vmagazine_timeline_posts_list">
           <div class="vmagazine-timeline-post block-post-wrapper wow fadeInUp" data-wow-duration="1s">
               <h4 class="block-title"><span class="title-bg">   Post Timeline    </span></h4>
                 <div class="timeline-post-wrapper">
                    <div class="single-post">
                            <div class="post-date">
                                <div class="blog-date">
                                    <div class="blog-date-inner">
                                    <span class="posted-day">12</span>
                                    <span class="posted-month">Apr</span>
                                    <span class="posted-year">2018</span>
                                </div>
                            </div>
                        </div><!-- .post-thumb -->
                        <div class="post-caption clearfix">
                                <div class="captions-wrapper">
                                    <h3 class="small-font">
                                        <a href="index.html"> Revealed: Blair government&#8217;s &#8216;inexcusable&#8217; PAYMENTS  </a>
                                    </h3>
                                    <div class="post-meta">
                                    <span class="comments-count"><i class="fa fa-comment-o"></i><a href="index.html#comments">3,941</a></span>
                                    <span class="post-view"><i class="fa fa-eye"></i>505285</span>
                                    </div><!-- .post-meta -->
                                </div>
                            </div><!-- .post-caption -->
                    </div><!-- .single-post -->
                </div>
           </div><!-- .block-post-wrapper -->
         </div>
      </div> --}}
    </aside>
  </div>
</div>
@endsection
