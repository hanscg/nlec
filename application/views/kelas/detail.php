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
					<!-- content -->
					  

					    <div class="hbox hbox-auto-xs hbox-auto-sm ng-scope">
					      <div class="col">
					        	<div class="app-content-body ">

					            <div class="row">
					              <div class="col-md-12">
					                 <div class="panel panel-default">
					              <div class="panel-heading font-semibold">
					                Jadwal kelas
					              </div>
					              <div>
					                <table class="table" ui-jq="footable" ui-options='{
					                  "paging": {
					                    "enabled": true
					                  }}'>
					                  <thead>
					                    <tr>
					                      <th>Hari</th>
					                      <th>Jam</th>
					                      
					                    </tr>
					                  </thead>
					                  <tbody>
					                    <tr data-expanded="true">
					                      <td>Senin</td>
					                      <td>13.00 - 14.00</td>
					                    </tr>
					                    <tr>
					                      <td>Selasa</td>
					                      <td>-</td>
					                    </tr>
					                    <tr>
					                      <td>Rabu</td>
					                      <td>-</td>
					                    </tr>
					                    <tr>
					                      <td>Kamis</td>
					                      <td>15.00 - 16.00</td>
					                    </tr>
					                    <tr>
					                      <td>Jumat</td>
					                      <td>16.00 - 17.00</td>					                      
					                    </tr>
					                    <tr>
					                      <td>Sabtu</td>
					                      <td>-</td>
					                    </tr>
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