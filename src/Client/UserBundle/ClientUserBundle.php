<?php

namespace Client\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ClientUserBundle extends Bundle {

    public function getParent() {
        return 'FOSUserBundle';
    }

}
