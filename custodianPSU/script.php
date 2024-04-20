        <script src="../adminPSU/bootstrap/js/bootstrap.min.js"></script>
        <script src="../adminPSU/vendors/easypiechart/jquery.easy-pie-chart.js"></script>
        <script src="../adminPSU/assets/scripts.js"></script>
				<script>
				$(function() {
					// Easy pie charts
					$('.chart').easyPieChart({animate: 1000});
				});
				</script>
			<!-- data table -->
		<script src="../adminPSU/vendors/datatables/js/jquery.dataTables.min.js"></script>
        <script src="../adminPSU/assets/DT_bootstrap.js"></script>		
			<!-- jgrowl -->
		<script src="../adminPSU/vendors/jGrowl/jquery.jgrowl.js"></script>   
				<script>
				$(function() {
					$('.tooltip').tooltip();	
					$('.tooltip-left').tooltip({ placement: 'left' });	
					$('.tooltip-right').tooltip({ placement: 'right' });	
					$('.tooltip-top').tooltip({ placement: 'top' });	
					$('.tooltip-bottom').tooltip({ placement: 'bottom' });
					$('.popover-left').popover({placement: 'left', trigger: 'hover'});
					$('.popover-right').popover({placement: 'right', trigger: 'hover'});
					$('.popover-top').popover({placement: 'top', trigger: 'hover'});
					$('.popover-bottom').popover({placement: 'bottom', trigger: 'hover'});
					$('.notification').click(function() {
						var $id = $(this).attr('id');
						switch($id) {
							case 'notification-sticky':
								$.jGrowl("Stick this!", { sticky: true });
							break;
							case 'notification-header':
								$.jGrowl("A message with a header", { header: 'Important' });
							break;
							default:
								$.jGrowl("Hello world!");
							break;
						}
					});
				});
				</script>
			<link href="../adminPSU/vendors/datepicker.css" rel="stylesheet" media="screen">
			<link href="../adminPSU/vendors/uniform.default.css" rel="stylesheet" media="screen">
			<link href="../adminPSU/vendors/chosen.min.css" rel="stylesheet" media="screen">
		<!--  -->
		<script src="../adminPSU/vendors/jquery.uniform.min.js"></script>
        <script src="../adminPSU/vendors/chosen.jquery.min.js"></script>
        <script src="../adminPSU/vendors/bootstrap-datepicker.js"></script>
		<!--  -->
			<script src="../adminPSU/vendors/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
			<script src="../adminPSU/vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>
			<script src="../adminPSU/vendors/ckeditor/ckeditor.js"></script>
			<script src="../adminPSU/vendors/ckeditor/adapters/jquery.js"></script>
			<script type="text/javascript" src="../adminPSU/vendors/tinymce/js/tinymce/tinymce.min.js"></script>
        <script>
        $(function() {
            // Ckeditor standard
            $( 'textarea#ckeditor_standard' ).ckeditor({width:'98%', height: '150px', toolbar: [
				{ name: 'document', items: [ 'Source', '-', 'NewPage', 'Preview', '-', 'Templates' ] },
				[ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ],			
				{ name: 'basicstyles', items: [ 'Bold', 'Italic' ] }
			]});
            $( 'textarea#ckeditor_full' ).ckeditor({width:'98%', height: '150px'});
        });
        </script>
		<!-- <script type="text/javascript" src="admin/assets/modernizr.custom.86080.js"></script> -->
		<script src="../adminPSU/assets/jquery.hoverdir.js"></script>
		<link rel="stylesheet" type="text/css" href="../adminPSU/assets//style.css" />
			<script type="text/javascript">
			$(function() {
				$('#da-thumbs > li').hoverdir();
			});
			</script>
			<script src="../adminPSU/vendors/fullcalendar/fullcalendar.js"></script>
			<script src="../adminPSU/vendors/fullcalendar/gcal.js"></script>
			<link href="../adminPSU/vendors/datepicker.css" rel="stylesheet" media="screen">
			<script src="../adminPSU/vendors/bootstrap-datepicker.js"></script>
						<script>
						$(function() {
							$(".datepicker").datepicker();
							$(".uniform_on").uniform();
							$(".chzn-select").chosen();
							$('#rootwizard .finish').click(function() {
								alert('Finished!, Starting over!');
								$('#rootwizard').find("a[href*='tab1']").trigger('click');
							});
						});
						</script>