<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 {{--@isset($name)
    <p>{{$name}}</p>

@endisset

@empty($name)
    <p>Weirde u d dont have a name ? Please type it -> <a href="{{url('/profile')}}">here</a></p>
@endempty
<br>
<center>
    @if(count($tasks) == 1)
        <p>you have one record </p>
    @elseif(count($tasks) == 0 )
        <p>
            you have no records bruh
        </p>
    @endif
    <p>You have Alot of records --> "{{count($tasks)}}"</p>
    @foreach($tasks as $task)
        <div style="background-color: red">
            <p>
            <h2>
                {{$task->title}}<br>
                {{$task->description}}
            </h2>
            </p>
        </div>
        <p>other param</p>
    @endforeach
</center> --}}
<center>
    @if(@empty($result) or is_null($result))
        <br>
        <p>
            No data has been found for the you
        </p>

    @else
        <div style="background-color: yellow">
            {{$result->title}}<br>
            {{$result->description}}
        </div>
    @endif
    <p>nothing to show Error Appeared <a href="{{url('/profile')}}">click here.</a></p>
</center>
</body>
</html>


