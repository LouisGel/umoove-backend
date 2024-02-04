<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CouponController extends Controller
{
    public function list($id)
    {
        $coupons = DB::query()
            ->select('coupons.id', 'coupons.code', 'entreprises.name as entreprise_name', 'coupon_types.name', 'coupon_types.description' )
            ->from('coupons')
            ->join('coupon_types', 'coupons.coupon_type_id', '=', 'coupon_types.id')
            ->join('entreprises', 'coupon_types.entreprise_id', '=', 'entreprises.id')
            ->where('coupons.user_id', '=', $id)
            ->whereNotNull('coupons.date_used')
            ->get();
        return response()->json($coupons);
    }
}
