$(document).ready(function(){
    $('#form-filter').submit(function(e){
        startDate = $('#start-date').val()
        endDate = $('#end-date').val()
        
        if (startDate == '' || endDate == '') {
            e.preventDefault()
        }    
    })

    $('.btn-desc-maintenance').click(function() {
        tds = $(this).parents('tr').find('td');
        ths = $(this).parents('table').find('th');
        th = []
        td = []
        for (i = 0; i < ths.length; i++) {
            th.push($(ths[i]).text().trim())
        }
        for (i = 0; i < tds.length; i++) {
            td.push($(tds[i]).attr('val').trim())
        }
        
        $('.title-maintenance-index').html('Request by '+ td[1])
        html = ``;
        for (i = 0; i < tds.length - 1; i++) {
            html += `
                <tr>
                    <td>`+th[i]+`</td>
                    <td>:</td>
                    <td>`+td[i]+`</td>
                </tr>
            `;
        }
        $('.table-maintenance-index').html(html)
    })

    $('.select-maintenance-status').change(function(){
        $(this).parents('form').submit()
    })
})