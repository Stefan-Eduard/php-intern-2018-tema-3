<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [

    ];

    // public static function getAll(){
    //     $companies = [ 'companies' =>
    //         [
    //             [
    //                 'type'=> 'market',
    //                 'name'=> 'Kaufland',
    //             ],
    //             [
    //                 'type'=> 'market',
    //                 'name'=> 'Lidl',
    //             ],
    //             [
    //                 'type'=> 'market',
    //                 'name'=> 'Bila',
    //             ]
    //         ]
    //     ];

    //     return $companies;
    // }

    // public static function getById($id){
    //     $companies = [
    //         'companies' =>
    //         [
    //             [
    //                 'type'=> 'market',
    //                 'name'=> 'Kaufland',
    //             ],
    //             [
    //                 'type'=> 'market',
    //                 'name'=> 'Lidl',
    //             ],
    //             [
    //                 'type'=> 'market',
    //                 'name'=> 'Bila',
    //             ]
    //         ]
    //     ];

    //     return $companies['companies'][$id];
    // }
}