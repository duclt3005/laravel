<h1>news</h1>
@foreach($news as $value)
    {{$value->conten}}<br>
@endforeach

{!! $news->links()!!}