<?php

namespace App\Http\Controllers;

use Emblaze\Url\Url;
use Emblaze\View\View;
use App\Models\User;
use Emblaze\Database\Database;

class DashboardController
{
    public function index()
    {

        // dump(Database::table('users')->select('name','age')->getQuery());
        // dump(Database::table('users')->getQuery());

        // dump(Database::table('tbl_users')
        //         ->select('name','age')
        //         ->join('tbl_roles','tbl_roles.id', '=','tbl_users.role_id')
        //         ->getQuery());
        
        // dump(Database::table('tbl_users')
        //         ->select('name','age')
        //         ->rightJoin('tbl_roles','tbl_roles.id', '=','tbl_users.role_id')
        //         ->leftJoin('tbl_roles','tbl_roles.id', '=','tbl_users.role_id')
        //         ->join('tbl_roles','tbl_roles.id', '=','tbl_users.role_id')
        //         ->getQuery());

        // return Database::query("SELECT name, age FROM tbl_users  RIGHT JOIN tbl_roles ON tbl_roles.id=tbl_users.role_id")
        //             ->getQuery();
        // return Database::table('tbl_users')
        //             ->select('name','age')
        //             ->rightJoin('tbl_roles','tbl_roles.id', '=','tbl_users.role_id')
        //             ->leftJoin('tbl_roles','tbl_roles.id', '=','tbl_users.role_id')
        //             ->join('tbl_roles','tbl_roles.id', '=','tbl_users.role_id')
        //             ->getQuery();
        // dump(Database::table('tbl_users')
        //             ->select('name','age')
        //             ->rightJoin('tbl_roles','tbl_roles.id', '=','tbl_users.role_id')
        //             ->leftJoin('tbl_roles','tbl_roles.id', '=','tbl_users.role_id')
        //             ->join('tbl_roles','tbl_roles.id', '=','tbl_users.role_id')
        //             ->where('id','=', 20)
        //             ->where('name','!=', 'Rey Mark')
        //             ->orWhere('name','=','Rey Mark')
        //             ->orderBy('id')
        //             ->limit(20)
        //             ->offset(20)
        //             ->orderBy('name', 'asc')
        //             ->orderBy('name', 'desc')
        //             ->getQuery());

        // dump(Database::table('users')
        //     ->select('name','age')
        //     ->where('id','>', 1)
        //     ->getQuery());

        // dump(Database::table('users')
        //     ->select('name','age','id')
        //     ->where('id','>', 0)
        //     ->get());
        // dump(Database::table('users')
        //     ->select('name','age','id')
        //     ->where('id','>', 0)
        //     ->orderBy('id', 'desc')
        //     ->first());

        // $data = ['name' => 'ReyInsertNew', 'age' => 30,'username'=>'reymarknew'];
        // $newRecord = Database::table('users')->insert($data);
        // dump($newRecord);

        // $data = ['name' => 'ReyInsertNewUPDATED', 'age' => 11,'username'=>'reymarkUPDATED'];
        // $update = Database::table('users')->where('id','=','3')->update($data);
        // dump($update);

        // Database::table('users')->where('id','=','3')->delete();

        // dump(Database::table('users')->paginate(2));
        $data = Database::table('users')->paginate(2);

        $data = User::paginate(1);

        // return View::render('admin/dashboard', $data);
        return view('admin/dashboard', $data);


        // $data = [
        //     'name' => 'Rey Mark',
        //     'age' => 28,
        // ];
        // return View::render('admin.dashboard', $data);
        // OR
        // return View::render('admin/dashboard', $data);

        // return Url::previous();
        // $previous_page = Url::previous();
        // return Url::redirect($previous_page);
    }
}