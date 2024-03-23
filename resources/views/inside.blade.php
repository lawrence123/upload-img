<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    inside pages
    @auth
    <p>auth can see this line</p>
    @if(auth()->user()->admin=='admin')
    <p>admin can see this line</p>
    @endif
    @endauth
    <a href="{{route('home')}}">home</a>
    <a href="{{route('logout')}}">logout</a>
</body>
</html>