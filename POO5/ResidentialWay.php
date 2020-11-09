<?php
require_once 'HighWay.php';

final class ResidentialWay extends HighWay 
{

public function __construct()
{
    $this->nbLane = 2;
    $this->maxSpeed = 50;
}
    
public function addVehicle(object $vehicle)
{
    $currentVehicles =[];
    if ($vehicle instanceof Vehicle){
        $this->currentVehicles[] = array_push($currentVehicles, $vehicle);
    }
}

}

?>