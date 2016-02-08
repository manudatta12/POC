<?php

namespace First\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class FirstUserBundle extends Bundle
{
/**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'SonataUserBundle';
    }
}
