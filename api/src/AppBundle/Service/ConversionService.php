<?php

namespace AppBundle\Service;

use Firebase\JWT\JWT;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer;

class ConversionService
{
    public function __construct() {}

    /**
     * 
     */
    public function jsonEncode($data)
    {
        $normalizer = array(new GetSetMethodNormalizer());
        $encoder = array(new JsonEncoder());
        $serializer = new Serializer($normalizer, $encoder);
        $json = $serializer->serialize($data, 'json');

        return $json;
    }

    public function jwtEncode(array $data)
    {
        return JWT::encode($data, 'b3Ffk*fn4_f4.f4n83b·==@#f934f++', 'HS256');
    }

    public function jwtDecode(string $data)
    {
        return JWT::decode(trim($data,'"'), 'b3Ffk*fn4_f4.f4n83b·==@#f934f++', array('HS256'));
    }
}
