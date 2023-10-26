@extends('backend.layouts.app')

@section('content')
<!-- [ Layout content ] Start -->
<div class="layout-content">

    <!-- [ content ] Start -->
    <div class="container-fluid flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-0">Hosting Category</h4>
        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active">Hosting Category</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-7">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover">
                            <tr>
                                <th>Name</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($hosting_cats as $cats)
                            <tr>
                                <td>{{ $cats->name }}</td>
                                <td>{{ $cats->title }}</td>
                                <td><img width ="60px" src="{{ asset('uplodes/hosting') }}/{{ $cats->cat_img }}" alt=""></td>
                                <td><a href="{{ route('hosting.category.delete', $cats->id) }}" class="btn btn-round btn-danger">Delete</a></td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card mb-4">
                    <div class="card-body">
                        <form id="validation-form" action="{{ route('hosting.category.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Title">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Image</label>
                                <input type="file" class="form-control" name="cat_img" placeholder="Image">
                                <div class="clearfix"></div>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- [ content ] End -->
@endsection
