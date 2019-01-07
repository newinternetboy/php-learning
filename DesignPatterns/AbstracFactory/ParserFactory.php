<?php
/**
 * Created by IntelliJ IDEA.
 * User: philipp
 * Date: 2019-01-07
 * Time: 15:37
 */

namespace Design\Patterns;


class ParserFactory
{
    public function createCsvParser(bool $skipHeaderLine) : CsvParser
    {
        return new CsvParser($skipHeaderLine);
    }

    public function createJsonParser() : JsonParser
    {
        return new JsonParser();
    }

}