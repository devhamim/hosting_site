<?php

namespace App\Http\Controllers;

use App\Models\hosting_category;
use App\Models\hosting_pakage;
use App\Models\inventorie;
use Carbon\Carbon;
use Illuminate\Http\Request;
// use RealRashid\SweetAlert\Facades\Alert;
use DB;
use Str;
use Image;

class Hosting_packageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hosting_package = hosting_pakage::all();
        return view('backend.hosting_package.index', [
            'hosting_package'=>$hosting_package,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorys = hosting_category::all();
        return view('backend.hosting_package.create',[
            'categorys'=>$categorys,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // print_r($request->all());
        // die();

        $request->validate([
            'category_id'=>'required',
            'name'=>'required',
            'title'=>'required',
            'storage'=>'required',
            'bandwidth'=>'required',
            'addon_domain'=>'required',
            'sub_domain'=>'required',
            'ftp_account'=>'required',
            'transfer'=>'required',
            'database'=>'required',
            'email'=>'required',
            'cpu_limit'=>'required',
            'ram'=>'required',
            'email_limit'=>'required',
            'cpanel'=>'required',
            'ssl'=>'required',
            'litespeed'=>'required',
            'cloudlinux'=>'required',
            'firewall'=>'required',
            'softaclus'=>'required',
            'instant'=>'required',
            'upgradation'=>'required',
            'backup'=>'required',
            'grantee'=>'required',
            'support'=>'required',
            'link'=>'required',
        ]);

        $package_id = hosting_pakage::insertGetId([
            'category_id'=>$request->category_id,
            'name'=>$request->name,
            'title'=>$request->title,
            'storage'=>$request->storage,
            'bandwidth'=>$request->bandwidth,
            'addon_domain'=>$request->addon_domain,
            'sub_domain'=>$request->sub_domain,
            'ftp_account'=>$request->ftp_account,
            'transfer'=>$request->transfer,
            'database'=>$request->database,
            'email'=>$request->email,
            'cpu_limit'=>$request->cpu_limit,
            'ram'=>$request->ram,
            'email_limit'=>$request->email_limit,
            'cpanel'=>$request->cpanel,
            'ssl'=>$request->ssl,
            'litespeed'=>$request->litespeed,
            'cloudlinux'=>$request->cloudlinux,
            'firewall'=>$request->firewall,
            'softaclus'=>$request->softaclus,
            'instant'=>$request->instant,
            'upgradation'=>$request->upgradation,
            'backup'=>$request->backup,
            'grantee'=>$request->grantee,
            'support'=>$request->support,
            'created_at'=>Carbon::now(),
        ]);


        // Inventory
        $priceArr = $request->post('price');
        $monthArr = $request->post('month');
        $yearArr = $request->post('year');
        $linkArr = $request->post('link');
        foreach ($priceArr as $key => $val) {
            $productAttrArr = []; // Create a new array for each iteration
            
            $productAttrArr['package_id'] = $package_id;
            $productAttrArr['created_at'] = Carbon::now();
            
            if ($monthArr[$key] == '') {
                $productAttrArr['month'] = 0;
            } else {
                $productAttrArr['month'] = $monthArr[$key];
            }
            
            if ($yearArr[$key] == '') {
                $productAttrArr['year'] = 0;
            } else {
                $productAttrArr['year'] = $yearArr[$key];
            }
            
            if ($priceArr[$key] == '') {
                $productAttrArr['price'] = 0;
            } else {
                $productAttrArr['price'] = $priceArr[$key];
            }
            if ($linkArr[$key] == '') {
                $productAttrArr['link'] = 0;
            } else {
                $productAttrArr['link'] = $linkArr[$key];
            }
            
            DB::table('inventories')->insert($productAttrArr);
        }

        alert()->success('Add successfully');
        return back();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    // hosting_package_delete
    function hosting_package_delete($id){
        hosting_pakage::find($id)->delete();
        alert()->success('Package Delete successfully');
        return back();
    }

    // hosting_package_inventory
    function hosting_package_inventory($id){
        $inventory_list = inventorie::where('package_id', $id)->get();
        return view('backend.hosting_package.inventory', [
            'inventory_list'=>$inventory_list,
        ]);
    }

    // hosting_category
    function hosting_category(){
        $hosting_cats = hosting_category::all();
        return view('backend.hosting_package.category', [
            'hosting_cats'=>$hosting_cats,
        ]);
    }

    // hosting_category_store
    function hosting_category_store(Request $request){
        $request->validate([
            '*'=>'required',
        ]);

        $hosting_image = $request->cat_img;
        $extension = $hosting_image->getClientOriginalExtension();
        $file_name = Str::random(5). rand(1000,999999).'.'.$extension;
        Image::make($hosting_image)->save(public_path('uplodes/hosting/'.$file_name));

        hosting_category::insert([
            'name'=>$request->name,
            'title'=>$request->title,
            'cat_img'=>$file_name,
            'created_at'=>Carbon::now(),
        ]);
        alert()->success('Cateogry Add successfully');
        return back();
    }

    function hosting_category_delete($id){
        hosting_category::find($id)->delete();
        alert()->success('Cateogry Delete successfully');
        return back();
    }
}
