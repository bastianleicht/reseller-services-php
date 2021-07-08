<?php
/*
 * Copyright (c) 2021, Bastian Leicht <mail@bastianleicht.de>
 *
 * PDX-License-Identifier: BSD-2-Clause
 */

namespace ResellerServices;

use ResellerServices\Exception\ParameterException;

class Credentials
{
    private $token;
    private $url;

    public function __construct($token)
    {
        if (!is_string($token)) {
            throw new ParameterException('invalid argument');
        }

        $this->token = $token;
        $this->url = 'https://interface.reseller-services.de/api/v1/';
    }

    public function __toString()
    {
        return sprintf(
            '[Host: %s], [Token: %s].',
            $this->url,
            $this->token
        );
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }
}
