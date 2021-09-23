<?php

namespace Database\Seeders;

use App\Models\Canton;
use Illuminate\Database\Seeder;

class CantonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Canton:: truncate();

        $azuay = ["CUENCA", "GIRÓN", "GUALACEO", "NABÓN", "PAUTE"];
        for ($i = 0; $i < count($azuay); $i++) {
            Canton::create([
                'nombre' => $azuay[$i],
                'provincia_id' => "1"
            ]);
        }
        $bolivar = ["GUARANDA", "CHIMBO", "SAN MIGUEL", "LAS NAVES"];
        for ($i = 0; $i < count($bolivar); $i++) {
            Canton::create([
                'nombre' => $bolivar[$i],
                'provincia_id' => "2"
            ]);
        }
        $canar = ["AZOGUES", "BIBLIÁN", "CAÑAR", "LA TRONCAL"];
        for ($i = 0; $i < count($canar); $i++) {
            Canton::create([
                'nombre' => $canar[$i],
                'provincia_id' => "3"
            ]);
        }
        $carchi = ["TULCÁN", "BOLÍVAR", "ESPEJO", "MIRA", "MONTÚFAR"];
        for ($i = 0; $i < count($carchi); $i++) {
            Canton::create([
                'nombre' => $carchi[$i],
                'provincia_id' => "4"
            ]);
        }
        $cotopaxi = ["LATACUNGA", "LA MANÁ", "PANGUA", "PUJILI", "SALCEDO"];
        for ($i = 0; $i < count($cotopaxi); $i++) {
            Canton::create([
                'nombre' => $cotopaxi[$i],
                'provincia_id' => "5"
            ]);
        }
        $chimborazo = ["RIOBAMBA", "ALAUSI", "COLTA", "CHUNCHI", "GUAMOTE"];
        for ($i = 0; $i < count($chimborazo); $i++) {
            Canton::create([
                'nombre' => $chimborazo[$i],
                'provincia_id' => "6"
            ]);
        }
        $elOro = ["MACHALA", "ARENILLAS", "ATAHUALPA", "EL GUABO", "HUAQUILLAS"];
        for ($i = 0; $i < count($elOro); $i++) {
            Canton::create([
                'nombre' => $elOro[$i],
                'provincia_id' => "7"
            ]);
        }
        $esmeraldas = ["ESMERALDAS", "ELOY ALFARO", "MUISNE", "QUININDÉ"];
        for ($i = 0; $i < count($esmeraldas); $i++) {
            Canton::create([
                'nombre' => $esmeraldas[$i],
                'provincia_id' => "8"
            ]);
        }
        $guayas = ["GUAYAQUIL", "DAULE", "DURÁN", "EL EMPALME", "MILAGRO"];
        for ($i = 0; $i < count($guayas); $i++) {
            Canton::create([
                'nombre' => $guayas[$i],
                'provincia_id' => "9"
            ]);
        }
        $imbabura = ["IBARRA", "ANTONIO ANTE", "COTACACHI", "OTAVALO", "PIMAMPIRO"];
        for ($i = 0; $i < count($imbabura); $i++) {
            Canton::create([
                'nombre' => $imbabura[$i],
                'provincia_id' => "10"
            ]);
        }
        $loja = ["LOJA", "CALVAS", "CATAMAYO"];
        for ($i = 0; $i < count($loja); $i++) {
            Canton::create([
                'nombre' => $loja[$i],
                'provincia_id' => "11"
            ]);
        }
        $losRios = ["BABAHOYO", "BABA", "PUEBLOVIEJO"];
        for ($i = 0; $i < count($losRios); $i++) {
            Canton::create([
                'nombre' => $losRios[$i],
                'provincia_id' => "12"
            ]);
        }
        $manabi = ["PORTOVIEJO", "BOLÍVAR", "CHONE"];
        for ($i = 0; $i < count($manabi); $i++) {
            Canton::create([
                'nombre' => $manabi[$i],
                'provincia_id' => "13"
            ]);
        }
        $moronaSantiago = ["MORONA", "GUALAQUIZA", "LIMÓN INDANZA"];
        for ($i = 0; $i < count($moronaSantiago); $i++) {
            Canton::create([
                'nombre' => $moronaSantiago[$i],
                'provincia_id' => "14"
            ]);
        }
        $napo = ["TENA", "ARCHIDONA", "EL CHACO", "QUIJOS"];
        for ($i = 0; $i < count($napo); $i++) {
            Canton::create([
                'nombre' => $napo[$i],
                'provincia_id' => "15"
            ]);
        }
        $pastaza = ["PASTAZA", "MERA"];
        for ($i = 0; $i < count($pastaza); $i++) {
            Canton::create([
                'nombre' => $pastaza[$i],
                'provincia_id' => "16"
            ]);
        }
        $pichincha = ["QUITO", "CAYAMBE", "MEJIA", "PEDRO MONCAYO"];
        for ($i = 0; $i < count($pichincha); $i++) {
            Canton::create([
                'nombre' => $pichincha[$i],
                'provincia_id' => "17"
            ]);
        }
        $tungurahua = ["AMBATO", "BAÑOS DE AGUA SANTA", "PATATE"];
        for ($i = 0; $i < count($tungurahua); $i++) {
            Canton::create([
                'nombre' => $tungurahua[$i],
                'provincia_id' => "18"
            ]);
        }
        $zamoraChinchipe = ["ZAMORA", "CHINCHIPE", "NANGARITZA"];
        for ($i = 0; $i < count($zamoraChinchipe); $i++) {
            Canton::create([
                'nombre' => $zamoraChinchipe[$i],
                'provincia_id' => "19"
            ]);
        }
        $galapagos = ["SAN CRISTÓBAL", "SANTA CRUZ",];
        for ($i = 0; $i < count($galapagos); $i++) {
            Canton::create([
                'nombre' => $galapagos[$i],
                'provincia_id' => "20"
            ]);
        }
        $sucumbios = ["LAGO AGRIO", "GONZALO PIZARRO", "PUTUMAYO"];
        for ($i = 0; $i < count($sucumbios); $i++) {
            Canton::create([
                'nombre' => $sucumbios[$i],
                'provincia_id' => "21"
            ]);
        }
        $orellana = ["ORELLANA", "AGUARICO", "LA JOYA DE LOS SACHAS", "LORETO"];
        for ($i = 0; $i < count($orellana); $i++) {
            Canton::create([
                'nombre' => $orellana[$i],
                'provincia_id' => "22"
            ]);
        }
        Canton::create([
            'nombre' => "SANTO DOMINGO",
            'provincia_id' => "23"
        ]);
        $santaElena = ["SANTA ELENA", "SALINAS"];
        for ($i = 0; $i < count($santaElena); $i++) {
            Canton::create([
                'nombre' => $santaElena[$i],
                'provincia_id' => "24"
            ]);
        }
    }
}
