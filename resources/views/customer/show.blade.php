@extends('app')

@section('title', 'Customer Details')

@section('content')
<div>
    <a href="/customers">&lt;&lt; Back</a>
</div>
<h2>Customer Details</h2>
<div>
    <strong>Name</strong>
    <div>{{ $customer->name }}</div>
</div>
<div>
    <strong>Email</strong>
    <div>{{ $customer->email }}</div>
</div>
<div>
    <a href="/customers/{{ $customer->id }}/edit">Edit Customer</a>
</div>
<div>
    <form action="/customers/{{ $customer->id }}" method="POST">
        @csrf

        @method('DELETE')
        <button type="submit">Delete Customer</button>
    </form>
</div>
@endsection
