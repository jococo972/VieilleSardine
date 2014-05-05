<?php

namespace VieilleSardine\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class VieilleSardineUserBundle extends Bundle {

    public function getParent() 
    {
        return 'FOSUserBundle';
    }

}
