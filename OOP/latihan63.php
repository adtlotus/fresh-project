<?php
    class Mobil{
        final public function mesin(){
            return "Mesin Bensin";
        }
    }
    class MobilListrik extends Mobil{
        final public function mesin(){
            return "Motor Elektrik";
        }
    }
    
    $tesla=new MobilListrik();
    echo $tesla->mesin();
?>
