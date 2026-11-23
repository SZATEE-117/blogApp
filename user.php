   <link rel="stylesheet" href="STYLES/others.css">
 
 <!-- ══════════ USERS PAGE ══════════ -->
    <div class="page active" id="page-users">
      <div class="panel">
        <div class="panel-head">
          <span class="panel-title">All Users</span>
          <button class="btn btn-accent">
            <svg viewBox="0 0 24 24"><path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/></svg>
            Add User
          </button>
        </div>
        <div class="table-wrap">
          <table id="usersTable">
            <thead>
              <tr>
                <th>User</th>
                <th>Email</th>
                <th>Role</th>
                <th>Joined</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><div class="user-cell"><span class="tbl-avatar">JC</span>James Carter</div></td>
                <td>james@example.com</td><td>Guest</td><td>Sep 12, 2026</td>
                <td><span class="badge badge-green">Active</span></td>
              </tr>
              <tr>
                <td><div class="user-cell"><span class="tbl-avatar">AO</span>Amara Osei</div></td>
                <td>amara@example.com</td><td>Guest</td><td>Oct 1, 2026</td>
                <td><span class="badge badge-green">Active</span></td>
              </tr>
              <tr>
                <td><div class="user-cell"><span class="tbl-avatar">SR</span>Sofia Reyes</div></td>
                <td>sofia@example.com</td><td>Guest</td><td>Oct 5, 2026</td>
                <td><span class="badge badge-yellow">Pending</span></td>
              </tr>
              <tr>
                <td><div class="user-cell"><span class="tbl-avatar">DK</span>David Kim</div></td>
                <td>david@example.com</td><td>Admin</td><td>Aug 20, 2026</td>
                <td><span class="badge badge-green">Active</span></td>
              </tr>
              <tr>
                <td><div class="user-cell"><span class="tbl-avatar">LM</span>Lena Müller</div></td>
                <td>lena@example.com</td><td>Guest</td><td>Oct 18, 2026</td>
                <td><span class="badge badge-red">Suspended</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>