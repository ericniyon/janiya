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
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>


            <div class="row">
                    <div class="col-xl-3 col-md-6 xl-50">
                        <div class="card o-hidden widget-cards">
                            <div class=" card-body" style="background: #D0B5BD">
                                <div class="media static-top-widget row">
                                    <div class="icons-widgets col-4">
                                        <div class="align-self-center text-center"><i data-feather="navigation" class="font-primary"></i></div>
                                    </div>
                                    <div class="media-body col-8"><span class="m-0 text-light">TOTAL REVENUE</span>
                                        <h3 class="mb-0">Rwf <span class="counter">{{ App\Models\Transaction::all()->sum('amount') }}</span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 xl-50">
                        <div class="card o-hidden  widget-cards">
                            <div class="card-body" style="background: #C9ABB4">
                                <div class="media static-top-widget row">
                                    <div class="icons-widgets col-4">
                                        <div class="align-self-center text-center"><i data-feather="box" class="font-secondary"></i></div>
                                    </div>
                                    <div class="media-body col-8"><span class="m-0 text-light">TOTAL ORDERS</span>
                                        <h3 class="mb-0"> <span class="counter">{{ App\Models\Order::all()->count() }}</span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 xl-50">
                        <div class="card o-hidden widget-cards">
                            <div class=" card-body" style="background: #C9ABB4">
                                <div class="media static-top-widget row">
                                    <div class="icons-widgets col-4">
                                        <div class="align-self-center text-center"><i data-feather="message-square" class="font-primary"></i></div>
                                    </div>
                                    <div class="media-body col-8"><span class="m-0 text-light">AVG. REVENUE</span>
                                        <h3 class="mb-0">Rwf <span class="counter">
                                            @if (App\Models\Transaction::all()->count()>0 && App\Models\Transaction::sum('amount')>0)
                                            {{ App\Models\Transaction::all()->count()>0 && App\Models\Transaction::sum('amount')>0 }}
                                            @else
                                            0
                                            @endif
                                        </span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 xl-50">
                        <div class="card o-hidden widget-cards">
                            <div class="card-body" style="background: #C9ABB4">
                                <div class="media static-top-widget row">
                                    <div class="icons-widgets col-4">
                                        <div class="align-self-center text-center"><i data-feather="users" class="font-danger"></i></div>
                                    </div>
                                    <div class="media-body col-8"><span class="m-0 text-light">Transactions</span>
                                        <h3 class="mb-0"> <span class="counter">{{ App\Models\Transaction::all()->count() }}</span></h3>
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
                                            <h3>
                                                @if (App\Models\OrderItem::all()->sum('quantity')>0 && App\Models\ProductAttribute::all()->sum('quantity') > 0)
                                                {{ App\Models\ProductAttribute::all()->sum('quantity') + App\Models\OrderItem::all()->sum('quantity') / 100 }}
                                                @else

                                                0%
                                                @endif

                                                <span><i class="fa fa-angle-up font-primary"></i></span></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <span>Sales Last Month</span>
                                        <h2 class="mb-0">{{ App\Models\ProductAttribute::all()->sum('quantity') }}</h2>
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
                                <h5>Lifetime Sales</h5>
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
                                            <div class="chart-block chart-vertical-center">
                                                <div id="piechart" style="width: 100%; height: 400px"></div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6 xl-50">
                                        <div class="order-graph">
                                            <div class="chart-block chart-vertical-center">
                                                <div id="linechart" style="width: 100%; height: 400px"></div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-xl-6 xl-100">
                                        <div class="order-graph xl-space">
                                                <div id="areachart" style="width: 100%; height: 400px"></div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
// chart for shopps orders

      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);


      function drawChart() {
        var dataset1 = google.visualization.arrayToDataTable([
          ['Year', 'Sales'],
          <?php echo $dataset1;  ?>
        ]);

        var options = {
          title: 'Orders By Shops',
          curveType: 'function',
          legend: { position: 'bottom' },
          colors: ['#D0B5BD','#D0B5BD', '#06243E', '#A5A5A5', '#FF8084', '#13C9CA'],
          is3D: true
        };
        var chart1 = new google.visualization.PieChart(document.getElementById('piechart'));

        chart1.draw(dataset1, options);

// chart for shopps sales
        var dataset2 = google.visualization.arrayToDataTable([
          ['Year', 'Sales'],
          <?php echo $dataset2;  ?>
        ]);

        var options2 = {
          title: 'Sales By Shops',
          curveType: 'function',
          legend: { position: 'bottom' },
          colors: ['#630D26', '#06243E', '#A5A5A5', '#FF8084', '#13C9CA']
        };
        var chart2 = new google.visualization.LineChart(document.getElementById('linechart'));

        chart2.draw(dataset2, options2);

        // chart for overll revenue
         var dataset3 = google.visualization.arrayToDataTable([
          ['Year', 'Sales'],
          <?php echo $dataset3;  ?>
        ]);

        var options3 = {
          title: 'Revenue for last month',
          curveType: 'function',
          legend: { position: 'bottom' },
          colors: ['#630D26', '#06243E', '#A5A5A5', '#FF8084', '#13C9CA']
        };
        var chart3 = new google.visualization.AreaChart(document.getElementById('areachart'));

        chart3.draw(dataset3, options3);
      }

    </script>
@endsection
