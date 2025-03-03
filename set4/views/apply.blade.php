@extends('welcome')

@section('content')
<h1>Apply Here</h1>
<p>Enter your deatils</p>
<form method="POST" action="/submitform">
    @csrf
    <label for="title">Job Title</label>
    <input type="text" id="title" name="title" required>
    <br>

    <label for="category">Category</label>
    <select id="category" name="category">
        <option value="">Select Category</option>
        <option value="HR">HR</option>
        <option value="Manager">Manager</option>
        <option value="Software Designer">Software Designer</option>
        <option value="UI/UX">UI/UX</option>
    </select>
    <br>

    <label for="des">Description</label>
    <input type="text" id="des" name="des" required>
    <br>

    <label for="salary">Salary</label>
    <input type="text" id="salary" name="salary" required>
    <br>

    <button type="submit">Submit</button>
</form>

@endsection