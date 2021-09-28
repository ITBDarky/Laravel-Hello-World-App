@extends('app')

@section('title', 'New Customer')

@section('content')
    <h3>New Customer</h3>
    <form action="/customers" method="POST">
        @include('customer.fields')

        <button type="submit">Add New Customer</button>
    </form>
@endsection
