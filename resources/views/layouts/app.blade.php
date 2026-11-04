
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'TalentMatch AI')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        :root {
            --sidebar-dark: #160E24;
            --sidebar-hover: #281B38;
            --primary: #8751E8;
            --primary-light: #F0E8FF;
            --text-main: #21172F;
            --text-muted: #9589A4;
            --border: #ECE7F1;
            --page-bg: #F7F5FA;
            --ease: cubic-bezier(.22, 1, .36, 1);
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: var(--page-bg);
            color: var(--text-main);
            font-family: 'Instrument Sans', Inter, system-ui, sans-serif;
            -webkit-font-smoothing: antialiased;
        }

        /* SIDEBAR */

        #sidebar-shell {
            position: fixed;
            inset: 0 auto 0 0;
            width: 260px;
            height: 100vh;
            height: 100dvh;
            z-index: 50;
            overflow: hidden;
            background: white;
            transition: width 380ms var(--ease);
        }

        #sidebar-shell.collapsed {
            width: 68px;
        }

        .sidebar-layer {
            position: absolute;
            inset: 0;
            height: 100%;
            transition:
                opacity 220ms ease,
                transform 380ms var(--ease),
                visibility 0s linear 220ms;
        }

        .sidebar-expanded {
            width: 260px;
            background: var(--sidebar-dark);
            color: white;
            opacity: 1;
            visibility: visible;
            transform: translateX(0);
            pointer-events: auto;
        }

        .sidebar-collapsed {
            width: 68px;
            background: white;
            border-right: 1px solid var(--border);
            opacity: 0;
            visibility: hidden;
            transform: translateX(-6px);
            pointer-events: none;
        }

        #sidebar-shell.collapsed .sidebar-expanded {
            opacity: 0;
            visibility: hidden;
            transform: translateX(-6px);
            pointer-events: none;
        }

        #sidebar-shell.collapsed .sidebar-collapsed {
            opacity: 1;
            visibility: visible;
            transform: translateX(0);
            pointer-events: auto;
            transition:
                opacity 250ms ease 100ms,
                transform 380ms var(--ease),
                visibility 0s linear 0s;
        }

        /* MAIN CONTENT */

        #main-content {
            margin-left: 260px;
            min-height: 100vh;
            min-width: 0;
            transition: margin-left 380ms var(--ease);
        }

        #sidebar-shell.collapsed ~ #main-content {
            margin-left: 68px;
        }

        /* LOGO */

        .logo-box {
            width: 42px;
            height: 42px;
            flex-shrink: 0;
            border-radius: 13px;
            background: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: 800;
            color: white;
            box-shadow: 0 5px 15px rgba(135,81,232,.22);
        }

        /* MENU */

        .sidebar-link {
            display: flex;
            align-items: center;
            gap: 11px;
            width: 100%;
            min-height: 38px;
            padding: 8px 11px;
            border-radius: 11px;
            color: #D0C5DC;
            font-size: 13px;
            font-weight: 550;
            text-decoration: none;
            transition:
                background 180ms ease,
                color 180ms ease,
                transform 180ms ease;
        }

        .sidebar-link:hover {
            background: var(--sidebar-hover);
            color: white;
        }

        .sidebar-link.active {
            background: var(--primary);
            color: white;
            box-shadow: 0 4px 12px rgba(135,81,232,.18);
        }

        .sidebar-link svg {
            width: 20px;
            height: 20px;
            flex-shrink: 0;
        }

        .menu-label {
            color: #9585A8;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 1.4px;
            padding: 0 11px;
            margin-bottom: 7px;
        }

        .sidebar-divider {
            height: 1px;
            background: #382A47;
            margin: 9px 0;
            flex-shrink: 0;
        }

        /* SUBMENU */

        .submenu {
            display: grid;
            grid-template-rows: 1fr;
            opacity: 1;
            transition:
                grid-template-rows 250ms ease,
                opacity 200ms ease;
        }

        .submenu-inner {
            overflow: hidden;
            min-height: 0;
        }

        .submenu.closed {
            grid-template-rows: 0fr;
            opacity: 0;
        }

        .submenu-link {
            display: block;
            color: #B9AACD;
            font-size: 12px;
            padding: 8px 11px;
            border-radius: 8px;
            transition: .2s ease;
            text-decoration: none;
        }

        .submenu-link:hover {
            color: white;
            background: var(--sidebar-hover);
        }

        .submenu-link.active {
            color: white;
            background: var(--primary);
            font-weight: 600;
        }

        .chevron {
            transition: transform 250ms ease;
        }

        .chevron.rotated {
            transform: rotate(180deg);
        }

        /* COLLAPSED ICON RAIL */

        .rail-icon {
            width: 42px;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            color: #766C80;
            transition: background 180ms ease, color 180ms ease;
        }

        .rail-icon:hover {
            background: var(--primary-light);
            color: var(--primary);
        }

        .rail-icon.active {
            background: var(--sidebar-dark);
            color: white;
        }

        .rail-icon svg {
            width: 21px;
            height: 21px;
        }

        /* NAVBAR */

        .top-navbar {
            height: 66px;
            background: white;
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 26px;
        }

        /* PROFILE */

        .profile-avatar {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: #EDE3FF;
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 11px;
            font-weight: 750;
            flex-shrink: 0;
        }

        /* SIDEBAR HEIGHT ADJUSTMENT */

        @media (max-height: 850px) {
            .sidebar-expanded {
                padding-top: 12px !important;
                padding-bottom: 10px !important;
            }

            .sidebar-logo {
                margin-bottom: 12px !important;
            }

            .sidebar-search {
                margin-bottom: 12px !important;
            }

            .sidebar-link {
                min-height: 36px;
                padding-top: 7px;
                padding-bottom: 7px;
            }

            .sidebar-divider {
                margin-top: 7px;
                margin-bottom: 7px;
            }
        }

        @media (max-height: 650px) {
            .sidebar-link {
                min-height: 32px;
                padding-top: 5px;
                padding-bottom: 5px;
            }

            .sidebar-divider {
                margin-top: 4px;
                margin-bottom: 4px;
            }

            .submenu-link {
                padding-top: 5px;
                padding-bottom: 5px;
            }
        }

        /* MOBILE */

        @media (max-width: 640px) {
            #sidebar-shell {
                width: 68px;
            }

            #sidebar-shell .sidebar-expanded {
                opacity: 0;
                visibility: hidden;
                pointer-events: none;
            }

            #sidebar-shell .sidebar-collapsed {
                opacity: 1;
                visibility: visible;
                pointer-events: auto;
                transform: none;
            }

            #main-content {
                margin-left: 68px;
            }

            .top-navbar {
                padding: 0 14px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            #sidebar-shell,
            #main-content,
            .sidebar-layer,
            .sidebar-link,
            .submenu {
                transition: none !important;
            }
        }
    </style>
