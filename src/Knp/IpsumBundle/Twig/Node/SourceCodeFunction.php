<?php

namespace Knp\IpsumBundle\Twig\Node;

class SourceCodeFunction extends \Twig_Node_Expression_Function
{
    protected function compileArguments(\Twig_Compiler $compiler)
    {
            $compiler->raw('($this)');
    }
}
