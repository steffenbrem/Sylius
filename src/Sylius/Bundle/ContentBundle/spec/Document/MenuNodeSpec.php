<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\Sylius\Bundle\ContentBundle\Document;

use PhpSpec\ObjectBehavior;
use Sylius\Component\Resource\Model\ResourceInterface;
use Symfony\Cmf\Bundle\MenuBundle\Doctrine\Phpcr\MenuNode;

/**
 * @author Magdalena Banasiak <magdalena.banasiak@lakion.com>
 */
class MenuNodeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Sylius\Bundle\ContentBundle\Document\MenuNode');
    }

    function it_extends_menu_node_from_Symfony_CMF()
    {
        $this->shouldHaveType(MenuNode::class);
    }

    function it_is_a_Sylius_resource()
    {
        $this->shouldImplement(ResourceInterface::class);
    }
}
