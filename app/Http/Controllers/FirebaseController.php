<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Kreait\Firebase\Factory;
use \Kreait\Firebase\ServiceAccount;

class FirebaseController extends Controller
{
    public function __construct()
    {
        // FIREBASE WITH LIBRARY KREAIT
        $serviceAccount = ServiceAccount::fromJsonFile('storage/panrita-oto-firebase-adminsdk-jz7jv-a058169308.json');

        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        // The following line is optional if the project id in your credentials file
        // is identical to the subdomain of your Firebase project. If you need it,
        // make sure to replace the URL with the URL of your project.
        ->withDatabaseUri('https://panrita-oto.firebaseio.com')
        ->create();

        // REQUEST WITH GUZZLE
        $client = new \GuzzleHttp\Client([
            'base_uri' => 'https://panrita-oto.firebaseio.com',
            'timeout'  => 7.0, // optional
            'verify'=> false,
            'debug' => false, // optional
        ]);

        $this->database = $firebase->getDatabase();
        $this->client = $client;
    }
    
    public function index()
    {
        $get_all_customer = $this->database->getReference('customers')->getValue();

        return response()->json($get_all_customer);
    }

    public function insertCustomer(Request $request)
    {
        $license_number = strtoupper($request->license_number);
        $full_name = strtoupper($request->full_name);
        $phone_number = $request->phone_number;
        $address = $request->address;

        $get_customer = $this->client->request('GET', '/customers.json',
        [
            'headers' => [
                'Content-Type' => 'application/json'
            ],
            'query' => [
                'orderBy' => '"license_number"',
                'equalTo' => '"'.$license_number.'"',
            ]
        ])->getBody();
        $get_customer = json_decode($get_customer);

        if(key($get_customer) == false)
        {
            $insert_data = $this->database
            ->getReference('customers')
            ->push([
                'license_number' => $license_number,
                'full_name' => $full_name,
                'phone_number' => $phone_number,
                'address' => $address,
            ])->getValue();

            return response()->json([
                'status' => '00',
                'message' => 'data was inserted',
                'data' => $insert_data,
            ]);
        }
        else
        {
            $key = (string)key($get_customer);
            $get_customer = $get_customer->$key;
            
            return response()->json([
                'status' => '00',
                'message' => 'data is exist',
                'data' => $get_customer
            ]);
        }
    }

    public function checkCustomer(Request $request)
    {
        $license_number = $request->license_number;

        $get_customer = $this->client->request('GET', '/customers.json',
        [
            'headers' => [
                'Content-Type' => 'application/json'
            ],
            'query' => [
                'orderBy' => '"license_number"',
                'equalTo' => '"'.$license_number.'"',
            ]
        ])->getBody();
        $get_customer = json_decode($get_customer);

        if(key($get_customer) == false)
        {
            return response()->json([
                'status' => '01',
                'message' => 'Customer is not exist',
            ]);    
        }
        else
        {
            $key = (string)key($get_customer);
            $get_customer = $get_customer->$key;
    
            return response()->json([
                'status' => '00',
                'message' => 'Success',
                'data' => $get_customer,
            ]);
        }
    }
}
