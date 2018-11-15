@extends('layout')

@section('content')
<div class="container">
    
    <h1>Categories</h1>
    <div class="row">
    @foreach($categories->chunk(20) as $chunk)
        <div class="col">
            <ul>
            @foreach ($chunk as $category)
            <li><a href="/philosophers/category/{{$category->name}}">
                {{ $category->name }}  ({{ $category->people_count }})
                </a></li>
            @endforeach
            </ul>
        </div>
    @endforeach
    </div>
    {{ $categories->links() }}
</div>
@endsection