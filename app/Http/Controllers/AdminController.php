<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;
use App\User;
use App\Rules\MatchOldPassword;
use Hash;
use Carbon\Carbon;
use Spatie\Activitylog\Models\Activity;
class AdminController extends Controller
{
    public function index(){
        // User registration chart data
        $data = User::select(\DB::raw("COUNT(*) as count"), \DB::raw("DAYNAME(created_at) as day_name"), \DB::raw("DAY(created_at) as day"))
        ->where('created_at', '>', Carbon::today()->subDay(6))
        ->groupBy('day_name','day')
        ->orderBy('day')
        ->get();
     $array[] = ['Name', 'Number'];
     foreach($data as $key => $value)
     {
       $array[++$key] = [$value->day_name, $value->count];
     }

     // Real analytics data
     $totalRevenue = \DB::table('orders')->where('payment_status', 'paid')->sum('total_amount');
     $monthlyRevenue = \DB::table('orders')
         ->where('payment_status', 'paid')
         ->whereMonth('created_at', Carbon::now()->month)
         ->sum('total_amount');
     
     $topProducts = \DB::table('products')
         ->join('carts', 'products.id', '=', 'carts.product_id')
         ->select('products.title', \DB::raw('SUM(carts.quantity) as total_sold'))
         ->groupBy('products.id', 'products.title')
         ->orderBy('total_sold', 'desc')
         ->limit(5)
         ->get();

     $recentOrders = \DB::table('orders')
         ->orderBy('created_at', 'desc')
         ->limit(10)
         ->get();

     $dailyOrders = \DB::table('orders')
         ->select(\DB::raw('DATE(created_at) as date'), \DB::raw('COUNT(*) as count'))
         ->where('created_at', '>=', Carbon::now()->subDays(30))
         ->groupBy('date')
         ->orderBy('date')
         ->get();

     return view('backend.index')->with([
         'users' => json_encode($array),
         'totalRevenue' => $totalRevenue,
         'monthlyRevenue' => $monthlyRevenue,
         'topProducts' => $topProducts,
         'recentOrders' => $recentOrders,
         'dailyOrders' => $dailyOrders
     ]);
    }

    public function profile(){
        $profile=Auth()->user();
        // return $profile;
        return view('backend.users.profile')->with('profile',$profile);
    }

    public function profileUpdate(Request $request,$id){
        // return $request->all();
        $user=User::findOrFail($id);
        $data=$request->all();
        $status=$user->fill($data)->save();
        if($status){
            request()->session()->flash('success','Successfully updated your profile');
        }
        else{
            request()->session()->flash('error','Please try again!');
        }
        return redirect()->back();
    }

    public function settings(){
        $data=Settings::first();
        return view('backend.setting')->with('data',$data);
    }

    public function settingsUpdate(Request $request){
        $this->validate($request,[
            'short_des'=>'required|string',
            'description'=>'required|string',
            'photo'=>'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'logo'=>'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'address'=>'required|string',
            'email'=>'required|email',
            'phone'=>'required|string',
        ]);
        
        $data=$request->all();
        $settings=Settings::first();
        
        // Handle logo upload
        if($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoName = 'logo_' . time() . '.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('storage/photos/1'), $logoName);
            $data['logo'] = '/storage/photos/1/' . $logoName;
        } else {
            unset($data['logo']);
        }
        
        // Handle photo upload
        if($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = 'photo_' . time() . '.' . $photo->getClientOriginalExtension();
            $photo->move(public_path('storage/photos/1'), $photoName);
            $data['photo'] = '/storage/photos/1/' . $photoName;
        } else {
            unset($data['photo']);
        }
        
        $status=$settings->fill($data)->save();
        if($status){
            request()->session()->flash('success','Setting successfully updated');
        }
        else{
            request()->session()->flash('error','Please try again');
        }
        return redirect()->route('admin');
    }

    public function changePassword(){
        return view('backend.layouts.changePassword');
    }
    public function changPasswordStore(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
   
        return redirect()->route('admin')->with('success','Password successfully changed');
    }

    // Pie chart
    public function userPieChart(Request $request){
        // dd($request->all());
        $data = User::select(\DB::raw("COUNT(*) as count"), \DB::raw("DAYNAME(created_at) as day_name"), \DB::raw("DAY(created_at) as day"))
        ->where('created_at', '>', Carbon::today()->subDay(6))
        ->groupBy('day_name','day')
        ->orderBy('day')
        ->get();
     $array[] = ['Name', 'Number'];
     foreach($data as $key => $value)
     {
       $array[++$key] = [$value->day_name, $value->count];
     }
    //  return $data;
     return view('backend.index')->with('course', json_encode($array));
    }

    // public function activity(){
    //     return Activity::all();
    //     $activity= Activity::all();
    //     return view('backend.layouts.activity')->with('activities',$activity);
    // }
}
