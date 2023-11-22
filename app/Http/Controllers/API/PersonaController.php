 <?php

namespace App\Http\Controllers\API;
use App\Models\Persona;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    //GET--- API LISTAR PERSONAS
    public function get()
    {
     try {
        $data = Persona::get();
        return response()->json($data, 200);
     } catch (\Throwable $th) {
        return response()->json(['error' => $th->getMessage()], 500);
     }
   }

}
?>