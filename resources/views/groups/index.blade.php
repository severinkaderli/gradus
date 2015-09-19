@extends('app')

@section('title')
    Groups
@stop

@section('content')

    @foreach($groups as $group)
        <div class="group cell cell--12">
            <header class="group__header">
                <h2>{{$group->name}}: &Oslash;{{$group->getAverage()}}</h2>
            </header>
            <div class="group__wrapper">
                <div class="group__content">
                    @foreach($group->subjects as $subject)
                        <div class="subject">
                            <header class="subject__header">
                                <h3>{{$subject->name}}: &Oslash;{{$subject->getAverage()}}</h3>
                            </header>
                            <div class="subject__content">
                                @foreach($subject->grades as $grade)
                                    {{number_format($grade->grade, 1, ".", "'")}},
                                @endforeach
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
    @endforeach
    <a class="btn" href="{{url('groups/create')}}">Add group</a>
@stop