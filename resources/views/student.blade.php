<x-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Students
        </h2>
    </x-slot>
    </x-layout>
<div>
    <style>
       
        th, td {
            padding: 8px;
            text-align: left;
        }
    
    </style>
   <table border="3"> 
    <thead>
    <tr>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Date of Birth</th>
        <th>Action</th>
    </tr>
    </thead>

    <tbody>
@foreach ($data as $student)
    <tr>
        <td>{{ $student->last_name }}</td>
        <td>{{ $student->first_name }}</td>
        <td>{{ $student->dob }}</td>

        <td>
        
            <a href="/students/{{ $student->id }}/edit">Update</a>

            
            <form action="/students/{{ $student->id }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr> 
@endforeach
    </tbody>
   </table>

   <br>


</div>