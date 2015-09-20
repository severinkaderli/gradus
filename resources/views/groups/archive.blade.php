@extends('app')

@section('title')
    Archive
@stop

@section('content')
    <h1>Archive</h1>
    @include('groups._list')
@stop

@section('bodyJS')
    <script>
        $('.group__average').click(function() {
            console.log('clicked');
            $(this).parent().siblings('.group__wrapper').slideToggle();
        });
    </script>
@stop