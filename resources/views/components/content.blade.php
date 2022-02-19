@extends('layouts.default')

@section('content')
    <article class="max-w-5xl mx-5 lg:mx-auto prose py-10">
        {{ $slot }}
    </article>
@endsection
