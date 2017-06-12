@foreach($answers as $answer)

    <div><input type="radio" value="{{$answer->id}}" name="answer">{{$answer->title}} </div>

@endforeach