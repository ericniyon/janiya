@extends('frontend.base')

@section('title')
    <title>About </title>
@endsection



@section('content')
    <section class="inner-section single-banner"
        style="background: url({{ asset('front/images/single-banner.jpg') }}) no-repeat center;">
        <div class="container">
            <h2>about our company</h2>

        </div>
    </section>


    <section class="inner-section about-company">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-content">
                        <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo qui ad provident inventore error!
                        </h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis exercitationem commodi aliquam
                            necessitatibus vero reiciendis quaerat illo est fuga ea temporibus natus doloremque ipsum
                            voluptas quod deserunt expedita reprehenderit pariatur quidem quisquam, recusandae animi non!
                            Voluptas totam repudiandae rerum molestiae possimus quis numquam sapiente sunt architecto
                            quisquam Aliquam odio optio</p>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="about-img"><img src="{{ asset('front/images/gologo.png') }}" style="width: 50rem"
                            alt="about"></div>
                </div>
            </div>
        </div>
    </section>


    <section class="about-choose" style="padding-bottom: 5rem">
        <div class="container">
            <div class="row">
                <div class="col-11 col-md-9 col-lg-7 col-xl-6 mx-auto">
                    <div class="section-heading">
                        <h2>Why People Choose Their Daily Organic Life With Us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="choose-card">
                        <div class="choose-icon"><i class="icofont-fruits"></i></div>
                        <div class="choose-text">
                            <h4>100% fresh organic food</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing tempora pariatur provident animi error
                                dignissimo cumque minus facere dolores cupiditate debitis</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="choose-card">
                        <div class="choose-icon"><i class="icofont-vehicle-delivery-van"></i></div>
                        <div class="choose-text">
                            <h4>Delivery within one hour</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing tempora pariatur provident animi error
                                dignissimo cumque minus facere dolores cupiditate debitis</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="choose-card">
                        <div class="choose-icon"><i class="icofont-loop"></i></div>
                        <div class="choose-text">
                            <h4>quickly return policy</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing tempora pariatur provident animi error
                                dignissimo cumque minus facere dolores cupiditate debitis</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="choose-card">
                        <div class="choose-icon"><i class="icofont-support"></i></div>
                        <div class="choose-text">
                            <h4>instant support team</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing tempora pariatur provident animi error
                                dignissimo cumque minus facere dolores cupiditate debitis</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
