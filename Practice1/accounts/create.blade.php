@extends('welcome')
@section('content')
<h2>Enter Your Account Details<h2>
<br>
<form action="{{route('accounts.store')}}" method="POST">
    @csrf 
    <label for="accno">Account Number</label>
    <input type="text" id="accno" name="accno" required>
    <br>
    <br>
    <label for="acctype">Account Type</label>
    <select id="acctype" name="acctype" required>
        <option value="">SELECT ACCOUNT TYPE</option>
        <option value="current">Current</option>
        <option value="savings">Savings</option>
        <option value="salary">Salary</option>
    </select>
    <br>
    <br>
    <label for="balance">Balance</label>
    <input type="text" id="balance" name="balance" required>
    <br>
    <br>
    <label for="ownername">Owner Name</label>
    <input type="text" id="ownername" name="ownername" required>
    <br>
    <br>
    <button type="submit">ADD</button>
</form>
@endsection