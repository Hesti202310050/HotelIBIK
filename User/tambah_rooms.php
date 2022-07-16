<form id="test-form" class="white-popup-block mfp-hide">
                <div class="popup_box ">
                        <div class="popup_inner">
                            <h3>Form Booking Rooms</h3>
                            <form action="simpan_booking.php" method="post">
                            <div class="row">
                        <div class="col-6">
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
                              </select>
                            </div>
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
                      </div>
                        </div>
                        <div>
                        <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">Batal</button>
                          <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                      </div>
                    </div>
                    <br>
            </form>
