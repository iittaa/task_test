test
@foreach ($values as $value)
<ul>
<li>{{$value->id}} . {{$value->text}}</li>
</ul>
@endforeach
