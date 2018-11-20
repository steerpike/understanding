@extends('layout')

@section('content')
<div class="container">
    
    <h1>Philosophers</h1>
    <div class="row">
    @foreach($people->chunk(20) as $chunk)
        <div class="col">
            <ul>
            @foreach ($chunk as $person)
                <li><a href="{{ route('person', ['id'=>$person->qid]) }}">
                <span>{{ $person->name }}</span> 
                [{{ $person->media_count }} videos]
                </a></li>
            @endforeach
            </ul>
        </div>
    @endforeach
    </div>
    {{ $people->links() }}
</div>
@endsection