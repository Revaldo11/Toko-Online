 </div>
 <!-- /.row -->
 </div><!-- /.container-fluid -->
 </div>
 <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->

 <!-- Main Footer -->
 <footer class="main-footer">
 	<!-- To the right -->
 	<!-- Default to the left -->
 	<strong>Copyright &copy; 111102
 </footer>
 </div>
 <!-- ./wrapper -->

 <!-- REQUIRED SCRIPTS -->

 <!-- jQuery -->
 <script>
 	$(function() {
 		$("#example1").DataTable({
 			"responsive": true,
 			"autoWidth": false,
 		});
 		$('#example2').DataTable({
 			"paging": true,
 			"lengthChange": false,
 			"searching": false,
 			"ordering": true,
 			"info": true,
 			"autoWidth": false,
 			"responsive": true,
 		});
 	});
 </script>
 <script>
 	window.setTimeout(function() {
 		$(".alert").fadeTo(500, 0).slideUp(500, function() {
 			$(this).remove();
 		});
 	}, 3000)
 </script>
 </body>

 </html>