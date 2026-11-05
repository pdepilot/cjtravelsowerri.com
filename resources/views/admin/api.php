<?php $this->layout('layouts/admin', ['title' => 'API Integrations — CJ Travels Admin', 'page' => 'api']); ?>

<section class="view active" id="view-api" data-view="api">
          <div class="page-head">
            <div>
              <h1>API Integrations <span class="demo-pill"><i class="bi bi-info-circle"></i> Demo data</span></h1>
              <p>Manage flight and hotel API provider connections.</p>
            </div>
            <div class="page-head-actions">
              <button type="button" class="btn btn-ghost" id="apiRefreshBtn">
                <i class="bi bi-arrow-clockwise"></i> Refresh
              </button>
            </div>
          </div>

          <div class="info-note">
            <i class="bi bi-shield-lock"></i>
            <div>
              <strong>Frontend demonstration only.</strong> No real API connections are made from this page.
              Credential fields below use masked placeholders and are never stored in JavaScript, localStorage
              or logs. When the PHP/MySQL backend is connected, credentials will be encrypted server-side and
              only accessible to authorized administrators.
            </div>
          </div>

          <div class="api-security-note">
            <i class="bi bi-exclamation-triangle"></i>
            <div>
              <strong>Security requirements.</strong> API keys and secrets must never be exposed to the
              browser in production. They will live encrypted on the server and be used only by server-side
              code. This page will communicate with a PHP endpoint that returns masked credential metadata
              only. Never log credentials, never store them in localStorage, and never display full secrets
              after saving.
            </div>
          </div>

          <div class="api-grid">
            <div class="api-panel">
              <div class="api-panel-head">
                <h2>
                  <i class="bi bi-airplane-fill"></i> Flight API providers
                  <span class="api-panel-count" id="flightProviderCount">0 providers</span>
                </h2>
                <button type="button" class="btn btn-navy btn-sm" data-api-add="Flight">
                  <i class="bi bi-plus-lg"></i> Add flight provider
                </button>
              </div>
              <div class="api-panel-body">
                <div class="api-table-wrap">
                  <table class="api-table" aria-label="Flight API providers">
                    <thead>
                      <tr>
                        <th scope="col">Provider</th>
                        <th scope="col">Service</th>
                        <th scope="col">Environment</th>
                        <th scope="col">Status</th>
                        <th scope="col">Last test</th>
                        <th scope="col">Active</th>
                        <th scope="col" class="text-end">Actions</th>
                      </tr>
                    </thead>
                    <tbody id="flightProvidersBody"></tbody>
                  </table>
                </div>
                <div class="api-empty" id="flightEmpty">
                  <i class="bi bi-plug-fill"></i>
                  <p>No flight API providers yet.</p>
                </div>
              </div>
            </div>

            <div class="api-panel">
              <div class="api-panel-head">
                <h2>
                  <i class="bi bi-building-fill"></i> Hotel API providers
                  <span class="api-panel-count" id="hotelProviderCount">0 providers</span>
                </h2>
                <button type="button" class="btn btn-navy btn-sm" data-api-add="Hotel">
                  <i class="bi bi-plus-lg"></i> Add hotel provider
                </button>
              </div>
              <div class="api-panel-body">
                <div class="api-table-wrap">
                  <table class="api-table" aria-label="Hotel API providers">
                    <thead>
                      <tr>
                        <th scope="col">Provider</th>
                        <th scope="col">Service</th>
                        <th scope="col">Environment</th>
                        <th scope="col">Status</th>
                        <th scope="col">Last test</th>
                        <th scope="col">Active</th>
                        <th scope="col" class="text-end">Actions</th>
                      </tr>
                    </thead>
                    <tbody id="hotelProvidersBody"></tbody>
                  </table>
                </div>
                <div class="api-empty" id="hotelEmpty">
                  <i class="bi bi-plug-fill"></i>
                  <p>No hotel API providers yet.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="card-box">
            <div class="card-box-head">
              <h2><i class="bi bi-journal-text"></i> API activity logs</h2>
              <span class="head-sub" id="apiLogCount">0 events</span>
            </div>
            <div class="table-responsive">
              <table class="api-log-table" aria-label="API activity logs">
                <thead>
                  <tr>
                    <th scope="col">Date &amp; time</th>
                    <th scope="col">Provider</th>
                    <th scope="col">Service</th>
                    <th scope="col">Activity</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody id="apiLogBody"></tbody>
              </table>
            </div>
            <div class="api-empty" id="apiLogEmpty">
              <i class="bi bi-journal"></i>
              <p>No API activity yet.</p>
            </div>
          </div>
        </section>