</head>

<body>

@php
    $isCvActive = request()->routeIs('cv-reviewer.*');

    $activeClass = 'active';

    $hasRoute = fn($name) => \Illuminate\Support\Facades\Route::has($name);

    $routeUrl = fn($name) => $hasRoute($name) ? route($name) : '#';
@endphp


{{-- ========================================= --}}
{{-- SIDEBAR --}}
{{-- ========================================= --}}

<aside id="sidebar-shell">

    {{-- EXPANDED SIDEBAR --}}

    <div class="sidebar-layer sidebar-expanded flex flex-col px-3 py-3">

        {{-- LOGO --}}

        <div class="sidebar-logo flex items-center gap-3 px-1 mb-4 shrink-0">

            <div class="logo-box">T</div>

            <div class="flex-1 min-w-0">
                <h1 class="text-[15px] font-bold tracking-tight">
                    TalentMatch AI
                </h1>

                <p class="text-[11px] text-[#A99BB9] mt-0.5">
                    Recruitment Workspace
                </p>
            </div>

            <button onclick="toggleSidebar()"
                    aria-label="Collapse sidebar"
                    class="p-1 text-[#B9AACD] hover:text-white">

                <svg class="w-5 h-5" viewBox="0 0 24 24"
                     fill="none" stroke="currentColor" stroke-width="2">
                    <path d="m15 18-6-6 6-6"/>
                    <path d="m21 18-6-6 6-6"/>
                </svg>

            </button>

        </div>


        {{-- SEARCH --}}

        <div class="sidebar-search flex items-center gap-3 px-3 h-9
                    rounded-xl bg-[#241A30] mb-4 shrink-0">

            <svg class="w-4 h-4 text-[#B9AACD] shrink-0"
                 viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="1.8">
                <circle cx="11" cy="11" r="7"/>
                <path d="m20 20-4-4"/>
            </svg>

            <input type="text"
                   placeholder="Search menu..."
                   class="w-full min-w-0 bg-transparent outline-none
                          text-xs text-white placeholder-[#A99BB9]">

            <span class="text-[10px] text-[#A99BB9]">⌘ K</span>
        </div>


        {{-- MENU AREA --}}

        <div class="flex-1 min-h-0">

            <p class="menu-label sidebar-label">
                MAIN MENU
            </p>

            <nav class="space-y-1">

                {{-- DASHBOARD --}}

                <a href="{{ route('dashboard') }}"
                   class="sidebar-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">

                    <svg viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="1.8">
                        <rect x="3" y="3" width="7" height="7" rx="1"/>
                        <rect x="14" y="3" width="7" height="7" rx="1"/>
                        <rect x="3" y="14" width="7" height="7" rx="1"/>
                        <rect x="14" y="14" width="7" height="7" rx="1"/>
                    </svg>

                    <span class="sidebar-label">Dashboard</span>
                </a>


                {{-- CV REVIEWER --}}

                <div>

                    <button type="button"
                            onclick="toggleCvMenu()"
                            class="sidebar-link justify-between w-full
                                   {{ $isCvActive ? 'text-white' : '' }}">

                        <span class="flex items-center gap-3">

                            <svg viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="1.8">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                                <path d="M14 2v6h6"/>
                                <path d="M8 13h8M8 17h5"/>
                            </svg>

                            <span class="sidebar-label">CV Reviewer</span>

                        </span>

                        <svg id="cv-chevron"
                             class="w-4 h-4 chevron shrink-0 {{ $isCvActive ? 'rotated' : '' }}"
                             viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2">
                            <path d="m6 9 6 6 6-6"/>
                        </svg>

                    </button>


                    {{-- CV SUBMENU --}}

                    <div id="cv-submenu"
                         class="submenu {{ $isCvActive ? '' : 'closed' }}">

                        <div class="submenu-inner">

                            <div class="ml-8 pl-4 mt-1 border-l border-[#49365E] space-y-1">

                                <a href="{{ route('cv-reviewer.new-analysis') }}"
                                   class="submenu-link {{ request()->routeIs('cv-reviewer.new-analysis') ? 'active' : '' }}">
                                    New Analysis
                                </a>

                                <a href="{{ route('cv-reviewer.history') }}"
                                   class="submenu-link {{ request()->routeIs('cv-reviewer.history') ? 'active' : '' }}">
                                    Analysis History
                                </a>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- JOB POSITIONS --}}

                <a href="{{ $routeUrl('job-positions.index') }}"
                   class="sidebar-link {{ request()->routeIs('job-positions.*') ? 'active' : '' }}">

                    <svg viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="1.8">
                        <rect x="3" y="7" width="18" height="14" rx="2"/>
                        <path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/>
                        <path d="M3 12h18"/>
                    </svg>

                    <span class="sidebar-label">Job Positions</span>
                </a>


                {{-- CANDIDATES --}}

                <a href="{{ $routeUrl('candidates.index') }}"
                   class="sidebar-link {{ request()->routeIs('candidates.*') ? 'active' : '' }}">

                    <svg viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="1.8">
                        <circle cx="12" cy="8" r="4"/>
                        <path d="M5 21v-2a7 7 0 0 1 14 0v2"/>
                    </svg>

                    <span class="sidebar-label">Candidates</span>
                </a>


                {{-- REPORTS --}}

                <a href="{{ $routeUrl('reports.index') }}"
                   class="sidebar-link {{ request()->routeIs('reports.*') ? 'active' : '' }}">

                    <svg viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="1.8">
                        <path d="M3 3v18h18"/>
                        <path d="m7 14 4-4 4 3 6-7"/>
                    </svg>

                    <span class="sidebar-label">Reports</span>
                </a>

            </nav>


            {{-- WORKSPACE --}}

            <div class="sidebar-divider"></div>

            <p class="menu-label sidebar-label">
                WORKSPACE
            </p>

            <nav class="space-y-1">

                {{-- SHORTLISTED --}}



