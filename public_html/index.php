<?php
$dir    = '.';
$files = scandir($dir);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAMP powered by Docker</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>
<body>
<section class="section">
    <div class="container">
      <h1 class="title">
        Hello World
      </h1>
      <p class="subtitle">
       This a <strong>D</strong><small>ocker</small><strong>A</strong><small>pache</small><strong>M</strong><small>ysql</small><strong>P</strong><small>hp</small> Powered by<strong>Docker</strong>!
      </p>
    </div>
  </section>

  <section class="hero is-info is-halfheight">
  <div class="hero-body">
    <div class="">
      <p class="title mr-5">
        Projects
      </p>
    </div>
    <table>
        <tbody>
            <?php foreach($files as $file) {?>
            <tr>
                <td><a href="/<?= $file; ?>"><?= $file; ?></a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
  </div>
</section>
</body>
</html>