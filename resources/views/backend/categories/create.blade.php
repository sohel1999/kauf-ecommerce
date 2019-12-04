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
                    <form action="{{route('categories.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="col-form-label">Category Name</label>
                            <input
                                id="name" type="text" name="name" value="{{request()->old('name')}}"
                                class="form-control @error('name') is-invalid @enderror"
                                placeholder="category name">
                            @error('name') <span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="input-select">Parent Category</label>
                            <select class="form-control @error('parent_id') is-invalid @enderror" id="input-select"
                                    name="parent_id">
                                <option value="0">Select a parent category</option>
                                @isset($categories)
                                    @foreach($categories as $key=>$category)
                                        <option value="{{$key}}">{{$category->name}}</option>
                                    @endforeach
                                @endisset
                            </select>
                            @error('parent_id') <span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description"
                                      rows="3">{{request()->old('description')}}</textarea>
                        </div>
                        <div class="form-group">
                            <div class="custom-file mb-3">
                                <input type="file" name="image"
                                       class="custom-file-input @error('image') is-invalid @enderror "
                                       id="customFile">
                                <label class="custom-file-label" for="customFile">File Input</label>
                                @error('image') <span class="text-danger">{{$message}}</span>@enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex">
                                    <div class="custom">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" value="1" checked name="is_menu"
                                                   class="custom-control-input"><span
                                                class="custom-control-label">is_menu</span>
                                        </label>
                                    </div>
                                    <div class="custom">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" name="featured" checked value="1"
                                                   class="custom-control-input"><span
                                                class="custom-control-label">featured</span>
                                        </label>
                                    </div>
                                    <div class="custom">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" name="status" checked=""
                                                   class="custom-control-input" value="1"><span
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
