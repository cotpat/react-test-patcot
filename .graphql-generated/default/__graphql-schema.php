<?php

 /** GENERATED CODE -- DO NOT MODIFY **/

namespace SSGraphQLSchema_c21f969b5f03d33d43e04f8f136e7682;
use SilverStripe\GraphQL\Schema\Storage\AbstractTypeRegistry;
class Types extends AbstractTypeRegistry
{
    protected static $types = [];
    protected static function getSourceDirectory(): string
    {
        return __DIR__;
    }
    protected static function getSourceNamespace(): string
    {
        return __NAMESPACE__;
    }
    public static function CopyToStageInputType() { return static::get('CopyToStageInputType'); }
    public static function VersionedInputType() { return static::get('VersionedInputType'); }
    public static function UpdateLinkInput() { return static::get('UpdateLinkInput'); }
    public static function CreateLinkInput() { return static::get('CreateLinkInput'); }
    public static function PageInfo() { return static::get('PageInfo'); }
    public static function QueryFilterStringComparator() { return static::get('QueryFilterStringComparator'); }
    public static function QueryFilterBooleanComparator() { return static::get('QueryFilterBooleanComparator'); }
    public static function QueryFilterIntComparator() { return static::get('QueryFilterIntComparator'); }
    public static function QueryFilterFloatComparator() { return static::get('QueryFilterFloatComparator'); }
    public static function QueryFilterIDComparator() { return static::get('QueryFilterIDComparator'); }
    public static function QueryFilterVersionedStageComparator() { return static::get('QueryFilterVersionedStageComparator'); }
    public static function QueryFilterVersionedQueryModeComparator() { return static::get('QueryFilterVersionedQueryModeComparator'); }
    public static function QueryFilterVersionedStatusComparator() { return static::get('QueryFilterVersionedStatusComparator'); }
    public static function QueryFilterDBTextFormattingOptionComparator() { return static::get('QueryFilterDBTextFormattingOptionComparator'); }
    public static function QueryFilterDBDecimalFormattingOptionsComparator() { return static::get('QueryFilterDBDecimalFormattingOptionsComparator'); }
    public static function QueryFilterDBFloatFormattingOptionsComparator() { return static::get('QueryFilterDBFloatFormattingOptionsComparator'); }
    public static function QueryFilterDBDateFormattingOptionsComparator() { return static::get('QueryFilterDBDateFormattingOptionsComparator'); }
    public static function QueryFilterDBDatetimeFormattingOptionComparator() { return static::get('QueryFilterDBDatetimeFormattingOptionComparator'); }
    public static function QueryFilterDBTimeFormattingOptionsComparator() { return static::get('QueryFilterDBTimeFormattingOptionsComparator'); }
    public static function QueryFilterSortDirectionComparator() { return static::get('QueryFilterSortDirectionComparator'); }
    public static function SiteTreeVersion() { return static::get('SiteTreeVersion'); }
    public static function VersionsSimpleSortFields() { return static::get('VersionsSimpleSortFields'); }
    public static function SiteTreeVersionConnectionEdge() { return static::get('SiteTreeVersionConnectionEdge'); }
    public static function SiteTreeVersionConnection() { return static::get('SiteTreeVersionConnection'); }
    public static function FileVersion() { return static::get('FileVersion'); }
    public static function FileVersionConnectionEdge() { return static::get('FileVersionConnectionEdge'); }
    public static function FileVersionConnection() { return static::get('FileVersionConnection'); }
    public static function LinkFilterFields() { return static::get('LinkFilterFields'); }
    public static function SiteTreeFilterFields() { return static::get('SiteTreeFilterFields'); }
    public static function FileFilterFields() { return static::get('FileFilterFields'); }
    public static function LinkSortFields() { return static::get('LinkSortFields'); }
    public static function SiteTreeSortFields() { return static::get('SiteTreeSortFields'); }
    public static function FileSortFields() { return static::get('FileSortFields'); }
    public static function LinkConnectionEdge() { return static::get('LinkConnectionEdge'); }
    public static function LinkConnection() { return static::get('LinkConnection'); }
    public static function Link() { return static::get('Link'); }
    public static function SiteTree() { return static::get('SiteTree'); }
    public static function File() { return static::get('File'); }
    public static function Member() { return static::get('Member'); }
    public static function Query() { return static::get('Query'); }
    public static function Mutation() { return static::get('Mutation'); }
    public static function VersionedStage() { return static::get('VersionedStage'); }
    public static function VersionedQueryMode() { return static::get('VersionedQueryMode'); }
    public static function VersionedStatus() { return static::get('VersionedStatus'); }
    public static function DBTextFormattingOption() { return static::get('DBTextFormattingOption'); }
    public static function DBDecimalFormattingOptions() { return static::get('DBDecimalFormattingOptions'); }
    public static function DBFloatFormattingOptions() { return static::get('DBFloatFormattingOptions'); }
    public static function DBDateFormattingOptions() { return static::get('DBDateFormattingOptions'); }
    public static function DBDatetimeFormattingOption() { return static::get('DBDatetimeFormattingOption'); }
    public static function DBTimeFormattingOptions() { return static::get('DBTimeFormattingOptions'); }
    public static function SortDirection() { return static::get('SortDirection'); }
    public static function DataObject() { return static::get('DataObject'); }
    public static function JSONBlob() { return static::get('JSONBlob'); }
}
