<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use App\Models\IssueHistory;
use Illuminate\Http\Request;

class IssueHistoryController extends Controller
{
    public function store(Request $request, Issue $issue)
    {
        $request->validate([
            'description' => 'required|string',
        ]);

        IssueHistory::create([
            'issue_id' => $issue->id,
            'description' => $request->description
        ]);

        return redirect()->route('issues.show', $issue->id)->with('success', 'History added successfully.');
    }

    public function destroy(IssueHistory $issueHistory)
    {
        $issueHistory->delete();
        return redirect()->route('issues.show', $issueHistory->issue_id)->with('success', 'History deleted successfully.');
    }
}

