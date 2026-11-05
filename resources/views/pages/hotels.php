<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/png" href="/images/logo-mark.png" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Hotels — CJ Travels</title>
  <meta name="description" content="Browse hotels, resorts and serviced apartments with CJ Travels. Filter by price, star category, amenities and accommodation type, then review your stay." />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" />

  <style>
    /* =======================================================
       TOKENS — LUXURY PALETTE
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
       BASE
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

    a { color: inherit; text-decoration: none; }
    img { max-width: 100%; display: block; }
    input, button, select, textarea { font: inherit; }

    a:focus-visible, button:focus-visible, input:focus-visible, select:focus-visible {
      outline: 1.5px solid var(--navy);
      outline-offset: 4px;
    }

    .skip-link {
      position: absolute;
      left: 1rem;
      top: -60px;
      z-index: 100;
      background: var(--navy);
      color: var(--ivory);
      padding: .7rem 1.2rem;
      font-size: 13px;
      letter-spacing: .1em;
      text-transform: uppercase;
      transition: top .25s ease;
    }
    .skip-link:focus { top: 0; }

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

    .section { padding: clamp(64px, 8vw, 112px) 0; }
    .bg-cream { background: var(--cream); }
    .bg-cream-soft { background: var(--cream-soft); }

    .reveal { opacity: 1; transform: none; }
    .js .reveal {
      opacity: 0;
      transform: translateY(28px);
      transition: opacity .9s cubic-bezier(.4,0,.2,1), transform .9s cubic-bezier(.4,0,.2,1);
    }
    .js .reveal.is-visible { opacity: 1; transform: none; }

    /* =======================================================
       BUTTONS
       ======================================================= */
    .btn {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      padding: 16px 28px;
      font-family: 'DM Sans', sans-serif;
      font-size: 11px;
      font-weight: 600;
      letter-spacing: .28em;
      text-transform: uppercase;
      cursor: pointer;
      border: 0;
      border-radius: 0;
      transition: all .3s ease;
    }
    .btn-lg { padding: 18px 32px; font-size: 11px; }
    .btn-sm { padding: 10px 18px; font-size: 10px; }

    .btn-navy { background: var(--navy); color: var(--ivory); }
    .btn-navy:hover, .btn-navy:focus {
      background: var(--navy-soft); color: var(--ivory);
    }
    .btn-navy i { font-size: 12px; transition: transform .3s ease; }
    .btn-navy:hover i { transform: translateX(3px); }

    .btn-ghost {
      background: transparent;
      color: var(--navy);
      border: 1px solid var(--hairline);
    }
    .btn-ghost:hover, .btn-ghost:focus {
      background: var(--cream-soft);
      border-color: var(--navy);
      color: var(--navy);
    }

    .btn-outline-navy {
      background: transparent;
      border: 1px solid var(--navy);
      color: var(--navy);
    }
    .btn-outline-navy:hover, .btn-outline-navy:focus {
      background: var(--navy); color: var(--ivory);
    }

    /* =======================================================
       TOPBAR
       ======================================================= */
    .topbar {
      background: var(--navy);
      color: rgba(253,251,246,.7);
      font-size: 12px;
      padding: 14px 0;
      border-bottom: 1px solid rgba(255,255,255,.06);
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
      color: rgba(253,251,246,.7);
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
      border: 1px solid rgba(201,165,91,.4);
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
      background: rgba(245,240,230,.97);
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
      background: rgba(6,15,33,.55);
      backdrop-filter: blur(3px);
      z-index: 1049;
      opacity: 0;
      pointer-events: none;
      transition: opacity .3s ease;
    }
    .mobile-nav-overlay.show { opacity: 1; pointer-events: auto; }
    .mobile-nav {
      position: fixed;
      top: 0; right: 0; bottom: 0;
      width: min(360px, 88vw);
      background: var(--cream);
      z-index: 1050;
      transform: translateX(100%);
      transition: transform .4s cubic-bezier(.4,0,.2,1);
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
      width: 40px; height: 40px;
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
      padding: 0; margin: 0;
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
    .mobile-nav .nav-link i { font-size: 14px; color: var(--hairline); }
    .mobile-nav-cta {
      padding: 24px;
      border-top: 1px solid var(--hairline-soft);
      display: grid;
      gap: 12px;
    }
    .mobile-nav-cta .btn { justify-content: center; }
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
       PAGE HERO
       ======================================================= */
    .hotels-hero {
      background: var(--cream);
      padding: clamp(56px, 8vw, 104px) 0 clamp(56px, 7vw, 88px);
      text-align: center;
    }
    .hotels-hero-content {
      max-width: 760px;
      margin: 0 auto;
      padding: 0 24px;
    }
    .hotels-hero h1 {
      font-size: clamp(2.4rem, 6vw, 4.4rem);
      line-height: 1.05;
      letter-spacing: -.025em;
      margin-bottom: 24px;
    }
    .hotels-hero h1 em {
      font-style: italic;
      color: var(--gold);
      font-weight: 400;
    }
    .hotels-hero p {
      font-size: 16px;
      color: var(--ink-soft);
      max-width: 56ch;
      margin: 0 auto;
      line-height: 1.7;
    }

    .hotels-hero-image {
      max-width: 1200px;
      margin: clamp(40px, 5vw, 64px) auto 0;
      padding: 0 24px;
      position: relative;
    }
    .hotels-hero-image img {
      width: 100%;
      aspect-ratio: 21 / 9;
      object-fit: cover;
      border-radius: 2px;
    }
    .hotels-hero-image::after {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(180deg, rgba(11,30,61,.05) 0%, rgba(11,30,61,.2) 100%);
      border-radius: 2px;
      pointer-events: none;
      margin: 0 24px;
    }
    @media (max-width: 767.98px) {
      .hotels-hero-image img { aspect-ratio: 4 / 3; }
    }

    /* =======================================================
       SEARCH PANEL
       ======================================================= */
    .search-wrap {
      position: relative;
      z-index: 5;
      margin-top: -56px;
      padding: 0 24px;
    }
    .search-card {
      max-width: 1100px;
      margin: 0 auto;
      background: var(--ivory);
      border: 1px solid var(--hairline);
      padding: clamp(28px, 4vw, 44px);
    }

    .search-form .form-label {
      display: block;
      font-size: 10px;
      font-weight: 600;
      letter-spacing: .22em;
      text-transform: uppercase;
      color: var(--muted);
      margin-bottom: 10px;
    }
    .search-form .field { position: relative; }
    .search-form .field > i {
      position: absolute;
      left: 14px;
      top: 50%;
      transform: translateY(-50%);
      color: var(--gold);
      font-size: 13px;
      pointer-events: none;
      z-index: 2;
    }
    .search-form .form-control,
    .search-form .form-select {
      width: 100%;
      height: 52px;
      background: transparent;
      border: 1px solid var(--hairline);
      border-radius: 0;
      padding: 0 16px 0 40px;
      font-size: 14px;
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
    .search-form .form-control::placeholder { color: var(--muted); }
    .search-form .form-control:hover,
    .search-form .form-select:hover { border-color: var(--gold-pale); }
    .search-form .form-control:focus,
    .search-form .form-select:focus {
      outline: none;
      border-color: var(--navy);
      background: #fff;
    }

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
    }
    .search-note i { color: var(--green); font-size: 13px; }
    .search-note.info { margin-top: 12px; color: var(--muted); font-size: 11px; }

    .form-status {
      display: none;
      margin-top: 20px;
      padding: 16px 20px;
      font-size: 13px;
      line-height: 1.6;
    }
    .form-status.show { display: block; }
    .form-status.error {
      background: rgba(163,69,46,.06);
      border-left: 2px solid var(--error);
      color: var(--error);
    }
    .form-status.success {
      background: rgba(46,125,91,.06);
      border-left: 2px solid var(--green);
      color: var(--green);
    }

    @media (max-width: 767.98px) {
      .search-wrap { margin-top: -32px; }
      .search-card { padding: 24px 20px; }
    }

    /* =======================================================
       RESULTS SECTION
       ======================================================= */
    .results-head {
      display: flex;
      align-items: flex-end;
      justify-content: space-between;
      gap: 24px;
      flex-wrap: wrap;
      margin-bottom: 32px;
    }
    .results-head h2 {
      font-size: clamp(1.8rem, 3vw, 2.6rem);
      margin-bottom: 6px;
    }
    .results-sub {
      font-size: 11px;
      letter-spacing: .18em;
      text-transform: uppercase;
      color: var(--muted);
      margin: 0;
    }

    .demo-banner {
      display: flex;
      align-items: flex-start;
      gap: 12px;
      background: var(--cream-soft);
      border: 1px solid var(--hairline);
      padding: 16px 20px;
      font-size: 12px;
      color: var(--ink-soft);
      margin-bottom: 32px;
      line-height: 1.6;
    }
    .demo-banner i { color: var(--gold); margin-top: 2px; flex-shrink: 0; }
    .demo-banner strong { color: var(--navy); }

    /* Filters */
    .filters {
      background: var(--ivory);
      border: 1px solid var(--hairline);
      padding: 28px;
    }
    @media (min-width: 992px) {
      .filters { position: sticky; top: 100px; }
    }
    .filters-head {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 8px;
      margin-bottom: 8px;
    }
    .filters-head h3 {
      font-size: 1.2rem;
      margin: 0;
      display: inline-flex;
      align-items: center;
      gap: 8px;
    }
    .filters-head h3 i { color: var(--gold); font-size: 14px; }
    .clear-filters {
      border: 0;
      background: transparent;
      color: var(--gold);
      font-size: 11px;
      font-weight: 500;
      letter-spacing: .1em;
      text-transform: uppercase;
      padding: 0;
      cursor: pointer;
    }
    .clear-filters:hover { color: var(--navy); }

    .filter-group {
      border-top: 1px solid var(--hairline-soft);
      padding-top: 20px;
      margin-top: 20px;
    }
    .filter-group h4 {
      font-size: 10px;
      font-weight: 600;
      letter-spacing: .22em;
      text-transform: uppercase;
      color: var(--muted);
      margin-bottom: 12px;
    }
    .filter-group .form-check { margin-bottom: 8px; }
    .filter-group .form-check-label {
      font-size: 13px;
      color: var(--ink-soft);
      cursor: pointer;
    }
    .filter-group .form-check-input {
      border: 1px solid var(--hairline);
      border-radius: 0;
      background-color: transparent;
      cursor: pointer;
    }
    .filter-group .form-check-input:checked {
      background-color: var(--navy);
      border-color: var(--navy);
    }
    .filter-group .form-check-input:focus {
      border-color: var(--navy);
      box-shadow: 0 0 0 2px rgba(11,30,61,.15);
    }

    .price-value {
      font-size: 14px;
      font-weight: 500;
      color: var(--navy);
      margin-bottom: 6px;
    }
    .price-range-hint {
      display: flex;
      justify-content: space-between;
      font-size: 11px;
      color: var(--muted);
      margin-top: 4px;
    }

    /* Toolbar */
    .results-toolbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 16px;
      flex-wrap: wrap;
      background: var(--ivory);
      border: 1px solid var(--hairline);
      padding: 16px 20px;
      margin-bottom: 24px;
    }
    .results-count { font-size: 12px; color: var(--muted); margin: 0; }
    .results-count strong { color: var(--navy); }
    .sort-wrap { display: flex; align-items: center; gap: 12px; }
    .sort-wrap label {
      font-size: 10px;
      font-weight: 600;
      letter-spacing: .18em;
      text-transform: uppercase;
      color: var(--muted);
      margin: 0;
      white-space: nowrap;
    }
    .sort-wrap .form-select {
      border: 1px solid var(--hairline);
      border-radius: 0;
      background-color: transparent;
      font-size: 12px;
      font-weight: 500;
      color: var(--navy);
      padding: 10px 32px 10px 12px;
      min-width: 200px;
      appearance: none;
      background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%238a8378' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      background-position: right 10px center;
      background-size: 12px;
    }
    .sort-wrap .form-select:focus {
      outline: none;
      border-color: var(--navy);
    }

    /* Hotel cards */
    .hotel-card {
      display: grid;
      grid-template-columns: 280px 1fr 220px;
      background: var(--ivory);
      border: 1px solid var(--hairline);
      overflow: hidden;
      margin-bottom: 24px;
      transition: border-color .3s ease;
    }
    .hotel-card:hover {
      border-color: var(--gold-pale);
    }

    .hotel-photo {
      position: relative;
      min-height: 240px;
      overflow: hidden;
    }
    .hotel-photo img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform .8s cubic-bezier(.4,0,.2,1);
    }
    .hotel-card:hover .hotel-photo img { transform: scale(1.04); }
    .hotel-type-badge {
      position: absolute;
      top: 16px;
      left: 16px;
      background: rgba(253,251,246,.95);
      color: var(--navy);
      font-size: 9px;
      font-weight: 500;
      letter-spacing: .2em;
      text-transform: uppercase;
      padding: 6px 12px;
    }

    .hotel-info {
      padding: 28px;
      display: flex;
      flex-direction: column;
      min-width: 0;
    }
    .hotel-stars {
      color: var(--gold);
      font-size: 12px;
      letter-spacing: .18em;
      margin-bottom: 8px;
    }
    .hotel-stars .empty { color: var(--hairline); }
    .hotel-info h3 {
      font-size: 1.8rem;
      margin-bottom: 6px;
      letter-spacing: -.01em;
    }
    .hotel-location {
      display: flex;
      align-items: center;
      gap: 6px;
      color: var(--muted);
      font-size: 12px;
      margin-bottom: 16px;
    }
    .hotel-location i { color: var(--gold); font-size: 11px; }

    .hotel-rating-row {
      display: flex;
      align-items: center;
      gap: 10px;
      flex-wrap: wrap;
      margin-bottom: 16px;
    }
    .rating-badge {
      display: inline-flex;
      align-items: center;
      gap: 4px;
      background: var(--navy);
      color: var(--ivory);
      font-size: 11px;
      font-weight: 500;
      padding: 4px 10px;
    }
    .rating-badge i { color: var(--gold); font-size: 10px; }
    .rating-label {
      font-size: 11px;
      font-weight: 500;
      letter-spacing: .1em;
      text-transform: uppercase;
      color: var(--navy);
    }
    .rating-demo-pill {
      font-size: 9px;
      font-weight: 500;
      letter-spacing: .14em;
      text-transform: uppercase;
      color: var(--muted);
      background: transparent;
      border: 1px solid var(--hairline);
      padding: 2px 8px;
    }
    .rating-count {
      font-size: 11px;
      color: var(--muted);
    }

    .hotel-desc {
      font-size: 13px;
      color: var(--ink-soft);
      line-height: 1.7;
      margin-bottom: 20px;
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
    }

    .hotel-amenities {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
      margin-top: auto;
    }
    .amenity-pill {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      background: transparent;
      border: 1px solid var(--hairline);
      color: var(--ink-soft);
      font-size: 10px;
      font-weight: 500;
      letter-spacing: .06em;
      padding: 4px 10px;
    }
    .amenity-pill i { color: var(--gold); font-size: 11px; }
    .amenity-more { color: var(--muted); border-style: dashed; }

    .hotel-price {
      padding: 28px;
      border-left: 1px solid var(--hairline);
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: flex-end;
      text-align: right;
      gap: 6px;
    }
    .price-from {
      font-size: 9px;
      font-weight: 500;
      letter-spacing: .22em;
      text-transform: uppercase;
      color: var(--muted);
    }
    .price-amount {
      font-family: 'Cormorant Garamond', serif;
      font-size: 1.9rem;
      font-weight: 500;
      color: var(--navy);
      letter-spacing: -.01em;
      line-height: 1.1;
    }
    .price-per {
      font-size: 11px;
      color: var(--muted);
    }
    .price-demo {
      font-size: 9px;
      font-weight: 500;
      letter-spacing: .14em;
      text-transform: uppercase;
      color: var(--muted);
      border: 1px solid var(--hairline);
      padding: 2px 8px;
      margin: 8px 0 12px;
    }
    .hotel-price .btn { white-space: nowrap; }

    /* Empty state */
    .empty-state {
      background: var(--ivory);
      border: 1px dashed var(--hairline);
      padding: 64px 24px;
      text-align: center;
    }
    .empty-state i {
      font-size: 24px;
      color: var(--gold);
      margin-bottom: 16px;
      display: block;
    }
    .empty-state h3 { font-size: 1.4rem; margin-bottom: 8px; }
    .empty-state p { font-size: 13px; color: var(--muted); margin-bottom: 24px; }

    /* =======================================================
       FOOTER
       ======================================================= */
    .site-footer {
      background: var(--navy-deep);
      color: rgba(253,251,246,.7);
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
      background: linear-gradient(180deg, rgba(201,165,91,.14) 0%, rgba(201,165,91,.05) 40%, rgba(201,165,91,0) 85%);
      -webkit-background-clip: text;
      background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    .footer-watermark::before { content: "CJ Travels"; }
    .footer-inner { position: relative; z-index: 1; }
    .footer-grid {
      display: grid;
      grid-template-columns: 1.5fr 1fr 1fr 1.3fr;
      gap: clamp(32px, 5vw, 64px);
      padding-bottom: 72px;
      border-bottom: 1px solid rgba(253,251,246,.08);
    }
    .footer-brand {
      display: inline-flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 24px;
    }
    .footer-brand .brand-mark {
      width: 40px; height: 40px;
      border-color: rgba(201,165,91,.4);
      color: var(--gold-soft);
    }
    .footer-brand .brand-name { color: var(--ivory); font-size: 22px; }
    .footer-brand .brand-name em { color: var(--gold-soft); }
    .footer-about {
      font-size: 13px;
      line-height: 1.75;
      color: rgba(253,251,246,.55);
      max-width: 36ch;
      margin-bottom: 28px;
    }
    .footer-social { display: flex; gap: 10px; }
    .footer-social a {
      width: 38px; height: 38px;
      border: 1px solid rgba(253,251,246,.14);
      color: rgba(253,251,246,.7);
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 14px;
      transition: all .25s ease;
    }
    .footer-social a:hover { border-color: var(--gold-soft); color: var(--gold-soft); }
    .footer-heading {
      font-family: 'DM Sans', sans-serif;
      font-size: 10px;
      font-weight: 600;
      letter-spacing: .28em;
      text-transform: uppercase;
      color: var(--gold-soft);
      margin-bottom: 24px;
    }
    .footer-links { list-style: none; padding: 0; margin: 0; display: grid; gap: 12px; }
    .footer-links a {
      color: rgba(253,251,246,.6);
      font-size: 13px;
      transition: color .2s ease;
    }
    .footer-links a:hover { color: var(--gold-soft); }
    .footer-contact { display: grid; gap: 12px; margin-bottom: 24px; }
    .footer-contact a,
    .footer-contact span {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      font-size: 13px;
      color: rgba(253,251,246,.6);
      transition: color .2s ease;
    }
    .footer-contact a:hover { color: var(--gold-soft); }
    .footer-contact i { color: var(--gold-soft); font-size: 12px; }
    .footer-newsletter { margin-top: 24px; }
    .footer-newsletter p {
      font-size: 12px;
      color: rgba(253,251,246,.5);
      margin-bottom: 12px;
      letter-spacing: .02em;
    }
    .footer-newsletter-form {
      display: flex;
      border-bottom: 1px solid rgba(253,251,246,.15);
      transition: border-color .25s ease;
    }
    .footer-newsletter-form:focus-within { border-bottom-color: var(--gold-soft); }
    .footer-newsletter-form input {
      flex: 1;
      background: transparent;
      border: 0;
      padding: 10px 0;
      color: var(--ivory);
      font-size: 13px;
      outline: none;
      min-width: 0;
    }
    .footer-newsletter-form input::placeholder { color: rgba(253,251,246,.35); }
    .footer-newsletter-form button {
      background: transparent;
      border: 0;
      color: var(--gold-soft);
      padding: 10px 12px;
      cursor: pointer;
      font-size: 14px;
    }
    .newsletter-status { display: none; font-size: 11px; margin-top: 8px; }
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
      color: rgba(253,251,246,.4);
      letter-spacing: .04em;
    }
    .footer-legal { list-style: none; display: flex; gap: 24px; margin: 0; padding: 0; flex-wrap: wrap; }
    .footer-legal a { color: rgba(253,251,246,.4); transition: color .2s ease; }
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
       RESPONSIVE
       ======================================================= */
    @media (max-width: 1199.98px) {
      .hotel-card { grid-template-columns: 240px 1fr 200px; }
      .hotel-info { padding: 24px; }
      .hotel-price { padding: 24px; }
    }
    @media (max-width: 991.98px) {
      .hotel-card { grid-template-columns: 1fr; }
      .hotel-photo { min-height: unset; aspect-ratio: 16 / 9; }
      .hotel-info { padding: 20px; }
      .hotel-price {
        border-left: 0;
        border-top: 1px solid var(--hairline);
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        text-align: left;
        flex-wrap: wrap;
        gap: 12px;
        padding: 20px;
      }
      .price-demo { margin: 0; }
    }
    @media (max-width: 767.98px) {
      .hotels-hero { padding: 40px 0 32px; }
      .search-wrap { margin-top: -24px; }
      .search-footer { flex-direction: column; align-items: stretch; }
      .search-footer .btn { width: 100%; justify-content: center; }
      .results-toolbar { flex-direction: column; align-items: stretch; }
      .sort-wrap { justify-content: space-between; }
      .sort-wrap .form-select { min-width: 0; flex: 1; }
      .footer-bottom { flex-direction: column; text-align: center; }
      .footer-legal { justify-content: center; }
    }

    @media (prefers-reduced-motion: reduce) {
      * { transition-duration: .01ms !important; animation: none !important; }
      html { scroll-behavior: auto; }
    }
  
    /* CJ Travels Brand Logo */
    .brand-logo {
      height: 40px;
      width: auto;
      max-height: 46px;
      object-fit: contain;
      display: inline-block;
      vertical-align: middle;
      transition: transform .25s ease;
    }
    .brand-logo:hover {
      transform: scale(1.02);
    }
    .footer-brand .brand-logo,
    .footer-logo {
      height: 42px;
    }

  </style>

  <script>document.documentElement.classList.add('js');</script>
