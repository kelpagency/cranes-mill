<?php

// add custom block category
function kelp_gutenburg_category($categories, $post)
{
	return array_merge(
		[
			[
				"slug" => "kelp-blocks",
				"title" => __("Kelp Blocks", "kelp-blocks"),
			],
		],
		$categories
	);
}
add_filter("block_categories_all", "kelp_gutenburg_category", 10, 2);
