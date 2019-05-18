<?php
/**
 * Admin control panel widget
 */

elgg_register_menu_item('admin_control_panel', [
	'name' => 'flush',
	'text' => elgg_echo('admin:cache:flush'),
	'href' => 'action/admin/site/flush_cache',
	'is_action' => true,
	'link_class' => 'elgg-button elgg-button-action',
]);

$mutex = _elgg_services()->mutex;
$is_locked = $mutex->isLocked('upgrade');

if (!$is_locked) {
	elgg_register_menu_item('admin_control_panel', [
		'name' => 'upgrade',
		'text' => elgg_echo('upgrade'),
		'href' => 'upgrade.php',
		'link_class' => 'elgg-button elgg-button-action',
	]);
} else {
	elgg_register_menu_item('admin_control_panel', [
		'name' => 'unlock_upgrade',
		'text' => elgg_echo('upgrade:unlock'),
		'href' => 'action/admin/site/unlock_upgrade',
		'is_action' => true,
		'link_class' => 'elgg-button elgg-button-action',
		'confirm' => elgg_echo('upgrade:unlock:confirm'),
	]);
}

echo elgg_view_menu('admin_control_panel', [
	'class' => 'elgg-menu-hz',
	'item_class' => 'mrm',
]);
