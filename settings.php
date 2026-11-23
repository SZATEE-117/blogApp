  <link rel="stylesheet" href="STYLES/others.css">
 
 <!-- ══════════ SETTINGS PAGE ══════════ -->
    <div class="page active" id="page-settings">

      <!-- Account settings -->
      <div class="panel">
        <div class="panel-head"><span class="panel-title">Account</span></div>
        <div class="form-grid">
          <div class="field">
            <label for="settName">Display Name</label>
            <input type="text" id="settName" placeholder="Admin">
          </div>
          <div class="field">
            <label for="settEmail">Email Address</label>
            <input type="email" id="settEmail" placeholder="admin@example.com">
          </div>
          <div class="field">
            <label for="settPwd">New Password</label>
            <input type="password" id="settPwd" placeholder="Leave blank to keep current">
          </div>
          <div class="field">
            <label for="settPwdC">Confirm Password</label>
            <input type="password" id="settPwdC" placeholder="Repeat new password">
          </div>
        </div>
        <div style="margin-top:18px;">
          <button class="btn btn-accent">Save Changes</button>
        </div>
      </div>

      <!-- Notifications -->
      <div class="panel">
        <div class="panel-head"><span class="panel-title">Notifications</span></div>
        <div class="toggle-row">
          <div class="toggle-info">
            <div class="toggle-label">New booking alerts</div>
            <div class="toggle-desc">Get notified when a new booking is created</div>
          </div>
          <label class="switch">
            <input type="checkbox" checked>
            <span class="switch-track"></span>
          </label>
        </div>
        <div class="toggle-row">
          <div class="toggle-info">
            <div class="toggle-label">Cancellation alerts</div>
            <div class="toggle-desc">Get notified when a booking is cancelled</div>
          </div>
          <label class="switch">
            <input type="checkbox" checked>
            <span class="switch-track"></span>
          </label>
        </div>
        <div class="toggle-row">
          <div class="toggle-info">
            <div class="toggle-label">New user sign-ups</div>
            <div class="toggle-desc">Alert when a new user registers</div>
          </div>
          <label class="switch">
            <input type="checkbox">
            <span class="switch-track"></span>
          </label>
        </div>
        <div class="toggle-row">
          <div class="toggle-info">
            <div class="toggle-label">Weekly summary email</div>
            <div class="toggle-desc">Receive a summary report every Monday</div>
          </div>
          <label class="switch">
            <input type="checkbox" checked>
            <span class="switch-track"></span>
          </label>
        </div>
      </div>

      <!-- Danger zone -->
      <div class="panel" style="border-color: var(--error-soft);">
        <div class="panel-head"><span class="panel-title" style="color:var(--error)">Danger Zone</span></div>
        <p style="font-size:0.875rem;color:var(--fg-muted);margin-bottom:16px;">These actions are permanent and cannot be undone.</p>
        <div style="display:flex;gap:10px;flex-wrap:wrap;">
          <button class="btn" style="background:var(--error-soft);color:var(--error);border:1px solid var(--error-soft);">Clear All Bookings</button>
          <button class="btn" style="background:var(--error-soft);color:var(--error);border:1px solid var(--error-soft);">Delete All Users</button>
        </div>
      </div>

    </div><!-- /settings -->