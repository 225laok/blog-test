<?php


namespace App;


class Rectangle
{
    public function create($x1, $y1, $x2, $y2) {
        $a = new Point();
        $a->setPoint($x1, $y1);

        $b = new Point();
        $b->setPoint($x2, $y1);

        $c = new Point();
        $c->setPoint($x2, $y2);

        $d = new Point();
        $d->setPoint($x1, $y2);

        $this->draw([$a, $b, $c, $d]);
    }

    public function draw($points) {
        echo "Do something with the points";
    }
}
