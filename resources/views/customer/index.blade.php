@extends('app')

@section('title', 'Customer')

@section('content')
<div>
    <a href="customers/create">Add new customer</a>
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
