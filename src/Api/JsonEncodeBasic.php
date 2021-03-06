<?php

namespace Reliv\Json\Api;

use Reliv\Json\Json;
use Reliv\Json\JsonError;

/**
 * @author James Jervis - https://github.com/jerv13
 */
class JsonEncodeBasic implements JsonEncode
{
    /**
     * @param mixed  $value
     * @param int    $options
     * @param int    $depth
     * @param string $context
     *
     * @return string
     * @throws JsonError
     */
    public function __invoke(
        $value,
        int $options = 0,
        int $depth = 512,
        string $context = ''
    ): string {
        return Json::encode(
            $value,
            $options,
            $depth,
            $context
        );
    }
}
