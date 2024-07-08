@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Clients List</h1>
    <a href="{{ route('clients.create') }}" class="btn btn-primary mb-3">Create New Client</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Manage Scope</th>
                <th>Contact Name</th>
                <th>Contact Email</th>
                <th>Contact Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
                <tr>
                    <td>{{ $client->id }}</td>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->manage_scope }}</td>
                    <td>{{ $client->contact_name }}</td>
                    <td>{{ $client->contact_email }}</td>
                    <td>{{ $client->contact_phone }}</td>
                    <td>
                        <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
