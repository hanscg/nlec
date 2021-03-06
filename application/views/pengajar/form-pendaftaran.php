<div id="content" class="app-content" role="main">
  
  <div class="panel panel-default">
    <div class="panel-heading font-bold">
      <h1 class="m-n font-semibold h4 text-grey padder">Form Pendaftaran Pengajar</h1>
    </div>
    <div class="panel-body">
      <form class="form-horizontal" method="post" action="<?php echo base_url('pengajar/addPengajar') ?>" role="form">
        <div class="form-group">
          <label class="col-sm-2 control-label">Nama</label>
          <div class="col-sm-10">
            <input name="nama" type="text" class="form-control" placeholder="Masukkan nama">
          </div>
        </div>
		<div class="line line-dashed b-b line-lg pull-in"></div>
		    <div class="form-group">
          <label class="col-sm-2 control-label">Alamat</label>
          <div class="col-sm-10">
            <textarea name="alamat" type="text" class="form-control" placeholder="Masukkan alamat"></textarea>
          </div>
        </div>
        <div class="line line-dashed b-b line-lg pull-in"></div>
        
        <div class="form-group">
          <label class="col-sm-2 control-label">Tanggal Lahir</label>
          <input type="date" name="ttl">  
        </div>
        
        <div class="form-group">
          <label class="col-sm-2 control-label">Preferensi jadwal</label>
          <div class="col-sm-10">
            <label class="checkbox-inline i-checks">
              <input type="checkbox" value="option1"><i></i> Senin
              <select class="form-control">
                <option>-</option>
                <option>10.00 - 11.00</option>
                <option>12.00 - 13.00</option>
                <option>13.00 - 14.00</option>
                <option>14.00 - 15.00</option>
                <option>15.00 - 16.00</option>
                <option>17.00 - 18.00</option>
              </select>
            </label>
            <br>
            <label class="checkbox-inline i-checks">
              <input type="checkbox" value="option2"><i></i> Selasa
              <select class="form-control">
                <option>-</option>
                <option>10.00 - 11.00</option>
                <option>12.00 - 13.00</option>
                <option>13.00 - 14.00</option>
                <option>14.00 - 15.00</option>
                <option>15.00 - 16.00</option>
                <option>17.00 - 18.00</option>
              </select>
            </label>
            <br>
            <label class="checkbox-inline i-checks">
              <input type="checkbox" value="option3"><i></i> Rabu
              <select class="form-control">
                <option>-</option>
                <option>10.00 - 11.00</option>
                <option>12.00 - 13.00</option>
                <option>13.00 - 14.00</option>
                <option>14.00 - 15.00</option>
                <option>15.00 - 16.00</option>
                <option>17.00 - 18.00</option>
              </select>
            </label>
            <br>
            <label class="checkbox-inline i-checks">
              <input type="checkbox" value="option3"><i></i> Kamis
              <select class="form-control">
                <option>-</option>
                <option>10.00 - 11.00</option>
                <option>12.00 - 13.00</option>
                <option>13.00 - 14.00</option>
                <option>14.00 - 15.00</option>
                <option>15.00 - 16.00</option>
                <option>17.00 - 18.00</option>
              </select>
            </label>
            <br>
            <label class="checkbox-inline i-checks">
              <input type="checkbox" value="option3"><i></i> Jumat
              <select class="form-control">
                <option>-</option>
                <option>10.00 - 11.00</option>
                <option>12.00 - 13.00</option>
                <option>13.00 - 14.00</option>
                <option>14.00 - 15.00</option>
                <option>15.00 - 16.00</option>
                <option>17.00 - 18.00</option>
              </select>
            </label>
            <br>
            <label class="checkbox-inline i-checks">
              <input type="checkbox" value="option3"><i></i> Sabtu
              <select class="form-control">
                <option>-</option>
                <option>10.00 - 11.00</option>
                <option>12.00 - 13.00</option>
                <option>13.00 - 14.00</option>
                <option>14.00 - 15.00</option>
                <option>15.00 - 16.00</option>
                <option>17.00 - 18.00</option>
              </select>
            </label>
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

