<?php


namespace SimplifiedMagento\FirstModule\Model;
use SimplifiedMagento\FirstModule\Api\Color;
use SimplifiedMagento\FirstModule\Api\Size;

class Book{
    protected $bookColor;
    protected $bookSize;
    public function __construct(Color $color, Size $size){
        $this->bookColor = $color;
        $this->bookSize = $size;
    }


}
