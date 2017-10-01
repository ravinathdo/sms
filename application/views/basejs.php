<!-- jQuery -->
<script src="<?=base_url('js/jquery.min.js');?>"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?=base_url('js/bootstrap.min.js');?>"></script>


<!-- moment JavaScript -->
   <script src="<?=base_url('js/moment.js');?>"></script>

    <!-- bootstrap-datetimepicker  Core JavaScript -->
   <script src="<?=base_url('js/bootstrap-datetimepicker.min.js');?>"></script>


<!-- Metis Menu Plugin JavaScript -->
<script src="<?=base_url('js/metisMenu.min.js');?>"></script>


<script src="<?=base_url('js/jquery.dataTables.min.js');?>"></script>
<script src="<?=base_url('js/dataTables.bootstrap.min.js');?>"></script>

<!--Datetime picker-->

<script src="<?=base_url('js/datetimepicker/moment.js');?>"></script>

<script src="<?=base_url('js/datetimepicker/bootstrap-datetimepicker.min.js');?>"></script>
<!--------------->

<!--angularjs-->
<script src="<?=base_url('js/angular.min.js');?>"></script>

<!-- Custom Theme JavaScript -->
<script src="<?=base_url('js/sb-admin-2.js');?>"></script>

<!--slider-->
<script src="<?=base_url('js/bootstrap-slider.js');?>"></script>

    <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker({
                    format: 'YYYY-MM-DD',
                    maxDate: new Date()
                });
            });

            //delete confirmation
            $(document).ready(function(){
              $(".del").click(function(){
                if (!confirm("Do you want to delete?")){
                  return false;
                }
              });
            });
        </script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables').DataTable({
                responsive: true
        });
        $('.dataTables').DataTable({
                responsive: true
        });
        // $('#dataTables').DataTable({
        //         responsive: true
        //         sort:''
        // });
    });
    </script>

<!--Datetime picker-->
    <script>
    $('.datepick').datetimepicker({
        defaultDate: new Date(),
        format: 'YYYY-MM-DD',
      });
    $('.timepick').datetimepicker({
          defaultDate: new Date(),
          format: 'hh:mm:ss A',
        });
        </script>
  <!------>
  <script>
  (function($) {
  $.fn.currencyInput = function() {
    this.each(function() {
      var wrapper = $("<div class='currency-input' />");
      $(this).wrap(wrapper);
      $(this).before("<span class='currency-symbol'></span>");
      $(this).change(function() {
        var min = parseFloat($(this).attr("min"));
        var max = parseFloat($(this).attr("max"));
        var value = this.valueAsNumber;
        if(value < min)
          value = min;
        else if(value > max)
          value = max;
        $(this).val(value.toFixed(2));
      });
    });
  };
})(jQuery);

$(document).ready(function() {
  $('input.currency').currencyInput();
});

</script>
