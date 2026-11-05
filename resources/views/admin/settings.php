<?php $this->layout('layouts/admin', ['title' => 'Console Settings — Travelbookings Admin', 'page' => 'settings']); ?>

<section class="view active" id="view-settings" data-view="settings">
          <div class="page-head">
            <div>
              <h1>Website settings</h1>
              <p>Demonstration controls for site configuration.</p>
            </div>
          </div>
          <div class="info-note">
            <i class="bi bi-sliders"></i>
            <div>
              <strong>Demo settings only.</strong> Changes on this page are not saved anywhere and
              reset when the page reloads. They show where website configuration will live once the
              admin backend is connected.
            </div>
          </div>
          <div class="row g-3">
            <div class="col-lg-7">
              <div class="card-box mb-3">
                <div class="card-box-head">
                  <h2><i class="bi bi-building"></i> Site details</h2>
                </div>
                <div class="card-box-body">
                  <div class="row g-3">
                    <div class="col-md-6">
                      <label class="form-label" for="setSiteName">Site name</label>
                      <input type="text" class="form-control" id="setSiteName" value="Travelbookings" />
                    </div>
                    <div class="col-md-6">
                      <label class="form-label" for="setSupportEmail">Support email</label>
                      <input type="email" class="form-control" id="setSupportEmail" value="hello@travelbookings.ng" />
                    </div>
                    <div class="col-md-6">
                      <label class="form-label" for="setSupportPhone">Support phone</label>
                      <input type="text" class="form-control" id="setSupportPhone" value="+234 812 345 6789" />
                    </div>
                    <div class="col-md-6">
                      <label class="form-label" for="setCurrency">Default currency</label>
                      <select class="form-select" id="setCurrency">
                        <option value="NGN" selected>Nigerian Naira (₦)</option>
                        <option value="USD">US Dollar ($)</option>
                        <option value="GBP">British Pound (£)</option>
                        <option value="EUR">Euro (€)</option>
                      </select>
                    </div>
                    <div class="col-12">
                      <label class="form-label" for="setTagline">Homepage tagline</label>
                      <textarea class="form-control" id="setTagline">Your next journey, beautifully booked.</textarea>
                    </div>
                  </div>
                  <div class="d-flex gap-2 mt-3">
                    <button type="button" class="btn btn-navy" id="saveSettingsBtn">
                      <i class="bi bi-check2"></i> Save changes
                    </button>
                    <button type="button" class="btn btn-ghost" id="resetSettingsBtn">
                      Reset
                    </button>
                  </div>
                  <div class="toast-inline mt-3" id="settingsToast">
                    <i class="bi bi-info-circle"></i>
                    Demonstration only — settings were not saved anywhere.
                  </div>
                </div>
              </div>

              <div class="card-box">
                <div class="card-box-head">
                  <h2><i class="bi bi-toggles"></i> Feature toggles</h2>
                </div>
                <div class="card-box-body">
                  <div class="setting-row">
                    <div class="setting-row-text">
                      <strong>Flight search</strong>
                      <span>Show the flight search tool on the public site.</span>
                    </div>
                    <div class="form-check form-switch m-0">
                      <input class="form-check-input" type="checkbox" id="toggleFlights" checked aria-label="Enable flight search" />
                    </div>
                  </div>
                  <div class="setting-row">
                    <div class="setting-row-text">
                      <strong>Hotel search</strong>
                      <span>Show the hotel search tool on the public site.</span>
                    </div>
                    <div class="form-check form-switch m-0">
                      <input class="form-check-input" type="checkbox" id="toggleHotels" checked aria-label="Enable hotel search" />
                    </div>
                  </div>
                  <div class="setting-row">
                    <div class="setting-row-text">
                      <strong>Travel financing enquiries</strong>
                      <span>Allow visitors to submit financing enquiries.</span>
                    </div>
                    <div class="form-check form-switch m-0">
                      <input class="form-check-input" type="checkbox" id="toggleFinancing" checked aria-label="Enable financing enquiries" />
                    </div>
                  </div>
                  <div class="setting-row">
                    <div class="setting-row-text">
                      <strong>Maintenance mode</strong>
                      <span>Replace the public site with a maintenance notice.</span>
                    </div>
                    <div class="form-check form-switch m-0">
                      <input class="form-check-input" type="checkbox" id="toggleMaintenance" aria-label="Enable maintenance mode" />
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-5">
              <div class="card-box mb-3">
                <div class="card-box-head">
                  <h2><i class="bi bi-shield-lock"></i> Security notices</h2>
                </div>
                <div class="card-box-body">
                  <div class="setting-row">
                    <div class="setting-row-text">
                      <strong>Never request bank credentials</strong>
                      <span>Admin accounts must never ask customers for bank passwords, card PINs or OTPs.</span>
                    </div>
                    <span class="status status-confirmed"><i class="bi bi-check-circle-fill"></i> Policy</span>
                  </div>
                  <div class="setting-row">
                    <div class="setting-row-text">
                      <strong>Financing is partner-led</strong>
                      <span>All lending decisions belong to independent licensed partners.</span>
                    </div>
                    <span class="status status-confirmed"><i class="bi bi-check-circle-fill"></i> Policy</span>
                  </div>
                  <div class="setting-row">
                    <div class="setting-row-text">
                      <strong>Demonstration environment</strong>
                      <span>No real customer data is stored in this console.</span>
                    </div>
                    <span class="status status-inreview"><i class="bi bi-hourglass-split"></i> Demo</span>
                  </div>
                </div>
              </div>

              <div class="card-box">
                <div class="card-box-head">
                  <h2><i class="bi bi-info-circle"></i> Environment</h2>
                </div>
                <div class="card-box-body">
                  <div class="detail-grid" style="margin:0;">
                    <div class="detail-item">
                      <span>Console version</span>
                      <strong>Demo 1.1</strong>
                    </div>
                    <div class="detail-item">
                      <span>Data source</span>
                      <strong>In-page sample</strong>
                    </div>
                    <div class="detail-item">
                      <span>Backend</span>
                      <strong>Not connected</strong>
                    </div>
                    <div class="detail-item">
                      <span>Payments</span>
                      <strong>Disabled</strong>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
