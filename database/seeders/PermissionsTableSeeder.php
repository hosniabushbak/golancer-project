<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'slider_create',
            ],
            [
                'id'    => 18,
                'title' => 'slider_edit',
            ],
            [
                'id'    => 19,
                'title' => 'slider_show',
            ],
            [
                'id'    => 20,
                'title' => 'slider_delete',
            ],
            [
                'id'    => 21,
                'title' => 'slider_access',
            ],
            [
                'id'    => 22,
                'title' => 'feature_create',
            ],
            [
                'id'    => 23,
                'title' => 'feature_edit',
            ],
            [
                'id'    => 24,
                'title' => 'feature_show',
            ],
            [
                'id'    => 25,
                'title' => 'feature_delete',
            ],
            [
                'id'    => 26,
                'title' => 'feature_access',
            ],
            [
                'id'    => 27,
                'title' => 'about_create',
            ],
            [
                'id'    => 28,
                'title' => 'about_edit',
            ],
            [
                'id'    => 29,
                'title' => 'about_show',
            ],
            [
                'id'    => 30,
                'title' => 'about_delete',
            ],
            [
                'id'    => 31,
                'title' => 'about_access',
            ],
            [
                'id'    => 32,
                'title' => 'faq_create',
            ],
            [
                'id'    => 33,
                'title' => 'faq_edit',
            ],
            [
                'id'    => 34,
                'title' => 'faq_show',
            ],
            [
                'id'    => 35,
                'title' => 'faq_delete',
            ],
            [
                'id'    => 36,
                'title' => 'faq_access',
            ],
            [
                'id'    => 37,
                'title' => 'service_create',
            ],
            [
                'id'    => 38,
                'title' => 'service_edit',
            ],
            [
                'id'    => 39,
                'title' => 'service_show',
            ],
            [
                'id'    => 40,
                'title' => 'service_delete',
            ],
            [
                'id'    => 41,
                'title' => 'service_access',
            ],
            [
                'id'    => 42,
                'title' => 'contact_create',
            ],
            [
                'id'    => 43,
                'title' => 'contact_edit',
            ],
            [
                'id'    => 44,
                'title' => 'contact_show',
            ],
            [
                'id'    => 45,
                'title' => 'contact_delete',
            ],
            [
                'id'    => 46,
                'title' => 'contact_access',
            ],
            [
                'id'    => 47,
                'title' => 'testimonial_create',
            ],
            [
                'id'    => 48,
                'title' => 'testimonial_edit',
            ],
            [
                'id'    => 49,
                'title' => 'testimonial_show',
            ],
            [
                'id'    => 50,
                'title' => 'testimonial_delete',
            ],
            [
                'id'    => 51,
                'title' => 'testimonial_access',
            ],
            [
                'id'    => 52,
                'title' => 'page_create',
            ],
            [
                'id'    => 53,
                'title' => 'page_edit',
            ],
            [
                'id'    => 54,
                'title' => 'page_show',
            ],
            [
                'id'    => 55,
                'title' => 'page_delete',
            ],
            [
                'id'    => 56,
                'title' => 'page_access',
            ],
            [
                'id'    => 57,
                'title' => 'setting_create',
            ],
            [
                'id'    => 58,
                'title' => 'setting_edit',
            ],
            [
                'id'    => 59,
                'title' => 'setting_show',
            ],
            [
                'id'    => 60,
                'title' => 'setting_delete',
            ],
            [
                'id'    => 61,
                'title' => 'setting_access',
            ],
            [
                'id'    => 62,
                'title' => 'project_create',
            ],
            [
                'id'    => 63,
                'title' => 'project_edit',
            ],
            [
                'id'    => 64,
                'title' => 'project_show',
            ],
            [
                'id'    => 65,
                'title' => 'project_delete',
            ],
            [
                'id'    => 66,
                'title' => 'project_access',
            ],
            [
                'id'    => 67,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
