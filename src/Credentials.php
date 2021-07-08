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
    private $sandbox;
    private $url;

    public function __construct($token, $sandbox = false)
    {
        if (!is_string($token)) {
            throw new ParameterException('invalid argument');
        }

        $this->token = $token;

        switch ($sandbox) {
            case false:
                $this->sandbox = false;
                $this->url = 'https://interface.reseller-services.de/api/v1/';
                break;
            case true:
                $this->sandbox = true;
                $this->url = 'https://interface.reseller-services.de/sandbox/api/v1/';
                break;
            default:
                $this->sandbox = false;
                $this->url = 'https://interface.reseller-services.de/api/v1/';
        }
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
