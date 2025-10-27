@include('blade.layout.header')

@php
    $name = "Alex";
    $skills = ['HTML', 'CSS', 'JS', 'PHP', 'LARAVEL'];
    $identity = [
        "name" => $name,
        "skills" => $skills
    ];
@endphp
@include('blade.layout.content', ['name'=>$name,'skills'=>$skills, 'identity'=>$identity])

@include('blade.layout.footer')
