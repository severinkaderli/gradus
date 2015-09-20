@foreach($groups as $group)
    <div class="group cell cell--12">
        <header class="group__header">
            <h2><a href="{{url('groups/' . $group->id . '/edit')}}">{{$group->name}}</a></h2>
            <span class="group__average">&Oslash;{{$group->getAverage()}}</span>
        </header>
        <div class="group__wrapper">
            <div class="group__content">
                @foreach($group->subjects as $subject)
                    <div class="subject">
                        <header class="subject__header">
                            <h3><a href="{{url('subjects/' . $subject->id . '/edit')}}">{{$subject->name}}</a></h3>
                            <span class="subject__average">&Oslash;{{$subject->getAverage()}}</span>
                        </header>
                        <div class="subject__content">
                            @foreach($subject->grades as $grade)
                                <a class='grade'
                                   href="{{url('grades/' . $grade->id . '/edit')}}">{{number_format($grade->grade, 1, ".", "'")}}</a>
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
                                <a class="form--button" href="{{url('subjects/' . $subject->id . '/grades/create')}}">Add
                                    grade</a>
                            </div>

                        </footer>
                    </div>

                @endforeach
            </div>
            <footer class="group__footer">
                <a class="form--button" href="{{url('groups/' . $group->id . '/subjects/create')}}">Add Subject</a>
            </footer>
        </div>
    </div>
@endforeach