@extends('backend.base')

@section('title')
<title>Admin Dashboard</title>
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
                    <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>


            <div class="row">
                    <div class="col-xl-3 col-md-6 xl-50">
                        <div class="card o-hidden widget-cards">
                            <div class="bg-warning card-body">
                                <div class="media static-top-widget row">
                                    <div class="icons-widgets col-4">
                                        <div class="align-self-center text-center"><i data-feather="navigation" class="font-warning"></i></div>
                                    </div>
                                    <div class="media-body col-8"><span class="m-0">Earnings</span>
                                        <h3 class="mb-0">$ <span class="counter">6659</span><small> This Month</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 xl-50">
                        <div class="card o-hidden  widget-cards">
                            <div class="bg-secondary card-body">
                                <div class="media static-top-widget row">
                                    <div class="icons-widgets col-4">
                                        <div class="align-self-center text-center"><i data-feather="box" class="font-secondary"></i></div>
                                    </div>
                                    <div class="media-body col-8"><span class="m-0">Products</span>
                                        <h3 class="mb-0">$ <span class="counter">9856</span><small> This Month</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 xl-50">
                        <div class="card o-hidden widget-cards">
                            <div class="bg-primary card-body">
                                <div class="media static-top-widget row">
                                    <div class="icons-widgets col-4">
                                        <div class="align-self-center text-center"><i data-feather="message-square" class="font-primary"></i></div>
                                    </div>
                                    <div class="media-body col-8"><span class="m-0">Messages</span>
                                        <h3 class="mb-0">$ <span class="counter">893</span><small> This Month</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 xl-50">
                        <div class="card o-hidden widget-cards">
                            <div class="bg-danger card-body">
                                <div class="media static-top-widget row">
                                    <div class="icons-widgets col-4">
                                        <div class="align-self-center text-center"><i data-feather="users" class="font-danger"></i></div>
                                    </div>
                                    <div class="media-body col-8"><span class="m-0">New Vendors</span>
                                        <h3 class="mb-0">$ <span class="counter">45631</span><small> This Month</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-3 col-md-6 xl-50">
                        <div class="card order-graph sales-carousel">
                            <div class="card-header">
                                <h6>Total Sales</h6>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="small-chartjs">
                                            <div class="flot-chart-placeholder" id="simple-line-chart-sparkline-3"></div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="value-graph">
                                            <h3>42% <span><i class="fa fa-angle-up font-primary"></i></span></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <span>Sales Last Month</span>
                                        <h2 class="mb-0">9054</h2>
                                        <p>0.25% <span><i class="fa fa-angle-up"></i></span></p>
                                        <h5 class="f-w-600">Gross sales of August</h5>

                                    </div>
                                    <div class="bg-primary b-r-8">
                                        <div class="small-box">
                                            <i data-feather="briefcase"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 xl-50">
                        <div class="card order-graph sales-carousel">
                            <div class="card-header">
                                <h6>Total purchase</h6>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="small-chartjs">
                                            <div class="flot-chart-placeholder" id="simple-line-chart-sparkline"></div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="value-graph">
                                            <h3>20% <span><i class="fa fa-angle-up font-secondary"></i></span></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <span>Monthly purchase</span>
                                        <h2 class="mb-0">2154</h2>
                                        <p>0.13% <span><i class="fa fa-angle-up"></i></span></p>
                                        <h5 class="f-w-600">Avg Gross purchase</h5>

                                    </div>
                                    <div class="bg-secondary b-r-8">
                                        <div class="small-box">
                                            <i data-feather="credit-card"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 xl-50">
                        <div class="card order-graph sales-carousel">
                            <div class="card-header">
                                <h6>Total cash transaction</h6>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="small-chartjs">
                                            <div class="flot-chart-placeholder" id="simple-line-chart-sparkline-2"></div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="value-graph">
                                            <h3>28% <span><i class="fa fa-angle-up font-warning"></i></span></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <span>Cash on hand</span>
                                        <h2 class="mb-0">4672</h2>
                                        <p>0.8% <span><i class="fa fa-angle-up"></i></span></p>
                                        <h5 class="f-w-600">Details about cash</h5>

                                    </div>
                                    <div class="bg-warning b-r-8">
                                        <div class="small-box">
                                            <i data-feather="shopping-cart"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 xl-50">
                        <div class="card order-graph sales-carousel">
                            <div class="card-header">
                                <h6>Daily Deposits</h6>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="small-chartjs">
                                            <div class="flot-chart-placeholder" id="simple-line-chart-sparkline-1"></div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="value-graph">
                                            <h3>75% <span><i class="fa fa-angle-up font-danger"></i></span></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <span>Security Deposits</span>
                                        <h2 class="mb-0">0782</h2>
                                        <p>0.25% <span><i class="fa fa-angle-up"></i></span></p>
                                        <h5 class="f-w-600">Gross sales of June</h5>

                                    </div>
                                    <div class="bg-danger b-r-8">
                                        <div class="small-box">
                                            <i data-feather="calendar"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Sales Status</h5>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="icofont icofont-simple-left"></i></li>
                                        <li><i class="view-html fa fa-code"></i></li>
                                        <li><i class="icofont icofont-maximize full-card"></i></li>
                                        <li><i class="icofont icofont-minus minimize-card"></i></li>
                                        <li><i class="icofont icofont-refresh reload-card"></i></li>
                                        <li><i class="icofont icofont-error close-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-3 col-sm-6 xl-50">
                                        <div class="order-graph">
                                            <h6>Orders By Location</h6>
                                            <div class="chart-block chart-vertical-center">
                                                <canvas id="myDoughnutGraph"></canvas>
                                            </div>
                                            <div class="order-graph-bottom">
                                                <div class="media">
                                                    <div class="order-color-primary"></div>
                                                    <div class="media-body">
                                                        <h6 class="mb-0">Saint Lucia <span class="pull-right">$157</span></h6>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="order-color-secondary"></div>
                                                    <div class="media-body">
                                                        <h6 class="mb-0">Kenya <span class="pull-right">$347</span></h6>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="order-color-danger"></div>
                                                    <div class="media-body">
                                                        <h6 class="mb-0">Liberia<span class="pull-right">$468</span></h6>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="order-color-warning"></div>
                                                    <div class="media-body">
                                                        <h6 class="mb-0">Christmas Island<span class="pull-right">$742</span></h6>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="order-color-success"></div>
                                                    <div class="media-body">
                                                        <h6 class="mb-0">Saint Helena <span class="pull-right">$647</span></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6 xl-50">
                                        <div class="order-graph sm-order-space">
                                            <h6>Sales By Location</h6>
                                            <div class="peity-chart-dashboard text-center">
                                                <span class="pie-colours-1">4,7,6,5</span>
                                            </div>
                                            <div class="order-graph-bottom sales-location">
                                                <div class="media">
                                                    <div class="order-shape-primary"></div>
                                                    <div class="media-body">
                                                        <h6 class="mb-0 me-0">Germany <span class="pull-right">25%</span></h6>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="order-shape-secondary"></div>
                                                    <div class="media-body">
                                                        <h6 class="mb-0 me-0">Brasil <span class="pull-right">10%</span></h6>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="order-shape-danger"></div>
                                                    <div class="media-body">
                                                        <h6 class="mb-0 me-0">United Kingdom<span class="pull-right">34%</span></h6>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="order-shape-warning"></div>
                                                    <div class="media-body">
                                                        <h6 class="mb-0 me-0">Australia<span class="pull-right">5%</span></h6>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="order-shape-success"></div>
                                                    <div class="media-body">
                                                        <h6 class="mb-0 me-0">Canada <span class="pull-right">25%</span></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 xl-100">
                                        <div class="order-graph xl-space">
                                            <h6>Revenue for last month</h6>
                                            <div class="ct-4 flot-chart-container"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="code-box-copy">
                                    <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head2" title="" data-original-title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                    <pre class=" language-html"><code class=" language-html" id="example-head2">&lt;div class="row"&gt;
   &lt;div class="col-xl-3 col-sm-6 xl-50"&gt;
      &lt;div class="order-graph"&gt;
         &lt;h6&gt;Orders By Location&lt;/h6&gt;
         &lt;div class="chart-block chart-vertical-center"&gt;
            &lt;canvas id="myDoughnutGraph"&gt;&lt;/canvas&gt;
         &lt;/div&gt;
         &lt;div class="order-graph-bottom"&gt;
            &lt;div class="media"&gt;
               &lt;div class="order-color-primary"&gt;&lt;/div&gt;
               &lt;div class="media-body"&gt;
                  &lt;h6 class="mb-0"&gt;Saint Lucia &lt;span class="pull-right"&gt;$157&lt;/span&gt;&lt;/h6&gt;
               &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="media"&gt;
               &lt;div class="order-color-secondary"&gt;&lt;/div&gt;
               &lt;div class="media-body"&gt;
                  &lt;h6 class="mb-0"&gt;Kenya &lt;span class="pull-right"&gt;$347&lt;/span&gt;&lt;/h6&gt;
               &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="media"&gt;
               &lt;div class="order-color-danger"&gt;&lt;/div&gt;
               &lt;div class="media-body"&gt;
                  &lt;h6 class="mb-0"&gt;Liberia&lt;span class="pull-right"&gt;$468&lt;/span&gt;&lt;/h6&gt;
               &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="media"&gt;
               &lt;div class="order-color-warning"&gt;&lt;/div&gt;
               &lt;div class="media-body"&gt;
                  &lt;h6 class="mb-0"&gt;Christmas Island&lt;span class="pull-right"&gt;$742&lt;/span&gt;&lt;/h6&gt;
               &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="media"&gt;
               &lt;div class="order-color-success"&gt;&lt;/div&gt;
               &lt;div class="media-body"&gt;
                  &lt;h6 class="mb-0"&gt;Saint Helena &lt;span class="pull-right"&gt;$647&lt;/span&gt;&lt;/h6&gt;
               &lt;/div&gt;
            &lt;/div&gt;
         &lt;/div&gt;
      &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col-xl-3 col-sm-6 xl-50"&gt;
      &lt;div class="order-graph sm-order-space"&gt;
         &lt;h6&gt;Sales By Location&lt;/h6&gt;
         &lt;div class="peity-chart-dashboard text-center"&gt;
            &lt;span class="pie-colours-1"&gt;4,7,6,5&lt;/span&gt;
         &lt;/div&gt;
         &lt;div class="order-graph-bottom sales-location"&gt;
            &lt;div class="media"&gt;
               &lt;div class="order-shape-primary"&gt;&lt;/div&gt;
                  &lt;div class="media-body"&gt;
                     &lt;h6 class="mb-0 me-0"&gt;Germany &lt;span class="pull-right"&gt;25%&lt;/span&gt;&lt;/h6&gt;
                  &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="media"&gt;
               &lt;div class="order-shape-secondary"&gt;&lt;/div&gt;
               &lt;div class="media-body"&gt;
                  &lt;h6 class="mb-0 me-0"&gt;Brasil &lt;span class="pull-right"&gt;10%&lt;/span&gt;&lt;/h6&gt;
               &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="media"&gt;
               &lt;div class="order-shape-danger"&gt;&lt;/div&gt;
                  &lt;div class="media-body"&gt;
                     &lt;h6 class="mb-0 me-0"&gt;United Kingdom&lt;span class="pull-right"&gt;34%&lt;/span&gt;&lt;/h6&gt;
                  &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="media"&gt;
               &lt;div class="order-shape-warning"&gt;&lt;/div&gt;
               &lt;div class="media-body"&gt;
                  &lt;h6 class="mb-0 me-0"&gt;Australia&lt;span class="pull-right"&gt;5%&lt;/span&gt;&lt;/h6&gt;
               &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="media"&gt;
               &lt;div class="order-shape-success"&gt;&lt;/div&gt;
               &lt;div class="media-body"&gt;
                  &lt;h6 class="mb-0 me-0"&gt;Canada &lt;span class="pull-right"&gt;25%&lt;/span&gt;&lt;/h6&gt;
               &lt;/div&gt;
            &lt;/div&gt;
         &lt;/div&gt;
      &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class="col-xl-6 xl-100"&gt;
      &lt;div class="order-graph xl-space"&gt;
         &lt;h6&gt;Revenue for last month&lt;/h6&gt;
         &lt;div class="ct-4 flot-chart-container"&gt;&lt;/div&gt;
      &lt;/div&gt;
   &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
@endsection
