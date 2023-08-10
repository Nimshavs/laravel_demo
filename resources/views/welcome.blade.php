@extends('layout')

@section('title',"Home Page")
@vite(['resources/css/home.css'])

@section('mainContent')
    <h1>Hi I'm {{$name}}</h1>
    <!-- <div class="container">
        <label for="uname">Username</label>
        <input type="text" placeholder="enter username" name="uname"><br><br>
        <label for="password">Password</label>
        <input type="text" placeholder="enter password" name="password"><br>
        <button type="submit">Login</button>
    </div>
    <style>
        h1{
            font-size: 50px;
            text-align:center;
        }
    </style> -->
@endsection