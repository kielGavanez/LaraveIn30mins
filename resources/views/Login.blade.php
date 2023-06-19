@extends('template.app')

@section('content')
    
    <h1>Log In</h1>
    @error('message')
        {($message)}
    <form action="{{route('login.submit')}}" method="post">
    @csrf
    <div>
        <label for="username">Username: </label>
        <input type="text" id="username" >
    </div>
    <div>
        <label for="password">Password: </label>
        <input type="password" id="password" >
    </div>
    <div>
        <button>Log In</button>
    </div>
    </form>

@endsection