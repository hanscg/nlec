
</div>

<script src="<?= base_url() ?>assets/bdgwebkit/../libs/jquery/jquery/dist/jquery.js"></script>
<script src="<?= base_url() ?>assets/bdgwebkit/../libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
<script src="<?= base_url() ?>assets/bdgwebkit/js/ui-load.js"></script>
<script src="<?= base_url() ?>assets/bdgwebkit/js/ui-jp.config.js"></script>
<script src="<?= base_url() ?>assets/bdgwebkit/js/ui-jp.js"></script>
<script src="<?= base_url() ?>assets/bdgwebkit/js/ui-nav.js"></script>
<script src="<?= base_url() ?>assets/bdgwebkit/js/ui-toggle.js"></script>
<script src="<?= base_url() ?>assets/bdgwebkit/js/ui-client.js"></script>
<script src="<?= base_url() ?>assets/bdgwebkit/../libs/jquery/moment/moment.js"></script>
<script src="<?= base_url() ?>assets/bdgwebkit/../libs/jquery/bootstrap-daterangepicker/daterangepicker.js"></script>

<script src="<?= base_url() ?>js/app.min.js"></script>
<script type="text/javascript">
	$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var diklat = button.data('diklat') // Extract info from data-* attributes
  var diklatid = button.data('diklatid')
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-body').text("Apa kamu yakin akan menghapus diklat " + diklat + "?")
  modal.find('#btnDeleteDiklat').attr("href", "diklat/deletediklat/" + diklatid)
})
</script>

</body>
</html>