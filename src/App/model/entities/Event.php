<?php

namespace App\model\entities;

abstract class Entities {
  public static $event = "event";
}


interface EntityInterface{

}

class Event implements EntityInterface{
  public string $name = "myName";
  public $id = null;
  public string $table = "event";
  public string $code = "";
  public array $images = [];


  public function setId(string $id){
      $this->id = $id;
  }

  public function getId(){
    return $this->id;
  }

  public function setName(string $name){
    $this->name = $name;
  }

  public function getName(){
    return $this->table;
  }

    public function setTable(string $table){
      $this->table = $table;
    }

  public function getTable(){
    return $this->table;
  }

  public function setCode(string $code){

    $this->code = $code;

  }

  public function getCode(){

    return $this->code;

  }

  public function getImages(){

    return $this->images;

  }



}


 ?>
