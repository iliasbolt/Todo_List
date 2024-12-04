@isset($name)
    <p>{{$name}}</p>
@endisset

@empty($name)
    <p>Weirde u d dont have a name ? Please type it  <a href="{{url('/profile')}}">here</a></p>
@endempty

