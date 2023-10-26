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
            <div class="col-lg-7 col-7">
                <div class="card">
                    <div class="card-body">
                        <table class="">
                            <tr>
                                <th>Name</th>
                                <th>Company</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($client_lists as $client)
                            <tr>
                                <td>{{ $client->name }}</td>
                                <td>{{ $client->company }}</td>
                                <td>{{ $client->title }}</td>
                                <td>{{ $client->description }}</td>
                                <td><img width ="60px" src="{{ asset('uplodes/client') }}/{{ $client->image }}" alt=""></td>
                                <td>
                                    <form action="{{ route('client.destroy', $client->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-round btn-danger" style="border: none">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-5">
                <div class="card mb-4">
                    <div class="card-body">
                        <form id="validation-form" action="{{ route('client.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Company</label>
                                <input type="text" class="form-control" name="company" placeholder="Company">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Title">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Description</label>
                                <textarea name="description" class="form-control" id="" cols="30" rows="10" placeholder="Description"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Image</label>
                                <input type="file" class="form-control" name="image" placeholder="Image">
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
