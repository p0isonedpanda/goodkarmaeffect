<?php
/**
 * Renders a list of featured groups
 *
 * Note: this view has a corresponding view in the rss view type, changes should be reflected
 */

echo elgg_list_entities([
	'type' => 'group',
	'metadata_name' => 'featured_group',
	'metadata_value' => 'yes',
	'full_view' => false,
	'no_results' => elgg_echo('groups:nofeatured'),
]);
