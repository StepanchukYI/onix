@extends('layouts.app')
@include('pages.layout.page-entery')
@include('pages.contacts.sections.site-contacts')
@section('content')
    @yield('page-entry')
    @yield('site-contacts')
@endsection
