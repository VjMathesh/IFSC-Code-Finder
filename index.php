<!DOCTYPE html>
<html>
<head>
    <title>IFSC Code Finder</title>
</head>
<body>
    <h1>Find IFSC Code</h1>
    <form action="find_ifsc.php" method="post">
        <label for="bank_name">Bank Name:</label>
        <input type="text" id="bank_name" name="bank_name" required>
        <br>
        <label for="branch_name">Branch Name:</label>
        <input type="text" id="branch_name" name="branch_name" required>
        <br>
        <input type="submit" value="Find IFSC Code">
    </form>
</body>
</html>
