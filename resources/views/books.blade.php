@extends('layout')

@section('content')
<div class="container">
    
    <h1>Books on {{$topic}}</h1>
    <div class="row">
    @foreach($books->chunk(20) as $chunk)
        <div class="col">
            <ul>
            @foreach ($chunk as $book)
                <li>
                <span>{{ $book->title }}</span>
                @foreach ($book->people as $author)
                <a href="{{ route('person', ['id'=>$author->qid]) }}">[{{ $author->name }}]</a>
                </li>
                @endforeach
            @endforeach
            </ul>
        </div>
    @endforeach
    </div>
    {{ $books->links() }}
</div>
@endsection