<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
            ->whereNull('coupons.date_used')
            ->get();
        return response()->json($coupons);
    }

    public function list_all(){
        $coupons = DB::query()
            ->select('entreprises.name as entreprise_name',
                'coupon_types.name',
                'coupon_types.description',
                'coupon_types.price',
                'coupon_types.id',
                DB::raw('(SELECT coupon_types.max - count(coupons.coupon_type_id) FROM coupons WHERE coupons.coupon_type_id = coupons.coupon_type_id)  AS remaining_coupons') )
            ->from('coupons')
            ->join('coupon_types', 'coupons.coupon_type_id', '=', 'coupon_types.id')
            ->join('entreprises', 'coupon_types.entreprise_id', '=', 'entreprises.id')
            ->whereNull('coupons.date_used')
            ->havingRaw(' (SELECT coupon_types.max - count(coupons.coupon_type_id) FROM coupons WHERE coupons.coupon_type_id = coupons.coupon_type_id) > 0')
            ->groupBy('coupons.coupon_type_id', 'entreprises.name', 'coupon_types.name', 'coupon_types.description', 'coupon_types.price', 'coupon_types.id', 'coupon_types.max')
            ->get();
        return response()->json($coupons);
    }

    public function buy(Request $request)
    {
        $infos = json_decode($request->getContent(), true);

        $coupon = Coupon::create([
            'date_used' => null,
            'coupon_type_id' => $infos['coupon_type_id'],
            'user_id' => $infos['user_id'],
            'code' => Str::random(18),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $coupon->save();
        
        return response()->json(['message' => 'Coupon bought']);

    }
}
