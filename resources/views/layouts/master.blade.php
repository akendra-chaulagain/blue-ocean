@php
    $global_setting = app\Models\GlobalSetting::all()->first();
    $normal_gallary_notice = app\Models\Navigation::query()
        ->where('nav_category', 'Main')
        ->where('page_type', '!=', 'Job')
        ->where('page_type', '!=', 'Photo Gallery')
        ->where('page_type', '!=', 'Notice')
        ->where('parent_page_id', 0)
        ->where('page_status', '1')
        ->orderBy('position', 'ASC')
        ->get();
    if (isset($normal)) {
        $seo = $normal;
    } elseif (isset($job)) {
        $seo = $job;
    }
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <!-----SEO--------->

    <title> @stack('title') | {{ $seo->page_titile ?? $global_setting->page_title }}</title>
    <meta name="title" content="{{ $seo->page_titile ?? $global_setting->page_title }}">
    <meta name="description" content="{{ $seo->page_description ?? $global_setting->page_description }}">
    <meta name="keywords" content="{{ $seo->page_keyword ?? $global_setting->page_keyword }}">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="1 days">
    <meta name="author" content="{{ $global_setting->site_name ?? '' }}">


    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ $global_setting->website_full_address ?? '' }}">
    <meta property="og:title" content="{{ $seo->page_title ?? $global_setting->page_title }}">
    <meta property="og:description" content="{{ $seo->page_description ?? $global_setting->page_description }}">
    <meta property="og:image" content="{{ $seo->banner_image ?? '/uploads/icons/' . $global_setting->site_logo }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ $global_setting->website_full_address ?? '' }}">
    <meta property="twitter:title" content="{{ $seo->page_title ?? $global_setting->page_title }}">
    <meta property="twitter:description" content="{{ $seo->page_description ?? $global_setting->page_description }}">
    <meta property="twitter:image"
        content="{{ $seo->banner_image ?? '/uploads/icons/' . $global_setting->site_logo }}">



    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ '/uploads/icons/' . $global_setting->favicon }}" type="image/png">


    <!--Bootstrap and Other Vendors-->
    <link rel="stylesheet" href="/website/css/bootstrap.min.css">
    <link rel="stylesheet" href="/website/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/website/css/font-awesome.min.css">
    <link rel="stylesheet" href="/website/vendors/owl.carousel/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/website/vendors/rs-plugin/css/settings.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/website/vendors/js-flickr-gallery/css/js-flickr-gallery.css"
        media="screen" />
    <link rel="stylesheet" type="text/css" href="/website/vendors/lightbox/css/lightbox.css" media="screen" />
    <link rel="stylesheet" href='https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/css/lightgallery.css'>

    <!--Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,100,800,900,400,200,300' rel='stylesheet'
        type='text/css'>
    <link
        href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>

    <!--Construction Styles-->
    <link rel="stylesheet" href="/website/css/style.css">
</head>

