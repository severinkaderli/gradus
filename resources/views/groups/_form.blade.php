<div class="input--group">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['id' => 'name']) !!}
</div>

{!! Form::submit($buttonLabel, ['id' => 'login', 'name' => 'addGroupSubmit', 'class' => 'inline']) !!}
