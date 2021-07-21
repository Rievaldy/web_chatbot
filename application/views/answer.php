<h1>Add Answer</h1>

<div class="my-5"></div>
<div class="wrapper">
    <div class="form-group p-5 bg-white">
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