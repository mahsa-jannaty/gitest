<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\LaravelPdf\Facades\Pdf;

class TestController extends Controller
{
    public function laravelPdf()
    {
        Pdf::view('tests.laravelPdf')
            ->format('a4')
            ->save('invoice.pdf');
    }

    public function activityLog()
    {
        activity()->log('Look, I logged something');
        dd(\Spatie\Activitylog\Models\Activity::all());
    }

    public function permissions()
    {
        //    $role = \Spatie\Permission\Models\Role::create(['name' => 'writer']);
//    $permission = \Spatie\Permission\Models\Permission::create(['name' => 'edit articles']);
        $role = \Spatie\Permission\Models\Role::where('name', 'writer')->first();
        $role->givePermissionTo(\Spatie\Permission\Models\Permission::first());

    }
}
