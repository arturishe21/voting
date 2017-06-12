@foreach($answers as $answer)

    <div>{{$answer->title}} : {{$answer->count_votes}} {{$answer->getPercent($sumCountVotes)}} %</div>

@endforeach