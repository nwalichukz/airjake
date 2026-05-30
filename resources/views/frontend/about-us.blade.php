@extends('layouts.app')

@section('content')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Outfit:wght@300;400;500;600;700;800;900&display=swap');

    :root {
        --navy:      #0B2545;
        --navy-mid:  #134074;
        --navy-light:#1a5296;
        --red:       #EE1B24;
        --red-dark:  #C4151D;
        --white:     #ffffff;
        --off:       #F7F9FC;
        --s50:       #F8FAFC;
        --s100:      #F1F5F9;
        --s200:      #E2E8F0;
        --s400:      #94A3B8;
        --s500:      #64748B;
        --s600:      #475569;
        --s700:      #334155;
        --s800:      #1E293B;
        --gold:      #E8A020;
        --font-d:    'Bebas Neue', sans-serif;
        --font-b:    'Outfit', sans-serif;
        --ease:      cubic-bezier(0.4,0,0.2,1);
    }

    .about-page * { box-sizing: border-box; }
    .about-page { font-family: var(--font-b); background: var(--off); }

    /* ══ HERO ══ */
    .ab-hero {
        background: var(--navy);
        position: relative;
        overflow: hidden;
        padding: 5rem 1.25rem 6rem;
        text-align: center;
    }
    .ab-hero::before {
        content: '';
        position: absolute; inset: 0;
        background-image: radial-gradient(rgba(255,255,255,0.04) 1px, transparent 1px);
        background-size: 22px 22px;
        pointer-events: none;
    }
    .ab-hero::after {
        content: '';
        position: absolute; bottom: -1px; left: 0; right: 0;
        height: 70px;
        background: var(--off);
        clip-path: polygon(0 100%, 100% 0, 100% 100%);
    }
    .ab-hero-bar { position: absolute; top: 0; left: 0; right: 0; height: 4px; background: var(--red); }
    .ab-hero-glow {
        position: absolute; bottom: -100px; left: 50%;
        transform: translateX(-50%);
        width: 700px; height: 400px; border-radius: 50%;
        background: radial-gradient(ellipse, rgba(238,27,36,0.12) 0%, transparent 68%);
        pointer-events: none;
    }
    .ab-hero-glow2 {
        position: absolute; top: -80px; right: -80px;
        width: 400px; height: 400px; border-radius: 50%;
        background: radial-gradient(circle, rgba(19,64,116,0.5) 0%, transparent 65%);
        pointer-events: none;
    }

    .ab-hero-inner {
        position: relative; z-index: 1;
        max-width: 740px; margin: 0 auto;
        animation: fadeDown .6s ease both;
    }
    @keyframes fadeDown {
        from { opacity:0; transform:translateY(-18px); }
        to   { opacity:1; transform:translateY(0); }
    }

    .ab-hero-eyebrow {
        display: inline-flex; align-items: center; gap: 7px;
        background: rgba(238,27,36,0.12);
        border: 1px solid rgba(238,27,36,0.28);
        color: #ff9598; font-size: 0.62rem; font-weight: 700;
        letter-spacing: 0.16em; text-transform: uppercase;
        padding: 0.3rem 0.9rem; border-radius: 100px;
        margin-bottom: 1.5rem;
    }
    .pulse-dot {
        width: 5px; height: 5px; border-radius: 50%; background: var(--red);
        animation: pdot 2s infinite;
    }
    @keyframes pdot { 0%,100%{opacity:1;transform:scale(1);} 50%{opacity:.3;transform:scale(.6);} }

    .ab-hero-title {
        font-family: var(--font-d);
        font-size: clamp(2.4rem, 8vw, 4.5rem);
        letter-spacing: 0.04em; color: var(--white);
        line-height: 1.05; margin: 0 0 1.25rem;
    }
    .ab-hero-title span { color: var(--red); }

    .ab-hero-sub {
        font-size: clamp(0.85rem, 2.5vw, 1rem);
        line-height: 1.8; color: rgba(255,255,255,0.5);
        max-width: 580px; margin: 0 auto;
    }

    /* ══ SECTION WRAPPER ══ */
    .ab-section {
        max-width: 1160px; margin: 0 auto;
        padding: 4rem 1.25rem;
    }
    @media(min-width:768px){ .ab-section{ padding: 5rem 2rem; } }

    .ab-section-label {
        display: inline-flex; align-items: center; gap: 8px;
        font-size: 0.6rem; font-weight: 800;
        letter-spacing: 0.16em; text-transform: uppercase;
        color: var(--red); margin-bottom: 0.75rem;
    }
    .ab-section-label::before {
        content: ''; display: inline-block;
        width: 22px; height: 2px; background: var(--red);
    }

    .ab-section-title {
        font-family: var(--font-d);
        font-size: clamp(1.8rem, 5vw, 3rem);
        letter-spacing: 0.04em; color: var(--navy);
        line-height: 1.08; margin-bottom: 1rem;
    }
    .ab-section-title span { color: var(--red); }

    .ab-section-desc {
        font-size: 0.92rem; line-height: 1.8;
        color: var(--s500); max-width: 580px;
    }

    /* ══ STORY SECTION ══ */
    .ab-story {
        background: var(--white);
        border-top: 1px solid var(--s200);
        border-bottom: 1px solid var(--s200);
    }
    .ab-story-grid {
        display: grid; grid-template-columns: 1fr;
        gap: 3rem; align-items: center;
    }
    @media(min-width:860px){
        .ab-story-grid { grid-template-columns: 1fr 1fr; gap: 4rem; }
    }

    .ab-story-visual {
        position: relative;
    }
    .ab-story-card {
        background: var(--navy);
        border-radius: 20px; overflow: hidden;
        position: relative; aspect-ratio: 4/3;
        display: flex; align-items: center; justify-content: center;
    }
    .ab-story-card::before {
        content: '';
        position: absolute; inset: 0;
        background-image: radial-gradient(rgba(255,255,255,0.04) 1px, transparent 1px);
        background-size: 18px 18px;
    }
    .ab-story-card-glow {
        position: absolute; bottom: -60px; right: -60px;
        width: 280px; height: 280px; border-radius: 50%;
        background: radial-gradient(circle, rgba(238,27,36,0.18) 0%, transparent 65%);
        pointer-events: none;
    }
    .ab-story-card-inner {
        position: relative; z-index: 1;
        text-align: center; padding: 2rem;
    }
    .ab-story-icon {
        width: 80px; height: 80px; margin: 0 auto 1.25rem;
        background: var(--red); border-radius: 20px;
        display: flex; align-items: center; justify-content: center;
        font-size: 2rem; color: #fff;
        box-shadow: 0 8px 32px rgba(238,27,36,0.45);
    }
    .ab-story-card-title {
        font-family: var(--font-d);
        font-size: 2rem; letter-spacing: 0.04em;
        color: #fff; margin-bottom: 0.5rem;
    }
    .ab-story-card-sub {
        font-size: 0.75rem; font-weight: 600;
        letter-spacing: 0.12em; text-transform: uppercase;
        color: rgba(255,255,255,0.38);
    }

    /* Float badge */
    .ab-float-badge {
        position: absolute; bottom: -18px; right: -10px;
        background: var(--gold); color: var(--navy);
        border-radius: 12px; padding: 12px 18px;
        font-size: 0.7rem; font-weight: 800;
        letter-spacing: 0.08em; text-transform: uppercase;
        box-shadow: 0 6px 24px rgba(232,160,32,0.35);
        white-space: nowrap;
    }
    @media(min-width:860px){ .ab-float-badge{ right: -24px; } }

    .ab-story-text p {
        font-size: 0.92rem; line-height: 1.85;
        color: var(--s600); margin-bottom: 1rem;
    }
    .ab-story-text p:last-child { margin-bottom: 0; }
    .ab-story-text strong { color: var(--navy); font-weight: 700; }

    /* ══ STATS ══ */
    .ab-stats {
        background: var(--navy);
        position: relative; overflow: hidden;
    }
    .ab-stats::before {
        content: '';
        position: absolute; inset: 0;
        background-image: radial-gradient(rgba(255,255,255,0.03) 1px, transparent 1px);
        background-size: 20px 20px;
    }
    .ab-stats-glow {
        position: absolute; top: -80px; left: 50%;
        transform: translateX(-50%);
        width: 600px; height: 300px; border-radius: 50%;
        background: radial-gradient(ellipse, rgba(238,27,36,0.1) 0%, transparent 68%);
    }
    .ab-stats-inner {
        position: relative; z-index: 1;
        max-width: 1160px; margin: 0 auto;
        padding: 4rem 1.25rem;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 2rem;
    }
    @media(min-width:640px){ .ab-stats-inner{ grid-template-columns: repeat(4, 1fr); } }
    @media(min-width:768px){ .ab-stats-inner{ padding: 5rem 2rem; } }

    .ab-stat {
        text-align: center;
        padding: 1.5rem 1rem;
        border: 1px solid rgba(255,255,255,0.07);
        border-radius: 16px;
        background: rgba(255,255,255,0.03);
        transition: border-color .2s, background .2s;
    }
    .ab-stat:hover {
        border-color: rgba(238,27,36,0.3);
        background: rgba(238,27,36,0.05);
    }
    .ab-stat-value {
        font-family: var(--font-d);
        font-size: clamp(2.2rem, 5vw, 3.2rem);
        letter-spacing: 0.03em; color: #fff;
        line-height: 1; margin-bottom: 0.5rem;
    }
    .ab-stat-value span { color: var(--red); }
    .ab-stat-label {
        font-size: 0.68rem; font-weight: 700;
        letter-spacing: 0.12em; text-transform: uppercase;
        color: rgba(255,255,255,0.38);
    }

    /* ══ VALUES ══ */
    .ab-values-grid {
        display: grid; grid-template-columns: 1fr;
        gap: 1.25rem; margin-top: 3rem;
    }
    @media(min-width:500px){ .ab-values-grid{ grid-template-columns: repeat(2, 1fr); } }
    @media(min-width:900px){ .ab-values-grid{ grid-template-columns: repeat(3, 1fr); } }

    .ab-value-card {
        background: var(--white);
        border: 1px solid var(--s200);
        border-radius: 16px; padding: 1.75rem 1.5rem;
        box-shadow: 0 2px 16px rgba(11,37,69,0.06);
        transition: transform .22s var(--ease), box-shadow .22s, border-color .22s;
        position: relative; overflow: hidden;
    }
    .ab-value-card::before {
        content: '';
        position: absolute; top: 0; left: 0; right: 0;
        height: 3px;
        background: linear-gradient(90deg, var(--navy), var(--navy-mid));
        transform: scaleX(0); transform-origin: left;
        transition: transform .3s var(--ease);
    }
    .ab-value-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 32px rgba(11,37,69,0.12);
        border-color: var(--s200);
    }
    .ab-value-card:hover::before { transform: scaleX(1); }

    .ab-value-icon {
        width: 46px; height: 46px; border-radius: 12px;
        display: flex; align-items: center; justify-content: center;
        font-size: 1.1rem; margin-bottom: 1rem; flex-shrink: 0;
    }
    .ab-value-icon.navy { background: rgba(11,37,69,0.08); color: var(--navy); }
    .ab-value-icon.red  { background: rgba(238,27,36,0.08); color: var(--red); }
    .ab-value-icon.gold { background: rgba(232,160,32,0.1); color: var(--gold); }

    .ab-value-title {
        font-size: 0.92rem; font-weight: 800;
        color: var(--navy); margin-bottom: 0.5rem;
    }
    .ab-value-desc {
        font-size: 0.78rem; line-height: 1.7;
        color: var(--s500);
    }

    /* ══ TEAM ══ */
    .ab-team { background: var(--s50); border-top: 1px solid var(--s200); border-bottom: 1px solid var(--s200); }
    .ab-team-grid {
        display: grid; grid-template-columns: 1fr;
        gap: 1.5rem; margin-top: 3rem;
    }
    @media(min-width:500px){ .ab-team-grid{ grid-template-columns: repeat(2, 1fr); } }
    @media(min-width:860px){ .ab-team-grid{ grid-template-columns: repeat(4, 1fr); } }

    .ab-team-card {
        background: var(--white);
        border: 1px solid var(--s200);
        border-radius: 16px; overflow: hidden;
        box-shadow: 0 2px 12px rgba(11,37,69,0.06);
        transition: transform .2s var(--ease), box-shadow .2s;
        text-align: center;
    }
    .ab-team-card:hover { transform: translateY(-4px); box-shadow: 0 8px 28px rgba(11,37,69,0.12); }

    .ab-team-avatar {
        height: 120px; position: relative;
        background: var(--navy);
        display: flex; align-items: center; justify-content: center;
    }
    .ab-team-avatar::before {
        content: '';
        position: absolute; inset: 0;
        background-image: radial-gradient(rgba(255,255,255,0.04) 1px, transparent 1px);
        background-size: 16px 16px;
    }
    .ab-team-avatar-initials {
        position: relative; z-index: 1;
        width: 64px; height: 64px; border-radius: 50%;
        background: var(--red);
        display: flex; align-items: center; justify-content: center;
        font-family: var(--font-d); font-size: 1.4rem;
        letter-spacing: 0.05em; color: #fff;
        box-shadow: 0 4px 18px rgba(238,27,36,0.42);
    }
    .ab-team-info { padding: 1.25rem 1rem; }
    .ab-team-name {
        font-size: 0.9rem; font-weight: 800;
        color: var(--navy); margin-bottom: 3px;
    }
    .ab-team-role {
        font-size: 0.68rem; font-weight: 700;
        letter-spacing: 0.1em; text-transform: uppercase;
        color: var(--red); margin-bottom: 0.6rem;
    }
    .ab-team-bio {
        font-size: 0.72rem; line-height: 1.65;
        color: var(--s500);
    }

    /* ══ WHY US ══ */
    .ab-why-grid {
        display: grid; grid-template-columns: 1fr;
        gap: 1rem; margin-top: 3rem;
    }
    @media(min-width:640px){ .ab-why-grid{ grid-template-columns: repeat(2, 1fr); } }

    .ab-why-item {
        display: flex; align-items: flex-start; gap: 14px;
        background: var(--white);
        border: 1px solid var(--s200);
        border-radius: 14px; padding: 1.25rem 1.5rem;
        box-shadow: 0 2px 10px rgba(11,37,69,0.05);
        transition: border-color .18s, box-shadow .18s;
    }
    .ab-why-item:hover { border-color: rgba(238,27,36,0.25); box-shadow: 0 4px 20px rgba(11,37,69,0.09); }

    .ab-why-num {
        font-family: var(--font-d);
        font-size: 2rem; letter-spacing: 0.04em;
        color: rgba(238,27,36,0.15); line-height: 1; flex-shrink: 0;
        min-width: 36px;
    }
    .ab-why-title {
        font-size: 0.88rem; font-weight: 800;
        color: var(--navy); margin-bottom: 4px;
    }
    .ab-why-desc {
        font-size: 0.75rem; line-height: 1.68;
        color: var(--s500);
    }

    /* ══ CTA ══ */
    .ab-cta {
        background: var(--navy); position: relative; overflow: hidden;
        text-align: center;
    }
    .ab-cta::before {
        content: '';
        position: absolute; inset: 0;
        background-image: radial-gradient(rgba(255,255,255,0.04) 1px, transparent 1px);
        background-size: 22px 22px;
    }
    .ab-cta-glow {
        position: absolute; bottom: -80px; left: 50%;
        transform: translateX(-50%);
        width: 500px; height: 300px; border-radius: 50%;
        background: radial-gradient(ellipse, rgba(238,27,36,0.14) 0%, transparent 68%);
    }
    .ab-cta-inner {
        position: relative; z-index: 1;
        max-width: 640px; margin: 0 auto;
        padding: 5rem 1.25rem;
    }
    .ab-cta-title {
        font-family: var(--font-d);
        font-size: clamp(2rem, 6vw, 3.5rem);
        letter-spacing: 0.04em; color: #fff;
        line-height: 1.05; margin-bottom: 1rem;
    }
    .ab-cta-title span { color: var(--red); }
    .ab-cta-sub {
        font-size: 0.9rem; line-height: 1.75;
        color: rgba(255,255,255,0.45);
        margin-bottom: 2.25rem;
    }
    .ab-cta-btns {
        display: flex; align-items: center;
        justify-content: center; gap: 0.75rem; flex-wrap: wrap;
    }
    .ab-btn-red {
        display: inline-flex; align-items: center; gap: 8px;
        background: var(--red); color: #fff;
        padding: 0.82rem 1.75rem; border-radius: 10px;
        font-family: var(--font-b); font-size: 0.88rem; font-weight: 700;
        letter-spacing: 0.04em; text-decoration: none;
        box-shadow: 0 5px 20px rgba(238,27,36,0.4);
        transition: all .2s;
    }
    .ab-btn-red:hover { background: var(--red-dark); transform: translateY(-1px); box-shadow: 0 8px 26px rgba(238,27,36,0.5); }
    .ab-btn-outline {
        display: inline-flex; align-items: center; gap: 8px;
        background: transparent; color: rgba(255,255,255,0.8);
        padding: 0.8rem 1.75rem; border-radius: 10px;
        font-family: var(--font-b); font-size: 0.88rem; font-weight: 600;
        text-decoration: none;
        border: 1.5px solid rgba(255,255,255,0.22);
        transition: all .2s;
    }
    .ab-btn-outline:hover { border-color: rgba(255,255,255,0.6); color: #fff; background: rgba(255,255,255,0.06); }
</style>

<div class="about-page">

    {{-- ══ HERO ══ --}}
    <section class="ab-hero" aria-label="About Air Jake">
        <div class="ab-hero-bar" aria-hidden="true"></div>
        <div class="ab-hero-glow" aria-hidden="true"></div>
        <div class="ab-hero-glow2" aria-hidden="true"></div>
        <div class="ab-hero-inner">
            <div class="ab-hero-eyebrow">
                <div class="pulse-dot"></div>
                Our Story
                <div class="pulse-dot"></div>
            </div>
            <h1 class="ab-hero-title">
                Moving the World<br>One <span>Parcel</span> at a Time
            </h1>
            <p class="ab-hero-sub">
                Air Jake Delivery Services was built on a single promise — that every shipment, regardless of size or destination, deserves the highest standard of care, speed, and transparency.
            </p>
        </div>
    </section>

    {{-- ══ STORY ══ --}}
    <section class="ab-story">
        <div class="ab-section">
            <div class="ab-story-grid">
                <div class="ab-story-visual">
                    <div class="ab-story-card">
                        <div class="ab-story-card-glow" aria-hidden="true"></div>
                        <div class="ab-story-card-inner">
                            <div class="ab-story-icon">
                                <i class="fa-solid fa-plane-departure" aria-hidden="true"></i>
                            </div>
                            <div class="ab-story-card-title">AIR JAKE</div>
                            <div class="ab-story-card-sub">Est. 2018 · Global Freight</div>
                        </div>
                    </div>
                    <div class="ab-float-badge">
                        <i class="fa-solid fa-globe" style="margin-right:5px;"></i>
                        150+ Countries Served
                    </div>
                </div>

                <div class="ab-story-text">
                    <div class="ab-section-label">Who We Are</div>
                    <h2 class="ab-section-title">Built for <span>Reliability</span></h2>
                    <p>
                        Air Jake Delivery Services was founded in 2018 with a clear mission: to make international air freight <strong>accessible, transparent, and dependable</strong> for businesses and individuals across the globe.
                    </p>
                    <p>
                        What started as a small courier operation has grown into a trusted logistics network spanning <strong>150+ countries</strong>, processing thousands of shipments every day. Our platform combines real-time satellite tracking, customs expertise, and dedicated human support to ensure every parcel reaches its destination safely.
                    </p>
                    <p>
                        We believe logistics should be simple. That's why we've invested in technology that gives you full visibility of your shipment — from the moment it's picked up to the second it's delivered.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ══ STATS ══ --}}
    <section class="ab-stats" aria-label="Key statistics">
        <div class="ab-stats-glow" aria-hidden="true"></div>
        <div class="ab-stats-inner">
            <div class="ab-stat">
                <div class="ab-stat-value">150<span>+</span></div>
                <div class="ab-stat-label">Countries Covered</div>
            </div>
            <div class="ab-stat">
                <div class="ab-stat-value">2M<span>+</span></div>
                <div class="ab-stat-label">Parcels Delivered</div>
            </div>
            <div class="ab-stat">
                <div class="ab-stat-value">99<span>%</span></div>
                <div class="ab-stat-label">On-Time Rate</div>
            </div>
            <div class="ab-stat">
                <div class="ab-stat-value">24<span>/7</span></div>
                <div class="ab-stat-label">Live Support</div>
            </div>
        </div>
    </section>

    {{-- ══ VALUES ══ --}}
    <section>
        <div class="ab-section">
            <div class="ab-section-label">What We Stand For</div>
            <h2 class="ab-section-title">Our Core <span>Values</span></h2>
            <p class="ab-section-desc">
                Every decision we make at Air Jake is guided by the principles that have earned us the trust of millions of customers worldwide.
            </p>

            <div class="ab-values-grid">
                <div class="ab-value-card">
                    <div class="ab-value-icon red"><i class="fa-solid fa-shield-halved"></i></div>
                    <div class="ab-value-title">Security First</div>
                    <div class="ab-value-desc">Every consignment is handled with strict compliance protocols and end-to-end encryption of tracking data to protect your cargo and information.</div>
                </div>
                <div class="ab-value-card">
                    <div class="ab-value-icon navy"><i class="fa-solid fa-satellite"></i></div>
                    <div class="ab-value-title">Full Transparency</div>
                    <div class="ab-value-desc">Real-time satellite tracking means you always know where your parcel is — no guesswork, no delays in communication, ever.</div>
                </div>
                <div class="ab-value-card">
                    <div class="ab-value-icon gold"><i class="fa-solid fa-bolt"></i></div>
                    <div class="ab-value-title">Speed &amp; Precision</div>
                    <div class="ab-value-desc">Our optimised air routes and carrier partnerships ensure the fastest possible transit times with minimal handling touchpoints.</div>
                </div>
                <div class="ab-value-card">
                    <div class="ab-value-icon navy"><i class="fa-solid fa-headset"></i></div>
                    <div class="ab-value-title">Human Support</div>
                    <div class="ab-value-desc">Behind every tracking number is a real team ready to resolve customs holds, documentation issues, and delivery queries 24/7.</div>
                </div>
                <div class="ab-value-card">
                    <div class="ab-value-icon red"><i class="fa-solid fa-handshake"></i></div>
                    <div class="ab-value-title">Customer Trust</div>
                    <div class="ab-value-desc">We earn trust through consistent delivery, honest pricing, and proactive communication — not just promises.</div>
                </div>
                <div class="ab-value-card">
                    <div class="ab-value-icon gold"><i class="fa-solid fa-leaf"></i></div>
                    <div class="ab-value-title">Responsible Logistics</div>
                    <div class="ab-value-desc">We are committed to reducing our environmental footprint by partnering with carriers that meet modern sustainability standards.</div>
                </div>
            </div>
        </div>
    </section>

    {{-- ══ WHY US ══ --}}
    <section style="background:var(--white); border-top:1px solid var(--s200);">
        <div class="ab-section">
            <div class="ab-section-label">Why Air Jake</div>
            <h2 class="ab-section-title">What Makes Us <span>Different</span></h2>
            <p class="ab-section-desc">
                We don't just move parcels — we move them with intelligence, accountability, and care that the industry rarely delivers.
            </p>

            <div class="ab-why-grid">
                <div class="ab-why-item">
                    <div class="ab-why-num">01</div>
                    <div>
                        <div class="ab-why-title">Live Satellite Coordinates</div>
                        <div class="ab-why-desc">Every parcel is geo-tagged with live GPS coordinates visible on an interactive map — not just status text updates.</div>
                    </div>
                </div>
                <div class="ab-why-item">
                    <div class="ab-why-num">02</div>
                    <div>
                        <div class="ab-why-title">Customs Clearance Support</div>
                        <div class="ab-why-desc">Our in-house customs team handles documentation, compliance audits, and clearance delays so you never get stuck at the border.</div>
                    </div>
                </div>
                <div class="ab-why-item">
                    <div class="ab-why-num">03</div>
                    <div>
                        <div class="ab-why-title">Instant Waybill Generation</div>
                        <div class="ab-why-desc">Book a shipment and receive a complete, shareable PDF waybill receipt in seconds — accessible from any device.</div>
                    </div>
                </div>
                <div class="ab-why-item">
                    <div class="ab-why-num">04</div>
                    <div>
                        <div class="ab-why-title">Multi-Currency Pricing</div>
                        <div class="ab-why-desc">Transparent tariff rates with no hidden fees, displayed in your local currency, with full cost breakdowns on every invoice.</div>
                    </div>
                </div>
                <div class="ab-why-item">
                    <div class="ab-why-num">05</div>
                    <div>
                        <div class="ab-why-title">Priority Fragile Handling</div>
                        <div class="ab-why-desc">Specialist packaging protocols for fragile, high-value, and time-sensitive cargo ensure your items arrive intact.</div>
                    </div>
                </div>
                <div class="ab-why-item">
                    <div class="ab-why-num">06</div>
                    <div>
                        <div class="ab-why-title">150+ Country Network</div>
                        <div class="ab-why-desc">Our global carrier partnerships give you direct access to express routes across Africa, Europe, Asia, the Americas and beyond.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ══ TEAM ══ --}}
    {{--<section class="ab-team">
        <div class="ab-section">
            <div class="ab-section-label">The People Behind It</div>
            <h2 class="ab-section-title">Meet the <span>Team</span></h2>
            <p class="ab-section-desc">
                A dedicated group of logistics professionals, technologists, and customer advocates working around the clock for your shipments.
            </p>

            <div class="ab-team-grid">
                <div class="ab-team-card">
                    <div class="ab-team-avatar">
                        <div class="ab-team-avatar-initials">JA</div>
                    </div>
                    <div class="ab-team-info">
                        <div class="ab-team-name">Jacob Adeyemi</div>
                        <div class="ab-team-role">Founder &amp; CEO</div>
                        <div class="ab-team-bio">Logistics entrepreneur with 15+ years in international air freight. Built Air Jake from the ground up with a focus on technology-first delivery.</div>
                    </div>
                </div>
                <div class="ab-team-card">
                    <div class="ab-team-avatar">
                        <div class="ab-team-avatar-initials">NK</div>
                    </div>
                    <div class="ab-team-info">
                        <div class="ab-team-name">Nkechi Okonkwo</div>
                        <div class="ab-team-role">Head of Operations</div>
                        <div class="ab-team-bio">Oversees global carrier partnerships and terminal operations across all 150+ countries in our network.</div>
                    </div>
                </div>
                <div class="ab-team-card">
                    <div class="ab-team-avatar">
                        <div class="ab-team-avatar-initials">MS</div>
                    </div>
                    <div class="ab-team-info">
                        <div class="ab-team-name">Marcus Silva</div>
                        <div class="ab-team-role">Chief Technology Officer</div>
                        <div class="ab-team-bio">Engineer behind our real-time tracking platform and satellite coordinate integration that powers every shipment.</div>
                    </div>
                </div>
                <div class="ab-team-card">
                    <div class="ab-team-avatar">
                        <div class="ab-team-avatar-initials">FO</div>
                    </div>
                    <div class="ab-team-info">
                        <div class="ab-team-name">Fatima Omar</div>
                        <div class="ab-team-role">Head of Customer Success</div>
                        <div class="ab-team-bio">Leads a 24/7 support team dedicated to resolving customs holds, delivery queries, and escalations with speed and empathy.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}

    {{-- ══ CTA ══ --}}
    <section class="ab-cta" aria-label="Get started">
        <div class="ab-cta-glow" aria-hidden="true"></div>
        <div class="ab-cta-inner">
            <h2 class="ab-cta-title">
                Ready to Ship<br>with <span>Confidence?</span>
            </h2>
            <p class="ab-cta-sub">
                Join millions of customers who trust Air Jake to move their cargo safely and on time — anywhere in the world.
            </p>
            <div class="ab-cta-btns">
                <a href="{{ url('/contact') }}" class="ab-btn-red">
                    <i class="fa-solid fa-paper-plane"></i>
                    Get in Touch
                </a>
                <a href="#trackID" class="ab-btn-outline">
                    <i class="fa-solid fa-location-dot"></i>
                    Track a Parcel
                </a>
            </div>
        </div>
    </section>

</div>
@endsection