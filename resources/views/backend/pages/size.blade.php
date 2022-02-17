@extends('backend.base')

@section('title')
<title>Size</title>
@endsection


@section('content')
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col">
                <div class="page-header-left">
                    <h3>Create Sizes
                        <small>Multikart Admin panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></a></li>
                    <li class="breadcrumb-item">Menus</li>
                    <li class="breadcrumb-item active">Create Size</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@if($message = Session::get('message'))
    <div class="alert alert-success">
        <p>{{$message}}</p>
    </div>
@endif

<script src="{{asset('assets/js/jscolor.js')}}"></script>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Add Size</h5>
                </div>
                <div class="card-body">
                    <form class="needs-validation" action="save-size" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span>Sise Name</label>
                            <div class="col-md-8">
                                <input class="form-control" id="validationCustom0" type="text" required="" name="size">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary d-block">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
