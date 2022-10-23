@extends('layouts.master')
@push('title')
    Home
@endpush

@section('content')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
        Swal.fire({
            html: '<a href="#"></a> ',
            timer: 60000,
            timerProgressBar: true,
            imageUrl: 'website/images/recruitment.jpeg',
            imageAlt: 'Custom image',
            showCloseButton: true,
            showConfirmButton: false,
        })
    </script>
    <style>
        .swal2-container.swal2-backdrop-show,
        .swal2-container.swal2-noanimation {
            background: rgb(0 0 0 / 78%);
        }

        .swal2-popup {
            width: auto !important;
            padding: 0;
        }

        .swal2-image {
            max-width: 1900px !important;
            max-height: 800px !important;
            margin: 0 !important;
            width: 100% !important;
            height: auto !important;
        }

        .swal2-close,
        .swal2-close:focus,
        .swal2-close:hover,
        .swal2-close:active {
            outline: none !important;
            border: 0 !important;
            box-shadow: none;
            color: #ffffff;
            font-size: 30px;
        }

        .swal2-html-container {
            margin: 0;
        }

        .swal2-html-container a {
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
        }
    </style>
















    @include('website.main_slider')
    @include('website.company-success')
    @include('website.home_about_company')
    @include('website.home_job_category')
    @include('website.home_message')
    @include('website.home_notice')
    @include('website.company_partner')
@endsection