</head>

<body>
  <a href="#main" class="skip-link">Skip to main content</a>

  <!-- =========================================================
       TOPBAR
       ========================================================= -->
  <div class="topbar d-none d-lg-block">
    <div class="container">
      <div class="topbar-inner">
        <div class="topbar-left">
          <a href="tel:+2348080452890"><i class="bi bi-telephone"></i> 0808 045 2890</a>
          <a href="mailto:info@cjtravelsowerri.com"><i class="bi bi-envelope"></i> info@cjtravelsowerri.com</a>
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

        <a class="brand" href="/" aria-label="CJ Travels home">
          <img src="/images/logo-transparent.png" alt="CJ Travels" class="brand-logo" />
        </a>

        <nav class="nav-center" aria-label="Main navigation">
          <a href="/flights">Flights</a>
          <a href="/hotels" class="active">Hotels</a>
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
      <a class="brand" href="/" aria-label="CJ Travels home">
          <img src="/images/logo-transparent.png" alt="CJ Travels" class="brand-logo" />
        </a>
      <button class="mobile-nav-close" id="mobileClose" aria-label="Close menu">
        <i class="bi bi-x-lg"></i>
      </button>
    </div>

    <div class="mobile-nav-body">
      <ul class="nav-list">
        <li><a class="nav-link" href="/">Home <i class="bi bi-arrow-right"></i></a></li>
        <li><a class="nav-link" href="/flights">Flights <i class="bi bi-arrow-right"></i></a></li>
        <li><a class="nav-link active" href="/hotels">Hotels <i class="bi bi-arrow-right"></i></a></li>
        <li><a class="nav-link" href="/destinations">Destinations <i class="bi bi-arrow-right"></i></a></li>
        <li><a class="nav-link" href="/financing">Financing <i class="bi bi-arrow-right"></i></a></li>
        <li><a class="nav-link" href="/about">About <i class="bi bi-arrow-right"></i></a></li>
        <li><a class="nav-link" href="/contact">Contact <i class="bi bi-arrow-right"></i></a></li>
      </ul>
    </div>

    <div class="mobile-nav-cta">
      <a href="/login" class="btn btn-ghost">Sign in</a>
      <a href="/register" class="btn btn-navy">Book now <i class="bi bi-arrow-right"></i></a>
    </div>

    <div class="mobile-nav-footer">
      <p>Reach the concierge</p>
      <a href="tel:+2348080452890"><i class="bi bi-telephone"></i> 0808 045 2890</a>
      <a href="mailto:info@cjtravelsowerri.com"><i class="bi bi-envelope"></i> info@cjtravelsowerri.com</a>
    </div>
  </aside>

  <main id="main">

    <!-- =========================================================
         PAGE HERO
         ========================================================= -->
    <section class="hotels-hero">
      <div class="hotels-hero-content">
        <span class="eyebrow">Hotels &amp; Resorts</span>
        <h1>Find a stay that<br /><em>feels like yours</em>.</h1>
        <p>
          Browse verified hotels, boutique properties and serviced apartments — from city-centre
          business stays to beachfront escapes. Filter by what matters and review every detail
          before you decide.
        </p>
      </div>
      <div class="hotels-hero-image">
        <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=1920&q=85"
             alt="A luxury hotel terrace overlooking the sea at golden hour" loading="eager" decoding="async" />
      </div>
    </section>

    <!-- =========================================================
         SEARCH PANEL
         ========================================================= -->
    <div class="search-wrap">
      <div class="search-card">

        <form class="search-form" id="hotelSearchForm" novalidate>
          <div class="row g-3">

            <div class="col-lg-4 col-md-6">
              <label class="form-label" for="destinationInput">Destination or hotel</label>
              <div class="field">
                <i class="bi bi-geo-alt"></i>
                <input type="text" class="form-control" id="destinationInput" list="cityList"
                       placeholder="City, area or hotel name" autocomplete="off" value="Lagos, Nigeria" />
              </div>
            </div>

            <div class="col-lg-2 col-md-6">
              <label class="form-label" for="checkinInput">Check-in</label>
              <div class="field">
                <i class="bi bi-calendar3"></i>
                <input type="date" class="form-control" id="checkinInput" />
              </div>
            </div>

            <div class="col-lg-2 col-md-6">
              <label class="form-label" for="checkoutInput">Check-out</label>
              <div class="field">
                <i class="bi bi-calendar3"></i>
                <input type="date" class="form-control" id="checkoutInput" />
              </div>
            </div>

            <div class="col-lg-2 col-md-6">
              <label class="form-label" for="guestsSelect">Guests</label>
              <div class="field">
                <i class="bi bi-people"></i>
                <select class="form-select" id="guestsSelect">
                  <option value="1">1 guest</option>
                  <option value="2" selected>2 guests</option>
                  <option value="3">3 guests</option>
                  <option value="4">4 guests</option>
                  <option value="5">5 guests</option>
                  <option value="6">6 guests</option>
                  <option value="7">7 guests</option>
                  <option value="8">8 guests</option>
                </select>
              </div>
            </div>

            <div class="col-lg-2 col-md-6">
              <label class="form-label" for="roomsSelect">Rooms</label>
              <div class="field">
                <i class="bi bi-door-open"></i>
                <select class="form-select" id="roomsSelect">
                  <option value="1" selected>1 room</option>
                  <option value="2">2 rooms</option>
                  <option value="3">3 rooms</option>
                  <option value="4">4 rooms</option>
                  <option value="5">5 rooms</option>
                </select>
              </div>
            </div>

            <div class="col-12">
              <div class="search-footer">
                <p class="search-note mb-0"><i class="bi bi-shield-check"></i> Secure payment &middot; Transparent pricing &middot; No hidden fees</p>
                <div class="d-flex flex-column flex-sm-row gap-2 w-100 w-sm-auto">
                  <button type="button" class="btn btn-ghost" id="resetSearchBtn">
                    <i class="bi bi-arrow-counterclockwise"></i> Reset
                  </button>
                  <button type="submit" class="btn btn-navy flex-grow-1">
                    <i class="bi bi-search"></i> Search hotels
                  </button>
                </div>
              </div>
              <p class="search-note info mb-0">
                <i class="bi bi-info-circle"></i> Sample results shown — hotels, ratings and prices are demonstration data and cannot be booked.
              </p>
            </div>

          </div>

          <div class="form-status" id="formStatus" role="status" aria-live="polite"></div>
        </form>
      </div>
    </div>

    <!-- =========================================================
         RESULTS
         ========================================================= -->
    <section class="section bg-cream-soft" id="resultsSection">
      <div class="container">

        <div class="results-head">
          <div>
            <span class="eyebrow no-after" style="margin-bottom: 12px;">Stays</span>
            <h2 id="resultsTitle">Hotels in Lagos, Nigeria</h2>
            <p class="results-sub" id="resultsSummary">14 Dec – 17 Dec · 2 guests · 1 room</p>
          </div>
          <button class="btn btn-ghost d-lg-none" type="button"
                  data-bs-toggle="collapse" data-bs-target="#filtersPanel"
                  aria-expanded="false" aria-controls="filtersPanel">
            <i class="bi bi-sliders"></i> Filters
          </button>
        </div>

        <div class="demo-banner">
          <i class="bi bi-info-circle"></i>
          <div>
            <strong>Sample hotel data.</strong> These properties, guest ratings, descriptions and
            prices are illustrative demonstration data. They are not live availability and cannot be booked.
          </div>
        </div>

        <div class="row g-4">

          <!-- Filters -->
          <div class="col-lg-3">
            <aside class="filters collapse d-lg-block" id="filtersPanel">
              <div class="filters-head">
                <h3><i class="bi bi-sliders"></i> Filters</h3>
                <button type="button" class="clear-filters" id="clearFilters">Clear all</button>
              </div>

              <!-- Price -->
              <div class="filter-group">
                <h4>Maximum price per night</h4>
                <div class="price-value" id="priceRangeLabel">Any price</div>
                <input type="range" class="form-range" id="priceRange" min="50000" max="400000"
                       step="5000" value="400000" aria-label="Maximum price per night" />
                <div class="price-range-hint">
                  <span id="priceMinHint">₦50,000</span>
                  <span id="priceMaxHint">₦400,000</span>
                </div>
              </div>

              <!-- Star category -->
              <div class="filter-group">
                <h4>Star category</h4>
                <div class="form-check">
                  <input class="form-check-input star-check" type="checkbox" id="star5" value="5" checked />
                  <label class="form-check-label" for="star5">5 stars</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input star-check" type="checkbox" id="star4" value="4" checked />
                  <label class="form-check-label" for="star4">4 stars</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input star-check" type="checkbox" id="star3" value="3" checked />
                  <label class="form-check-label" for="star3">3 stars</label>
                </div>
              </div>

              <!-- Accommodation type -->
              <div class="filter-group">
                <h4>Accommodation type</h4>
                <div id="typeFilters"></div>
              </div>

              <!-- Amenities -->
              <div class="filter-group">
                <h4>Amenities</h4>
                <div id="amenityFilters"></div>
              </div>
            </aside>
          </div>

          <!-- Results list -->
          <div class="col-lg-9">
            <div class="results-toolbar">
              <p class="results-count mb-0"><strong id="resultsCount">0</strong> stays found</p>
              <div class="sort-wrap">
                <label for="sortSelect">Sort by</label>
                <select class="form-select" id="sortSelect">
                  <option value="recommended" selected>Recommended</option>
                  <option value="price-asc">Price: low to high</option>
                  <option value="price-desc">Price: high to low</option>
                  <option value="rating-desc">Rating: high to low</option>
                </select>
              </div>
            </div>

            <div id="resultsList" aria-live="polite"></div>
          </div>

        </div>
      </div>
    </section>

  </main>

  <!-- City suggestions -->
  <datalist id="cityList">
    <option value="Lagos, Nigeria"></option>
    <option value="Abuja, Nigeria"></option>
    <option value="Port Harcourt, Nigeria"></option>
    <option value="London, United Kingdom"></option>
    <option value="Dubai, United Arab Emirates"></option>
    <option value="Paris, France"></option>
    <option value="Istanbul, Türkiye"></option>
    <option value="Cape Town, South Africa"></option>
    <option value="Nairobi, Kenya"></option>
    <option value="Accra, Ghana"></option>
  </datalist>

  <!-- =========================================================
       FOOTER
       ========================================================= -->
  <footer class="site-footer">
    <div class="footer-watermark" aria-hidden="true"></div>

    <div class="container footer-inner">
      <div class="footer-grid">

        <div>
          <a class="footer-brand" href="/" aria-label="CJ Travels home">
            <img src="/images/logo-white.png" alt="CJ Travels" class="brand-logo footer-logo" />
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
            <a href="mailto:info@cjtravelsowerri.com"><i class="bi bi-envelope"></i> info@cjtravelsowerri.com</a>
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
        <p>&copy; <span data-year>2025</span> CJ Travels. All rights reserved.</p>
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
         0. NAVBAR + MOBILE DRAWER
         ===================================================== */
      var siteHeader = document.getElementById('siteHeader');
      var mobileToggle = document.getElementById('mobileToggle');
      var mobileClose = document.getElementById('mobileClose');
      var mobileNav = document.getElementById('mobileNav');
      var mobileOverlay = document.getElementById('mobileOverlay');

      function onHeaderScroll() {
        if (siteHeader) { siteHeader.classList.toggle('scrolled', window.scrollY > 8); }
      }
      onHeaderScroll();
      window.addEventListener('scroll', onHeaderScroll, { passive: true });

      function openMobile() {
        mobileNav.classList.add('open');
        mobileOverlay.classList.add('show');
        mobileToggle.setAttribute('aria-expanded', 'true');
        document.body.style.overflow = 'hidden';
      }
      function closeMobile() {
        mobileNav.classList.remove('open');
        mobileOverlay.classList.remove('show');
        mobileToggle.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
      }

      if (mobileToggle) mobileToggle.addEventListener('click', openMobile);
      if (mobileClose) mobileClose.addEventListener('click', closeMobile);
      if (mobileOverlay) mobileOverlay.addEventListener('click', closeMobile);

      document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && mobileNav && mobileNav.classList.contains('open')) {
          closeMobile();
          mobileToggle.focus();
        }
      });

      document.querySelectorAll('#mobileNav .nav-link').forEach(function (link) {
        link.addEventListener('click', closeMobile);
      });

      /* =====================================================
         1. HELPERS
         ===================================================== */
      function pad(n) { return String(n).padStart(2, '0'); }
      function toISO(date) { return date.getFullYear() + '-' + pad(date.getMonth() + 1) + '-' + pad(date.getDate()); }
      function todayISO() { return toISO(new Date()); }
      function daysFromNow(n) {
        var d = new Date();
        d.setDate(d.getDate() + n);
        return toISO(d);
      }
      function formatDateShort(iso) {
        if (!iso) return '';
        var d = new Date(iso + 'T00:00:00');
        return d.toLocaleDateString('en-GB', { day: 'numeric', month: 'short', year: 'numeric' });
      }
      function formatMoney(value) {
        return new Intl.NumberFormat('en-NG', { style: 'currency', currency: 'NGN', maximumFractionDigits: 0 }).format(value);
      }
      function nightsBetween(checkin, checkout) {
        if (!checkin || !checkout) return 0;
        var a = new Date(checkin + 'T00:00:00');
        var b = new Date(checkout + 'T00:00:00');
        return Math.max(0, Math.round((b - a) / 86400000));
      }
      function escapeHTML(str) {
        return String(str).replace(/[&<>"']/g, function (ch) {
          return { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;' }[ch];
        });
      }
      function starsHTML(stars) {
        var html = '';
        for (var i = 1; i <= 5; i++) {
          html += i <= stars
            ? '<i class="bi bi-star-fill"></i>'
            : '<i class="bi bi-star empty"></i>';
        }
        return html;
      }
      function ratingLabel(rating) {
        if (rating >= 4.6) return 'Exceptional';
        if (rating >= 4.3) return 'Excellent';
        if (rating >= 4.0) return 'Very good';
        if (rating >= 3.6) return 'Good';
        return 'Pleasant';
      }

      /* =====================================================
         2. SAMPLE HOTELS
         ===================================================== */
      function buildRooms(basePrice, tiers) {
        var all = {
          standard: { type: 'Standard Room', mult: 1, capacity: 2, bed: 'Queen bed', desc: 'Comfortable room with all essential amenities.' },
          deluxe: { type: 'Deluxe Room', mult: 1.35, capacity: 2, bed: 'King bed', desc: 'More space, upgraded amenities and a better view.' },
          executive: { type: 'Executive Suite', mult: 2.1, capacity: 3, bed: 'King bed + sofa bed', desc: 'Separate living area with premium services.' },
          presidential: { type: 'Presidential Suite', mult: 3.5, capacity: 4, bed: 'Super king bed', desc: 'The finest accommodation available at this property.' }
        };
        return tiers.map(function (tier) {
          var r = all[tier];
          return {
            type: r.type,
            price: Math.round(basePrice * r.mult / 1000) * 1000,
            capacity: r.capacity,
            bed: r.bed,
            desc: r.desc
          };
        });
      }

      function basePolicies(extra) {
        return [
          'Check-in from 14:00; check-out by 12:00',
          'Free cancellation up to 48 hours before arrival',
          'Children welcome; cots available on request'
        ].concat(extra || []);
      }

      var AMENITY_ICONS = {
        'Free WiFi': 'bi-wifi',
        'Swimming pool': 'bi-water',
        'Spa': 'bi-flower1',
        'Fitness centre': 'bi-activity',
        'Restaurant': 'bi-egg-fried',
        'Bar': 'bi-cup-straw',
        'Parking': 'bi-p-circle-fill',
        'Airport shuttle': 'bi-airplane',
        'Beach access': 'bi-sun',
        'Business centre': 'bi-briefcase-fill',
        'Pet friendly': 'bi-heart-fill',
        'Room service': 'bi-bell-fill'
      };

      var SAMPLE_HOTELS = [
        { id: 'h1', name: 'The Wheatbaker', city: 'Lagos', location: 'Ikoyi, Lagos, Nigeria', stars: 5, rating: 4.7, reviews: 284, type: 'Boutique hotel', description: 'An elegant boutique hotel tucked away in Ikoyi with curated art, an award-winning restaurant and a tranquil spa.', pricePerNight: 185000, image: 'https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=900&q=80', images: ['https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=1200&q=80', 'https://images.unsplash.com/photo-1611892440504-42a792e24d32?auto=format&fit=crop&w=1200&q=80', 'https://images.unsplash.com/photo-1564501049412-61c2a3083791?auto=format&fit=crop&w=1200&q=80'], amenities: ['Free WiFi', 'Swimming pool', 'Spa', 'Fitness centre', 'Restaurant', 'Bar', 'Parking', 'Room service'], rooms: buildRooms(185000, ['deluxe', 'executive', 'presidential']), policies: basePolicies(['No smoking in rooms; designated outdoor areas available']) },
        { id: 'h2', name: 'Eko Hotel & Suites', city: 'Lagos', location: 'Victoria Island, Lagos, Nigeria', stars: 5, rating: 4.5, reviews: 612, type: 'Hotel', description: 'A landmark waterfront hotel with multiple restaurants, a large pool deck and direct access to the Eko Atlantic beach.', pricePerNight: 165000, image: 'https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?auto=format&fit=crop&w=900&q=80', images: ['https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?auto=format&fit=crop&w=1200&q=80', 'https://images.unsplash.com/photo-1571896349842-33c89424de2d?auto=format&fit=crop&w=1200&q=80', 'https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?auto=format&fit=crop&w=1200&q=80'], amenities: ['Free WiFi', 'Swimming pool', 'Spa', 'Fitness centre', 'Restaurant', 'Bar', 'Parking', 'Business centre'], rooms: buildRooms(165000, ['standard', 'deluxe', 'executive']), policies: basePolicies() },
        { id: 'h3', name: 'Radisson Blu Anchorage', city: 'Lagos', location: 'Victoria Island, Lagos, Nigeria', stars: 5, rating: 4.4, reviews: 498, type: 'Hotel', description: 'A contemporary hotel on the Lagos waterfront, popular with business travellers for its meeting facilities and rooftop views.', pricePerNight: 145000, image: 'https://images.unsplash.com/photo-1571896349842-33c89424de2d?auto=format&fit=crop&w=900&q=80', images: ['https://images.unsplash.com/photo-1571896349842-33c89424de2d?auto=format&fit=crop&w=1200&q=80', 'https://images.unsplash.com/photo-1611892440504-42a792e24d32?auto=format&fit=crop&w=1200&q=80', 'https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&w=1200&q=80'], amenities: ['Free WiFi', 'Swimming pool', 'Spa', 'Fitness centre', 'Restaurant', 'Bar', 'Parking', 'Airport shuttle'], rooms: buildRooms(145000, ['standard', 'deluxe', 'executive']), policies: basePolicies() },
        { id: 'h4', name: 'The George', city: 'Lagos', location: 'Ikoyi, Lagos, Nigeria', stars: 4, rating: 4.3, reviews: 341, type: 'Hotel', description: 'A refined boutique-style hotel with a leafy courtyard, an intimate restaurant and easy access to Ikoyi business district.', pricePerNight: 120000, image: 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=900&q=80', images: ['https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=1200&q=80', 'https://images.unsplash.com/photo-1611892440504-42a792e24d32?auto=format&fit=crop&w=1200&q=80', 'https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?auto=format&fit=crop&w=1200&q=80'], amenities: ['Free WiFi', 'Swimming pool', 'Fitness centre', 'Restaurant', 'Bar', 'Parking', 'Business centre'], rooms: buildRooms(120000, ['standard', 'deluxe', 'executive']), policies: basePolicies() },
        { id: 'h5', name: 'Southern Sun Ikoyi', city: 'Lagos', location: 'Ikoyi, Lagos, Nigeria', stars: 4, rating: 4.2, reviews: 276, type: 'Hotel', description: 'A dependable international business hotel with a leafy outdoor pool, well-equipped gym and friendly service.', pricePerNight: 110000, image: 'https://images.unsplash.com/photo-1445019980597-93fa8acb246c?auto=format&fit=crop&w=900&q=80', images: ['https://images.unsplash.com/photo-1445019980597-93fa8acb246c?auto=format&fit=crop&w=1200&q=80', 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=1200&q=80', 'https://images.unsplash.com/photo-1564501049412-61c2a3083791?auto=format&fit=crop&w=1200&q=80'], amenities: ['Free WiFi', 'Swimming pool', 'Fitness centre', 'Restaurant', 'Bar', 'Parking'], rooms: buildRooms(110000, ['standard', 'deluxe']), policies: basePolicies() },
        { id: 'h6', name: 'Maison Fahrenheit', city: 'Lagos', location: 'Victoria Island, Lagos, Nigeria', stars: 4, rating: 4.3, reviews: 198, type: 'Boutique hotel', description: 'A design-led boutique hotel with bold interiors, a rooftop lounge and a much-loved brunch restaurant.', pricePerNight: 95000, image: 'https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&w=900&q=80', images: ['https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&w=1200&q=80', 'https://images.unsplash.com/photo-1631049307264-da0ec9d70304?auto=format&fit=crop&w=1200&q=80', 'https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?auto=format&fit=crop&w=1200&q=80'], amenities: ['Free WiFi', 'Swimming pool', 'Restaurant', 'Bar', 'Parking', 'Room service'], rooms: buildRooms(95000, ['standard', 'deluxe']), policies: basePolicies() },
        { id: 'h7', name: 'BON Hotels Ikeja', city: 'Lagos', location: 'Ikeja GRA, Lagos, Nigeria', stars: 3, rating: 3.9, reviews: 152, type: 'Hotel', description: 'A practical, well-priced hotel close to Murtala Muhammed Airport, popular for short stopovers and business trips.', pricePerNight: 55000, image: 'https://images.unsplash.com/photo-1587985064135-0366536eab42?auto=format&fit=crop&w=900&q=80', images: ['https://images.unsplash.com/photo-1587985064135-0366536eab42?auto=format&fit=crop&w=1200&q=80', 'https://images.unsplash.com/photo-1445019980597-93fa8acb246c?auto=format&fit=crop&w=1200&q=80', 'https://images.unsplash.com/photo-1611892440504-42a792e24d32?auto=format&fit=crop&w=1200&q=80'], amenities: ['Free WiFi', 'Restaurant', 'Bar', 'Parking'], rooms: buildRooms(55000, ['standard', 'deluxe']), policies: basePolicies() },
        { id: 'h8', name: 'Amber Residence', city: 'Lagos', location: 'Ikeja GRA, Lagos, Nigeria', stars: 4, rating: 4.1, reviews: 89, type: 'Serviced apartment', description: 'Fully serviced one- and two-bedroom apartments with kitchenettes — ideal for longer stays and families.', pricePerNight: 75000, image: 'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?auto=format&fit=crop&w=900&q=80', images: ['https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?auto=format&fit=crop&w=1200&q=80', 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=1200&q=80', 'https://images.unsplash.com/photo-1564501049412-61c2a3083791?auto=format&fit=crop&w=1200&q=80'], amenities: ['Free WiFi', 'Fitness centre', 'Parking', 'Room service'], rooms: buildRooms(75000, ['standard', 'deluxe']), policies: basePolicies() },
        { id: 'h9', name: 'The Berkeley', city: 'London', location: 'Knightsbridge, London, United Kingdom', stars: 5, rating: 4.8, reviews: 1204, type: 'Hotel', description: 'A legendary Knightsbridge hotel with a rooftop pool, an acclaimed spa and Michelin-starred dining.', pricePerNight: 380000, image: 'https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?auto=format&fit=crop&w=900&q=80', images: ['https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?auto=format&fit=crop&w=1200&q=80', 'https://images.unsplash.com/photo-1631049307264-da0ec9d70304?auto=format&fit=crop&w=1200&q=80', 'https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&w=1200&q=80'], amenities: ['Free WiFi', 'Swimming pool', 'Spa', 'Fitness centre', 'Restaurant', 'Bar', 'Parking', 'Room service'], rooms: buildRooms(380000, ['deluxe', 'executive', 'presidential']), policies: basePolicies() },
        { id: 'h10', name: 'The Hoxton Shoreditch', city: 'London', location: 'Shoreditch, London, United Kingdom', stars: 4, rating: 4.5, reviews: 856, type: 'Boutique hotel', description: 'A lively East London boutique hotel with a buzzy lobby bar, rooftop restaurant and stylish, compact rooms.', pricePerNight: 175000, image: 'https://images.unsplash.com/photo-1564501049412-61c2a3083791?auto=format&fit=crop&w=900&q=80', images: ['https://images.unsplash.com/photo-1564501049412-61c2a3083791?auto=format&fit=crop&w=1200&q=80', 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=1200&q=80', 'https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?auto=format&fit=crop&w=1200&q=80'], amenities: ['Free WiFi', 'Restaurant', 'Bar', 'Room service'], rooms: buildRooms(175000, ['standard', 'deluxe', 'executive']), policies: basePolicies() },
        { id: 'h11', name: 'Atlantis The Palm', city: 'Dubai', location: 'Palm Jumeirah, Dubai, United Arab Emirates', stars: 5, rating: 4.6, reviews: 2140, type: 'Resort', description: 'An iconic Palm Jumeirah resort with a private beach, an enormous waterpark and more than twenty restaurants.', pricePerNight: 290000, image: 'https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?auto=format&fit=crop&w=900&q=80', images: ['https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?auto=format&fit=crop&w=1200&q=80', 'https://images.unsplash.com/photo-1571896349842-33c89424de2d?auto=format&fit=crop&w=1200&q=80', 'https://images.unsplash.com/photo-1631049307264-da0ec9d70304?auto=format&fit=crop&w=1200&q=80'], amenities: ['Free WiFi', 'Swimming pool', 'Spa', 'Fitness centre', 'Restaurant', 'Bar', 'Parking', 'Airport shuttle', 'Beach access', 'Business centre', 'Room service'], rooms: buildRooms(290000, ['deluxe', 'executive', 'presidential']), policies: basePolicies() },
        { id: 'h12', name: 'Rove Downtown', city: 'Dubai', location: 'Downtown Dubai, United Arab Emirates', stars: 3, rating: 4.3, reviews: 934, type: 'Hotel', description: 'A modern, well-priced hotel within walking distance of Dubai Mall and Burj Khalifa, with a rooftop pool.', pricePerNight: 95000, image: 'https://images.unsplash.com/photo-1578683010236-d716f9a3f461?auto=format&fit=crop&w=900&q=80', images: ['https://images.unsplash.com/photo-1578683010236-d716f9a3f461?auto=format&fit=crop&w=1200&q=80', 'https://images.unsplash.com/photo-1445019980597-93fa8acb246c?auto=format&fit=crop&w=1200&q=80', 'https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=1200&q=80'], amenities: ['Free WiFi', 'Swimming pool', 'Fitness centre', 'Restaurant', 'Parking'], rooms: buildRooms(95000, ['standard', 'deluxe']), policies: basePolicies() }
      ];

      // Expose the same dataset for any external scripts or console inspection.
      window.HOTEL_DATA = SAMPLE_HOTELS;

      /* =====================================================
         3. STATE
         ===================================================== */
      var state = {
        search: { destination: 'Lagos, Nigeria', checkin: daysFromNow(14), checkout: daysFromNow(17), guests: 2, rooms: 1 },
        filters: { maxPrice: 400000, stars: new Set([3, 4, 5]), types: new Set(), amenities: new Set() },
        sort: 'recommended'
      };

      /* =====================================================
         4. DOM
         ===================================================== */
      var els = {
        form: document.getElementById('hotelSearchForm'),
        formStatus: document.getElementById('formStatus'),
        destination: document.getElementById('destinationInput'),
        checkin: document.getElementById('checkinInput'),
        checkout: document.getElementById('checkoutInput'),
        guests: document.getElementById('guestsSelect'),
        rooms: document.getElementById('roomsSelect'),
        resetSearchBtn: document.getElementById('resetSearchBtn'),
        resultsSection: document.getElementById('resultsSection'),
        resultsTitle: document.getElementById('resultsTitle'),
        resultsSummary: document.getElementById('resultsSummary'),
        resultsCount: document.getElementById('resultsCount'),
        resultsList: document.getElementById('resultsList'),
        sortSelect: document.getElementById('sortSelect'),
        filtersPanel: document.getElementById('filtersPanel'),
        clearFilters: document.getElementById('clearFilters'),
        priceRange: document.getElementById('priceRange'),
        priceRangeLabel: document.getElementById('priceRangeLabel'),
        priceMinHint: document.getElementById('priceMinHint'),
        priceMaxHint: document.getElementById('priceMaxHint'),
        starChecks: Array.prototype.slice.call(document.querySelectorAll('.star-check')),
        typeFilters: document.getElementById('typeFilters'),
        amenityFilters: document.getElementById('amenityFilters')
      };

      /* =====================================================
         5. YEAR + REVEAL
         ===================================================== */
      document.querySelectorAll('[data-year]').forEach(function (node) {
        node.textContent = new Date().getFullYear();
      });

      var revealEls = document.querySelectorAll('.reveal');
      if ('IntersectionObserver' in window && revealEls.length) {
        var observer = new IntersectionObserver(function (entries) {
          entries.forEach(function (entry) {
            if (entry.isIntersecting) {
              entry.target.classList.add('is-visible');
              observer.unobserve(entry.target);
            }
          });
        }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
        revealEls.forEach(function (el) { observer.observe(el); });
      } else {
        revealEls.forEach(function (el) { el.classList.add('is-visible'); });
      }

      /* =====================================================
         6. PRICE RANGE
         ===================================================== */
      var PRICE_MIN = 50000;
      var PRICE_MAX = 400000;

      els.priceRange.min = String(PRICE_MIN);
      els.priceRange.max = String(PRICE_MAX);
      els.priceRange.step = '5000';
      els.priceRange.value = String(PRICE_MAX);
      els.priceMinHint.textContent = formatMoney(PRICE_MIN);
      els.priceMaxHint.textContent = formatMoney(PRICE_MAX);
      state.filters.maxPrice = PRICE_MAX;

      function updatePriceLabel() {
        var value = Number(els.priceRange.value);
        els.priceRangeLabel.textContent = value >= PRICE_MAX ? 'Any price' : 'Up to ' + formatMoney(value);
      }
      updatePriceLabel();

      els.priceRange.addEventListener('input', function () {
        state.filters.maxPrice = Number(els.priceRange.value);
        updatePriceLabel();
        renderResults();
      });

      /* =====================================================
         7. STAR FILTER
         ===================================================== */
      els.starChecks.forEach(function (cb) {
        cb.addEventListener('change', function () {
          var value = Number(cb.value);
          if (cb.checked) state.filters.stars.add(value);
          else state.filters.stars.delete(value);
          renderResults();
        });
      });

      /* =====================================================
         8. TYPE FILTER
         ===================================================== */
      var TYPES = [];
      SAMPLE_HOTELS.forEach(function (h) {
        if (TYPES.indexOf(h.type) === -1) TYPES.push(h.type);
      });
      TYPES.sort();
      state.filters.types = new Set(TYPES);

      els.typeFilters.innerHTML = TYPES.map(function (type, index) {
        var id = 'type-' + index;
        return (
          '<div class="form-check">' +
            '<input class="form-check-input type-check" type="checkbox" id="' + id + '" value="' + escapeHTML(type) + '" checked />' +
            '<label class="form-check-label" for="' + id + '">' + escapeHTML(type) + '</label>' +
          '</div>'
        );
      }).join('');

      var typeChecks = Array.prototype.slice.call(document.querySelectorAll('.type-check'));
      typeChecks.forEach(function (cb) {
        cb.addEventListener('change', function () {
          if (cb.checked) state.filters.types.add(cb.value);
          else state.filters.types.delete(cb.value);
          renderResults();
        });
      });

      /* =====================================================
         9. AMENITY FILTER
         ===================================================== */
      var AMENITIES = [];
      SAMPLE_HOTELS.forEach(function (h) {
        h.amenities.forEach(function (a) {
          if (AMENITIES.indexOf(a) === -1) AMENITIES.push(a);
        });
      });
      AMENITIES.sort();

      els.amenityFilters.innerHTML = AMENITIES.map(function (amenity, index) {
        var id = 'amenity-' + index;
        return (
          '<div class="form-check">' +
            '<input class="form-check-input amenity-check" type="checkbox" id="' + id + '" value="' + escapeHTML(amenity) + '" />' +
            '<label class="form-check-label" for="' + id + '">' + escapeHTML(amenity) + '</label>' +
          '</div>'
        );
      }).join('');

      var amenityChecks = Array.prototype.slice.call(document.querySelectorAll('.amenity-check'));
      amenityChecks.forEach(function (cb) {
        cb.addEventListener('change', function () {
          if (cb.checked) state.filters.amenities.add(cb.value);
          else state.filters.amenities.delete(cb.value);
          renderResults();
        });
      });

      /* =====================================================
         10. SORT + CLEAR
         ===================================================== */
      els.sortSelect.addEventListener('change', function () {
        state.sort = els.sortSelect.value;
        renderResults();
      });

      els.clearFilters.addEventListener('click', function () {
        state.filters.maxPrice = PRICE_MAX;
        state.filters.stars = new Set([3, 4, 5]);
        state.filters.types = new Set(TYPES);
        state.filters.amenities = new Set();

        els.priceRange.value = String(PRICE_MAX);
        updatePriceLabel();
        els.starChecks.forEach(function (cb) { cb.checked = true; });
        typeChecks.forEach(function (cb) { cb.checked = true; });
        amenityChecks.forEach(function (cb) { cb.checked = false; });

        renderResults();
      });

      /* =====================================================
         11. DATES
         ===================================================== */
      els.checkin.min = todayISO();
      els.checkout.min = todayISO();
      els.checkin.value = daysFromNow(14);
      els.checkout.value = daysFromNow(17);

      els.checkin.addEventListener('change', function () {
        if (!els.checkin.value) return;
        els.checkout.min = els.checkin.value;
        if (els.checkout.value && els.checkout.value < els.checkin.value) {
          els.checkout.value = els.checkin.value;
        }
      });

      /* =====================================================
         12. STATUS
         ===================================================== */
      function showFormStatus(message, type) {
        els.formStatus.textContent = message;
        els.formStatus.className = 'form-status show ' + type;
      }
      function clearFormStatus() {
        els.formStatus.textContent = '';
        els.formStatus.className = 'form-status';
      }

      /* =====================================================
         13. SEARCH SUBMIT
         ===================================================== */
      els.form.addEventListener('submit', function (event) {
        event.preventDefault();

        var destination = els.destination.value.trim();
        var checkin = els.checkin.value;
        var checkout = els.checkout.value;

        if (!destination) {
          showFormStatus('Please enter a destination, area or hotel name.', 'error'); return;
        }
        if (!checkin) {
          showFormStatus('Please choose a check-in date.', 'error'); return;
        }
        if (checkin < todayISO()) {
          showFormStatus('The check-in date cannot be in the past.', 'error'); return;
        }
        if (!checkout) {
          showFormStatus('Please choose a check-out date.', 'error'); return;
        }
        if (checkout <= checkin) {
          showFormStatus('The check-out date must be after the check-in date.', 'error'); return;
        }

        clearFormStatus();

        state.search = {
          destination: destination,
          checkin: checkin,
          checkout: checkout,
          guests: Number(els.guests.value),
          rooms: Number(els.rooms.value)
        };

        updateResultsHeading();
        renderResults();
        els.resultsSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
      });

      els.resetSearchBtn.addEventListener('click', function () {
        els.destination.value = 'Lagos, Nigeria';
        els.checkin.value = daysFromNow(14);
        els.checkout.value = daysFromNow(17);
        els.guests.value = '2';
        els.rooms.value = '1';
        clearFormStatus();

        state.search = {
          destination: 'Lagos, Nigeria',
          checkin: daysFromNow(14),
          checkout: daysFromNow(17),
          guests: 2,
          rooms: 1
        };

        updateResultsHeading();
        renderResults();
      });

      /* =====================================================
         14. HEADING
         ===================================================== */
      function matchCity(destination) {
        var lower = destination.toLowerCase();
        var cities = ['lagos', 'london', 'dubai'];
        for (var i = 0; i < cities.length; i++) {
          if (lower.indexOf(cities[i]) !== -1) return cities[i];
        }
        return null;
      }

      function updateResultsHeading() {
        var s = state.search;
        var title = 'Hotels in ' + s.destination;
        var matchedCity = matchCity(s.destination);
        if (!matchedCity) title = 'Sample stays — ' + s.destination;
        els.resultsTitle.textContent = title;

        var nights = nightsBetween(s.checkin, s.checkout);
        var guestLabel = s.guests + (s.guests === 1 ? ' guest' : ' guests');
        var roomLabel = s.rooms + (s.rooms === 1 ? ' room' : ' rooms');

        els.resultsSummary.textContent =
          formatDateShort(s.checkin) + ' – ' + formatDateShort(s.checkout) +
          ' · ' + nights + (nights === 1 ? ' night' : ' nights') +
          ' · ' + guestLabel + ' · ' + roomLabel;
      }

      /* =====================================================
         15. FILTER + SORT
         ===================================================== */
      function getVisibleHotels() {
        var search = state.search;
        var filters = state.filters;
        var matchedCity = matchCity(search.destination);

        var filtered = SAMPLE_HOTELS.filter(function (hotel) {
          if (matchedCity && hotel.city.toLowerCase() !== matchedCity) return false;
          if (hotel.pricePerNight > filters.maxPrice) return false;
          if (!filters.stars.has(hotel.stars)) return false;
          if (!filters.types.has(hotel.type)) return false;

          var amenitiesOk = true;
          filters.amenities.forEach(function (a) {
            if (hotel.amenities.indexOf(a) === -1) amenitiesOk = false;
          });
          if (!amenitiesOk) return false;

          return true;
        });

        switch (state.sort) {
          case 'price-asc': filtered.sort(function (a, b) { return a.pricePerNight - b.pricePerNight; }); break;
          case 'price-desc': filtered.sort(function (a, b) { return b.pricePerNight - a.pricePerNight; }); break;
          case 'rating-desc': filtered.sort(function (a, b) { return b.rating - a.rating; }); break;
          default:
            filtered.sort(function (a, b) {
              var scoreA = a.rating - (a.pricePerNight / 100000) * 0.3;
              var scoreB = b.rating - (b.pricePerNight / 100000) * 0.3;
              return scoreB - scoreA;
            });
        }
        return filtered;
      }

      /* =====================================================
         16. HOTEL CARD — "View details" is now a link
         ===================================================== */
      function hotelCardHTML(hotel) {
        var shown = hotel.amenities.slice(0, 3);
        var extras = hotel.amenities.length - shown.length;

        var amenitiesHTML = shown.map(function (a) {
          var icon = AMENITY_ICONS[a] || 'bi-check2-circle';
          return '<span class="amenity-pill"><i class="bi ' + icon + '"></i>' + escapeHTML(a) + '</span>';
        }).join('');

        if (extras > 0) {
          amenitiesHTML += '<span class="amenity-pill amenity-more">+' + extras + ' more</span>';
        }

        var detailsHref = 'hotel-details.html?id=' + encodeURIComponent(hotel.id) +
          '&checkin=' + encodeURIComponent(state.search.checkin) +
          '&checkout=' + encodeURIComponent(state.search.checkout) +
          '&guests=' + state.search.guests +
          '&rooms=' + state.search.rooms;

        return (
          '<article class="hotel-card" data-hotel-id="' + hotel.id + '">' +
            '<div class="hotel-photo">' +
              '<img src="' + hotel.image + '" alt="' + escapeHTML(hotel.name) + ' in ' + escapeHTML(hotel.location) + '" loading="lazy" decoding="async" />' +
              '<span class="hotel-type-badge">' + escapeHTML(hotel.type) + '</span>' +
            '</div>' +
            '<div class="hotel-info">' +
              '<div class="hotel-stars">' + starsHTML(hotel.stars) + '</div>' +
              '<h3>' + escapeHTML(hotel.name) + '</h3>' +
              '<p class="hotel-location"><i class="bi bi-geo-alt-fill"></i>' + escapeHTML(hotel.location) + '</p>' +
              '<div class="hotel-rating-row">' +
                '<span class="rating-badge"><i class="bi bi-star-fill"></i>' + hotel.rating.toFixed(1) + '</span>' +
                '<span class="rating-label">' + ratingLabel(hotel.rating) + '</span>' +
                '<span class="rating-demo-pill">Demo rating</span>' +
                '<span class="rating-count">(' + hotel.reviews + ' sample reviews)</span>' +
              '</div>' +
              '<p class="hotel-desc">' + escapeHTML(hotel.description) + '</p>' +
              '<div class="hotel-amenities">' + amenitiesHTML + '</div>' +
            '</div>' +
            '<div class="hotel-price">' +
              '<span class="price-from">From</span>' +
              '<span class="price-amount">' + formatMoney(hotel.pricePerNight) + '</span>' +
              '<span class="price-per">per night</span>' +
              '<span class="price-demo">Sample price</span>' +
              '<a href="' + detailsHref + '" class="btn btn-navy btn-sm">View details</a>' +
            '</div>' +
          '</article>'
        );
      }

      function renderResults() {
        var hotels = getVisibleHotels();
        els.resultsCount.textContent = String(hotels.length);

        if (!hotels.length) {
          els.resultsList.innerHTML =
            '<div class="empty-state">' +
              '<i class="bi bi-building"></i>' +
              '<h3>No stays match your filters</h3>' +
              '<p>Try widening your price range, selecting more star categories or clearing some amenities.</p>' +
              '<button type="button" class="btn btn-outline-navy" id="resetFromEmpty">Reset filters</button>' +
            '</div>';
          var resetBtn = document.getElementById('resetFromEmpty');
          if (resetBtn) resetBtn.addEventListener('click', function () { els.clearFilters.click(); });
          return;
        }
        els.resultsList.innerHTML = hotels.map(hotelCardHTML).join('');
      }

      /* =====================================================
         17. NEWSLETTER
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
            status.textContent = 'Please enter a valid email address.';
            status.className = 'newsletter-status show error';
            return;
          }
          status.textContent = 'Thank you — please check ' + email + ' to confirm.';
          status.className = 'newsletter-status show success';
          newsletterForm.reset();
        });
      }

      /* =====================================================
         18. INITIAL RENDER
         ===================================================== */
      updateResultsHeading();
      renderResults();

    })();
  </script>
</body>
</html>