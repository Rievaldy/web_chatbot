<h1>Request Maintenance</h1>

<div class="my-5"></div>

<div class="wrapper p-5 bg-white">
    <p class="h4">Filter Request Maintenances List</p><br>
    <div class="form-group">
        <label for="start-date">Start Date</label>
        <input type="text" class="datepicker">
        <span class="px-2"></span>
        
        <label for="end-date">End Date</label>
        <input type="text" class="datepicker">
        <span class="px-2"></span>

        <button class="btn btn-success">Search</button>
        <button class="btn btn-success">All</button>
    </div>
</div>

<div class="my-3"></div>

<div class="wrapper p-5 bg-white">
    <p class="h4">Request Maintenances List</p><br>

    <table class="i-datatable table table-striped">
        <thead>
            <tr>
                <th>Create Date</th>
                <th>ID</th>
                <th>Register Name</th>
                <th>Subject</th>
                <th>Priority</th>
                <th>Update Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i = 1; $i < 6; $i++): ?>
            <tr>
                <td>Create Date <?= $i ?></td>
                <td>ID <?= $i ?></td>
                <td>Register Name <?= $i ?></td>
                <td>Subject <?= $i ?></td>
                <td>Priority <?= $i ?></td>
                <td>Update Date <?= $i ?></td>
                <td>Status <?= $i ?></td>
                <td><button class="btn btn-primary">View</button></td>
            </tr>
            <?php endfor; ?>
        </tbody>
    </table>
</div>