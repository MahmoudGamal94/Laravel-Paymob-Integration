<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paymob Task</title>
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon"/>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/icons.css')}}"/>
</head>
<body class="app sidebar-mini ltr">

<!-- BACKGROUND-IMAGE -->
<div class="login-img">

    <!-- GLOABAL LOADER -->
    <div id="global-loader">
        <img src="{{asset('/images/loader.svg')}}" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOABAL LOADER -->

    <!-- PAGE -->
    <div class="page">
                    <section class="h-100 w-75 mx-auto">
                        <div class="container h-100 py-5">
                            <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-10">

                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <h3 class="fw-bold mb-0 text-white">Shopping Cart</h3>
                                    </div>
                                    <div class="card rounded-3 mb-4">
                                        <div class="card-body p-4">
                                            <div class="row d-flex justify-content-between align-items-center">
                                                <div class="col-md-2 col-lg-2 col-xl-2">
                                                    <img
                                                            src="{{asset('images/powerbank.png')}}"
                                                            class="img-fluid rounded-3" alt="Cotton T-shirt">
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xl-3">
                                                    <p class="lead fw-normal mb-2">Anker PowerBank</p>
                                                    <input  name="name" value="Anker PowerBank" type="text" class="d-none" />
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                    <button class="btn btn-link px-2"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                        <i class="fa fa-minus"></i>
                                                    </button>

                                                    <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control text-center" />

                                                    <button class="btn btn-link px-2"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                    <h5 class="mb-0">1000 EGP</h5>
                                                    <input  name="name" value="1000" type="number" class="d-none" />
                                                </div>
                                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                    <a href="#!" class="text-danger"><i class="fa fa-trash fa-lg"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-body">
                                            <form class="form-inline mx-auto" action="{{route('payment')}}" method="post">
                                                {{csrf_field()}}
                                            <button type="submit" class="btn btn-primary btn-block btn-lg">Proceed to Pay</button>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
            <!-- CONTAINER CLOSED -->
        {{--</div>--}}
    </div>
    <!-- END PAGE -->

</div>
<!-- BACKGROUND-IMAGE CLOSED -->
<script src="{{asset('/js/jquery.min.js')}}"></script>
<script>
    (function ($) {
        "use strict";
        // PAGE LOADING
        $(window).on("load", function (e) {
            $("#global-loader").fadeOut("slow");
        })
    })(jQuery);
    </script>
</body>
</html>