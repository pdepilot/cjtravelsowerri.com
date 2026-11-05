(function () {
  'use strict';

  var STORAGE_KEY_DATA = 'travelbookings_admin_data_v1';
  var STORAGE_KEY_API  = 'travelbookings_admin_api_v1';

  var INITIAL_DATA = {
        customers: [
          { id: 'c1', firstName: 'Adaeze', lastName: 'Okonkwo', email: 'adaeze.okonkwo@example.com', phone: '+234 812 345 6789', country: 'Nigeria', joined: '2024-01-12', bookings: 7, status: 'Active' },
          { id: 'c2', firstName: 'Chinedu', lastName: 'Adeyemi', email: 'chinedu.adeyemi@example.com', phone: '+234 803 221 4410', country: 'Nigeria', joined: '2024-03-04', bookings: 4, status: 'Active' },
          { id: 'c3', firstName: 'Sarah', lastName: 'Mitchell', email: 'sarah.mitchell@example.com', phone: '+44 7700 900123', country: 'United Kingdom', joined: '2024-05-21', bookings: 3, status: 'Active' },
          { id: 'c4', firstName: 'Kwame', lastName: 'Mensah', email: 'kwame.mensah@example.com', phone: '+233 24 555 1122', country: 'Ghana', joined: '2024-06-09', bookings: 2, status: 'Active' },
          { id: 'c5', firstName: 'Fatima', lastName: 'Al-Hassan', email: 'fatima.alhassan@example.com', phone: '+971 50 123 4567', country: 'United Arab Emirates', joined: '2024-08-14', bookings: 5, status: 'Active' },
          { id: 'c6', firstName: 'Daniel', lastName: 'Ofori', email: 'daniel.ofori@example.com', phone: '+234 815 909 7788', country: 'Nigeria', joined: '2024-09-02', bookings: 1, status: 'Inactive' },
          { id: 'c7', firstName: 'Amara', lastName: 'Nwosu', email: 'amara.nwosu@example.com', phone: '+254 712 345 678', country: 'Kenya', joined: '2024-10-19', bookings: 3, status: 'Active' },
          { id: 'c8', firstName: 'Liam', lastName: 'Fraser', email: 'liam.fraser@example.com', phone: '+44 7700 900456', country: 'United Kingdom', joined: '2024-11-05', bookings: 2, status: 'Active' },
          { id: 'c9', firstName: 'Zainab', lastName: 'Bello', email: 'zainab.bello@example.com', phone: '+234 802 445 6677', country: 'Nigeria', joined: '2025-01-08', bookings: 1, status: 'Active' },
          { id: 'c10', firstName: 'Thabo', lastName: 'Mokoena', email: 'thabo.mokoena@example.com', phone: '+27 82 555 1234', country: 'South Africa', joined: '2025-02-11', bookings: 2, status: 'Inactive' }
        ],
        flights: [
          { id: 'f1', ref: 'TBF-2201', customerId: 'c1', airline: 'British Airways', flightNo: 'BA 074', from: 'Lagos (LOS)', to: 'London (LHR)', date: '2025-12-14', time: '23:10', cabin: 'Economy', amount: 1150000, status: 'Confirmed', continent: 'Europe' },
          { id: 'f2', ref: 'TBF-2202', customerId: 'c1', airline: 'Emirates', flightNo: 'EK 786', from: 'Abuja (ABV)', to: 'Dubai (DXB)', date: '2025-12-28', time: '17:25', cabin: 'Economy', amount: 980000, status: 'Pending', continent: 'Middle East' },
          { id: 'f3', ref: 'TBF-2203', customerId: 'c2', airline: 'Kenya Airways', flightNo: 'KQ 533', from: 'Lagos (LOS)', to: 'Cape Town (CPT)', date: '2026-01-05', time: '05:20', cabin: 'Premium Economy', amount: 875000, status: 'Confirmed', continent: 'Africa' },
          { id: 'f4', ref: 'TBF-2195', customerId: 'c3', airline: 'Virgin Atlantic', flightNo: 'VS 652', from: 'London (LHR)', to: 'Lagos (LOS)', date: '2025-11-22', time: '14:50', cabin: 'Economy', amount: 890000, status: 'Completed', continent: 'Africa' },
          { id: 'f5', ref: 'TBF-2204', customerId: 'c4', airline: 'Turkish Airlines', flightNo: 'TK 626', from: 'Accra (ACC)', to: 'Istanbul (IST)', date: '2026-01-19', time: '19:55', cabin: 'Economy', amount: 940000, status: 'Confirmed', continent: 'Europe' },
          { id: 'f6', ref: 'TBF-2205', customerId: 'c5', airline: 'Qatar Airways', flightNo: 'QR 1406', from: 'Dubai (DXB)', to: 'Lagos (LOS)', date: '2025-12-02', time: '13:05', cabin: 'Business', amount: 1890000, status: 'Completed', continent: 'Africa' },
          { id: 'f7', ref: 'TBF-2206', customerId: 'c7', airline: 'Ethiopian Airlines', flightNo: 'ET 900', from: 'Nairobi (NBO)', to: 'Lagos (LOS)', date: '2026-02-10', time: '11:40', cabin: 'Economy', amount: 620000, status: 'Cancelled', continent: 'Africa' },
          { id: 'f8', ref: 'TBF-2207', customerId: 'c8', airline: 'KLM', flightNo: 'KL 588', from: 'London (LHR)', to: 'Amsterdam (AMS)', date: '2025-12-20', time: '22:30', cabin: 'Economy', amount: 410000, status: 'Confirmed', continent: 'Europe' },
          { id: 'f9', ref: 'TBF-2208', customerId: 'c9', airline: 'Air Peace', flightNo: 'P4 7102', from: 'Lagos (LOS)', to: 'Accra (ACC)', date: '2026-01-14', time: '08:15', cabin: 'Economy', amount: 195000, status: 'Confirmed', continent: 'Africa' },
          { id: 'f10', ref: 'TBF-2209', customerId: 'c5', airline: 'Emirates', flightNo: 'EK 782', from: 'Dubai (DXB)', to: 'London (LHR)', date: '2026-03-04', time: '17:25', cabin: 'First Class', amount: 2750000, status: 'Pending', continent: 'Europe' }
        ],
        hotels: [
          { id: 'h1', ref: 'TBH-1180', customerId: 'c1', property: 'The Wheatbaker', location: 'Ikoyi, Lagos', checkIn: '2025-12-14', nights: 3, guests: '2 guests', roomType: 'Deluxe Room', amount: 555000, status: 'Confirmed', continent: 'Africa' },
          { id: 'h2', ref: 'TBH-1181', customerId: 'c1', property: 'Atlantis The Palm', location: 'Palm Jumeirah, Dubai', checkIn: '2025-12-28', nights: 5, guests: '2 guests', roomType: 'Deluxe Room', amount: 1450000, status: 'Pending', continent: 'Middle East' },
          { id: 'h3', ref: 'TBH-1175', customerId: 'c3', property: 'The Hoxton Shoreditch', location: 'Shoreditch, London', checkIn: '2025-11-20', nights: 3, guests: '1 guest', roomType: 'Standard Room', amount: 525000, status: 'Completed', continent: 'Europe' },
          { id: 'h4', ref: 'TBH-1182', customerId: 'c2', property: 'Eko Hotel & Suites', location: 'Victoria Island, Lagos', checkIn: '2026-01-05', nights: 2, guests: '2 guests', roomType: 'Standard Room', amount: 330000, status: 'Confirmed', continent: 'Africa' },
          { id: 'h5', ref: 'TBH-1183', customerId: 'c5', property: 'Rove Downtown', location: 'Downtown Dubai', checkIn: '2025-12-02', nights: 4, guests: '2 guests', roomType: 'Deluxe Room', amount: 380000, status: 'Completed', continent: 'Middle East' },
          { id: 'h6', ref: 'TBH-1184', customerId: 'c7', property: 'Radisson Blu Anchorage', location: 'Victoria Island, Lagos', checkIn: '2026-02-10', nights: 3, guests: '1 guest', roomType: 'Executive Suite', amount: 435000, status: 'Cancelled', continent: 'Africa' },
          { id: 'h7', ref: 'TBH-1185', customerId: 'c10', property: 'The Berkeley', location: 'Knightsbridge, London', checkIn: '2026-04-11', nights: 4, guests: '2 guests', roomType: 'Deluxe Room', amount: 1520000, status: 'Confirmed', continent: 'Europe' }
        ],
        loans: [
          { id: 'l1', ref: 'TBLN-0452', customerId: 'c1', amount: 750000, period: '6 months', purpose: 'Leisure / holiday', submitted: '2025-11-10', status: 'In review' },
          { id: 'l2', ref: 'TBLN-0453', customerId: 'c2', amount: 1200000, period: '12 months', purpose: 'Business travel', submitted: '2025-11-15', status: 'Awaiting documents' },
          { id: 'l3', ref: 'TBLN-0454', customerId: 'c5', amount: 2400000, period: '12 months', purpose: 'Leisure / holiday', submitted: '2025-11-18', status: 'Referred to partner' },
          { id: 'l4', ref: 'TBLN-0455', customerId: 'c7', amount: 480000, period: '3 months', purpose: 'Visiting family', submitted: '2025-11-21', status: 'Draft' },
          { id: 'l5', ref: 'TBLN-0456', customerId: 'c9', amount: 900000, period: '9 months', purpose: 'Education', submitted: '2025-11-24', status: 'In review' }
        ],
        destinations: [
          { id: 'd1', city: 'Cape Town', country: 'South Africa', continent: 'Africa', categories: ['Adventure', 'Beaches', 'City Breaks'], blurb: 'Where Table Mountain meets the Atlantic.', image: 'https://images.unsplash.com/photo-1580060839134-75a5edca2e99?auto=format&fit=crop&w=700&q=80', status: 'Active' },
          { id: 'd2', city: 'Paris', country: 'France', continent: 'Europe', categories: ['Culture', 'City Breaks', 'Luxury'], blurb: 'The classic city break, endlessly reimagined.', image: 'https://images.unsplash.com/photo-1502602898657-3e91760cbb34?auto=format&fit=crop&w=700&q=80', status: 'Active' },
          { id: 'd3', city: 'Dubai', country: 'United Arab Emirates', continent: 'Middle East', categories: ['Luxury', 'City Breaks'], blurb: 'Skyline ambition and desert calm.', image: 'https://images.unsplash.com/photo-1512453979798-5ea266f8880c?auto=format&fit=crop&w=700&q=80', status: 'Active' },
          { id: 'd4', city: 'Bali', country: 'Indonesia', continent: 'Asia', categories: ['Beaches', 'Adventure', 'Culture'], blurb: 'Rice terraces, surf breaks and temple mornings.', image: 'https://images.unsplash.com/photo-1537996194471-e657df975ab4?auto=format&fit=crop&w=700&q=80', status: 'Active' },
          { id: 'd5', city: 'Santorini', country: 'Greece', continent: 'Europe', categories: ['Beaches', 'Luxury', 'Culture'], blurb: 'Whitewashed cliffs above a volcanic caldera.', image: 'https://images.unsplash.com/photo-1570077188670-e3a8d69ac5ff?auto=format&fit=crop&w=700&q=80', status: 'Active' },
          { id: 'd6', city: 'Istanbul', country: 'Türkiye', continent: 'Middle East', categories: ['Culture', 'City Breaks'], blurb: 'Two continents, one skyline.', image: 'https://images.unsplash.com/photo-1524231757912-21f4fe3a7200?auto=format&fit=crop&w=700&q=80', status: 'Active' },
          { id: 'd7', city: 'Maldives', country: 'Maldives', continent: 'Asia', categories: ['Beaches', 'Luxury'], blurb: 'Overwater villas and impossibly clear lagoons.', image: 'https://images.unsplash.com/photo-1514282401047-d79a71a590e8?auto=format&fit=crop&w=700&q=80', status: 'Active' },
          { id: 'd8', city: 'Sydney', country: 'Australia', continent: 'Oceania', categories: ['City Breaks', 'Beaches'], blurb: 'Harbour views and coastal walks.', image: 'https://images.unsplash.com/photo-1506973035872-a4ec16b8e8d9?auto=format&fit=crop&w=700&q=80', status: 'Active' },
          { id: 'd9', city: 'New York', country: 'United States', continent: 'Americas', categories: ['City Breaks', 'Culture'], blurb: 'Five boroughs, endless energy.', image: 'https://images.unsplash.com/photo-1496442226666-8d4d0e62e6e9?auto=format&fit=crop&w=700&q=80', status: 'Inactive' }
        ],
        transactions: [
          { id: 't1', ref: 'PAY-9001', customerId: 'c1', related: 'TBF-2201', method: 'Card ending 4821', date: '2025-11-12', amount: 1150000, status: 'Paid' },
          { id: 't2', ref: 'PAY-9002', customerId: 'c1', related: 'TBH-1180', method: 'Bank transfer', date: '2025-11-12', amount: 555000, status: 'Paid' },
          { id: 't3', ref: 'PAY-9003', customerId: 'c1', related: 'TBF-2202', method: 'Card ending 4821', date: '2025-11-16', amount: 980000, status: 'Pending' },
          { id: 't4', ref: 'PAY-9004', customerId: 'c3', related: 'TBF-2195', method: 'Card ending 7712', date: '2025-10-18', amount: 890000, status: 'Paid' },
          { id: 't5', ref: 'PAY-9005', customerId: 'c2', related: 'TBF-2203', method: 'Bank transfer', date: '2025-11-20', amount: 875000, status: 'Paid' },
          { id: 't6', ref: 'PAY-9006', customerId: 'c5', related: 'TBF-2205', method: 'Card ending 3390', date: '2025-11-02', amount: 1890000, status: 'Paid' },
          { id: 't7', ref: 'PAY-9007', customerId: 'c7', related: 'TBF-2206', method: 'Card ending 5512', date: '2025-11-25', amount: 620000, status: 'Refunded' },
          { id: 't8', ref: 'PAY-9008', customerId: 'c10', related: 'TBH-1185', method: 'Card ending 8842', date: '2025-11-27', amount: 1520000, status: 'Failed' }
        ],
        activities: [
          { icon: 'bi-check2-circle', tone: 'green', title: 'Flight booking confirmed', text: 'TBF-2201 · Adaeze Okonkwo · Lagos → London', time: '18 min ago' },
          { icon: 'bi-person-plus-fill', tone: '', title: 'New customer registered', text: 'Zainab Bello · Nigeria', time: '42 min ago' },
          { icon: 'bi-credit-card-2-front-fill', tone: 'gold', title: 'Payment received', text: 'PAY-9005 · ₦875,000 · Chinedu Adeyemi', time: '1 hr ago' },
          { icon: 'bi-cash-coin', tone: 'violet', title: 'Financing enquiry submitted', text: 'TBLN-0454 · Fatima Al-Hassan · ₦2,400,000', time: '3 hrs ago' },
          { icon: 'bi-building-fill', tone: 'grey', title: 'Hotel reservation cancelled', text: 'TBH-1184 · Amara Nwosu · Lagos', time: '5 hrs ago' },
          { icon: 'bi-globe-americas', tone: '', title: 'Destination updated', text: 'Santorini · travel styles revised', time: 'Yesterday' }
        ],
        monthly: [
          { month: 'Jan', flights: 42, hotels: 27 },
          { month: 'Feb', flights: 38, hotels: 31 },
          { month: 'Mar', flights: 51, hotels: 36 },
          { month: 'Apr', flights: 47, hotels: 33 },
          { month: 'May', flights: 56, hotels: 41 },
          { month: 'Jun', flights: 63, hotels: 49 },
          { month: 'Jul', flights: 71, hotels: 55 },
          { month: 'Aug', flights: 68, hotels: 52 },
          { month: 'Sep', flights: 59, hotels: 45 },
          { month: 'Oct', flights: 64, hotels: 48 },
          { month: 'Nov', flights: 58, hotels: 43 },
          { month: 'Dec', flights: 74, hotels: 58 }
        ]
      };

  var INITIAL_state = {
        providers: [
          { id: 'fl-amadeus', name: 'Amadeus', category: 'Flight', baseUrl: 'https://test.travel.api.amadeus.com/v2', env: 'Sandbox', apiKeyMasked: '••••••••3f9a', secretMasked: '••••••••7b2c', enabled: true, status: 'Connected', lastTest: '2025-11-28T09:12:00' },
          { id: 'fl-sabre', name: 'Sabre', category: 'Flight', baseUrl: 'https://api.sabre.com/v2', env: 'Production', apiKeyMasked: '••••••••c412', secretMasked: '••••••••9d81', enabled: false, status: 'Error', lastTest: '2025-11-25T14:30:00' },
          { id: 'fl-travelport', name: 'Travelport', category: 'Flight', baseUrl: 'https://api.travelport.com/v1', env: 'Sandbox', apiKeyMasked: '••••••••ab7d', secretMasked: '', enabled: true, status: 'Untested', lastTest: null },
          { id: 'ht-hotelbeds', name: 'Hotelbeds', category: 'Hotel', baseUrl: 'https://api.test.hotelbeds.com', env: 'Sandbox', apiKeyMasked: '••••••••5e21', secretMasked: '••••••••fa63', enabled: true, status: 'Connected', lastTest: '2025-11-28T08:45:00' },
          { id: 'ht-expedia', name: 'Expedia Rapid', category: 'Hotel', baseUrl: 'https://test.api.expedia.com', env: 'Sandbox', apiKeyMasked: '••••••••7c9d', secretMasked: '••••••••2b4e', enabled: false, status: 'Untested', lastTest: null }
        ],
        logs: [
          { ts: '2025-11-28T09:12:00', provider: 'Amadeus', service: 'Flight', activity: 'Connection test', status: 'Success' },
          { ts: '2025-11-28T08:45:00', provider: 'Hotelbeds', service: 'Hotel', activity: 'Connection test', status: 'Success' },
          { ts: '2025-11-27T16:20:00', provider: 'Sabre', service: 'Flight', activity: 'Provider updated', status: 'Success' },
          { ts: '2025-11-25T14:30:00', provider: 'Sabre', service: 'Flight', activity: 'Connection test', status: 'Failed' },
          { ts: '2025-11-24T11:05:00', provider: 'Expedia Rapid', service: 'Hotel', activity: 'Provider added', status: 'Success' }
        ],
        editingId: null, editingCategory: 'Flight', deleteId: null, testing: {}
      };

  function loadData() {
    try {
      var stored = localStorage.getItem(STORAGE_KEY_DATA);
      if (stored) {
        var parsed = JSON.parse(stored);
        if (parsed && parsed.customers && parsed.flights) return parsed;
      }
    } catch (e) {
      console.warn('Could not read admin data from localStorage:', e);
    }
    return JSON.parse(JSON.stringify(INITIAL_DATA));
  }

  function saveData() {
    try {
      localStorage.setItem(STORAGE_KEY_DATA, JSON.stringify(DATA));
    } catch (e) {
      console.warn('Could not save admin data to localStorage:', e);
    }
  }

  function loadApiState() {
    try {
      var stored = localStorage.getItem(STORAGE_KEY_API);
      if (stored) {
        var parsed = JSON.parse(stored);
        if (parsed && parsed.providers && parsed.logs) {
          parsed.editingId = null;
          parsed.editingCategory = 'Flight';
          parsed.deleteId = null;
          parsed.testing = {};
          return parsed;
        }
      }
    } catch (e) {
      console.warn('Could not read API state from localStorage:', e);
    }
    var copy = JSON.parse(JSON.stringify(INITIAL_state));
    copy.testing = {};
    return copy;
  }

  function saveApiState() {
    try {
      var toStore = {
        providers: apiState.providers,
        logs: apiState.logs
      };
      localStorage.setItem(STORAGE_KEY_API, JSON.stringify(toStore));
    } catch (e) {
      console.warn('Could not save API state to localStorage:', e);
    }
  }

  var DATA = loadData();
  var apiState = loadApiState();

  function $(id) { return document.getElementById(id); }

  function escapeHTML(value) {
    return String(value == null ? '' : value).replace(/[&<>"']/g, function (ch) {
      return { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;' }[ch];
    });
  }

  function formatMoney(value) {
    return new Intl.NumberFormat('en-NG', { style: 'currency', currency: 'NGN', maximumFractionDigits: 0 }).format(value || 0);
  }

  function shortMoney(value) {
    if (value >= 1000000) return '₦' + (value / 1000000).toFixed(1).replace(/\.0$/, '') + 'm';
    if (value >= 1000) return '₦' + Math.round(value / 1000) + 'k';
    return '₦' + (value || 0);
  }

  function formatDate(iso) {
    if (!iso) return '—';
    var d = new Date(iso + 'T00:00:00');
    return d.toLocaleDateString('en-GB', { day: 'numeric', month: 'short', year: 'numeric' });
  }

  function formatDateTime(iso) {
    if (!iso) return '—';
    var d = new Date(iso);
    if (isNaN(d.getTime())) return '—';
    return d.toLocaleString('en-GB', { day: '2-digit', month: 'short', year: 'numeric', hour: '2-digit', minute: '2-digit' });
  }

  function initials(first, last) {
    return (String(first).charAt(0) + String(last).charAt(0)).toUpperCase();
  }

  function getCustomer(id) {
    for (var i = 0; i < DATA.customers.length; i++) {
      if (DATA.customers[i].id === id) return DATA.customers[i];
    }
    return { firstName: 'Unknown', lastName: 'Customer', email: '—', country: '—' };
  }

  function customerName(id) {
    var c = getCustomer(id);
    return c.firstName + ' ' + c.lastName;
  }

  function statusPill(status) {
    var map = {
      'Confirmed': { cls: 'status-confirmed', icon: 'bi-check-circle-fill' },
      'Pending': { cls: 'status-pending', icon: 'bi-clock-fill' },
      'Completed': { cls: 'status-completed', icon: 'bi-check2-all' },
      'Cancelled': { cls: 'status-cancelled', icon: 'bi-x-circle-fill' },
      'In review': { cls: 'status-inreview', icon: 'bi-hourglass-split' },
      'Awaiting documents': { cls: 'status-awaiting', icon: 'bi-file-earmark-text-fill' },
      'Referred to partner': { cls: 'status-referred', icon: 'bi-send-fill' },
      'Draft': { cls: 'status-draft', icon: 'bi-pencil-fill' },
      'Paid': { cls: 'status-paid', icon: 'bi-check-circle-fill' },
      'Refunded': { cls: 'status-refunded', icon: 'bi-arrow-counterclockwise' },
      'Failed': { cls: 'status-failed', icon: 'bi-x-circle-fill' },
      'Active': { cls: 'status-active', icon: 'bi-check-circle-fill' },
      'Inactive': { cls: 'status-inactive', icon: 'bi-dash-circle-fill' }
    };
    var meta = map[status] || { cls: 'status-completed', icon: 'bi-dot' };
    return '<span class="status ' + meta.cls + '"><i class="bi ' + meta.icon + '"></i> ' + escapeHTML(status) + '</span>';
  }

  function emptyRow(colspan, message) {
    return '<tr class="row-empty"><td colspan="' + colspan + '" class="cell-empty">' +
           '<div class="empty-row"><i class="bi bi-inbox"></i>' + escapeHTML(message) + '</div></td></tr>';
  }

  function refreshCounts() {
    var counts = {
      customers: DATA.customers.length,
      flights: DATA.flights.length,
      hotels: DATA.hotels.length,
      loans: DATA.loans.length,
      destinations: DATA.destinations.length,
      transactions: DATA.transactions.length,
      api: apiState.providers.length
    };
    var badges = {
      customers: $('badgeCustomers'),
      flights: $('badgeFlights'),
      hotels: $('badgeHotels'),
      loans: $('badgeLoans'),
      destinations: $('badgeDestinations'),
      transactions: $('badgeTransactions'),
      api: $('badgeApi')
    };
    Object.keys(badges).forEach(function (key) {
      if (badges[key]) badges[key].textContent = String(counts[key]);
    });
    return counts;
  }

  /* =========================================================
     MODAL CONTROLLERS (Details, Edit, Delete, Notifications)
     ========================================================= */
  var detailModalEl = $('detailModal');
  var detailBody = $('detailModalBody');
  var detailTitle = $('detailModalTitle');

  function findRecord(kind, id) {
    var map = {
      customer: DATA.customers,
      flight: DATA.flights,
      hotel: DATA.hotels,
      loan: DATA.loans,
      transaction: DATA.transactions,
      destination: DATA.destinations
    };
    var list = map[kind] || [];
    for (var i = 0; i < list.length; i++) if (list[i].id === id) return list[i];
    return null;
  }

  function detailItem(label, value) {
    return '<div class="detail-item"><span>' + escapeHTML(label) + '</span><strong>' + escapeHTML(value) + '</strong></div>';
  }

  function openDetail(kind, id) {
    if (!detailModalEl || !detailBody || !detailTitle) return;
    var record = findRecord(kind, id);
    if (!record) return;

    var heroIcon = 'bi-file-earmark-text', heroTitle = '', heroSub = '', grid = '', note = '';

    if (kind === 'customer') {
      detailTitle.innerHTML = '<i class="bi bi-person-fill"></i> Customer details';
      heroIcon = 'bi-person-fill';
      heroTitle = record.firstName + ' ' + record.lastName;
      heroSub = record.email + ' · ' + record.country;
      grid = detailItem('Customer ID', record.id.toUpperCase()) +
             detailItem('First name', record.firstName) +
             detailItem('Last name', record.lastName) +
             detailItem('Email', record.email) +
             detailItem('Phone', record.phone) +
             detailItem('Country', record.country) +
             detailItem('Joined', formatDate(record.joined)) +
             detailItem('Total bookings', String(record.bookings)) +
             detailItem('Account status', record.status);
    }
    if (kind === 'flight') {
      detailTitle.innerHTML = '<i class="bi bi-airplane-fill"></i> Flight booking details';
      heroIcon = 'bi-airplane-fill';
      heroTitle = record.from + ' → ' + record.to;
      heroSub = record.airline + ' ' + record.flightNo + ' · ' + record.ref;
      grid = detailItem('Reference', record.ref) +
             detailItem('Customer', customerName(record.customerId)) +
             detailItem('Airline', record.airline) +
             detailItem('Flight number', record.flightNo) +
             detailItem('Cabin', record.cabin) +
             detailItem('Departure date', formatDate(record.date)) +
             detailItem('Departure time', record.time) +
             detailItem('Amount', formatMoney(record.amount)) +
             detailItem('Status', record.status);
    }
    if (kind === 'hotel') {
      detailTitle.innerHTML = '<i class="bi bi-building-fill"></i> Hotel reservation details';
      heroIcon = 'bi-building-fill';
      heroTitle = record.property;
      heroSub = record.location + ' · ' + record.ref;
      grid = detailItem('Reference', record.ref) +
             detailItem('Customer', customerName(record.customerId)) +
             detailItem('Property', record.property) +
             detailItem('Location', record.location) +
             detailItem('Room type', record.roomType) +
             detailItem('Check-in', formatDate(record.checkIn)) +
             detailItem('Nights', record.nights + ' nights') +
             detailItem('Guests', record.guests) +
             detailItem('Amount', formatMoney(record.amount)) +
             detailItem('Status', record.status);
    }
    if (kind === 'loan') {
      detailTitle.innerHTML = '<i class="bi bi-cash-coin"></i> Financing enquiry details';
      heroIcon = 'bi-cash-coin';
      heroTitle = formatMoney(record.amount) + ' over ' + record.period;
      heroSub = record.ref + ' · ' + record.purpose;
      grid = detailItem('Reference', record.ref) +
             detailItem('Customer', customerName(record.customerId)) +
             detailItem('Amount requested', formatMoney(record.amount)) +
             detailItem('Repayment period', record.period) +
             detailItem('Purpose of travel', record.purpose) +
             detailItem('Submitted', formatDate(record.submitted)) +
             detailItem('Workflow status', record.status);
      note = '<p class="modal-note mt-3"><i class="bi bi-shield-exclamation"></i>Travelbookings is not a lender. This status reflects the enquiry workflow only and is not an approval or decline. All financing decisions belong to the independent licensed lending partner.</p>';
    }
    if (kind === 'transaction') {
      detailTitle.innerHTML = '<i class="bi bi-credit-card-2-front-fill"></i> Transaction details';
      heroIcon = 'bi-credit-card-2-front-fill';
      heroTitle = formatMoney(record.amount);
      heroSub = record.ref + ' · related to ' + record.related;
      grid = detailItem('Reference', record.ref) +
             detailItem('Customer', customerName(record.customerId)) +
             detailItem('Related booking', record.related) +
             detailItem('Payment method', record.method) +
             detailItem('Date', formatDate(record.date)) +
             detailItem('Amount', formatMoney(record.amount)) +
             detailItem('Status', record.status);
    }
    if (kind === 'destination') {
      detailTitle.innerHTML = '<i class="bi bi-globe-americas"></i> Destination details';
      heroIcon = 'bi-globe-americas';
      heroTitle = record.city + ', ' + record.country;
      heroSub = record.continent + ' · ' + record.status;
      grid = detailItem('City', record.city) +
             detailItem('Country', record.country) +
             detailItem('Continent', record.continent) +
             detailItem('Travel styles', (record.categories || []).join(', ')) +
             detailItem('Status', record.status) +
             detailItem('Short description', record.blurb || '—');
    }

    if (!note) {
      note = '<p class="modal-note mt-3"><i class="bi bi-info-circle"></i>This is demonstration data held in the page only. No record is stored on a server.</p>';
    }

    detailBody.innerHTML =
      '<div class="detail-hero">' +
        '<span class="icon-box"><i class="bi ' + heroIcon + '"></i></span>' +
        '<span class="hero-text"><strong>' + escapeHTML(heroTitle) + '</strong><span>' + escapeHTML(heroSub) + '</span></span>' +
        (record.status ? statusPill(record.status) : '') +
      '</div>' +
      '<div class="detail-grid">' + grid + '</div>' + note;

    bootstrap.Modal.getOrCreateInstance(detailModalEl).show();
  }

  var editModalEl = $('editModal');
  var editFields = $('editFields');
  var editTitle = $('editModalTitle');
  var activeEdit = { kind: null, id: null };

  function fieldHTML(id, label, value, type) {
    type = type || 'text';
    return '<div class="col-md-6"><label class="form-label" for="' + id + '">' + escapeHTML(label) + '</label><input type="' + type + '" class="form-control" id="' + id + '" value="' + escapeHTML(value == null ? '' : value) + '" /></div>';
  }

  function selectHTML(id, label, value, options) {
    return '<div class="col-md-6"><label class="form-label" for="' + id + '">' + escapeHTML(label) + '</label><select class="form-select" id="' + id + '">' +
      options.map(function (opt) { return '<option value="' + escapeHTML(opt) + '"' + (opt === value ? ' selected' : '') + '>' + escapeHTML(opt) + '</option>'; }).join('') +
      '</select></div>';
  }

  function openEdit(kind, id) {
    if (!editModalEl || !editFields || !editTitle) return;
    var record = findRecord(kind, id);
    if (!record) return;
    activeEdit = { kind: kind, id: id };

    if (kind === 'customer') {
      editTitle.innerHTML = '<i class="bi bi-person-fill"></i> Edit customer';
      editFields.innerHTML =
        fieldHTML('editFirst', 'First name', record.firstName) +
        fieldHTML('editLast', 'Last name', record.lastName) +
        fieldHTML('editEmail', 'Email', record.email, 'email') +
        fieldHTML('editPhone', 'Phone', record.phone) +
        fieldHTML('editCountry', 'Country', record.country) +
        selectHTML('editStatus', 'Status', record.status, ['Active', 'Inactive']);
    }
    if (kind === 'flight') {
      editTitle.innerHTML = '<i class="bi bi-airplane-fill"></i> Edit flight booking';
      editFields.innerHTML =
        fieldHTML('editAirline', 'Airline', record.airline) +
        fieldHTML('editFlightNo', 'Flight number', record.flightNo) +
        fieldHTML('editFrom', 'From', record.from) +
        fieldHTML('editTo', 'To', record.to) +
        fieldHTML('editDate', 'Departure date', record.date, 'date') +
        fieldHTML('editAmount', 'Amount (₦)', record.amount, 'number') +
        selectHTML('editStatus', 'Status', record.status, ['Confirmed', 'Pending', 'Completed', 'Cancelled']);
    }
    if (kind === 'hotel') {
      editTitle.innerHTML = '<i class="bi bi-building-fill"></i> Edit hotel reservation';
      editFields.innerHTML =
        fieldHTML('editProperty', 'Property', record.property) +
        fieldHTML('editLocation', 'Location', record.location) +
        fieldHTML('editCheckIn', 'Check-in date', record.checkIn, 'date') +
        fieldHTML('editNights', 'Nights', record.nights, 'number') +
        fieldHTML('editAmount', 'Amount (₦)', record.amount, 'number') +
        selectHTML('editStatus', 'Status', record.status, ['Confirmed', 'Pending', 'Completed', 'Cancelled']);
    }
    if (kind === 'loan') {
      editTitle.innerHTML = '<i class="bi bi-cash-coin"></i> Edit application';
      editFields.innerHTML =
        fieldHTML('editAmount', 'Amount requested (₦)', record.amount, 'number') +
        fieldHTML('editPeriod', 'Repayment period', record.period) +
        fieldHTML('editPurpose', 'Purpose of travel', record.purpose) +
        selectHTML('editStatus', 'Workflow status', record.status, ['In review', 'Awaiting documents', 'Referred to partner', 'Draft']);
    }
    if (kind === 'destination') {
      editTitle.innerHTML = '<i class="bi bi-globe-americas"></i> Edit destination';
      editFields.innerHTML =
        fieldHTML('editCity', 'City', record.city) +
        fieldHTML('editCountry', 'Country', record.country) +
        selectHTML('editContinent', 'Continent', record.continent, ['Africa', 'Europe', 'Asia', 'Middle East', 'Americas', 'Oceania']) +
        selectHTML('editStatus', 'Status', record.status, ['Active', 'Inactive']) +
        '<div class="col-12"><label class="form-label" for="editBlurb">Short description</label><input type="text" class="form-control" id="editBlurb" value="' + escapeHTML(record.blurb || '') + '" /></div>';
    }

    bootstrap.Modal.getOrCreateInstance(editModalEl).show();
  }

  if ($('saveEditBtn')) {
    $('saveEditBtn').addEventListener('click', function () {
      var kind = activeEdit.kind;
      var record = findRecord(kind, activeEdit.id);
      if (!record) return;
      var statusEl = $('editStatus');

      if (kind === 'customer') {
        record.firstName = $('editFirst').value.trim() || record.firstName;
        record.lastName = $('editLast').value.trim() || record.lastName;
        record.email = $('editEmail').value.trim() || record.email;
        record.phone = $('editPhone').value.trim() || record.phone;
        record.country = $('editCountry').value.trim() || record.country;
        if (statusEl) record.status = statusEl.value;
      }
      if (kind === 'flight') {
        record.airline = $('editAirline').value.trim() || record.airline;
        record.flightNo = $('editFlightNo').value.trim() || record.flightNo;
        record.from = $('editFrom').value.trim() || record.from;
        record.to = $('editTo').value.trim() || record.to;
        record.date = $('editDate').value || record.date;
        record.amount = Number($('editAmount').value) || record.amount;
        if (statusEl) record.status = statusEl.value;
      }
      if (kind === 'hotel') {
        record.property = $('editProperty').value.trim() || record.property;
        record.location = $('editLocation').value.trim() || record.location;
        record.checkIn = $('editCheckIn').value || record.checkIn;
        record.nights = Number($('editNights').value) || record.nights;
        record.amount = Number($('editAmount').value) || record.amount;
        if (statusEl) record.status = statusEl.value;
      }
      if (kind === 'loan') {
        record.amount = Number($('editAmount').value) || record.amount;
        record.period = $('editPeriod').value.trim() || record.period;
        record.purpose = $('editPurpose').value.trim() || record.purpose;
        if (statusEl) record.status = statusEl.value;
      }
      if (kind === 'destination') {
        record.city = $('editCity').value.trim() || record.city;
        record.country = $('editCountry').value.trim() || record.country;
        if ($('editContinent')) record.continent = $('editContinent').value;
        if (statusEl) record.status = statusEl.value;
        record.blurb = $('editBlurb').value.trim();
      }

      saveData();
      bootstrap.Modal.getInstance(editModalEl).hide();
      refreshAfterChange();
    });
  }

  var deleteModalEl = $('deleteModal');
  var deleteLabel = $('deleteRecordLabel');
  var pendingDelete = { kind: null, id: null };

  function openDelete(kind, id) {
    if (!deleteModalEl || !deleteLabel) return;
    var record = findRecord(kind, id);
    if (!record) return;
    pendingDelete = { kind: kind, id: id };
    var label = 'this record';
    if (kind === 'customer') label = record.firstName + ' ' + record.lastName;
    if (kind === 'flight') label = record.ref + ' · ' + record.from + ' → ' + record.to;
    if (kind === 'hotel') label = record.ref + ' · ' + record.property;
    if (kind === 'loan') label = record.ref + ' · ' + formatMoney(record.amount);
    if (kind === 'destination') label = record.city + ', ' + record.country;
    deleteLabel.textContent = label;
    bootstrap.Modal.getOrCreateInstance(deleteModalEl).show();
  }

  if ($('confirmDeleteBtn')) {
    $('confirmDeleteBtn').addEventListener('click', function () {
      var kind = pendingDelete.kind, id = pendingDelete.id;
      if (kind === 'customer') DATA.customers = DATA.customers.filter(function (c) { return c.id !== id; });
      if (kind === 'flight') DATA.flights = DATA.flights.filter(function (f) { return f.id !== id; });
      if (kind === 'hotel') DATA.hotels = DATA.hotels.filter(function (h) { return h.id !== id; });
      if (kind === 'loan') DATA.loans = DATA.loans.filter(function (l) { return l.id !== id; });
      if (kind === 'destination') DATA.destinations = DATA.destinations.filter(function (d) { return d.id !== id; });
      saveData();
      bootstrap.Modal.getInstance(deleteModalEl).hide();
      refreshAfterChange();
    });
  }

  document.addEventListener('click', function (event) {
    var viewBtn = event.target.closest('.js-view');
    if (viewBtn) { openDetail(viewBtn.dataset.kind, viewBtn.dataset.id); return; }
    var editBtn = event.target.closest('.js-edit');
    if (editBtn) { openEdit(editBtn.dataset.kind, editBtn.dataset.id); return; }
    var deleteBtn = event.target.closest('.js-delete');
    if (deleteBtn) { openDelete(deleteBtn.dataset.kind, deleteBtn.dataset.id); return; }
    var navTrigger = event.target.closest('[data-nav]');
    if (navTrigger) {
      var navName = navTrigger.dataset.nav;
      if (navName === 'logout') {
        var logoutModal = $('logoutModal');
        if (logoutModal) bootstrap.Modal.getOrCreateInstance(logoutModal).show();
      } else if (navName) {
        window.location.href = navName + '.html';
      }
    }
  });

  /* =========================================================
     PAGE 1: DASHBOARD (Overview)
     ========================================================= */
  function renderDashboardStats() {
    var counts = refreshCounts();
    var activeCustomers = DATA.customers.filter(function (c) { return c.status === 'Active'; }).length;
    var pendingFlights = DATA.flights.filter(function (f) { return f.status === 'Pending'; }).length;
    var pendingHotels = DATA.hotels.filter(function (h) { return h.status === 'Pending'; }).length;
    if ($('statCustomers')) $('statCustomers').textContent = String(counts.customers);
    if ($('statActiveCustomers')) $('statActiveCustomers').textContent = String(activeCustomers);
    if ($('statFlights')) $('statFlights').textContent = String(counts.flights);
    if ($('statHotels')) $('statHotels').textContent = String(counts.hotels);
    if ($('statLoans')) $('statLoans').textContent = String(counts.loans);
    if ($('statPendingFlights')) $('statPendingFlights').textContent = String(pendingFlights);
    if ($('statPendingHotels')) $('statPendingHotels').textContent = String(pendingHotels);
  }

  function renderBookingChart(containerId, labelsId) {
    var host = $(containerId);
    var labelsHost = $(labelsId);
    if (!host || !labelsHost) return;

    var max = 1;
    DATA.monthly.forEach(function (m) { max = Math.max(max, m.flights, m.hotels); });

    host.innerHTML = DATA.monthly.map(function (m) {
      var fh = Math.max(3, Math.round((m.flights / max) * 100));
      var hh = Math.max(3, Math.round((m.hotels / max) * 100));
      return (
        '<div class="bar-group">' +
          '<div class="bar flights" style="height:' + fh + '%;" data-tip="' + escapeHTML(m.month) + ' · ' + m.flights + ' flights"></div>' +
          '<div class="bar hotels" style="height:' + hh + '%;" data-tip="' + escapeHTML(m.month) + ' · ' + m.hotels + ' hotels"></div>' +
        '</div>'
      );
    }).join('');

    labelsHost.innerHTML = DATA.monthly.map(function (m) { return '<span>' + escapeHTML(m.month) + '</span>'; }).join('');
  }

  function renderStatusDonut() {
    var donut = $('statusDonut');
    var legend = $('statusLegend');
    var totalEl = $('statusDonutTotal');
    if (!donut || !legend) return;

    var all = DATA.flights.concat(DATA.hotels);
    var counts = { Confirmed: 0, Pending: 0, Completed: 0, Cancelled: 0 };
    all.forEach(function (b) { if (counts[b.status] === undefined) counts[b.status] = 0; counts[b.status]++; });

    var colors = { Confirmed: '#2e7d5b', Pending: '#a8842c', Completed: '#8a8378', Cancelled: '#a3452e' };
    var total = all.length;
    if (totalEl) totalEl.textContent = String(total);

    if (!total) {
      donut.style.background = 'var(--hairline-soft)';
      legend.innerHTML = '<p style="font-family:\'DM Sans\',sans-serif;font-size:12px;color:var(--muted);margin:0;">No bookings yet.</p>';
      return;
    }

    var stops = [], cursor = 0, keys = ['Confirmed', 'Pending', 'Completed', 'Cancelled'];
    keys.forEach(function (key) {
      var value = counts[key] || 0;
      if (!value) return;
      var start = (cursor / total) * 360;
      cursor += value;
      var end = (cursor / total) * 360;
      stops.push(colors[key] + ' ' + start + 'deg ' + end + 'deg');
    });

    donut.style.background = 'conic-gradient(' + stops.join(', ') + ')';
    legend.innerHTML = keys.map(function (key) {
      var value = counts[key] || 0;
      return (
        '<div class="donut-legend-item">' +
          '<span class="dot" style="background:' + colors[key] + ';"></span>' +
          '<span>' + key + '</span>' +
          '<span class="count">' + value + '</span>' +
        '</div>'
      );
    }).join('');
  }

  function renderTxnOverview() {
    var total = 0, paid = 0, pending = 0;
    var statuses = { Paid: 0, Pending: 0, Refunded: 0, Failed: 0 };
    DATA.transactions.forEach(function (t) {
      total += t.amount;
      if (t.status === 'Paid') paid += t.amount;
      if (t.status === 'Pending') pending += t.amount;
      statuses[t.status] = (statuses[t.status] || 0) + t.amount;
    });
    if ($('txnTotal')) $('txnTotal').textContent = shortMoney(total);
    if ($('txnPaid')) $('txnPaid').textContent = shortMoney(paid);
    if ($('txnPending')) $('txnPending').textContent = shortMoney(pending);

    var chart = $('txnChart');
    if (!chart) return;

    var max = Math.max(1, statuses.Paid, statuses.Pending, statuses.Refunded, statuses.Failed);
    var groups = [
      { key: 'Paid', value: statuses.Paid, color: 'var(--green)' },
      { key: 'Pending', value: statuses.Pending, color: 'var(--gold)' },
      { key: 'Refunded', value: statuses.Refunded, color: 'var(--navy-soft)' },
      { key: 'Failed', value: statuses.Failed, color: 'var(--error)' }
    ];

    chart.innerHTML = groups.map(function (g) {
      var h = Math.max(3, Math.round((g.value / max) * 100));
      return '<div class="bar-group"><div class="bar" style="height:' + h + '%;background:' + g.color + ';" data-tip="' + g.key + ' · ' + formatMoney(g.value) + '"></div></div>';
    }).join('');
  }

  function renderActivity() {
    var host = $('activityList');
    if (!host) return;
    host.innerHTML = DATA.activities.map(function (item) {
      var tone = item.tone ? ' ' + item.tone : '';
      return (
        '<li class="activity-item">' +
          '<span class="activity-icon' + tone + '"><i class="bi ' + item.icon + '"></i></span>' +
          '<div class="activity-body"><strong>' + escapeHTML(item.title) + '</strong><span>' + escapeHTML(item.text) + '</span></div>' +
          '<span class="activity-time">' + escapeHTML(item.time) + '</span>' +
        '</li>'
      );
    }).join('');
  }

  function renderRecentBookings() {
    var host = $('recentBookingsBody');
    if (!host) return;

    var rows = [];
    DATA.flights.forEach(function (f) {
      rows.push({ kind: 'flight', id: f.id, ref: f.ref, customer: customerName(f.customerId), label: f.airline + ' · ' + f.from + ' → ' + f.to, date: f.date, amount: f.amount, status: f.status });
    });
    DATA.hotels.forEach(function (h) {
      rows.push({ kind: 'hotel', id: h.id, ref: h.ref, customer: customerName(h.customerId), label: h.property + ' · ' + h.location, date: h.checkIn, amount: h.amount, status: h.status });
    });
    rows.sort(function (a, b) { return a.date < b.date ? 1 : -1; });
    rows = rows.slice(0, 6);

    if (!rows.length) { host.innerHTML = emptyRow(7, 'No bookings to show.'); return; }

    host.innerHTML = rows.map(function (row) {
      var icon = row.kind === 'flight' ? 'bi-airplane-fill' : 'bi-building-fill';
      return (
        '<tr>' +
          '<td data-label="Reference"><span class="cell-mono">' + escapeHTML(row.ref) + '</span></td>' +
          '<td data-label="Customer"><span class="cell-strong">' + escapeHTML(row.customer) + '</span></td>' +
          '<td data-label="Booking"><span class="cell-strong"><i class="bi ' + icon + '" style="color:var(--gold);font-size:11px;margin-right:6px;"></i>' + escapeHTML(row.label) + '</span></td>' +
          '<td data-label="Travel date"><span class="cell-strong">' + escapeHTML(formatDate(row.date)) + '</span></td>' +
          '<td data-label="Amount"><span class="cell-mono">' + escapeHTML(formatMoney(row.amount)) + '</span></td>' +
          '<td data-label="Status">' + statusPill(row.status) + '</td>' +
          '<td class="text-end"><button type="button" class="btn btn-ghost btn-xs js-view" data-kind="' + row.kind + '" data-id="' + escapeHTML(row.id) + '">View</button></td>' +
        '</tr>'
      );
    }).join('');
  }

  /* =========================================================
     PAGE 2: CUSTOMERS
     ========================================================= */
  var customerState = { query: '', status: '' };

  function renderCustomers() {
    var host = $('customersBody');
    if (!host) return;
    var q = customerState.query.toLowerCase().trim();
    var filtered = DATA.customers.filter(function (c) {
      if (customerState.status && c.status !== customerState.status) return false;
      if (!q) return true;
      var hay = (c.firstName + ' ' + c.lastName + ' ' + c.email + ' ' + c.country + ' ' + c.phone).toLowerCase();
      return hay.indexOf(q) !== -1;
    });
    if ($('customerCount')) $('customerCount').textContent = String(filtered.length);
    if (!filtered.length) { host.innerHTML = emptyRow(7, 'No customers match this search.'); return; }

    host.innerHTML = filtered.map(function (c) {
      return (
        '<tr>' +
          '<td data-label="Customer"><div class="cell-person"><span class="avatar">' + escapeHTML(initials(c.firstName, c.lastName)) + '</span><div><span class="cell-strong">' + escapeHTML(c.firstName + ' ' + c.lastName) + '</span><span class="cell-sub">' + escapeHTML(c.id.toUpperCase()) + '</span></div></div></td>' +
          '<td data-label="Contact"><span class="cell-strong">' + escapeHTML(c.email) + '</span><span class="cell-sub">' + escapeHTML(c.phone) + '</span></td>' +
          '<td data-label="Country"><span class="cell-strong">' + escapeHTML(c.country) + '</span></td>' +
          '<td data-label="Bookings"><span class="cell-mono">' + c.bookings + '</span></td>' +
          '<td data-label="Joined"><span class="cell-strong">' + escapeHTML(formatDate(c.joined)) + '</span></td>' +
          '<td data-label="Status">' + statusPill(c.status) + '</td>' +
          '<td class="text-end"><div class="row-actions">' +
            '<button type="button" class="btn btn-ghost btn-icon js-view" data-kind="customer" data-id="' + escapeHTML(c.id) + '" aria-label="View customer"><i class="bi bi-eye"></i></button>' +
            '<button type="button" class="btn btn-soft btn-icon js-edit" data-kind="customer" data-id="' + escapeHTML(c.id) + '" aria-label="Edit customer"><i class="bi bi-pencil"></i></button>' +
            '<button type="button" class="btn btn-danger-soft btn-icon js-delete" data-kind="customer" data-id="' + escapeHTML(c.id) + '" aria-label="Delete customer"><i class="bi bi-trash3"></i></button>' +
          '</div></td>' +
        '</tr>'
      );
    }).join('');
  }

  /* =========================================================
     PAGE 3: FLIGHT BOOKINGS
     ========================================================= */
  var flightState = { query: '', status: '' };

  function renderFlights() {
    var host = $('flightsBody');
    if (!host) return;
    var q = flightState.query.toLowerCase().trim();
    var filtered = DATA.flights.filter(function (f) {
      if (flightState.status && f.status !== flightState.status) return false;
      if (!q) return true;
      var hay = (f.ref + ' ' + customerName(f.customerId) + ' ' + f.airline + ' ' + f.flightNo + ' ' + f.from + ' ' + f.to).toLowerCase();
      return hay.indexOf(q) !== -1;
    });
    if ($('flightCount')) $('flightCount').textContent = String(filtered.length);
    if (!filtered.length) { host.innerHTML = emptyRow(7, 'No flight bookings match this search.'); return; }

    host.innerHTML = filtered.map(function (f) {
      return (
        '<tr>' +
          '<td data-label="Reference"><span class="cell-mono">' + escapeHTML(f.ref) + '</span></td>' +
          '<td data-label="Customer"><span class="cell-strong">' + escapeHTML(customerName(f.customerId)) + '</span></td>' +
          '<td data-label="Airline & route"><span class="cell-strong">' + escapeHTML(f.airline + ' ' + f.flightNo) + '</span><span class="cell-sub">' + escapeHTML(f.from + ' → ' + f.to) + ' · ' + escapeHTML(f.cabin) + '</span></td>' +
          '<td data-label="Departure"><span class="cell-strong">' + escapeHTML(formatDate(f.date)) + '</span><span class="cell-sub">' + escapeHTML(f.time) + '</span></td>' +
          '<td data-label="Amount"><span class="cell-mono">' + escapeHTML(formatMoney(f.amount)) + '</span></td>' +
          '<td data-label="Status">' + statusPill(f.status) + '</td>' +
          '<td class="text-end"><div class="row-actions">' +
            '<button type="button" class="btn btn-ghost btn-icon js-view" data-kind="flight" data-id="' + escapeHTML(f.id) + '" aria-label="View booking"><i class="bi bi-eye"></i></button>' +
            '<button type="button" class="btn btn-soft btn-icon js-edit" data-kind="flight" data-id="' + escapeHTML(f.id) + '" aria-label="Edit booking"><i class="bi bi-pencil"></i></button>' +
            '<button type="button" class="btn btn-danger-soft btn-icon js-delete" data-kind="flight" data-id="' + escapeHTML(f.id) + '" aria-label="Delete booking"><i class="bi bi-trash3"></i></button>' +
          '</div></td>' +
        '</tr>'
      );
    }).join('');
  }

  /* =========================================================
     PAGE 4: HOTEL RESERVATIONS
     ========================================================= */
  var hotelState = { query: '', status: '' };

  function renderHotels() {
    var host = $('hotelsBody');
    if (!host) return;
    var q = hotelState.query.toLowerCase().trim();
    var filtered = DATA.hotels.filter(function (h) {
      if (hotelState.status && h.status !== hotelState.status) return false;
      if (!q) return true;
      var hay = (h.ref + ' ' + customerName(h.customerId) + ' ' + h.property + ' ' + h.location + ' ' + h.roomType).toLowerCase();
      return hay.indexOf(q) !== -1;
    });
    if ($('hotelCount')) $('hotelCount').textContent = String(filtered.length);
    if (!filtered.length) { host.innerHTML = emptyRow(7, 'No hotel reservations match this search.'); return; }

    host.innerHTML = filtered.map(function (h) {
      return (
        '<tr>' +
          '<td data-label="Reference"><span class="cell-mono">' + escapeHTML(h.ref) + '</span></td>' +
          '<td data-label="Customer"><span class="cell-strong">' + escapeHTML(customerName(h.customerId)) + '</span></td>' +
          '<td data-label="Property"><span class="cell-strong">' + escapeHTML(h.property) + '</span><span class="cell-sub">' + escapeHTML(h.roomType) + '</span></td>' +
          '<td data-label="Stay"><span class="cell-strong">' + escapeHTML(formatDate(h.checkIn)) + '</span><span class="cell-sub">' + h.nights + ' nights · ' + escapeHTML(h.guests) + '</span></td>' +
          '<td data-label="Amount"><span class="cell-mono">' + escapeHTML(formatMoney(h.amount)) + '</span></td>' +
          '<td data-label="Status">' + statusPill(h.status) + '</td>' +
          '<td class="text-end"><div class="row-actions">' +
            '<button type="button" class="btn btn-ghost btn-icon js-view" data-kind="hotel" data-id="' + escapeHTML(h.id) + '" aria-label="View reservation"><i class="bi bi-eye"></i></button>' +
            '<button type="button" class="btn btn-soft btn-icon js-edit" data-kind="hotel" data-id="' + escapeHTML(h.id) + '" aria-label="Edit reservation"><i class="bi bi-pencil"></i></button>' +
            '<button type="button" class="btn btn-danger-soft btn-icon js-delete" data-kind="hotel" data-id="' + escapeHTML(h.id) + '" aria-label="Delete reservation"><i class="bi bi-trash3"></i></button>' +
          '</div></td>' +
        '</tr>'
      );
    }).join('');
  }

  /* =========================================================
     PAGE 5: TRAVEL LOAN APPLICATIONS
     ========================================================= */
  var loanState = { query: '', status: '' };

  function renderLoans() {
    var host = $('loansBody');
    if (!host) return;
    var q = loanState.query.toLowerCase().trim();
    var filtered = DATA.loans.filter(function (l) {
      if (loanState.status && l.status !== loanState.status) return false;
      if (!q) return true;
      var hay = (l.ref + ' ' + customerName(l.customerId) + ' ' + l.purpose + ' ' + l.status).toLowerCase();
      return hay.indexOf(q) !== -1;
    });
    if ($('loanCount')) $('loanCount').textContent = String(filtered.length);
    if (!filtered.length) { host.innerHTML = emptyRow(8, 'No applications match this search.'); return; }

    host.innerHTML = filtered.map(function (l) {
      return (
        '<tr>' +
          '<td data-label="Reference"><span class="cell-mono">' + escapeHTML(l.ref) + '</span></td>' +
          '<td data-label="Customer"><span class="cell-strong">' + escapeHTML(customerName(l.customerId)) + '</span></td>' +
          '<td data-label="Amount"><span class="cell-mono">' + escapeHTML(formatMoney(l.amount)) + '</span></td>' +
          '<td data-label="Period"><span class="cell-strong">' + escapeHTML(l.period) + '</span></td>' +
          '<td data-label="Purpose"><span class="cell-strong">' + escapeHTML(l.purpose) + '</span></td>' +
          '<td data-label="Submitted"><span class="cell-strong">' + escapeHTML(formatDate(l.submitted)) + '</span></td>' +
          '<td data-label="Status">' + statusPill(l.status) + '</td>' +
          '<td class="text-end"><div class="row-actions">' +
            '<button type="button" class="btn btn-ghost btn-icon js-view" data-kind="loan" data-id="' + escapeHTML(l.id) + '" aria-label="View application"><i class="bi bi-eye"></i></button>' +
            '<button type="button" class="btn btn-soft btn-icon js-edit" data-kind="loan" data-id="' + escapeHTML(l.id) + '" aria-label="Edit application"><i class="bi bi-pencil"></i></button>' +
            '<button type="button" class="btn btn-danger-soft btn-icon js-delete" data-kind="loan" data-id="' + escapeHTML(l.id) + '" aria-label="Delete application"><i class="bi bi-trash3"></i></button>' +
          '</div></td>' +
        '</tr>'
      );
    }).join('');
  }

  /* =========================================================
     PAGE 6: DESTINATIONS
     ========================================================= */
  var destState = { query: '', continent: '' };

  function renderDestinations() {
    var host = $('destinationsGrid');
    if (!host) return;
    var q = destState.query.toLowerCase().trim();
    var filtered = DATA.destinations.filter(function (d) {
      if (destState.continent && d.continent !== destState.continent) return false;
      if (!q) return true;
      var hay = (d.city + ' ' + d.country + ' ' + d.continent + ' ' + (d.categories || []).join(' ')).toLowerCase();
      return hay.indexOf(q) !== -1;
    });
    if ($('destinationCount')) $('destinationCount').textContent = String(filtered.length);
    if (!filtered.length) {
      host.innerHTML = '<div class="empty-row" style="grid-column:1/-1;"><i class="bi bi-globe-americas"></i>No destinations match this search.</div>';
      return;
    }

    host.innerHTML = filtered.map(function (d) {
      var tags = (d.categories || []).map(function (cat) { return '<span class="dest-admin-tag">' + escapeHTML(cat) + '</span>'; }).join('');
      var media = d.image ? '<img src="' + escapeHTML(d.image) + '" alt="' + escapeHTML(d.city) + '" loading="lazy" onerror="this.style.display=\'none\'" />' : '';
      return (
        '<article class="dest-admin-card">' +
          '<div class="dest-admin-media">' + media + '</div>' +
          '<div class="dest-admin-body">' +
            '<h4>' + escapeHTML(d.city) + '</h4>' +
            '<p>' + escapeHTML(d.country) + ' · ' + escapeHTML(d.continent) + '</p>' +
            '<div class="dest-admin-tags">' + tags + '</div>' +
            '<div class="d-flex justify-content-between align-items-center">' + statusPill(d.status) +
              '<div class="dest-admin-actions">' +
                '<button type="button" class="btn btn-ghost btn-icon js-view" data-kind="destination" data-id="' + escapeHTML(d.id) + '" aria-label="View destination"><i class="bi bi-eye"></i></button>' +
                '<button type="button" class="btn btn-soft btn-icon js-edit" data-kind="destination" data-id="' + escapeHTML(d.id) + '" aria-label="Edit destination"><i class="bi bi-pencil"></i></button>' +
                '<button type="button" class="btn btn-danger-soft btn-icon js-delete" data-kind="destination" data-id="' + escapeHTML(d.id) + '" aria-label="Delete destination"><i class="bi bi-trash3"></i></button>' +
              '</div>' +
            '</div>' +
          '</div>' +
        '</article>'
      );
    }).join('');
  }

  var destinationModalEl = $('destinationModal');
  var destinationForm = $('destinationForm');
  var destinationToast = $('destinationToast');

  function openAddDestination() {
    if (!destinationModalEl || !destinationForm) return;
    destinationForm.reset();
    if (destinationToast) {
      destinationToast.className = 'toast-inline';
      destinationToast.innerHTML = '';
    }
    Array.prototype.forEach.call(destinationForm.querySelectorAll('.is-invalid'), function (el) { el.classList.remove('is-invalid'); });
    bootstrap.Modal.getOrCreateInstance(destinationModalEl).show();
  }

  if ($('addDestinationBtn')) $('addDestinationBtn').addEventListener('click', openAddDestination);
  if ($('addDestinationBtnTop')) $('addDestinationBtnTop').addEventListener('click', openAddDestination);

  if ($('saveDestinationBtn')) {
    $('saveDestinationBtn').addEventListener('click', function () {
      var cityEl = $('destCity'), countryEl = $('destCountry'), continentEl = $('destContinent');
      var valid = true;
      [cityEl, countryEl, continentEl].forEach(function (el) {
        if (!el || !el.value || !el.value.trim()) { if (el) el.classList.add('is-invalid'); valid = false; }
        else el.classList.remove('is-invalid');
      });
      if (!valid) {
        if (destinationToast) {
          destinationToast.className = 'toast-inline error show';
          destinationToast.innerHTML = '<i class="bi bi-exclamation-circle-fill"></i> Please fill in the required fields.';
        }
        return;
      }
      var categories = Array.prototype.slice.call($('destCategories').selectedOptions).map(function (o) { return o.value; });
      if (!categories.length) categories = ['City Breaks'];
      DATA.destinations.unshift({
        id: 'd' + Date.now(),
        city: cityEl.value.trim(),
        country: countryEl.value.trim(),
        continent: continentEl.value,
        categories: categories,
        blurb: $('destBlurb') ? $('destBlurb').value.trim() : '',
        image: $('destImage') ? $('destImage').value.trim() : '',
        status: 'Active'
      });
      saveData();
      renderDestinations();
      refreshCounts();
      if (destinationToast) {
        destinationToast.className = 'toast-inline show';
        destinationToast.innerHTML = '<i class="bi bi-check-circle-fill"></i> Destination added successfully!';
      }
      window.setTimeout(function () {
        if (destinationModalEl) bootstrap.Modal.getInstance(destinationModalEl).hide();
      }, 700);
    });
  }

  ['destCity', 'destCountry', 'destContinent'].forEach(function (id) {
    var el = $(id);
    if (!el) return;
    el.addEventListener('input', function () { el.classList.remove('is-invalid'); });
    el.addEventListener('change', function () { el.classList.remove('is-invalid'); });
  });

  /* =========================================================
     PAGE 7: TRANSACTIONS
     ========================================================= */
  var txnState = { query: '', status: '' };

  function renderTransactions() {
    var host = $('transactionsBody');
    if (!host) return;
    var q = txnState.query.toLowerCase().trim();
    var filtered = DATA.transactions.filter(function (t) {
      if (txnState.status && t.status !== txnState.status) return false;
      if (!q) return true;
      var hay = (t.ref + ' ' + customerName(t.customerId) + ' ' + t.related + ' ' + t.method).toLowerCase();
      return hay.indexOf(q) !== -1;
    });
    if ($('txnCount')) $('txnCount').textContent = String(filtered.length);
    if (!filtered.length) { host.innerHTML = emptyRow(8, 'No transactions match this search.'); return; }

    host.innerHTML = filtered.map(function (t) {
      return (
        '<tr>' +
          '<td data-label="Reference"><span class="cell-mono">' + escapeHTML(t.ref) + '</span></td>' +
          '<td data-label="Customer"><span class="cell-strong">' + escapeHTML(customerName(t.customerId)) + '</span></td>' +
          '<td data-label="Related booking"><span class="cell-strong">' + escapeHTML(t.related) + '</span></td>' +
          '<td data-label="Method"><span class="cell-strong">' + escapeHTML(t.method) + '</span></td>' +
          '<td data-label="Date"><span class="cell-strong">' + escapeHTML(formatDate(t.date)) + '</span></td>' +
          '<td data-label="Amount"><span class="cell-mono">' + escapeHTML(formatMoney(t.amount)) + '</span></td>' +
          '<td data-label="Status">' + statusPill(t.status) + '</td>' +
          '<td class="text-end"><div class="row-actions"><button type="button" class="btn btn-ghost btn-icon js-view" data-kind="transaction" data-id="' + escapeHTML(t.id) + '" aria-label="View transaction"><i class="bi bi-eye"></i></button></div></td>' +
        '</tr>'
      );
    }).join('');
  }

  /* =========================================================
     PAGE 8: REPORTS & ANALYTICS
     ========================================================= */
  function renderReports() {
    var totalBookings = DATA.flights.length + DATA.hotels.length;
    var paidRevenue = DATA.transactions.filter(function (t) { return t.status === 'Paid'; }).reduce(function (s, t) { return s + t.amount; }, 0);
    var loanValue = DATA.loans.reduce(function (s, l) { return s + l.amount; }, 0);

    if ($('reportCustomers')) $('reportCustomers').textContent = String(DATA.customers.length);
    if ($('reportBookings')) $('reportBookings').textContent = String(totalBookings);
    if ($('reportRevenue')) $('reportRevenue').textContent = shortMoney(paidRevenue);
    if ($('reportLoanValue')) $('reportLoanValue').textContent = shortMoney(loanValue);

    renderBookingChart('reportChart', 'reportChartLabels');

    var counts = {};
    DATA.flights.forEach(function (f) { counts[f.continent] = (counts[f.continent] || 0) + 1; });
    DATA.hotels.forEach(function (h) { counts[h.continent] = (counts[h.continent] || 0) + 1; });

    var palette = {
      'Africa': '#0b1e3d',
      'Europe': '#1e3657',
      'Asia': '#a8842c',
      'Middle East': '#c9a55b',
      'Americas': '#2e7d5b',
      'Oceania': '#8a8378'
    };
    var keys = Object.keys(counts);
    var total = keys.reduce(function (s, k) { return s + counts[k]; }, 0);

    var donut = $('continentDonut');
    var legend = $('continentLegend');
    var totalEl = $('continentDonutTotal');
    if (totalEl) totalEl.textContent = String(total);
    if (!donut || !legend) return;

    if (!total) {
      donut.style.background = 'var(--hairline-soft)';
      legend.innerHTML = '<p style="font-family:\'DM Sans\',sans-serif;font-size:12px;color:var(--muted);margin:0;">No data.</p>';
      return;
    }

    var cursor = 0, stops = [];
    keys.forEach(function (key) {
      var start = (cursor / total) * 360;
      cursor += counts[key];
      var end = (cursor / total) * 360;
      stops.push((palette[key] || '#8a8378') + ' ' + start + 'deg ' + end + 'deg');
    });
    donut.style.background = 'conic-gradient(' + stops.join(', ') + ')';
    legend.innerHTML = keys.map(function (key) {
      return (
        '<div class="donut-legend-item">' +
          '<span class="dot" style="background:' + (palette[key] || '#8a8378') + ';"></span>' +
          '<span>' + escapeHTML(key) + '</span>' +
          '<span class="count">' + counts[key] + '</span>' +
        '</div>'
      );
    }).join('');
  }

  if ($('exportDemoBtn')) {
    $('exportDemoBtn').addEventListener('click', function () {
      if (!detailModalEl || !detailTitle || !detailBody) return;
      detailTitle.innerHTML = '<i class="bi bi-download"></i> Export report';
      detailBody.innerHTML = '<p style="font-size:14px;color:var(--ink-soft);margin-bottom:16px;line-height:1.7;">Report exports are not available in this demonstration console.</p>' +
        '<p class="modal-note mb-0"><i class="bi bi-info-circle"></i>CSV and PDF export will be enabled once reporting is connected to the backend. No file has been generated.</p>';
      bootstrap.Modal.getOrCreateInstance(detailModalEl).show();
    });
  }

  /* =========================================================
     PAGE 9: WEBSITE SETTINGS
     ========================================================= */
  if ($('saveSettingsBtn')) {
    $('saveSettingsBtn').addEventListener('click', function () {
      var toast = $('settingsToast');
      if (toast) {
        toast.className = 'toast-inline show';
        toast.innerHTML = '<i class="bi bi-info-circle"></i> Demonstration only — settings were not saved anywhere.';
      }
    });
  }

  if ($('resetSettingsBtn')) {
    $('resetSettingsBtn').addEventListener('click', function () {
      if ($('setSiteName')) $('setSiteName').value = 'Travelbookings';
      if ($('setSupportEmail')) $('setSupportEmail').value = 'hello@travelbookings.ng';
      if ($('setSupportPhone')) $('setSupportPhone').value = '+234 812 345 6789';
      if ($('setCurrency')) $('setCurrency').value = 'NGN';
      if ($('setTagline')) $('setTagline').value = 'Your next journey, beautifully booked.';
      var toast = $('settingsToast');
      if (toast) {
        toast.className = 'toast-inline show';
        toast.innerHTML = '<i class="bi bi-arrow-counterclockwise"></i> Fields reset to their default values (demo).';
      }
    });
  }

  /* =========================================================
     PAGE 10: API INTEGRATIONS
     ========================================================= */
  var apiEls = {
    flightBody: $('flightProvidersBody'),
    hotelBody: $('hotelProvidersBody'),
    flightEmpty: $('flightEmpty'),
    hotelEmpty: $('hotelEmpty'),
    flightCount: $('flightProviderCount'),
    hotelCount: $('hotelProviderCount'),
    logBody: $('apiLogBody'),
    logEmpty: $('apiLogEmpty'),
    logCount: $('apiLogCount'),
    modalEl: $('apiProviderModal'),
    modalTitle: $('apiProviderModalTitle'),
    nameInput: $('apiName'),
    urlInput: $('apiBaseUrl'),
    keyInput: $('apiKey'),
    secretInput: $('apiSecret'),
    envSelect: $('apiEnv'),
    enabledCheck: $('apiEnabled'),
    keyHint: $('apiKeyHint'),
    secretHint: $('apiSecretHint'),
    saveBtn: $('apiSaveBtn'),
    deleteEl: $('apiDeleteModal'),
    deleteName: $('apiDeleteName'),
    deleteConfirm: $('apiDeleteConfirm'),
    badge: $('badgeApi')
  };

  function getProvider(id) {
    for (var i = 0; i < apiState.providers.length; i++) {
      if (apiState.providers[i].id === id) return apiState.providers[i];
    }
    return null;
  }

  function maskValue(raw) {
    var str = String(raw || '');
    if (!str) return '';
    return '••••••••' + str.slice(-4);
  }

  function statusMeta(status) {
    switch (status) {
      case 'Connected': return { cls: 'api-status-connected', label: 'Connected' };
      case 'Error': return { cls: 'api-status-failed', label: 'Connection failed' };
      default: return { cls: 'api-status-untested', label: 'Not tested' };
    }
  }

  function categoryIcon(cat) { return cat === 'Flight' ? 'bi-airplane-fill' : 'bi-building-fill'; }

  function providerRow(p) {
    var sm = statusMeta(p.status);
    var isTesting = apiState.testing[p.id] === true;
    var statusHTML = isTesting
      ? '<span class="api-status api-status-testing"><span class="api-dot"></span>Testing…</span>'
      : '<span class="api-status ' + sm.cls + '"><span class="api-dot"></span>' + sm.label + '</span>';
    var lastTestHTML = p.lastTest
      ? '<span class="api-last-test"><strong>' + escapeHTML(formatDateTime(p.lastTest)) + '</strong></span>'
      : '<span class="api-last-test">Never</span>';
    var serviceClass = p.category === 'Flight' ? 'api-service-flight' : 'api-service-hotel';
    var serviceIcon  = p.category === 'Flight' ? 'bi-airplane-fill' : 'bi-building-fill';

    return (
      '<tr data-id="' + escapeHTML(p.id) + '">' +
        '<td data-label="Provider"><div class="api-provider-name"><span class="api-provider-icon' + (p.category === 'Hotel' ? ' is-hotel' : '') + '"><i class="bi ' + categoryIcon(p.category) + '"></i></span><div><strong>' + escapeHTML(p.name) + '</strong><span class="api-url-preview" title="' + escapeHTML(p.baseUrl) + '">' + escapeHTML(p.baseUrl) + '</span></div></div></td>' +
        '<td data-label="Service"><span class="api-service-badge ' + serviceClass + '"><i class="bi ' + serviceIcon + '"></i> ' + escapeHTML(p.category) + '</span></td>' +
        '<td data-label="Environment"><span class="api-env-pill api-env-' + p.env.toLowerCase() + '">' + escapeHTML(p.env) + '</span></td>' +
        '<td data-label="Status">' + statusHTML + '</td>' +
        '<td data-label="Last test">' + lastTestHTML + '</td>' +
        '<td data-label="Active"><span class="api-toggle ' + (p.enabled ? 'is-on' : 'is-off') + '"><i class="bi ' + (p.enabled ? 'bi-check-circle-fill' : 'bi-dash-circle-fill') + '"></i>' + (p.enabled ? 'Active' : 'Inactive') + '</span></td>' +
        '<td class="text-end"><div class="api-actions">' +
          '<button type="button" class="btn btn-ghost btn-icon js-api-test" data-id="' + escapeHTML(p.id) + '" aria-label="Test connection" title="Test connection"><i class="bi bi-plug-fill"></i></button>' +
          '<button type="button" class="btn btn-soft btn-icon js-api-edit" data-id="' + escapeHTML(p.id) + '" aria-label="Edit provider" title="Edit"><i class="bi bi-pencil"></i></button>' +
          '<button type="button" class="btn btn-danger-soft btn-icon js-api-delete" data-id="' + escapeHTML(p.id) + '" aria-label="Remove provider" title="Remove"><i class="bi bi-trash3"></i></button>' +
        '</div></td>' +
      '</tr>'
    );
  }

  function renderProviders() {
    var flights = apiState.providers.filter(function (p) { return p.category === 'Flight'; });
    var hotels  = apiState.providers.filter(function (p) { return p.category === 'Hotel'; });
    if (apiEls.flightBody) apiEls.flightBody.innerHTML = flights.map(providerRow).join('');
    if (apiEls.flightEmpty) apiEls.flightEmpty.classList.toggle('is-visible', flights.length === 0);
    if (apiEls.flightCount) apiEls.flightCount.textContent = flights.length + (flights.length === 1 ? ' provider' : ' providers');
    if (apiEls.hotelBody) apiEls.hotelBody.innerHTML = hotels.map(providerRow).join('');
    if (apiEls.hotelEmpty) apiEls.hotelEmpty.classList.toggle('is-visible', hotels.length === 0);
    if (apiEls.hotelCount) apiEls.hotelCount.textContent = hotels.length + (hotels.length === 1 ? ' provider' : ' providers');
    if (apiEls.badge) apiEls.badge.textContent = String(apiState.providers.length);
  }

  function renderLogs() {
    if (!apiEls.logBody) return;
    var sorted = apiState.logs.slice().sort(function (a, b) { return new Date(b.ts) - new Date(a.ts); });
    if (apiEls.logCount) apiEls.logCount.textContent = sorted.length + (sorted.length === 1 ? ' event' : ' events');
    if (!sorted.length) {
      apiEls.logBody.innerHTML = '';
      if (apiEls.logEmpty) apiEls.logEmpty.classList.add('is-visible');
      return;
    }
    if (apiEls.logEmpty) apiEls.logEmpty.classList.remove('is-visible');
    apiEls.logBody.innerHTML = sorted.map(function (l) {
      var statusCls = l.status === 'Success' ? 'status-confirmed' : l.status === 'Failed' ? 'status-cancelled' : 'status-completed';
      var statusIcon = l.status === 'Success' ? 'bi-check-circle-fill' : l.status === 'Failed' ? 'bi-x-circle-fill' : 'bi-info-circle-fill';
      return (
        '<tr>' +
          '<td data-label="Date & time"><span class="api-log-mono">' + escapeHTML(formatDateTime(l.ts)) + '</span></td>' +
          '<td data-label="Provider"><span class="cell-strong">' + escapeHTML(l.provider) + '</span></td>' +
          '<td data-label="Service"><span class="cell-strong">' + escapeHTML(l.service) + '</span></td>' +
          '<td data-label="Activity"><span class="cell-strong">' + escapeHTML(l.activity) + '</span></td>' +
          '<td data-label="Status"><span class="status ' + statusCls + '"><i class="bi ' + statusIcon + '"></i> ' + escapeHTML(l.status) + '</span></td>' +
        '</tr>'
      );
    }).join('');
  }

  function renderAllApi() {
    renderProviders();
    renderLogs();
    refreshCounts();
  }

  function addLog(providerName, service, activity, status) {
    apiState.logs.unshift({ ts: new Date().toISOString(), provider: providerName, service: service, activity: activity, status: status });
    if (apiState.logs.length > 60) apiState.logs.length = 60;
    saveApiState();
  }

  function openAdd(category) {
    if (!apiEls.modalEl) return;
    apiState.editingId = null;
    apiState.editingCategory = category;
    if (apiEls.modalTitle) apiEls.modalTitle.innerHTML = '<i class="bi bi-plug-fill"></i> Add ' + (category === 'Flight' ? 'flight' : 'hotel') + ' API provider';
    if (apiEls.nameInput) apiEls.nameInput.value = '';
    if (apiEls.urlInput) apiEls.urlInput.value = '';
    if (apiEls.keyInput) { apiEls.keyInput.value = ''; apiEls.keyInput.placeholder = 'Enter API key'; }
    if (apiEls.secretInput) { apiEls.secretInput.value = ''; apiEls.secretInput.placeholder = 'Enter API secret'; }
    if (apiEls.envSelect) apiEls.envSelect.value = 'Sandbox';
    if (apiEls.enabledCheck) apiEls.enabledCheck.checked = true;
    if (apiEls.keyHint) apiEls.keyHint.hidden = true;
    if (apiEls.secretHint) apiEls.secretHint.hidden = true;
    clearApiErrors();
    resetApiToggles();
    bootstrap.Modal.getOrCreateInstance(apiEls.modalEl).show();
  }

  function openEditApi(id) {
    var p = getProvider(id);
    if (!p || !apiEls.modalEl) return;
    apiState.editingId = id;
    apiState.editingCategory = p.category;
    if (apiEls.modalTitle) apiEls.modalTitle.innerHTML = '<i class="bi bi-pencil-square"></i> Edit ' + (p.category === 'Flight' ? 'flight' : 'hotel') + ' API provider';
    if (apiEls.nameInput) apiEls.nameInput.value = p.name;
    if (apiEls.urlInput) apiEls.urlInput.value = p.baseUrl;
    if (apiEls.keyInput) { apiEls.keyInput.value = ''; apiEls.keyInput.placeholder = p.apiKeyMasked || 'Enter API key'; }
    if (apiEls.secretInput) { apiEls.secretInput.value = ''; apiEls.secretInput.placeholder = p.secretMasked || 'Enter API secret'; }
    if (apiEls.envSelect) apiEls.envSelect.value = p.env;
    if (apiEls.enabledCheck) apiEls.enabledCheck.checked = p.enabled;
    if (apiEls.keyHint) apiEls.keyHint.hidden = false;
    if (apiEls.secretHint) apiEls.secretHint.hidden = false;
    clearApiErrors();
    resetApiToggles();
    bootstrap.Modal.getOrCreateInstance(apiEls.modalEl).show();
  }

  function clearApiErrors() {
    [apiEls.nameInput, apiEls.urlInput, apiEls.keyInput, apiEls.secretInput].forEach(function (el) {
      if (el) el.classList.remove('is-invalid');
    });
  }

  function resetApiToggles() {
    document.querySelectorAll('.cred-toggle').forEach(function (btn) {
      var target = document.getElementById(btn.dataset.target);
      if (target) target.type = 'password';
      var icon = btn.querySelector('i');
      if (icon) icon.className = 'bi bi-eye-fill';
      btn.setAttribute('aria-pressed', 'false');
      btn.setAttribute('aria-label', 'Show');
    });
  }

  function saveProvider() {
    var name = apiEls.nameInput ? apiEls.nameInput.value.trim() : '';
    var url  = apiEls.urlInput ? apiEls.urlInput.value.trim() : '';
    var key  = apiEls.keyInput ? apiEls.keyInput.value : '';
    var secret = apiEls.secretInput ? apiEls.secretInput.value : '';
    var env = apiEls.envSelect ? apiEls.envSelect.value : 'Sandbox';
    var enabled = apiEls.enabledCheck ? apiEls.enabledCheck.checked : true;
    var valid = true;
    if (!name) { if (apiEls.nameInput) apiEls.nameInput.classList.add('is-invalid'); valid = false; } else if (apiEls.nameInput) apiEls.nameInput.classList.remove('is-invalid');
    if (!url || !/^https?:\/\//i.test(url)) { if (apiEls.urlInput) apiEls.urlInput.classList.add('is-invalid'); valid = false; } else if (apiEls.urlInput) apiEls.urlInput.classList.remove('is-invalid');
    var isEdit = !!apiState.editingId;
    if (!isEdit && !key) { if (apiEls.keyInput) apiEls.keyInput.classList.add('is-invalid'); valid = false; } else if (apiEls.keyInput) apiEls.keyInput.classList.remove('is-invalid');
    if (!valid) return;

    if (isEdit) {
      var p = getProvider(apiState.editingId);
      if (p) {
        p.name = name; p.baseUrl = url; p.env = env; p.enabled = enabled;
        if (key) p.apiKeyMasked = maskValue(key);
        if (secret) p.secretMasked = maskValue(secret);
        addLog(p.name, p.category, 'Provider updated', 'Success');
      }
    } else {
      apiState.providers.push({
        id: 'api-' + Date.now(),
        name: name,
        category: apiState.editingCategory,
        baseUrl: url,
        env: env,
        apiKeyMasked: maskValue(key),
        secretMasked: secret ? maskValue(secret) : '',
        enabled: enabled,
        status: 'Untested',
        lastTest: null
      });
      addLog(name, apiState.editingCategory, 'Provider added', 'Success');
    }
    key = null; secret = null;
    saveApiState();
    if (apiEls.modalEl) bootstrap.Modal.getInstance(apiEls.modalEl).hide();
    renderAllApi();
  }

  function testConnection(id) {
    var p = getProvider(id);
    if (!p || apiState.testing[id]) return;
    apiState.testing[id] = true;
    renderProviders();
    window.setTimeout(function () {
      var success = Math.random() < 0.7;
      p.status = success ? 'Connected' : 'Error';
      p.lastTest = new Date().toISOString();
      addLog(p.name, p.category, 'Connection test', success ? 'Success' : 'Failed');
      delete apiState.testing[id];
      saveApiState();
      renderAllApi();
    }, 1200);
  }

  function openDeleteApi(id) {
    var p = getProvider(id);
    if (!p || !apiEls.deleteEl) return;
    apiState.deleteId = id;
    if (apiEls.deleteName) apiEls.deleteName.textContent = p.name;
    bootstrap.Modal.getOrCreateInstance(apiEls.deleteEl).show();
  }

  function confirmDeleteApi() {
    var id = apiState.deleteId;
    if (!id) return;
    var p = getProvider(id);
    if (p) {
      addLog(p.name, p.category, 'Provider removed', 'Success');
      apiState.providers = apiState.providers.filter(function (x) { return x.id !== id; });
      saveApiState();
    }
    apiState.deleteId = null;
    if (apiEls.deleteEl) bootstrap.Modal.getInstance(apiEls.deleteEl).hide();
    renderAllApi();
  }

  document.addEventListener('click', function (event) {
    var addBtn = event.target.closest('[data-api-add]');
    if (addBtn) { openAdd(addBtn.dataset.apiAdd); return; }
    var editBtn = event.target.closest('.js-api-edit');
    if (editBtn) { openEditApi(editBtn.dataset.id); return; }
    var testBtn = event.target.closest('.js-api-test');
    if (testBtn) { testConnection(testBtn.dataset.id); return; }
    var deleteBtn = event.target.closest('.js-api-delete');
    if (deleteBtn) { openDeleteApi(deleteBtn.dataset.id); return; }
    var toggle = event.target.closest('.cred-toggle');
    if (toggle) {
      var target = document.getElementById(toggle.dataset.target);
      if (target) {
        var isPassword = target.type === 'password';
        target.type = isPassword ? 'text' : 'password';
        var icon = toggle.querySelector('i');
        if (icon) icon.className = isPassword ? 'bi bi-eye-slash-fill' : 'bi bi-eye-fill';
        toggle.setAttribute('aria-pressed', isPassword ? 'true' : 'false');
        toggle.setAttribute('aria-label', isPassword ? 'Hide' : 'Show');
      }
    }
  });

  if (apiEls.saveBtn) apiEls.saveBtn.addEventListener('click', saveProvider);
  if (apiEls.deleteConfirm) apiEls.deleteConfirm.addEventListener('click', confirmDeleteApi);

  [apiEls.nameInput, apiEls.urlInput, apiEls.keyInput, apiEls.secretInput].forEach(function (el) {
    if (!el) return;
    el.addEventListener('input', function () { el.classList.remove('is-invalid'); });
  });

  var refreshBtn = document.getElementById('apiRefreshBtn');
  if (refreshBtn) refreshBtn.addEventListener('click', function () { apiState.testing = {}; renderAllApi(); });

  /* =========================================================
     GLOBAL & COMMON CONTROLS
     ========================================================= */
  function bindSearch(inputId, filterId, stateObj, renderFn) {
    var input = $(inputId), filter = $(filterId);
    if (input) input.addEventListener('input', function () { stateObj.query = input.value; renderFn(); });
    if (filter) filter.addEventListener('change', function () { stateObj.status = filter.value; renderFn(); });
  }

  bindSearch('customerSearch', 'customerStatusFilter', customerState, renderCustomers);
  bindSearch('flightSearch', 'flightStatusFilter', flightState, renderFlights);
  bindSearch('hotelSearch', 'hotelStatusFilter', hotelState, renderHotels);
  bindSearch('loanSearch', 'loanStatusFilter', loanState, renderLoans);
  bindSearch('txnSearch', 'txnStatusFilter', txnState, renderTransactions);

  if ($('destinationSearch')) $('destinationSearch').addEventListener('input', function () { destState.query = this.value; renderDestinations(); });
  if ($('destinationContinentFilter')) $('destinationContinentFilter').addEventListener('change', function () { destState.continent = this.value; renderDestinations(); });

  if ($('notificationsBtn')) {
    $('notificationsBtn').addEventListener('click', function () {
      if (!detailModalEl || !detailTitle || !detailBody) return;
      detailTitle.innerHTML = '<i class="bi bi-bell-fill"></i> Notifications';
      detailBody.innerHTML = '<p style="font-size:14px;color:var(--ink-soft);margin-bottom:20px;line-height:1.7;">Three demonstration alerts:</p>' +
        '<ul class="activity-list">' +
          '<li class="activity-item"><span class="activity-icon green"><i class="bi bi-check2-circle"></i></span><div class="activity-body"><strong>Flight booking confirmed</strong><span>TBF-2201 · Adaeze Okonkwo</span></div><span class="activity-time">18m</span></li>' +
          '<li class="activity-item"><span class="activity-icon gold"><i class="bi bi-credit-card-2-front-fill"></i></span><div class="activity-body"><strong>Payment received</strong><span>PAY-9005 · ₦875,000</span></div><span class="activity-time">1h</span></li>' +
          '<li class="activity-item"><span class="activity-icon violet"><i class="bi bi-cash-coin"></i></span><div class="activity-body"><strong>Financing enquiry submitted</strong><span>TBLN-0454 · Fatima Al-Hassan</span></div><span class="activity-time">3h</span></li>' +
        '</ul>' +
        '<p class="modal-note mt-3"><i class="bi bi-info-circle"></i>Alerts are demonstration data and are not generated by real activity.</p>';
      bootstrap.Modal.getOrCreateInstance(detailModalEl).show();
    });
  }

  if ($('helpBtn')) {
    $('helpBtn').addEventListener('click', function () { window.location.href = '../contact.html'; });
  }

  function refreshAfterChange() {
    saveData();
    refreshCounts();
    if ($('statCustomers')) renderDashboardStats();
    if ($('statusDonut')) renderStatusDonut();
    if ($('txnChart')) renderTxnOverview();
    if ($('recentBookingsBody')) renderRecentBookings();
    if ($('customersBody')) renderCustomers();
    if ($('flightsBody')) renderFlights();
    if ($('hotelsBody')) renderHotels();
    if ($('loansBody')) renderLoans();
    if ($('destinationsGrid')) renderDestinations();
    if ($('transactionsBody')) renderTransactions();
    if ($('reportChart')) renderReports();
  }

  function initPage() {
    if ($('year')) $('year').textContent = new Date().getFullYear();
    refreshCounts();

    // Dashboard page elements
    if ($('statCustomers') || $('bookingChart')) {
      renderDashboardStats();
      renderBookingChart('bookingChart', 'bookingChartLabels');
      renderStatusDonut();
      renderTxnOverview();
      renderActivity();
      renderRecentBookings();
    }

    // Customers page
    if ($('customersBody')) renderCustomers();

    // Flights page
    if ($('flightsBody')) renderFlights();

    // Hotels page
    if ($('hotelsBody')) renderHotels();

    // Loans page
    if ($('loansBody')) renderLoans();

    // Destinations page
    if ($('destinationsGrid')) renderDestinations();

    // Transactions page
    if ($('transactionsBody')) renderTransactions();

    // Reports page
    if ($('reportChart')) renderReports();

    // API Integrations page
    if (apiEls.flightBody || apiEls.hotelBody) renderAllApi();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initPage);
  } else {
    initPage();
  }

})();
