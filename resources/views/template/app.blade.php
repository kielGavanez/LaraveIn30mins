<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        header{
            background-color: aqua;
            padding-top: 20px;
            padding-bottom: 20px;

        
        }
        a {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif            
        }
    </style>
  
</head>
<body>
    <header >
        <nav>
            <a href="{{route('home')}}">Home</a>
            <a href="{{route('profile')}}">Profile</a>
            <a href="{{route('contacts')}}">Contact Us</a>
            <a href="{{route('animation')}}">Animation</a>
            <a href="{{route('tasks')}}">Tasks</a>
        </nav>
    </header>
    @yield('content')
</body>
</html>