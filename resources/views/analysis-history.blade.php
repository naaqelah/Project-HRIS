
@extends('layouts.app')

@section('title', 'Analysis History - TalentMatch AI')
@section('breadcrumb', 'Workspace / CV Reviewer / Analysis History')
@section('page-title', 'Analysis History')

@section('content')

@php
    // DATA DUMMY SEMENTARA
    // Nantinya akan diganti dengan data dari MySQL.

    $histories = [
        [
            'id' => 'CV-001',
            'name' => 'Andi Pratama',
            'initial' => 'AP',
            'email' => 'andi.pratama@email.com',
            'position' => 'UI/UX Designer',
            'date' => '2026-11-04',
            'score' => 92,
            'status' => 'Highly Matched',
            'experience' => '3 Years',
        ],
        [
            'id' => 'CV-002',
            'name' => 'Sarah Putri',
            'initial' => 'SP',
            'email' => 'sarah.putri@email.com',
            'position' => 'Frontend Developer',
            'date' => '2026-11-03',
            'score' => 85,
            'status' => 'Highly Matched',
            'experience' => '2 Years',
        ],
        [
            'id' => 'CV-003',
            'name' => 'Budi Santoso',
            'initial' => 'BS',
            'email' => 'budi.santoso@email.com',
            'position' => 'Backend Developer',
            'date' => '2026-11-03',
            'score' => 74,
            'status' => 'Matched',
            'experience' => '2 Years',
        ],
        [
            'id' => 'CV-004',
            'name' => 'Nadia Amelia',
            'initial' => 'NA',
            'email' => 'nadia.amelia@email.com',
            'position' => 'UI/UX Designer',
            'date' => '2026-11-02',
            'score' => 58,
            'status' => 'Low Match',
            'experience' => '1 Year',
        ],
        [
            'id' => 'CV-005',
            'name' => 'Rizky Ramadhan',
            'initial' => 'RR',
            'email' => 'rizky.ramadhan@email.com',
            'position' => 'Data Analyst',
            'date' => '2026-11-01',
            'score' => 88,
            'status' => 'Highly Matched',
            'experience' => '3 Years',
        ],
        [
            'id' => 'CV-006',
            'name' => 'Dina Maharani',
            'initial' => 'DM',
            'email' => 'dina.maharani@email.com',
            'position' => 'Frontend Developer',
            'date' => '2026-10-30',
            'score' => 67,
            'status' => 'Matched',
            'experience' => '1 Year',
        ],
    ];
@endphp


