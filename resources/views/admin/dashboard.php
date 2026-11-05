<?php $this->layout('layouts/admin', ['title' => 'Dashboard — Travelbookings Admin', 'page' => 'dashboard']); ?>

<section class="view active" id="view-dashboard" data-view="dashboard">
          <div class="page-head">
            <div>
              <h1>Admin dashboard <span class="demo-pill"><i class="bi bi-info-circle"></i> Demo data</span></h1>
              <p>Overview of customers, bookings and platform activity.</p>
            </div>
            <div class="page-head-actions">
              <a href="/admin/reports" class="btn btn-ghost">
                <i class="bi bi-bar-chart-line"></i> View reports
              </a>
              <button type="button" class="btn btn-gold" id="addDestinationBtnTop">
                <i class="bi bi-plus-lg"></i> Add destination
              </button>
            </div>
          </div>

          <div class="info-note">
            <i class="bi bi-exclamation-circle"></i>
            <div>
              <strong>Demonstration administration console.</strong> Every customer, booking,
              application and transaction below is sample data held in this page only. No real
              financial transaction is processed and no loan is approved. Edits and deletions affect
              only the in-memory sample records and reset when the page reloads.
            </div>
          </div>

          <div class="stat-grid">
            <div class="stat-card">
              <div class="stat-top">
                <span class="stat-icon"><i class="bi bi-people-fill"></i></span>
                <span class="stat-tag">All time</span>
              </div>
              <span class="stat-value" id="statCustomers">0</span>
              <span class="stat-label">Total customers</span>
              <span class="stat-foot"><i class="bi bi-person-check-fill"></i> <span id="statActiveCustomers">0</span> active accounts</span>
            </div>
            <div class="stat-card">
              <div class="stat-top">
                <span class="stat-icon gold"><i class="bi bi-airplane-fill"></i></span>
                <span class="stat-tag">Bookings</span>
              </div>
              <span class="stat-value" id="statFlights">0</span>
              <span class="stat-label">Flight bookings</span>
              <span class="stat-foot"><i class="bi bi-clock-history"></i> <span id="statPendingFlights">0</span> pending</span>
            </div>
            <div class="stat-card">
              <div class="stat-top">
                <span class="stat-icon navy"><i class="bi bi-building-fill"></i></span>
                <span class="stat-tag">Reservations</span>
              </div>
              <span class="stat-value" id="statHotels">0</span>
              <span class="stat-label">Hotel reservations</span>
              <span class="stat-foot"><i class="bi bi-clock-history"></i> <span id="statPendingHotels">0</span> pending</span>
            </div>
            <div class="stat-card">
              <div class="stat-top">
                <span class="stat-icon violet"><i class="bi bi-cash-coin"></i></span>
                <span class="stat-tag">Applications</span>
              </div>
              <span class="stat-value" id="statLoans">0</span>
              <span class="stat-label">Financing applications</span>
              <span class="stat-foot muted"><i class="bi bi-shield-exclamation"></i> Not a lending decision</span>
            </div>
          </div>

          <div class="row g-3 mb-3">
            <div class="col-lg-7">
              <div class="card-box h-100">
                <div class="card-box-head">
                  <h2><i class="bi bi-bar-chart-fill"></i> Booking activity</h2>
                  <span class="head-sub">Sample by month</span>
                </div>
                <div class="card-box-body">
                  <div class="chart-legend">
                    <span><i class="swatch swatch-sky"></i> Flights</span>
                    <span><i class="swatch swatch-navy"></i> Hotels</span>
                  </div>
                  <div class="bar-chart" id="bookingChart" role="img" aria-label="Bar chart of sample monthly flight and hotel bookings"></div>
                  <div class="bar-labels" id="bookingChartLabels"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="card-box h-100">
                <div class="card-box-head">
                  <h2><i class="bi bi-pie-chart-fill"></i> Booking status overview</h2>
                </div>
                <div class="card-box-body">
                  <div class="donut-wrap">
                    <div class="donut" id="statusDonut" role="img" aria-label="Donut chart of booking statuses">
                      <div class="donut-center">
                        <strong id="statusDonutTotal">0</strong>
                        <span>Bookings</span>
                      </div>
                    </div>
                    <div class="donut-legend" id="statusLegend"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row g-3 mb-3">
            <div class="col-lg-5">
              <div class="card-box h-100">
                <div class="card-box-head">
                  <h2><i class="bi bi-activity"></i> Recent activity</h2>
                </div>
                <div class="card-box-body">
                  <ul class="activity-list" id="activityList"></ul>
                </div>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="card-box h-100">
                <div class="card-box-head">
                  <h2><i class="bi bi-wallet2"></i> Transaction overview</h2>
                  <a href="/admin/transactions" class="btn-link-soft">
                    All transactions <i class="bi bi-arrow-right"></i>
                  </a>
                </div>
                <div class="card-box-body">
                  <div class="row g-3 text-center mb-3">
                    <div class="col-4">
                      <span class="stat-value" style="font-size:1.5rem;" id="txnTotal">₦0</span>
                      <span class="stat-label">Total value</span>
                    </div>
                    <div class="col-4">
                      <span class="stat-value" style="font-size:1.5rem;color:var(--green);" id="txnPaid">₦0</span>
                      <span class="stat-label">Paid</span>
                    </div>
                    <div class="col-4">
                      <span class="stat-value" style="font-size:1.5rem;color:var(--gold);" id="txnPending">₦0</span>
                      <span class="stat-label">Pending</span>
                    </div>
                  </div>
                  <div class="chart-legend mb-0">
                    <span><i class="swatch swatch-green"></i> Paid</span>
                    <span><i class="swatch swatch-gold"></i> Pending</span>
                    <span><i class="swatch swatch-violet"></i> Refunded</span>
                    <span><i class="swatch swatch-red"></i> Failed</span>
                  </div>
                  <div class="bar-chart" style="height:120px;" id="txnChart"></div>
                </div>
              </div>
            </div>
          </div>

          <div class="card-box">
            <div class="card-box-head">
              <h2><i class="bi bi-clock-history"></i> Recent bookings</h2>
              <div class="d-flex gap-2">
                <a href="/admin/flights" class="btn-link-soft">Flights</a>
                <a href="/admin/hotels" class="btn-link-soft">Hotels</a>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table-clean">
                <thead>
                  <tr>
                    <th scope="col">Reference</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Booking</th>
                    <th scope="col">Travel date</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Status</th>
                    <th scope="col" class="text-end">Action</th>
                  </tr>
                </thead>
                <tbody id="recentBookingsBody"></tbody>
              </table>
            </div>
          </div>
        </section>
