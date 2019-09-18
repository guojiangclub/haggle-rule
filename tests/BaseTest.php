<?php

namespace GuoJiangClub\HaggleRule\Test;

use Orchestra\Testbench\TestCase;

abstract class BaseTest extends TestCase
{


    /**
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            \iBrand\Miniprogram\Poster\PhantoMmagickServiceProvider::class,
        ];
    }

}
