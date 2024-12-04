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
@isset($name)
    <p>{{$name}}</p>
@endisset

@empty($name)
    <p>Weirde u d dont have a name ? Please type it -> <a href="{{url('/profile')}}">here</a></p>
@endempty
<br>
<center>
    @dd($tasks)
</center>
</body>
</html>


