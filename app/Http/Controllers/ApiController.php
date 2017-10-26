<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class ApiController
 *
 * @package App\Http\Controllers
 *
 * @SWG\Swagger(
 *     basePath="",
 *     host="localhost/lara_api/public/api/",
 *     schemes={"http"},
 *     @SWG\Info(
 *         version="1.0",
 *         title="API Lapak Kita",
 *         description="Ini adalah API Lapak Kita. Anda bisa mendapatkan informasi lebih lanjut melalui laman http://saranamediaselular.com . Untuk contoh service ini, kita akan menggunakan 'special-key' untuk testing the authorization filters.",
 *         @SWG\Contact(name="Kukuh Nugroho", url="https://www.kukuhnugroho.com"),
 *     ),
 *     @SWG\Definition(
 *         definition="Error",
 *         required={"code", "message"},
 *         @SWG\Property(
 *             property="code",
 *             type="integer",
 *             format="int32"
 *         ),
 *         @SWG\Property(
 *             property="message",
 *             type="string"
 *         )
 *     )
 * )
 */

class ApiController extends Controller
{
    //
}
