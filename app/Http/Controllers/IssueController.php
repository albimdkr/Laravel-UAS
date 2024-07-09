<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use App\Models\Client;
use Illuminate\Http\Request;

class IssueController extends Controller
{
    public function index(Request $request)
    {
        $query = Issue::query();

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        if ($request->filled('date_start')) {
            $query->whereDate('date_start_tshoot', '>=', $request->date_start);
        }

        if ($request->filled('date_end')) {
            $query->whereDate('date_end_tshoot', '<=', $request->date_end);
        }

        if ($request->filled('client_name')) {
            $query->whereHas('client', function($q) use ($request) {
                $q->where('name', 'like', '%' . $request->client_name . '%');
            });
        }

        $issues = $query->get();

        return view('issues.index', compact('issues'));
    }

    public function create()
    {
        $clients = Client::all();
        return view('issues.create', compact('clients'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'client_id' => 'required|exists:clients,id',
            'issue' => 'required|string',
            'status' => 'required|in:Open,In Progress,Pending,Closed',
            'date_start_tshoot' => 'required|date',
            'date_end_tshoot' => 'nullable|date|after_or_equal:date_start_tshoot',
        ]);
        // Set end date when status is Closed
        if ($request->status == 'Closed') {
            $request->merge(['date_end_tshoot' => now()]);
        }

        Issue::create($request->all());

        return redirect()->route('issues.index')->with('success', 'Issue created successfully.');
    }

    public function edit(Issue $issue)
    {
        $clients = Client::all();
        return view('issues.edit', compact('issue', 'clients'));
    }

    public function update(Request $request, Issue $issue)
    {
        $request->validate([
            'client_id' => 'required|exists:clients,id',
            'issue' => 'required|string',
            'status' => 'required|in:Open,In Progress,Closed',
            'date_start_tshoot' => 'required|date',
            'date_end_tshoot' => 'nullable|date|after_or_equal:date_start_tshoot',
        ]);

        // Set end date when status is Closed
        if ($request->status == 'Closed' && $issue->status != 'Closed') {
            $request->merge(['date_end_tshoot' => now()]);
        } elseif ($request->status != 'Closed') {
            $request->merge(['date_end_tshoot' => null]);
        }

        $issue->update($request->all());

        return redirect()->route('issues.index')->with('success', 'Issue updated successfully.');
    }

    public function destroy(Issue $issue)
    {
        $issue->delete();
        return redirect()->route('issues.index')->with('success', 'Issue deleted successfully.');
    }
}
