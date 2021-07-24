<?php

namespace App\Http\Controllers;

use App\Models\MerchantUser;
use Illuminate\Http\Request;

class SignUpController extends Controller
{
    public function create(Request  $request)
    {
        //validation 로직 처리 구현해야함
        $validated = $request->validate([
            'com_name' => 'required',
            'business_num' => 'required|unique:merchant_users',
        ]);

        if ($validated->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validated);
        }
        //처리로직 구현
        $merchant_user = new MerchantUser;
        $merchant_user->com_name = $request->com_name;
    }
}
