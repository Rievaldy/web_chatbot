<h1>Request Maintenance</h1>

<div class="my-5"></div>

<div class="wrapper p-5 bg-white">
    <p class="h4">Filter Request Maintenances List</p><br>
        <div class="form-group">
            <form id="form-filter" action="<?= site_url('dashboard/request-maintenance') ?>" method="post">
                <label for="start-date">Start Date</label>
                <input id="start-date" type="text" class="datepicker" name="start_date" value="<?= $start_date ?>">
                <span class="px-2"></span>
                
                <label for="end-date">End Date</label>
                <input id="end-date" type="text" class="datepicker" name="end_date" value="<?= $end_date ?>">
                <span class="px-2"></span>

                <button class="btn btn-success" type="submit">Search</button>
            </form>
            <form action="<?= site_url('dashboard/request-maintenance') ?>" method="post">
                 <button class="btn btn-success" type="submit">All</button>
            </form>
        </div>
    </form>
</div>

<div class="my-3"></div>

<div class="wrapper p-5 bg-white">
    <p class="h4">Request Maintenances List</p><br>

    <table class="i-datatable table table-striped">
        <thead>
            <tr>
                <th>Create Date</th>
                <th>Register Name</th>
                <th>Subject</th>
                <th>Priority</th>
                <th>Update Date</th>
                <th>Status</th>
                <th class="d-none">Request Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($maintenances as $maintenance): ?>
            <tr>
                <td><?= $maintenance->request_date ?></td>
                <td><?= $maintenance->name_user ?></td>
                <td><?= $maintenance->name_product ?></td>
                <td><?= $maintenance->severity_level ?></td>
                <td><?= $maintenance->finish_date ?></td>
                <td><?= $maintenance->status_code ?></td>
                <td class="d-none desc-maintenance">
                    <?= $maintenance->desc_maintenance ?>
                </td>
                <td><button class="btn btn-primary btn-desc-maintenance" data-toggle="modal" data-target=".bd-modal-lg">View</button></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>



<div class="modal fade bd-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content p-5">
      <p class="h2">Detail Request Maintenance</p>
      <p class="h4 title-maintenance-index">Request by User</p>

      <hr class="w-100 border border-dark">

      <div class="container container-maintenance-index">
        <table class="table-maintenance-index"></table>
      </div>
    </div>
  </div>
</div>
