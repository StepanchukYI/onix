
<div class="form-group">
    {!! Form::hidden('user_id',1,['class'=>'form_control']) !!}
</div>
<br>
<div class="form-group">
    {!! Form::label('title') !!}
    {!! Form::text('title',$menu->title,['class'=>'form_control']) !!}
</div>
<br>
<div class="form-group">
    {!! Form::label('slug') !!}
    {!! Form::text('slug',$menu->slug,['class'=>'form_control']) !!}
</div>
<br>
<div class="form-group">
    {!! Form::label('parent_id') !!}
    {!! Form::text('parent_id',$menu->parent_id,['class'=>'form_control']) !!}
</div>
<div class="form-group">
    {!! Form::label('position') !!}
    {!! Form::text('position',$menu->position,['class'=>'form_control']) !!}
</div>
<div class="form-group">
    {!! Form::label('page_position') !!}
    {!! Form::text('page_position',$menu->page_position,['class'=>'form_control']) !!}
</div>
<div class="form-group">
    {!! Form::label('is_active') !!}
    {!! Form::checkbox('is_active', 1) !!}
</div>
<div class="form-group">
    {!! Form::label('no is_active') !!}
    {!! Form::checkbox('is_active', 0) !!}
</div>