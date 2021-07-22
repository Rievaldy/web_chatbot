<h1>Dashboard</h1>

<div class="my-5"></div>

<div class="row row-1">
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <p class="card-title">Request Maintenance</p>
                <p class="card-text"><?= $total->request_maintenance ?></p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <p class="card-title">Chat</p>
                <p class="card-text"><?= $total->chat ?></p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <p class="card-title">Label</p>
                <p class="card-text"><?= $total->label ?></p>
            </div>
        </div>
    </div>
</div>

<div class="my-5"></div>


<div class="row row-2">
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <p class="card-title">Question</p>
                <p class="card-text"><?= $total->question ?></p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <p class="card-title">Answer</p>
                <p class="card-text"><?= $total->answer ?></p>
            </div>
        </div>
    </div>
</div>
