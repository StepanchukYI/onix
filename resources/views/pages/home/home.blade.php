@extends('layouts.app')
@include('pages.home.sectionts.company-short-contacts')
{{--@include('pages.home.sectionts.company_advantages')--}}
@include('pages.home.sectionts.company_clients')
@include('pages.home.sectionts.company_info')
@include('pages.home.sectionts.company_info_2')
@include('pages.home.sectionts.counter-statictic')
@include('pages.home.sectionts.project_cost')
@include('pages.home.sectionts.entery_text')
@include('pages.home.sectionts.main_slider')
@section('content')
    @yield('main_slider')
    @yield('company-info')
    @yield('company-info-2')

    {{--@yield('company-advantages')--}}
    @yield('counter-statistic')
    @yield('company-clients')
    @yield('entry-cost-text')
    @yield('project-cost')
    @yield('company-short-contacts')
@endsection
