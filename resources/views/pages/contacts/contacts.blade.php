@extends('layouts.app')
@include('pages.contacts.sections.page-entery')
@include('pages.contacts.sections.site-contacts')
@section('content')
    @yield('page-entery')
    @yield('site-contacts')
@endsection
