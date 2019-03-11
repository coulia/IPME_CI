<?php

namespace Tests;

use App\Multiply;
use App\MultiplyBy12Command;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Tester\CommandTester;

/**
 * @group integration
 */
class MultiplyBy12CommandTest extends TestCase
{
  public function testExecute()
  {
     $command = new MultiplyBy12Command(new Multiply());
     $commandTester = new CommandTester($command);

     $commandTester->execute([
         'number' => '12',
     ]);
     $output = $commandTester->getDisplay();
     $this->assertSame("12 * 12 = 144\n", $output);
   }
}
