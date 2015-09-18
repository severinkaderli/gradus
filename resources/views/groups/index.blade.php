@extends('app')

@section('title')
    Groups
@stop

@section('content')

    @forelse($groups as $group)
        <div class="group cell cell--3">
            <header class="group__header">
                <h2>{{$group->name}}</h2>
            </header>
            <div class="group__content">
                @foreach($group->subjects as $subject)
                    <div class="subject">
                        <header>
                            <h3>{{$subject->name}}</h3>
                        </header>
                        <div class="subject__content">
                            1.1, 1.3, 5.5, 6 (+)
                        </div>
                        <footer class="subject__footer">
                            Fach zählt doppelt!
                        </footer>
                    </div>

                @endforeach
            </div>
            <footer class="group__footer">
                Add subject
            </footer>
        </div>

    @empty
        No groupos
    @endforelse
@stop