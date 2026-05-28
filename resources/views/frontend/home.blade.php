@extends('layouts.app')

@section('content')

{{-- ══════════════════════════════════════════════════════════
     AIR JAKE DELIVERY SERVICES — Home Page
     Hero + 3-Image Showcase Strip + Feature Section
     Mobile-first · Blue/Red brand · Professional & sleek
══════════════════════════════════════════════════════════ --}}

<style>
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Outfit:wght@300;400;500;600;700;800;900&display=swap');

    :root {
        --navy:        #0B2545;
        --navy-mid:    #134074;
        --navy-light:  #1a5296;
        --red:         #EE1B24;
        --red-dark:    #C4151D;
        --red-glow:    rgba(238,27,36,0.22);
        --white:       #ffffff;
        --off-white:   #F7F9FC;
        --slate-100:   #F1F5F9;
        --slate-200:   #E2E8F0;
        --slate-400:   #94A3B8;
        --slate-600:   #475569;
        --font-d:      'Bebas Neue', sans-serif;
        --font-b:      'Outfit', sans-serif;
        --radius-lg:   20px;
        --radius-md:   14px;
        --radius-sm:   10px;
        --transition:  0.28s cubic-bezier(0.4,0,0.2,1);
    }

    /* ── Reset for this page ── */
    .aj-home * { box-sizing: border-box; }
    .aj-home { font-family: var(--font-b); }

    /* ════════════════════════════
       1. HERO
    ════════════════════════════ */
    .aj-hero {
        position: relative;
        background: var(--navy);
        overflow: hidden;
        padding: 5rem 1.25rem 4rem;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 92svh;
    }

    /* Dot-grid texture */
    .aj-hero::before {
        content: '';
        position: absolute;
        inset: 0;
        background-image: radial-gradient(rgba(255,255,255,0.055) 1px, transparent 1px);
        background-size: 24px 24px;
        pointer-events: none;
    }

    /* Red glow — bottom left */
    .aj-hero-glow-r {
        position: absolute;
        bottom: -140px; left: -100px;
        width: 500px; height: 500px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(238,27,36,0.16) 0%, transparent 68%);
        pointer-events: none;
    }
    /* Blue glow — top right */
    .aj-hero-glow-b {
        position: absolute;
        top: -120px; right: -120px;
        width: 480px; height: 480px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(19,64,116,0.55) 0%, transparent 68%);
        pointer-events: none;
    }
    /* Diagonal accent bar */
    .aj-hero-bar {
        position: absolute;
        top: 0; right: 0;
        width: 35%;
        height: 4px;
        background: var(--red);
        opacity: 0.75;
    }

    .aj-hero-inner {
        position: relative;
        z-index: 2;
        max-width: 800px;
        width: 100%;
        margin: 0 auto;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    /* Eyebrow */
    .aj-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 0.45rem;
        background: rgba(238,27,36,0.12);
        border: 1px solid rgba(238,27,36,0.28);
        color: #ff7b80;
        font-family: var(--font-b);
        font-size: 0.68rem;
        font-weight: 700;
        letter-spacing: 0.14em;
        text-transform: uppercase;
        padding: 0.38rem 1rem;
        border-radius: 100px;
        margin-bottom: 1.6rem;
        animation: fadeDown 0.55s ease both;
    }
    .aj-eyebrow-dot {
        width: 6px; height: 6px;
        border-radius: 50%;
        background: var(--red);
        animation: pulseDot 2s ease-in-out infinite;
    }
    @keyframes pulseDot {
        0%,100%{opacity:1;transform:scale(1);}
        50%{opacity:0.4;transform:scale(0.65);}
    }

    /* Headline */
    .aj-h1 {
        font-family: var(--font-d);
        font-size: clamp(2.6rem, 9vw, 5.2rem);
        line-height: 1.03;
        letter-spacing: 0.035em;
        color: var(--white);
        margin: 0 0 1.1rem;
        animation: fadeDown 0.6s 0.08s ease both;
    }
    .aj-h1 em {
        font-style: normal;
        color: var(--red);
        position: relative;
    }
    .aj-h1 em::after {
        content: '';
        position: absolute;
        bottom: 3px; left: 0;
        width: 100%; height: 3px;
        background: var(--red);
        border-radius: 2px;
        opacity: 0.35;
    }

    /* Sub */
    .aj-sub {
        font-size: clamp(0.88rem, 2.6vw, 1.05rem);
        line-height: 1.78;
        color: rgba(255,255,255,0.56);
        max-width: 580px;
        margin: 0 auto 2.4rem;
        animation: fadeDown 0.65s 0.14s ease both;
    }

    /* Trust pills */
    .aj-pills {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 0.45rem;
        margin-bottom: 2.2rem;
        animation: fadeDown 0.68s 0.18s ease both;
    }
    .aj-pill {
        display: inline-flex;
        align-items: center;
        gap: 0.35rem;
        background: rgba(255,255,255,0.05);
        border: 1px solid rgba(255,255,255,0.1);
        color: rgba(255,255,255,0.62);
        font-size: 0.7rem;
        font-weight: 500;
        padding: 0.3rem 0.75rem;
        border-radius: 100px;
        letter-spacing: 0.03em;
    }
    .aj-pill i { color: #4ade80; font-size: 0.6rem; }

    /* Search card */
    .aj-search-card {
        width: 100%;
        max-width: 660px;
        background: rgba(255,255,255,0.045);
        border: 1px solid rgba(255,255,255,0.1);
        border-radius: var(--radius-lg);
        padding: 1.5rem 1.25rem;
        backdrop-filter: blur(14px);
        -webkit-backdrop-filter: blur(14px);
        box-shadow: 0 1px 0 rgba(255,255,255,0.07) inset, 0 24px 64px rgba(0,0,0,0.38);
        animation: fadeUp 0.68s 0.22s ease both;
    }

    .aj-card-divider {
        display: flex;
        align-items: center;
        gap: 0.55rem;
        margin-bottom: 1rem;
    }
    .aj-card-divider-line { flex: 1; height: 1px; background: rgba(255,255,255,0.07); }
    .aj-card-divider span {
        font-size: 0.62rem;
        font-weight: 700;
        letter-spacing: 0.14em;
        text-transform: uppercase;
        color: rgba(255,255,255,0.28);
    }
    .aj-card-divider i { color: var(--red); font-size: 0.7rem; }

    /* Form */
    .aj-form { display: flex; flex-direction: column; gap: 0.75rem; }
    @media (min-width: 560px) {
        .aj-form { flex-direction: row; align-items: stretch; }
    }

    .aj-input-wrap { position: relative; flex: 1; }
    .aj-input-ico {
        position: absolute;
        left: 1rem; top: 50%;
        transform: translateY(-50%);
        color: rgba(255,255,255,0.32);
        font-size: 1rem;
        pointer-events: none;
        transition: color var(--transition);
    }
    .aj-input {
        width: 100%;
        background: rgba(255,255,255,0.06);
        border: 1.5px solid rgba(255,255,255,0.1);
        border-radius: var(--radius-sm);
        padding: 1rem 2.8rem 1rem 3rem;
        color: white;
        font-family: var(--font-b);
        font-size: 0.92rem;
        font-weight: 500;
        letter-spacing: 0.04em;
        outline: none;
        transition: border-color var(--transition), background var(--transition), box-shadow var(--transition);
        -webkit-appearance: none;
    }
    .aj-input::placeholder { color: rgba(255,255,255,0.24); font-size: 0.83rem; font-weight: 400; letter-spacing: 0.02em; }
    .aj-input:focus {
        border-color: var(--red);
        background: rgba(255,255,255,0.09);
        box-shadow: 0 0 0 3px rgba(238,27,36,0.15);
    }
    .aj-input:focus ~ .aj-input-ico,
    .aj-input-wrap:focus-within .aj-input-ico { color: var(--red); }

    .aj-clear-btn {
        position: absolute;
        right: 0.8rem; top: 50%;
        transform: translateY(-50%);
        width: 22px; height: 22px;
        border-radius: 50%;
        background: rgba(255,255,255,0.1);
        border: none;
        color: rgba(255,255,255,0.5);
        font-size: 0.6rem;
        cursor: pointer;
        display: none;
        align-items: center;
        justify-content: center;
        transition: background var(--transition);
    }
    .aj-clear-btn:hover { background: rgba(255,255,255,0.2); }
    .has-value .aj-clear-btn { display: flex; }

    .aj-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        background: var(--red);
        color: white;
        border: none;
        border-radius: var(--radius-sm);
        padding: 1rem 1.6rem;
        font-family: var(--font-b);
        font-size: 0.9rem;
        font-weight: 700;
        letter-spacing: 0.04em;
        cursor: pointer;
        box-shadow: 0 6px 22px rgba(238,27,36,0.38);
        transition: background var(--transition), transform var(--transition), box-shadow var(--transition);
        white-space: nowrap;
        -webkit-tap-highlight-color: transparent;
    }
    .aj-btn:hover { background: var(--red-dark); transform: translateY(-1px); box-shadow: 0 8px 28px rgba(238,27,36,0.5); }
    .aj-btn:active { transform: translateY(0); }
    .aj-btn i { font-size: 0.82rem; transition: transform var(--transition); }
    .aj-btn:hover i { transform: translateX(3px); }

    .aj-form-links {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        gap: 0.45rem;
        margin-top: 0.85rem;
        font-size: 0.7rem;
        color: rgba(255,255,255,0.3);
    }
    .aj-form-links a {
        color: rgba(255,255,255,0.48);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.25rem;
        font-weight: 500;
        transition: color var(--transition);
    }
    .aj-form-links a:hover { color: var(--red); }
    .aj-form-links a i { font-size: 0.6rem; }

    /* Stats strip */
    .aj-stats {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 0.65rem;
        width: 100%;
        max-width: 660px;
        margin-top: 2rem;
        animation: fadeUp 0.7s 0.3s ease both;
    }
    .aj-stat {
        background: rgba(255,255,255,0.04);
        border: 1px solid rgba(255,255,255,0.07);
        border-radius: var(--radius-md);
        padding: 0.9rem 0.6rem;
        text-align: center;
    }
    .aj-stat-n {
        font-family: var(--font-d);
        font-size: clamp(1.5rem, 4.5vw, 2.1rem);
        color: white;
        letter-spacing: 0.04em;
        line-height: 1;
        margin-bottom: 0.3rem;
    }
    .aj-stat-n span { color: var(--red); }
    .aj-stat-l {
        font-size: 0.62rem;
        font-weight: 500;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: rgba(255,255,255,0.36);
    }

    /* Scroll hint */
    .aj-scroll {
        position: absolute;
        bottom: 1.4rem; left: 50%;
        transform: translateX(-50%);
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.35rem;
        color: rgba(255,255,255,0.18);
        font-size: 0.58rem;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        z-index: 2;
    }
    .aj-scroll-mouse {
        width: 18px; height: 28px;
        border: 1.5px solid rgba(255,255,255,0.14);
        border-radius: 9px;
        display: flex;
        justify-content: center;
        padding-top: 5px;
    }
    .aj-scroll-mouse::before {
        content: '';
        width: 2.5px; height: 6px;
        background: rgba(255,255,255,0.28);
        border-radius: 2px;
        animation: scrollBob 1.9s ease-in-out infinite;
    }
    @keyframes scrollBob{0%,100%{transform:translateY(0);opacity:.8;}50%{transform:translateY(5px);opacity:.2;}}

    /* ════════════════════════════
       2. IMAGE SHOWCASE STRIP
    ════════════════════════════ */
    .aj-showcase {
        background: var(--off-white);
        padding: 5rem 1.25rem;
    }
    @media (min-width: 768px) { .aj-showcase { padding: 6rem 1.5rem; } }
    @media (min-width: 1024px) { .aj-showcase { padding: 7rem 2rem; } }

    .aj-showcase-inner {
        max-width: 1280px;
        margin: 0 auto;
    }

    /* Section heading */
    .aj-section-head {
        text-align: center;
        margin-bottom: 3rem;
    }
    .aj-section-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.65rem;
        font-weight: 800;
        letter-spacing: 0.18em;
        text-transform: uppercase;
        color: var(--red);
        margin-bottom: 0.85rem;
    }
    .aj-section-eyebrow::before,
    .aj-section-eyebrow::after {
        content: '';
        width: 28px; height: 1.5px;
        background: var(--red);
        opacity: 0.45;
        border-radius: 1px;
    }
    .aj-section-h2 {
        font-family: var(--font-d);
        font-size: clamp(2rem, 6vw, 3.4rem);
        letter-spacing: 0.04em;
        color: var(--navy);
        margin: 0 0 0.8rem;
        line-height: 1.08;
    }
    .aj-section-h2 span { color: var(--red); }
    .aj-section-desc {
        font-size: 0.9rem;
        line-height: 1.75;
        color: var(--slate-600);
        max-width: 540px;
        margin: 0 auto;
    }

    /* Image grid */
    .aj-img-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.25rem;
    }
    @media (min-width: 640px) {
        .aj-img-grid { grid-template-columns: 1fr 1fr; }
    }
    @media (min-width: 1024px) {
        .aj-img-grid {
            grid-template-columns: 1.15fr 1fr 1fr;
            gap: 1.5rem;
            align-items: stretch;
        }
    }

    /* Image card */
    .aj-img-card {
        position: relative;
        border-radius: var(--radius-lg);
        overflow: hidden;
        background: var(--navy);
        box-shadow: 0 4px 28px rgba(11,37,69,0.14);
        /* force equal height on mobile */
        min-height: 260px;
        display: flex;
        flex-direction: column;
        cursor: pointer;
        transition: box-shadow var(--transition), transform var(--transition);
        /* On tablet, let second card span 2 columns for visual balance */
    }
    .aj-img-card:hover {
        box-shadow: 0 12px 40px rgba(11,37,69,0.22);
        transform: translateY(-4px);
    }

    /* First card taller on desktop */
    @media (min-width: 1024px) {
        .aj-img-card:first-child { min-height: 460px; }
        .aj-img-card:not(:first-child) { min-height: 360px; }
    }
    @media (min-width: 640px) and (max-width: 1023px) {
        /* On tablet, first card spans 2 cols */
        .aj-img-card:first-child { grid-column: 1 / -1; min-height: 320px; }
    }

    .aj-img-photo {
        position: absolute;
        inset: 0;
        width: 100%; height: 100%;
        object-fit: cover;
        object-position: center;
        transition: transform 0.6s cubic-bezier(0.4,0,0.2,1);
        filter: brightness(0.82) saturate(1.05);
    }
    .aj-img-card:hover .aj-img-photo {
        transform: scale(1.05);
        filter: brightness(0.78) saturate(1.1);
    }

    /* Gradient overlay */
    .aj-img-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(
            0deg,
            rgba(11,37,69,0.88) 0%,
            rgba(11,37,69,0.3) 50%,
            rgba(11,37,69,0.0) 100%
        );
        z-index: 1;
    }

    /* Red top-right corner accent */
    .aj-img-corner {
        position: absolute;
        top: 0; right: 0;
        width: 0; height: 0;
        border-style: solid;
        border-width: 0 56px 56px 0;
        border-color: transparent var(--red) transparent transparent;
        opacity: 0.85;
        z-index: 2;
    }
    .aj-img-corner-icon {
        position: absolute;
        top: 6px; right: 6px;
        color: white;
        font-size: 0.75rem;
        z-index: 3;
    }

    /* Badge */
    .aj-img-badge {
        position: absolute;
        top: 1rem; left: 1rem;
        display: inline-flex;
        align-items: center;
        gap: 0.35rem;
        background: rgba(11,37,69,0.75);
        border: 1px solid rgba(255,255,255,0.15);
        color: rgba(255,255,255,0.85);
        font-size: 0.62rem;
        font-weight: 700;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        padding: 0.28rem 0.65rem;
        border-radius: 6px;
        backdrop-filter: blur(6px);
        z-index: 3;
    }
    .aj-img-badge i { color: var(--red); font-size: 0.6rem; }

    /* Bottom caption */
    .aj-img-caption {
        position: absolute;
        bottom: 0; left: 0; right: 0;
        padding: 1.4rem 1.4rem 1.5rem;
        z-index: 3;
    }
    .aj-img-caption-label {
        font-size: 0.6rem;
        font-weight: 800;
        letter-spacing: 0.14em;
        text-transform: uppercase;
        color: rgba(255,255,255,0.45);
        margin-bottom: 0.3rem;
    }
    .aj-img-caption-title {
        font-family: var(--font-d);
        font-size: clamp(1.1rem, 3.5vw, 1.55rem);
        letter-spacing: 0.04em;
        color: white;
        line-height: 1.15;
        margin-bottom: 0.5rem;
    }
    .aj-img-caption-desc {
        font-size: 0.75rem;
        font-weight: 400;
        line-height: 1.6;
        color: rgba(255,255,255,0.58);
        max-width: 320px;
        display: none;
    }
    @media (min-width: 640px) { .aj-img-caption-desc { display: block; } }

    .aj-img-link {
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        color: white;
        font-size: 0.72rem;
        font-weight: 700;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        text-decoration: none;
        margin-top: 0.75rem;
        padding: 0.4rem 0.85rem;
        border: 1px solid rgba(255,255,255,0.22);
        border-radius: 7px;
        background: rgba(255,255,255,0.07);
        transition: background var(--transition), border-color var(--transition);
        backdrop-filter: blur(4px);
    }
    .aj-img-link:hover { background: rgba(238,27,36,0.7); border-color: var(--red); }
    .aj-img-link i { font-size: 0.65rem; transition: transform var(--transition); }
    .aj-img-link:hover i { transform: translateX(3px); }

    /* ════════════════════════════
       3. FEATURE STRIP
    ════════════════════════════ */
    .aj-features {
        background: var(--navy);
        padding: 5rem 1.25rem;
        position: relative;
        overflow: hidden;
    }
    .aj-features::before {
        content: '';
        position: absolute;
        inset: 0;
        background-image: radial-gradient(rgba(255,255,255,0.04) 1px, transparent 1px);
        background-size: 22px 22px;
        pointer-events: none;
    }
    .aj-features-inner {
        max-width: 1280px;
        margin: 0 auto;
        position: relative;
        z-index: 1;
    }
    .aj-feat-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1rem;
        margin-top: 3rem;
    }
    @media (min-width: 540px) { .aj-feat-grid { grid-template-columns: repeat(2, 1fr); } }
    @media (min-width: 1024px) { .aj-feat-grid { grid-template-columns: repeat(4, 1fr); } }

    .aj-feat-card {
        background: rgba(255,255,255,0.04);
        border: 1px solid rgba(255,255,255,0.08);
        border-radius: var(--radius-md);
        padding: 1.5rem 1.25rem;
        transition: background var(--transition), border-color var(--transition), transform var(--transition);
        position: relative;
        overflow: hidden;
    }
    .aj-feat-card::before {
        content: '';
        position: absolute;
        bottom: 0; left: 0; right: 0;
        height: 3px;
        background: var(--red);
        transform: scaleX(0);
        transform-origin: left;
        transition: transform var(--transition);
    }
    .aj-feat-card:hover {
        background: rgba(255,255,255,0.07);
        border-color: rgba(255,255,255,0.14);
        transform: translateY(-3px);
    }
    .aj-feat-card:hover::before { transform: scaleX(1); }

    .aj-feat-icon {
        width: 46px; height: 46px;
        border-radius: 12px;
        background: rgba(238,27,36,0.12);
        border: 1px solid rgba(238,27,36,0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--red);
        font-size: 1.1rem;
        margin-bottom: 1.1rem;
    }
    .aj-feat-title {
        font-family: var(--font-d);
        font-size: 1.15rem;
        letter-spacing: 0.05em;
        color: white;
        margin-bottom: 0.5rem;
    }
    .aj-feat-desc {
        font-size: 0.78rem;
        line-height: 1.7;
        color: rgba(255,255,255,0.48);
    }

    /* ── Keyframes ── */
    @keyframes fadeDown {
        from { opacity: 0; transform: translateY(-18px); }
        to   { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeUp {
        from { opacity: 0; transform: translateY(22px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    /* Section head for dark bg */
    .aj-section-head.dark .aj-section-h2 { color: white; }
    .aj-section-head.dark .aj-section-desc { color: rgba(255,255,255,0.5); }
    .aj-section-head.dark .aj-section-eyebrow { color: #ff7b80; }
    .aj-section-head.dark .aj-section-eyebrow::before,
    .aj-section-head.dark .aj-section-eyebrow::after { background: #ff7b80; }
</style>

<div class="aj-home">

    {{-- ══════════════════════════
         HERO
    ══════════════════════════ --}}
    <section class="aj-hero" aria-label="Track your parcel">
        <div class="aj-hero-glow-r" aria-hidden="true"></div>
        <div class="aj-hero-glow-b" aria-hidden="true"></div>
        <div class="aj-hero-bar"    aria-hidden="true"></div>

        <div class="aj-hero-inner">

            <div class="aj-eyebrow">
                <div class="aj-eyebrow-dot"></div>
                <span>Secure Global Logistics Terminal</span>
                <div class="aj-eyebrow-dot"></div>
            </div>

            <h1 class="aj-h1">
                Global Express Air Cargo &amp;<br>
                <em>Freight Vector Tracking</em>
            </h1>

            <p class="aj-sub">
                Inspect custom transit manifests, border clearance nodes, and route vectors instantly through our priority verification terminal.
            </p>

            <div class="aj-pills" >
                <span class="aj-pill"><i class="fa-solid fa-circle-check fa-xs"></i> 150+ Countries</span>
                <span class="aj-pill"><i class="fa-solid fa-circle-check fa-xs"></i> Real-Time Updates</span>
                <span class="aj-pill"><i class="fa-solid fa-circle-check fa-xs"></i> End-to-End Secure</span>
                <span class="aj-pill"><i class="fa-solid fa-circle-check fa-xs"></i> 24/7 Support</span>
            </div>

            {{-- Search card --}}
            <div class="aj-search-card">
                <div class="aj-card-divider">
                    <div class="aj-card-divider-line"></div>
                    <i class="fa-solid fa-satellite-dish fa-xs"></i>
                    <span>Enter tracking ID to locate your shipment</span>
                    <div class="aj-card-divider-line"></div>
                </div>
                <form action="{{ url('track') }}" method="POST" class="aj-form" id="heroForm">
                    @csrf
                    <div class="aj-input-wrap" id="heroInputWrap">
                        <i class="fa-solid fa-magnifying-glass-location aj-input-ico"></i>
                        <input
                            type="text"
                            name="tracking_id"
                            id="heroInput"
                            class="aj-input"
                            placeholder="e.g. AJD-TX-89210"
                            autocomplete="off"
                            autocapitalize="characters"
                            inputmode="text"
                            maxlength="30"
                            required
                            value="{{ request('tracking_id') }}"
                        >
                        <button type="button" class="aj-clear-btn" id="heroClear" aria-label="Clear">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                    <button type="submit" class="aj-btn" id="heroSubmit">
                        <span>Trace Cargo</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </form>
                <div class="aj-form-links">
                    <a href="{{ url('tracking.demo') }}"><i class="fa-solid fa-eye fa-xs"></i> Try demo ID</a>
                    <span style="opacity:.25">·</span>
                    <a href="{{ route('contact') }}"><i class="fa-solid fa-headset fa-xs"></i> Support</a>
                    <span style="opacity:.25">·</span>
                    <a href="{{ url('register') }}"><i class="fa-solid fa-box fa-xs"></i> Book parcel</a>
                </div>
            </div>

            {{-- Stats --}}
            <div class="aj-stats">
                <div class="aj-stat">
                    <div class="aj-stat-n">150<span>+</span></div>
                    <div class="aj-stat-l">Countries</div>
                </div>
                <div class="aj-stat">
                    <div class="aj-stat-n">2M<span>+</span></div>
                    <div class="aj-stat-l">Deliveries</div>
                </div>
                <div class="aj-stat">
                    <div class="aj-stat-n">99<span>%</span></div>
                    <div class="aj-stat-l">On-Time Rate</div>
                </div>
            </div>

        </div>{{-- /.aj-hero-inner --}}

        <div class="aj-scroll" aria-hidden="true">
            <div class="aj-scroll-mouse"></div>
            <span>Scroll</span>
        </div>
    </section>

    {{-- ══════════════════════════
         IMAGE SHOWCASE STRIP
    ══════════════════════════ --}}
    <section class="aj-showcase" aria-label="Our operations" id="serviceID">
        <div class="aj-showcase-inner">

            <div class="aj-section-head">
                <div class="aj-section-eyebrow">Our Operations</div>
                <h2 class="aj-section-h2">
                    Air. Ground. <span>Delivered.</span>
                </h2>
                <p class="aj-section-desc">
                    From tarmac to doorstep, every leg of your shipment is handled by Air Jake's dedicated operations network — built for speed, reliability, and full visibility.
                </p>
            </div>

            {{-- 3-image horizontal grid --}}
            <div class="aj-img-grid">

                {{-- Card 1: Aircraft --}}
                <div class="aj-img-card">
                    <img
                        src="{{ asset('images/img-aircraft.jpg') }}"
                        alt="Air Jake cargo aircraft in flight at sunset"
                        class="aj-img-photo"
                        loading="lazy"
                    >
                    <div class="aj-img-overlay"></div>
                    <div class="aj-img-corner" aria-hidden="true"></div>
                    <i class="fa-solid fa-plane aj-img-corner-icon" aria-hidden="true"></i>
                    <div class="aj-img-badge">
                        <i class="fa-solid fa-circle" style="color:#4ade80;font-size:0.45rem;"></i>
                        Active Fleet
                    </div>
                    <div class="aj-img-caption">
                        <div class="aj-img-caption-label">Air Operations</div>
                        <div class="aj-img-caption-title">Express Air<br>Cargo Fleet</div>
                        <p class="aj-img-caption-desc">Priority air freight with same-day departure from hub airports across 6 continents.</p>
                        <a href="{{ url('services') }}" class="aj-img-link">
                            View Services <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                {{-- Card 2: Freight / Pallets --}}
                <div class="aj-img-card">
                    <img
                        src="{{ asset('images/img-freight.jpg') }}"
                        alt="Air freight pallets ready for loading at airport"
                        class="aj-img-photo"
                        loading="lazy"
                    >
                    <div class="aj-img-overlay"></div>
                    <div class="aj-img-corner" aria-hidden="true"></div>
                    <i class="fa-solid fa-boxes-stacked aj-img-corner-icon" aria-hidden="true"></i>
                    <div class="aj-img-badge">
                        <i class="fa-solid fa-circle" style="color:#4ade80;font-size:0.45rem;"></i>
                        Cargo Ready
                    </div>
                    <div class="aj-img-caption">
                        <div class="aj-img-caption-label">Bulk Logistics</div>
                        <div class="aj-img-caption-title">Freight &amp;<br>Palletised Cargo</div>
                        <p class="aj-img-caption-desc">Certified ULD pallet handling with real-time weight manifests and customs documentation.</p>
                        <a href="{{ url('services') }}" class="aj-img-link">
                            Learn More <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                {{-- Card 3: Courier --}}
                <div class="aj-img-card">
                    <img
                        src="{{ asset('images/img-courier.jpg') }}"
                        alt="Air Jake courier delivering a parcel to the door"
                        class="aj-img-photo"
                        loading="lazy"
                    >
                    <div class="aj-img-overlay"></div>
                    <div class="aj-img-corner" aria-hidden="true"></div>
                    <i class="fa-solid fa-person-walking aj-img-corner-icon" aria-hidden="true"></i>
                    <div class="aj-img-badge">
                        <i class="fa-solid fa-circle" style="color:#4ade80;font-size:0.45rem;"></i>
                        Last Mile
                    </div>
                    <div class="aj-img-caption">
                        <div class="aj-img-caption-label">Door Delivery</div>
                        <div class="aj-img-caption-title">Last-Mile<br>Courier Network</div>
                        <p class="aj-img-caption-desc">Dedicated couriers completing doorstep delivery with digital proof of receipt.</p>
                        <a href="{{ url('services') }}" class="aj-img-link">
                            Book Now <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

            </div>{{-- /.aj-img-grid --}}
        </div>{{-- /.aj-showcase-inner --}}
    </section>

    {{-- ══════════════════════════
         FEATURES STRIP
    ══════════════════════════ --}}
    <section class="aj-features" aria-label="Why choose Air Jake">
        <div class="aj-features-inner">
            <div class="aj-section-head dark" style="text-align:center;margin-bottom:0;">
                <div class="aj-section-eyebrow">Why Air Jake</div>
                <h2 class="aj-section-h2">Built for <span>Speed</span> &amp; Trust</h2>
                <p class="aj-section-desc">Every system, every process, optimised for global shipments that arrive on time — every time.</p>
            </div>
            <div class="aj-feat-grid">
                <div class="aj-feat-card">
                    <div class="aj-feat-icon"><i class="fa-solid fa-satellite-dish"></i></div>
                    <div class="aj-feat-title">Live Tracking</div>
                    <p class="aj-feat-desc">Real-time GPS vector updates every 15 minutes with full route visibility from origin to door.</p>
                </div>
                <div class="aj-feat-card">
                    <div class="aj-feat-icon"><i class="fa-solid fa-shield-halved"></i></div>
                    <div class="aj-feat-title">Insured Transit</div>
                    <p class="aj-feat-desc">All shipments are covered by Air Jake's cargo insurance policy — no hidden limits.</p>
                </div>
                <div class="aj-feat-card">
                    <div class="aj-feat-icon"><i class="fa-solid fa-bolt"></i></div>
                    <div class="aj-feat-title">Express Priority</div>
                    <p class="aj-feat-desc">Same-day pickup with priority loading slots on the next available flight departure.</p>
                </div>
                <div class="aj-feat-card">
                    <div class="aj-feat-icon"><i class="fa-solid fa-headset"></i></div>
                    <div class="aj-feat-title">24/7 Support</div>
                    <p class="aj-feat-desc">Dedicated logistics agents available around the clock via live chat, phone, or email.</p>
                </div>
            </div>
        </div>
    </section>

</div>{{-- /.aj-home --}}

{{-- ── Scripts ── --}}
<script>
(function () {
    /* Input clear button */
    var input  = document.getElementById('heroInput');
    var wrap   = document.getElementById('heroInputWrap');
    var clear  = document.getElementById('heroClear');
    var form   = document.getElementById('heroForm');
    var submit = document.getElementById('heroSubmit');

    function syncClear() { wrap.classList.toggle('has-value', input.value.trim().length > 0); }

    if (input) {
        input.addEventListener('input', function () {
            this.value = this.value.toUpperCase();
            syncClear();
        });
        syncClear();
    }

    if (clear) {
        clear.addEventListener('click', function () {
            input.value = '';
            syncClear();
            input.focus();
        });
    }

    /* Submit loading state */
    if (form && submit) {
        form.addEventListener('submit', function () {
            submit.disabled = true;
            submit.innerHTML = '<i class="fa-solid fa-circle-notch fa-spin"></i><span>Locating…</span>';
        });
    }

    /* Scroll-reveal: images */
    if ('IntersectionObserver' in window) {
        var cards = document.querySelectorAll('.aj-img-card, .aj-feat-card');
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (e) {
                if (e.isIntersecting) {
                    e.target.style.transition = 'opacity 0.55s ease, transform 0.55s ease';
                    e.target.style.opacity = '1';
                    e.target.style.transform = 'translateY(0)';
                    io.unobserve(e.target);
                }
            });
        }, { threshold: 0.12 });

        cards.forEach(function (c, i) {
            c.style.opacity = '0';
            c.style.transform = 'translateY(28px)';
            c.style.transitionDelay = (i * 0.1) + 's';
            io.observe(c);
        });
    }
}());
</script>

@endsection