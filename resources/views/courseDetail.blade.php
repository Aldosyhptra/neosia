@extends('layout.neosia')

@section('title', 'All Course | Neosia')

@section('content')
    <div class="text-center">
        @include('components.course.hero', ['label' => ['Course','Detail Course']])
        @include('components.course.detailcourse')
    </div>
@endsection
