<?php $this->layout('layouts/admin', ['title' => 'Travel Financing & Loans — Travelbookings Admin', 'page' => 'loans']); ?>

<section class="view active" id="view-loans" data-view="loans">
          <div class="page-head">
            <div>
              <h1>Travel loan applications</h1>
              <p>Demonstration financing enquiries and their current process status.</p>
            </div>
          </div>
          <div class="info-note">
            <i class="bi bi-shield-exclamation"></i>
            <div>
              <strong>Not a lending decision.</strong> Travelbookings is not a lender. Financing is
              provided by independent licensed lending partners who carry out their own eligibility
              and affordability assessments. Statuses below describe the enquiry workflow only — they
              are not approvals or declines.
            </div>
          </div>
          <div class="card-box">
            <div class="toolbar">
              <div class="search-box">
                <i class="bi bi-search"></i>
                <label class="visually-hidden" for="loanSearch">Search applications</label>
                <input type="search" id="loanSearch" placeholder="Search reference, customer or purpose…" />
              </div>
              <label class="visually-hidden" for="loanStatusFilter">Filter by status</label>
              <select class="filter-select" id="loanStatusFilter">
                <option value="">All statuses</option>
                <option value="In review">In review</option>
                <option value="Awaiting documents">Awaiting documents</option>
                <option value="Referred to partner">Referred to partner</option>
                <option value="Draft">Draft</option>
              </select>
              <span class="toolbar-count"><strong id="loanCount">0</strong> records</span>
            </div>
            <div class="table-responsive">
              <table class="table-clean">
                <thead>
                  <tr>
                    <th scope="col">Reference</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Period</th>
                    <th scope="col">Purpose</th>
                    <th scope="col">Submitted</th>
                    <th scope="col">Status</th>
                    <th scope="col" class="text-end">Actions</th>
                  </tr>
                </thead>
                <tbody id="loansBody"></tbody>
              </table>
            </div>
          </div>
        </section>
