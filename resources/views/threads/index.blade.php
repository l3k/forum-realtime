@extends('layouts.default')

@section('content')
    <div class="container">
        <h3>{{ __('Most rescent threads') }}</h3>
        <threads titles="{{ __('Threads') }}" replies="{{ __('Reply') }}" open="{{ __('open') }}">
            @include('layouts.default.preloader')
        </threads>
    </div>    
@endsection

@section('scripts')
    <script src="/js/threads.js"></script> 
@endsection