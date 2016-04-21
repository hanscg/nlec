<div id="content" class="app-content" role="main">
  
  <div class="panel panel-default">
    <div class="panel-heading font-bold">
      <h1 class="m-n font-semibold h4 text-grey padder">Pilih Kelas</h1>
    </div>
    <div class="panel-body">
      <form class="form-horizontal" method="post" action="<?php echo base_url('kelas/assignNilai') ?>" role="form">
        <div class="form-group">
          <label class="col-sm-2 control-label">Nama</label>
          <div class="col-sm-10">
            <input name="nama" type="text" class="form-control" value="<?= $siswa['nama']?>" disabled>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Pengajar</label>
          <div class="col-sm-10">
            <input name="nama" type="text" class="form-control" value="<?= $pengajar['nama']?>" disabled>
          </div>
        </div>
        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Skor</label>
          <div class="col-sm-2">
            <input type="number" name="skor" class="form-control m-b"></input>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Komentar</label>
          <div class="col-sm-10">
            <input type="text" name="komentar" class="form-control m-b"></input>
          </div>
        </div>

        <div class="line line-dashed b-b line-lg pull-in"></div>
        <input type ="hidden" name = "id_siswa" value="<?= $siswa['id'] ?>">
        <input type ="hidden" name = "id_pengajar" value="<?= $pengajar['id'] ?>">
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

