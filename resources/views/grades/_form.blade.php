<div class="input--group">
    {!! Form::label('grade', 'Grade') !!}
    {!! Form::select('grade', $grades, $defaultGrade, ['id' => 'factor']) !!}
</div>

<div class="input--group">
    {!! Form::label('factor', 'Factor') !!}
    {!! Form::select('factor', ['1' => '1', '2' => '2', '3' => '3'], $defaultFactor, ['id' => 'factor']) !!}
</div>
