<?php

class RgbToHex{

    public function convertToHex($colors = null){
        $colors = $colors ?? $this->colors();
        //loop through colors
        foreach($colors as $id => $rgb){
           $hex =  sprintf("#%02x%02x%02x", $rgb[0], $rgb[1], $rgb[2]);
           echo $hex."<br/><div style='background-color:$hex;width:50px;height:20px;'></div>";
        }
    }


    public function colors():array{
        return [
            [254, 145, 154],
            [153, 145, 188],
            [153, 90, 145],
            [255, 137, 92],
            [255, 0, 50],
            [155, 20, 10],
            [100, 0, 92],
            [0, 0, 0],
            [0,255,0],
            [255,255,0],
            [0,255,255],
            [255,0,255],
            [192,192,192],
            [128,128,128],
            [128,0,0],
            [128,128,0],
            [0,128,0],
            [128,0,128],
            [0,128,128],
            [0,0,128]
        ];
    }
}

(new RgbToHex)->convertToHex();