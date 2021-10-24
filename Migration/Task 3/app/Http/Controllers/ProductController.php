<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ProductModel;

class ProductController extends Controller
{
        public function home(){
            return view('pages.products.home');
    }
        
    public function details(){
        return view('pages.products.details');
}
    
    public function create(){
        return view('pages.products.create');
    }
    public function createSubmit(Request $request){
        //using requests validate method
        /*$validate = $request->validate([
                'name'=>'required|min:5|max:10',
                'id'=>'required',
                'dob'=>'required',
                'email'=>'email'
            ],
            [
                'name.required'=>'Please put your name',
                'name.min'=>'Name must be greater than 2 charcters'
            ]
        );*/
        //using class validate method
        $this->validate(
            $request,
            [
                'id'=>'required',
                'name'=>'required|min:3',
                'code'=>'required',
                'desc'=>'required',
                'category'=>'required',
                'price'=>'required',
                'quantity'=>'required',
                'stock_date'=>'required',
                'rating'=>'required',
                'purchased'=>'required',

            ],
            [
                'name.required'=>'Please put product name',
                'name.min'=>'Name must be greater than 2 charcters'
            ]
        );

        $var = new ProductModel();
        $var->p_id = $request->id;
        $var->p_name= $request->name;
        $var->p_code= $request->code;
        $var->p_desc= $request->desc;
        $var->p_category= $request->category;
        $var->p_price= $request->price;
        $var->p_quantity= $request->quantity;
        $var->p_stock_date= $request->stock_date;
        $var->p_rating= $request->rating;
        $var->p_purchased= $request->purchased;
       
        
        $var->save();
        return "Added Successfully!";      
    }
    public function list(){
        /*$students = array();
        for($i=0;$i<10;$i++){
            $student=array(
                "name"=>"Student ".($i+1),
                "id" =>($i+1),
                "dob" =>"12.12.12"
            );
            $students[] = (object)$student;
        }*/
        $products = ProductModel::all();
        return view('pages.products.list')->with('products',$products);
    }
    public function edit(Request $request){
        //
        $id = $request->id;
        //$student = Student::where('id',$id)->get(); //for multiple values : return array
        $product = ProductModel::where('p_id',$id)->first();
        //$student = Student::where('id','>',$id)->first();//default operator =
        return view('pages.products.edit')->with('product', $product);

    }

    public function editSubmit(Request $request){
        $var = ProductModel::where('p_id',$request->id)->first();
        $var->p_id = $request->id;
        $var->p_name= $request->p_name;
        $var->p_code= $request->p_code;
        $var->p_desc= $request->p_desc;
        $var->p_category= $request->p_category;
        $var->p_price= $request->p_price;
        $var->p_quantity= $request->p_quantity;
        $var->p_stock_date= $request->p_stock_date;
        $var->p_rating= $request->p_rating;
        $var->p_purchased= $request->p_purchased;
       
       
        $var->save();
        return redirect()->route('products.list');

    }
    public function delete(Request $request){
        $var = ProductModel::where('id',$request->id)->first();
        $var->delete();
        return redirect()->route('products.list');

    }

}