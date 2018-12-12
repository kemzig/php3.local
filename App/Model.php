<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 08.11.2018
 * Time: 15:31
 */

namespace App;


abstract class Model
{
    public const TABLE = '';

    public $id;

    abstract public function getModelName();

    public static function findAll()
    {
        $db = new Db();


        $sql = 'SELECT * FROM ' . static::TABLE;

        return $db->query(
            $sql,
            [],
            static::class);
    }

    public function insert()
    {
       $fields = get_object_vars($this);
       var_dump($fields);
       $cols = [];
       $data = [];
       foreach  ($fields as $name => $value) {
           if ('id' ==  $name) {
               continue;
           }
           $cols[] = $name;
                     $data[':' . $name] = $value;
       }
       var_dump($cols);
       var_dump($data);


         $sql = '
INSERT INTO ' . static::TABLE .' 
(' .implode(',', $cols) .') 
VALUES 
(' .implode(',', array_keys($data)) .') 
';
   $db = new  Db();
   $db->execute($sql, $data);

   $this->id = $db->getLastId();

    }


}