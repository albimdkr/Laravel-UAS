@extends('layouts.app')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="h3 mb-0 text-gray-800">Clients List</h1>
        <div>
            <a href="{{ route('clients.create') }}" class="btn btn-success">Create New Client <i class="fas fa-plus"></i></a>
        </div>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
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
            @if($clients->count() > 0)
                @foreach($clients as $client)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $client->name }}</td>
                        <td class="align-middle">{{ $client->email }}</td>
                        <td class="align-middle">{{ $client->manage_scope }}</td>
                        <td class="align-middle">{{ $client->contact_name }}</td>
                        <td class="align-middle">{{ $client->contact_email }}</td>
                        <td class="align-middle">{{ $client->contact_phone }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('clients.edit', $client->id) }}" type="button" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                <form action="{{ route('clients.destroy', $client->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="8">No clients found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
