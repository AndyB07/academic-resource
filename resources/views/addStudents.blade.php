   <x-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Students
        </h2>
    </x-slot>
    </x-layout>
   <form action="/students" method="POST">
    @csrf
    @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        @endif
    <input type="text" name="last_name" placeholder="Last Name">
    <input type="text" name="first_name" placeholder="First Name">
    <input type="date" name="dob">
    <button type="submit">Add Student</button>
   </form>