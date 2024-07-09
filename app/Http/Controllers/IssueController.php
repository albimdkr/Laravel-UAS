<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use App\Models\Client;
use Illuminate\Http\Request;

class IssueController extends Controller
{
    public function index()
    {
        $issues = Issue::with('client')->get();
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
            'issue' => 'required|string|max:255',
            'status' => 'required|string|in:open,in-progress,closed',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
        ]);

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
            'issue' => 'required|string|max:255',
            'status' => 'required|string|in:open,in-progress,closed',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
        ]);

        $issue->update($request->all());

        return redirect()->route('issues.index')->with('success', 'Issue updated successfully.');
    }

    public function destroy(Issue $issue)
    {
        $issue->delete();
        return redirect()->route('issues.index')->with('success', 'Issue deleted successfully.');
    }
}

