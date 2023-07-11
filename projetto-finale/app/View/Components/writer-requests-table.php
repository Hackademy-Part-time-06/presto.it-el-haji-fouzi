<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class writer_requests_table extends Component
{

    public function __construct()
    {

    }


    public function render(): View|Closure|string
    {
        return view('components.writer_request_table');
    }
}


