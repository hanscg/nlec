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
							echo ucwords(str_replace('_', ' ', $this->uri->segment(1)));
						if($this->uri->segment(1,0)!==0) { ?>
							</li>
						<?php } ?>
					</ul>
				</div>
				
				<div class="bg-light b-b wrapper-md padder-md ">
					<h1 class="m-n font-bold h4 padder" >Detail Kelas</h1>
				</div>
				<div class="wrapper-lg bg-light">
					<div class="row">
						<div class="col-md-3">
							<h4 class="m-t-lg font-bold text12">
								Kode Kelas
							</h4>
							<p>
								<?= $data_kelas['kode'] ?>
							</p>
						</div>
					</div>
					<h4 class="m-t-lg font-bold text12">
						Jumlah Siswa
					</h4>
					<p>
						<?= $data_kelas['jumlah_siswa']?>
					</p>
					<br/>
					<h4 class="m-t-lg font-bold text12">
						Nama Pengajar
					</h4>
					<p>
						<?= $data_pengajar['nama']?>
					</p>
					<br/>
					<h4 class="m-t-lg font-bold text12">
						Jadwal
					</h4>
					<p>
						<?php 
			                foreach ($daftar_jadwal as $jadwal) {
			                  	if ($jadwal['kode_kelas'] == $data_kelas['kode']) {
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
					</p>
					<br/>
					

				      <div class="hbox hbox-auto-xs hbox-auto-sm ng-scope">
				      <div class="col">
				        	<div class="app-content-body ">

				            <div class="row">
				              <div class="col-md-12">
				                 <div class="panel panel-default">
				              <div class="panel-heading font-semibold">
				                Daftar Siswa
				              </div>
				              <div>
				                <table class="table" ui-jq="footable" ui-options='{
				                  "paging": {
				                    "enabled": true
				                  }}'>
				                  <thead>
				                    <tr>
				                      <th>Nama</th>
				                      <th>Nilai</th>
				                      <th>Komentar</th>
				                    </tr>
				                  </thead>
				                  <tbody>
				                  	<?php foreach($data_siswa as $siswa): ?>
				                    <tr>
				                      <td><?php echo $siswa['nama']; ?></td>
				                      <td>
				                      	<?php
				                      		if($siswa['skor'] != null)
				                      			echo $siswa['skor'];
				                      		else { ?>
				                      			<form method="post" action="<?php echo base_url('kelas/form_nilai') ?>" >
	              									<input type ="hidden" name = "id_siswa" value="<?= $siswa['id'] ?>">
	              									<button type="submit" class="btn m-b-sm m-r-sm btn-info btn-sm">Isi nilai</button>
	              								</form>
				                      		<?php } ?>
				                      </td>
				                      <td>
				                      	<?php
				                      		if($siswa['skor'] != null)
				                      			echo $siswa['komentar'];
				                      		else
				                      			echo "-";
				                      	?>
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
				         <!-- div app content body -->
				      </div>
				      <!-- div.col -->
				    
				    </div>
				    <!-- end hbox hbox-auto-xs -->




				</div>
	        </div>
	    </div>
	</div>
</div>