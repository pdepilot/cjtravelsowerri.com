<?php $this->layout('layouts/customer', ['title' => 'Overview — Customer Dashboard — Travelbookings', 'page' => 'overview']); ?>

<section class="view active" id="view-overview" data-view="overview" aria-labelledby="overviewTitle">
          <div class="page-head">
            <div>
              <h1 id="overviewTitle" class="h2 mb-1">
                Welcome back, Adaeze <span class="demo-pill"><i class="bi bi-stars"></i> Customer Portal</span>
              </h1>
              <p>Review your travel itinerary, active bookings, financing status, and upcoming luxury escapes.</p>
            </div>
            <div class="page-head-actions">
              <a href="/customer/profile" class="btn btn-ghost btn-sm">
                <i class="bi bi-person-fill"></i> View profile
              </a>
              <a href="/customer/settings" class="btn btn-ghost btn-sm">
                <i class="bi bi-gear-fill"></i> Settings
              </a>
            </div>
          </div>

          <!-- PROFILE CARD BANNER -->
          <div class="profile-card">
            <span class="avatar-lg">AO</span>
            <div class="profile-meta">
              <h2>Adaeze Okonkwo</h2>
              <span class="email">adaeze.okonkwo@example.com</span>
              <div class="profile-tags">
                <span class="profile-tag gold"><i class="bi bi-award-fill"></i> Gold Member</span>
                <span class="profile-tag"><i class="bi bi-calendar-check"></i> Member since Jan 2024</span>
                <span class="profile-tag"><i class="bi bi-geo-alt-fill"></i> Lagos, Nigeria</span>
              </div>
            </div>
            <div class="profile-actions">
              <a href="/customer/profile" class="btn btn-ghost btn-sm">Edit profile</a>
            </div>
          </div>

          <!-- STAT CARDS -->
          <div class="stat-grid">
            <div class="stat-card">
              <div class="stat-top">
                <span class="stat-icon gold"><i class="bi bi-wallet2"></i></span>
                <span class="stat-tag">All-time</span>
              </div>
              <span class="stat-value">₦3,595,000</span>
              <span class="stat-label">Total Bookings Spent</span>
              <div class="stat-foot">
                <i class="bi bi-check-circle-fill"></i> Fully reconciled
              </div>
            </div>

            <div class="stat-card">
              <div class="stat-top">
                <span class="stat-icon green"><i class="bi bi-airplane-fill"></i></span>
                <span class="stat-tag">Active</span>
              </div>
              <span class="stat-value" id="statFlights">4</span>
              <span class="stat-label">Flight Reservations</span>
              <div class="stat-foot">
                <i class="bi bi-arrow-up-right"></i> 1 upcoming trip
              </div>
            </div>

            <div class="stat-card">
              <div class="stat-top">
                <span class="stat-icon navy"><i class="bi bi-building-fill"></i></span>
                <span class="stat-tag">Luxury</span>
              </div>
              <span class="stat-value" id="statHotels">3</span>
              <span class="stat-label">Hotel Bookings</span>
              <div class="stat-foot">
                <i class="bi bi-calendar-check"></i> 1 upcoming stay
              </div>
            </div>

            <div class="stat-card">
              <div class="stat-top">
                <span class="stat-icon gold"><i class="bi bi-cash-coin"></i></span>
                <span class="stat-tag">Financing</span>
              </div>
              <span class="stat-value" id="statFinancing">2</span>
              <span class="stat-label">Travel Enquiries</span>
              <div class="stat-foot">
                <i class="bi bi-clock-history"></i> 1 in partner review
              </div>
            </div>
          </div>

          <!-- QUICK ACTIONS -->
          <div class="quick-grid">
            <a href="../flights.html" class="quick-card">
              <span class="q-icon"><i class="bi bi-airplane-engines"></i></span>
              <span class="q-text">
                <strong>Book a flight</strong>
                <span>Search top international & domestic routes</span>
              </span>
              <i class="bi bi-chevron-right"></i>
            </a>

            <a href="../hotels.html" class="quick-card">
              <span class="q-icon"><i class="bi bi-building-check"></i></span>
              <span class="q-text">
                <strong>Reserve luxury hotel</strong>
                <span>Handpicked suites & boutique resorts</span>
              </span>
              <i class="bi bi-chevron-right"></i>
            </a>

            <a href="/customer/financing" class="quick-card">
              <span class="q-icon"><i class="bi bi-cash-stack"></i></span>
              <span class="q-text">
                <strong>Apply for financing</strong>
                <span>Flexible installment plans via licensed partners</span>
              </span>
              <i class="bi bi-chevron-right"></i>
            </a>
          </div>

          <!-- SPLIT LAYOUT: TRIPS & RECENT BOOKINGS + ACTIVITY & CONCIERGE -->
          <div class="row g-4">
            <div class="col-lg-7">
              <!-- UPCOMING TRIPS -->
              <div class="card-box mb-4">
                <div class="card-box-head">
                  <h2><i class="bi bi-calendar2-range"></i> Upcoming trips</h2>
                  <a href="/customer/flights" class="btn-link-soft">
                    View all <i class="bi bi-arrow-right"></i>
                  </a>
                </div>
                <div class="card-box-body p-0">
                  <div class="trip-list" id="upcomingTrips"></div>
                </div>
              </div>

              <!-- RECENT BOOKINGS TABLE -->
              <div class="card-box">
                <div class="card-box-head">
                  <h2><i class="bi bi-clock-history"></i> Recent bookings</h2>
                  <a href="/customer/flights" class="btn-link-soft">
                    All bookings <i class="bi bi-arrow-right"></i>
                  </a>
                </div>
                <div class="card-box-body p-0">
                  <div class="table-responsive">
                    <table class="table-clean">
                      <thead>
                        <tr>
                          <th>Reference</th>
                          <th>Booking</th>
                          <th>Travel date</th>
                          <th>Amount</th>
                          <th>Status</th>
                          <th class="text-end">Actions</th>
                        </tr>
                      </thead>
                      <tbody id="recentBookingsBody"></tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-5">
              <!-- RECENT ACTIVITY -->
              <div class="card-box mb-4">
                <div class="card-box-head">
                  <h3><i class="bi bi-bell-fill"></i> Recent activity</h3>
                </div>
                <div class="card-box-body">
                  <ul class="activity-list" id="activityList"></ul>
                </div>
              </div>

              <!-- CONCIERGE SUPPORT NOTE -->
              <div class="info-note">
                <i class="bi bi-shield-check"></i>
                <div>
                  <strong>24/7 Dedicated Concierge Support</strong><br />
                  Need assistance with seat selection, VIP airport lounge access, or special dietary requirements? Reach our travel concierge anytime via <a href="../contact.html" style="color:var(--navy);font-weight:600;">Support</a>.
                </div>
              </div>
            </div>
          </div>
        </section>
