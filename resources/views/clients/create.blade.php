@extends('layouts.app')

@section('contents')
<div class="container">
    <h1 class="my-4">Create Client</h1>
    <form action="{{ route('clients.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Client Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Client Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="manage_scope">Manage Scope</label>
            <textarea class="form-control" id="manage_scope" name="manage_scope"></textarea>
        </div>
        <div class="form-group">
            <label for="contact_name">Contact Name</label>
            <input type="text" class="form-control" id="contact_name" name="contact_name">
        </div>
        <div class="form-group">
            <label for="contact_email">Contact Email</label>
            <input type="email" class="form-control" id="contact_email" name="contact_email">
        </div>
        <div class="form-group">
            <label for="contact_phone">Contact Phone</label>
            <input type="text" class="form-control" id="contact_phone" name="contact_phone">
        </div>
        <button type="submit" class="btn btn-primary">Create Client</button>
    </form>
</div>
@endsection
