@extends('layout')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-4">
			<div class="img-container">
				@if($person->image)
					<img src="{{$person->image}}">
				@endif
			</div>
			<h1>{{ $person->name }}</h1>
			<h2>{{ $person->intro }}</h2>
			@if($person->year)
				<h3>{{ $person->year }} to {{ $person->death_year }}</h3>
			@endif
			@if($person->year && $person->death_year)
				<p><a href="{{ route('between', ['start'=>$person->year, 'end'=>$person->death_year]) }}">{{$people}} other Philosophers during this period.</a></p>
			@endif
			@if($person->place_of_birth)
				<div>
					<h3>Birthplace - {{ $person->place_of_birth }}</h3>
					@if($person->place_of_birth_lat && $person->place_of_birth_lng)
					<div>
						<iframe width="325" height="280" frameborder="0" src="https://www.bing.com/maps/embed?h=280&w=325&cp={{ $person->place_of_birth_lat }}~{{ $person->place_of_birth_lng }}&lvl=11&typ=d&sty=r&src=SHELL&FORM=MBEDV8&pushpins={{ $person->place_of_birth_lat }}_{{ $person->place_of_birth_lng }}" scrolling="no">
						</iframe>
						<div style="white-space: nowrap; text-align: center; width: 325px; padding: 6px 0;">
							<a id="largeMapLink" target="_blank" href="https://www.bing.com/maps?cp=-35.282561836577216~149.15527233886718&amp;sty=r&amp;lvl=11&amp;FORM=MBEDLD">View Larger Map</a> &nbsp; | &nbsp;
						</div>
					</div>
					@endif
				</div>
			@endif
		</div>
		<div class="col-8">
			<div class="row">
				<div>
					{!! $person->description !!}
					<p><a href="{{ $person->wikipedia_canonical_url }}">More on Wikipedia</a>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<h2>Other Sources</h2>
						@if($person->gutenbergId)
							<p><a href="https://www.gutenberg.org/ebooks/author/{{$person->gutenbergId}}">Books available on Project Gutenberg by {{$person->name}}</a></p>
						@endif
						@if($person->locaId)
							<p><a href="http://id.loc.gov/authorities/names/{{$person->locaId}}">Library of Congress page for {{$person->name}}</a></p>
						@endif
						@if($person->imdb)
							<p><a href="https://www.imdb.com/name/{{$person->imdb}}">IMDB for {{$person->name}}</a></p>
						@endif
						@if($person->viafId)
							<p><a href="https://viaf.org/viaf/{{$person->viafId}}">VIAF for {{$person->name}}</a></p>
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