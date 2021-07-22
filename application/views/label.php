<h1>Label</h1>
<div class="my-5"></div>

<?php if($message = $this->session->flashdata('message')): ?>
    <div class="alert <?= $message['class'] ?>">
        <p><?= $message['text'] ?></p>
    </div>
<?php endif; ?>

<div class="wrapper p-5 bg-white">
    <p class="h4">Add Label</p>
    

    <form action="<?= site_url('label/create') ?>" method="post">
        <div class="form-group">
            <label  for="name_tag">Label Name</label>
            <input type="text" class="form-control" name="name_tag" id="name_tag" placeholder="input label name here..">
            <br>
        </div>
        
        <div class="form-group">
            <label for="response">Answer Text</label>
            <textarea class="form-control" name="response" id="response" cols="30" rows="8"></textarea>
            <br>
        </div>
        
        <div class="form-group">
            <label for="desc_tag">Label Description</label>
            <textarea class="form-control" name="desc_tag" id="desc_tag" cols="30" rows="8"></textarea>
            <br>
        </div>
        
        <div class="form-group text-right">
            <button class="btn btn-success" type="submit">Add Label</button>
        </div>
    </form>
</div>
<div class="my-3"></div>

<div class="wrapper-2 p-5 bg-white">
    <p class="h4">List Labels</p><br>
    <table class="i-datatable table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Label Name</th>
                <th>Answer</th>
                <th>Label Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($labels as $label): ?>
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
            <?php endforeach; ?>
        </tbody>
    </table>
</div>