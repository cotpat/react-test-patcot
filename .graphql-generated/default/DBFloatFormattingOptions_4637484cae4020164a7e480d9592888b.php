<?php

 /** GENERATED CODE -- DO NOT MODIFY **/

namespace SSGraphQLSchema_c21f969b5f03d33d43e04f8f136e7682;
use GraphQL\Type\Definition\EnumType;
// @type:DBFloatFormattingOptions
class DBFloatFormattingOptions_4637484cae4020164a7e480d9592888b extends EnumType
{
    public function __construct()
    {
        parent::__construct([
            'name' => 'DBFloatFormattingOptions',
            'values' => [
                        'NICE' => [
                    'value' => 'Nice',
                                ],
                        'ROUND' => [
                    'value' => 'Round',
                                ],
                        'NICE_ROUND' => [
                    'value' => 'NiceRound',
                                ],
                    ],
                    'description' => 'Formatting options for fields that map to DBFloat data types',
                ]);
    }
}
