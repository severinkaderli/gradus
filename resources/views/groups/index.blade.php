@extends('app')

@section('title')
    Groups
@stop

@section('content')
    <h1>Groups</h1>
    @include('groups._list')
    <a class="form--button" href="{{url('groups/create')}}">Add group</a>
@stop