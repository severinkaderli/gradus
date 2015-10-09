<div class="input--group">
    {!! Form::label('grade', 'Grade') !!}
    {!! Form::select('grade', $grades, $defaultGrade, ['id' => 'factor']) !!}
</div>

<div class="input--group">
    {!! Form::label('factor', 'Factor') !!}
    {!! Form::select('factor', ['0.25' => '0.25', '0.33' => '0.33', '0.5' => '0.5', '1' => '1', '2' => '2', '3' => '3'], $defaultFactor, ['id' => 'factor']) !!}
</div>
