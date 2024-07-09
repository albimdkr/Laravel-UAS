@extends('layouts.app')

@section('contents')
<div class="container">
    <h1 class="my-4">Issues List</h1>
    <a href="{{ route('issues.create') }}" class="btn btn-primary mb-3">Create New Issue</a>
    
    <form method="GET" action="{{ route('issues.index') }}" class="mb-3">
        <div class="form-row">
            <div class="col">
                <input type="text" name="client_name" class="form-control" placeholder="Client Name" value="{{ request('client_name') }}">
            </div>
            <div class="col">
                <select name="status" class="form-control">
                    <option value="">Status</option>
                    <option value="Open" {{ request('status') == 'Open' ? 'selected' : '' }}>Open</option>
                    <option value="In Progress" {{ request('status') == 'In Progress' ? 'selected' : '' }}>In Progress</option>
                    <option value="Pending" {{ request('status') == 'Pending' ? 'selected' : '' }}>Pending</option>
                    <option value="Closed" {{ request('status') == 'Closed' ? 'selected' : '' }}>Closed</option>
                </select>
            </div>
            <div class="col">
                <input type="date" name="date_start" class="form-control" placeholder="Start Date" value="{{ request('date_start') }}">
            </div>
            <div class="col">
                <input type="date" name="date_end" class="form-control" placeholder="End Date" value="{{ request('date_end') }}">
            </div>
            <div class="col">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
            <div class="col p-12">
                <button type="submit" class="btn btn-success">Print</button>
            </div>
        </div>
    </form>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Client</th>
                <th>Issue</th>
                <th>Status</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($issues as $issue)
                <tr>
                    <td>{{ $issue->id }}</td>
                    <td>{{ $issue->client->name }}</td>
                    <td>{{ $issue->issue }}</td>
                    <td>
                        <span class="badge {{ $issue->status_class }}">
                            {{ $issue->status }}
                        </span>
                    </td>
                    <td>{{ $issue->date_start_tshoot }}</td>
                    <td>{{ $issue->date_end_tshoot }}</td>
                    <td>
                        <a href="{{ route('issues.edit', $issue->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('issues.destroy', $issue->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
