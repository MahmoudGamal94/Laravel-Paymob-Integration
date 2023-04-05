<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon"/>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/icons.css')}}"/>
</head>
<style>
    body {
        text-align: center;
        padding: 80px 0;
        background: #EBF0F5;
        font-family: "Courier New", Courier, monospace;
    }
</style>
<body>
<div class="card w-50 mx-auto p-5">
    <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        @if($success==="true")
        <i class="fa fa-check-circle text-success fs-70 my-5 lh-lg"></i>
        @else
            <i class="fa fa-close text-danger fs-70 my-5 lh-lg"></i>
        @endif
    </div>
    @if($success==="true")
        <h1 class="text-success mt-3">Success</h1>
        <p>We received your purchase request;<br/> we'll be in touch shortly!</p>
    @else
        <h1 class="text-danger mt-3">Payment Failed!</h1>
        <p class="text-muted fs-16">Something Went Wrong!<br/>we'll be in touch shortly!</p>
    @endif
</div>
</body>
</html>