<?php 
namespace App\Controller\Component;

use Cake\Controller\Component;

class ConversorComponent extends Component
{
	/**
     * moneyToFloat method
     *
     * @param string $money.
     * @return float|false
     */
    public function moneyToFloat(string $money)
    {
    	$money = str_replace(['.', ','], ['', '.'], $money);

    	if (is_numeric($money)) {
    		return floatval($money);
    	}
    }
}