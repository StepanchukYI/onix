<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Create Menu
                </div>
                {!! Form::open(['route'=> 'menu.store']) !!}
                @include('admin.menu._form')
                <div class="form-group">
                    {!! Form::submit('Create',['class'=>'form_control']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>