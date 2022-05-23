@extends('layouts.templatemain')

@section('content')
<a href="subscriptions/create" class="btn btn-primary">Register</a>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">State</th>
            <th scope="col">Email</th>
            <th scope="col">Creation Date</th>
            <th scope="col">Update Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($subscriptions as $subscription)
        <tr>
            <td>{{ $subscription->id }}</td>
            <td>{{ $subscription->name_state }}</td>
            <td>{{ $subscription->email }}</td>
            <td>{{ $subscription->created_at }}</td>
            <td>{{ $subscription->updated_at }}</td>
        </tr>
        @endforeach
        
    </tbody>
</table>
@endsection