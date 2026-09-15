<!DOCTYPE html>
<html>
<head>
    <title>Create New Category</title>

    <style>
        body {
            font-family: Arial;
        }

        h1 {
            text-align: center;
            color: brown;
        }

        .errors {
            background-color: #f8d7da;
            padding: 15px;
            color: darkred;
        }

        .form {
            width: 60%;
            margin: 40px auto;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
        }

        button {
            background-color: green;
            color: white;
            padding: 10px 20px;
            border: none;
        }
    </style>
</head>

<body>

<h1>Create New Category</h1>

@if($errors->any())

<div class="errors">

    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

</div>

@endif

<div class="form">

<form action="{{ route('categories.store') }}" method="POST">

    @csrf

    <label>Category Name</label>

    <input type="text" name="name" value="{{ old('name') }}">

    <label>Category Description</label>

    <textarea name="description">{{ old('description') }}</textarea>

    <button type="submit">
        Create
    </button>

</form>

</div>

</body>
</html>