(function () {
  'use strict';

  var STORAGE_KEY_DATA = 'travelbookings_customer_data_v1';

  var INITIAL_DATA = {
        customer: {
          name: 'Adaeze Okonkwo', firstName: 'Adaeze', initials: 'AO',
          email: 'adaeze.okonkwo@example.com', phone: '+234 812 345 6789',
          country: 'Nigeria', memberSince: 'January 2024', tier: 'Gold member'
        },
        flights: [
          { id: 'f1', ref: 'TBF-2201', kind: 'flight', airline: 'British Airways', flightNo: 'BA 074',
            from: 'Lagos (LOS)', to: 'London (LHR)', date: '2025-12-14', time: '23:10', arrival: '05:50',
            duration: '7h 40m', stops: 'Direct', cabin: 'Economy', passengers: '1 adult',
            status: 'Confirmed', price: 1150000 },
          { id: 'f2', ref: 'TBF-2202', kind: 'flight', airline: 'Emirates', flightNo: 'EK 786',
            from: 'Abuja (ABV)', to: 'Dubai (DXB)', date: '2025-12-28', time: '17:25', arrival: '23:45',
            duration: '9h 20m', stops: '1 stop', cabin: 'Economy', passengers: '2 adults',
            status: 'Pending', price: 980000 },
          { id: 'f3', ref: 'TBF-2203', kind: 'flight', airline: 'Kenya Airways', flightNo: 'KQ 533',
            from: 'Lagos (LOS)', to: 'Cape Town (CPT)', date: '2026-01-05', time: '05:20', arrival: '14:30',
            duration: '13h 10m', stops: '1 stop', cabin: 'Premium Economy', passengers: '1 adult',
            status: 'Confirmed', price: 875000 },
          { id: 'f4', ref: 'TBF-2195', kind: 'flight', airline: 'Virgin Atlantic', flightNo: 'VS 652',
            from: 'London (LHR)', to: 'Lagos (LOS)', date: '2025-11-22', time: '14:50', arrival: '22:10',
            duration: '6h 20m', stops: 'Direct', cabin: 'Economy', passengers: '1 adult',
            status: 'Completed', price: 890000 }
        ],
        hotels: [
          { id: 'h1', ref: 'TBH-1180', kind: 'hotel', property: 'The Wheatbaker', location: 'Ikoyi, Lagos',
            checkin: '2025-12-14', checkout: '2025-12-17', nights: 3, guests: '2 guests', rooms: '1 room',
            roomType: 'Deluxe Room', status: 'Confirmed', price: 555000 },
          { id: 'h2', ref: 'TBH-1181', kind: 'hotel', property: 'Atlantis The Palm', location: 'Palm Jumeirah, Dubai',
            checkin: '2025-12-28', checkout: '2026-01-02', nights: 5, guests: '2 guests', rooms: '1 room',
            roomType: 'Deluxe Room', status: 'Pending', price: 1450000 },
          { id: 'h3', ref: 'TBH-1175', kind: 'hotel', property: 'The Hoxton Shoreditch', location: 'Shoreditch, London',
            checkin: '2025-11-20', checkout: '2025-11-23', nights: 3, guests: '1 guest', rooms: '1 room',
            roomType: 'Standard Room', status: 'Completed', price: 525000 }
        ],
        financing: [
          { id: 'fin1', ref: 'TBFIN-0452', kind: 'financing', amount: 750000, period: '6 months',
            purpose: 'Leisure / holiday', submitted: '2025-11-10', status: 'In review',
            note: 'Awaiting assessment by an independent licensed lending partner.' },
          { id: 'fin2', ref: 'TBFIN-0453', kind: 'financing', amount: 1200000, period: '12 months',
            purpose: 'Business travel', submitted: '2025-11-15', status: 'Draft',
            note: 'Draft enquiry — not yet submitted to a lending partner.' }
        ],
        payments: [
          { id: 'p1', ref: 'PAY-9001', kind: 'payment', related: 'TBF-2201', method: 'Card ending 4821',
            date: '2025-11-12', amount: 1150000, status: 'Paid' },
          { id: 'p2', ref: 'PAY-9002', kind: 'payment', related: 'TBH-1180', method: 'Bank transfer',
            date: '2025-11-12', amount: 555000, status: 'Paid' },
          { id: 'p3', ref: 'PAY-9003', kind: 'payment', related: 'TBF-2202', method: 'Card ending 4821',
            date: '2025-11-16', amount: 980000, status: 'Pending' },
          { id: 'p4', ref: 'PAY-9004', kind: 'payment', related: 'TBF-2195', method: 'Card ending 4821',
            date: '2025-10-18', amount: 890000, status: 'Paid' }
        ],
        activities: [
          { icon: 'bi-check2-circle', tone: 'green', title: 'Flight booking confirmed',
            text: 'TBF-2201 · Lagos → London · British Airways BA 074', time: '2h ago' },
          { icon: 'bi-credit-card-2-front-fill', tone: '', title: 'Payment received',
            text: 'PAY-9001 · ₦1,150,000 for TBF-2201', time: 'Yesterday' },
          { icon: 'bi-building-fill', tone: 'gold', title: 'Hotel reservation updated',
            text: 'TBH-1180 · The Wheatbaker · check-in 14 Dec', time: '3d ago' },
          { icon: 'bi-cash-coin', tone: 'grey', title: 'Financing enquiry submitted',
            text: 'TBFIN-0452 · ₦750,000 over 6 months · in review', time: '5d ago' },
          { icon: 'bi-airplane-fill', tone: '', title: 'Flight booking created',
            text: 'TBF-2203 · Lagos → Cape Town · Kenya Airways KQ 533', time: '1w ago' }
        ]
      };

  function loadData() {
    try {
      var stored = localStorage.getItem(STORAGE_KEY_DATA);
      if (stored) {
        var parsed = JSON.parse(stored);
        if (parsed && parsed.customer && parsed.flights) return parsed;
      }
    } catch (e) {
      console.warn('Could not read customer data from localStorage:', e);
    }
    return JSON.parse(JSON.stringify(INITIAL_DATA));
  }

  function saveData() {
    try {
      localStorage.setItem(STORAGE_KEY_DATA, JSON.stringify(DATA));
    } catch (e) {
      console.warn('Could not save customer data to localStorage:', e);
    }
  }

  var DATA = loadData();

  function $(id) { return document.getElementById(id); }

  function escapeHTML(str) {
    return String(str == null ? '' : str).replace(/[&<>"']/g, function (ch) {
      return { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;' }[ch];
    });
  }

  function formatMoney(value) {
    return new Intl.NumberFormat('en-NG', {
      style: 'currency', currency: 'NGN', maximumFractionDigits: 0
    }).format(value || 0);
  }

  function formatDate(iso) {
    if (!iso) { return '—'; }
    var d = new Date(iso + 'T00:00:00');
    return d.toLocaleDateString('en-GB', { day: 'numeric', month: 'short', year: 'numeric' });
  }

  function dayMonth(iso) {
    var d = new Date(iso + 'T00:00:00');
    return {
      month: d.toLocaleDateString('en-GB', { month: 'short' }),
      day: String(d.getDate()).padStart(2, '0')
    };
  }

  function statusPill(status) {
    var map = {
      'Confirmed': { cls: 'status-confirmed', icon: 'bi-check-circle-fill' },
      'Pending':   { cls: 'status-pending',   icon: 'bi-clock-fill' },
      'Completed': { cls: 'status-completed', icon: 'bi-check2-all' },
      'Cancelled': { cls: 'status-cancelled', icon: 'bi-x-circle-fill' },
      'In review': { cls: 'status-inreview',  icon: 'bi-hourglass-split' },
      'Draft':     { cls: 'status-draft',     icon: 'bi-pencil-fill' },
      'Paid':      { cls: 'status-paid',      icon: 'bi-check-circle-fill' },
      'Upcoming':  { cls: 'status-upcoming',  icon: 'bi-calendar-event-fill' }
    };
    var meta = map[status] || { cls: 'status-completed', icon: 'bi-dot' };
    return '<span class="status ' + meta.cls + '"><i class="bi ' + meta.icon + '"></i> ' +
           escapeHTML(status) + '</span>';
  }

  /* RENDERING */
  function renderUpcomingTrips() {
    var host = $('upcomingTrips');
    if (!host) { return; }
    var trips = [
      { kind: 'flight', date: '2025-12-14', title: 'Lagos → London',
        subtitle: 'British Airways BA 074 · 1 adult', countdown: 'In 12 days',
        status: 'Confirmed', ref: 'TBF-2201' },
      { kind: 'hotel', date: '2025-12-14', title: 'The Wheatbaker, Lagos',
        subtitle: '3 nights · 2 guests · Deluxe Room', countdown: 'In 12 days',
        status: 'Confirmed', ref: 'TBH-1180' },
      { kind: 'flight', date: '2025-12-28', title: 'Abuja → Dubai',
        subtitle: 'Emirates EK 786 · 2 adults', countdown: 'In 26 days',
        status: 'Pending', ref: 'TBF-2202' }
    ];

    host.innerHTML = trips.map(function (trip) {
      var d = dayMonth(trip.date);
      var icon = trip.kind === 'flight' ? 'bi-airplane-fill' : 'bi-building-fill';
      return (
        '<div class="trip-card">' +
          '<div class="trip-date">' +
            '<span class="m">' + escapeHTML(d.month) + '</span>' +
            '<span class="d">' + escapeHTML(d.day) + '</span>' +
          '</div>' +
          '<div class="trip-body">' +
            '<strong><i class="bi ' + icon + '" style="color:var(--gold);font-size:.85rem;margin-right:.4rem;"></i>' +
              escapeHTML(trip.title) + '</strong>' +
            '<span>' + escapeHTML(trip.subtitle) + '</span>' +
            '<span style="font-size:11px;color:var(--muted);letter-spacing:.14em;text-transform:uppercase;margin-top:6px;">' +
              escapeHTML(trip.ref) + '</span>' +
          '</div>' +
          '<div class="trip-side">' +
            '<span class="trip-countdown">' + escapeHTML(trip.countdown) + '</span>' +
            statusPill(trip.status) +
          '</div>' +
        '</div>'
      );
    }).join('');
  }

  function renderActivity() {
    var host = $('activityList');
    if (!host) { return; }
    host.innerHTML = DATA.activities.map(function (item) {
      var toneClass = item.tone ? ' ' + item.tone : '';
      return (
        '<li class="activity-item">' +
          '<span class="activity-icon' + toneClass + '"><i class="bi ' + item.icon + '"></i></span>' +
          '<div class="activity-body">' +
            '<strong>' + escapeHTML(item.title) + '</strong>' +
            '<span>' + escapeHTML(item.text) + '</span>' +
          '</div>' +
          '<span class="activity-time">' + escapeHTML(item.time) + '</span>' +
        '</li>'
      );
    }).join('');
  }

  function renderRecentBookings() {
    var host = $('recentBookingsBody');
    if (!host) { return; }
    var flights = DATA.flights.map(function (f) {
      return { kind: 'flight', id: f.id, ref: f.ref,
        label: f.airline + ' ' + f.flightNo, detail: f.from + ' → ' + f.to,
        date: f.date, amount: f.price, status: f.status };
    });
    var hotels = DATA.hotels.map(function (h) {
      return { kind: 'hotel', id: h.id, ref: h.ref,
        label: h.property, detail: h.location,
        date: h.checkin, amount: h.price, status: h.status };
    });
    var rows = flights.concat(hotels)
      .sort(function (a, b) { return a.date < b.date ? 1 : -1; })
      .slice(0, 5);

    host.innerHTML = rows.map(function (row) {
      var icon = row.kind === 'flight' ? 'bi-airplane-fill' : 'bi-building-fill';
      return (
        '<tr>' +
          '<td data-label="Reference"><span class="cell-mono">' + escapeHTML(row.ref) + '</span></td>' +
          '<td data-label="Booking">' +
            '<span class="cell-strong"><i class="bi ' + icon +
              '" style="color:var(--gold);font-size:.78rem;margin-right:.4rem;"></i>' +
              escapeHTML(row.label) + '</span>' +
            '<span class="cell-sub">' + escapeHTML(row.detail) + '</span>' +
          '</td>' +
          '<td data-label="Travel date"><span class="cell-strong">' + escapeHTML(formatDate(row.date)) + '</span></td>' +
          '<td data-label="Amount"><span class="cell-mono">' + escapeHTML(formatMoney(row.amount)) + '</span></td>' +
          '<td data-label="Status">' + statusPill(row.status) + '</td>' +
          '<td class="text-end">' +
            '<button type="button" class="btn btn-ghost btn-sm js-details" ' +
              'data-kind="' + row.kind + '" data-id="' + escapeHTML(row.id) + '">' +
              'View <i class="bi bi-arrow-right"></i>' +
            '</button>' +
          '</td>' +
        '</tr>'
      );
    }).join('');
  }

  function renderFlightsTable() {
    var host = $('flightsTableBody');
    if (!host) { return; }
    host.innerHTML = DATA.flights.map(function (f) {
      return (
        '<tr>' +
          '<td data-label="Reference"><span class="cell-mono">' + escapeHTML(f.ref) + '</span></td>' +
          '<td data-label="Airline & flight">' +
            '<span class="cell-strong">' + escapeHTML(f.airline) + '</span>' +
            '<span class="cell-sub">' + escapeHTML(f.flightNo) + ' · ' + escapeHTML(f.cabin) + '</span>' +
          '</td>' +
          '<td data-label="Route">' +
            '<span class="cell-strong">' + escapeHTML(f.from) + ' → ' + escapeHTML(f.to) + '</span>' +
            '<span class="cell-sub">' + escapeHTML(f.stops) + ' · ' + escapeHTML(f.duration) + '</span>' +
          '</td>' +
          '<td data-label="Departure">' +
            '<span class="cell-strong">' + escapeHTML(formatDate(f.date)) + '</span>' +
            '<span class="cell-sub">' + escapeHTML(f.time) + '</span>' +
          '</td>' +
          '<td data-label="Amount"><span class="cell-mono">' + escapeHTML(formatMoney(f.price)) + '</span></td>' +
          '<td data-label="Status">' + statusPill(f.status) + '</td>' +
          '<td class="text-end">' +
            '<button type="button" class="btn btn-ghost btn-sm js-details" ' +
              'data-kind="flight" data-id="' + escapeHTML(f.id) + '">Details</button>' +
          '</td>' +
        '</tr>'
      );
    }).join('');
    var counter = $('flightTableCount');
    if (counter) { counter.textContent = DATA.flights.length + ' records'; }
  }

  function renderHotelsTable() {
    var host = $('hotelsTableBody');
    if (!host) { return; }
    host.innerHTML = DATA.hotels.map(function (h) {
      return (
        '<tr>' +
          '<td data-label="Reference"><span class="cell-mono">' + escapeHTML(h.ref) + '</span></td>' +
          '<td data-label="Property">' +
            '<span class="cell-strong">' + escapeHTML(h.property) + '</span>' +
            '<span class="cell-sub">' + escapeHTML(h.roomType) + '</span>' +
          '</td>' +
          '<td data-label="Location"><span class="cell-strong">' + escapeHTML(h.location) + '</span></td>' +
          '<td data-label="Stay">' +
            '<span class="cell-strong">' + escapeHTML(formatDate(h.checkin)) + '</span>' +
            '<span class="cell-sub">' + h.nights + ' nights · ' + escapeHTML(h.guests) + '</span>' +
          '</td>' +
          '<td data-label="Amount"><span class="cell-mono">' + escapeHTML(formatMoney(h.price)) + '</span></td>' +
          '<td data-label="Status">' + statusPill(h.status) + '</td>' +
          '<td class="text-end">' +
            '<button type="button" class="btn btn-ghost btn-sm js-details" ' +
              'data-kind="hotel" data-id="' + escapeHTML(h.id) + '">Details</button>' +
          '</td>' +
        '</tr>'
      );
    }).join('');
    var counter = $('hotelTableCount');
    if (counter) { counter.textContent = DATA.hotels.length + ' records'; }
  }

  function renderFinancingTable() {
    var host = $('financingTableBody');
    if (!host) { return; }
    host.innerHTML = DATA.financing.map(function (f) {
      return (
        '<tr>' +
          '<td data-label="Reference"><span class="cell-mono">' + escapeHTML(f.ref) + '</span></td>' +
          '<td data-label="Amount requested"><span class="cell-mono">' + escapeHTML(formatMoney(f.amount)) + '</span></td>' +
          '<td data-label="Period"><span class="cell-strong">' + escapeHTML(f.period) + '</span></td>' +
          '<td data-label="Purpose"><span class="cell-strong">' + escapeHTML(f.purpose) + '</span></td>' +
          '<td data-label="Submitted"><span class="cell-strong">' + escapeHTML(formatDate(f.submitted)) + '</span></td>' +
          '<td data-label="Status">' + statusPill(f.status) + '</td>' +
          '<td class="text-end">' +
            '<button type="button" class="btn btn-ghost btn-sm js-details" ' +
              'data-kind="financing" data-id="' + escapeHTML(f.id) + '">Details</button>' +
          '</td>' +
        '</tr>'
      );
    }).join('');
    var counter = $('financingTableCount');
    if (counter) { counter.textContent = DATA.financing.length + ' records'; }
  }

  function renderPaymentsTable() {
    var host = $('paymentsTableBody');
    if (!host) { return; }
    host.innerHTML = DATA.payments.map(function (p) {
      return (
        '<tr>' +
          '<td data-label="Reference"><span class="cell-mono">' + escapeHTML(p.ref) + '</span></td>' +
          '<td data-label="Related booking"><span class="cell-strong">' + escapeHTML(p.related) + '</span></td>' +
          '<td data-label="Method"><span class="cell-strong">' + escapeHTML(p.method) + '</span></td>' +
          '<td data-label="Date"><span class="cell-strong">' + escapeHTML(formatDate(p.date)) + '</span></td>' +
          '<td data-label="Amount"><span class="cell-mono">' + escapeHTML(formatMoney(p.amount)) + '</span></td>' +
          '<td data-label="Status">' + statusPill(p.status) + '</td>' +
          '<td class="text-end">' +
            '<button type="button" class="btn btn-ghost btn-sm js-details" ' +
              'data-kind="payment" data-id="' + escapeHTML(p.id) + '">Details</button>' +
          '</td>' +
        '</tr>'
      );
    }).join('');
    var counter = $('paymentTableCount');
    if (counter) { counter.textContent = DATA.payments.length + ' records'; }
  }

  function renderCounts() {
    var fc = DATA.flights.length;
    var hc = DATA.hotels.length;
    var fnic = DATA.financing.length;
    var sf = $('statFlights'), sh = $('statHotels'), sfi = $('statFinancing');
    var nf = $('navFlightCount'), nh = $('navHotelCount'), nfi = $('navFinancingCount');
    if (sf) sf.textContent = String(fc);
    if (sh) sh.textContent = String(hc);
    if (sfi) sfi.textContent = String(fnic);
    if (nf) nf.textContent = String(fc);
    if (nh) nh.textContent = String(hc);
    if (nfi) nfi.textContent = String(fnic);
  }

  /* DETAIL MODAL */
  var detailModalEl = $('detailModal');
  var detailBody = $('detailModalBody');
  var detailTitle = $('detailModalTitle');
  var modalAction = $('modalDemoAction');

  function findRecord(kind, id) {
    var list = DATA[kind + 's'] || DATA[kind] || [];
    if (!Array.isArray(list)) list = [];
    for (var i = 0; i < list.length; i++) {
      if (list[i].id === id) { return list[i]; }
    }
    return null;
  }

  function detailItem(label, value) {
    return (
      '<div class="detail-item">' +
        '<span>' + escapeHTML(label) + '</span>' +
        '<strong>' + escapeHTML(value) + '</strong>' +
      '</div>'
    );
  }

  function openDetail(kind, id) {
    if (!detailModalEl || !detailTitle || !detailBody) return;
    var record = findRecord(kind, id);
    if (!record) { return; }

    var heroIcon = 'bi-airplane-fill';
    var heroTitle = '', heroSub = '', grid = '';

    if (kind === 'flight') {
      detailTitle.textContent = 'Flight booking details';
      heroIcon = 'bi-airplane-fill';
      heroTitle = record.from + ' → ' + record.to;
      heroSub = record.airline + ' ' + record.flightNo + ' · ' + record.ref;
      grid =
        detailItem('Reference', record.ref) +
        detailItem('Airline', record.airline) +
        detailItem('Flight number', record.flightNo) +
        detailItem('Cabin', record.cabin) +
        detailItem('Departure date', formatDate(record.date)) +
        detailItem('Departure time', record.time) +
        detailItem('Arrival time', record.arrival) +
        detailItem('Duration', record.duration) +
        detailItem('Stops', record.stops) +
        detailItem('Passengers', record.passengers) +
        detailItem('Amount', formatMoney(record.price)) +
        detailItem('Status', record.status);
    }
    if (kind === 'hotel') {
      detailTitle.textContent = 'Hotel reservation details';
      heroIcon = 'bi-building-fill';
      heroTitle = record.property;
      heroSub = record.location + ' · ' + record.ref;
      grid =
        detailItem('Reference', record.ref) +
        detailItem('Property', record.property) +
        detailItem('Location', record.location) +
        detailItem('Room type', record.roomType) +
        detailItem('Check-in', formatDate(record.checkin)) +
        detailItem('Check-out', formatDate(record.checkout)) +
        detailItem('Nights', record.nights + ' nights') +
        detailItem('Guests', record.guests) +
        detailItem('Rooms', record.rooms) +
        detailItem('Amount', formatMoney(record.price)) +
        detailItem('Status', record.status);
    }
    if (kind === 'financing') {
      detailTitle.textContent = 'Financing enquiry details';
      heroIcon = 'bi-cash-coin';
      heroTitle = formatMoney(record.amount) + ' over ' + record.period;
      heroSub = record.ref + ' · ' + record.purpose;
      grid =
        detailItem('Reference', record.ref) +
        detailItem('Amount requested', formatMoney(record.amount)) +
        detailItem('Repayment period', record.period) +
        detailItem('Purpose of travel', record.purpose) +
        detailItem('Submitted', formatDate(record.submitted)) +
        detailItem('Status', record.status);
    }
    if (kind === 'payment') {
      detailTitle.textContent = 'Payment details';
      heroIcon = 'bi-credit-card-2-front-fill';
      heroTitle = formatMoney(record.amount);
      heroSub = record.ref + ' · related to ' + record.related;
      grid =
        detailItem('Reference', record.ref) +
        detailItem('Related booking', record.related) +
        detailItem('Payment method', record.method) +
        detailItem('Payment date', formatDate(record.date)) +
        detailItem('Amount', formatMoney(record.amount)) +
        detailItem('Status', record.status);
    }

    var extraNote;
    if (kind === 'financing') {
      extraNote =
        '<p class="modal-note">' +
          '<i class="bi bi-shield-exclamation"></i>' +
          'This is a demonstration record only. Financing is provided by independent licensed ' +
          'lending partners and is subject to their eligibility assessment and approval. ' +
          'Travelbookings does not lend money or guarantee approval.' +
        '</p>';
    } else {
      extraNote =
        '<p class="modal-note">' +
          '<i class="bi bi-info-circle-fill"></i>' +
          'This is sample demonstration data. No real reservation, ticket or transaction exists ' +
          'for this record.' +
        '</p>';
    }

    detailBody.innerHTML =
      '<div class="detail-hero">' +
        '<span class="icon-box"><i class="bi ' + heroIcon + '"></i></span>' +
        '<span class="hero-text">' +
          '<strong>' + escapeHTML(heroTitle) + '</strong>' +
          '<span>' + escapeHTML(heroSub) + '</span>' +
        '</span>' +
        '<div>' + statusPill(record.status) + '</div>' +
      '</div>' +
      '<div class="detail-grid">' + grid + '</div>' +
      extraNote;

    bootstrap.Modal.getOrCreateInstance(detailModalEl).show();
  }

  document.addEventListener('click', function (event) {
    var btn = event.target.closest('.js-details');
    if (btn) {
      openDetail(btn.dataset.kind, btn.dataset.id);
      return;
    }

    var navTrigger = event.target.closest('[data-nav]');
    if (navTrigger) {
      var navName = navTrigger.dataset.nav;
      if (navName === 'logout') {
        var logoutModal = $('logoutModal');
        if (logoutModal) bootstrap.Modal.getOrCreateInstance(logoutModal).show();
      } else if (navName === 'overview') {
        window.location.href = 'dashboard.html';
      } else if (navName) {
        window.location.href = navName + '.html';
      }
    }
  });

  if (modalAction) {
    modalAction.addEventListener('click', function () {
      if (!detailBody) return;
      detailBody.insertAdjacentHTML('beforeend',
        '<p class="modal-note mt-3">' +
          '<i class="bi bi-info-circle-fill"></i>' +
          'Booking management is not connected yet. Changes, cancellations and document ' +
          'downloads will be available once the backend is live.' +
        '</p>');
      modalAction.disabled = true;
    });
  }

  if (detailModalEl && modalAction) {
    detailModalEl.addEventListener('show.bs.modal', function () {
      modalAction.disabled = false;
      modalAction.textContent = 'Manage booking';
    });
  }

  if ($('notificationsBtn')) {
    $('notificationsBtn').addEventListener('click', function () {
      if (!detailModalEl || !detailTitle || !detailBody) return;
      detailTitle.textContent = 'Notifications';
      detailBody.innerHTML =
        '<p style="font-size:14px;color:var(--ink-soft);margin-bottom:20px;line-height:1.7;">' +
          'You have <strong style="color:var(--navy);">3</strong> demonstration notifications:' +
        '</p>' +
        '<ul class="activity-list">' +
          '<li class="activity-item">' +
            '<span class="activity-icon green"><i class="bi bi-check2-circle"></i></span>' +
            '<div class="activity-body"><strong>Flight booking confirmed</strong>' +
              '<span>TBF-2201 · Lagos → London</span></div>' +
            '<span class="activity-time">2h ago</span>' +
          '</li>' +
          '<li class="activity-item">' +
            '<span class="activity-icon"><i class="bi bi-credit-card-2-front-fill"></i></span>' +
            '<div class="activity-body"><strong>Payment received</strong>' +
              '<span>PAY-9001 · ₦1,150,000</span></div>' +
            '<span class="activity-time">1d ago</span>' +
          '</li>' +
          '<li class="activity-item">' +
            '<span class="activity-icon grey"><i class="bi bi-cash-coin"></i></span>' +
            '<div class="activity-body"><strong>Financing enquiry submitted</strong>' +
              '<span>TBFIN-0452 · in review</span></div>' +
            '<span class="activity-time">5d ago</span>' +
          '</li>' +
        '</ul>' +
        '<p class="modal-note mt-4">' +
          '<i class="bi bi-info-circle-fill"></i>' +
          'Notifications are demonstration data and are not generated by real activity.' +
        '</p>';
      if (modalAction) modalAction.disabled = true;
      bootstrap.Modal.getOrCreateInstance(detailModalEl).show();
    });
  }

  if ($('helpBtn')) {
    $('helpBtn').addEventListener('click', function () {
      window.location.href = '../contact.html';
    });
  }

  document.querySelectorAll('.setting-toggle').forEach(function (toggle) {
    toggle.addEventListener('change', function () {
      var row = toggle.closest('.setting-row');
      if (!row) { return; }
      var text = row.querySelector('.setting-row-text span');
      if (!text) { return; }
      if (!text.dataset.original) { text.dataset.original = text.textContent; }
      if (toggle.checked) { text.textContent = text.dataset.original; }
      else { text.textContent = 'Currently turned off (demo setting).'; }
    });
  });

  function initPage() {
    if ($('year')) $('year').textContent = new Date().getFullYear();
    renderCounts();
    if ($('upcomingTrips')) renderUpcomingTrips();
    if ($('activityList')) renderActivity();
    if ($('recentBookingsBody')) renderRecentBookings();
    if ($('flightsTableBody')) renderFlightsTable();
    if ($('hotelsTableBody')) renderHotelsTable();
    if ($('financingTableBody')) renderFinancingTable();
    if ($('paymentsTableBody')) renderPaymentsTable();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initPage);
  } else {
    initPage();
  }

})();
