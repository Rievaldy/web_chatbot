<h1>Add Question</h1>

<div class="my-5"></div>
<div class="wrapper">
    <div class="form-group p-5 bg-white">
        <label for="question-label">Question Label</label>
        <select class="form-control" name="question-label" id="question-label">
            <option value="">Select Label</option>
            <?php for($i = 1; $i < 10; $i++): ?>
                <option value="label-">Label <?= $i ?></option>
            <?php endfor; ?>
        </select>
        <p class="my-3"></p>
        <label for="question-text">Question Text</label>
        <textarea class="form-control" name="question-text" id="question-text" cols="30" rows="8"></textarea>
        <br>
        <p class="text-right">
            <button class="btn btn-success">Add Question</button>
        </p>
    </div>
</div>