<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <link rel="shortcut icon" href="./image/tfavi.png" />
  <meta name="google-site-verification" content="Ztk88ACyEy4hrThBcX8xX4808NU10tv60ClxkgcWGNQ" />
  
  <!-- HTML Meta Tags -->
  <title>Tools. by Subarna</title>
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <!-- CSS Link -->
  <link rel="stylesheet" href="/css/style.css"/>
  <link rel="stylesheet" href="/css/header.css"/>
  <link rel="stylesheet" href="/css/tools.css"/>
  <link rel="stylesheet" href="/css/footer.css"/>
  <link rel="stylesheet" href="/css/copywrite.css"/>

</head>


<body>

  <!-- <div class="preloader">
    <div class="pload">
      <div class="p-load">
        <a href="https://www.subarnabhandari.com/" target="_blank"></a>
      </div>
    </div>
  </div> -->



  <header class="theader tools-header minimal">
    <nav id="main-nav" ></nav>
  </header>

  <main>
    <div class=" tbody container d-nav">
      <!-------Banner Start----------------------->
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators ">
          <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">

          <div class="carousel-item active" data-bs-interval="5000">
            <img src="./image/banner1.webp" class="d-block w-100 m-0" alt="...">
          </div>

          <div class="carousel-item" data-bs-interval="10000">
            <img src="./image/banner2.webp" class="d-block w-100 m-0" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>The Subarna Studio</h5>
              <p>Creating Brands,That people Love.</p>
              <a class="bannerbtn" href="https://studio.subarnabhandari.com" type="button"
                target="_blank">studio.subarnabhandari.com</a>
            </div>
          </div>

          <div class="carousel-item" data-bs-interval="20000">
            <img src="./image/banner3.webp" class="d-block w-100 m-0" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Subarna Bhandari</h5>
              <p>Just be yourself.</p>
              <a class="bannerbtn btnblue" href="https://www.subarnabhandari.com/" type="button"
                target="_blank">Subarnabhandari.com</a>
            </div>
          </div>

        </div>
      </div>
      <!-------Banner End----------------------->
      <div class="row toolsrow">
        <div class="col-md-3 rows ficol ">
          <div class="datecard dbox " >
            <!-- <span class="material-symbols-outlined">
              calendar_today
            </span> -->
            <span id="mypatro_nepali_date"></span>

            <script>
              let _mypatroDateFormat = 2;
              let _mypatroResponseType = 'html';
              let script = document.createElement('script');
              script.src = 'https://mypatro.com/resources/nepali_date/nepali_date.js';
              document.head.appendChild(script);
            </script>


          </div>

          <div class="popbar">
            <h2 class="t-tile">POPULAR</h2>
            <a class="poplink dbox" href="unicode.html" type="button">
              <div class="popbutton">
                <img src="/image/convert.png" />
                <p class="popname">Unicode to Preeti</p>
              </div>
              <i class="fa-solid popico fa-chevron-right"></i>
            </a>
            <a class="poplink dbox"
              href="https://subarnabhd.notion.site/Chrome-Extension-42d226e412f447d9a4104d14e714ba9a?pvs=4"
              type="button" target="_blank">
              <div class="popbutton">
                <img src="/image/chrome.png" />
                <p class="popname">Chrome Extension</p>
              </div>
              <i class="fa-solid popico fa-chevron-right"></i>
            </a>
            <a class="poplink dbox" href="https://pay.subarnabhandari.com" type="button" target="_blank">
              <div class="popbutton">
                <img src="/image/subarnapay.png" />
                <p class="popname">Subarna Pay</p>
              </div>
              <i class="fa-solid popico fa-chevron-right"></i>
            </a>
            <a class="poplink dbox" href="https://subarnabhd.notion.site/Mac-App-d526415b61784b24938a1e21ed539e06?pvs=4"
              type="button" target="_blank">
              <div class="popbutton">
                <img src="/image/appstore.png" />
                <p class="popname">Mac Apps</p>
              </div>
              <i class="fa-solid popico fa-chevron-right"></i>
            </a>
            <hr style="text-align:center; border:1px solid #3f3f3f8c; margin:12px">
            <a class="poplink dbox"
              href="https://subarnabhd.notion.site/1433cdefaa344bdea7bb14c24713fc5d?v=4bc4f007a15c480882e99097ae869adb"
              type="button" target="_blank">
              <div class="popbutton">
                <img src="/image/notion.png" />
                <p class="popname">Switch to Notion</p>
              </div>
              <i class="fa-solid popico fa-arrows-rotate"></i>
            </a>
          </div>



          <!-- -------------------------- -->
          <div class="usefullink">
            <h2 class="t-tile">Useful Links</h2>
            <div class="ubox ">
              <a class="ulink dbox col" href="https://appstorrent.ru" type="button" target="_blank">Appstorrent [mac]</a>
              <a class="ulink dbox col" href="https://haxmac.cc/" type="button" target="_blank">Haxmac [mac]</a>
              <a class="ulink dbox col" href="https://getintopc.com/" type="button" target="_blank">Getintopc [windows]</a>

              <a class="ulink dbox col" href="https://www.truecaller.com" type="button" target="_blank">Truecaller</a>
              <a class="ulink dbox col" href="http://fast.com/" type="button" target="_blank">Speed Check</a>
              <a class="ulink dbox col" href="https://www.photopea.com" type="button" target="_blank">Photopea</a>
              <a class="ulink dbox col" href="https://wetransfer.com" type="button" target="_blank">We Transfer</a>
              <a class="ulink dbox col" href="https://www.toptal.com/developers/cssminifier" type="button"
                target="_blank">CSS
                Minifier</a>
              <a class="ulink dbox col" href="https://goqr.me/" type="button" target="_blank">QR Code Generator</a>
              <a class="ulink dbox col" href="https://www.easynepalityping.com/" type="button" target="_blank">Nepali
                Typing</a>
              <a class="ulink dbox col" href="https://www.google.com/search?q=currency+converter" type="button"
                target="_blank">Currency Converter</a>

            </div>
          </div>
          <!-- ---------------------------->
          <div class="publisher-card">
            <div>
              <h1>Link.<br>by Subarna</h1><span class="material-symbols-outlined publisher-icon">
                volunteer_activism
              </span>
            </div>
            <h6 class="bap">Help us to grow</h6>
            <p><a href="https://pay.subarnabhandari.com">Donate Now</a></p>
          </div>





        </div>

        <div class="col-md-9 secol">

          <!------------------------------>


          <h2 class="t-tile titlehead">Online Tools</h2>
          <div class="row rows rowpad w-100 m-auto" >

            <a class="bhdbutton dbox col" href="unicode.html" type="button" >
              <div class="cbutton">
                <img src="/image/convert.png" />
                <p class="c1name">Unicode to Preeti</p>
                <p class="c2name">unicode.subarnabhandari.com</p>
              </div>
            </a>

            <a class="bhdbutton dbox col" href="preeti.html" type="button" >
              <div class="cbutton">
                <img src="/image/convert.png" />
                <p class="c1name">Preeti to Unicode</p>
                <p class="c2name">preeti.subarnabhandari.com</p>
              </div>
            </a>

            <a class="bhdbutton dbox col" href="date.html" type="button">
              <div class="cbutton">
                <img src="/image/date.png" />
                <p class="c1name">Date Converter</p>
                <p class="c2name">date.subarnabhandari.com</p>
              </div>
            </a>

            <a class="bhdbutton dbox col" href="https://ipo.subarnabhandari.com" type="button" target="_blank">
              <div class="cbutton">
                <img src="./image/ipo.png" />
                <p class="c1name">Bulk IPO Result</p>
                <p class="c2name">ipo.subarnabhandari.com</p>
              </div>
            </a>

          </div>
          <!-- -------------------------- -->
          <h2 class="t-tile titlehead">Productivity</h2>
          <div class="row rows rowpad w-100 m-auto" >

            <a class="bhdbutton dbox col"
              href="https://subarnabhd.notion.site/Chrome-Extension-42d226e412f447d9a4104d14e714ba9a?pvs=4"
              type="button" target="_blank">
              <div class="cbutton">
                <img src="./image/chrome.png" />
                <p class="c1name">Chrome Extension</p>
                <p class="c2name">Best Chrome Extension</p>
              </div>
            </a>

            <a class="bhdbutton dbox col"
              href="https://subarnabhd.notion.site/VS-Code-Extension-6dfb50f2b4bc4402914b732d7fe53226?pvs=4"
              type="button" target="_blank">
              <div class="cbutton">
                <img src="./image/vscode.png" />
                <p class="c1name">VS Code Extension</p>
                <p class="c2name">Best VS Code Extension</p>
              </div>
            </a>

            <a class="bhdbutton dbox col" href="https://subarnabhd.notion.site/Fonts-8274776d9fea423c80e03f5ab3d52946?pvs=4"
              type="button" target="_blank">
              <div class="cbutton">
                <img src="./image/fonts.png" />
                <p class="c1name">Fonts</p>
                <p class="c2name">English & Nepali</p>
              </div>
            </a>
            <a class="bhdbutton dbox col" href="https://subarnabhd.notion.site/Icons-86d490e1f14d4b1fb0e330a50d8308b1?pvs=4"
              type="button" target="_blank">
              <div class="cbutton">
                <img src="./image/icons.png" />
                <p class="c1name">Icons</p>
                <p class="c2name">Develop & Design</p>
              </div>
            </a>
            <a class="bhdbutton dbox col" href="https://subarnabhd.notion.site/Colors-9fcadded44ba4eaf93433d904abdb3f7?pvs=4"
              type="button" target="_blank">
              <div class="cbutton">
                <img src="./image/colors.png" />
                <p class="c1name">Colors</p>
                <p class="c2name">Find Beautiful Colors</p>
              </div>
            </a>


            <a class="bhdbutton dbox col"
              href="https://subarnabhd.notion.site/ISO-File-3cf9122fae4041c6b7baa0c44cc7e1d7?pvs=4" type="button"
              target="_blank">
              <div class="cbutton">
                <img src="./image/iso.png" />
                <p class="c1name">ISO File</p>
                <p class="c2name">Mac.Windows.Linux</p>
              </div>
            </a>
            <a class="bhdbutton dbox col"
              href="https://subarnabhd.notion.site/Keyboard-Shortcuts-724f2cf6fad04de583b095b09f9c033f?pvs=4"
              type="button" target="_blank">
              <div class="cbutton">
                <img src="./image/shortcut.png" />
                <p class="c1name">Keyboard Shortcuts</p>
                <p class="c2name">Mac.Window</p>
              </div>
            </a>
            <a class="bhdbutton dbox col" href="https://mega.nz/folder/5E8XBS7A#pEC0WxTOCv93I-H4vc-EzA" type="button"
              target="_blank">
              <div class="cbutton">
                <img src="./image/folder.png" />
                <p class="c1name">Files by Subarna</p>
                <p class="c2name">files.subarnabhandari.com</p>
              </div>
            </a>
            <a class="bhdbutton dbox col"
              href="https://subarnabhd.notion.site/Microsoft-Office-48f9bbc7051a4ffdb5f99b93fc9a4860?pvs=4"
              type="button" target="_blank">
              <div class="cbutton">
                <img src="./image/office.png" />
                <p class="c1name">Microsoft Office</p>
                <p class="c2name">2016.2019.2021.365</p>
              </div>
            </a>

            <a class="bhdbutton dbox col"
              href="https://subarnabhd.notion.site/Windows-Activator-db419ad7b3744492b519ef5ff2e9d472?pvs=4"
              type="button" target="_blank">
              <div class="cbutton">
                <img src="./image/wactivator.png" />
                <p class="c1name">Windows Activator</p>
                <p class="c2name">7.10.11</p>
              </div>
            </a>

            <a class="bhdbutton dbox col"
              href="https://subarnabhd.notion.site/Mac-App-d526415b61784b24938a1e21ed539e06?pvs=4" type="button"
              target="_blank">
              <div class="cbutton">
                <img src="./image/appstore.png" />
                <p class="c1name">Mac Apps</p>
                <p class="c2name">Best Mac Apps</p>
              </div>
            </a>

            <a class="bhdbutton dbox col"
              href="https://subarnabhd.notion.site/Windows-App-0277adcc2b184052be72810fae9f82e2?pvs=4" type="button"
              target="_blank">
              <div class="cbutton">
                <img src="./image/wstore.png" />
                <p class="c1name">Windows App</p>
                <p class="c2name">Best Windows Apps</p>
              </div>
            </a>




          </div>
          <!-- -------------------------- -->
          <!-- -------------------------- -->
          <h2 class="t-tile titlehead">Creativity</h2>
          <div class="row rows rowpad w-100 m-auto"  >

            <a class="bhdbutton dbox col" href="https://subarnabhd.notion.site/Figma-90c1da50b3af48d8be800a832fcc5e3b?pvs=4"
              type="button" target="_blank">
              <div class="cbutton">
                <img src="./image/figma.png" />
                <p class="c1name">Figma</p>
                <p class="c2name">UI/UX Design</p>
              </div>
            </a>
            <a class="bhdbutton dbox col"
              href="https://subarnabhd.notion.site/Adobe-Photoshop-d644030be81440f8bff1ff86b77b8d21?pvs=4" type="button"
              target="_blank">
              <div class="cbutton">
                <img src="./image/photoshop.png" />
                <p class="c1name">Adobe Photoshop</p>
                <p class="c2name">PS</p>
              </div>
            </a>

            <a class="bhdbutton dbox col"
              href="https://subarnabhd.notion.site/Adobe-illustrator-22df35ec931d4408b30049b01f87e092?pvs=4"
              type="button" target="_blank">
              <div class="cbutton">
                <img src="./image/illustrator.png" />
                <p class="c1name">Adobe Illustrator</p>
                <p class="c2name">AI</p>
              </div>
            </a>

            <a class="bhdbutton dbox col"
              href="https://subarnabhd.notion.site/Adobe-Lightroom-767e48d0146841df999bed4b013f2588?pvs=4" type="button"
              target="_blank">
              <div class="cbutton">
                <img src="./image/lightroom.png" />
                <p class="c1name">Adobe Lightroom</p>
                <p class="c2name">Lr</p>
              </div>
            </a>

            <a class="bhdbutton dbox col"
              href="https://subarnabhd.notion.site/Adobe-Premier-Pro-97d655dbded84899b870047972f19283?pvs=4"
              type="button" target="_blank">
              <div class="cbutton">
                <img src="./image/premier.png" />
                <p class="c1name">Adobe Premier Pro</p>
                <p class="c2name">Pr</p>
              </div>
            </a>
            <a class="bhdbutton dbox col"
              href="https://subarnabhd.notion.site/Adobe-After-Effects-c87d3e9aaadf4b8a8f198deb2683b8dc?pvs=4"
              type="button" target="_blank">
              <div class="cbutton">
                <img src="./image/aftereffect.png" />
                <p class="c1name">Adobe After Effects</p>
                <p class="c2name">Ae</p>
              </div>
            </a>
            <a class="bhdbutton dbox col"
              href="https://subarnabhd.notion.site/Adobe-Media-Encoder-e9ceabc80f7244bb8c569364e1faedca?pvs=4"
              type="button" target="_blank">
              <div class="cbutton">
                <img src="./image/mediaencoder.png" />
                <p class="c1name">Adobe Media Encoder</p>
                <p class="c2name">Me</p>
              </div>
            </a>
            <a class="bhdbutton dbox col"
              href="https://subarnabhd.notion.site/Adobe-Acrobat-Reader-14dc148180f24f0b8678ac77ae1d323e?pvs=4"
              type="button" target="_blank">
              <div class="cbutton">
                <img src="./image/acrobat.png" />
                <p class="c1name">Adobe Acrobat Pro DC</p>
                <p class="c2name">PDF Editor</p>
              </div>
            </a>
            <a class="bhdbutton dbox col"
              href="https://subarnabhd.notion.site/Blender-f797dddd4ece49e5aec8b8b5cce9fb06?pvs=4" type="button"
              target="_blank">
              <div class="cbutton">
                <img src="./image/blender.png" />
                <p class="c1name">Blender</p>
                <p class="c2name">3D Modeling</p>
              </div>
            </a>
            <a class="bhdbutton dbox col"
              href="https://subarnabhd.notion.site/DaVinci-Resolve-bf344f553a714058a75d113626b6d0ec?pvs=4" type="button"
              target="_blank">
              <div class="cbutton">
                <img src="./image/davinci.png" />
                <p class="c1name">DaVinci Resolve</p>
                <p class="c2name">Video Editor</p>
              </div>
            </a>



          </div>

          <div id="chat-button">
            <a href="https://wa.me/9779844740360" target="_blank" id="open-chat"><i
                class="fa-brands fa-whatsapp"></i></a>
          </div>



        </div>
      </div>
    </div>
  </main>

  <footer> 
    <div class="sfooter"></div>
    <div class="scopywrite"></div>
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
crossorigin="anonymous"></script>

  
    <script src="/script/tools.header.js"></script>
    <script src="./script/script.js"></script>
    <script src="./script/footer.js"></script>
    <script src="./script/copywrite.js"></script>

</body>

</html>