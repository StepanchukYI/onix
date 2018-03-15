<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Update Object
                </div>
                {!! Form::open(['route'=> ['menu.update', 'menu' => $menu->slug], 'method' => 'put']) !!}
                @include('admin.menu._form')
                <br>
                <div class="form-group">
                    {!! Form::submit('Update',['class'=>'form_control']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <br>
    {!! Form::open(['route'=> ['menu.delete', 'menu' => $menu->slug], 'method' => 'delete']) !!}
    <div class="form-group">
        {!! Form::submit('delete',['class'=>'form_control']) !!}
    </div>
    {!! Form::close() !!}
</div>