<h2><u>Enter Course Details</u></h2>
<form action="{{route('courses.store')}}" method="POST">
    @csrf 
    <label for="title">Title</label>
    <input type="text" id="title" name="title" required>
    <br>
    <br>
    <label for="desc">Description</label>
    <input type="text" id="desc" name="desc" required>
    <br>
    <br>
    <label for="instructor">Instructor</label>
    <input type="text" id="instructor" name="instructor" required>
    <br>
    <br>
    <label for="duration">Course Duration</label>
    <input type="text" id="duration" name="duration" required>
    <br>
    <br>

    <button type="submit">Submit</button>
</form>