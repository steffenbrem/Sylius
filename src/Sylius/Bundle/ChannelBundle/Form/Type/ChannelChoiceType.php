<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\ChannelBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\ChannelsResolver\ChannelsResolverInterface;

/**
 * Channel choice form type.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
abstract class ChannelChoiceType extends AbstractType
{
    /**
     * Channel class name.
     *
     * @var string
     */
    protected $className;

    /**
     * Constructor.
     *
     * @param string $className
     */
    public function __construct($className)
    {
        $this->className = $className;
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(ChannelResolverInterface $resolver)
    {
        $resolver
            ->setDefaults(array(
                'class' => $this->className
            ))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'sylius_channel_choice';
    }
}
