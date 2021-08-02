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
            <?php foreach($chats as $chat): ?>
            <tr>
                <td><?= $chat->id_chat ?></td>
                <td><span class="link index_chat" val="<?= $chat->id_user ?>" data-toggle="modal" data-target=".bd-modal-lg"><?= $chat->user_name ?></span></td>
                <td><?= character_limiter($chat->user_input, 75) ?></td>
                <td><?= character_limiter($chat->chatbot_response, 75) ?></td>
                <td><?= character_limiter($chat->desc_tag, 75) ?></td>
                <td><?= character_limiter($chat->status_desc, 75) ?></td>
                <td><?= $chat->create_date_time ?></td>                
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<input type="hidden" id="chat-url" value="<?= site_url('chat/index_chat') ?>">

<div class="modal fade bd-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content p-5">
      <p class="h2">Chat History</p>
      <p class="h4 title-chat-index">User - Chat</p>

      <hr class="w-100 border border-dark">

      <div class="container container-chat-index position-relative">
        
      </div>
    </div>
  </div>
</div>
