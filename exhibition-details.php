<?php include 'header.php'; ?>

<body>
  <div class="containers">
    <div class="ex-event">
      <div class="ex-event-name-date">
        <div class="e-name">
          <h1>Exhibition in RCA Gallery</h1>
          <span class="ex-ev-date">12-12-2020</span>
          <span class="ex-ev-time">12:12 AM</span>
        </div>
      </div>
      <div class="e-discription">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae est ut beatae aliquid ducimus vero quam animi possimus, laudantium incidunt ipsam nisi molestiae facere doloremque illum atque repellendus, ab ipsum.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae est ut beatae aliquid ducimus vero quam animi possimus, laudantium incidunt ipsam nisi molestiae facere doloremque illum atque repellendus, ab ipsum.</p>
      </div>
      <div class="e-gallery-photos">
        <div id="work">
          <div class="containers">
            <!-- <h1 class="text-center">Our Gallery Photos</h1> -->
            <div class="text-center">
              <div class="ex-ev">

                <div class="content-box">

                  <div class="container-fluid">

                    <div class="row no-gutters">

                      <div class="col-xs-6 col-sm-4 col-md-4">
                        <div class="img-wrapper">
                          <a href="First.jpg">
                            <img src="First.jpg" alt="">
                          </a>
                        </div>
                      </div>

                      <div class="col-xs-6 col-sm-4 col-md-4">
                        <div class="img-wrapper">
                          <a href="artist.png">
                            <img src="artist.png" alt="">

                          </a>
                        </div>
                      </div>



                      <div class="col-xs-6 col-sm-4 col-md-4">
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
        </div>
      </div>
      <div class="e-discription">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime, fuga exercitationem, possimus molestias natus odio quaerat dolorem consequatur nobis illum laborum ipsa, consequuntur eligendi delectus voluptatem. Unde a delectus perferendis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga illum labore aliquam voluptatum asperiores dolorum impedit aut exercitationem quod ducimus voluptas quam voluptatem cupiditate nisi at, eius eum accusamus nobis!
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae est ut beatae aliquid ducimus vero quam animi possimus, laudantium incidunt ipsam nisi molestiae facere doloremque illum atque repellendus, ab ipsum.
        </p>
      </div>
      <div class="e-video-discription">
        <div class="e-video">
          <div class="iframe-container">
            <iframe src="video.mp4" frameborder="0"></iframe>
          </div>

        </div>
        <div class="e-right-discripton">
          <p><b>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam incidunt saepe praesentium illo, ipsam eum. Praesentium libero officiis, inventore doloribus quae dolore quod ab eveniet minima, cupiditate et excepturi dicta.Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio officiis est praesentium fuga, consequatur tempore minus neque hic nostrum?
            </b></p>
        </div>
      </div>
      <div class="e-discription">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, dolores distinctio autem accusamus quis, architecto expedita rerum minima, dolore sed temporibus. Veniam sunt nesciunt incidunt, aut suscipit soluta asperiores ducimus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio officiis est praesentium fuga, consequatur tempore minus neque hic nostrum aut porro deserunt doloremque itaque ullam iure? Illo laboriosam reiciendis pariatur?
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio officiis est praesentium fuga, consequatur tempore minus neque hic nostrum aut porro deserunt doloremque itaque ullam iure? Illo laboriosam reiciendis pariatur?
        </p>
      </div>
      <p class="artist-star">* * * * * * * * * * * *</p>
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