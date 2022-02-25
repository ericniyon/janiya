@extends('backend.base')
@section('title')
<title>View {{$product->name}}</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
 integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
 integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection
@section('content')

<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Dashboard
                        <small>{{config('app.name')}}</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Products</li>
                    <li class="breadcrumb-item active">{{$product->name}}</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header d-flex justify-content-between py-2 pt-3">
                    <h5>Product Details</h5>
                    <a href="#" data-toggle="modal" data-target="#updateProduct">update</a>
                </div>
                <div class="row card-body pt-0 mt-0">
                    <div class="col-5 d-flex flex-column justify-content-between">
                        <img src="{{asset(Storage::url($product->thumb->image))}}" class="rounded img-responsive w-100"
                        height="150">
                    </div>
                    <div class="col-7 d-flex flex-column justify-content-between">
                        <h5><strong>Name:</strong> {{$product->name}}</h5>
                        <h5><strong>Category:</strong> {{$product->product_categories->category_name}}</h5>
                        <h5><strong>Unit price:</strong> {{number_format($product->price)}} Rwf</h5>
                    </div>
                </div>
                <div class="row card-body">
                    <p>
                        {{$product->description}}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-header py-2 pt-3">
                    <h5>Available Product Sizes</h5>
                </div>
                <div class="row card-body pt-0 mt-0">
                    <div class="table-responsive">
                        <table class="table table-hover table-stripped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Size</th>
                                    <th>Quantity</th>
                                    <th>Addional Fees</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($product->sizes as $size)
                                   <tr class="@if($size->pivot->quantity < 10) bg-danger @elseif($size->pivot->quantity<20) bg-warning @endif">
                                       <td>{{$loop->iteration}}</td>
                                       <td>{{$size->size}}</td>
                                       <td>{{$size->pivot->quantity}}</td>
                                       <td>{{$size->additional_fees}}</td>
                                       <td><a href="#" data-toggle="modal" data-target="#update{{$size->id}}">Edit</a></td>
                                   </tr> 
                                   <div class="modal fade" id="update{{$size->id}}" tabindex="-1" role="dialog" aria-labelledby="update{{$size->id}}Label" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="update{{$size->id}}Label">Update {{$size->size}}</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <form action="{{route('admin.products.update.size',[$product->slug,$size->id])}}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-body">
                                                <label for="">Insert New Value to update {{$size->pivot->quantity}}</label>
                                              <input name="quantity" required value="{{old('quantity')}}"
                                               class="form-control @error('quantity') is-invalid @enderror" type="number">
                                               @error('quantity')
                                                   <span class="invalid-feedback" role="alert">{{$message}}</span>
                                               @enderror
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                              <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                @empty
                                    
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="card">
            <div class="card-header py-2 pt-3">
                <h5>Product Colors</h5>
            </div>
            <div class="row card-body pt-0 mt-0">
                <div class="table-responsive">
                    <table class="table table-hover table-stripped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Color Name</th>
                                <th>Quantity</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($product->colors as $color)
                               <tr class="@if($color->pivot->quantity < 10) bg-danger @elseif($color->pivot->quantity<20) bg-warning @endif">
                                   <td>{{$loop->iteration}}</td>
                                   <td>
                                       <img src="{{asset(Storage::url($color->pivot->image))}}" class="rounded" 
                                       height="50" width="40" alt="">
                                    </td>
                                   <td>{{$color->color_name}}</td>
                                   <td>{{$color->pivot->quantity}}</td>
                                   <td>
                                    <a href="#" data-toggle="modal" data-target="#updateColor{{$color->id}}">Edit</a>
                                   </td>
                               </tr>
                               <div class="modal fade" id="updateColor{{$color->id}}" tabindex="-1" role="dialog" aria-labelledby="updateColor{{$color->id}}Label" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="updateColor{{$color->id}}Label">
                                        Update quantity of {{$color->color_name}} in {{config('app.name')}} store</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <form action="{{route('admin.products.update.color',[$product->slug,$color->id])}}" 
                                        method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="">Insert New Value to update {{$color->pivot->quantity}}</label>
                                                <input name="quantity" required value="{{old('quantity',$color->pivot->quantity)}}"
                                                 class="form-control @error('quantity') is-invalid @enderror" type="number">
                                                 @error('quantity')
                                                     <span class="invalid-feedback" role="alert">{{$message}}</span>
                                                 @enderror
                                            </div>
                                            {{-- <div class="form-group">
                                                <label for="">New Color Image</label>
                                                <input name="image" accept="image/*"
                                                 class="form-control @error('image') is-invalid @enderror" type="file">
                                                 @error('image')
                                                     <span class="invalid-feedback" role="alert">{{$message}}</span>
                                                 @enderror
                                            </div> --}}
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                  </div>
                                </div>
                              </div> 
                            @empty
                                
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="updateProduct" tabindex="-1" role="dialog" 
aria-labelledby="updateProductLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="updateProductLabel">
            Update {{$product->name}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('admin.products.update',[$product->slug])}}" 
            method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-7">
                        <label for="">Product Name</label>
                        <input name="name" required value="{{old('name',$product->name)}}"
                         class="form-control @error('name') is-invalid @enderror" type="text">
                         @error('name')
                             <span class="invalid-feedback" role="alert">{{$message}}</span>
                         @enderror
                    </div>
                    <div class="form-group col-md-5">
                        <label for="">Unit Price</label>
                        <input name="price" required value="{{old('price',$product->price)}}"
                         class="form-control @error('price') is-invalid @enderror" type="number">
                         @error('price')
                             <span class="invalid-feedback" role="alert">{{$message}}</span>
                         @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-form-label pt-0">Product Description</label>
                    <textarea class="form-control @error('details') is-invalid @enderror" name="details" cols="3" rows="4"
                    >{{old('details',$product->description)}}</textarea>
                    @error('details')
                         <span class="invalid-feedback" role="alert">{{$message}}</span>
                     @enderror
                </div>
                <div class="form-group">
                    <label for="">New Color Image</label>
                    <input name="images[]" multiple accept="image/*"
                     class="form-control @error('images') is-invalid @enderror" type="file">
                     @error('images')
                         <span class="invalid-feedback" role="alert">{{$message}}</span>
                     @enderror
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
      </div>
    </div>
  </div> 
@endsection
