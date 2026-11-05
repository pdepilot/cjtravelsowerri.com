<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Travelbookings — A Quieter Way to Travel</title>
  <meta name="description" content="Travelbookings is an online travel agency for travellers in Nigeria and worldwide. Curated flights, hotels, destination guides and travel financing." />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" />

  <style>
    /* =======================================================
       TOKENS
       ======================================================= */
    :root {
      --cream: #f5f0e6;
      --cream-soft: #faf6ed;
      --ivory: #fdfbf6;
      --navy: #0b1e3d;
      --navy-soft: #1e3657;
      --navy-deep: #060f21;
      --gold: #a8842c;
      --gold-soft: #c9a55b;
      --gold-pale: #e8d9b3;
      --ink: #1a1a1a;
      --ink-soft: #4a4741;
      --muted: #8a8378;
      --hairline: #d9d1c0;
      --hairline-soft: #e8e1d1;
      --green: #2e7d5b;
      --error: #a3452e;
    }

    /* =======================================================
       RESET / BASE
       ======================================================= */
    * { box-sizing: border-box; }
    html { scroll-behavior: smooth; }
    body {
      font-family: 'DM Sans', sans-serif;
      font-weight: 400;
      color: var(--ink);
      background: var(--cream);
      line-height: 1.65;
      -webkit-font-smoothing: antialiased;
      text-rendering: optimizeLegibility;
      overflow-x: hidden;
    }

    h1, h2, h3, h4, h5, h6 {
      font-family: 'Cormorant Garamond', serif;
      font-weight: 400;
      letter-spacing: -.01em;
      color: var(--navy);
      margin: 0;
      line-height: 1.15;
    }

    p { margin: 0; }
    a { color: inherit; text-decoration: none; }
    img { max-width: 100%; display: block; }

    a:focus-visible, button:focus-visible, input:focus-visible, select:focus-visible {
      outline: 1.5px solid var(--navy);
      outline-offset: 4px;
    }

    /* =======================================================
       UTILITIES
       ======================================================= */
    .container { max-width: 1200px; padding-left: 24px; padding-right: 24px; margin: 0 auto; }

    .eyebrow {
      display: inline-flex;
      align-items: center;
      gap: 14px;
      font-family: 'DM Sans', sans-serif;
      font-size: 10.5px;
      font-weight: 500;
      letter-spacing: .32em;
      text-transform: uppercase;
      color: var(--muted);
      margin-bottom: 24px;
    }
    .eyebrow::before, .eyebrow::after {
      content: "";
      width: 28px;
      height: 1px;
      background: var(--gold);
    }
    .eyebrow.no-after::after { display: none; }
    .eyebrow.light { color: rgba(253, 251, 246, .7); }
    .eyebrow.light::before, .eyebrow.light::after { background: var(--gold-soft); }

    .section { padding: clamp(80px, 10vw, 140px) 0; }
    .section-tight { padding: clamp(56px, 7vw, 96px) 0; }

    .bg-cream { background: var(--cream); }
    .bg-cream-soft { background: var(--cream-soft); }
    .bg-ivory { background: var(--ivory); }
    .bg-navy { background: var(--navy); color: var(--ivory); }
    .bg-navy h1, .bg-navy h2, .bg-navy h3 { color: var(--ivory); }

    .section-head {
      max-width: 640px;
      margin: 0 auto clamp(48px, 6vw, 72px);
      text-align: center;
    }
    .section-head h2 {
      font-size: clamp(2rem, 4vw, 3.4rem);
      margin-bottom: 20px;
      letter-spacing: -.02em;
    }
    .section-head h2 em { font-style: italic; color: var(--gold); font-weight: 400; }
    .section-head p {
      font-size: 16px;
      color: var(--ink-soft);
      line-height: 1.7;
    }

    .reveal { opacity: 1; transform: none; }
    .js .reveal {
      opacity: 0;
      transform: translateY(28px);
      transition: opacity .9s cubic-bezier(.4, 0, .2, 1), transform .9s cubic-bezier(.4, 0, .2, 1);
    }
    .js .reveal.is-visible { opacity: 1; transform: none; }

    /* =======================================================
       BUTTONS
       ======================================================= */
    .btn-lux {
      display: inline-flex;
      align-items: center;
      gap: 12px;
      padding: 18px 32px;
      font-family: 'DM Sans', sans-serif;
      font-size: 11px;
      font-weight: 600;
      letter-spacing: .28em;
      text-transform: uppercase;
      cursor: pointer;
      border: 0;
      transition: all .3s ease;
    }
    .btn-lux-navy { background: var(--navy); color: var(--ivory); }
    .btn-lux-navy:hover { background: var(--navy-soft); color: var(--ivory); }
    .btn-lux-navy .arrow { transition: transform .3s ease; }
    .btn-lux-navy:hover .arrow { transform: translateX(4px); }

    .btn-lux-ghost {
      background: transparent;
      color: var(--navy);
      border: 1px solid var(--hairline);
    }
    .btn-lux-ghost:hover {
      background: var(--cream-soft);
      border-color: var(--navy);
      color: var(--navy);
    }

    .btn-lux-gold {
      background: linear-gradient(135deg, var(--gold-soft) 0%, var(--gold) 100%);
      color: var(--navy-deep);
    }
    .btn-lux-gold:hover {
      background: linear-gradient(135deg, var(--gold) 0%, var(--gold-soft) 100%);
      color: var(--navy-deep);
      transform: translateY(-1px);
    }

    .link-arrow {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      font-family: 'DM Sans', sans-serif;
      font-size: 11px;
      font-weight: 600;
      letter-spacing: .24em;
      text-transform: uppercase;
      color: var(--navy);
      border-bottom: 1px solid var(--hairline);
      padding-bottom: 4px;
      transition: all .25s ease;
    }
    .link-arrow:hover {
      border-bottom-color: var(--navy);
      color: var(--navy);
    }
    .link-arrow i { transition: transform .25s ease; }
    .link-arrow:hover i { transform: translateX(4px); }

    /* =======================================================
       TOPBAR
       ======================================================= */
    .topbar {
      background: var(--navy);
      color: rgba(253, 251, 246, .7);
      font-size: 12px;
      padding: 14px 0;
      border-bottom: 1px solid rgba(255, 255, 255, .06);
    }
    .topbar-inner {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 24px;
      flex-wrap: wrap;
    }
    .topbar-left {
      display: flex;
      align-items: center;
      gap: 28px;
    }
    .topbar a {
      color: rgba(253, 251, 246, .7);
      display: inline-flex;
      align-items: center;
      gap: 8px;
      letter-spacing: .04em;
      transition: color .2s ease;
    }
    .topbar a:hover { color: var(--gold-soft); }
    .topbar i { color: var(--gold-soft); font-size: 12px; }
    .topbar-right {
      display: flex;
      align-items: center;
      gap: 20px;
    }
    .topbar-badge {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      padding: 4px 12px;
      border: 1px solid rgba(201, 165, 91, .4);
      border-radius: 100px;
      font-size: 10px;
      letter-spacing: .18em;
      text-transform: uppercase;
      color: var(--gold-soft);
    }
    .topbar-badge::before {
      content: "";
      width: 5px;
      height: 5px;
      border-radius: 50%;
      background: var(--gold-soft);
    }

    /* =======================================================
       NAVBAR
       ======================================================= */
    .site-header {
      position: sticky;
      top: 0;
      z-index: 1030;
      background: var(--cream);
      border-bottom: 1px solid var(--hairline-soft);
      transition: box-shadow .3s ease, background-color .3s ease;
    }
    .site-header.scrolled {
      background: rgba(245, 240, 230, .97);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      box-shadow: 0 1px 0 var(--hairline);
    }

    .nav-inner {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 32px;
      padding: 22px 0;
    }

    .brand {
      display: inline-flex;
      align-items: center;
      gap: 12px;
      flex-shrink: 0;
    }
    .brand-mark {
      width: 42px;
      height: 42px;
      border-radius: 50%;
      border: 1px solid var(--navy);
      display: inline-flex;
      align-items: center;
      justify-content: center;
      color: var(--navy);
      font-size: 15px;
      flex-shrink: 0;
      transition: all .3s ease;
    }
    .brand:hover .brand-mark {
      background: var(--navy);
      color: var(--ivory);
    }
    .brand-name {
      font-family: 'Cormorant Garamond', serif;
      font-size: 24px;
      font-weight: 500;
      letter-spacing: .01em;
      color: var(--navy);
      line-height: 1;
    }
    .brand-name em {
      font-style: italic;
      color: var(--gold);
      font-weight: 400;
    }

    .nav-center {
      display: flex;
      align-items: center;
      gap: 4px;
      flex: 1;
      justify-content: center;
    }
    .nav-center a {
      padding: 10px 16px;
      font-size: 12px;
      font-weight: 500;
      letter-spacing: .12em;
      text-transform: uppercase;
      color: var(--ink-soft);
      border-bottom: 1px solid transparent;
      transition: all .25s ease;
      white-space: nowrap;
    }
    .nav-center a:hover { color: var(--navy); }
    .nav-center a.active {
      color: var(--navy);
      border-bottom-color: var(--gold);
    }

    .nav-actions {
      display: flex;
      align-items: center;
      gap: 20px;
      flex-shrink: 0;
    }
    .nav-actions a.text-link {
      font-size: 12px;
      font-weight: 500;
      letter-spacing: .12em;
      text-transform: uppercase;
      color: var(--ink-soft);
      transition: color .2s ease;
    }
    .nav-actions a.text-link:hover { color: var(--navy); }

    .btn-nav-cta {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      padding: 12px 22px;
      font-family: 'DM Sans', sans-serif;
      font-size: 11px;
      font-weight: 600;
      letter-spacing: .22em;
      text-transform: uppercase;
      background: var(--navy);
      color: var(--ivory);
      border: 0;
      cursor: pointer;
      transition: background-color .25s ease;
    }
    .btn-nav-cta:hover { background: var(--navy-soft); color: var(--ivory); }

    .navbar-toggler {
      display: none;
      width: 44px;
      height: 44px;
      border: 1px solid var(--hairline);
      background: transparent;
      color: var(--navy);
      align-items: center;
      justify-content: center;
      cursor: pointer;
    }

    @media (max-width: 991.98px) {
      .nav-center, .nav-actions { display: none; }
      .navbar-toggler { display: inline-flex; }
    }

    /* =======================================================
       MOBILE DRAWER
       ======================================================= */
    .mobile-nav-overlay {
      position: fixed;
      inset: 0;
      background: rgba(6, 15, 33, .55);
      backdrop-filter: blur(3px);
      z-index: 1049;
      opacity: 0;
      pointer-events: none;
      transition: opacity .3s ease;
    }
    .mobile-nav-overlay.show { opacity: 1; pointer-events: auto; }

    .mobile-nav {
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      width: min(360px, 88vw);
      background: var(--cream);
      z-index: 1050;
      transform: translateX(100%);
      transition: transform .4s cubic-bezier(.4, 0, .2, 1);
      display: flex;
      flex-direction: column;
      overflow-y: auto;
    }
    .mobile-nav.open { transform: translateX(0); }

    .mobile-nav-head {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 22px 24px;
      border-bottom: 1px solid var(--hairline-soft);
    }
    .mobile-nav-close {
      width: 40px;
      height: 40px;
      border: 1px solid var(--hairline);
      background: transparent;
      color: var(--navy);
      display: inline-flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
    }
    .mobile-nav-body { padding: 24px; flex: 1; }
    .mobile-nav .nav-list {
      list-style: none;
      padding: 0;
      margin: 0;
      display: grid;
      gap: 0;
    }
    .mobile-nav .nav-link {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 18px 0;
      font-family: 'Cormorant Garamond', serif;
      font-size: 24px;
      font-weight: 400;
      color: var(--navy);
      border-bottom: 1px solid var(--hairline-soft);
      transition: color .2s ease;
    }
    .mobile-nav .nav-link:hover,
    .mobile-nav .nav-link.active { color: var(--gold); }
    .mobile-nav .nav-link i {
      font-size: 14px;
      color: var(--hairline);
    }
    .mobile-nav-cta {
      padding: 24px;
      border-top: 1px solid var(--hairline-soft);
      display: grid;
      gap: 12px;
    }
    .mobile-nav-cta .btn-lux { justify-content: center; }
    .mobile-nav-footer {
      padding: 20px 24px 28px;
      border-top: 1px solid var(--hairline-soft);
      background: var(--cream-soft);
    }
    .mobile-nav-footer p {
      font-size: 11px;
      letter-spacing: .22em;
      text-transform: uppercase;
      color: var(--muted);
      margin-bottom: 12px;
    }
    .mobile-nav-footer a {
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 13px;
      color: var(--ink-soft);
      padding: 6px 0;
    }
    .mobile-nav-footer a i { color: var(--gold); }

    /* =======================================================
       HERO
       ======================================================= */
    .hero {
      background: var(--cream);
      padding: clamp(64px, 9vw, 120px) 0 clamp(80px, 10vw, 120px);
      position: relative;
      overflow: hidden;
    }
    .hero-content {
      max-width: 780px;
      margin: 0 auto;
      text-align: center;
      padding: 0 24px;
    }
    .hero h1 {
      font-size: clamp(2.6rem, 7vw, 5.5rem);
      line-height: .98;
      letter-spacing: -.025em;
      margin-bottom: 28px;
      color: var(--navy);
    }
    .hero h1 em {
      font-style: italic;
      color: var(--gold);
      font-weight: 400;
    }
    .hero-sub {
      font-size: clamp(15px, 1.5vw, 17px);
      color: var(--ink-soft);
      max-width: 56ch;
      margin: 0 auto 40px;
      line-height: 1.7;
    }
    .hero-actions {
      display: flex;
      gap: 16px;
      justify-content: center;
      flex-wrap: wrap;
    }

    .hero-image-wrap {
      margin-top: clamp(48px, 6vw, 80px);
      padding: 0 24px;
    }
    .hero-image-card {
      position: relative;
      max-width: 1200px;
      margin: 0 auto;
      aspect-ratio: 21 / 9;
      border-radius: 2px;
      overflow: hidden;
    }
    .hero-image-card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }
    .hero-image-card::after {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(180deg, rgba(11, 30, 61, .05) 0%, rgba(11, 30, 61, .25) 100%);
      pointer-events: none;
    }
    .hero-image-badge {
      position: absolute;
      left: 32px;
      bottom: 32px;
      z-index: 2;
      display: inline-flex;
      align-items: center;
      gap: 14px;
      background: rgba(253, 251, 246, .94);
      backdrop-filter: blur(10px);
      padding: 14px 22px;
      border-radius: 2px;
    }
    .hero-image-badge i { color: var(--gold); font-size: 18px; }
    .hero-image-badge span {
      font-family: 'Cormorant Garamond', serif;
      font-size: 15px;
      color: var(--navy);
      letter-spacing: .01em;
    }
    .hero-image-badge span em { font-style: italic; color: var(--gold); }

    @media (max-width: 767.98px) {
      .hero-image-card { aspect-ratio: 4 / 3; }
      .hero-image-badge { left: 16px; bottom: 16px; padding: 10px 16px; }
      .hero-image-badge span { font-size: 13px; }
    }

    /* =======================================================
       SEARCH PANEL (floating below hero image)
       ======================================================= */
    .search-wrap {
      margin-top: -60px;
      position: relative;
      z-index: 5;
      padding: 0 24px;
    }
    .search-card {
      max-width: 1100px;
      margin: 0 auto;
      background: var(--ivory);
      border: 1px solid var(--hairline);
      border-radius: 2px;
      padding: 40px 40px 36px;
    }

    .search-tabs {
      display: flex;
      gap: 0;
      border-bottom: 1px solid var(--hairline-soft);
      margin-bottom: 32px;
    }
    .search-tabs button {
      background: transparent;
      border: 0;
      border-bottom: 2px solid transparent;
      padding: 14px 24px;
      font-family: 'DM Sans', sans-serif;
      font-size: 12px;
      font-weight: 500;
      letter-spacing: .18em;
      text-transform: uppercase;
      color: var(--muted);
      cursor: pointer;
      transition: all .25s ease;
      margin-bottom: -1px;
      display: inline-flex;
      align-items: center;
      gap: 10px;
    }
    .search-tabs button i { font-size: 13px; }
    .search-tabs button:hover { color: var(--navy); }
    .search-tabs button.active {
      color: var(--navy);
      border-bottom-color: var(--gold);
    }

    .search-form .form-label {
      display: block;
      font-family: 'DM Sans', sans-serif;
      font-size: 10px;
      font-weight: 600;
      letter-spacing: .22em;
      text-transform: uppercase;
      color: var(--muted);
      margin-bottom: 10px;
    }
    .search-form .field {
      position: relative;
    }
    .search-form .field > i {
      position: absolute;
      left: 14px;
      top: 50%;
      transform: translateY(-50%);
      color: var(--gold);
      font-size: 13px;
      pointer-events: none;
    }
    .search-form .form-control,
    .search-form .form-select {
      width: 100%;
      height: 52px;
      background: transparent;
      border: 1px solid var(--hairline);
      border-radius: 2px;
      padding: 0 16px 0 40px;
      font-family: 'DM Sans', sans-serif;
      font-size: 14px;
      font-weight: 400;
      color: var(--navy);
      transition: border-color .25s ease, background-color .25s ease;
      appearance: none;
      -webkit-appearance: none;
    }
    .search-form .form-select {
      background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%238a8378' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      background-position: right 12px center;
      background-size: 12px;
      padding-right: 36px;
    }
    .search-form .form-control::placeholder { color: var(--muted); font-weight: 400; }
    .search-form .form-control:hover,
    .search-form .form-select:hover { border-color: var(--gold-pale); }
    .search-form .form-control:focus,
    .search-form .form-select:focus {
      outline: none;
      border-color: var(--navy);
      background: #fff;
    }

    .swap-btn {
      position: absolute;
      right: -18px;
      top: 42px;
      width: 36px;
      height: 36px;
      border-radius: 50%;
      background: var(--ivory);
      border: 1px solid var(--hairline);
      color: var(--navy);
      display: none;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      z-index: 3;
      transition: all .25s ease;
    }
    .swap-btn:hover { background: var(--navy); color: var(--ivory); border-color: var(--navy); }
    .swap-btn i { transition: transform .3s ease; }
    .swap-btn.spun i { transform: rotate(180deg); }
    @media (min-width: 992px) { .swap-btn { display: inline-flex; } }

    .search-footer {
      margin-top: 32px;
      padding-top: 24px;
      border-top: 1px solid var(--hairline-soft);
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 24px;
      flex-wrap: wrap;
    }
    .search-note {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      font-size: 12px;
      color: var(--muted);
      letter-spacing: .02em;
    }
    .search-note i { color: var(--green); font-size: 13px; }

    .search-status {
      display: none;
      margin-top: 20px;
      padding: 16px 20px;
      font-size: 13px;
      line-height: 1.6;
    }
    .search-status.show { display: block; }
    .search-status.success {
      background: rgba(46, 125, 91, .06);
      border-left: 2px solid var(--green);
      color: var(--green);
    }
    .search-status.error {
      background: rgba(163, 69, 46, .06);
      border-left: 2px solid var(--error);
      color: var(--error);
    }

    @media (max-width: 767.98px) {
      .search-wrap { margin-top: -32px; }
      .search-card { padding: 28px 20px; }
    }

    /* =======================================================
       STATS STRIP
       ======================================================= */
    .stats-strip { padding: clamp(48px, 6vw, 80px) 0; }
    .stats-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 0;
    }
    .stat {
      text-align: center;
      padding: 24px 20px;
      border-right: 1px solid var(--hairline-soft);
    }
    .stat:last-child { border-right: 0; }
    .stat-num {
      display: block;
      font-family: 'Cormorant Garamond', serif;
      font-size: clamp(2.4rem, 4.5vw, 4rem);
      font-weight: 400;
      letter-spacing: -.02em;
      color: var(--navy);
      line-height: 1;
      margin-bottom: 12px;
      font-variant-numeric: tabular-nums;
    }
    .stat-num .suffix { color: var(--gold); }
    .stat-label {
      font-family: 'DM Sans', sans-serif;
      font-size: 11px;
      font-weight: 500;
      letter-spacing: .22em;
      text-transform: uppercase;
      color: var(--muted);
    }
    @media (max-width: 767.98px) {
      .stats-grid { grid-template-columns: repeat(2, 1fr); }
      .stat:nth-child(2) { border-right: 0; }
      .stat:nth-child(1), .stat:nth-child(2) {
        border-bottom: 1px solid var(--hairline-soft);
      }
    }

    /* =======================================================
       VIDEO SHOWCASE
       ======================================================= */
    .video-showcase {
      position: relative;
      overflow: hidden;
      padding: clamp(96px, 12vw, 160px) 0;
      background: var(--navy-deep);
      color: var(--ivory);
      isolation: isolate;
      text-align: center;
    }
    .video-bg {
      position: absolute;
      inset: 0;
      z-index: 0;
    }
    .video-bg video {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }
    .video-bg::after {
      content: "";
      position: absolute;
      inset: 0;
      background:
        linear-gradient(180deg, rgba(6, 15, 33, .8) 0%, rgba(6, 15, 33, .65) 40%, rgba(6, 15, 33, .92) 100%);
    }
    .video-content {
      position: relative;
      z-index: 2;
      max-width: 720px;
      margin: 0 auto;
      padding: 0 24px;
    }
    .video-content h2 {
      font-size: clamp(2rem, 4.5vw, 3.6rem);
      color: var(--ivory);
      margin-bottom: 20px;
      letter-spacing: -.02em;
    }
    .video-content h2 em { font-style: italic; color: var(--gold-soft); font-weight: 400; }
    .video-content p {
      color: rgba(253, 251, 246, .75);
      font-size: 16px;
      line-height: 1.7;
      max-width: 52ch;
      margin: 0 auto 48px;
    }

    .play-btn {
      display: inline-flex;
      align-items: center;
      gap: 20px;
      background: transparent;
      border: 0;
      color: var(--ivory);
      font-family: 'DM Sans', sans-serif;
      font-size: 11px;
      font-weight: 600;
      letter-spacing: .28em;
      text-transform: uppercase;
      cursor: pointer;
      padding: 0;
      transition: opacity .25s ease;
    }
    .play-btn:hover { opacity: .85; }
    .play-btn .play-circle {
      width: 72px;
      height: 72px;
      border-radius: 50%;
      border: 1px solid rgba(201, 165, 91, .5);
      background: transparent;
      color: var(--gold-soft);
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 20px;
      position: relative;
      flex-shrink: 0;
      transition: background-color .25s ease, border-color .25s ease;
    }
    .play-btn:hover .play-circle {
      background: rgba(201, 165, 91, .1);
      border-color: var(--gold-soft);
    }
    .play-btn .play-circle::before {
      content: "";
      position: absolute;
      inset: -8px;
      border-radius: 50%;
      border: 1px solid rgba(201, 165, 91, .2);
      animation: pulse-ring 2.6s ease-out infinite;
    }
    @keyframes pulse-ring {
      0% { transform: scale(.95); opacity: 1; }
      100% { transform: scale(1.4); opacity: 0; }
    }

    /* =======================================================
       SERVICES
       ======================================================= */
    .services-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 1px;
      background: var(--hairline-soft);
      border: 1px solid var(--hairline-soft);
    }
    .service {
      background: var(--cream);
      padding: clamp(32px, 4vw, 48px) clamp(24px, 3vw, 40px);
      transition: background-color .3s ease;
      display: flex;
      flex-direction: column;
      position: relative;
    }
    .service:hover { background: var(--ivory); }
    .service-icon {
      width: 52px;
      height: 52px;
      border-radius: 50%;
      border: 1px solid var(--gold-pale);
      color: var(--gold);
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 18px;
      margin-bottom: 28px;
      transition: all .3s ease;
    }
    .service:hover .service-icon {
      background: var(--navy);
      border-color: var(--navy);
      color: var(--gold-soft);
    }
    .service h3 {
      font-size: 1.55rem;
      margin-bottom: 12px;
      letter-spacing: -.01em;
    }
    .service p {
      color: var(--ink-soft);
      font-size: 14px;
      line-height: 1.7;
      margin-bottom: 32px;
      flex: 1;
    }
    .service .link-arrow { margin-top: auto; }

    @media (max-width: 991.98px) {
      .services-grid { grid-template-columns: 1fr; }
    }

    /* =======================================================
       DESTINATIONS
       ======================================================= */
    .dest-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 32px;
    }
    .dest-card {
      display: block;
      color: inherit;
      transition: transform .4s ease;
    }
    .dest-card:hover { transform: translateY(-4px); }
    .dest-media {
      aspect-ratio: 4 / 5;
      overflow: hidden;
      margin-bottom: 20px;
      position: relative;
      border-radius: 2px;
    }
    .dest-media img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform .8s cubic-bezier(.4, 0, .2, 1);
    }
    .dest-card:hover .dest-media img { transform: scale(1.06); }
    .dest-continent {
      position: absolute;
      top: 16px;
      left: 16px;
      z-index: 2;
      font-size: 9px;
      font-weight: 500;
      letter-spacing: .28em;
      text-transform: uppercase;
      color: var(--ivory);
      background: rgba(11, 30, 61, .75);
      padding: 6px 12px;
      backdrop-filter: blur(6px);
    }
    .dest-body h3 {
      font-size: 1.75rem;
      margin-bottom: 4px;
      letter-spacing: -.01em;
    }
    .dest-body p {
      font-size: 11px;
      letter-spacing: .18em;
      text-transform: uppercase;
      color: var(--muted);
      margin-bottom: 14px;
    }
    .dest-link {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      font-size: 10px;
      font-weight: 500;
      letter-spacing: .22em;
      text-transform: uppercase;
      color: var(--gold);
    }
    .dest-link i { transition: transform .25s ease; }
    .dest-card:hover .dest-link i { transform: translateX(4px); }

    @media (max-width: 991.98px) {
      .dest-grid { grid-template-columns: repeat(2, 1fr); gap: 24px; }
    }
    @media (max-width: 575.98px) {
      .dest-grid { grid-template-columns: 1fr; }
    }

    /* =======================================================
       WHY CHOOSE US
       ======================================================= */
    .split {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: clamp(48px, 8vw, 96px);
      align-items: center;
    }
    .split-media {
      aspect-ratio: 4 / 5;
      overflow: hidden;
      border-radius: 2px;
    }
    .split-media img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }
    .split-content h2 {
      font-size: clamp(1.9rem, 3.4vw, 3rem);
      margin-bottom: 24px;
      line-height: 1.15;
      letter-spacing: -.015em;
    }
    .split-content h2 em { font-style: italic; color: var(--gold); font-weight: 400; }
    .split-content > p {
      color: var(--ink-soft);
      font-size: 16px;
      line-height: 1.75;
      margin-bottom: 36px;
    }
    .check-list {
      list-style: none;
      padding: 0;
      margin: 0 0 40px;
      display: grid;
      gap: 20px;
    }
    .check-list li {
      display: flex;
      gap: 16px;
      padding-bottom: 20px;
      border-bottom: 1px solid var(--hairline-soft);
    }
    .check-list li:last-child { border-bottom: 0; padding-bottom: 0; }
    .check-list i {
      color: var(--gold);
      font-size: 16px;
      flex-shrink: 0;
      margin-top: 2px;
    }
    .check-list div { display: flex; flex-direction: column; gap: 4px; }
    .check-list strong {
      font-family: 'Cormorant Garamond', serif;
      font-size: 1.15rem;
      font-weight: 500;
      color: var(--navy);
      letter-spacing: -.005em;
    }
    .check-list span {
      font-size: 14px;
      color: var(--ink-soft);
      line-height: 1.6;
    }

    @media (max-width: 991.98px) {
      .split { grid-template-columns: 1fr; }
      .split-media { aspect-ratio: 4 / 3; }
    }

    /* =======================================================
       FINANCING
       ======================================================= */
    .financing {
      background: var(--navy);
      color: var(--ivory);
      position: relative;
      overflow: hidden;
    }
    .financing::before {
      content: "";
      position: absolute;
      width: 600px;
      height: 600px;
      right: -200px;
      top: -200px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(201, 165, 91, .12), transparent 70%);
      pointer-events: none;
    }
    .financing-inner {
      position: relative;
      z-index: 1;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: clamp(48px, 8vw, 96px);
      align-items: center;
    }
    .financing h2 {
      font-size: clamp(2rem, 4vw, 3.4rem);
      color: var(--ivory);
      margin-bottom: 24px;
      letter-spacing: -.02em;
      line-height: 1.1;
    }
    .financing h2 em { font-style: italic; color: var(--gold-soft); font-weight: 400; }
    .financing-lead {
      color: rgba(253, 251, 246, .75);
      font-size: 16px;
      line-height: 1.75;
      margin-bottom: 36px;
      max-width: 52ch;
    }
    .financing-list {
      list-style: none;
      padding: 0;
      margin: 0 0 40px;
      display: grid;
      gap: 16px;
    }
    .financing-list li {
      display: flex;
      gap: 14px;
      align-items: flex-start;
      color: rgba(253, 251, 246, .85);
      font-size: 15px;
      line-height: 1.6;
    }
    .financing-list i {
      color: var(--gold-soft);
      font-size: 14px;
      margin-top: 4px;
      flex-shrink: 0;
    }
    .financing-disclaimer {
      font-size: 12px;
      color: rgba(253, 251, 246, .5);
      line-height: 1.7;
      max-width: 56ch;
      padding-top: 24px;
      border-top: 1px solid rgba(253, 251, 246, .1);
    }

    .financing-card {
      background: rgba(253, 251, 246, .04);
      border: 1px solid rgba(253, 251, 246, .12);
      padding: clamp(32px, 4vw, 48px);
    }
    .financing-card-head {
      padding-bottom: 28px;
      margin-bottom: 32px;
      border-bottom: 1px solid rgba(253, 251, 246, .12);
      display: flex;
      align-items: center;
      gap: 18px;
    }
    .financing-card-head i {
      color: var(--gold-soft);
      font-size: 24px;
    }
    .financing-card-head h3 {
      font-size: 1.4rem;
      color: var(--ivory);
      margin: 0;
    }
    .financing-card-head p {
      font-size: 12px;
      color: rgba(253, 251, 246, .55);
      letter-spacing: .04em;
      margin-top: 4px;
    }
    .financing-steps {
      list-style: none;
      padding: 0;
      margin: 0;
      display: grid;
      gap: 24px;
    }
    .financing-steps li {
      display: flex;
      gap: 20px;
      align-items: flex-start;
      padding-bottom: 24px;
      border-bottom: 1px solid rgba(253, 251, 246, .08);
    }
    .financing-steps li:last-child { border-bottom: 0; padding-bottom: 0; }
    .step-num {
      width: 32px;
      height: 32px;
      border-radius: 50%;
      border: 1px solid rgba(201, 165, 91, .4);
      color: var(--gold-soft);
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-family: 'Cormorant Garamond', serif;
      font-size: 14px;
      flex-shrink: 0;
    }
    .financing-steps div { display: flex; flex-direction: column; gap: 4px; }
    .financing-steps strong {
      font-family: 'Cormorant Garamond', serif;
      font-size: 1.1rem;
      font-weight: 500;
      color: var(--ivory);
      letter-spacing: -.005em;
    }
    .financing-steps span {
      font-size: 13px;
      color: rgba(253, 251, 246, .6);
      line-height: 1.6;
    }

    @media (max-width: 991.98px) {
      .financing-inner { grid-template-columns: 1fr; }
    }

    /* =======================================================
       HOW IT WORKS
       ======================================================= */
    .steps-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 0;
    }
    .step {
      padding: clamp(32px, 4vw, 48px) clamp(24px, 3vw, 40px);
      border-right: 1px solid var(--hairline-soft);
      position: relative;
    }
    .step:last-child { border-right: 0; }
    .step-num-big {
      display: block;
      font-family: 'Cormorant Garamond', serif;
      font-size: clamp(3.5rem, 7vw, 6rem);
      font-weight: 300;
      color: var(--gold-pale);
      line-height: .85;
      margin-bottom: 32px;
      letter-spacing: -.03em;
    }
    .step h3 {
      font-size: 1.5rem;
      margin-bottom: 12px;
      letter-spacing: -.01em;
    }
    .step p {
      font-size: 14px;
      color: var(--ink-soft);
      line-height: 1.7;
    }
    @media (max-width: 991.98px) {
      .steps-grid { grid-template-columns: 1fr; }
      .step {
        border-right: 0;
        border-bottom: 1px solid var(--hairline-soft);
      }
      .step:last-child { border-bottom: 0; }
    }

    /* =======================================================
       TESTIMONIALS
       ======================================================= */
    .testimonials-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 40px;
    }
    .testimonial {
      padding: 0;
    }
    .testimonial-mark {
      font-family: 'Cormorant Garamond', serif;
      font-size: 80px;
      line-height: .4;
      color: var(--gold-pale);
      display: block;
      margin-bottom: 16px;
      height: 28px;
    }
    .testimonial blockquote {
      font-family: 'Cormorant Garamond', serif;
      font-size: clamp(1.1rem, 1.6vw, 1.35rem);
      font-weight: 400;
      line-height: 1.55;
      letter-spacing: -.005em;
      color: var(--navy);
      margin: 0 0 28px;
      font-style: italic;
    }
    .testimonial-author {
      display: flex;
      align-items: center;
      gap: 14px;
      padding-top: 20px;
      border-top: 1px solid var(--hairline-soft);
    }
    .testimonial-author .line {
      width: 24px;
      height: 1px;
      background: var(--gold);
      flex-shrink: 0;
    }
    .testimonial-author div {
      display: flex;
      flex-direction: column;
      gap: 2px;
    }
    .testimonial-author strong {
      font-size: 11px;
      font-weight: 600;
      letter-spacing: .18em;
      text-transform: uppercase;
      color: var(--navy);
    }
    .testimonial-author span {
      font-size: 11px;
      color: var(--muted);
      letter-spacing: .02em;
    }
    @media (max-width: 991.98px) {
      .testimonials-grid { grid-template-columns: 1fr; gap: 48px; }
    }

    /* =======================================================
       CTA BAND
       ======================================================= */
    .cta {
      background: var(--navy);
      color: var(--ivory);
      text-align: center;
      position: relative;
      overflow: hidden;
    }
    .cta::before {
      content: "";
      position: absolute;
      width: 800px;
      height: 800px;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
      border-radius: 50%;
      background: radial-gradient(circle, rgba(201, 165, 91, .1), transparent 60%);
      pointer-events: none;
    }
    .cta-inner {
      position: relative;
      z-index: 1;
      max-width: 720px;
      margin: 0 auto;
      padding: 0 24px;
    }
    .cta h2 {
      font-size: clamp(2.2rem, 5vw, 4rem);
      color: var(--ivory);
      margin-bottom: 24px;
      letter-spacing: -.025em;
      line-height: 1.05;
    }
    .cta h2 em { font-style: italic; color: var(--gold-soft); font-weight: 400; }
    .cta p {
      color: rgba(253, 251, 246, .72);
      font-size: 16px;
      line-height: 1.7;
      margin-bottom: 40px;
      max-width: 52ch;
      margin-left: auto;
      margin-right: auto;
    }
    .cta-actions {
      display: flex;
      gap: 16px;
      justify-content: center;
      flex-wrap: wrap;
    }
    .cta .btn-lux-ghost {
      color: var(--ivory);
      border-color: rgba(253, 251, 246, .25);
    }
    .cta .btn-lux-ghost:hover {
      background: rgba(253, 251, 246, .08);
      border-color: var(--gold-soft);
      color: var(--ivory);
    }

    /* =======================================================
       FOOTER
       ======================================================= */
    .site-footer {
      background: var(--navy-deep);
      color: rgba(253, 251, 246, .7);
      position: relative;
      overflow: hidden;
      padding: 96px 0 0;
    }
    .footer-watermark {
      position: absolute;
      left: 50%;
      bottom: -10rem;
      transform: translateX(-50%);
      font-family: 'Cormorant Garamond', serif;
      font-size: clamp(10rem, 24vw, 28rem);
      font-weight: 300;
      font-style: italic;
      letter-spacing: -.03em;
      line-height: .8;
      white-space: nowrap;
      pointer-events: none;
      user-select: none;
      z-index: 0;
      background: linear-gradient(180deg,
        rgba(201, 165, 91, .14) 0%,
        rgba(201, 165, 91, .05) 40%,
        rgba(201, 165, 91, 0) 85%);
      -webkit-background-clip: text;
      background-clip: text;
      -webkit-text-fill-color: transparent;
      color: transparent;
    }
    .footer-watermark::before { content: "Travelbookings"; }

    .footer-inner { position: relative; z-index: 1; }
    .footer-grid {
      display: grid;
      grid-template-columns: 1.5fr 1fr 1fr 1.3fr;
      gap: clamp(32px, 5vw, 64px);
      padding-bottom: 72px;
      border-bottom: 1px solid rgba(253, 251, 246, .08);
    }
    .footer-brand {
      display: inline-flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 24px;
    }
    .footer-brand .brand-mark {
      width: 40px;
      height: 40px;
      border-color: rgba(201, 165, 91, .4);
      color: var(--gold-soft);
    }
    .footer-brand .brand-name {
      color: var(--ivory);
      font-size: 22px;
    }
    .footer-brand .brand-name em { color: var(--gold-soft); }
    .footer-about {
      font-size: 13px;
      line-height: 1.75;
      color: rgba(253, 251, 246, .55);
      max-width: 36ch;
      margin-bottom: 28px;
    }
    .footer-social {
      display: flex;
      gap: 10px;
    }
    .footer-social a {
      width: 38px;
      height: 38px;
      border: 1px solid rgba(253, 251, 246, .14);
      color: rgba(253, 251, 246, .7);
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 14px;
      transition: all .25s ease;
    }
    .footer-social a:hover {
      border-color: var(--gold-soft);
      color: var(--gold-soft);
    }

    .footer-heading {
      font-family: 'DM Sans', sans-serif;
      font-size: 10px;
      font-weight: 600;
      letter-spacing: .28em;
      text-transform: uppercase;
      color: var(--gold-soft);
      margin-bottom: 24px;
    }
    .footer-links {
      list-style: none;
      padding: 0;
      margin: 0;
      display: grid;
      gap: 12px;
    }
    .footer-links a {
      color: rgba(253, 251, 246, .6);
      font-size: 13px;
      transition: color .2s ease;
    }
    .footer-links a:hover { color: var(--gold-soft); }

    .footer-contact {
      display: grid;
      gap: 12px;
      margin-bottom: 24px;
    }
    .footer-contact a,
    .footer-contact span {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      font-size: 13px;
      color: rgba(253, 251, 246, .6);
      transition: color .2s ease;
    }
    .footer-contact a:hover { color: var(--gold-soft); }
    .footer-contact i { color: var(--gold-soft); font-size: 12px; }

    .footer-newsletter {
      margin-top: 24px;
    }
    .footer-newsletter p {
      font-size: 12px;
      color: rgba(253, 251, 246, .5);
      margin-bottom: 12px;
      letter-spacing: .02em;
    }
    .footer-newsletter-form {
      display: flex;
      border-bottom: 1px solid rgba(253, 251, 246, .15);
      transition: border-color .25s ease;
    }
    .footer-newsletter-form:focus-within {
      border-bottom-color: var(--gold-soft);
    }
    .footer-newsletter-form input {
      flex: 1;
      background: transparent;
      border: 0;
      padding: 10px 0;
      color: var(--ivory);
      font-size: 13px;
      font-family: inherit;
      outline: none;
      min-width: 0;
    }
    .footer-newsletter-form input::placeholder { color: rgba(253, 251, 246, .35); }
    .footer-newsletter-form button {
      background: transparent;
      border: 0;
      color: var(--gold-soft);
      padding: 10px 12px;
      cursor: pointer;
      font-size: 14px;
      transition: transform .2s ease;
    }
    .footer-newsletter-form button:hover { transform: translateX(3px); }

    .newsletter-status {
      display: none;
      font-size: 11px;
      margin-top: 8px;
      letter-spacing: .02em;
    }
    .newsletter-status.show { display: block; }
    .newsletter-status.success { color: var(--gold-soft); }
    .newsletter-status.error { color: #f0a19a; }

    .footer-bottom {
      padding: 32px 0;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 20px;
      flex-wrap: wrap;
      font-size: 11px;
      color: rgba(253, 251, 246, .4);
      letter-spacing: .04em;
    }
    .footer-legal {
      list-style: none;
      display: flex;
      gap: 24px;
      margin: 0;
      padding: 0;
      flex-wrap: wrap;
    }
    .footer-legal a {
      color: rgba(253, 251, 246, .4);
      transition: color .2s ease;
    }
    .footer-legal a:hover { color: var(--gold-soft); }

    @media (max-width: 991.98px) {
      .footer-grid { grid-template-columns: 1fr 1fr; }
      .footer-grid > :first-child { grid-column: 1 / -1; }
    }
    @media (max-width: 575.98px) {
      .footer-grid { grid-template-columns: 1fr; }
      .footer-bottom { flex-direction: column; text-align: center; }
      .footer-legal { justify-content: center; }
    }

    /* =======================================================
       REDUCED MOTION
       ======================================================= */
    @media (prefers-reduced-motion: reduce) {
      * { transition-duration: .01ms !important; animation: none !important; }
      html { scroll-behavior: auto; }
    }
  </style>

  <script>document.documentElement.classList.add('js');</script>
</head>

<body>
  <a href="#main" class="skip-link" style="position:absolute;left:1rem;top:-60px;background:var(--navy);color:var(--ivory);padding:.7rem 1.2rem;z-index:100;font-size:13px;letter-spacing:.1em;text-transform:uppercase;transition:top .25s ease;">Skip to content</a>

  <!-- =========================================================
       TOPBAR
       ========================================================= -->
  <div class="topbar d-none d-lg-block">
    <div class="container">
      <div class="topbar-inner">
        <div class="topbar-left">
          <a href="tel:+2348080452890"><i class="bi bi-telephone"></i> 0808 045 2890</a>
          <a href="mailto:info@travelbookings.ng"><i class="bi bi-envelope"></i> info@travelbookings.ng</a>
        </div>
        <div class="topbar-right">
          <span class="topbar-badge">Concierge · Available 24/7</span>
          <a href="/contact">Contact</a>
        </div>
      </div>
    </div>
  </div>

  <!-- =========================================================
       NAVBAR
       ========================================================= -->
  <header class="site-header" id="siteHeader">
    <div class="container">
      <div class="nav-inner">

        <a class="brand" href="/" aria-label="Travelbookings home">
          <span class="brand-mark"><i class="bi bi-airplane-engines"></i></span>
          <span class="brand-name">Travel<em>bookings</em></span>
        </a>

        <nav class="nav-center" aria-label="Main navigation">
          <a href="/flights">Flights</a>
          <a href="/hotels">Hotels</a>
          <a href="/destinations">Destinations</a>
          <a href="/financing">Financing</a>
          <a href="/about">About</a>
        </nav>

        <div class="nav-actions">
          <a href="/login" class="text-link">Sign in</a>
          <a href="/register" class="btn-nav-cta">Book now <i class="bi bi-arrow-right"></i></a>
        </div>

        <button class="navbar-toggler" type="button" id="mobileToggle"
                aria-controls="mobileNav" aria-expanded="false" aria-label="Open menu">
          <i class="bi bi-list"></i>
        </button>

      </div>
    </div>
  </header>

  <!-- =========================================================
       MOBILE DRAWER
       ========================================================= -->
  <div class="mobile-nav-overlay" id="mobileOverlay"></div>

  <aside class="mobile-nav" id="mobileNav" aria-label="Mobile navigation">
    <div class="mobile-nav-head">
      <a class="brand" href="/">
        <span class="brand-mark"><i class="bi bi-airplane-engines"></i></span>
        <span class="brand-name">Travel<em>bookings</em></span>
      </a>
      <button class="mobile-nav-close" id="mobileClose" aria-label="Close menu">
        <i class="bi bi-x-lg"></i>
      </button>
    </div>

    <div class="mobile-nav-body">
      <ul class="nav-list">
        <li><a class="nav-link active" href="/">Home <i class="bi bi-arrow-right"></i></a></li>
        <li><a class="nav-link" href="/flights">Flights <i class="bi bi-arrow-right"></i></a></li>
        <li><a class="nav-link" href="/hotels">Hotels <i class="bi bi-arrow-right"></i></a></li>
        <li><a class="nav-link" href="/destinations">Destinations <i class="bi bi-arrow-right"></i></a></li>
        <li><a class="nav-link" href="/financing">Financing <i class="bi bi-arrow-right"></i></a></li>
        <li><a class="nav-link" href="/about">About <i class="bi bi-arrow-right"></i></a></li>
        <li><a class="nav-link" href="/contact">Contact <i class="bi bi-arrow-right"></i></a></li>
      </ul>
    </div>

    <div class="mobile-nav-cta">
      <a href="/login" class="btn-lux btn-lux-ghost">Sign in</a>
      <a href="/register" class="btn-lux btn-lux-navy">Book now <i class="bi bi-arrow-right"></i></a>
    </div>

    <div class="mobile-nav-footer">
      <p>Reach the concierge</p>
      <a href="tel:+2348080452890"><i class="bi bi-telephone"></i> 0808 045 2890</a>
      <a href="mailto:info@travelbookings.ng"><i class="bi bi-envelope"></i> info@travelbookings.ng</a>
    </div>
  </aside>

  <main id="main">

    <!-- =========================================================
         HERO
         ========================================================= -->
    <section class="hero">
      <div class="hero-content">
        <span class="eyebrow">Est. MMXXIV · Worldwide travel</span>
        <h1>Where the journey<br />becomes the <em>memory</em>.</h1>
        <p class="hero-sub">
          A quiet kind of travel agency. We compare fares, curate stays and manage the details
          — so the only thing left for you to do is arrive.
        </p>
        <div class="hero-actions">
          <a href="#search" class="btn-lux btn-lux-navy">
            Begin your search <i class="bi bi-arrow-right arrow"></i>
          </a>
          <a href="/about" class="btn-lux btn-lux-ghost">Our story</a>
        </div>
      </div>

      <div class="hero-image-wrap">
        <div class="hero-image-card">
          <img src="https://images.unsplash.com/photo-1571003123894-1f0594d2b5d9?auto=format&fit=crop&w=1920&q=85"
               alt="A quiet luxury hotel terrace overlooking the sea at golden hour"
               loading="eager" decoding="async" />
          <span class="hero-image-badge">
            <i class="bi bi-compass"></i>
            <span>Curated by <em>travellers</em>, for travellers</span>
          </span>
        </div>
      </div>
    </section>

    <!-- =========================================================
         SEARCH
         ========================================================= -->
    <section class="search-wrap" id="search">
      <div class="search-card reveal">

        <div class="search-tabs" role="tablist">
          <button type="button" class="active" id="flights-tab"
                  data-bs-toggle="pill" data-bs-target="#flights-pane" role="tab"
                  aria-controls="flights-pane" aria-selected="true">
            <i class="bi bi-airplane"></i> Flights
          </button>
          <button type="button" id="hotels-tab"
                  data-bs-toggle="pill" data-bs-target="#hotels-pane" role="tab"
                  aria-controls="hotels-pane" aria-selected="false">
            <i class="bi bi-building"></i> Hotels
          </button>
        </div>

        <div class="tab-content">

          <!-- Flights -->
          <div class="tab-pane fade show active" id="flights-pane" role="tabpanel"
               aria-labelledby="flights-tab" tabindex="0">
            <form class="search-form" id="flightForm" novalidate>
              <div class="row g-3">
                <div class="col-lg-3 col-md-6 position-relative">
                  <label class="form-label" for="flightFrom">From</label>
                  <div class="field">
                    <i class="bi bi-geo-alt"></i>
                    <input type="text" class="form-control" id="flightFrom" placeholder="Lagos (LOS)" autocomplete="off" />
                  </div>
                  <button type="button" class="swap-btn" id="swapBtn" aria-label="Swap origin and destination">
                    <i class="bi bi-arrow-left-right"></i>
                  </button>
                </div>
                <div class="col-lg-3 col-md-6">
                  <label class="form-label" for="flightTo">To</label>
                  <div class="field">
                    <i class="bi bi-geo-alt"></i>
                    <input type="text" class="form-control" id="flightTo" placeholder="London (LHR)" autocomplete="off" />
                  </div>
                </div>
                <div class="col-lg-2 col-md-6">
                  <label class="form-label" for="flightDepart">Departure</label>
                  <div class="field">
                    <i class="bi bi-calendar3"></i>
                    <input type="date" class="form-control" id="flightDepart" />
                  </div>
                </div>
                <div class="col-lg-2 col-md-6">
                  <label class="form-label" for="flightReturn">Return</label>
                  <div class="field">
                    <i class="bi bi-calendar3"></i>
                    <input type="date" class="form-control" id="flightReturn" />
                  </div>
                </div>
                <div class="col-lg-2 col-md-6">
                  <label class="form-label" for="flightTravellers">Travellers</label>
                  <div class="field">
                    <i class="bi bi-people"></i>
                    <select class="form-select" id="flightTravellers">
                      <option>1 Adult</option>
                      <option>2 Adults</option>
                      <option>3 Adults</option>
                      <option>4 Adults</option>
                      <option>2 Adults, 1 Child</option>
                      <option>2 Adults, 2 Children</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="search-footer">
                <p class="search-note"><i class="bi bi-shield-check"></i> Secure payment · Transparent pricing</p>
                <button type="submit" class="btn-lux btn-lux-navy">
                  Search flights <i class="bi bi-arrow-right arrow"></i>
                </button>
              </div>
              <div class="search-status" id="flightStatus" role="status" aria-live="polite"></div>
            </form>
          </div>

          <!-- Hotels -->
          <div class="tab-pane fade" id="hotels-pane" role="tabpanel"
               aria-labelledby="hotels-tab" tabindex="0">
            <form class="search-form" id="hotelForm" novalidate>
              <div class="row g-3">
                <div class="col-lg-4 col-md-6">
                  <label class="form-label" for="hotelDestination">Destination or hotel</label>
                  <div class="field">
                    <i class="bi bi-geo-alt"></i>
                    <input type="text" class="form-control" id="hotelDestination"
                           placeholder="City, area or hotel name" autocomplete="off" />
                  </div>
                </div>
                <div class="col-lg-2 col-md-6">
                  <label class="form-label" for="hotelCheckin">Check-in</label>
                  <div class="field">
                    <i class="bi bi-calendar3"></i>
                    <input type="date" class="form-control" id="hotelCheckin" />
                  </div>
                </div>
                <div class="col-lg-2 col-md-6">
                  <label class="form-label" for="hotelCheckout">Check-out</label>
                  <div class="field">
                    <i class="bi bi-calendar3"></i>
                    <input type="date" class="form-control" id="hotelCheckout" />
                  </div>
                </div>
                <div class="col-lg-2 col-md-6">
                  <label class="form-label" for="hotelGuests">Guests</label>
                  <div class="field">
                    <i class="bi bi-people"></i>
                    <select class="form-select" id="hotelGuests">
                      <option>1 Guest</option>
                      <option selected>2 Guests</option>
                      <option>3 Guests</option>
                      <option>4 Guests</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-2 col-md-6">
                  <label class="form-label" for="hotelRooms">Rooms</label>
                  <div class="field">
                    <i class="bi bi-door-open"></i>
                    <select class="form-select" id="hotelRooms">
                      <option selected>1 Room</option>
                      <option>2 Rooms</option>
                      <option>3 Rooms</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="search-footer">
                <p class="search-note"><i class="bi bi-shield-check"></i> Verified properties · Flexible rates</p>
                <button type="submit" class="btn-lux btn-lux-navy">
                  Search hotels <i class="bi bi-arrow-right arrow"></i>
                </button>
              </div>
              <div class="search-status" id="hotelStatus" role="status" aria-live="polite"></div>
            </form>
          </div>

        </div>
      </div>
    </section>

    <!-- =========================================================
         STATS
         ========================================================= -->
    <section class="stats-strip bg-cream-soft">
      <div class="container">
        <div class="stats-grid">
          <div class="stat">
            <span class="stat-num" data-count="120" data-suffix="+">0</span>
            <span class="stat-label">Airline partners</span>
          </div>
          <div class="stat">
            <span class="stat-num" data-count="500" data-suffix="+">0</span>
            <span class="stat-label">Hotel partners</span>
          </div>
          <div class="stat">
            <span class="stat-num" data-count="24" data-suffix="/7">0</span>
            <span class="stat-label">Concierge access</span>
          </div>
          <div class="stat">
            <span class="stat-num" data-count="100" data-suffix="%">0</span>
            <span class="stat-label">Secure payments</span>
          </div>
        </div>
      </div>
    </section>

    <!-- =========================================================
         VIDEO SHOWCASE
         ========================================================= -->
    <section class="video-showcase">
      <div class="video-bg">
        <video autoplay muted loop playsinline preload="metadata"
               poster="https://images.unsplash.com/photo-1571003123894-1f0594d2b5d9?auto=format&fit=crop&w=1920&q=80">
          <source src="https://assets.mixkit.co/videos/preview/mixkit-luxury-swimming-pool-in-a-hotel-1528-large.mp4" type="video/mp4" />
          <source src="https://cdn.coverr.co/videos/coverr-a-swimming-pool-in-a-luxury-hotel-1572/1080p.mp4" type="video/mp4" />
        </video>
      </div>

      <div class="video-content">
        <span class="eyebrow light">Experience the difference</span>
        <h2>See where your journey<br />can <em>take</em> you.</h2>
        <p>
          From beachfront retreats to skyline suites, every property in our network is chosen for
          comfort, service and location. A glimpse of what awaits.
        </p>
        <button type="button" class="play-btn" id="videoPlayBtn" aria-label="Play property tour">
          <span class="play-circle"><i class="bi bi-play"></i></span>
          Watch the tour
        </button>
      </div>
    </section>

    <!-- =========================================================
         SERVICES
         ========================================================= -->
    <section class="section bg-cream" id="services">
      <div class="container">
        <div class="section-head reveal">
          <span class="eyebrow">What we do</span>
          <h2>Everything you need, <em>beautifully</em> arranged.</h2>
          <p>From the first fare comparison to your return home, Travelbookings handles the details — so you can focus on the journey.</p>
        </div>

        <div class="services-grid reveal">
          <a href="/flights" class="service">
            <span class="service-icon"><i class="bi bi-airplane"></i></span>
            <h3>Flight booking</h3>
            <p>Compare fares across local and international airlines, then book one-way, return or multi-city trips in minutes.</p>
            <span class="link-arrow">Find flights <i class="bi bi-arrow-right"></i></span>
          </a>
          <a href="/hotels" class="service">
            <span class="service-icon"><i class="bi bi-building"></i></span>
            <h3>Hotel reservations</h3>
            <p>Browse verified hotels, apartments and resorts — from quiet boutique stays to premium international properties.</p>
            <span class="link-arrow">Find hotels <i class="bi bi-arrow-right"></i></span>
          </a>
          <a href="/financing" class="service">
            <span class="service-icon"><i class="bi bi-wallet2"></i></span>
            <h3>Travel financing</h3>
            <p>Spread the cost of your trip through our lending partners. Subject to eligibility and approval.</p>
            <span class="link-arrow">Learn more <i class="bi bi-arrow-right"></i></span>
          </a>
        </div>
      </div>
    </section>

    <!-- =========================================================
         DESTINATIONS
         ========================================================= -->
    <section class="section bg-cream-soft" id="destinations">
      <div class="container">
        <div class="section-head reveal">
          <span class="eyebrow">Where to next</span>
          <h2>Destinations our <em>travellers</em> love.</h2>
          <p>Hand-picked cities we return to again and again — each with its own guide, tips and travel notes.</p>
        </div>

        <div class="dest-grid reveal">

          <a href="/destinations" class="dest-card">
            <div class="dest-media">
              <span class="dest-continent">Middle East</span>
              <img src="https://images.unsplash.com/photo-1512453979798-5ea266f8880c?auto=format&fit=crop&w=900&q=85"
                   alt="Dubai skyline at sunset" loading="lazy" decoding="async" />
            </div>
            <div class="dest-body">
              <h3>Dubai</h3>
              <p>United Arab Emirates</p>
              <span class="dest-link">Explore <i class="bi bi-arrow-right"></i></span>
            </div>
          </a>

          <a href="/destinations" class="dest-card">
            <div class="dest-media">
              <span class="dest-continent">Europe</span>
              <img src="https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?auto=format&fit=crop&w=900&q=85"
                   alt="Big Ben and the Houses of Parliament in London" loading="lazy" decoding="async" />
            </div>
            <div class="dest-body">
              <h3>London</h3>
              <p>United Kingdom</p>
              <span class="dest-link">Explore <i class="bi bi-arrow-right"></i></span>
            </div>
          </a>

          <a href="/destinations" class="dest-card">
            <div class="dest-media">
              <span class="dest-continent">Europe</span>
              <img src="https://images.unsplash.com/photo-1502602898657-3e91760cbb34?auto=format&fit=crop&w=900&q=85"
                   alt="The Eiffel Tower in Paris" loading="lazy" decoding="async" />
            </div>
            <div class="dest-body">
              <h3>Paris</h3>
              <p>France</p>
              <span class="dest-link">Explore <i class="bi bi-arrow-right"></i></span>
            </div>
          </a>

          <a href="/destinations" class="dest-card">
            <div class="dest-media">
              <span class="dest-continent">Africa</span>
              <img src="https://images.unsplash.com/photo-1580060839134-75a5edca2e99?auto=format&fit=crop&w=900&q=85"
                   alt="Table Mountain and the Cape Town coastline" loading="lazy" decoding="async" />
            </div>
            <div class="dest-body">
              <h3>Cape Town</h3>
              <p>South Africa</p>
              <span class="dest-link">Explore <i class="bi bi-arrow-right"></i></span>
            </div>
          </a>

          <a href="/destinations" class="dest-card">
            <div class="dest-media">
              <span class="dest-continent">Eurasia</span>
              <img src="https://images.unsplash.com/photo-1524231757912-21f4fe3a7200?auto=format&fit=crop&w=900&q=85"
                   alt="Istanbul skyline and mosque at dusk" loading="lazy" decoding="async" />
            </div>
            <div class="dest-body">
              <h3>Istanbul</h3>
              <p>Türkiye</p>
              <span class="dest-link">Explore <i class="bi bi-arrow-right"></i></span>
            </div>
          </a>

          <a href="/destinations" class="dest-card">
            <div class="dest-media">
              <span class="dest-continent">Europe</span>
              <img src="https://images.unsplash.com/photo-1570077188670-e3a8d69ac5ff?auto=format&fit=crop&w=900&q=85"
                   alt="White buildings and blue domes in Santorini" loading="lazy" decoding="async" />
            </div>
            <div class="dest-body">
              <h3>Santorini</h3>
              <p>Greece</p>
              <span class="dest-link">Explore <i class="bi bi-arrow-right"></i></span>
            </div>
          </a>

        </div>

        <div class="text-center" style="margin-top: 56px;">
          <a href="/destinations" class="btn-lux btn-lux-ghost">
            View all destinations <i class="bi bi-arrow-right arrow"></i>
          </a>
        </div>
      </div>
    </section>

    <!-- =========================================================
         WHY CHOOSE US
         ========================================================= -->
    <section class="section bg-cream">
      <div class="container">
        <div class="split reveal">
          <div class="split-media">
            <img src="https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?auto=format&fit=crop&w=1000&q=85"
                 alt="A quiet resort swimming pool overlooking the ocean"
                 loading="lazy" decoding="async" />
          </div>
          <div class="split-content">
            <span class="eyebrow no-after">Why Travelbookings</span>
            <h2>A travel agency that works the <em>way you do</em>.</h2>
            <p>
              We built Travelbookings for travellers who want clarity, speed and a real person to
              speak to when it matters. No confusing fees, no endless hold music.
            </p>

            <ul class="check-list">
              <li>
                <i class="bi bi-check2"></i>
                <div>
                  <strong>Transparent pricing</strong>
                  <span>The fare you see is the fare you pay — taxes and fees shown up front.</span>
                </div>
              </li>
              <li>
                <i class="bi bi-check2"></i>
                <div>
                  <strong>Local and international coverage</strong>
                  <span>Domestic Nigerian routes, regional African flights and long-haul international journeys.</span>
                </div>
              </li>
              <li>
                <i class="bi bi-check2"></i>
                <div>
                  <strong>Concierge support, 24/7</strong>
                  <span>Speak to a consultant by phone, email or WhatsApp at any hour.</span>
                </div>
              </li>
              <li>
                <i class="bi bi-check2"></i>
                <div>
                  <strong>Flexible ways to pay</strong>
                  <span>Pay in full by card or transfer, or explore financing options for larger trips.</span>
                </div>
              </li>
            </ul>

            <a href="/about" class="link-arrow">Our story <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </section>

    <!-- =========================================================
         FINANCING
         ========================================================= -->
    <section class="section financing">
      <div class="container">
        <div class="financing-inner reveal">
          <div>
            <span class="eyebrow light no-after">Travel financing</span>
            <h2>Travel now,<br /><em>pay over time</em>.</h2>
            <p class="financing-lead">
              A great trip shouldn't have to wait for the perfect month. Spread the cost of flights,
              hotels and packages over an agreed period through our independent lending partners.
            </p>

            <ul class="financing-list">
              <li><i class="bi bi-check2"></i> Payment plans from 3 to 12 months</li>
              <li><i class="bi bi-check2"></i> Apply online in a few minutes</li>
              <li><i class="bi bi-check2"></i> Transparent fees disclosed before you sign</li>
              <li><i class="bi bi-check2"></i> Covers flights, hotels and holiday packages</li>
            </ul>

            <a href="/financing" class="btn-lux btn-lux-gold">
              Explore financing <i class="bi bi-arrow-right arrow"></i>
            </a>

            <p class="financing-disclaimer">
              All applications are subject to eligibility checks, credit assessment and approval by
              the lending partner. Travelbookings does not guarantee loan approval, and repayment
              terms are set by the lender.
            </p>
          </div>

          <div class="financing-card">
            <div class="financing-card-head">
              <i class="bi bi-wallet2"></i>
              <div>
                <h3>How a payment plan works</h3>
                <p>A simple, four-step process</p>
              </div>
            </div>

            <ol class="financing-steps">
              <li>
                <span class="step-num">1</span>
                <div>
                  <strong>Choose your trip</strong>
                  <span>Select flights, hotel or package on Travelbookings.</span>
                </div>
              </li>
              <li>
                <span class="step-num">2</span>
                <div>
                  <strong>Submit an application</strong>
                  <span>Complete a short form with your details and travel dates.</span>
                </div>
              </li>
              <li>
                <span class="step-num">3</span>
                <div>
                  <strong>Get a decision</strong>
                  <span>Our financing partner reviews your application and confirms terms.</span>
                </div>
              </li>
              <li>
                <span class="step-num">4</span>
                <div>
                  <strong>Pay over time</strong>
                  <span>Once approved, repay in agreed instalments and travel as planned.</span>
                </div>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <!-- =========================================================
         HOW IT WORKS
         ========================================================= -->
    <section class="section bg-cream-soft">
      <div class="container">
        <div class="section-head reveal">
          <span class="eyebrow">Simple by design</span>
          <h2>Book your trip in <em>three</em> steps.</h2>
          <p>No queues, no paperwork and no surprises — just a clear path from search to take-off.</p>
        </div>

        <div class="steps-grid reveal">
          <div class="step">
            <span class="step-num-big">01</span>
            <h3>Search and compare</h3>
            <p>Enter your route, dates and traveller details. We bring flight and hotel options together in one place.</p>
          </div>
          <div class="step">
            <span class="step-num-big">02</span>
            <h3>Choose and pay</h3>
            <p>Select what suits you best and pay by card or bank transfer. Every fee is shown before you confirm.</p>
          </div>
          <div class="step">
            <span class="step-num-big">03</span>
            <h3>Receive and travel</h3>
            <p>Your itinerary and travel documents arrive by email, and our team stays reachable throughout your trip.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- =========================================================
         TESTIMONIALS
         ========================================================= -->
    <section class="section bg-ivory">
      <div class="container">
        <div class="section-head reveal">
          <span class="eyebrow">Traveller stories</span>
          <h2>What our <em>travellers</em> say.</h2>
          <p>Sample feedback from travellers who booked their journeys through Travelbookings.</p>
        </div>

        <div class="testimonials-grid reveal">
          <figure class="testimonial">
            <span class="testimonial-mark" aria-hidden="true">&ldquo;</span>
            <blockquote>
              I needed a return ticket to London on short notice. The team found options within my
              budget and kept me updated on WhatsApp until my documents came through.
            </blockquote>
            <figcaption class="testimonial-author">
              <span class="line"></span>
              <div>
                <strong>Adaeze O.</strong>
                <span>Lagos, Nigeria</span>
              </div>
            </figcaption>
          </figure>

          <figure class="testimonial">
            <span class="testimonial-mark" aria-hidden="true">&ldquo;</span>
            <blockquote>
              The hotel options were exactly what I asked for — central, quiet and within walking
              distance of my meetings. Booking took less than ten minutes.
            </blockquote>
            <figcaption class="testimonial-author">
              <span class="line"></span>
              <div>
                <strong>Chinedu A.</strong>
                <span>Abuja, Nigeria</span>
              </div>
            </figcaption>
          </figure>

          <figure class="testimonial">
            <span class="testimonial-mark" aria-hidden="true">&ldquo;</span>
            <blockquote>
              What stood out was the honesty. They explained every fee before I paid and helped me
              rearrange my dates when my plans changed.
            </blockquote>
            <figcaption class="testimonial-author">
              <span class="line"></span>
              <div>
                <strong>Sarah M.</strong>
                <span>London, United Kingdom</span>
              </div>
            </figcaption>
          </figure>
        </div>
      </div>
    </section>

    <!-- =========================================================
         CTA
         ========================================================= -->
    <section class="section cta">
      <div class="cta-inner reveal">
        <span class="eyebrow light">Begin your journey</span>
        <h2>Ready for your <em>next</em> trip?</h2>
        <p>
          Create a free Travelbookings account to save searches, manage bookings and apply for
          travel financing when you need it.
        </p>
        <div class="cta-actions">
          <a href="/register" class="btn-lux btn-lux-gold">
            Create free account <i class="bi bi-arrow-right arrow"></i>
          </a>
          <a href="/contact" class="btn-lux btn-lux-ghost">Talk to a consultant</a>
        </div>
      </div>
    </section>

  </main>

  <!-- =========================================================
       FOOTER
       ========================================================= -->
  <footer class="site-footer">
    <div class="footer-watermark" aria-hidden="true"></div>

    <div class="container footer-inner">
      <div class="footer-grid">

        <div>
          <a class="footer-brand" href="/">
            <span class="brand-mark"><i class="bi bi-airplane-engines"></i></span>
            <span class="brand-name">Travel<em>bookings</em></span>
          </a>
          <p class="footer-about">
            An online travel agency serving customers in Nigeria and internationally.
            Flights, hotels, destination guides and travel financing — all in one place.
          </p>
          <div class="footer-social">
            <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" aria-label="X"><i class="bi bi-twitter-x"></i></a>
            <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div>
          <h4 class="footer-heading">Travel</h4>
          <ul class="footer-links">
            <li><a href="/flights">Flights</a></li>
            <li><a href="/hotels">Hotels</a></li>
            <li><a href="/destinations">Destinations</a></li>
            <li><a href="/financing">Travel financing</a></li>
          </ul>
        </div>

        <div>
          <h4 class="footer-heading">Company</h4>
          <ul class="footer-links">
            <li><a href="/about">About us</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="manage-booking.html">Manage booking</a></li>
          </ul>
        </div>

        <div>
          <h4 class="footer-heading">Get in touch</h4>
          <div class="footer-contact">
            <a href="tel:+2348080452890"><i class="bi bi-telephone"></i> 0808 045 2890</a>
            <a href="mailto:info@travelbookings.ng"><i class="bi bi-envelope"></i> info@travelbookings.ng</a>
          </div>

          <div class="footer-newsletter">
            <p>Join the letter — fare updates and travel notes.</p>
            <form class="footer-newsletter-form" id="newsletterForm" novalidate>
              <label class="visually-hidden" for="newsletterEmail">Email address</label>
              <input type="email" id="newsletterEmail" placeholder="Your email address" required />
              <button type="submit" aria-label="Subscribe">
                <i class="bi bi-arrow-right"></i>
              </button>
            </form>
            <div class="newsletter-status" id="newsletterStatus" role="status" aria-live="polite"></div>
          </div>
        </div>

      </div>

      <div class="footer-bottom">
        <p>&copy; <span data-year>2025</span> Travelbookings. All rights reserved.</p>
        <ul class="footer-legal">
          <li><a href="privacy.html">Privacy</a></li>
          <li><a href="terms.html">Terms</a></li>
          <li><a href="faq.html">Help</a></li>
        </ul>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    (function () {
      'use strict';

      /* =====================================================
         STICKY HEADER + MOBILE DRAWER
         ===================================================== */
      var header   = document.getElementById('siteHeader');
      var toggle   = document.getElementById('mobileToggle');
      var closeBtn = document.getElementById('mobileClose');
      var drawer   = document.getElementById('mobileNav');
      var overlay  = document.getElementById('mobileOverlay');

      function onScroll() {
        if (header) header.classList.toggle('scrolled', window.scrollY > 8);
      }
      onScroll();
      window.addEventListener('scroll', onScroll, { passive: true });

      function openMobile() {
        drawer.classList.add('open');
        overlay.classList.add('show');
        toggle.setAttribute('aria-expanded', 'true');
        document.body.style.overflow = 'hidden';
      }
      function closeMobile() {
        drawer.classList.remove('open');
        overlay.classList.remove('show');
        toggle.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
      }

      if (toggle) toggle.addEventListener('click', openMobile);
      if (closeBtn) closeBtn.addEventListener('click', closeMobile);
      if (overlay) overlay.addEventListener('click', closeMobile);

      document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && drawer && drawer.classList.contains('open')) {
          closeMobile();
          toggle.focus();
        }
      });

      document.querySelectorAll('#mobileNav .nav-link').forEach(function (link) {
        link.addEventListener('click', closeMobile);
      });

      /* =====================================================
         YEAR
         ===================================================== */
      document.querySelectorAll('[data-year]').forEach(function (el) {
        el.textContent = new Date().getFullYear();
      });

      /* =====================================================
         SCROLL REVEAL
         ===================================================== */
      var revealEls = document.querySelectorAll('.reveal');
      if ('IntersectionObserver' in window && revealEls.length) {
        var observer = new IntersectionObserver(function (entries) {
          entries.forEach(function (entry) {
            if (entry.isIntersecting) {
              entry.target.classList.add('is-visible');
              observer.unobserve(entry.target);
            }
          });
        }, { threshold: 0.1, rootMargin: '0px 0px -60px 0px' });
        revealEls.forEach(function (el) { observer.observe(el); });
      } else {
        revealEls.forEach(function (el) { el.classList.add('is-visible'); });
      }

      /* =====================================================
         ANIMATED COUNTERS
         ===================================================== */
      var counters = document.querySelectorAll('.stat-num[data-count]');
      var countersDone = false;

      function animateCounters() {
        if (countersDone) return;
        countersDone = true;

        counters.forEach(function (el) {
          var target = parseInt(el.dataset.count, 10) || 0;
          var suffix = el.dataset.suffix || '';
          var duration = 1600;
          var start = performance.now();

          function tick(now) {
            var progress = Math.min((now - start) / duration, 1);
            var eased = 1 - Math.pow(1 - progress, 3);
            var value = Math.floor(target * eased);
            el.innerHTML = value + '<span class="suffix">' + suffix + '</span>';
            if (progress < 1) requestAnimationFrame(tick);
            else el.innerHTML = target + '<span class="suffix">' + suffix + '</span>';
          }
          requestAnimationFrame(tick);
        });
      }

      if ('IntersectionObserver' in window && counters.length) {
        var statsSection = document.querySelector('.stats-strip');
        var counterObs = new IntersectionObserver(function (entries) {
          entries.forEach(function (entry) {
            if (entry.isIntersecting) { animateCounters(); counterObs.disconnect(); }
          });
        }, { threshold: 0.3 });
        if (statsSection) counterObs.observe(statsSection);
      } else {
        animateCounters();
      }

      /* =====================================================
         DATE HELPERS
         ===================================================== */
      function toISO(date) {
        var month = String(date.getMonth() + 1).padStart(2, '0');
        var day = String(date.getDate()).padStart(2, '0');
        return date.getFullYear() + '-' + month + '-' + day;
      }
      function daysFromNow(n) {
        var d = new Date();
        d.setDate(d.getDate() + n);
        return toISO(d);
      }
      function todayISO() { return daysFromNow(0); }
      function formatDate(iso) {
        if (!iso) return '';
        var d = new Date(iso + 'T00:00:00');
        return d.toLocaleDateString('en-GB', { day: 'numeric', month: 'short', year: 'numeric' });
      }
      function showMessage(el, baseClass, message, type) {
        if (!el) return;
        el.textContent = message;
        el.className = baseClass + ' show ' + type;
      }

      /* =====================================================
         DATE DEFAULTS
         ===================================================== */
      var flightDepart = document.getElementById('flightDepart');
      var flightReturn = document.getElementById('flightReturn');
      var hotelCheckin = document.getElementById('hotelCheckin');
      var hotelCheckout = document.getElementById('hotelCheckout');

      [flightDepart, flightReturn, hotelCheckin, hotelCheckout].forEach(function (input) {
        if (input) input.min = todayISO();
      });

      if (flightDepart && !flightDepart.value) flightDepart.value = daysFromNow(14);
      if (flightReturn && !flightReturn.value) flightReturn.value = daysFromNow(21);
      if (hotelCheckin && !hotelCheckin.value) hotelCheckin.value = daysFromNow(14);
      if (hotelCheckout && !hotelCheckout.value) hotelCheckout.value = daysFromNow(17);

      if (flightDepart && flightReturn) {
        flightReturn.min = flightDepart.value || todayISO();
        flightDepart.addEventListener('change', function () {
          if (!flightDepart.value) return;
          flightReturn.min = flightDepart.value;
          if (flightReturn.value && flightReturn.value < flightDepart.value) {
            flightReturn.value = flightDepart.value;
          }
        });
      }
      if (hotelCheckin && hotelCheckout) {
        hotelCheckout.min = hotelCheckin.value || todayISO();
        hotelCheckin.addEventListener('change', function () {
          if (!hotelCheckin.value) return;
          hotelCheckout.min = hotelCheckin.value;
          if (hotelCheckout.value && hotelCheckout.value < hotelCheckin.value) {
            hotelCheckout.value = hotelCheckin.value;
          }
        });
      }

      /* =====================================================
         SWAP
         ===================================================== */
      var swapBtn = document.getElementById('swapBtn');
      if (swapBtn) {
        swapBtn.addEventListener('click', function () {
          var from = document.getElementById('flightFrom');
          var to = document.getElementById('flightTo');
          if (!from || !to) return;
          var t = from.value;
          from.value = to.value;
          to.value = t;
          swapBtn.classList.add('spun');
          window.setTimeout(function () { swapBtn.classList.remove('spun'); }, 320);
        });
      }

      /* =====================================================
         FLIGHT SEARCH
         ===================================================== */
      var flightForm = document.getElementById('flightForm');
      if (flightForm) {
        flightForm.addEventListener('submit', function (event) {
          event.preventDefault();
          var from = document.getElementById('flightFrom').value.trim();
          var to = document.getElementById('flightTo').value.trim();
          var depart = flightDepart ? flightDepart.value : '';
          var travellers = document.getElementById('flightTravellers').value;
          var status = document.getElementById('flightStatus');

          if (!from || !to) {
            return showMessage(status, 'search-status',
              'Please enter both a departure city and a destination.', 'error');
          }
          if (from.toLowerCase() === to.toLowerCase()) {
            return showMessage(status, 'search-status',
              'Departure and destination cannot be the same city.', 'error');
          }
          if (!depart) {
            return showMessage(status, 'search-status',
              'Please choose a departure date.', 'error');
          }
          if (depart < todayISO()) {
            return showMessage(status, 'search-status',
              'The departure date cannot be in the past.', 'error');
          }
          showMessage(status, 'search-status',
            'Search saved: ' + from + ' → ' + to + ' on ' + formatDate(depart) +
            ' for ' + travellers + '. Live fares will display here once our booking ' +
            'engine is connected.', 'success');
        });
      }

      /* =====================================================
         HOTEL SEARCH
         ===================================================== */
      var hotelForm = document.getElementById('hotelForm');
      if (hotelForm) {
        hotelForm.addEventListener('submit', function (event) {
          event.preventDefault();
          var destination = document.getElementById('hotelDestination').value.trim();
          var checkin = hotelCheckin ? hotelCheckin.value : '';
          var checkout = hotelCheckout ? hotelCheckout.value : '';
          var guests = document.getElementById('hotelGuests').value;
          var rooms = document.getElementById('hotelRooms').value;
          var status = document.getElementById('hotelStatus');

          if (!destination) {
            return showMessage(status, 'search-status',
              'Please enter a destination, area or hotel name.', 'error');
          }
          if (!checkin || !checkout) {
            return showMessage(status, 'search-status',
              'Please choose your check-in and check-out dates.', 'error');
          }
          if (checkin < todayISO()) {
            return showMessage(status, 'search-status',
              'The check-in date cannot be in the past.', 'error');
          }
          if (checkout <= checkin) {
            return showMessage(status, 'search-status',
              'The check-out date must be after the check-in date.', 'error');
          }
          showMessage(status, 'search-status',
            'Search saved: ' + destination + ' from ' + formatDate(checkin) +
            ' to ' + formatDate(checkout) + ' for ' + guests + ' in ' + rooms +
            '. Live room rates will display here once our booking engine is connected.',
            'success');
        });
      }

      /* =====================================================
         NEWSLETTER
         ===================================================== */
      var newsletterForm = document.getElementById('newsletterForm');
      if (newsletterForm) {
        newsletterForm.addEventListener('submit', function (event) {
          event.preventDefault();
          var emailInput = document.getElementById('newsletterEmail');
          var status = document.getElementById('newsletterStatus');
          var email = emailInput.value.trim();
          var pattern = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;

          if (!pattern.test(email)) {
            return showMessage(status, 'newsletter-status',
              'Please enter a valid email address.', 'error');
          }
          showMessage(status, 'newsletter-status',
            'Thank you — please check ' + email + ' to confirm.', 'success');
          newsletterForm.reset();
        });
      }

      /* =====================================================
         VIDEO PLAY
         ===================================================== */
      var playBtn = document.getElementById('videoPlayBtn');
      if (playBtn) {
        playBtn.addEventListener('click', function () {
          var video = document.querySelector('.video-bg video');
          if (!video) return;
          if (video.paused) {
            video.play();
            playBtn.querySelector('i').className = 'bi bi-pause';
          } else {
            video.pause();
            playBtn.querySelector('i').className = 'bi bi-play';
          }
        });
      }

    })();
  </script>
</body>
</html>