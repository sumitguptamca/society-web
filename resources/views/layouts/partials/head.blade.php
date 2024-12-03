<head>

    <meta charset="utf-8">
   
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <meta name="google-site-verification" content="2lrRbH99MYlyPb7ihCmXiYAsa_zANQeIG2w8t8NlNIA" />
    <meta name="author" content="{{env('APP_NAME') ?? 'Loons Group Solutions'}}">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
     <title>{{env('APP_NAME')}} - @yield('title')</title> 
    <!--<title>@yield('title')</title>-->

    <meta name="copyright" content="Loons Group Solutions" />

    <meta name="viewport" content="width=device-width,initial-scale=1">

    <meta name="email" content="#" />

    <link href="{{asset('/assets/img/logo/favicon.ico')}}" rel="icon">

    <link rel="canonical" href="{{ url('/')}}" />

    
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="{{ URL::asset('/assets/lib/animate/animate.min.css')}}" rel="stylesheet">

    <link href="{{ URL::asset('/assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <link href="{{ URL::asset('/assets/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <link href="{{ URL::asset('/assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{ URL::asset('/assets/css/style.css')}}" rel="stylesheet">

</head>

<style>

    .form-popup-bg {

  position:absolute;

  top: 0;

  left: 0;

  right: 0;

  bottom: 0;

  display: flex;

  flex-direction: column;

  align-content: center;

  justify-content: center;

}

.form-popup-bg {

  position: fixed;

  left: 0;

  top: 0;

  height: 100%;

  width: 100%;

  background-color: rgba(94, 110, 141, 0.9);

  opacity: 0;

  visibility: hidden;

  -webkit-transition: opacity 0.3s 0s, visibility 0s 0.3s;

  -moz-transition: opacity 0.3s 0s, visibility 0s 0.3s;

  transition: opacity 0.3s 0s, visibility 0s 0.3s;

  overflow-y: auto;

  z-index: 10000;

}

.form-popup-bg.is-visible {

  opacity: 1;

  visibility: visible;

  -webkit-transition: opacity 0.3s 0s, visibility 0s 0s;

  -moz-transition: opacity 0.3s 0s, visibility 0s 0s;

  transition: opacity 0.3s 0s, visibility 0s 0s;

}

.form-container {

    background-color: #FFFFFF;

    border-radius: 10px;

    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);

    display: flex;

    flex-direction: column;

    width: 100%;

    max-width: 700px;

    margin-left: auto;

    margin-right: auto;

    position:relative;

  padding: 40px;

  color: #fff;

}

.close-button {

  background:none;

  color: #000000;

  width: 40px;

  height: 40px;

  position: absolute;

  top: 0;

  right: 0;

  border: solid 1px #fff;

}



.form-popup-bg:before{

    content:'';

    background-color: #fff;

  opacity: .25;

  position:absolute;

  top: 0;

  left: 0;

  right: 0;

  bottom: 0;

}



</style>