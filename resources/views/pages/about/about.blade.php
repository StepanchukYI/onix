@extends('layouts.app')
@include('pages.about.sections.about-company')
@include('pages.layout.page-entery')
@include('pages.about.sections.our-capabilities')
@section('content')
    @yield('page-entry')
    @yield('our-capabilities')
    @yield('about-company')
@endsection
