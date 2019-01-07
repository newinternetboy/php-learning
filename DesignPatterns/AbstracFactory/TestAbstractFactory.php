<?php
/**
 * Created by IntelliJ IDEA.
 * User: philipp
 * Date: 2019-01-07
 * Time: 15:40
 */

namespace Design\Patterns;
use PHPUnit\Framework\TestCase;
class TestAbstractFactory extends TestCase
{
    public function testCanCreateCsvParser(){
        $factory = new ParserFactory();
        $csvParser = $factory -> createCsvParser(CsvParser::OPTION_CONTAINS_HEADER);

        $this->assertInstanceOf(CsvParser::class,$csvParser);
    }
}