@extends('app')

@section('title')
    Groups
@stop

@section('content')

    @forelse($groups as $group)
        <div class="group cell cell--12">
            <header class="group__header">
                <h2>{{$group->name}}</h2>
            </header>
            <div class="group__wrapper">
                <div class="group__content">
                    @foreach($group->subjects as $subject)
                        <div class="subject">
                            <header class="subject__header">
                                <h3>{{$subject->name}}</h3>
                            </header>
                            <div class="subject__content">
                                1.1, 1.3, 5.5, 6
                            </div>
                            <footer class="subject__footer">
                                <div class="subject__footer__factor">
                                    @if($subject->factor==2)
                                        Fach z&auml;hlt doppelt!
                                    @elseif($subject->factor==3)
                                        Fach z&auml;hlt dreifach!
                                    @else
                                    @endif
                                </div>
                                <div class="subject__footer__add">
                                    <a class="btn" href="">Add mark</a>
                                </div>

                            </footer>
                        </div>

                    @endforeach
                </div>
                <footer class="group__footer">
                    <a class="btn" href="">Add Subject</a>
                </footer>
            </div>
        </div>
    @empty
        No groupos
    @endforelse
@stop