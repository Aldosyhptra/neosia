@extends('layout.neosia')

@section('title', 'All Course | Neosia')

@section('content')
    <div class="text-center">
        @include('components.course.hero', ['label' => ['Course']])
        @include('components.course.allcourse')
    </div>
@endsection
