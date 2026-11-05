<?php $this->layout('layouts/customer', ['title' => 'Settings — Customer Dashboard — CJ Travels', 'page' => 'settings']); ?>

<section class="view active" id="view-settings" data-view="settings" aria-labelledby="settingsTitle">
          <div class="page-head">
            <div>
              <h1 id="settingsTitle" class="h2 mb-1">
                Settings & Preferences <span class="demo-pill"><i class="bi bi-gear-fill"></i> Preferences</span>
              </h1>
              <p>Account preferences, notification choices, currency and security options.</p>
            </div>
          </div>

          <!-- NOTIFICATIONS PREFERENCES -->
          <div class="card-box mb-4">
            <div class="card-box-head">
              <h2><i class="bi bi-bell"></i> Notifications & Communication</h2>
            </div>
            <div class="card-box-body">
              <div class="setting-row">
                <div class="setting-row-text">
                  <strong>Booking status & itinerary changes</strong>
                  <span>Receive instant email updates when flight schedules, gates, or hotel confirmations change.</span>
                </div>
                <div class="form-check form-switch">
                  <input class="form-check-input setting-toggle" type="checkbox" id="notifBooking" checked />
                </div>
              </div>

              <div class="setting-row">
                <div class="setting-row-text">
                  <strong>SMS & WhatsApp travel alerts</strong>
                  <span>Receive urgent departure gate notifications and driver arrival alerts via SMS or WhatsApp.</span>
                </div>
                <div class="form-check form-switch">
                  <input class="form-check-input setting-toggle" type="checkbox" id="notifSms" checked />
                </div>
              </div>

              <div class="setting-row">
                <div class="setting-row-text">
                  <strong>Exclusive member offers & travel inspirations</strong>
                  <span>Curated seasonal packages, private jet deals, and partner hotel discounts.</span>
                </div>
                <div class="form-check form-switch">
                  <input class="form-check-input setting-toggle" type="checkbox" id="notifPromos" />
                </div>
              </div>
            </div>
          </div>

          <!-- LOCALIZATION & REGIONAL PREFERENCES -->
          <div class="card-box mb-4">
            <div class="card-box-head">
              <h2><i class="bi bi-globe2"></i> Localization & Regional</h2>
            </div>
            <div class="card-box-body">
              <div class="row g-3">
                <div class="col-md-4">
                  <label class="form-label" for="prefCurrency">Preferred currency</label>
                  <select class="form-select" id="prefCurrency">
                    <option value="NGN" selected>Nigerian Naira (₦ / NGN)</option>
                    <option value="USD">US Dollar ($ / USD)</option>
                    <option value="GBP">British Pound (£ / GBP)</option>
                    <option value="EUR">Euro (€ / EUR)</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <label class="form-label" for="prefLanguage">Language</label>
                  <select class="form-select" id="prefLanguage">
                    <option value="en" selected>English (UK)</option>
                    <option value="fr">Français</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <label class="form-label" for="prefTimezone">Timezone</label>
                  <select class="form-select" id="prefTimezone">
                    <option value="WAT" selected>West Africa Time (UTC+1)</option>
                    <option value="GMT">Greenwich Mean Time (UTC+0)</option>
                    <option value="GST">Gulf Standard Time (UTC+4)</option>
                  </select>
                </div>
              </div>
            </div>
          </div>

          <!-- SECURITY & SIGN-IN -->
          <div class="card-box">
            <div class="card-box-head">
              <h2><i class="bi bi-shield-lock"></i> Security & Sign-in</h2>
            </div>
            <div class="card-box-body">
              <div class="setting-row">
                <div class="setting-row-text">
                  <strong>Two-factor authentication (2FA)</strong>
                  <span>Protect your account with SMS or authenticator app verification code on every login.</span>
                </div>
                <div class="form-check form-switch">
                  <input class="form-check-input setting-toggle" type="checkbox" id="sec2FA" checked />
                </div>
              </div>

              <div class="row g-3 mt-2">
                <div class="col-md-4">
                  <label class="form-label" for="currentPass">Current password</label>
                  <input type="password" class="form-control" id="currentPass" placeholder="••••••••" />
                </div>
                <div class="col-md-4">
                  <label class="form-label" for="newPass">New password</label>
                  <input type="password" class="form-control" id="newPass" placeholder="••••••••" />
                </div>
                <div class="col-md-4">
                  <label class="form-label" for="confirmPass">Confirm new password</label>
                  <input type="password" class="form-control" id="confirmPass" placeholder="••••••••" />
                </div>
              </div>

              <div class="mt-4">
                <button type="button" class="btn btn-primary" onclick="alert('Security preferences saved (demo).')">
                  Update security settings
                </button>
              </div>
            </div>
          </div>
        </section>
