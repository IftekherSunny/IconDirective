<?php

namespace spec\Sun\IconDirective;

use Prophecy\Argument;
use PhpSpec\ObjectBehavior;

class IconSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Sun\IconDirective\Icon');
    }

    function it_should_return_html_markup_from_the_given_expression()
    {
        $this->getHtmlMarkUp("'github'")->shouldBe('<i class="fa fa-github" aria-hidden="true"></i>');

        $this->getHtmlMarkUp("'github', 'fa-lg'")->shouldBe('<i class="fa fa-github fa-lg" aria-hidden="true"></i>');
    }
}
