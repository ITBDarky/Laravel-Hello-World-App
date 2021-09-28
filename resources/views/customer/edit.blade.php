@extends('app')

@section('title', 'Edit Customer')

@section('content')
<div>
    <a href="/customers">&lt;&lt; Back</a>
</div>

<form action="/customers/{{ $customer->id }}" method="POST">
    @method('PUT')

    @include('customer.fields')

    <button type="submit">Save Customer</button>
</form>
@endsection
