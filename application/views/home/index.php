  <!-- Slide -->
  <script src="asset/js/jssor.slider-28.0.0.min.js" type="text/javascript"></script>
  <script type="text/javascript">
      window.jssor_1_slider_init = function() {

          var jssor_1_options = {
            $AutoPlay: 1,
            $SlideWidth: 720,
            $ArrowNavigatorOptions: {
              $Class: $JssorArrowNavigator$
            },
            $BulletNavigatorOptions: {
              $Class: $JssorBulletNavigator$
            }
          };

          var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

          /*#region responsive code begin*/

          var MAX_WIDTH = 1100;

          function ScaleSlider() {
              var containerElement = jssor_1_slider.$Elmt.parentNode;
              var containerWidth = containerElement.clientWidth;

              if (containerWidth) {

                  var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                  jssor_1_slider.$ScaleWidth(expectedWidth);
              }
              else {
                  window.setTimeout(ScaleSlider, 30);
              }
          }

          ScaleSlider();

          $Jssor$.$AddEvent(window, "load", ScaleSlider);
          $Jssor$.$AddEvent(window, "resize", ScaleSlider);
          $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
          /*#endregion responsive code end*/
      };
  </script>
  <style>
      /*jssor slider bullet skin 051 css*/
      .jssorb051 .i {position:absolute;cursor:pointer;}
      .jssorb051 .i .b {fill:#fff;fill-opacity:0.5;}
      .jssorb051 .i:hover .b {fill-opacity:.7;}
      .jssorb051 .iav .b {fill-opacity: 1;}
      .jssorb051 .i.idn {opacity:.3;}

      /*jssor slider arrow skin 051 css*/
      .jssora051 {display:block;position:absolute;cursor:pointer;}
      .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
      .jssora051:hover {opacity:.8;}
      .jssora051.jssora051dn {opacity:.5;}
      .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
  </style>
  <div id="jssor_1" style="position:relative;margin:30px auto;top:0px;left:0px;width:980px;height:180px;overflow:hidden;visibility:hidden;">
      <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:180px;overflow:hidden;">
          <div>
              <img data-u="image" src="asset/gambar/promo/1.png" />
          </div>
          <div>
              <img data-u="image" src="asset/gambar/promo/2.png" />
          </div>
          <div>
              <img data-u="image" src="asset/gambar/promo/3.png" />
          </div>
          <a data-u="any" href="https://www.jssor.com" style="display:none">animation</a>
      </div>
      <!-- Bullet Navigator -->
      <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
          <div data-u="prototype" class="i" style="width:16px;height:16px;">
              <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                  <circle class="b" cx="8000" cy="8000" r="5800"></circle>
              </svg>
          </div>
      </div>
      <!-- Arrow Navigator -->
      <div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:35px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
          <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
              <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
          </svg>
      </div>
      <div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:35px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
          <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
              <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
          </svg>
      </div>
  </div>
  <script type="text/javascript">jssor_1_slider_init();
  </script>

  <div class="container">
    <div class="row">
      <div class="col-lg-12" style="text-align: center;">
        <h4>Rekomendasi Co-Working di <span class="font-weight-bold">Sleman, Yogyakarta</span></h4>
        <p>Cara cepat, mudah, dan murah reservasi Co-Working Space Favorit</p>
        <div class="form-row">
          <div class="col-3"></div>
          <div class="col-6">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Cari Sesuai Keinginan (Nama Kota / Co-Working)">
              <div class="input-group-append">
                <button class="btn btn-info" type="button" style="background-color: #336699"><i class="fas fa-search"></i> Cari</button>
              </div>
            </div>
          </div>
          <div class="col-3"></div>
        </div>
        <hr>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <?php foreach ($coworking as $row) :?>
      <div class="col-lg-3 col-sm-6 portfolio-item">
          <div class="card">
            <a href="<?= $row['url_coworking']; ?>">
            <img class="card-img-top" src="asset/gambar/coworking/<?= $row['foto_coworking']; ?>" alt="">
            <div class="card-img-overlay">
              <div class="d-inline p-2 text-white" style="background-color: #336699"><?= rupiah($row['harga_coworking']); ?>/jam</div>

              <p class="d-inline p-2 text-white" style="background-color: #fdc502"><i class="fas fa-star-half-alt"></i> <b>4/5</b></p>
            </div>
             </a>
            <div class="card-body">
              <i class="fas fa-map-marker-alt" style="color: red"></i>
              <span style="font-size: 13px"> Jl. Kledokan I No.63A, Ngentak......</span>
              <hr style="margin-top:6px;margin-bottom: 6px">
              <h5 class="font-weight-bold" style="color: #336699"><?= $row['nama_coworking']; ?></h5>
              <span style="font-size: 15px">
                <i class="fas fa-users"></i> 12 Orang 
                <i class="fas fa-wifi"></i>&nbsp&nbsp<i class="fas fa-tv"></i>&nbsp&nbsp<i class="fas fa-chalkboard"></i>&nbsp&nbsp <i class="fas fa-phone-alt"></i>   
              </span>
            </div>
          </div>
      </div>
      <?php endforeach; ?>
    </div>

    <div style="text-align: center;">
      <div class="spinner-border" role="status"></div><br>
      <i>Memuat Co-Working Lainnya....</i>
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