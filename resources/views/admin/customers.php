<?php $this->layout('layouts/admin', ['title' => 'Customers — Travelbookings Admin', 'page' => 'customers']); ?>

<section class="view active" id="view-customers" data-view="customers">
          <div class="page-head">
            <div>
              <h1>Customers</h1>
              <p>Search, filter and review demonstration customer records.</p>
            </div>
          </div>
          <div class="card-box">
            <div class="toolbar">
              <div class="search-box">
                <i class="bi bi-search"></i>
                <label class="visually-hidden" for="customerSearch">Search customers</label>
                <input type="search" id="customerSearch" placeholder="Search name, email or country…" />
              </div>
              <label class="visually-hidden" for="customerStatusFilter">Filter by account status</label>
              <select class="filter-select" id="customerStatusFilter">
                <option value="">All statuses</option>
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>
              </select>
              <span class="toolbar-count"><strong id="customerCount">0</strong> records</span>
            </div>
            <div class="table-responsive">
              <table class="table-clean">
                <thead>
                  <tr>
                    <th scope="col">Customer</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Country</th>
                    <th scope="col">Bookings</th>
                    <th scope="col">Joined</th>
                    <th scope="col">Status</th>
                    <th scope="col" class="text-end">Actions</th>
                  </tr>
                </thead>
                <tbody id="customersBody"></tbody>
              </table>
            </div>
          </div>
        </section>
