<x-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            registration
        </h2>
    </x-slot>
</x-layout>
    <h1>Registration Page</h1>
    <form method="POST" action="/registration">
        @csrf

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        @endif
        
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required value="{{ old('name') }}"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required value="{{ old('email') }}"><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"  required ><br><br>
        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required><br><br>

        <button type="submit">Register</button>
    </form>

