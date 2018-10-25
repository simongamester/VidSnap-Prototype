<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Uppy</title>
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://transloadit.edgly.net/releases/uppy/v0.27.5/dist/uppy.min.css" rel="stylesheet">
  </head>
  <body>

    <div class="container">
      <h1>EXIF File Info</h1>
      <h2 class="lead">Early Prototype #3 - October 2018</h2>

      <?php
      include 'vendor/autoload.php';

      use Monolog\Logger;
      use PHPExiftool\Reader;
      use PHPExiftool\Driver\Value\ValueInterface;

      $logger = new Logger('exiftool');
      $reader = Reader::create($logger);

      //echo dirname(__DIR__) . '/uploads';

      $reader
        ->in(dirname(__DIR__) . '/uploads')
        ->extensions(array('gif', 'jpg', 'png', 'mov', 'mp4'))
        ->followSymLinks();

      foreach ($reader as $data) {
          echo "<h3>" . $data->getFile() . '</h3>' . PHP_EOL;

          echo '
          <table>
          <tr>
            <th>
              Data Type
            </th>
            <th>
              Name
            </th>
            <th>
              Value
            </th>
          </tr>';

          foreach ($data as $metadata) {
              if (ValueInterface::TYPE_BINARY === $metadata->getValue()->getType()) {
                  echo sprintf("
                  <tr>
                    <td>
                      Binary
                    </td>
                    <td>
                      %s
                    </td>
                    <td>
                      n/a
                    </td>
                  </tr>", $metadata->getTag());
              } else {
                  echo sprintf("
                  <tr>
                    <td>
                      Value
                    </td>
                    <td>
                      %s
                    </td>
                    <td>
                      %s
                    </td>
                  </tr>", $metadata->getTag(), $metadata->getValue()->asString());
              }
          }

          echo '</table>';
          echo '<hr />';
      }
      ?>

    </div>
  </body>
  </html>
