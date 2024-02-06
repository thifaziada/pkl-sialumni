@extends('admin.layouts.navigation')
@section('content')

<div class="main_container">
    <h1>Welcome to Dashboard Admin!</h1>
    <div class="card-container">
        <!-- Card Content 1 -->
        <div class="card card-alumni">
            <h2>{{$alumniCount}}</h2>
            <p>Total Alumni</p>
        </div>

        <!-- Card Content 2 -->
        <div class="card card-faq">
            <h2>{{$faqCount}}</h2>
            <p>Total FAQ</p>
        </div>

        <div class="card card-stories">
            <!-- Card Content 3 -->
            <h2>Card 3</h2>
            <p>Total Stories</p>
        </div>
    </div>

    <!-- Charts Row -->
    <div class="row" style="display: flex; margin-top:20px;">
        <!-- Doughnut Chart Container for Total Alumni -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Alumni</h5>
                    <canvas id="alumniDoughnutChart" width="400" height="150"></canvas>
                </div>
            </div>
        </div>

        <!-- Doughnut Chart Container for Total FAQ -->
        <div class="col-md-8 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total FAQ</h5>
                    <canvas id="faqDoughnutChart" width="400" height="150"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- Chart.js Library -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@php
    $alumniVerifiedCount = \App\Models\Alumni::where('status', 'verified')->count();
    $alumniNotVerifiedCount = \App\Models\Alumni::where('status', '!=', 'verified')->count();
    $faqPendingCount = \App\Models\Faq::where('status','pending')->count();
    $faqApprovedCount = \App\Models\Faq::where('status','approved')->count();
    $faqRejectedCount = \App\Models\Faq::where('status','rejected')->count();
@endphp

<script>

document.addEventListener("DOMContentLoaded", function () {
    var alumniData = {
        labels: ["Verified", "Not Verified"],
        datasets: [{
            data: [{{ $alumniVerifiedCount }}, {{ $alumniNotVerifiedCount }}],
            backgroundColor: ["#1E90FF", "#8B0000"],
        }],
    };

    var alumniChartCanvas = document.getElementById("alumniDoughnutChart").getContext("2d");
    new Chart(alumniChartCanvas, {
        type: "doughnut",
        data: alumniData,
    });

    var faqData = {
        labels: ["Pending", "Approved", "Rejected"],
        datasets: [{
            data: [{{ $faqPendingCount }}, {{ $faqApprovedCount }}, {{ $faqRejectedCount }}],
            backgroundColor: ["#1E90FF", "#4CAF50", "#8B0000"],
        }],
    };

    var faqChartCanvas = document.getElementById("faqDoughnutChart").getContext("2d");
    new Chart(faqChartCanvas, {
        type: "doughnut",
        data: faqData,
    });
});
</script>


<style>
.main_container {
  margin-left: 150px;
  padding: 20px;
  margin-top: 30px;
}

.card-container {
    display: flex;
    justify-content: space-between;
    margin-top: 15px;
}

.card {
    flex: 1;
    margin: 0 10px;
    padding: 70px;
    border: 1px solid #ccc;
    border-radius: 12px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.card h2, .card p {
    margin: 0;
}

.card-alumni {
    background-color: #3498db;
    color: #fff; 
}

.card-faq {
    background-color: #2ecc71;
    color: #fff; 
}

.card-stories {
    background-color: #e74c3c;
    color: #fff; 
}
</style>