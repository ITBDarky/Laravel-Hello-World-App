@extends('app')

@section('title', 'Catalog')

@section('content')
    <h1>Catalogs</h1>
    <form action="/catalog" method="POST">
        {{-- csrf is used to determine if this form is from authorized or not --}}
        @csrf

        <label for="catalogName">Catalog:</label>
        <input id="catalogName" name="name" type="text" autocomplete="off">

        <button type="submit">Add Catalog</button>
    </form>
    <p style="color: red;">
        @error('name')
            {{ $message }}
        @enderror
    </p>

    <h2>These are the available catalogs of the project.</h2>
    <ul>
        @forelse ($catalogs as $catalog)
            <li>
                {{-- Reference about using double quote to preserve newline: https://stackoverflow.com/a/4238438/7939633 --}}
                {!! nl2br($catalog->name."\r\ncreated at: ".$catalog->created_at) !!}
            </li>
        @empty
            <li>The catalog is empty.</li>
        @endforelse
    </ul>
@endsection
