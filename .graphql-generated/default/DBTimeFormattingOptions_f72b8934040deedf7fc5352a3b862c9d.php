<?php

 /** GENERATED CODE -- DO NOT MODIFY **/

namespace SSGraphQLSchema_c21f969b5f03d33d43e04f8f136e7682;
use GraphQL\Type\Definition\EnumType;
// @type:DBTimeFormattingOptions
class DBTimeFormattingOptions_f72b8934040deedf7fc5352a3b862c9d extends EnumType
{
    public function __construct()
    {
        parent::__construct([
            'name' => 'DBTimeFormattingOptions',
            'values' => [
                        'TIMESTAMP' => [
                    'value' => 'Timestamp',
                                ],
                        'NICE' => [
                    'value' => 'Nice',
                                ],
                        'SHORT' => [
                    'value' => 'Short',
                                ],
                        'CUSTOM' => [
                    'value' => 'CUSTOM',
                                ],
                    ],
                    'description' => 'Formatting options for fields that map to DBTime data types',
                ]);
    }
}
