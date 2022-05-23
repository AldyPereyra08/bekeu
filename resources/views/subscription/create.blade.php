@extends('layouts.templatemain')

@section('content')
<h2>Register</h2>

<form action="/subscriptions" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Email</label>
        <input id="email" name="email" type="email" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">State</label>
    
        <select id="name_state" name="name_state"  class="form-select" aria-label="Select your State">
        <option selected>Select your State</option>
        @foreach ($states as $state)
            <option value={{ $state->name }}>{{ $state->name }}</option>
        @endforeach  
        </select>
    </div>
    <a href="/subscriptions" class="btn btn-secondary" tabindex="5">Cancel</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Save</button>
</form>
@endsection