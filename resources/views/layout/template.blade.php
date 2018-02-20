<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    @include('includes.head')
</head>

<body>


<div id="fh5co-page">
    <header id="fh5co-header" role="banner">
      @include('includes.header')
    </header>

    <div class="fh5co-heading" style="width: 100%">
        @include('includes.carousel')
    </div>

    @yield("content")

    <footer id="fh5co-footer" role="contentinfo">
       @include('includes.footer')
    </footer>

</div>


<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Flexslider -->
<script src="js/jquery.flexslider-min.js"></script>

<!-- MAIN JS -->
<script src="js/script.js"></script>
<script src="js/main.js"></script>

<script src="js/other.js"></script>
<script src="js/float.js"></script>

</body>

</html>