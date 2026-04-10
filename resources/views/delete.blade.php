<div>
@if ($data)
    <p>{{ $data->first_name }} {{ $data->last_name }}</p>

    <a href="/students/{{ $data->id }}">Edit</a>

    <form action="/students/{{ $data->id }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit">Delete</button>
    </form>
@endif
</div>
