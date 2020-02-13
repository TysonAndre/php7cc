<?php

namespace code\NodeVisitor;

use Sstalle\php7cc\NodeVisitor\PHP4ConstructorVisitor;

/**
 * Unit test for the PHP4 constructor visitor.
 *
 * @author Ron Rademaker
 */
class PHP4ConstructorVisitorTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Test if an anonymous class is dealt with correctly.
     */
    public function testAnonymousClassIsValid()
    {
        $visitor = new PHP4ConstructorVisitor();

        $node = $this->getMockBuilder('PhpParser\Node\Stmt\Class_')
            ->disableOriginalConstructor()
            ->getMock();

        // triggers a notice that it shouldn't
        $visitor->enterNode($node);

        $this->assertTrue(true);
    }
}
