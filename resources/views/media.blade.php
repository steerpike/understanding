@extends('layout')

@section('content')

    @foreach($videos->chunk(3) as $chunk)
        <div class="row">
            @foreach ($chunk as $media)
                <media-component :media="{{$media}}"></media-component>
            @endforeach
        </div>
    @endforeach
@endsection