<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/png" href="/images/logo-mark.png" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>About Us — CJ Travels</title>
  <meta name="description" content="Learn about CJ Travels — an online travel agency serving customers in Nigeria and internationally. Our story, mission, values and services." />

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

    .skip-link {
      position: absolute;
      left: 1rem;
      top: -60px;
      z-index: 2000;
      background: var(--navy);
      color: var(--ivory);
      padding: .7rem 1.2rem;
      font-size: 13px;
      letter-spacing: .1em;
      text-transform: uppercase;
      transition: top .25s ease;
    }
    .skip-link:focus { top: 0; color: var(--ivory); }

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
      margin-bottom: 22px;
    }
    .eyebrow::before, .eyebrow::after {
      content: "";
      width: 28px; height: 1px;
      background: var(--gold);
    }
    .eyebrow.no-after::after { display: none; }
    .eyebrow.light { color: rgba(253, 251, 246, .7); }
    .eyebrow.light::before, .eyebrow.light::after { background: var(--gold-soft); }

    .section { padding: clamp(72px, 9vw, 120px) 0; }
    .bg-cream { background: var(--cream); }
    .bg-cream-soft { background: var(--cream-soft); }
    .bg-ivory { background: var(--ivory); }

    .section-head {
      max-width: 660px;
      margin: 0 auto clamp(48px, 6vw, 72px);
      text-align: center;
    }
    .section-head h2 {
      font-size: clamp(2rem, 4vw, 3.2rem);
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

    .btn-lux-outline-light {
      background: transparent;
      color: var(--ivory);
      border: 1px solid rgba(253, 251, 246, .25);
    }
    .btn-lux-outline-light:hover {
      background: rgba(253, 251, 246, .08);
      border-color: var(--gold-soft);
      color: var(--ivory);
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
    .link-arrow:hover { border-bottom-color: var(--navy); }
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
    .topbar-left { display: flex; align-items: center; gap: 28px; }
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
    .topbar-right { display: flex; align-items: center; gap: 20px; }
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
      width: 5px; height: 5px;
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
      width: 42px; height: 42px;
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
    .brand:hover .brand-mark { background: var(--navy); color: var(--ivory); }
    .brand-name {
      font-family: 'Cormorant Garamond', serif;
      font-size: 24px;
      font-weight: 500;
      letter-spacing: .01em;
      color: var(--navy);
      line-height: 1;
    }
    .brand-name em { font-style: italic; color: var(--gold); font-weight: 400; }

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
    .nav-center a.active { color: var(--navy); border-bottom-color: var(--gold); }

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
      width: 44px; height: 44px;
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
      position: fixed; inset: 0;
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
      top: 0; right: 0; bottom: 0;
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
    .mobile-nav .nav-list { list-style: none; padding: 0; margin: 0; }
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
    .about-hero {
      background: var(--cream);
      padding: clamp(64px, 9vw, 120px) 0 clamp(56px, 7vw, 96px);
      text-align: center;
      position: relative;
      overflow: hidden;
    }
    .about-hero .hero-content {
      max-width: 800px;
      margin: 0 auto;
      padding: 0 24px;
    }
    .about-hero h1 {
      font-size: clamp(2.6rem, 6.5vw, 5rem);
      line-height: 1;
      letter-spacing: -.025em;
      margin-bottom: 28px;
    }
    .about-hero h1 em { font-style: italic; color: var(--gold); font-weight: 400; }
    .about-hero .hero-sub {
      font-size: clamp(15px, 1.5vw, 17px);
      color: var(--ink-soft);
      max-width: 56ch;
      margin: 0 auto 40px;
      line-height: 1.7;
    }
    .about-hero .hero-actions {
      display: flex;
      gap: 16px;
      justify-content: center;
      flex-wrap: wrap;
    }

    .hero-trust {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 0;
      margin-top: clamp(56px, 7vw, 88px);
      border-top: 1px solid var(--hairline-soft);
      border-bottom: 1px solid var(--hairline-soft);
    }
    .hero-trust-item {
      padding: 26px 20px;
      border-right: 1px solid var(--hairline-soft);
      display: flex;
      gap: 12px;
      align-items: flex-start;
      text-align: left;
    }
    .hero-trust-item:last-child { border-right: 0; }
    .hero-trust-item i {
      color: var(--gold);
      font-size: 18px;
      margin-top: 2px;
      flex-shrink: 0;
    }
    .hero-trust-item strong {
      display: block;
      font-family: 'Cormorant Garamond', serif;
      font-size: 1.1rem;
      font-weight: 500;
      color: var(--navy);
      margin-bottom: 2px;
    }
    .hero-trust-item span {
      font-size: 12px;
      color: var(--ink-soft);
      line-height: 1.5;
    }
    @media (max-width: 767.98px) {
      .hero-trust { grid-template-columns: 1fr; }
      .hero-trust-item { border-right: 0; border-bottom: 1px solid var(--hairline-soft); }
      .hero-trust-item:last-child { border-bottom: 0; }
    }

    /* =======================================================
       SPLIT
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
      position: relative;
      background: var(--navy);
    }
    .split-media img {
      width: 100%; height: 100%;
      object-fit: cover;
      display: block;
      transition: opacity .3s ease;
    }
    .split-badge {
      position: absolute;
      left: 20px;
      bottom: 20px;
      display: flex;
      align-items: center;
      gap: 12px;
      background: var(--ivory);
      padding: 14px 18px;
      max-width: calc(100% - 40px);
      border-radius: 2px;
    }
    .split-badge i { color: var(--gold); font-size: 18px; flex: 0 0 auto; }
    .split-badge div {
      display: flex;
      flex-direction: column;
      line-height: 1.3;
      min-width: 0;
    }
    .split-badge strong {
      font-family: 'Cormorant Garamond', serif;
      font-size: 15px;
      font-weight: 500;
      color: var(--navy);
    }
    .split-badge span { font-size: 11px; color: var(--muted); letter-spacing: .04em; }

    .split-content h2 {
      font-size: clamp(1.9rem, 3.4vw, 3rem);
      margin-bottom: 24px;
      line-height: 1.15;
      letter-spacing: -.015em;
    }
    .split-content h2 em { font-style: italic; color: var(--gold); font-weight: 400; }

    .prose p {
      color: var(--ink-soft);
      font-size: 15px;
      line-height: 1.75;
      margin-bottom: 16px;
    }
    .prose p:last-child { margin-bottom: 0; }
    .prose .prose-lead {
      font-size: 16px !important;
      color: var(--ink) !important;
    }

    @media (max-width: 991.98px) {
      .split { grid-template-columns: 1fr; }
      .split-media { aspect-ratio: 4 / 3; }
    }

    /* Check list (used in why-choose-us) */
    .check-list {
      list-style: none;
      padding: 0;
      margin: 28px 0 0;
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
      line-height: 1.65;
    }

    /* =======================================================
       MISSION & VISION
       ======================================================= */
    .mv-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 1px;
      background: var(--hairline-soft);
      border: 1px solid var(--hairline-soft);
    }
    .mv-card {
      background: var(--ivory);
      padding: clamp(32px, 4vw, 48px) clamp(24px, 3vw, 40px);
      display: flex;
      flex-direction: column;
      transition: background-color .3s ease;
    }
    .mv-card:hover { background: var(--cream-soft); }
    .mv-icon {
      width: 52px; height: 52px;
      border-radius: 50%;
      border: 1px solid var(--gold-pale);
      color: var(--gold);
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 18px;
      margin-bottom: 24px;
      transition: all .3s ease;
    }
    .mv-card:hover .mv-icon {
      background: var(--navy);
      border-color: var(--navy);
      color: var(--gold-soft);
    }
    .mv-card h3 { font-size: 1.55rem; margin-bottom: 12px; }
    .mv-card p {
      color: var(--ink-soft);
      font-size: 14px;
      line-height: 1.7;
    }
    @media (max-width: 767.98px) { .mv-grid { grid-template-columns: 1fr; } }

    /* =======================================================
       VALUES
       ======================================================= */
    .values-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 1px;
      background: var(--hairline-soft);
      border: 1px solid var(--hairline-soft);
    }
    .value-card {
      background: var(--cream);
      padding: clamp(28px, 3vw, 40px) clamp(20px, 2.5vw, 32px);
      transition: background-color .3s ease;
    }
    .value-card:hover { background: var(--ivory); }
    .value-icon {
      width: 46px; height: 46px;
      border-radius: 50%;
      border: 1px solid var(--gold-pale);
      color: var(--gold);
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 15px;
      margin-bottom: 20px;
      transition: all .3s ease;
    }
    .value-card:hover .value-icon {
      background: var(--navy);
      border-color: var(--navy);
      color: var(--gold-soft);
    }
    .value-card h3 { font-size: 1.3rem; margin-bottom: 10px; }
    .value-card p {
      color: var(--ink-soft);
      font-size: 13.5px;
      line-height: 1.7;
    }
    @media (max-width: 991.98px) { .values-grid { grid-template-columns: repeat(2, 1fr); } }
    @media (max-width: 575.98px) { .values-grid { grid-template-columns: 1fr; } }

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
      display: flex;
      flex-direction: column;
      transition: background-color .3s ease;
    }
    .service:hover { background: var(--ivory); }
    .service-icon {
      width: 52px; height: 52px;
      border-radius: 50%;
      border: 1px solid var(--gold-pale);
      color: var(--gold);
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 18px;
      margin-bottom: 24px;
      transition: all .3s ease;
    }
    .service:hover .service-icon {
      background: var(--navy);
      border-color: var(--navy);
      color: var(--gold-soft);
    }
    .service h3 { font-size: 1.55rem; margin-bottom: 12px; }
    .service p {
      color: var(--ink-soft);
      font-size: 14px;
      line-height: 1.7;
      margin-bottom: 28px;
      flex: 1;
    }
    .service .link-arrow { margin-top: auto; }

    @media (max-width: 991.98px) { .services-grid { grid-template-columns: 1fr; } }

    .service-note {
      display: flex;
      align-items: flex-start;
      gap: 14px;
      background: var(--ivory);
      border: 1px solid var(--hairline);
      padding: 22px 26px;
      font-size: 13px;
      color: var(--ink-soft);
      line-height: 1.7;
      margin-top: 32px;
    }
    .service-note i { color: var(--gold); font-size: 18px; flex-shrink: 0; margin-top: 2px; }

    /* =======================================================
       STATS
       ======================================================= */
    .stats-section {
      background: var(--navy);
      color: var(--ivory);
      position: relative;
      overflow: hidden;
      padding: clamp(72px, 9vw, 120px) 0;
    }
    .stats-section::before {
      content: "";
      position: absolute;
      width: 600px; height: 600px;
      right: -200px; top: -200px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(201, 165, 91, .12), transparent 70%);
      pointer-events: none;
    }
    .stats-section .container { position: relative; z-index: 1; }
    .stats-section .section-head h2 { color: var(--ivory); }
    .stats-section .section-head h2 em { color: var(--gold-soft); }
    .stats-section .section-head p { color: rgba(253, 251, 246, .72); }
    .stats-section .eyebrow.light { color: rgba(253, 251, 246, .7); }

    .stats-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 0;
      border-top: 1px solid rgba(253, 251, 246, .15);
      border-bottom: 1px solid rgba(253, 251, 246, .15);
    }
    .stat-card {
      padding: clamp(28px, 3vw, 40px) clamp(20px, 2vw, 28px);
      border-right: 1px solid rgba(253, 251, 246, .1);
      text-align: center;
    }
    .stat-card:last-child { border-right: 0; }
    .stat-value {
      display: block;
      font-family: 'Cormorant Garamond', serif;
      font-size: clamp(2rem, 3.5vw, 2.8rem);
      font-style: italic;
      font-weight: 400;
      letter-spacing: -.02em;
      line-height: 1;
      color: var(--gold-soft);
      margin-bottom: 14px;
    }
    .stat-label {
      display: block;
      font-family: 'DM Sans', sans-serif;
      font-size: 12px;
      letter-spacing: .18em;
      text-transform: uppercase;
      color: rgba(253, 251, 246, .78);
      line-height: 1.5;
      margin-bottom: 14px;
    }
    .stat-pill {
      display: inline-block;
      font-family: 'DM Sans', sans-serif;
      font-size: 9px;
      font-weight: 500;
      letter-spacing: .22em;
      text-transform: uppercase;
      color: var(--gold-soft);
      border: 1px solid rgba(201, 165, 91, .4);
      padding: 4px 10px;
    }

    .stats-note {
      display: flex;
      align-items: flex-start;
      gap: 16px;
      background: rgba(253, 251, 246, .04);
      border: 1px solid rgba(253, 251, 246, .12);
      padding: 22px 26px;
      font-size: 13px;
      color: rgba(253, 251, 246, .72);
      line-height: 1.7;
      margin-top: 32px;
    }
    .stats-note i { color: var(--gold-soft); font-size: 20px; flex-shrink: 0; margin-top: 2px; }
    .stats-note strong {
      font-family: 'Cormorant Garamond', serif;
      font-size: 1.15rem;
      color: var(--ivory);
      font-weight: 500;
      display: block;
      margin-bottom: 4px;
    }

    @media (max-width: 991.98px) {
      .stats-grid { grid-template-columns: repeat(2, 1fr); }
      .stat-card:nth-child(2) { border-right: 0; }
      .stat-card:nth-child(1), .stat-card:nth-child(2) {
        border-bottom: 1px solid rgba(253, 251, 246, .1);
      }
    }
    @media (max-width: 575.98px) {
      .stats-grid { grid-template-columns: 1fr; }
      .stat-card { border-right: 0; border-bottom: 1px solid rgba(253, 251, 246, .1); }
      .stat-card:last-child { border-bottom: 0; }
    }

    /* =======================================================
       FAQ
       ======================================================= */
    .faq-accordion {
      border: 1px solid var(--hairline-soft);
      background: var(--ivory);
    }
    .faq-accordion .accordion-item {
      border: 0;
      border-bottom: 1px solid var(--hairline-soft);
      border-radius: 0 !important;
      background: transparent;
    }
    .faq-accordion .accordion-item:last-child { border-bottom: 0; }
    .faq-accordion .accordion-button {
      background: transparent;
      color: var(--navy);
      font-family: 'Cormorant Garamond', serif;
      font-size: 1.2rem;
      font-weight: 500;
      letter-spacing: -.005em;
      padding: 22px 28px;
      box-shadow: none;
      border-radius: 0;
    }
    .faq-accordion .accordion-button:not(.collapsed) {
      background: var(--cream-soft);
      color: var(--navy);
    }
    .faq-accordion .accordion-button:focus {
      box-shadow: none;
      border-color: transparent;
      outline: none;
    }
    .faq-accordion .accordion-button::after {
      background-image: none;
      content: "+";
      font-family: 'Cormorant Garamond', serif;
      font-size: 22px;
      font-weight: 400;
      color: var(--gold);
      width: auto;
      height: auto;
      line-height: 1;
      transition: transform .25s ease;
    }
    .faq-accordion .accordion-button:not(.collapsed)::after {
      content: "−";
      transform: none;
      color: var(--gold);
    }
    .faq-accordion .accordion-body {
      padding: 0 28px 24px;
      color: var(--ink-soft);
      font-size: 14px;
      line-height: 1.75;
    }

    /* =======================================================
       CTA
       ======================================================= */
    .cta {
      background: var(--navy);
      color: var(--ivory);
      position: relative;
      overflow: hidden;
      padding: clamp(72px, 9vw, 120px) 0;
    }
    .cta::before {
      content: "";
      position: absolute;
      width: 800px; height: 800px;
      left: 50%; top: 50%;
      transform: translate(-50%, -50%);
      border-radius: 50%;
      background: radial-gradient(circle, rgba(201, 165, 91, .1), transparent 60%);
      pointer-events: none;
    }
    .cta .container { position: relative; z-index: 1; }
    .cta-inner {
      display: grid;
      grid-template-columns: 1.4fr 1fr;
      gap: clamp(32px, 5vw, 64px);
      align-items: center;
    }
    .cta h2 {
      color: var(--ivory);
      font-size: clamp(2rem, 4vw, 3.2rem);
      margin-bottom: 20px;
      letter-spacing: -.025em;
      line-height: 1.1;
    }
    .cta h2 em { font-style: italic; color: var(--gold-soft); font-weight: 400; }
    .cta p {
      color: rgba(253, 251, 246, .72);
      font-size: 15px;
      line-height: 1.7;
      margin-bottom: 24px;
      max-width: 52ch;
    }
    .cta-contact-list {
      display: flex;
      flex-wrap: wrap;
      gap: 12px 28px;
    }
    .cta-contact-list a {
      color: rgba(253, 251, 246, .85);
      font-size: 13px;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      letter-spacing: .04em;
      transition: color .2s ease;
    }
    .cta-contact-list a:hover { color: var(--gold-soft); }
    .cta-contact-list i { color: var(--gold-soft); font-size: 13px; }
    .cta-actions {
      display: flex;
      gap: 16px;
      justify-content: flex-end;
      flex-wrap: wrap;
    }
    @media (max-width: 991.98px) {
      .cta-inner { grid-template-columns: 1fr; }
      .cta-actions { justify-content: flex-start; }
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
    .footer-watermark::before { content: "CJ Travels"; }

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
      width: 40px; height: 40px;
      border-color: rgba(201, 165, 91, .4);
      color: var(--gold-soft);
    }
    .footer-brand .brand-name { color: var(--ivory); font-size: 22px; }
    .footer-brand .brand-name em { color: var(--gold-soft); }

    .footer-about {
      font-size: 13px;
      line-height: 1.75;
      color: rgba(253, 251, 246, .55);
      max-width: 36ch;
      margin-bottom: 28px;
    }
    .footer-social { display: flex; gap: 10px; }
    .footer-social a {
      width: 38px; height: 38px;
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
      padding: 0; margin: 0;
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
    .footer-contact a {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      font-size: 13px;
      color: rgba(253, 251, 246, .6);
      transition: color .2s ease;
    }
    .footer-contact a:hover { color: var(--gold-soft); }
    .footer-contact i { color: var(--gold-soft); font-size: 12px; }

    .footer-newsletter { margin-top: 24px; }
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
    .footer-newsletter-form:focus-within { border-bottom-color: var(--gold-soft); }
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
      margin: 0; padding: 0;
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
       HEADER
       ========================================================= -->
  <header class="site-header" id="siteHeader">
    <div class="container">
      <div class="nav-inner">

        <a class="brand" href="/" aria-label="CJ Travels home">
          <img src="/images/logo-transparent.png" alt="CJ Travels" class="brand-logo" />
        </a>

        <nav class="nav-center" aria-label="Main navigation">
          <a href="/flights">Flights</a>
          <a href="/hotels">Hotels</a>
          <a href="/destinations">Destinations</a>
          <a href="/financing">Financing</a>
          <a href="/about" class="active" aria-current="page">About</a>
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
       MOBILE DRAWER (About active)
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
        <li><a class="nav-link" href="/hotels">Hotels <i class="bi bi-arrow-right"></i></a></li>
        <li><a class="nav-link" href="/destinations">Destinations <i class="bi bi-arrow-right"></i></a></li>
        <li><a class="nav-link" href="/financing">Financing <i class="bi bi-arrow-right"></i></a></li>
        <li><a class="nav-link active" href="/about">About <i class="bi bi-arrow-right"></i></a></li>
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
      <a href="mailto:info@cjtravelsowerri.com"><i class="bi bi-envelope"></i> info@cjtravelsowerri.com</a>
    </div>
  </aside>

  <main id="main">

    <!-- =========================================================
         HERO
         ========================================================= -->
    <section class="about-hero">
      <div class="container">
        <div class="hero-content">
          <span class="eyebrow">About CJ Travels</span>
          <h1>A travel agency built<br />around the <em>traveller</em>.</h1>
          <p class="hero-sub">
            CJ Travels is an online travel agency serving customers in Nigeria and internationally.
            We bring flights, hotels, destination guidance and travel financing into one clear place —
            with real people behind it when you need them.
          </p>
          <div class="hero-actions">
            <a href="/contact" class="btn-lux btn-lux-navy">
              Talk to our team <i class="bi bi-arrow-right arrow"></i>
            </a>
            <a href="#services" class="btn-lux btn-lux-ghost">Explore our services</a>
          </div>
        </div>

        <div class="hero-trust reveal">
          <div class="hero-trust-item">
            <i class="bi bi-globe2"></i>
            <div>
              <strong>Worldwide reach</strong>
              <span>Customers in Nigeria and internationally</span>
            </div>
          </div>
          <div class="hero-trust-item">
            <i class="bi bi-headset"></i>
            <div>
              <strong>Human support</strong>
              <span>Before, during and after your trip</span>
            </div>
          </div>
          <div class="hero-trust-item">
            <i class="bi bi-shield-check"></i>
            <div>
              <strong>Transparent pricing</strong>
              <span>No hidden fees, no surprises</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- =========================================================
         OUR STORY
         ========================================================= -->
    <section class="section bg-cream" id="story">
      <div class="container">
        <div class="split reveal">
          <div class="split-media">
            <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=1000&q=80"
                 alt="A travel planning team working together" loading="lazy" decoding="async"
                 onerror="this.style.opacity=0" />
            <div class="split-badge">
              <i class="bi bi-people"></i>
              <div>
                <strong>Travel consultants, not bots</strong>
                <span>Real people you can reach</span>
              </div>
            </div>
          </div>

          <div class="split-content prose">
            <span class="eyebrow">Our story</span>
            <h2>We started with a<br />simple <em>frustration</em>.</h2>

            <p class="prose-lead">
              Planning a trip should not mean juggling a dozen browser tabs, comparing prices that
              change every hour, and hoping the booking you just made is the one you actually wanted.
            </p>
            <p>
              CJ Travels exists to remove that friction. We bring flight search, hotel
              reservations and practical destination guidance together in one place, and we back it
              with consultants who can step in when a trip needs a human decision rather than a
              search filter.
            </p>
            <p>
              We serve travellers flying out of Nigeria and customers arriving from abroad, so our
              approach has to work across currencies, routes and time zones. That shapes everything
              we build: clear pricing shown up front, options organised the way travellers actually
              think about them, and support that does not disappear once a booking is confirmed.
            </p>
            <p>
              We are deliberately careful about what we promise. Where a figure is an estimate, we
              label it. Where a decision belongs to someone else — like a lending partner's
              assessment — we say so plainly.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- =========================================================
         MISSION & VISION
         ========================================================= -->
    <section class="section bg-cream-soft" id="mission">
      <div class="container">
        <div class="section-head reveal">
          <span class="eyebrow">What guides us</span>
          <h2>Our mission and <em>vision</em>.</h2>
          <p>Two simple statements that shape how we design the platform and how we treat every customer.</p>
        </div>

        <div class="mv-grid reveal">
          <div class="mv-card">
            <span class="mv-icon"><i class="bi bi-bullseye"></i></span>
            <h3>Our mission</h3>
            <p>
              To make travel simpler, clearer and more accessible — by giving travellers honest
              pricing, well-organised options and dependable human support at every stage of the
              journey.
            </p>
          </div>

          <div class="mv-card">
            <span class="mv-icon"><i class="bi bi-binoculars"></i></span>
            <h3>Our vision</h3>
            <p>
              A travel booking experience where nothing important is hidden: where people can plan
              with confidence, understand exactly what they are paying for, and reach a real person
              whenever it matters.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- =========================================================
         CORE VALUES
         ========================================================= -->
    <section class="section bg-cream" id="values">
      <div class="container">
        <div class="section-head reveal">
          <span class="eyebrow">Core values</span>
          <h2>How we work, <em>every day</em>.</h2>
          <p>These are the principles our team is measured against — internally and in every customer interaction.</p>
        </div>

        <div class="values-grid reveal">
          <div class="value-card">
            <span class="value-icon"><i class="bi bi-eye"></i></span>
            <h3>Transparency first</h3>
            <p>Prices, fees and limitations are shown up front. If something is an estimate or a demonstration, we say so.</p>
          </div>

          <div class="value-card">
            <span class="value-icon"><i class="bi bi-person-heart"></i></span>
            <h3>Human support</h3>
            <p>Travel problems rarely happen at convenient times. Our consultants stay reachable by phone, email and WhatsApp.</p>
          </div>

          <div class="value-card">
            <span class="value-icon"><i class="bi bi-list-check"></i></span>
            <h3>Care in the details</h3>
            <p>Dates, names, baggage allowances and cancellation terms matter. We check them so you do not have to discover them at the airport.</p>
          </div>

          <div class="value-card">
            <span class="value-icon"><i class="bi bi-lightbulb"></i></span>
            <h3>Practical expertise</h3>
            <p>We give advice grounded in real routes, real documents and real travel conditions — not generic marketing copy.</p>
          </div>

          <div class="value-card">
            <span class="value-icon"><i class="bi bi-shield-lock"></i></span>
            <h3>Responsibility</h3>
            <p>We never ask for bank passwords or card PINs, and we are clear that financing decisions belong to licensed lending partners.</p>
          </div>

          <div class="value-card">
            <span class="value-icon"><i class="bi bi-hand-thumbs-up"></i></span>
            <h3>Respect for your money</h3>
            <p>We help you compare before you commit, and we do not push upgrades or add-ons you did not ask for.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- =========================================================
         WHY CHOOSE US
         ========================================================= -->
    <section class="section bg-cream-soft">
      <div class="container">
        <div class="split reveal">
          <div class="split-content">
            <span class="eyebrow">Why choose us</span>
            <h2>Reasons travellers stay with <em>CJ Travels</em>.</h2>
            <p style="color: var(--ink-soft); font-size: 15px; line-height: 1.75;">
              We compete on clarity and reliability rather than on claims. Here is what that means
              in practice.
            </p>

            <ul class="check-list">
              <li>
                <i class="bi bi-check2"></i>
                <div>
                  <strong>One place for the whole trip</strong>
                  <span>Flights, hotels, destination guidance and financing information sit together, so you are not stitching a trip together across five sites.</span>
                </div>
              </li>
              <li>
                <i class="bi bi-check2"></i>
                <div>
                  <strong>Local and international coverage</strong>
                  <span>Domestic Nigerian routes, regional African flights and long-haul international journeys are all part of the same search experience.</span>
                </div>
              </li>
              <li>
                <i class="bi bi-check2"></i>
                <div>
                  <strong>Pricing you can see in advance</strong>
                  <span>Fares and fees are shown before you commit. Nothing is added quietly at the end of the booking process.</span>
                </div>
              </li>
              <li>
                <i class="bi bi-check2"></i>
                <div>
                  <strong>Consultants who answer</strong>
                  <span>Reach a real person by phone, email or WhatsApp — including outside standard business hours.</span>
                </div>
              </li>
              <li>
                <i class="bi bi-check2"></i>
                <div>
                  <strong>Honest about what we are not</strong>
                  <span>We are a travel agency, not a lender and not an airline. Where a decision is made by a partner, we say so.</span>
                </div>
              </li>
            </ul>
          </div>

          <div class="split-media">
            <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=1000&q=80"
                 alt="A modern travel agency workspace" loading="lazy" decoding="async"
                 onerror="this.style.opacity=0" />
            <div class="split-badge">
              <i class="bi bi-patch-check"></i>
              <div>
                <strong>Clear, honest service</strong>
                <span>No hidden fees, no false promises</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- =========================================================
         SERVICES
         ========================================================= -->
    <section class="section bg-cream" id="services">
      <div class="container">
        <div class="section-head reveal">
          <span class="eyebrow">Our services</span>
          <h2>Three <em>core</em> services.</h2>
          <p>Everything else on the platform supports these three things done properly.</p>
        </div>

        <div class="services-grid reveal">

          <a class="service" href="/flights">
            <span class="service-icon"><i class="bi bi-airplane"></i></span>
            <h3>Flights</h3>
            <p>
              Compare fares across local and international airlines, filter by stops, price and
              departure time, and review every flight detail before you choose.
            </p>
            <span class="link-arrow">Search flights <i class="bi bi-arrow-right"></i></span>
          </a>

          <a class="service" href="/hotels">
            <span class="service-icon"><i class="bi bi-building"></i></span>
            <h3>Hotels</h3>
            <p>
              Browse hotels, boutique properties, resorts and serviced apartments — filtered by
              price, star category, amenities and accommodation type.
            </p>
            <span class="link-arrow">Search hotels <i class="bi bi-arrow-right"></i></span>
          </a>

          <a class="service" href="/financing">
            <span class="service-icon"><i class="bi bi-wallet2"></i></span>
            <h3>Travel financing</h3>
            <p>
              Explore illustrative repayment scenarios and submit an enquiry to be assessed by an
              independent licensed lending partner.
            </p>
            <span class="link-arrow">Explore financing <i class="bi bi-arrow-right"></i></span>
          </a>

        </div>

        <div class="service-note reveal">
          <i class="bi bi-info-circle"></i>
          <div>
            Flight and hotel results on this website currently use demonstration data while our
            booking engine is being connected. Travel financing is provided by independent licensed
            lending partners and is subject to their eligibility assessment and approval.
            CJ Travels does not lend money or guarantee approval.
          </div>
        </div>
      </div>
    </section>

    <!-- =========================================================
         STATS (PLACEHOLDERS)
         ========================================================= -->
    <section class="stats-section" id="stats">
      <div class="container">
        <div class="section-head reveal">
          <span class="eyebrow light">Company statistics</span>
          <h2>Figures we will publish<br />once <em>verified</em>.</h2>
          <p>
            We would rather show nothing than show a number we cannot stand behind. The metrics below
            are placeholders and will be replaced with verified figures.
          </p>
        </div>

        <div class="stats-grid reveal">
          <div class="stat-card">
            <span class="stat-value" aria-hidden="true">&mdash;</span>
            <span class="stat-label">Travellers served</span>
            <span class="stat-pill">Placeholder</span>
          </div>

          <div class="stat-card">
            <span class="stat-value" aria-hidden="true">&mdash;</span>
            <span class="stat-label">Destinations covered</span>
            <span class="stat-pill">Placeholder</span>
          </div>

          <div class="stat-card">
            <span class="stat-value" aria-hidden="true">&mdash;</span>
            <span class="stat-label">Airline &amp; hotel partners</span>
            <span class="stat-pill">Placeholder</span>
          </div>

          <div class="stat-card">
            <span class="stat-value" aria-hidden="true">&mdash;</span>
            <span class="stat-label">Average support response</span>
            <span class="stat-pill">Placeholder</span>
          </div>
        </div>

        <div class="stats-note reveal">
          <i class="bi bi-clipboard-check"></i>
          <div>
            <strong>Why these are empty.</strong>
            We only publish statistics once they have been verified and can be substantiated. These
            cards are structural placeholders — not achievements, awards, customer counts or
            partnership claims. No awards, certifications or partner agreements are asserted anywhere
            on this page.
          </div>
        </div>
      </div>
    </section>

    <!-- =========================================================
         FAQ
         ========================================================= -->
    <section class="section bg-cream-soft" id="faq">
      <div class="container">
        <div class="section-head reveal">
          <span class="eyebrow">Questions</span>
          <h2>Frequently asked <em>questions</em>.</h2>
          <p>Straight answers about who we are and how the platform works today.</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-9">
            <div class="accordion faq-accordion reveal" id="faqAccordion">

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse"
                          data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                    What does CJ Travels actually do?
                  </button>
                </h3>
                <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    We are an online travel agency. We help travellers search flights, reserve hotel
                    stays, explore destinations, manage bookings and understand travel financing
                    options — with human support available throughout.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                    Are the flight and hotel prices shown on this site live?
                  </button>
                </h3>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Not yet. The flight and hotel pages currently show clearly-labelled demonstration
                    data while our booking engine is being connected. Nothing on those pages represents
                    live availability, and no reservation is created from them.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                    Is CJ Travels a lender?
                  </button>
                </h3>
                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    No. We are a travel agency, not a lender. Travel financing is provided by
                    independent, licensed lending partners who carry out their own eligibility and
                    affordability assessments and set their own terms. CJ Travels does not approve,
                    decline or guarantee any application.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                    Do you ever ask for bank passwords or card PINs?
                  </button>
                </h3>
                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Never. CJ Travels will not ask for your bank password, card PIN, one-time
                    password (OTP) or online banking login. If anyone requests these while claiming to
                    represent us, do not share them and contact us immediately.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                    Do you serve customers outside Nigeria?
                  </button>
                </h3>
                <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Yes. We serve travellers flying out of Nigeria as well as customers arriving from
                    abroad. Our destination guides and search tools are built for international routes
                    and multiple currencies.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#faq6" aria-expanded="false" aria-controls="faq6">
                    How do I reach a consultant?
                  </button>
                </h3>
                <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    You can call or email us using the details in the footer and on our contact page,
                    or reach us by WhatsApp. Our team can help with routes, fares, travel documents and
                    changes to existing bookings.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#faq7" aria-expanded="false" aria-controls="faq7">
                    Why are the statistics on this page blank?
                  </button>
                </h3>
                <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Because we have not yet verified them. We would rather show a labelled placeholder
                    than an unverified figure. Those cards will be updated with substantiated numbers
                    once they are available.
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- =========================================================
         CTA
         ========================================================= -->
    <section class="cta">
      <div class="container">
        <div class="cta-inner reveal">
          <div>
            <span class="eyebrow light">Get in touch</span>
            <h2>Have a question or a<br />trip to <em>plan</em>?</h2>
            <p>
              Our consultants are happy to help with routes, fares, hotel options, travel documents
              and financing enquiries. There is no obligation — just a conversation.
            </p>
            <div class="cta-contact-list">
              <a href="tel:+2348080452890"><i class="bi bi-telephone"></i> 0808 045 2890</a>
              <a href="mailto:info@cjtravelsowerri.com"><i class="bi bi-envelope"></i> info@cjtravelsowerri.com</a>
            </div>
          </div>
          <div class="cta-actions">
            <a href="/contact" class="btn-lux btn-lux-gold">
              Contact us <i class="bi bi-arrow-right arrow"></i>
            </a>
            <a href="faq.html" class="btn-lux btn-lux-outline-light">
              Read the FAQ
            </a>
          </div>
        </div>
      </div>
    </section>

  </main>

  <!-- =========================================================
       FOOTER (matched to index.html)
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

      /* 1. STICKY HEADER */
      var header = document.getElementById('siteHeader');
      if (header) {
        var onScroll = function () {
          header.classList.toggle('scrolled', window.scrollY > 8);
        };
        onScroll();
        window.addEventListener('scroll', onScroll, { passive: true });
      }

      /* 2. MOBILE DRAWER */
      var toggle   = document.getElementById('mobileToggle');
      var closeBtn = document.getElementById('mobileClose');
      var drawer   = document.getElementById('mobileNav');
      var overlay  = document.getElementById('mobileOverlay');

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

      /* 3. YEAR */
      document.querySelectorAll('[data-year]').forEach(function (node) {
        node.textContent = new Date().getFullYear();
      });

      /* 4. SCROLL REVEAL */
      var revealEls = document.querySelectorAll('.reveal');
      if ('IntersectionObserver' in window && revealEls.length) {
        var observer = new IntersectionObserver(function (entries) {
          entries.forEach(function (entry) {
            if (entry.isIntersecting) {
              entry.target.classList.add('is-visible');
              observer.unobserve(entry.target);
            }
          });
        }, { threshold: 0.12, rootMargin: '0px 0px -60px 0px' });
        revealEls.forEach(function (el) { observer.observe(el); });
      } else {
        revealEls.forEach(function (el) { el.classList.add('is-visible'); });
      }

      /* 5. IMAGE FALLBACK */
      document.querySelectorAll('.split-media img').forEach(function (img) {
        img.addEventListener('error', function () { img.style.opacity = '0'; });
      });

      /* 6. NEWSLETTER */
      var newsletterForm = document.getElementById('newsletterForm');
      var newsletterStatus = document.getElementById('newsletterStatus');
      if (newsletterForm) {
        newsletterForm.addEventListener('submit', function (event) {
          event.preventDefault();
          var email = document.getElementById('newsletterEmail').value.trim();
          var pattern = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;
          if (!pattern.test(email)) {
            newsletterStatus.textContent = 'Please enter a valid email address.';
            newsletterStatus.className = 'newsletter-status show error';
            return;
          }
          newsletterStatus.textContent = 'Thank you — please check ' + email + ' to confirm.';
          newsletterStatus.className = 'newsletter-status show success';
          newsletterForm.reset();
        });
      }

    })();
  </script>
</body>
</html>