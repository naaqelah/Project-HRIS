
@extends('layouts.app')

@section('title', 'Candidates - TalentMatch AI')
@section('breadcrumb', 'Workspace / Candidates')
@section('page-title', 'Candidates')

@section('content')

@php
    // DATA DUMMY SEMENTARA

    $candidates = [
        [
            'id' => 'CAN-001',
            'name' => 'Andi Pratama',
            'email' => 'andi.pratama@email.com',
            'initial' => 'AP',
            'phone' => '081234567890',
            'position' => 'UI/UX Designer',
            'experience' => '3 Years',
            'education' => 'Bachelor of Design',
            'score' => 92,
            'status' => 'Shortlisted',
            'date' => '2026-11-04',
            'skills' => 'Figma, UI Design, UX Research, Prototyping',
        ],
        [
            'id' => 'CAN-002',
            'name' => 'Sarah Putri',
            'email' => 'sarah.putri@email.com',
            'initial' => 'SP',
            'phone' => '081298765432',
            'position' => 'Frontend Developer',
            'experience' => '2 Years',
            'education' => 'Bachelor of Informatics',
            'score' => 85,
            'status' => 'Under Review',
            'date' => '2026-11-03',
            'skills' => 'HTML, CSS, JavaScript, React, Tailwind',
        ],
        [
            'id' => 'CAN-003',
            'name' => 'Budi Santoso',
            'email' => 'budi.santoso@email.com',
            'initial' => 'BS',
            'phone' => '081234567891',
            'position' => 'Backend Developer',
            'experience' => '2 Years',
            'education' => 'Bachelor of Computer Science',
            'score' => 74,
            'status' => 'Under Review',
            'date' => '2026-11-03',
            'skills' => 'PHP, Laravel, MySQL, REST API',
        ],
        [
            'id' => 'CAN-004',
            'name' => 'Nadia Amelia',
            'email' => 'nadia.amelia@email.com',
            'initial' => 'NA',
            'phone' => '081234567892',
            'position' => 'UI/UX Designer',
            'experience' => '1 Year',
            'education' => 'Diploma in Multimedia',
            'score' => 58,
            'status' => 'Rejected',
            'date' => '2026-11-02',
            'skills' => 'Canva, Figma, Graphic Design',
        ],
        [
            'id' => 'CAN-005',
            'name' => 'Rizky Ramadhan',
            'email' => 'rizky.ramadhan@email.com',
            'initial' => 'RR',
            'phone' => '081234567893',
            'position' => 'Data Analyst',
            'experience' => '3 Years',
            'education' => 'Bachelor of Statistics',
            'score' => 88,
            'status' => 'Shortlisted',
            'date' => '2026-11-01',
            'skills' => 'SQL, Python, Excel, Power BI',
        ],
        [
            'id' => 'CAN-006',
            'name' => 'Dina Maharani',
            'email' => 'dina.maharani@email.com',
            'initial' => 'DM',
            'phone' => '081234567894',
            'position' => 'Frontend Developer',
            'experience' => '1 Year',
            'education' => 'Bachelor of Informatics',
            'score' => 67,
            'status' => 'Under Review',
            'date' => '2026-10-30',
            'skills' => 'HTML, CSS, JavaScript, Bootstrap',
        ],
    ];
@endphp


