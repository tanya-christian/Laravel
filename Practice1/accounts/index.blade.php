@extends('welcome')
@section('content')
<h1> Financial Services Industry</h1>
<br>
<br>
<a href="{{route('accounts.create')}}">Add Account Details</a>
<br>
<p>Account Details</p>
<br>
<table border="1" cellpadding="8">
    <tr>
        <th>Account Number</th>
        <th>Account Type</th>
        <th>Balance</th>
        <th>Owner Name</th>
        <th>Action</th>
    </tr>
    
    @foreach($accounts as $account)
    <tr>
    <td>{{$account->accno}}</td>
    <td>{{$account->acctype}}</td>
    <td>{{$account->balance}}</td>
    <td>{{$account->ownername}}</td>
    <td>
        <a href="{{route('accounts.edit',$account->id)}}">EDIT<a>
        <a href="{{route('accounts.show',$account->id)}}">VIEW<a>
        <form action="{{route('accounts.destroy',$account->id)}}" method="POST">
            @csrf 
            @method('DELETE')
            <button type="submit" onclick="return confirm('Are you sure?You want to delete the record?')">DELETE</button>
        </form>
    </td>
    @endforeach
    </tr>
</table>
@endsection