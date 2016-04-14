<div id="content" class="app-content" role="main">
  
  <div class="panel panel-default">
    <div class="panel-heading font-bold">
      <h1 class="m-n font-semibold h4 text-grey padder">Tambah Kelas</h1>
    </div>
    <div class="panel-body">
      <form class="form-horizontal" method="post" action="<?php echo base_url('kelas/addKelas') ?>" role="form">
        <div class="form-group">
          <label class="col-sm-2 control-label">Kode kelas</label>
          <div class="col-sm-10">
            <input name="kode" type="text" class="form-control" placeholder="Masukkan kode">
          </div>
        </div>
		
          <div class="line line-dashed b-b line-lg pull-in"></div>
		    <div class="form-group">
          <label class="col-sm-2 control-label">Pengajar</label>
          <div class="col-sm-10">
            <select name="pengajar" class="form-control m-b">
              <?php foreach ($daftar_pengajar as $pengajar) : ?>
                <option value="<?= $pengajar['id'] ?>"> <?= $pengajar['nama'] ?> </option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="line line-dashed b-b line-lg pull-in"></div>
        
        <div class="form-group">
          <label class="col-sm-2 control-label">Ruangan</label>
          <div class="col-sm-10">
            <select name="ruangan" class="form-control m-b">
              <?php foreach ($daftar_ruangan as $ruangan) : ?>
                <option><?= $ruangan['nomor'] ?> (Kapasitas: <?= $ruangan['kapasitas']?>)</option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        
        <!-- <div class="line line-dashed b-b line-lg pull-in"></div>

        <div class="form-group">
          <label class="col-sm-2 control-label">Level</label>
          <div class="col-lg-3 m-l-n">
            <select class="form-control" name="level">
              <option value="n1">N1</option>
              <option value="n2">N2</option>
              <option value="n3">N3</option>
              <option value="n4">N4</option>
              <option value="n5" selected>N5</option>
            </select>
          </div>
        </div> -->

        <div class="line line-dashed b-b line-lg pull-in"></div>

        <div class="form-group">
          <div class="col-sm-4 col-sm-offset-2">
            <button type="" class="btn btn-default m-r-sm">Batalkan</button>
            <button type="submit" class="btn btn-info">Simpan</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

