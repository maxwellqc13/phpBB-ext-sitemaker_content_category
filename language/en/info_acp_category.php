<?php
/**
 *
 * @package phpBB Sitemaker [English]
 * @copyright (c) 2013 Daniel A. (blitze)
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ADD_BULK_EXPLAIN'					=> 'Add multiple category items at once.<br /> - Place each item on a separate line<br /> - Use the <strong>Tab</strong> key to indent items to represent parent-child relationships',
	'ADD_BULK_ITEMS'					=> 'Bulk Add Category Items',
	'ACP_CATEGORY'						=> 'Categories',
	'ACP_CATEGORY_MANAGEMENT'			=> 'Category Management',
	'ACP_CATEGORY_MANAGEMENT_EXPLAIN'	=> 'Here you can create and manage categories for your site',
	'ADD_GROUP'							=> 'Add Category Group',
	'ADD_CATEGORY'						=> 'Add Category',
	'ADD_ITEM'							=> 'Add New Item',
	'AJAX_PROCESSING'					=> 'Working',

	'CATEGORIES'				=> 'Categories',
	'CHANGE_ME'					=> 'Change Me',

	'DELETE_ITEM'				=> 'Delete Item',
	'DELETE_KIDS'				=> 'Delete Branch',
	'DELETE_GROUP'				=> 'Delete Group',
	'DELETE_GROUP_CONFIRM'		=> 'Are you sure you want to delete this group?<br />This will delete the group and all its items',
	'DELETE_ITEM'				=> 'Delete Item',
	'DELETE_ITEM_CONFIRM'		=> 'Are you sure you want to delete the selected items?',
	'DELETE_SELECTED'			=> 'Delete Selected',

	'EDIT_ITEM'					=> 'Edit Item',

	'GROUP_ITEMS'				=> 'Group Items',

	'ITEM_TITLE'				=> 'Item Title',
	'ITEM_PARENT'				=> 'Parent Item',

	'NO_ITEMS'					=> 'No items have been created',
	'NO_PARENT'					=> 'No Parent',

	'REBUILD_TREE'				=> 'Rebuild Tree',
	'REQUIRED'					=> 'Required',
	'REQUIRED_FIELDS'			=> '* Required fields',

	'SAVE_CHANGES'				=> 'Save Changes',
	'SAVE'						=> 'Save',
	'SELECT_ALL'				=> 'Select All',

	'UNSAVED_CHANGES'			=> 'You have unsaved changes',
));
