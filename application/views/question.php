<h1>Question</h1>

<?php if($message = $this->session->flashdata('message')): ?>
    <div class="alert <?= $message['class'] ?>">
        <p><?= $message['text'] ?></p>
    </div>
<?php endif; ?>

<div class="my-5"></div>
<div class="wrapper p-5 bg-white">
    <p class="h4">Add Question</p>
    <form action="<?= site_url('question/create') ?>" method="post">
        <div class="form-group">
            <label for="id_tag">Question Label</label>
            <select class="form-control" name="id_tag" id="id_tag">
                <option value="">Select Label</option>
                <?php foreach($labels as $label): ?>
                    <option value="<?= $label->id_tag ?>"><?= $label->name_tag ?></option>
                <?php endforeach; ?>
            </select>
            <p class="my-3"></p>
            <label for="pattern">Question Text</label>
            <textarea class="form-control" name="pattern" id="pattern" cols="30" rows="8"></textarea>
            <br>
        </div>
        
        <div class="form-group text-right">
            <button class="btn btn-success" type="submit">Add Question</button>
        </div>
    </form>
</div>

<div class="my-3"></div>

<div class="wrapper-2 p-5 bg-white">
    <p class="h4">List Questions</p><br>
    <table class="i-datatable table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Label Name</th>
                <th>Question Text</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($questions as $question): ?>
            <tr>
                <td><?= $question->id_pattern ?></td>
                <td><?= $question->name_tag ?></td>
                <td><?= $question->pattern ?></td>
                <td>
                    <form action="<?= site_url('question/destroy') ?>" method="post">
                        <input type="hidden" name="id_pattern" value="<?= $question->id_pattern ?>">
                        <button class="btn btn-primary" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>