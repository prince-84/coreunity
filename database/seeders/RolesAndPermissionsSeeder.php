<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // Define resource modules
        $modules = [
            'services' => 'Services',
            'pages' => 'Pages',
            'posts' => 'Blogs & Posts',
            'case_studies' => 'Case Studies',
            'testimonials' => 'Testimonials & Reviews',
            'team' => 'Team Members',
            'our_work' => 'Our Work Showcase',
            'our_clients' => 'Our Clients',
            'footer' => 'Footer & Newsletter',
            'global_settings' => 'Global SEO & Site Settings',
            'page_sections' => 'Page Sections & Blocks',
            'users' => 'Users & Permissions',
            'crm' => 'CRM & Leads Management',
        ];

        $actions = ['view', 'create', 'edit', 'delete'];

        $allPermissionNames = [];

        foreach ($modules as $moduleKey => $moduleLabel) {
            foreach ($actions as $action) {
                $permissionName = "{$action}_{$moduleKey}";
                Permission::firstOrCreate([
                    'name' => $permissionName,
                    'guard_name' => 'web',
                ]);
                $allPermissionNames[] = $permissionName;
            }
        }

        // Create Super Admin role
        $superAdminRole = Role::firstOrCreate([
            'name' => 'Super Admin',
            'guard_name' => 'web',
        ]);
        $superAdminRole->syncPermissions(Permission::all());

        // Create Editor role as an example restricted role
        $editorRole = Role::firstOrCreate([
            'name' => 'Editor',
            'guard_name' => 'web',
        ]);
        // Editor gets view and edit for dynamic content by default
        $editorRole->syncPermissions(
            Permission::whereIn('name', [
                'view_services', 'edit_services',
                'view_pages', 'edit_pages',
                'view_posts', 'create_posts', 'edit_posts',
                'view_case_studies', 'edit_case_studies',
                'view_testimonials', 'edit_testimonials',
            ])->get()
        );

        // Assign 'Super Admin' role to existing main admin user(s)
        $adminUser = User::where('email', 'admin@coreunity.com')->first();
        if ($adminUser) {
            $adminUser->assignRole($superAdminRole);
        } else {
            $firstUser = User::first();
            if ($firstUser) {
                $firstUser->assignRole($superAdminRole);
            }
        }

        // Also assign Super Admin to any user with id 1
        $user1 = User::find(1);
        if ($user1 && !$user1->hasRole('Super Admin')) {
            $user1->assignRole($superAdminRole);
        }
    }
}
