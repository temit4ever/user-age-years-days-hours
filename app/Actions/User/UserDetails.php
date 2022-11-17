<?php

namespace App\Actions\User;

use App\Models\User;
use Illuminate\Support\Carbon;
use Lorisleiva\Actions\Concerns\AsAction;

class UserDetails
{
    use AsAction;
    public function handle()
    {
        return [
            'users' => User::all(),
        ];

    }

    public function asController(): array
    {
        return $this->handle();
    }

    public function htmlResponse($data): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view( 'home', $data);
    }
}
