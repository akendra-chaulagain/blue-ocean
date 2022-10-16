@extends('layouts.master')
@section('content')
    <section id="pageCover" class="row aboutUs">
        <div class="row pageTitle">{{ $normal->caption }}</div>
        <div class="row pageBreadcrumbs">
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active">{{ $normal->caption }}</li>
            </ol>
        </div>
    </section>

    <section id="aboutus" class="row">
        <div class="container">
            <div class="row">
                @if ($normal->banner_image)
                    <div class=" col-sm-9">
                        <div class="row aboutContent">
                            <div class="row aboutUsTexts m0 member">
                                <div class="fleft textsPart">
                                    <h2>{!! $normal->short_content !!}</h2>
                                    <p>{!! $normal->long_content !!}</p>
                                </div>
                                <div class="fleft aboutImg">
                                    <img src="{{ $normal->banner_image }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-sm-9">
                        <div class="row aboutContent">
                            <div class="row aboutUsTexts m0 member">
                                <div class="fleft textsPart">
                                    <h2>{!! $normal->short_content !!}</h2>
                                    <p>{!! $normal->long_content !!}</p>
                                </div>

                            </div>
                        </div>
                    </div>
                @endif

                <aside class="col-sm-3 sidebar">
                    <div class="row m0 recentPostWidget widgetS">
                        <div class="row m0 recentblogs">
                            <div class="media recentblog">
                                <div class="media-body">
                                    <a href="#">
                                        <h5 class="media-heading">About Us</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="media recentblog">
                                <div class="media-body">
                                    <a href="#">
                                        <h5 class="media-heading">Services</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="media recentblog">
                                <div class="media-body">
                                    <a href="#">
                                        <h5 class="media-heading">Our Partners</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="media recentblog">
                                <div class="media-body">
                                    <a href="#">
                                        <h5 class="media-heading">Gallery</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="media recentblog">
                                <div class="media-body">
                                    <a href="#">
                                        <h5 class="media-heading">Contact Us</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row m0 contactWidget widgetS">
                        <h4>Contact us</h4>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-phone"></i> <a href="tel:977014351732">+977 (01) 4351732 / <a
                                        href="tel:977014365826">4365826</a></a></li>
                            <li><i class="fa fa-envelope"></i> <a
                                    href="mailto:info@blueocean.com.np">info@blueocean.com.np</a></li>
                            <li><i class="fa fa-home"></i> street address example</li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>
@endsection
