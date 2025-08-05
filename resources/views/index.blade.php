@extends('layout.neosia')

@section('title', 'Home | Neosia')

@section('content')
    <div class="text-center">
        @include('components.landingpage.hero')
        @include('components.landingpage.product')
        @include('components.landingpage.mengapa')
        @include('components.landingpage.programs')
        @include('components.landingpage.event')
        @include('components.landingpage.news')
        @include('components.landingpage.clientSay')
        @include('components.landingpage.team')
    </div>
@endsection
