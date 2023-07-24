@extends('backend.base')

@section('title')
<title>Colors</title>
@endsection


@section('content')
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col">
                <div class="page-header-left">
                    <h3>Product Colors
                        <small>{{config('app.name')}} Admin panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></a></li>
                    <li class="breadcrumb-item">Menus</li>
                    <li class="breadcrumb-item active">Product Colors</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@if(session()->has('message'))
    <div class="alert alert-success">
        <p>{{ session()->get('message') }}</p>
    </div>
@endif

<script src="{{asset('assets/js/jscolor.js')}}"></script>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>Add Color</h5>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-original-title="test" data-bs-target="#exampleModal">Add Product Color</button>
                </div>
                <div class="card-body row">
                    <ul class="col-md-5 d-flex flex-column">
                        <li class="d-flex justify-content-between">
                            <strong>Color</strong>
                            <strong>Code</strong>
                            <strong>Action</strong>
                        </li>
                        @foreach ($colors as $item)
                        <li class="d-flex justify-content-between">
                            <span class="d-flex align-items-center">
                                <div style="width: 14px; height:14px;background-color:{{$item->color_code}}"></div>
                                {{$item->color_name}}
                            </span>
                            <span>{{$item->color_code}}</span>
                            <form action="{{route('admin.delete-color',$item->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-none text-danger">
                                    <i class="fa fa-times"></i>
                                </button>
                            </form>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title f-w-600" id="exampleModalLabel">Add Product Color</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" action="save-color" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span>Color Name</label>
                        <div class="col-md-8">
                            <input class="form-control" id="validationCustom0" type="text"
                            required name="color_name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-xl-3 col-md-4">Color Code</label>
                        <div class="col-xl-9 col-md-8">
                            <div class="checkbox checkbox-primary">

                                <input id="checkbox-primary-2" required type="color" name="color_code">
                                <label for="checkbox-primary-2">Select Color</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary d-block">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('assets/js/jscolor.js')}}"></script>
@endsection
