<div id="content" class="app-content" role="main">
	<div class="hbox hbox-auto-xs hbox-auto-sm ng-scope">
		<div class="col">
			<div class="app-content-body ">
				<div class="bg-light lter">    
					<ul class="breadcrumb bg-grey-breadcrumb m-b-none">
						<li><a href="#" class="btn no-shadow" ui-toggle-class="app-aside-folded" target=".app">
							<i class="icon-bdg_expand1 text"></i>
							<i class="icon-bdg_expand2 text-active"></i>
            			</a></li>
						
						<li><a href="<?= base_url() ?>">Home</a></li>
						<?php if($this->uri->segment(1,0)!==0) { ?>
							<li class="active"><i class="fa fa-angle-right"></i>
						<?php }
							echo ucfirst($this->uri->segment(1));
						if($this->uri->segment(1,0)!==0) { ?>
							</li>
						<?php } ?>
					</ul>
				</div>

				<?php if($msg = $this->session->flashdata('success')): ?>
					<div class="alert alert-success">
				    	<?= $msg ?>
				    </div>
  				<?php elseif($msg = $this->session->flashdata('error')): ?>
  					<div class="alert alert-success">
				    	<?= $msg ?>
				    </div>
				<?php endif; ?>

				<div class="bg-light lter b-b wrapper-md padder-md">
   					<h1 class="m-n font-semibold h4 text-grey padder">Daftar Siswa</h1>

				</div>
				<div class="row">
          			<div class="col-md-12">
            			<div class="panel panel-default">
							<div class="panel-body">
								<div class="table-responsive">
									<table ui-jq="dataTable" class="table table-striped b-t b-b">
										<thead>
											<tr>
												<th style="width:50%">Nama</th>
												<th style="width:25%">Kelas</th>
												<th style="width:25%">Pilih kelas</th>
											</tr>
	              						</thead>
		                  				<tbody>
											<?php foreach ($daftar_siswa as $siswa) : ?>

			                  					<tr>
			                  						
			                  						<td>
			                  							<?= $siswa['nama'] ?>
			                  						</td>
			                  						
			                  						<td>
			                  							<?= $siswa['kode_kelas'] ?>
				                  					</td>
			                  						
			                  						<td>
			                  							<?php if ('' == $siswa['kode_kelas']) { ?>
			                  								<form method="post" action="<?php echo base_url('kelas/form_assign') ?>" >
			                  									<input type ="hidden" name = "id_siswa" value="<?= $siswa['id'] ?>">
			                  									<button type="submit" class="btn m-b-sm m-r-sm btn-info btn-sm">Pilih</button>
			                  								</form>
			                  							<?php } else { ?>
			                  								Sudah diassign
			                  							<?php } ?>
			                  						</td>
			            
			                  					</tr>

			                  				<?php endforeach; ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Hapus Diklat</h4>
      </div>
      <div class="modal-body">
        Apa kamu yakin akan menghapus diklat
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <a href="" type="button" id="btnDeleteDiklat" class="btn btn-primary btn-danger">Hapus</a>
      </div>
    </div>
  </div>
</div>
