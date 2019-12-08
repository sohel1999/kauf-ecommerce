@extends('backend.layouts.master')

@section('title') {{$pageTitle}} @endsection
@push('css')
    <style xmlns="http://www.w3.org/1999/html">
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
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">
                    <i class="ti-settings"></i>{{$pageTitle}}
                </h2>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="" class="breadcrumb-link">
                                    <i class="ti-home"></i>
                                    Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Category</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5">
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
                    <a class="nav-link" id="siteLogo-link-tab" data-toggle="tab" href="#social-link"
                       role="tab"
                       aria-controls="profile" aria-selected="false">Social Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="payments-tab" data-toggle="tab" href="#payments" role="tab"
                       aria-controls="contact" aria-selected="false">Payment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="mobile-payments-tab" data-toggle="tab" href="#mobile-payments" role="tab"
                       aria-controls="contact" aria-selected="false">Mobile Payment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tax-tab" data-toggle="tab" href="#tax" role="tab"
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
                        <h5 class="card-header">Analytics</h5>
                        <div class="card-body">
                            <form method="post" action="{{route('setting.update')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="google_analytics" class="col-form-label">Google Analytics</label>
                                    <input id="google_analytics" type="text"
                                           value="{{config('settings.google_analytics')}}" name="google_analytics"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="facebook_pixels" class="col-form-label">Facebook Pixels</label>
                                    <input id="facebook_pixels" type="text"
                                           value="{{config('settings.facebook_pixels')}}" name="facebook_pixels"
                                           class="form-control">
                                </div>

                                <button type="submit" class="btn btn-primary float-right">Update</button>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="social-link" role="tabpanel"
                     aria-labelledby="contact-link-tab">
                    <div class="card">
                        <h5 class="card-header">Social Link</h5>
                        <div class="card-body">
                            <form method="post" action="{{route('setting.update')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="social_facebook" class="col-form-label">Facebook</label>
                                    <input id="social_facebook" type="text"
                                           value="{{config('settings.social_facebook')}}" name="social_facebook"
                                           class="form-control @error('social_facebook') is-invalid @enderror">
                                    <span> @error('social_facebook') {{$message}} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="social_twitter" class="col-form-label">twitter</label>
                                    <input id="social_twitter" type="text" value="{{config('settings.social_twitter')}}"
                                           name="social_twitter" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="social_instagram" class="col-form-label">Instagram</label>
                                    <input id="social_instagram" type="text"
                                           value="{{config('settings.social_instagram')}}" name="social_instagram"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="social_linkedin" class="col-form-label">Linkedin</label>
                                    <input id="social_linkedin" type="text"
                                           value="{{config('settings.social_linkedin')}}" name="social_linkedin"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="social_pinterest" class="col-form-label">Pinterest</label>
                                    <input id="social_pinterest" type="text"
                                           value="{{config('settings.social_pinterest')}}" name="social_pinterest"
                                           class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary float-right">Update</button>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="payments" role="tabpanel"
                     aria-labelledby="payments-tab">
                    <div class="card">
                        <h5 class="card-header">Payments Method</h5>
                        <div class="card-body">
                            <form method="post" action="{{route('setting.update')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="stripe_payment_method" class="col-form-label">Stripe Payment
                                        Method</label>
                                    <input id="stripe_payment_method" type="text"
                                           value="{{config('settings.stripe_payment_method')}}"
                                           name="stripe_payment_method" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="stripe_key" class="col-form-label">Stripe Key</label>
                                    <input id="stripe_key" type="text" value="{{config('settings.stripe_key')}}"
                                           name="stripe_key" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="stripe_secret_key" class="col-form-label">Stripe Secret Key</label>
                                    <input id="stripe_secret_key" type="text"
                                           value="{{config('settings.stripe_secret_key')}}" name="stripe_secret_key"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="paypal_payment_method" class="col-form-label">Paypal Payment
                                        Method</label>
                                    <input id="paypal_payment_method" type="text"
                                           value="{{config('settings.paypal_payment_method')}}"
                                           name="paypal_payment_method" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="paypal_client_id" class="col-form-label">Paypal Client Id</label>
                                    <input id="paypal_client_id" type="text"
                                           value="{{config('settings.paypal_client_id')}}" name="paypal_client_id"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="paypal_secret_id" class="col-form-label">Paypal Secret Id</label>
                                    <input id="paypal_secret_id" type="text"
                                           value="{{config('settings.paypal_secret_id')}}" name="paypal_secret_id"
                                           class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary float-right">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="mobile-payments" role="tabpanel"
                     aria-labelledby="mobile-payments-tab">
                    <div class="card">
                        <h5 class="card-header">Mobile Payments Method</h5>
                        <div class="card-body">
                            <form method="post" action="{{route('setting.update')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="bkash_number" class="col-form-label">bkash Number</label>
                                    <input id="bkash_number" type="tel" value="{{config('settings.bkash_number')}}"
                                           name="bkash_number" class="form-control international-inputmask">
                                </div>
                                <div class="form-group">
                                    <label for="rocket_number" class="col-form-label">Rocket Number</label>
                                    <input id="rocket_number" type="tel" value="{{config('settings.rocket_number')}}"
                                           name="rocket_number" class="form-control international-inputmask">
                                </div>
                                <div class="form-group">
                                    <label for="dutch_bangla_number" class="col-form-label">Dutch Bangla Number</label>
                                    <input id="dutch_bangla_number" type="tel"
                                           value="{{config('settings.dutch_bangla_number')}}" name="dutch_bangla_number"
                                           class="form-control international-inputmask">
                                </div>
                                <button type="submit" class="btn btn-primary float-right">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tax" role="tabpanel"
                     aria-labelledby="tax-tab">
                    <div class="card">
                        <h5 class="card-header">Tax</h5>
                        <div class="card-body">
                            <form method="post" action="{{route('setting.update')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="tax" class="col-form-label">Tax (%)</label>
                                    <input id="tax" type="tel" value="{{config('settings.tax')*100}}" name="tax"
                                           class="form-control percent">
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
        $(document).ready(function () {
            $('.percent').inputmask('########%', {reverse: true});
            $(".international-inputmask").inputmask("+(88)#######-#####", {reverse: true});
        });
    </script>
@endpush
