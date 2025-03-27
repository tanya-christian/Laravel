<h2>Enter Your Account Details</h2>
<br>
<form action="{{route('accounts.store')}}" method="POST">
    @csrf 
    <label for="acc_no">Account Number</label>
    <input type="text" id="acc_no" name="acc_no" required>
    <br>
    <br>
    <select id="acc_type" name="acc_type" required>
        <option value="">Select Account Type</option>
        <option value="Savings">Savings Account</option>
        <option value="Current">Current Account</option>
        <option value="Salary">Salary Account</option>
    </select>
    <br>
    <br>
    <label for="balance">Balance</label>
    <input type="text" id="balance" name="balance" required>
    <br>
    <br>
    <label for="owner_name">Owner Name</label>
    <input type="text" id="owner_name" name="owner_name" required>
    <br>
    <br>
    <button type="submit">Submit</button>
</form>