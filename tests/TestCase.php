<?php

namespace Tests;

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function setUp(): void
    {
        parent::setup();
        DB::delete("delete from addresses");
        DB::delete("delete from contacts");
        DB::delete("delete from users");
    }
}
