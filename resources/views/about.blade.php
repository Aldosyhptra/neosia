@extends('layout.neosia')

@section('title', 'About | Neosia')

@section('content')
    <div class="text-center">
        @include('components.about.hero')
        @include('components.about.description')
    </div>
@endsection
