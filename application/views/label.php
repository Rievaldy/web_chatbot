<h1>Label</h1>
<div class="my-5"></div>

<div class="wrapper p-5 bg-white">
    <p class="h4">Add Label</p>
    <div class="form-group form-group-label-name">
        <label  for="add-label">Label Name</label>
        <input type="text" class="form-control" name="add-label" id="add-label" placeholder="input label name here..">
        <br>
        <p class="text-right">
            <button class="btn btn-success">Add Label</button>
        </p>
    </div>
</div>
<div class="my-3"></div>

<div class="wrapper-2 p-5 bg-white">
    <p class="h4">List Labels</p><br>
    <table class="i-datatable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Label Name</th>
                <th>Create Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i = 1; $i < 6; $i++): ?>
            <tr>
                <td><?= $i ?></td>
                <td>Label <?= $i ?></td>
                <td>Create Date <?= $i ?></td>
                <td><button class="btn btn-primary">Delete</button></td>
            </tr>
            <?php endfor; ?>
        </tbody>
    </table>
</div>