
<?php 
include "helper.php";

if(!$_SESSION["user"]){
    logout("signin.php");
    die;
}

?>
<!doctype html><html><head><meta charset=utf8><meta name=viewport content="width=device-width,initial-scale=1,viewport-fit=cover"><style>:root{color-scheme:light;box-sizing:border-box;padding-top:env(safe-area-inset-top,0px);padding-bottom:env(safe-area-inset-bottom,0px)}html{scroll-padding-top:env(safe-area-inset-top,0px)}body{margin:0;padding:0;font:14px -apple-system,BlinkMacSystemFont,sans-serif;background:#fff;color:#000}img{max-width:100%}[hidden]:not([hidden=until-found i]){display:none!important}</style></head><body>
<title>Admin Dashboard</title>
<meta name="claude:viewport-fit-sides" content="cover">

<link rel="stylesheet" href="STYLES/admin-style.css">
<aside class="sidebar" id="sidebar">

  <div class="sidebar-brand">
    <div class="sidebar-brand-icon">
      <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 14H9V8h2v8zm4 0h-2V8h2v8z"/></svg>
    </div>
    <span class="sidebar-brand-name">MyApp</span>
  </div>

  <span class="nav-section-label">Menu</span> 
  <a class="nav-item <?= $page=="dashboard" ? "active" : "" ?>" href="admin.php?page=dashboard">
    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"/></svg>
    Home
  </a>
  <a class="nav-item <?= $page=="bookings" ? "active" : "" ?>"  href="admin.php?page=bookings">
    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/></svg>
    Bookings
  </a>
  <a class="nav-item <?= $page=="cabins" ? "active" : "" ?>"  href="admin.php?page=cabins">
    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
    Cabins
  </a>
  <a class="nav-item <?= $page=="users" ? "active" : "" ?>"  href="admin.php?page=users">
    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
    Users
  </a>

  <span class="nav-section-label">System</span>

  <a class="nav-item <?= $page=="settings" ? "active" : "" ?>"  href="admin.php?page=settings">
    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M19.14 12.94c.04-.3.06-.61.06-.94 0-.32-.02-.64-.07-.94l2.03-1.58c.18-.14.23-.41.12-.61l-1.92-3.32c-.12-.22-.37-.29-.59-.22l-2.39.96c-.5-.38-1.03-.7-1.62-.94l-.36-2.54c-.04-.24-.24-.41-.48-.41h-3.84c-.24 0-.43.17-.47.41l-.36 2.54c-.59.24-1.13.57-1.62.94l-2.39-.96c-.22-.08-.47 0-.59.22L2.74 8.87c-.12.21-.08.47.12.61l2.03 1.58c-.05.3-.09.63-.09.94s.02.64.07.94l-2.03 1.58c-.18.14-.23.41-.12.61l1.92 3.32c.12.22.37.29.59.22l2.39-.96c.5.38 1.03.7 1.62.94l.36 2.54c.05.24.24.41.48.41h3.84c.24 0 .44-.17.47-.41l.36-2.54c.59-.24 1.13-.56 1.62-.94l2.39.96c.22.08.47 0 .59-.22l1.92-3.32c.12-.22.07-.47-.12-.61l-2.01-1.58zM12 15.6c-1.98 0-3.6-1.62-3.6-3.6s1.62-3.6 3.6-3.6 3.6 1.62 3.6 3.6-1.62 3.6-3.6 3.6z"/></svg>
    Settings
  </a>

  <div class="sidebar-footer">
    <div class="sidebar-user">
      <div class="sidebar-avatar" id="avatarInitial">U</div>
      <div class="sidebar-user-info">
        <div class="sidebar-user-name" id="sidebarUsername">Username</div>
        <div class="sidebar-user-role">Administrator</div>
      </div>
      <a href="/myproject/FirstAPP/logout.php" class="btn-logout-icon" title="Logout">
        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5-5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4V5z"/></svg>
      </a>
    </div>
  </div>

</aside>

<!-- ═══════════════════════════════════════ -->
<!-- MAIN -->
<!-- ═══════════════════════════════════════ -->
<div class="main">

  <!-- Topbar -->
  <header class="topbar">
    <div style="display:flex;align-items:center;gap:14px;">
      <button class="hamburger" id="hamburger" aria-label="Toggle menu">
        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/></svg>
      </button>
      <h1 class="topbar-title">Dashboard</h1>
      <span class="session-badge">Active</span>
    </div>
    <div class="topbar-right">
      <div class="range-group" role="group" aria-label="Date range">
        <button class="range-btn active" onclick="setRange(this)">Last 7 days</button>
        <button class="range-btn" onclick="setRange(this)">Last 30 days</button>
        <button class="range-btn" onclick="setRange(this)">Last 90 days</button>
      </div>
    </div>
  </header>