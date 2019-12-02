@extends('backend.layouts.master')

@section('title') {{$pageTitle}} @endsection
@push('css')
    <style>
        img.site-logo {
            vertical-align: middle;
            border-style: none;
            width: 100%;
            margin-top: 5px;

        }

        .image {
            width: 60px;
        }
    </style>
@endpush
@section('content')

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5">
        <div class="section-block">
            <h5 class="section-title bg-white py-2 pl-2"><i class="ti-settings"></i>{{$pageTitle}}</h5>
        </div>
        <div class="tab-vertical">
            <ul class="nav nav-tabs" id="myTab3" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="general-vertical-tab" data-toggle="tab" href="#general-vertical"
                       role="tab"
                       aria-controls="home" aria-selected="true">General</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="siteLogo-vertical-tab" data-toggle="tab" href="#siteLogo-vertical"
                       role="tab"
                       aria-controls="profile" aria-selected="false">Site Logo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="footer-seo-tab" data-toggle="tab" href="#footer-seo-vertical"
                       role="tab"
                       aria-controls="profile" aria-selected="false">footer-seo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="siteLogo-vertical-tab" data-toggle="tab" href="#analytics-vertical"
                       role="tab"
                       aria-controls="profile" aria-selected="false">analytics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="siteLogo-vertical-tab" data-toggle="tab" href="#social_facebook-vertical"
                       role="tab"
                       aria-controls="profile" aria-selected="false">social_facebook</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-vertical-tab" data-toggle="tab" href="#payment-vertical" role="tab"
                       aria-controls="contact" aria-selected="false">Payment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-vertical-tab" data-toggle="tab" href="#taxt-vertical" role="tab"
                       aria-controls="contact" aria-selected="false">Tax</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent3">
            {{-- general-vertical start--}}
                <div class="tab-pane fade show active" id="general-vertical" role="tabpanel"
                     aria-labelledby="general-vertical">
                    <div class="card">
                        <h5 class="card-header">General</h5>
                        <div class="card-body">
                            <form action="{{route('setting.update')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="siteLogo" class="col-form-label">Site Name</label>
                                    <input id="siteLogo" type="text" name="site_name" class="form-control"
                                           value="{{config('settings.site_name')}}"
                                    >
                                </div>
                                <div class="form-group">
                                    <label for="site_title" class="col-form-label">Site Title</label>
                                    <input id="site_title" type="text" value="{{config('settings.site_title')}}"
                                           name="site_title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-form-label">Default Email address</label>
                                    <input id="site_title" value="{{config('settings.default_email_address')}}"
                                           type="text" name="default_email_address"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-form-label">Currency Code</label>
                                    <input id="site_title" value="{{config('settings.currency_code')}}" type="text"
                                           name="currency_code" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-form-label">currency_symbol </label>
                                    <input id="site_title" value="{{config('settings.currency_symbol')}}" type="text"
                                           name="currency_symbol" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary float-right">Update</button>
                            </form>
                        </div>
                    </div>

                </div>
                {{-- general-vertical end--}}
                <div class="tab-pane fade" id="siteLogo-vertical" role="tabpanel"
                     aria-labelledby="profile-vertical-tab">
                    <div class="card">
                        <h5 class="card-header">Site Logo</h5>
                        <div class="card-body">

                            <form method="post" action="{{route('setting.update')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="image">
                                            <img class="site-logo"
                                                 src="{{asset('uploads/sitelogo/'.config('settings.site_logo'))}}"
                                                 alt="site_logo">
                                        </div>
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="form-group">
                                            <label for="siteLogo" class="col-form-label">Site Logo</label>
                                            <input id="siteLogo" type="file" name="site_logo" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="image">
                                            <img class="site-logo"
                                                 src="{{asset('uploads/sitelogo/'.config('settings.site_favicon'))}}"
                                                 alt="site_logo">
                                        </div>
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="form-group">
                                            <label for="siteLogo" class="col-form-label">site_favicon</label>
                                            <input id="siteLogo" type="file" name="site_favicon" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary float-right">Update</button>
                            </form>

                        </div>
                    </div>

                </div>

                <div class="tab-pane fade" id="footer-seo-vertical" role="tabpanel"
                     aria-labelledby="footer-seo-vertica">
                    <div class="card">
                        <h5 class="card-header">footer-seo</h5>
                        <div class="card-body">
                            <form method="post" action="{{route('setting.update')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="siteLogo" class="col-form-label">footer_copyright_text</label>
                                    <input id="siteLogo" type="text"
                                           value="{{config('settings.footer_copyright_text')}}"
                                           name="footer_copyright_text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="site_title" class="col-form-label">seo_meta_title</label>
                                    <input id="site_title" value="{{config('settings.seo_meta_title')}}" type="text"
                                           name="seo_meta_title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-form-label">seo_meta_description</label>
                                    <input id="site_title" type="text" name="seo_meta_description"
                                           class="form-control" value="{{config('settings.seo_meta_description')}}">
                                </div>
                                <button type="submit" class="btn btn-primary float-right">Update</button>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="analytics-vertical" role="tabpanel"
                     aria-labelledby="contact-vertical-tab">
                    <div class="card">
                        <h5 class="card-header">social_facebook</h5>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="siteLogo" class="col-form-label">Site Name</label>
                                    <input id="siteLogo" type="text" name="site_name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="site_title" class="col-form-label">Site Title</label>
                                    <input id="site_title" type="text" name="site_title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-form-label">Default Email address</label>
                                    <input id="site_title" type="text" name="default_email_address"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-form-label">Currency Code</label>
                                    <input id="site_title" type="text" name="currency_code" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary float-right">Update</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
@push('js')
    <script>
        $(function () {
            "use strict";
            $(".currency-inputmask").inputmask("$9999");
        })
    </script>
@endpush
