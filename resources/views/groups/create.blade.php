@extends('app')

@section('title')
    Create group
@stop

@section('content')
<div class="mdl-grid">
    <div class="mdl-cell mdl-cell--6-col mdl-cell--3-offset-desktop mdl-cell--1-offset-tablet">
        <div class="mdl-card mdl-shadow--2dp">
            <div class="mdl-card__title">
                <h2 class="mdl-card__title-text">Create group</h2>
            </div>
            <div class="mdl-card__supporting-text">
                {!! Form::open(['url' => 'groups'])!!}

                @include('groups._form')

                <div class="submit-button">
                    {!! Form::submit('Create group', ['id' => 'createGroupSubmit', 'class' => 'mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--colored']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@stop