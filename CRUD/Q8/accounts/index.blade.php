<h2>Account Details</h2>
<br>
<a href="{{route('accounts.create')}}">Add Account</a>
<br>
<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>Account Number</th>
            <th>Account Type</th>
            <th>Balance</th>
            <th>Owner Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($accounts as $account)
        <tr>
            <td>{{$account->acc_no}}</td>
            <td>{{$account->acc_type}}</td>
            <td>{{$account->balance}}</td>
            <td>{{$account->owner_name}}</td>
            <td>
                <a href="{{route('accounts.edit',$account->id)}}">Edit</a>
                <form action="{{route('accounts.destroy',$account->id)}}" method="POST">
                    @csrf 
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure?You want to delete ypur account details.')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>