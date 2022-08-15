<?php

namespace App\model\database\table;

use App\model\entities\Event;



class RowToObjectConverter
{

    public function __construct($row, $table)
    {

        $this->object = new Event();

        $this->object->setTable($table);

        foreach($row as $key => $value)
        {
            if(gettype($key) !== "integer"){
                call_user_func_array([ $this->object , "set" . ucfirst($key) ] , [$value]);
            }
        }

    }


    public function getObject()
    {

        return $this->object;

    }

}
