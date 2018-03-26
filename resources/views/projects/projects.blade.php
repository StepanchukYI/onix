@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <ul class="categories-list">
                        @foreach($categoryes as $category)
                            <li class="category-item has-children">
                                <a type="button" data-toggle="collapse"
                                   data-target="#subcategory-1"
                                   class="collapsed"
                                   aria-expanded="false"><i class="fas fa-cog"></i>{{$category->title}}</a>
                                @if(isset($category->sub_category))
                                    <ul class="subcategory-list collapse" id="subcategory-1">
                                        @foreach($category->sub_category as $cat)
                                            <li class="subcategory-item"><i class="fas fa-level-up-alt"></i><a
                                                        href="{{url($cat->slug)}}">{{$cat->title}}</a></li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
