<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <title>publicFunction | @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="alternate" type="application/rss+xml" title="publicFunction &raquo; Feed" href="http://publicfunction.co.uk/feed/" />
        <link rel="alternate" type="application/rss+xml" title="publicFunction &raquo; Comments Feed" href="http://publicfunction.co.uk/comments/feed/" />
        <link rel='stylesheet' href='{{asset('/css/style.css?ver=4.3')}}' type='text/css' media='all' />
        <link rel='stylesheet' href='{{asset('/css/app.css')}}' type='text/css' media='screen' />
        @yield('additional_styles')
        <script type='text/javascript' src='{{asset('/js/jquery/jquery.js?ver=1.11.3')}}'></script>
        <script type='text/javascript' src='{{asset('/js/jquery/jquery-migrate.min.js?ver=1.2.1')}}'></script>
        <link rel='canonical' href='http://publicfunction.co.uk/' />
        <link rel='shortlink' href='http://publicfunction.co.uk/' />
    </head>
    <body class="home page page-template-default">
        <header class="header">
            <div id="logo">
                <h1 class="site-title">
                    <a href="http://publicfunction.co.uk/" title="publicFunction" rel="home">publicFunction</a>
                </h1>
                <h2 class="site-description">
                    <a href="http://publicfunction.co.uk/" title="publicFunction" rel="home">Gamer, Vlogger, Tuber, Tweeter and PC Master Race Founding Member</a>
                </h2>
            </div>
            <div class="openmenuresp">Menu</div>
            <div class="navrespgradient"></div>
            <div class="left-sidebar sidebar-desktop">
                @include('layouts._partials.twitter_feed')
            </div>
            <div id="social"></div><!-- /social -->
        </header>
        @include('layouts._partials.top_menu')
        <div id="content">
            @yield('page_content')
        </div><!-- /content -->
        <footer>
            <span class="alignleft">&copy; 2016 <a href="http://publicfunction.co.uk" title="publicFunction">publicFunction</a></span>
        </footer>
        <script type='text/javascript' src='http://publicfunction.co.uk/wp-content/themes/metro-creativex/js/script.js?ver=1.0'></script>
        <script type='text/javascript' src='http://publicfunction.co.uk/wp-content/themes/metro-creativex/js/jquery.carouFredSel-6.1.0.js?ver=6.1'></script>
    </body>
</html>