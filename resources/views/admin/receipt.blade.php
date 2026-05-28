<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Waybill Receipt — {{$parcel->tracking_id}} · Air Jake Delivery</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Outfit:wght@300;400;500;600;700;800;900&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --navy:     #0B2545;
      --navy-mid: #134074;
      --red:      #EE1B24;
      --red-dark: #C4151D;
      --white:    #ffffff;
      --off:      #F7F9FC;
      --s50:      #F8FAFC;
      --s100:     #F1F5F9;
      --s200:     #E2E8F0;
      --s300:     #CBD5E1;
      --s400:     #94A3B8;
      --s500:     #64748B;
      --s600:     #475569;
      --s700:     #334155;
      --s800:     #1E293B;
      --font-d:   'Bebas Neue', sans-serif;
      --font-b:   'Outfit', sans-serif;
      --font-m:   'DM Mono', monospace;
      --ease:     cubic-bezier(0.4,0,0.2,1);
    }

    html { -webkit-text-size-adjust: 100%; }

    body {
      font-family: var(--font-b);
      background: var(--off);
      min-height: 100svh;
      -webkit-font-smoothing: antialiased;
      padding: 0 0 48px;
    }

    /* ══ ACTION BAR ══ */
    .action-bar {
      background: var(--navy);
      border-bottom: 3px solid var(--red);
      padding: 0 20px;
      height: 58px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      position: sticky;
      top: 0;
      z-index: 100;
    }
    .action-brand {
      display: flex;
      align-items: center;
      gap: 10px;
    }
    .action-brand-icon {
      width: 32px; height: 32px;
      background: var(--red);
      border-radius: 8px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 13px;
      color: #fff;
      box-shadow: 0 0 16px rgba(238,27,36,0.4);
      flex-shrink: 0;
    }
    .action-brand-name {
      font-family: var(--font-d);
      font-size: 1.15rem;
      letter-spacing: 0.06em;
      color: var(--white);
      line-height: 1;
    }
    .action-brand-sub {
      font-size: 0.5rem;
      font-weight: 600;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: rgba(255,255,255,0.3);
      display: block;
      margin-top: 2px;
    }
    .action-btns {
      display: flex;
      align-items: center;
      gap: 8px;
    }
    .btn {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      padding: 7px 14px;
      border-radius: 8px;
      font-family: var(--font-b);
      font-size: 0.68rem;
      font-weight: 700;
      letter-spacing: 0.05em;
      text-transform: uppercase;
      cursor: pointer;
      border: none;
      transition: all .18s var(--ease);
      white-space: nowrap;
      -webkit-tap-highlight-color: transparent;
    }
    .btn i { font-size: 0.7rem; }
    .btn-outline {
      background: rgba(255,255,255,0.07);
      border: 1px solid rgba(255,255,255,0.14);
      color: rgba(255,255,255,0.7);
    }
    .btn-outline:hover { background: rgba(255,255,255,0.13); color: #fff; }
    .btn-red {
      background: var(--red);
      color: #fff;
      box-shadow: 0 3px 14px rgba(238,27,36,0.35);
    }
    .btn-red:hover { background: var(--red-dark); }
    .btn-red:active { transform: scale(.97); }

    /* ══ PAGE ══ */
    .page-wrap {
      max-width: 780px;
      margin: 32px auto 0;
      padding: 0 16px;
    }
    @media(min-width:640px){ .page-wrap{ padding: 0 24px; } }

    /* ══ RECEIPT ══ */
    .receipt {
      background: var(--white);
      border-radius: 20px;
      border: 1px solid var(--s200);
      box-shadow: 0 4px 40px rgba(11,37,69,0.1);
      overflow: hidden;
      animation: riseUp .4s var(--ease) both;
    }
    @keyframes riseUp {
      from{ opacity:0; transform:translateY(14px); }
      to{ opacity:1; transform:translateY(0); }
    }

    /* ── RECEIPT TOP BAND ── */
    .receipt-band {
      height: 5px;
      background: linear-gradient(90deg, var(--navy) 0%, var(--navy-mid) 50%, var(--red) 100%);
    }

    /* ── RECEIPT HEAD ── */
    .receipt-head {
      background: var(--navy);
      padding: 28px 28px 0;
      position: relative;
      overflow: hidden;
    }
    .receipt-head::before {
      content: '';
      position: absolute;
      inset: 0;
      background-image: radial-gradient(rgba(255,255,255,0.035) 1px, transparent 1px);
      background-size: 20px 20px;
      pointer-events: none;
    }
    .receipt-head-glow {
      position: absolute;
      top: -80px; right: -80px;
      width: 300px; height: 300px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(238,27,36,0.13) 0%, transparent 65%);
      pointer-events: none;
    }
    .receipt-head-inner {
      position: relative;
      z-index: 1;
      display: flex;
      flex-direction: column;
      gap: 18px;
      padding-bottom: 24px;
    }
    @media(min-width:540px){
      .receipt-head-inner {
        flex-direction: row;
        align-items: flex-start;
        justify-content: space-between;
      }
    }

    .receipt-co {
      display: flex;
      align-items: center;
      gap: 12px;
    }
    .receipt-co-logo {
      width: 44px; height: 44px;
      background: var(--red);
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 18px;
      color: #fff;
      box-shadow: 0 4px 16px rgba(238,27,36,0.4);
      flex-shrink: 0;
    }
    .receipt-co-name {
      font-family: var(--font-d);
      font-size: clamp(1.2rem, 4vw, 1.6rem);
      letter-spacing: 0.05em;
      color: var(--white);
      line-height: 1;
    }
    .receipt-co-tag {
      font-size: 0.58rem;
      font-weight: 700;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: rgba(255,255,255,0.35);
      margin-top: 3px;
    }

    .receipt-ref {
      text-align: left;
    }
    @media(min-width:540px){ .receipt-ref{ text-align: right; } }

    .receipt-ref-label {
      font-size: 0.56rem;
      font-weight: 800;
      letter-spacing: 0.16em;
      text-transform: uppercase;
      color: rgba(255,255,255,0.28);
      margin-bottom: 6px;
    }
    .receipt-ref-code {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(255,255,255,0.06);
      border: 1px solid rgba(255,255,255,0.1);
      padding: 9px 14px;
      border-radius: 10px;
    }
    .receipt-ref-code span {
      font-family: var(--font-m);
      font-size: clamp(0.78rem, 2.5vw, 0.95rem);
      font-weight: 500;
      color: var(--white);
      letter-spacing: 0.1em;
    }
    .copy-btn {
      background: none;
      border: none;
      color: rgba(255,255,255,0.35);
      cursor: pointer;
      font-size: 0.72rem;
      padding: 2px 4px;
      transition: color .15s;
      line-height: 1;
    }
    .copy-btn:hover { color: #fff; }

    /* Status strip */
    .receipt-strip {
      background: rgba(0,0,0,0.2);
      border-top: 1px solid rgba(255,255,255,0.06);
      padding: 10px 28px;
      display: flex;
      align-items: center;
      gap: 10px;
      flex-wrap: wrap;
    }
    .s-chip {
      display: inline-flex;
      align-items: center;
      gap: 5px;
      padding: 4px 10px;
      border-radius: 6px;
      font-size: 0.6rem;
      font-weight: 800;
      letter-spacing: 0.07em;
      text-transform: uppercase;
    }
    .s-chip.amber {
      background: rgba(217,119,6,0.2);
      border: 1px solid rgba(217,119,6,0.3);
      color: #FBBF24;
    }
    .s-chip.green {
      background: rgba(16,185,129,0.15);
      border: 1px solid rgba(16,185,129,0.25);
      color: #34d399;
    }
    .s-chip.red {
      background: rgba(238,27,36,0.15);
      border: 1px solid rgba(238,27,36,0.25);
      color: #f87171;
    }
    .s-chip .cdot {
      width: 5px; height: 5px;
      border-radius: 50%;
      background: currentColor;
      animation: cdotPulse 1.8s infinite;
    }
    @keyframes cdotPulse {
      0%,100%{opacity:1;} 50%{opacity:.25;}
    }
    .strip-date {
      font-size: 0.6rem;
      font-weight: 600;
      color: rgba(255,255,255,0.28);
      margin-left: auto;
    }

    /* ── RECEIPT BODY ── */
    .receipt-body {
      padding: 28px;
    }
    @media(min-width:640px){ .receipt-body{ padding: 32px; } }

    /* Section block */
    .r-section {
      margin-bottom: 28px;
    }
    .r-section:last-child { margin-bottom: 0; }

    .r-section-head {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 16px;
    }
    .r-section-icon {
      width: 30px; height: 30px;
      border-radius: 8px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 12px;
      flex-shrink: 0;
    }
    .r-section-icon.navy { background: rgba(11,37,69,0.07); color: var(--navy); }
    .r-section-icon.red  { background: rgba(238,27,36,0.07); color: var(--red); }
    .r-section-icon.slate{ background: var(--s100); color: var(--s600); }

    .r-section-title {
      font-size: 0.62rem;
      font-weight: 800;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: var(--s500);
      flex: 1;
    }
    .r-section-head::after {
      content: '';
      flex: 1;
      height: 1px;
      background: var(--s100);
    }

    /* Fields grid */
    .r-fields {
      display: grid;
      grid-template-columns: 1fr;
      gap: 0;
      border: 1px solid var(--s200);
      border-radius: 12px;
      overflow: hidden;
    }
    @media(min-width:500px){
      .r-fields { grid-template-columns: 1fr 1fr; }
    }
    @media(min-width:700px){
      .r-fields.cols-3 { grid-template-columns: 1fr 1fr 1fr; }
    }

    .r-field {
      padding: 14px 16px;
      border-bottom: 1px solid var(--s100);
      border-right: none;
      background: var(--white);
      transition: background .15s;
    }
    .r-field:hover { background: var(--s50); }

    @media(min-width:500px){
      .r-field { border-right: 1px solid var(--s100); }
      .r-field:nth-child(2n) { border-right: none; }
      /* Remove bottom border on last row */
      .r-fields.cols-2 .r-field:nth-last-child(-n+2):nth-child(2n+1),
      .r-fields.cols-2 .r-field:nth-last-child(-n+2):nth-child(2n+1) ~ .r-field {
        border-bottom: none;
      }
    }
    @media(min-width:700px){
      .r-fields.cols-3 .r-field:nth-child(2n) { border-right: 1px solid var(--s100); }
      .r-fields.cols-3 .r-field:nth-child(3n) { border-right: none; }
    }

    /* Always remove bottom border from last child */
    .r-field:last-child { border-bottom: none; }
    @media(min-width:500px){
      .r-fields.cols-2 .r-field:nth-last-child(1),
      .r-fields.cols-2 .r-field:nth-last-child(2) { border-bottom: none; }
    }
    @media(min-width:700px){
      .r-fields.cols-3 .r-field:nth-last-child(1),
      .r-fields.cols-3 .r-field:nth-last-child(2),
      .r-fields.cols-3 .r-field:nth-last-child(3) { border-bottom: none; }
    }

    .r-field-label {
      font-size: 0.58rem;
      font-weight: 800;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: var(--s400);
      margin-bottom: 4px;
    }
    .r-field-value {
      font-size: 0.82rem;
      font-weight: 600;
      color: var(--s800);
      line-height: 1.4;
    }
    .r-field-value.mono {
      font-family: var(--font-m);
      font-size: 0.78rem;
      font-weight: 500;
    }
    .r-field-value.large {
      font-family: var(--font-d);
      font-size: 1.2rem;
      letter-spacing: 0.03em;
      color: var(--navy);
    }
    .r-field-value.red { color: var(--red); font-weight: 700; }

    /* ── CHARGES TABLE ── */
    .charges-table {
      width: 100%;
      border-collapse: collapse;
      border: 1px solid var(--s200);
      border-radius: 12px;
      overflow: hidden;
      font-size: 0.78rem;
    }
    .charges-table thead tr {
      background: var(--s50);
      border-bottom: 1px solid var(--s200);
    }
    .charges-table th {
      padding: 11px 16px;
      text-align: left;
      font-size: 0.58rem;
      font-weight: 800;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: var(--s500);
    }
    .charges-table th:last-child { text-align: right; }
    .charges-table td {
      padding: 14px 16px;
      color: var(--s700);
      border-bottom: 1px solid var(--s100);
      vertical-align: top;
    }
    .charges-table td:last-child { text-align: right; }
    .charges-table tbody tr:last-child td { border-bottom: none; }

    .ct-item-name {
      font-weight: 700;
      color: var(--s800);
      font-size: 0.8rem;
      margin-bottom: 3px;
    }
    .ct-item-desc {
      font-size: 0.66rem;
      color: var(--s400);
      line-height: 1.55;
    }
    .ct-amount {
      font-family: var(--font-m);
      font-size: 0.85rem;
      font-weight: 500;
      color: var(--s800);
      white-space: nowrap;
    }

    /* Totals */
    .totals {
      margin-top: 16px;
      display: flex;
      flex-direction: column;
      align-items: flex-end;
      gap: 6px;
    }
    .total-row {
      display: flex;
      align-items: center;
      gap: 40px;
      font-size: 0.74rem;
    }
    .total-row .tl {
      color: var(--s500);
      font-weight: 600;
      min-width: 90px;
      text-align: right;
    }
    .total-row .tv {
      font-family: var(--font-m);
      font-size: 0.78rem;
      color: var(--s700);
      min-width: 70px;
      text-align: right;
    }
    .total-row.final {
      padding-top: 10px;
      border-top: 2px solid var(--navy);
      margin-top: 4px;
    }
    .total-row.final .tl {
      font-size: 0.62rem;
      font-weight: 800;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--navy);
    }
    .total-row.final .tv {
      font-family: var(--font-d);
      font-size: 1.4rem;
      letter-spacing: 0.02em;
      color: var(--navy);
    }

    /* ── COMPLIANCE ── */
    .compliance {
      margin-top: 24px;
      background: var(--s50);
      border: 1px solid var(--s200);
      border-radius: 12px;
      padding: 16px 18px;
      display: flex;
      gap: 12px;
      align-items: flex-start;
    }
    .compliance i {
      color: var(--navy);
      font-size: 14px;
      margin-top: 1px;
      flex-shrink: 0;
    }
    .compliance-title {
      font-size: 0.62rem;
      font-weight: 800;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--s700);
      margin-bottom: 4px;
    }
    .compliance-text {
      font-size: 0.67rem;
      line-height: 1.65;
      color: var(--s500);
    }

    /* ── RECEIPT FOOTER ── */
    .receipt-foot {
      background: var(--navy);
      padding: 16px 28px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      flex-wrap: wrap;
    }
    .receipt-foot-brand {
      font-family: var(--font-d);
      font-size: 0.95rem;
      letter-spacing: 0.06em;
      color: rgba(255,255,255,0.4);
    }
    .receipt-foot-brand span { color: var(--red); }
    .receipt-foot-meta {
      font-family: var(--font-m);
      font-size: 0.58rem;
      color: rgba(255,255,255,0.22);
      text-align: right;
      line-height: 1.7;
    }

    /* ══ SHARE MODAL ══ */
    .modal-overlay {
      position: fixed;
      inset: 0;
      background: rgba(11,37,69,0.6);
      backdrop-filter: blur(6px);
      z-index: 500;
      display: flex;
      align-items: flex-end;
      justify-content: center;
      opacity: 0;
      pointer-events: none;
      transition: opacity .25s var(--ease);
    }
    @media(min-width:500px){ .modal-overlay{ align-items: center; } }
    .modal-overlay.open { opacity: 1; pointer-events: all; }

    .modal {
      background: var(--white);
      border-radius: 20px 20px 0 0;
      width: 100%;
      max-width: 420px;
      padding: 24px;
      transform: translateY(40px);
      transition: transform .3s var(--ease);
      position: relative;
    }
    @media(min-width:500px){
      .modal{ border-radius: 20px; transform: scale(.94); }
      .modal-overlay.open .modal { transform: scale(1); }
    }
    .modal-overlay.open .modal { transform: translateY(0); }

    .modal-handle {
      width: 36px; height: 4px;
      background: var(--s200);
      border-radius: 100px;
      margin: 0 auto 20px;
      display: block;
    }
    @media(min-width:500px){ .modal-handle{ display: none; } }

    .modal-close {
      position: absolute;
      top: 16px; right: 16px;
      width: 28px; height: 28px;
      background: var(--s100);
      border: none;
      border-radius: 50%;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 0.65rem;
      color: var(--s500);
      transition: all .15s;
    }
    .modal-close:hover { background: var(--s200); }

    .modal-title {
      font-family: var(--font-d);
      font-size: 1.25rem;
      letter-spacing: 0.04em;
      color: var(--navy);
      margin-bottom: 3px;
    }
    .modal-sub {
      font-size: 0.7rem;
      color: var(--s500);
      margin-bottom: 18px;
    }

    .share-url-row {
      display: flex;
      background: var(--s100);
      border: 1.5px solid var(--s200);
      border-radius: 10px;
      overflow: hidden;
      margin-bottom: 14px;
    }
    .share-url-input {
      flex: 1;
      padding: 10px 12px;
      font-family: var(--font-m);
      font-size: 0.68rem;
      color: var(--s600);
      background: none;
      border: none;
      outline: none;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
    }
    .share-copy {
      padding: 10px 14px;
      background: var(--navy);
      color: #fff;
      border: none;
      font-family: var(--font-b);
      font-size: 0.62rem;
      font-weight: 700;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      cursor: pointer;
      white-space: nowrap;
      transition: background .15s;
    }
    .share-copy:hover { background: var(--navy-mid); }

    .share-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 8px;
      margin-bottom: 14px;
    }
    .share-opt {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 6px;
      padding: 12px 8px;
      background: var(--s100);
      border: 1px solid var(--s200);
      border-radius: 10px;
      cursor: pointer;
      transition: all .15s;
      font-size: 0.6rem;
      font-weight: 700;
      letter-spacing: 0.05em;
      text-transform: uppercase;
      color: var(--s600);
    }
    .share-opt:hover { background: var(--s200); color: var(--navy); }
    .share-opt i { font-size: 1.05rem; color: var(--navy); }

    .share-native {
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 7px;
      padding: 12px;
      background: var(--red);
      color: #fff;
      border: none;
      border-radius: 10px;
      font-family: var(--font-b);
      font-size: 0.72rem;
      font-weight: 700;
      letter-spacing: 0.05em;
      text-transform: uppercase;
      cursor: pointer;
      box-shadow: 0 3px 14px rgba(238,27,36,0.3);
      transition: all .15s;
    }
    .share-native:hover { background: var(--red-dark); }

    /* ══ TOAST ══ */
    .toast {
      position: fixed;
      bottom: 24px;
      left: 50%;
      transform: translateX(-50%) translateY(80px);
      background: var(--navy);
      color: #fff;
      padding: 10px 18px;
      border-radius: 10px;
      font-size: 0.76rem;
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 8px;
      box-shadow: 0 6px 24px rgba(11,37,69,0.28);
      z-index: 9999;
      transition: transform .35s var(--ease);
      white-space: nowrap;
    }
    .toast.show { transform: translateX(-50%) translateY(0); }
    .toast i { color: #4ade80; }

    /* ══ PRINT ══ */
    @media print {
      * { -webkit-print-color-adjust: exact !important; print-color-adjust: exact !important; }
      body { background: white; padding: 0; }
      .action-bar, .modal-overlay, .toast, .no-print { display: none !important; }
      .page-wrap { max-width: 100%; margin: 0; padding: 0; }
      .receipt { border-radius: 0; box-shadow: none; border: none; animation: none; }
      .receipt-body { padding: 24px 28px; }
      .receipt-foot { position: fixed; bottom: 0; left: 0; right: 0; }
    }
  </style>
</head>
<body>

  <!-- ══ ACTION BAR ══ -->
  <header class="action-bar no-print">
    <div class="action-brand">
      <div class="action-brand-icon"><i class="fa-solid fa-terminal"></i></div>
      <div>
        <div class="action-brand-name">AIR JAKE</div>
        <span class="action-brand-sub">Delivery Services</span>
      </div>
    </div>
    <div class="action-btns">
      <button class="btn btn-outline" onclick="openShare()">
        <i class="fa-solid fa-share-nodes"></i>
        <span>Share</span>
      </button>
      <button class="btn btn-red" onclick="window.print()">
        <i class="fa-solid fa-print"></i>
        <span>Print / PDF</span>
      </button>
    </div>
  </header>

  <!-- ══ PAGE ══ -->
  <div class="page-wrap">
    <div class="receipt">

      <div class="receipt-band"></div>

      <!-- HEAD -->
      <div class="receipt-head">
        <div class="receipt-head-glow" aria-hidden="true"></div>
        <div class="receipt-head-inner">
          <div class="receipt-co">
            <div class="receipt-co-logo"><i class="fa-solid fa-plane-departure"></i></div>
            <div>
              <div class="receipt-co-name">Air Jake Delivery</div>
              <div class="receipt-co-tag">Secure Global Air Freight · Waybill Receipt</div>
            </div>
          </div>
          <div class="receipt-ref">
            <div class="receipt-ref-label">Tracking Reference</div>
            <div class="receipt-ref-code">
              <span>{{$parcel->tracking_id}}</span>
              <button class="copy-btn no-print" onclick="copyTracking()" title="Copy ID">
                <i class="fa-regular fa-copy"></i>
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- STRIP -->
      <div class="receipt-strip">
        <span style="color:red;" class="s-chip amber">
          <span class="cdot"></span>
          {{$parcel->status}}
        </span>
        <span style="color:#000; text-align:right;" class="r-field-label">{{ date('d M, Y · h:iA') }}</span>
      </div>

      <!-- BODY -->
      <div class="receipt-body">

        <!-- ── SECTION 1: SENDER ── -->
        <div class="r-section">
          <div class="r-section-head">
            <div class="r-section-icon navy"><i class="fa-solid fa-box-open"></i></div>
            <span class="r-section-title">Sender Details</span>
          </div>
          <div class="r-fields cols-2">
            <div class="r-field">
              <div class="r-field-label">Sender Name</div>
              <div class="r-field-value">{{$parcel->sender_name}}</div>
            </div>
             <div class="r-field">
              <div class="r-field-label">Sender Phone</div>
              <div class="r-field-value">{{$parcel->sender_phone}}</div>
            </div>
             <div class="r-field">
              <div class="r-field-label">Sender Email</div>
              <div class="r-field-value">{{$parcel->sender_email}}</div>
            </div>
            <div class="r-field">
              <div class="r-field-label">Origin</div>
              <div class="r-field-value">{{$parcel->current_location ?? 'N/A'}}</div>
            </div>
          </div>
        </div>

        <!-- ── SECTION 2: RECEIVER ── -->
        <div class="r-section">
          <div class="r-section-head">
            <div class="r-section-icon red"><i class="fa-solid fa-location-dot"></i></div>
            <span class="r-section-title">Receiver Details</span>
          </div>
          <div class="r-fields cols-2">
            <div class="r-field">
              <div class="r-field-label">Receiver Name</div>
              <div class="r-field-value">{{$parcel->receiver_name}}</div>
            </div>
            <div class="r-field">
              <div class="r-field-label">Receiver Name</div>
              <div class="r-field-value">{{$parcel->receiver_phone}}</div>
            </div>
            <div class="r-field">
              <div class="r-field-label">Email Address</div>
              <div class="r-field-value mono">{{$parcel->receiver_email}}</div>
            </div>
            <div class="r-field" style="grid-column: 1 / -1;">
              <div class="r-field-label">Delivery Address</div>
              <div class="r-field-value">{{$parcel->receiver_address}}</div>
            </div>
          </div>
        </div>

        <!-- ── SECTION 3: PARCEL DETAILS ── -->
        <div class="r-section">
          <div class="r-section-head">
            <div class="r-section-icon slate"><i class="fa-solid fa-weight-hanging"></i></div>
            <span class="r-section-title">Parcel &amp; Charges</span>
          </div>

          <!-- Key parcel fields -->
          <div class="r-fields cols-3" style="margin-bottom: 20px;">
            <div class="r-field">
              <div class="r-field-label">Tracking ID</div>
              <div class="r-field-value mono">{{$parcel->tracking_id}}</div>
            </div>
            <div class="r-field">
              <div class="r-field-label">Weight</div>
              <div class="r-field-value mono">{{$parcel->weight}} KG</div>
            </div>
            <div class="r-field">
              <div class="r-field-label">Current Location</div>
              <div class="r-field-value">{{$parcel->current_location ?? 'N/A'}}</div>
            </div>
            <div class="r-field">
              <div class="r-field-label">Expected Arrival Time</div>
              <div class="r-field-value mono">{{ \Carbon\Carbon::parse($parcel->expected_arrival_date)->format('M d, Y H:i A')}}</div>
            </div>
            <div class="r-field">
              <div class="r-field-label">Registered Date</div>
              <div class="r-field-value mono">{{$parcel->created_at->format('M d, Y H:i A')}}</div>

            </div>
            <div class="r-field">
              <div class="r-field-label">Pipeline Status</div>
              <div class="r-field-value red">{{$parcel->status}}</div>
            </div>
          </div>

          <!-- Charges table -->
          <table class="charges-table">
            <thead>
              <tr>
                <th style="width:55%">Service Description</th>
                <th>Weight</th>
                <th>Amount</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="ct-item-name">International Express Air Cargo — Priority Routing</div>
                  <div class="ct-item-desc">Real-time multi-node tracking, satellite coordinate positioning, and customs border clearance indicators.</div>
                </td>
                <td><span class="ct-amount">{{$parcel->weight}} KG</span></td>
                <td><span class="ct-amount">${{number_format($parcel->cost)}}</span></td>
              </tr>
              <tr>
                <td>
                  <div class="ct-item-name">Customs Documentation Processing</div>
                  <div class="ct-item-desc">Port compliance gateway documentation and auditing fee.</div>
                </td>
                <td><span class="ct-amount">—</span></td>
                <td><span class="ct-amount">$0.00</span></td>
              </tr>
            </tbody>
          </table>

          <!-- Totals -->
          <div class="totals">
            <div class="total-row">
              <span class="tl">Subtotal</span>
              <span class="tv">${{number_format($parcel->cost)}}</span>
            </div>
            <div class="total-row">
              <span class="tl">Tax / VAT</span>
              <span class="tv">$0.00</span>
            </div>
            <div class="total-row final">
              <span class="tl">Total Charged</span>
              <span class="tv">${{number_format($parcel->cost)}}</span>
            </div>
          </div>
        </div>

        <!-- COMPLIANCE -->
        <div class="compliance">
          <i class="fa-solid fa-shield-halved"></i>
          <div>
            <div class="compliance-title">Waybill Protocol Compliance Statement</div>
            <div class="compliance-text">
              This receipt serves as active verification of cargo processing and routing carriage conditions under the regulatory framework of Air Jake Delivery Services. Retain this document for customs and audit purposes. All charges are final upon issuance.
            </div>
          </div>
        </div>

      </div><!-- /.receipt-body -->

      <!-- FOOTER -->
      <div class="receipt-foot">
        <div class="receipt-foot-brand">AIR <span>JAKE</span></div>
        <div class="receipt-foot-meta">
          Generated: {{ date('d M Y · h:i A') }}<br>
          Ref: {{$parcel->tracking_id}}
        </div>
      </div>

    </div><!-- /.receipt -->
  </div><!-- /.page-wrap -->

  <!-- ══ SHARE MODAL ══ -->
  <div class="modal-overlay no-print" id="shareModal" onclick="handleOverlay(event)">
    <div class="modal">
      <div class="modal-handle"></div>
      <button class="modal-close" onclick="closeShare()"><i class="fa-solid fa-xmark"></i></button>
      <div class="modal-title">Share Receipt</div>
      <div class="modal-sub">Send this waybill to the consignee or save a copy.</div>
      <div class="share-url-row">
        <input class="share-url-input" id="shareUrl" type="text" readonly value="{{url('/track/'.$parcel->tracking_id)}}">
        <button class="share-copy" onclick="copyShareUrl()">Copy Link</button>
      </div>
      <div class="share-grid">
        <div class="share-opt" onclick="shareVia('email')">
          <i class="fa-solid fa-envelope"></i>Email
        </div>
        <div class="share-opt" onclick="shareVia('whatsapp')">
          <i class="fa-brands fa-whatsapp"></i>WhatsApp
        </div>
        <div class="share-opt" onclick="window.print(); closeShare();">
          <i class="fa-solid fa-file-pdf"></i>Save PDF
        </div>
      </div>
      <button class="share-native" onclick="nativeShare()">
        <i class="fa-solid fa-share-nodes"></i> Share via Device
      </button>
    </div>
  </div>

  <!-- ══ TOAST ══ -->
  <div class="toast" id="toast">
    <i class="fa-solid fa-circle-check"></i>
    <span id="toastMsg">Copied!</span>
  </div>

  <script>
  (function () {

    function showToast(msg) {
      var t = document.getElementById('toast');
      document.getElementById('toastMsg').textContent = msg;
      t.classList.add('show');
      setTimeout(function () { t.classList.remove('show'); }, 2800);
    }

    window.copyTracking = function () {
      navigator.clipboard.writeText('{{$parcel->tracking_id}}').then(function () {
        showToast('Tracking ID copied!');
      });
    };

    window.openShare = function () {
      document.getElementById('shareModal').classList.add('open');
      document.body.style.overflow = 'hidden';
    };
    window.closeShare = function () {
      document.getElementById('shareModal').classList.remove('open');
      document.body.style.overflow = '';
    };
    window.handleOverlay = function (e) {
      if (e.target === document.getElementById('shareModal')) closeShare();
    };

    window.copyShareUrl = function () {
      navigator.clipboard.writeText(document.getElementById('shareUrl').value).then(function () {
        showToast('Link copied to clipboard!');
      });
    };

    window.shareVia = function (platform) {
      var url  = encodeURIComponent(document.getElementById('shareUrl').value);
      var text = encodeURIComponent('Air Jake Waybill — {{$parcel->tracking_id}}');
      var map  = {
        email:    'mailto:?subject=' + text + '&body=Track%20your%20shipment%3A%20' + url,
        whatsapp: 'https://wa.me/?text=' + text + '%20' + url
      };
      if (map[platform]) window.open(map[platform], '_blank');
    };

    window.nativeShare = function () {
      if (navigator.share) {
        navigator.share({
          title: 'Air Jake Waybill — {{$parcel->tracking_id}}',
          text: 'View your Air Jake shipment receipt and tracking details.',
          url: document.getElementById('shareUrl').value
        }).then(closeShare);
      } else {
        copyShareUrl();
        showToast('Link copied — paste to share!');
      }
    };

  }());
  </script>

</body>
</html>