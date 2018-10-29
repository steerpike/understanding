@extends('layout')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-4">
			<div>
					@if($person->image)
						<img src="{{$person->image}}" height=400 width=300>
					@endif
				</div>
			<h1>{{ $person->name }}</h1>
			<h3>{{ $person->year }} to {{ $person->death_year }}</h3>
			@if($person->year && $person->death_year)
				<p><a href="{{ route('between', ['start'=>$person->year, 'end'=>$person->death_year]) }}">{{$people}} other Philosophers during this period.</a></p>
			@endif
			<div>
				<h3>Map goes here</h3>
			</div>
		</div>
		<div class="col-8">
			<div class="row">
				<div>
					{!! $person->description !!}
				</div>
			</div>
			<div class="row">
				<div class="col">
				<h2>Other Sources</h2>
					@if($person->imdb)
						<p>{{$person->imdb}}</p>
					@endif
				</div>
				<div class="col">
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
			</div>
		</div>
	</div>
	@if(count($person->media))
		<h2>Media:</h2>
		<div class="container">
			<form action="/media/delete" method="POST">
			{{ csrf_field() }}
		@foreach($person->media->chunk(3) as $chunk)
			<div class="row">
				@foreach ($chunk as $media)
					<media-component :media="{{$media}}"></media-component>
			  	@endforeach
			</div>
		@endforeach
				<p><input class="select-all-checkbox" type="checkbox" id="select-all">
				<label for="select-all">Select all videos for deletion</label></p>
				<input class="btn btn-primary" type="submit" value="Submit">
			</form>
		</div>
	@endif
</div>
@endsection