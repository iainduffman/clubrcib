<?php

return [

    'transforms' => [

        'render' => function ($node, array $params) {
            return !empty($node->props['content']) && is_active_sidebar($node->props['content']);
        },

    ],

];
