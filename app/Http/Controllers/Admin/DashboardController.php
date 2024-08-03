<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller{
    protected string $_path = 'admin.pages.';

    public function dashboard(): View{
        return view($this->_path . 'dashboard');
    }
}
