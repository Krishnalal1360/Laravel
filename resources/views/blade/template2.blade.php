@include('blade.layout.header')

@php
    $name = "Alex";
    $skills = ['HTML', 'CSS', 'JS', 'PHP', 'LARAVEL'];
    $identity = [
        "name" => $name,
        "skills" => $skills
    ];
@endphp

@php
    $boolean = true;
    $languages = ['English', 'French', 'German', 'Spanish', 'Italian'];
@endphp

@includeWhen($boolean, 'blade.layout.sidebar', ['languages'=>$languages])

@php
    $boolean = true;
    $topics = ['News', 'Sports', 'Entertainment', 'Technology', 'Health'];
@endphp

@includeUnless($boolean, 'blade.layout.aside', ['topics'=>$topics])

@include('blade.layout.content', ['name'=>$name,'skills'=>$skills, 'identity'=>$identity])

@include('blade.layout.footer')
