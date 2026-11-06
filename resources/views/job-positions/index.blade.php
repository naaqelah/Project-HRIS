
@extends('layouts.app')

@section('title', 'Job Positions - TalentMatch AI')
@section('breadcrumb', 'Workspace / Job Positions')
@section('page-title', 'Job Positions')

@section('content')

@php
    // DATA DUMMY SEMENTARA

    $positions = [
        [
            'id' => 'JOB-001',
            'title' => 'UI/UX Designer',
            'department' => 'Design',
            'type' => 'Full Time',
            'location' => 'Jakarta',
            'applicants' => 32,
            'date' => '2026-11-04',
            'status' => 'Active',
            'description' => 'Responsible for creating user-friendly interfaces and improving user experience.',
            'requirements' => "Minimum 2 years experience.\nProficient in Figma.\nUnderstanding of UI/UX principles.\nStrong portfolio."
        ],
        [
            'id' => 'JOB-002',
            'title' => 'Frontend Developer',
            'department' => 'Engineering',
            'type' => 'Full Time',
            'location' => 'Jakarta',
            'applicants' => 48,
            'date' => '2026-11-03',
            'status' => 'Active',
            'description' => 'Develop and maintain responsive web applications.',
            'requirements' => "Minimum 2 years experience.\nHTML, CSS, JavaScript.\nLaravel and Tailwind knowledge.\nGit experience."
        ],
        [
            'id' => 'JOB-003',
            'title' => 'Backend Developer',
            'department' => 'Engineering',
            'type' => 'Full Time',
            'location' => 'Remote',
            'applicants' => 21,
            'date' => '2026-11-02',
            'status' => 'Active',
            'description' => 'Build secure and scalable backend systems.',
            'requirements' => "PHP and Laravel experience.\nMySQL knowledge.\nREST API development.\nUnderstanding of database design."
        ],
        [
            'id' => 'JOB-004',
            'title' => 'Data Analyst',
            'department' => 'Data',
            'type' => 'Contract',
            'location' => 'Bandung',
            'applicants' => 15,
            'date' => '2026-11-01',
            'status' => 'Draft',
            'description' => 'Analyze data and provide actionable business insights.',
            'requirements' => "SQL knowledge.\nExcel proficiency.\nData visualization.\nAnalytical thinking."
        ],
        [
            'id' => 'JOB-005',
            'title' => 'Digital Marketing',
            'department' => 'Marketing',
            'type' => 'Part Time',
            'location' => 'Jakarta',
            'applicants' => 27,
            'date' => '2026-10-29',
            'status' => 'Closed',
            'description' => 'Plan and execute digital marketing campaigns.',
            'requirements' => "Social media marketing.\nSEO and SEM knowledge.\nContent planning.\nCommunication skills."
        ],
    ];
@endphp

