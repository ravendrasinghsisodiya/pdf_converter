<!-- resources/views/students/pdf.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Student List PDF</title>
</head>
<body>
    <h1>Student List</h1>
    <table border="1" style="width: 100%;">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile Number</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->mobile_number }}</td>
                    <td><img src="{{ asset('storage/' . $student->img) }}" width="50"></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
