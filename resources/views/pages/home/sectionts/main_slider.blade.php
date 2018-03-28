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
	                        <?php $data = 0;?>
                            @foreach($categoryes as $category)
                                <?php $data++;?>
                                <li class="category-item has-children">
                                    <a type="button" data-toggle="collapse"
                                       data-target="#subcategory-<?php echo $data;?>"
                                       class="collapsed"
                                       aria-expanded="false"><i class="fas fa-cog"></i>{{$category->title}}</a>
                                    @if(isset($category->subCategories))
                                        <ul class="subcategory-list collapse" id="subcategory-<?php echo $data;?>">
                                            @foreach($category->subCategories as $cat)
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
                            <div class="slider-item"><img src="{{asset('images/main-slider-photo-1.jpg')}}" alt=""></div>
                            <div class="slider-item"><img src="{{asset('images/main-slider-photo-2.jpg')}}" alt=""></div>
                            <div class="slider-item"><img src="{{asset('images/main-slider-photo-3.jpg')}}" alt=""></div>
                            <div class="slider-item"><img src="{{asset('images/main-slider-photo-4.jpg')}}" alt=""></div>
                            <div class="slider-item"><img src="{{asset('images/main-slider-photo-5.jpg')}}" alt=""></div>
                        </div>
                        <div class="thumbnail-center">
                            <div class="home-slider--thumbnails">
                                <div class="slider-thumbnail"><img src="{{asset('images/main-slider-photo-1.jpg')}}" alt=""></div>
                                <div class="slider-thumbnail"><img src="{{asset('images/main-slider-photo-2.jpg')}}" alt=""></div>
                                <div class="slider-thumbnail"><img src="{{asset('images/main-slider-photo-3.jpg')}}" alt=""></div>
                                <div class="slider-thumbnail"><img src="{{asset('images/main-slider-photo-4.jpg')}}" alt=""></div>
                                <div class="slider-thumbnail"><img src="{{asset('images/main-slider-photo-5.jpg')}}" alt=""></div>
                            </div>
                            <div class="current-thumbnail"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection