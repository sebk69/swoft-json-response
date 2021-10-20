<?php
/**
 * This file is a part of sebk/swoft-json-response
 * Copyright 2021 - Sébastien Kus
 * Under GNU GPL V3 licence
 */

use Swoft\Http\Message\ContentType;

function JsonResponse($serializable)
{
    return context()->getResponse()
        ->withoutHeader(ContentType::KEY)
        ->withAddedHeader(ContentType::KEY, ContentType::JSON)
        ->withContent(json_encode($serializable))
    ;
}
