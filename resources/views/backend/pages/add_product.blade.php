@extends('backend.base')
@section('content')
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Add Products
                        <small>Multikart Admin panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></a></li>
                    <li class="breadcrumb-item">Digital</li>
                    <li class="breadcrumb-item active">Add Product</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row product-adding">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h5>General</h5>
                </div>
                <div class="card-body">
                    <div class="digital-add needs-validation">
                        <div class="form-group">
                            <label for="validationCustom01" class="col-form-label pt-0"><span>*</span> Title</label>
                            <input class="form-control" id="validationCustom01" type="text" required="">
                        </div>
                        <div class="form-group">
                            <label for="validationCustomtitle" class="col-form-label pt-0"><span>*</span> SKU</label>
                            <input class="form-control" id="validationCustomtitle" type="text" required="">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label"><span>*</span> Categories</label>
                            <select class="custom-select form-control" required="">
                                <option value="">--Select--</option>
                                <option value="1">eBooks</option>
                                <option value="2">Graphic Design</option>
                                <option value="3">3D Impact</option>
                                <option value="4">Application</option>
                                <option value="5">Websites</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Sort Summary</label>
                            <textarea rows="5" cols="12"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="validationCustom02" class="col-form-label"><span>*</span> Product Price</label>
                            <input class="form-control" id="validationCustom02" type="text" required="">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label"><span>*</span> Status</label>
                            <div class="m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                <label class="d-block" for="edo-ani">
                                    <input class="radio_animated" id="edo-ani" type="radio" name="rdo-ani">
                                    Enable
                                </label>
                                <label class="d-block" for="edo-ani1">
                                    <input class="radio_animated" id="edo-ani1" type="radio" name="rdo-ani">
                                    Disable
                                </label>
                            </div>
                        </div>
                        <label class="col-form-label pt-0"> Product Upload</label>
                        <form class="dropzone digits dz-clickable" id="singleFileUpload" action="/upload.php">
                            <div class="dz-message needsclick"><i class="fa fa-cloud-upload"></i>
                                <h4 class="mb-0 f-w-600">Drop files here or click to upload.</h4>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            
            <div class="card">
                <div class="card-header">
                    <h5>Meta Data</h5>
                </div>
                <div class="card-body">
                    <div class="digital-add needs-validation">
                        <div class="form-group">
                            <label for="validationCustom05" class="col-form-label pt-0"> Meta Title</label>
                            <input class="form-control" id="validationCustom05" type="text" required="">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Meta Description</label>
                            <textarea rows="4" cols="12"></textarea>
                        </div>
                        <div class="form-group mb-0">
                            <div class="product-buttons text-center">
                                <button type="button" class="btn btn-primary">Add</button>
                                <button type="button" class="btn btn-light">Discard</button>
                            </div>
                        </div>
                    </div>
                </div>
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
