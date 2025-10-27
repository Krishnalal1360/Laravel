@extends('blade.layout.master')

@section('title', 'Template 5')

@push('style')
    <link rel="stylesheet" href="{{ asset('assets/style1.css') }}">
@endpush

@prepend('style')
    <link rel="stylesheet" href="{{ asset('assets/style2.css') }}">
@endprepend

@section('sidebar')

    <h2 id="h2_id">Popular Languages:</h2>

    @parent

    <li>Japanese</li>
    <li>Chinese</li>
    <li>Korean</li>

    </ul>   

@endsection

@section('content')

    <h1 id="h1_id">Content</h1>

    @php
        $frameworks = ['Laravel', 'Django', 'Spring', 'Rails', 'Express'];
    @endphp

    <h2 id="h2_id">Popular Frameworks:</h2>

    <ul class="frameworks">

    @foreach ($frameworks as $framework)
        <li>{{ $framework }}</li>
    @endforeach
    
    </ul>

@endsection

@push('script')
    <script src="{{ asset('assets/script1.js') }}"></script>
@endpush
