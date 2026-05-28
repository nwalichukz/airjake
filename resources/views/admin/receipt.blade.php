<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Waybill Receipt — AJD-LN-49210-PH · Air Jake</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Outfit:wght@300;400;500;600;700;800;900&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --navy:      #0B2545;
      --navy-mid:  #134074;
      --red:       #EE1B24;
      --red-dark:  #C4151D;
      --white:     #ffffff;
      --off:       #F7F9FC;
      --s100:      #F1F5F9;
      --s200:      #E2E8F0;
      --s300:      #CBD5E1;
      --s400:      #94A3B8;
      --s500:      #64748B;
      --s600:      #475569;
      --s700:      #334155;
      --s800:      #1E293B;
      --font-d:    'Bebas Neue', sans-serif;
      --font-b:    'Outfit', sans-serif;
      --font-m:    'DM Mono', monospace;
      --ease:      cubic-bezier(0.4,0,0.2,1);
    }

    html { -webkit-text-size-adjust: 100%; }

    body {
      font-family: var(--font-b);
      background: var(--off);
      min-height: 100svh;
      -webkit-font-smoothing: antialiased;
      padding: 0 0 40px;
    }

    /* ══ ACTION BAR (no-print) ══ */
    .action-bar {
      background: var(--navy);
      border-bottom: 3px solid var(--red);
      padding: 0 16px;
      height: 56px;
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
      gap: 9px;
    }
    .action-brand-icon {
      width: 30px; height: 30px;
      background: var(--red);
      border-radius: 7px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 12px;
      color: #fff;
      box-shadow: 0 0 14px rgba(238,27,36,0.4);
      flex-shrink: 0;
    }
    .action-brand-name {
      font-family: var(--font-d);
      font-size: 1.1rem;
      letter-spacing: 0.06em;
      color: var(--white);
      line-height: 1;
    }
    .action-brand-sub {
      font-size: 0.48rem;
      font-weight: 600;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: rgba(255,255,255,0.32);
      display: block;
      margin-top: 1px;
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
      font-size: 0.7rem;
      font-weight: 700;
      letter-spacing: 0.05em;
      text-transform: uppercase;
      cursor: pointer;
      border: none;
      transition: all .18s var(--ease);
      white-space: nowrap;
      -webkit-tap-highlight-color: transparent;
    }
    .btn i { font-size: 0.72rem; }

    .btn-ghost {
      background: rgba(255,255,255,0.08);
      border: 1px solid rgba(255,255,255,0.12);
      color: rgba(255,255,255,0.75);
    }
    .btn-ghost:hover { background: rgba(255,255,255,0.14); color: #fff; }

    .btn-primary {
      background: var(--red);
      color: #fff;
      box-shadow: 0 3px 14px rgba(238,27,36,0.35);
    }
    .btn-primary:hover { background: var(--red-dark); box-shadow: 0 5px 18px rgba(238,27,36,0.48); }
    .btn-primary:active { transform: scale(.97); }

    .btn-share {
      background: rgba(255,255,255,0.08);
      border: 1px solid rgba(255,255,255,0.12);
      color: rgba(255,255,255,0.75);
    }
    .btn-share:hover { background: rgba(255,255,255,0.14); color: #fff; }

    /* ══ PAGE WRAPPER ══ */
    .page-wrap {
      max-width: 760px;
      margin: 28px auto 0;
      padding: 0 16px;
    }
    @media(min-width:600px){ .page-wrap{ padding: 0 24px; } }

    /* ══ RECEIPT CARD ══ */
    .receipt {
      background: var(--white);
      border-radius: 20px;
      box-shadow: 0 8px 48px rgba(11,37,69,0.13);
      border: 1px solid var(--s200);
      overflow: hidden;
      animation: riseUp .4s var(--ease) both;
    }
    @keyframes riseUp {
      from{ opacity:0; transform:translateY(16px); }
      to{ opacity:1; transform:translateY(0); }
    }

    /* ── Receipt Header ── */
    .receipt-header {
      background: var(--navy);
      padding: 28px 24px 24px;
      position: relative;
      overflow: hidden;
    }
    .receipt-header::before {
      content: '';
      position: absolute;
      inset: 0;
      background-image: radial-gradient(rgba(255,255,255,0.04) 1px, transparent 1px);
      background-size: 18px 18px;
      pointer-events: none;
    }
    .receipt-header-glow {
      position: absolute;
      top: -60px; right: -60px;
      width: 260px; height: 260px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(238,27,36,0.14) 0%, transparent 65%);
      pointer-events: none;
    }
    .receipt-header-inner {
      position: relative;
      z-index: 1;
      display: flex;
      flex-direction: column;
      gap: 20px;
    }
    @media(min-width:540px){
      .receipt-header-inner {
        flex-direction: row;
        align-items: flex-start;
        justify-content: space-between;
      }
    }

    .receipt-co-name {
      font-family: var(--font-d);
      font-size: clamp(1.3rem, 5vw, 1.75rem);
      letter-spacing: 0.05em;
      color: var(--white);
      line-height: 1;
      margin-bottom: 5px;
    }
    .receipt-co-tag {
      font-size: 0.6rem;
      font-weight: 800;
      letter-spacing: 0.16em;
      text-transform: uppercase;
      color: var(--red);
      display: flex;
      align-items: center;
      gap: 5px;
    }
    .receipt-co-tag::before {
      content: '';
      display: inline-block;
      width: 18px; height: 2px;
      background: var(--red);
    }

    .receipt-tracking-wrap {
      text-align: left;
    }
    @media(min-width:540px){ .receipt-tracking-wrap{ text-align: right; } }

    .receipt-tracking-label {
      font-size: 0.58rem;
      font-weight: 800;
      letter-spacing: 0.16em;
      text-transform: uppercase;
      color: rgba(255,255,255,0.3);
      margin-bottom: 6px;
    }
    .receipt-tracking-code {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(255,255,255,0.07);
      border: 1px solid rgba(255,255,255,0.12);
      padding: 8px 14px;
      border-radius: 10px;
    }
    .receipt-tracking-code span {
      font-family: var(--font-m);
      font-size: clamp(0.8rem, 3vw, 1rem);
      font-weight: 500;
      color: var(--white);
      letter-spacing: 0.08em;
    }
    .receipt-tracking-copy {
      background: none;
      border: none;
      color: rgba(255,255,255,0.4);
      cursor: pointer;
      font-size: 0.75rem;
      padding: 2px;
      transition: color .15s;
    }
    .receipt-tracking-copy:hover { color: #fff; }

    /* Status strip */
    .receipt-status-strip {
      background: rgba(255,255,255,0.05);
      border-top: 1px solid rgba(255,255,255,0.07);
      padding: 12px 24px;
      display: flex;
      align-items: center;
      gap: 8px;
      flex-wrap: wrap;
    }
    .status-chip {
      display: inline-flex;
      align-items: center;
      gap: 5px;
      padding: 4px 10px;
      border-radius: 6px;
      font-size: 0.62rem;
      font-weight: 800;
      letter-spacing: 0.06em;
      text-transform: uppercase;
    }
    .status-chip.amber {
      background: rgba(217,119,6,0.18);
      border: 1px solid rgba(217,119,6,0.3);
      color: #FBBF24;
    }
    .status-chip .sdot {
      width: 5px; height: 5px;
      border-radius: 50%;
      background: currentColor;
      animation: sdotPulse 1.8s infinite;
    }
    @keyframes sdotPulse {
      0%,100%{opacity:1;} 50%{opacity:.3;}
    }
    .strip-meta {
      font-size: 0.65rem;
      font-weight: 600;
      color: rgba(255,255,255,0.35);
      margin-left: auto;
    }

    /* ── Receipt Body ── */
    .receipt-body { padding: 24px; }
    @media(min-width:600px){ .receipt-body{ padding: 32px; } }

    /* Parties row */
    .parties-grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: 20px;
      padding-bottom: 24px;
      border-bottom: 1px solid var(--s100);
      margin-bottom: 24px;
    }
    @media(min-width:500px){
      .parties-grid { grid-template-columns: 1fr 1fr; }
    }

    .party-block {}
    .party-label {
      font-size: 0.6rem;
      font-weight: 800;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: var(--s400);
      margin-bottom: 8px;
      display: flex;
      align-items: center;
      gap: 5px;
    }
    .party-label i { color: var(--red); font-size: 0.6rem; }
    .party-name {
      font-size: 0.92rem;
      font-weight: 800;
      color: var(--s800);
      margin-bottom: 3px;
    }
    .party-detail {
      font-size: 0.72rem;
      color: var(--s500);
      line-height: 1.6;
    }
    .party-detail .highlight {
      font-weight: 700;
      color: var(--red);
    }
    .party-email {
      font-family: var(--font-m);
      font-size: 0.68rem;
      color: var(--s500);
      margin-top: 2px;
    }

    /* Divider label */
    .section-label {
      font-size: 0.6rem;
      font-weight: 800;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: var(--s400);
      margin-bottom: 12px;
      display: flex;
      align-items: center;
      gap: 8px;
    }
    .section-label::after {
      content: '';
      flex: 1;
      height: 1px;
      background: var(--s100);
    }
    .section-label i { color: var(--red); font-size: 0.65rem; }

    /* Line items table */
    .line-table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 24px;
      font-size: 0.78rem;
    }
    .line-table thead tr {
      background: var(--s100);
      border-radius: 8px;
    }
    .line-table th {
      padding: 10px 14px;
      text-align: left;
      font-size: 0.6rem;
      font-weight: 800;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: var(--s500);
      border-bottom: 1px solid var(--s200);
    }
    .line-table th:last-child { text-align: right; }
    .line-table td {
      padding: 16px 14px;
      vertical-align: top;
      border-bottom: 1px solid var(--s100);
      color: var(--s700);
    }
    .line-table td:last-child { text-align: right; }
    .line-table tbody tr:last-child td { border-bottom: none; }

    .item-name {
      font-weight: 700;
      color: var(--s800);
      margin-bottom: 4px;
      font-size: 0.8rem;
    }
    .item-desc {
      font-size: 0.68rem;
      color: var(--s400);
      line-height: 1.6;
      font-weight: 400;
    }
    .item-weight {
      font-family: var(--font-m);
      font-size: 0.75rem;
      font-weight: 500;
      color: var(--s600);
      white-space: nowrap;
    }
    .item-amount {
      font-family: var(--font-m);
      font-size: 0.88rem;
      font-weight: 500;
      color: var(--s800);
      white-space: nowrap;
    }

    /* Totals */
    .totals-wrap {
      display: flex;
      flex-direction: column;
      align-items: flex-end;
      gap: 8px;
      padding-top: 16px;
      border-top: 1px solid var(--s100);
      margin-bottom: 28px;
    }

    .totals-row {
      display: flex;
      align-items: center;
      gap: 48px;
      font-size: 0.75rem;
    }
    .totals-row .t-label {
      color: var(--s500);
      font-weight: 600;
      min-width: 100px;
      text-align: right;
    }
    .totals-row .t-value {
      font-family: var(--font-m);
      font-weight: 500;
      color: var(--s700);
      min-width: 80px;
      text-align: right;
    }
    .totals-row.total-final {
      border-top: 2px solid var(--navy);
      padding-top: 10px;
      margin-top: 4px;
    }
    .totals-row.total-final .t-label {
      font-size: 0.68rem;
      font-weight: 800;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--navy);
    }
    .totals-row.total-final .t-value {
      font-family: var(--font-d);
      font-size: 1.5rem;
      letter-spacing: 0.03em;
      color: var(--navy);
    }

    /* Compliance footer */
    .compliance {
      background: var(--s100);
      border-radius: 12px;
      padding: 16px 18px;
      display: flex;
      gap: 12px;
      align-items: flex-start;
      margin-bottom: 28px;
    }
    .compliance-icon {
      width: 32px; height: 32px;
      background: var(--white);
      border: 1px solid var(--s200);
      border-radius: 8px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--navy);
      font-size: 0.8rem;
      flex-shrink: 0;
      margin-top: 1px;
    }
    .compliance-title {
      font-size: 0.65rem;
      font-weight: 800;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--s700);
      margin-bottom: 4px;
    }
    .compliance-text {
      font-size: 0.68rem;
      line-height: 1.65;
      color: var(--s500);
    }

    /* Receipt footer bar */
    .receipt-footer {
      background: var(--navy);
      padding: 16px 24px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      flex-wrap: wrap;
    }
    .receipt-footer-brand {
      font-family: var(--font-d);
      font-size: 1rem;
      letter-spacing: 0.06em;
      color: rgba(255,255,255,0.5);
    }
    .receipt-footer-brand span { color: var(--red); }
    .receipt-footer-meta {
      font-family: var(--font-m);
      font-size: 0.6rem;
      color: rgba(255,255,255,0.25);
      text-align: right;
    }

    /* ══ SHARE MODAL ══ */
    .modal-overlay {
      position: fixed;
      inset: 0;
      background: rgba(11,37,69,0.65);
      backdrop-filter: blur(6px);
      z-index: 500;
      display: flex;
      align-items: flex-end;
      justify-content: center;
      opacity: 0;
      pointer-events: none;
      transition: opacity .25s var(--ease);
    }
    @media(min-width:500px){
      .modal-overlay { align-items: center; }
    }
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
      .modal { border-radius: 20px; transform: scale(.95) translateY(0); }
    }
    .modal-overlay.open .modal {
      transform: translateY(0);
    }
    @media(min-width:500px){
      .modal-overlay.open .modal { transform: scale(1) translateY(0); }
    }

    .modal-handle {
      width: 36px; height: 4px;
      background: var(--s200);
      border-radius: 100px;
      margin: 0 auto 20px;
      display: block;
    }
    @media(min-width:500px){ .modal-handle{ display: none; } }

    .modal-title {
      font-family: var(--font-d);
      font-size: 1.3rem;
      letter-spacing: 0.04em;
      color: var(--navy);
      margin-bottom: 4px;
    }
    .modal-sub {
      font-size: 0.72rem;
      color: var(--s500);
      margin-bottom: 20px;
    }

    .share-url-wrap {
      display: flex;
      align-items: center;
      background: var(--s100);
      border: 1.5px solid var(--s200);
      border-radius: 10px;
      overflow: hidden;
      margin-bottom: 16px;
    }
    .share-url {
      flex: 1;
      padding: 10px 12px;
      font-family: var(--font-m);
      font-size: 0.7rem;
      color: var(--s600);
      background: none;
      border: none;
      outline: none;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
    }
    .share-copy-btn {
      padding: 10px 14px;
      background: var(--navy);
      color: #fff;
      border: none;
      font-family: var(--font-b);
      font-size: 0.65rem;
      font-weight: 700;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      cursor: pointer;
      white-space: nowrap;
      transition: background .15s;
    }
    .share-copy-btn:hover { background: var(--navy-mid); }

    .share-options {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 10px;
      margin-bottom: 16px;
    }
    .share-opt {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 7px;
      padding: 14px 8px;
      background: var(--s100);
      border: 1px solid var(--s200);
      border-radius: 12px;
      cursor: pointer;
      transition: all .15s;
      font-size: 0.62rem;
      font-weight: 700;
      letter-spacing: 0.05em;
      text-transform: uppercase;
      color: var(--s600);
    }
    .share-opt:hover { background: var(--s200); color: var(--navy); }
    .share-opt i { font-size: 1.1rem; color: var(--navy); }

    .modal-close {
      position: absolute;
      top: 16px; right: 16px;
      width: 30px; height: 30px;
      background: var(--s100);
      border: none;
      border-radius: 50%;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 0.7rem;
      color: var(--s500);
      transition: all .15s;
    }
    .modal-close:hover { background: var(--s200); color: var(--s800); }

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
      font-size: 0.78rem;
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 8px;
      box-shadow: 0 8px 28px rgba(11,37,69,0.28);
      z-index: 9999;
      transition: transform .35s var(--ease);
      white-space: nowrap;
    }
    .toast.show { transform: translateX(-50%) translateY(0); }
    .toast i { color: #4ade80; }

    /* ══ PRINT STYLES ══ */
    @media print {
      * { -webkit-print-color-adjust: exact !important; print-color-adjust: exact !important; }

      body { background: white; padding: 0; }

      .action-bar,
      .modal-overlay,
      .toast,
      .no-print { display: none !important; }

      .page-wrap {
        max-width: 100%;
        margin: 0;
        padding: 0;
      }

      .receipt {
        border-radius: 0;
        box-shadow: none;
        border: none;
        animation: none;
      }

      .receipt-header { padding: 20px 24px 16px; }
      .receipt-body { padding: 20px 24px; }

      .receipt-footer {
        position: fixed;
        bottom: 0;
        left: 0; right: 0;
      }

      .line-table { font-size: 0.72rem; }
      .totals-row.total-final .t-value { font-size: 1.3rem; }
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
      <button class="btn btn-share" onclick="openShare()">
        <i class="fa-solid fa-share-nodes"></i>
        <span>Share</span>
      </button>
      <button class="btn btn-primary" onclick="window.print()">
        <i class="fa-solid fa-print"></i>
        <span>Print / PDF</span>
      </button>
    </div>
  </header>

  <!-- ══ PAGE ══ -->
  <div class="page-wrap">
    <div class="receipt" id="receipt">

      <!-- ── Header ── -->
      <div class="receipt-header">
        <div class="receipt-header-glow" aria-hidden="true"></div>
        <div class="receipt-header-inner">
          <div>
            <div class="receipt-co-name">Air Jake Delivery Services</div>
            <div class="receipt-co-tag">Secure Global Air Freight Waybill Receipt</div>
          </div>
          <div class="receipt-tracking-wrap">
            <div class="receipt-tracking-label">Tracking Reference</div>
            <div class="receipt-tracking-code">
              <span>AJD-LN-49210-PH</span>
              <button class="receipt-tracking-copy no-print" onclick="copyTracking()" title="Copy tracking ID">
                <i class="fa-regular fa-copy"></i>
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- Status strip -->
      <div class="receipt-status-strip">
        <span class="status-chip amber">
          <span class="sdot"></span>
          Custom Hold
        </span>
        <span style="font-size:0.62rem; font-weight:600; color:rgba(255,255,255,0.3);">
          Last updated: Mar 13, 2026 · 06:26 AM
        </span>
        <span class="strip-meta no-print">Receipt #INV-2026-0049210</span>
      </div>

      <!-- ── Body ── -->
      <div class="receipt-body">

        <!-- Parties -->
        <div class="section-label">
          <i class="fa-solid fa-users"></i>
          Consignment Parties
        </div>

        <div class="parties-grid">
          <div class="party-block">
            <div class="party-label">
              <i class="fa-solid fa-box-open"></i>
              Shipper / Origin
            </div>
            <div class="party-name">Global Distribution Network Axis Corp.</div>
            <div class="party-detail">Authorized Hub Dispatch<br>Manifest Node Terminal 01</div>
          </div>
          <div class="party-block">
            <div class="party-label">
              <i class="fa-solid fa-location-dot"></i>
              Consignee / Destination
            </div>
            <div class="party-name">Jane Winters</div>
            <div class="party-email">j.winters@domain.com</div>
            <div class="party-detail" style="margin-top:6px;">
              <span class="highlight">Drop Vector: </span>
              Manila Port Entry Cargo Complex, Philippines
            </div>
          </div>
        </div>

        <!-- Line Items -->
        <div class="section-label">
          <i class="fa-solid fa-receipt"></i>
          Service Line Items
        </div>

        <table class="line-table">
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
                <div class="item-name">International Express Air Cargo — Priority Routing</div>
                <div class="item-desc">Includes real-time multi-node tracking updates, satellite coordinate positioning, and custom border clearance indicators.</div>
              </td>
              <td>
                <div class="item-weight">42.80 KG</div>
              </td>
              <td>
                <div class="item-amount">$1,450.00</div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="item-name">Customs Documentation Processing</div>
                <div class="item-desc">Port compliance gateway documentation and auditing fee.</div>
              </td>
              <td>
                <div class="item-weight">—</div>
              </td>
              <td>
                <div class="item-amount">$0.00</div>
              </td>
            </tr>
          </tbody>
        </table>

        <!-- Totals -->
        <div class="totals-wrap">
          <div class="totals-row">
            <span class="t-label">Subtotal</span>
            <span class="t-value">$1,450.00</span>
          </div>
          <div class="totals-row">
            <span class="t-label">Tax / VAT</span>
            <span class="t-value">$0.00</span>
          </div>
          <div class="totals-row total-final">
            <span class="t-label">Total Charged</span>
            <span class="t-value">$1,450.00</span>
          </div>
        </div>

        <!-- Compliance -->
        <div class="compliance">
          <div class="compliance-icon">
            <i class="fa-solid fa-shield-halved"></i>
          </div>
          <div>
            <div class="compliance-title">Waybill Protocol Compliance Statement</div>
            <div class="compliance-text">
              This receipt acts as active verification of cargo processing and routing carriage conditions under the regulatory framework of Air Jake Delivery Services. Retain this document for customs and audit purposes. All charges are final upon issuance.
            </div>
          </div>
        </div>

      </div><!-- /.receipt-body -->

      <!-- ── Receipt Footer ── -->
      <div class="receipt-footer">
        <div class="receipt-footer-brand">AIR <span>JAKE</span></div>
        <div class="receipt-footer-meta">
          Generated: May 27, 2026<br>
          Receipt #INV-2026-0049210
        </div>
      </div>

    </div><!-- /.receipt -->
  </div><!-- /.page-wrap -->

  <!-- ══ SHARE MODAL ══ -->
  <div class="modal-overlay no-print" id="shareModal" onclick="handleOverlayClick(event)">
    <div class="modal">
      <div class="modal-handle"></div>
      <button class="modal-close" onclick="closeShare()"><i class="fa-solid fa-xmark"></i></button>
      <div class="modal-title">Share Receipt</div>
      <div class="modal-sub">Send this waybill to the consignee or save a copy.</div>

      <div class="share-url-wrap">
        <input class="share-url" id="shareUrl" type="text" readonly value="https://airjakedeliveryservice.com/track/AJD-LN-49210-PH">
        <button class="share-copy-btn" onclick="copyShareUrl()">Copy Link</button>
      </div>

      <div class="share-options">
        <div class="share-opt" onclick="shareVia('email')">
          <i class="fa-solid fa-envelope"></i>
          Email
        </div>
        <div class="share-opt" onclick="shareVia('whatsapp')">
          <i class="fa-brands fa-whatsapp"></i>
          WhatsApp
        </div>
        <div class="share-opt" onclick="window.print()">
          <i class="fa-solid fa-file-pdf"></i>
          Save PDF
        </div>
      </div>

      <button class="btn btn-primary" style="width:100%; justify-content:center; padding:12px;" onclick="nativeShare()">
        <i class="fa-solid fa-share-nodes"></i>
        Share via Device
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

    /* ── Toast ── */
    function showToast(msg) {
      var t = document.getElementById('toast');
      document.getElementById('toastMsg').textContent = msg;
      t.classList.add('show');
      setTimeout(function () { t.classList.remove('show'); }, 2800);
    }

    /* ── Copy tracking ID ── */
    window.copyTracking = function () {
      navigator.clipboard.writeText('AJD-LN-49210-PH').then(function () {
        showToast('Tracking ID copied!');
      });
    };

    /* ── Share modal ── */
    window.openShare = function () {
      document.getElementById('shareModal').classList.add('open');
      document.body.style.overflow = 'hidden';
    };
    window.closeShare = function () {
      document.getElementById('shareModal').classList.remove('open');
      document.body.style.overflow = '';
    };
    window.handleOverlayClick = function (e) {
      if (e.target === document.getElementById('shareModal')) closeShare();
    };

    /* ── Copy share URL ── */
    window.copyShareUrl = function () {
      var url = document.getElementById('shareUrl').value;
      navigator.clipboard.writeText(url).then(function () {
        showToast('Link copied to clipboard!');
      });
    };

    /* ── Share via ── */
    window.shareVia = function (platform) {
      var url = encodeURIComponent(document.getElementById('shareUrl').value);
      var text = encodeURIComponent('Air Jake Waybill Receipt — AJD-LN-49210-PH');
      var links = {
        email:    'mailto:?subject=' + text + '&body=Track%20your%20shipment%3A%20' + url,
        whatsapp: 'https://wa.me/?text=' + text + '%20' + url
      };
      if (links[platform]) window.open(links[platform], '_blank');
    };

    /* ── Native share (mobile) ── */
    window.nativeShare = function () {
      if (navigator.share) {
        navigator.share({
          title: 'Air Jake Waybill — AJD-LN-49210-PH',
          text: 'View your Air Jake shipment receipt and tracking details.',
          url: document.getElementById('shareUrl').value
        }).then(function () { closeShare(); });
      } else {
        copyShareUrl();
        showToast('Link copied — paste to share!');
      }
    };

  }());
  </script>

</body>
</html>