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
                <option value="">Select Client</option>
                @foreach($clients as $client)
                    <option value="{{ $client->id }}" {{ $client->id == $issue->client_id ? 'selected' : '' }}>{{ $client->name }}</option>
                @endforeach
            </select>
            @error('client_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="issue">Issue</label>
            <input type="text" class="form-control" id="issue" name="issue" value="{{ old('issue', $issue->issue) }}" required>
            @error('issue')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="">Select Status</option>
                <option value="Open" {{ $issue->status == 'Open' ? 'selected' : '' }}>Open</option>
                <option value="In Progress" {{ $issue->status == 'In Progress' ? 'selected' : '' }}>In Progress</option>
                <option value="Pending" {{ $issue->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                <option value="Closed" {{ $issue->status == 'Closed' ? 'selected' : '' }}>Closed</option>
            </select>
            @error('status')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="date_start_tshoot">Start Date</label>
            <input type="datetime-local" class="form-control" id="date_start_tshoot" name="date_start_tshoot" value="{{ old('date_start_tshoot', $issue->date_start_tshoot ? $issue->date_start_tshoot->format('Y-m-d\TH:i') : '') }}" required>
            @error('date_start_tshoot')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="date_end_tshoot">End Date</label>
            <input type="datetime-local" class="form-control" id="date_end_tshoot" name="date_end_tshoot" value="{{ old('date_end_tshoot', $issue->date_end_tshoot ? $issue->date_end_tshoot->format('Y-m-d\TH:i') : '') }}">
            @error('date_end_tshoot')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update Issue</button>
    </form>
</div>
@endsection
