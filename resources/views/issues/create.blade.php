@extends('layouts.app')

@section('contents')
<div class="container">
    <h1 class="my-4">Create Issue</h1>
    <form action="{{ route('issues.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="client_id">Client</label>
            <select class="form-control" id="client_id" name="client_id" required>
                <option value="">Select Client</option>
                @foreach($clients as $client)
                    <option value="{{ $client->id }}">{{ $client->name }}</option>
                @endforeach
            </select>
            @error('client_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="issue">Issue</label>
            <input type="text" class="form-control" id="issue" name="issue" required>
            @error('issue')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="">Select Status</option>
                <option value="Open">Open</option>
                <option value="In Progress">In Progress</option>
                <option value="Closed">Closed</option>
            </select>
            @error('status')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="date_start_tshoot">Start Date</label>
            <input type="datetime-local" class="form-control" id="date_start_tshoot" name="date_start_tshoot" required>
            @error('date_start_tshoot')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="date_end_tshoot">End Date</label>
            <input type="datetime-local" class="form-control" id="date_end_tshoot" name="date_end_tshoot">
            @error('date_end_tshoot')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create Issue</button>
    </form>
</div>
@endsection
