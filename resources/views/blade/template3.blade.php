@extends('blade.layout.master')

@section('title', 'Template 3')

{{--  
@section('sidebar')

    @php
        $boolean = true;
        $languages = ['English', 'French', 'German', 'Spanish', 'Italian'];
    @endphp

    <h1>Sidebar</h1>

    <ul>
    @foreach ($languages as $language)
        <li>{{ $language }}</li>
    @endforeach
    </ul>

@endsection
--}}

@php
    $languages = ['Hindi', 'Bengali', 'Punjabi', 'Urdu', 'Gujarati'];
@endphp

@section('sidebar')

    @parent

    @foreach ($languages as $language)
        <li>{{ $language }}</li>
    @endforeach

    </ul>
    
@endsection

@section('content')

    <h1>Content</h1>

    @php
        $name = "Alex";
        $skills = ['HTML', 'CSS', 'JS', 'PHP', 'LARAVEL'];
        $identity = [
            "name" => $name,
            "skills" => $skills
        ];
    @endphp

    @foreach ($identity as $key=>$value)
        {{ $key . " => " }}
        @if (is_array($value))
            {{ implode(', ', $value) }}
        @else
            {{ $value }}
        @endif
        <br>
    @endforeach

@endsection