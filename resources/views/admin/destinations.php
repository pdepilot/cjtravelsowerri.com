<?php $this->layout('layouts/admin', ['title' => 'Destinations — CJ Travels Admin', 'page' => 'destinations']); ?>

<section class="view active" id="view-destinations" data-view="destinations">
          <div class="page-head">
            <div>
              <h1>Destinations</h1>
              <p>Manage the destinations displayed on the public website.</p>
            </div>
            <div class="page-head-actions">
              <button type="button" class="btn btn-gold" id="addDestinationBtn">
                <i class="bi bi-plus-lg"></i> Add destination
              </button>
            </div>
          </div>
          <div class="card-box">
            <div class="toolbar">
              <div class="search-box">
                <i class="bi bi-search"></i>
                <label class="visually-hidden" for="destinationSearch">Search destinations</label>
                <input type="search" id="destinationSearch" placeholder="Search city, country or continent…" />
              </div>
              <label class="visually-hidden" for="destinationContinentFilter">Filter by continent</label>
              <select class="filter-select" id="destinationContinentFilter">
                <option value="">All continents</option>
                <option value="Africa">Africa</option>
                <option value="Europe">Europe</option>
                <option value="Asia">Asia</option>
                <option value="Middle East">Middle East</option>
                <option value="Americas">Americas</option>
                <option value="Oceania">Oceania</option>
              </select>
              <span class="toolbar-count"><strong id="destinationCount">0</strong> destinations</span>
            </div>
            <div class="card-box-body">
              <div class="dest-admin-grid" id="destinationsGrid"></div>
            </div>
          </div>
        </section>
