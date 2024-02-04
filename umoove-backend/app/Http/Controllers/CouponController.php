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

    public function list_all(){
        $coupons = DB::query()
            ->select('coupons.id',
                'coupons.code',
                'entreprises.name as entreprise_name',
                'coupon_types.name',
                'coupon_types.description',
                'coupon_types.price',
                DB::raw('coupon_types.max - COUNT(coupons.coupon_type_id) as remaining_coupons') )
            ->from('coupons')
            ->join('coupon_types', 'coupons.coupon_type_id', '=', 'coupon_types.id')
            ->join('entreprises', 'coupon_types.entreprise_id', '=', 'entreprises.id')
            ->whereNotNull('coupons.date_used')
            ->groupBy('coupons.coupon_type_id', 'coupons.id', 'coupons.code', 'entreprises.name', 'coupon_types.name', 'coupon_types.description', 'coupon_types.price', 'coupon_types.max')
            ->get();
        return response()->json($coupons);
    }
}
