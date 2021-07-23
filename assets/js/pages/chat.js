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
                html += `
                <div>
                    <p class="text-left"><small><strong> `+obj['user_name']+`</strong> `+obj['create_date_time']+`</small></p>
                    <p class="text-left">`+obj['user_input']+`</p>
                </div>
                <br>
                <div>
                    <p class="text-right"><small><strong> Chatbot</strong> `+obj['create_date_time']+`</small></p>
                    <p class="text-right">`+obj['chatbot_response']+`</p>
                </div>
                <br>`;
                html += `
                <div>
                    <p class="text-left"><small><strong> `+obj['user_name']+`</strong> `+obj['create_date_time']+`</small></p>
                    <p class="text-left">`+obj['user_input']+`</p>
                </div>
                <br>
                <div>
                    <p class="text-right"><small><strong> Chatbot</strong> `+obj['create_date_time']+`</small></p>
                    <p class="text-right">`+obj['chatbot_response']+`</p>
                </div>
                <br>`;
            }
            $('.container-chat-index').html(html)
            html = userName + ' - Chat'
            $('.title-chat-index').html(html)
        },
      });
})