
<title>Title - @yield('title', 'Template')</title>

@include('blade.layout.header')

@stack('style')

{{-- 
@hasSection('sidebar')
    @yield('sidebar')
@else
    <p>No sidebar available!</p>
@endif
--}}

<h1 id="h1_id">Sidebar</h1>

@section('sidebar')

    @php
        $boolean = true;
        $languages = ['English', 'French', 'German', 'Spanish', 'Italian'];
    @endphp

    <ul class="languages">

    @foreach ($languages as $language)
        <li>{{ $language }}</li>
    @endforeach

@show

@hasSection('content')
    @yield('content')
@else
    <p>No content available!</p>
@endif

@stack('script')

@include('blade.layout.footer')