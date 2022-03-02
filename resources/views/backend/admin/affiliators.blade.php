@extends('backend.base')
@section('title')
<title>Affiliate Partners</title>
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
                    <li class="breadcrumb-item active"> Affiliate Partners</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5>Vendors</h5>
                </div>
                <div class="card-body pt-0 mt-0" >
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Contact Info</th>
                                <th scope="col">link</th>
                                <th scope="col">Sales</th>
                                <th scope="col">Clicks</th>
                                <th scope="col"><i class="fa fa-ellipsis"></i></th>
                              </tr>
                            </thead>
                            <tbody>
                                @forelse ($affiliators as $user)
                                <tr>
                                  <th scope="row">{{$loop->iteration}}</th>
                                  <td>
                                    <div class="d-flex align-items-center">
                                      <img class="mr-2 rounded-circle lazyloaded blur-up" height="30" width="30" 
                                    src="{{$user->profile?asset(Storage::url($user->profile)):'../assets/images/dashboard/man.png'}}" alt="#">
                                    {{$user->name}}</td>
                                    </div>
                                  <td>
                                    <div class="d-flex flex-column">
                                      <a href="mailto:{{$user->email}}">{{$user->email}}</a>
                                      <a href="tel:{{$user->phone}}">{{$user->phone}}</a>
                                    </div>
                                  </td>
                                  <td>{{$user->affiliate_link}}</td>
                                  <td>salescount</td>
                                  <td>Clicks count
                                  </td>
                                  <td>
                                    <div class="d-flex justify-content-center align-items-center">
                                      <button data-toggle="modal" data-target="#user-{{$user->id}}" class="btn btn-primary btn-sm">
                                          <i class="fa fa-trash"></i>
                                      </button>
                                      <button wire:click="delete({{$user->id}})" class="btn btn-danger btn-sm" 
                                        wire:loading.attr="disabled" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                    </div>
                                  </td>
                                </tr> 
                                <div class="modal fade" id="user-{{$user->id}}" tabindex="-1" role="dialog" 
                                  aria-labelledby="user-{{$user->id}}Label" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="user-{{$user->id}}Label">Promote {{$user->name}}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      @livewire('admin.add-promo-code-modal', ['user' => $user], key($user->id))
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
</div>
@endsection
