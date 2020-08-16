<?php

namespace Cone\LaravelJMSSerializer\Contracts;


interface ResponseSerializer
{
    /**
     * @param null $data
     * @param int $code
     * @param mixed $context
     * @return array
     */
    function success($data = null, $code= 200, $context = null);
    function fail($data = null, $code = 422, $context = null);
    function error($message, $data = null, $code = 500, $context = null);
    function normalize($object, $context = null);
}
