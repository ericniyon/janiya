@extends('frontend.base')

@section('title')
    <title>FAQ </title>
@endsection



@section('content')
    <section class="inner-section single-banner"
        style="background: url({{ asset('front/images/single-banner.jpg') }}) no-repeat center;">
        <div class="container">
            <h2>FAQ</h2>

        </div>
    </section>


    <section class="inner-section faq-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="faq-parent">
                        <div class="faq-child">
                            <div class="faq-que"><button>How to contact with Customer Service?</button></div>
                            <div class="faq-ans" style="display: block;">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, repellendus ducimus?
                                    Culpa tempore saepe fuga excepturi eius! Nulla quam, minus, id ipsa ad distinctio rem
                                    nihil voluptatem eaque quaerat recusandae?</p>
                            </div>
                        </div>
                        <div class="faq-child">
                            <div class="faq-que"><button>App installation failed, how to update system information?</button>
                            </div>
                            <div class="faq-ans" style="display: none;">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, repellendus ducimus?
                                    Culpa tempore saepe fuga excepturi eius! Nulla quam, minus, id ipsa ad distinctio rem
                                    nihil voluptatem eaque quaerat recusandae?</p>
                            </div>
                        </div>
                        <div class="faq-child">
                            <div class="faq-que"><button>Website reponse taking time, how to improve?</button></div>
                            <div class="faq-ans" style="display: none;">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, repellendus ducimus?
                                    Culpa tempore saepe fuga excepturi eius! Nulla quam, minus, id ipsa ad distinctio rem
                                    nihil voluptatem eaque quaerat recusandae?</p>
                            </div>
                        </div>
                        <div class="faq-child">
                            <div class="faq-que"><button>How do I create a account?</button></div>
                            <div class="faq-ans" style="display: none;">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, repellendus ducimus?
                                    Culpa tempore saepe fuga excepturi eius! Nulla quam, minus, id ipsa ad distinctio rem
                                    nihil voluptatem eaque quaerat recusandae?</p>
                            </div>
                        </div>
                        <div class="faq-child">
                            <div class="faq-que"><button>I cannot find an answer to my question!</button></div>
                            <div class="faq-ans" style="display: none;">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, repellendus ducimus?
                                    Culpa tempore saepe fuga excepturi eius! Nulla quam, minus, id ipsa ad distinctio rem
                                    nihil voluptatem eaque quaerat recusandae?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
