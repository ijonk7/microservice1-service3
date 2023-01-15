<?php

namespace App\Http\Controllers;

use Exception;

class CustomerController extends Controller
{
    public function list()
    {
        try {
            $response = [
                'status' => true,
                'data' => [
                    [
                        'id'=> 1,
                        'name'=> 'Ari',
                        'phone_number'=> '081695002541',
                        'address'=> 'Jl. Indah Permai No. 22, Jakarta Barat.',
                        'created_at'=> '2023-01-15T11:19:47.000000Z',
                        'updated_at'=> '2023-01-15T11:19:47.000000Z'
                    ],
                    [
                        'id'=> 2,
                        'name'=> 'Cika',
                        'phone_number'=> '083135556609',
                        'address'=> 'Jl. Mekar Sari No. 60, Jakarta Selatan.',
                        'created_at'=> '2023-01-15T11:19:47.000000Z',
                        'updated_at'=> '2023-01-15T11:19:47.000000Z'
                    ],
                    [
                        'id'=> 3,
                        'name'=> 'Edi',
                        'phone_number'=> '085309881455',
                        'address'=> 'Jl. Mangga No. 44, Jakarta Timur.',
                        'created_at'=> '2023-01-15T11:19:47.000000Z',
                        'updated_at'=> '2023-01-15T11:19:47.000000Z'
                    ]
                ]
            ];

            return response()->json($response, 200);
        } catch (Exception $e) {
            $response = [
                'status'  => false,
                'message'  => $e
            ];

            return response($response, 500);
        }
    }
}
