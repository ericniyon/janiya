@extends('backend.base')
@section('content')


<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Category
                        <small>Multikart Admin panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></a></li>
                    <li class="breadcrumb-item">Physical</li>
                    <li class="breadcrumb-item active">Category</li>
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


<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Products Category  </h5>
                {{-- <a href="" onclick="alert('hello')">Test alert</a> --}}
            </div>
            <div class="card-body">




                <div class="btn-popup pull-right">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal">Add Category</button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Add Physical Product</h5>
                                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                    <form class="needs-validation" action="{{route('save-category')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form">
                                            <div class="form-group">
                                                <label for="validationCustom01" class="mb-1">Category Name :</label>
                                                <input class="form-control" name="category_name" id="validationCustom01" type="text">
                                            </div>
                                            <div class="form-group mb-0">
                                                <label for="validationCustom02" class="mb-1">Category Image :</label>
                                                <input class="form-control" name="category_image" id="validationCustom02" type="file">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-primary" type="submit">Save</button>
                                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Category Id</th>
                            <th>Category Name</th>
                            <th>Options</th>
                        </tr>
                    </thead>

                    <tbody>

                        @if ($categories->count()>0)
                        @foreach ($categories as $category)

                        <tr>
                            <td>#{{$category->id}}</td>
                            <td>{{$category->category_name}}</td>
                            <td></td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="3" class="text-center">Ther's no Product category yet !</td>
                        </tr>
                        @endif
                    </tbody>
                </table>

                </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script type="text/javascript">

$(document).ready(function (e) {


   $('#image').change(function(){

    let reader = new FileReader();

    reader.onload = (e) => {

      $('#preview-image-before-upload').attr('src', e.target.result);
    }

    reader.readAsDataURL(this.files[0]);

   });

});

</script>
@endsection
