<?php $this->layout('layouts/admin', ['title' => 'Flight Inventory — Travelbookings Admin', 'page' => 'flights']); ?>

<section class="view active" id="view-flights" data-view="flights">
          <div class="page-head">
            <div>
              <h1>Flight bookings</h1>
              <p>All sample flight bookings across the platform.</p>
            </div>
          </div>
          <div class="card-box">
            <div class="toolbar">
              <div class="search-box">
                <i class="bi bi-search"></i>
                <label class="visually-hidden" for="flightSearch">Search flight bookings</label>
                <input type="search" id="flightSearch" placeholder="Search reference, customer or route…" />
              </div>
              <label class="visually-hidden" for="flightStatusFilter">Filter by status</label>
              <select class="filter-select" id="flightStatusFilter">
                <option value="">All statuses</option>
                <option value="Confirmed">Confirmed</option>
                <option value="Pending">Pending</option>
                <option value="Completed">Completed</option>
                <option value="Cancelled">Cancelled</option>
              </select>
              <span class="toolbar-count"><strong id="flightCount">0</strong> records</span>
            </div>
            <div class="table-responsive">
              <table class="table-clean">
                <thead>
                  <tr>
                    <th scope="col">Reference</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Airline &amp; route</th>
                    <th scope="col">Departure</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Status</th>
                    <th scope="col" class="text-end">Actions</th>
                  </tr>
                </thead>
                <tbody id="flightsBody"></tbody>
              </table>
            </div>
          </div>
        </section>
