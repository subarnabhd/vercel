<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="shortcut icon" href="./image/favi.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Subarna. 404</title>

    <!-- CSS Link -->
    <link rel="stylesheet" href="/css/style.css" />

    <style>
      body {
        margin: 0;
        padding: 0;
        background-color: black;
        color: white;
        font-family: Arial, sans-serif;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
      }
      p {
        color: #5f5f5f;
        padding-bottom: 20px;
        font-size: 14px;
      }
      img {
        max-width: 40%;
        height: auto;
      }

      .button-86 {
        all: unset;
        width: 100px;
        height: 30px;
        font-size: 16px;
        background: transparent;
        border: none;
        position: relative;
        color: #f0f0f0;
        cursor: pointer;
        z-index: 1;
        padding: 10px 20px;
        /* display: flex; */
        align-items: center;
        justify-content: center;
        white-space: nowrap;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        text-align: center;
        margin-top: 50px;
      }

      .button-86::after,
      .button-86::before {
        content: "";
        position: absolute;
        bottom: 0;
        right: 0;
        z-index: -99999;
        transition: all 0.4s;
      }

      .button-86::before {
        transform: translate(0%, 0%);
        width: 100%;
        height: 100%;
        background: #9e0606;
        border-radius: 10px;
      }

      .button-86::after {
        transform: translate(10px, 10px);
        width: 35px;
        height: 35px;
        background: #ffffff15;
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        border-radius: 50px;
      }

      .button-86:hover::before {
        transform: translate(5%, 20%);
        width: 110%;
        height: 110%;
      }

      .button-86:hover::after {
        border-radius: 10px;
        transform: translate(0, 0);
        width: 100%;
        height: 100%;
      }

      .button-86:active::after {
        transition: 0s;
        transform: translate(0, 5%);
      }
      .bt-center {
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
      }
    </style>
  </head>

  <body>
      <img src="/image/404.jpg" alt="404 Image" />
      <h1>Whoops...!</h1>
      <p>The page you're searching for seems to have shuffled itself into another deck.</p>

      <div class="w3-center">
        <a
          onclick="goBack()"
          href="https://subarnabhandari.com/"
          class="button-86"
          role="button"
          >subarnabhandari.com</a
        >
      </div>

      <script>
        function goBack() {
          window.history.back();
        }
      </script>
  </body>
</html>
