<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AdminSection;
use AdminDisplay;
use App\Applications;

class ControllerBackOffice extends Controller
{
    public function index() {
        return AdminSection::view(view('back_office.index'), 'Главная');
    }

    public function applications() {
        $applications = Applications::paginate(100);
        return AdminSection::view(view('back_office.applications', ['applications' => $applications]), 'Приложения');
    }
}
