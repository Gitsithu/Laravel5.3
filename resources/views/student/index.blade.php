<html>
<head><title>View Student Records</title></head>
<body>
<a href='student/create'>New Student</a><br/>
<table border=1>
<tr>
<td>Name</td>
<td>Action</td>
<td>Action</td>
</tr>
@foreach ($users as $user)
<tr>
<td>{{ $user->name }}</td>
<td><a href='student/edit/{{ $user->id }}'>Edit</a></td>
<td><a href='student/delete/{{ $user->id }}'>Delete</a></td>
</tr>
@endforeach
</table>
</body>
</html>