<?php

namespace App\Http\Controllers\Index;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function show($id)
    {
        $data = cache('data_'.$id);
        // dd($data);
        if(!$data){
            // echo"mysql";
            $where=[
                'goods_id'=>$id
            ];
            $data = DB::table('shop_goods')->where($where)->first();
            cache(['data_'.$id=>$data],60*24);
        }
        // dd($data);
        // return view('index/index',$data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //微店
    public function index()
    {
        //
     $table=DB::table('shop_goods')->get();
        return view('index/index',['res'=>$table]);
    }
    //产品详情
    public function proinfo()
    {
        //


        // var_dump($table);exit;

        return view('index/proinfo');
    }


    //分销申请
    public function fenxiao()
    {
        //
        return view('index/fenxiao');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    
}
