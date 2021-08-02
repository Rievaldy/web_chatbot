$(document).ready(function(){
    $('#form-filter').submit(function(e){
        startDate = $('#start-date').val()
        endDate = $('#end-date').val()
        
        if (startDate == '' || endDate == '') {
            e.preventDefault()
        }    
    })

    $('input[name="start_date"], input[name="end_date"]').click(function(e) {
        pos = {
            top: $(this).offset().top - $(window).scrollTop(),
            left: $(this).offset().left - $(window).scrollLeft(),
        }
        $('#ui-datepicker-div').css({top: pos.top})
    })

    $('.btn-desc-product').click(function() {
        id = $(this).val()
        data = {'id_subcribe_product': id}
        url = $('#index_by_id').val()
        $.ajax({
            type: "POST",
            url: url,
            data: data,
            success: function(response) {
                html = ''
                res = JSON.parse(response)
                $('.title-product-index').text('Request by '+res.name_user)    
                $('#p-request_date').text(res.request_date)
                $('#p-request_by').text(res.name_user)
                $('#p-company').text(res.name_company)
                $('#p-product').text(res.name_product)
                
                $('input[name="start_date"]').val(res.start_date)
                $('input[name="end_date"]').val(res.end_date)
                
                status = ['', ''];
                status[Number(res.status_code)] = 'selected';
                html = `<select class="form-control p-0" name="status_code">
                    <option value="0">REQUESTED</option>
                    <option value="1">SUBSCRIBED</option>
                </select>`;
                $('#p-status').html(html)
                $('#p-status option[value="'+res.status_code+'"]').prop('selected', true)
                $('#p-id_subcribe_product').val(res.id_subcribe_product)
                html = `<input type="text" name="maintenance_ticket" value="`+res.maintenance_ticket+`">`
                $('#p-maintenance_ticket').html(html)
            },
        });
        
    })

})