@extends('layouts.app')

@section('content')

<style>
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Outfit:wght@300;400;500;600;700;800;900&display=swap');

    :root {
        --navy:       #0B2545;
        --navy-mid:   #134074;
        --navy-light: #1a5296;
        --red:        #EE1B24;
        --red-dark:   #C4151D;
        --white:      #ffffff;
        --off-white:  #F7F9FC;
        --slate-50:   #F8FAFC;
        --slate-100:  #F1F5F9;
        --slate-200:  #E2E8F0;
        --slate-400:  #94A3B8;
        --slate-500:  #64748B;
        --slate-600:  #475569;
        --slate-700:  #334155;
        --slate-800:  #1E293B;
        --font-d:     'Bebas Neue', sans-serif;
        --font-b:     'Outfit', sans-serif;
        --ease:       cubic-bezier(0.4,0,0.2,1);
    }

    .cj-page * { box-sizing: border-box; }
    .cj-page { font-family: var(--font-b); }

    /* ══ PAGE WRAPPER ══ */
    .cj-page {
        background: var(--off-white);
        min-height: 100svh;
        display: flex;
        flex-direction: column;
    }

    /* ══ HERO BANNER ══ */
    .cj-hero {
        background: var(--navy);
        position: relative;
        overflow: hidden;
        padding: 4rem 1.25rem 3rem;
        text-align: center;
    }
    .cj-hero::before {
        content: '';
        position: absolute;
        inset: 0;
        background-image: radial-gradient(rgba(255,255,255,0.05) 1px, transparent 1px);
        background-size: 22px 22px;
        pointer-events: none;
    }
    .cj-hero-glow {
        position: absolute;
        bottom: -120px; left: 50%;
        transform: translateX(-50%);
        width: 600px; height: 300px;
        border-radius: 50%;
        background: radial-gradient(ellipse, rgba(238,27,36,0.13) 0%, transparent 70%);
        pointer-events: none;
    }
    .cj-hero-bar-top {
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 4px;
        background: var(--red);
    }

    .cj-hero-inner {
        position: relative;
        z-index: 1;
        max-width: 640px;
        margin: 0 auto;
    }

    .cj-hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        background: rgba(238,27,36,0.1);
        border: 1px solid rgba(238,27,36,0.25);
        color: #ff8a8e;
        font-size: 0.62rem;
        font-weight: 700;
        letter-spacing: 0.16em;
        text-transform: uppercase;
        padding: 0.32rem 0.85rem;
        border-radius: 100px;
        margin-bottom: 1.25rem;
        animation: fadeDown 0.5s ease both;
    }
    .cj-hero-badge-dot {
        width: 5px; height: 5px;
        border-radius: 50%;
        background: var(--red);
        animation: pulseDot 2s infinite;
    }
    @keyframes pulseDot {
        0%,100%{opacity:1;transform:scale(1);}
        50%{opacity:.35;transform:scale(.6);}
    }

    .cj-hero-title {
        font-family: var(--font-d);
        font-size: clamp(2.2rem, 8vw, 3.8rem);
        letter-spacing: 0.04em;
        color: var(--white);
        line-height: 1.05;
        margin: 0 0 1rem;
        animation: fadeDown 0.55s 0.06s ease both;
    }
    .cj-hero-title span { color: var(--red); }

    .cj-hero-sub {
        font-size: clamp(0.83rem, 2.5vw, 0.97rem);
        line-height: 1.78;
        color: rgba(255,255,255,0.52);
        margin: 0 auto;
        max-width: 480px;
        animation: fadeDown 0.6s 0.1s ease both;
    }

    /* ══ MAIN CONTENT ══ */
    .cj-main {
        flex: 1;
        padding: 0 1.25rem 4rem;
        position: relative;
        z-index: 2;
        /* Pull card up into hero */
        margin-top: -2.5rem;
    }
    .cj-main-inner {
        max-width: 1100px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.25rem;
    }
    @media (min-width: 900px) {
        .cj-main-inner { grid-template-columns: 1.1fr 0.9fr; gap: 1.5rem; align-items: start; }
    }

    /* ══ CARD BASE ══ */
    .cj-card {
        background: var(--white);
        border: 1px solid var(--slate-200);
        border-radius: 20px;
        box-shadow: 0 4px 28px rgba(11,37,69,0.09);
        overflow: hidden;
    }
    .cj-card-body { padding: 1.5rem 1.25rem; }
    @media (min-width: 640px) { .cj-card-body { padding: 2rem; } }

    .cj-card-head-bar {
        height: 4px;
        background: linear-gradient(90deg, var(--navy), var(--navy-mid));
    }
    .cj-card-head-bar.red {
        background: linear-gradient(90deg, var(--red), var(--red-dark));
    }

    /* ══ LEFT: CONTACT FORM CARD ══ */
    .cj-form-title {
        display: flex;
        align-items: center;
        gap: 0.6rem;
        margin-bottom: 0.4rem;
    }
    .cj-form-title h2 {
        font-family: var(--font-d);
        font-size: clamp(1.4rem, 4vw, 1.85rem);
        letter-spacing: 0.04em;
        color: var(--navy);
        margin: 0;
        line-height: 1.1;
    }
    .cj-form-title-icon {
        width: 38px; height: 38px;
        border-radius: 10px;
        background: rgba(238,27,36,0.08);
        border: 1px solid rgba(238,27,36,0.15);
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--red);
        font-size: 0.9rem;
        flex-shrink: 0;
    }
    .cj-form-desc {
        font-size: 0.78rem;
        line-height: 1.7;
        color: var(--slate-500);
        margin: 0.3rem 0 1.5rem;
    }

    /* Form fields */
    .cj-form { display: flex; flex-direction: column; gap: 1rem; }
    .cj-row {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1rem;
    }
    @media (min-width: 500px) { .cj-row { grid-template-columns: 1fr 1fr; } }

    .cj-field { display: flex; flex-direction: column; gap: 0.35rem; }
    .cj-label {
        font-size: 0.68rem;
        font-weight: 700;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        color: var(--slate-500);
    }
    .cj-label span { color: var(--red); margin-left: 2px; }

    .cj-input,
    .cj-select,
    .cj-textarea {
        width: 100%;
        background: var(--slate-50);
        border: 1.5px solid var(--slate-200);
        border-radius: 10px;
        padding: 0.78rem 1rem;
        font-family: var(--font-b);
        font-size: 0.88rem;
        color: var(--slate-700);
        outline: none;
        transition: border-color 0.2s var(--ease), box-shadow 0.2s var(--ease), background 0.2s;
        -webkit-appearance: none;
    }
    .cj-input::placeholder,
    .cj-textarea::placeholder { color: var(--slate-400); font-weight: 400; }
    .cj-input:focus,
    .cj-select:focus,
    .cj-textarea:focus {
        border-color: var(--navy-mid);
        background: var(--white);
        box-shadow: 0 0 0 3px rgba(19,64,116,0.1);
    }
    .cj-select {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8' fill='none'%3E%3Cpath d='M1 1l5 5 5-5' stroke='%2394A3B8' stroke-width='1.5' stroke-linecap='round'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 1rem center;
        padding-right: 2.5rem;
        cursor: pointer;
    }
    .cj-textarea { resize: vertical; min-height: 110px; line-height: 1.6; }

    /* Input with icon */
    .cj-input-wrap { position: relative; }
    .cj-input-wrap .cj-input { padding-left: 2.6rem; }
    .cj-input-ico {
        position: absolute;
        left: 0.9rem; top: 50%;
        transform: translateY(-50%);
        color: var(--slate-400);
        font-size: 0.85rem;
        pointer-events: none;
        transition: color 0.2s;
    }
    .cj-input-wrap:focus-within .cj-input-ico { color: var(--navy-mid); }

    /* Submit */
    .cj-submit {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.55rem;
        width: 100%;
        background: var(--red);
        color: var(--white);
        border: none;
        border-radius: 10px;
        padding: 0.88rem 1.5rem;
        font-family: var(--font-b);
        font-size: 0.9rem;
        font-weight: 700;
        letter-spacing: 0.04em;
        cursor: pointer;
        box-shadow: 0 5px 20px rgba(238,27,36,0.35);
        transition: background 0.2s, transform 0.15s, box-shadow 0.2s;
        margin-top: 0.25rem;
        -webkit-tap-highlight-color: transparent;
    }
    .cj-submit:hover {
        background: var(--red-dark);
        transform: translateY(-1px);
        box-shadow: 0 8px 26px rgba(238,27,36,0.48);
    }
    .cj-submit:active { transform: translateY(0); }
    .cj-submit i { font-size: 0.8rem; transition: transform 0.2s; }
    .cj-submit:hover i { transform: translateX(3px); }

    .cj-form-note {
        font-size: 0.68rem;
        color: var(--slate-400);
        text-align: center;
        margin-top: 0.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.35rem;
    }
    .cj-form-note i { color: #22c55e; font-size: 0.65rem; }

    /* ══ RIGHT COLUMN ══ */
    .cj-right { display: flex; flex-direction: column; gap: 1.25rem; }

    /* ── Email spotlight card ── */
    .cj-email-card {
        background: var(--navy);
        border-radius: 20px;
        padding: 1.75rem 1.5rem;
        position: relative;
        overflow: hidden;
        box-shadow: 0 8px 32px rgba(11,37,69,0.22);
    }
    .cj-email-card::before {
        content: '';
        position: absolute;
        inset: 0;
        background-image: radial-gradient(rgba(255,255,255,0.04) 1px, transparent 1px);
        background-size: 18px 18px;
    }
    .cj-email-card-glow {
        position: absolute;
        bottom: -60px; right: -60px;
        width: 220px; height: 220px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(238,27,36,0.18) 0%, transparent 65%);
        pointer-events: none;
    }
    .cj-email-card-inner { position: relative; z-index: 1; }

    .cj-email-card-label {
        font-size: 0.62rem;
        font-weight: 700;
        letter-spacing: 0.16em;
        text-transform: uppercase;
        color: rgba(255,255,255,0.35);
        margin-bottom: 0.5rem;
        display: flex;
        align-items: center;
        gap: 0.4rem;
    }
    .cj-email-card-label i { color: var(--red); font-size: 0.6rem; }

    .cj-email-address-wrap {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 0.75rem;
        background: rgba(255,255,255,0.06);
        border: 1px solid rgba(255,255,255,0.1);
        border-radius: 12px;
        padding: 1rem 1.1rem;
        margin: 0.75rem 0 1.1rem;
        transition: background 0.2s;
        flex-wrap: wrap;
    }
    .cj-email-address-wrap:hover { background: rgba(255,255,255,0.09); }

    .cj-email-text {
        font-family: var(--font-b);
        font-size: clamp(0.75rem, 2.5vw, 0.9rem);
        font-weight: 700;
        color: var(--white);
        letter-spacing: 0.01em;
        word-break: break-all;
        text-decoration: none;
        transition: color 0.2s;
        flex: 1;
    }
    .cj-email-text:hover { color: #ff9598; }

    .cj-copy-btn {
        display: flex;
        align-items: center;
        gap: 0.3rem;
        background: rgba(238,27,36,0.15);
        border: 1px solid rgba(238,27,36,0.25);
        color: #ff9598;
        font-family: var(--font-b);
        font-size: 0.65rem;
        font-weight: 700;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        padding: 0.35rem 0.75rem;
        border-radius: 7px;
        cursor: pointer;
        transition: all 0.2s;
        white-space: nowrap;
        flex-shrink: 0;
    }
    .cj-copy-btn:hover { background: rgba(238,27,36,0.28); color: white; }
    .cj-copy-btn i { font-size: 0.6rem; }

    .cj-email-mailto {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        background: var(--red);
        color: white;
        text-decoration: none;
        border-radius: 10px;
        padding: 0.78rem 1.25rem;
        font-size: 0.82rem;
        font-weight: 700;
        letter-spacing: 0.04em;
        box-shadow: 0 4px 16px rgba(238,27,36,0.4);
        transition: background 0.2s, transform 0.15s;
    }
    .cj-email-mailto:hover { background: var(--red-dark); transform: translateY(-1px); }
    .cj-email-mailto i { font-size: 0.78rem; }

    .cj-resp-time {
        display: flex;
        align-items: center;
        gap: 0.45rem;
        margin-top: 0.85rem;
        font-size: 0.68rem;
        color: rgba(255,255,255,0.38);
        font-weight: 500;
    }
    .cj-resp-time i { color: #4ade80; font-size: 0.62rem; }

    /* ── Info tiles ── */
    .cj-info-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 0.85rem;
    }

    .cj-info-tile {
        background: var(--white);
        border: 1px solid var(--slate-200);
        border-radius: 14px;
        padding: 1.1rem 1rem;
        box-shadow: 0 2px 12px rgba(11,37,69,0.05);
        transition: box-shadow 0.2s, transform 0.2s;
        text-decoration: none;
    }
    .cj-info-tile:hover { box-shadow: 0 6px 20px rgba(11,37,69,0.1); transform: translateY(-2px); }

    .cj-info-tile-icon {
        width: 36px; height: 36px;
        border-radius: 9px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.9rem;
        margin-bottom: 0.7rem;
    }
    .cj-info-tile-icon.navy { background: rgba(11,37,69,0.07); color: var(--navy); }
    .cj-info-tile-icon.red  { background: rgba(238,27,36,0.08); color: var(--red); }
    .cj-info-tile-icon.green{ background: rgba(34,197,94,0.1);  color: #16a34a; }
    .cj-info-tile-icon.blue { background: rgba(59,130,246,0.1);  color: #2563eb; }

    .cj-info-tile-label {
        font-size: 0.62rem;
        font-weight: 800;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        color: var(--slate-400);
        margin-bottom: 0.22rem;
    }
    .cj-info-tile-val {
        font-size: 0.78rem;
        font-weight: 700;
        color: var(--slate-700);
        line-height: 1.45;
    }

    /* ── FAQ accordion ── */
    .cj-faq-card {
        background: var(--white);
        border: 1px solid var(--slate-200);
        border-radius: 20px;
        box-shadow: 0 2px 16px rgba(11,37,69,0.06);
        overflow: hidden;
    }
    .cj-faq-head {
        padding: 1.25rem 1.5rem 1rem;
        border-bottom: 1px solid var(--slate-100);
    }
    .cj-faq-head h3 {
        font-family: var(--font-d);
        font-size: 1.15rem;
        letter-spacing: 0.05em;
        color: var(--navy);
        margin: 0;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    .cj-faq-head h3 i { color: var(--red); font-size: 0.9rem; }

    .cj-faq-item {
        border-bottom: 1px solid var(--slate-100);
    }
    .cj-faq-item:last-child { border-bottom: none; }

    .cj-faq-q {
        width: 100%;
        background: none;
        border: none;
        text-align: left;
        padding: 1rem 1.5rem;
        font-family: var(--font-b);
        font-size: 0.82rem;
        font-weight: 600;
        color: var(--slate-700);
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 0.75rem;
        transition: color 0.18s, background 0.18s;
        -webkit-tap-highlight-color: transparent;
    }
    .cj-faq-q:hover { color: var(--navy); background: var(--slate-50); }
    .cj-faq-q[aria-expanded="true"] { color: var(--navy); }
    .cj-faq-q .cj-faq-ico {
        flex-shrink: 0;
        width: 22px; height: 22px;
        border-radius: 50%;
        background: var(--slate-100);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.6rem;
        color: var(--slate-400);
        transition: background 0.18s, color 0.18s, transform 0.25s;
    }
    .cj-faq-q[aria-expanded="true"] .cj-faq-ico {
        background: rgba(11,37,69,0.08);
        color: var(--navy);
        transform: rotate(180deg);
    }

    .cj-faq-a {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.32s var(--ease), padding 0.28s;
        padding: 0 1.5rem;
        font-size: 0.78rem;
        line-height: 1.72;
        color: var(--slate-500);
    }
    .cj-faq-a.open {
        max-height: 200px;
        padding-bottom: 1rem;
    }

    /* ══ SUCCESS TOAST ══ */
    .cj-toast {
        position: fixed;
        bottom: 1.5rem;
        left: 50%;
        transform: translateX(-50%) translateY(100px);
        background: var(--navy);
        color: white;
        padding: 0.85rem 1.5rem;
        border-radius: 12px;
        font-size: 0.82rem;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 0.6rem;
        box-shadow: 0 8px 32px rgba(11,37,69,0.28);
        z-index: 9999;
        transition: transform 0.4s var(--ease);
        white-space: nowrap;
    }
    .cj-toast.show { transform: translateX(-50%) translateY(0); }
    .cj-toast i { color: #4ade80; }

    /* ══ Keyframes ══ */
    @keyframes fadeDown {
        from { opacity:0; transform:translateY(-14px); }
        to   { opacity:1; transform:translateY(0); }
    }
</style>

<div class="cj-page">

    {{-- ── HERO BANNER ── --}}
    <div class="cj-hero">
        <div class="cj-hero-glow" aria-hidden="true"></div>
        <div class="cj-hero-bar-top" aria-hidden="true"></div>
        <div class="cj-hero-inner">
            <div class="cj-hero-badge">
                <div class="cj-hero-badge-dot"></div>
                <span>We respond within 24 hours</span>
                <div class="cj-hero-badge-dot"></div>
            </div>
            <h1 class="cj-hero-title">
                Get in <span>Touch</span><br>With Our Team
            </h1>
            <p class="cj-hero-sub">
                For invoice requests, manifest clearance, or general enquiries — our administration desk is ready to assist you.
            </p>
        </div>
    </div>

    {{-- ── MAIN CONTENT ── --}}
    <div class="cj-main">
        <div class="cj-main-inner">

            {{-- ── LEFT: Contact Form ── --}}
            <div class="cj-card">
                <div class="cj-card-head-bar"></div>
                <div class="cj-card-body">
                    <div class="cj-form-title">
                        <div class="cj-form-title-icon">
                            <i class="fa-solid fa-paper-plane"></i>
                        </div>
                        <h2>Send Us a Message</h2>
                    </div>
                    <p class="cj-form-desc">
                        Fill in the form below and our team will respond to your enquiry as soon as possible, usually within 24 hours.
                    </p>

                    <form class="cj-form" id="contactForm" action="{{ route('contact.send') }}" method="POST" novalidate>
                        @csrf

                        <div class="cj-row">
                            <div class="cj-field">
                                <label class="cj-label" for="cf_name">
                                    Full Name <span>*</span>
                                </label>
                                <div class="cj-input-wrap">
                                    <i class="fa-solid fa-user cj-input-ico"></i>
                                    <input
                                        type="text"
                                        id="cf_name"
                                        name="name"
                                        class="cj-input"
                                        placeholder="John Eze"
                                        autocomplete="name"
                                        required
                                        value="{{ old('name') }}"
                                    >
                                </div>
                                @error('name')
                                    <span style="color:var(--red);font-size:0.7rem;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="cj-field">
                                <label class="cj-label" for="cf_email">
                                    Email Address <span>*</span>
                                </label>
                                <div class="cj-input-wrap">
                                    <i class="fa-solid fa-envelope cj-input-ico"></i>
                                    <input
                                        type="email"
                                        id="cf_email"
                                        name="email"
                                        class="cj-input"
                                        placeholder="you@example.com"
                                        autocomplete="email"
                                        required
                                        value="{{ old('email') }}"
                                    >
                                </div>
                                @error('email')
                                    <span style="color:var(--red);font-size:0.7rem;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="cj-row">
                            <div class="cj-field">
                                <label class="cj-label" for="cf_phone">Phone Number</label>
                                <div class="cj-input-wrap">
                                    <i class="fa-solid fa-phone cj-input-ico"></i>
                                    <input
                                        type="tel"
                                        id="cf_phone"
                                        name="phone"
                                        class="cj-input"
                                        placeholder="+234 800 000 0000"
                                        autocomplete="tel"
                                        value="{{ old('phone') }}"
                                    >
                                </div>
                            </div>
                            <div class="cj-field">
                                <label class="cj-label" for="cf_tracking">
                                    Tracking ID (optional)
                                </label>
                                <div class="cj-input-wrap">
                                    <i class="fa-solid fa-barcode cj-input-ico"></i>
                                    <input
                                        type="text"
                                        id="cf_tracking"
                                        name="tracking_id"
                                        class="cj-input"
                                        placeholder="AJD-TX-00000"
                                        style="text-transform:uppercase;"
                                        autocomplete="off"
                                        value="{{ old('tracking_id') }}"
                                    >
                                </div>
                            </div>
                        </div>

                        <div class="cj-field">
                            <label class="cj-label" for="cf_subject">
                                Subject <span>*</span>
                            </label>
                            <select id="cf_subject" name="subject" class="cj-select" required>
                                <option value="" disabled {{ old('subject') ? '' : 'selected' }}>Select enquiry type…</option>
                                <option value="tracking"  {{ old('subject') == 'tracking'  ? 'selected' : '' }}>Parcel Tracking Enquiry</option>
                                <option value="invoice"   {{ old('subject') == 'invoice'   ? 'selected' : '' }}>Invoice / Payment Request</option>
                                <option value="customs"   {{ old('subject') == 'customs'   ? 'selected' : '' }}>Customs & Clearance</option>
                                <option value="booking"   {{ old('subject') == 'booking'   ? 'selected' : '' }}>New Booking</option>
                                <option value="complaint" {{ old('subject') == 'complaint' ? 'selected' : '' }}>Complaint / Feedback</option>
                                <option value="other"     {{ old('subject') == 'other'     ? 'selected' : '' }}>General Enquiry</option>
                            </select>
                            @error('subject')
                                <span style="color:var(--red);font-size:0.7rem;">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="cj-field">
                            <label class="cj-label" for="cf_message">
                                Message <span>*</span>
                            </label>
                            <textarea
                                id="cf_message"
                                name="message"
                                class="cj-textarea"
                                placeholder="Describe your enquiry in detail…"
                                required
                            >{{ old('message') }}</textarea>
                            @error('message')
                                <span style="color:var(--red);font-size:0.7rem;">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="cj-submit" id="cfSubmit">
                            <i class="fa-solid fa-paper-plane"></i>
                            <span>Send Message</span>
                        </button>

                        <p class="cj-form-note">
                            <i class="fa-solid fa-lock fa-xs"></i>
                            Your data is encrypted and never shared with third parties.
                        </p>
                    </form>
                </div>
            </div>

            {{-- ── RIGHT COLUMN ── --}}
            <div class="cj-right">

                {{-- Email spotlight --}}
                <div class="cj-email-card">
                    <div class="cj-email-card-glow" aria-hidden="true"></div>
                    <div class="cj-email-card-inner">
                        <div class="cj-email-card-label">
                            <i class="fa-solid fa-circle fa-xs"></i>
                            Central Communications Channel
                        </div>
                        <p style="color:rgba(255,255,255,0.85);font-size:0.78rem;line-height:1.65;margin:0.25rem 0 0;">
                            Reach our administration desk directly for all logistics, documentation, and support queries.
                        </p>

                        <div class="cj-email-address-wrap">
                            <a href="mailto:airjakedeliveryservices@gmail.com" class="cj-email-text">
                                airjakedeliveryservices@gmail.com
                            </a>
                            <button class="cj-copy-btn" id="copyEmailBtn" onclick="copyEmail(this)" aria-label="Copy email address">
                                <i class="fa-regular fa-copy"></i> Copy
                            </button>
                        </div>

                        <a href="mailto:airjakedeliveryservices@gmail.com" class="cj-email-mailto">
                            <i class="fa-solid fa-envelope"></i>
                            Open in Mail App
                        </a>

                        <div class="cj-resp-time">
                            <i class="fa-solid fa-circle fa-xs"></i>
                            Average response time: under 24 hours
                        </div>
                    </div>
                </div>

                {{-- Info tiles --}}
                <div class="cj-info-grid">
                    <div class="cj-info-tile">
                        <div class="cj-info-tile-icon navy">
                            <i class="fa-solid fa-clock"></i>
                        </div>
                        <div class="cj-info-tile-label">Office Hours</div>
                        <div class="cj-info-tile-val">Mon–Sat<br>7 AM – 9 PM</div>
                    </div>
                    <div class="cj-info-tile">
                        <div class="cj-info-tile-icon green">
                            <i class="fa-solid fa-headset"></i>
                        </div>
                        <div class="cj-info-tile-label">Live Support</div>
                        <div class="cj-info-tile-val">24/7 Chat<br>Available</div>
                    </div>
                    <div class="cj-info-tile">
                        <div class="cj-info-tile-icon red">
                            <i class="fa-solid fa-globe"></i>
                        </div>
                        <div class="cj-info-tile-label">Coverage</div>
                        <div class="cj-info-tile-val">150+<br>Countries</div>
                    </div>
                    <div class="cj-info-tile">
                        <div class="cj-info-tile-icon blue">
                            <i class="fa-solid fa-bolt"></i>
                        </div>
                        <div class="cj-info-tile-label">Response</div>
                        <div class="cj-info-tile-val">Under<br>24 Hours</div>
                    </div>
                </div>

                {{-- FAQ Accordion --}}
                <div class="cj-faq-card">
                    <div class="cj-faq-head">
                        <h3>
                            <i class="fa-solid fa-circle-question"></i>
                            Common Questions
                        </h3>
                    </div>

                    <div class="cj-faq-item">
                        <button class="cj-faq-q" aria-expanded="false" onclick="toggleFaq(this)">
                            <span>How do I track my parcel?</span>
                            <div class="cj-faq-ico"><i class="fa-solid fa-chevron-down"></i></div>
                        </button>
                        <div class="cj-faq-a">
                            Visit our tracking page and enter your unique waybill ID (e.g. AJD-TX-89210) to get live route updates and estimated delivery times.
                        </div>
                    </div>

                    <div class="cj-faq-item">
                        <button class="cj-faq-q" aria-expanded="false" onclick="toggleFaq(this)">
                            <span>What if my parcel is on custom hold?</span>
                            <div class="cj-faq-ico"><i class="fa-solid fa-chevron-down"></i></div>
                        </button>
                        <div class="cj-faq-a">
                            Email us with your tracking ID and we will liaise with the relevant customs authority to provide the required documentation and expedite clearance.
                        </div>
                    </div>

                    <div class="cj-faq-item">
                        <button class="cj-faq-q" aria-expanded="false" onclick="toggleFaq(this)">
                            <span>How do I get a delivery receipt?</span>
                            <div class="cj-faq-ico"><i class="fa-solid fa-chevron-down"></i></div>
                        </button>
                        <div class="cj-faq-a">
                            Receipts are automatically generated at the time of booking and can be re-downloaded from your tracking page at any time using your waybill ID.
                        </div>
                    </div>

                </div>

            </div>{{-- /.cj-right --}}

        </div>{{-- /.cj-main-inner --}}
    </div>{{-- /.cj-main --}}

</div>{{-- /.cj-page --}}

{{-- Toast notification --}}
<div class="cj-toast" id="cjToast" role="status" aria-live="polite">
    <i class="fa-solid fa-circle-check"></i>
    <span id="cjToastMsg">Email address copied!</span>
</div>

<script>
(function () {
    /* ── Copy email ── */
    window.copyEmail = function (btn) {
        navigator.clipboard.writeText('airjakedeliveryservices@gmail.com').then(function () {
            btn.innerHTML = '<i class="fa-solid fa-check"></i> Copied!';
            btn.style.background = 'rgba(34,197,94,0.2)';
            btn.style.borderColor = 'rgba(34,197,94,0.4)';
            btn.style.color = '#4ade80';
            showToast('Email address copied to clipboard!');
            setTimeout(function () {
                btn.innerHTML = '<i class="fa-regular fa-copy"></i> Copy';
                btn.style = '';
            }, 2500);
        });
    };

    /* ── Toast ── */
    window.showToast = function (msg) {
        var toast = document.getElementById('cjToast');
        document.getElementById('cjToastMsg').textContent = msg;
        toast.classList.add('show');
        setTimeout(function () { toast.classList.remove('show'); }, 3000);
    };

    /* ── FAQ accordion ── */
    window.toggleFaq = function (btn) {
        var expanded = btn.getAttribute('aria-expanded') === 'true';
        /* Close all */
        document.querySelectorAll('.cj-faq-q').forEach(function (b) {
            b.setAttribute('aria-expanded', 'false');
            b.nextElementSibling.classList.remove('open');
        });
        if (!expanded) {
            btn.setAttribute('aria-expanded', 'true');
            btn.nextElementSibling.classList.add('open');
        }
    };

    /* ── Form: tracking ID uppercase ── */
    var tidInput = document.getElementById('cf_tracking');
    if (tidInput) {
        tidInput.addEventListener('input', function () {
            this.value = this.value.toUpperCase();
        });
    }

    /* ── Form: loading state on submit ── */
    var form   = document.getElementById('contactForm');
    var submit = document.getElementById('cfSubmit');
    if (form && submit) {
        form.addEventListener('submit', function () {
            submit.disabled = true;
            submit.innerHTML =
                '<i class="fa-solid fa-circle-notch fa-spin"></i><span>Sending…</span>';
        });
    }

    /* ── Show success toast if session flash ── */
    @if(session('success'))
        showToast('{{ session("success") }}');
    @endif

}());
</script>

@endsection