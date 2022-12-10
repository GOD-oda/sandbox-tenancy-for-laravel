<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use App\Models\User;
use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function index()
    {
        $tenantId = tenant('id') ?? 'Central';

        return "Now, you are in ".$tenantId;
    }

    public function users()
    {
        $allUsers = collect();

        foreach (Tenant::all() as $tenant) {
            tenancy()->initialize($tenant->id);

            foreach (User::all() as $user) {
                $allUsers->add($user);
            }
        }

        return $allUsers;
    }
}
