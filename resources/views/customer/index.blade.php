@extends('app')

@section('title', 'Customer')

@section('content')
<div>
    <a href="/customers/create">Add new customer</a>
</div>
<div>
    <a href="/customers?active=1">Active</a>
    <a href="/customers?active=0">Inactive</a>
</div>
<ul>
    @forelse ($customers as $customer)
        <li>
            <a href="/customers/{{ $customer->id }}">{{ $customer->name }}</a>
            ({{ $customer->email }})
        </li>
    @empty
        <p>No customer found.</p>
    @endforelse
</ul>

@endsection
