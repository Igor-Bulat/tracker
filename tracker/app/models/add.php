<?php
class Add{

  public $client;
  public $click_price;
  public $period;
  public $content;

  ///create
  public function __construct($client,$click_price,$period,$content){
    $this->client        = $client;
    $this->click_price   = $click_price;
    $this->period        = $period;
    $this->content       = $content;
  }

  public function save(){
    $time = time();
    $addblock = json_encode($this);
    file_put_contents("database/addblock/$this->client."."$time.json",$addblock);
  }

  public function find(){

  }




  }



 ?>
