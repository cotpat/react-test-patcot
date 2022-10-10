<?php 
return array (
  'resolverStrategy' => 'SilverStripe\\GraphQL\\Schema\\Resolver\\DefaultResolverStrategy::getResolverMethod',
  'defaultResolver' => 'SilverStripe\\GraphQL\\Schema\\Resolver\\DefaultResolver::defaultFieldResolver',
  'modelCreators' => 
  array (
    0 => 'SilverStripe\\GraphQL\\Schema\\DataObject\\ModelCreator',
  ),
  'defaultBulkLoad' => 
  array (
    'inheritanceLoader' => 
    array (
      'include' => 
      array (
        0 => 'SilverStripe\\ORM\\DataObject',
      ),
    ),
  ),
  'modelConfig' => 
  array (
    'DataObject' => 
    array (
      'type_formatter' => 'SilverStripe\\Core\\ClassInfo::shortName',
      'type_prefix' => '',
      'type_mapping' => 
      array (
      ),
      'base_fields' => 
      array (
        'ID' => 'ID!',
      ),
      'plugins' => 
      array (
        'dbFieldArgs' => true,
        'dbFieldTypes' => 
        array (
          'ignore' => 
          array (
            'className' => true,
          ),
          'before' => 'scalarDBField',
        ),
        'inheritance' => 
        array (
          'useUnionQueries' => false,
          'after' => 'versioning',
        ),
        'scalarDBField' => 
        array (
          'after' => 'dbFieldArgs',
        ),
        'inheritedPlugins' => 
        array (
          'after' => '*',
        ),
        'versioning' => 
        array (
          'before' => 'inheritance',
        ),
      ),
      'operations' => 
      array (
        'read' => 
        array (
          'class' => 'SilverStripe\\GraphQL\\Schema\\DataObject\\ReadCreator',
          'plugins' => 
          array (
            'paginateList' => true,
            'canView' => 
            array (
              'after' => '*',
            ),
            'readVersion' => 
            array (
              'before' => 'paginateList',
            ),
            'filter' => 
            array (
              'before' => 'paginateList',
            ),
            'sort' => 
            array (
              'before' => 'paginateList',
            ),
          ),
        ),
        'readOne' => 
        array (
          'class' => 'SilverStripe\\GraphQL\\Schema\\DataObject\\ReadOneCreator',
          'plugins' => 
          array (
            'firstResult' => 
            array (
              'after' => '*',
            ),
            'canView' => 
            array (
              'after' => '*',
            ),
            'readVersion' => 
            array (
              'before' => 'firstResult',
            ),
            'filter' => true,
            'sort' => true,
          ),
        ),
        'delete' => 
        array (
          'class' => 'SilverStripe\\GraphQL\\Schema\\DataObject\\DeleteCreator',
          'plugins' => 
          array (
            'unpublishOnDelete' => true,
          ),
        ),
        'update' => 
        array (
          'class' => 'SilverStripe\\GraphQL\\Schema\\DataObject\\UpdateCreator',
        ),
        'create' => 
        array (
          'class' => 'SilverStripe\\GraphQL\\Schema\\DataObject\\CreateCreator',
        ),
        'copyToStage' => 
        array (
          'class' => 'SilverStripe\\Versioned\\GraphQL\\Operations\\CopyToStageCreator',
        ),
        'publish' => 
        array (
          'class' => 'SilverStripe\\Versioned\\GraphQL\\Operations\\PublishCreator',
        ),
        'unpublish' => 
        array (
          'class' => 'SilverStripe\\Versioned\\GraphQL\\Operations\\UnpublishCreator',
        ),
        'rollback' => 
        array (
          'class' => 'SilverStripe\\Versioned\\GraphQL\\Operations\\RollbackCreator',
        ),
      ),
      'parseShortcodes' => true,
      'nested_query_plugins' => 
      array (
        'paginateList' => true,
        'filter' => 
        array (
          'before' => 'paginateList',
        ),
        'sort' => 
        array (
          'before' => 'paginateList',
        ),
        'canView' => 
        array (
          'after' => 'paginateList',
        ),
      ),
    ),
  ),
  'typeMapping' => 
  array (
    'gorriecoe\\Link\\Models\\Link' => 'Link',
    'SilverStripe\\CMS\\Model\\SiteTree' => 'SiteTree',
    'SilverStripe\\Assets\\File' => 'File',
    'SilverStripe\\Security\\Member' => 'Member',
  ),
  'fieldMapping' => 
  array (
    'Link' => 
    array (
      'id' => 
      array (
        0 => 'Link',
        1 => 'ID',
      ),
      'className' => 
      array (
        0 => 'Link',
        1 => 'ClassName',
      ),
      'lastEdited' => 
      array (
        0 => 'Link',
        1 => 'LastEdited',
      ),
      'created' => 
      array (
        0 => 'Link',
        1 => 'Created',
      ),
      'anchor' => 
      array (
        0 => 'Link',
        1 => 'Anchor',
      ),
      'title' => 
      array (
        0 => 'Link',
        1 => 'Title',
      ),
      'type' => 
      array (
        0 => 'Link',
        1 => 'Type',
      ),
      'url' => 
      array (
        0 => 'Link',
        1 => 'URL',
      ),
      'email' => 
      array (
        0 => 'Link',
        1 => 'Email',
      ),
      'phone' => 
      array (
        0 => 'Link',
        1 => 'Phone',
      ),
      'openInNewWindow' => 
      array (
        0 => 'Link',
        1 => 'OpenInNewWindow',
      ),
      'selectedStyle' => 
      array (
        0 => 'Link',
        1 => 'SelectedStyle',
      ),
      'siteTreeID' => 
      array (
        0 => 'Link',
        1 => 'SiteTreeID',
      ),
      'fileID' => 
      array (
        0 => 'Link',
        1 => 'FileID',
      ),
      'siteTree' => 
      array (
        0 => 'SiteTree',
        1 => 'SiteTree',
      ),
      'file' => 
      array (
        0 => 'File',
        1 => 'File',
      ),
      'linkURL' => 
      array (
        0 => 'Link',
        1 => 'linkURL',
      ),
      'layout' => 
      array (
        0 => 'Link',
        1 => 'layout',
      ),
      'template' => 
      array (
        0 => 'Link',
        1 => 'template',
      ),
    ),
    'SiteTree' => 
    array (
      'id' => 
      array (
        0 => 'SiteTree',
        1 => 'ID',
      ),
      'version' => 
      array (
        0 => 'SiteTree',
        1 => 'Version',
      ),
      'versions' => 
      array (
        0 => 'SiteTree',
        1 => 'versions',
      ),
    ),
    'File' => 
    array (
      'id' => 
      array (
        0 => 'File',
        1 => 'ID',
      ),
      'version' => 
      array (
        0 => 'File',
        1 => 'Version',
      ),
      'versions' => 
      array (
        0 => 'File',
        1 => 'versions',
      ),
    ),
    'Member' => 
    array (
      'id' => 
      array (
        0 => 'Member',
        1 => 'ID',
      ),
    ),
  ),
);