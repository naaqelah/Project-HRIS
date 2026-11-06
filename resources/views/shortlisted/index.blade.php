
@extends('layouts.app')

@section('title', 'Shortlisted')
@section('breadcrumb', 'Workspace / Shortlisted')
@section('page-title', 'Shortlisted')

@section('content')

@php
    $candidates = [
        [
            'id' => 'CAN-001',
            'name' => 'Amanda Putri',
            'email' => 'amanda@gmail.com',
            'position' => 'UI/UX Designer',
            'experience' => '3 Years',
            'education' => 'Bachelor of Design',
            'score' => 96,
            'date' => '04 Nov 2026',
            'skills' => ['Figma', 'UI Design', 'Prototyping', 'Wireframing'],
            'status' => 'Shortlisted',
        ],
        [
            'id' => 'CAN-002',
            'name' => 'Rizky Pratama',
            'email' => 'rizky@gmail.com',
            'position' => 'Frontend Developer',
            'experience' => '2 Years',
            'education' => 'Bachelor of Informatics',
            'score' => 92,
            'date' => '03 Nov 2026',
            'skills' => ['HTML', 'CSS', 'JavaScript', 'React'],
            'status' => 'Shortlisted',
        ],
        [
            'id' => 'CAN-003',
            'name' => 'Nadia Safitri',
            'email' => 'nadia@gmail.com',
            'position' => 'Data Analyst',
            'experience' => '4 Years',
            'education' => 'Bachelor of Statistics',
            'score' => 89,
            'date' => '02 Nov 2026',
            'skills' => ['SQL', 'Python', 'Excel', 'Power BI'],
            'status' => 'Shortlisted',
        ],
        [
            'id' => 'CAN-004',
            'name' => 'Fajar Ramadhan',
            'email' => 'fajar@gmail.com',
            'position' => 'Backend Developer',
            'experience' => '3 Years',
            'education' => 'Bachelor of Computer Science',
            'score' => 87,
            'date' => '01 Nov 2026',
            'skills' => ['PHP', 'Laravel', 'MySQL', 'REST API'],
            'status' => 'Shortlisted',
        ],
        [
            'id' => 'CAN-005',
            'name' => 'Sarah Amelia',
            'email' => 'sarah@gmail.com',
            'position' => 'Digital Marketing',
            'experience' => '2 Years',
            'education' => 'Bachelor of Communication',
            'score' => 85,
            'date' => '30 Oct 2026',
            'skills' => ['SEO', 'Content Marketing', 'Analytics'],
            'status' => 'Shortlisted',
        ],
    ];
@endphp

