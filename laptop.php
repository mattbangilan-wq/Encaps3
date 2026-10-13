<?php
class Laptop {
    public $brand;
    public $series;
    public $price;

function set_details($brand, $series, $price){
    $this->brand=$brand;
    $this->series=$series;
    $this->price=$price;
}
function get_details(){
    return $this->brand. ". Laptop: "
    .$this->series. " = "
    .$this->price;
    }
}
?>