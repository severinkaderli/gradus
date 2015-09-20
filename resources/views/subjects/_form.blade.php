<div class="input--group">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['id' => 'name']) !!}
</div>

<div class="input--group">
    {!! Form::label('factor', 'Factor') !!}
    {!! Form::select('factor', ['1' => '1', '2' => '2', '3' => '3'], $defaultFactor, ['id' => 'factor']) !!}
</div>

{!! Form::submit($buttonLabel, ['id' => 'login', 'class' => 'inline']) !!}
