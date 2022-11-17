<?php

namespace App\Actions\User;

use Lorisleiva\Actions\Concerns\AsAction;

class UserForm
{
    use AsAction;
    public function handle()
    {
        //
    }
    public function htmlResponse(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('user.create-user-form');
    }

}
