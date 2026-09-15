<!DOCTYPE html>
<html>
<head>
    <title>Create New Category</title>
</head>
<body>

<h1>Create New Category</h1>

@if($errors->any())
    <div>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('categories.store') }}" method="POST">

    @csrf

    <label>Category Name</label>
    <br>
    <input type="text" name="name" value="{{ old('name') }}">

    <br><br>

    <label>Category Description</label>
    <br>
    <input type="text" name="description" value="{{ old('description') }}">

    <br><br>

    <button type="submit">Create</button>

</form>

</body>
</html>