<div class="space-y-5">

    {{-- PAGE HEADER --}}

    <div class="flex flex-col sm:flex-row sm:items-center
                justify-between gap-3">

        <div>
            <h2 class="text-xl font-bold text-[#21172F]">
                Analysis History
            </h2>

            <p class="text-sm text-[#9589A4] mt-1">
                Manage and review all previously analyzed CVs.
            </p>
        </div>

        <a href="{{ route('cv-reviewer.new-analysis') }}"
           class="inline-flex items-center justify-center gap-2
                  px-4 py-2.5 rounded-xl bg-[#8751E8]
                  hover:bg-[#7540D5] text-white text-sm
                  font-semibold transition-all shadow-md
                  shadow-purple-200">

            <svg class="w-4 h-4" viewBox="0 0 24 24"
                 fill="none" stroke="currentColor" stroke-width="2">
                <path d="M12 5v14M5 12h14"/>
            </svg>

            New Analysis
        </a>

    </div>


    {{-- STATISTICS CARDS --}}

    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-3">

        {{-- TOTAL --}}

        <div class="bg-white border border-[#ECE7F1]
                    rounded-2xl p-4">

            <div class="flex justify-between items-start">

                <div>
                    <p class="text-xs text-[#9589A4] font-medium">
                        Total CV Analyzed
                    </p>

                    <h3 class="text-2xl font-bold text-[#21172F] mt-2">
                        248
                    </h3>

                    <p class="text-[11px] text-emerald-600 mt-2">
                        +12.5% from last month
                    </p>
                </div>

                <div class="w-10 h-10 rounded-xl bg-purple-50
                            flex items-center justify-center
                            text-[#8751E8]">

                    <svg class="w-5 h-5" viewBox="0 0 24 24"
                         fill="none" stroke="currentColor"
                         stroke-width="1.8">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                        <path d="M14 2v6h6"/>
                        <path d="M8 13h8M8 17h5"/>
                    </svg>

                </div>
            </div>
        </div>


        {{-- HIGHLY MATCHED --}}

        <div class="bg-white border border-[#ECE7F1]
                    rounded-2xl p-4">

            <div class="flex justify-between items-start">

                <div>
                    <p class="text-xs text-[#9589A4] font-medium">
                        Highly Matched
                    </p>

                    <h3 class="text-2xl font-bold text-[#21172F] mt-2">
                        86
                    </h3>

                    <p class="text-[11px] text-emerald-600 mt-2">
                        80% - 100% compatibility
                    </p>
                </div>

                <div class="w-10 h-10 rounded-xl bg-emerald-50
                            flex items-center justify-center
                            text-emerald-600">

                    <svg class="w-5 h-5" viewBox="0 0 24 24"
                         fill="none" stroke="currentColor"
                         stroke-width="1.8">
                        <path d="m5 12 4 4L19 6"/>
                    </svg>

                </div>
            </div>
        </div>


        {{-- MATCHED --}}

        <div class="bg-white border border-[#ECE7F1]
                    rounded-2xl p-4">

            <div class="flex justify-between items-start">

                <div>
                    <p class="text-xs text-[#9589A4] font-medium">
                        Matched
                    </p>

                    <h3 class="text-2xl font-bold text-[#21172F] mt-2">
                        112
                    </h3>

                    <p class="text-[11px] text-amber-600 mt-2">
                        60% - 79% compatibility
                    </p>
                </div>

                <div class="w-10 h-10 rounded-xl bg-amber-50
                            flex items-center justify-center
                            text-amber-600">

                    <svg class="w-5 h-5" viewBox="0 0 24 24"
                         fill="none" stroke="currentColor"
                         stroke-width="1.8">
                        <circle cx="12" cy="12" r="9"/>
                        <path d="M12 7v5l3 2"/>
                    </svg>

                </div>
            </div>
        </div>


        {{-- LOW MATCH --}}

        <div class="bg-white border border-[#ECE7F1]
                    rounded-2xl p-4">

            <div class="flex justify-between items-start">

                <div>
                    <p class="text-xs text-[#9589A4] font-medium">
                        Low Match
                    </p>

                    <h3 class="text-2xl font-bold text-[#21172F] mt-2">
                        50
                    </h3>

                    <p class="text-[11px] text-red-500 mt-2">
                        Below 60% compatibility
                    </p>
                </div>

                <div class="w-10 h-10 rounded-xl bg-red-50
                            flex items-center justify-center
                            text-red-500">

                    <svg class="w-5 h-5" viewBox="0 0 24 24"
                         fill="none" stroke="currentColor"
                         stroke-width="1.8">
                        <circle cx="12" cy="12" r="9"/>
                        <path d="m9 9 6 6m0-6-6 6"/>
                    </svg>

                </div>
            </div>
        </div>

    </div>


    {{-- HISTORY TABLE CARD --}}

    <div class="bg-white border border-[#ECE7F1]
                rounded-2xl overflow-hidden">

        {{-- TABLE HEADER --}}

        <div class="p-5 border-b border-[#ECE7F1]">

            <div class="flex flex-col lg:flex-row
                        lg:items-center justify-between gap-4">

                <div>
                    <h3 class="text-base font-bold text-[#21172F]">
                        Analysis Records
                    </h3>

                    <p class="text-xs text-[#9589A4] mt-1">
                        View and manage your candidate analysis records.
                    </p>
                </div>

                <span class="text-xs text-[#9589A4]">
                    Showing <strong id="result-count">6</strong> records
                </span>

            </div>


            {{-- FILTERS --}}

            <div class="grid grid-cols-1 sm:grid-cols-2
                        xl:grid-cols-4 gap-3 mt-5">

                {{-- SEARCH --}}

                <div class="relative xl:col-span-1">

                    <svg class="absolute left-3 top-1/2
                                -translate-y-1/2 w-4 h-4
                                text-[#9589A4]"
                         viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="1.8">
                        <circle cx="11" cy="11" r="7"/>
                        <path d="m20 20-4-4"/>
                    </svg>

                    <input type="text"
                           id="searchInput"
                           placeholder="Search candidate..."
                           class="w-full h-10 pl-9 pr-3
                                  rounded-xl border border-[#ECE7F1]
                                  text-xs outline-none
                                  focus:border-[#8751E8]
                                  focus:ring-2 focus:ring-purple-100
                                  transition">
                </div>


                {{-- POSITION FILTER --}}

                <select id="positionFilter"
                        class="w-full h-10 px-3 rounded-xl
                               border border-[#ECE7F1]
                               text-xs text-[#665B72]
                               outline-none focus:border-[#8751E8]">

                    <option value="">All Positions</option>
                    <option value="UI/UX Designer">UI/UX Designer</option>
                    <option value="Frontend Developer">Frontend Developer</option>
                    <option value="Backend Developer">Backend Developer</option>
                    <option value="Data Analyst">Data Analyst</option>

                </select>


                {{-- STATUS FILTER --}}

                <select id="statusFilter"
                        class="w-full h-10 px-3 rounded-xl
                               border border-[#ECE7F1]
                               text-xs text-[#665B72]
                               outline-none focus:border-[#8751E8]">

                    <option value="">All Status</option>
                    <option value="Highly Matched">Highly Matched</option>
                    <option value="Matched">Matched</option>
                    <option value="Low Match">Low Match</option>

                </select>


                {{-- DATE FILTER --}}

                <input type="date"
                       id="dateFilter"
                       class="w-full h-10 px-3 rounded-xl
                              border border-[#ECE7F1]
                              text-xs text-[#665B72]
                              outline-none focus:border-[#8751E8]">

            </div>


            <div class="flex justify-end mt-3">

                <button type="button"
                        onclick="resetFilters()"
                        class="text-xs font-semibold text-[#8751E8]
                               hover:text-[#7540D5]">

                    Reset Filters

                </button>

            </div>

        </div>


        {{-- TABLE --}}

        <div class="overflow-x-auto">

            <table class="w-full text-left min-w-[850px]">

                <thead class="bg-[#FAF9FC]">

                    <tr class="text-[11px] uppercase
                               tracking-wider text-[#9589A4]">

                        <th class="px-5 py-4 font-semibold">
                            Candidate
                        </th>

                        <th class="px-4 py-4 font-semibold">
                            Applied Position
                        </th>

                        <th class="px-4 py-4 font-semibold">
                            Analysis Date
                        </th>

                        <th class="px-4 py-4 font-semibold">
                            Match Score
                        </th>

                        <th class="px-4 py-4 font-semibold">
                            Status
                        </th>

                        <th class="px-5 py-4 text-right font-semibold">
                            Action
                        </th>

                    </tr>

                </thead>


                <tbody id="historyTable"
                       class="divide-y divide-[#F0ECF4]">

                    @foreach($histories as $item)

                        @php
                            $scoreColor = $item['score'] >= 80
                                ? 'text-emerald-600'
                                : ($item['score'] >= 60
                                    ? 'text-amber-600'
                                    : 'text-red-500');

                            $statusColor = $item['status'] === 'Highly Matched'
                                ? 'bg-emerald-50 text-emerald-700'
                                : ($item['status'] === 'Matched'
                                    ? 'bg-amber-50 text-amber-700'
                                    : 'bg-red-50 text-red-600');
                        @endphp

                        <tr class="history-row hover:bg-[#FAF9FC]
                                   transition-colors"
                            data-name="{{ strtolower($item['name']) }}"
                            data-position="{{ $item['position'] }}"
                            data-status="{{ $item['status'] }}"
                            data-date="{{ $item['date'] }}">

                            {{-- CANDIDATE --}}

                            <td class="px-5 py-4">

                                <div class="flex items-center gap-3">

                                    <div class="w-9 h-9 rounded-full
                                                bg-purple-100 text-[#8751E8]
                                                flex items-center justify-center
                                                text-xs font-bold shrink-0">

                                        {{ $item['initial'] }}

                                    </div>

                                    <div>
                                        <p class="text-xs font-semibold
                                                  text-[#21172F]">
                                            {{ $item['name'] }}
                                        </p>

                                        <p class="text-[10px] text-[#9589A4] mt-1">
                                            {{ $item['email'] }}
                                        </p>
                                    </div>

                                </div>

                            </td>


                            {{-- POSITION --}}

                            <td class="px-4 py-4">

                                <p class="text-xs font-medium text-[#51465F]">
                                    {{ $item['position'] }}
                                </p>

                            </td>


                            {{-- DATE --}}

                            <td class="px-4 py-4">

                                <p class="text-xs text-[#665B72]">
                                    {{ \Carbon\Carbon::parse($item['date'])->format('d M Y') }}
                                </p>

                            </td>


                            {{-- SCORE --}}

                            <td class="px-4 py-4">

                                <div class="flex items-center gap-2">

                                    <span class="text-sm font-bold {{ $scoreColor }}">
                                        {{ $item['score'] }}%
                                    </span>

                                    <div class="w-16 h-1.5 rounded-full bg-[#F0ECF4] overflow-hidden">

                                        <div class="h-full rounded-full bg-[#8751E8]"
                                             style="width: {{ $item['score'] }}%">
                                        </div>

                                    </div>

                                </div>

                            </td>


                            {{-- STATUS --}}

                            <td class="px-4 py-4">

                                <span class="inline-flex items-center
                                             px-2.5 py-1 rounded-full
                                             text-[10px] font-semibold
                                             {{ $statusColor }}">

                                    {{ $item['status'] }}

                                </span>

                            </td>


                            {{-- ACTION --}}

                            <td class="px-5 py-4 text-right">

                                <button type="button"
                                        onclick="showDetail(this)"
                                        data-id="{{ $item['id'] }}"
                                        data-name="{{ $item['name'] }}"
                                        data-email="{{ $item['email'] }}"
                                        data-position="{{ $item['position'] }}"
                                        data-score="{{ $item['score'] }}"
                                        data-status="{{ $item['status'] }}"
                                        data-date="{{ $item['date'] }}"
                                        data-experience="{{ $item['experience'] }}"
                                        class="inline-flex items-center gap-1.5
                                               px-3 py-2 rounded-lg
                                               text-[11px] font-semibold
                                               text-[#8751E8] bg-purple-50
                                               hover:bg-[#8751E8]
                                               hover:text-white transition">

                                    View Details

                                    <svg class="w-3.5 h-3.5"
                                         viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor"
                                         stroke-width="2">
                                        <path d="M7 17 17 7M7 7h10v10"/>
                                    </svg>

                                </button>

                            </td>

                        </tr>

                    @endforeach

                    {{-- EMPTY STATE --}}

                    <tr id="emptyState" class="hidden">

                        <td colspan="6" class="text-center py-12">

                            <div class="flex flex-col items-center">

                                <div class="w-12 h-12 rounded-full
                                            bg-purple-50 flex items-center
                                            justify-center text-[#8751E8]">

                                    <svg class="w-6 h-6"
                                         viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor"
                                         stroke-width="1.8">
                                        <circle cx="11" cy="11" r="7"/>
                                        <path d="m20 20-4-4"/>
                                    </svg>

                                </div>

                                <p class="text-sm font-semibold
                                          text-[#21172F] mt-3">
                                    No records found
                                </p>

                                <p class="text-xs text-[#9589A4] mt-1">
                                    Try adjusting your search or filters.
                                </p>

                            </div>

                        </td>

                    </tr>

                </tbody>

            </table>

        </div>


        {{-- TABLE FOOTER --}}

        <div class="px-5 py-4 border-t border-[#ECE7F1]
                    flex items-center justify-between">

            <p class="text-[11px] text-[#9589A4]">
                Demo data · 6 records
            </p>

            <p class="text-[11px] text-[#9589A4]">
                Page 1 of 1
            </p>

        </div>

    </div>

</div>


{{-- ========================================= --}}
{{-- DETAIL MODAL --}}
{{-- ========================================= --}}

<div id="detailModal"
     class="fixed inset-0 z-[100] hidden items-center
            justify-center bg-black/40 backdrop-blur-sm p-4">

    <div class="bg-white rounded-2xl w-full max-w-lg
                shadow-2xl overflow-hidden">

        {{-- MODAL HEADER --}}

        <div class="px-5 py-4 border-b border-[#ECE7F1]
                    flex justify-between items-center">

            <div>
                <h3 class="text-base font-bold text-[#21172F]">
                    Candidate Analysis
                </h3>

                <p class="text-xs text-[#9589A4] mt-1">
                    Analysis result overview
                </p>
            </div>

            <button onclick="closeDetail()"
                    class="w-8 h-8 rounded-lg hover:bg-[#F5F1FA]
                           text-[#9589A4] text-xl">

                &times;

            </button>

        </div>


        {{-- MODAL BODY --}}

        <div class="p-5 space-y-5">

            <div class="flex items-center gap-3">

                <div id="detail-avatar"
                     class="w-12 h-12 rounded-full bg-purple-100
                            text-[#8751E8] flex items-center
                            justify-center font-bold text-sm">
                </div>

                <div>
                    <h4 id="detail-name"
                        class="text-sm font-bold text-[#21172F]">
                    </h4>

                    <p id="detail-email"
                       class="text-xs text-[#9589A4] mt-1">
                    </p>
                </div>

            </div>


            <div class="grid grid-cols-2 gap-3">

                <div class="bg-[#FAF9FC] rounded-xl p-3">
                    <p class="text-[10px] text-[#9589A4]">
                        Applied Position
                    </p>

                    <p id="detail-position"
                       class="text-xs font-semibold text-[#21172F] mt-2">
                    </p>
                </div>

                <div class="bg-[#FAF9FC] rounded-xl p-3">
                    <p class="text-[10px] text-[#9589A4]">
                        Experience
                    </p>

                    <p id="detail-experience"
                       class="text-xs font-semibold text-[#21172F] mt-2">
                    </p>
                </div>

                <div class="bg-[#FAF9FC] rounded-xl p-3">
                    <p class="text-[10px] text-[#9589A4]">
                        Analysis ID
                    </p>

                    <p id="detail-id"
                       class="text-xs font-semibold text-[#21172F] mt-2">
                    </p>
                </div>

                <div class="bg-[#FAF9FC] rounded-xl p-3">
                    <p class="text-[10px] text-[#9589A4]">
                        Analysis Date
                    </p>

                    <p id="detail-date"
                       class="text-xs font-semibold text-[#21172F] mt-2">
                    </p>
                </div>

            </div>


            {{-- MATCH SCORE --}}

            <div class="bg-purple-50 rounded-xl p-4">

                <div class="flex justify-between items-center">

                    <div>
                        <p class="text-xs font-semibold text-[#21172F]">
                            AI Compatibility Score
                        </p>

                        <p id="detail-status"
                           class="text-[10px] text-[#9589A4] mt-1">
                        </p>
                    </div>

                    <h3 id="detail-score"
                        class="text-3xl font-bold text-[#8751E8]">
                    </h3>

                </div>

                <div class="w-full h-2 rounded-full
                            bg-white mt-4 overflow-hidden">

                    <div id="detail-progress"
                         class="h-full bg-[#8751E8] rounded-full"
                         style="width: 0%">
                    </div>

                </div>

            </div>

            <p class="text-[10px] text-[#9589A4]">
                This is demonstration data. Detailed AI evaluation,
                skill matching, and recommendations will be available
                after the AI analysis module is implemented.
            </p>

        </div>


        {{-- MODAL FOOTER --}}

        <div class="px-5 py-4 border-t border-[#ECE7F1]
                    flex justify-end">

            <button onclick="closeDetail()"
                    class="px-4 py-2 rounded-lg bg-[#8751E8]
                           text-white text-xs font-semibold
                           hover:bg-[#7540D5] transition">

                Close

            </button>

        </div>

    </div>

</div>


{{-- ========================================= --}}
{{-- JAVASCRIPT --}}
{{-- ========================================= --}}

<script>

    // FILTER HISTORY

    const searchInput = document.getElementById('searchInput');
    const positionFilter = document.getElementById('positionFilter');
    const statusFilter = document.getElementById('statusFilter');
    const dateFilter = document.getElementById('dateFilter');

    function filterHistory() {

        const search = searchInput.value.toLowerCase();
        const position = positionFilter.value;
        const status = statusFilter.value;
        const date = dateFilter.value;

        const rows = document.querySelectorAll('.history-row');

        let visibleCount = 0;

        rows.forEach(row => {

            const name = row.dataset.name;
            const rowPosition = row.dataset.position;
            const rowStatus = row.dataset.status;
            const rowDate = row.dataset.date;

            const matchesSearch = name.includes(search);
            const matchesPosition = !position || rowPosition === position;
            const matchesStatus = !status || rowStatus === status;
            const matchesDate = !date || rowDate === date;

            const visible =
                matchesSearch &&
                matchesPosition &&
                matchesStatus &&
                matchesDate;

            row.classList.toggle('hidden', !visible);

            if (visible) {
                visibleCount++;
            }

        });

        document.getElementById('result-count').textContent = visibleCount;

        document.getElementById('emptyState')
            .classList.toggle('hidden', visibleCount !== 0);

    }

    searchInput.addEventListener('input', filterHistory);
    positionFilter.addEventListener('change', filterHistory);
    statusFilter.addEventListener('change', filterHistory);
    dateFilter.addEventListener('change', filterHistory);


    // RESET FILTERS

    function resetFilters() {

        searchInput.value = '';
        positionFilter.value = '';
        statusFilter.value = '';
        dateFilter.value = '';

        filterHistory();

    }


    // OPEN DETAIL MODAL

    function showDetail(button) {

        const data = button.dataset;

        document.getElementById('detail-avatar').textContent =
            data.name.split(' ').map(word => word[0]).slice(0, 2).join('');

        document.getElementById('detail-name').textContent = data.name;
        document.getElementById('detail-email').textContent = data.email;
        document.getElementById('detail-position').textContent = data.position;
        document.getElementById('detail-experience').textContent = data.experience;
        document.getElementById('detail-id').textContent = data.id;
        document.getElementById('detail-score').textContent = data.score + '%';
        document.getElementById('detail-status').textContent = data.status;

        const date = new Date(data.date + 'T00:00:00');

        document.getElementById('detail-date').textContent =
            date.toLocaleDateString('id-ID', {
                day: 'numeric',
                month: 'short',
                year: 'numeric'
            });

        document.getElementById('detail-progress').style.width =
            data.score + '%';

        const modal = document.getElementById('detailModal');

        modal.classList.remove('hidden');
        modal.classList.add('flex');

    }


    // CLOSE DETAIL MODAL

    function closeDetail() {

        const modal = document.getElementById('detailModal');

        modal.classList.add('hidden');
        modal.classList.remove('flex');

    }


    // CLOSE MODAL WHEN CLICKING OUTSIDE

    document.getElementById('detailModal').addEventListener('click', function(event) {

        if (event.target === this) {
            closeDetail();
        }

    });


    // ESCAPE KEY

    document.addEventListener('keydown', function(event) {

        if (event.key === 'Escape') {
            closeDetail();
        }

    });

</script>

@endsection
