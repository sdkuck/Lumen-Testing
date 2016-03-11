<?php

namespace App\Http\Controllers\REG;

use App\User;
use App\Http\Controllers\Controller;

class DonorController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  string  $lsid
     * @return Response
     */
    public function showDonors($lsid=null)
    {
      if (is_null($lsid)) {
        $names = app('db')->select('select lsid, fname, lname from ibbis.person_tab');
      }
      else {
        $names = app('db')->select('select lsid, fname, lname from ibbis.person_tab where lsid = ?', [$lsid]);
      }
      return $names;
    }
}
