<?php

Kirby::plugin('my/methods', [
    'pageMethods' => [
        'cover' => function() {
			return $this->images()->template("frontend")->sortBy('sort', 'asc')->first();
		}
	],
	'fieldMethods' => [
        
    ]
]);