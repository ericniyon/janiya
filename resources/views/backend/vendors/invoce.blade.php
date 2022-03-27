<html lang="en"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <link rel="icon" href="../assets/images/favicon/1.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/img/janiya-logo.jpg')}}" type="image/x-icon">
    <title>Invoice</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/fontawesome.css')}}">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css')}}">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/themify-icons.css')}}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/bootstrap.css')}}">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css')}}">


</head>

<body class="theme-color-1 bg-light">

@php
    $totals = 0
@endphp
    <!-- invoice start -->
        <section class="theme-invoice-1 section-b-space">
    <div class="container">
      <div class="row">
        <div class="col-xl-8 m-auto">
          <div class="invoice-wrapper">
            <div class="invoice-header">
              <div class="upper-icon">
                <img src="{{asset('assets/img/janiya-logo.jpg')}}" class="img-fluid" alt="">
              </div>
              <div class="row header-content">
                <div class="col-md-6">
                    <img src="{{asset('assets/img/janiya-logo.jpg')}}" class="img-fluid" alt="">
                    <div class="mt-md-4 mt-3">
                    <h4 class="mb-2">
                      Janiya Shops
                    </h4>
                    <h4 class="mb-0">support@janiyashops.rw</h4>
                  </div>
                </div>
                <div class="col-md-6 text-md-end mt-md-0 mt-4">
                  <h2>invoice</h2>
                  <div class="mt-md-4 mt-3">
                    <h4 class="mb-2">
                      {{ $invoice->vendor->name }}
                    </h4>
                    <h4 class="mb-0">{{ $invoice->vendor->email }}</h4>
                  </div>
                </div>email
              </div>
              <div class="detail-bottom">
                <ul>
                  <li><span>issue date :</span><h4> {{ $invoice->created_at }}</h4></li>
                  <li><span>invoice no :</span><h4> {{ $invoice->shop->orderNo }}</h4></li>
                  <li><span>email :</span><h4> {{ $invoice->shop->status }}</h4></li>
                </ul>
              </div>
            </div>
            <div class="invoice-body table-responsive-md">

              <table class="table table-borderless mb-0">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">product name</th>
                    <th scope="col">price</th>
                    <th scope="col">Qty.</th>
                    <th scope="col">total</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($invoice->shop->store->valiations as $item)

                  <tr>
                    <th scope="row">#{{ $item->id }}</th>
                    <td>{{ $item->product->product->name }}</td>
                    <td>{{ $item->product->product->price }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->product->product->price * $item->quantity }}</td>
                  </tr>
                  @php
                      $totals = $totals + $item->product->product->price * $item->quantity
                  @endphp
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <td colspan="2"></td>
                    <td class="font-bold text-dark" colspan="2">GRAND TOTAL</td>
                    <td class="font-bold text-theme">{{ $totals }}</td>
                  </tr>
                </tfoot>
              </table>
            </div>
            <div class="invoice-footer text-end">
              <div class="authorise-sign">
                <img src="../assets/images/invoice/sign.png" class="img-fluid" alt="sing">
                <span class="line"></span>
                <h6>Authorised Sign</h6>
              </div>
              <div class="buttons">
                <a href="#" class="btn black-btn btn-solid rounded-2 me-2" onclick="window.print();">export as PDF</a>
                <a href="#" class="btn btn-solid rounded-2" onclick="window.print();">print</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    <!-- invoice end -->


    <!-- latest jquery-->
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js')}}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>



</body></html>