<div class="space-y-5">

    {{-- HEADER --}}
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3">
        <div>
            <h2 class="text-xl font-bold text-[#0F172A]">
                Job Positions
            </h2>
            <p class="text-sm text-[#64748B] mt-1">
                Manage job openings and recruitment requirements.
            </p>
        </div>

        <button onclick="openAddModal()"
                class="inline-flex items-center justify-center gap-2
                       px-4 py-2.5 rounded-xl bg-[#3666F6]
                       hover:bg-[#2851D8] text-white text-sm
                       font-semibold transition-all shadow-md
                       shadow-blue-200">
            <svg class="w-4 h-4" viewBox="0 0 24 24"
                 fill="none" stroke="currentColor" stroke-width="2">
                <path d="M12 5v14M5 12h14"/>
            </svg>
            Add New Position
        </button>
    </div>

    {{-- STATISTICS --}}
    <div class="grid grid-cols-2 xl:grid-cols-4 gap-3">

        <div class="bg-white border border-[#E2E8F0] rounded-2xl p-4">
            <p class="text-xs text-[#64748B]">Total Positions</p>
            <h3 id="totalCount" class="text-2xl font-bold text-[#0F172A] mt-2">24</h3>
            <p class="text-[11px] text-[#64748B] mt-2">All job positions</p>
        </div>

        <div class="bg-white border border-[#E2E8F0] rounded-2xl p-4">
            <p class="text-xs text-[#64748B]">Active Positions</p>
            <h3 id="activeCount" class="text-2xl font-bold text-emerald-600 mt-2">16</h3>
            <p class="text-[11px] text-[#64748B] mt-2">Currently recruiting</p>
        </div>

        <div class="bg-white border border-[#E2E8F0] rounded-2xl p-4">
            <p class="text-xs text-[#64748B]">Draft Positions</p>
            <h3 id="draftCount" class="text-2xl font-bold text-amber-600 mt-2">5</h3>
            <p class="text-[11px] text-[#64748B] mt-2">Not published</p>
        </div>

        <div class="bg-white border border-[#E2E8F0] rounded-2xl p-4">
            <p class="text-xs text-[#64748B]">Closed Positions</p>
            <h3 id="closedCount" class="text-2xl font-bold text-[#0F172A] mt-2">3</h3>
            <p class="text-[11px] text-[#64748B] mt-2">Recruitment completed</p>
        </div>

    </div>

    {{-- MAIN TABLE --}}
    <div class="bg-white border border-[#E2E8F0] rounded-2xl overflow-hidden">

        {{-- TABLE HEADER --}}
        <div class="p-5 border-b border-[#E2E8F0]">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                <div>
                    <h3 class="text-base font-bold text-[#0F172A]">All Job Positions</h3>
                    <p class="text-xs text-[#64748B] mt-1">Manage and monitor your job openings.</p>
                </div>
                <span id="positionCount" class="text-xs text-[#64748B]">5 positions</span>
            </div>

            {{-- SEARCH AND FILTER --}}
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mt-5">

                <div class="relative sm:col-span-1">
                    <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-[#64748B]"
                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <circle cx="11" cy="11" r="7"/>
                        <path d="m20 20-4-4"/>
                    </svg>

                    <input id="searchPosition" type="text"
                           placeholder="Search job title..."
                           class="w-full h-10 pl-9 pr-3 rounded-xl
                                  border border-[#E2E8F0] text-xs
                                  outline-none focus:border-[#3666F6]
                                  focus:ring-2 focus:ring-blue-100">
                </div>

                <select id="departmentFilter"
                        class="h-10 px-3 rounded-xl border border-[#E2E8F0]
                               text-xs text-[#475569] outline-none
                               focus:border-[#3666F6] focus:ring-2 focus:ring-blue-100">
                    <option value="">All Departments</option>
                    <option value="Design">Design</option>
                    <option value="Engineering">Engineering</option>
                    <option value="Data">Data</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Human Resources">Human Resources</option>
                </select>

                <select id="statusFilter"
                        class="h-10 px-3 rounded-xl border border-[#E2E8F0]
                               text-xs text-[#475569] outline-none
                               focus:border-[#3666F6] focus:ring-2 focus:ring-blue-100">
                    <option value="">All Status</option>
                    <option value="Active">Active</option>
                    <option value="Draft">Draft</option>
                    <option value="Closed">Closed</option>
                </select>

            </div>

            <div class="flex justify-end mt-3">
                <button onclick="resetPositionFilters()"
                        class="text-xs text-[#3666F6] font-semibold hover:text-[#2851D8]">
                    Reset Filters
                </button>
            </div>
        </div>

        {{-- TABLE --}}
        <div class="overflow-x-auto">
            <table class="w-full min-w-[900px] text-left">

                <thead class="bg-[#F8FAFC]">
                    <tr class="text-[10px] uppercase tracking-wider text-[#64748B]">
                        <th class="px-5 py-4 font-semibold">Job Title</th>
                        <th class="px-4 py-4 font-semibold">Department</th>
                        <th class="px-4 py-4 font-semibold">Employment Type</th>
                        <th class="px-4 py-4 font-semibold">Applicants</th>
                        <th class="px-4 py-4 font-semibold">Date Posted</th>
                        <th class="px-4 py-4 font-semibold">Status</th>
                        <th class="px-5 py-4 text-right font-semibold">Action</th>
                    </tr>
                </thead>

                <tbody id="positionTable" class="divide-y divide-[#E2E8F0]">

                    @foreach($positions as $position)
                    <tr class="position-row hover:bg-[#F8FAFC] transition-colors"
                        data-title="{{ strtolower($position['title']) }}"
                        data-department="{{ $position['department'] }}"
                        data-status="{{ $position['status'] }}">

                        <td class="px-5 py-4">
                            <div>
                                <p class="text-xs font-semibold text-[#0F172A]">
                                    {{ $position['title'] }}
                                </p>
                                <p class="text-[10px] text-[#64748B] mt-1">
                                    {{ $position['id'] }} · {{ $position['location'] }}
                                </p>
                            </div>
                        </td>

                        <td class="px-4 py-4">
                            <span class="text-xs text-[#475569]">{{ $position['department'] }}</span>
                        </td>

                        <td class="px-4 py-4">
                            <span class="text-xs text-[#475569]">{{ $position['type'] }}</span>
                        </td>

                        <td class="px-4 py-4">
                            <span class="text-xs font-semibold text-[#0F172A]">{{ $position['applicants'] }}</span>
                            <span class="text-[10px] text-[#64748B]">applicants</span>
                        </td>

                        <td class="px-4 py-4">
                            <span class="text-xs text-[#475569]">
                                {{ \Carbon\Carbon::parse($position['date'])->format('d M Y') }}
                            </span>
                        </td>

                        <td class="px-4 py-4">
                            @php
                                $statusClass = match($position['status']) {
                                    'Active' => 'bg-emerald-50 text-emerald-700',
                                    'Draft' => 'bg-amber-50 text-amber-700',
                                    default => 'bg-gray-100 text-gray-600',
                                };
                            @endphp

                            <span class="inline-flex px-2.5 py-1 rounded-full text-[10px]
                                         font-semibold {{ $statusClass }}">
                                {{ $position['status'] }}
                            </span>
                        </td>

                        <td class="px-5 py-4">
                            <div class="flex justify-end gap-1">

                                <button type="button" onclick="viewPosition(this)"
                                        data-position="{{ json_encode($position) }}"
                                        title="View Details"
                                        class="w-8 h-8 flex items-center justify-center rounded-lg
                                               text-[#3666F6] hover:bg-blue-50">
                                    <svg class="w-4 h-4" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="1.8">
                                        <path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12z"/>
                                        <circle cx="12" cy="12" r="3"/>
                                    </svg>
                                </button>

                                <button type="button" onclick="editPosition(this)"
                                        data-position="{{ json_encode($position) }}"
                                        title="Edit"
                                        class="w-8 h-8 flex items-center justify-center rounded-lg
                                               text-[#475569] hover:bg-gray-100">
                                    <svg class="w-4 h-4" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="1.8">
                                        <path d="m16 4 4 4M4 20l4-.8L19 8a2.1 2.1 0 0 0-3-3L5 16l-1 4z"/>
                                    </svg>
                                </button>

                                <button type="button" onclick="deletePosition(this)"
                                        title="Delete"
                                        class="w-8 h-8 flex items-center justify-center rounded-lg
                                               text-red-500 hover:bg-red-50">
                                    <svg class="w-4 h-4" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="1.8">
                                        <path d="M3 6h18M8 6V4h8v2m3 0-1 14H6L5 6m4 4v6m6-6v6"/>
                                    </svg>
                                </button>

                            </div>
                        </td>
                    </tr>
                    @endforeach

                    <tr id="emptyPosition" class="hidden">
                        <td colspan="7" class="text-center py-12">
                            <p class="text-sm font-semibold text-[#0F172A]">No job positions found</p>
                            <p class="text-xs text-[#64748B] mt-1">Try changing your search or filters.</p>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

        {{-- FOOTER --}}
        <div class="px-5 py-4 border-t border-[#E2E8F0] flex justify-between items-center">
            <p class="text-[11px] text-[#64748B]">Demo data · Local browser only</p>
            <p class="text-[11px] text-[#64748B]">
                <span id="visibleCount">5</span> positions shown
            </p>
        </div>

    </div>
</div>

{{-- ADD / EDIT MODAL --}}
<div id="positionModal"
     class="fixed inset-0 z-[100] hidden items-center justify-center
            bg-black/40 backdrop-blur-sm p-4">

    <div class="bg-white rounded-2xl w-full max-w-2xl max-h-[90vh]
                overflow-y-auto shadow-2xl">

        <div class="px-5 py-4 border-b border-[#E2E8F0]
                    flex justify-between items-center sticky top-0
                    bg-white z-10">
            <div>
                <h3 id="modalTitle" class="text-base font-bold text-[#0F172A]">
                    Add New Position
                </h3>
                <p class="text-xs text-[#64748B] mt-1">Fill in the job position information.</p>
            </div>

            <button onclick="closePositionModal()"
                    class="w-8 h-8 rounded-lg hover:bg-gray-100 text-[#64748B] text-xl">
                &times;
            </button>
        </div>

        <form id="positionForm" class="p-5 space-y-4">
            <input type="hidden" id="editId">

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                <div class="sm:col-span-2">
                    <label class="block text-xs font-semibold text-[#334155] mb-2">Job Title *</label>
                    <input type="text" id="jobTitle" required placeholder="e.g. UI/UX Designer"
                           class="w-full h-10 px-3 rounded-xl border border-[#E2E8F0]
                                  text-xs outline-none focus:border-[#3666F6]
                                  focus:ring-2 focus:ring-blue-100">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-[#334155] mb-2">Department *</label>
                    <select id="jobDepartment" required
                            class="w-full h-10 px-3 rounded-xl border border-[#E2E8F0]
                                   text-xs outline-none focus:border-[#3666F6]">
                        <option value="">Select Department</option>
                        <option>Design</option>
                        <option>Engineering</option>
                        <option>Data</option>
                        <option>Marketing</option>
                        <option>Human Resources</option>
                    </select>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-[#334155] mb-2">Employment Type *</label>
                    <select id="jobType" required
                            class="w-full h-10 px-3 rounded-xl border border-[#E2E8F0]
                                   text-xs outline-none focus:border-[#3666F6]">
                        <option value="">Select Type</option>
                        <option>Full Time</option>
                        <option>Part Time</option>
                        <option>Contract</option>
                        <option>Internship</option>
                    </select>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-[#334155] mb-2">Location *</label>
                    <input type="text" id="jobLocation" required placeholder="e.g. Jakarta / Remote"
                           class="w-full h-10 px-3 rounded-xl border border-[#E2E8F0]
                                  text-xs outline-none focus:border-[#3666F6]">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-[#334155] mb-2">Status *</label>
                    <select id="jobStatus" required
                            class="w-full h-10 px-3 rounded-xl border border-[#E2E8F0]
                                   text-xs outline-none focus:border-[#3666F6]">
                        <option>Active</option>
                        <option>Draft</option>
                        <option>Closed</option>
                    </select>
                </div>

                <div class="sm:col-span-2">
                    <label class="block text-xs font-semibold text-[#334155] mb-2">Job Description *</label>
                    <textarea id="jobDescription" rows="3" required
                              placeholder="Describe the responsibilities..."
                              class="w-full p-3 rounded-xl border border-[#E2E8F0]
                                     text-xs outline-none focus:border-[#3666F6]
                                     focus:ring-2 focus:ring-blue-100"></textarea>
                </div>

                <div class="sm:col-span-2">
                    <label class="block text-xs font-semibold text-[#334155] mb-2">Job Requirements *</label>
                    <textarea id="jobRequirements" rows="4" required
                              placeholder="Write required skills, qualifications and experience..."
                              class="w-full p-3 rounded-xl border border-[#E2E8F0]
                                     text-xs outline-none focus:border-[#3666F6]
                                     focus:ring-2 focus:ring-blue-100"></textarea>
                </div>

            </div>

            <div class="flex justify-end gap-2 pt-3 border-t border-[#E2E8F0]">
                <button type="button" onclick="closePositionModal()"
                        class="px-4 py-2.5 rounded-xl border border-[#E2E8F0]
                               text-xs font-semibold text-[#475569] hover:bg-gray-50">
                    Cancel
                </button>

                <button type="submit"
                        class="px-5 py-2.5 rounded-xl bg-[#3666F6]
                               hover:bg-[#2851D8] text-white text-xs font-semibold">
                    Save Position
                </button>
            </div>

        </form>
    </div>
</div>

{{-- DETAIL MODAL --}}
<div id="viewModal"
     class="fixed inset-0 z-[100] hidden items-center justify-center
            bg-black/40 backdrop-blur-sm p-4">

    <div class="bg-white rounded-2xl w-full max-w-lg max-h-[85vh]
                overflow-y-auto shadow-2xl">

        <div class="px-5 py-4 border-b border-[#E2E8F0]
                    flex justify-between items-center">
            <h3 class="text-base font-bold text-[#0F172A]">Position Details</h3>
            <button onclick="closeViewModal()" class="text-xl text-[#64748B]">&times;</button>
        </div>

        <div class="p-5 space-y-4">
            <div>
                <p class="text-[10px] text-[#64748B]">JOB TITLE</p>
                <h3 id="viewTitle" class="text-lg font-bold text-[#0F172A] mt-1"></h3>
                <p id="viewMeta" class="text-xs text-[#64748B] mt-1"></p>
            </div>

            <div class="grid grid-cols-2 gap-3">
                <div class="bg-[#F8FAFC] rounded-xl p-3">
                    <p class="text-[10px] text-[#64748B]">Department</p>
                    <p id="viewDepartment" class="text-xs font-semibold mt-2"></p>
                </div>
                <div class="bg-[#F8FAFC] rounded-xl p-3">
                    <p class="text-[10px] text-[#64748B]">Employment Type</p>
                    <p id="viewType" class="text-xs font-semibold mt-2"></p>
                </div>
                <div class="bg-[#F8FAFC] rounded-xl p-3">
                    <p class="text-[10px] text-[#64748B]">Location</p>
                    <p id="viewLocation" class="text-xs font-semibold mt-2"></p>
                </div>
                <div class="bg-[#F8FAFC] rounded-xl p-3">
                    <p class="text-[10px] text-[#64748B]">Applicants</p>
                    <p id="viewApplicants" class="text-xs font-semibold mt-2"></p>
                </div>
            </div>

            <div>
                <p class="text-xs font-bold text-[#0F172A] mb-2">Job Description</p>
                <p id="viewDescription" class="text-xs text-[#475569] leading-relaxed whitespace-pre-line"></p>
            </div>

            <div>
                <p class="text-xs font-bold text-[#0F172A] mb-2">Job Requirements</p>
                <p id="viewRequirements" class="text-xs text-[#475569] leading-relaxed whitespace-pre-line"></p>
            </div>
        </div>

        <div class="px-5 py-4 border-t border-[#E2E8F0] flex justify-end">
            <button onclick="closeViewModal()"
                    class="px-5 py-2.5 rounded-xl bg-[#3666F6]
                           hover:bg-[#2851D8] text-white text-xs font-semibold">
                Close
            </button>
        </div>
    </div>
</div>

{{-- JAVASCRIPT --}}
<script>
    // SEARCH AND FILTER
    function filterPositions() {
        const search = document.getElementById('searchPosition').value.toLowerCase();
        const department = document.getElementById('departmentFilter').value;
        const status = document.getElementById('statusFilter').value;
        const rows = document.querySelectorAll('.position-row');
        let visible = 0;

        rows.forEach(row => {
            const title = row.dataset.title;
            const rowDepartment = row.dataset.department;
            const rowStatus = row.dataset.status;

            const matches = title.includes(search) &&
                (!department || rowDepartment === department) &&
                (!status || rowStatus === status);

            row.classList.toggle('hidden', !matches);
            if (matches) visible++;
        });

        document.getElementById('visibleCount').textContent = visible;
        document.getElementById('positionCount').textContent = visible + ' positions';
        document.getElementById('emptyPosition').classList.toggle('hidden', visible !== 0);
    }

    document.getElementById('searchPosition').addEventListener('input', filterPositions);
    document.getElementById('departmentFilter').addEventListener('change', filterPositions);
    document.getElementById('statusFilter').addEventListener('change', filterPositions);

    function resetPositionFilters() {
        document.getElementById('searchPosition').value = '';
        document.getElementById('departmentFilter').value = '';
        document.getElementById('statusFilter').value = '';
        filterPositions();
    }

    // ADD MODAL
    function openAddModal() {
        document.getElementById('positionForm').reset();
        document.getElementById('editId').value = '';
        document.getElementById('modalTitle').textContent = 'Add New Position';

        const modal = document.getElementById('positionModal');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }

    function closePositionModal() {
        const modal = document.getElementById('positionModal');
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }

    // VIEW POSITION
    function viewPosition(button) {
        const item = JSON.parse(button.dataset.position);

        document.getElementById('viewTitle').textContent = item.title;
        document.getElementById('viewMeta').textContent = item.id + ' · ' + item.location;
        document.getElementById('viewDepartment').textContent = item.department;
        document.getElementById('viewType').textContent = item.type;
        document.getElementById('viewLocation').textContent = item.location;
        document.getElementById('viewApplicants').textContent = item.applicants;
        document.getElementById('viewDescription').textContent = item.description;
        document.getElementById('viewRequirements').textContent = item.requirements;

        const modal = document.getElementById('viewModal');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }

    function closeViewModal() {
        const modal = document.getElementById('viewModal');
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }

    // EDIT POSITION
    function editPosition(button) {
        const item = JSON.parse(button.dataset.position);

        document.getElementById('editId').value = item.id;
        document.getElementById('jobTitle').value = item.title;
        document.getElementById('jobDepartment').value = item.department;
        document.getElementById('jobType').value = item.type;
        document.getElementById('jobLocation').value = item.location;
        document.getElementById('jobStatus').value = item.status;
        document.getElementById('jobDescription').value = item.description;
        document.getElementById('jobRequirements').value = item.requirements;

        document.getElementById('modalTitle').textContent = 'Edit Job Position';

        const modal = document.getElementById('positionModal');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }

    // DELETE POSITION
    function deletePosition(button) {
        if (!confirm('Are you sure you want to delete this position?')) return;

        button.closest('tr').remove();
        updatePositionStatistics();
        filterPositions();
    }

    // SAVE POSITION (FRONTEND DEMO)
    document.getElementById('positionForm').addEventListener('submit', function(event) {
        event.preventDefault();

        const editId = document.getElementById('editId').value;

        if (editId) {
            alert('Edit form berhasil divalidasi. Penyimpanan database akan dibuat pada tahap berikutnya.');
        } else {
            alert('Form berhasil divalidasi. Penyimpanan database akan dibuat pada tahap berikutnya.');
        }

        closePositionModal();
    });

    // STATISTICS BASED ON CURRENT TABLE
    function updatePositionStatistics() {
        const rows = document.querySelectorAll('.position-row');
        let active = 0;
        let draft = 0;
        let closed = 0;

        rows.forEach(row => {
            if (row.dataset.status === 'Active') active++;
            if (row.dataset.status === 'Draft') draft++;
            if (row.dataset.status === 'Closed') closed++;
        });

        document.getElementById('totalCount').textContent = rows.length;
        document.getElementById('activeCount').textContent = active;
        document.getElementById('draftCount').textContent = draft;
        document.getElementById('closedCount').textContent = closed;
    }

    // MODAL OUTSIDE CLICK
    ['positionModal', 'viewModal'].forEach(id => {
        document.getElementById(id).addEventListener('click', function(event) {
            if (event.target === this) {
                this.classList.add('hidden');
                this.classList.remove('flex');
            }
        });
    });

    // ESCAPE
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            closePositionModal();
            closeViewModal();
        }
    });
</script>

@endsection
