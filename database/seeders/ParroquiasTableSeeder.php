<?php

namespace Database\Seeders;

use App\Models\Parroquia;
use Illuminate\Database\Seeder;

class ParroquiasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Parroquia:: truncate();

        $azuay_cuenca = ["BELLAVISTA", "CAÑARIBAMBA", "EL BATÁN"];
        for ($i = 0; $i < count($azuay_cuenca); $i++) {
            Parroquia::create([
                'nombre' => $azuay_cuenca[$i],
                'canton_id' => "1"
            ]);
        }
        $azuay_giron = ["GIRÓN", "ASUNCIÓN", "SAN GERARDO"];
        for ($i = 0; $i < count($azuay_giron); $i++) {
            Parroquia::create([
                'nombre' => $azuay_giron[$i],
                'canton_id' => "2"
            ]);
        }
        $azuay_gualaceo = ["CHORDELEG", "JADÁN", "REMIGIO CRESPO TORAL (GÚLAG)"];
        for ($i = 0; $i < count($azuay_gualaceo); $i++) {
            Parroquia::create([
                'nombre' => $azuay_gualaceo[$i],
                'canton_id' => "3"
            ]);
        }
        $azuay_nabon = ["COCHAPATA", "EL PROGRESO (CAB.EN ZHOTA)", "LAS NIEVES (CHAYA)"];
        for ($i = 0; $i < count($azuay_nabon); $i++) {
            Parroquia::create([
                'nombre' => $azuay_nabon[$i],
                'canton_id' => "4"
            ]);
        }
        $azuay_paute = ["AMALUZA", "CHICÁN (GUILLERMO ORTEGA)", "SEVILLA DE ORO"];
        for ($i = 0; $i < count($azuay_paute); $i++) {
            Parroquia::create([
                'nombre' => $azuay_paute[$i],
                'canton_id' => "5"
            ]);
        }

        $bolivar_guaranda = ["ÁNGEL POLIBIO CHÁVES", "GABRIEL IGNACIO VEINTIMILLA", "JULIO E. MORENO (CATANAHUÁN GRANDE)"];
        for ($i = 0; $i < count($bolivar_guaranda); $i++) {
            Parroquia::create([
                'nombre' => $bolivar_guaranda[$i],
                'canton_id' => "6"
            ]);
        }
        $bolivar_chimbo = ["TELIMBELA", "MAGDALENA (CHAPACOTO)", "SAN JOSÉ DE CHIMBO"];
        for ($i = 0; $i < count($bolivar_chimbo); $i++) {
            Parroquia::create([
                'nombre' => $bolivar_chimbo[$i],
                'canton_id' => "7"
            ]);
        }
        $bolivar_sanMiguel = ["RÉGULO DE MORA", "BALSAPAMBA", "BILOVÁN"];
        for ($i = 0; $i < count($bolivar_sanMiguel); $i++) {
            Parroquia::create([
                'nombre' => $bolivar_sanMiguel[$i],
                'canton_id' => "8"
            ]);
        }
        $bolivar_lasNaves = ["LAS NAVES", "LAS MERCEDES"];
        for ($i = 0; $i < count($bolivar_lasNaves); $i++) {
            Parroquia::create([
                'nombre' => $bolivar_lasNaves[$i],
                'canton_id' => "9"
            ]);
        }

        $canar_azogues = ["AURELIO BAYAS MARTÍNEZ", "COJITAMBO", "JAVIER LOYOLA (CHUQUIPATA)"];
        for ($i = 0; $i < count($canar_azogues); $i++) {
            Parroquia::create([
                'nombre' => $canar_azogues[$i],
                'canton_id' => "10"
            ]);
        }
        $canar_biblian = ["BIBLIÁN", "NAZÓN (CAB. EN PAMPA DE DOMÍNGUEZ)", "TURUPAMBA"];
        for ($i = 0; $i < count($canar_biblian); $i++) {
            Parroquia::create([
                'nombre' => $canar_biblian[$i],
                'canton_id' => "11"
            ]);
        }
        $canar_canar = ["CHONTAMARCA", "HONORATO VÁSQUEZ (TAMBO VIEJO)", "SAN ANTONIO"];
        for ($i = 0; $i < count($canar_canar); $i++) {
            Parroquia::create([
                'nombre' => $canar_canar[$i],
                'canton_id' => "12"
            ]);
        }
        $canar_laTroncal = ["LA TRONCAL", "MANUEL J. CALLE", "PANCHO NEGRO"];
        for ($i = 0; $i < count($canar_laTroncal); $i++) {
            Parroquia::create([
                'nombre' => $canar_laTroncal[$i],
                'canton_id' => "13"
            ]);
        }

        $carchi_tulcan = ["GONZÁLEZ SUÁREZ", "JULIO ANDRADE (OREJUELA)", "URBINA (TAYA)"];
        for ($i = 0; $i < count($carchi_tulcan); $i++) {
            Parroquia::create([
                'nombre' => $carchi_tulcan[$i],
                'canton_id' => "14"
            ]);
        }
        $carchi_bolivar = ["GARCÍA MORENO", "LOS ANDES", "SAN VICENTE DE PUSIR"];
        for ($i = 0; $i < count($carchi_bolivar); $i++) {
            Parroquia::create([
                'nombre' => $carchi_bolivar[$i],
                'canton_id' => "15"
            ]);
        }
        $carchi_espejo = ["EL ÁNGEL", "27 DE SEPTIEMBRE", "EL GOALTAL"];
        for ($i = 0; $i < count($carchi_espejo); $i++) {
            Parroquia::create([
                'nombre' => $carchi_espejo[$i],
                'canton_id' => "16"
            ]);
        }
        $carchi_mira = ["CONCEPCIÓN", "JIJÓN Y CAAMAÑO (CAB. EN RÍO BLANCO)", "JUAN MONTALVO (SAN IGNACIO DE QUIL)"];
        for ($i = 0; $i < count($carchi_mira); $i++) {
            Parroquia::create([
                'nombre' => $carchi_mira[$i],
                'canton_id' => "17"
            ]);
        }
        $carchi_montufar = ["GONZÁLEZ SUÁREZ", "SAN GABRIEL", "CHITÁN DE NAVARRETE"];
        for ($i = 0; $i < count($carchi_montufar); $i++) {
            Parroquia::create([
                'nombre' => $carchi_montufar[$i],
                'canton_id' => "18"
            ]);
        }

        $cotopaxi_latacunga = ["SAN BUENAVENTURA", "GUAITACAMA (GUAYTACAMA)", "11 DE NOVIEMBRE (ILINCHISI)"];
        for ($i = 0; $i < count($cotopaxi_latacunga); $i++) {
            Parroquia::create([
                'nombre' => $cotopaxi_latacunga[$i],
                'canton_id' => "19"
            ]);
        }
        $cotopaxi_laMana = ["EL CARMEN", "EL TRIUNFO", "GUASAGANDA (CAB.EN GUASAGANDA"];
        for ($i = 0; $i < count($cotopaxi_laMana); $i++) {
            Parroquia::create([
                'nombre' => $cotopaxi_laMana[$i],
                'canton_id' => "20"
            ]);
        }
        $cotopaxi_pangua = ["EL CORAZÓN", "MORASPUNGO", "PINLLOPATA"];
        for ($i = 0; $i < count($cotopaxi_pangua); $i++) {
            Parroquia::create([
                'nombre' => $cotopaxi_pangua[$i],
                'canton_id' => "21"
            ]);
        }
        $cotopaxi_pujili = ["ANGAMARCA", "CHUCCHILÁN (CHUGCHILÁN)", "GUANGAJE"];
        for ($i = 0; $i < count($cotopaxi_pujili); $i++) {
            Parroquia::create([
                'nombre' => $cotopaxi_pujili[$i],
                'canton_id' => "22"
            ]);
        }
        $cotopaxi_salcedo = ["ANTONIO JOSÉ HOLGUÍN (SANTA LUCÍA)", "MULALILLO", "PANSALEO"];
        for ($i = 0; $i < count($cotopaxi_salcedo); $i++) {
            Parroquia::create([
                'nombre' => $cotopaxi_salcedo[$i],
                'canton_id' => "23"
            ]);
        }

        $chimborazo_riobamba = ["LIZARZABURU", "VELASCO", "SAN LUIS"];
        for ($i = 0; $i < count($chimborazo_riobamba); $i++) {
            Parroquia::create([
                'nombre' => $chimborazo_riobamba[$i],
                'canton_id' => "24"
            ]);
        }
        $chimborazo_alausi = ["ACHUPALLAS", "PISTISHÍ (NARIZ DEL DIABLO)", "TIXÁN"];
        for ($i = 0; $i < count($chimborazo_alausi); $i++) {
            Parroquia::create([
                'nombre' => $chimborazo_alausi[$i],
                'canton_id' => "25"
            ]);
        }
        $chimborazo_colta = ["CAJABAMBA", "VILLA LA UNIÓN (CAJABAMBA)", "SANTIAGO DE QUITO (CAB. EN SAN ANTONIO DE QUITO)"];
        for ($i = 0; $i < count($chimborazo_colta); $i++) {
            Parroquia::create([
                'nombre' => $chimborazo_colta[$i],
                'canton_id' => "26"
            ]);
        }
        $chimborazo_chunchi = ["CAPZOL", "GONZOL", "LLAGOS"];
        for ($i = 0; $i < count($chimborazo_chunchi); $i++) {
            Parroquia::create([
                'nombre' => $chimborazo_chunchi[$i],
                'canton_id' => "27"
            ]);
        }
        $chimborazo_guamote = ["GUAMOTE", "CEBADAS", "PALMIRA"];
        for ($i = 0; $i < count($chimborazo_guamote); $i++) {
            Parroquia::create([
                'nombre' => $chimborazo_guamote[$i],
                'canton_id' => "28"
            ]);
        }

        $elOro_machala = ["LA PROVIDENCIA", "PUERTO BOLÍVAR", "EL RETIRO"];
        for ($i = 0; $i < count($elOro_machala); $i++) {
            Parroquia::create([
                'nombre' => $elOro_machala[$i],
                'canton_id' => "29"
            ]);
        }
        $elOro_arenillas = ["CHACRAS", "LAS LAJAS (CAB. EN LA VICTORIA)", "CARCABÓN"];
        for ($i = 0; $i < count($elOro_arenillas); $i++) {
            Parroquia::create([
                'nombre' => $elOro_arenillas[$i],
                'canton_id' => "30"
            ]);
        }
        $elOro_atahualpa = ["PACCHA", "CORDONCILLO", "SAN JUAN DE CERRO AZUL"];
        for ($i = 0; $i < count($elOro_atahualpa); $i++) {
            Parroquia::create([
                'nombre' => $elOro_atahualpa[$i],
                'canton_id' => "31"
            ]);
        }
        $elOro_elGuabo = ["BARBONES (SUCRE)", "LA IBERIA", "RÍO BONITO"];
        for ($i = 0; $i < count($elOro_elGuabo); $i++) {
            Parroquia::create([
                'nombre' => $elOro_elGuabo[$i],
                'canton_id' => "32"
            ]);
        }
        $elOro_huaquillas = ["ECUADOR", "MILTON REYES", "HUAQUILLAS"];
        for ($i = 0; $i < count($elOro_huaquillas); $i++) {
            Parroquia::create([
                'nombre' => $elOro_huaquillas[$i],
                'canton_id' => "33"
            ]);
        }

        $esmeraldas_esmeraldas = ["ATACAMES", "CRNEL. CARLOS CONCHA TORRES (CAB.EN HUELE)", "VUELTA LARGA"];
        for ($i = 0; $i < count($esmeraldas_esmeraldas); $i++) {
            Parroquia::create([
                'nombre' => $esmeraldas_esmeraldas[$i],
                'canton_id' => "34"
            ]);
        }
        $esmeraldas_eloyAlfaro = ["VALDEZ (LIMONES)", "MALDONADO", "TIMBIRÉ"];
        for ($i = 0; $i < count($esmeraldas_eloyAlfaro); $i++) {
            Parroquia::create([
                'nombre' => $esmeraldas_eloyAlfaro[$i],
                'canton_id' => "35"
            ]);
        }
        $esmeraldas_muisne = ["MUISNE", "BOLÍVAR", "SAN JOSÉ DE CHAMANGA (CAB.EN CHAMANGA)"];
        for ($i = 0; $i < count($esmeraldas_muisne); $i++) {
            Parroquia::create([
                'nombre' => $esmeraldas_muisne[$i],
                'canton_id' => "36"
            ]);
        }
        $esmeraldas_quininde = ["ROSA ZÁRATE (QUININDÉ)", "CHURA (CHANCAMA) (CAB. EN EL YERBERO)", "LA UNIÓN"];
        for ($i = 0; $i < count($esmeraldas_quininde); $i++) {
            Parroquia::create([
                'nombre' => $esmeraldas_quininde[$i],
                'canton_id' => "37"
            ]);
        }

        $guayas_guayaquil = ["BOLÍVAR (SAGRARIO)", "PASCUALES", "TENGUEL"];
        for ($i = 0; $i < count($guayas_guayaquil); $i++) {
            Parroquia::create([
                'nombre' => $guayas_guayaquil[$i],
                'canton_id' => "38"
            ]);
        }
        $guayas_daule = ["EMILIANO CAICEDO MARCOS", "JUAN BAUTISTA AGUIRRE (LOS TINTOS)", "PIEDRAHITA (NOBOL)"];
        for ($i = 0; $i < count($guayas_daule); $i++) {
            Parroquia::create([
                'nombre' => $guayas_daule[$i],
                'canton_id' => "39"
            ]);
        }
        $guayas_duran = ["ELOY ALFARO (DURÁN)", "EL RECREO", "ELOY ALFARO (DURÁN)"];
        for ($i = 0; $i < count($guayas_duran); $i++) {
            Parroquia::create([
                'nombre' => $guayas_duran[$i],
                'canton_id' => "40"
            ]);
        }
        $guayas_elEmpalme = ["VELASCO IBARRA (EL EMPALME)", "GUAYAS (PUEBLO NUEVO)", "EL ROSARIO"];
        for ($i = 0; $i < count($guayas_elEmpalme); $i++) {
            Parroquia::create([
                'nombre' => $guayas_elEmpalme[$i],
                'canton_id' => "41"
            ]);
        }
        $guayas_milagro = ["CHOBO", "MILAGRO", "ROBERTO ASTUDILLO (CAB. EN CRUCE DE VENECIA)"];
        for ($i = 0; $i < count($guayas_milagro); $i++) {
            Parroquia::create([
                'nombre' => $guayas_milagro[$i],
                'canton_id' => "42"
            ]);
        }

        $imbabura_ibarra = ["CARANQUI", "SAN FRANCISCO", "SAN ANTONIO"];
        for ($i = 0; $i < count($imbabura_ibarra); $i++) {
            Parroquia::create([
                'nombre' => $imbabura_ibarra[$i],
                'canton_id' => "43"
            ]);
        }
        $imbabura_antonioAnte = ["ANDRADE MARÍN (LOURDES)", "ATUNTAQUI", "SAN ROQUE"];
        for ($i = 0; $i < count($imbabura_antonioAnte); $i++) {
            Parroquia::create([
                'nombre' => $imbabura_antonioAnte[$i],
                'canton_id' => "44"
            ]);
        }
        $imbabura_cotacachi = ["SAGRARIO", "APUELA", "QUIROGA"];
        for ($i = 0; $i < count($imbabura_cotacachi); $i++) {
            Parroquia::create([
                'nombre' => $imbabura_cotacachi[$i],
                'canton_id' => "45"
            ]);
        }
        $imbabura_otavalo = ["SAN LUIS", "PATAQUÍ", "SAN PABLO"];
        for ($i = 0; $i < count($imbabura_otavalo); $i++) {
            Parroquia::create([
                'nombre' => $imbabura_otavalo[$i],
                'canton_id' => "46"
            ]);
        }
        $imbabura_pimampiro = ["CHUGÁ", "MARIANO ACOSTA", "SAN FRANCISCO DE SIGSIPAMBA"];
        for ($i = 0; $i < count($imbabura_pimampiro); $i++) {
            Parroquia::create([
                'nombre' => $imbabura_pimampiro[$i],
                'canton_id' => "47"
            ]);
        }

        $loja_loja = ["EL SAGRARIO", "CHUQUIRIBAMBA", "QUINARA"];
        for ($i = 0; $i < count($loja_loja); $i++) {
            Parroquia::create([
                'nombre' => $loja_loja[$i],
                'canton_id' => "48"
            ]);
        }
        $loja_calvas = ["CARIAMANGA", "SAN VICENTE", "SANGUILLÍN"];
        for ($i = 0; $i < count($loja_calvas); $i++) {
            Parroquia::create([
                'nombre' => $loja_calvas[$i],
                'canton_id' => "49"
            ]);
        }
        $loja_catamayo = ["SAN JOSÉ", "GUAYQUICHUMA", "ZAMBI"];
        for ($i = 0; $i < count($loja_catamayo); $i++) {
            Parroquia::create([
                'nombre' => $loja_catamayo[$i],
                'canton_id' => "50"
            ]);
        }

        $losRios_babahoyo = ["CLEMENTE BAQUERIZO", "BARREIRO (SANTA RITA)", "LA UNIÓN"];
        for ($i = 0; $i < count($losRios_babahoyo); $i++) {
            Parroquia::create([
                'nombre' => $losRios_babahoyo[$i],
                'canton_id' => "51"
            ]);
        }
        $losRios_baba = ["GUARE", "BABA", "ISLA DE BEJUCAL"];
        for ($i = 0; $i < count($losRios_baba); $i++) {
            Parroquia::create([
                'nombre' => $losRios_baba[$i],
                'canton_id' => "52"
            ]);
        }
        $losRios_puebloViejo = ["PUEBLOVIEJO", "PUERTO PECHICHE", "SAN JUAN"];
        for ($i = 0; $i < count($losRios_puebloViejo); $i++) {
            Parroquia::create([
                'nombre' => $losRios_puebloViejo[$i],
                'canton_id' => "53"
            ]);
        }

        $manabi_portViejo = ["12 DE MARZO", "FRANCISCO PACHECO", "CHIRIJOS"];
        for ($i = 0; $i < count($manabi_portViejo); $i++) {
            Parroquia::create([
                'nombre' => $manabi_portViejo[$i],
                'canton_id' => "54"
            ]);
        }
        $manabi_bolivar = ["CALCETA", "MEMBRILLO", "QUIROGA"];
        for ($i = 0; $i < count($manabi_bolivar); $i++) {
            Parroquia::create([
                'nombre' => $manabi_bolivar[$i],
                'canton_id' => "55"
            ]);
        }
        $manabi_chone = ["SANTA RITA", "CONVENTO", "SAN ANTONIO"];
        for ($i = 0; $i < count($manabi_chone); $i++) {
            Parroquia::create([
                'nombre' => $manabi_chone[$i],
                'canton_id' => "56"
            ]);
        }

        $morona_morona = ["MACAS", "GENERAL PROAÑO", "RÍO BLANCO"];
        for ($i = 0; $i < count($morona_morona); $i++) {
            Parroquia::create([
                'nombre' => $morona_morona [$i],
                'canton_id' => "57"
            ]);
        }
        $morona_gualaquiza = ["GUALAQUIZA", "CHIGÜINDA", "EL IDEAL"];
        for ($i = 0; $i < count($morona_gualaquiza); $i++) {
            Parroquia::create([
                'nombre' => $morona_gualaquiza [$i],
                'canton_id' => "58"
            ]);
        }
        $morona_limon = ["INDANZA", "PAN DE AZÚCAR", "YUNGANZA (CAB. EN EL ROSARIO)"];
        for ($i = 0; $i < count($morona_limon); $i++) {
            Parroquia::create([
                'nombre' => $morona_limon[$i],
                'canton_id' => "59"
            ]);
        }

        $napo_tena = ["AHUANO", "CHONTAPUNTA", "SAN JUAN DE MUYUNA"];
        for ($i = 0; $i < count($napo_tena); $i++) {
            Parroquia::create([
                'nombre' => $napo_tena[$i],
                'canton_id' => "60"
            ]);
        }
        $napo_archidona = ["ARCHIDONA", "COTUNDO", "PUERTO MURIALDO"];
        for ($i = 0; $i < count($napo_archidona); $i++) {
            Parroquia::create([
                'nombre' => $napo_archidona[$i],
                'canton_id' => "61"
            ]);
        }
        $napo_elChaco = ["GONZALO DíAZ DE PINEDA (EL BOMBÓN)", "SANTA ROSA", "SARDINAS"];
        for ($i = 0; $i < count($napo_elChaco); $i++) {
            Parroquia::create([
                'nombre' => $napo_elChaco[$i],
                'canton_id' => "62"
            ]);
        }
        $napo_quijos = ["BAEZA", "PAPALLACTA", "SUMACO"];
        for ($i = 0; $i < count($napo_quijos); $i++) {
            Parroquia::create([
                'nombre' => $napo_quijos[$i],
                'canton_id' => "63"
            ]);
        }

        $pastaza_pastaza = ["PUYO", "RÍO TIGRE", "EL TRIUNFO"];
        for ($i = 0; $i < count($pastaza_pastaza); $i++) {
            Parroquia::create([
                'nombre' => $pastaza_pastaza[$i],
                'canton_id' => "64"
            ]);
        }
        $pastaza_mera = ["MERA", "MADRE TIERRA", "SHELL"];
        for ($i = 0; $i < count($pastaza_mera); $i++) {
            Parroquia::create([
                'nombre' => $pastaza_mera[$i],
                'canton_id' => "65"
            ]);
        }

        $pichincha_quito = ["BELISARIO QUEVEDO", "GUAMANÍ", "PUERTO QUITO", "TABABELA"];
        for ($i = 0; $i < count($pichincha_quito); $i++) {
            Parroquia::create([
                'nombre' => $pichincha_quito[$i],
                'canton_id' => "66"
            ]);
        }
        $pichincha_cayambe = ["AYORA", "ASCÁZUBI", "SANTA ROSA DE CUZUBAMBA"];
        for ($i = 0; $i < count($pichincha_cayambe); $i++) {
            Parroquia::create([
                'nombre' => $pichincha_cayambe[$i],
                'canton_id' => "67"
            ]);
        }
        $pichincha_mejia = ["MACHACHI", "EL CHAUPI", "UYUMBICHO"];
        for ($i = 0; $i < count($pichincha_mejia); $i++) {
            Parroquia::create([
                'nombre' => $pichincha_mejia[$i],
                'canton_id' => "68"
            ]);
        }
        $pichincha_pedroMoncayo = ["TABACUNDO", "MALCHINGUÍ", "TUPIGACHI"];
        for ($i = 0; $i < count($pichincha_pedroMoncayo); $i++) {
            Parroquia::create([
                'nombre' => $pichincha_pedroMoncayo[$i],
                'canton_id' => "69"
            ]);
        }

        $tungurahua_ambato = ["CELIANO MONGE", "LA PENÍNSULA", "UNAMUNCHO"];
        for ($i = 0; $i < count($tungurahua_ambato); $i++) {
            Parroquia::create([
                'nombre' => $tungurahua_ambato[$i],
                'canton_id' => "70"
            ]);
        }

        $tungurahua_banos = ["BAÑOS DE AGUA SANTA", "RÍO NEGRO", "ULBA"];
        for ($i = 0; $i < count($tungurahua_banos); $i++) {
            Parroquia::create([
                'nombre' => $tungurahua_banos[$i],
                'canton_id' => "71"
            ]);
        }
        $tungurahua_patate = ["EL TRIUNFO", "LOS ANDES (CAB. EN POATUG)", "PATATE"];
        for ($i = 0; $i < count($tungurahua_patate); $i++) {
            Parroquia::create([
                'nombre' => $tungurahua_patate[$i],
                'canton_id' => "72"
            ]);
        }

        $zamora_zamora = ["EL LIMÓN", "CUMBARATZA", "SAN CARLOS DE LAS MINAS"];
        for ($i = 0; $i < count($zamora_zamora); $i++) {
            Parroquia::create([
                'nombre' => $zamora_zamora[$i],
                'canton_id' => "73"
            ]);
        }
        $zamora_chinchipe = ["CHITO", "SAN FRANCISCO DEL VERGEL", "SAN ANDRÉS"];
        for ($i = 0; $i < count($zamora_chinchipe); $i++) {
            Parroquia::create([
                'nombre' => $zamora_chinchipe[$i],
                'canton_id' => "74"
            ]);
        }
        $zamora_nangaritza = ["GUAYZIMI", "ZURMI", "NUEVO PARAÍSO"];
        for ($i = 0; $i < count($zamora_nangaritza); $i++) {
            Parroquia::create([
                'nombre' => $zamora_nangaritza[$i],
                'canton_id' => "75"
            ]);
        }

        $galapagos_sanCristobal = ["PUERTO BAQUERIZO MORENO", "ISLA SANTA MARÍA (FLOREANA) (CAB. EN PTO. VELASCO IBARRA)", "EL PROGRESO"];
        for ($i = 0; $i < count($galapagos_sanCristobal); $i++) {
            Parroquia::create([
                'nombre' => $galapagos_sanCristobal[$i],
                'canton_id' => "76"
            ]);
        }
        $galapagos_santaCruz = ["PUERTO AYORA", "BELLAVISTA", "SANTA ROSA (INCLUYE LA ISLA BALTRA)"];
        for ($i = 0; $i < count($galapagos_santaCruz); $i++) {
            Parroquia::create([
                'nombre' => $galapagos_santaCruz[$i],
                'canton_id' => "77"
            ]);
        }

        $sucumbios_lagoAgrio = ["NUEVA LOJA", "GENERAL FARFÁN", "AGUAS NEGRAS"];
        for ($i = 0; $i < count($sucumbios_lagoAgrio); $i++) {
            Parroquia::create([
                'nombre' => $sucumbios_lagoAgrio[$i],
                'canton_id' => "78"
            ]);
        }
        $sucumbios_gonzaloPiz = ["EL DORADO DE CASCALES", "PUERTO LIBRE", "SANTA ROSA DE SUCUMBÍOS"];
        for ($i = 0; $i < count($sucumbios_gonzaloPiz); $i++) {
            Parroquia::create([
                'nombre' => $sucumbios_gonzaloPiz[$i],
                'canton_id' => "79"
            ]);
        }
        $sucumbios_putumayo = ["PALMA ROJA", "PUERTO BOLÍVAR (PUERTO MONTÚFAR)", "SANTA ELENA"];
        for ($i = 0; $i < count($sucumbios_putumayo); $i++) {
            Parroquia::create([
                'nombre' => $sucumbios_putumayo[$i],
                'canton_id' => "80"
            ]);
        }

        $orellana_orellana = ["DAYUMA", "LA BELLEZA", "TARACOA (NUEVA ESPERANZA: YUCA)"];
        for ($i = 0; $i < count($orellana_orellana); $i++) {
            Parroquia::create([
                'nombre' => $orellana_orellana [$i],
                'canton_id' => "81"
            ]);
        }
        $orellana_aguarico = ["TIPITINI", "NUEVO ROCAFUERTE", "YASUNÍ"];
        for ($i = 0; $i < count($orellana_aguarico); $i++) {
            Parroquia::create([
                'nombre' => $orellana_aguarico [$i],
                'canton_id' => "82"
            ]);
        }
        $orellana_laJoya = ["ENOKANQUI", "POMPEYA", "UNIÓN MILAGREÑA"];
        for ($i = 0; $i < count($orellana_laJoya); $i++) {
            Parroquia::create([
                'nombre' => $orellana_laJoya [$i],
                'canton_id' => "83"
            ]);
        }
        $orellana_loreto = ["AVILA (CAB. EN HUIRUNO)", "LORETO", "SAN VICENTE DE HUATICOCHA"];
        for ($i = 0; $i < count($orellana_loreto); $i++) {
            Parroquia::create([
                'nombre' => $orellana_loreto[$i],
                'canton_id' => "84"
            ]);
        }
        Parroquia::create([
            'nombre' => "SANTO DOMINGO",
            'canton_id' => "85"
        ]);

        $santaElena_santaElena = ["BALLENITA", "CHANDUY", "SIMÓN BOLÍVAR (JULIO MORENO)"];
        for ($i = 0; $i < count($santaElena_santaElena); $i++) {
            Parroquia::create([
                'nombre' => $santaElena_santaElena[$i],
                'canton_id' => "86"
            ]);
        }

        $santaElena_salinas = ["CARLOS ESPINOZA LARREA", "SANTA ROSA", "ANCONCITO"];
        for ($i = 0; $i < count($santaElena_salinas); $i++) {
            Parroquia::create([
                'nombre' => $santaElena_salinas[$i],
                'canton_id' => "87"
            ]);
        }
    }
}
