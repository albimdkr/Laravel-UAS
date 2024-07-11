<!DOCTYPE html>
<html>
<head>
    <title>All Issues</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; }
        th { background-color: #f2f2f2; }
        span { font-weight: bold; }
        .open {color: #17a2b8; }
        .inProgress {color: #ffc107; }
        .pending {color: #36b9cc; }
        .closed {color: #28a745; }
    </style>
</head>
<body>
    <h2>NET-TRACKER | Total All Issues</h2>
    <p><span>Date: </span>{{ $date }}</p>
    <table>
        <thead>
            <tr>
                <th class="open">Total Open</th>
                <th class="inProgress">Total In Progress</th>
                <th class="pending">Total Pending</th>
                <th class="closed">Total Closed</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align: center;">{{ $totalOpen }}</td>
                <td style="text-align: center;">{{ $totalInProgress }}</td>
                <td style="text-align: center;">{{ $totalPending }}</td>
                <td style="text-align: center;">{{ $totalClosed }}</td>
            </tr>
        </tbody>
    </table>
    <p><span>Printed by: </span>{{ $user->name }}</p>
    <p><span>Role: </span>{{ $user->role }}</p>
</body>
</html>
