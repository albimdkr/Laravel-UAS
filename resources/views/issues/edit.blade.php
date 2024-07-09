@extends('layouts.app')

@section('contents')
<div class="container">
    <h1 class="my-4">Edit Issue</h1>
    <form action="{{ route('issues.update', $issue->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="client_id">Client</label>
            <select class="form-control" id="client_id" name="client_id" required>
                @foreach($clients as $client)
                    <option value="{{ $client->id }}" {{ $client->id == $issue->client_id ? 'selected' : '' }}>
                        {{ $client->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="issue">Issue</label>
            <input type="text" class="form-control" id="issue" name="issue" value="{{ $issue->issue }}" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="open" {{ $issue->status == 'open' ? 'selected' : '' }}>Open</option>
                <option value="in-progress" {{ $issue->status == 'in-progress' ? 'selected' : '' }}>In Progress</option>
                <option value="closed" {{ $issue->status == 'closed' ? 'selected' : '' }}>Closed</option>
            </select>
        </div>
        <div class="form-group">
            <label for="start_date">Start Date</label>
            <input type="date" class="form-control" id="start_date" name="start_date" value="{{ $issue->start_date }}">
        </div>
        <div class="form-group">
            <label for="end_date">End Date</label>
            <input type="date" class="form-control" id="end_date" name="end_date" value="{{ $issue->end_date }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Issue</button>
    </form>
</div>
@endsection
