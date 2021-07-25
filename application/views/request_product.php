<h1>Request Product</h1>

<div class="my-5"></div>
<?php if($message = $this->session->flashdata('message')): ?>
    <div class="alert <?= $message['class'] ?>">
        <p><?= $message['text'] ?></p>
    </div>
<?php endif; ?>


<div class="wrapper p-5 bg-white">
    <p class="h4">Filter Request Products List</p><br>
        <div class="form-group">
            <form id="form-filter" action="<?= site_url('dashboard/request-product') ?>" method="post">
                <label for="start-date">Start Date</label>
                <input id="start-date" type="text" class="datepicker" name="start_date" value="<?= $start_date ?>">
                <span class="px-2"></span>
                
                <label for="end-date">End Date</label>
                <input id="end-date" type="text" class="datepicker" name="end_date" value="<?= $end_date ?>">
                <span class="px-2"></span>

                <button class="btn btn-success" type="submit">Search</button>
            </form>
            <form action="<?= site_url('dashboard/request-product') ?>" method="post">
                 <button class="btn btn-success" type="submit">All</button>
            </form>
        </div>
    </form>
</div>

<div class="my-3"></div>

<div class="wrapper p-5 bg-white">
    <p class="h4">Request Products List</p><br>

    <table class="i-datatable table table-striped">
        <thead>
            <tr>
                <th>Request Date</th>
                <th>Request By</th>
                <th>Company</th>
                <th>Product</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($products as $product): ?>
            <tr>
                <td><?= $product->request_date ?></td>
                <td><?= $product->name_user ?></td>
                <td><?= $product->name_company ?></td>
                <td><?= $product->name_product ?></td>
                <td><?= $product->start_date ?></td>
                <td><?= $product->end_date ?></td>
                <td><?= $product->status ?></td>
                <td><button class="btn btn-primary btn-desc-product" data-toggle="modal" data-target=".bd-modal-lg" value="<?= $product->id_subcribe_product ?>">Edit</button></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>



<div class="modal fade bd-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content p-5">
      <p class="h2">Update Request Product</p>
      <p class="h4 title-product-index">Request by User</p>

      <hr class="w-100 border border-dark">

      <div class="container container-product-index">
        <form action="<?= site_url('request_product/update') ?>" method="post">
            <table class="table-product-index">
                <tr>        
                    <td>Request Date</td>
                    <td> : </td>
                    <td id="p-request_date"></td>
                </tr>
                <tr>        
                    <td>Request By</td>
                    <td> : </td>
                    <td id="p-request_by"></td>
                </tr>
                <tr>        
                    <td>Company</td>
                    <td> : </td>
                    <td id="p-company"></td>
                </tr>
                <tr>        
                    <td>Product</td>
                    <td> : </td>
                    <td id="p-product"></td>
                </tr>
                <tr>        
                    <td>Start Date</td>
                    <td> : </td>
                    <td id="p-start_date"></td>
                </tr>
                <tr>        
                    <td>End Date</td>
                    <td> : </td>
                    <td id="p-end_date"></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td> : </td>
                    <td id="p-status"></td>
                </tr>
                <tr>
                    <td>Maintenance Ticket</td>
                    <td> : </td>
                    <td id="p-maintenance_ticket"></td>
                </tr>
                <tr>
                    <td><button class="btn btn-primary" type="submit">Update Request Product</button></td>
                    <td><input id="p-id_subcribe_product" type="hidden" name="id_subcribe_product" value=""></td>
                </tr>
            </table>
        </form>
      </div>
    </div>
  </div>
</div>

<input type="hidden" id="index_by_id" value="<?= site_url('request_product/index_by_id') ?>">