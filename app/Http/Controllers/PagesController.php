<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use  DB;
use Illuminate\Session\TokenMismatchException;

class PagesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $memberData = $this->memberList();
      return view('index',compact('memberData'));
    }
    public function Confirm(){
      $memberData = $this->memberList();
      $insert = $this->insert();
      //$update = $this->update();
      //$delete = $this->delete();
        return view('index',compact('memberData','insert'));
        //return view('index',compact('memberData','insert','update','delete'));

    }
    public function memberList(){
      $memberData = DB::table('member')
      ->join('position','position.id','=','member.id')
      ->select('name','number','position','BirthDate',DB::raw('TIMESTAMPDIFF(YEAR,BirthDate,CURDATE()) AS `age`'))
      ->get();
      return $memberData;
    }

    public function insert(){
      //新規追加
      $insert = DB::table('member')
      ->insert('insert into member(name,number,position,BirthDate) values(?,?,?,?)',['$name',$number,'$position',$BirthDate])
      ->get();
      return $insert;
    }
    /*
    public function update(){
      //すでにいる選手の情報更新
      $update = DB：：table('member')
      ->update('update member(name,number,position,BirthDate) values(?,?,?,?)',['$name',$number,'$position',$BirthDate])
      ->get();
      return update;
    }
    public function delete(){
      //選手の削除
      $delete=DB::table('member')
      //名前と背番号必須項目(同姓同名対策)
      ->where('name=?',['$name'])
      ->where('number=?',['$number'])
      ->delete();

    }
*/
    public function validationCheck(){
      //新規・更新・削除の際にヴァリデーションチェックする。
    }
    public function e(){
      //errorCheck
    }
}
