@extends('layouts.app')

@section('contents')
<div class="container">
    <h1 class="my-4">Edit Client</h1>
    <form action="{{ route('clients.update', $client->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Client Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $client->name }}" required>
        </div>
        <div class="form-group">
            <label for="email">Client Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $client->email }}" required>
        </div>
        <div class="form-group">
            <label for="manage_scope">Manage Scope</label>
            <textarea class="form-control" id="manage_scope" name="manage_scope">{{ $client->manage_scope }}</textarea>
        </div>
        <div class="form-group">
            <label for="contact_name">Contact Name</label>
            <input type="text" class="form-control" id="contact_name" name="contact_name" value="{{ $client->contact_name }}">
        </div>
        <div class="form-group">
            <label for="contact_email">Contact Email</label>
            <input type="email" class="form-control" id="contact_email" name="contact_email" value="{{ $client->contact_email }}">
        </div>
        <div class="form-group">
            <label for="contact_phone">Contact Phone</label>
            <input type="text" class="form-control" id="contact_phone" name="contact_phone" value="{{ $client->contact_phone }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Client</button>
    </form>
</div>
@endsection
