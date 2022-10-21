<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index (){
        $customers=DB::table('customers')->get();
        return view('customer.index', [
           'customers' => $customers
        ]);
    }

    public function view($id)
    {
        $customer=DB::table('customers')
                ->where('customerNumber',$id)
                ->first();

            return view('customer.view', [
        'customer' => $customer
     ]);

    }

    public function edit($id)
    {
        $customer=DB::table('customers')
                ->where('customerNumber',$id)
                ->first();

            return view('customer.edit', [
        'customer' => $customer
     ]);
    }

    public function update(Request $request)
    {
        DB::table('customers')->where('customerNumber',$request->id)->update([
            'customerName' => $request->customerName,
        ]);
        // DB::table(('customers'))
        //     ->where('id', $customerName->id)
        //     ->update(['active' => true]);
        return back()->with('customer_update','Customer Info has been update');
    }

    public function destroy(Request $request)
    {
        // $deleted = DB::table('customers')->delete();
        DB::table('customers')->where('customerNumber',$request->id)->delete();
        // DB::table('customers')->delete();
        return back()->with('customer_deleted','Customer Info has been deleted');
    }

}
