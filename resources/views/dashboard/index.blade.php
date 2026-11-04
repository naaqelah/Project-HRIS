
@extends('layouts.app')

@section('title', 'Dashboard | TalentMatch AI')
@section('page-title', 'Dashboard')
@section('breadcrumb', 'Workspace / Dashboard')

@section('content')

@php
    $candidates = [
        [
            'name' => 'Andi Pratama',
            'email' => 'andi.pratama@email.com',
            'initial' => 'AP',
            'position' => 'UI/UX Designer',
            'score' => 96,
            'status' => 'Excellent',
            'date' => '04 Nov 2026',
            'experience' => '4 Years',
            'education' => 'S1 Design Communication',
            'skills' => ['UI Design', 'Figma', 'Prototyping', 'User Research'],
        ],
        [
            'name' => 'Sarah Putri',
            'email' => 'sarah.putri@email.com',
            'initial' => 'SP',
            'position' => 'Frontend Developer',
            'score' => 89,
            'status' => 'Good',
            'date' => '04 Nov 2026',
            'experience' => '3 Years',
            'education' => 'S1 Informatika',
            'skills' => ['HTML', 'CSS', 'JavaScript', 'React'],
        ],
        [
            'name' => 'Budi Santoso',
            'email' => 'budi.santoso@email.com',
            'initial' => 'BS',
            'position' => 'Backend Developer',
            'score' => 78,
            'status' => 'Good',
            'date' => '03 Nov 2026',
            'experience' => '2 Years',
            'education' => 'S1 Teknik Informatika',
            'skills' => ['PHP', 'Laravel', 'MySQL', 'REST API'],
        ],
        [
            'name' => 'Nadia Amelia',
            'email' => 'nadia.amelia@email.com',
            'initial' => 'NA',
            'position' => 'UI/UX Designer',
            'score' => 58,
            'status' => 'Low',
            'date' => '03 Nov 2026',
            'experience' => '1 Year',
            'education' => 'D3 Multimedia',
            'skills' => ['Figma', 'Illustrator', 'Wireframing'],
        ],
        [
            'name' => 'Rizky Ramadhan',
            'email' => 'rizky.r@email.com',
            'initial' => 'RR',
            'position' => 'Data Analyst',
            'score' => 92,
            'status' => 'Excellent',
            'date' => '02 Nov 2026',
            'experience' => '5 Years',
            'education' => 'S1 Statistik',
            'skills' => ['SQL', 'Python', 'Excel', 'Power BI'],
        ],
    ];
@endphp

