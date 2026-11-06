
@extends('layouts.app')

@section('title', 'Reports')
@section('breadcrumb', 'Reports')
@section('page-title', 'Reports')

@section('content')

<div class="space-y-6">

    {{-- Header --}}
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
        <div>
            <h2 class="text-xl font-semibold text-[#21172F]">
                Recruitment Reports
            </h2>
            <p class="text-sm text-[#9589A4] mt-1">
                Monitor recruitment performance and AI analysis results.
            </p>
        </div>

        <div class="flex flex-wrap items-center gap-2">
            <select id="periodFilter"
                class="rounded-lg border border-[#ECE7F1] bg-white px-3 py-2 text-sm text-[#21172F] outline-none focus:border-[#3666F6]">
                <option value="This Month">This Month</option>
                <option value="Last Month">Last Month</option>
                <option value="Last 3 Months">Last 3 Months</option>
                <option value="This Year">This Year</option>
            </select>

            <button onclick="exportReport()"
                class="rounded-lg bg-[#3666F6] px-4 py-2 text-sm font-medium text-white hover:bg-[#2851D8] transition">
                <i class="fa-solid fa-download mr-2"></i>
                Export Report
            </button>
        </div>
    </div>

    {{-- Demo Notice --}}
    <div class="flex items-center gap-2 rounded-lg border border-[#C7D8FF] bg-[#EFF6FF] px-4 py-3">
        <i class="fa-solid fa-circle-info text-[#3666F6]"></i>
        <p class="text-xs text-[#475569]">
            This page currently uses demo data. Live database reporting will be connected later.
        </p>
    </div>

    {{-- Statistics --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4">

        <div class="rounded-xl border border-[#ECE7F1] bg-white p-5">
            <div class="flex items-center justify-between">
                <p class="text-sm text-[#9589A4]">Total CV Analyzed</p>
                <div class="flex h-9 w-9 items-center justify-center rounded-lg bg-[#E0EAFF] text-[#3666F6]">
                    <i class="fa-solid fa-file-lines"></i>
                </div>
            </div>
            <h3 class="mt-4 text-2xl font-semibold text-[#21172F]">248</h3>
            <p class="mt-2 text-xs text-green-600">
                <i class="fa-solid fa-arrow-up mr-1"></i>12.5% from last month
            </p>
        </div>

        <div class="rounded-xl border border-[#ECE7F1] bg-white p-5">
            <div class="flex items-center justify-between">
                <p class="text-sm text-[#9589A4]">Average Match Score</p>
                <div class="flex h-9 w-9 items-center justify-center rounded-lg bg-[#E0EAFF] text-[#3666F6]">
                    <i class="fa-solid fa-chart-line"></i>
                </div>
            </div>
            <h3 class="mt-4 text-2xl font-semibold text-[#21172F]">76.8%</h3>
            <p class="mt-2 text-xs text-green-600">
                <i class="fa-solid fa-arrow-up mr-1"></i>4.2% from last month
            </p>
        </div>

        <div class="rounded-xl border border-[#ECE7F1] bg-white p-5">
            <div class="flex items-center justify-between">
                <p class="text-sm text-[#9589A4]">Shortlisted Candidates</p>
                <div class="flex h-9 w-9 items-center justify-center rounded-lg bg-[#E0EAFF] text-[#3666F6]">
                    <i class="fa-solid fa-user-check"></i>
                </div>
            </div>
            <h3 class="mt-4 text-2xl font-semibold text-[#21172F]">42</h3>
            <p class="mt-2 text-xs text-[#9589A4]">Candidates selected</p>
        </div>

        <div class="rounded-xl border border-[#ECE7F1] bg-white p-5">
            <div class="flex items-center justify-between">
                <p class="text-sm text-[#9589A4]">Active Positions</p>
                <div class="flex h-9 w-9 items-center justify-center rounded-lg bg-[#E0EAFF] text-[#3666F6]">
                    <i class="fa-solid fa-briefcase"></i>
                </div>
            </div>
            <h3 class="mt-4 text-2xl font-semibold text-[#21172F]">16</h3>
            <p class="mt-2 text-xs text-[#9589A4]">Currently open positions</p>
        </div>

    </div>

    {{-- Charts --}}
    <div class="grid grid-cols-1 xl:grid-cols-2 gap-5">

        {{-- Match Score Distribution --}}
        <div class="rounded-xl border border-[#ECE7F1] bg-white p-5">
            <div class="mb-5">
                <h3 class="font-semibold text-[#21172F]">AI Match Score Distribution</h3>
                <p class="mt-1 text-xs text-[#9589A4]">
                    Candidate distribution based on compatibility score
                </p>
            </div>

            <div class="h-64">
                <canvas id="matchScoreChart"></canvas>
            </div>
        </div>

        {{-- Candidate Status --}}
        <div class="rounded-xl border border-[#ECE7F1] bg-white p-5">
            <div class="mb-5">
                <h3 class="font-semibold text-[#21172F]">Candidate Status</h3>
                <p class="mt-1 text-xs text-[#9589A4]">
                    Overview of candidate recruitment status
                </p>
            </div>

            <div class="mx-auto h-64 max-w-xs">
                <canvas id="candidateStatusChart"></canvas>
            </div>
        </div>

    </div>

    {{-- Candidates by Position --}}
    <div class="rounded-xl border border-[#ECE7F1] bg-white p-5">
        <div class="mb-5">
            <h3 class="font-semibold text-[#21172F]">Candidates by Job Position</h3>
            <p class="mt-1 text-xs text-[#9589A4]">
                Number of candidates analyzed for each position
            </p>
        </div>

        <div class="h-72">
            <canvas id="positionChart"></canvas>
        </div>
    </div>

    {{-- Position Performance Table --}}
    <div class="overflow-hidden rounded-xl border border-[#ECE7F1] bg-white">

        <div class="flex flex-col gap-2 border-b border-[#ECE7F1] p-5 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <h3 class="font-semibold text-[#21172F]">Position Performance</h3>
                <p class="mt-1 text-xs text-[#9589A4]">
                    Recruitment performance by job position
                </p>
            </div>
            <span class="text-xs text-[#9589A4]">5 positions shown</span>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm">
                <thead class="bg-[#F8FAFC] text-xs text-[#9589A4]">
                    <tr>
                        <th class="px-5 py-4 font-medium">Job Position</th>
                        <th class="px-5 py-4 font-medium">Total Candidates</th>
                        <th class="px-5 py-4 font-medium">Avg. Match Score</th>
                        <th class="px-5 py-4 font-medium">Shortlisted</th>
                        <th class="px-5 py-4 font-medium">Status</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-[#E2E8F0] text-[#334155]">
                    @php
                        $positions = [
                            ['title' => 'UI/UX Designer', 'total' => 58, 'score' => 86, 'shortlisted' => 12, 'status' => 'Active'],
                            ['title' => 'Frontend Developer', 'total' => 72, 'score' => 81, 'shortlisted' => 14, 'status' => 'Active'],
                            ['title' => 'Backend Developer', 'total' => 45, 'score' => 74, 'shortlisted' => 8, 'status' => 'Active'],
                            ['title' => 'Data Analyst', 'total' => 38, 'score' => 69, 'shortlisted' => 5, 'status' => 'Active'],
                            ['title' => 'Digital Marketing', 'total' => 35, 'score' => 73, 'shortlisted' => 3, 'status' => 'Closed'],
                        ];
                    @endphp

                    @foreach ($positions as $position)
                        <tr class="hover:bg-[#EFF6FF]">
                            <td class="whitespace-nowrap px-5 py-4 font-medium text-[#21172F]">
                                {{ $position['title'] }}
                            </td>
                            <td class="px-5 py-4">{{ $position['total'] }}</td>
                            <td class="px-5 py-4">
                                <div class="flex items-center gap-3">
                                    <span class="w-10">{{ $position['score'] }}%</span>
                                    <div class="h-1.5 w-20 overflow-hidden rounded-full bg-[#E2E8F0]">
                                        <div class="h-full rounded-full bg-[#3666F6]"
                                            style="width: {{ $position['score'] }}%">
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-5 py-4">{{ $position['shortlisted'] }}</td>
                            <td class="px-5 py-4">
                                <span class="rounded-full px-3 py-1 text-xs
                                    {{ $position['status'] === 'Active'
                                        ? 'bg-green-50 text-green-700'
                                        : 'bg-gray-100 text-gray-600' }}">
                                    {{ $position['status'] }}
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>

{{-- Chart.js --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const chartFont = {
        family: 'Instrument Sans, sans-serif'
    };

    // AI Match Score Distribution
    new Chart(document.getElementById('matchScoreChart'), {
        type: 'bar',
        data: {
            labels: ['0–49%', '50–69%', '70–84%', '85–100%'],
            datasets: [{
                label: 'Candidates',
                data: [24, 52, 98, 74],
                backgroundColor: ['#BFDBFE', '#93B4FF', '#5B8CFF', '#3666F6'],
                borderRadius: 6,
                maxBarThickness: 48
            }]
        },
        options: {
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: { color: '#E2E8F0' },
                    ticks: { precision: 0 }
                },
                x: {
                    grid: { display: false }
                }
            },
            font: chartFont
        }
    });

    // Candidate Status
    new Chart(document.getElementById('candidateStatusChart'), {
        type: 'doughnut',
        data: {
            labels: ['Shortlisted', 'Under Review', 'Rejected', 'Pending'],
            datasets: [{
                data: [42, 86, 25, 95],
                backgroundColor: ['#3666F6', '#93B4FF', '#CBD5E1', '#E2E8F0'],
                borderWidth: 0,
                hoverOffset: 5
            }]
        },
        options: {
            maintainAspectRatio: false,
            cutout: '68%',
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        usePointStyle: true,
                        pointStyle: 'circle',
                        padding: 18
                    }
                }
            }
        }
    });

    // Candidates by Job Position
    new Chart(document.getElementById('positionChart'), {
        type: 'bar',
        data: {
            labels: [
                'UI/UX Designer',
                'Frontend Developer',
                'Backend Developer',
                'Data Analyst',
                'Digital Marketing'
            ],
            datasets: [{
                label: 'Candidates',
                data: [58, 72, 45, 38, 35],
                backgroundColor: '#3666F6',
                borderRadius: 6,
                maxBarThickness: 45
            }]
        },
        options: {
            indexAxis: 'y',
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false }
            },
            scales: {
                x: {
                    beginAtZero: true,
                    grid: { color: '#E2E8F0' },
                    ticks: { precision: 0 }
                },
                y: {
                    grid: { display: false }
                }
            }
        }
    });

    // Export demo report as CSV
    function exportReport() {
        const rows = [
            ['Job Position', 'Total Candidates', 'Average Match Score', 'Shortlisted', 'Status'],
            ['UI/UX Designer', 58, '86%', 12, 'Active'],
            ['Frontend Developer', 72, '81%', 14, 'Active'],
            ['Backend Developer', 45, '74%', 8, 'Active'],
            ['Data Analyst', 38, '69%', 5, 'Active'],
            ['Digital Marketing', 35, '73%', 3, 'Closed']
        ];

        const csv = rows.map(row =>
            row.map(value => `"${String(value).replaceAll('"', '""')}"`).join(',')
        ).join('\n');

        const blob = new Blob([csv], {
            type: 'text/csv;charset=utf-8;'
        });

        const url = URL.createObjectURL(blob);
        const link = document.createElement('a');

        link.href = url;
        link.download = 'talentmatch-recruitment-report.csv';
        link.click();

        URL.revokeObjectURL(url);
    }

    // Period filter demo interaction
    document.getElementById('periodFilter').addEventListener('change', function () {
        console.log('Selected report period:', this.value);
    });
</script>

@endsection
