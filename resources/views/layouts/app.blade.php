@extends('layouts.clean')

@section('childContent')
@include('layouts.partials.header')
@yield('content')
    <footer>
        @section('footerlinks')
         <a href="#">link1</a>
         <a href="#">link2</a>
         @show
    </footer>
@endsection

    
