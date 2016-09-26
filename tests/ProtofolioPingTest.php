<?php

class PortofolioPingTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPortofolio()
    {
        $this->visit('/')
             ->see('Hello Yose')
             ->see('id="ping-challenge-link"')
             ->visit('/ping')
             ->seeJson([
                'alive' => true,
             ]);

    }
}
