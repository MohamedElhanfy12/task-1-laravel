<h1>All Courses</h1>
<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Course Name</th>
        <th>Action</th>
    </tr>
    @foreach($courses as $course)
    <tr>
        <td>{{ $course['id'] }}</td>
        <td>{{ $course['name'] }}</td>
        <td><a href="/courses/{{ $course['id'] }}">View</a></td>
    </tr>
    @endforeach
</table>

@if(!empty($selectedCourse))
    <hr>
    <h2>Course Details</h2>
    <p><strong>ID:</strong> {{ $selectedCourse['id'] }}</p>
    <p><strong>Name:</strong> {{ $selectedCourse['name'] }}</p>
    <p><strong>Description:</strong> {{ $selectedCourse['description'] }}</p>
    <a href="/courses">Close Details</a>
@endif