@extends('backend.base')
@section('title')
<title>Profile</title>
@endsection
@section('content')
<div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Profile
                                    <small>Multikart Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></a></li>
                                <li class="breadcrumb-item">Settings</li>
                                <li class="breadcrumb-item active">Profile</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-details text-center">
                                    <img src="../assets/images/dashboard/designer.jpg" alt="" class="img-fluid img-90 rounded-circle blur-up lazyloaded">
                                    <h5 class="f-w-600 mb-0">John deo</h5>
                                    <span>johndeo@gmail.com</span>
                                    <div class="social">
                                        <div class="form-group btn-showcase">
                                            <button class="btn social-btn btn-fb d-inline-block"> <i class="fa fa-facebook"></i></button>
                                            <button class="btn social-btn btn-twitter d-inline-block"><i class="fa fa-google"></i></button>
                                            <button class="btn social-btn btn-google d-inline-block me-0"><i class="fa fa-twitter"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="project-status">
                                    <h5 class="f-w-600">Employee Status</h5>
                                    <div class="media">
                                        <div class="media-body">
                                            <h6>Performance<span class="pull-right">80%</span></h6>
                                            <div class="progress sm-progress-bar">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-body">
                                            <h6>Overtime <span class="pull-right">60%</span></h6>
                                            <div class="progress sm-progress-bar">
                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-body">
                                            <h6>Leaves taken<span class="pull-right">70%</span></h6>
                                            <div class="progress sm-progress-bar">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="card tab2-card">
                            <div class="card-body">
                                <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" id="top-profile-tab" data-bs-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user me-2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>Profile</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-bs-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings me-2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>Contact</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="top-tabContent">
                                    <div class="tab-pane fade active show" id="top-profile" role="tabpanel" aria-labelledby="top-profile-tab">
                                        <h5 class="f-w-600">Profile</h5>
                                        <div class="table-responsive profile-table">
                                            <table class="table table-borderless">
                                                <tbody>
                                                <tr>
                                                    <td>First Name:</td>
                                                    <td>{{ Auth::user() }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Last Name:</td>
                                                    <td>Deo</td>
                                                </tr>
                                                <tr>
                                                    <td>Email:</td>
                                                    <td>johndeo@gmail.com</td>
                                                </tr>
                                                <tr>
                                                    <td>Gender:</td>
                                                    <td>Male</td>
                                                </tr>
                                                <tr>
                                                    <td>Mobile Number:</td>
                                                    <td>2124821463</td>
                                                </tr>
                                                <tr>
                                                    <td>DOB:</td>
                                                    <td>Dec, 15 1993</td>
                                                </tr>
                                                <tr>
                                                    <td>Location:</td>
                                                    <td>USA</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                                        <div class="account-setting">
                                            <h5 class="f-w-600">Notifications</h5>
                                            <div class="row">
                                                <div class="col">
                                                    <label class="d-block" for="chk-ani">
                                                        <input class="checkbox_animated" id="chk-ani" type="checkbox">
                                                        Allow Desktop Notifications
                                                    </label>
                                                    <label class="d-block" for="chk-ani1">
                                                        <input class="checkbox_animated" id="chk-ani1" type="checkbox">
                                                        Enable Notifications
                                                    </label>
                                                    <label class="d-block" for="chk-ani2">
                                                        <input class="checkbox_animated" id="chk-ani2" type="checkbox">
                                                        Get notification for my own activity
                                                    </label>
                                                    <label class="d-block mb-0" for="chk-ani3">
                                                        <input class="checkbox_animated" id="chk-ani3" type="checkbox" checked="">
                                                        DND
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="account-setting deactivate-account">
                                            <h5 class="f-w-600">Deactivate Account</h5>
                                            <div class="row">
                                                <div class="col">
                                                    <label class="d-block" for="edo-ani">
                                                        <input class="radio_animated" id="edo-ani" type="radio" name="rdo-ani" checked="">
                                                        I have a privacy concern
                                                    </label>
                                                    <label class="d-block" for="edo-ani1">
                                                        <input class="radio_animated" id="edo-ani1" type="radio" name="rdo-ani">
                                                        This is temporary
                                                    </label>
                                                    <label class="d-block mb-0" for="edo-ani2">
                                                        <input class="radio_animated" id="edo-ani2" type="radio" name="rdo-ani" checked="">
                                                        Other
                                                    </label>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-primary">Deactivate Account</button>
                                        </div>
                                        <div class="account-setting deactivate-account">
                                            <h5 class="f-w-600">Delete Account</h5>
                                            <div class="row">
                                                <div class="col">
                                                    <label class="d-block" for="edo-ani3">
                                                        <input class="radio_animated" id="edo-ani3" type="radio" name="rdo-ani1" checked="">
                                                        No longer usable
                                                    </label>
                                                    <label class="d-block" for="edo-ani4">
                                                        <input class="radio_animated" id="edo-ani4" type="radio" name="rdo-ani1">
                                                        Want to switch on other account
                                                    </label>
                                                    <label class="d-block mb-0" for="edo-ani5">
                                                        <input class="radio_animated" id="edo-ani5" type="radio" name="rdo-ani1" checked="">
                                                        Other
                                                    </label>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-primary">Delete Account</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection