<h1>Answer</h1>

<div class="my-5"></div>
<div class="wrapper p-5 bg-white">
    <p class="h4">Add Answer</p>

    <div class="form-group">
        <label for="answer-label">Answer Label</label>
        <select class="form-control" name="answer-label" id="answer-label">
            <option value="">Select Label</option>
            <?php for($i = 1; $i < 10; $i++): ?>
                <option value="label-">Label <?= $i ?></option>
            <?php endfor; ?>
        </select>
        <p class="my-3"></p>
        <label for="answer-text">Answer Text</label>
        <textarea class="form-control" name="answer-text" id="answer-text" cols="30" rows="8"></textarea>
        <br>
        <p class="text-right">
            <button class="btn btn-success">Add Answer</button>
        </p>
    </div>
</div>


<div class="my-3"></div>

<div class="wrapper-2 p-5 bg-white">
    <p class="h4">List Answers</p><br>
    <table class="i-datatable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Label Name</th>
                <th>Answer Text</th>
                <th>Create Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i = 1; $i < 6; $i++): ?>
            <tr>
                <td><?= $i ?></td>
                <td>Label <?= $i ?></td>
                <td>Answer <?= $i ?></td>
                <td>Create Date <?= $i ?></td>
                <td><button class="btn btn-primary">Delete</button></td>
            </tr>
            <?php endfor; ?>
        </tbody>
    </table>
</div>