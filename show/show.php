<?php include __DIR__ . '/server.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-hotel-crud</title>
    <link rel="stylesheet" href="<?php echo $basePath .'dist/app.css'?>">
  </head>
  <body>
    <header>
      <h1>Boolean Hotel</h1>
    </header>

    <main>
      <ul>
        <li>
          <h2>ID: <?php echo $room['id'] ?></h2>
        </li>
        <li>
          <h2>Numero Stanza: <?php echo $room['room_number'] ?></h2>
        </li>
        <li>
          <h2>Piano: <?php echo $room['floor'] ?></h2>
        </li>
        <li>
          <h2>Letti: <?php echo $room['beds'] ?></h2>
        </li>
        <li>
          <h2>Creata il: <?php echo $room['created_at'] ?></h2>
        </li>
      </ul>

      <a href="<?php echo $basePath ?>">Torna alla homepage</a>
    </main>
  </body>
</html>
