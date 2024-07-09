@extends('layouts.app')

@section('contents')
<div class="container">
    <h1 class="my-4">Issue Details</h1>
    <p><strong>Client:</strong> {{ $issue->client->name }}</p>
    <p><strong>Issue:</strong> {{ $issue->issue }}</p>
    <p><strong>Status:</strong> {{ $issue->status }}</p>
    <p><strong>Start Date:</strong> {{ $issue->start_date }}</p>
    <p><strong>End Date:</strong> {{ $issue->end_date }}</p>

    <h2>History</h2>
    <form action="{{ route('issue_histories.store', $issue->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="description">Add History</label>
            <textarea class="form-control" id="description" name="description" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add History</button>
    </form>

    <ul class="list-group mt-3">
        @foreach($issue->issueHistories as $history)
            <li class="list-group-item">
                {{ $history->description }}
                <form action="{{ route('issue_histories.destroy', $history->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm float-right">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
@endsection
