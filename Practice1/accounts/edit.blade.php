@extends('welcome')
@section('content')
<h2>Edit Your Account Details<h2>
<br>
<form action="{{route('accounts.update',$account->id)}}" method="POST">
    @csrf 
    @method('PUT')
    <label for="accno">Account Number</label>
    <input type="text" id="accno" name="accno" required value="{{$account->accno}}">
    <br>
    <br>
    <label for="acctype">Account Type</label>
    <select id="acctype" name="acctype" required>
        <option value="">SELECT ACCOUNT TYPE</option>
        <option value="current" {{$account->acctype=='current' ? 'selected' :''}}>Current</option>
        <option value="savings" {{$account->acctype=='savings' ? 'selected' :''}}>Savings</option>
        <option value="salary" {{$account->acctype=='salary' ? 'selected' :''}}>Salary</option>
    </select>
    <br>
    <br>
    <label for="balance">Balance</label>
    <input type="text" id="balance" name="balance" required value="{{$account->balance}}">
    <br>
    <br>
    <label for="ownername">Owner Name</label>
    <input type="text" id="ownername" name="ownername" required value="{{$account->ownername}}">
    <br>
    <br>
    <button type="submit">EDIT</button>
</form>

@endsection
