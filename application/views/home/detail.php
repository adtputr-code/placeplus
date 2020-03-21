  <br><br>
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
          <div class="card">
            <img class="card-img-top" src="<?php echo site_url('asset/gambar/coworking/').$coworking['foto_coworking'];?>" alt="">
            <div class="card-img-overlay">
              <div class="d-inline p-2 text-white" style="background-color: #336699"><?php echo rupiah($coworking['harga_coworking']); ?>/jam</div>

              <p class="d-inline p-2 text-white" style="background-color: #fdc502"><i class="fas fa-star-half-alt"></i> <b>4/5</b></p>
            </div>
            <div class="card-body">
              <i class="fas fa-map-marker-alt" style="color: red"></i>
              <span style="font-size: 13px"><?php echo $coworking['alamat_coworking'] ?></span>
              <hr style="margin-top:6px;margin-bottom: 6px">
              <h4 class="font-weight-bold" style="color: #336699"><?php echo $coworking['nama_coworking'] ?></h4>
              <span style="font-size: 15px">
                <i class="fas fa-users"></i> 12 Orang 
                <i class="fas fa-wifi"></i>&nbsp&nbsp<i class="fas fa-tv"></i>&nbsp&nbsp<i class="fas fa-chalkboard"></i>&nbsp&nbsp <i class="fas fa-phone-alt"></i>   
              </span>
              <hr>
              <h5>Deskripsi</h5>
              <p style="text-align: justify;">
              	<?php echo $coworking['des_coworking'] ?>
              </p>
              <iframe src="<?php echo $coworking['url_maps_coworking'] ?>" width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
              <hr>
            	<div class="row">
            		<div class="col-lg-6">
		            	<h5>Jam Operasional</h5>
	            		<table class="table">
		            		<?php 
                    $data = explode("," , $coworking['jam_coworking']);
                    $hari=0;
                    $jam=1;
                    $no=0;
                    while ($no < 7){
                    ?>
                    <tr>
                      <td><?php echo $data[$hari]; ?></td>
                      <td><?php echo $data[$jam]; ?></td>
                    </tr>
                    <?php 
                    $hari=$hari+2;
                    $jam=$jam+2;
                    $no++;
                    } ?>
	            		</table>
            		</div>
            		<div class="col-lg-6">
		            	<h5>Cocok Untuk</h5>
		            	<p>
                    <?php $data = explode("," , $coworking['fungsi_coworking']); 
                    $fungsi=0;
                    $jumlah = count($data);
                    while ($fungsi < $jumlah){
                    ?>
		            		<i class="fa fa-check-circle"></i> <?php echo $data[$fungsi]; ?> <br>	
                    <?php 
                    $fungsi++;
                    } ?>
		            	</p>
            		</div>
            	</div>
            </div>
          </div>
      </div>

      <div class="col-lg-4">
      	<div class="card fixed">
      		<div class="card-header bg-dark text-light px-3">
      			<i style="color:#fdc502 " class="fas fa-award"></i> <span class="font-weight-bold">Rp 150.000/Jam</span> 
      			<h6></h6>
      		</div>      
      		<div class="card-body">
              <label><b>Ketersedian Waktu</b></label>
              <button class="btn btn-outline-dark btn-sm rounded-pill">Lihat Ketersedian</button>
              <br>
              <label>Tanggal Reservasi</label>
              <div class="form-inline input-group">
                <input type="date" class="form-control datepicker" name="dari" required>
	              <div class="input-group-prepend">
	                <div class="input-group-text"><i class="fas fa-calendar-day"></i></div>
	              </div>
              </div><br>
              <label>Waktu Reservasi</label>
              <div class="form-inline input-group">
              	<input type="time" class="form-control datepicker" name="dari" required>
	              <div class="input-group-prepend">
	                <div class="input-group-text">Sampai</div>
	              </div>
              	<input type="time" class="form-control datepicker" name="dari" required>
              </div>
              <br>
              <label>Rincian Biaya</label>
              <table class="table">
              	<tr>
              		<td> Rp 150.000 x 2 Jam </td>
              		<td><span class="text-right"><b>Rp 300.000.00,-</b></span></td>
              	</tr>
              </table>
              <i class="fas fa-info-circle"></i> Syarat & ketentuan <br>
              <p style="text-align: justify; font-size: 13px">
              	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
              </p>
              <a href="payment.php"><button class="btn btn-primary btn-block" style="background-color: #336699">Reservasi</button></a>
      		</div>		
      	</div>
      </div>

    </div>
    <br>
  </div>

  
  <div style="background-color: #f1f1f1; padding: 30px">
      <div class="container"> 
      <div class="row">
        <div class="col-lg-6">
          <img src="asset/gambar/gambar.jpg" width="500px" height="auto">
        </div>
        <div class="col-lg-6">
          <h3 class="font-weight-bold">Co-Working Space</h3>
          <h4>akan Memberikan Suasana Bekerja yang Berbeda</h4>
          <p style="text-align: justify;"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  </p>
        </div>
      </div>
      </div>
  </div>

    <!-- Features Section -->
    

    <div class="container">
      <br>  
      <span style="text-align: center;">  <h4>Co-Working Space di Kota Lainnya</h4></span>
      <hr>  
      <div class="row">
        <div class="col-lg-3">
          <h5> Jakarta</h5>
          <p> Lorem ipsum dolor sit amet</p>
          <p> consectetur adipisicing elit</p> 
          <p> sed do eiusmod incididunt ut</p> 
          <p> labore et dolore magna aliqua</p> 
          <p> consectetur adipisicing elit</p> 
          <p> sed do eiusmod incididunt ut</p> 
          <p> labore et dolore magna aliqua</p>
        </div>
        <div class="col-lg-3">
          <h5> Bandung</h5>
          <p> Lorem ipsum dolor sit amet</p>
          <p> consectetur adipisicing elit</p> 
          <p> sed do eiusmod incididunt ut</p> 
          <p> labore et dolore magna aliqua</p> 
          <p> consectetur adipisicing elit</p> 
          <p> sed do eiusmod incididunt ut</p> 
          <p> labore et dolore magna aliqua</p>
        </div>
        <div class="col-lg-3">
          <h5> Surabaya</h5>
          <p> Lorem ipsum dolor sit amet</p>
          <p> consectetur adipisicing elit</p> 
          <p> sed do eiusmod incididunt ut</p> 
          <p> labore et dolore magna aliqua</p> 
          <p> consectetur adipisicing elit</p> 
          <p> sed do eiusmod incididunt ut</p> 
          <p> labore et dolore magna aliqua</p>
        </div>
        <div class="col-lg-3">
          <h5> Semarang</h5>
          <p> Lorem ipsum dolor sit amet</p>
          <p> consectetur adipisicing elit</p> 
          <p> sed do eiusmod incididunt ut</p> 
          <p> labore et dolore magna aliqua</p> 
          <p> consectetur adipisicing elit</p> 
          <p> sed do eiusmod incididunt ut</p> 
          <p> labore et dolore magna aliqua</p>
        </div>
      </div>
    </div>