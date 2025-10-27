{{ "Name: $name" }}<br><br>

@foreach ($skills as $skill)
    {{ "Skill: $skill" }}<br>
@endforeach
<br>

@forelse ($identity as $key => $value)
    {{ $key . " => "}}
    @if (is_array($value))
        {{ implode(', ', $value) }}
    @else
        {{ $value }}
    @endif
    <br>
@empty
    {{ "No Identity!" }}
@endforelse
