<?php

namespace KyiMyoHan\BuddhismRules\Tests;

use PHPUnit\Framework\TestCase;
use KyiMyoHan\BuddhismRules\RulesFactory;

class RulesFactroyTest extends TestCase
{
    /** @test */
    public function it_should_return_a_result()
    {
        $karma = 'You will go to hell and will be short lifetime in after life';
        $buddhism = new RulesFactory(['killed' => $karma]);
        $buddhism->saw('He killed a dog');
        $this->assertSame($karma, $buddhism->beleives());
    }

    /** @test */
    public function it_should_return_a_predefined_result()
    {
        $buddhism = new RulesFactory();
        $karma = $buddhism->getRules();
        $buddhism->saw('He stole a car');
        $this->assertStringContainsString($karma['stole'], $buddhism->beleives());
    }

    /** @test */
    public function it_should_return_default_result_if_not_found_result()
    {
        $buddhism = new RulesFactory();
        $buddhism->saw('Beautiful flower');
        $this->assertSame('No Sin', $buddhism->beleives());
    }
}
