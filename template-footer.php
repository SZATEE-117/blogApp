</div><!-- /main -->

<script>
  // Range toggle
  function setRange(btn) {
    btn.closest('.range-group').querySelectorAll('.range-btn')
      .forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
  }

  // Mobile sidebar
  const sidebar = document.getElementById('sidebar');
  document.getElementById('hamburger').addEventListener('click', () => {
    sidebar.classList.toggle('open');
  });
  document.addEventListener('click', e => {
    if (sidebar.classList.contains('open')
        && !sidebar.contains(e.target)
        && e.target.id !== 'hamburger') {
      sidebar.classList.remove('open');
    }
  });

  // Avatar initial from username
  // In PHP: echo the username into a data attribute or span
  // For preview, we use placeholder text
  const nameEl = document.getElementById('sidebarUsername');
  const avatarEl = document.getElementById('avatarInitial');
  const name = nameEl.textContent.trim();
  if (name) avatarEl.textContent = name[0].toUpperCase();
</script>

</body></html>