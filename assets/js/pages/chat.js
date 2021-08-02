$(document).on('click', '.index_chat', function() {
    url = $('#chat-url').val()
    idUser = $(this).attr('val')
    data = {'id_user': idUser}
    // dataType: dataType
    $.ajax({
        type: "POST",
        url: url,
        data: data,
        success: function(response) {
            html = ''
            res = JSON.parse(response)
            userName = ''

            for (const obj of res) {
                userName = obj['user_name']
                if (obj['user_input'] != null) {
                    html += `
                    <div class="float-left w-50">
                        <p style="font-size: 1.5em;"><small><strong> `+obj['user_name']+`</strong> `+obj['create_date_time']+`</small></p>
                        <p style="font-size: 1em;background: rgba(198, 198, 198, 0.5);padding: 2em;border-radius: 15px;">`+obj['user_input']+`</p>
                    </div>
                    <br style="clear: both">`;
                }
                html += `<div class="float-right w-50">
                    <p class="text-right" style="font-size: 1.5em;"><small><strong> Chatbot</strong> `+obj['create_date_time']+`</small></p>
                    <p style="font-size: 1em;background: rgba(198, 198, 198, 0.5);padding: 2em;border-radius: 15px;">`+obj['chatbot_response']+`</p>
                </div>
                <br style="clear: both">`;
            }
            $('.container-chat-index').html(html)
            html = userName + ' - Chat'
            $('.title-chat-index').html(html)
        },
      });
})