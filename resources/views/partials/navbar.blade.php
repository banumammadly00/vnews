<!-----------------------Navbar--------------------->
<div class="vmagazine-nav-wrapper">
    <div class="vmagazine-container">
        <nav id="site-navigation" class="main-navigation clearfix" >
            <div class="nav-wrapper">
                <div class="index-icon">
                    <a href="index.html"><i class="fa fa-home"></i></a>
                </div>
                <div class="menu-mmnu-container">
                    <ul id="menu-primary-menu" class="menu vmagazine_mega_menu">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page page_item page-item-724 no-mega-menu"><a href="/">Home</a></li>
                        @foreach($categories() as $category)
                            <li class="menu-item {{ $category->type == 0 ? 'menu-item-type-post_type menu-item-object-page page_item page-item-724 no-mega-menu' : 'menu-item-type-taxonomy menu-item-object-category page_item page-item-45 has-mega-menu' }}">
                                <a href="{{route('category.index', $category->id)}}">{{ $category->name }}</a>
                                @if($category->id==8)
                                    <ul class="sub-menu mega-sub-menu mega-cat-menu has-menu-tab">
                                        <li class="menu-item-inner-mega clearfix">
                                            <div class="ap-mega-menu-cat-wrap">
                                                @foreach($categories(8) as $category)
                                                    <div class="mega-cat-all"><a href="{{route('category.index', $category->id )}}" data-cat-id="{{$loop->index}}" class="mega-cat-menu">{{$category->name}}</a></div>
                                                @endforeach
                                            </div>
                                            <div class="ap-mega-menu-con-wrap">
                                                <div class="cat-con-section cat-con-id-0">
                                                    @foreach($category_news(8,6) as $news)
                                                        <div class="menu-post-block">
                                                            <div class="mega-img-thumb">
                                                                <a href="{{ route('news.index', $news->id) }}" >
                                                                    <img src="/vnews/wp-content/uploads/sites/2/2018/04/{{ $news->image}}" alt="">
                                                                </a>
                                                            </div>
                                                            <h3><a href="{{route('news.index', $news->id)}}" title=""> {{ $news->title }} </a></h3>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <div class="cat-con-section cat-con-id-1">
                                                    @foreach($category_news(8,3) as $news)
                                                        <div class="menu-post-block">
                                                            <div class="mega-img-thumb">
                                                                <a href="{{ route('news.index', $news->id) }}">
                                                                    <img src="/vnews/wp-content/uploads/sites/2/2018/04/{{ $news->image}}" alt="">
                                                                </a>
                                                            </div>
                                                            <h3><a href="" title=""> {{ $news->title}} </a></h3>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <div class="cat-con-section cat-con-id-2">
                                                    @foreach($category_news(8,5) as $news)
                                                        <div class="menu-post-block">
                                                            <div class="mega-img-thumb">
                                                                <a href="{{ route('news.index', $news->id) }}" >
                                                                    <img src="/vnews/wp-content/uploads/sites/2/2018/04/{{ $news->image}}" alt=""></a>
                                                            </div>
                                                            <h3><a href="{{route('news.index', $news->id)}}" title=""> {{ $news->title}} </a></h3>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                @elseif($category->id==2)
                                    <ul class="sub-menu mega-sub-menu no-mega-cat-menu">
                                        <li class="menu-item-inner-mega clearfix">
                                            <div class="ap-mega-menu-con-wrap " >
                                                <div class="cat-con-section cat-con-id-4">
                                                    @foreach($category_news(2,0,5 ) as $news)
                                                        <div class="menu-post-block">
                                                            <div class="mega-img-thumb">
                                                                <a href="{{ route('news.index', $news->id) }}">
                                                                    <img src="/vnews/wp-content/uploads/sites/2/2018/04/{{ $news->image}}" alt="">
                                                                </a>
                                                            </div>
                                                            <h3><a href="" title=""> {{ $news->title}} </a></h3>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                @elseif($category->id==4)
                                    <ul class="sub-menu" style="left: auto;">
                                        @foreach($categories(4) as $category)
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom page_item page-item-868 no-mega-menu"><a href="{{route('category.index', $category->id )}}">{{ $category->name }}</a></li>
                                        @endforeach
                                    </ul>
                                @elseif($category->id==1)
                                  <ul class="sub-menu" style="left: auto;">
                                    @foreach($categories(1) as $category)
                                     <li class="menu-item menu-item-type-taxonomy menu-item-object-category page_item page-item-109 no-mega-menu"><a href="{{route('category.index', $category->id )}}">{{ $category->name }}</a></li>
                                    @endforeach
                                 </ul>
                             </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </nav>
        <!--<ul class="site-header-cart">-->
        <!--<li class="cart-icon "><a href="cart/index.html"><span class="icon"><i class="icon_bag_alt"></i></span></a>-->
        <!--<span class="count">0</span>-->
        <!--</li>-->
        <!--</ul>-->
    </div>
</div>