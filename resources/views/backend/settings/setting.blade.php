@extends('backend.layouts.master')

@section('title') {{$pageTitle}} @endsection

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
                    <a class="nav-link" id="siteLogo-vertical-tab" data-toggle="tab" href="#siteLogo-vertical"
                       role="tab"
                       aria-controls="profile" aria-selected="false">footer-seo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="siteLogo-vertical-tab" data-toggle="tab" href="#siteLogo-vertical"
                       role="tab"
                       aria-controls="profile" aria-selected="false">analytics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="siteLogo-vertical-tab" data-toggle="tab" href="#siteLogo-vertical"
                       role="tab"
                       aria-controls="profile" aria-selected="false">Site Logo</a>
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
                                <button type="submit" class="btn btn-primary float-right">Update</button>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="siteLogo-vertical" role="tabpanel"
                     aria-labelledby="profile-vertical-tab">
                    <div class="card">
                        <h5 class="card-header">General</h5>
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
                <div class="tab-pane fade" id="payment-vertical" role="tabpanel" aria-labelledby="contact-vertical-tab">
                    <div class="card">
                        <h5 class="card-header">General</h5>
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
                <div class="tab-pane fade" id="taxt-vertical" role="tabpanel" aria-labelledby="contact-vertical-tab">
                    <div class="card">
                        <h5 class="card-header">General</h5>
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
