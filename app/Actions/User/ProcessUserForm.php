<?php

namespace App\Actions\User;

use App\Models\User;
use App\ValidationRules\User\UserValidation;
use Lorisleiva\Actions\ActionRequest;
use Lorisleiva\Actions\Concerns\AsAction;

class ProcessUserForm
{
    public function __construct(protected User $user)
    {

    }
    use AsAction;
    use UserValidation;

    public function handle(ActionRequest $request)
    {
        $validatedFields = $request->validated();
        $newUser = $this->user->create($validatedFields);
        $newUser->age = $this->user->AgeInNumber($validatedFields['dob']);
        $newUser->age_in_ydh = $this->user->AgeInYearsDaysHours($validatedFields['dob']);
        $newUser->save();
    }

    public function asController(ActionRequest $request)
    {
        return $this->handle($request);
    }

    public function htmlResponse()
    {
        return response()->redirectTo('/');
    }
}