<div class="space-y-5">

    {{-- PAGE HEADER --}}

    <div class="flex flex-col sm:flex-row sm:items-center
                justify-between gap-3">

        <div>
            <h2 class="text-xl font-bold text-[#21172F]">
                Candidates
            </h2>

            <p class="text-sm text-[#9589A4] mt-1">
                Manage candidates and review their AI compatibility scores.
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

            Add Candidate

        </a>

    </div>


    {{-- STATISTICS --}}

    <div class="grid grid-cols-2 xl:grid-cols-4 gap-3">

        <div class="bg-white border border-[#ECE7F1]
                    rounded-2xl p-4">

            <p class="text-xs text-[#9589A4]">Total Candidates</p>

            <h3 id="totalCandidates"
                class="text-2xl font-bold text-[#21172F] mt-2">
                248
            </h3>

            <p class="text-[11px] text-[#9589A4] mt-2">
                All registered candidates
            </p>

        </div>


        <div class="bg-white border border-[#ECE7F1]
                    rounded-2xl p-4">

            <p class="text-xs text-[#9589A4]">Shortlisted</p>

            <h3 id="shortlistedCount"
                class="text-2xl font-bold text-[#8751E8] mt-2">
                42
            </h3>

            <p class="text-[11px] text-[#9589A4] mt-2">
                Selected candidates
            </p>

        </div>


        <div class="bg-white border border-[#ECE7F1]
                    rounded-2xl p-4">

            <p class="text-xs text-[#9589A4]">Under Review</p>

            <h3 id="reviewCount"
                class="text-2xl font-bold text-amber-600 mt-2">
                86
            </h3>

            <p class="text-[11px] text-[#9589A4] mt-2">
                Awaiting review
            </p>

        </div>


        <div class="bg-white border border-[#ECE7F1]
                    rounded-2xl p-4">

            <p class="text-xs text-[#9589A4]">Rejected</p>

            <h3 id="rejectedCount"
                class="text-2xl font-bold text-red-500 mt-2">
                25
            </h3>

            <p class="text-[11px] text-[#9589A4] mt-2">
                Not selected
            </p>

        </div>

    </div>


    {{-- CANDIDATE TABLE --}}

    <div class="bg-white border border-[#ECE7F1]
                rounded-2xl overflow-hidden">

        {{-- TABLE HEADER --}}

        <div class="p-5 border-b border-[#ECE7F1]">

            <div class="flex flex-col sm:flex-row
                        sm:items-center justify-between gap-3">

                <div>
                    <h3 class="text-base font-bold text-[#21172F]">
                        All Candidates
                    </h3>

                    <p class="text-xs text-[#9589A4] mt-1">
                        Review candidate profiles and AI results.
                    </p>
                </div>

                <span id="candidateCount"
                      class="text-xs text-[#9589A4]">
                    6 candidates
                </span>

            </div>


            {{-- SEARCH & FILTER --}}

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mt-5">

                <div class="relative">

                    <svg class="absolute left-3 top-1/2
                                -translate-y-1/2 w-4 h-4
                                text-[#9589A4]"
                         viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="1.8">
                        <circle cx="11" cy="11" r="7"/>
                        <path d="m20 20-4-4"/>
                    </svg>

                    <input type="text"
                           id="searchCandidate"
                           placeholder="Search candidate..."
                           class="w-full h-10 pl-9 pr-3 rounded-xl
                                  border border-[#ECE7F1] text-xs
                                  outline-none focus:border-[#8751E8]
                                  focus:ring-2 focus:ring-purple-100">

                </div>


                <select id="positionFilter"
                        class="h-10 px-3 rounded-xl border
                               border-[#ECE7F1] text-xs
                               text-[#665B72] outline-none
                               focus:border-[#8751E8]">

                    <option value="">All Positions</option>
                    <option value="UI/UX Designer">UI/UX Designer</option>
                    <option value="Frontend Developer">Frontend Developer</option>
                    <option value="Backend Developer">Backend Developer</option>
                    <option value="Data Analyst">Data Analyst</option>

                </select>


                <select id="statusFilter"
                        class="h-10 px-3 rounded-xl border
                               border-[#ECE7F1] text-xs
                               text-[#665B72] outline-none
                               focus:border-[#8751E8]">

                    <option value="">All Status</option>
                    <option value="Shortlisted">Shortlisted</option>
                    <option value="Under Review">Under Review</option>
                    <option value="Rejected">Rejected</option>

                </select>

            </div>


            <div class="flex justify-end mt-3">

                <button onclick="resetCandidateFilters()"
                        class="text-xs text-[#8751E8]
                               font-semibold hover:text-[#7540D5]">
                    Reset Filters
                </button>

            </div>

        </div>


        {{-- TABLE CONTENT --}}

        <div class="overflow-x-auto">

            <table class="w-full min-w-[950px] text-left">

                <thead class="bg-[#FAF9FC]">

                    <tr class="text-[10px] uppercase
                               tracking-wider text-[#9589A4]">

                        <th class="px-5 py-4 font-semibold">
                            Candidate
                        </th>

                        <th class="px-4 py-4 font-semibold">
                            Applied Position
                        </th>

                        <th class="px-4 py-4 font-semibold">
                            Experience
                        </th>

                        <th class="px-4 py-4 font-semibold">
                            AI Match Score
                        </th>

                        <th class="px-4 py-4 font-semibold">
                            Status
                        </th>

                        <th class="px-4 py-4 font-semibold">
                            Date Added
                        </th>

                        <th class="px-5 py-4 text-right font-semibold">
                            Action
                        </th>

                    </tr>

                </thead>


                <tbody id="candidateTable"
                       class="divide-y divide-[#F0ECF4]">

                    @foreach($candidates as $candidate)

                    @php
                        $scoreColor = $candidate['score'] >= 80
                            ? 'text-emerald-600'
                            : ($candidate['score'] >= 60
                                ? 'text-amber-600'
                                : 'text-red-500');

                        $statusClass = match($candidate['status']) {
                            'Shortlisted' => 'bg-purple-50 text-[#8751E8]',
                            'Under Review' => 'bg-amber-50 text-amber-700',
                            default => 'bg-red-50 text-red-600',
                        };
                    @endphp

                    <tr class="candidate-row hover:bg-[#FAF9FC]
                               transition-colors"
                        data-name="{{ strtolower($candidate['name']) }}"
                        data-email="{{ strtolower($candidate['email']) }}"
                        data-position="{{ $candidate['position'] }}"
                        data-status="{{ $candidate['status'] }}">

                        {{-- CANDIDATE --}}

                        <td class="px-5 py-4">

                            <div class="flex items-center gap-3">

                                <div class="w-9 h-9 rounded-full
                                            bg-purple-100 text-[#8751E8]
                                            flex items-center justify-center
                                            text-xs font-bold shrink-0">

                                    {{ $candidate['initial'] }}

                                </div>

                                <div>
                                    <p class="text-xs font-semibold text-[#21172F]">
                                        {{ $candidate['name'] }}
                                    </p>

                                    <p class="text-[10px] text-[#9589A4] mt-1">
                                        {{ $candidate['email'] }}
                                    </p>
                                </div>

                            </div>

                        </td>


                        {{-- POSITION --}}

                        <td class="px-4 py-4">

                            <p class="text-xs text-[#51465F]">
                                {{ $candidate['position'] }}
                            </p>

                        </td>


                        {{-- EXPERIENCE --}}

                        <td class="px-4 py-4">

                            <p class="text-xs text-[#665B72]">
                                {{ $candidate['experience'] }}
                            </p>

                        </td>


                        {{-- AI SCORE --}}

                        <td class="px-4 py-4">

                            <div class="flex items-center gap-2">

                                <span class="text-sm font-bold {{ $scoreColor }}">
                                    {{ $candidate['score'] }}%
                                </span>

                                <div class="w-14 h-1.5 rounded-full
                                            bg-[#F0ECF4] overflow-hidden">

                                    <div class="h-full rounded-full bg-[#8751E8]"
                                         style="width: {{ $candidate['score'] }}%">
                                    </div>

                                </div>

                            </div>

                        </td>


                        {{-- STATUS --}}

                        <td class="px-4 py-4">

                            <span class="inline-flex px-2.5 py-1
                                         rounded-full text-[10px]
                                         font-semibold {{ $statusClass }}">

                                {{ $candidate['status'] }}

                            </span>

                        </td>


                        {{-- DATE --}}

                        <td class="px-4 py-4">

                            <span class="text-xs text-[#665B72]">
                                {{ \Carbon\Carbon::parse($candidate['date'])->format('d M Y') }}
                            </span>

                        </td>


                        {{-- ACTION --}}

                        <td class="px-5 py-4">

                            <div class="flex justify-end gap-1">

                                <button type="button"
                                        onclick="viewCandidate(this)"
                                        data-candidate="{{ json_encode($candidate) }}"
                                        title="View Details"
                                        class="w-8 h-8 flex items-center
                                               justify-center rounded-lg
                                               text-[#8751E8] hover:bg-purple-50">

                                    <svg class="w-4 h-4"
                                         viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor"
                                         stroke-width="1.8">
                                        <path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12z"/>
                                        <circle cx="12" cy="12" r="3"/>
                                    </svg>

                                </button>


                                <button type="button"
                                        onclick="toggleShortlist(this)"
                                        title="Toggle Shortlist"
                                        class="w-8 h-8 flex items-center
                                               justify-center rounded-lg
                                               text-[#8751E8] hover:bg-purple-50">

                                    <svg class="w-4 h-4"
                                         viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor"
                                         stroke-width="1.8">
                                        <path d="m12 3 2.8 5.7 6.2.9-4.5 4.4 1.1 6.2-5.6-3-5.6 3 1.1-6.2L3 9.6l6.2-.9L12 3z"/>
                                    </svg>

                                </button>

                            </div>

                        </td>

                    </tr>

                    @endforeach


                    {{-- EMPTY STATE --}}

                    <tr id="emptyCandidate" class="hidden">

                        <td colspan="7" class="text-center py-12">

                            <p class="text-sm font-semibold text-[#21172F]">
                                No candidates found
                            </p>

                            <p class="text-xs text-[#9589A4] mt-1">
                                Try changing your search or filters.
                            </p>

                        </td>

                    </tr>

                </tbody>

            </table>

        </div>


        {{-- FOOTER --}}

        <div class="px-5 py-4 border-t border-[#ECE7F1]
                    flex justify-between items-center">

            <p class="text-[11px] text-[#9589A4]">
                Demo data · Local browser only
            </p>

            <p class="text-[11px] text-[#9589A4]">
                <span id="visibleCandidates">6</span> candidates shown
            </p>

        </div>

    </div>

</div>


{{-- ========================================== --}}
{{-- CANDIDATE DETAIL MODAL --}}
{{-- ========================================== --}}

<div id="candidateModal"
     class="fixed inset-0 z-[100] hidden items-center
            justify-center bg-black/40 backdrop-blur-sm p-4">

    <div class="bg-white rounded-2xl w-full max-w-xl
                max-h-[90vh] overflow-y-auto shadow-2xl">

        {{-- HEADER --}}

        <div class="px-5 py-4 border-b border-[#ECE7F1]
                    flex justify-between items-center sticky top-0
                    bg-white z-10">

            <div>
                <h3 class="text-base font-bold text-[#21172F]">
                    Candidate Profile
                </h3>

                <p class="text-xs text-[#9589A4] mt-1">
                    Candidate information and AI analysis.
                </p>
            </div>

            <button onclick="closeCandidateModal()"
                    class="w-8 h-8 rounded-lg hover:bg-gray-100
                           text-[#9589A4] text-xl">
                &times;
            </button>

        </div>


        {{-- BODY --}}

        <div class="p-5 space-y-5">

            <div class="flex items-center gap-3">

                <div id="detailInitial"
                     class="w-12 h-12 rounded-full bg-purple-100
                            text-[#8751E8] flex items-center
                            justify-center font-bold text-sm">
                </div>

                <div>
                    <h4 id="detailName"
                        class="text-sm font-bold text-[#21172F]">
                    </h4>

                    <p id="detailEmail"
                       class="text-xs text-[#9589A4] mt-1">
                    </p>

                    <p id="detailId"
                       class="text-[10px] text-[#9589A4] mt-1">
                    </p>
                </div>

            </div>


            {{-- SCORE --}}

            <div class="bg-purple-50 rounded-xl p-4">

                <div class="flex justify-between items-center">

                    <div>
                        <p class="text-xs font-semibold text-[#21172F]">
                            AI Compatibility Score
                        </p>

                        <p class="text-[10px] text-[#9589A4] mt-1">
                            Match with selected job position
                        </p>
                    </div>

                    <h3 id="detailScore"
                        class="text-3xl font-bold text-[#8751E8]">
                    </h3>

                </div>

                <div class="w-full h-2 rounded-full bg-white mt-4 overflow-hidden">

                    <div id="detailProgress"
                         class="h-full bg-[#8751E8] rounded-full"
                         style="width: 0%">
                    </div>

                </div>

            </div>


            {{-- PERSONAL INFORMATION --}}

            <div>

                <h4 class="text-xs font-bold text-[#21172F] mb-3">
                    Personal Information
                </h4>

                <div class="grid grid-cols-2 gap-3">

                    <div class="bg-[#FAF9FC] rounded-xl p-3">
                        <p class="text-[10px] text-[#9589A4]">Phone Number</p>
                        <p id="detailPhone"
                           class="text-xs font-semibold text-[#21172F] mt-2">
                        </p>
                    </div>

                    <div class="bg-[#FAF9FC] rounded-xl p-3">
                        <p class="text-[10px] text-[#9589A4]">Education</p>
                        <p id="detailEducation"
                           class="text-xs font-semibold text-[#21172F] mt-2">
                        </p>
                    </div>

                    <div class="bg-[#FAF9FC] rounded-xl p-3">
                        <p class="text-[10px] text-[#9589A4]">Experience</p>
                        <p id="detailExperience"
                           class="text-xs font-semibold text-[#21172F] mt-2">
                        </p>
                    </div>

                    <div class="bg-[#FAF9FC] rounded-xl p-3">
                        <p class="text-[10px] text-[#9589A4]">Applied Position</p>
                        <p id="detailPosition"
                           class="text-xs font-semibold text-[#21172F] mt-2">
                        </p>
                    </div>

                </div>

            </div>


            {{-- SKILLS --}}

            <div>

                <h4 class="text-xs font-bold text-[#21172F] mb-2">
                    Skills & Expertise
                </h4>

                <div id="detailSkills"
                     class="flex flex-wrap gap-2">
                </div>

            </div>


            {{-- STATUS --}}

            <div class="bg-[#FAF9FC] rounded-xl p-3">

                <p class="text-[10px] text-[#9589A4]">
                    APPLICATION STATUS
                </p>

                <p id="detailStatus"
                   class="text-xs font-semibold text-[#8751E8] mt-2">
                </p>

            </div>


            <p class="text-[10px] text-[#9589A4] leading-relaxed">
                Demo profile data. AI evaluation and candidate information
                will be connected to MySQL in the backend development stage.
            </p>

        </div>


        {{-- FOOTER --}}

        <div class="px-5 py-4 border-t border-[#ECE7F1]
                    flex justify-end">

            <button onclick="closeCandidateModal()"
                    class="px-5 py-2.5 rounded-xl bg-[#8751E8]
                           text-white text-xs font-semibold
                           hover:bg-[#7540D5]">
                Close
            </button>

        </div>

    </div>

</div>


{{-- JAVASCRIPT --}}

<script>

    // SEARCH & FILTER

    function filterCandidates() {

        const search = document.getElementById('searchCandidate')
            .value.toLowerCase();

        const position = document.getElementById('positionFilter').value;
        const status = document.getElementById('statusFilter').value;

        const rows = document.querySelectorAll('.candidate-row');

        let visible = 0;

        rows.forEach(row => {

            const name = row.dataset.name;
            const email = row.dataset.email;
            const rowPosition = row.dataset.position;
            const rowStatus = row.dataset.status;

            const matches =
                (name.includes(search) || email.includes(search)) &&
                (!position || rowPosition === position) &&
                (!status || rowStatus === status);

            row.classList.toggle('hidden', !matches);

            if (matches) visible++;

        });

        document.getElementById('visibleCandidates').textContent = visible;
        document.getElementById('candidateCount').textContent =
            visible + ' candidates';

        document.getElementById('emptyCandidate')
            .classList.toggle('hidden', visible !== 0);

    }


    document.getElementById('searchCandidate')
        .addEventListener('input', filterCandidates);

    document.getElementById('positionFilter')
        .addEventListener('change', filterCandidates);

    document.getElementById('statusFilter')
        .addEventListener('change', filterCandidates);


    function resetCandidateFilters() {

        document.getElementById('searchCandidate').value = '';
        document.getElementById('positionFilter').value = '';
        document.getElementById('statusFilter').value = '';

        filterCandidates();

    }


    // VIEW CANDIDATE

    function viewCandidate(button) {

        const item = JSON.parse(button.dataset.candidate);

        document.getElementById('detailInitial').textContent = item.initial;
        document.getElementById('detailName').textContent = item.name;
        document.getElementById('detailEmail').textContent = item.email;
        document.getElementById('detailId').textContent = item.id;

        document.getElementById('detailPhone').textContent = item.phone;
        document.getElementById('detailEducation').textContent = item.education;
        document.getElementById('detailExperience').textContent = item.experience;
        document.getElementById('detailPosition').textContent = item.position;

        document.getElementById('detailScore').textContent = item.score + '%';
        document.getElementById('detailProgress').style.width = item.score + '%';

        document.getElementById('detailStatus').textContent = item.status;

        const skillsContainer = document.getElementById('detailSkills');

        skillsContainer.innerHTML = '';

        item.skills.split(',').forEach(skill => {

            const tag = document.createElement('span');

            tag.className = 'px-2.5 py-1 rounded-lg bg-purple-50 text-[#8751E8] text-[10px] font-semibold';

            tag.textContent = skill.trim();

            skillsContainer.appendChild(tag);

        });

        const modal = document.getElementById('candidateModal');

        modal.classList.remove('hidden');
        modal.classList.add('flex');

    }


    function closeCandidateModal() {

        const modal = document.getElementById('candidateModal');

        modal.classList.add('hidden');
        modal.classList.remove('flex');

    }


    // SHORTLIST INTERACTION

    function toggleShortlist(button) {

        const row = button.closest('tr');
        const currentStatus = row.dataset.status;

        if (currentStatus === 'Shortlisted') {

            row.dataset.status = 'Under Review';

        } else {

            row.dataset.status = 'Shortlisted';

        }

        const statusCell = row.children[4];

        const statusBadge = statusCell.querySelector('span');

        statusBadge.textContent = row.dataset.status;

        statusBadge.className =
            row.dataset.status === 'Shortlisted'
                ? 'inline-flex px-2.5 py-1 rounded-full text-[10px] font-semibold bg-purple-50 text-[#8751E8]'
                : 'inline-flex px-2.5 py-1 rounded-full text-[10px] font-semibold bg-amber-50 text-amber-700';

        // Update data detail button

        const detailButton = row.querySelector('button[onclick="viewCandidate(this)"]');

        const candidateData = JSON.parse(detailButton.dataset.candidate);

        candidateData.status = row.dataset.status;

        detailButton.dataset.candidate = JSON.stringify(candidateData);

        filterCandidates();

        alert('Candidate status updated in this demo.');

    }


    // MODAL OUTSIDE CLICK

    document.getElementById('candidateModal').addEventListener('click', function(event) {

        if (event.target === this) {
            closeCandidateModal();
        }

    });


    // ESCAPE KEY

    document.addEventListener('keydown', function(event) {

        if (event.key === 'Escape') {
            closeCandidateModal();
        }

    });

</script>

@endsection
