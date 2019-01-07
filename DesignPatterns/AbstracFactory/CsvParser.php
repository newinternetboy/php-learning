<?php
/**
 * Created by IntelliJ IDEA.
 * User: philipp
 * Date: 2019-01-07
 * Time: 15:33
 */

namespace Design\Patterns;


class CsvParser implements Parse
{
    const OPTION_CONTAINS_HEADER = true;
    const OPTION_CONTAINS_NO_HEADER = false;


    /**
     * @var bool
     */
    private $skipHeaderLine;

    public function __construct(bool $skipHeaderLine)
    {
        $this->skipHeaderLine = $skipHeaderLine;
    }

    public function parse(string $input): array
    {
        // TODO: Implement parse() method.
        $headerWasParsed = false;
        $parsedLines = [];

        foreach (explode(PHP_EOL, $input) as $line) {
            if (!$headerWasParsed && $this->skipHeaderLine === self::OPTION_CONTAINS_HEADER) {
                $headerWasParsed = true;
                continue;
            }

            $parsedLines[] = str_getcsv($line);
        }

        return $parsedLines;
    }
}