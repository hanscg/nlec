<div id="content" class="app-content" role="main">
  
  <div class="panel panel-default">
    <div class="panel-heading font-bold">
      <h1 class="m-n font-semibold h4 text-grey padder">Tambah Kelas</h1>
    </div>
    <div class="panel-body">
      <form class="form-horizontal" method="post" action="<?php echo base_url('kelas/assignKelas') ?>" role="form">
         <div class="form-group">
          <label class="col-sm-2 control-label">Nama</label>
          <div class="col-sm-10">
            <input name="nama" type="text" class="form-control" value=<?= $siswa['nama']?> disabled>
          </div>
        </div>
        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Kode kelas</label>
          <div class="col-sm-10">
            <select name="kode_kelas" class="form-control m-b">
              <?php foreach ($daftar_kelas as $kelas) : ?>
                <option value="<?= $kelas['kode'] ?>"> <?= $kelas['kode'] ?> (Jumlah siswa: <?= $kelas['jumlah_siswa'] ?>) </option>
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
        <input type ="hidden" name = "id_siswa" value="<?= $siswa['id'] ?>">
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

