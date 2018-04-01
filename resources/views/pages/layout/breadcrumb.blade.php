@section('breadcrumb')
    <section class="site-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="site-breadcrumb--list">
                        @if(count($breadcrumbs))
                            @foreach($breadcrumbs as $breadcrumb)
                                @if(isset($breadcrumb['slug']))
                                    <li class="breadcrumb-item"><a
                                                href="{{url($breadcrumb['slug'])}}">{{$breadcrumb['title']}}</a><i
                                                class="fas fa-chevron-right"></i></li>
                                @else
                                    <li class="breadcrumb-item active"><span>{{$breadcrumb['title']}}</span></li>
                                @endif
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection