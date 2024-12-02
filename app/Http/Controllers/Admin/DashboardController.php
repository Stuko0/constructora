<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\AdminController;
use App\Models\Project;
use App\Models\User;

class DashboardController extends AdminController
{
    public function dashboard()
    {
        $this->data['title'] = trans('backpack::base.dashboard'); // set the page title
        $this->data['breadcrumbs'] = [
            trans('backpack::crud.admin')     => backpack_url('dashboard'),
            trans('backpack::base.dashboard') => false,
        ];

        $contractsCount = Project::count();
        $clientsCount = User::count(); // Asumiendo que los clientes están en la tabla de usuarios
        $activePersonnelCount = User::where('active', 1)->count();
        $totalEarnings = Project::sum('total');

        $this->data['contractsCount'] = $contractsCount;
        $this->data['clientsCount'] = $clientsCount;
        $this->data['activePersonnelCount'] = $activePersonnelCount;
        $this->data['totalEarnings'] = $totalEarnings;

        return view('backpack::dashboard', $this->data);
    }
}
