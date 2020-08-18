@extends('layouts.layout')
@section('content')
    <div id="content" class="site-content">

        <div class="vmagazine-breadcrumb-wrapper ">

            <div class="vmagazine-bread-home">
                <div class="vmagazine-bread-wrapp vmagazine-container">

                    <div class="breadcrumb-title">
                        <h1 class="page-title"> 404 Not Found </h1>
                    </div>

                    <div class="vmagazine-breadcrumb">
                        <nav role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                            <ul class="trail-items">
                                <li class="trail-item trail-begin">
                                    <a href="/" rel="home"><span>Home</span></a>
                                </li>
                                <li class="trail-item trail-end current"><span>404 Not Found</span>
                                </li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>

        </div>

        <div class="vmagazine-container">
            <main id="main" class="site-main" role="main">

                <div class="error-404 not-found">
                    <div class="vmagazine-404">
                        <span>4</span>
                        <span class="zero">0</span>
                        <span>4</span>
                    </div>
                        <h1 class="page-title">Oops! That page can&rsquo;t be found.</h1>
                    <div class="page-content">
                        <p>It looks like nothing was found at this location.</p>
                    </div><!-- .page-content -->
                </div><!-- .error-404 -->


            </main><!-- #main -->

        </div><!-- .vmagazine-container -->

    </div><!-- #content -->

@endsection