<div class="space-y-6">

    {{-- Header --}}
    <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h2 class="text-xl font-semibold text-[#14243A]">
                Shortlisted Candidates
            </h2>
            <p class="mt-1 text-sm text-[#718096]">
                Manage candidates selected for the next recruitment stage.
            </p>
        </div>

        <a href="{{ route('candidates.index') }}"
            class="inline-flex items-center justify-center gap-2 rounded-lg border border-[#3763FF] bg-[#3763FF] px-4 py-2.5 text-sm font-medium text-white hover:bg-[#2F55E7] transition">
            <i class="fa-solid fa-users"></i>
            All Candidates
        </a>
    </div>

    {{-- Demo Notice --}}
    <div class="flex items-center gap-2 rounded-lg border border-[#D7E5F5] bg-[#EFF6FF] px-4 py-3">
        <i class="fa-solid fa-circle-info text-[#315A8A]"></i>
        <p class="text-xs text-[#526174]">
            Demo data only. Shortlist changes are not yet saved to MySQL.
        </p>
    </div>

    {{-- Statistics --}}
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-4">

        <div class="rounded-xl border border-[#E2E8F0] bg-white p-5">
            <div class="flex items-center justify-between">
                <p class="text-sm text-[#718096]">Total Shortlisted</p>
                <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-[#EAF1FA] text-[#315A8A]">
                    <i class="fa-solid fa-user-check"></i>
                </span>
            </div>
            <h3 id="totalShortlisted" class="mt-4 text-2xl font-semibold text-[#14243A]">42</h3>
            <p class="mt-2 text-xs text-[#718096]">Selected candidates</p>
        </div>

        <div class="rounded-xl border border-[#E2E8F0] bg-white p-5">
            <div class="flex items-center justify-between">
                <p class="text-sm text-[#718096]">High Match</p>
                <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-green-50 text-green-600">
                    <i class="fa-solid fa-star"></i>
                </span>
            </div>
            <h3 class="mt-4 text-2xl font-semibold text-[#14243A]">28</h3>
            <p class="mt-2 text-xs text-[#718096]">Match score above 85%</p>
        </div>

        <div class="rounded-xl border border-[#E2E8F0] bg-white p-5">
            <div class="flex items-center justify-between">
                <p class="text-sm text-[#718096]">Interview Ready</p>
                <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-blue-50 text-blue-600">
                    <i class="fa-solid fa-calendar-check"></i>
                </span>
            </div>
            <h3 class="mt-4 text-2xl font-semibold text-[#14243A]">18</h3>
            <p class="mt-2 text-xs text-[#718096]">Ready for next stage</p>
        </div>

        <div class="rounded-xl border border-[#E2E8F0] bg-white p-5">
            <div class="flex items-center justify-between">
                <p class="text-sm text-[#718096]">Job Positions</p>
                <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-orange-50 text-orange-600">
                    <i class="fa-solid fa-briefcase"></i>
                </span>
            </div>
            <h3 class="mt-4 text-2xl font-semibold text-[#14243A]">5</h3>
            <p class="mt-2 text-xs text-[#718096]">Positions represented</p>
        </div>

    </div>

    {{-- Candidate Table --}}
    <div class="overflow-hidden rounded-xl border border-[#E2E8F0] bg-white">

        {{-- Table Header --}}
        <div class="border-b border-[#E2E8F0] p-5">
            <h3 class="font-semibold text-[#14243A]">Shortlisted List</h3>
            <p class="mt-1 text-xs text-[#718096]">
                Candidates with the highest compatibility scores
            </p>
        </div>

        {{-- Filters --}}
        <div class="flex flex-col gap-3 border-b border-[#E2E8F0] p-5 lg:flex-row">

            <div class="relative flex-1">
                <i class="fa-solid fa-search absolute left-3 top-1/2 -translate-y-1/2 text-sm text-[#718096]"></i>
                <input type="text" id="searchCandidate"
                    placeholder="Search candidate name or email..."
                    class="w-full rounded-lg border border-[#E2E8F0] py-2.5 pl-9 pr-3 text-sm text-[#33445B] outline-none focus:border-[#315A8A] focus:ring-2 focus:ring-blue-100">
            </div>

            <select id="positionFilter"
                class="rounded-lg border border-[#E2E8F0] bg-white px-3 py-2.5 text-sm text-[#526174] outline-none focus:border-[#315A8A] focus:ring-2 focus:ring-blue-100">
                <option value="">All Positions</option>
                <option value="UI/UX Designer">UI/UX Designer</option>
                <option value="Frontend Developer">Frontend Developer</option>
                <option value="Backend Developer">Backend Developer</option>
                <option value="Data Analyst">Data Analyst</option>
                <option value="Digital Marketing">Digital Marketing</option>
            </select>

            <select id="scoreFilter"
                class="rounded-lg border border-[#E2E8F0] bg-white px-3 py-2.5 text-sm text-[#526174] outline-none focus:border-[#315A8A] focus:ring-2 focus:ring-blue-100">
                <option value="">All Match Scores</option>
                <option value="high">90% - 100%</option>
                <option value="medium">80% - 89%</option>
            </select>

            <button onclick="resetFilters()"
                class="rounded-lg border border-[#E2E8F0] px-4 py-2.5 text-sm text-[#526174] hover:bg-[#F5F8FC] hover:text-[#315A8A]">
                Reset
            </button>
        </div>

        {{-- Table --}}
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm">
                <thead class="bg-[#F5F8FC] text-xs text-[#718096]">
                    <tr>
                        <th class="px-5 py-4 font-medium">Candidate</th>
                        <th class="px-5 py-4 font-medium">Job Position</th>
                        <th class="px-5 py-4 font-medium">Experience</th>
                        <th class="px-5 py-4 font-medium">AI Match Score</th>
                        <th class="px-5 py-4 font-medium">Date Added</th>
                        <th class="px-5 py-4 font-medium">Status</th>
                        <th class="px-5 py-4 text-center font-medium">Actions</th>
                    </tr>
                </thead>

                <tbody id="candidateTable" class="divide-y divide-[#E8EDF4]">

                    @foreach ($candidates as $candidate)
                        <tr class="candidate-row hover:bg-[#F5F8FC] transition-colors"
                            data-name="{{ strtolower($candidate['name']) }}"
                            data-email="{{ strtolower($candidate['email']) }}"
                            data-position="{{ $candidate['position'] }}"
                            data-score="{{ $candidate['score'] }}">

                            <td class="whitespace-nowrap px-5 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="flex h-10 w-10 items-center justify-center rounded-full bg-[#EAF1FA] font-semibold text-[#315A8A]">
                                        {{ strtoupper(substr($candidate['name'], 0, 1)) }}
                                    </div>
                                    <div>
                                        <p class="font-medium text-[#14243A]">
                                            {{ $candidate['name'] }}
                                        </p>
                                        <p class="mt-1 text-xs text-[#718096]">
                                            {{ $candidate['email'] }}
                                        </p>
                                    </div>
                                </div>
                            </td>

                            <td class="whitespace-nowrap px-5 py-4 text-[#526174]">
                                {{ $candidate['position'] }}
                            </td>

            <td class="whitespace-nowrap px-5 py-4 text-[#526174]">
                                {{ $candidate['experience'] }}
                            </td>

                            <td class="whitespace-nowrap px-5 py-4">
                                <div class="flex items-center gap-2">
                                    <span class="font-semibold text-[#315A8A]">
                                        {{ $candidate['score'] }}%
                                    </span>
                                    <div class="h-1.5 w-16 overflow-hidden rounded-full bg-[#E2E8F0]">
                                        <div class="h-full rounded-full bg-[#315A8A]"
                                            style="width: {{ $candidate['score'] }}%">
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <td class="whitespace-nowrap px-5 py-4 text-[#718096]">
                                {{ $candidate['date'] }}
                            </td>

                            <td class="whitespace-nowrap px-5 py-4">
                                <span class="rounded-full bg-green-50 px-3 py-1 text-xs font-medium text-green-700">
                                    Shortlisted
                                </span>
                            </td>

                            <td class="whitespace-nowrap px-5 py-4">
                                <div class="flex items-center justify-center gap-2">
                                    <button
                                        onclick='viewCandidate(@json($candidate))'
                                        class="flex h-8 w-8 items-center justify-center rounded-lg text-[#315A8A] hover:bg-[#EAF1FA] transition"
                                        title="View details">
                                        <i class="fa-regular fa-eye"></i>
                                    </button>

                                    <button
                                        onclick="removeCandidate(this)"
                                        class="flex h-8 w-8 items-center justify-center rounded-lg text-red-500 hover:bg-red-50"
                                        title="Remove from shortlist">
                                        <i class="fa-solid fa-user-minus"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

        {{-- Empty State --}}
        <div id="emptyState" class="hidden px-5 py-12 text-center">
            <i class="fa-solid fa-users text-3xl text-[#A0AEC0]"></i>
            <p class="mt-3 font-medium text-[#526174]">No candidates found</p>
            <p class="mt-1 text-sm text-[#718096]">
                Try adjusting your search or filters.
            </p>
        </div>

        <div class="border-t border-[#E2E8F0] px-5 py-4">
            <p class="text-xs text-[#718096]">
                Showing <span id="visibleCount">5</span> demo candidates
            </p>
        </div>

    </div>

</div>

{{-- Candidate Detail Modal --}}
<div id="candidateModal"
    class="fixed inset-0 z-50 hidden items-center justify-center bg-black/40 p-4">

    <div class="w-full max-w-xl rounded-2xl bg-white shadow-xl">

        <div class="flex items-center justify-between border-b border-[#E2E8F0] px-6 py-5">
            <div>
                <h3 class="font-semibold text-[#14243A]">Candidate Details</h3>
                <p class="mt-1 text-xs text-[#718096]">Candidate profile information</p>
            </div>

            <button onclick="closeModal()"
                class="flex h-8 w-8 items-center justify-center rounded-lg text-[#718096] hover:bg-[#F5F8FC]">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>

        <div class="space-y-5 p-6">

            <div class="flex items-center gap-4">
                <div id="detailAvatar"
                    class="flex h-14 w-14 items-center justify-center rounded-full bg-[#EAF1FA] text-xl font-semibold text-[#315A8A]">
                </div>
                <div>
                    <h4 id="detailName" class="font-semibold text-[#14243A]"></h4>
                    <p id="detailEmail" class="mt-1 text-sm text-[#718096]"></p>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div class="rounded-lg bg-[#F5F8FC] p-3">
                    <p class="text-xs text-[#718096]">Applied Position</p>
                    <p id="detailPosition" class="mt-2 text-sm font-medium text-[#14243A]"></p>
                </div>

                <div class="rounded-lg bg-[#F5F8FC] p-3">
                    <p class="text-xs text-[#718096]">Experience</p>
                    <p id="detailExperience" class="mt-2 text-sm font-medium text-[#14243A]"></p>
                </div>

                <div class="rounded-lg bg-[#F5F8FC] p-3 col-span-2">
                    <p class="text-xs text-[#718096]">Education</p>
                    <p id="detailEducation" class="mt-2 text-sm font-medium text-[#14243A]"></p>
                </div>
            </div>

            <div>
                <div class="mb-2 flex items-center justify-between">
                    <p class="text-sm font-medium text-[#526174]">AI Match Score</p>
                    <p id="detailScore" class="font-semibold text-[#315A8A]"></p>
                </div>
                <div class="h-2 overflow-hidden rounded-full bg-[#E2E8F0]">
                    <div id="detailProgress"
                        class="h-full rounded-full bg-[#315A8A]"></div>
                </div>
            </div>

            <div>
                <p class="mb-3 text-sm font-medium text-[#526174]">Skills</p>
                <div id="detailSkills" class="flex flex-wrap gap-2"></div>
            </div>

        </div>

        <div class="flex justify-end border-t border-[#E2E8F0] px-6 py-4">
            <button onclick="closeModal()"
                class="rounded-lg bg-[#315A8A] px-5 py-2 text-sm font-medium text-white hover:bg-[#25496F] transition">
                Close
            </button>
        </div>
    </div>
</div>

{{-- JavaScript --}}
<script>
    const searchInput = document.getElementById('searchCandidate');
    const positionFilter = document.getElementById('positionFilter');
    const scoreFilter = document.getElementById('scoreFilter');

    function filterCandidates() {
        const search = searchInput.value.toLowerCase();
        const position = positionFilter.value;
        const score = scoreFilter.value;

        const rows = document.querySelectorAll('.candidate-row');
        let visible = 0;

        rows.forEach(row => {
            const name = row.dataset.name;
            const email = row.dataset.email;
            const rowPosition = row.dataset.position;
            const rowScore = Number(row.dataset.score);

            const matchesSearch = name.includes(search) || email.includes(search);
            const matchesPosition = !position || rowPosition === position;

            let matchesScore = true;

            if (score === 'high') {
                matchesScore = rowScore >= 90;
            } else if (score === 'medium') {
                matchesScore = rowScore >= 80 && rowScore < 90;
            }

            const show = matchesSearch && matchesPosition && matchesScore;

            row.style.display = show ? '' : 'none';

            if (show) visible++;
        });

        document.getElementById('visibleCount').textContent = visible;
        document.getElementById('emptyState').classList.toggle('hidden', visible !== 0);
    }

    searchInput.addEventListener('input', filterCandidates);
    positionFilter.addEventListener('change', filterCandidates);
    scoreFilter.addEventListener('change', filterCandidates);

    function resetFilters() {
        searchInput.value = '';
        positionFilter.value = '';
        scoreFilter.value = '';
        filterCandidates();
    }

    function viewCandidate(candidate) {
        document.getElementById('detailAvatar').textContent =
            candidate.name.charAt(0).toUpperCase();

        document.getElementById('detailName').textContent = candidate.name;
        document.getElementById('detailEmail').textContent = candidate.email;
        document.getElementById('detailPosition').textContent = candidate.position;
        document.getElementById('detailExperience').textContent = candidate.experience;
        document.getElementById('detailEducation').textContent = candidate.education;
        document.getElementById('detailScore').textContent = candidate.score + '%';
        document.getElementById('detailProgress').style.width = candidate.score + '%';

        const skillsContainer = document.getElementById('detailSkills');
        skillsContainer.innerHTML = '';

        candidate.skills.forEach(skill => {
            const badge = document.createElement('span');
            badge.className = 'rounded-full bg-[#EAF1FA] px-3 py-1.5 text-xs text-[#315A8A]';
            badge.textContent = skill;
            skillsContainer.appendChild(badge);
        });

        const modal = document.getElementById('candidateModal');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }

    function closeModal() {
        const modal = document.getElementById('candidateModal');
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }

    function removeCandidate(button) {
        if (!confirm('Remove this candidate from the shortlist?')) return;

        const row = button.closest('tr');
        row.remove();

        const rows = document.querySelectorAll('.candidate-row');
        document.getElementById('totalShortlisted').textContent = rows.length;

        filterCandidates();
    }

    document.getElementById('candidateModal').addEventListener('click', function(event) {
        if (event.target === this) closeModal();
    });
</script>

@endsection
