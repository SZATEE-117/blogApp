  <link rel="stylesheet" href="STYLES/others.css">

<!-- ══════════ CABINS PAGE ══════════ -->

    <div class="page active" id="page-cabins">
      <div class="panel">
        <div class="panel-head">
          <span class="panel-title">All Cabins</span>
          <button class="btn btn-accent">
            <svg viewBox="0 0 24 24"><path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/></svg>
            Add Cabin
          </button>
        </div>
        <div class="table-wrap">
          <table id="cabinsTable">
            <thead>
              <tr>
                <th>Name</th>
                <th>Capacity</th>
                <th>Price / night</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Cabin A</strong></td><td>2 guests</td><td>$180</td>
                <td><span class="badge badge-green">Available</span></td>
                <td><button class="btn btn-ghost" style="padding:5px 10px;font-size:0.75rem;">Edit</button></td>
              </tr>
              <tr>
                <td><strong>Cabin B</strong></td><td>4 guests</td><td>$240</td>
                <td><span class="badge badge-yellow">Booked</span></td>
                <td><button class="btn btn-ghost" style="padding:5px 10px;font-size:0.75rem;">Edit</button></td>
              </tr>
              <tr>
                <td><strong>Cabin C</strong></td><td>6 guests</td><td>$320</td>
                <td><span class="badge badge-green">Available</span></td>
                <td><button class="btn btn-ghost" style="padding:5px 10px;font-size:0.75rem;">Edit</button></td>
              </tr>
              <tr>
                <td><strong>Cabin D</strong></td><td>2 guests</td><td>$160</td>
                <td><span class="badge badge-purple">Occupied</span></td>
                <td><button class="btn btn-ghost" style="padding:5px 10px;font-size:0.75rem;">Edit</button></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Add / Edit Cabin form -->
      <div class="panel">
        <div class="panel-head">
          <span class="panel-title">Add New Cabin</span>
        </div>
        <div class="form-grid">
          <div class="field">
            <label for="cabinName">Cabin Name</label>
            <input type="text" id="cabinName" placeholder="e.g. Cabin E">
          </div>
          <div class="field">
            <label for="cabinCap">Capacity</label>
            <input type="number" id="cabinCap" placeholder="e.g. 4" min="1">
          </div>
          <div class="field">
            <label for="cabinPrice">Price per Night ($)</label>
            <input type="number" id="cabinPrice" placeholder="e.g. 200" min="0">
          </div>
          <div class="field">
            <label for="cabinStatus">Status</label>
            <select id="cabinStatus">
              <option>Available</option>
              <option>Booked</option>
              <option>Maintenance</option>
            </select>
          </div>
          <div class="field field-full">
            <label for="cabinDesc">Description</label>
            <textarea id="cabinDesc" placeholder="Brief description of the cabin…"></textarea>
          </div>
        </div>
        <div style="margin-top:18px;display:flex;gap:10px;">
          <button class="btn btn-accent">Save Cabin</button>
          <button class="btn btn-ghost">Cancel</button>
        </div>
      </div>
    </div>
    <script>

 
</script>
