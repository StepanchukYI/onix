<h1>Menus</h1>
<a href="{{route('menu.create')}}">Create menu</a>
<br>
@foreach ($menus as $menu)
    <hr>
    <h4>Title: ({{$menu->id}}) <a href="{{route('menu.edit', [$menu->slug])}}">{{$menu->title}}</a></h4>
    <p>Description: {{$menu->slug}}</p>
    <p>Parent id: {{$menu->parent_id}}</p>
    <p>Position : {{$menu->position}}</p>
    <p>Page position: {{$menu->page_position}}</p>
@endforeach
