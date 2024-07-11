@extends('layouts.app')
  
{{-- @section('title', 'Welcome | E-Warehouse') --}}
  
@section('contents')
    <!-- Begin Page Content -->
    <div class="container-fluid">
      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Welcome Back!</h1>
      </div>

        {{-- Card In --}}
        <hr>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">List Issue Status</h1>
            <a href="{{ route('issues.print') }}" class="btn btn-primary">Print <i class="fas fa-print"></i></a>
        </div>
        <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Open</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalOpen }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-plus-circle fa-2x text-info"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">In Progress</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalInProgress }}</div>
                            </div>
                            <div class="col-auto">
                            <i class="fas fa-circle-notch fa-2x text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Pending
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $totalPending }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                            <i class="fas fa-clock fa-2x text-danger"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Closed</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalClosed }}</div>
                            </div>
                            <div class="col-auto">
                            <i class="fas fa-check-circle fa-2x text-success"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Chart Issue --}}
        <div class="row">
            <!-- Pie Chart -->
            <div class="col-xl-12 col-lg-5">
                <div class="card shadow mb-4" style="display: flex;">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Overview Status</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-pie pt-4 pb-2">
                            <canvas id="myPieChartIssues"></canvas>
                        </div>
                        <div class="mt-4 text-center small">
                            <span class="mr-2">
                                <i class="fas fa-circle text-info"></i> Open
                            </span>
                            <span class="mr-2">
                                <i class="fas fa-circle text-warning"></i> In Progress
                            </span>
                            <span class="mr-2">
                                <i class="fas fa-circle text-danger"></i> Pending
                            </span>
                            <span class="mr-2">
                                <i class="fas fa-circle text-success"></i> Closed
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- /.container-fluid -->

    <script>
        // Issue
        var totalOpen = {{ $totalOpen }};
        var totalInProgress = {{ $totalInProgress }};
        var totalPending = {{ $totalPending }};
        var totalClosed = {{ $totalClosed }};
    </script>
@endsection