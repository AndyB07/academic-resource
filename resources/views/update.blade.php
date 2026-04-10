<x-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Students
        </h2>
    </x-slot>
    </x-layout>
<div>
 <!DOCTYPE html>
<html>
<head>
    <title>Update Student</title>
</head>
<body>

<h2>Update Student</h2>

<form action="/students/{{ $data->id }}" method="POST">
    @csrf
    @method('PUT')

    <label>First Name:</label>
    <input type="text" name="first_name" value="{{ $data->first_name }}">

    <br>

    <label>Last Name:</label>
    <input type="text" name="last_name" value="{{ $data->last_name }}">

    <br>

    <label>Date of Birth:</label>
    <input type="date" name="dob" value="{{ $data->dob }}">

    <br><br>

    <button type="submit">Update</button>
</form>

</body>
</html>
</div>
