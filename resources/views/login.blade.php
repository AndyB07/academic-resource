<x-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Login
        </h2>
    </x-slot>
</x-layout>
  <h1>Login Page</h1>

  

  @if($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif

  <form method="POST" action="/login">
    @csrf
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{ old('email') }}" required><br><br>   
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>
    <button type="submit">Login</button>
  </form>

