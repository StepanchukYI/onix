@extends('layouts.app')
@include('pages.layout.page-entery', ['title' => "Наши проекты"])
@include('pages.layout.breadcrumb')
@include('projects.categoryes.section.projects')

@section('content')
    @yield('breadcrumb')
    @yield('page-entry')
    @yield('projects')

@endsection
