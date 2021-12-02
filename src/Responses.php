<?php
/*
 * This file is part of swoft-pictures.
 *
 * Copyright 2021 Sébastien Kus
 *
 *  @link     https://github.com/sebk69
 *  @document https://github.com/sebk69/swoft-pictures/README
 *  @contact  seb@small-iceberg.dev
 *  @license  https://github.com/sebk69/swoft-pictures/LICENSE
 */

namespace Sebk\SwoftJsonResponse;

use Swoft\Http\Message\ContentType;

class JsonResponse
{
    /** data to serialize in response */
    protected $serializable;

    public function __construct($serializable)
    {
        $this->serializable = $serializable;
    }

    public function get()
    {
        return context()->getResponse()
            ->withoutHeader(ContentType::KEY)
            ->withAddedHeader(ContentType::KEY, ContentType::JSON)
            ->withContent(json_encode($this->serializable))
            ;
    }
}
