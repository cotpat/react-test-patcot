<?php

 /** GENERATED CODE -- DO NOT MODIFY **/

namespace SSGraphQLSchema_c21f969b5f03d33d43e04f8f136e7682;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\InputObjectType;
use SilverStripe\GraphQL\Schema\Resolver\ComposedResolver;
// @type:FileVersionConnectionEdge
class FileVersionConnectionEdge_addd0dd2cfa576a7adf2bf3120f83544 extends ObjectType{
    public function __construct()
    {
        parent::__construct([
            'name' => 'FileVersionConnectionEdge',
                    'description' => 'The collections edge',
                'fields' => function () {
                $fields = [];
                                                        $resolverInst =     ComposedResolver::create([
            ['SilverStripe\GraphQL\Schema\DataObject\Plugin\Paginator', 'noop'],
        ])
;
                    $fields[] = [
                        'name' => 'node',
                        'type' => Types::nonNull(Types::FileVersion()),
                        'resolve' => $resolverInst->toClosure(),
                        'resolverComposition' => [
                                                            [
                                    ['SilverStripe\GraphQL\Schema\DataObject\Plugin\Paginator', 'noop'],
                                ],
                                                    ],
                                            'description' => 'The node at the end of the collections edge',
                                                            ]; // field
                                return $fields;
            },
        ]);
    }
}
