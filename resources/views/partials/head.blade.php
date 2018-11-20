<meta charset="utf-8">

<meta name="csrf-token" content="{{ csrf_token() }}">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="description" content="">

<meta name="author" content="">


@if( ! empty($title))
<title>{{$title}}</title>
@else
<title>Understanding</title>
@endif




<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/vis/4.21.0/vis.min.css" rel="stylesheet" type="text/css" />
@if( ! empty($schema))
    @php
    {{ echo $schema->toScript();}}
    @endphp
@endif