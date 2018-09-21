@extends('layout')

@section('content')
<div class="container">
	<h1>People</h1>
	<ul>
	@foreach ($people as $person)
        <li><a href="{{ route('person', ['id'=>$person->qid]) }}">
        {{ $person->year }} - {{ $person->name }} 
        ({{ $person->influences_count }}) [{{ $person->media_count }}]
        </a></li>

    @endforeach
	</ul>
	{{ $people->links() }}
</div>
@endsection