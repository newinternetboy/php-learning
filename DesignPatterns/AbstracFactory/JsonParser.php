<?php
/**
 * Created by IntelliJ IDEA.
 * User: philipp
 * Date: 2019-01-07
 * Time: 15:36
 */

namespace Design\Patterns;


class JsonParser implements Parse
{
    public function parse(string $input): array
    {
        // TODO: Implement parse() method.
        return json_decode($input);
    }
}