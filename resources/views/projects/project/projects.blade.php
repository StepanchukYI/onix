@extends('layouts.app')
@include('pages.layout.page-entery', ['title' => $object->title])
@include('pages.layout.breadcrumb')
@include('projects.project.section.project-details')
@include('projects.project.section.project-gellery')
@include('projects.project.section.similar-project')
@section('content')
    @yield('breadcrumb')
    @yield('page-entry')
    @yield('project-gellery')
    @yield('project-details')
    @yield('similar-project')
@endsection