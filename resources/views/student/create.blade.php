<html>
<head><title>Student Management | Add</title></head>
<body>
<form action="/student/store" method="post">
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
<table>
<tr>
<td>Name</td>
<td><input type='text' name='name' /></td>
</tr>

<tr>
<td>Address</td>
<td><input type='text' name='address' /></td>
</tr>
<tr>
<td colspan='2'><input type='submit' value="Add student" /></td>
</tr>
</table>
</form>
</body>
</html>