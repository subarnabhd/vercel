<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <link rel="shortcut icon" href="./image/favi.png" />
  <meta name="google-site-verification" content="Ztk88ACyEy4hrThBcX8xX4808NU10tv60ClxkgcWGNQ" />


  <!-- HTML Meta Tags -->
  <title>Subarna Bhandari</title>
  <meta name="description" content="Make your task easier : Link. by Subarna">


  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!-- Google Icon -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,1,0" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- CSS Link -->
  <link rel="stylesheet" href="/css/style.css" />
  <link rel="stylesheet" href="/css/header.css" />
  <link rel="stylesheet" href="/css/home.css" />
  <link rel="stylesheet" href="/css/footer.css" />
  <link rel="stylesheet" href="/css/copywrite.css" />


  <!-- SLIDER -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>



  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
</head>

<body>

  <header class="theader minimal transparent">
    <nav id="main-nav"></nav>
  </header>

  <main>


    <div class="home-1 d-nav" id="scroll-top">


      <div class="home-link">


        <div class="link-left">
          <div class="link-line">
          </div>
          <div>
            <ul>
              <li><a href="https://facebook.com/subarnabhd" target="_blank">facebook</a></li>
              <li><a href="https://www.linkedin.com/in/subarnabhd" target="_blank">linkedin</a></li>
              <li><a href="https://www.instagram.com/subarnabhd" target="_blank">instagram</a></li>
              <li><a href="https://behance.net/subarnabhd" target="_blank">Behance</a></li>
              <li><a href="https://behance.net/subarnabhd" target="_blank">Twitter</a></li>
            </ul>
          </div>
        </div>

        <div class="link-center">
          <div class="link-line">
          </div>
        </div>

        <div class="link-right">
          <div class="link-line">
          </div>
          <div>
            <ul>
              <li><a href="#home-scroll">Scroll Down</a></li>
            </ul>
          </div>
        </div>

      </div>

      <div class="c-home">
        <div class="h-home">
          <img src="./image/SubarnaBhandari.webp" />
          <h2>Subarna<strong>.</strong><span>Bhandari</span></h2>
          <a href="https://subarnabhandari.com/">www.subarnabhandari.com</a>

        </div>
      </div>
    </div>
    <script>
      $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        // console.log(scroll);
        if (scroll > 0) {
          $('.minimal').removeClass('transparent');
        } else {
          $('.minimal').addClass('transparent');
        }

        // var scroll = $(window).scrollTop();
        var scale = 1 - scroll / 1000;
        if (scale >= 0.77) {
          $('.c-home').css('transform', 'scale(' + scale + ')');
        }
      });
    </script>

    <!-- <div class="home-explore">

      <a href="/studio.html">Explore TSS - The Subrana Studio <i class="fa-solid fa-arrow-right-long"></i></a>

    </div> -->

    <div class="home-mail">

      <a target="_blank" href="mailto:hello@subarnabhandari.com"><i
          class="fa-regular fa-paper-plane"></i>&nbsp;&nbsp;hello@subarnabhandari.com</a>

    </div>

    <div class="home-2" id="home-scroll">
      <div class="home-2-container">
        <div class="home-2-bar">
          <a type="button" href="#home-scroll"></a>
        </div>
        <h2>Striving to create elegant & effortless designs.</h2>
        <p>Unlimited possibility to reach out. Create your own brand with Subarna.</p>
        <!-- <a href="/studio.html">View More</a> -->
        <img src="./image/pc.webp" />

      </div>
    </div>

    <div class="home-6 d-nav">
      <div class="container home-conatiner-6 row">
        <div class="col1 col">
          <h2>Why to Choose ?</h2>
          <p>Over the years, I have acquired relevant skills and experience, which I shall bring to you.
            These “why me” reasons should be enough to convince someone who is looking for a design solution.<br><br>
            But if you’re still in doubt,
          </p>
          <a href="/contact.html" type="button">Let’s do a small test together</a>
          <hr>
          <p>Agree or disagree with any of the above?</p>
          <a class="home-6-btn" type="button" target="_blank" href="/contact.html">Send Your honest feedback</a>
        </div>
        <div class="col2 col">

          <div class="why-box dbox" style="margin-left:-100px;">
            <img src="/image/icon/svg0.svg" alt="">
            <div>
              <h3>Top notch quality</h3>
              <p>Nothing less than the best</p>
            </div>
          </div>

          <div class="why-box dbox">
            <img src="/image/icon/svg1.svg" alt="">
            <div>
              <h3>Speedy turn around</h3>
              <p>But don’t forget me being a human</p>
            </div>
          </div>

          <div class="why-box dbox" style="margin-left:-80px;">
            <img src="/image/icon/svg2.svg" alt="">
            <div>
              <h3>Always ready to chat</h3>
              <p>Except for when I am dreaming</p>
            </div>
          </div>

          <div class="why-box dbox">
            <img src="/image/icon/svg3.svg" alt="">
            <div>
              <h3>Email Availability 9.5/10</h3>
              <p>I mean it - Test it now</p>
            </div>
          </div>

          <div class="why-box dbox" style="margin-left:80px;">
            <img src="/image/icon/svg4.svg" alt="">
            <div>
              <h3>Affordable</h3>
              <p>Don’t mix it up with “Cheap”</p>
            </div>
          </div>






        </div>
      </div>

      <div class="h-text-slider">
        <div class="swiper tr-slider">
          <div class="swiper-wrapper">

            <div class="swiper-slide ">
              <p>Subarna Bhandari</p>
            </div>
            <div class="swiper-slide">
              <p>The Subarna Studio</p>
            </div>
            <div class="swiper-slide ">
              <p>TSS</p>
            </div>
            <div class="swiper-slide">
              <p>www.subarnabhandari.com</p>
            </div>
            <div class="swiper-slide ">
              <p>Subarna Bhandari</p>
            </div>
            <div class="swiper-slide">
              <p>Subarna Bhandari</p>
            </div>
            <div class="swiper-slide ">
              <p>Subarna Bhandari</p>
            </div>
            <div class="swiper-slide">
              <p>The Subarna Studio</p>
            </div>
            <div class="swiper-slide ">
              <p>TSS</p>
            </div>
            <div class="swiper-slide">
              <p>www.subarnabhandari.com</p>
            </div>
            <div class="swiper-slide ">
              <p>Subarna Bhandari</p>
            </div>
            <div class="swiper-slide">
              <p>Subarna Bhandari</p>
            </div>
            <div class="swiper-slide ">
              <p>subarnabhd</p>
            </div>
          </div>
        </div>

        <script>


          const trswiper = new Swiper('.tr-slider', {
            loop: true,
            autoplay: {
              delay: 0,
              pauseOnMouseEnter: false,
              disableOnInteraction: false,
              reverseDirection: true,
            },
            speed: 4000,
            slidesPerView: 8,
          })


        </script>
        <div class="swiper tl-slider">
          <div class="swiper-wrapper">

            <div class="swiper-slide ">
              <p>UI Design</p>
            </div>
            <div class="swiper-slide">
              <p>UX Design</p>
            </div>
            <div class="swiper-slide ">
              <p>Product Design</p>
            </div>
            <div class="swiper-slide">
              <p>Graphic Design</p>
            </div>
            <div class="swiper-slide ">
              <p>UI Designer</p>
            </div>
            <div class="swiper-slide">
              <p>UX Designer</p>
            </div>
            <div class="swiper-slide ">
              <p>Market Analysis</p>
            </div>
            <div class="swiper-slide">
              <p>Social Media</p>
            </div>
            <div class="swiper-slide ">
              <p>Digital Marketing</p>
            </div>
            <div class="swiper-slide">
              <p>Product Validation</p>
            </div>
            <div class="swiper-slide ">
              <p>UI Components</p>
            </div>
            <div class="swiper-slide">
              <p>Figma</p>
            </div>

          </div>
        </div>


        <script>
          const tlswiper = new Swiper('.tl-slider', {
            loop: true,
            autoplay: {
              delay: 0,
              pauseOnMouseEnter: false,
              disableOnInteraction: false,
            },
            speed: 4000,
            slidesPerView: 8,
          })
        </script>



      </div>

    </div>

    <div class="home-5 d-nav">

      <div class="row">
        <div class="col-6">
          <img href="/studio.html" src="/image/Subarna Bhandari-20.svg" alt="The Subarna Studio" class="img-fluid">
        </div>
        <div class="col-6">
          <img src="/image/Subarna Bhandari-22.svg" alt="Image 2" class="img-fluid">
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <img src="/image/Subarna Bhandari-21.svg" alt="Image 3" class="img-fluid">
        </div>
        <div class="col-6">
          <img src="/image/Subarna Bhandari-24.webp" alt="Image 4" class="img-fluid">
        </div>
      </div>

    </div>

    <div class="home-4">
      <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_dzkk5Z.json" background="transparent" speed="1"
        style="width: 150px; height:80px; text-align: center;" loop autoplay></lottie-player>

      <h2>Good design is good business.</h2>
      <p>“You can do anything you set your mind to.”</p>

      <div class="swiper s-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="./image/design/slider_1.gif" alt="Slide 1"></div>
          <div class="swiper-slide"><img src="./image/design/slider_2.gif" alt="Slide 2"></div>
          <div class="swiper-slide"><img src="./image/design/slider_3.webp" alt="Slide 3"></div>
          <div class="swiper-slide"><img src="./image/design/slider_4.webp" alt="Slide 4"></div>
          <div class="swiper-slide"><img src="./image/design/slider_5.webp" alt="Slide 5"></div>
          <div class="swiper-slide"><img src="./image/design/slider_6.webp" alt="Slide 6"></div>
          <div class="swiper-slide"><img src="./image/design/slider_7.webp" alt="Slide 7"></div>
          <div class="swiper-slide"><img src="./image/design/slider_8.webp" alt="Slide 8"></div>
          <div class="swiper-slide"><img src="./image/design/slider_9.webp" alt="Slide 9"></div>
          <div class="swiper-slide"><img src="./image/design/slider_10.webp" alt="Slide 10"></div>
          <div class="swiper-slide"><img src="./image/design/slider_11.webp" alt="Slide 11"></div>
          <div class="swiper-slide"><img src="./image/design/slider_12.webp" alt="Slide 12"></div>
          <div class="swiper-slide"><img src="./image/design/slider_13.webp" alt="Slide 13"></div>
          <div class="swiper-slide"><img src="./image/design/slider_14.webp" alt="Slide 14"></div>
          <div class="swiper-slide"><img src="./image/design/slider_15.webp" alt="Slide 15"></div>
          <div class="swiper-slide"><img src="./image/design/slider_16.webp" alt="Slide 16"></div>
          <div class="swiper-slide"><img src="./image/design/slider_17.webp" alt="Slide 17"></div>
          <div class="swiper-slide"><img src="./image/design/slider_18.webp" alt="Slide 18"></div>
          <div class="swiper-slide"><img src="./image/design/slider_19.webp" alt="Slide 19"></div>
          <div class="swiper-slide"><img src="./image/design/slider_20.webp" alt="Slide 20"></div>
          <div class="swiper-slide"><img src="./image/design/slider_21.webp" alt="Slide 21"></div>
          <div class="swiper-slide"><img src="./image/design/slider_23.webp" alt="Slide 23"></div>
          <div class="swiper-slide"><img src="./image/design/slider_24.webp" alt="Slide 24"></div>
          <div class="swiper-slide"><img src="./image/design/slider_25.webp" alt="Slide 25"></div>
          <div class="swiper-slide"><img src="./image/design/slider_26.webp" alt="Slide 26"></div>
          <div class="swiper-slide"><img src="./image/design/slider_27.webp" alt="Slide 27"></div>
          <div class="swiper-slide"><img src="./image/design/slider_28.webp" alt="Slide 28"></div>

        </div>
      </div>

      <script>
        const swiper = new Swiper('.s-slider', {
          loop: true,
          autoplay: {
            delay: 0,
            pauseOnMouseEnter: false,        // added
            disableOnInteraction: false,    // added
          },
          speed: 4000,
          slidesPerView: 5,
        })
      </script>

    </div>

    <div class="home-3">
      <div class="home-3-container">
        <div class="container home-conatiner">
          <div class="col1 col-6">
            <h2>Got an idea?<br>Let's work together.</h2>
            <p>Are you an entrepreneur/business with a great idea,
              <br>but need an identity to start with?<br><br>

              I love ideas because I believe in them.
              <br>Let's discuss your idea.

            </p>
            <a type="button" href="/contact.html">HIRE</a>
          </div>
          <div class="col2 col-6">
            <img class="simage" src="./image/subarna-showcase.png" />
          </div>
        </div>
      </div>
    </div>

    <div class="home-7 d-nav">
      <div class="container home-7-conatiner">
        <div class="col1 col-1">
          <p>Trusted By:</p>
        </div>
        <div class="col2 col-11">


          <div class="swiper c-slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><img src="./image/client/client_2.webp" alt="Slide 2"></div>
              <div class="swiper-slide"><img src="./image/client/client_4.webp" alt="Slide 4"></div>
              <div class="swiper-slide"><img src="./image/client/client_5.webp" alt="Slide 5"></div>
              <div class="swiper-slide"><img src="./image/client/client_3.webp" alt="Slide 3"></div>
              <div class="swiper-slide"><img src="./image/client/client_7.webp" alt="Slide 7"></div>
              <div class="swiper-slide"><img src="./image/client/client_1.webp" alt="Slide 1"></div>
              <div class="swiper-slide"><img src="./image/client/client_8.webp" alt="Slide 8"></div>
              <div class="swiper-slide"><img src="./image/client/client_9.webp" alt="Slide 9"></div>
              <div class="swiper-slide"><img src="./image/client/client_10.webp" alt="Slide 10"></div>
              <div class="swiper-slide"><img src="./image/client/client_11.webp" alt="Slide 11"></div>
              <div class="swiper-slide"><img src="./image/client/client_12.webp" alt="Slide 12"></div>
              <div class="swiper-slide"><img src="./image/client/client_13.webp" alt="Slide 13"></div>
              <div class="swiper-slide"><img src="./image/client/client_14.webp" alt="Slide 14"></div>
              <div class="swiper-slide"><img src="./image/client/client_15.webp" alt="Slide 15"></div>
              <div class="swiper-slide"><img src="./image/client/client_16.webp" alt="Slide 16"></div>
              <div class="swiper-slide"><img src="./image/client/client_17.webp" alt="Slide 17"></div>
              <div class="swiper-slide"><img src="./image/client/client_18.webp" alt="Slide 18"></div>
              <div class="swiper-slide"><img src="./image/client/client_19.webp" alt="Slide 19"></div>
              <div class="swiper-slide"><img src="./image/client/client_20.webp" alt="Slide 20"></div>
              <div class="swiper-slide"><img src="./image/client/client_21.webp" alt="Slide 21"></div>
              <div class="swiper-slide"><img src="./image/client/client_22.webp" alt="Slide 22"></div>
              <div class="swiper-slide"><img src="./image/client/client_23.webp" alt="Slide 23"></div>
              <div class="swiper-slide"><img src="./image/client/client_24.webp" alt="Slide 24"></div>
              <div class="swiper-slide"><img src="./image/client/client_25.webp" alt="Slide 25"></div>
              <div class="swiper-slide"><img src="./image/client/client_26.webp" alt="Slide 26"></div>

            </div>
          </div>

          <script>


            const swiper2 = new Swiper('.c-slider', {
              loop: true,
              autoplay: {
                delay: 0,
                pauseOnMouseEnter: false,        // added
                disableOnInteraction: false,    // added
              },
              speed: 1500,
              slidesPerView: 8,
            })


          </script>

        </div>
      </div>
    </div>



  </main>

  <footer>
    <div class="sfooter"></div>
    <div class="scopywrite"></div>
  </footer>

  <!-- Modal Menu Start-->
  <div class="menu">
    <div class="modal fade " id="exampleModalmenu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="left">
              <ul>
                <li><a href="/index.html" class="modal-dot">Home</a></li>
                <li><a href="/about.html" class="modal-dot">About</a></li>
                <li><a href="/studio.html" class="modal-dot">Studio<strong>.</strong></a></li>
                <li><a href="/portfolio.html" class="modal-dot">Portfolio</a></li>
                <li><a href="/contact.html" class="modal-dot">Contact</a></li>

              </ul>
            </div>
            <div class="center">
              <ul>
                <h3>Useful Link</h3>
                <li><a href="/blog.html" class="modal-sm-dot">Good Reads</a></li>
                <li><a target="_blank" href="https://read.cv/subarnabhd" class="modal-sm-dot">Resume</a></li>
                <li><a href="#" class="modal-sm-dot">Store</a></li>

                <li><a href="/link.html" class="modal-sm-dot">Link</a></li>
                <li><a href="/tools.html" class="modal-sm-dot">Tools</a></li>
                <li><a target="_blank" href="http://pay.subarnabhandari.com/" class="modal-sm-dot">Pay</a>
                </li>

              </ul>
            </div>
            <div class="right">
              <h3>Got an idea?</h3>
              <h2>Together, let‘s create
                something wonderful.</h2>
              <a href="/contact.html" class="btn" type="button">Start your project</a>
            </div>
          </div>
          <div class="modal-footer">
            <div class="modal-container">
              <div class="left">
                <li><a target="_blank" href="https://facebook.com/subarnabhd" class="m-foot-link">Facebook</a></li>
                <li><a target="_blank" href="https://instagram.com/subarnabhd" class="m-foot-link">Instagram</a></li>
                <li><a target="_blank" href="https://www.linkedin.com/in/subarnabhd" class="m-foot-link">Linkedin</a>
                </li>
                <li><a target="_blank" href="https://twitter.com/subarnabhd" class="m-foot-link">Twitter</a></li>
                <li><a target="_blank" href="https://behance.net/subarnabhd" class="m-foot-link">Behance</a></li>
                <li><a target="_blank" href="https://dribbble.com/subarnabhd" class="m-foot-link">Dribbble</a></li>
                <li><a target="_blank" href="/link.html" class="m-foot-link">More..</a></li>

              </div>
              <div class="right">
                <li><a target="_blank" href="mailto:hello@subarnabhandari.com">hello@subarnabhandari.com</a></li>

              </div>



            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- Modal Menu End-->


  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

  <script src="/script/header.js"></script>
  <script src="./script/script.js"></script>
  <script src="./script/footer.js"></script>
  <script src="./script/copywrite.js"></script>





</body>

</html>