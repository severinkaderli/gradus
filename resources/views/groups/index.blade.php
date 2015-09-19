@extends('app')

@section('title')
    Groups
@stop

@section('content')

    @foreach($groups as $group)
        <div class="group cell cell--12">
            <header class="group__header">
                <h2><a href="{{url('groups/' . $group->id . '/edit')}}">{{$group->name}}: &Oslash;{{$group->getAverage()}}</a>
                </h2>
            </header>
            <div class="group__wrapper">
                <div class="group__content">
                    @foreach($group->subjects as $subject)
                        <div class="subject">
                            <header class="subject__header">
                                <h3><a href="{{url('subjects/' . $subject->id . '/edit')}}">{{$subject->name}}: &Oslash;{{$subject->getAverage()}}</a></h3>
                            </header>
                            <div class="subject__content">
                                @foreach($subject->grades as $grade)
                                    <a class='grade' href="{{url('grades/' . $grade->id . '/edit')}}">{{number_format($grade->grade, 1, ".", "'")}}</a>
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
                                    <a class="btn" href="{{url('subjects/' . $subject->id . '/grades/create')}}">Add grade</a>
                                </div>

                            </footer>
                        </div>

                    @endforeach
                </div>
                <footer class="group__footer">
                    <a class="btn" href="{{url('groups/' . $group->id . '/subjects/create')}}">Add Subject</a>
                </footer>
            </div>
        </div>
    @endforeach
    <a class="btn" href="{{url('groups/create')}}">Add group</a>
@stop