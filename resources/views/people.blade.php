@extends('layout')

@section('content')
<div class="container">
    
    <h1>People</h1>
    <div class="row">
    @foreach($people->chunk(20) as $chunk)
        <div class="col">
            <ul>
            @foreach ($chunk as $person)
                <li><a href="{{ route('person', ['id'=>$person->qid]) }}">
                {{ $person->year }} - {{ $person->name }}:{{ $person->linked_articles }} 
                ({{ $person->influences_count }}) [{{ $person->media_count }}]
                </a></li>
            @endforeach
            </ul>
        </div>
    @endforeach
    </div>
    {{ $people->links() }}
</div>
@endsection