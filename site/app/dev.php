<?php
putenv('_COMPONENT=' .  $_SERVER['argv'][1]);
putenv('_FUNCTION=' . $_SERVER['argv'][2]);
putenv('_CONFIG=' . $_SERVER['argv'][3]);

exec('php -S 0.0.0.0:8080 app.php');

start();
