<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>bigEshop</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="/theme/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="/theme/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="/theme/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="/theme/css/responsive.css" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->
         <!-- slider section -->
         @include('home.slider')
         <!-- end slider section -->
      </div>
      <!-- why section -->
      @include('home.whySection')
      <!-- end why section -->
      
      <!-- arrival section -->
      @include('home.newArrival')
      <!-- end arrival section -->
      
      <!-- product section -->
      @include('home.ourProduct')
      <!-- end product section -->

      <!-- subscribe section -->
      @include('home.subscribe')
      <!-- end subscribe section -->
      <!-- client section -->
      @include('home.clientSection')
      <!-- end client section -->
      <!-- footer start -->
      @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div>
      <!-- jQery -->
      <script src="/theme/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="/theme/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="/theme/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="/theme/js/custom.js"></script>
   </body>
</html>