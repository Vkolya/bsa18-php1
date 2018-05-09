<?php declare(strict_types=1);

namespace Cryptocurrency\Task3;

use Cryptocurrency\Task1\CoinMarket;

class MarketHtmlPresenter
{
    public function present(CoinMarket $market): string
    {
        $html = '<ul>';
        foreach ($market->getCurrencies() as $currency) {
            $html .= '<li><img src="' . $currency->getLogoUrl() . '">'.$currency->getName().': '.$currency->getDailyPrice().'</li>';
        }
        $html .= '</ul>';
        return $html;
    }
}