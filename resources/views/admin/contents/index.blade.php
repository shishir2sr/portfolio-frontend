
<!doctype html>
<html lang="en" >

<head>
  <title>Yeasir Arefin Tusher | Software Engineer </title>

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description"
    content="Experienced mobile app engineer specialized in problem-solving, providing architectural solutions using suitable data structures and algorithms. Develops intuitive UI and writes clean, accurate, reusable, and test-driven code to optimize time investment" />
  <meta name="keywords"
    content="mobile app development, problem-solving, architecture, data structures, algorithms, UI design, clean code, test-driven development, flutter, iOS, SwiftUI, Swift, Dart, Machine-Laerning " />
  <meta name="developer" content="Yeasir Arefin Tusher">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">


  <!-- FAV AND ICONS   -->
  <link rel="apple-touch-icon" sizes="180x180"
    href="assets/images/yeasir_arefin_tusher_favicon.ico/favicon_io/apple-touch-icon.png">

  <link rel="icon" type="image/png" sizes="32x32"
    href="assets/images/yeasir_arefin_tusher_favicon.ico/favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16"
    href="assets/images/yeasir_arefin_tusher_favicon.ico/favicon_io/favicon-16x16.png">
  <link rel="manifest" href="assets/images/yeasir_arefin_tusher_favicon.ico/favicon_io/site.webmanifest">

  <!-- Google Font-->
  <link href="http://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/icons/font-awesome-4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/plugins/css/bootstrap.min.css">
  <!-- Animate CSS-->
  <link rel="stylesheet" href="assets/plugins/css/animate.css">
  <!-- Owl Carousel CSS-->
  <link rel="stylesheet" href="assets/plugins/css/owl.css">
  <!-- Fancybox-->
  <link rel="stylesheet" href="assets/plugins/css/jquery.fancybox.min.css">
  <!-- Custom CSS-->
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
  
  <!-- Colors -->
  <link rel="alternate stylesheet" href="assets/css/colors/blue.css" title="blue">
  <link rel="stylesheet" href="assets/css/colors/defauld.css" title="defauld">
  <link rel="alternate stylesheet" href="assets/css/colors/green.css" title="green">
  <link rel="alternate stylesheet" href="assets/css/colors/blue-munsell.css" title="blue-munsell">
  <link rel="alternate stylesheet" href="assets/css/colors/orange.css" title="orange">
  <link rel="alternate stylesheet" href="assets/css/colors/purple.css" title="purple">
  <link rel="alternate stylesheet" href="assets/css/colors/slate.css" title="slate">
  <link rel="alternate stylesheet" href="assets/css/colors/yellow.css" title="yellow">
  <link rel="alternate stylesheet" href="assets/css/index.css" title="index">

  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!--
    ==============
    * JS Files *
    ==============
    -->

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!-- jQuery -->
  <script src="assets/plugins/js/jquery.min.js"></script>
  <!-- jquery nav -->
  <script src="assets/plugins/js/jquery.nav.js"></script>
  <!-- popper -->
  <script src="assets/plugins/js/popper.min.js"></script>
  <!-- bootstrap -->
  <script src="assets/plugins/js/bootstrap.min.js"></script>
  <!-- owl carousel -->
  <script src="assets/plugins/js/owl.carousel.js"></script>
  <!-- validator -->
  <script src="assets/plugins/js/validator.min.js"></script>
  <!-- wow -->
  <script src="assets/plugins/js/wow.min.js"></script>
  <!-- mixin js-->
  <script src="assets/plugins/js/jquery.mixitup.min.js"></script>
  <!-- circle progress-->
  <script src="assets/plugins/js/circle-progress.js"></script>

  <!-- Fancybox js-->
  <script src="assets/plugins/js/jquery.fancybox.min.js"></script>
  <!-- isotope js-->
  <script src="assets/plugins/js/isotope.pkgd.js"></script>
  <script src="assets/plugins/js/packery-mode.pkgd.js"></script>
  <!-- Map api -->
  <script src="http://maps.googleapis.com/maps/api/js?v=3.exp&amp;key=AIzaSyCRP2E3BhaVKYs7BvNytBNumU0MBmjhhxc"></script>
  <!-- Custom Scripts-->
  <script src="assets/js/map-init.js"></script>
  <script src="assets/js/custom-scripts.js"></script>

</head>


<body class="white-vertion black-bg">
  <!-- Start Loader -->
  <div class="section-loader">
    <div class="loader">
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- End Loader -->

  <!--
        ===================
           NAVIGATION
        ===================
        -->
  <!--Header part-->
  
  @include('admin.components.layouts.header') 
        
  <!--
        ===================
            HOME 
        ===================
        -->
  @include('admin.components.layouts.home')
  <!--
        ==================
            ABOUT
        =================
        -->
  @include('admin.components.layouts.about')

  <!--
        ===================
           SERVICE
        ===================
        -->
  @include('admin.components.layouts.whatido')

  <!--
        ===================
           EXPERIENCES
        ===================
        -->
  <!-- Experience -->
 
  @include('admin.components.layouts.experience')

   <!--
        ===================
           Education
        ===================
        -->
  
 @include('admin.components.layouts.education')
 
<!--Recent Portfolio-->
@include('admin.components.layouts.recent-portfolio')
  


  <!--
===================
   BLOG
===================
-->
@include('admin.components.layouts.blog')

  <!--
        ===================
           TESTIMONIALS
        ===================
        -->

  <!--
        ===================
           FOOTER 1
        ===================
        -->
@include('admin.components.layouts.footer')  


  <!-- ****************
      After neccessary customization/modification, Please minify 
      JavaScript/jQuery according to http://browserdiet.com/en/ for better performance
    **************** -->
  <!-- STYLE SWITCH STYLESHEET ONLY FOR DEMO -->
  <!--<link rel="stylesheet" href="demo/demo.css">
  <script type="text/javascript" src="demo/styleswitcher.js"></script>
  <script type="text/javascript" src="demo/demo.js"></script>
  <div class="demo-style-switch" id="switch-style">-->
    <a id="toggle-switcher" class="switch-button"><i class="fa fa-snowflake-o fa-spin"></i></a>

  </div>

  <!-- jQuery for popup -->
<!--<script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
 Popper JS 
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
 Bootstrap JS -
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>

<script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
<script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>-->



</body>

</html>