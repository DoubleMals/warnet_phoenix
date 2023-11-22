<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Saran PHP</title>
    <link rel="stylesheet" href="../css/warnet.css" />
  </head>
  <body>
    <div id="feedback" class="feedback">
      <form action="/php/saran.php">
        <h2 align="center">Terima Kasih atas saran anda!</h2>
        <div class="namasaran">
          <p><?= $_GET['nama'];?></p>
        </div>
        <div class="namasaran">
          <p><?= $_GET['email'];?></p>
        </div>
        <div class="namasaran">
          <p><?= $_GET['subjek'];?></p>
        </div>
        <div class="namasaran">
          <p><?= $_GET['pesan'];?></p>
        </div>
      </form>
    </div>
  </body>
</html>
