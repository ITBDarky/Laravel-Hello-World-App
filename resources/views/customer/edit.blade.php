@extends('app')

@section('title', 'Edit Customer')

@section('content')
<div>
    <a href="/customers">&lt;&lt; Back</a>
</div>

<form action="/customers/{{ $customer->id }}" method="POST">
    {{-- csrf is used to determine if this form is from authorized or not --}}
    @csrf

    @method('PUT')
    <div>
        <label for="customerName">Name:</label>
        <input id="customerName" name="name" type="text" autocomplete="off" value="{{ $customer->name }}">
        <p style="color: red;">
            @error('name')
                {{ $message }}
            @enderror
        </p>
    </div>
    <div>
        <label for="customerEmail">Email:</label>
        <input id="customerEmail" name="email" type="text" autocomplete="off" value="{{ $customer->email }}">
        <p style="color: red;">
            @error('email')
                {{ $message }}
            @enderror
        </p>
    </div>


    <button type="submit">Save Customer</button>
</form>
@endsection
