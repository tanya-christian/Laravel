@extends('welcome')
@section('content')
<h1>{{$account->accno}}</h1>
<p><strong>Account Type</strong>{{$account->acctype}}</p>
<p><strong>Balance</strong>{{$account->balance}}</p>
<p><strong>Owner Name</strong>{{$account->ownername}}</p>

<a href="{{route('accounts.index')}}">Go Back To Home Page</a>

@endsection