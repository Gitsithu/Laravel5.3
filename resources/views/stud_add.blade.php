<html>
<head><title>Event testing</title></head>
<body>
<form action="/addstudent" method="post">
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
<table>
<tr>
<td>Name</td>
<td><input type='text' name='name' /></td>
</tr>

<td colspan='2'><input type='submit' value="Add student" /></td>
</tr>
</table>
</form>
</body>
</html>