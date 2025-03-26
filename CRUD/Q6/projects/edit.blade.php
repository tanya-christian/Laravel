<h2>Edit Project Details</h2>
<form action="{{route('projects.update',$project->id)}}" method="POST">
    @csrf 
    @method('PUT')
    <label for="title">Project Name</label>
    <input type="text" id="title" name="title" required value="{{$project->title}}">
    <br>
    <br>
    <label for="location">Location</label>
    <input type="text" id="location" name="location" required value="{{$project->location}}">
    <br>
    <br>
    <label for="startdate">Start Date</label>
    <input type="text" id="startdate" name="startdate" required value="{{$project->startdate}}">
    <br>
    <br>
    <label for="enddate">End Date</label>
    <input type="text" id="enddate" name="enddate" required value="{{$project->enddate}}">
    <br>
    <br>
    <button type="submit">Submit</button>
</form>