<a href="{{ route('shortlisted.index') }}"
   class="flex w-full items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium transition-all duration-200 select-none
   {{ request()->routeIs('shortlisted.*')
       ? 'bg-[#8751E8] text-white'
       : 'text-[#D4C8E0] hover:bg-[#281B38]' }}">

    <i class="fa-solid fa-user-check w-5 text-center"></i>

    <span>Shortlisted</span>
</a>



                {{-- SETTINGS --}}

                <a href="{{ $routeUrl('settings.index') }}"
                   class="sidebar-link {{ request()->routeIs('settings.*') ? 'active' : '' }}">

                    <svg viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="1.8">
                        <circle cx="12" cy="12" r="3"/>
                        <path d="M19.4 15l.1.1 1.4 1.1-1.4 2.4-1.7-.6a8 8 0 0 1-1.6.9l-.3 1.8h-2.8l-.3-1.8a8 8 0 0 1-1.6-.9l-1.7.6-1.4-2.4 1.4-1.1a8 8 0 0 1 0-1.8l-1.4-1.1 1.4-2.4 1.7.6a8 8 0 0 1 1.6-.9l.3-1.8h2.8l.3 1.8a8 8 0 0 1 1.6.9l1.7-.6 1.4 2.4-1.4 1.1a8 8 0 0 1 0 1.8z"/>
                    </svg>

                    <span class="sidebar-label">Settings</span>
                </a>

            </nav>

        </div>


        {{-- PROFILE BOTTOM --}}

        <div class="mt-auto pt-3 shrink-0 border-t border-[#382A47]">

            <div class="flex items-center gap-3">

                <div class="w-9 h-9 rounded-full bg-[#7254A3]
                            flex items-center justify-center
                            text-xs font-bold shrink-0">
                    HR
                </div>

                <div class="flex-1 min-w-0">

                    <p class="text-xs font-semibold text-white truncate">
                        HR Administrator
                    </p>

                    <p class="text-[10px] text-[#A99BB9] mt-0.5">
                        Administrator
                    </p>

                </div>

                <button class="text-[#B9AACD] hover:text-white">
                    •••
                </button>

            </div>

        </div>

    </div>


    {{-- ========================================= --}}
    {{-- COLLAPSED WHITE RAIL --}}
    {{-- ========================================= --}}

    <div class="sidebar-layer sidebar-collapsed
                flex flex-col items-center py-3">

        {{-- LOGO --}}

        <button onclick="toggleSidebar()"
                title="Expand sidebar"
                class="w-10 h-10 flex items-center justify-center mb-4">

            <span class="text-3xl font-extrabold text-[#8751E8]">
                T
            </span>

        </button>

        <div class="w-9 border-t border-[#ECE7F1] mb-4"></div>


        {{-- ICON NAVIGATION --}}

        <nav class="flex flex-col items-center gap-2">


            {{-- DASHBOARD --}}

            <a href="{{ route('dashboard') }}"
               title="Dashboard"
               class="rail-icon {{ request()->routeIs('dashboard') ? 'active' : '' }}">

                <svg viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="1.8">
                    <rect x="3" y="3" width="7" height="7" rx="1"/>
                    <rect x="14" y="3" width="7" height="7" rx="1"/>
                    <rect x="3" y="14" width="7" height="7" rx="1"/>
                    <rect x="14" y="14" width="7" height="7" rx="1"/>
                </svg>
            </a>


            {{-- CV REVIEWER --}}

            <a href="{{ route('cv-reviewer.new-analysis') }}"
               title="CV Reviewer"
               class="rail-icon {{ $isCvActive ? 'active' : '' }}">

                <svg viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="1.8">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                    <path d="M14 2v6h6"/>
                    <path d="M8 13h8M8 17h5"/>
                </svg>
            </a>


            {{-- JOB POSITIONS --}}

            <a href="{{ $routeUrl('job-positions.index') }}"
               title="Job Positions"
               class="rail-icon {{ request()->routeIs('job-positions.*') ? 'active' : '' }}">

                <svg viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="1.8">
                    <rect x="3" y="7" width="18" height="14" rx="2"/>
                    <path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/>
                    <path d="M3 12h18"/>
                </svg>
            </a>


            {{-- CANDIDATES --}}

            <a href="{{ $routeUrl('candidates.index') }}"
               title="Candidates"
               class="rail-icon {{ request()->routeIs('candidates.*') ? 'active' : '' }}">

                <svg viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="1.8">
                    <circle cx="12" cy="8" r="4"/>
                    <path d="M5 21v-2a7 7 0 0 1 14 0v2"/>
                </svg>
            </a>


            {{-- REPORTS --}}

            <a href="{{ $routeUrl('reports.index') }}"
               title="Reports"
               class="rail-icon {{ request()->routeIs('reports.*') ? 'active' : '' }}">

                <svg viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="1.8">
                    <path d="M3 3v18h18"/>
                    <path d="m7 14 4-4 4 3 6-7"/>
                </svg>
            </a>


            {{-- SHORTLISTED --}}

            <a href="{{ $routeUrl('shortlisted.index') }}"
               title="Shortlisted"
               class="rail-icon {{ request()->routeIs('shortlisted.*') ? 'active' : '' }}">

                <svg viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="1.8">
                    <path d="m12 3 2.8 5.7 6.2.9-4.5 4.4 1.1 6.2L12 17.3l-5.6 2.9 1.1-6.2L3 9.6l6.2-.9L12 3z"/>
                </svg>
            </a>

        </nav>


        {{-- BOTTOM ICONS --}}

        <div class="mt-auto flex flex-col items-center gap-2">

            {{-- SETTINGS --}}

            <a href="{{ $routeUrl('settings.index') }}"
               title="Settings"
               class="rail-icon {{ request()->routeIs('settings.*') ? 'active' : '' }}">

                <svg viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="1.8">
                    <circle cx="12" cy="12" r="3"/>
                    <path d="M19 13a7 7 0 0 0 0-2l2-1.5-2-3.5-2.3 1a7 7 0 0 0-2-1.2L14.3 3h-4.6l-.4 2.8a7 7 0 0 0-2 1.2l-2.3-1-2 3.5L5 11a7 7 0 0 0 0 2l-2 1.5 2 3.5 2.3-1a7 7 0 0 0 2 1.2l.4 2.8h4.6l.4-2.8a7 7 0 0 0 2-1.2l2.3 1 2-3.5z"/>
                </svg>
            </a>


            {{-- LOGOUT --}}

            <a href="#"
               title="Logout"
               class="rail-icon">

                <svg viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="1.8">
                    <path d="M10 17l5-5-5-5M15 12H3"/>
                    <path d="M12 3h6a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-6"/>
                </svg>
            </a>

        </div>

    </div>