<div class="space-y-5">

    <!-- ====================================== -->
    <!-- HEADER -->
    <!-- ====================================== -->

    <div class="flex flex-col sm:flex-row sm:items-center
                justify-between gap-4">

        <div>
            <h1 class="text-xl font-bold text-[#21172F]">
                Recruitment Overview
            </h1>

            <p class="text-xs text-[#9589A4] mt-1">
                Monitor your recruitment performance and candidate insights.
            </p>
        </div>

        <a href="#"
           class="inline-flex items-center justify-center gap-2
                  bg-[#8751E8] hover:bg-[#7540D5]
                  text-white px-4 py-2.5 rounded-xl
                  text-xs font-semibold transition-all
                  shadow-sm hover:shadow-md">

            <svg class="w-4 h-4" viewBox="0 0 24 24"
                 fill="none" stroke="currentColor" stroke-width="2">
                <path d="M12 5v14M5 12h14"/>
            </svg>

            Create New Analysis
        </a>

    </div>


    <!-- ====================================== -->
    <!-- DARK OVERVIEW PANEL -->
    <!-- ====================================== -->

    <section class="bg-[#160E24] rounded-2xl overflow-hidden
                    text-white shadow-sm">

        <div class="p-5 md:p-6">

            <!-- PANEL HEADER -->

            <div class="flex flex-col sm:flex-row
                        sm:items-center justify-between gap-3 mb-6">

                <div>
                    <div class="flex items-center gap-2">

                        <span class="w-2 h-2 rounded-full
                                     bg-[#A77AF4]"></span>

                        <span class="text-[10px] font-semibold
                                     uppercase tracking-widest
                                     text-[#B9AACD]">
                            Recruitment Dashboard
                        </span>

                    </div>

                    <h2 class="text-lg font-bold mt-2">
                        Recruitment Performance
                    </h2>

                    <p class="text-xs text-[#A99BB9] mt-1">
                        Your recruitment activities at a glance.
                    </p>
                </div>

                <select class="bg-[#281B38] border border-[#49365E]
                               text-[#D8CBE8] text-xs rounded-lg
                               px-3 py-2 outline-none">

                    <option>November 2026</option>
                    <option>October 2026</option>
                    <option>September 2026</option>

                </select>

            </div>


            <!-- STATISTICS -->

            <div class="grid grid-cols-2 lg:grid-cols-4
                        divide-x divide-[#49365E]">

                <!-- CV ANALYZED -->

                <div class="px-3 sm:px-5 py-2">

                    <p class="text-[10px] text-[#B9AACD]">
                        Total CV Analyzed
                    </p>

                    <div class="flex items-baseline gap-1 mt-2">

                        <h3 class="text-2xl md:text-3xl
                                   font-bold tracking-tight">
                            248
                        </h3>

                        <span class="text-[10px] text-[#B9AACD]">
                            CVs
                        </span>

                    </div>

                    <p class="text-[10px] text-[#A77AF4] mt-2">
                        ↑ 12.5% from last month
                    </p>

                </div>


                <!-- CANDIDATES -->

                <div class="px-3 sm:px-5 py-2">

                    <p class="text-[10px] text-[#B9AACD]">
                        Total Candidates
                    </p>

                    <div class="flex items-baseline gap-1 mt-2">

                        <h3 class="text-2xl md:text-3xl font-bold">
                            186
                        </h3>

                        <span class="text-[10px] text-[#B9AACD]">
                            People
                        </span>

                    </div>

                    <p class="text-[10px] text-[#A99BB9] mt-2">
                        Registered candidates
                    </p>

                </div>


                <!-- MATCH SCORE -->

                <div class="px-3 sm:px-5 py-2">

                    <p class="text-[10px] text-[#B9AACD]">
                        Average Match Score
                    </p>

                    <div class="flex items-baseline gap-1 mt-2">

                        <h3 class="text-2xl md:text-3xl font-bold">
                            82%
                        </h3>

                    </div>

                    <p class="text-[10px] text-[#A77AF4] mt-2">
                        ↑ 4.2% from last month
                    </p>

                </div>


                <!-- ACTIVE POSITIONS -->

                <div class="px-3 sm:px-5 py-2">

                    <p class="text-[10px] text-[#B9AACD]">
                        Active Positions
                    </p>

                    <div class="flex items-baseline gap-1 mt-2">

                        <h3 class="text-2xl md:text-3xl font-bold">
                            12
                        </h3>

                        <span class="text-[10px] text-[#B9AACD]">
                            Jobs
                        </span>

                    </div>

                    <p class="text-[10px] text-[#A99BB9] mt-2">
                        Across 5 departments
                    </p>

                </div>

            </div>


            <!-- RECRUITMENT ACTIVITY -->

            <div class="mt-6 pt-5 border-t border-[#49365E]">

                <div class="flex items-center justify-between mb-4">

                    <div>
                        <h3 class="text-xs font-semibold">
                            Recruitment Activity
                        </h3>

                        <p class="text-[10px] text-[#A99BB9] mt-1">
                            Monthly CV analysis progress
                        </p>
                    </div>

                    <span class="text-[10px] text-[#A99BB9]">
                        Jun – Nov 2026
                    </span>

                </div>


                <!-- ACTIVITY PROGRESS -->

                <div class="flex items-center gap-1.5 h-2
                            bg-[#30213F] rounded-full overflow-hidden">

                    <div class="h-full bg-[#8751E8] rounded-full"
                         style="width: 23%"></div>

                    <div class="h-full bg-[#A77AF4] rounded-full"
                         style="width: 18%"></div>

                    <div class="h-full bg-[#C4A7FF] rounded-full"
                         style="width: 15%"></div>

                    <div class="h-full bg-[#8751E8] rounded-full"
                         style="width: 20%"></div>

                    <div class="h-full bg-[#A77AF4] rounded-full"
                         style="width: 12%"></div>

                    <div class="h-full bg-[#D7C5FA] rounded-full"
                         style="width: 12%"></div>

                </div>


                <div class="grid grid-cols-6 mt-3">

                    @foreach(['Jun','Jul','Aug','Sep','Oct','Nov'] as $month)

                        <div class="text-center">

                            <p class="text-[10px] text-[#B9AACD]">
                                {{ $month }}
                            </p>

                        </div>

                    @endforeach

                </div>

            </div>


            <!-- MATCH CATEGORIES -->

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mt-6">

                <div class="bg-[#251A34] border border-[#49365E]
                            rounded-xl p-3 flex items-center
                            justify-between">

                    <div>
                        <p class="text-[10px] text-[#B9AACD]">
                            Excellent Match
                        </p>

                        <h4 class="text-lg font-bold mt-1">
                            45%
                        </h4>
                    </div>

                    <div class="w-9 h-9 rounded-lg bg-[#8751E8]
                                flex items-center justify-center">

                        <svg class="w-4 h-4" viewBox="0 0 24 24"
                             fill="none" stroke="white"
                             stroke-width="2">
                            <path d="m5 12 4 4L19 6"/>
                        </svg>

                    </div>

                </div>


                <div class="bg-[#251A34] border border-[#49365E]
                            rounded-xl p-3 flex items-center
                            justify-between">

                    <div>
                        <p class="text-[10px] text-[#B9AACD]">
                            Good Match
                        </p>

                        <h4 class="text-lg font-bold mt-1">
                            27%
                        </h4>
                    </div>

                    <div class="w-9 h-9 rounded-lg bg-[#60418D]
                                flex items-center justify-center">

                        <svg class="w-4 h-4" viewBox="0 0 24 24"
                             fill="none" stroke="white"
                             stroke-width="2">
                            <path d="m5 12 4 4L19 6"/>
                        </svg>

                    </div>

                </div>


                <div class="bg-[#251A34] border border-[#49365E]
                            rounded-xl p-3 flex items-center
                            justify-between">

                    <div>
                        <p class="text-[10px] text-[#B9AACD]">
                            Low Match
                        </p>

                        <h4 class="text-lg font-bold mt-1">
                            10%
                        </h4>
                    </div>

                    <div class="w-9 h-9 rounded-lg bg-[#49365E]
                                flex items-center justify-center">

                        <svg class="w-4 h-4" viewBox="0 0 24 24"
                             fill="none" stroke="white"
                             stroke-width="2">
                            <path d="M12 8v4m0 4h.01"/>
                            <circle cx="12" cy="12" r="9"/>
                        </svg>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- ====================================== -->
    <!-- FILTER NAVIGATION -->
    <!-- ====================================== -->

    <section class="flex flex-col sm:flex-row
                    sm:items-center justify-between gap-3">

        <div class="flex items-center gap-2 overflow-x-auto pb-1">

            <button onclick="filterCandidates('all', this)"
                    class="candidate-filter active-filter
                           px-4 py-2 rounded-full text-[11px]
                           font-semibold whitespace-nowrap
                           bg-[#21172F] text-white">

                All Candidates (186)

            </button>

            <button onclick="filterCandidates('Excellent', this)"
                    class="candidate-filter px-4 py-2 rounded-full
                           text-[11px] font-semibold whitespace-nowrap
                           bg-white border border-[#ECE7F1]
                           text-[#766C80] hover:border-[#8751E8]">

                Excellent Match

            </button>

            <button onclick="filterCandidates('Good', this)"
                    class="candidate-filter px-4 py-2 rounded-full
                           text-[11px] font-semibold whitespace-nowrap
                           bg-white border border-[#ECE7F1]
                           text-[#766C80] hover:border-[#8751E8]">

                Good Match

            </button>

            <button onclick="filterCandidates('Low', this)"
                    class="candidate-filter px-4 py-2 rounded-full
                           text-[11px] font-semibold whitespace-nowrap
                           bg-white border border-[#ECE7F1]
                           text-[#766C80] hover:border-[#8751E8]">

                Low Match

            </button>

        </div>


        <!-- SEARCH -->

        <div class="relative shrink-0">

            <svg class="w-4 h-4 absolute left-3 top-1/2
                        -translate-y-1/2 text-[#9589A4]"
                 viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="1.8">

                <circle cx="11" cy="11" r="7"/>
                <path d="m20 20-4-4"/>

            </svg>

            <input id="candidate-search"
                   type="text"
                   oninput="searchCandidates()"
                   placeholder="Search candidate..."
                   class="w-full sm:w-52 pl-9 pr-3 py-2.5
                          rounded-full bg-white border
                          border-[#ECE7F1] text-xs
                          outline-none focus:border-[#8751E8]">

        </div>

    </section>


    <!-- ====================================== -->
    <!-- MAIN CANDIDATE PANEL -->
    <!-- ====================================== -->

    <section class="bg-white rounded-2xl border
                    border-[#ECE7F1] overflow-hidden
                    shadow-sm">

        <!-- PANEL HEADER -->

        <div class="px-5 py-4 border-b border-[#ECE7F1]
                    flex flex-col sm:flex-row
                    sm:items-center justify-between gap-2">

            <div>
                <h3 class="text-sm font-bold text-[#21172F]">
                    Candidate Management
                </h3>

                <p class="text-[10px] text-[#9589A4] mt-1">
                    Review and manage AI evaluated candidates.
                </p>
            </div>

            <span class="text-[10px] text-[#9589A4]">
                Last updated: 04 November 2026
            </span>

        </div>


        <!-- TWO COLUMN CONTENT -->

        <div class="grid grid-cols-1 lg:grid-cols-[0.85fr_1.5fr]">


            <!-- LEFT: CANDIDATE LIST -->

            <div class="border-b lg:border-b-0 lg:border-r
                        border-[#ECE7F1]">

                <div class="px-4 py-3 bg-[#FAF9FC]
                            flex items-center justify-between">

                    <h4 class="text-xs font-bold text-[#21172F]">
                        Unpaid / Reviewed Candidates
                    </h4>

                    <span class="text-[10px] text-[#9589A4]">
                        5 Results
                    </span>

                </div>


                <!-- CANDIDATE ITEMS -->

                <div id="candidate-list" class="p-3 space-y-2">

                    @foreach($candidates as $index => $candidate)

                        @php
                            $statusColor = match($candidate['status']) {
                                'Excellent' => 'text-[#8751E8] bg-[#F0E8FF]',
                                'Good' => 'text-[#3477BD] bg-[#EAF3FF]',
                                default => 'text-[#D97735] bg-[#FFF1E9]',
                            };
                        @endphp

                        <button type="button"
                                onclick="selectCandidate(this)"
                                data-name="{{ $candidate['name'] }}"
                                data-email="{{ $candidate['email'] }}"
                                data-initial="{{ $candidate['initial'] }}"
                                data-position="{{ $candidate['position'] }}"
                                data-score="{{ $candidate['score'] }}"
                                data-status="{{ $candidate['status'] }}"
                                data-date="{{ $candidate['date'] }}"
                                data-experience="{{ $candidate['experience'] }}"
                                data-education="{{ $candidate['education'] }}"
                                data-skills="{{ implode('|', $candidate['skills']) }}"
                                class="candidate-item w-full text-left
                                       p-3 rounded-xl border
                                       {{ $index === 0
                                          ? 'border-[#8751E8] bg-[#F7F2FF]'
                                          : 'border-transparent hover:bg-[#FAF9FC]' }}
                                       transition-all duration-200"
                                data-filter="{{ $candidate['status'] }}"
                                data-search="{{ strtolower($candidate['name'].' '.$candidate['position']) }}">

                            <div class="flex items-center gap-3">

                                <div class="w-10 h-10 rounded-full
                                            bg-[#EDE3FF] text-[#8751E8]
                                            flex items-center justify-center
                                            text-xs font-bold shrink-0">

                                    {{ $candidate['initial'] }}

                                </div>

                                <div class="flex-1 min-w-0">

                                    <div class="flex items-center
                                                justify-between gap-2">

                                        <h5 class="text-xs font-bold
                                                   text-[#21172F] truncate">

                                            {{ $candidate['name'] }}

                                        </h5>

                                        <span class="text-xs font-bold
                                                     text-[#8751E8]">

                                            {{ $candidate['score'] }}%

                                        </span>

                                    </div>

                                    <p class="text-[10px] text-[#9589A4] mt-1">
                                        {{ $candidate['position'] }}
                                    </p>

                                    <div class="flex items-center
                                                justify-between mt-2">

                                        <span class="text-[9px] px-2 py-1
                                                     rounded-full font-semibold
                                                     {{ $statusColor }}">

                                            {{ $candidate['status'] }}

                                        </span>

                                        <span class="text-[9px]
                                                     text-[#A99BB9]">

                                            {{ $candidate['date'] }}

                                        </span>

                                    </div>

                                </div>

                            </div>

                        </button>

                    @endforeach

                    <div id="empty-candidates"
                         class="hidden text-center py-8">

                        <p class="text-xs text-[#9589A4]">
                            No candidates found.
                        </p>

                    </div>

                </div>


                <!-- LIST FOOTER -->

                <div class="px-4 py-3 border-t border-[#ECE7F1]
                            flex justify-between items-center">

                    <span class="text-[10px] text-[#9589A4]">
                        Showing <span id="visible-count">5</span> candidates
                    </span>

                    <button class="text-[10px] text-[#8751E8]
                                   font-semibold hover:underline">
                        View All →
                    </button>

                </div>

            </div>


            <!-- RIGHT: CANDIDATE DETAILS -->

            <div class="min-w-0">

                <div class="px-5 py-3 bg-[#FAF9FC]
                            border-b border-[#ECE7F1]
                            flex justify-between items-center">

                    <h4 class="text-xs font-bold text-[#21172F]">
                        Candidate Details
                    </h4>

                    <span class="text-[10px] text-[#9589A4]">
                        AI Evaluation Result
                    </span>

                </div>


                <div class="p-5 md:p-6 space-y-5">

                    <!-- PROFILE -->

                    <div class="flex flex-col sm:flex-row
                                sm:items-center justify-between gap-4">

                        <div class="flex items-center gap-3">

                            <div id="detail-avatar"
                                 class="w-14 h-14 rounded-xl
                                        bg-[#EDE3FF] text-[#8751E8]
                                        flex items-center justify-center
                                        text-lg font-bold">

                                AP

                            </div>

                            <div>

                                <h3 id="detail-name"
                                    class="text-base font-bold text-[#21172F]">

                                    Andi Pratama

                                </h3>

                                <p id="detail-email"
                                   class="text-[10px] text-[#9589A4] mt-1">

                                    andi.pratama@email.com

                                </p>

                                <p id="detail-position"
                                   class="text-xs font-medium text-[#8751E8] mt-1">

                                    UI/UX Designer

                                </p>

                            </div>

                        </div>


                        <div class="flex items-center gap-2">

                            <button type="button"
                                    class="px-3 py-2 border
                                           border-[#ECE7F1] rounded-lg
                                           text-[10px] font-semibold
                                           text-[#766C80]
                                           hover:bg-[#FAF9FC]">

                                View CV

                            </button>

                            <button type="button"
                                    class="px-3 py-2 bg-[#8751E8]
                                           text-white rounded-lg
                                           text-[10px] font-semibold
                                           hover:bg-[#7540D5]">

                                Shortlist

                            </button>

                        </div>

                    </div>


                    <!-- MATCH SCORE -->

                    <div class="bg-[#160E24] rounded-xl p-4
                                text-white">

                        <div class="flex items-center
                                    justify-between gap-3">

                            <div>

                                <p class="text-[10px] text-[#B9AACD]">
                                    AI Compatibility Score
                                </p>

                                <div class="flex items-baseline gap-1 mt-1">

                                    <h2 id="detail-score"
                                        class="text-3xl font-bold">
                                        96
                                    </h2>

                                    <span class="text-sm text-[#B9AACD]">
                                        %
                                    </span>

                                </div>

                                <span id="detail-status"
                                      class="inline-block mt-2 px-2 py-1
                                             rounded-full bg-[#3B2756]
                                             text-[#D7C5FA] text-[9px]
                                             font-semibold">

                                    Excellent Match

                                </span>

                            </div>


                            <div class="w-20 h-20 rounded-full
                                        border-[6px] border-[#8751E8]
                                        flex items-center justify-center
                                        relative">

                                <span id="score-circle"
                                      class="text-xl font-bold">

                                    96%

                                </span>

                            </div>

                        </div>


                        <div class="mt-4">

                            <div class="w-full h-2 rounded-full
                                        bg-[#49365E] overflow-hidden">

                                <div id="score-progress"
                                     class="h-full rounded-full bg-[#A77AF4]"
                                     style="width:96%">
                                </div>

                            </div>

                        </div>

                    </div>


                    <!-- MATCH BREAKDOWN -->

                    <div>

                        <div class="flex items-center
                                    justify-between mb-3">

                            <h4 class="text-xs font-bold text-[#21172F]">
                                Candidate Information
                            </h4>

                            <span class="text-[10px] text-[#9589A4]">
                                Profile overview
                            </span>

                        </div>


                        <div class="grid grid-cols-2 gap-3">

                            <div class="bg-[#FAF9FC] rounded-xl p-3">

                                <p class="text-[10px] text-[#9589A4]">
                                    Work Experience
                                </p>

                                <p id="detail-experience"
                                   class="text-xs font-bold text-[#21172F] mt-2">

                                    4 Years

                                </p>

                            </div>


                            <div class="bg-[#FAF9FC] rounded-xl p-3">

                                <p class="text-[10px] text-[#9589A4]">
                                    Education
                                </p>

                                <p id="detail-education"
                                   class="text-xs font-bold text-[#21172F] mt-2">

                                    S1 Design Communication

                                </p>

                            </div>

                        </div>

                    </div>


                    <!-- SKILLS -->

                    <div>

                        <h4 class="text-xs font-bold text-[#21172F] mb-3">
                            Matched Skills
                        </h4>

                        <div id="detail-skills"
                             class="flex flex-wrap gap-2">

                            <span class="px-3 py-1.5 rounded-lg
                                         bg-[#F0E8FF] text-[#8751E8]
                                         text-[10px] font-semibold">
                                UI Design
                            </span>

                            <span class="px-3 py-1.5 rounded-lg
                                         bg-[#F0E8FF] text-[#8751E8]
                                         text-[10px] font-semibold">
                                Figma
                            </span>

                            <span class="px-3 py-1.5 rounded-lg
                                         bg-[#F0E8FF] text-[#8751E8]
                                         text-[10px] font-semibold">
                                Prototyping
                            </span>

                            <span class="px-3 py-1.5 rounded-lg
                                         bg-[#F0E8FF] text-[#8751E8]
                                         text-[10px] font-semibold">
                                User Research
                            </span>

                        </div>

                    </div>


                    <!-- FOOTER -->

                    <div class="pt-4 border-t border-[#ECE7F1]
                                flex flex-col sm:flex-row
                                sm:items-center justify-between gap-3">

                        <p class="text-[10px] text-[#9589A4]">
                            Analysis completed successfully
                        </p>

                        <button type="button"
                                class="text-[11px] font-semibold
                                       text-[#8751E8] hover:underline">

                            View Full Analysis →

                        </button>

                    </div>

                </div>

            </div>

        </div>

    </section>

</div>


<!-- ====================================== -->
<!-- JAVASCRIPT: CANDIDATE INTERACTION -->
<!-- ====================================== -->

<script>

    // SELECT CANDIDATE

    function selectCandidate(button) {

        const data = button.dataset;

        document.querySelectorAll('.candidate-item').forEach(item => {

            item.classList.remove('border-[#8751E8]', 'bg-[#F7F2FF]');

            item.classList.add('border-transparent');

        });

        button.classList.remove('border-transparent');

        button.classList.add('border-[#8751E8]', 'bg-[#F7F2FF]');


        document.getElementById('detail-avatar').textContent = data.initial;

        document.getElementById('detail-name').textContent = data.name;

        document.getElementById('detail-email').textContent = data.email;

        document.getElementById('detail-position').textContent = data.position;

        document.getElementById('detail-score').textContent = data.score;

        document.getElementById('score-circle').textContent = data.score + '%';

        document.getElementById('detail-experience').textContent = data.experience;

        document.getElementById('detail-education').textContent = data.education;


        document.getElementById('score-progress').style.width = data.score + '%';


        const status = document.getElementById('detail-status');

        status.textContent = data.status + ' Match';


        const skillContainer = document.getElementById('detail-skills');

        skillContainer.innerHTML = '';

        data.skills.split('|').forEach(skill => {

            const span = document.createElement('span');

            span.className = 'px-3 py-1.5 rounded-lg bg-[#F0E8FF] text-[#8751E8] text-[10px] font-semibold';

            span.textContent = skill;

            skillContainer.appendChild(span);

        });

    }


    // FILTER CANDIDATES

    let activeFilter = 'all';


    function filterCandidates(filter, button) {

        activeFilter = filter;

        document.querySelectorAll('.candidate-filter').forEach(item => {

            item.classList.remove('bg-[#21172F]', 'text-white');

            item.classList.add('bg-white', 'text-[#766C80]', 'border', 'border-[#ECE7F1]');

        });


        button.classList.remove('bg-white', 'text-[#766C80]', 'border', 'border-[#ECE7F1]');

        button.classList.add('bg-[#21172F]', 'text-white');


        searchCandidates();

    }


    // SEARCH CANDIDATES

    function searchCandidates() {

        const search = document.getElementById('candidate-search')
            .value.toLowerCase();

        const items = document.querySelectorAll('.candidate-item');

        let visible = 0;

        let firstVisible = null;


        items.forEach(item => {

            const matchesFilter = activeFilter === 'all' ||
                item.dataset.filter === activeFilter;

            const matchesSearch = item.dataset.search.includes(search);

            const show = matchesFilter && matchesSearch;

            item.style.display = show ? 'block' : 'none';

            if (show) {

                visible++;

                if (!firstVisible) firstVisible = item;

            }

        });


        document.getElementById('visible-count').textContent = visible;

        document.getElementById('empty-candidates').style.display =
            visible === 0 ? 'block' : 'none';

        if (firstVisible) {

            const selected = firstVisible.classList.contains('border-[#8751E8]');

            if (!selected) selectCandidate(firstVisible);

        }

    }

</script>

@endsection
