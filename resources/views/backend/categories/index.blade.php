@extends('backend.layouts.master')

@section('title') {{$pageTitle}}@endsection

@section('content')
    @component('backend.componets.breadcrumb')
        @slot('title')
            Category List
        @endslot
        @slot('page')
            Category
        @endslot
    @endcomponent
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('categories.create')}}" class="btn btn-primary float-right">
                        <i class="ti-plus"></i>
                        Add Category
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered second" style="width:100%">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>is_menu</th>
                                <th>status</th>
                                <th>featured</th>
                                <th>parent_id</th>
                                <th>image</th>
                                <th>action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($categories as $key=>$category)
                                <tr>
                                    <td>{{$category->name}}</td>
                                    <td>
                                        @php
                                            if($category->is_menu){
                                            echo "<span class=\"badge badge-success\">yes</span>";
                                            }else{
                                            echo "<span class=\"badge badge-danger\">no</span>";
                                            }
                                        @endphp
                                    </td>
                                    <td> @php
                                            if($category->status){
                                            echo "<span class=\"badge badge-success\">yes</span>";
                                            }else{
                                            echo "<span class=\"badge badge-danger\">no</span>";
                                            }
                                        @endphp</td>
                                    <td> @php
                                            if($category->featured){
                                            echo "<span class=\"badge badge-success\">yes</span>";
                                            }else{
                                            echo "<span class=\"badge badge-danger\">no</span>";
                                            }
                                        @endphp</td>
                                    <td>{{ optional($category->parent)->name}}</td>
                                    <td>
                                        <img src="{{$category->image}}" alt="" width="100px"
                                             class="rounded-circle mr-3">
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="dropdown mr-1">
                                                <button type="button" class="btn btn-primary dropdown-toggle"
                                                        id="dropdownMenuOffset" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false" data-offset="10,20">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                                    <a class="dropdown-item"
                                                       href="{{route('categories.edit',$category->id)}}">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>is_menu</th>
                                <th>status</th>
                                <th>featured</th>
                                <th>parent_id</th>
                                <th>image</th>
                                <th>action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
