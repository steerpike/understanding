@extends('layout')

@section('content')
<div class="container">
	<h1>{{ $person->name }}</h1>
	<div>
		{!! $person->description !!}
	</div>
	@if(count($person->media))
		<h2>Media:</h2>
		<div class="container">
			<form action="/media/delete" method="POST">
			{{ csrf_field() }}
		@foreach($person->media->chunk(3) as $chunk)
			<div class="row">
				@foreach ($chunk as $media)
					<media-component :title="'media title'" :media="{{$media}}"></media-component>
			  @endforeach
			</div>
		@endforeach
				<p><input class="select-all-checkbox" type="checkbox" id="select-all">
				<label for="select-all">Select all videos for deletion</label></p>
				<input class="btn btn-primary" type="submit" value="Submit">
			</form>
		</div>
	@endif
	@if(count($person->influences))
		<h2>Influenced:</h2>
		<ul>
		@foreach ($person->influences as $influence)
			@if($influence->available)
				<li><a href="{{ route('person', ['id'=>$influence->qid]) }}">{{ $influence->name }} </a></li>
			@else
	      <li>{{ $influence->name }} </li>
	    @endif
	    @endforeach
		</ul>
	@endif
</div>
@endsection