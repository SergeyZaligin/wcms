<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?=$this->getMeta(); ?>
</head>
<body>
    <h1>Default</h1>
    <?=$content; ?>
    <?php
        use \RedBeanPHP\R as R;
        $logs = R::getDatabaseAdapter()
            ->getDatabase()
            ->getLogger();

        debug( $logs->grep( 'SELECT' ) );
    ?>
</body>
</html>
