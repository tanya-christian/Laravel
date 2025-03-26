<h2>Enter Project Details</h2>
<form action="{{route('projects.store')}}" method="POST">
    @csrf 
    <label for="title">Project Name</label>
    <input type="text" id="title" name="title" required>
    <br>
    <br>
    <label for="location">Location</label>
    <input type="text" id="location" name="location" required>
    <br>
    <br>
    <label for="startdate">Start Date</label>
    <input type="text" id="startdate" name="startdate" required>
    <br>
    <br>
    <label for="enddate">End Date</label>
    <input type="text" id="enddate" name="enddate" required>
    <br>
    <br>
    <button type="submit">Submit</button>
</form>