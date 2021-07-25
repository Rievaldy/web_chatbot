$(document).ready(function(){
    $('#form-filter').submit(function(e){
        startDate = $('#start-date').val()
        endDate = $('#end-date').val()
        
        if (startDate == '' || endDate == '') {
            e.preventDefault()
        }    
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
                console.log(res);                
                $('#p-request_date').text(res.request_date)
                $('#p-request_by').text(res.name_user)
                $('#p-company').text(res.name_company)
                $('#p-product').text(res.name_product)
                html = `<input type="text" class="datepicker datepicker2" name="start_date" value="`+res.start_date+`">`;
                $('#p-start_date').html(html)
                html = `<input type="text" class="datepicker datepicker2" name="end_date" value="`+res.end_date+`">`;
                $('#p-end_date').html(html)
                $(".datepicker2").datepicker({
                    dateFormat: 'yy-mm-dd',
                });
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
        
        // $('.table-product-index').html(html)
    })

    $('.select-product-status').change(function(){
        $(this).parents('form').submit()
    })
})