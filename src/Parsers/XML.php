<?php namespace PHRETS\Parsers;

use PHRETS\Http\Response;
use Psr\Http\Message\ResponseInterface;

class XML
{
    public function parse($string)
    {
        if ($string instanceof ResponseInterface or $string instanceof Response) {
            $string = $string->getBody()->__toString();
        }

        $string = str_replace('&#56319;','', $string);
        $string = str_replace('&#56366;','', $string);
        $string = str_replace('&#56361;','', $string);
        $string = str_replace('&#56389;','', $string);
        $string = str_replace('&#56364;','', $string);
        $string = str_replace('&#56339;','', $string);
        $string = str_replace('&#56376;','', $string);

        return new \SimpleXMLElement((string) $string);
    }
}
