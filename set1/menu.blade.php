@extends('welcome')

@section('content')
    <h1>This is Menu Page</h1>
    <img src="{{asset('images/food1.png')}}" atl="Sandwich">
    <p>Sandwich<br>250</p>

    <img src="{{asset('images/food1.png')}}" atl="Burger">
    <p>Burger<br>200</p>

    <img src="{{asset('images/food1.png')}}" atl="South Indian">
    <p>South Indian<br>300</p>

@endsection