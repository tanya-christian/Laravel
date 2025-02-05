@extend('welcome')

@section('content')
<h1>Student Detials</h1>
<table border="1" cellpadding="8">
    <tr>
        <th>Name:</th>
        <td>{{$name['name']}}</td>
    </tr>

    <tr>
        <th>Email:</th>
        <td>{{$email['email']}}</td>
    </tr>

    <tr>
        <th>Phone No:</th>
        <td>{{$phone['phone']}}</td>
    </tr>

    <tr>
        <th>Course:</th>
        <td>{{$courses['courses']}}</td>
    </tr>
</table>