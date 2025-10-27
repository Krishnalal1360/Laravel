@php
    $user = "Taylor Otwell";
@endphp
{{ "User Name: $user" }}
<br>
{{ "<h4>Hello World!</h4>" }}
{!! "<h4>Hello World!</h4>" !!}

@php
    $val = 0;
@endphp
@if ($val > 0)
    {{ "Positive Value:$val" }}
@elseif ($val < 0)
    {{ "Negative Value:$val" }}
@else
    {{ "Zero Value:$val" }}
@endif
<br>

@php
    $choice = 4;
@endphp
@switch($choice)
    @case(1)
        {{ "Create!" }}
        @break
    @case(2)
        {{ "Read!" }}
        @break
    @case(3)
        {{ "Update!" }}
        @break
    @case(4)
        {{ "Delete!" }}
        @break
    @default
@endswitch
<br>


@for ($i=1;$i<=5;$i++)
    {{ "i:$i" }}
    {!! "<br>" !!}
@endfor
<br>

@php
    $i=1;
@endphp
@while ($i<=5)
    {{ "i:$i" }}
    {!! "<br>" !!}
    @php
        $i = $i+1;
    @endphp
@endwhile
<br>

@php
    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
@endphp
@foreach ($arr as $ar)
    {{ "Item:$ar" }}
    {!! "<br>" !!}
@endforeach
<br>

@php
    $arr = [];
@endphp
@forelse ($arr as $ar)
    {{ "Item:$ar" }}
    {!! "<br>" !!}
@empty
    {{ "No Items in Array!" }}
@endforelse
<br>
<br>

@php
    $numbers = range(1, 5);
@endphp
@foreach ($numbers as $i)
    {{ "Index: $loop->index" }} <br>
    {{ "Iteration: $loop->iteration" }} <br>
    {{ "Count: $loop->count" }} <br>
    {{ "Remaining: $loop->remaining" }} <br>
    {{ "Is i=$i first iteration: " . ($loop->first ? 'true' : 'false') }} <br>
    {{ "Is i=$i last iteration: " . ($loop->last ? 'true' : 'false') }} <br>
    {{ "Is i=$i odd iteration: " . ($loop->odd ? 'true' : 'false') }} <br>
    {{ "Is i=$i even iteration: " . ($loop->even ? 'true' : 'false') }} <br>
    <hr>
@endforeach
<br>

@php
    $numbers = [
        [1, 2, 3],
        [4, 5, 6],
    ];
@endphp
@foreach ($numbers as $outer)
    <h3>Outer Loop → Depth: {{ $loop->depth }}, Index: {{ $loop->index }}</h3>
    @foreach ($outer as $inner)
        <p>
            Inner Loop → Depth: {{ $loop->depth }}, Index: {{ $loop->index }} <br>
            Parent Loop Index: {{ $loop->parent->index }}
        </p>
    @endforeach
    <hr>
@endforeach
<br>

@php
    $str1 = null;
    $str2 = "Hello!";
@endphp
@isset($str1)
        {{ "str1:$str1" }}
@endisset
<br>
@isset($str2)
        {{ "str2:$str2" }}
@endisset
<br>

@php
    $str1 = '';
    $str2 = "Hello!";
@endphp
@empty($str1)
        {{ "str1:$str1" }}
@endempty
<br>
@empty($str2)
        {{ "str2:$str2" }}
@endempty
