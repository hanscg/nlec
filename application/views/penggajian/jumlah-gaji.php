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
					<h1 class="m-n font-bold h4 padder" >
						<div class="row">
							<div class="col-md-10">
							Gaji bulan <?= $bulan ?> <?= $tahun ?>
							</div>
						</div>
						<br>
						<form method="post" action="<?php echo base_url('penggajian/jumlah_gaji') ?>" >
			            <input type ="hidden" name = "id_pengajar" value="<?= $id_pengajar ?>">
						<div class="row">
							<div class="col-md-2">
								<select name="bulan" class="form-control m-b">
									<option default>Bulan</option>
					                <option value="Jan"> Januari </option>
					                <option value="Feb"> Februari </option>
					                <option value="Mar"> Maret </option>
					                <option value="Apr"> April </option>
					                <option value="May"> Mei </option>
					                <option value="Jun"> Juni </option>
					                <option value="Jul"> Juli </option>
					                <option value="Aug"> Agustus </option>
					                <option value="Sep"> September </option>
					                <option value="Oct"> Oktober </option>
					                <option value="Nov"> November </option>
					                <option value="Dec"> Desember </option>
		                		</select>
	                		</div>
	                		<div class="col-md-2">
	                			<input name = "tahun" type="text" class="form-control" placeholder="Tahun">
	                		</div>
	                		<div class="col-md-2">
	                			<button type="submit" class="btn m-b-sm m-r-sm btn-info btn-sm">Ganti bulan</button>
							</div>
                		</div>
                		</form>
					</h1>
				</div>
				<div class="wrapper-lg bg-light">
					<div class="row">
						<div class="col-md-3">
							<h4 class="m-t-lg font-bold text12">
								Nama
							</h4>
							<p>
								<?= $data_pengajar['nama'] ?>
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<h4 class="m-t-lg font-bold text12">
								Jam mengajar
							</h4>
							<p>
								<?php
									$start_date = '2009-06-17';

									$count = 0;

									foreach ($data_presensi as $presensi) {
										$month = date("n-Y",strtotime($presensi['hari']));
										if ($month == date("n-Y",strtotime($bulan." ".$tahun))) {
											$count++;
										}
									}

									echo $count*1.5;
								?> jam
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<h4 class="m-t-lg font-bold text12">
								Gaji
							</h4>
							<p>
								Rp. <?= $count*1.5*100000 ?>
							</p>
						</div>
					</div>
				</div>
			</div>
	    </div>
	</div>
</div>