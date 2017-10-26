<?php
namespace App\Http\Controllers\Api;
use App\Http\Requests;
use App\Http\Controllers\ApiController;
/**
 * Class OrdersController
 *
 * @package App\Http\Controllers\Api
 */
class OrdersController extends ApiController {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/orders",
     *     description="Operations about product",
     *     operationId="api.orders.index",
     *     produces={"application/json"},
     *     tags={"Orders"},
     *     @SWG\Response(
     *         response=200,
     *         description="Orders overview."
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     * 
     * @SWG\Post(
     *     path="/api/orders",
     *     description="Refund an Orders. NOTE: This method needs a valid CSRF token to work!",
     *     operationId="api.orders.refund",
     *     produces={"application/json"},
     *     tags={"Orders"},
     *
     *     @SWG\Parameter(
     *         description="ID of Orders",
     *         in="path",
     *         name="id",
     *         required=true,
     *         type="integer",
     *         format="int32"
     *     ),
     *
     *     @SWG\Response(
     *         response=200,
     *         description="Refund successful."
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action."
     *     ),
     *     @SWG\Response(
     *         response=500,
     *         description="Either Orders or charge ID were not found."
     *     )
     * )
     *
     * @SWG\Get(
     *     path="/api/orders/{id}/",
     *     description="Find an Orders by ID.",
     *     operationId="api.orders.refund",
     *     produces={"application/json"},
     *     tags={"Orders"},
     *
     *     @SWG\Parameter(
     *         description="ID of Orders",
     *         in="path",
     *         name="id",
     *         required=true,
     *         type="integer",
     *         format="int32"
     *     ),
     *
     *     @SWG\Response(
     *         response=200,
     *         description="Find successful."
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action."
     *     ),
     *     @SWG\Response(
     *         response=500,
     *         description="Either Orders or charge ID were not found."
     *     )
     * )
     *
     *@SWG\Put(
     *     path="/api/orders/{id}/",
     *     description="Update an Orders by ID.",
     *     operationId="api.orders.refund",
     *     produces={"application/json"},
     *     tags={"Orders"},
     *
     *     @SWG\Parameter(
     *         description="ID of Orders",
     *         in="path",
     *         name="id",
     *         required=true,
     *         type="integer",
     *         format="int32"
     *     ),
     *
     *     @SWG\Response(
     *         response=200,
     *         description="Update successful."
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action."
     *     ),
     *     @SWG\Response(
     *         response=500,
     *         description="Either Orders or charge ID were not found."
     *     )
     * )
     * 
     * @SWG\Delete(
     *     path="/api/orders/{id}/",
     *     description="Delete an Orders by ID.",
     *     operationId="api.orders.refund",
     *     produces={"application/json"},
     *     tags={"Orders"},
     *
     *     @SWG\Parameter(
     *         description="ID of Orders",
     *         in="path",
     *         name="id",
     *         required=true,
     *         type="integer",
     *         format="int32"
     *     ),
     *
     *     @SWG\Response(
     *         response=200,
     *         description="Delete successful."
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action."
     *     ),
     *     @SWG\Response(
     *         response=500,
     *         description="Either Orders or charge ID were not found."
     *     )
     * )
     */
    public function index()
    {
        return response()->json([
            'result'    => [
                'statistics' => [
                    'users' => [
                      'name'  => 'Name',
                      'email' => 'user@example.com'
                    ]
                ],
            ],
            'message'   => '',
            'type'      => 'success',
            'status'    => 0
        ]);
    }
}