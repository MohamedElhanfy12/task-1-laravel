<!DOCTYPE html>
<html>
<head>
    <title>Edit Category</title>
</head>

<body>

<h1>Edit Category</h1>

@if($errors->any())

<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>

@endif

<form action="{{ route('categories.update', $category->id) }}" method="POST">

    @csrf
    @method('PUT')

    <label>Category Name</label>

    <input type="text" name="name" value="{{ old('name', $category->name) }}">

    <br><br>

    <label>Category Description</label>

    <input type="text"
           name="description"
           value="{{ old('description', $category->description) }}">

    <br><br>

    <button type="submit">
        Update
    </button>

</form>

</body>
</html>