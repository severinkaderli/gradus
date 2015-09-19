<div class="input--group">
    {!! Form::label('grade', 'Grade') !!}
    {!! Form::select('grade', $grades, '5', ['id' => 'factor']) !!}
</div>

<div class="input--group">
    {!! Form::label('factor', 'Factor') !!}
    {!! Form::select('factor', ['1' => '1', '2' => '2', '3' => '3'], '1', ['id' => 'factor']) !!}
</div>

{!! Form::submit($buttonLabel, ['id' => 'login', 'class' => 'inline']) !!}
