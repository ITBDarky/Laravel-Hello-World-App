{{-- csrf is used to determine if this form is from authorized or not --}}
@csrf

<div>
    <label for="customerName">Name:</label>
    <input id="customerName" name="name" type="text" autocomplete="off" value="{{ old('name') ?? $customer->name ?? null }}">
    <p style="color: red;">
        @error('name')
            {{ $message }}
        @enderror
    </p>
</div>
<div>
    <label for="customerEmail">Email:</label>
    <input id="customerEmail" name="email" type="text" autocomplete="off" value="{{ old('email') ?? $customer->email ?? null }}">
    <p style="color: red;">
        @error('email')
            {{ $message }}
        @enderror
    </p>
</div>
