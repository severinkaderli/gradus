@extends('app')

@section('title')
    Groups
@stop

@section('content')
    <h1>Groups</h1>
    @include('groups._list')
    <a class="form--button" href="{{url('groups/create')}}">Add group</a>
@stop

@section('bodyJS')
    <script>
        $('.group__average').click(function() {
            console.log('clicked');
            $(this).parent().siblings('.group__wrapper').slideToggle();
        });
    </script>

@stop