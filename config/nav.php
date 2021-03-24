<?php
/**
 * Created by PhpStorm .
 * User: trungphuna .
 * Date: 3/24/21 .
 * Time: 10:35 AM .
 */
return [
    'admin' => [
        'nav' => [
            [
                'name' => 'Địa điểm',
                'icon' => '',
                'route' => 'get_admin.location.index'
            ],
            [
                'name' => 'Danh mục',
                'icon' => '',
                'route' => 'get_admin.category.index'
            ],
            [
                'name' => 'Sản phẩm',
                'icon' => '',
                'route' => 'get_admin.product.index'
            ],
            [
                'name' => 'Thành viên',
                'icon' => '',
                'route' => 'get_admin.user.index'
            ],
            [
                'name' => 'Menu bài viết',
                'icon' => '',
                'route' => 'get_admin.menu.index'
            ],
            [
                'name' => 'Bài viết',
                'icon' => '',
                'route' => 'get_admin.article.index'
            ],
        ]
    ],
    'user' => [
        'nav' => [
            [
                'name' => 'Quản lý tin đăng',
                'icon' => '',
                'route' => 'get_user.product.index'
            ],
            [
                'name' => 'Tin đã lưu',
                'icon' => '',
                'route' => 'get_user.product.index'
            ],
            [
                'name' => 'Cập nhật thông tin',
                'icon' => '',
                'route' => 'get_user.profile'
            ],
        ]
    ]
];
