<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolice
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    
    public function isAdmin(User $user)
    {
        
        foreach($user->groups as $group){
            if($group->id===1){
                return TRUE;
            }
        }
        
        return FALSE;
    }
}
