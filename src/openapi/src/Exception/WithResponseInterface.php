<?php

namespace Vouchsafe\OpenAPI\Exception;

interface WithResponseInterface
{
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface;
}