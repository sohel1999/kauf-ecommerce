@extends('backend.layouts.master')

@section('title') {{$pageTitle}}@endsection

@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Category List</h2>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="" class="breadcrumb-link">
                                    <i class="ti-home"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Category</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Category Form</h5>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="name" class="col-form-label">Category Name</label>
                            <input id="name" type="text" name="name" class="form-control" placeholder="category name">
                        </div>
                        <div class="form-group">
                            <label for="input-select">Parent Category</label>
                            <select class="form-control" id="input-select" name="parent_id">
                                <option value="1">Root</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">File Input</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex">
                                    <div class="custom">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" checked="" class="custom-control-input"><span
                                                class="custom-control-label">is_menu</span>
                                        </label>
                                    </div>
                                    <div class="custom">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" checked="" class="custom-control-input"><span
                                                class="custom-control-label">featured</span>
                                        </label>
                                    </div>
                                    <div class="custom">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" checked="" class="custom-control-input"><span
                                                class="custom-control-label">Active</span>
                                        </label>
                                    </div>
                                </div>
                                <div>
                                    <button class="btn btn-primary" type="submit">
                                        <i class="ti-save"></i>
                                        Save
                                    </button>
                                </div>

                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection
