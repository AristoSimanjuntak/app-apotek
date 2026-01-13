// JavaScript Document
$(document).ready(function() {
	 //start save_history_activity
      $(document).on('focusin', 'input, select, textarea', function(){
            console.log("Saving value " + $(this).val());
            if($(this).prop('type')=='select-one'){
                $(this).data('val', $(this).find('option:selected').text());
            }else{
                $(this).data('val', $(this).val());
            }
        }).on('change','input, select, textarea', function(){
            var val_completeform = $('#completeform').val();
            var val_completeformvrs = $('#completeformvrs').val();
            var val_headerid = $('#headerid').val();
            var val_prev = $(this).data('val');
            if($(this).prop('type')=='select-one'){
                var val_current = $(this).find('option:selected').text();
            }else{
                var val_current = $(this).val();
            }

            var val_elemen_name = $(this).prop('name');

            var row = $(this).closest('tr');
            var val_detail_id = row.find('input:checkbox').val();

            $.ajax({
                 url:"<?php print base_url();?>index.php/tambahan/lain_lain/C_history_activity/save_history",
                 type: 'post',
                 data: { completeform:val_completeform, completeformvrs:val_completeformvrs, headerid:val_headerid, param:val_elemen_name, data_old:val_prev, data_new:val_current, detail_id:val_detail_id},
                 success: function(save_history){
                    console.log(save_history);
                 },
                 error: function(){
                     alert('fail');
                 }
             });
        });
        // end save history_activity
});