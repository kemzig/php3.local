<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 22.11.2018
 * Time: 17:13
 */

namespace App\Models;


class GiftCard extends Model implements HasPrice, HasWeight
{
    public const TABLE = 'cards';

use \HasPriceTrait;

    public function getWeight()
    {
        return 142;
    }
}