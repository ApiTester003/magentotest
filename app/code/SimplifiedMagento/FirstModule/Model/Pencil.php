<?php


namespace SimplifiedMagento\FirstModule\Model;



use SimplifiedMagento\FirstModule\Api\PencilInterface;
use SimplifiedMagento\FirstModule\Api\Color;
use SimplifiedMagento\FirstModule\Api\Size;


class Pencil implements PencilInterface {
    protected $pencilColor;
    protected $pencilSize;

    public function __construct(Color $color, Size $size){
        $this->pencilColor = $color;
        $this->pencilSize = $size;
    }

    public function getPencilType()
    {
        return "Our Pencil has" . $this->pencilColor->getColor() . " color and " . $this->pencilSize->getSize() . " size";
    }
}
