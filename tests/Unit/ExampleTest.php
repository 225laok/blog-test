<?php

namespace Tests\Unit;

use App\Point;
use App\Rectangle;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
//        $this->mock(Point::class, function ($mock) {
//            $mock->shouldReceive('setPoint')->andReturn(['sdasdasdadadad']);
//        });
        $this->instance(
            Point::class,
            \Mockery::mock(Point::class, function (MockInterface $mock) {
                $mock->shouldReceive('setPoint')->once()->andReturn(['sdasdasdadadad']);
            })
        );
        (new Rectangle())->create(1,3,4,5);

    }
}
