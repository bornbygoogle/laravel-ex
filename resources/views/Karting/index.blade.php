@extends('master')

@section('title')
   Karting
@endsection

@section('Site-setup')
   <link href="{{ URL::asset('css/karting/bootstrap.css') }}" rel="stylesheet" type="text/css">
   <link href="{{ URL::asset('css/karting/style.css') }}" rel="stylesheet" type="text/css">
   <link href="{{ URL::asset('css/karting/font-awesome.css') }}" rel="stylesheet" type="text/css">
   <link href="{{ URL::asset('css/karting/responsive.css') }}" rel="stylesheet" type="text/css">
   <link href="{{ URL::asset('css/karting/animate.css') }}" rel="stylesheet" type="text/css">

   <script type="text/javascript" src="{{ URL::asset('js/karting/jquery.1.8.3.min.js') }}"></script>
   <script type="text/javascript" src="{{ URL::asset('js/karting/bootstrap.js') }}"></script>
   <script type="text/javascript" src="{{ URL::asset('js/karting/jquery-scrolltofixed.js') }}"></script>
   <script type="text/javascript" src="{{ URL::asset('js/karting/jquery.easing.1.3.js') }}"></script>
   <script type="text/javascript" src="{{ URL::asset('js/karting/jquery.isotope.js') }}"></script>
   <script type="text/javascript" src="{{ URL::asset('js/karting/wow.js') }}"></script>
   <script type="text/javascript" src="{{ URL::asset('js/karting/classie.js') }}"></script>
   <script src="{{ URL::asset('contactform/contactform.js') }}"></script>
@endsection

@section('contenu')
  @include('Karting.contenu')
@endsection

@section('javascript')
<script type="text/javascript">
  $(document).ready(function(e) {
    $('#test').scrollToFixed();
    $('.res-nav_click').click(function() {
      $('.main-nav').slideToggle();
        return false
      });
  });
</script>

<script>
  wow = new WOW({
   animateClass: 'animated',
   offset: 100
  });
  wow.init();
</script>

<script type="text/javascript">
  $(window).load(function() {

   $('.main-nav li a, .servicelink').bind('click', function(event) {
    var $anchor = $(this);

    $('html, body').stop().animate({
     scrollTop: $($anchor.attr('href')).offset().top - 102
    }, 1500, 'easeInOutExpo');
    /*
    if you don't want to use the easing effects:
    $('html, body').stop().animate({
     scrollTop: $($anchor.attr('href')).offset().top
    }, 1000);
    */
    if ($(window).width() < 768) {
     $('.main-nav').hide();
    }
    event.preventDefault();
   });
  })
 </script>

 <script type="text/javascript">
  $(window).load(function() {


   var $container = $('.portfolioContainer'),
    $body = $('body'),
    colW = 375,
    columns = null;


   $container.isotope({
    // disable window resizing
    resizable: true,
    masonry: {
     columnWidth: colW
    }
   });

   $(window).smartresize(function() {
    // check if columns has changed
    var currentColumns = Math.floor(($body.width() - 30) / colW);
    if (currentColumns !== columns) {
     // set new column count
     columns = currentColumns;
     // apply width to container manually, then trigger relayout
     $container.width(columns * colW)
      .isotope('reLayout');
    }

   }).smartresize(); // trigger resize to set container width
   $('.portfolioFilter a').click(function() {
    $('.portfolioFilter .current').removeClass('current');
    $(this).addClass('current');

    var selector = $(this).attr('data-filter');
    $container.isotope({

     filter: selector,
    });
    return false;
   });

  });
 </script>
@endsection
