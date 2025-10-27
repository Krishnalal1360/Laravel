{{--  
<h4>Names:</h4>
<ul>
    @foreach ($names as $name)
        <li>{{ $name }}</li>
    @endforeach
</ul>
{!! $alert !!}
--}}
<p>{{ "Name: " . !empty($name)?$name:"No Name!" }}</p>
<p>{{ "Message: " . !empty($message)?$message:"No Message!" }}</p>
