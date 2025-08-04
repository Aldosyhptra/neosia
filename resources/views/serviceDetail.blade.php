@extends('layout.neosia')

@section('title', 'Detail Service | Neosia')

@section('content')
    <div class="text-center">
        @include('components.service.hero')
        @include('components.service.description')
        @include('components.service.industry')
    </div>
@endsection
