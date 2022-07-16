<?php
include"koneksi.php";
?>
<div class="modal-dialog" role="document" style="max-width:75%">
        <div class="modal-content">
          <div class="modal-header">
            <h4>Form Tambah Data</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-12">
                <div class="card card-primary">
                  <br>
                  <div class="col-12">
                    <form action="simpan_booking.php" method="post">
                      <div class="row">
                        <div class="col-12">
                        <div class="form-group">
                          <label>Kode Booking </label>
                          <?php
                          $carikode = mysqli_query($koneksi,"SELECT max(kode_booking) AS maxKode FROM tbl_booking");
                          $datakode = mysqli_fetch_array($carikode);
                          $kode_booking = $datakode['maxKode'];
                          $nourut = (int) substr($kode_booking, 5, 5);
                          $nourut++;
                          $char = "BK";
                          $kode_booking = $char.sprintf("0%04s", $nourut);
                          ?>
                          <input name="kode_booking" class="form-control" value="<?php echo $kode_booking ?>" readonly>
                        </div>
                        </div>
                        <div class="col-6">
                        <div class="form-group">
                          <label>Nama Pemesan</label>
                          <input type="text" name="nama_pemesan" class="form-control" placeholder="Masukan Nama Pemesan" required="">
                        </div>
                        </div>
                        <div class="col-6">
                        <div class="form-group">
                          <label>Email</label>
                          <input type="email" name="email" class="form-control" placeholder="Masukan Email" required="">
                        </div>
                        </div>
                        <div class="col-6">
                        <div class="form-group">
                          <label>Tanggal Checkin</label>
                          <input type="date" name="tgl_masuk" class="form-control" required>
                        </div>
                        </div>
                        <div class="col-6">
                        <div class="form-group">
                          <label>Tanggal Checkout</label>
                          <input type="date" name="tgl_keluar" class="form-control" required>
                        </div>
                        </div>
                        <div class="col-6">
                    <div class="form-group">
                      <label class="control-label">Nama Venue</label>
                      <div class="selectContainer">
                        <select class="form-control" name="venue" required>
                          <option value="" disabled selected selected="selected" id="kosong">-- Pilih Rooms --</option>
                          <?php
                          //query untuk menampilkan semua lokasi pada tabel yang dipilih di database
                          $query = mysqli_query($koneksi,"SELECT * FROM tbl_rooms");
                          while ($data = mysqli_fetch_array($query))
                          {
                            echo "<option value='$data[nama]'>$data[nama]</option>";
                          }
                          ?>
                          <option value="" disabled selected selected="selected" id="kosong">-- Pilih Meeting Rooms --</option>
                          <?php
                          //query untuk menampilkan semua lokasi pada tabel yang dipilih di database
                          $query = mysqli_query($koneksi,"SELECT * FROM tbl_meeting");
                          while ($data = mysqli_fetch_array($query))
                          {
                            echo "<option value='$data[nama]'>$data[nama]</option>";
                          }
                          ?>
                          <option value="" disabled selected selected="selected" id="kosong">-- Pilih Ballrooms --</option>
                          <?php
                          //query untuk menampilkan semua lokasi pada tabel yang dipilih di database
                          $query = mysqli_query($koneksi,"SELECT * FROM tbl_ballroom");
                          while ($data = mysqli_fetch_array($query))
                          {
                            echo "<option value='$data[nama]'>$data[nama]</option>";
                          }
                          ?>
                        </select>
                      </div>
                    </div>
                  </div>
                        <div class="col-6">
                        <div class="form-group">
                          <label class="control-label">Status</label>
                          <div class="selectContainer">
                            <select class="form-control" name="status" required>
                              <option value="" disabled selected selected="selected">-- Pilih --</option>
                              <option>Belum Bayar</option>
                              <option>Sudah Bayar</option>
                            </select>
                          </div>
                        </div>
                        </div>
                      </div>
                        <br>
                        <div>
                        <button type="button" onClick="window.location.reload();" class="btn btn-success">Batal</button>
                        <span style="float : right">
                          <button type="reset" class="btn btn-danger">Reset</button>
                          <button type="submit" class="btn btn-primary">Simpan</button>
                        </span>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
