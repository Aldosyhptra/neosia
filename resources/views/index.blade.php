@extends('layout.neosia')

@section('title', 'Halaman Neosia')

@section('content')
    <div class="text-center">
        @include('components.landingpage.hero')
        @include('components.landingpage.product')
        @include('components.landingpage.mengapa')
        @include('components.landingpage.client')
        @include('components.landingpage.programs')
        @include('components.landingpage.team')
        @include('components.landingpage.event')
    </div>
@endsection