<body>
    <header class="row">
        <div class="container">
            <div class="row">
                <div class="logo col-sm-3">
                    <div class="row">
                        <a href="/"><img src="{{ '/uploads/icons/' . $global_setting->site_logo }}"
                                alt="logo"></a>
                    </div>
                </div>
                <div class="social_nav col-sm-9">
                    <div class="row">
                        <ul class="list-inline fright">
                            <li><a target="_blank" href="{{ $global_setting->facebook ?? '#' }}"><i
                                        class="fa fa-facebook"></i></a>
                            </li>
                            <li><a target="_blank" href="{{ $global_setting->linkedin ?? '#' }}"><i
                                        class="fa fa-linkedin"></i></a>
                            </li>
                            {{-- <li><a href="#"><i class="fa fa-instagram"></i></a></li> --}}
                            <li><a target="_blank" href="{{ $global_setting->twitter ?? '#' }}"><i
                                        class="fa fa-twitter"></i></a></li>
                            {{-- <li><a href="#"><i class="fa fa-youtube"></i></a></li> --}}
                        </ul>
                        <ul class="list-inline c-info fright">
                            <li><a href="tel: {{ $global_setting->phone_ne }}"><i class="fa fa-phone"></i>
                                    {{ $global_setting->phone_ne }}</a></li>
                            <li><a href="tel: {{ $global_setting->phone }}"><i class="fa fa-phone"></i>
                                    {{ $global_setting->phone }}</a></li>
                            <li><a href="{{ $global_setting->site_email }}"><i class="fa fa-envelope-o"></i>
                                    {{ $global_setting->site_email }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--Header-->

    <nav class="navbar navbar-default navbar-static-top">
        <div class="container-fluid container">
            <div class="row m04m">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#main_nav">
                        <span class="bars">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </span>
                        <span class="btn-text">Menu</span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="nav navbar-nav">
                        <li><a href="/">Home</a></li>

                        @foreach ($menus as $menu)
                            @php $submenus = $menu->childs; @endphp
                            <li class="dropdown" @if (isset($slug_detail) && $slug_detail->nav_name == $menu->nav_name)  @endif>
                                <a class="dropdown-toggle"
                                    @if ($submenus->count() > 0) href="#" @else href="{{ route('category', $menu->nav_name) }}" @endif>{{ $menu->caption }}</a>



                                @if ($submenus->count() > 0)
                                    <ul class="dropdown-menu" role="menu">
                                        @foreach ($submenus as $sub)
                                            <li>
                                                <a
                                                    href="{{ route('subcategory', [$menu->nav_name, $sub->nav_name]) }}">{{ $sub->caption }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach




                        <li><a class="active" href="/contact">Contact</a></li>
                    </ul>
                    <div class="apply-button">
                        <a href="/jobapply" class="btn btn-default">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>



    @yield('content')


    <footer id="nr_footer" class="row">
        <div class="container">
            <div class="row goTop">
                <a href="#top"><i class="fa fa-angle-up"></i></a>
            </div>
            <div class="footerWidget row">
                <div class="col-sm-12 widget">
                    <div class="getInTouch_widget row">
                        <div class="widgetHeader row m0"><img src="images/whiteSquare.png" alt="">Get in
                            touch</div>
                        <div class="row getInTouch_tab m0">
                            <ul class="nav" id="getInTouch_tab">
                                <li>
                                    <div class="touch-box"><i class="fa fa-phone"></i></div>
                                    <div class="touc-box-text">
                                        {{-- <a href="tel:977014351732">+977 (01) 4351732</a> / <a
                                            href="tel:977014365826">4365826</a> --}}
                                        <a href="{{ $global_setting->phone }}">{{ $global_setting->phone }}</a> / <a
                                            href="{{ $global_setting->phone_ne }}">{{ $global_setting->phone_ne }}</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="touch-box"><i class="fa fa-envelope"></i></div>
                                    <div class="touc-box-text">
                                        <a
                                            href="{{ $global_setting->site_email }}">{{ $global_setting->site_email }}</a>
                                    </div>
                                </li>
                                <li class="map-box">

                                    {!! $global_setting->page_keyword !!}

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row copyrightRow">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script> Blue Ocean Overseas Pvt. Ltd., All Rights Reserved. Developed by <a
                    href="https://radiantnepal.com/" target="_blank">Radiant Infotech</a>
            </div>
        </div>
    </footer>




    <!--jQuery, Bootstrap and other vendor JS-->
    <script src="website/js/jquery-2.1.3.min.js"></script>
    <script src="website/js/bootstrap.min.js"></script>

    <script src="website/vendors/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="website/vendors/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="website/vendors/owl.carousel/js/owl.carousel.min.js"></script>

    <script src="website/vendors/js-flickr-gallery/js/js-flickr-gallery.min.js"></script>
    <script src="website/vendors/lightbox/js/lightbox.min.js"></script>
    <!--Isotope-->
    <script src="website/vendors/isotope/isotope-custom.js"></script>

    <!--Construction JS-->
    <script src="website/js/custom.js"></script>
    <script type="text/javascript"></script>


 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!-- gllery js -->
    <script src="/website/js/gallery/picturefill.min.js"></script>
    <script src="/website/js/gallery/lightgallery.js"></script>
    <script src="/website/js/gallery/lg-pager.js"></script>
    <script src="/website/js/gallery/lg-autoplay.js"></script>
    <script src="/website/js/gallery/lg-fullscreen.js"></script>
    <script src="/website/js/gallery/lg-zoom.js"></script>
    <script src="/website/js/gallery/lg-hash.js"></script>
    <script src="/website/js/gallery/lg-share.js"></script>
    <!--End gllery js -->

    <!--Construction JS-->
    <script src="/website/js/custom.js"></script>

    <script>
        lightGallery(document.getElementById('lightgallery'));

        $(function() {
            var selectedClass = "";
            $(".filter").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#lightgallery").fadeTo(100, 0.1);
                $("#lightgallery div").not("." + selectedClass).fadeOut().removeClass('animation');
                setTimeout(function() {
                    $("." + selectedClass).fadeIn().addClass('animation');
                    $("#lightgallery").fadeTo(300, 1);
                }, 300);
            });
        });
    </script>















    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    @if (Session::has('contact'))
        <script>
            Swal.fire(
                'Thanks!',
                "Form submitted sucessfully!!!",
                'success'
            )
        </script>
    @endif
</body>

</html>
