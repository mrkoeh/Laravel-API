<?php
namespace App\Http\Controllers\Api;

use App\Http\Requests;
use App\Http\Controllers\ApiController;
use App\Produks;
/**
 * Class ProduksController
 *
 * @package App\Http\Controllers\Api
 */
class ProduksController extends ApiController {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/produks",
     *     description="Operations about product",
     *     operationId="api.produks.index",
     *     produces={"application/json"},
     *     tags={"Produks"},
     *     @SWG\Response(
     *         response=200,
     *         description="Produks overview."
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     ),
     *     @SWG\Response(
     *         response=404,
     *         description="Not found.",
     *     ),
     *     @SWG\Response(
     *         response=500,
     *         description="Internal Server Error.",
     *     )
     * )
     * 
     * @SWG\Post(
     *     path="/produks",
     *     description="Create new Produks. NOTE: This method needs a valid CSRF token to work!",
     *     operationId="api.produks.store",
     *     produces={"application/json"},
     *     tags={"Produks"},
     *
     *     @SWG\Parameter(
     *         in="body",
     *         name="body",
     *         description="Create new Produk",
     *         required=false,
     *         @SWG\Schema(ref="#/definitions/Produks")
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
     *         description="Internal Server Error."
     *     )
     * )
     *
     * @SWG\Get(
     *     path="/produks/{id}",
     *     description="Find Produks by ID.",
     *     operationId="api.produks.show",
     *     produces={"application/json"},
     *     tags={"Produks"},
     *     
     *     @SWG\Parameter(
     *         description="ID of Produks",
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
     *         description="Either Produks or charge ID were not found."
     *     )
     * )
     *
     *@SWG\Put(
     *     path="/produks/{id}",
     *     description="Update Produks by ID.",
     *     operationId="api.produks.update",
     *     produces={"application/json"},
     *     tags={"Produks"},
     *
     *     @SWG\Parameter(
     *         name="id",
     *         description="ID of Produks",
     *         in="path",
     *         required=true,
     *         type="integer",
     *         format="int32"
     *     ),
     *     @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          required=true,
     *          @SWG\Schema(ref="#/definitions/Produks"),
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
     *         description="Either Produks or charge ID were not found."
     *     )
     * )
     * 
     * @SWG\Delete(
     *     path="/produks/{id}",
     *     description="Delete Produks by ID.",
     *     operationId="api.produks.delete",
     *     produces={"application/json"},
     *     tags={"Produks"},
     *
     *     @SWG\Parameter(
     *         description="ID of Produks",
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
     *         description="Either Produks or charge ID were not found."
     *     )
     * )
     */
    // public function index()
    // {
    //     return response()->json([
    //         'result'    => [
    //             'statistics' => [
    //                 'users' => [
    //                   'name'  => 'Name',
    //                   'email' => 'user@example.com'
    //                 ]
    //             ],
    //         ],
    //         'message'   => '',
    //         'type'      => 'success',
    //         'status'    => 0
    //     ]);
    // }

    public function index()
    {
        $produks = Produks::all();
        return Response::json($produks,200);
    }

     public function store(Request $request)
    {
        $produks = Produks::create($request->all());

        return response()->json($produks, 201);
    }

    public function show($id)
    {
        $produks = Produks::find($id);
        if(is_null($produks))
        {
             return Response::json("not found",404);
        }
     
        return Response::json($produks,200);
    }

    public function update($id)
    {
        $produks = Produks::find($id);     
        $success = $produks ->save();
     
        if(!$success)
        {
            return Response::json("error updating",500);
        }
     
        return Response::json("success",201);
    }

    public function destroy($id)
    {
        $produks = Produks::find($id);
        if(is_null($produks))
        {
            return Response::json("not found",404);
        }
     
        $success = $produks->delete();
     
        if(!$success)
        {
            return Response::json("error deleting",500);
        }
     
        return Response::json("success",200);
    }
}