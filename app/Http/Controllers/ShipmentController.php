<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ShipmentController extends Controller
{
    public function createShipmentAndRetrieveTrackingNumber(Request $request): JsonResponse
    {
        $client = new Client();
        $headers = [
            'dhl-api-key' => 'mMbUgW1hOoLM3E2jEAY57B0v6OYO00o3',
            'Content-Type' => 'application/json',
            'Authorization' => 'Basic c2FuZHlfc2FuZGJveDpwYXNz'
        ];

        $body = json_encode([
            "profile" => "STANDARD_GRUPPENPROFIL",
            "shipments" => [
                [
                    "product" => "V01PAK",
                    "billingNumber" => "33333333330102",
                    "refNo" => "Order No. 1234",
                    "shipper" => [
                        "name1" => "My Online Shop GmbH",
                        "addressStreet" => "Sträßchensweg 10",
                        "additionalAddressInformation1" => "2. Etage",
                        "postalCode" => "53113",
                        "city" => "Bonn",
                        "country" => "DEU",
                        "email" => "max@mustermann.de",
                        "phone" => "+49 123456789"
                    ],
                    "consignee" => [
                        "name1" => "Maria Musterfrau",
                        "addressStreet" => "Kurt-Schumacher-Str. 20",
                        "additionalAddressInformation1" => "Apartment 107",
                        "postalCode" => "53113",
                        "city" => "Bonn",
                        "country" => "DEU",
                        "email" => "maria@musterfrau.de",
                        "phone" => "+49 987654321"
                    ],
                    "details" => [
                        "dim" => [
                            "uom" => "mm",
                            "height" => 100,
                            "length" => 200,
                            "width" => 150
                        ],
                        "weight" => [
                            "uom" => "g",
                            "value" => 500
                        ]
                    ]
                ],
                [
                    "product" => "V01PAK",
                    "billingNumber" => "33333333330102",
                    "refNo" => "Order No. 1234",
                    "shipper" => [
                        "name1" => "My Online Shop GmbH",
                        "addressStreet" => "Sträßchensweg 10",
                        "additionalAddressInformation1" => "2. Etage",
                        "postalCode" => "53113",
                        "city" => "Bonn",
                        "country" => "DEU",
                        "email" => "max@mustermann.de",
                        "phone" => "+49 123456789"
                    ],
                    "consignee" => [
                        "name1" => "Moritz Mustermensch",
                        "addressStreet" => "Kurt-Schumacher-Str. 20",
                        "postalCode" => "53113",
                        "city" => "Bonn",
                        "country" => "DEU",
                        "email" => "moritz@mustermensch.de",
                        "phone" => "+49 987654321"
                    ],
                    "details" => [
                        "dim" => [
                            "uom" => "mm",
                            "height" => 100,
                            "length" => 200,
                            "width" => 150
                        ],
                        "weight" => [
                            "uom" => "g",
                            "value" => 500
                        ]
                    ]
                ]
            ]
        ]);

        try {
            $response = $client->post('https://api-sandbox.dhl.com/parcel/de/shipping/v2/orders', [
                'headers' => $headers,
                'body' => $body
            ]);

            $responseBody = json_decode($response->getBody(), true);
            return response()->json($responseBody, $response->getStatusCode());
        } catch (RequestException $e) {
            if ($e->hasResponse()) {
                $responseBody = json_decode($e->getResponse()->getBody(), true);
                return response()->json($responseBody, $e->getResponse()->getStatusCode());
            } else {
                return response()->json(['error' => 'Request failed'], 500);
            }
        }
    }
}