</aside>


{{-- ========================================= --}}
{{-- MAIN CONTENT --}}
{{-- ========================================= --}}

<main id="main-content">


    {{-- TOP NAVBAR --}}

    <header class="top-navbar">

        <div class="min-w-0">

            <p class="text-[11px] text-[#9589A4]">
                @yield('breadcrumb', 'Workspace / Dashboard')
            </p>

            <h2 class="text-base font-bold mt-1">
                @yield('page-title', 'Overview')
            </h2>

        </div>


        <div class="flex items-center gap-4">

            {{-- NOTIFICATION --}}

            <button class="relative w-9 h-9 flex items-center
                           justify-center rounded-xl text-[#766C80]
                           hover:bg-[#F5F1FA] transition">

                <svg class="w-5 h-5" viewBox="0 0 24 24"
                     fill="none" stroke="currentColor"
                     stroke-width="1.7">
                    <path d="M18 8a6 6 0 0 0-12 0c0 7-3 7-3 9h18c0-2-3-2-3-9"/>
                    <path d="M10 21h4"/>
                </svg>

                <span class="absolute top-2 right-2 w-2 h-2
                             rounded-full bg-[#8751E8]
                             border-2 border-white"></span>

            </button>


            <div class="h-8 w-px bg-[#ECE7F1]"></div>


            {{-- USER PROFILE --}}

            <div class="flex items-center gap-3">

                <div class="text-right hidden sm:block">

                    <p class="text-xs font-semibold">
                        HR Administrator
                    </p>

                    <p class="text-[10px] text-[#9589A4] mt-0.5">
                        Administrator
                    </p>

                </div>

                <div class="profile-avatar">
                    HR
                </div>

            </div>

        </div>

    </header>


    {{-- PAGE CONTENT --}}

    <section class="p-5 md:p-6">

        @yield('content')

    </section>

</main>


{{-- ========================================= --}}
{{-- JAVASCRIPT --}}
{{-- ========================================= --}}

<script>

    // SIDEBAR TOGGLE

    function toggleSidebar() {

        const sidebar = document.getElementById('sidebar-shell');

        sidebar.classList.toggle('collapsed');

        localStorage.setItem(
            'talentmatch-sidebar',
            sidebar.classList.contains('collapsed')
                ? 'collapsed'
                : 'expanded'
        );

    }


    // RESTORE SIDEBAR STATE

    document.addEventListener('DOMContentLoaded', function () {

        const sidebar = document.getElementById('sidebar-shell');

        if (
            window.innerWidth > 640 &&
            localStorage.getItem('talentmatch-sidebar') === 'collapsed'
        ) {
            sidebar.classList.add('collapsed');
        }

    });


    // CV REVIEWER DROPDOWN

    function toggleCvMenu() {

        const submenu = document.getElementById('cv-submenu');
        const chevron = document.getElementById('cv-chevron');

        if (!submenu || !chevron) return;

        submenu.classList.toggle('closed');
        chevron.classList.toggle('rotated');

    }

</script>

</body>
</html>
