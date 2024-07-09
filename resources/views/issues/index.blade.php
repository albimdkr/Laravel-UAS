@extends('layouts.app')

@section('contents')
<div class="container">
    <h1 class="my-4">Issues List</h1>
    <a href="{{ route('issues.create') }}" class="btn btn-primary mb-3">Create New Issue</a>
    {{-- <a href="{{ route('issues.show') }}" class="btn btn-secondary mb-3">History</a> --}}
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
                    <td>{{ $issue->status }}</td>
                    <td>{{ $issue->start_date }}</td>
                    <td>{{ $issue->end_date }}</td>
                    <td>
                        <a href="{{ route('issues.edit', $issue->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('issues.destroy', $issue->id) }}" method="POST" style="display:inline;">
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
