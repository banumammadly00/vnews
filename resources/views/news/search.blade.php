@extends('layouts.layout')
@section('content')
    <div id="content" class="site-content">
        <div class="vmagazine-breadcrumb-wrapper ">
            <div class="vmagazine-bread-home">
                <div class="vmagazine-bread-wrapp vmagazine-container">
                    <div class="breadcrumb-title"><h1 class="page-title">Search</h1> </div>
                    <div class="vmagazine-breadcrumb"><nav role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">

                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="vmagazine-container container-wrapp-inner">
            <div id="primary" class="content-area vmagazine-content">
                <div id="pgc-38-5-0"  class="panel-grid-cell">
                    <div id="panel-38-5-0-0" class="so-panel widget widget_vmagazine_block_grid_list vmagazine_block_grid_list panel-first-child panel-last-child" data-index="15">
                        <div class="panel-widget-style panel-widget-style-for-38-5-0-0">
                            <div class="block-header clearfix">
                                <h4 class="block-title"><span class="title-bg">  News </span></h4>
                            </div><!-- .block-header-->
                            <div class="vmagazine-grid-list block-post-wrapper list">
                                <div class="posts-wrap">
                                    @foreach ($searchs as $news)
                                        <div class="single-post first-post clearfix wow fadeInUp" style="width: 213%;" data-wow-duration="0.7s">
                                            <div class="post-thumb">
                                                <a class="thumb-zoom" href="" title="">
                                                    <img class="lazy" src="/vnews/wp-content/uploads/sites/2/2018/04/{{ $news->image}}" alt="" title="" />
                                                    <div class="image-overlay"></div>
                                                </a>
                                                <span class="cat-links">
                                                    <a href="category/fun/index.html" class="cat-53" rel="category tag">{{ $category_name( $news->category)}}</a>
                                                    @if( $news->sub_category )
                                                        <a href="#" class="cat-30" rel="category tag" tabindex="0">{{ $category_name( $news->sub_category) }}</a>
                                                @endif
                                            </div>
                                            <div class="post-content-wrapper clearfix" style="    width: 35%;">
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
                                                    <p style=" padding-bottom: 11%">{{ $news->lead }}</p>
                                                </div><!-- .post-content -->
                                                <div class="gl-posts" style="display: contents;">
                                                    <a href="{{route('news.index', $news->id)}}" class="vm-ajax-load-more">
                                                        <span>Read More</span>
                                                    </a>
                                                </div>
                                            </div><!-- .post-content-wrapper -->
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="archive-bottom-wrapper">
                    <nav class="navigation pagination" >
                        <div class="nav-links">
                            {{ $searchs->onEachSide(1)->links()}}
                        </div>
                    </nav>
                </div>
            </div><!-- #primary -->

            <aside id="secondary" class="widget-area vmagazine-sidebar" role="complementary">
                <div class="theiaStickySidebar">
                    <div id="vmagazine_recent_post-3" class="widget widget_vmagazine_recent_post">
                        <h4 class="block-title"><span class="title-bg">  Recent Posts   </span></h4>
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
                                        <a href="{{ route('news.index', $news->id) }}"> {{ $news->title }} </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </aside><!-- #secondary -->
        </div><!-- .vmagazine-container -->
    </div><!-- #content -->
@endsection
