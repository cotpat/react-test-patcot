<?php

 /** GENERATED CODE -- DO NOT MODIFY **/

namespace SSGraphQLSchema_c21f969b5f03d33d43e04f8f136e7682;
use GraphQL\Type\Definition\CustomScalarType;
// @type:JSONBlob
class JSONBlob_0c6e921d6bcc895469c6db100eea190a extends CustomScalarType
{
    public function __construct()
    {
        parent::__construct([
            'name' => 'JSONBlob',
            'serialize' => ['SilverStripe\GraphQL\Schema\Resolver\JSONResolver', 'serialise'],
            'parseValue' => ['SilverStripe\GraphQL\Schema\Resolver\JSONResolver', 'parseValue'],
            'parseLiteral' => ['SilverStripe\GraphQL\Schema\Resolver\JSONResolver', 'parseLiteral'],
        ]);
    }
}
