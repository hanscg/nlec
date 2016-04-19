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
   					<h1 class="m-n font-semibold h4 text-grey padder">Daftar Kelas</h1>

				</div>
				<div class="row">
          			<div class="col-md-12">
            			<div class="panel panel-default">
							<div class="panel-body">
								<div class="table-responsive">
									<table ui-jq="dataTable" class="table table-striped b-t b-b">
										<thead>
											<tr>
												<th style="width:25%">Kode</th>
												<th style="width:50%">Jadwal</th>
												<th style="width:25%">Jumlah peserta</th>
											</tr>
	              						</thead>
		                  				<tbody>
											<?php foreach ($daftar_kelas as $kelas) : ?>

			                  					<tr>
			                  						
			                  						<td>
			                  							<a href="<?= base_url('kelas/detail') ?>/<?= $kelas['kode'] ?>"><?= $kelas['kode'] ?>
			                  						</td>
			                  						
			                  						<td>
			                  							<?php 
			                  								foreach ($daftar_jadwal as $jadwal) {
			                  									if ($jadwal['kode_kelas'] == $kelas['kode']) {
			                  										switch ($jadwal['hari']) {
																	    case 1:
																	        echo "Senin, ";
																	        break;
																	    case 2:
																	        echo "Selasa, ";
																	        break;
																	    case 3:
																	        echo "Rabu, ";
																	        break;															        
																	    case 4:
																	        echo "Kamis, ";
																	        break;
																	    case 5:
																	        echo "Jumat, ";
																	        break;
																	    case 6:
																	        echo "Sabtu, ";
																	        break;
																	    case 7:
																	        echo "Minggu, ";
																	        break;
																	};
																echo $jadwal['jam'];
																echo "<br>";        
			                  									}			
			                  								}
			                  							?>
				                  					</td>
			                  						
			                  						<td>
			                  							<?= $kelas['jumlah_siswa'] ?>
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
