<?php

namespace App\model\entities;

use App\model\database\table\Table;
use App\model\entities\EntityInsertionQueryBag;
use App\model\entities\EntityUpdateQueryBag;


class EntityManager
{
    public function __construct($conn)
    {
       $this->conn = $conn;
    }

    public function insert($entity)
    {
        $table = new Table($this->conn, $entity->getTable());

        //else

        if($table->getRowHandler()->findRowFromId(($entity->getID()) === true)){

          $EntityUpdateQueryBag = new EntityUpdateQueryBag($entity);
          $table->getRowHandler()->updateRowFromId($entity->getID(), $EntityUpdateQueryBag->getUpdateQuery());

        } else {

          $EntityInsertionQueryBag = new EntityInsertionQueryBag($entity);
          $table->getRowHandler()->insertRow($EntityInsertionQueryBag->getColumnsString(), $EntityInsertionQueryBag->getValuesString());

        }
    }

    public function remove(Object $entity)
    {
       $table = new Table($this->conn, $entity->getTable());

        //else

       if($table->getRowHandler()->findRowFromId(($entity->getID())) === true){

          $table->getRowHandler()->removeRowFromId($entity->getID());

       }

    }

}
