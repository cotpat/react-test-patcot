<?php

 /** GENERATED CODE -- DO NOT MODIFY **/

namespace SSGraphQLSchema_c21f969b5f03d33d43e04f8f136e7682;
use GraphQL\Type\Definition\EnumType;
// @type:DBTextFormattingOption
class DBTextFormattingOption_343146800faf9fa9e24e21222a72ee72 extends EnumType
{
    public function __construct()
    {
        parent::__construct([
            'name' => 'DBTextFormattingOption',
            'values' => [
                        'CONTEXT_SUMMARY' => [
                    'value' => 'ContextSummary',
                                ],
                        'FIRST_PARAGRAPH' => [
                    'value' => 'FirstParagraph',
                                ],
                        'LIMIT_SENTENCES' => [
                    'value' => 'LimitSentences',
                                ],
                        'SUMMARY' => [
                    'value' => 'Summary',
                                ],
                    ],
                    'description' => 'Formatting options for fields that map to DBText data types',
                ]);
    }
}
