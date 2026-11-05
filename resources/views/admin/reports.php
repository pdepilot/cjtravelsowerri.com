<?php $this->layout('layouts/admin', ['title' => 'Financial Reports — CJ Travels Admin', 'page' => 'reports']); ?>

<section class="view active" id="view-reports" data-view="reports">
          <div class="page-head">
            <div>
              <h1>Reports</h1>
              <p>Aggregate views of the demonstration dataset.</p>
            </div>
            <div class="page-head-actions">
              <button type="button" class="btn btn-ghost" id="exportDemoBtn">
                <i class="bi bi-download"></i> Export (demo)
              </button>
            </div>
          </div>

          <div class="info-note blue">
            <i class="bi bi-info-circle"></i>
            <div>
              <strong>Reporting preview.</strong> These figures are calculated from the sample records
              in this page. Exports are not generated — the button demonstrates where the feature will
              sit once reporting is connected to the backend.
            </div>
          </div>

          <div class="stat-grid">
            <div class="stat-card">
              <div class="stat-top">
                <span class="stat-icon"><i class="bi bi-people-fill"></i></span>
                <span class="stat-tag">Sample</span>
              </div>
              <span class="stat-value" id="reportCustomers">0</span>
              <span class="stat-label">Customers</span>
            </div>
            <div class="stat-card">
              <div class="stat-top">
                <span class="stat-icon gold"><i class="bi bi-airplane-fill"></i></span>
                <span class="stat-tag">Sample</span>
              </div>
              <span class="stat-value" id="reportBookings">0</span>
              <span class="stat-label">Total bookings</span>
            </div>
            <div class="stat-card">
              <div class="stat-top">
                <span class="stat-icon green"><i class="bi bi-cash-stack"></i></span>
                <span class="stat-tag">Sample</span>
              </div>
              <span class="stat-value" id="reportRevenue">₦0</span>
              <span class="stat-label">Paid revenue</span>
            </div>
            <div class="stat-card">
              <div class="stat-top">
                <span class="stat-icon violet"><i class="bi bi-cash-coin"></i></span>
                <span class="stat-tag">Sample</span>
              </div>
              <span class="stat-value" id="reportLoanValue">₦0</span>
              <span class="stat-label">Financing requested</span>
            </div>
          </div>

          <div class="row g-3">
            <div class="col-lg-7">
              <div class="card-box h-100">
                <div class="card-box-head">
                  <h2><i class="bi bi-bar-chart-fill"></i> Monthly booking volume</h2>
                </div>
                <div class="card-box-body">
                  <div class="chart-legend">
                    <span><i class="swatch swatch-sky"></i> Flights</span>
                    <span><i class="swatch swatch-navy"></i> Hotels</span>
                  </div>
                  <div class="bar-chart" id="reportChart" role="img" aria-label="Bar chart of monthly sample bookings"></div>
                  <div class="bar-labels" id="reportChartLabels"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="card-box h-100">
                <div class="card-box-head">
                  <h2><i class="bi bi-globe-americas"></i> Bookings by continent</h2>
                </div>
                <div class="card-box-body">
                  <div class="donut-wrap">
                    <div class="donut" id="continentDonut" role="img" aria-label="Donut chart of bookings by continent">
                      <div class="donut-center">
                        <strong id="continentDonutTotal">0</strong>
                        <span>Bookings</span>
                      </div>
                    </div>
                    <div class="donut-legend" id="continentLegend"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
