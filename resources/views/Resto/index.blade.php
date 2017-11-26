@extends('master')

@section('Site-setup')
   <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
   <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/resto/font-awesome.min.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/resto/bootstrap.min.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/resto/style.css') }}">
@endsection

@section('title')
   Restaurant Le New Saigon
@endsection

@section('contenu')
   @include('Resto.contenu')
@endsection

@section('javascript')
   <script src="{{ URL::asset('js/resto/jquery.min.js') }}"></script>
   <script src="{{ URL::asset('js/resto/jquery.easing.min.js') }}"></script>
   <script src="{{ URL::asset('js/resto/bootstrap.min.js') }}"></script>
   <script src="{{ URL::asset('js/resto/jquery.mixitup.min.js') }}"></script>
   <script src="{{ URL::asset('js/resto/custom.js') }}"></script>
   <script src="{{ URL::asset('contactform/contactform.js') }}"></script>
@endsection
