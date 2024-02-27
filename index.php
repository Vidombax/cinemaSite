<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HugeVision</title>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./src/assets/css/main.css" />
    <link rel="stylesheet" href="./src/assets/css/header.css">
    <link rel="stylesheet" href="./src/assets/css/footer.css">
  </head>
  <body>
    <div>
      <?php
        require_once('./src/modules/Header.html');
      ?>
      <main>
      <?php
        require_once('./src/pages/shedule.html')
      ?>
      </main>
      <?php
      require_once('./src/modules/Footer.html')
      ?>
    </div>
  </body>
  <script src="./src/assets/js/jquery-3.7.1.min.js"></script>
  <script src="./src/assets/js/main.js"></script>
  <script src="src/assets/js/shedule.js"></script>
</html>
