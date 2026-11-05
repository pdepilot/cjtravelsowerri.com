<?php $this->layout('layouts/admin', ['title' => 'Hotel Partners — CJ Travels Admin', 'page' => 'hotels']); ?>

<section class="view active" id="view-hotels" data-view="hotels">
          <div class="page-head">
            <div>
              <h1>Hotel reservations</h1>
              <p>All sample hotel reservations across the platform.</p>
            </div>
          </div>
          <div class="card-box">
            <div class="toolbar">
              <div class="search-box">
                <i class="bi bi-search"></i>
                <label class="visually-hidden" for="hotelSearch">Search hotel reservations</label>
                <input type="search" id="hotelSearch" placeholder="Search reference, property or guest…" />
              </div>
              <label class="visually-hidden" for="hotelStatusFilter">Filter by status</label>
              <select class="filter-select" id="hotelStatusFilter">
                <option value="">All statuses</option>
                <option value="Confirmed">Confirmed</option>
                <option value="Pending">Pending</option>
                <option value="Completed">Completed</option>
                <option value="Cancelled">Cancelled</option>
              </select>
              <span class="toolbar-count"><strong id="hotelCount">0</strong> records</span>
            </div>
            <div class="table-responsive">
              <table class="table-clean">
                <thead>
                  <tr>
                    <th scope="col">Reference</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Property</th>
                    <th scope="col">Stay</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Status</th>
                    <th scope="col" class="text-end">Actions</th>
                  </tr>
                </thead>
                <tbody id="hotelsBody"></tbody>
              </table>
            </div>
          </div>
        </section>
