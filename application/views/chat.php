<h1>Chat</h1>

<div class="my-5"></div>

<?php if($message = $this->session->flashdata('message')): ?>
    <div class="alert <?= $message['class'] ?>">
        <p><?= $message['text'] ?></p>
    </div>
<?php endif; ?>

<div class="wrapper-2 p-5 bg-white">
    <p class="h4">Chat History</p><br>
    <table class="i-datatable table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>User Name</th>
                <th>User Input</th>
                <th>Chatbot Response</th>
                <th>Chatbot Status</th>
                <th>Status Description</th>
                <th>Datetime</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i = 1; $i < 4; $i++): ?>
            <tr>
                <td><?= $i ?></td>
                <td><span class="link" data-toggle="modal" data-target=".bd-modal-lg">User <?= $i ?></span></td>
                <td>User Input</td>
                <td>Chatbot Response</td>
                <td>Chatbot Status</td>
                <td>Status Description</td>
                <td>22 July 2021</td>
                <!-- <button class="btn btn-primary" data-toggle="modal" data-target=".bd-modal-lg">Detail</button> -->
            </tr>
            <?php endfor; ?>
            <!-- <?php foreach($labels as $label): ?>
            <tr>
                <td><?= $label->id_tag ?></td>
                <td><?= $label->name_tag ?></td>
                <td><?= $label->response ?></td>
                <td><?= $label->desc_tag ?></td>
                <td>
                    <form action="<?= site_url('label/destroy') ?>" method="post">
                        <input type="hidden" name="id_tag" value="<?= $label->id_tag ?>">                
                        <button class="btn btn-primary" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?> -->
        </tbody>
    </table>
</div>


<div class="modal fade bd-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content p-5">
      <p class="h2">Chat History</p>
      <p class="h4">User 1 @22 July 2021 #AE21311</p>

      <hr class="w-100 border border-dark">

      <div class="container">
        <div>
            <p class="text-left"><small><strong> User 1</strong> 8:13pm</small></p>
            <p class="text-left">Hi.. </p>
        </div>
        <br>
        <div>
            <p class="text-right"><small><strong> Chatbot</strong> 8:13pm</small></p>
            <p class="text-right">Hi.. do you need somethin ?</p>
        </div>
        <br>
        <div>
            <p class="text-left"><small><strong> User 1</strong> 8:14pm</small></p>
            <p class="text-left">Nothing </p>
        </div>
        <br>
        <div>
            <p class="text-right"><small><strong> Chatbot</strong> 8:14pm</small></p>
            <p class="text-right">Oh okay then thank you ..</p>
        </div>
      </div>
    </div>
  </div>
</div>
