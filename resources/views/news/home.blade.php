@extends('layouts.layout')
@section('content')
<div id="content" class="site-content">
    <div class="vmagazine-home-wrapp">
        <div id="pl-38"  class="panel-layout" >
            <div id="pg-38-0"  class="panel-grid panel-has-style" >
                <div class="siteorigin-panels-stretch panel-row-style panel-row-style-for-38-0" data-stretch-type="full-stretched" >
                    <div id="pgc-38-0-0"  class="panel-grid-cell" >
                        <div id="panel-38-0-0-0" class="so-panel widget widget_vmagazine_tab_posts_list vmagazine_tab_posts_list panel-first-child panel-last-child" data-index="0">
                            <div class="panel-widget-style panel-widget-style-for-38-0-0-0">
                                <div class="vmagazine-fullwid-slider block-post-wrapper block_layout_2" data-count="10">
                                    <!----------------------- Main news ----------------------->
                                    <div class="slick-wrap sl-before-load">
                                        @foreach($main_news as $news)
                                        <div class="single-post clearfix">
                                            <div class="post-thumb">
                                                <img class="lazy" src="/vnews/wp-content/uploads/sites/2/2018/04/{{ $news->image}}" alt="" title="" />
                                                <div class="image-overlay"></div>
                                            </div><!-- .post-thumb -->
                                            <div class="post-content-wrapper clearfix">
                                                <span class="cat-links">
                                                <a href="#" class="cat-53" rel="category tag">{{ $category_name($news->category) }}</a>
                                                @if( $news->sub_category )
                                                <a href="#" class="cat-30" rel="category tag" tabindex="0">{{  $category_name( $news->sub_category ) }}</a>
                                                @endif
                                                </span>
                                                <div class="post-meta clearfix">
                                                    <span class="posted-on"><i class="fa fa-clock-o"></i>{{ date('M j, Y', strtotime($news->updated)) }}</span>
                                                    <span class="comments"><i class="fa fa-comments"></i> {{ $news->comment }} </span>
                                                    <span class="post-view"><i class="fa fa-eye"></i> {{ $news->read }} </span>
                                                </div><!-- .post-meta -->
                                                <h3 class="extra-large-font">
                                                <a href="{{route('news.index', $news->id) }}">
                                                        {{$news->title}}
                                                </a>
                                                </h3>
                                            </div><!-- .post-content-wrapper -->

                                        </div>
                                       @endforeach
                                    </div>

                                    <div class="vmagazine-container">
                                        <div class="posts-tab-wrap sl-before-load">
                                            @foreach($main_news as $news)
                                            <div class="single-post clearfix">
                                                <div class="slider-nav-inner-wrapper">
                                                    <div class="post-thumb">
                                                        <a href="javascript:void(0)" class="thumb-zoom">
                                                            <img class="lazy" src="/vnews/wp-content/uploads/sites/2/2018/04/{{ $news->image}}" alt="" title=""/>
                                                            <div class="image-overlay"></div>
                                                        </a>
                                                    </div><!-- .post-thumb -->
                                                    <div class="post-caption-wrapper">
                                                        <span class="posted-on"><i class="fa fa-clock-o"></i>{{date('M j, Y', strtotime($news->updated))}}</span>
                                                        <h3 class="large-font"> {{ $news->title }} </h3>
                                                    </div><!-- .post-caption-wrapper -->
                                                </div><!-- .slider-nav-inner-wrapper -->
                                            </div>
                                           @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="pg-38-1"  class="panel-grid panel-has-style" >
                <div class="panel-row-style panel-row-style-for-38-1" >
                    <div id="pgc-38-1-0"  class="panel-grid-cell" >
                        <div id="panel-38-1-0-0" class="so-panel widget widget_vmagazine_block_posts_column vmagazine_block_posts_column panel-first-child panel-last-child" data-index="1"><div class="panel-widget-style panel-widget-style-for-38-1-0-0">        <div class="wrapper-vmagazine-post-col block_layout_3">
                                    <h4 class="block-title"><span class="title-bg"> Recent News  </span></h4>
                                    <div class="vmagazine-post-col block-post-wrapper block_layout_3 wow zoomIn" data-wow-duration="1s">
                                        <div class="block-header clearfix">
                                        </div>
                                        <!--------------------------- Recent News ---------------------->
                                        @foreach($recent_news as $news)
                                            <div class="single-post first-post clearfix">
                                                <div class="post-thumb">
                                                    <a class="thumb-zoom" href="" title="">
                                                        <img class="lazy" src="/vnews/wp-content/uploads/sites/2/2018/04/{{ $news->image}}" alt="" title="" />
                                                        <div class="image-overlay"></div>
                                                    </a>
                                                </div>
                                                <div class="content-wrapper">
                                                    <div class="post-meta clearfix">
                                                        <span class="posted-on"><i class="fa fa-clock-o"></i>{{date('M j, Y', strtotime($news->updated))}}</span>
                                                        <span class="comments"><i class="fa fa-comments"></i> {{ $news->comment }}</span>
                                                        <span class="post-view"><i class="fa fa-eye"></i> {{ $news->read }} </span>
                                                    </div><!-- .post-meta -->
                                                    <h3 class="small-font">
                                                        <a href="{{route('news.index', $news->id) }}">
                                                        {{ $news->title }}
                                                        </a>
                                                    </h3>
                                                </div><!-- .content-wrapper -->
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="pgc-38-1-1"  class="panel-grid-cell" >
                        <div id="panel-38-1-1-0" class="so-panel widget widget_vmagazine_block_posts_column vmagazine_block_posts_column panel-first-child" data-index="2">
                            <div class="panel-widget-style panel-widget-style-for-38-1-1-0">
                                <div class="wrapper-vmagazine-post-col block_layout_1">
                                      <h4 class="block-title"><span class="title-bg"> Technology  </span></h4>
                            <div class="vmagazine-post-col block-post-wrapper block_layout_1 wow zoomIn" data-wow-duration="1s">
                                       <!-------------------------Technology---------------------->
                                       @if($category_news(4,10, 1)->first())
                                       <div class="block-header clearfix">
                                           </div>
                                        <div class="single-post first-post clearfix">
                                            <div class="post-thumb">
                                                <a class="thumb-zoom" href="" title="">
                                                    <img class="lazy" src="/vnews/wp-content/uploads/sites/2/2018/04/{{ $category_news(4,10,1)->first()->image}}" alt="" title=""/>
                                                    <div class="image-overlay"></div>
                                                </a>
                                            </div>
                                            <div class="content-wrapper">
                                                <div class="post-meta clearfix">
                                                    <span class="posted-on"><i class="fa fa-clock-o"></i>{{date('M j, Y', strtotime($category_news(4,10, 1)->first()->updated))}}</span>
                                                    <span class="comments"><i class="fa fa-comments"></i>{{$category_news(4,10)->first()->comment}}</span>
                                                    <span class="post-view"><i class="fa fa-eye"></i>{{$category_news(4,10,1)->first()->read}}</span>
                                             </div><!-- .post-meta -->
                                                <h3 class="large-font">
                                                     <a href="{{route('news.index', $news->id) }}">
                                                         {{ $category_news(4,10, 1)->first()->title}}
                                                     </a>
                                                </h3>
                                                 <p> {{$category_news(4,10, 1)->first()->lead}}</p>
                                          </div>
                                        </div>
                                        @endif
                                        @foreach($category_news(4,10, 6) as $news)
                                        @if($loop->index!=0)
                                        <div class="single-post bottom-post clearfix">
                                            <div class="content-wrapper">
                                                <h3 class="small-font">
                                                    <a href="{{route('news.index', $news->id) }}"> {{ $news->title }} </a>
                                                </h3>
                                            </div><!-- .content-wrapper -->
                                        </div>
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="panel-38-1-1-1" class="so-panel widget widget_vmagazine_medium_ad vmagazine_medium_ad" data-index="3">
                            <div class="panel-widget-style panel-widget-style-for-38-1-1-1">
                                <div class="vmagazine-medium-rectangle-ad medium-rectangle-wrapper">
                                    <img class="lazy" data-src="https://demo.accesspressthemes.com/vmagazine/demo-one/wp-content/uploads/sites/2/2018/04/ads.png" alt="Home" title="Home" />
                                </div>
                            </div>
                        </div>
                        <div id="panel-38-1-1-2" class="so-panel widget widget_vmagazine_featured_slider panel-last-child" data-index="4">
                            <div class="panel-widget-style panel-widget-style-for-38-1-1-2">
                                <div class="vmagazine-featured-slider featured-slider-wrapper">
                                    <h4 class="block-title">
                                        <span class="title-bg">Travel</span>
                                    </h4>

                                    <div class="section-wrapper clearfix">
                                        <div class="slider-section slider-fullwidth">
                                            <ul class="featuredSlider cS-hidden">
                                                <!---------------------------- Travel News ---------------------------->
                                                @foreach( $category_news(15,0,4) as $news )
                                                <li class="slide">
                                                    <img src="/vnews/wp-content/uploads/sites/2/2018/04/{{ $news->image}}" alt="image" title="">
                                                    <div class="slider-caption">
                                                        <span class="cat-links">
                                                            <a href="" class="cat-53" rel="category tag">{{ $category_name( $news->category ) }}</a>
                                                            @if( $news->sub_category )
                                                            <a href="#" class="cat-30" rel="category tag" tabindex="0">{{  $category_name( $news->sub_category ) }}</a>
                                                            @endif
                                                           </span>
                                                        <div class="post-meta">
                                                            <span class="posted-on"><i class="fa fa-clock-o"></i> {{ date('M j, Y', strtotime($news->updated)) }} </span>
                                                            <span class="comments"><i class="fa fa-comments"></i>{{ $news->comment }}</span>
                                                            <span class="post-view"><i class="fa fa-eye"></i>{{ $news->read }}</span>
                                                        </div>

                                                        <h3 class="featured large-font">
                                                            <a href="{{route('news.index', $news->id) }}">
                                                             {{ $news->title }}
                                                            </a>
                                                        </h3>
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div><!-- .slider-section -->
                                        <div class="featured-posts">
                                            <ul class="featuredpost">
                                                @foreach( $category_news(15,0,4) as $news )
                                                <li class="f-slide post-thumb">
                                                    <a class="f-slider-img thumb-zoom" href="">
                                                        <img class="lazy" src="/vnews/wp-content/uploads/sites/2/2018/04/{{ $news->image}}" alt="" title="" />
                                                        <div class="image-overlay"></div>
                                                    </a>
                                                    <div class="slider-caption">
                                                        <div class="post-meta">
                                                            <span class="posted-on"><i class="fa fa-clock-o"></i> {{ date('M j, Y', strtotime($news->updated)) }} </span>
                                                            <span class="comments"><i class="fa fa-comments"></i>{{ $news->comment }}</span>
                                                            <span class="post-view"><i class="fa fa-eye"></i>{{ $news->read }}</span>
                                                        </div>
                                                        <h3 class="small-font">
                                                            <a href="{{route('news.index', $news->id) }}">
                                                                {{ $news->title }}
                                                            </a>
                                                        </h3>
                                                        <div class="post-content">
                                                               {{ $news->lead }}
                                                        </div>
                                                    </div>

                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="pgc-38-1-2"  class="panel-grid-cell" >
                        <div id="panel-38-1-2-0" class="block_layout_2 so-panel widget widget_vmagazine_category_posts_slider vmagazine_category_posts_slider panel-first-child" data-index="5">
                            <div class="block_layout_2 panel-widget-style panel-widget-style-for-38-1-2-0">
                                <div class="vmagazine-cat-slider block-post-wrapper block_layout_2 no-bg" >
                                    <h4 class="block-title"><span class="title-bg">Most Viewed </span></h4>
                                    <!-------------------------- Most Viewed ----------------------->
                                    <ul class="widget-cat-slider cS-hidden">
                                        @foreach($most_viewed as $news)
                                        <li class="single-post clearfix">
                                            <div class="post-thumb">
                                                <img src="/vnews/wp-content/uploads/sites/2/2018/04/{{ $news->image}}" alt="image" title="" />
                                            </div>
                                            <div class="post-caption">
                                                <div class="post-meta">
                                                    <span class="posted-on"><i class="fa fa-clock-o"></i>{{ date('M j, Y', strtotime($news->updated)) }}</span>
                                                    <span class="comments"><i class="fa fa-comments"></i>{{ $news->comment }}</span>
                                                    <span class="post-view"><i class="fa fa-eye"></i>{{ $news->read }}</span>
                                                </div>
                                                <h3 class="small-font">
                                                    <a href="{{route('news.index', $news->id)}}">
                                                        {{$news->title}}
                                                    </a>
                                                </h3>
                                            </div>
                                        </li>
                                       @endforeach
                                    </ul>        <!-- .content-wrapper -->
                                </div><!-- .block-post-wrapper -->
                            </div>
                        </div>
                        <!-------------------------- Advertisement  --------------------->
                        <div id="panel-38-1-2-1" class="so-panel widget widget_vmagazine_medium_ad vmagazine_medium_ad" data-index="6">
                            <div class="vmagazine-medium-rectangle-ad medium-rectangle-wrapper">
                                <a href="#" target="_blank">
                                    <img class="lazy" data-src="https://demo.accesspressthemes.com/vmagazine/demo-one/wp-content/uploads/sites/2/2018/06/1xx1.jpg" alt="Home" title="Home" />
                                    <p>Advertisement</p>
                                </a>
                            </div>
                        </div>
                        <div id="panel-38-1-2-2" class="widget_text so-panel widget widget_custom_html" data-index="7" >
                            <div class="widget_text sty-con-less-padd panel-widget-style panel-widget-style-for-38-1-2-2" >
                                <h3 class="widget-title"><span class="title-bg">Stay Connected</span></h3><div class="textwidget custom-html-widget">
                                    <div class="apsc-icons-wrapper  apsc-theme-13" data-hover-color="0">
                                        <div class="apsc-each-profile ">
                                            <a class="apsc-facebook-icon apsc-icon-soc clearfix" href="http://facebook.com/" target="_blank" rel="noopener noreferrer">
                                                <div class="apsc-inner-block">
                                                    <span class="social-icon"><span class="apsc-fa-icon"><i class="fa fa-facebook apsc-facebook"></i></span><span class="media-name"><span class="apsc-social-name">Facebook</span></span></span>
                                                    <div class='apsc-count-wrapper'><span class="apsc-count">5000</span><span class="apsc-media-type">Fans</span></div>
                                                </div>
                                            </a>
                                            <a class="apsc-bttn-bg" href="http://facebook.com/" target="_blank" rel="noopener noreferrer"><div class="apsc_bttn">follow</div></a>
                                        </div>
                                        <div class="apsc-each-profile ">
                                            <a class="apsc-twitter-icon apsc-icon-soc clearfix" href="http://twitter.com/" target="_blank" rel="noopener noreferrer">
                                                <div class="apsc-inner-block">
                                                    <span class="social-icon"><span class="apsc-fa-icon"><i class="fa fa-twitter apsc-twitter"></i></span><span class="media-name"><span class="apsc-social-name">Twitter</span></span></span>
                                                    <div class='apsc-count-wrapper'><span class="apsc-count">0</span><span class="apsc-media-type">Followers</span></div>
                                                </div>
                                            </a>
                                            <a class="apsc-bttn-bg" href="http://twitter.com/" target="_blank" rel="noopener noreferrer"><div class="apsc_bttn">follow</div></a>
                                        </div>
                                        <div class="apsc-each-profile ">
                                            <a class="apsc-youtube-icon apsc-icon-soc clearfix" href="#" target="_blank" rel="noopener noreferrer">
                                                <div class="apsc-inner-block">
                                                    <span class="social-icon"><span class="apsc-fa-icon"><i class="apsc-youtube fa fa-youtube"></i></span><span class="media-name"><span class="apsc-social-name">Youtube</span></span></span>
                                                    <div class='apsc-count-wrapper'><span class="apsc-count">563</span><span class="apsc-media-type">Subscribers</span></div>
                                                </div>

                                            </a>
                                            <a class="apsc-bttn-bg" href="#" target="_blank" rel="noopener noreferrer"><div class="apsc_bttn">subscribe</div></a>
                                        </div>
                                        <div class="apsc-each-profile ">
                                            <a class="apsc-soundcloud-icon apsc-icon-soc clearfix" href="https://soundcloud.com/" target="_blank" rel="noopener noreferrer">
                                                <div class="apsc-inner-block">
                                                    <span class="social-icon"><span class="apsc-fa-icon"><i class="apsc-soundcloud fa fa-soundcloud"></i></span><span class="media-name"><span class="apsc-social-name">Soundcloud</span></span></span>
                                                    <div class='apsc-count-wrapper'><span class="apsc-count">998</span><span class="apsc-media-type">Followers</span></div>
                                                </div>
                                            </a>
                                            <a class="apsc-bttn-bg" href="https://soundcloud.com/" target="_blank" rel="noopener noreferrer"><div class="apsc_bttn">follow</div></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="panel-38-1-2-3" class="so-panel widget widget_vmagazine_recent_post panel-last-child" data-index="8">
                            <div class="panel-widget-style panel-widget-style-for-38-1-2-3">
                                <h4 class="block-title"><span class="title-bg">BLogs</span></h4>
                                @foreach ($category_news(7,0,10) as $news)
                                <div class="vmagazine-rec-posts recent-post-widget block_layout_1">
                                    <div class="recent-posts-content wow fadeInUp">
                                        <div class="image-recent-post post-thumb">
                                            <a href="" class="thumb-zoom">
                                                <img class="lazy" src="/vnews/wp-content/uploads/sites/2/2018/04/{{ $news->image}}" alt="" title="" />
                                                <div class="image-overlay"></div>
                                            </a>
                                        </div>
                                        <div class="recent-post-content">
                                            <span class="cat-links"><a href="category/fun/index.html">Fun</a></span>
                                         <a href="{{route('news.index', $news->id) }}">  {{ $news->title}}  </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="pg-38-2"  class="panel-grid panel-has-style" >
                <div class="panel-row-style panel-row-style-for-38-2" >
                    <div id="pgc-38-2-0"  class="panel-grid-cell" >
                        <div id="panel-38-2-0-0" class="so-panel widget widget_vmagazine_block_posts_ajax vmagazine_block_posts_ajax panel-first-child panel-last-child" data-index="9">
                            <div class="panel-widget-style panel-widget-style-for-38-2-0-0">
                                <div class="vmagazine-mul-cat block-post-wrapper layout-two clearfix">
                                    <div class="block-header clearfix">
                                        <h4 class="block-title"><span class="title-bg">  Magazine    </span></h4>
                                        <div class="child-cat-tabs">
                                        {{--    <ul class="vmagazine-tab-links">
                                                <li>
                                                    <a href="" data-meta="show" data-id="2" data-slug="2" data-link="" data-layout="block_layout_2" data-count="6" data-length="0" data-btn="View All Posts">Europe</a>
                                                </li>
                                                <li>
                                                    <a href="" data-meta="" data-id="3" data-slug="3" data-link="" data-layout="block_layout_2" data-count="6" data-length="0" data-btn="View All Posts">Asia</a>
                                                </li>
                                                <li>
                                                    <a href="" data-meta="show" data-id="4" data-slug="4" data-link="" data-layout="block_layout_2" data-count="6" data-length="0" data-btn="View All Posts">America</a>
                                                </li>
                                            </ul>--}}
                                        </div>
                                    </div>
                                    <div class="block-content-wrapper">
                                        <div class="block-loader" style="display:none;">
                                            <div class="sampleContainer">
                                                <div class="loader">
                                                    <span class="dot dot_1"></span>
                                                    <span class="dot dot_2"></span>
                                                    <span class="dot dot_3"></span>
                                                    <span class="dot dot_4"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--------------------- World ------------------>
                                        <div class="block-cat-content 2">
                                            @foreach($category_news(8, 5,2) as $news)
                                            <div class="left-post-wrapper wow fadeInDown" data-wow-duration="0.7s">
                                                <div class="single-post clearfix">
                                                    <div class="post-thumb">
                                                        <a class="thumb-zoom" href="" title="">
                                                            <img class="lazy" src="/vnews/wp-content/uploads/sites/2/2018/04/{{ $news->image}}" alt="image" title="" />
                                                            <div class="image-overlay"></div>
                                                        </a>
                                                        <span class="post-format-icon video-icon "><i class="icon_film"></i></span>
                                                    </div>
                                                    <div class="post-caption-wrapper">
                                                        <div class="post-caption-inner">
                                                            <div class="post-meta clearfix">
                                                                <span class="posted-on"><i class="fa fa-clock-o"></i> {{ date('M j, Y', strtotime($news->updated)) }} </span>
                                                                <span class="comments"><i class="fa fa-comments"></i> {{ $news->comment }} </span>
                                                                <span class="post-view"><i class="fa fa-eye"></i> {{ $news->read }}</span>
                                                            </div>
                                                            <h3 class="small-font">
                                                                <a href="{{route('news.index', $news->id) }}">
                                                                    {{ $news->title }}
                                                                </a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach

                                            <div class="right-posts-wrapper wow fadeInUp" data-wow-duration="0.7s">
                                                @foreach($category_news(8, 5,4) as $news)
                                                <div class="single-post clearfix">
                                                    <div class="post-thumb">
                                                        <a class="thumb-zoom" href="" title="">
                                                            <img class="lazy" src="/vnews/wp-content/uploads/sites/2/2018/04/{{ $news->image}}" alt="" title="" />
                                                            <div class="image-overlay"></div>
                                                        </a>
                                                    </div><!-- .post-thumb -->
                                                    <div class="post-caption-wrapper">
                                                        <div class="post-caption-inner">
                                                            <div class="post-meta clearfix">
                                                                <span class="posted-on"><i class="fa fa-clock-o"></i>{{ date('M j, Y', strtotime($news->updated)) }}</span>
                                                                <span class="comments"><i class="fa fa-comments"></i>{{ $news->comment }}</span>
                                                                <span class="post-view"><i class="fa fa-eye"></i>{{ $news->comment }}</span>
                                                            </div>
                                                            <h3 class="small-font">
                                                                <a href="{{route('news.index', $news->id) }}">
                                                                   {{ $news->title }}
                                                                </a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                                <span class="view-all"><a href="{{route('category.index',  $news->sub_category)}}">View All Posts</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .block-post-wrapper -->
                            </div>
                        </div>
                    </div>
                    <div id="pgc-38-2-1"  class="panel-grid-cell" >
                        <div id="panel-38-2-1-0" class="so-panel widget widget_vmagazine_medium_ad vmagazine_medium_ad panel-first-child panel-last-child" data-index="10">
                            <div class="panel-widget-style panel-widget-style-for-38-2-1-0">
                                <div class="vmagazine-medium-rectangle-ad medium-rectangle-wrapper">
                                    <a href="#" target="_blank">
                                        <img class="lazy" data-src="https://demo.accesspressthemes.com/vmagazine/demo-one/wp-content/uploads/sites/2/2018/04/ads5.jpg" alt="Home" title="Home" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="pg-38-3"  class="panel-grid panel-has-style" >
                  <div class="siteorigin-panels-stretch panel-row-style panel-row-style-for-38-3" data-stretch-type="full-stretched" >
                    <div id="pgc-38-3-0"  class="panel-grid-cell" >
                        <div id="panel-38-3-0-0" class="so-panel widget widget_vmagazine_category_posts_slider vmagazine_category_posts_slider panel-first-child panel-last-child" data-index="11">
                            <div class="vmagazine-cat-slider block-post-wrapper block_layout_1 has-bg" style="background-image: url(/vnews/wp-content/uploads/sites/2/2018/04/d6.jpg)">
                                <div class="content-wrapper-featured-slider">
                                    <h4 class="block-title"><span class="title-bg"> Photography </span></h4>
                                    <ul class="widget-cat-slider cS-hidden">
                                        <!--------------------------- Photography ---------------------->
                                        @foreach($category_news(2,0,4) as $news)
                                        <li class="single-post clearfix">
                                            <div class="post-thumb">
                                                <img src="/vnews/wp-content/uploads/sites/2/2018/04/{{ $news->image}}" alt="" title="" />
                                            </div>
                                            <div class="post-caption">
                                                <span class="cat-links">
                                                    <a href="category/fun/index.html" class="cat-53" rel="category tag">{{ $category_name($news->category) }}</a>
                                                    @if( $news->sub_category )
                                                    <a href="#" class="cat-30" rel="category tag" tabindex="0">{{  $category_name( $news->sub_category ) }}</a>
                                                    @endif                                                </span>
                                                <div class="post-meta">
                                                    <span class="posted-on"><i class="fa fa-clock-o"></i>{{ date('M j, Y', strtotime($news->updated)) }}</span>
                                                    <span class="comments"><i class="fa fa-comments"></i>{{ $news->comment }}</span>
                                                    <span class="post-view"><i class="fa fa-eye"></i>{{ $news->read }}</span>
                                                </div>
                                                <h3 class="extra-large-font">
                                                    <a href="{{route('news.index', $news->id) }}">
                                                        {{ $news->title }}
                                                    </a>
                                                </h3>
                                                <p>{{  $news->lead }}
                                                 <span class="read-more"><a href="{{route('news.index',  $news->id)}}">Read More</a></span>
                                                </p>
                                            </div><!-- .post-caption -->
                                        </li>

                                        @endforeach
                                    </ul>
                                </div><!-- .content-wrapper -->
                            </div><!-- .block-post-wrapper -->
                        </div>
                    </div>
                  </div>
            </div>
            <div id="pg-38-4"  class="panel-grid panel-has-style" >
                <div class="panel-row-style panel-row-style-for-38-4" >
                    <div id="pgc-38-4-0"  class="panel-grid-cell" >
                        <div id="panel-38-4-0-0" class="so-panel widget widget_vmagazine_block_grid_list vmagazine_block_grid_list panel-first-child panel-last-child" data-index="12">
                            <div class="panel-widget-style panel-widget-style-for-38-4-0-0">
                                <div class="vmagazine-grid-list-wrapp grid no-desc">
                                    <div class="block-header clearfix">
                                        <!----------------------Gaming-------------------->
                                        <h4 class="block-title"><span class="title-bg"> Gaming </span></h4>
                                    </div><!-- .block-header-->
                                    <div class="vmagazine-grid-list block-post-wrapper grid">
                                        <div class="posts-wrap">
                                            @foreach($category_news(4,14,5) as $news )
                                            <div class="single-post  clearfix wow fadeInUp" data-wow-duration="0.7s">
                                                <div class="post-thumb">
                                                    <a class="thumb-zoom" href="" title="">
                                                        <img class="lazy" src="/vnews/wp-content/uploads/sites/2/2018/04/{{ $news->image}}" alt="" title="" />
                                                        <div class="image-overlay"></div>
                                                    </a>
                                                </div><!-- .post-thumb -->
                                                <div class="post-content-wrapper clearfix">
                                                    <div class="post-meta clearfix">
                                                        <span class="posted-on"><i class="fa fa-clock-o"></i>{{ date('M j, Y', strtotime($news->updated)) }}</span>
                                                        <span class="comments"><i class="fa fa-comments"></i>{{ $news->comment }}</span>
                                                        <span class="post-view"><i class="fa fa-eye"></i>{{ $news->read }}</span>                                </div><!-- .post-meta -->

                                                    <h3 class="large-font">
                                                        <a href="{{route('news.index', $news->id) }}">
                                                           {{ $news->title}}
                                                        </a>
                                                    </h3>

                                                </div><!-- .post-content-wrapper -->
                                            </div><!-- .single-post  -->
                                            @endforeach
                                        </div>
                                        <span class="view-all"><a href="{{route('category.index',  $news->sub_category)}}">View All Posts</a></span>
                                    </div><!-- .block-post-wrapper -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="pgc-38-4-1"  class="panel-grid-cell" >
                        <div id="panel-38-4-1-0" class="so-panel widget widget_vmagazine_block_grid_list vmagazine_block_grid_list panel-first-child panel-last-child" data-index="13">
                            <div class="panel-widget-style panel-widget-style-for-38-4-1-0">
                                <div class="vmagazine-grid-list-wrapp grid no-desc">
                                    <div class="block-header clearfix">
                                    <!----------------------News-------------------->
                                        <h4 class="block-title"><span class="title-bg"> News </span></h4>
                                    </div><!-- .block-header-->
                                    <div class="vmagazine-grid-list block-post-wrapper grid">

                                        <div class="posts-wrap">
                                            {{-- <div class="single-post first-post clearfix wow fadeInUp" data-wow-duration="0.7s">
                                                <div class="post-thumb">
                                                    <a class="thumb-zoom" href="at-vero-eos-et-accusamus-et-iusto-odio-dignissimos-ducimus-qui-blanditiis-praesentium/index.html" title="How to Pick the Most Comfortable, Spacious Seats on">
                                                        <img class="lazy" data-src="https://demo.accesspressthemes.com/vmagazine/demo-one/wp-content/uploads/sites/2/2018/02/13-1-510x369.jpg" alt="How to Pick the Most Comfortable, Spacious Seats on" title="How to Pick the Most Comfortable, Spacious Seats on" />
                                                        <div class="image-overlay"></div>
                                                    </a>
                                                </div><!-- .post-thumb -->
                                                <div class="post-content-wrapper clearfix">
                                                    <div class="post-meta clearfix">
                                                        <span class="posted-on"><i class="fa fa-clock-o"></i>Feb 25,2018</span><span class="comments"><i class="fa fa-comments"></i>9</span><span class="post-view"><i class="fa fa-eye"></i>1053</span>                                </div><!-- .post-meta -->

                                                    <h3 class="large-font">
                                                        <a href="at-vero-eos-et-accusamus-et-iusto-odio-dignissimos-ducimus-qui-blanditiis-praesentium/index.html">
                                                            How to Pick the Most Comfortable, Spacious Seats on                                    </a>
                                                    </h3>


                                                </div><!-- .post-content-wrapper -->
                                            </div><!-- .single-post  --> --}}
                                            @foreach($category_news(4,10,5) as $news )
                                            <div class="single-post  clearfix wow fadeInUp" data-wow-duration="0.7s">
                                                <div class="post-thumb">
                                                    <a class="thumb-zoom" href="" title="">
                                                        <img class="lazy" src="/vnews/wp-content/uploads/sites/2/2018/04/{{ $news->image}}" alt="" title="" />
                                                        <div class="image-overlay"></div>
                                                    </a>
                                                </div><!-- .post-thumb -->
                                                <div class="post-content-wrapper clearfix">
                                                    <div class="post-meta clearfix">
                                                        <span class="posted-on"><i class="fa fa-clock-o"></i>{{ date('M j, Y', strtotime($news->updated)) }}</span>
                                                        <span class="comments"><i class="fa fa-comments"></i>{{ $news->comment }}</span>
                                                        <span class="post-view"><i class="fa fa-eye"></i>{{ $news->read }}</span>
                                                    </div><!-- .post-meta -->

                                                    <h3 class="large-font">
                                                        <a href="">
                                                           {{ $news->title}}
                                                        </a>
                                                    </h3>

                                                </div><!-- .post-content-wrapper -->
                                            </div><!-- .single-post  -->
                                            @endforeach
                                        </div>
                                        <span class="view-all"><a href="{{route('category.index',  $news->sub_category)}}">View All Posts</a></span>
                                    </div><!-- .block-post-wrapper -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="pgc-38-4-2"  class="panel-grid-cell" >
                        <div id="panel-38-4-2-0" class="so-panel widget widget_vmagazine_block_grid_list vmagazine_block_grid_list panel-first-child panel-last-child" data-index="14">
                            <div class="panel-widget-style panel-widget-style-for-38-4-2-0">
                                <div class="vmagazine-grid-list-wrapp grid no-desc">
                                    <div class="block-header clearfix">
                                        <!----------------------Science-------------------->
                                        <h4 class="block-title"><span class="title-bg"> Science </span></h4>
                                    </div><!-- .block-header-->
                                    <div class="vmagazine-grid-list block-post-wrapper grid">

                                        <div class="posts-wrap">
                                            {{-- <div class="single-post first-post clearfix wow fadeInUp" data-wow-duration="0.7s">
                                                <div class="post-thumb">
                                                    <a class="thumb-zoom" href="with-one-of-australias-largest-and-most-comprehensive/index.html" title="Revealed: Blair government&#8217;s &#8216;inexcusable&#8217; PAYMENTS">
                                                        <img class="lazy" data-src="https://demo.accesspressthemes.com/vmagazine/demo-one/wp-content/uploads/sites/2/2018/04/111-510x369.jpg" alt="Revealed: Blair government&#8217;s &#8216;inexcusable&#8217; PAYMENTS" title="Revealed: Blair government&#8217;s &#8216;inexcusable&#8217; PAYMENTS" />
                                                        <div class="image-overlay"></div>
                                                    </a>
                                                </div><!-- .post-thumb -->
                                                <div class="post-content-wrapper clearfix">
                                                    <div class="post-meta clearfix">
                                                        <span class="posted-on"><i class="fa fa-clock-o"></i>Apr 12,2018</span><span class="comments"><i class="fa fa-comments"></i>3941</span><span class="post-view"><i class="fa fa-eye"></i>505285</span>                                </div><!-- .post-meta -->

                                                    <h3 class="large-font">
                                                        <a href="with-one-of-australias-largest-and-most-comprehensive/index.html">
                                                            Revealed: Blair government&#8217;s &#8216;inexcusable&#8217; PAYMENTS                                    </a>
                                                    </h3>


                                                </div><!-- .post-content-wrapper -->
                                            </div><!-- .single-post  --> --}}
                                            @foreach($category_news(4,9,5) as $news )
                                            <div class="single-post  clearfix wow fadeInUp" data-wow-duration="0.7s">
                                                <div class="post-thumb">
                                                    <a class="thumb-zoom" href="" title="">
                                                        <img class="lazy" src="/vnews/wp-content/uploads/sites/2/2018/04/{{ $news->image}}" alt="" title="" />
                                                        <div class="image-overlay"></div>
                                                    </a>
                                                </div><!-- .post-thumb -->
                                                <div class="post-content-wrapper clearfix">
                                                    <div class="post-meta clearfix">
                                                        <span class="posted-on"><i class="fa fa-clock-o"></i>{{ date('M j, Y', strtotime($news->updated)) }}</span>
                                                        <span class="comments"><i class="fa fa-comments"></i>{{ $news->comment }}</span>
                                                        <span class="post-view"><i class="fa fa-eye"></i>{{ $news->read }}</span>
                                                       </div><!-- .post-meta -->
                                                    <h3 class="large-font">
                                                        <a href="">
                                                           {{ $news->title}}
                                                        </a>
                                                    </h3>

                                                </div><!-- .post-content-wrapper -->
                                            </div><!-- .single-post  -->
                                            @endforeach
                                        </div>
                                        <span class="view-all"><a href="{{route('category.index',  $news->sub_category)}}">View All Posts</a></span>
                                    </div><!-- .block-post-wrapper -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="pg-38-5"  class="panel-grid panel-has-style" >
                <div class="panel-row-style panel-row-style-for-38-5" >
                    <div id="pgc-38-5-0"  class="panel-grid-cell" >
                        <div id="panel-38-5-0-0" class="so-panel widget widget_vmagazine_block_grid_list vmagazine_block_grid_list panel-first-child panel-last-child" data-index="15">
                            <div class="panel-widget-style panel-widget-style-for-38-5-0-0">
                                <div class="vmagazine-grid-list-wrapp list element-has-desc">
                                    <div class="block-header clearfix">
                                        <h4 class="block-title"><span class="title-bg">  Sports  </span></h4>
                                    </div><!-- .block-header-->
                                    <div class="vmagazine-grid-list block-post-wrapper list">
                                        <div class="posts-wrap">
                                            @foreach ($category_news(8, 6,5) as $news)
                                            <div class="single-post first-post clearfix wow fadeInUp" data-wow-duration="0.7s">
                                                <div class="post-thumb">
                                                    <a class="thumb-zoom" href="" title="">
                                                        <img class="lazy" src="/vnews/wp-content/uploads/sites/2/2018/04/{{ $news->image}}" alt="" title="" />
                                                        <div class="image-overlay"></div>
                                                    </a>
                                                    <span class="cat-links">
                                                        <a href="category/fun/index.html" class="cat-53" rel="category tag">{{ $category_name($news->category) }}</a>
                                                        @if( $news->sub_category )
                                                        <a href="#" class="cat-30" rel="category tag" tabindex="0">{{  $category_name( $news->sub_category ) }}</a>
                                                        @endif                                                      </div><!-- .post-thumb -->
                                                <div class="post-content-wrapper clearfix">
                                                    <div class="post-meta clearfix">
                                                        <span class="posted-on"><i class="fa fa-clock-o"></i>{{ date('M j, Y', strtotime($news->updated))}}</span>
                                                        <span class="comments"><i class="fa fa-comments"></i>{{$news->comment}}</span>
                                                        <span class="post-view"><i class="fa fa-eye"></i>{{$news->read}}</span>
                                                </div><!-- .post-meta -->
                                                    <h3 class="large-font">
                                                        <a href="{{route('news.index', $news->id) }}">
                                                            {{ $news->title }}
                                                        </a>
                                                    </h3>
                                                    <div class="post-content">
                                                        <p>
                                                           {{ $news->lead }}
                                                        </p>
                                                    </div><!-- .post-content -->


                                                </div><!-- .post-content-wrapper -->
                                            </div>
                                           @endforeach
                                        </div>
                                        <div class="gl-posts" data-meta="show" data-cat="" data-paged="1" data-banner-offset="5" data-offset="latest_posts" data-type="list" data-id="5" data-length="330">
                                            <a href="{{route('category.index', $news->sub_category)}}" class="vm-ajax-load-more">
                                                <span>Show More Posts</span>
                                                <i class="fa fa-refresh"></i>
                                            </a>
                                        </div>
                                    </div><!-- .block-post-wrapper -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="pgc-38-5-1"  class="panel-grid-cell" >
                        <div id="panel-38-5-1-0" class="so-panel widget widget_categories panel-first-child" data-index="16" >
                            <div class="panel-widget-style panel-widget-style-for-38-5-1-0" >
                                <h3 class="widget-title"><span class="title-bg">Categories</span></h3>
                                	<ul>
                                    @foreach($category_list as $category)
                                    <li class="cat-item cat-item-2">
                                        <a href="{{route('category.index',  $category->id)}}">
                                        {{ $category->name}}
                                        </a>
                                      <span></span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div id="panel-38-5-1-1" class="so-panel widget widget_vmagazine_medium_ad vmagazine_medium_ad panel-last-child" data-index="17">
                            <div class="vmagazine-medium-rectangle-ad medium-rectangle-wrapper">
                                <a href="#" target="_self">
                                    <img class="lazy" data-src="https://demo.accesspressthemes.com/vmagazine/demo-one/wp-content/uploads/sites/2/2018/06/adssss.png" alt="Home" title="Home" />
                                    <p>Advertisement</p>
                                </a>
                            </div>
                        </div></div></div></div><div id="pg-38-6"  class="panel-grid panel-has-style" >
                            <div class="siteorigin-panels-stretch panel-row-style panel-row-style-for-38-6" data-stretch-type="full-stretched" >
                                <div id="pgc-38-6-0"  class="panel-grid-cell" >
                                    <div id="panel-38-6-0-0" class="so-panel widget widget_vmagazine_category_slider_tab vmagazine_category_slider_tab panel-first-child panel-last-child" data-index="18">
                                        <div class="panel-widget-style panel-widget-style-for-38-6-0-0">
                                                  <div class="vmagazine-slider-tab slider-tab-wrapper">
                                    <div class="block-post-wrapper block_layout_1">
                                        <div class="block-header clearfix">
                                            <h4 class="block-title"><span class="title-bg">Food</span></h4>
                                            <div class="slider-cat-tabs">
                                                {{-- <ul class="slider-tab-links">
                                                <li><a href="javascript:void(0)" data-id="3" data-slug="3" data-offset="6">News</a></li>
                                                <li><a href="javascript:void(0)" data-id="4" data-slug="4" data-offset="6">Photography</a></li>
                                                <li><a href="javascript:void(0)" data-id="9" data-slug="9" data-offset="6">Travel</a></li>
                                                <li><a href="javascript:void(0)" data-id="29" data-slug="29" data-offset="6">Technology</a></li>
                                            </ul> --}}
                                        </div>
                                        </div><!-- .block-header-->
                                        <div class="block-content-wrapper">
                                            <div class="block-loader" style="display:none;">
                                                <div class="sampleContainer">
                                                    <div class="loader">
                                                        <span class="dot dot_1"></span>
                                                        <span class="dot dot_2"></span>
                                                        <span class="dot dot_3"></span>
                                                        <span class="dot dot_4"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-cat-content 3" data-slug="3">
                                                <div class="tab-cat-slider sl-before-load">
                                                    @foreach($category_news(8,3,5) as $news)
                                                     <div class="single-post">
                                                        <div class="post-thumb">
                                                            <img src="/vnews/wp-content/uploads/sites/2/2018/04/{{ $news->image}}" alt="" title="" />
                                                            <div class="image-overlay"></div>
                                                            <span class="post-format-icon audio-icon">
                                                                <i class="{{ $news->video ? 'icon_film' : 'icon_image' }}"></i>
                                                            </span>
                                                         </div>
                                                        <div class="post-caption">
                                                            <h3 class="large-font">
                                                                <a href="{{route('news.index', $news->id) }}">
                                                                    {{ $news->title}}
                                                                </a>
                                                            </h3>
                                                        </div><!-- .post-caption -->
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div><!-- block-content-wraper-->
                                    </div><!-- .block-post-wrapper -->
                                </div>
                            </div></div></div></div></div><div id="pg-38-7"  class="panel-grid panel-has-style" ><div class="panel-row-style panel-row-style-for-38-7" ><div id="pgc-38-7-0"  class="panel-grid-cell" ><div id="panel-38-7-0-0" class="so-panel widget widget_vmagazine_block_posts_column vmagazine_block_posts_column panel-first-child panel-last-child" data-index="19"><div class="panel-widget-style panel-widget-style-for-38-7-0-0">        <div class="wrapper-vmagazine-post-col block_layout_4">
                                    <h4 class="block-title"><span class="title-bg">Asia  </span></h4>
                                    <div class="vmagazine-post-col block-post-wrapper block_layout_4 wow zoomIn" data-wow-duration="1s">
                                        <div class="block-header clearfix">
                                        </div><!-- .block-header-->
                                        @foreach ($category_news(1,11,4) as $news)
                                        <div class="single-post first-post clearfix">
                                            <div class="post-thumb">
                                                <a class="thumb-zoom" href="nam-libero-tempore-cum-soluta-nobis-est/index.html" title="These Fitness Tips Help Take Inches off Your Waistline">
                                                    <img class="lazy" src="/vnews/wp-content/uploads/sites/2/2018/04/{{ $news->image}}" alt="" />
                                                    <div class="image-overlay"></div>
                                                </a>
                                            </div>
                                            <div class="content-wrapper">
                                                <div class="post-meta clearfix">
                                                    <span class="posted-on"><i class="fa fa-clock-o"></i>{{ date('M j, Y', strtotime($news->updated))}}</span>
                                                    <span class="comments"><i class="fa fa-comments"></i>{{ $news->comment}}</span>
                                                <span class="post-view"><i class="fa fa-eye"></i>{{ $news->read }}</span>
                                                 </div>
                                                <h3 class="small-font">
                                                    <a href="{{route('news.index', $news->id) }}">
                                                    {{ $news->title }}
                                                    </a>
                                                </h3>
                                            </div><!-- .content-wrapper -->
                                        </div><!-- .single-post -->
                                        @endforeach
                                    </div><!-- .block-post-wrapper -->
                                </div>
                            </div></div></div><div id="pgc-38-7-1"  class="panel-grid-cell" ><div id="panel-38-7-1-0" class="so-panel widget widget_vmagazine_block_posts_column vmagazine_block_posts_column panel-first-child panel-last-child" data-index="20"><div class="panel-widget-style panel-widget-style-for-38-7-1-0">        <div class="wrapper-vmagazine-post-col block_layout_4">
                                    <h4 class="block-title"><span class="title-bg"> America </span></h4>
                                    <div class="vmagazine-post-col block-post-wrapper block_layout_4 wow zoomIn" data-wow-duration="1s">
                                        <div class="block-header clearfix">
                                        </div><!-- .block-header-->
                                        @foreach ($category_news(1, 12,4) as $news)
                                        <div class="single-post first-post clearfix">
                                            <div class="post-thumb">
                                                <a class="thumb-zoom" href="nam-libero-tempore-cum-soluta-nobis-est/index.html" title="These Fitness Tips Help Take Inches off Your Waistline">
                                                    <img class="lazy" src="/vnews/wp-content/uploads/sites/2/2018/04/{{ $news->image}}" alt="" />
                                                    <div class="image-overlay"></div>
                                                </a>
                                            </div>
                                            <div class="content-wrapper">
                                                <div class="post-meta clearfix">
                                                    <span class="posted-on"><i class="fa fa-clock-o"></i>{{ date('M j, Y', strtotime($news->updated))}}</span>
                                                    <span class="comments"><i class="fa fa-comments"></i>{{ $news->comment}}</span>
                                                <span class="post-view"><i class="fa fa-eye"></i>{{ $news->read }}</span>
                                                 </div>
                                                <h3 class="small-font">
                                                    <a href="{{route('news.index', $news->id) }}">
                                                    {{ $news->title }}
                                                    </a>
                                                </h3>
                                            </div><!-- .content-wrapper -->
                                        </div>
                                        @endforeach
                                    </div><!-- .block-post-wrapper -->
                                </div>
                            </div></div></div><div id="pgc-38-7-2"  class="panel-grid-cell" ><div id="panel-38-7-2-0" class="so-panel widget widget_vmagazine_block_posts_column vmagazine_block_posts_column panel-first-child panel-last-child" data-index="21"><div class="panel-widget-style panel-widget-style-for-38-7-2-0">        <div class="wrapper-vmagazine-post-col block_layout_4">
                                    <h4 class="block-title"><span class="title-bg"> Europe </span></h4>
                                    <div class="vmagazine-post-col block-post-wrapper block_layout_4 wow zoomIn" data-wow-duration="1s">
                                        <div class="block-header clearfix">
                                        </div><!-- .block-header-->
                                        @foreach ($category_news(1, 13,4) as $news)
                                        <div class="single-post first-post clearfix">
                                            <div class="post-thumb">
                                                <a class="thumb-zoom" href="nam-libero-tempore-cum-soluta-nobis-est/index.html" title="These Fitness Tips Help Take Inches off Your Waistline">
                                                    <img class="lazy" src="/vnews/wp-content/uploads/sites/2/2018/04/{{ $news->image}}" alt="" />
                                                    <div class="image-overlay"></div>
                                                </a>
                                            </div>
                                            <div class="content-wrapper">
                                                <div class="post-meta clearfix">
                                                    <span class="posted-on"><i class="fa fa-clock-o"></i>{{ date('M j, Y', strtotime($news->updated))}}</span>
                                                    <span class="comments"><i class="fa fa-comments"></i>{{ $news->comment}}</span>
                                                <span class="post-view"><i class="fa fa-eye"></i>{{ $news->read }}</span>
                                                 </div>
                                                <h3 class="small-font">
                                                    <a href="{{route('news.index', $news->id) }}">
                                                    {{ $news->title }}
                                                    </a>
                                                </h3>
                                            </div><!-- .content-wrapper -->
                                        </div>
                                        @endforeach
                                    </div><!-- .block-post-wrapper -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .vmagazine-home-wrapp -->
</div>
@endsection
