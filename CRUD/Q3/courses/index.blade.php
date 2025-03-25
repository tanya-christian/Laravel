<h2>Course Details</h2>
<a href="{{route('courses.create')}}">Take up a Course</a>
<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>Course Title</th>
            <th>Description</th>
            <th>Instructor</th>
            <th>Duration</th>
        </tr>
    </thead>
    <tbody>
        @foreach($courses as $course)
        <tr>
            <td>{{$course->title}}</td>
            <td>{{$course->desc}}</td>
            <td>{{$course->instructor}}</td>
            <td>{{$course->duration}}</td>
        </tr>
        @endforeach
    </tbody>
</table>