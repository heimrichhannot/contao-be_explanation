# Event Registration

This module offers support for registering for a specific event.

## Features

### Modules

Name | Description
---- | -----------
ModuleList | A generic list module able to display all kinds of contao entities containing filtering, pagination, ...
ModuleMemberList | Encapsulates member specific changes overriding ModuleList
ModuleNewsList | Encapsulates news specific changes overriding ModuleList

### Fields

tl_module:

Name | Description
---- | -----------
addDetailsCol | Determines whether a list item should contain a details column
jumpToDetails | The jump to page opened when clicking a details link
itemSorting | Determines the sorting of the items
hideFilter | Determines whether the filter is hidden
showItemCount | Determines whether the item count is shown
addCustomFilterFields | Determines whether custom filter fields should be used
customFilterFields | The custom filter fields
filterArchives | The archives in which an item must be in order to be displayed (pid)
filterGroups | The groups in which a member must be in order to be displayed (groups)
pageTitleField | Specifies the page's title field
additionalWhereSql | Here additional sql added in the WHERE part of the SQL query can be specified
additionalSelectSql | Here additional sql added before the FROM part of the SQL query can be specified
additionalSql | Here additional sql added after the FROM part of the SQL query can be specified
hideUnpublishedItems | Determines whether unpublished items should be hidden
publishedField | Determines the field responsible for the publish state
invertPublishedField | Determines whether publishedField should be taken into account inverted
emptyText | The text shown when no items match the query
itemTemplate | The template each item is rendered with

### Hooks

Name | Arguments | Description
---- | --------- | -----------
parseItems | $objTemplate, $arrItem, $objModule | Triggered just before FrontendTemplate::parse() is called