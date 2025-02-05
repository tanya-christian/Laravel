
@extend('welcome')

@section('content')
<h1>Student Registration</h1>
<p> Enter Student Details</p>
<form method="POST" action="/submitform">
    @csrf
    <label for="name">Full Name:</label>
    <input type="text" id="name" name="name" required>
    <br>

    <label for="email">Email:</label>
    <input type="text" id="email" name="email" required>
    <br>

    <label for="phone">Phone No:</label>
    <input type="text" id="phone" name="phone" required>
    <br>

    <label for="courses">Courses:</label>
    <select id="courses" name="courses" required>
        <option value"">Select Course</option>
        <option value"MCA">MCA</option>
        <option value"MSC.IT">MSC.IT</option>
        <option value"MCOM">MCOM</option>
        <option value"MBA">MBA</option>
    </select>
    <br>

    <button type="submit">Submit</button>   
</form>
@endsection
