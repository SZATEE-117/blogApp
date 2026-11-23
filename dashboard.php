<!-- Content -->
  <div class="content">

    <!-- Stat tiles -->
    <div class="stat-grid">
      <div class="stat-tile">
        <div class="stat-icon blue">
          <svg viewBox="0 0 24 24"><path d="M20 6h-2.18c.07-.44.18-.88.18-1.36C18 2.51 16.49 1 14.64 1c-1.15 0-2.07.59-2.64 1.44L12 3l-.01-.55C11.43 1.59 10.51 1 9.36 1 7.51 1 6 2.51 6 4.36c0 .48.1.92.18 1.36H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2z"/></svg>
        </div>
        <div>
          <div class="stat-label">Bookings</div>
          <div class="stat-value">1,000</div>
        </div>
      </div>
      <div class="stat-tile">
        <div class="stat-icon green">
          <svg viewBox="0 0 24 24"><path d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z"/></svg>
        </div>
        <div>
          <div class="stat-label">Sales</div>
          <div class="stat-value">$1,231,710</div>
        </div>
      </div>
      <div class="stat-tile">
        <div class="stat-icon purple">
          <svg viewBox="0 0 24 24"><path d="M20 3h-1V1h-2v2H7V1H5v2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 18H4V8h16v13z"/></svg>
        </div>
        <div>
          <div class="stat-label">Check-ins</div>
          <div class="stat-value">6</div>
        </div>
      </div>
      <div class="stat-tile">
        <div class="stat-icon yellow">
          <svg viewBox="0 0 24 24"><path d="M16 6l2.29 2.29-4.88 4.88-4-4L2 16.59 3.41 18l6-6 4 4 6.3-6.29L22 12V6z"/></svg>
        </div>
        <div>
          <div class="stat-label">Occupancy Rate</div>
          <div class="stat-value">48%</div>
        </div>
      </div>
    </div>

    <!-- Lower panels -->
    <div class="dash-grid">

      <!-- Today -->
      <div class="panel">
        <div class="panel-title">Today</div>
        <div class="activity-empty">
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm0 4c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm6 12H6v-1.4c0-2 4-3.1 6-3.1s6 1.1 6 3.1V19z"/></svg>
          No activity today
        </div>
      </div>

      <!-- Stay duration donut -->
      <div class="panel">
        <div class="panel-title">Stay duration summary</div>
        <div class="donut-wrap">
          <svg class="donut-svg" width="140" height="140" viewBox="0 0 140 140">
            <!-- Donut: 2n=38%, 3n=28%, 4-5n=10%, 8-14n=24% -->
            <!-- circumference of r=50: ~314 -->
            <circle cx="70" cy="70" r="50" fill="none" stroke="#1e2240" stroke-width="22"/>
            <!-- 2 nights: orange #f97316, 38% = 119.3 -->
            <circle cx="70" cy="70" r="50" fill="none" stroke="#f97316" stroke-width="22"
              stroke-dasharray="119.3 314" stroke-dashoffset="0" transform="rotate(-90 70 70)"/>
            <!-- 3 nights: amber #fbbf24, 28% = 87.9 -->
            <circle cx="70" cy="70" r="50" fill="none" stroke="#fbbf24" stroke-width="22"
              stroke-dasharray="87.9 314" stroke-dashoffset="-119.3" transform="rotate(-90 70 70)"/>
            <!-- 4-5 nights: lime #84cc16, 10% = 31.4 -->
            <circle cx="70" cy="70" r="50" fill="none" stroke="#84cc16" stroke-width="22"
              stroke-dasharray="31.4 314" stroke-dashoffset="-207.2" transform="rotate(-90 70 70)"/>
            <!-- 8-14 nights: teal #14b8a6, 24% = 75.4 -->
            <circle cx="70" cy="70" r="50" fill="none" stroke="#14b8a6" stroke-width="22"
              stroke-dasharray="75.4 314" stroke-dashoffset="-238.6" transform="rotate(-90 70 70)"/>
            <!-- Center label -->
            <text x="70" y="65" text-anchor="middle" fill="currentColor" font-family="Syne,sans-serif" font-size="18" font-weight="700">48%</text>
            <text x="70" y="81" text-anchor="middle" fill="#7b82a8" font-family="Inter,sans-serif" font-size="10">occupancy</text>
          </svg>
          <div class="donut-legend">
            <div class="legend-item"><span class="legend-dot" style="background:#f97316"></span>2 nights — 38%</div>
            <div class="legend-item"><span class="legend-dot" style="background:#fbbf24"></span>3 nights — 28%</div>
            <div class="legend-item"><span class="legend-dot" style="background:#84cc16"></span>4–5 nights — 10%</div>
            <div class="legend-item"><span class="legend-dot" style="background:#14b8a6"></span>8–14 nights — 24%</div>
          </div>
        </div>
      </div>

    </div><!-- /dash-grid -->

    <!-- NOTE for PHP integration -->
    <!--
      In your real admin.php, replace "Username" below with:
      <?php echo htmlspecialchars($_SESSION["user"][0]); ?>
      The JS below reads that text to set the sidebar avatar initial.
    -->

  </div><!-- /content -->
