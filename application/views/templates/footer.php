   
   <div class="row span12" id="footer">
   <p>&copy; Copyright <?php echo date('Y') ?> Casper Star-Tribune Communications. All Rights Reserved.</br />
   AdIgniter VERSION. Designed by Cody Eding.<br />
   <a href="#credits" data-toggle="modal">Credits and Licensing</a></p>
   </div>
   
<div class="modal hide fade" id="credits">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>AdIgniter VERSION</h3>
  </div>
  <div class="modal-body">
    <p>AdIgniter License and Credits here...</p>
  </div>
</div>
   
   </div> <!-- /container -->
	
	
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo site_url('assets/js/jquery-1.9.1.min.js'); ?>"></script>
	<script src="<?php echo site_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo site_url('assets/js/jquery.dataTables.nightly.min.js'); ?>"></script>
    <script src="<?php echo site_url('assets/js/paging.js'); ?>"></script>
  <script>
  $(document).ready(function() {

  $('#dataTable').dataTable( {
        "sDom": "<'row'<'span6'l><'span6'f>r>t<'row'<'span6'i><'span6'p>>",
        "sPaginationType": "bootstrap",
		"aoColumns": [ 
			/* Engine */   null,
			/* Browser */  null,
			/* Version */  null,
			/* Version */  null,
			/* Version */  null,
			/* Version */  null,
			/* Version */  null,
			/* Grade */    { "bSortable": false }
		]
    } );
  
$.extend( $.fn.dataTableExt.oStdClasses, {
    "sWrapper": "dataTables_wrapper form-inline",
    "sSortAsc": "header headerSortDown",
    "sSortDesc": "header headerSortUp",
    "sSortable": "header"
} );
  
} );


	</script>

  </body>
</html>