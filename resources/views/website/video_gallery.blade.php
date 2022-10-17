@php
    $gallery_breed = App\Models\Navigation::find(2490);
    //  $gallery_breed = App\Models\Navigation::find(2489);
@endphp


@extends('layouts.master')
@push('title')
    {{ $gallery_breed->caption }}
@endpush
@section('content')
    <section id="pageCover" class="row aboutUs">
        <div class="row pageTitle">Gallery</div>
        <div class="row pageBreadcrumbs">
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active">{{ $gallery_breed->caption }}</li>
            </ol>
        </div>
    </section>

    <!--
               =============================================
                Video Foloder
               ==============================================
               -->
    <div class="gallery" style="margin: 80px">
        <div class="container">
            <div class="row">
                @foreach ($photos as $photo)
                    <div class="col-md-6 col-sm-6">
                        <iframe width="100%" height="315" src="{{ $photo->link }}" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                @endforeach
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div>
@endsection
