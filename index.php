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
      <table class="roomList">
        <thead>
          <tr>
            <th>ID</th>
            <th>Numero Stanza</th>
            <th>Piano</th>
            <th>Opzioni</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($arrayRooms as $room): ?>
            <tr>
              <td><?php echo $room['id'] ?></td>
              <td><?php echo $room['room_number'] ?></td>
              <td><?php echo $room['floor'] ?></td>
              <td>
                <a href="<?php echo $basepath . 'show/show.php?id=' .$room['id']?>">Info Stanza</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

    </main>
  </body>
</html>
