@extends('layouts.app')
@include('pages.about.sections.about-company')
@include('pages.about.sections.page-entery')
@include('pages.about.sections.our-capabilities')
@section('content')
    @yield('page-entery')
    @yield('our-capabilities')
    @yield('about-company')
@endsection
