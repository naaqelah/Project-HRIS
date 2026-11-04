
@extends('layouts.app')

@section('title', 'CV Reviewer | TalentMatch AI')
@section('page-title', 'CV Reviewer')
@section('breadcrumb', 'Workspace / CV Reviewer')

@section('content')

<div class="space-y-5">

    <!-- HEADER -->

    <div class="flex flex-col sm:flex-row sm:items-center
                justify-between gap-4">

        <div>
            <div class="flex items-center gap-2">
                <h1 class="text-xl font-bold text-[#21172F]">
                    CV Reviewer
                </h1>

                <span class="px-2 py-1 rounded-full bg-[#F0E8FF]
                             text-[#8751E8] text-[9px] font-bold">
                    AI POWERED
                </span>
            </div>

            <p class="text-xs text-[#9589A4] mt-1">
                Analyze candidate CVs and discover the best talent for your team.
            </p>
        </div>

        <a href="#"
           class="inline-flex items-center justify-center gap-2
                  px-4 py-2.5 rounded-xl border border-[#ECE7F1]
                  bg-white text-[#766C80] text-xs font-semibold
                  hover:border-[#8751E8] hover:text-[#8751E8]
                  transition">

            <svg class="w-4 h-4" viewBox="0 0 24 24"
                 fill="none" stroke="currentColor" stroke-width="1.8">
                <path d="M3 12a9 9 0 1 0 3-6.7L3 8"/>
                <path d="M3 3v5h5"/>
                <path d="M12 7v5l3 2"/>
            </svg>

            Analysis History
        </a>

    </div>


    <!-- AI INTRODUCTION PANEL -->

    <section class="relative overflow-hidden rounded-2xl
                    bg-[#160E24] text-white">

        <div class="absolute -right-12 -top-20 w-64 h-64
                    rounded-full bg-[#8751E8] opacity-10 blur-3xl">
        </div>

        <div class="relative p-5 md:p-7 flex flex-col
                    md:flex-row md:items-center
                    justify-between gap-6">

            <div class="max-w-xl">

                <div class="flex items-center gap-2 mb-3">

                    <span class="w-2 h-2 bg-[#A77AF4] rounded-full"></span>

                    <span class="text-[10px] tracking-widest
                                 uppercase text-[#C4A7FF] font-semibold">
                        Intelligent Recruitment System
                    </span>

                </div>

                <h2 class="text-xl md:text-2xl font-bold leading-snug">
                    Find the Right Talent with
                    <span class="text-[#A77AF4]">AI-Powered</span>
                    CV Analysis
                </h2>

                <p class="text-xs text-[#B9AACD] mt-3 leading-relaxed">
                    Upload a candidate's CV and let AI evaluate their
                    qualifications, skills, and experience against your
                    job requirements.
                </p>

            </div>


            <div class="flex items-center gap-3 shrink-0">

                <div class="w-14 h-14 rounded-2xl
                            bg-[#2B1B40] border border-[#49365E]
                            flex items-center justify-center">

                    <svg class="w-7 h-7 text-[#B895FF]"
                         viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="1.5">

                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                        <path d="M14 2v6h6"/>
                        <path d="M8 13h8M8 17h5"/>
                        <path d="m16 14 1.5 1.5L20 13"/>

                    </svg>

                </div>

                <div>
                    <p class="text-xs font-semibold">
                        Smart CV Evaluation
                    </p>

                    <p class="text-[10px] text-[#B9AACD] mt-1">
                        Skills · Experience · Education
                    </p>
                </div>

            </div>

        </div>

    </section>


    <!-- ANALYSIS PROCESS -->

    <section class="grid grid-cols-1 sm:grid-cols-3 gap-3">

        @foreach([
            ['number'=>'01','title'=>'Upload CV','description'=>'Upload candidate CV document','icon'=>'file-up'],
            ['number'=>'02','title'=>'Select Position','description'=>'Choose the desired job position','icon'=>'briefcase-business'],
            ['number'=>'03','title'=>'AI Analysis','description'=>'Evaluate candidate compatibility','icon'=>'brain-circuit']
        ] as $step)

            <div class="bg-white border border-[#ECE7F1]
                        rounded-xl p-4 flex items-center gap-3">

                <div class="w-10 h-10 rounded-xl bg-[#F0E8FF]
                            text-[#8751E8] flex items-center
                            justify-center shrink-0">

                    @if($step['number'] === '01')
                        <svg class="w-5 h-5" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="1.8">
                            <path d="M12 16V4m-5 5 5-5 5 5"/>
                            <path d="M4 16v4h16v-4"/>
                        </svg>
                    @elseif($step['number'] === '02')
                        <svg class="w-5 h-5" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="1.8">
                            <rect x="3" y="7" width="18" height="14" rx="2"/>
                            <path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/>
                        </svg>
                    @else
                        <svg class="w-5 h-5" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="1.8">
                            <path d="M12 3v3m0 12v3M3 12h3m12 0h3"/>
                            <circle cx="12" cy="12" r="6"/>
                            <path d="m9 12 2 2 4-4"/>
                        </svg>
                    @endif

                </div>

                <div class="min-w-0">
                    <p class="text-xs font-bold text-[#21172F]">
                        {{ $step['number'] }}. {{ $step['title'] }}
                    </p>

                    <p class="text-[10px] text-[#9589A4] mt-1">
                        {{ $step['description'] }}
                    </p>
                </div>

            </div>

        @endforeach

    </section>


    <!-- MAIN WORKSPACE -->

    <div class="grid grid-cols-1 xl:grid-cols-[1.5fr_0.85fr] gap-5">


        <!-- LEFT: UPLOAD FORM -->

        <section class="bg-white rounded-2xl
                        border border-[#ECE7F1] overflow-hidden">

            <div class="px-5 py-4 border-b border-[#ECE7F1]">

                <h3 class="text-sm font-bold text-[#21172F]">
                    New CV Analysis
                </h3>

                <p class="text-[10px] text-[#9589A4] mt-1">
                    Complete the information below to start evaluating a candidate.
                </p>

            </div>


            <div class="p-5 space-y-5">

                <!-- JOB POSITION -->

                <div>

                    <label class="block text-xs font-semibold
                                  text-[#21172F] mb-2">
                        Select Job Position
                        <span class="text-red-500">*</span>
                    </label>

                    <select id="job-position"
                            class="w-full rounded-xl border border-[#ECE7F1]
                                   bg-white px-4 py-3 text-xs text-[#766C80]
                                   outline-none focus:border-[#8751E8]
                                   focus:ring-2 focus:ring-[#8751E8]/10">

                        <option value="">Choose a job position</option>
                        <option value="UI/UX Designer">UI/UX Designer</option>
                        <option value="Frontend Developer">Frontend Developer</option>
                        <option value="Backend Developer">Backend Developer</option>
                        <option value="Data Analyst">Data Analyst</option>
                        <option value="Product Manager">Product Manager</option>

                    </select>

                    <p class="text-[10px] text-[#9589A4] mt-2">
                        The selected position will be used as the comparison criteria.
                    </p>

                </div>


                <!-- UPLOAD CV -->

                <div>

                    <div class="flex items-center justify-between mb-2">

                        <label class="text-xs font-semibold text-[#21172F]">
                            Upload Candidate CV
                            <span class="text-red-500">*</span>
                        </label>

                        <span class="text-[10px] text-[#9589A4]">
                            Max. 10 MB
                        </span>

                    </div>


                    <label id="upload-area"
                           for="cv-file"
                           class="group flex flex-col items-center
                                  justify-center w-full min-h-[220px]
                                  border-2 border-dashed
                                  border-[#DCD2E8] rounded-2xl
                                  bg-[#FAF8FD] cursor-pointer
                                  hover:bg-[#F5F0FF]
                                  hover:border-[#8751E8]
                                  transition-all duration-200">

                        <div id="upload-placeholder"
                             class="flex flex-col items-center text-center p-5">

                            <div class="w-14 h-14 rounded-2xl
                                        bg-[#F0E8FF] text-[#8751E8]
                                        flex items-center justify-center
                                        mb-4 group-hover:scale-105
                                        transition-transform">

                                <svg class="w-7 h-7"
                                     viewBox="0 0 24 24"
                                     fill="none"
                                     stroke="currentColor"
                                     stroke-width="1.6">

                                    <path d="M12 16V4m-5 5 5-5 5 5"/>
                                    <path d="M4 16v4h16v-4"/>

                                </svg>

                            </div>

                            <p class="text-sm font-bold text-[#21172F]">
                                Drop your CV here or
                                <span class="text-[#8751E8]">
                                    browse files
                                </span>
                            </p>

                            <p class="text-[10px] text-[#9589A4] mt-2">
                                Supported formats: PDF, DOC, DOCX
                            </p>

                            <p class="text-[10px] text-[#B1A5BE] mt-1">
                                Maximum file size 10 MB
                            </p>

                        </div>


                        <!-- SELECTED FILE -->

                        <div id="selected-file"
                             class="hidden w-full p-5">

                            <div class="flex items-center gap-3
                                        bg-white border border-[#ECE7F1]
                                        rounded-xl p-4">

                                <div class="w-11 h-11 rounded-xl
                                            bg-[#F0E8FF] text-[#8751E8]
                                            flex items-center justify-center">

                                    <svg class="w-5 h-5"
                                         viewBox="0 0 24 24"
                                         fill="none"
                                         stroke="currentColor"
                                         stroke-width="1.8">

                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                                        <path d="M14 2v6h6"/>

                                    </svg>

                                </div>

                                <div class="flex-1 min-w-0">

                                    <p id="file-name"
                                       class="text-xs font-bold text-[#21172F] truncate">
                                    </p>

                                    <p id="file-size"
                                       class="text-[10px] text-[#9589A4] mt-1">
                                    </p>

                                    <p class="text-[10px] text-[#16A36A] mt-1">
                                        File ready to upload
                                    </p>

                                </div>

                                <button type="button"
                                        id="remove-file"
                                        class="w-8 h-8 rounded-lg
                                               hover:bg-red-50
                                               text-[#9589A4]
                                               hover:text-red-500
                                               flex items-center justify-center">

                                    <svg class="w-4 h-4"
                                         viewBox="0 0 24 24"
                                         fill="none"
                                         stroke="currentColor"
                                         stroke-width="2">
                                        <path d="m18 6-12 12M6 6l12 12"/>
                                    </svg>

                                </button>

                            </div>

                        </div>

                        <input type="file"
                               id="cv-file"
                               accept=".pdf,.doc,.docx"
                               class="hidden">

                    </label>

                    <p id="upload-error"
                       class="hidden text-[10px] text-red-500 mt-2">
                    </p>

                </div>


                <!-- OPTIONAL NOTES -->

                <div>

                    <label class="block text-xs font-semibold
                                  text-[#21172F] mb-2">
                        Additional Notes
                        <span class="text-[#9589A4] font-normal">
                            (Optional)
                        </span>
                    </label>

                    <textarea id="additional-notes"
                              rows="3"
                              placeholder="Add additional context or specific requirements for this candidate..."
                              class="w-full rounded-xl border border-[#ECE7F1]
                                     bg-white px-4 py-3 text-xs
                                     text-[#766C80] outline-none
                                     resize-none focus:border-[#8751E8]
                                     focus:ring-2 focus:ring-[#8751E8]/10"></textarea>

                </div>


                <!-- FORM ERROR -->

                <p id="form-error"
                   class="hidden text-xs text-red-500">
                </p>


                <!-- SUBMIT -->

                <div class="pt-4 border-t border-[#ECE7F1]">

                    <button type="button"
                            id="analyze-button"
                            class="w-full flex items-center
                                   justify-center gap-2
                                   bg-[#8751E8] hover:bg-[#7540D5]
                                   text-white rounded-xl
                                   py-3.5 text-xs font-bold
                                   transition-all duration-200
                                   hover:shadow-lg hover:shadow-purple-200">

                        <svg class="w-4 h-4" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor"
                             stroke-width="1.8">

                            <path d="M12 3v3m0 12v3M3 12h3m12 0h3"/>
                            <circle cx="12" cy="12" r="6"/>
                            <path d="m9 12 2 2 4-4"/>

                        </svg>

                        Analyze CV with AI

                    </button>

                    <p class="text-center text-[10px]
                              text-[#A99BB9] mt-3">
                        Your candidate documents are handled securely.
                    </p>

                </div>

            </div>

        </section>


        <!-- RIGHT: POSITION REQUIREMENTS -->

        <div class="space-y-5">


            <!-- JOB REQUIREMENTS -->

            <section class="bg-white rounded-2xl
                            border border-[#ECE7F1] overflow-hidden">

                <div class="p-4 border-b border-[#ECE7F1]">

                    <div class="flex items-center justify-between">

                        <h3 class="text-xs font-bold text-[#21172F]">
                            Position Requirements
                        </h3>

                        <span class="text-[9px] px-2 py-1
                                     bg-[#F0E8FF] text-[#8751E8]
                                     rounded-full font-semibold">
                            JOB CRITERIA
                        </span>

                    </div>

                    <p class="text-[10px] text-[#9589A4] mt-1">
                        Requirements will follow the selected position.
                    </p>

                </div>


                <div id="requirements-content" class="p-4">

                    <div class="flex flex-col items-center
                                text-center py-7">

                        <div class="w-12 h-12 rounded-2xl
                                    bg-[#F0E8FF] text-[#8751E8]
                                    flex items-center justify-center">

                            <svg class="w-6 h-6"
                                 viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor"
                                 stroke-width="1.7">

                                <rect x="3" y="7" width="18" height="14" rx="2"/>
                                <path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/>

                            </svg>

                        </div>

                        <p class="text-xs font-semibold
                                  text-[#21172F] mt-3">
                            No Position Selected
                        </p>

                        <p class="text-[10px] text-[#9589A4]
                                  max-w-[220px] mt-1 leading-relaxed">
                            Select a job position to view its requirements and evaluation criteria.
                        </p>

                    </div>

                </div>

            </section>


            <!-- HOW IT WORKS -->

            <section class="bg-[#160E24] rounded-2xl
                            p-5 text-white">

                <div class="flex items-center gap-2 mb-4">

                    <div class="w-8 h-8 rounded-lg
                                bg-[#38244F] text-[#C4A7FF]
                                flex items-center justify-center">

                        <svg class="w-4 h-4" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor"
                             stroke-width="1.8">

                            <path d="M12 3v3m0 12v3M3 12h3m12 0h3"/>
                            <circle cx="12" cy="12" r="6"/>

                        </svg>

                    </div>

                    <h3 class="text-xs font-bold">
                        How AI Review Works
                    </h3>

                </div>


                <div class="space-y-4">

                    <div class="flex gap-3">

                        <span class="w-6 h-6 rounded-full
                                     bg-[#8751E8] text-white
                                     flex items-center justify-center
                                     text-[10px] font-bold shrink-0">
                            1
                        </span>

                        <div>
                            <p class="text-[11px] font-semibold">
                                CV Extraction
                            </p>

                            <p class="text-[10px] text-[#B9AACD] mt-1">
                                Extract candidate information and qualifications.
                            </p>
                        </div>

                    </div>


                    <div class="flex gap-3">

                        <span class="w-6 h-6 rounded-full
                                     bg-[#8751E8] text-white
                                     flex items-center justify-center
                                     text-[10px] font-bold shrink-0">
                            2
                        </span>

                        <div>
                            <p class="text-[11px] font-semibold">
                                Skills Evaluation
                            </p>

                            <p class="text-[10px] text-[#B9AACD] mt-1">
                                Compare candidate skills with job requirements.
                            </p>
                        </div>

                    </div>


                    <div class="flex gap-3">

                        <span class="w-6 h-6 rounded-full
                                     bg-[#8751E8] text-white
                                     flex items-center justify-center
                                     text-[10px] font-bold shrink-0">
                            3
                        </span>

                        <div>
                            <p class="text-[11px] font-semibold">
                                Match Score
                            </p>

                            <p class="text-[10px] text-[#B9AACD] mt-1">
                                Generate compatibility score and evaluation insights.
                            </p>
                        </div>

                    </div>

                </div>

            </section>


            <!-- SUPPORTED FILES -->

            <section class="bg-white rounded-2xl
                            border border-[#ECE7F1] p-4">

                <h3 class="text-xs font-bold text-[#21172F] mb-3">
                    Supported Documents
                </h3>

                <div class="flex items-center gap-3">

                    <div class="w-10 h-10 rounded-lg
                                bg-red-50 text-red-500
                                flex items-center justify-center
                                text-xs font-bold">
                        PDF
                    </div>

                    <div class="flex-1">
                        <p class="text-xs font-semibold text-[#21172F]">
                            PDF Document
                        </p>
                        <p class="text-[10px] text-[#9589A4]">
                            Recommended format
                        </p>
                    </div>

                    <span class="text-[10px] text-[#16A36A]">
                        Supported
                    </span>

                </div>

                <div class="flex items-center gap-3 mt-3">

                    <div class="w-10 h-10 rounded-lg
                                bg-blue-50 text-blue-500
                                flex items-center justify-center
                                text-xs font-bold">
                        DOC
                    </div>

                    <div class="flex-1">
                        <p class="text-xs font-semibold text-[#21172F]">
                            Word Document
                        </p>
                        <p class="text-[10px] text-[#9589A4]">
                            DOC and DOCX
                        </p>
                    </div>

                    <span class="text-[10px] text-[#16A36A]">
                        Supported
                    </span>

                </div>

            </section>

        </div>

    </div>


    <!-- DEMO NOTICE -->

    <div class="bg-[#F0E8FF] border border-[#E4D6FF]
                rounded-xl p-4 flex gap-3">

        <svg class="w-5 h-5 text-[#8751E8] shrink-0"
             viewBox="0 0 24 24" fill="none"
             stroke="currentColor" stroke-width="1.8">

            <circle cx="12" cy="12" r="9"/>
            <path d="M12 11v5m0-8h.01"/>

        </svg>

        <div>
            <p class="text-xs font-bold text-[#60418D]">
                Development Preview
            </p>

            <p class="text-[10px] text-[#766C80] mt-1 leading-relaxed">
                This page currently provides the CV upload interface and
                position selection preview. AI processing, document extraction,
                and database storage will be implemented in the next development stage.
            </p>
        </div>

    </div>

</div>


<!-- ====================================== -->
<!-- JAVASCRIPT -->
<!-- ====================================== -->

<script>

document.addEventListener('DOMContentLoaded', function () {

    const fileInput = document.getElementById('cv-file');
    const uploadArea = document.getElementById('upload-area');
    const placeholder = document.getElementById('upload-placeholder');
    const selectedFile = document.getElementById('selected-file');
    const fileName = document.getElementById('file-name');
    const fileSize = document.getElementById('file-size');
    const uploadError = document.getElementById('upload-error');
    const removeButton = document.getElementById('remove-file');
    const jobPosition = document.getElementById('job-position');
    const requirementsContent = document.getElementById('requirements-content');
    const analyzeButton = document.getElementById('analyze-button');
    const formError = document.getElementById('form-error');

    let currentFile = null;


    // POSITION REQUIREMENTS

    const requirements = {

        'UI/UX Designer': {
            department: 'Design',
            experience: '2+ Years',
            education: 'Design / Informatics',
            skills: ['Figma', 'UI Design', 'UX Research', 'Prototyping'],
            description: 'Design intuitive and user-friendly digital experiences.'
        },

        'Frontend Developer': {
            department: 'Engineering',
            experience: '2+ Years',
            education: 'Computer Science',
            skills: ['HTML', 'CSS', 'JavaScript', 'React'],
            description: 'Develop responsive and interactive web interfaces.'
        },

        'Backend Developer': {
            department: 'Engineering',
            experience: '2+ Years',
            education: 'Computer Science',
            skills: ['PHP', 'Laravel', 'MySQL', 'REST API'],
            description: 'Build and maintain scalable backend applications.'
        },

        'Data Analyst': {
            department: 'Data',
            experience: '2+ Years',
            education: 'Statistics / Informatics',
            skills: ['SQL', 'Python', 'Excel', 'Power BI'],
            description: 'Analyze data and deliver actionable business insights.'
        },

        'Product Manager': {
            department: 'Product',
            experience: '3+ Years',
            education: 'Business / Informatics',
            skills: ['Product Strategy', 'Agile', 'Analytics', 'Communication'],
            description: 'Manage product strategy and cross-functional delivery.'
        }

    };


    jobPosition.addEventListener('change', function () {

        const selected = requirements[this.value];

        if (!selected) {

            requirementsContent.innerHTML = `
                <div class="text-center py-7">
                    <p class="text-xs font-semibold text-[#21172F]">
                        No Position Selected
                    </p>
                    <p class="text-[10px] text-[#9589A4] mt-2">
                        Select a position to see its requirements.
                    </p>
                </div>
            `;

            return;
        }


        requirementsContent.innerHTML = `

            <div class="space-y-4">

                <div>
                    <span class="text-[9px] font-semibold
                                 uppercase tracking-wider
                                 text-[#9589A4]">
                        Department
                    </span>

                    <p class="text-sm font-bold text-[#21172F] mt-1">
                        ${selected.department}
                    </p>
                </div>

                <div>
                    <span class="text-[9px] font-semibold
                                 uppercase tracking-wider
                                 text-[#9589A4]">
                        Required Experience
                    </span>

                    <p class="text-xs font-semibold text-[#21172F] mt-1">
                        ${selected.experience}
                    </p>
                </div>

                <div>
                    <span class="text-[9px] font-semibold
                                 uppercase tracking-wider
                                 text-[#9589A4]">
                        Education
                    </span>

                    <p class="text-xs font-semibold text-[#21172F] mt-1">
                        ${selected.education}
                    </p>
                </div>

                <div>
                    <span class="text-[9px] font-semibold
                                 uppercase tracking-wider
                                 text-[#9589A4]">
                        Required Skills
                    </span>

                    <div class="flex flex-wrap gap-2 mt-2">

                        ${selected.skills.map(skill => `
                            <span class="px-2.5 py-1.5
                                         rounded-lg bg-[#F0E8FF]
                                         text-[#8751E8]
                                         text-[10px] font-semibold">
                                ${skill}
                            </span>
                        `).join('')}

                    </div>
                </div>

                <div class="p-3 bg-[#FAF9FC] rounded-xl">

                    <p class="text-[10px] text-[#9589A4] leading-relaxed">
                        ${selected.description}
                    </p>

                </div>

            </div>

        `;

    });


    // FILE VALIDATION

    function handleFile(file) {

        uploadError.classList.add('hidden');

        if (!file) return;

        const allowedTypes = [
            'application/pdf',
            'application/msword',
            'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
        ];

        const extension = file.name.split('.').pop().toLowerCase();

        if (!['pdf', 'doc', 'docx'].includes(extension)) {

            showFileError('Only PDF, DOC, and DOCX files are allowed.');

            return;
        }

        if (file.size > 10 * 1024 * 1024) {

            showFileError('File size must not exceed 10 MB.');

            return;
        }

        currentFile = file;

        fileName.textContent = file.name;

        fileSize.textContent = formatFileSize(file.size);

        placeholder.classList.add('hidden');

        selectedFile.classList.remove('hidden');

        formError.classList.add('hidden');

    }


    function showFileError(message) {

        currentFile = null;

        fileInput.value = '';

        uploadError.textContent = message;

        uploadError.classList.remove('hidden');

        placeholder.classList.remove('hidden');

        selectedFile.classList.add('hidden');

    }


    function formatFileSize(bytes) {

        return (bytes / (1024 * 1024)).toFixed(2) + ' MB';

    }


    // SELECT FILE

    fileInput.addEventListener('change', function () {

        handleFile(this.files[0]);

    });


    // REMOVE FILE

    removeButton.addEventListener('click', function (event) {

        event.preventDefault();

        event.stopPropagation();

        currentFile = null;

        fileInput.value = '';

        placeholder.classList.remove('hidden');

        selectedFile.classList.add('hidden');

        uploadError.classList.add('hidden');

    });


    // DRAG AND DROP

    ['dragenter', 'dragover'].forEach(eventName => {

        uploadArea.addEventListener(eventName, event => {

            event.preventDefault();

            uploadArea.classList.add('border-[#8751E8]', 'bg-[#F5F0FF]');

        });

    });


    ['dragleave', 'drop'].forEach(eventName => {

        uploadArea.addEventListener(eventName, event => {

            event.preventDefault();

            uploadArea.classList.remove('border-[#8751E8]', 'bg-[#F5F0FF]');

        });

    });


    uploadArea.addEventListener('drop', event => {

        const files = event.dataTransfer.files;

        if (files.length) {

            handleFile(files[0]);

        }

    });


    // ANALYZE BUTTON - UI PREVIEW ONLY

    analyzeButton.addEventListener('click', function () {

        formError.classList.add('hidden');

        if (!jobPosition.value) {

            formError.textContent = 'Please select a job position first.';

            formError.classList.remove('hidden');

            jobPosition.focus();

            return;

        }

        if (!currentFile) {

            formError.textContent = 'Please upload a candidate CV first.';

            formError.classList.remove('hidden');

            uploadArea.scrollIntoView({
                behavior: 'smooth',
                block: 'center'
            });

            return;

        }

        alert(
            'CV and job position are ready!\\n\\n' +
            'Position: ' + jobPosition.value + '\\n' +
            'File: ' + currentFile.name + '\\n\\n' +
            'AI processing will be connected in the next development stage.'
        );

    });

});

</script>

@endsection
