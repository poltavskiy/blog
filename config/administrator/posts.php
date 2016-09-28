<?php

return [
    'title' => 'Posts',
    'single' => 'post',
    'model' => 'App\Models\Post',
    'form_width' => 600,
    
    'columns' => [
        'id' => [
            'type' => 'number'
        ],
        'preview_image' => array(
            'title' => 'Image',
            'output' => '<img src="/uploads/posts/resize/(:value)" height="100" />',
        ),
        'title' => [
            'type' => 'text'
        ],
        'preview_text' => [
            'type' => 'text'
        ],
        'active' => [
            'type' => 'bool',
            'editable' => true,
        ],
        'rating' => [
            'type' => 'number'
        ]
    ],
    'edit_fields' => [
        'active' => [
            'title' => 'Active',
            'type' => 'bool',
        ],
        'title' => [
            'title' => 'Title',
            'type' => 'text'
        ],
        'preview_text' => [
            'type' => 'wysiwyg',
            'title' => 'Preview text'
        ],
        'detail_text' => [
            'type' => 'wysiwyg',
            'title' => 'Detail text'
        ],
        'user' => [
            'title' => 'User',
            'type' => 'relationship',
            'relationship' => 'App\User'
        ],
        'preview_image' => array(
            'title' => 'Preview image',
            'type' => 'image',
            'naming' => 'random',
            'location' => public_path().'/uploads/posts/resize/',
            'sizes' => array(
                array(150, 150, 'crop', public_path().'/uploads/posts/resize/', 100),
            ),
        )

    ]
];