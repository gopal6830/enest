<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\AddCart;
use Carbon\Carbon;
use DB;
use session;

class IController extends Controller
{
    public function login(Request $request)
    { 
        $username = $request->get('username');
        $password = $request->get('password');
        $count = User::select('*')

        ->where('username', $username)
        ->where('password', $password)
        ->count();
        if ($count > 0) {
            session()->put("session", $username);
            return redirect('/home');
        } else {
            return back()->withErrors(['login not successfull']);
        }
    }
    public  function signup(Request $request)
    {
        // dd($request->all());
        $add=new User;
        if($request->isMethod('post'))
        {
            $add->username=$request->get('username');
            $add->password=$request->get('password');
            session()->put("session", $add->username);
            $add->save();
        }
        return redirect("/home");
    }

    public function home(){
        // dd("slkdl;ks");
        $data = Category::get();
        $productdata = Product::get();
        return view('/home', compact('data','productdata'));
    }

    public function all_product()
    {
        $data1 = Category::get();
        $productdata = Product::get();
        return view('/all_product', compact('data1','productdata'));
    }

    public function newcategory(){
        return view('/newcategory');
    }

    public function add_category_form(Request $request)
    {
       $add = new Category;
       if ($request->isMethod('post')) {
        $add->category_name=$request->get('category_name');
        $add->save();
    }  
    return back();
}
public function add_product()
{
    $data = Category::get();
    return view('/add_product', compact('data'));
}

public function add_product_form(Request $request)
{
   $add = new Product;
   if ($request->isMethod('post')) {
    $add->p_name=$request->get('p_name');
    $add->p_prize=$request->get('p_prize');
    $add->p_model=$request->get('p_model');
    $add->p_manufacturer=$request->get('p_manufacturer');
    $add->p_category=$request->get('p_category');
    if(!empty($request->file('p_image')))
    {
        $file=$request->file('p_image');
        $current=uniqid(Carbon::now()->format('YmdHs'));
        $file->getClientOriginalName();
        $file->getClientOriginalExtension();
        $fullfilename=$current.".".$file->getClientOriginalExtension();
        $desinationPath = public_path('upload_image');
        $file->move($desinationPath,$fullfilename);
        $add->p_image=$fullfilename;
    }

    $add->save();
}  
return back();
}

public function cartdisplay($id)
{
    $data = Category::get();
    $findrecord = Product::where('id',$id)->get();
    return view('cartdisplay', compact('findrecord','data'));

}
public function cart(Request $request)
{
   $add = new AddCart;
   if ($request->isMethod('post')) {
    $price = $request->get('product_price');
    $quantity = $request->get('quantity');
    $total_prize = $price*$quantity;
    $add->total_price=$total_prize;
    $add->product_id=$request->get('product_id');
    $add->quantity= $quantity;
    $add->save();
} 
return redirect("/mycart");
}
public function mycart()
{
    $data1 = Category::get();
    $data = AddCart::with('product')->get();
    return view('mycart', compact('data1','data'));

}
public function searchcat(Request $request)
{
 if($request->isMethod('post'))
 { 

    $name=$request->get('name');
    $data1=Product::where('p_category','LIKE','%'.$name. '%')->get();
}
return view('all_product',compact('data1')); 
}

public function findid($id)
{
    $data1 = Category::get();
    $data = Category::find($id);
    $name=$data->category_name;
    $productdata=Product::where('p_category', 'LIKE','%'. $name .'%')->get();
    return view('all_product',compact('data1','productdata'));
}
}
