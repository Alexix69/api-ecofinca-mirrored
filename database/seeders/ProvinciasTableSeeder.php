<?php

namespace Database\Seeders;

use App\Models\Provincia;
use Illuminate\Database\Seeder;

class ProvinciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Provincia:: truncate();

        $provincias = ["AZUAY", "BOLIVAR", "CAÑAR", "CARCHI", "COTOPAXI", "CHIMBORAZO",
            "EL ORO", "ESMERALDAS", "GUAYAS", "IMBABURA", "LOJA", "LOS RIOS",
            "MANABI", "MORONA SANTIAGO", "NAPO", "PASTAZA", "PICHINCHA", "TUNGURAHUA",
            "ZAMORA CHINCHIPE", "GALAPAGOS", "SUCUMBIOS", "ORELLANA", "SANTO DOMINGO DE LOS TSACHILAS", "SANTA ELENA",];

        for ($i = 0; $i < 24; $i++) {
            Provincia::create([
                'nombre' => $provincias[$i],
            ]);
        }
    }
}
