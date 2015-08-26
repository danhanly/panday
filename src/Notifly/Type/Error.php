<?php

namespace Notifly\Type;

class Error extends NotiflyType
{
    /**
     * Set basic properties
     */
    public function __construct()
    {
        parent::__construct();

        $this->typeString = 'error';
        $this->renderClass = 'alert alert-error';
    }
}
