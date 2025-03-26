<h2>Project Details</h2>
<br>
<a href="{{route('projects.create')}}">Add</a>
<br>
<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>Project Title</th>
            <th>Location</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($projects as $project)
        <tr>
            <td>{{$project->title}}</td>
            <td>{{$project->location}}</td>
            <td>{{$project->startdate}}</td>
            <td>{{$project->enddate}}</td>
            <td>
                <a href="{{route('projects.edit',$project->id)}}">Edit</a>
                <form action="{{route('projects.create',$project->id)}}" method="POST">
                    @csrf 
                    @method('GET')
                    <button type="submit">Add</button>
                </form>
                <form action="{{route('projects.destroy',$project->id)}}" method="POST">
                    @csrf 
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure?You want to delete.')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>