<?php include 'header.php'; ?>

<body>


  <div class="containers">
    <div class="text-box-name">
      <p>Rangdhaanee Contemporary Art Gallery</p>
    </div>
    <div class="row">
      <div class="about-page">
        <div class="about">
          <div class="about-img">
            <img src="second.jpg" alt="RCA">
          </div>
          <div class="about-info">
            <h1 class="about-title">XXXXXXX XXXXXX</h1>
            <p class="founder-tag">(FOUNDER OF RCA ART GALLERY)</p>
            <hr>
            <p class="about-text "><b>" Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere recusandae placeat alias mollitia rem perferendis nesciunt quos vel sequi quas eos aperiam sed aliquid consequatur consequuntur similique, aspernatur impedit officia."</b>
            </p>
            <p class="about-text "> Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere recusandae placeat alias mollitia rem perferendis nesciunt quos vel sequi quas eos aperiam sed aliquid consequatur consequuntur similique, aspernatur impedit officia.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam qui alias nostrum, sapiente cupiditate distinctio omnis culpa facere enim molestias, voluptas impedit quasi sed ab totam cumque et, tenetur quae?
            </p>
          </div>
        </div>
      </div>
    </div>


  </div>
  <div class="about-home-box">
    <div class="container-1">
      <div class="row">
        <div class="info-page">
          <div class="info">
            <div class="info-info">
              <h1 class="info-title">About Our Gallery</h1>
              <p class="info-tag">(Since 1980)</p>
              <hr>
              <p class="info-text "><b> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere recusandae placeat alias mollitia rem perferendis nesciunt quos."</b>
              </p>
              <p class="info-text "> Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere recusandae placeat alias mollitia rem perferendis nesciunt quos vel sequi quas eos aperiam sed aliquid consequatur consequuntur similique, aspernatur impedit officia.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam qui alias nostrum, sapiente cupiditate distinctio omnis culpa facere enim molestias, voluptas impedit quasi sed ab totam cumque et, tenetur quae?
              </p>
              <p class="info-address"><i class="fa fa-map-marker"></i>Ratnagiri Godbole Stop , Maruti Mandir 415612</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="work">
    <div class="containers">
      <h1 class="text-center">Our Gallery Photos</h1>
      <div class="about-img-gallery">

        <div class="content-box">

          <div class="container-fluid">

            <div class="row no-gutters">

              <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="img-wrapper">
                  <a href="First.jpg">
                    <img src="First.jpg" alt="">
                  </a>
                </div>
              </div>

              <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="img-wrapper">
                  <a href="artist.png">
                    <img src="artist.png" alt="">

                  </a>
                </div>
              </div>



              <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="img-wrapper">
                  <a href="1.jpg">
                    <img src="1.jpg" alt="">

                  </a>
                </div>
              </div>

              <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="img-wrapper">
                  <a href="1.jpg">
                    <img src="1.jpg" alt="">

                  </a>
                </div>
              </div>

              <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="img-wrapper">
                  <a href="1.jpg">
                    <img src="1.jpg" alt="">

                  </a>
                </div>
              </div>

              <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="img-wrapper">
                  <a href="1.jpg">
                    <img src="1.jpg" alt="">

                  </a>
                </div>
              </div>

              <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="img-wrapper">
                  <a href="1.jpg">
                    <img src="1.jpg" alt="">

                  </a>
                </div>
              </div>

              <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="img-wrapper">
                  <a href="1.jpg">
                    <img src="1.jpg" alt="">

                  </a>
                </div>
              </div>
              <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="img-wrapper">
                  <a href="1.jpg">
                    <img src="1.jpg" alt="">

                  </a>
                </div>
              </div>
              <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="img-wrapper">
                  <a href="1.jpg">
                    <img src="1.jpg" alt="">

                  </a>
                </div>
              </div>
              <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="img-wrapper">
                  <a href="1.jpg">
                    <img src="1.jpg" alt="">

                  </a>
                </div>
              </div>
              <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="img-wrapper">
                  <a href="1.jpg">
                    <img src="1.jpg" alt="">

                  </a>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>

    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js">
  </script>
  <script>
    $(function() {
      $("#work").magnificPopup({
        delegate: 'a',
        type: "image",
        gallery: {
          enabled: true
        }

      });
    });
  </script>



</body>

<?php include 'footer.php'; ?>