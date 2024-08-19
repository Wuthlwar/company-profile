<?php

use App\Models\Branch;
use App\Models\Jobroles;
use App\Models\VacantBranch;

function getJobrole($cate_id)
{
    $jobRoles = Jobroles::where(['category_id' => $cate_id])->get();
    return $jobRoles;
}


