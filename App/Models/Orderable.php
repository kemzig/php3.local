<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 22.11.2018
 * Time: 11:23
 */

namespace App\Models;


interface Orderable extends HasPrice, HasWeight
{
    public function getTitle();


}