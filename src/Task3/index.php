<?php

require __DIR__ . '/../../vendor/autoload.php';

use Cryptocurrency\Task1\CoinMarket;
use Cryptocurrency\Task1\{Bitcoin,Ethereum,Dogecoin};
use Cryptocurrency\Task3\MarketHtmlPresenter;


$market = new CoinMarket();
$market->addCurrency(new Bitcoin(9362.53));
$market->addCurrency(new Ethereum(751.33));
$market->addCurrency(new Dogecoin(0.005252));
$marketPresenter = new MarketHtmlPresenter();
$presentation = $marketPresenter->present($market);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Built-in Web Server</title>
</head>
<body>
<?php echo $presentation ?>
</body>
</html>