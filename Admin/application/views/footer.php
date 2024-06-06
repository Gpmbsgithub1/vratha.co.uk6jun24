                  <!-- footer -->
                  <div class="container-fluid">
                     <div class="footer">
                        <p>© 2024 Immigration Lawyer, All rights reserved. Powered By <a href="https://gpmbs.com/">Gpmbs.com</a>
                        </p>
                       
                     </div>
                  </div>
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="<?php echo base_url();?>js/jquery.min.js"></script>
      <script src="<?php echo base_url();?>js/popper.min.js"></script>
      <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="<?php echo base_url();?>js/animate.js"></script>
      <!-- select country -->
      <script src="<?php echo base_url();?>js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="<?php echo base_url();?>js/owl.carousel.js"></script> 
      <!-- chart js -->
      <script src="<?php echo base_url();?>js/Chart.min.js"></script>
      <script src="<?php echo base_url();?>js/Chart.bundle.min.js"></script>
      <script src="<?php echo base_url();?>js/utils.js"></script>
      <script src="<?php echo base_url();?>js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="<?php echo base_url();?>js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="<?php echo base_url();?>js/custom.js"></script>
      <script src="<?php echo base_url();?>js/chart_custom_style2.js"></script>
      <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap.min.js
"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap.min.js"></script>

<script>
new DataTable('#example', {
    responsive: {
        details: {
            display: DataTable.Responsive.display.modal({
                header: function (row) {
                    var data = row.data();
                    return 'Details for ' + data[0] + ' ' + data[1];
                }
            }),
            renderer: DataTable.Responsive.renderer.tableAll({
                tableClass: 'table'
            })
        }
    }
});

</script>