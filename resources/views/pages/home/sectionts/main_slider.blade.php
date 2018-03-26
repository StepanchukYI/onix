@section('main_slider')
    <section class="categories-main-slider">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="sidebar-products">
                        <h4>
                            <i class="fas fa-pallet"></i>
                            Каталог товаров</h4>
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
                <div class="col-9">
                    <div class="main-content--slider">
                        <div class="home-slider">
                            <div class="slider-item"><img src="images/main-slider-photo-1.jpg" alt=""></div>
                            <div class="slider-item"><img src="images/main-slider-photo-2.jpg" alt=""></div>
                            <div class="slider-item"><img src="images/main-slider-photo-3.jpg" alt=""></div>
                            <div class="slider-item"><img src="images/main-slider-photo-4.jpg" alt=""></div>
                            <div class="slider-item"><img src="images/main-slider-photo-5.jpg" alt=""></div>
                        </div>
                        <div class="thumbnail-center">
                            <div class="home-slider--thumbnails">
                                <div class="slider-thumbnail"><img src="images/main-slider-photo-1.jpg" alt=""></div>
                                <div class="slider-thumbnail"><img src="images/main-slider-photo-2.jpg" alt=""></div>
                                <div class="slider-thumbnail"><img src="images/main-slider-photo-3.jpg" alt=""></div>
                                <div class="slider-thumbnail"><img src="images/main-slider-photo-4.jpg" alt=""></div>
                                <div class="slider-thumbnail"><img src="images/main-slider-photo-5.jpg" alt=""></div>
                            </div>
                            <div class="current-thumbnail"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection