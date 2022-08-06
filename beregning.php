<!-- <head> -->
<!-- Required meta tags -->
<!-- <meta charset="utf-8"> -->
<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->

<!-- Bootstrap CSS -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

<!-- <title>Mern Stack</title> -->
<!-- <link rel="stylesheet" href="./assets/css/style.css"> -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" /> -->
<!-- </head> -->
<?php require_once('./COMPONENTS/header.php');
$data1 = array(
    "1" => "CO2", "28" => "CH4", "265" => "N2O", "12400" => "HFC-32(CHF3)", "677" => "HFC-32 (CH2F2)", "116" => "HFC-41 (CH3F)", "1650" => "HFC-43-10mee",
    "3170" => "HFC-125 (C2HF5)", "1120" => "HFC-134 (C2H2F4)", "1300" => "HFC-134a (C2H2F4)", "138" => "HFC-152a (C2H4F2)", "328" => "HFC-143 (C2H3F3)", "4800" => "HFC-143a (C2H3F3)",
    "3350" => "HFC-227ea (C3HF7)", "8060" => "HFC-236fa (C3H2F6)", "716" => "HFC-245ca (C3H3F5)", "6630" => "PFC-14 (CF4)", "11100" => "PFC-116 (C2F6)", "8900" => "PFC-218 (C3F8)",
    "9200" => "PFC-31-10 (C4F10)", "9540" => "PFC-318 (c-C4F8)", "8550" => "PFC-41-12 (C5F12)", "7910" => "PFC-51-14 (C6F14)", "23500" => "SF6",
    "16100" => "NF3"
);

$data2 = array(
    "4.23,4232.72" => "Stål og jern (nyt)", "8.43,8429.08" => "Aluminium (genanvendt)", "13.0,13079.50" => "Aluminium (nyt)", "12749.13,12749127" => "Andre plast (nyt)", "3.13,3133.15" => "Beton",
    "5.68,5684.63" => "Bly, zink og tin (genanvendt)", "10.10,10102.49" => "Bly, zink og tin (nyt)", "3.17,3170.59" => "Cement, kalk og gips", "2.69,2688.69" => "Glas (genanvendt)", "1.66,1660.03" => "Glas (nyt)",
    "1.00,1000.05" => "Ikke-jernholdige metaller (genanvendt)", "0.90,900.80" => "Ikke-jernholdige metaller (nyt)", "0.10,100.21" => "Kemikalier", "0.01,6.31" => "Keramisk", "0.29,293.89" => "Kobber (genanvendt)",
    "0.84,839.22" => "Kobber (nyt)", "13.99,13986.49" => "Mineraluld", "1.19,1193.34" => "Mursten", "2.78,2775.40" => "Papir og pap (genanvendt)", "0.74,734.94" => "Papir og pap (nyt)",
    "3.08,3084.74" => "Plast (genanvendt)", "9.62,9617.94" => "Plast: Nylon, PC (nyt)", "0.81,813.07" => "Sand og ler", "3.20,3202.95" => "Stål og jern (genanvendt)", "1.34,1344.05" => "Tekstil",
    "1.10,1096.31" => "Træ (genanvendt)", "1.36,1362.67" => "Træ (nyt)", "0.68,684.81" => "Ædelmetaller"
);

$data3 = array(
    "0.67" => "Stål og jern (nyt)", "0.07" => "Aluminium (genanvendt)", "0.20" => "Aluminium (nyt)", "0.15" => "Andre plast (nyt)",
    "0.01" => "Beton", "0.02" => "Bly, zink og tin (genanvendt)", "0.06" => "Bly, zink og tin (nyt)", "0.32" => "Cement, kalk og gips",
    "0.07" => "Glas (genanvendt)", "0.10" => "Glas (nyt)", "0.22" => "Ikke-jernholdige metaller (genanvendt)", "0.39" => "Ikke-jernholdige metaller (nyt)",
    "0.07" => "Kemikalier", "0.15" => "Keramisk", "0.03" => "Kobber (genanvendt)", "0.04" => "Kobber (nyt)", "0.13" => "Mineraluld", "0.10" => "Mursten",
    "0.02" => "Papir og pap (genanvendt)", "0.06" => "Papir og pap (nyt)", "0.06" => "Plast (genanvendt)", "0.48" => "Plast: Nylon, PC (nyt)", "0.03" => "Sand og ler", "0.12" => "Stål og jern (genanvendt)",
    "0.09" => "Tekstil", "0.11" => "Træ (genanvendt)", "0.12" => "Træ (nyt)", "0.04" => "Ædelmetaller"
);
$data4 = array(
    "Kontor elektronik", "Fødevarer", "Service og tjenesteydelser", "Byggeri og vedligeholdelse", "Møbler og inventar", "Vandforbrug", "Arbejdstøj o.lign.",
    "Kontor artikler", "Transportmidler", "Events/personale aktiviteter", "Kurser og uddannelse", "IT services / softwares", "Post (pakkepost og breve)",
    "Netværk / abonnementer", "Hårde hvidevarer", "Plast og gummi komponenter", "Metal komponenter", "Glas komponenter", "Reparation og vedligehold af motorkøretøjer",
    "Kunstgødning", "Køb af høj teknologisk- og medicinsk udstyr", "Leje af maskiner", "Køb af maskiner", "Blomster og planter", "Forsikringer", "Forskning og udvikling",
    "Genbrugte produkter"
);
$data5 = array(
    "0.10" => "Generelt", "0.46" => "Kød, rødt", "0.16" => "Kød, lyst", "0.04" => "Fisk", "0.07" => "Frugt og grønt", "0.23" => "Brød, kartofler, pasta o.lign.",
    "0.07" => "Ris", "0.10" => "Mejeri produkter", "0.06" => "Drikkevarer"
);
$data6 = array(
    "4.23,4232.7193" => "Stål og jern (nyt)", "3.08,3084.7372" => "Aluminium (genanvendt)",
    "8.43,8429.0783" => "Aluminium (nyt)", "3.17,3170.59" => "Andre plast (nyt)", "0.10,100.21" => "Beton", "0.81,813.07" => "Bly, zink og tin (genanvendt)",
    "3.13,3133.15" => "Bly, zink og tin (nyt)", "0.90,900.80" => "Cement, kalk og gips", "0.68,684.81" => "Glas (genanvendt)", "1.00,1000.05" => "Glas (nyt)",
    "3.20,3202.95" => "Ikke-jernholdige metaller (genanvendt)", "5.68,5684.63" => "Ikke-jernholdige metaller (nyt)", "2.78,2775.40" => "Kemikalier", "1.19,1193.34" => "Keramisk",
    "0.92,9617.94" => "Kobber (genanvendt)", "0.84,839.22" => "Mineraluld", "0.29,293.89" => "Mursten",
    "1.10,1096.31" => "Papir og pap (genanvendt)", "2.69,2688.69" => "Papir og pap (nyt)", "1.340,1344.05" => "Plast (genanvendt)",
    "10.10,10102.49" => "Plast: Nylon, PC (nyt)", "0.01,6.31" => "Sand og ler", "0.74,738.94" => "Stål og jern (genanvendt)", "13.99,13986.49" => "Tekstil",
    "1.36,1362.67" => "Træ (genanvendt)", "1.66,1660.03" => "Træ (nyt)", "12749.127,12749127.00" => "Ædelmetaller"
);
?>

<?php if (isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
    $Stdate = $_SESSION['Stdate'];
    $Endate = $_SESSION['Endate'];
    $Position = $_SESSION['Position'];
    $Email = $_SESSION['Email'];
    $Comment = $_SESSION['Comment'];
    $country = $_SESSION['country'];
    $company = $_SESSION['company'];
    $CVR = $_SESSION['CVR'];
    $P = $_SESSION['P'];
    $branche = $_SESSION['branche'];
    $Emp = $_SESSION['Emp'];
    $Revenue = $_SESSION['Revenue'];
    $Building = $_SESSION['Building'];
    //section1
    // for electricity
    //1)Forbrug af elektricitet
    $ENECT1DE = $_SESSION['ENECT1DE'];
    $ENECT1EG = $_SESSION['ENECT1EG'];
    $ENECT1EP = $_SESSION['ENECT1EP'];
    $ENECT1UN = $_SESSION['ENECT1UN'];
    $ENECT1OTC = $_SESSION['ENECT1OTC'];
    $Forbrugscope1 = $_SESSION['Forbrugscope1'];
    $Forbrugscope2 = $_SESSION['Forbrugscope2'];
    $Forbrugscope3 = $_SESSION['Forbrugscope3'];
    $Forbrugoutscope =  $_SESSION['Forbrugoutscope'];
    $ENECT1O1 = $_SESSION['ENECT1O1'];
    // 2)
    $ENHPT2DE = $_SESSION['ENHPT2DE'];
    $ENHPT2Q = $_SESSION['ENHPT2Q'];
    $ENHPT2UN = $_SESSION['ENHPT2UN'];
    $ENHPT2EF = $_SESSION['ENHPT2EF'];
    $ENHPT2OTC = $_SESSION['ENHPT2OTC'];
    $ENECT1O2 = $_SESSION['ENECT1O2'];
    $Fjernvarmescope1 = $_SESSION['Fjernvarmescope1'];
    $Fjernvarmescope2 = $_SESSION['Fjernvarmescope2'];
    $Fjernvarmescope3 = $_SESSION['Fjernvarmescope3'];
    $Fjernvarmeoutside = $_SESSION['Fjernvarmeoutside'];
    // 3)
    $ENHPT3DE = $_SESSION['ENHPT3DE'];
    $ENHPT3FT = $_SESSION['ENHPT3FT'];
    $ENHPT3FTPB = $_SESSION['ENHPT3FTPB'];
    $ENHPT3Q = $_SESSION['ENHPT3Q'];
    $ENHPT3UN = $_SESSION['ENHPT3UN'];
    $Brændslerscope1 = $_SESSION['Brændslerscope1'];
    $Brændslerscope2 = $_SESSION['Brændslerscope2'];
    $Brændslerscope3 = $_SESSION['Brændslerscope3'];
    $Brændsleroutside = $_SESSION['Brændsleroutside'];
    $ENHPT3OTC = $_SESSION['ENHPT3OTC'];
    $ENECT3O3 = $_SESSION['ENECT3O3'];
    // 4
    $ENPDT4DE = $_SESSION['ENPDT4DE'];
    $ENPDT4GG = $_SESSION['ENPDT4GG'];
    $ENPDT4Q = $_SESSION['ENPDT4Q'];
    $ENPDT4UN =  $_SESSION['ENPDT4UN'];
    $Procesudledningscope1 = $_SESSION['Procesudledningscope1'];
    $Procesudledningscope2 = $_SESSION['Procesudledningscope2'];
    $Procesudledningscope3 = $_SESSION['Procesudledningscope3'];
    $Procesudledningoutside = $_SESSION['Procesudledningoutside'];
    $ENPDT4OTC = $_SESSION['ENPDT4OTC'];
    $ENPDT4O4 = $_SESSION['ENPDT4O4'];
    //5
    $ENAFT5DE = $_SESSION['ENAFT5DE'];
    $ENAFT5Q = $_SESSION['ENAFT5Q'];
    $ENAFT5UN = $_SESSION['ENAFT5UN'];
    $ENAFT5EF = $_SESSION['ENAFT5EF'];
    $ENAFT5SC1 = $_SESSION['ENAFT5SC1'];
    $ENAFT5SC2 = $_SESSION['ENAFT5SC2'];
    $ENAFT5SC3 = $_SESSION['ENAFT5SC3'];
    $ENAFT5OTS = $_SESSION['ENAFT5OTS'];
    $ENAFT5OTC = $_SESSION['ENAFT5OTC'];
    $ENAFT5O5 = $_SESSION['ENAFT5O5'];
    //    print_r($Forbrugscope1);
    //Indkøb
    // 1
    //1.1
    $PPRT1DE = $_SESSION['PPRT1DE'];
    $PPRT1MG = $_SESSION['PPRT1MG'];
    $PPRT1Q = $_SESSION['PPRT1Q'];
    $PPRT1UN = $_SESSION['PPRT1UN'];
    $PPRT1SC3 = $_SESSION['PPRT1SC3'];
    $PPRT1OTC = $_SESSION['PPRT1OTC'];
    $PPRT1O1 = $_SESSION['PPRT1O1'];
    //1.2
    $PPRT2DE = $_SESSION['PPRT2DE'];
    $PPRT2MG = $_SESSION['PPRT2MG'];
    $PPRT2AE = $_SESSION['PPRT2AE'];
    $PPRT2UN = $_SESSION['PPRT2UN'];
    $PPRT2SC3 = $_SESSION['PPRT2SC3'];
    $PPRT2OTC = $_SESSION['PPRT2OTC'];
    $PPRT2O2 = number_format($_SESSION['PPRT2O2'], 4);
    //1.3
    $PPRT3DE = $_SESSION['PPRT3DE'];
    $PPRT3PG = $_SESSION['PPRT3PG'];
    $PPRT3SP = $_SESSION['PPRT3SP'];
    $PPRT3Q = $_SESSION['PPRT3Q'];
    $PPRT3UN = $_SESSION['PPRT3UN'];
    $PPRT3SC3 = $_SESSION['PPRT3SC3'];
    $PPRT3OTC = $_SESSION['PPRT3OTC'];
    $PPRT3O3 = number_format($_SESSION['PPRT3O3'], 4);
    //1.4
    $PPRT4DE = $_SESSION['PPRT4DE'];
    $PPRT4PG = $_SESSION['PPRT4PG'];
    $PPRT4SP = $_SESSION['PPRT4SP'];
    $PPRT4AE = $_SESSION['PPRT4AE'];
    $PPRT4UN = $_SESSION['PPRT4UN'];
    $PPRT4SC3 = $_SESSION['PPRT4SC3'];
    $PPRT4OTC = $_SESSION['PPRT4OTC'];
    $PPRT4O4 = number_format($_SESSION['PPRT4O4'], 4);
    //1.5
    $PPRT5DE = $_SESSION['PPRT5DE'];
    $PPRT5P = $_SESSION['PPRT5P'];
    $PPRT5Q = $_SESSION['PPRT5Q'];
    $PPRT5UN = $_SESSION['PPRT5UN'];
    $PPRT5EF = $_SESSION['PPRT5EF'];
    $PPRT5SC3 = $_SESSION['PPRT5SC3'];
    $PPRT5OTC = $_SESSION['PPRT5OTC'];
    $PPRT5O5 = number_format($_SESSION['PPRT5O5'], 4);
    //1.6
    $PPRT6DE = $_SESSION['PPRT6DE'];
    $PPRT6P = $_SESSION['PPRT6P'];
    $PPRT6AE = $_SESSION['PPRT6AE'];
    $PPRT6UN = $_SESSION['PPRT6UN'];
    $PPRT6EF = $_SESSION['PPRT6EF'];
    $PPRT6SC3 = $_SESSION['PPRT6SC3'];
    $PPRT6OTC = $_SESSION['PPRT6OTC'];
    $PPRT6O6 = number_format($_SESSION['PPRT6O6'], 4);
    //2
    //2.1
    $PSST7DE = $_SESSION['PSST7DE'];
    $PSST7MG = $_SESSION['PSST7MG'];
    $PSST7Q = $_SESSION['PSST7Q'];
    $PSST7UN = $_SESSION['PSST7UN'];
    $PSST7SC3 = $_SESSION['PSST7SC3'];
    $PSST7OTC = $_SESSION['PSST7OTC'];
    $PSST7O7 = number_format($_SESSION['PSST7O7'], 4);
    //2.2
    $PSST8DE = $_SESSION['PSST8DE'];
    $PSST8MG = $_SESSION['PSST8MG'];
    $PSST8AE = $_SESSION['PSST8AE'];
    $PSST8UN = $_SESSION['PSST8UN'];
    $PSST8SC3 = $_SESSION['PSST8SC3'];
    $PSST8OTC = $_SESSION['PSST8OTC'];
    $PSST8O8 = number_format($_SESSION['PSST8O8'], 4);
    //2.3
    $PSST9DE = $_SESSION['PSST9DE'];
    $PSST9PG = $_SESSION['PSST9PG'];
    $PSST9SP = $_SESSION['PSST9SP'];
    $PSST9Q = $_SESSION['PSST9Q'];
    $PSST9UN = $_SESSION['PSST9UN'];
    $PSST9SC3 = $_SESSION['PSST9SC3'];
    $PSST9OTC = $_SESSION['PSST9OTC'];
    $PSST9O9 =  number_format($_SESSION['PSST9O9'], 4);
    //2.4
    $PSST10DE = $_SESSION['PSST10DE'];
    $PSST10PG = $_SESSION['PSST10PG'];
    $PSST10SP = $_SESSION['PSST10SP'];
    $PSST10AE = $_SESSION['PSST10AE'];
    $PSST10UN = $_SESSION['PSST10UN'];
    $PSST10SC3 = $_SESSION['PSST10SC3'];
    $PSST10OTC = $_SESSION['PSST10OTC'];
    $PSST10O10 =  number_format($_SESSION['PSST10O10'], 4);

    //2.5
    $POTT11DE = $_SESSION['POTT11DE'];
    $POTT11P = $_SESSION['POTT11P'];
    $POTT11Q = $_SESSION['POTT11Q'];
    $POTT11UN = $_SESSION['POTT11UN'];
    $POTT11EF = $_SESSION['POTT11EF'];
    $POTT11SC3 = $_SESSION['POTT11SC3'];
    $POTT11OTC = $_SESSION['POTT11OTC'];
    $POTT11O11 =  number_format($_SESSION['POTT11O11'], 4);
    //2.6
    $POTT12DE = $_SESSION['POTT12DE'];
    $POTT12P = $_SESSION['POTT12P'];
    $POTT12AE = $_SESSION['POTT12AE'];
    $POTT12UN = $_SESSION['POTT12UN'];
    $POTT12EF = $_SESSION['POTT12EF'];
    $POTT12SC3 = $_SESSION['POTT12SC3'];
    $POTT12OTC = $_SESSION['POTT12OTC'];
    $POTT12O12 = $_SESSION['POTT12O12'];
    //transport
    //1
    //1.1
    $TOTT1DE = $_SESSION['TOTT1DE'];
    $TOTT1TM = $_SESSION['TOTT1TM'];
    $TOTT1P = $_SESSION['TOTT1P'];
    $TOTT1BS = $_SESSION['TOTT1BS'];
    $TOTT1Q = $_SESSION['TOTT1Q'];
    $TOTT1UN = $_SESSION['TOTT1UN'];
    $TOTT1SC1 = $_SESSION['TOTT1SC1'];
    $TOTT1SC2 = $_SESSION['TOTT1SC2'];
    $TOTT1SC3 = $_SESSION['TOTT1SC3'];
    $TOTT1OTS = $_SESSION['TOTT1OTS'];
    $TOTT1OTC = $_SESSION['TOTT1OTC'];
    $TOTT1O1 =  number_format($_SESSION['TOTT1O1'], 4);
    //1.2
    $TOTT2DE = $_SESSION['TOTT2DE'];
    $TOTT2TM = $_SESSION['TOTT2TM'];
    $TOTT2P = $_SESSION['TOTT2P'];
    $TOTT2Q = $_SESSION['TOTT2Q'];
    $TOTT2UN = $_SESSION['TOTT2UN'];
    $TOTT2SC1 = $_SESSION['TOTT2SC1'];
    $TOTT2SC2 = $_SESSION['TOTT2SC2'];
    $TOTT2SC3 = $_SESSION['TOTT2SC3'];
    $TOTT2OTS = $_SESSION['TOTT2OTS'];
    $TOTT2OTC = $_SESSION['TOTT2OTC'];
    $TOTT2O2 = number_format($_SESSION['TOTT2O2'], 4);
    //2
    //2.1
    $TOTT3DE = $_SESSION['TOTT3DE'];
    $TOTT3TM = $_SESSION['TOTT3TM'];
    $TOTT3P = $_SESSION['TOTT3P'];
    $TOTT3BS = $_SESSION['TOTT3BS'];
    $TOTT3Q = $_SESSION['TOTT3Q'];
    $TOTT3UN = $_SESSION['TOTT3UN'];
    $TOTT3SC1 = $_SESSION['TOTT3SC1'];
    $TOTT3SC2 = $_SESSION['TOTT3SC2'];
    $TOTT3SC3 = $_SESSION['TOTT3SC3'];
    $TOTT3OTS = $_SESSION['TOTT3OTS'];
    $TOTT3OTC = $_SESSION['TOTT3OTC'];
    $TOTT3O3 =  number_format($_SESSION['TOTT3O3'], 4);
    //2.2
    $TOTT4DE = $_SESSION['TOTT4DE'];
    $TOTT4TM  = $_SESSION['TOTT4TM'];
    $TOTT4P = $_SESSION['TOTT4P'];
    $TOTT4BS = $_SESSION['TOTT4BS'];
    $TOTT4Q = $_SESSION['TOTT4Q'];
    $TOTT4UN = $_SESSION['TOTT4UN'];
    $TOTT4SC1 = $_SESSION['TOTT4SC1'];
    $TOTT4SC2 = $_SESSION['TOTT4SC2'];
    $TOTT4SC3 = $_SESSION['TOTT4SC3'];
    $TOTT4OTS = $_SESSION['TOTT4OTS'];
    $TOTT4OTC = $_SESSION['TOTT4OTC'];
    $TOTT4O4 = number_format($_SESSION['TOTT4O4'], 4);
    //2.3
    $TOTT5DE = $_SESSION['TOTT5DE'];
    $TOTT5TM = $_SESSION['TOTT5TM'];
    $TOTT5P = $_SESSION['TOTT5P'];
    $TOTT5AE = $_SESSION['TOTT5AE'];
    $TOTT5UN = $_SESSION['TOTT5UN'];
    $TOTT5SC1 = $_SESSION['TOTT5SC1'];
    $TOTT5SC2 = $_SESSION['TOTT5SC2'];
    $TOTT5SC3 = $_SESSION['TOTT5SC3'];
    $TOTT5OTS = $_SESSION['TOTT5OTS'];
    $TOTT5OTC = $_SESSION['TOTT5OTC'];
    $TOTT5O5 = number_format($_SESSION['TOTT5O5'], 4);
    //3
    //3.1
    $TOTT6DE = $_SESSION['TOTT6DE'];
    $TOTT6TM = $_SESSION['TOTT6TM'];
    $TOTT6P = $_SESSION['TOTT6P'];
    $TOTT6DEBS = $_SESSION['TOTT6DEBS'];
    $TOTT6Q = $_SESSION['TOTT6Q'];
    $TOTT6UN = $_SESSION['TOTT6UN'];
    $TOTT6SC1 = $_SESSION['TOTT6SC1'];
    $TOTT6SC2 = $_SESSION['TOTT6SC2'];
    $TOTT6SC3 = $_SESSION['TOTT6SC3'];
    $TOTT6OTS = $_SESSION['TOTT6OTS'];
    $TOTT6OTC = $_SESSION['TOTT6OTC'];
    $TOTT6O6 = number_format($_SESSION['TOTT6O6'], 4);
    //3.2
    $TOTT7DE = $_SESSION['TOTT7DE'];
    $TOTT7TM = $_SESSION['TOTT7TM'];
    $TOTT7P = $_SESSION['TOTT7P'];
    $TOTT7AE = $_SESSION['TOTT7AE'];
    $TOTT7UN = $_SESSION['TOTT7UN'];
    $TOTT7SC1 = $_SESSION['TOTT7SC1'];
    $TOTT7SC2 = $_SESSION['TOTT7SC2'];
    $TOTT7SC3 = $_SESSION['TOTT7SC3'];
    $TOTT7OTS = $_SESSION['TOTT7OTS'];
    $TOTT7OTC = $_SESSION['TOTT7OTC'];
    $TOTT7O7 =  number_format($_SESSION['TOTT7O7'], 4);
    //  4
    //4.1
    $TOTT8DE = $_SESSION['TOTT8DE'];
    $TOTT8TM = $_SESSION['TOTT8TM'];
    $TOTT8P = $_SESSION['TOTT8P'];
    $TOTT8BS = $_SESSION['TOTT8BS'];
    $TOTT8Q = $_SESSION['TOTT8Q'];
    $TOTT8UN = $_SESSION['TOTT8UN'];
    $TOTT8SC1 = $_SESSION['TOTT8SC1'];
    $TOTT8SC2 = $_SESSION['TOTT8SC2'];
    $TOTT8SC3 = $_SESSION['TOTT8SC3'];
    $TOTT8OTS = $_SESSION['TOTT8OTS'];
    $TOTT8OTC = $_SESSION['TOTT8OTC'];
    $TOTT8O8 = number_format($_SESSION['TOTT8O8'], 4);
    //4.2
    $TOTT9DE = $_SESSION['TOTT9DE'];
    $TOTT9TT = $_SESSION['TOTT9TT'];
    $TOTT9DM = $_SESSION['TOTT9DM'];
    $TOTT9B = $_SESSION['TOTT9B'];
    $TOTT9UN = $_SESSION['TOTT9UN'];
    $TOTT9SC1 = $_SESSION['TOTT9SC1'];
    $TOTT9SC2 = $_SESSION['TOTT9SC2'];
    $TOTT9SC3 = $_SESSION['TOTT9SC3'];
    $TOTT9OTS = $_SESSION['TOTT9OTS'];
    $TOTT9OTC = $_SESSION['TOTT9OTC'];
    $TOTT9O9 = number_format($_SESSION['TOTT9O9'], 4);
    //5
    //5.1
    $TOTT10DE = $_SESSION['TOTT10DE'];
    $TOTT10TM = $_SESSION['TOTT10TM'];
    $TOTT10Q = $_SESSION['TOTT10Q'];
    $TOTT10UN = $_SESSION['TOTT10UN'];
    $TOTT10EF = $_SESSION['TOTT10EF'];
    $TOTT10SC1 = $_SESSION['TOTT10SC1'];
    $TOTT10SC2 = $_SESSION['TOTT10SC2'];
    $TOTT10SC3 = $_SESSION['TOTT10SC3'];
    $TOTT10OTS = $_SESSION['TOTT10OTS'];
    $TOTT10OTC = $_SESSION['TOTT10OTC'];
    $TOTT10O10 =  $_SESSION['TOTT10O10'];
    // Affald
    //1
    $WRRT1DE = $_SESSION['WRRT1DE'];
    $WRRT1WT = $_SESSION['WRRT1WT'];
    $WRRT1WM = $_SESSION['WRRT1WM'];
    $WRRT1Q = $_SESSION['WRRT1Q'];
    $WRRT1UN = $_SESSION['WRRT1UN'];
    $WRRT1SC1 = $_SESSION['WRRT1SC1'];
    $WRRT1SC2 = $_SESSION['WRRT1SC2'];
    $WRRT1SC3 = $_SESSION['WRRT1SC3'];
    $WRRT1OTS = $_SESSION['WRRT1OTS'];
    $WRRT1OTC = $_SESSION['WRRT1OTC'];
    $WRRT1O1 = $_SESSION['WRRT1O1'];
    //2
    $WRRT2DE = $_SESSION['WRRT2DE'];
    $WRRT2M = $_SESSION['WRRT2M'];
    $WRRT2Q = $_SESSION['WRRT2Q'];
    $WRRT2UN = $_SESSION['WRRT2UN'];
    $WRRT2EF = $_SESSION['WRRT2EF'];
    $WRRT2SC1 = $_SESSION['WRRT2SC1'];
    $WRRT2SC2 = $_SESSION['WRRT2SC2'];
    $WRRT2SC3 = $_SESSION['WRRT2SC3'];
    $WRRT2DOTS = $_SESSION['WRRT2DOTS'];
    $WRRT2OTC = $_SESSION['WRRT2OTC'];
    $WRRT2O2 = $_SESSION['WRRT2O2'];
    // Solgte produkter
    // 1
    $SPPT1DE = $_SESSION['SPPT1DE'];
    $SPPT1Q = $_SESSION['SPPT1Q'];
    $SPPT1UN = $_SESSION['SPPT1UN'];
    $SPPT1EF = $_SESSION['SPPT1EF'];
    $SPPT1SC3 = $_SESSION['SPPT1SC3'];
    $SPPT1OTS = $_SESSION['SPPT1OTS'];
    $SPPT1OTC = $_SESSION['SPPT1OTC'];
    $SPPT1O1 = $_SESSION['SPPT1O1'];
    //2
    $SPPT2DE = $_SESSION['SPPT2DE'];
    $SPPT2ET = $_SESSION['SPPT2ET'];
    $SPPT2Q = $_SESSION['SPPT2Q'];
    $SPPT2UN = $_SESSION['SPPT2UN'];
    $SPPT2SC3 = $_SESSION['SPPT2SC3'];
    $SPPT2OTS = $_SESSION['SPPT2OTS'];
    $SPPT2OTC = $_SESSION['SPPT2OTC'];
    $SPPT2O2 = $_SESSION['SPPT2O2'];
    //3
    $SOOT3DE = $_SESSION['SOOT3DE'];
    $SOOT3WT = $_SESSION['SOOT3WT'];
    $SOOT3WM = $_SESSION['SOOT3WM'];
    $SOOT3Q = $_SESSION['SOOT3Q'];
    $SOOT3UN = $_SESSION['SOOT3UN'];
    $SOOT3SC3 = $_SESSION['SOOT3SC3'];
    $SOOT3OTS = $_SESSION['SOOT3OTS'];
    $SOOT3OTC = $_SESSION['SOOT3OTC'];
    $SPPT3O3 = $_SESSION['SPPT3O3'];
    //4
    $SPPT4DE = $_SESSION['SPPT4DE'];
    $SPPT4Q = $_SESSION['SPPT4Q'];
    $SPPT4UN = $_SESSION['SPPT4UN'];
    $SPPT4EF = $_SESSION['SPPT4EF'];
    $SPPT4SC3 = $_SESSION['SPPT4SC3'];
    $SPPT4OTS = $_SESSION['SPPT4OTS'];
    $SPPT4OTC = $_SESSION['SPPT4OTC'];
    $SPPT4O4 = $_SESSION['SPPT4O4'];
} else {
    $name = "";
    $Stdate = "";
    $Endate = "";
    $Position = "";
    $Email = "";
    $Comment = "";
    $country = "";
    $company = "";
    $CVR = "";
    $P = "";
    $branche = "";
    $Emp = "";
    $Revenue = "";
    $Building = "";
    $Forbrugscope1 = "";
    $ENECT1O1 = 0.0;
    $ENECT1O2 = 0.0;
    $ENECT3O3 = 0.0;
    $ENPDT4O4 = 0.0;
    $ENAFT5O5 = 0.0;
    $PPRT1O1 = 0.0;
    $PPRT2O2 = 0.0;
    $PPRT3O3 = 0.0;
    $PPRT4O4 = 0.0;
    $PPRT5O5 = 0.0;
    $PPRT6O6 = 0.0;
    $PSST7O7 = 0.0;
    $PSST8O8 = 0.0;
    $PSST9O9 = 0.0;
    $PSST10O10 = 0.0;
    $POTT11O11 = 0.0;
    $POTT12O12 = 0.0;
    $TOTT1O1 = 0.0;
    $TOTT2O2 = 0.0;
    $TOTT3O3 = 0.0;
    $TOTT4O4 = 0.0;
    $TOTT5O5 = 0.0;
    $TOTT6O6 = 0.0;
    $TOTT7O7 = 0.0;
    $TOTT8O8 = 0.0;
    $TOTT9O9 = 0.0;
    $TOTT10O10 = 0.0;
    $WRRT1O1 = 0.0;
    $WRRT2O2 = 0.0;
    $SPPT1O1 = 0.0;
    $SPPT2O2 = 0.0;
    $SPPT3O3 = 0.0;
    $SPPT4O4 = 0.0;
}
?>
<div class="" style="max-width: 100% !important;">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl- text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <!-- <h2 id="heading">Hello Dear</h2>
                <p>Fill all form field to go to next step</p> -->
                <form id="msform" action="result.php" method="post">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active" id="confirm"><strong>Stamdata</strong></li>
                        <li id="confirm"><strong>Energi og Processer</strong></li>
                        <li id="confirm"><strong>Indkob</strong></li>
                        <li id="confirm"><strong>Transport</strong></li>
                        <li id="confirm"><strong>Afffald</strong></li>
                        <li id="confirm"><strong>Solgte Produkter</strong></li>
                    </ul>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br> <!-- fieldsets -->
                    <fieldset class="container-fluid">
                        <div class="form-card">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="steps">Step 1 - 6</h2>
                                </div>
                                <div class="col-12 col-md-6">
                                    <h2 class="fs-title">Stamdata </h2>
                                    <h5 class="fs-title short">På denne side kan du indtaste grundlæggende informationer om jeres virksomhed,
                                        tidspunkt for beregningerne mv. Det er muligt at indtaste forholdstal,
                                        som antal ansatte, der bruges til at udregne nøgletal, som vil fremgå i resultatvisningerne.
                                        <br>
                                        <br>
                                        VIGTIGT!
                                        <br>
                                        Vær opmærksom på, at ingen af de indtastede informationer er obligatoriske for de videre beregninger,
                                        og de påvirker derfor ikke resultaterne.
                                    </h5>
                                    <br>
                                    <h2 class="fs-title short1">Beregningsinformation</h2>
                                </div>
                            </div>
                            <label class="fieldlabels">Navn på beregning</label><br>
                            <input type="text" id="initial_1" name="Name" value="<?php echo $name; ?>" /><br>
                            <label class="fieldlabels">Start dato (DD.MM.YYYY)</label><br>
                            <input type="date" id="initial_2" name="Stdate" value="<?php echo $Stdate; ?>" /><br>
                            <label class="fieldlabels">Slut dato (DD.MM.YYYY)</label><br>
                            <input type="date" id="initial_3" name="Endate" value="<?php echo $Endate; ?>" /><br>
                            <label class="fieldlabels">Kontaktperson</label><br>
                            <input type="text" id="initial_4" name="Position" value="<?php echo $Position; ?>" /><br>
                            <label class="fieldlabels">Email</label><br>
                            <input type="text" id="initial_5" name="Email" value="<?php echo  $Email; ?>" /><br>
                            <label class="fieldlabels">Bemærkninger til beregning</label><br>
                            <input type="text" name="Comment" value="<?php echo $Comment; ?>" /><br>
                        </div>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <br>
                                    <h2 class="fs-title short1">Virksomhedsinformation</h2>
                                </div>
                                <div class="col-5">
                                </div>
                            </div>
                            <label class="fieldlabels">Land</label><br>
                            <input type="text " class="input" name="country" value="<?php echo $country; ?>" /><br>
                            <label class="fieldlabels">Virksomhedens navn</label><br>
                            <input type="text" class="input" name="Company" value="<?php echo $company; ?>" /><br>
                            <label class="fieldlabels">CVR-nummer</label><br>
                            <input type="text" name="CVR" value="<?php echo " $CVR"; ?>" /><br>
                            <label class="fieldlabels">P-nummer</label><br>
                            <input type="text" name="P" value="<?php echo $P; ?>" /><br>
                            <label class="fieldlabels">Branche</label><br>
                            <select class="form-control select2bs4" name="branche" style="max-width: 50% !important; width: 100%;">
                                <?php if ($branche !== "") {
                                    echo '<option value= ' . $branche . ' >' . $branche . '</option>';
                                } else {
                                } ?>
                                <option value="Andre serviceydelser  mv.">Andre serviceydelser mv.</option>
                                <option value="Bygge og anlæg">Bygge og anlæg</option>
                                <option value="Ejendomshandel og udlejning">Ejendomshandel og udlejning</option>
                                <option value="Elektronikindustri">Elektronikindustri</option>
                                <option value="Energiforsyning ">Energiforsyning </option>
                                <option value="Finansiering og forsikring">Finansiering og forsikring</option>
                                <option value="Forlag, tv og radio">Forlag, tv og radio</option>
                                <option value="Forskning og udvikling">Forskning og udvikling</option>
                                <option value="Fremst. af elektrisk udstyr">Fremst. af elektrisk udstyr</option>
                                <option value="Føde-, drikke- og tobaksvareindustri">Føde-, drikke- og tobaksvareindustri</option>
                                <option value="Handel">Handel</option>
                                <option value="Hoteller og restauranter">Hoteller og restauranter</option>
                                <option value="It- og informationstjenester">It- og informationstjenester</option>
                                <option value="Kemisk industri">Kemisk industri</option>
                                <option value="Kultur og fritid">Kultur og fritid</option>
                                <option value="Landbrug, skovbrug og fiskeri">Landbrug, skovbrug og fiskeri</option>
                                <option value="Maskinindustri">Maskinindustri</option>
                                <option value="Medicinalindustri">Medicinalindustri</option>
                                <option value="Metalindustri">Metalindustri</option>
                                <option value="Møbel og anden industri mv.">Møbel og anden industri mv.</option>
                                <option value="Offentlig administration, forsvar og politi">Offentlig administration, forsvar og politi</option>
                                <option value="Olieraffinaderier mv.">Olieraffinaderier mv.</option>
                                <option value="Plast-, glas- og betonindustri">Plast-, glas- og betonindustri</option>
                                <option value="Rejsebureauer, rengøring og anden operationel service">Rejsebureauer, rengøring og anden operationel service</option>
                                <option value="Reklame og øvrig erhvervsservice">Reklame og øvrig erhvervsservice</option>
                                <option value="Rådgivning mv">Rådgivning mv</option>
                                <option value="Råstofindvinding">Råstofindvinding</option>
                                <option value="Sociale institutioner">Sociale institutioner</option>
                                <option value="Sundhedsvæsen">Sundhedsvæsen</option>
                                <option value="Tekstil- og læderindustri">Tekstil- og læderindustri</option>
                                <option value="Telekommunikation">Telekommunikation</option>
                                <option value="Transport">Transport</option>
                                <option value="Transportmiddelindustri">Transportmiddelindustri</option>
                                <option value="Træ- og papirindustri, trykkerier">Træ- og papirindustri, trykkerier</option>
                                <option value="Undervisning">Undervisning</option>
                                <option value="Vandforsyning og renovation">Vandforsyning og renovation</option>
                            </select><br>
                        </div>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <br>
                                    <h2 class="fs-title short1">Nøgletal</h2>
                                    <h5 class="fs-title short">Indberetning af forholdstal herunder bliver overført til resultatvisningerne.
                                        Det giver derfor nøgletal, som udledning pr. ansat, udledning pr. kr. omsætning og udledning pr.
                                        m². På baggrund af resultatet for CO2-udledning kan du beregne egne nøgletal, som giver mening
                                        for netop din virksomhed. Det kan fx være udledning pr. produceret enhed.
                                    </h5>
                                </div>
                                <div class="col-5">
                                </div>
                            </div>
                            <label class="fieldlabels">Antal ansatte</label><br>
                            <input type="text" name="Emp" value="<?php echo $Emp; ?>" /><br>
                            <label class="fieldlabels">Omsætning, mio. kr.</label><br>
                            <input type="text" name="Revenue" value=" <?php echo $Revenue; ?>" /><br>
                            <label class="fieldlabels">Antal m2 bygningsareal</label><br>
                            <input type="text" name="Building" value="<?php echo $Building; ?>" /><br>
                        </div>
                        <input type="button" id="submits" name="next" class="next action-button submits" value="Next" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-12">
                                </div>
                                <div class="col-12">
                                    <h2 class="steps">Step 2 - 6</h2>
                                </div>
                                <div class="col-12">
                                    <br>
                                    <h2 class="fs-title logr">Energi og processer</h2>
                                    <h5 class="fs-title short">Energi og processer omfatter forbruget af elektricitet, fjernvarme og fossile
                                        brændsler i forbindelse med alle virksomhedens aktiviteter. Energi og processer omhandler
                                        virksomhedens scope 1 og 2 udledninger.
                                        <br>
                                        <br>
                                        VIGTIGT!<br>
                                        Vær opmærksom på, at data for brændstof til transport indtastes under Egne og leasede transportmidler i fanen Transport.
                                        Beregningerne er ikke korrigeret for graddage.
                                    </h5>
                                    <br>
                                    <h4>Tryk på "+" i venstre side for at folde rækkerne ud. </h4>
                                    <br>
                                    <br>
                                    <h2 class="fs-title shgr1" title="Før du kan beregne klimabelastningen fra virksomhedens elforbrug skal du angive, hvilke emissionsfaktorer, der skal bruges. Emissionsfaktoren for elektricitet er nemlig forskellig, afhængig af om du anvender miljødeklaration, time-deklarationen eller el-deklaration som metode.  

                                        Ved miljødeklarationen anvendes et årligt landsgennemsnit for sammensætningen af produktionen af el (energimixet) til at fastslå emissionsfaktoren.  

                                        Time-deklarationen viser ligesom miljødeklarationen, hvad der fysisk leveres til elforbrugeren. Den væsentligste forskel ligger i, at time-deklarationen viser et landsgennemsnit for sammensætningen af elproduktionen på timebasis i stedet for på årlig basis, og dermed giver den et mere retvisende klimaaftryk af det konkrete elforbrug og kan med fordel bruges når muligt.  

                                        Ved el-deklarationen korrigeres for køb og salg af grønne certifikater (kaldt oprindelsesgarantier) og derfor udgør grøn energi en mindre del af energimixet, hvorfor emissionsfaktoren for el i denne deklaration er højere. 

                                        I fald du ønsker at følge den internationalt anerkendte regnskabspraksis for klimaregnskaber GHG-protokollen skal du oplyse klimaaftrykket fra jeres elforbrug med både el-deklaration, som anvendes til GHG-protokollens market-based tilgang og time- eller miljø-deklaration, som anvendes til den location-based tilgang. 

                                        Hvis din virksomhed har købt grøn energi , kan du finde konkret vejledning til, hvordan du opgør dette i den udvidede vejledning. Hvis din virksomhed anvender time-deklarationen i stedet for miljødeklarationen, skal du ind på eloverblik.dk/customer/login for at regne en individuel og timebaseret emissionsfaktor ud. Du vil herefter skulle indtaste jeres forbrug, emissionsfaktor og udledning i kategorien ’andet’. Vælger du at gøre dette, bør du sætte emissionsfaktor til miljødeklaration og skrive en bemærkning om, at der anvendes timedeklaration ud fra din udregning."> Valg af Emissionsfaktor for Elektricitet
                                    </h2>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h2 class="fs-title shgr">

                                                Emissionsfaktor for elektricitet:</h2>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-select" name="frt" id="elect1">
                                                <option value="Miljødeklaration">Miljødeklaration</option>
                                                <option value="Eldeklaration">Eldeklaration</option>
                                            </select>
                                        </div>
                                    </div>
                                    <br><br>
                                </div>
                                <div class="col-12">
                                    <div class="row head3">
                                        <div class="col-md-3">
                                            <h3 title="Under elektricitet er det muligt at indtaste forbruget af elektricitet til fx drift. Der kan også indtastes eventuel produktion af vedvarende energi.">Elektricitet</h3>
                                        </div>
                                        <div class="col-md-4">
                                            <h3 style="white-space: nowrap;">Samlet udledning: </h3>
                                        </div>
                                        <div class="col-md-3">
                                            <h3 id="table1"><?php echo number_format(floatval($ENECT1O1), 1); ?></h3>
                                        </div>
                                        <div class="col-md-2">
                                            <h3 style="white-space: nowrap;">Ton CO2-e</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row" style="border-bottom: 1px solid;">
                                        <div class="col-md-10 col-12">
                                            <br>
                                            <h4>Forbrug af elektricitet<h4>
                                        </div>
                                        <br />
                                        <div class="col-12  col-md-2">
                                            <br />
                                            <div class="row dflex flex-row" style="color:#27b939;">
                                                <p style="color:#27b939;">Tilføj række&nbsp; &nbsp;</p>
                                                <button type="button" class="btn btn-danger btn-circle btn3" onclick="adrow1('.stytb')">
                                                    <i class="fab fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <div class="row  table-responsive-md">
                                    <div class="col-md-12 table-responsive-md">
                                        <table class="table addtable1 " id="tab_logic">
                                            <thead>
                                                <tr class="trset">
                                                    <th style="text-align: start;" scope="col">Beskrivelse</th>
                                                    <th style="text-align: start;" scope="col">Forbrug af el fra nettet</th>
                                                    <th style="text-align: start;" scope="col">Forbrug af vedvarende el fra egen produktion</th>
                                                    <th class="col-1" style="text-align: start;" scope="col">Enhed</th>
                                                    <th style="text-align: start;" scope="col">Scope 1</th>
                                                    <th style="text-align: start;" scope="col">Scope 2</th>
                                                    <th style="text-align: start;" scope="col" title="Scope 3 indeholder udledninger i forbindelse med distributions- og transmissionstab samt udledningen forbundet med udvinding af brændsler, fx kul. ">Scope 3</th>
                                                    <th style="text-align: start;" scope="col">Udenfor scopes</th>
                                                    <th style="text-align: start;" scope="col">Bemærkning</th>
                                                </tr>
                                            </thead>
                                            <tbody class="stytb">
                                                <?php if (isset($_SESSION['ENECT1DE'])) {
                                                    for ($i = 0; $i < count($ENECT1DE); $i++) { ?>

                                                        <tr class="row1">
                                                            <td><input type="text" name='ENECT1DE[]' value="<?php echo $ENECT1DE[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                            <td><input type="text" onchange="cal1()" value="<?php echo $ENECT1EG[$i]; ?>" name='ENECT1EG[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                            <td><input type="text" name='ENECT1EP[]' value="<?php echo $ENECT1EP[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                            <td><select class="selectpicker" onchange="cal1()" name="ENECT1UN[]" style="height: 42px; max-width: 100% !important; width: 100%;">
                                                                    <option value="<?php echo $ENECT1UN[$i]; ?>"><?php echo $ENECT1UN[$i]; ?></option>
                                                                    <option value="KWH">KWH</option>
                                                                    <option value="MWH">MWH</option>
                                                                    <option value="GJ">GJ</option>
                                                                </select></td>
                                                            <td><input type="text" readonly name='ENECT1SC1[]' value="<?php echo $Forbrugscope1[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                            <td><input type="text" readonly name='ENECT1SC2[]' value="<?php echo $Forbrugscope2[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                            <td><input type="text" readonly name='ENECT1SC3[]' value="<?php echo $Forbrugscope3[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                            <td><input type="text" readonly name='ENECT1OTS[]' value="<?php echo $Forbrugoutscope[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                            <td><input type="text" name='ENECT1OTC[]' value="<?php echo $ENECT1OTC[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        </tr>
                                                    <?php }
                                                } else { ?>
                                                    <tr class="row1">
                                                        <td><input type="text" name='ENECT1DE[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><input type="text" onchange="cal1()" name='ENECT1EG[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><input type="text" name='ENECT1EP[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><select class="selectpicker" onchange="cal1()" name="ENECT1UN[]" style="height: 42px; max-width: 100% !important; width: 100%;">
                                                                <option value="KWH">KWH</option>
                                                                <option value="MWH">MWH</option>
                                                                <option value="GJ">GJ</option>
                                                            </select></td>
                                                        <td><input type="text" readonly name='ENECT1SC1[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><input type="text" readonly name='ENECT1SC2[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><input type="text" readonly name='ENECT1SC3[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><input type="text" readonly name='ENECT1OTS[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><input type="text" name='ENECT1OTC[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                    </tr>
                                                    <tr class="row1">
                                                        <td><input type="text" name='ENECT1DE[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><input type="text" onchange="cal1()" name='ENECT1EG[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td> <input type="text" name='ENECT1EP[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><select class="" onchange="cal1()" name="ENECT1UN[]" style="height: 42px;max-width: 100% !important; width: 100%;">
                                                                <option value="KWH">KWH</option>
                                                                <option value="MWH">MWH</option>
                                                                <option value="GJ">GJ</option>
                                                            </select></td>
                                                        <td><input type="text" readonly name='ENECT1SC1[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><input type="text" readonly name='ENECT1SC2[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><input type="text" readonly name='ENECT1SC3[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><input type="text" readonly name='ENECT1OTS[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><input type="text" name='ENECT1OTC[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                    </tr>
                                                    <tr class="row1">
                                                        <td><input type="text" name='ENECT1DE[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><input type="text" onchange="cal1()" name='ENECT1EG[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td> <input type="text" name='ENECT1EP[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><select class="" onchange="cal1()" name="ENECT1UN[]" style="height: 42px;max-width: 100% !important; width: 100%;">
                                                                <option value="KWH">KWH</option>
                                                                <option value="MWH">MWH</option>
                                                                <option value="GJ">GJ</option>
                                                            </select></td>
                                                        <td><input type="text" readonly name='ENECT1SC1[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><input type="text" readonly name='ENECT1SC2[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><input type="text" readonly name='ENECT1SC3[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><input type="text" readonly name='ENECT1OTS[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><input type="text" name='ENECT1OTC[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                    </tr><?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row" style="border-bottom: 1px solid;">
                                        <div class="col-md-12 col-12">
                                            <!-- <br> -->

                                            <h4>Total, ton CO2-e: <input type="text" name="ENECT1O1" value="<?php echo $ENECT1O1; ?>" readonly></h4>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <!-- electricity  -->
                                <div class="col-12">
                                    <div class="row head3">
                                        <div class="col-md-4" style="white-space: nowrap;">
                                            <h3 title="Her indtastes forbrug i forbindelse med opvarmning af bygninger m.m.">Varme og procesenergi</h3>
                                        </div>
                                        <div class="col-md-3">
                                            <h3 style="white-space: nowrap;">Samlet udledning: </h3>
                                        </div>
                                        <div class="col-md-2">
                                            <h3 id="table2"><?php echo number_format(floatval($ENECT1O2) + floatval($ENECT3O3), 1); ?></h3>
                                        </div>
                                        <div class="col-md-3">
                                            <h3 style="white-space: nowrap;">Ton CO2-e</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row" style="border-bottom: 1px solid;">
                                        <div class="col-md-10 col-12">
                                            <br>
                                            <h4 title="For opvarmning er det muligt at angive egen emissionsfaktor. Dette gøres ved at indtaste en emissionsfaktor i kolonnen Emissionsfaktor, kgCO2-e/enhed. 

                                            Emissionsfaktorer fra det lokale fjernvarmenet offentligørres bl.a. af Energistyrelsen (cf. vejledning).">Fjernvarme</h4>
                                        </div>
                                        <br />
                                        <div class="col-12  col-md-2">
                                            <br />
                                            <div class="row dflex flex-row" style="color:#27b939;">
                                                <p style="color:#27b939;">Tilføj række&nbsp; &nbsp;</p>
                                                <button type="button" class="btn btn-danger btn-circle btn3" onclick="adrow1('.tbody1')">
                                                    <i class="fab fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <div class="row  table-responsive-md">
                                    <div class="col-md-12 table-responsive-md">
                                        <table class="table addtable1" id="tab_logic">
                                            <thead>
                                                <tr class="trset">
                                                    <th style="text-align: start;" scope="col">Beskrivelse</th>
                                                    <th style="text-align: start;" scope="col">Mængde</th>
                                                    <th style="text-align: start;" class="col-1" scope="col">Enhed</th>
                                                    <th style="text-align: start;" scope="col" title="Her kan du indtaste din egen emissionsfaktor for fjernvarme. Emissionsfaktoreren vil ofte kunne skaffes ved at tage kontakt til det lokale fjernvarmeselskab. Indtastes der ikke noget, så anvendes et landsgennemsnit.">Emissionsfaktor, kgCO2-e/enhed</th>
                                                    <th style="text-align: start;" scope="col">Scope 1</th>
                                                    <th style="text-align: start;" scope="col">Scope 2</th>
                                                    <th style="text-align: start;" scope="col" title="Scope 3 indeholder udledninger i forbindelse med distributions- og transmissionstab samt udledningen forbundet med udvinding af brændsler, fx kul.">Scope 3</th>
                                                    <th style="text-align: start;" scope="col">Udenfor scope</th>
                                                    <th style="text-align: start;" scope="col">Bemærkning</th>
                                                </tr>
                                            </thead>
                                            <tbody class="stytb tbody1">
                                                <?php if (isset($_SESSION['ENHPT2DE'])) {
                                                    for ($i = 0; $i < count($ENHPT2DE); $i++) { ?>
                                                        <tr class="row1">
                                                            <td><input type="text" name='ENHPT2DE[]' value="<?php echo $ENHPT2DE[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                            <td><input type="text" onchange="cal2('a')" value="<?php echo $ENHPT2Q[$i]; ?>" name='ENHPT2Q[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                            <td><select class="" onchange="cal2('a')" name="ENHPT2UN[]" style="height: 42px;max-width: 100% !important; width: 100%;">
                                                                    <option value="<?php echo $ENHPT2UN[$i]; ?>"><?php echo $ENHPT2UN[$i]; ?></option>
                                                                    <option value="KWH">KWH</option>
                                                                    <option value="MWH">MWH</option>
                                                                    <option value="GJ">GJ</option>
                                                                </select></td>
                                                            <td> <input type="text" onchange="cal2('a')" name='ENHPT2EF[]' value="<?php echo $ENHPT2EF[$i]; ?>" style="height: 42px;max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                            <td><input type="text" readonly name='ENHPT2S1[]' value="<?php echo $Fjernvarmescope1[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                            <td><input type="text" readonly name='ENHPT2S2[]' value="<?php echo $Fjernvarmescope2[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                            <td><input type="text" readonly name='ENHPT2S3[]' value="<?php echo $Fjernvarmescope3[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                            <td><input type="text" readonly name='ENHPT2OTS[]' value="<?php echo $Fjernvarmeoutside[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                            <td><input type="text" name='ENHPT2OTC[]' value="<?php echo $ENHPT2OTC[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        </tr>

                                                    <?php }
                                                } else { ?>
                                                    <tr class="row1">
                                                        <td><input type="text" name='ENHPT2DE[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><input type="text" onchange="cal2('a')" name='ENHPT2Q[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><select class="" onchange="cal2('a')" name="ENHPT2UN[]" style="height: 42px;max-width: 100% !important; width: 100%;">
                                                                <option value="KWH">KWH</option>
                                                                <option value="MWH">MWH</option>
                                                                <option value="GJ">GJ</option>
                                                            </select></td>
                                                        <td> <input type="text" onchange="cal2('a')" name='ENHPT2EF[]' style="height: 42px;max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><input type="text" readonly name='ENHPT2S1[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><input type="text" readonly name='ENHPT2S2[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><input type="text" readonly name='ENHPT2S3[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><input type="text" readonly name='ENHPT2OTS[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><input type="text" name='ENHPT2OTC[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                    </tr>
                                                    <tr class="row1">
                                                        <td><input type="text" name='ENHPT2DE[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><input type="text" onchange="cal2('a')" name='ENHPT2Q[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>

                                                        <td><select class="" onchange="cal2('a')" name="ENHPT2UN[]" style="height: 42px;max-width: 100% !important; width: 100%;">
                                                                <option value="KWH">KWH</option>
                                                                <option value="MWH">MWH</option>
                                                                <option value="GJ">GJ</option>
                                                            </select></td>
                                                        <td> <input type="text" onchange="cal2('a')" name='ENHPT2EF[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><input type="text" readonly name='ENHPT2S1[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><input type="text" readonly name='ENHPT2S2[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><input type="text" readonly name='ENHPT2S3[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><input type="text" readonly name='ENHPT2OTS[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><input type="text" name='ENHPT2OTC[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                    </tr>
                                                    <tr class="row1">
                                                        <td><input type="text" name='ENHPT2DE[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><input type="text" onchange="cal2('a')" name='ENHPT2Q[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>

                                                        <td><select class="" onchange="cal2('a')" name="ENHPT2UN[]" style="height: 42px;max-width: 100% !important; width: 100%;">
                                                                <option value="KWH">KWH</option>
                                                                <option value="MWH">MWH</option>
                                                                <option value="GJ">GJ</option>
                                                            </select></td>
                                                        <td> <input type="text" onchange="cal2('a')" name='ENHPT2EF[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><input type="text" readonly name='ENHPT2S1[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><input type="text" readonly name='ENHPT2S2[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><input type="text" readonly name='ENHPT2S3[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><input type="text" readonly name='ENHPT2OTS[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><input type="text" name='ENHPT2OTC[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row" style="border-bottom: 1px solid;">
                                        <div class="col-md-12 col-12">
                                            <h4>Total, ton CO2-e: <input type="text" name="ENECT1O2" value="<?php echo  $ENECT1O2; ?>" readonly></h4>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <br>
                                <br>
                                <div class="col-12">
                                    <div class="row" style="border-bottom: 1px solid;">
                                        <div class="col-md-10 col-12">
                                            <br>
                                            <h4 title="Her kan du indtaste forbrug af brændsler til opvarmning. 
                                                Til forbrug af naturgas er det muligt at specificere andelen af biogas i nettet. I 2020 er andelen af biogas i nettet på ca. 11%">Brændsler</h4>
                                        </div>
                                        <br />
                                        <div class="col-12  col-md-2">
                                            <br />
                                            <div class="row dflex flex-row" style="color:#27b939;">
                                                <p style="color:#27b939;">Tilføj række&nbsp; &nbsp;</p>
                                                <button type="button" class="btn btn-danger btn-circle btn3" onclick="adrow1('.tdbody2')">
                                                    <i class="fab fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <div class="row  table-responsive-md">
                                    <div class="col-md-12 table-responsive-md">
                                        <table class="table addtable1 " id="tab_logic">
                                            <thead>
                                                <tr class="trset">
                                                    <th style="text-align: start;" scope="col">Beskrivelse</th>
                                                    <th style="text-align: start;" scope="col">Brændselstype</th>
                                                    <th style="text-align: start;" scope="col" title="Her kan du indtaste andele af biogas i dit gasforbrug såfremt du kender den specifikke andel. Dette er kun muligt hvis der vælges brændselstypen Naturgas (X% biogas). Angives der ikke en specifik andel er andelen sat til 0%. Brændselstypen Naturgas indeholder 11% biogas. ">Andel af biogas (%)</th>
                                                    <th style="text-align: start;" scope="col">Mængde</th>
                                                    <th style="text-align: start;" scope="col">Enhed</th>
                                                    <th style="text-align: start;" scope="col">Scope 1</th>
                                                    <th style="text-align: start;" scope="col">Scope 2</th>
                                                    <th style="text-align: start;" scope="col" title="Scope 3 indeholder udledninger i forbindelse med distributions- og transmissionstab samt udledningen forbundet med udvinding af brændsler, fx kul.">Scope 3</th>
                                                    <th style="text-align: start;" scope="col">Udenfor scope</th>
                                                    <th style="text-align: start;" scope="col">Bemærkning</th>
                                                </tr>
                                            </thead>
                                            <tbody class="stytb tdbody2">
                                                <?php if (isset($_SESSION['ENHPT3DE'])) {
                                                    for ($i = 0; $i < count($ENHPT3DE); $i++) { ?>
                                                        <tr class="row1">
                                                            <td><input type="text" name='ENHPT3DE[]' value="<?php echo $ENHPT3DE[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                            <td><select class="" onchange="cal21()" name='ENHPT3FT[]' style="height: 42px;max-width: 100% !important; width: 100%;">
                                                                    <option value="<?php echo $ENHPT3FT[$i]; ?>"><?php echo $ENHPT3FT[$i]; ?></option>
                                                                    <option value="Naturgas">Naturgas</option>
                                                                    <option value="Biogas">Biogas</option>
                                                                    <option value="Naturgas (X% biogas)">Naturgas (X% biogas)</option>
                                                                    <option value="Fyringsolie">Fyringsolie</option>
                                                                </select></td>
                                                            <td> <input type="text" onchange="cal21()" value="<?php echo $ENHPT3FTPB[$i]; ?>" name='ENHPT3FTPB[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>

                                                            <td><input type="text" onchange="cal21()" value="<?php echo $ENHPT3Q[$i]; ?>" name='ENHPT3Q[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                            <td><select class="" onchange="cal21()" name='ENHPT3UN[]' style="height: 42px;max-width: 100% !important; width: 100%;">
                                                                    <option value="<?php echo $ENHPT3UN[$i]; ?>"><?php echo $ENHPT3UN[$i]; ?></option>
                                                                    <option value="Nm3">Nm3</option>
                                                                    <option value="L">L</option>
                                                                </select></td>
                                                            <td><input type="text" readonly name='ENHPT3S1[]' value="<?php echo $Brændslerscope1[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                            <td><input type="text" readonly name='ENHPT3S2[]' value="<?php echo $Brændslerscope2[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                            <td><input type="text" readonly name='ENHPT3S3[]' value="<?php echo $Brændslerscope3[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                            <td><input type="text" readonly name='ENHPT3OTS[]' value="<?php echo $Brændsleroutside[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                            <td> <input type="text" name='ENHPT3OTC[]' value="<?php echo $ENHPT3OTC[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        </tr>

                                                    <?php }
                                                } else { ?>


                                                    <tr class="row1">
                                                        <td><input type="text" name='ENHPT3DE[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><select class="" onchange="cal21()" name='ENHPT3FT[]' style="height: 42px;max-width: 100% !important; width: 100%;">
                                                                <option value="Naturgas">Naturgas</option>
                                                                <option value="Biogas">Biogas</option>
                                                                <option value="Naturgas (X% biogas)">Naturgas (X% biogas)</option>
                                                                <option value="Fyringsolie">Fyringsolie</option>
                                                            </select></td>
                                                        <td> <input type="text" onchange="cal21()" name='ENHPT3FTPB[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>

                                                        <td><input type="text" onchange="cal21()" name='ENHPT3Q[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><select class="" onchange="cal21()" name='ENHPT3UN[]' style="height: 42px;max-width: 100% !important; width: 100%;">
                                                                <option value="Nm3">Nm3</option>
                                                                <option value="L">L</option>
                                                            </select></td>
                                                        <td><input type="text" readonly name='ENHPT3S1[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><input type="text" readonly name='ENHPT3S2[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><input type="text" readonly name='ENHPT3S3[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><input type="text" readonly name='ENHPT3OTS[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td> <input type="text" name='ENHPT3OTC[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                    </tr>
                                                    <tr class="row1">
                                                        <td><input type="text" name='ENHPT3DE[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><select class="" onchange="cal21()" name='ENHPT3FT[]' style=" height: 42px;max-width: 100% !important; width: 100%;">
                                                                <option value="Naturgas">Naturgas</option>
                                                                <option value="Biogas">Biogas</option>
                                                                <option value="Naturgas(X% biogas)">Naturgas (X% biogas)</option>
                                                                <option value="Fyringsolie">Fyringsolie</option>
                                                            </select></td>
                                                        <td> <input type="text" onchange="cal21()" name='ENHPT3FTPB[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>

                                                        <td><input type="text" onchange="cal21()" name='ENHPT3Q[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><select class="" onchange="cal21()" name='ENHPT3UN[]' style=" height: 42px;max-width: 100% !important; width: 100%;">
                                                                <option value="Nm3">Nm3</option>
                                                                <option value="L">L</option>
                                                            </select></td>
                                                        <td><input type="text" readonly name='ENHPT3S1[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><input type="text" readonly name='ENHPT3S2[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><input type="text" readonly name='ENHPT3S3[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><input type="text" readonly name='ENHPT3OTS[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td> <input type="text" name='ENHPT3OTC[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                    </tr>
                                                    <tr class="row1">
                                                        <td><input type="text" name='ENHPT3DE[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><select class="" onchange="cal21()" name='ENHPT3FT[]' style="height: 42px;max-width: 100% !important; width: 100%;">
                                                                <option value="Naturgas">Naturgas</option>
                                                                <option value="Biogas">Biogas</option>
                                                                <option value="Naturgas(X% biogas)">Naturgas (X% biogas)</option>
                                                                <option value="Fyringsolie">Fyringsolie</option>
                                                            </select></td>
                                                        <td> <input type="text" onchange="cal21()" name='ENHPT3FTPB[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>

                                                        <td><input type="text" onchange="cal21()" name='ENHPT3Q[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><select class="" onchange="cal21()" name='ENHPT3UN[]' style="height: 42px;max-width: 100% !important; width: 100%;">
                                                                <option value="Nm3">Nm3</option>
                                                                <option value="L">L</option>
                                                            </select></td>
                                                        <td><input type="text" readonly name='ENHPT3S1[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><input type="text" readonly name='ENHPT3S2[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><input type="text" readonly name='ENHPT3S3[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td><input type="text" readonly name='ENHPT3OTS[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                        <td> <input type="text" name='ENHPT3OTC[]' style="max-width: 100% !important; width: 100%;" class="form-control" /></td>
                                                    </tr>
                                                <?php } ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row" style="border-bottom: 1px solid;">
                                        <div class="col-md-12 col-12">
                                            <!-- <br> -->
                                            <h4>Total, ton CO2-e: <input type="text" name="ENECT3O3" value="<?php echo $ENECT3O3; ?>" readonly /></h4>
                                        </div>
                                    </div>
                                    <br>
                                </div>

                                <!-- process discharge  -->
                                <div class="col-12">
                                    <div class="row head3">
                                        <div class="col-md-3">
                                            <h3 title="Her kan du indtaste procesudledninger og flygtige udledninger. Procesudledninger af drivhusgasser stammer fra en række kemiske reaktioner i industrielle processer. Denne er kun relevant for en mindre gruppe af virksomheder.">Procesudledning</h3>
                                        </div>
                                        <div class="col-md-4">
                                            <h3 style="white-space: nowrap;">Samlet udledning: </h3>
                                        </div>
                                        <div class="col-md-2">
                                            <h3 id="table4"><?php echo number_format(floatval($ENPDT4O4), 1); ?></h3>
                                        </div>
                                        <div class="col-md-3">
                                            <h3 style="white-space: nowrap;">Ton CO2-e</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row" style="border-bottom: 1px solid;">
                                        <div class="col-md-10 col-12">
                                            <br>
                                            <h4>Procesudledning</h4>
                                        </div>
                                        <br>
                                        <div class="col-12  col-md-2">
                                            <br>
                                            <div class="row dflex flex-row" style="color:#27b939;">
                                                <p style="color:#27b939;">Tilføj række
                                                    &nbsp; &nbsp;</p>
                                                <button type="button" class="btn btn-danger btn-circle btn3" onclick="adrow1('.tbody4')">
                                                    <i class="fab fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <div class="col-md-12 table-responsive-md">
                                    <table class="table addtable1" id="tab_logic">
                                        <thead>
                                            <tr class="trset">
                                                <th style="text-align: start;" scope="col">Beskrivelse</th>
                                                <th style="text-align: start;" scope="col">Drivhusgas</th>
                                                <th style="text-align: start;" scope="col">Mængde</th>
                                                <th style="text-align: start;" scope="col">Enhed</th>
                                                <th style="text-align: start;" scope="col">Scope 1</th>
                                                <th style="text-align: start;" scope="col">Scope 2</th>
                                                <th style="text-align: start;" scope="col" title="Scope 3 indeholder udledninger i forbindelse med distributions- og transmissionstab samt udledningen forbundet med udvinding af brændsler, fx kul.">Scope 3</th>
                                                <th style="text-align: start;" scope="col">Udenfor scope</th>
                                                <th style="text-align: start;" scope="col">Bemærkning</th>
                                            </tr>
                                        </thead>
                                        <tbody class="stytb tbody4">
                                            <?php if (isset($_SESSION['ENPDT4DE'])) {
                                                for ($i = 0; $i < count($ENPDT4DE); $i++) { ?>
                                                    <tr class="row1">
                                                        <td><input type="text" name="ENPDT4DE[]" value="<?php echo $ENPDT4DE[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><select class="" onchange="cal4()" name="ENPDT4GG[]" style="height: 42px;max-width: 100% !important; width: 100%;">
                                                                <option value="<?php echo $ENPDT4GG[$i]; ?>"><?php echo $data1[$ENPDT4GG[$i]]; ?></option>
                                                                <option value="1">CO2</option>
                                                                <option value="28">CH4</option>
                                                                <option value="265">N20</option>
                                                                <option value="12400">HFC-23 (CHF3)</option>
                                                                <option value="677">HFC-32 (CH2F2)</option>
                                                                <option value="116">HFC-41 (CH3F)</option>
                                                                <option value="1650">HFC-43-10mee (C5H2F10)</option>
                                                                <option value="3170">HFC-125 (C2HF5)</option>
                                                                <option value="1120">HFC-134 (C2H2F4)</option>
                                                                <option value="1300">HFC-134a (C2H2F4)</option>
                                                                <option value="138">HFC-152a (C2H4F2)</option>
                                                                <option value="328">HFC-143 (C2H3F3)</option>
                                                                <option value="4800">HFC-143a (C2H3F3)</option>
                                                                <option value="3350">HFC-227ea (C3HF7)</option>
                                                                <option value="8060">HFC-236fa (C3H2F6)</option>
                                                                <option value="716">HFC-245ca (C3H3F5)</option>
                                                                <option value="6630">PFC-14 (CF4)</option>
                                                                <option value="11100">PFC-116 (C2F6)</option>
                                                                <option value="8900">PFC-218 (C3F8)</option>
                                                                <option value="9200">PFC-31-10 (C4F10)</option>
                                                                <option value="9540">PFC-318 (c-C4F8)</option>
                                                                <option value="8550">PFC-41-12 (C5F12)</option>
                                                                <option value="7910">PFC-51-14 (C6F14)</option>
                                                                <option value="23500">SF6</option>
                                                                <option value="16100">NF3</option>
                                                            </select></td>
                                                        <td> <input type="text" onchange="cal4()" name="ENPDT4Q[]" value="<?php echo $ENPDT4Q[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><select class="" onchange="cal4()" name="ENPDT4UN[]" style="height: 42px;max-width: 100% !important; width: 100%;">

                                                                <option value="KG">KG</option>
                                                            </select></td>
                                                        <td><input type="text" readonly name="ENPDT4SC1[]" value="<?php echo $Procesudledningscope1[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><input type="text" readonly name="ENPDT4SC2[]" value="<?php echo $Procesudledningscope2[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><input type="text" readonly name="ENPDT4SC3[]" value="<?php echo $Procesudledningscope3[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><input type="text" readonly name="ENPDT4OTS[]" value="<?php echo $Procesudledningoutside[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><input type="text" name="ENPDT4OTC[]" value="<?php echo $ENPDT4OTC[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    </tr><?php
                                                        }
                                                    } else { ?>
                                                <tr class="row1">
                                                    <td><input type="text" name="ENPDT4DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal4()" name="ENPDT4GG[]" style="height: 42px;max-width: 100% !important; width: 100%;">
                                                            <option value="1">CO2</option>
                                                            <option value="28">CH4</option>
                                                            <option value="265">N20</option>
                                                            <option value="12400">HFC-23 (CHF3)</option>
                                                            <option value="677">HFC-32 (CH2F2)</option>
                                                            <option value="116">HFC-41 (CH3F)</option>
                                                            <option value="1650">HFC-43-10mee (C5H2F10)</option>
                                                            <option value="3170">HFC-125 (C2HF5)</option>
                                                            <option value="1120">HFC-134 (C2H2F4)</option>
                                                            <option value="1300">HFC-134a (C2H2F4)</option>
                                                            <option value="138">HFC-152a (C2H4F2)</option>
                                                            <option value="328">HFC-143 (C2H3F3)</option>
                                                            <option value="4800">HFC-143a (C2H3F3)</option>
                                                            <option value="3350">HFC-227ea (C3HF7)</option>
                                                            <option value="8060">HFC-236fa (C3H2F6)</option>
                                                            <option value="716">HFC-245ca (C3H3F5)</option>
                                                            <option value="6630">PFC-14 (CF4)</option>
                                                            <option value="11100">PFC-116 (C2F6)</option>
                                                            <option value="8900">PFC-218 (C3F8)</option>
                                                            <option value="9200">PFC-31-10 (C4F10)</option>
                                                            <option value="9540">PFC-318 (c-C4F8)</option>
                                                            <option value="8550">PFC-41-12 (C5F12)</option>
                                                            <option value="7910">PFC-51-14 (C6F14)</option>
                                                            <option value="23500">SF6</option>
                                                            <option value="16100">NF3</option>
                                                        </select></td>
                                                    <td> <input type="text" onchange="cal4()" name="ENPDT4Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal4()" name="ENPDT4UN[]" style="height: 42px;max-width: 100% !important; width: 100%;">

                                                            <option value="KG">KG</option>
                                                        </select></td>
                                                    <td><input type="text" readonly name="ENPDT4SC1[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="ENPDT4SC2[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="ENPDT4SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="ENPDT4OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="ENPDT4OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>
                                                <tr class="row1">
                                                    <td><input type="text" name="ENPDT4DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal4()" name="ENPDT4GG[]" style="height: 42px;max-width: 100% !important; width: 100%;">
                                                            <option value="1">CO2</option>
                                                            <option value="28">CH4</option>
                                                            <option value="265">N20</option>
                                                            <option value="12400">HFC-23 (CHF3)</option>
                                                            <option value="677">HFC-32 (CH2F2)</option>
                                                            <option value="116">HFC-41 (CH3F)</option>
                                                            <option value="1650">HFC-43-10mee (C5H2F10)</option>
                                                            <option value="3170">HFC-125 (C2HF5)</option>
                                                            <option value="1120">HFC-134 (C2H2F4)</option>
                                                            <option value="1300">HFC-134a (C2H2F4)</option>
                                                            <option value="138">HFC-152a (C2H4F2)</option>
                                                            <option value="328">HFC-143 (C2H3F3)</option>
                                                            <option value="4800">HFC-143a (C2H3F3)</option>
                                                            <option value="3350">HFC-227ea (C3HF7)</option>
                                                            <option value="8060">HFC-236fa (C3H2F6)</option>
                                                            <option value="716">HFC-245ca (C3H3F5)</option>
                                                            <option value="6630">PFC-14 (CF4)</option>
                                                            <option value="11100">PFC-116 (C2F6)</option>
                                                            <option value="8900">PFC-218 (C3F8)</option>
                                                            <option value="9200">PFC-31-10 (C4F10)</option>
                                                            <option value="9540">PFC-318 (c-C4F8)</option>
                                                            <option value="8550">PFC-41-12 (C5F12)</option>
                                                            <option value="7910">PFC-51-14 (C6F14)</option>
                                                            <option value="23500">SF6</option>
                                                            <option value="16100">NF3</option>
                                                        </select></td>
                                                    <td> <input type="text" onchange="cal4()" name="ENPDT4Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal4()" name="ENPDT4UN[]" style="height: 42px;max-width: 100% !important; width: 100%;">


                                                            <option value="KG">KG</option>
                                                        </select></td>
                                                    <td><input type="text" readonly name="ENPDT4SC1[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="ENPDT4SC2[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="ENPDT4SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="ENPDT4OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="ENPDT4OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>
                                                <tr class="row1">
                                                    <td><input type="text" name="ENPDT4DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal4()" name="ENPDT4GG[]" style="height:42px; max-width: 100% !important; width: 100%;">
                                                            <option value="1">CO2</option>
                                                            <option value="28">CH4</option>
                                                            <option value="265">N20</option>
                                                            <option value="12400">HFC-23 (CHF3)</option>
                                                            <option value="677">HFC-32 (CH2F2)</option>
                                                            <option value="116">HFC-41 (CH3F)</option>
                                                            <option value="1650">HFC-43-10mee (C5H2F10)</option>
                                                            <option value="3170">HFC-125 (C2HF5)</option>
                                                            <option value="1120">HFC-134 (C2H2F4)</option>
                                                            <option value="1300">HFC-134a (C2H2F4)</option>
                                                            <option value="138">HFC-152a (C2H4F2)</option>
                                                            <option value="328">HFC-143 (C2H3F3)</option>
                                                            <option value="4800">HFC-143a (C2H3F3)</option>
                                                            <option value="3350">HFC-227ea (C3HF7)</option>
                                                            <option value="8060">HFC-236fa (C3H2F6)</option>
                                                            <option value="716">HFC-245ca (C3H3F5)</option>
                                                            <option value="6630">PFC-14 (CF4)</option>
                                                            <option value="11100">PFC-116 (C2F6)</option>
                                                            <option value="8900">PFC-218 (C3F8)</option>
                                                            <option value="9200">PFC-31-10 (C4F10)</option>
                                                            <option value="9540">PFC-318 (c-C4F8)</option>
                                                            <option value="8550">PFC-41-12 (C5F12)</option>
                                                            <option value="7910">PFC-51-14 (C6F14)</option>
                                                            <option value="23500">SF6</option>
                                                            <option value="16100">NF3</option>
                                                        </select></td>
                                                    <td> <input type="text" onchange="cal4()" name="ENPDT4Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal4()" name="ENPDT4UN[]" style="height: 42px;max-width: 100% !important; width: 100%;">

                                                            <option value="KG">KG</option>
                                                        </select></td>
                                                    <td><input type="text" readonly name="ENPDT4SC1[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="ENPDT4SC2[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="ENPDT4SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="ENPDT4OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="ENPDT4OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>
                                            <?php } ?>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-12">
                                    <div class="row" style="border-bottom: 1px solid;">
                                        <div class="col-md-12 col-12">
                                            <br>
                                            <h4>Total, ton CO2-e: <input type="text" name="ENPDT4O4" value="<?php echo $ENPDT4O4; ?>" readonly></h4>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <!-- ! end process -->
                                <!-- Andet -->
                                <div class="col-12">
                                    <div class="row head3">
                                        <div class="col-md-3">
                                            <h3 title="Under Andet kan du indtaste forbrug, som ikke er blevet fanget af de ovenstående tabeller i relation til Energi & Processer eller du kan tilføje egne og mere specifikke beregninger. ">Andet</h3>
                                        </div>
                                        <div class="col-md-4">
                                            <h3 style="white-space: nowrap;">Samlet udledning: </h3>
                                        </div>
                                        <div class="col-md-2">
                                            <h3 id="table5"><?php echo number_format(floatval($ENAFT5O5), 1); ?></h3>
                                        </div>
                                        <div class="col-md-3">
                                            <h3 style="white-space: nowrap;">Ton CO2-e</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row" style="border-bottom: 1px solid;">
                                        <div class="col-md-10 col-12">
                                            <br>
                                            <h4>Andet forbrug</h4>
                                        </div>
                                        <br>
                                        <div class="col-12  col-md-2">
                                            <br>
                                            <div class="row dflex flex-row" style="color:#27b939;">
                                                <p style="color:#27b939;">Tilføj række
                                                    &nbsp; &nbsp;</p>
                                                <button type="button" class="btn btn-danger btn-circle btn3" onclick="adrow1('.tbody5')">
                                                    <i class="fab fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <div class="col-md-12 table-responsive-md">
                                    <table class="table addtable1" id="tab_logic">
                                        <thead>
                                            <tr class="trset">
                                                <th style="text-align: start;" scope="col">Beskrivelse</th>
                                                <th style="text-align: start;" scope="col">Mængde</th>
                                                <th style="text-align: start;" scope="col">Enhed</th>
                                                <th style="text-align: start;" scope="col">Emissionsfaktor</th>
                                                <th style="text-align: start;" scope="col">Scope 1</th>
                                                <th style="text-align: start;" scope="col">Scope 2</th>
                                                <th style="text-align: start;" scope="col">Scope 3</th>
                                                <th style="text-align: start;" scope="col">Udenfor scope</th>
                                                <th style="text-align: start;" scope="col">Bemærkning</th>
                                            </tr>
                                        </thead>
                                        <tbody class="stytb tbody5">
                                            <?php if (isset($_SESSION['ENAFT5DE'])) {
                                                for ($i = 0; $i < count($ENAFT5DE); $i++) { ?>
                                                    <tr class="row1">
                                                        <td><input type="text" name="ENAFT5DE[]" value="<?php echo $ENAFT5DE[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><input type="text" name="ENAFT5Q[]" value="<?php echo $ENAFT5Q[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><input type="text" name="ENAFT5UN[]" value="<?php echo $ENAFT5UN[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><input type="text" name="ENAFT5EF[]" value="<?php echo $ENAFT5EF[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><input type="text" onchange="totals3('ENAFT5SC1[]','ENAFT5SC2[]','ENAFT5SC3[]','ENAFT5OTS[]','ENAFT5O5');addtotalheader(['ENAFT5O5',],'table5')" name="ENAFT5SC1[]" value="<?php echo $ENAFT5SC1[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><input type="text" onchange="totals3('ENAFT5SC1[]','ENAFT5SC2[]','ENAFT5SC3[]','ENAFT5OTS[]','ENAFT5O5');addtotalheader(['ENAFT5O5',],'table5')" name="ENAFT5SC2[]" value="<?php echo $ENAFT5SC2[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><input type="text" onchange="totals3('ENAFT5SC1[]','ENAFT5SC2[]','ENAFT5SC3[]','ENAFT5OTS[]','ENAFT5O5');addtotalheader(['ENAFT5O5',],'table5')" name="ENAFT5SC3[]" value="<?php echo $ENAFT5SC3[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><input type="text" onchange="totals3('ENAFT5SC1[]','ENAFT5SC2[]','ENAFT5SC3[]','ENAFT5OTS[]','ENAFT5O5');addtotalheader(['ENAFT5O5',],'table5')" name="ENAFT5OTS[]" value="<?php echo $ENAFT5OTC[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><input type="text" name="ENAFT5OTC[]" value="<?php echo $ENAFT5OTC[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    </tr>
                                                <?php }
                                            } else { ?>
                                                <tr class="row1">
                                                    <td><input type="text" name="ENAFT5DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="ENAFT5Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="ENAFT5UN[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="ENAFT5EF[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" onchange="totals3('ENAFT5SC1[]','ENAFT5SC2[]','ENAFT5SC3[]','ENAFT5OTS[]','ENAFT5O5');addtotalheader(['ENAFT5O5',],'table5')" name="ENAFT5SC1[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" onchange="totals3('ENAFT5SC1[]','ENAFT5SC2[]','ENAFT5SC3[]','ENAFT5OTS[]','ENAFT5O5');addtotalheader(['ENAFT5O5',],'table5')" name="ENAFT5SC2[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" onchange="totals3('ENAFT5SC1[]','ENAFT5SC2[]','ENAFT5SC3[]','ENAFT5OTS[]','ENAFT5O5');addtotalheader(['ENAFT5O5',],'table5')" name="ENAFT5SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" onchange="totals3('ENAFT5SC1[]','ENAFT5SC2[]','ENAFT5SC3[]','ENAFT5OTS[]','ENAFT5O5');addtotalheader(['ENAFT5O5',],'table5')" name="ENAFT5OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="ENAFT5OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>
                                                <tr class="row1">
                                                    <td><input type="text" name="ENAFT5DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="ENAFT5Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="ENAFT5UN[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="ENAFT5EF[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" onchange="totals3('ENAFT5SC1[]','ENAFT5SC2[]','ENAFT5SC3[]','ENAFT5OTS[]','ENAFT5O5');addtotalheader(['ENAFT5O5',],'table5')" name="ENAFT5SC1[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" onchange="totals3('ENAFT5SC1[]','ENAFT5SC2[]','ENAFT5SC3[]','ENAFT5OTS[]','ENAFT5O5');addtotalheader(['ENAFT5O5',],'table5')" name="ENAFT5SC2[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" onchange="totals3('ENAFT5SC1[]','ENAFT5SC2[]','ENAFT5SC3[]','ENAFT5OTS[]','ENAFT5O5');addtotalheader(['ENAFT5O5',],'table5')" name="ENAFT5SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" onchange="totals3('ENAFT5SC1[]','ENAFT5SC2[]','ENAFT5SC3[]','ENAFT5OTS[]','ENAFT5O5');addtotalheader(['ENAFT5O5',],'table5')" name="ENAFT5OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="ENAFT5OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>
                                                <tr class="row1">
                                                    <td><input type="text" name="ENAFT5DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="ENAFT5Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="ENAFT5UN[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="ENAFT5EF[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" onchange="totals3('ENAFT5SC1[]','ENAFT5SC2[]','ENAFT5SC3[]','ENAFT5OTS[]','ENAFT5O5');addtotalheader(['ENAFT5O5',],'table5')" name="ENAFT5SC1[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" onchange="totals3('ENAFT5SC1[]','ENAFT5SC2[]','ENAFT5SC3[]','ENAFT5OTS[]','ENAFT5O5');addtotalheader(['ENAFT5O5',],'table5')" name="ENAFT5SC2[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" onchange="totals3('ENAFT5SC1[]','ENAFT5SC2[]','ENAFT5SC3[]','ENAFT5OTS[]','ENAFT5O5');addtotalheader(['ENAFT5O5',],'table5')" name="ENAFT5SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" onchange="totals3('ENAFT5SC1[]','ENAFT5SC2[]','ENAFT5SC3[]','ENAFT5OTS[]','ENAFT5O5');addtotalheader(['ENAFT5O5',],'table5')" b name="ENAFT5OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="ENAFT5OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>
                                            <?php } ?>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-12">
                                    <div class="row" style="border-bottom: 1px solid;">
                                        <div class="col-md-12 col-12">
                                            <h4>Total, ton CO2-e: <input type="text" readonly name="ENAFT5O5" value="<?php echo $ENAFT5O5; ?>"></h4>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <!-- end  -->
                            </div>
                        </div>


                        <!-- end electricity -->
                        <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        <!-- indkob -->

                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">

                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 3 - 6</h2>
                                </div>
                            </div>
                            <div class="col-12">
                                <br>
                                <h2 class="fs-title logr">Indkøb</h2>
                                <h5 class="fs-title short">Her kan du indtaste indkøb af materialer og serviceydelser. Indkøb opdeles i primære indkøb af råvarer til produktion, og sekundære indkøb af hjælpematerialer og serviceydelser til drift. For alle typer af indkøb er det muligt at indtaste i enten fysiske eller monetære enheder.

                                    I fanen Standardkontoplan kan du finde hjælp til placering af indkøb i de rette kategorier i værktøjet med udgangspunkt i en standardkontoplan.

                                    Udledninger i forbindelse med indkøb omhandler udelukkende indirekte udledninger, scope 3

                                    <br>
                                    <br>
                                    VIGTIGT!<br>
                                    Det samme indkøb må IKKE indtastes i både fysiske og monetære enheder, da det vil medføre dobbelttælling. Fysiske enheder vil give et mere præcist resultat end indberetning i monetære enheder.
                                    Alle indkøb skal indtastes eksklusiv moms.
                                </h5>
                                <br>
                                <h4>Tryk på "+" i venstre side for at folde rækkerne ud. </h4>
                                <br>
                                <br>

                            </div>
                            <div class="col-12">
                                <div class="row head3">
                                    <div class="col-md-5">
                                        <h3 title="Her indtastes primære indkøb. Primære indkøb omfatter indkøb af materialer, produkter og services m.v. til produktionen. ">
                                            Primære indkøb af råvarer til produktion
                                        </h3>
                                    </div>
                                    <div class="col-md-3">
                                        <h3 style="white-space: nowrap; ">Samlet udledning: </h3>
                                    </div>
                                    <div class="col-md-1">
                                        <h3 id="table6"><?php echo number_format(floatval($PPRT1O1) +floatval( $PPRT2O2) +floatval( $PPRT3O3) + floatval($PPRT4O4) + floatval($PPRT5O5) + floatval($PPRT6O6), 1); ?></h3>
                                    </div>
                                    <div class="col-md-3">
                                        <h3 style="white-space: nowrap; ">Ton CO2-e</h3>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="col-12">
                                <div class="row head3" style="background-color: #c0c5cb; color: black;">
                                    <div class="col-md-5">
                                        <h3 title="Indkøb af jomfruelige materialer kan opgøres i både fysiske enheder og monetære enheder (beløb i DKK). Det er vigtigt, at det samme indkøb ikke indtastes begge steder, idet det vil give en dobbelttælling.
                                            Indberetning i fysiske enheder giver et mere præcist resultat end ved monetære enheder.Indkøb af genanvendte materialer indtastes i fysiske enheder.">Indkøb af materialer
                                        </h3>
                                    </div>
                                    <div class="col-md-3">
                                        <h3 style="white-space: nowrap; ">Samlet udledning: </h3>
                                    </div>
                                    <div class="col-md-1">
                                        <h3 id="subtb1"> <?php echo number_format(floatval($PPRT1O1) + floatval($PPRT2O2), 1); ?></h3>
                                    </div>
                                    <div class="col-md-3">
                                        <h3 style="white-space: nowrap; ">Ton CO2-e</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-10 col-12">
                                        <br>
                                        <h4>Indkøb af materialer i fysiske enheder
                                        </h4>
                                    </div>
                                    <br>
                                    <div class="col-12  col-md-2">
                                        <br>
                                        <div class="row dflex flex-row" style="color:#27b939;">
                                            <p style="color:#27b939;">Tilføj række&nbsp; &nbsp;</p>
                                            <button type="button" class="btn btn-danger btn-circle btn3" onclick="adrow1('.adtable6')">
                                                <i class="fab fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-12 table-responsive-md">
                                <table class="table addtable1" id="tab_logic">
                                    <thead>
                                        <tr class="trset">
                                            <th style="text-align: start;" scope="col">Beskrivelse</th>
                                            <th style="text-align: start;" scope="col">Materialegruppe</th>
                                            <th style="text-align: start;" scope="col">Mængde</th>
                                            <th style="text-align: start;" scope="col">Enhed</th>
                                            <th style="text-align: start;" scope="col">Scope 3</th>
                                            <th style="text-align: start;" scope="col">Bemærkninger </th>
                                        </tr>
                                    </thead>
                                    <tbody class="stytb adtable6">
                                        <?php if (isset($_SESSION['PPRT1DE'])) {
                                            for ($i = 0; $i < count($PPRT1DE); $i++) { ?>
                                                <tr class="row1">
                                                    <td><input type="text" name="PPRT1DE[]" value="<?php echo $PPRT1DE[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal5('PPRT1MG[]','PPRT1Q[]','PPRT1UN[]','PPRT1SC3[]','PPRT1O1','PPRT2O2','subtb1','subtb2','subtb3','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT1MG[]" style="height: 42px;max-width: 100% !important; width: 100%;">
                                                            <option value="<?php echo $PPRT1MG[$i]; ?>"><?php echo $data2[$PPRT1MG[$i]]; ?></option>
                                                            <option value="4.23,4232.72">Stål og jern (nyt)</option>
                                                            <option value="8.43,8429.08">Aluminium (genanvendt)</option>
                                                            <option value="13.0,13079.50">Aluminium (nyt)</option>
                                                            <option value="12749.13,12749127">Andre plast (nyt)</option>
                                                            <option value="3.13,3133.15">Beton</option>
                                                            <option value="5.68,5684.63">Bly, zink og tin (genanvendt)</option>
                                                            <option value="10.10,10102.49">Bly, zink og tin (nyt)</option>
                                                            <option value="3.17,3170.59">Cement, kalk og gips</option>
                                                            <option value="2.69,2688.69">Glas (genanvendt)</option>
                                                            <option value="1.66,1660.03">Glas (nyt)</option>
                                                            <option value="1.00,1000.05">Ikke-jernholdige metaller (genanvendt)</option>
                                                            <option value="0.90,900.80">Ikke-jernholdige metaller (nyt)</option>
                                                            <option value="0.10,100.21">Kemikalier</option>
                                                            <option value="0.01,6.31">Keramisk</option>
                                                            <option value="0.29,293.89">Kobber (genanvendt)</option>
                                                            <option value="0.84,839.22">Kobber (nyt)</option>
                                                            <option value="13.99,13986.49">Mineraluld</option>
                                                            <option value="1.19,1193.34">Mursten</option>
                                                            <option value="2.78,2775.40">Papir og pap (genanvendt)</option>
                                                            <option value="0.74,734.94">Papir og pap (nyt)</option>
                                                            <option value="3.08,3084.74">Plast (genanvendt)</option>
                                                            <option value="9.62,9617.94">Plast: Nylon, PC (nyt)</option>
                                                            <option value="0.81,813.07">Sand og ler</option>
                                                            <option value="3.20,3202.95">Stål og jern (genanvendt)</option>
                                                            <option value="1.34,1344.05">Tekstil</option>
                                                            <option value="1.10,1096.31">Træ (genanvendt)</option>
                                                            <option value="1.36,1362.67">Træ (nyt)</option>
                                                            <option value="0.68,684.81">Ædelmetaller</option>
                                                        </select></td>
                                                    <td><input type="text" onchange="cal5('PPRT1MG[]','PPRT1Q[]','PPRT1UN[]','PPRT1SC3[]','PPRT1O1','PPRT2O2','subtb1','subtb2','subtb3','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT1Q[]" value="<?php echo $PPRT1Q[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal5('PPRT1MG[]','PPRT1Q[]','PPRT1UN[]','PPRT1SC3[]','PPRT1O1','PPRT2O2','subtb1','subtb2','subtb3','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT1UN[]" style="height: 42px;max-width: 100% !important; width: 100%;">
                                                            <option value="<?php echo $PPRT1UN[$i]; ?>"><?php echo $PPRT1UN[$i]; ?></option>
                                                            <option value="KG">KG</option>
                                                            <option value="TON">TON</option>
                                                        </select></td>
                                                    <td><input type="text" readonly name="PPRT1SC3[]" value="<?php echo $PPRT1SC3[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="PPRT1OTC[]" value="<?php echo $PPRT1OTC[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>


                                        <?php

                                            }
                                        } else{?>
                                        <tr class="row1">
                                            <td><input type="text" name="PPRT1DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            <td><select class="" onchange="cal5('PPRT1MG[]','PPRT1Q[]','PPRT1UN[]','PPRT1SC3[]','PPRT1O1','PPRT2O2','subtb1','subtb2','subtb3','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT1MG[]" style="height: 42px;max-width: 100% !important; width: 100%;">
                                                    <option value="4.23,4232.72">Stål og jern (nyt)</option>
                                                    <option value="8.43,8429.08">Aluminium (genanvendt)</option>
                                                    <option value="13.0,13079.50">Aluminium (nyt)</option>
                                                    <option value="12749.13,12749127">Andre plast (nyt)</option>
                                                    <option value="3.13,3133.15">Beton</option>
                                                    <option value="5.68,5684.63">Bly, zink og tin (genanvendt)</option>
                                                    <option value="10.10,10102.49">Bly, zink og tin (nyt)</option>
                                                    <option value="3.17,3170.59">Cement, kalk og gips</option>
                                                    <option value="2.69,2688.69">Glas (genanvendt)</option>
                                                    <option value="1.66,1660.03">Glas (nyt)</option>
                                                    <option value="1.00,1000.05">Ikke-jernholdige metaller (genanvendt)</option>
                                                    <option value="0.90,900.80">Ikke-jernholdige metaller (nyt)</option>
                                                    <option value="0.10,100.21">Kemikalier</option>
                                                    <option value="0.01,6.31">Keramisk</option>
                                                    <option value="0.29,293.89">Kobber (genanvendt)</option>
                                                    <option value="0.84,839.22">Kobber (nyt)</option>
                                                    <option value="13.99,13986.49">Mineraluld</option>
                                                    <option value="1.19,1193.34">Mursten</option>
                                                    <option value="2.78,2775.40">Papir og pap (genanvendt)</option>
                                                    <option value="0.74,734.94">Papir og pap (nyt)</option>
                                                    <option value="3.08,3084.74">Plast (genanvendt)</option>
                                                    <option value="9.62,9617.94">Plast: Nylon, PC (nyt)</option>
                                                    <option value="0.81,813.07">Sand og ler</option>
                                                    <option value="3.20,3202.95">Stål og jern (genanvendt)</option>
                                                    <option value="1.34,1344.05">Tekstil</option>
                                                    <option value="1.10,1096.31">Træ (genanvendt)</option>
                                                    <option value="1.36,1362.67">Træ (nyt)</option>
                                                    <option value="0.68,684.81">Ædelmetaller</option>
                                                </select></td>
                                            <td><input type="text" onchange="cal5('PPRT1MG[]','PPRT1Q[]','PPRT1UN[]','PPRT1SC3[]','PPRT1O1','PPRT2O2','subtb1','subtb2','subtb3','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT1Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            <td><select class="" onchange="cal5('PPRT1MG[]','PPRT1Q[]','PPRT1UN[]','PPRT1SC3[]','PPRT1O1','PPRT2O2','subtb1','subtb2','subtb3','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT1UN[]" style="height: 42px;max-width: 100% !important; width: 100%;">
                                                    <option value="KG">KG</option>
                                                    <option value="TON">TON</option>
                                                </select></td>
                                            <td><input type="text" readonly name="PPRT1SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            <td><input type="text" name="PPRT1OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                        </tr>
                                        <tr class="row1">
                                            <td><input type="text" name="PPRT1DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            <td><select class="" onchange="cal5('PPRT1MG[]','PPRT1Q[]','PPRT1UN[]','PPRT1SC3[]','PPRT1O1','PPRT2O2','subtb1','subtb2','subtb3','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT1MG[]" style="height: 42px;max-width: 100% !important; width: 100%;">
                                                    <option value="4.23,4232.72">Stål og jern (nyt)</option>
                                                    <option value="8.43,8429.08">Aluminium (genanvendt)</option>
                                                    <option value="13.0,13079.50">Aluminium (nyt)</option>
                                                    <option value="12749.13,12749127">Andre plast (nyt)</option>
                                                    <option value="3.13,3133.15">Beton</option>
                                                    <option value="5.68,5684.63">Bly, zink og tin (genanvendt)</option>
                                                    <option value="10.10,10102.49">Bly, zink og tin (nyt)</option>
                                                    <option value="3.17,3170.59">Cement, kalk og gips</option>
                                                    <option value="2.69,2688.69">Glas (genanvendt)</option>
                                                    <option value="1.66,1660.03">Glas (nyt)</option>
                                                    <option value="1.00,1000.05">Ikke-jernholdige metaller (genanvendt)</option>
                                                    <option value="0.90,900.80">Ikke-jernholdige metaller (nyt)</option>
                                                    <option value="0.10,100.21">Kemikalier</option>
                                                    <option value="0.01,6.31">Keramisk</option>
                                                    <option value="0.29,293.89">Kobber (genanvendt)</option>
                                                    <option value="0.84,839.22">Kobber (nyt)</option>
                                                    <option value="13.99,13986.49">Mineraluld</option>
                                                    <option value="1.19,1193.34">Mursten</option>
                                                    <option value="2.78,2775.40">Papir og pap (genanvendt)</option>
                                                    <option value="0.74,734.94">Papir og pap (nyt)</option>
                                                    <option value="3.08,3084.74">Plast (genanvendt)</option>
                                                    <option value="9.62,9617.94">Plast: Nylon, PC (nyt)</option>
                                                    <option value="0.81,813.07">Sand og ler</option>
                                                    <option value="3.20,3202.95">Stål og jern (genanvendt)</option>
                                                    <option value="1.34,1344.05">Tekstil</option>
                                                    <option value="1.10,1096.31">Træ (genanvendt)</option>
                                                    <option value="1.36,1362.67">Træ (nyt)</option>
                                                    <option value="0.68,684.81">Ædelmetaller</option>
                                                </select></td>
                                            <td><input type="text" onchange="cal5('PPRT1MG[]','PPRT1Q[]','PPRT1UN[]','PPRT1SC3[]','PPRT1O1','PPRT2O2','subtb1','subtb2','subtb3','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT1Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            <td><select class="" onchange="cal5('PPRT1MG[]','PPRT1Q[]','PPRT1UN[]','PPRT1SC3[]','PPRT1O1','PPRT2O2','subtb1','subtb2','subtb3','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT1UN[]" style="height: 42px;max-width: 100% !important; width: 100%;">
                                                    <option value="KG">KG</option>
                                                    <option value="TON">TON</option>
                                                </select></td>
                                            <td><input type="text" readonly name="PPRT1SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            <td><input type="text" name="PPRT1OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                        </tr>
                                        <tr class="row1">
                                            <td><input type="text" name="PPRT1DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            <td><select class="" onchange="cal5('PPRT1MG[]','PPRT1Q[]','PPRT1UN[]','PPRT1SC3[]','PPRT1O1','PPRT2O2','subtb1','subtb2','subtb3','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT1MG[]" style="height: 42px;max-width: 100% !important; width: 100%;">
                                                    <option value="4.23,4232.72">Stål og jern (nyt)</option>
                                                    <option value="8.43,8429.08">Aluminium (genanvendt)</option>
                                                    <option value="13.0,13079.50">Aluminium (nyt)</option>
                                                    <option value="12749.13,12749127">Andre plast (nyt)</option>
                                                    <option value="3.13,3133.15">Beton</option>
                                                    <option value="5.68,5684.63">Bly, zink og tin (genanvendt)</option>
                                                    <option value="10.10,10102.49">Bly, zink og tin (nyt)</option>
                                                    <option value="3.17,3170.59">Cement, kalk og gips</option>
                                                    <option value="2.69,2688.69">Glas (genanvendt)</option>
                                                    <option value="1.66,1660.03">Glas (nyt)</option>
                                                    <option value="1.00,1000.05">Ikke-jernholdige metaller (genanvendt)</option>
                                                    <option value="0.90,900.80">Ikke-jernholdige metaller (nyt)</option>
                                                    <option value="0.10,100.21">Kemikalier</option>
                                                    <option value="0.01,6.31">Keramisk</option>
                                                    <option value="0.29,293.89">Kobber (genanvendt)</option>
                                                    <option value="0.84,839.22">Kobber (nyt)</option>
                                                    <option value="13.99,13986.49">Mineraluld</option>
                                                    <option value="1.19,1193.34">Mursten</option>
                                                    <option value="2.78,2775.40">Papir og pap (genanvendt)</option>
                                                    <option value="0.74,734.94">Papir og pap (nyt)</option>
                                                    <option value="3.08,3084.74">Plast (genanvendt)</option>
                                                    <option value="9.62,9617.94">Plast: Nylon, PC (nyt)</option>
                                                    <option value="0.81,813.07">Sand og ler</option>
                                                    <option value="3.20,3202.95">Stål og jern (genanvendt)</option>
                                                    <option value="1.34,1344.05">Tekstil</option>
                                                    <option value="1.10,1096.31">Træ (genanvendt)</option>
                                                    <option value="1.36,1362.67">Træ (nyt)</option>
                                                    <option value="0.68,684.81">Ædelmetaller</option>
                                                </select></td>
                                            <td><input type="text" onchange="cal5('PPRT1MG[]','PPRT1Q[]','PPRT1UN[]','PPRT1SC3[]','PPRT1O1','PPRT2O2','subtb1','subtb2','subtb3','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT1Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            <td><select class="" onchange="cal5('PPRT1MG[]','PPRT1Q[]','PPRT1UN[]','PPRT1SC3[]','PPRT1O1','PPRT2O2','subtb1','subtb2','subtb3','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT1UN[]" style="height: 42px;max-width: 100% !important; width: 100%;">
                                                    <option value="KG">KG</option>
                                                    <option value="TON">TON</option>
                                                </select></td>
                                            <td><input type="text" readonly name="PPRT1SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            <td><input type="text" name="PPRT1OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>

                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-12 col-12">
                                        <!-- <br> -->
                                        <h4>Total, ton CO2-e: <input type="text" readonly name="PPRT1O1" value="<?php echo $PPRT1O1; ?>"></h4>
                                    </div>
                                </div>
                                <br>
                            </div>

                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-10 col-12">
                                        <br>
                                        <h4 title="Indkøb af produkter kan opgøres i både fysiske enheder og monetære enheder (beløb i DKK). Det er vigtigt, at det samme indkøb ikke indtastes begge steder, idet det vil give en dobbelttælling. 
                                            Indberetning i fysiske enheder giver et mere præcist resultat end ved monetære enheder.
                                            Indkøb af services og tjenesteydelser indtastes i monetære enheder.">Indkøb af materialer i monetære enheder (beløb i DKK)
                                        </h4>
                                    </div>
                                    <br>
                                    <div class="col-12  col-md-2">
                                        <br>
                                        <div class="row dflex flex-row" style="color:#27b939;">
                                            <p style="color:#27b939;">Tilføj række&nbsp; &nbsp;</p>
                                            <button type="button" class="btn btn-danger btn-circle btn3" onclick="adrow1('.adtable7')">
                                                <i class="fab fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-12 table-responsive-md">
                                <table class="table addtable1" id="tab_logic">
                                    <thead>
                                        <tr class="trset">
                                            <th style="text-align: start;" scope="col">Beskrivelse</th>
                                            <th style="text-align: start;" scope="col">Materialegruppe</th>
                                            <th style="text-align: start;" scope="col">Beløb (ekskl. moms) </th>
                                            <th style="text-align: start;" scope="col">Enhed</th>
                                            <th style="text-align: start;" scope="col">Scope 3</th>
                                            <th style="text-align: start;" scope="col">Bemærkninger </th>
                                        </tr>
                                    </thead>
                                    <tbody class="stytb adtable7">
                                        <?php if (isset($_SESSION['PPRT2DE'])) {
                                            for ($i = 0; $i < count($PPRT2DE); $i++) { ?>
                                                <tr class="row1">
                                                    <td><input type="text" name="PPRT2DE[]" value="<?php echo $PPRT2DE[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal6('PPRT2MG[]','PPRT2AE[]','PPRT2UN[]','PPRT2SC3[]','PPRT2O2','PPRT1O1','subtb1','subtb2','subtb3','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT2MG[]" style="height: 42px;max-width: 100% !important; width: 100%;">
                                                            <option value="<?php echo $PPRT2MG[$i]; ?>"><?php echo $data3[$PPRT2MG[$i]]; ?></option>
                                                            <option value="0.67">Stål og jern (nyt)</option>
                                                            <option value="0.07">Aluminium (genanvendt)</option>
                                                            <option value="0.20">Aluminium (nyt)</option>
                                                            <option value="0.15">Andre plast (nyt)</option>
                                                            <option value="0.01">Beton</option>
                                                            <option value="0.02">Bly, zink og tin (genanvendt)</option>
                                                            <option value="0.06">Bly, zink og tin (nyt)</option>
                                                            <option value="0.32">Cement, kalk og gips</option>
                                                            <option value="0.07">Glas (genanvendt)</option>
                                                            <option value="0.10">Glas (nyt)</option>
                                                            <option value="0.22">Ikke-jernholdige metaller (genanvendt)</option>
                                                            <option value="0.39">Ikke-jernholdige metaller (nyt)</option>
                                                            <option value="0.07">Kemikalier</option>
                                                            <option value="0.15">Keramisk</option>
                                                            <option value="0.03">Kobber (genanvendt)</option>
                                                            <option value="0.04">Kobber (nyt)</option>
                                                            <option value="0.13">Mineraluld</option>
                                                            <option value="0.10">Mursten</option>
                                                            <option value="0.02">Papir og pap (genanvendt)</option>
                                                            <option value="0.06">Papir og pap (nyt)</option>
                                                            <option value="0.06">Plast (genanvendt)</option>
                                                            <option value="0.48">Plast: Nylon, PC (nyt)</option>
                                                            <option value="0.03">Sand og ler</option>
                                                            <option value="0.12">Stål og jern (genanvendt)</option>
                                                            <option value="0.09">Tekstil</option>
                                                            <option value="0.11">Træ (genanvendt)</option>
                                                            <option value="0.12">Træ (nyt)</option>
                                                            <option value="0.04">Ædelmetaller</option>
                                                        </select></td>
                                                    <td><input type="text" onchange="cal6('PPRT2MG[]','PPRT2AE[]','PPRT2UN[]','PPRT2SC3[]','PPRT2O2','PPRT1O1','subtb1','subtb2','subtb3','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT2AE[]" value="<?php echo $PPRT2AE[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal6('PPRT2MG[]','PPRT2AE[]','PPRT2UN[]','PPRT2SC3[]','PPRT2O2','PPRT1O1','subtb1','subtb2','subtb3','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT2UN[]" style="height: 42px;max-width: 100% !important; width: 100%;">
                                                            <option value="DKK">DKK</option>
                                                        </select></td>
                                                    <td><input type="text" readonly name="PPRT2SC3[]" value="<?php echo $PPRT2SC3[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="PPRT2OTC[]" value="<?php echo $PPRT2OTC[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>

                                            <?php }
                                        } else { ?>
                                            <tr class="row1">
                                                <td><input type="text" name="PPRT2DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="cal6('PPRT2MG[]','PPRT2AE[]','PPRT2UN[]','PPRT2SC3[]','PPRT2O2','PPRT1O1','subtb1','subtb2','subtb3','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT2MG[]" style="height: 42px;max-width: 100% !important; width: 100%;">
                                                        <option value="0.67">Stål og jern (nyt)</option>
                                                        <option value="0.07">Aluminium (genanvendt)</option>
                                                        <option value="0.20">Aluminium (nyt)</option>
                                                        <option value="0.15">Andre plast (nyt)</option>
                                                        <option value="0.01">Beton</option>
                                                        <option value="0.02">Bly, zink og tin (genanvendt)</option>
                                                        <option value="0.06">Bly, zink og tin (nyt)</option>
                                                        <option value="0.32">Cement, kalk og gips</option>
                                                        <option value="0.07">Glas (genanvendt)</option>
                                                        <option value="0.10">Glas (nyt)</option>
                                                        <option value="0.22">Ikke-jernholdige metaller (genanvendt)</option>
                                                        <option value="0.39">Ikke-jernholdige metaller (nyt)</option>
                                                        <option value="0.07">Kemikalier</option>
                                                        <option value="0.15">Keramisk</option>
                                                        <option value="0.03">Kobber (genanvendt)</option>
                                                        <option value="0.04">Kobber (nyt)</option>
                                                        <option value="0.13">Mineraluld</option>
                                                        <option value="0.10">Mursten</option>
                                                        <option value="0.02">Papir og pap (genanvendt)</option>
                                                        <option value="0.06">Papir og pap (nyt)</option>
                                                        <option value="0.06">Plast (genanvendt)</option>
                                                        <option value="0.48">Plast: Nylon, PC (nyt)</option>
                                                        <option value="0.03">Sand og ler</option>
                                                        <option value="0.12">Stål og jern (genanvendt)</option>
                                                        <option value="0.09">Tekstil</option>
                                                        <option value="0.11">Træ (genanvendt)</option>
                                                        <option value="0.12">Træ (nyt)</option>
                                                        <option value="0.04">Ædelmetaller</option>
                                                    </select></td>
                                                <td><input type="text" onchange="cal6('PPRT2MG[]','PPRT2AE[]','PPRT2UN[]','PPRT2SC3[]','PPRT2O2','PPRT1O1','subtb1','subtb2','subtb3','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT2AE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="cal6('PPRT2MG[]','PPRT2AE[]','PPRT2UN[]','PPRT2SC3[]','PPRT2O2','PPRT1O1','subtb1','subtb2','subtb3','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT2UN[]" style="height: 42px;max-width: 100% !important; width: 100%;">
                                                        <option value="DKK">DKK</option>
                                                    </select></td>
                                                <td><input type="text" readonly name="PPRT2SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PPRT2OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            </tr>
                                            <tr class="row1">
                                                <td><input type="text" name="PPRT2DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="cal6('PPRT2MG[]','PPRT2AE[]','PPRT2UN[]','PPRT2SC3[]','PPRT2O2','PPRT1O1','subtb1','subtb2','subtb3','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT2MG[]" style="height: 42px;max-width: 100% !important; width: 100%;">
                                                        <option value="0.67">Stål og jern (nyt)</option>
                                                        <option value="0.07">Aluminium (genanvendt)</option>
                                                        <option value="0.20">Aluminium (nyt)</option>
                                                        <option value="0.15">Andre plast (nyt)</option>
                                                        <option value="0.01">Beton</option>
                                                        <option value="0.02">Bly, zink og tin (genanvendt)</option>
                                                        <option value="0.06">Bly, zink og tin (nyt)</option>
                                                        <option value="0.32">Cement, kalk og gips</option>
                                                        <option value="0.07">Glas (genanvendt)</option>
                                                        <option value="0.10">Glas (nyt)</option>
                                                        <option value="0.22">Ikke-jernholdige metaller (genanvendt)</option>
                                                        <option value="0.39">Ikke-jernholdige metaller (nyt)</option>
                                                        <option value="0.07">Kemikalier</option>
                                                        <option value="0.15">Keramisk</option>
                                                        <option value="0.03">Kobber (genanvendt)</option>
                                                        <option value="0.04">Kobber (nyt)</option>
                                                        <option value="0.13">Mineraluld</option>
                                                        <option value="0.10">Mursten</option>
                                                        <option value="0.02">Papir og pap (genanvendt)</option>
                                                        <option value="0.06">Papir og pap (nyt)</option>
                                                        <option value="0.06">Plast (genanvendt)</option>
                                                        <option value="0.48">Plast: Nylon, PC (nyt)</option>
                                                        <option value="0.03">Sand og ler</option>
                                                        <option value="0.12">Stål og jern (genanvendt)</option>
                                                        <option value="0.09">Tekstil</option>
                                                        <option value="0.11">Træ (genanvendt)</option>
                                                        <option value="0.12">Træ (nyt)</option>
                                                        <option value="0.04">Ædelmetaller</option>
                                                    </select></td>
                                                <td><input type="text" onchange="cal6('PPRT2MG[]','PPRT2AE[]','PPRT2UN[]','PPRT2SC3[]','PPRT2O2','PPRT1O1','subtb1','subtb2','subtb3','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT2AE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="cal6('PPRT2MG[]','PPRT2AE[]','PPRT2UN[]','PPRT2SC3[]','PPRT2O2','PPRT1O1','subtb1','subtb2','subtb3','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT2UN[]" style="height: 42px;max-width: 100% !important; width: 100%;">
                                                        <option value="DKK">DKK</option>
                                                    </select></td>
                                                <td><input type="text" readonly name="PPRT2SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PPRT2OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            </tr>
                                            <tr class="row1">
                                                <td><input type="text" name="PPRT2DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="cal6('PPRT2MG[]','PPRT2AE[]','PPRT2UN[]','PPRT2SC3[]','PPRT2O2','PPRT1O1','subtb1','subtb2','subtb3','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT2MG[]" style="height: 42px;max-width: 100% !important; width: 100%;">
                                                        <option value="0.67">Stål og jern (nyt)</option>
                                                        <option value="0.07">Aluminium (genanvendt)</option>
                                                        <option value="0.20">Aluminium (nyt)</option>
                                                        <option value="0.15">Andre plast (nyt)</option>
                                                        <option value="0.01">Beton</option>
                                                        <option value="0.02">Bly, zink og tin (genanvendt)</option>
                                                        <option value="0.06">Bly, zink og tin (nyt)</option>
                                                        <option value="0.32">Cement, kalk og gips</option>
                                                        <option value="0.07">Glas (genanvendt)</option>
                                                        <option value="0.10">Glas (nyt)</option>
                                                        <option value="0.22">Ikke-jernholdige metaller (genanvendt)</option>
                                                        <option value="0.39">Ikke-jernholdige metaller (nyt)</option>
                                                        <option value="0.07">Kemikalier</option>
                                                        <option value="0.15">Keramisk</option>
                                                        <option value="0.03">Kobber (genanvendt)</option>
                                                        <option value="0.04">Kobber (nyt)</option>
                                                        <option value="0.13">Mineraluld</option>
                                                        <option value="0.10">Mursten</option>
                                                        <option value="0.02">Papir og pap (genanvendt)</option>
                                                        <option value="0.06">Papir og pap (nyt)</option>
                                                        <option value="0.06">Plast (genanvendt)</option>
                                                        <option value="0.48">Plast: Nylon, PC (nyt)</option>
                                                        <option value="0.03">Sand og ler</option>
                                                        <option value="0.12">Stål og jern (genanvendt)</option>
                                                        <option value="0.09">Tekstil</option>
                                                        <option value="0.11">Træ (genanvendt)</option>
                                                        <option value="0.12">Træ (nyt)</option>
                                                        <option value="0.04">Ædelmetaller</option>
                                                    </select></td>
                                                <td><input type="text" onchange="cal6('PPRT2MG[]','PPRT2AE[]','PPRT2UN[]','PPRT2SC3[]','PPRT2O2','PPRT1O1','subtb1','subtb2','subtb3','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT2AE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="cal6('PPRT2MG[]','PPRT2AE[]','PPRT2UN[]','PPRT2SC3[]','PPRT2O2','PPRT1O1','subtb1','subtb2','subtb3','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT2UN[]" style="height: 42px;max-width: 100% !important; width: 100%;">
                                                        <option value="DKK">DKK</option>
                                                    </select></td>
                                                <td><input type="text" readonly name="PPRT2SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PPRT2OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-12 col-12">
                                        <!-- <br> -->
                                        <h4>Total, ton CO2-e: <input type="text" name="PPRT2O2" value="<?php echo $PPRT2O2; ?>" readonly> </h4>
                                    </div>
                                </div>
                                <br>
                            </div>

                            <div class="col-12">
                                <div class="row head3" style="background-color: #c0c5cb; color: black;">
                                    <div class="col-md-5">
                                        <h3 title="Under Andet kan du indtaste forbrug, som ikke er blevet fanget af alle ovenstående tabeller i relation til indkøb til produktion, eller du kan tilføje egne og mere specifikke beregninger. ">
                                            Indkøb af produkter og services
                                        </h3>
                                    </div>
                                    <div class="col-md-3">
                                        <h3 style="white-space: nowrap; ">Samlet udledning: </h3>
                                    </div>
                                    <div class="col-md-1">
                                        <h3 id="subtb2"><?php echo number_format(floatval($PPRT3O3) +floatval($PPRT4O4), 1); ?></h3>
                                    </div>
                                    <div class="col-md-3">
                                        <h3 style="white-space: nowrap; ">Ton CO2-e</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-10 col-12">
                                        <br>
                                        <h4>Indkøb af materialer i monetære enheder
                                        </h4>
                                    </div>
                                    <br>
                                    <div class="col-12  col-md-2">
                                        <br>
                                        <div class="row dflex flex-row" style="color:#27b939;">
                                            <p style="color:#27b939;">Tilføj række&nbsp; &nbsp;</p>
                                            <button type="button" class="btn btn-danger btn-circle btn3" onclick="adrow1('.adtable8')">
                                                <i class="fab fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-12 table-responsive-md">
                                <table class="table addtable1" id="tab_logic">
                                    <thead>
                                        <tr class="trset">
                                            <th style="text-align: start;" scope="col">Beskrivelse</th>
                                            <th style="text-align: start;" scope="col">Produktgruppe</th>
                                            <th style="text-align: start;" scope="col">Specifikke produkter </th>
                                            <th style="text-align: start;" scope="col">Mængde</th>
                                            <th style="text-align: start;" scope="col">Enhed</th>
                                            <th style="text-align: start;" scope="col">Scope 3</th>
                                            <th style="text-align: start;" scope="col">Bemærkning</th>
                                        </tr>
                                    </thead>
                                    <tbody class="stytb adtable8">
                                        <?php if (isset($_SESSION['PPRT3DE'])) {
                                            for ($i = 0; $i < count($PPRT3DE); $i++) { ?>
                                                <tr class="row1">
                                                    <td><input type="text" name="PPRT3DE[]" value="<?php echo $PPRT3DE[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" id="select1" onchange="changecol1('PPRT3PG[]','PPRT3SP[]','PPRT3Q[]','PPRT3UN[]','PPRT3SC3[]','PPRT3O3','PPRT4O4','subtb2','subtb1','subtb3','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT3PG[]" style="height: 42px;max-width: 100% !important; width: 100%;">
                                                            <option value="<?php echo $PPRT3PG[$i]; ?>"><?php echo $PPRT3PG[$i]; ?></option>
                                                            <option value="Kontor elektronik">Kontor elektronik</option>
                                                            <option value="Fødevarer">Fødevarer</option>
                                                            <option value="Vandforbrug">Vandforbrug</option>
                                                            <option value="Kunstgødning">Kunstgødning</option>
                                                        </select></td>
                                                    <td><select class="" id="select2" onchange="cal7('PPRT3SP[]','PPRT3Q[]','PPRT3UN[]','PPRT3SC3[]','PPRT3O3','PPRT4O4','subtb2','subtb1','subtb3','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT3SP[]" style="height: 42px;max-width: 100% !important; width: 100%;">
                                                            <option value="<?php echo $PPRT3SP[$i]; ?>"><?php echo $PPRT3SP[$i]; ?></option>
                                                            <option value="Stationær PC">Stationær PC</option>
                                                            <option value="Bærbar PC">Bærbar PC</option>
                                                            <option value="Smartphone">Smartphone</option>
                                                            <option value="Computer skærm">Computer skærm</option>
                                                        </select></td>
                                                    <td><input type="text" onchange="cal7('PPRT3SP[]','PPRT3Q[]','PPRT3UN[]','PPRT3SC3[]','PPRT3O3','PPRT4O4','subtb2','subtb1','subtb3','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT3Q[]" value="<?php echo $PPRT3Q[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal7('PPRT3SP[]','PPRT3Q[]','PPRT3UN[]','PPRT3SC3[]','PPRT3O3','PPRT4O4','subtb2','subtb1','subtb3','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT3UN[]" style="height:42px;max-width: 100% !important; width: 100%;">
                                                            <option value="<?php echo $PPRT3UN[$i]; ?>"><?php echo $PPRT3UN[$i]; ?></option>
                                                            <option value="KG">KG</option>
                                                            <option value="Antal">Antal</option>
                                                            <option value="L">L</option>
                                                        </select></td>
                                                    <td><input type="text" readonly name="PPRT3SC3[]" value="<?php echo $PPRT3SC3[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="PPRT3OTC[]" value="<?php echo $PPRT3OTC[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>
                                            <?php }
                                        } else { ?>
                                            <tr class="row1">
                                                <td><input type="text" name="PPRT3DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" id="select1" onchange="changecol1('PPRT3PG[]','PPRT3SP[]','PPRT3Q[]','PPRT3UN[]','PPRT3SC3[]','PPRT3O3','PPRT4O4','subtb2','subtb1','subtb3','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT3PG[]" style="height: 42px;max-width: 100% !important; width: 100%;">
                                                        <option value="Kontor elektronik">Kontor elektronik</option>
                                                        <option value="Fødevarer">Fødevarer</option>
                                                        <option value="Vandforbrug">Vandforbrug</option>
                                                        <option value="Kunstgødning">Kunstgødning</option>
                                                    </select></td>
                                                <td><select class="" id="select2" onchange="cal7('PPRT3SP[]','PPRT3Q[]','PPRT3UN[]','PPRT3SC3[]','PPRT3O3','PPRT4O4','subtb2','subtb1','subtb3','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT3SP[]" style="height: 42px;max-width: 100% !important; width: 100%;">
                                                        <option value="Stationær PC">Stationær PC</option>
                                                        <option value="Bærbar PC">Bærbar PC</option>
                                                        <option value="Smartphone">Smartphone</option>
                                                        <option value="Computer skærm">Computer skærm</option>
                                                    </select></td>
                                                <td><input type="text" onchange="cal7('PPRT3SP[]','PPRT3Q[]','PPRT3UN[]','PPRT3SC3[]','PPRT3O3','PPRT4O4','subtb2','subtb1','subtb3','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT3Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="cal7('PPRT3SP[]','PPRT3Q[]','PPRT3UN[]','PPRT3SC3[]','PPRT3O3','PPRT4O4','subtb2','subtb1','subtb3','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT3UN[]" style="height:42px;max-width: 100% !important; width: 100%;">
                                                        <option value="KG">KG</option>
                                                        <option value="Antal">Antal</option>
                                                        <option value="L">L</option>
                                                    </select></td>
                                                <td><input type="text" readonly name="PPRT3SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PPRT3OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            </tr>
                                            <tr class="row1">
                                                <td><input type="text" name="PPRT3DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" id="select1" onchange="changecol1('PPRT3PG[]','PPRT3SP[]','PPRT3Q[]','PPRT3UN[]','PPRT3SC3[]','PPRT3O3','PPRT4O4','subtb2','subtb1','subtb3','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT3PG[]" style="height: 42px;max-width: 100% !important; width: 100%;">
                                                        <option value="Kontor elektronik">Kontor elektronik</option>
                                                        <option value="Fødevarer">Fødevarer</option>
                                                        <option value="Vandforbrug">Vandforbrug</option>
                                                        <option value="Kunstgødning">Kunstgødning</option>
                                                    </select></td>
                                                <td><select class="" id="select2" onchange="cal7('PPRT3SP[]','PPRT3Q[]','PPRT3UN[]','PPRT3SC3[]','PPRT3O3','PPRT4O4','subtb2','subtb1','subtb3','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT3SP[]" style="height: 42px;max-width: 100% !important; width: 100%;">
                                                        <option value="Stationær PC">Stationær PC</option>
                                                        <option value="Bærbar PC">Bærbar PC</option>
                                                        <option value="Smartphone">Smartphone</option>
                                                        <option value="Computer skærm">Computer skærm</option>
                                                    </select></td>
                                                <td><input type="text" onchange="cal7('PPRT3SP[]','PPRT3Q[]','PPRT3UN[]','PPRT3SC3[]','PPRT3O3','PPRT4O4','subtb2','subtb1','subtb3','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT3Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="cal7('PPRT3SP[]','PPRT3Q[]','PPRT3UN[]','PPRT3SC3[]','PPRT3O3','PPRT4O4','subtb2','subtb1','subtb3','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT3UN[]" style="height: 42px;max-width: 100% !important; width: 100%;">
                                                        <option value="KG">KG</option>
                                                        <option value="Antal">Antal</option>
                                                        <option value="L">L</option>
                                                    </select></td>
                                                <td><input type="text" readonly name="PPRT3SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PPRT3OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            </tr>
                                            <tr class="row1">
                                                <td><input type="text" name="PPRT3DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" id="select1" onchange="changecol1('PPRT3PG[]','PPRT3SP[]','PPRT3Q[]','PPRT3UN[]','PPRT3SC3[]','PPRT3O3','PPRT4O4','subtb2','subtb1','subtb3','table6')
                                            ;addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT3PG[]" style="height: 42px;max-width: 100% !important; width: 100%;">
                                                        <option value="Kontor elektronik">Kontor elektronik</option>
                                                        <option value="Fødevarer">Fødevarer</option>
                                                        <option value="Vandforbrug">Vandforbrug</option>
                                                        <option value="Kunstgødning">Kunstgødning</option>
                                                    </select></td>
                                                <td><select class="" id="select2" onchange="cal7('PPRT3SP[]','PPRT3Q[]','PPRT3UN[]','PPRT3SC3[]','PPRT3O3','PPRT4O4','subtb2','subtb1','subtb3','table6');
                                            addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT3SP[]" style="height: 42px;max-width: 100% !important; width: 100%;">
                                                        <option value="Stationær PC">Stationær PC</option>
                                                        <option value="Bærbar PC">Bærbar PC</option>
                                                        <option value="Smartphone">Smartphone</option>
                                                        <option value="Computer skærm">Computer skærm</option>
                                                    </select></td>
                                                <td><input type="text" onchange="cal7('PPRT3SP[]','PPRT3Q[]','PPRT3UN[]','PPRT3SC3[]','PPRT3O3','PPRT4O4','subtb2','subtb1','subtb3','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT3Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="cal7('PPRT3SP[]','PPRT3Q[]','PPRT3UN[]','PPRT3SC3[]','PPRT3O3','PPRT4O4','subtb2','subtb1','subtb3','table6')
                                            ;addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT3UN[]" style="height: 42px;max-width: 100% !important; width: 100%;">
                                                        <option value="KG">KG</option>
                                                        <option value="Antal">Antal</option>
                                                        <option value="L">L</option>
                                                    </select></td>
                                                <td><input type="text" readonly name="PPRT3SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PPRT3OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-12 col-12">
                                        <!-- <br> -->
                                        <h4>Total, ton CO2-e: <input type="text" name="PPRT3O3" value="<?php echo $PPRT3O3; ?>" readonly></h4>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-10 col-12">
                                        <br>
                                        <h4>Indkøb af produkter og services i monetære enheder (beløb i DKK)
                                        </h4>
                                    </div>
                                    <br>
                                    <div class="col-12  col-md-2">
                                        <br>
                                        <div class="row dflex flex-row" style="color:#27b939;">
                                            <p style="color:#27b939;">Tilføj række&nbsp; &nbsp;</p>
                                            <button type="button" class="btn btn-danger btn-circle btn3" onclick="adrow1('.adtable9')">
                                                <i class="fab fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-12 table-responsive-md">
                                <table class="table addtable1" id="tab_logic">
                                    <thead>
                                        <tr class="trset">
                                            <th style="text-align: start;" scope="col">Beskrivelse</th>
                                            <th style="text-align: start;" scope="col">Produktgruppe</th>
                                            <th style="text-align: start;" scope="col">Specifikke produkter </th>
                                            <th style="text-align: start;" scope="col">Beløb (ekskl. moms)</th>
                                            <th style="text-align: start;" scope="col">Enhed</th>
                                            <th style="text-align: start;" scope="col">Scope 3</th>
                                            <th style="text-align: start;" scope="col">Bemærkning</th>
                                        </tr>
                                    </thead>
                                    <tbody class="stytb adtable9">
                                        <?php if (isset($_SESSION['PPRT4DE'])) {
                                            for ($i = 0; $i < count($PPRT4DE); $i++) { ?>
                                                <tr class="row1">
                                                    <td><input type="text" name="PPRT4DE[]" value="<?php echo $PPRT4DE[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="changecol2('PPRT4PG[]','PPRT4SP[]') ;addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT4PG[]" style="height: 42px;max-width: 100% !important; width: 100%;">
                                                            <option value="<?php echo $PPRT4PG[$i]; ?>"><?php echo $data4[$PPRT4PG[$i]]; ?></option>
                                                            <option value="0">Kontor elektronik</option>
                                                            <option value="1">Fødevarer</option>
                                                            <option value="2">Service og tjenesteydelser</option>
                                                            <option value="3">Byggeri og vedligeholdelse</option>
                                                            <option value="4">Møbler og inventar</option>
                                                            <option value="5">Vandforbrug</option>
                                                            <option value="6">Arbejdstøj o.lign.</option>
                                                            <option value="7">Kontor artikler</option>
                                                            <option value="8">Transportmidler</option>
                                                            <option value="9">Events/personale aktiviteter</option>
                                                            <option value="10">Kurser og uddannelse</option>
                                                            <option value="11">IT services / softwares</option>
                                                            <option value="12">Post (pakkepost og breve)</option>
                                                            <option value="13">Netværk / abonnementer</option>
                                                            <option value="14">Hårde hvidevarer</option>
                                                            <option value="15">Plast og gummi komponenter</option>
                                                            <option value="16">Metal komponenter</option>
                                                            <option value="17">Glas komponenter</option>
                                                            <option value="18">Reparation og vedligehold af motorkøretøjer</option>
                                                            <option value="19">Kunstgødning</option>
                                                            <option value="20">Køb af høj teknologisk- og medicinsk udstyr</option>
                                                            <option value="21">Leje af maskiner</option>
                                                            <option value="22">Køb af maskiner</option>
                                                            <option value="23">Blomster og planter</option>
                                                            <option value="24">Forsikringer</option>
                                                            <option value="25">Forskning og udvikling</option>
                                                            <option value="26">Genbrugte produkter</option>
                                                        </select></td>
                                                    <td><select class="" onchange="cal8('PPRT4SP[]','PPRT4AE[]','PPRT4SC3[]','PPRT4O4','PPRT3O3','subtb2','subtb1','subtb3','table6');
                                            addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT4SP[]" style="height: 42px;max-width: 100% !important; width: 100%;">
                                                            <option value="<?php echo $PPRT4SP[$i]; ?>"><?php echo $data5[$PPRT4SP[$i]]; ?></option>
                                                            <option value="0.06">Generelt</option>
                                                        </select></td>
                                                    <td><input type="text" onchange="cal8('PPRT4SP[]','PPRT4AE[]','PPRT4SC3[]','PPRT4O4','PPRT3O3','subtb2','subtb1','subtb3','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT4AE[]" value="<?php echo $PPRT4AE[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal8('PPRT4SP[]','PPRT4AE[]','PPRT4SC3[]','PPRT4O4','PPRT3O3','subtb2','subtb1','subtb3','table6');
                                            addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT4UN[]" style="height: 42px;max-width: 100% !important; width: 100%;">
                                                            <option value="DKK">DKK</option>
                                                        </select></td>
                                                    <td><input type="text" readonly name="PPRT4SC3[]" value="<?php echo $PPRT4SC3[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="PPRT4OTC[]" value="<?php echo $PPRT4OTC[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>

                                            <?php }
                                        } else { ?>
                                            <tr class="row1">
                                                <td><input type="text" name="PPRT4DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="changecol2('PPRT4PG[]','PPRT4SP[]') ;addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT4PG[]" style="height: 42px;max-width: 100% !important; width: 100%;">
                                                        <option value="0">Kontor elektronik</option>
                                                        <option value="1">Fødevarer</option>
                                                        <option value="2">Service og tjenesteydelser</option>
                                                        <option value="3">Byggeri og vedligeholdelse</option>
                                                        <option value="4">Møbler og inventar</option>
                                                        <option value="5">Vandforbrug</option>
                                                        <option value="6">Arbejdstøj o.lign.</option>
                                                        <option value="7">Kontor artikler</option>
                                                        <option value="8">Transportmidler</option>
                                                        <option value="9">Events/personale aktiviteter</option>
                                                        <option value="10">Kurser og uddannelse</option>
                                                        <option value="11">IT services / softwares</option>
                                                        <option value="12">Post (pakkepost og breve)</option>
                                                        <option value="13">Netværk / abonnementer</option>
                                                        <option value="14">Hårde hvidevarer</option>
                                                        <option value="15">Plast og gummi komponenter</option>
                                                        <option value="16">Metal komponenter</option>
                                                        <option value="17">Glas komponenter</option>
                                                        <option value="18">Reparation og vedligehold af motorkøretøjer</option>
                                                        <option value="19">Kunstgødning</option>
                                                        <option value="20">Køb af høj teknologisk- og medicinsk udstyr</option>
                                                        <option value="21">Leje af maskiner</option>
                                                        <option value="22">Køb af maskiner</option>
                                                        <option value="23">Blomster og planter</option>
                                                        <option value="24">Forsikringer</option>
                                                        <option value="25">Forskning og udvikling</option>
                                                        <option value="26">Genbrugte produkter</option>
                                                    </select></td>
                                                <td><select class="" onchange="cal8('PPRT4SP[]','PPRT4AE[]','PPRT4SC3[]','PPRT4O4','PPRT3O3','subtb2','subtb1','subtb3','table6');
                                            addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT4SP[]" style="height: 42px;max-width: 100% !important; width: 100%;">
                                                        <option value="0.06">Generelt</option>
                                                    </select></td>
                                                <td><input type="text" onchange="cal8('PPRT4SP[]','PPRT4AE[]','PPRT4SC3[]','PPRT4O4','PPRT3O3','subtb2','subtb1','subtb3','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT4AE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="cal8('PPRT4SP[]','PPRT4AE[]','PPRT4SC3[]','PPRT4O4','PPRT3O3','subtb2','subtb1','subtb3','table6');
                                            addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT4UN[]" style="height: 42px;max-width: 100% !important; width: 100%;">
                                                        <option value="DKK">DKK</option>
                                                    </select></td>
                                                <td><input type="text" readonly name="PPRT4SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PPRT4OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            </tr>
                                            <tr class="row1">
                                                <td><input type="text" name="PPRT4DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="changecol2('PPRT4PG[]','PPRT4SP[]');
                                            addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT4PG[]" style="height: 42px;max-width: 100% !important; width: 100%;">
                                                        <option value="0">Kontor elektronik</option>
                                                        <option value="1">Fødevarer</option>
                                                        <option value="2">Service og tjenesteydelser</option>
                                                        <option value="3">Byggeri og vedligeholdelse</option>
                                                        <option value="4">Møbler og inventar</option>
                                                        <option value="5">Vandforbrug</option>
                                                        <option value="6">Arbejdstøj o.lign.</option>
                                                        <option value="7">Kontor artikler</option>
                                                        <option value="8">Transportmidler</option>
                                                        <option value="9">Events/personale aktiviteter</option>
                                                        <option value="10">Kurser og uddannelse</option>
                                                        <option value="11">IT services / softwares</option>
                                                        <option value="12">Post (pakkepost og breve)</option>
                                                        <option value="13">Netværk / abonnementer</option>
                                                        <option value="14">Hårde hvidevarer</option>
                                                        <option value="15">Plast og gummi komponenter</option>
                                                        <option value="16">Metal komponenter</option>
                                                        <option value="17">Glas komponenter</option>
                                                        <option value="18">Reparation og vedligehold af motorkøretøjer</option>
                                                        <option value="19">Kunstgødning</option>
                                                        <option value="20">Køb af høj teknologisk- og medicinsk udstyr</option>
                                                        <option value="21">Leje af maskiner</option>
                                                        <option value="22">Køb af maskiner</option>
                                                        <option value="23">Blomster og planter</option>
                                                        <option value="24">Forsikringer</option>
                                                        <option value="25">Forskning og udvikling</option>
                                                        <option value="26">Genbrugte produkter</option>
                                                    </select></td>
                                                <td><select class="" onchange="cal8('PPRT4SP[]','PPRT4AE[]','PPRT4SC3[]','PPRT4O4','PPRT3O3','subtb2','subtb1','subtb3','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT4SP[]" style="height: 42px; max-width: 100% !important; width: 100%;">
                                                        <option value="0.06">Generelt</option>
                                                    </select></td>
                                                <td><input type="text" onchange="cal8('PPRT4SP[]','PPRT4AE[]','PPRT4SC3[]','PPRT4O4','PPRT3O3','subtb2','subtb1','subtb3','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT4AE[]" style="max-width: 100%!important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="cal8('PPRT4SP[]','PPRT4AE[]','PPRT4SC3[]','PPRT4O4','PPRT3O3','subtb2','subtb1','subtb3','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT4UN[]" style="height:42px;max-width: 100%!important; width: 100%;">
                                                        <option value="DKK">DKK</option>
                                                    </select></td>
                                                <td><input type="text" readonly name="PPRT4SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PPRT4OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            </tr>
                                            <tr class="row1">
                                                <td><input type="text" name="PPRT4DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="changecol2('PPRT4PG[]','PPRT4SP[]');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT4PG[]" style="height: 42px; max-width: 100% !important; width: 100%;">
                                                        <option value="0">Kontor elektronik</option>
                                                        <option value="1">Fødevarer</option>
                                                        <option value="2">Service og tjenesteydelser</option>
                                                        <option value="3">Byggeri og vedligeholdelse</option>
                                                        <option value="4">Møbler og inventar</option>
                                                        <option value="5">Vandforbrug</option>
                                                        <option value="6">Arbejdstøj o.lign.</option>
                                                        <option value="7">Kontor artikler</option>
                                                        <option value="8">Transportmidler</option>
                                                        <option value="9">Events/personale aktiviteter</option>
                                                        <option value="10">Kurser og uddannelse</option>
                                                        <option value="11">IT services / softwares</option>
                                                        <option value="12">Post (pakkepost og breve)</option>
                                                        <option value="13">Netværk / abonnementer</option>
                                                        <option value="14">Hårde hvidevarer</option>
                                                        <option value="15">Plast og gummi komponenter</option>
                                                        <option value="16">Metal komponenter</option>
                                                        <option value="17">Glas komponenter</option>
                                                        <option value="18">Reparation og vedligehold af motorkøretøjer</option>
                                                        <option value="19">Kunstgødning</option>
                                                        <option value="20">Køb af høj teknologisk- og medicinsk udstyr</option>
                                                        <option value="21">Leje af maskiner</option>
                                                        <option value="22">Køb af maskiner</option>
                                                        <option value="23">Blomster og planter</option>
                                                        <option value="24">Forsikringer</option>
                                                        <option value="25">Forskning og udvikling</option>
                                                        <option value="26">Genbrugte produkter</option>
                                                    </select></td>
                                                <td><select class="" onchange="cal8('PPRT4SP[]','PPRT4AE[]','PPRT4SC3[]','PPRT4O4','PPRT3O3','subtb2','subtb1','subtb3','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT4SP[]" style="height: 42px; max-width: 100% !important; width: 100%;">
                                                        <option value="0.06">Generelt</option>
                                                    </select></td>
                                                <td><input type="text" onchange="cal8('PPRT4SP[]','PPRT4AE[]','PPRT4SC3[]','PPRT4O4','PPRT3O3','subtb2','subtb1','subtb3','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT4AE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="cal8('PPRT4SP[]','PPRT4AE[]','PPRT4SC3[]','PPRT4O4','PPRT3O3','subtb2','subtb1','subtb3','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT4UN[]" style="height:42px;max-width: 100%!important; width: 100%;">
                                                        <option value="DKK">DKK</option>
                                                    </select></td>
                                                <td><input type="text" readonly name="PPRT4SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PPRT4OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-12 col-12">
                                        <!-- <br> -->
                                        <h4>Total, ton CO2-e: <input type="text" readonly name="PPRT4O4" value="<?php echo  $PPRT4O4; ?>"></h4>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-12">
                                <div class="row head3" style="background-color: #c0c5cb; color: black;">
                                    <div class="col-md-5">
                                        <h3 title="Under Andet kan du indtaste forbrug, som ikke er blevet fanget af alle ovenstående tabeller i relation til indkøb til produktion, eller du kan tilføje egne og mere specifikke beregninger. 
                                            ">Andet
                                        </h3>
                                    </div>
                                    <div class="col-md-3">
                                        <h3 style="white-space: nowrap; ">Samlet udledning: </h3>
                                    </div>
                                    <div class="col-md-1">
                                        <h3 id="subtb3"><?php echo number_format(floatval($PPRT5O5 )+ floatval($PPRT6O6), 1); ?></h3>
                                    </div>
                                    <div class="col-md-3">
                                        <h3 style="white-space: nowrap; ">Ton CO2-e</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-10 col-12">
                                        <br>
                                        <h4>Fysiske enheder
                                        </h4>
                                    </div>
                                    <br>
                                    <div class="col-12  col-md-2">
                                        <br>
                                        <div class="row dflex flex-row" style="color:#27b939;">
                                            <p style="color:#27b939;">Tilføj række&nbsp; &nbsp;</p>
                                            <button type="button" class="btn btn-danger btn-circle btn3" onclick="adrow1('.adtable10')">
                                                <i class="fab fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-12 table-responsive-md">
                                <table class="table addtable1" id="tab_logic">
                                    <thead>
                                        <tr class="trset">
                                            <th style="text-align: start;" scope="col">Beskrivelse</th>
                                            <th style="text-align: start;" scope="col">Indkøb</th>
                                            <th style="text-align: start;" scope="col">Mængde</th>
                                            <th style="text-align: start;" scope="col">Enhed</th>
                                            <th style="text-align: start;" scope="col">Emissionsfaktor</th>
                                            <th style="text-align: start;" scope="col">Scope 3</th>
                                            <th style="text-align: start;" scope="col">Bemærkning</th>
                                        </tr>
                                    </thead>
                                    <tbody class="stytb adtable10">
                                        <?php if (isset($_SESSION['PPRT5DE'])) {
                                            for ($i = 0; $i < count($PPRT5DE); $i++) {
                                        ?>
                                                <tr class="row1">
                                                    <td><input type="text" name="PPRT5DE[]" value="<?php echo $PPRT5DE[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="PPRT5P[]" value="<?php echo $PPRT5P[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="PPRT5Q[]" value="<?php echo $PPRT5Q[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="PPRT5UN[]" value="<?php echo $PPRT5UN[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="PPRT5EF[]" value="<?php echo $PPRT5EF[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="PPRT5SC3[]" value="<?php echo $PPRT5SC3[$i]; ?>" onchange="totalother('PPRT5SC3[]','PPRT5O5','PPRT6O6','subtb3','subtb1','subtb2','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="PPRT5OTC[]" value="<?php echo $PPRT5OTC[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>

                                            <?php }
                                        } else { ?>
                                            <tr class="row1">
                                                <td><input type="text" name="PPRT5DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PPRT5P[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PPRT5Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PPRT5UN[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PPRT5EF[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PPRT5SC3[]" onchange="totalother('PPRT5SC3[]','PPRT5O5','PPRT6O6','subtb3','subtb1','subtb2','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PPRT5OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            </tr>
                                            <tr class="row1">
                                                <td><input type="text" name="PPRT5DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PPRT5P[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PPRT5Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PPRT5UN[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PPRT5EF[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" onchange="totalother('PPRT5SC3[]','PPRT5O5','PPRT6O6','subtb3','subtb1','subtb2','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT5SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PPRT5OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            </tr>
                                            <tr class="row1">
                                                <td><input type="text" name="PPRT5DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PPRT5P[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PPRT5Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PPRT5UN[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PPRT5EF[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" onchange="totalother('PPRT5SC3[]','PPRT5O5','PPRT6O6','subtb3','subtb1','subtb2','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT5SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PPRT5OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>

                            </div>
                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-12 col-12">
                                        <h4>Total, ton CO2-e: <input type="text" name="PPRT5O5" value="<?php echo $PPRT5O5; ?>" readonly></h4>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-10 col-12">
                                        <br>
                                        <h4>Monetære enheder (beløb i DKK)
                                        </h4>
                                    </div>
                                    <br>
                                    <div class="col-12  col-md-2">
                                        <br>
                                        <div class="row dflex flex-row" style="color:#27b939;">
                                            <p style="color:#27b939;">Tilføj række&nbsp; &nbsp;</p>
                                            <button type="button" class="btn btn-danger btn-circle btn3" onclick="adrow1('.adtable11')">
                                                <i class="fab fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-12 table-responsive-md">
                                <table class="table addtable1" id="tab_logic">
                                    <thead>
                                        <tr class="trset">
                                            <th style="text-align: start;" scope="col">Beskrivelse</th>
                                            <th style="text-align: start;" scope="col">Indkøb</th>
                                            <th style="text-align: start;" scope="col">Beløb (ekskl. moms)</th>
                                            <th style="text-align: start;" scope="col">Enhed</th>
                                            <th style="text-align: start;" scope="col">Emissionsfaktor</th>
                                            <th style="text-align: start;" scope="col">Scope 3</th>
                                            <th style="text-align: start;" scope="col">Bemærkning</th>
                                        </tr>
                                    </thead>
                                    <tbody class="stytb adtable11">
                                        <?php if (isset($_SESSION['PPRT6DE'])) {
                                            for ($i = 0; $i < count($PPRT6DE); $i++) {
                                        ?>
                                                <tr class="row1">
                                                    <td><input type="text" name="PPRT6DE[]" value="<?php echo $PPRT6DE[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="PPRT6P[]" value="<?php echo $PPRT6P[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="PPRT6AE[]" value="<?php echo $PPRT6AE[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="PPRT6UN[]" value="<?php echo $PPRT6UN[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="PPRT6EF[]" value="<?php echo $PPRT6EF[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="PPRT6SC3[]" value="<?php echo $PPRT6SC3[$i]; ?>" onchange="totalother('PPRT6SC3[]','PPRT6O6','PPRT5O5','subtb3','subtb1','subtb2','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="PPRT6OTC[]" value="<?php echo $PPRT6OTC[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>
                                            <?php }
                                        } else { ?>
                                            <tr class="row1">
                                                <td><input type="text" name="PPRT6DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PPRT6P[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PPRT6AE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PPRT6UN[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PPRT6EF[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PPRT6SC3[]" onchange="totalother('PPRT6SC3[]','PPRT6O6','PPRT5O5','subtb3','subtb1','subtb2','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PPRT6OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            </tr>
                                            <tr class="row1">
                                                <td><input type="text" name="PPRT6DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PPRT6P[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PPRT6AE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PPRT6UN[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PPRT6EF[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" onchange="totalother('PPRT6SC3[]','PPRT6O6','PPRT5O5','subtb3','subtb1','subtb2','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT6SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PPRT6OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            </tr>
                                            <tr class="row1">
                                                <td><input type="text" name="PPRT6DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PPRT6P[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PPRT6AE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PPRT6UN[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PPRT6EF[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" onchange="totalother('PPRT6SC3[]','PPRT6O6','PPRT5O5','subtb3','subtb1','subtb2','table6');addtotalheader(['PPRT1O1','PPRT2O2','PPRT3O3','PPRT4O4','PPRT5O5','PPRT6O6'],'table6')" name="PPRT6SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PPRT6OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-12 col-12">

                                        <h4>Total, ton CO2-e: <input type="text" name="PPRT6O6" value="<?php echo $PPRT6O6; ?>" readonly></h4>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <!-- secodary field -->
                            <div class="col-12">
                                <div class="row head3">
                                    <div class="col-md-5">
                                        <h3 title="Her indtastes sekundære indkøb. Sekundære indkøb omfatter indkøb af hjælpematerialer, produkter og serviceydelser til drift af virksomheden.">Sekundære indkøb af hjælpematerialer og serviceydelser</h3>
                                    </div>
                                    <div class="col-md-3">
                                        <h3 style="white-space: nowrap; ">Samlet udledning: </h3>
                                    </div>
                                    <div class="col-md-1">
                                        <h3 id="table7"><?php echo number_format(floatval($PSST7O7) +floatval( $PSST8O8) +floatval( $PSST9O9) + floatval($PSST10O10) + floatval($POTT11O11) + floatval($POTT12O12), 1); ?></h3>
                                    </div>
                                    <div class="col-md-3">
                                        <h3 style="white-space: nowrap; ">Ton CO2-e</h3>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="col-12">
                                <div class="row head3" style="background-color: #c0c5cb; color: black;">
                                    <div class="col-md-5">
                                        <h3 title="Indkøb af jomfruelige materialer kan opgøres i både fysiske enheder og monetære enheder (beløb i DKK). Det er vigtigt at det samme indkøb ikke indtastes begge steder, idet det vil give en dobbelttælling. Indberetning i fysiske enheder giver et mere præcist resultat end ved monetære enheder.
                                            Indkøb af genanvendte materialer indtastes i fysiske enheder.">Indkøb af materialer
                                        </h3>
                                    </div>
                                    <div class="col-md-3">
                                        <h3 style="white-space: nowrap; ">Samlet udledning: </h3>
                                    </div>
                                    <div class="col-md-1">
                                        <h3 id="subtb4"><?php echo number_format(floatval($PSST7O7) + floatval($PSST8O8), 1); ?></h3>
                                    </div>
                                    <div class="col-md-3">
                                        <h3 style="white-space: nowrap; ">Ton CO2-e</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-10 col-12">
                                        <br>
                                        <h4>Indkøb af materialer i fysiske enheder
                                        </h4>
                                    </div>
                                    <br>
                                    <div class="col-12  col-md-2">
                                        <br>
                                        <div class="row dflex flex-row" style="color:#27b939;">
                                            <p style="color:#27b939;">Tilføj række&nbsp; &nbsp;</p>
                                            <button type="button" class="btn btn-danger btn-circle btn3" onclick="adrow1('.adtable12')">
                                                <i class="fab fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-12 table-responsive-md">
                                <table class="table addtable1" id="tab_logic">
                                    <thead>
                                        <tr class="trset">
                                            <th style="text-align: start;" scope="col">Beskrivelse</th>
                                            <th style="text-align: start;" scope="col">Materialegruppe</th>
                                            <th style="text-align: start;" scope="col">Mængde</th>
                                            <th style="text-align: start;" scope="col">Enhed</th>
                                            <th style="text-align: start;" scope="col">Scope 3</th>
                                            <th style="text-align: start;" scope="col">Bemærkning</th>
                                        </tr>
                                    </thead>
                                    <tbody class="stytb adtable12">
                                        <?php if (isset($_SESSION['PSST7DE'])) {
                                            for ($i = 0; $i < count($PSST7DE); $i++) {
                                        ?>
                                                <tr class="row1">
                                                    <td><input type="text" name="PSST7DE[]" value="<?php echo $PSST7DE[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal5('PSST7MG[]','PSST7Q[]','PSST7UN[]','PSST7SC3[]','PSST7O7','PSST8O8','subtb4','subtb5','subtb6','table7');
                                            addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" name="PSST7MG[]" style="height: 42px; max-width: 100% !important; width: 100%;">
                                                            <option value="<?php echo $PSST7MG[$i]; ?>"><?php echo $data6[$PSST7MG[$i]]; ?></option>
                                                            <option value="4.23,4232.7193">Stål og jern (nyt)</option>
                                                            <option value="3.08,3084.7372">Aluminium (genanvendt)</option>
                                                            <option value="8.43,8429.0783">Aluminium (nyt)</option>
                                                            <option value="3.17,3170.59">Andre plast (nyt)</option>
                                                            <option value="0.10,100.21">Beton</option>
                                                            <option value="0.81,813.07">Bly, zink og tin (genanvendt)</option>
                                                            <option value="3.13,3133.15">Bly, zink og tin (nyt)</option>
                                                            <option value="0.90,900.80">Cement, kalk og gips</option>
                                                            <option value="0.68,684.81">Glas (genanvendt)</option>
                                                            <option value="1.00,1000.05">Glas (nyt)</option>
                                                            <option value="3.20,3202.95">Ikke-jernholdige metaller (genanvendt)</option>
                                                            <option value="5.68,5684.63">Ikke-jernholdige metaller (nyt)</option>
                                                            <option value="2.78,2775.40">Kemikalier</option>
                                                            <option value="1.19,1193.34">Keramisk</option>
                                                            <option value="0.92,9617.94">Kobber (genanvendt)</option>
                                                            <option value="0.84,839.22">Mineraluld</option>
                                                            <option value="0.29,293.89">Mursten</option>
                                                            <option value="1.10,1096.31">Papir og pap (genanvendt)</option>
                                                            <option value="2.69,2688.69">Papir og pap (nyt)</option>
                                                            <option value="1.340,1344.05">Plast (genanvendt)</option>
                                                            <option value="10.10,10102.49">Plast: Nylon, PC (nyt)</option>
                                                            <option value="0.01,6.31">Sand og ler</option>
                                                            <option value="0.74,738.94">Stål og jern (genanvendt)</option>
                                                            <option value="13.99,13986.49">Tekstil</option>
                                                            <option value="1.36,1362.67">Træ (genanvendt)</option>
                                                            <option value="1.66,1660.03">Træ (nyt)</option>
                                                            <option value="12749.127,12749127.00">Ædelmetaller</option>
                                                        </select></td>
                                                    <td><input type="text" name="PSST7Q[]" value="<?php echo $PSST7Q[$i]; ?>" onchange="cal5('PSST7MG[]','PSST7Q[]','PSST7UN[]','PSST7SC3[]','PSST7O7','PSST8O8','subtb4','subtb5','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" name="PSST7UN[]" onchange="cal5('PSST7MG[]','PSST7Q[]','PSST7UN[]','PSST7SC3[]','PSST7O7','PSST8O8','subtb4','subtb5','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" style="height:42px;max-width: 100% !important; width: 100%;">
                                                            <option value="<?php echo $PSST7UN[$i]; ?>"><?php echo $PSST7UN[$i]; ?></option>
                                                            <option value="KG">KG</option>
                                                            <option value="TON">TON</option>
                                                        </select></td>
                                                    <td><input type="text" readonly name="PSST7SC3[]" value="<?php echo $PSST7SC3[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="PSST7OTC[]" value="<?php echo $PSST7OTC[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>

                                            <?php }
                                        } else { ?>
                                            <tr class="row1">
                                                <td><input type="text" name="PSST7DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="cal5('PSST7MG[]','PSST7Q[]','PSST7UN[]','PSST7SC3[]','PSST7O7','PSST8O8','subtb4','subtb5','subtb6','table7');
                                            addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" name="PSST7MG[]" style="height: 42px; max-width: 100% !important; width: 100%;">
                                                        <option value="4.23,4232.7193">Stål og jern (nyt)</option>
                                                        <option value="3.08,3084.7372">Aluminium (genanvendt)</option>
                                                        <option value="8.43,8429.0783">Aluminium (nyt)</option>
                                                        <option value="3.17,3170.59">Andre plast (nyt)</option>
                                                        <option value="0.10,100.21">Beton</option>
                                                        <option value="0.81,813.07">Bly, zink og tin (genanvendt)</option>
                                                        <option value="3.13,3133.15">Bly, zink og tin (nyt)</option>
                                                        <option value="0.90,900.80">Cement, kalk og gips</option>
                                                        <option value="0.68,684.81">Glas (genanvendt)</option>
                                                        <option value="1.00,1000.05">Glas (nyt)</option>
                                                        <option value="3.20,3202.95">Ikke-jernholdige metaller (genanvendt)</option>
                                                        <option value="5.68,5684.63">Ikke-jernholdige metaller (nyt)</option>
                                                        <option value="2.78,2775.40">Kemikalier</option>
                                                        <option value="1.19,1193.34">Keramisk</option>
                                                        <option value="0.92,9617.94">Kobber (genanvendt)</option>
                                                        <option value="0.84,839.22">Mineraluld</option>
                                                        <option value="0.29,293.89">Mursten</option>
                                                        <option value="1.10,1096.31">Papir og pap (genanvendt)</option>
                                                        <option value="2.69,2688.69">Papir og pap (nyt)</option>
                                                        <option value="1.340,1344.05">Plast (genanvendt)</option>
                                                        <option value="10.10,10102.49">Plast: Nylon, PC (nyt)</option>
                                                        <option value="0.01,6.31">Sand og ler</option>
                                                        <option value="0.74,738.94">Stål og jern (genanvendt)</option>
                                                        <option value="13.99,13986.49">Tekstil</option>
                                                        <option value="1.36,1362.67">Træ (genanvendt)</option>
                                                        <option value="1.66,1660.03">Træ (nyt)</option>
                                                        <option value="12749.127,12749127.00">Ædelmetaller</option>
                                                    </select></td>
                                                <td><input type="text" onchange="cal5('PSST7MG[]','PSST7Q[]','PSST7UN[]','PSST7SC3[]','PSST7O7','PSST8O8','subtb4','subtb5','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" name="PSST7Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="cal5('PSST7MG[]','PSST7Q[]','PSST7UN[]','PSST7SC3[]','PSST7O7','PSST8O8','subtb4','subtb5','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" name="PSST7UN[]" style="height:42px;max-width: 100% !important; width: 100%;">
                                                        <option value="KG">KG</option>
                                                        <option value="TON">TON</option>
                                                    </select></td>
                                                <td><input type="text" readonly name="PSST7SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PSST7OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            </tr>
                                            <tr class="row1">
                                                <td><input type="text" name="PSST7DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="cal5('PSST7MG[]','PSST7Q[]','PSST7UN[]','PSST7SC3[]','PSST7O7','PSST8O8','subtb4','subtb5','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" name="PSST7MG[]" style="height:42px;max-width: 100% !important; width: 100%;">
                                                        <option value="4.23,4232.7193">Stål og jern (nyt)</option>
                                                        <option value="3.08,3084.7372">Aluminium (genanvendt)</option>
                                                        <option value="8.43,8429.0783">Aluminium (nyt)</option>
                                                        <option value="3.17,3170.59">Andre plast (nyt)</option>
                                                        <option value="0.10,100.21">Beton</option>
                                                        <option value="0.81,813.07">Bly, zink og tin (genanvendt)</option>
                                                        <option value="3.13,3133.15">Bly, zink og tin (nyt)</option>
                                                        <option value="0.90,900.80">Cement, kalk og gips</option>
                                                        <option value="0.68,684.81">Glas (genanvendt)</option>
                                                        <option value="1.00,1000.05">Glas (nyt)</option>
                                                        <option value="3.20,3202.95">Ikke-jernholdige metaller (genanvendt)</option>
                                                        <option value="5.68,5684.63">Ikke-jernholdige metaller (nyt)</option>
                                                        <option value="2.78,2775.40">Kemikalier</option>
                                                        <option value="1.19,1193.34">Keramisk</option>
                                                        <option value="0.92,9617.94">Kobber (genanvendt)</option>
                                                        <option value="0.84,839.22">Mineraluld</option>
                                                        <option value="0.29,293.89">Mursten</option>
                                                        <option value="1.10,1096.31">Papir og pap (genanvendt)</option>
                                                        <option value="2.69,2688.69">Papir og pap (nyt)</option>
                                                        <option value="1.340,1344.05">Plast (genanvendt)</option>
                                                        <option value="10.10,10102.49">Plast: Nylon, PC (nyt)</option>
                                                        <option value="0.01,6.31">Sand og ler</option>
                                                        <option value="0.74,738.94">Stål og jern (genanvendt)</option>
                                                        <option value="13.99,13986.49">Tekstil</option>
                                                        <option value="1.36,1362.67">Træ (genanvendt)</option>
                                                        <option value="1.66,1660.03">Træ (nyt)</option>
                                                        <option value="12749.127,12749127.00">Ædelmetaller</option>
                                                    </select></td>

                                                <td><input type="text" onchange="cal5('PSST7MG[]','PSST7Q[]','PSST7UN[]','PSST7SC3[]','PSST7O7','PSST8O8','subtb4','subtb5','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" name="PSST7Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="cal5('PSST7MG[]','PSST7Q[]','PSST7UN[]','PSST7SC3[]','PSST7O7','PSST8O8','subtb4','subtb5','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" name="PSST7UN[]" style="height:42px;max-width: 100% !important; width: 100%;">
                                                        <option value="KG">KG</option>
                                                        <option value="TON">TON</option>
                                                    </select></td>
                                                <td><input type="text" readonly name="PSST7SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PSST7OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            </tr>
                                            <tr class="row1">
                                                <td><input type="text" name="PSST7DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="cal5('PSST7MG[]','PSST7Q[]','PSST7UN[]','PSST7SC3[]','PSST7O7','PSST8O8','subtb4','subtb5','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" name="PSST7MG[]" style="height:42px;max-width: 100% !important; width: 100%;">
                                                        <option value="4.23,4232.7193">Stål og jern (nyt)</option>
                                                        <option value="3.08,3084.7372">Aluminium (genanvendt)</option>
                                                        <option value="8.43,8429.0783">Aluminium (nyt)</option>
                                                        <option value="3.17,3170.59">Andre plast (nyt)</option>
                                                        <option value="0.10,100.21">Beton</option>
                                                        <option value="0.81,813.07">Bly, zink og tin (genanvendt)</option>
                                                        <option value="3.13,3133.15">Bly, zink og tin (nyt)</option>
                                                        <option value="0.90,900.80">Cement, kalk og gips</option>
                                                        <option value="0.68,684.81">Glas (genanvendt)</option>
                                                        <option value="1.00,1000.05">Glas (nyt)</option>
                                                        <option value="3.20,3202.95">Ikke-jernholdige metaller (genanvendt)</option>
                                                        <option value="5.68,5684.63">Ikke-jernholdige metaller (nyt)</option>
                                                        <option value="2.78,2775.40">Kemikalier</option>
                                                        <option value="1.19,1193.34">Keramisk</option>
                                                        <option value="0.92,9617.94">Kobber (genanvendt)</option>
                                                        <option value="0.84,839.22">Mineraluld</option>
                                                        <option value="0.29,293.89">Mursten</option>
                                                        <option value="1.10,1096.31">Papir og pap (genanvendt)</option>
                                                        <option value="2.69,2688.69">Papir og pap (nyt)</option>
                                                        <option value="1.340,1344.05">Plast (genanvendt)</option>
                                                        <option value="10.10,10102.49">Plast: Nylon, PC (nyt)</option>
                                                        <option value="0.01,6.31">Sand og ler</option>
                                                        <option value="0.74,738.94">Stål og jern (genanvendt)</option>
                                                        <option value="13.99,13986.49">Tekstil</option>
                                                        <option value="1.36,1362.67">Træ (genanvendt)</option>
                                                        <option value="1.66,1660.03">Træ (nyt)</option>
                                                        <option value="12749.127,12749127.00">Ædelmetaller</option>
                                                    </select></td>
                                                <td><input type="text" onchange="cal5('PSST7MG[]','PSST7Q[]','PSST7UN[]','PSST7SC3[]','PSST7O7','PSST8O8','subtb4','subtb5','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" name="PSST7Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="cal5('PSST7MG[]','PSST7Q[]','PSST7UN[]','PSST7SC3[]','PSST7O7','PSST8O8','subtb4','subtb5','subtb6','table7');
                                            addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" name="PSST7UN[]" style="height:42px;max-width: 100% !important; width: 100%;">
                                                        <option value="KG">KG</option>
                                                        <option value="TON">TON</option>
                                                    </select></td>
                                                <td><input type="text" readonly name="PSST7SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PSST7OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-12 col-12">
                                        <h4>Total, ton CO2-e: <input type="text" readonly name="PSST7O7" value="<?php echo $PSST7O7; ?>"> </h4>
                                    </div>
                                </div>
                                <br>
                            </div>

                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-10 col-12">
                                        <br>
                                        <h4>Indkøb af materialer i monetære enheder (beløb i DKK)

                                        </h4>
                                    </div>
                                    <br>
                                    <div class="col-12  col-md-2">
                                        <br>
                                        <div class="row dflex flex-row" style="color:#27b939;">
                                            <p style="color:#27b939;">Tilføj række&nbsp; &nbsp;</p>
                                            <button type="button" class="btn btn-danger btn-circle btn3" onclick="adrow1('.adtable13')">
                                                <i class="fab fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-12 table-responsive-md">
                                <table class="table addtable1" id="tab_logic">
                                    <thead>
                                        <tr class="trset">
                                            <th style="text-align: start;" scope="col">Beskrivelse</th>
                                            <th style="text-align: start;" scope="col">Materialegruppe</th>
                                            <th style="text-align: start;" scope="col">Beløb (ekskl. moms) </th>

                                            <th style="text-align: start;" scope="col">Enhed</th>
                                            <th style="text-align: start;" scope="col">Scope 3</th>
                                            <th style="text-align: start;" scope="col">Bemærkning</th>
                                        </tr>
                                    </thead>
                                    <tbody class="stytb adtable13">
                                        <?php if (isset($_SESSION['PSST8DE'])) {
                                            for ($i = 0; $i < count($PSST8DE); $i++) {
                                        ?> <tr class="row1">
                                                    <td><input type="text" name="PSST8DE[]" value="<?php echo $PSST8DE[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal6('PSST8MG[]','PSST8AE[]','PSST8UN[]','PSST8SC3[]','PSST8O8','PSST7O7','subtb4','subtb5','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" name="PSST8MG[]" style="height:42px;max-width: 100% !important; width: 100%;">
                                                            <option value="<?php echo $PSST8MG[$i]; ?>"> <?php echo $data3[$PSST8MG[$i]]; ?></option>
                                                            <option value="0.67">Stål og jern (nyt)</option>
                                                            <option value="0.07">Aluminium (genanvendt)</option>
                                                            <option value="0.20">Aluminium (nyt)</option>
                                                            <option value="0.15">Andre plast (nyt)</option>
                                                            <option value="0.01">Beton</option>
                                                            <option value="0.02">Bly, zink og tin (genanvendt)</option>
                                                            <option value="0.06">Bly, zink og tin (nyt)</option>
                                                            <option value="0.32">Cement, kalk og gips</option>
                                                            <option value="0.07">Glas (genanvendt)</option>
                                                            <option value="0.10">Glas (nyt)</option>
                                                            <option value="0.22">Ikke-jernholdige metaller (genanvendt)</option>
                                                            <option value="0.39">Ikke-jernholdige metaller (nyt)</option>
                                                            <option value="0.07">Kemikalier</option>
                                                            <option value="0.15">Keramisk</option>
                                                            <option value="0.03">Kobber (genanvendt)</option>
                                                            <option value="0.04">Kobber (nyt)</option>
                                                            <option value="0.13">Mineraluld</option>
                                                            <option value="0.10">Mursten</option>
                                                            <option value="0.02">Papir og pap (genanvendt)</option>
                                                            <option value="0.06">Papir og pap (nyt)</option>
                                                            <option value="0.06">Plast (genanvendt)</option>
                                                            <option value="0.48">Plast: Nylon, PC (nyt)</option>
                                                            <option value="0.03">Sand og ler</option>
                                                            <option value="0.12">Stål og jern (genanvendt)</option>
                                                            <option value="0.09">Tekstil</option>
                                                            <option value="0.11">Træ (genanvendt)</option>
                                                            <option value="0.12">Træ (nyt)</option>
                                                            <option value="0.04">Ædelmetaller</option>
                                                        </select></td>

                                                    <td><input type="text" onchange="cal6('PSST8MG[]','PSST8AE[]','PSST8UN[]','PSST8SC3[]','PSST8O8','PSST7O7','subtb4','subtb5','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" name="PSST8AE[]" Value="<?php echo $PSST8AE[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal6('PSST8MG[]','PSST8AE[]','PSST8UN[]','PSST8SC3[]','PSST8O8','PSST7O7','subtb4','subtb5','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" name="PSST8UN[]" style="height:42px;max-width: 100% !important; width: 100%;">
                                                            <option value="DKK">DKK</option>
                                                        </select></td>
                                                    <td><input type="text" readonly name="PSST8SC3[]" Value="<?php echo $PSST8SC3[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="PSST8OTC[]" Value="<?php echo $PSST8OTC[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr><?php }
                                                } else { ?>
                                            <tr class="row1">
                                                <td><input type="text" name="PSST8DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="cal6('PSST8MG[]','PSST8AE[]','PSST8UN[]','PSST8SC3[]','PSST8O8','PSST7O7','subtb4','subtb5','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" name="PSST8MG[]" style="height:42px;max-width: 100% !important; width: 100%;">

                                                        <option value="0.67">Stål og jern (nyt)</option>
                                                        <option value="0.07">Aluminium (genanvendt)</option>
                                                        <option value="0.20">Aluminium (nyt)</option>
                                                        <option value="0.15">Andre plast (nyt)</option>
                                                        <option value="0.01">Beton</option>
                                                        <option value="0.02">Bly, zink og tin (genanvendt)</option>
                                                        <option value="0.06">Bly, zink og tin (nyt)</option>
                                                        <option value="0.32">Cement, kalk og gips</option>
                                                        <option value="0.07">Glas (genanvendt)</option>
                                                        <option value="0.10">Glas (nyt)</option>
                                                        <option value="0.22">Ikke-jernholdige metaller (genanvendt)</option>
                                                        <option value="0.39">Ikke-jernholdige metaller (nyt)</option>
                                                        <option value="0.07">Kemikalier</option>
                                                        <option value="0.15">Keramisk</option>
                                                        <option value="0.03">Kobber (genanvendt)</option>
                                                        <option value="0.04">Kobber (nyt)</option>
                                                        <option value="0.13">Mineraluld</option>
                                                        <option value="0.10">Mursten</option>
                                                        <option value="0.02">Papir og pap (genanvendt)</option>
                                                        <option value="0.06">Papir og pap (nyt)</option>
                                                        <option value="0.06">Plast (genanvendt)</option>
                                                        <option value="0.48">Plast: Nylon, PC (nyt)</option>
                                                        <option value="0.03">Sand og ler</option>
                                                        <option value="0.12">Stål og jern (genanvendt)</option>
                                                        <option value="0.09">Tekstil</option>
                                                        <option value="0.11">Træ (genanvendt)</option>
                                                        <option value="0.12">Træ (nyt)</option>
                                                        <option value="0.04">Ædelmetaller</option>
                                                    </select></td>

                                                <td><input type="text" onchange="cal6('PSST8MG[]','PSST8AE[]','PSST8UN[]','PSST8SC3[]','PSST8O8','PSST7O7','subtb4','subtb5','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" name="PSST8AE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="cal6('PSST8MG[]','PSST8AE[]','PSST8UN[]','PSST8SC3[]','PSST8O8','PSST7O7','subtb4','subtb5','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" name="PSST8UN[]" style="height:42px;max-width: 100% !important; width: 100%;">
                                                        <option value="DKK">DKK</option>
                                                    </select></td>
                                                <td><input type="text" readonly name="PSST8SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PSST8OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            </tr>
                                            <tr class="row1">
                                                <td><input type="text" name="PSST8DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="cal6('PSST8MG[]','PSST8AE[]','PSST8UN[]','PSST8SC3[]','PSST8O8','PSST7O7','subtb4','subtb5','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" name="PSST8MG[]" style="height:42px;max-width: 100% !important; width: 100%;">
                                                        <option value="0.67">Stål og jern (nyt)</option>
                                                        <option value="0.07">Aluminium (genanvendt)</option>
                                                        <option value="0.20">Aluminium (nyt)</option>
                                                        <option value="0.15">Andre plast (nyt)</option>
                                                        <option value="0.01">Beton</option>
                                                        <option value="0.02">Bly, zink og tin (genanvendt)</option>
                                                        <option value="0.06">Bly, zink og tin (nyt)</option>
                                                        <option value="0.32">Cement, kalk og gips</option>
                                                        <option value="0.07">Glas (genanvendt)</option>
                                                        <option value="0.10">Glas (nyt)</option>
                                                        <option value="0.22">Ikke-jernholdige metaller (genanvendt)</option>
                                                        <option value="0.39">Ikke-jernholdige metaller (nyt)</option>
                                                        <option value="0.07">Kemikalier</option>
                                                        <option value="0.15">Keramisk</option>
                                                        <option value="0.03">Kobber (genanvendt)</option>
                                                        <option value="0.04">Kobber (nyt)</option>
                                                        <option value="0.13">Mineraluld</option>
                                                        <option value="0.10">Mursten</option>
                                                        <option value="0.02">Papir og pap (genanvendt)</option>
                                                        <option value="0.06">Papir og pap (nyt)</option>
                                                        <option value="0.06">Plast (genanvendt)</option>
                                                        <option value="0.48">Plast: Nylon, PC (nyt)</option>
                                                        <option value="0.03">Sand og ler</option>
                                                        <option value="0.12">Stål og jern (genanvendt)</option>
                                                        <option value="0.09">Tekstil</option>
                                                        <option value="0.11">Træ (genanvendt)</option>
                                                        <option value="0.12">Træ (nyt)</option>
                                                        <option value="0.04">Ædelmetaller</option>
                                                    </select></td>

                                                <td><input type="text" onchange="cal6('PSST8MG[]','PSST8AE[]','PSST8UN[]','PSST8SC3[]','PSST8O8','PSST7O7','subtb4','subtb5','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" name="PSST8AE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="cal6('PSST8MG[]','PSST8AE[]','PSST8UN[]','PSST8SC3[]','PSST8O8','PSST7O7','subtb4','subtb5','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" name="PSST8UN[]" style="height:42px;max-width: 100% !important; width: 100%;">
                                                        <option value="DKK">DKK</option>
                                                    </select></td>
                                                <td><input type="text" readonly name="PSST8SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PSST8OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            </tr>
                                            <tr class="row1">
                                                <td><input type="text" name="PSST8DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="cal6('PSST8MG[]','PSST8AE[]','PSST8UN[]','PSST8SC3[]','PSST8O8','PSST7O7','subtb4','subtb5','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" name="PSST8MG[]" style="height:42px;max-width: 100% !important; width: 100%;">
                                                        <option value="0.67">Stål og jern (nyt)</option>
                                                        <option value="0.07">Aluminium (genanvendt)</option>
                                                        <option value="0.20">Aluminium (nyt)</option>
                                                        <option value="0.15">Andre plast (nyt)</option>
                                                        <option value="0.01">Beton</option>
                                                        <option value="0.02">Bly, zink og tin (genanvendt)</option>
                                                        <option value="0.06">Bly, zink og tin (nyt)</option>
                                                        <option value="0.32">Cement, kalk og gips</option>
                                                        <option value="0.07">Glas (genanvendt)</option>
                                                        <option value="0.10">Glas (nyt)</option>
                                                        <option value="0.22">Ikke-jernholdige metaller (genanvendt)</option>
                                                        <option value="0.39">Ikke-jernholdige metaller (nyt)</option>
                                                        <option value="0.07">Kemikalier</option>
                                                        <option value="0.15">Keramisk</option>
                                                        <option value="0.03">Kobber (genanvendt)</option>
                                                        <option value="0.04">Kobber (nyt)</option>
                                                        <option value="0.13">Mineraluld</option>
                                                        <option value="0.10">Mursten</option>
                                                        <option value="0.02">Papir og pap (genanvendt)</option>
                                                        <option value="0.06">Papir og pap (nyt)</option>
                                                        <option value="0.06">Plast (genanvendt)</option>
                                                        <option value="0.48">Plast: Nylon, PC (nyt)</option>
                                                        <option value="0.03">Sand og ler</option>
                                                        <option value="0.12">Stål og jern (genanvendt)</option>
                                                        <option value="0.09">Tekstil</option>
                                                        <option value="0.11">Træ (genanvendt)</option>
                                                        <option value="0.12">Træ (nyt)</option>
                                                        <option value="0.04">Ædelmetaller</option>
                                                    </select></td>

                                                <td><input type="text" onchange="cal6('PSST8MG[]','PSST8AE[]','PSST8UN[]','PSST8SC3[]','PSST8O8','PSST7O7','subtb4','subtb5','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" name="PSST8AE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="cal6('PSST8MG[]','PSST8AE[]','PSST8UN[]','PSST8SC3[]','PSST8O8','PSST7O7','subtb4','subtb5','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" name="PSST8UN[]" style="height:42px;max-width: 100% !important; width: 100%;">
                                                        <option value="DKK">DKK</option>
                                                    </select></td>
                                                <td><input type="text" readonly name="PSST8SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PSST8OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            </tr>
                                        <?php } ?>


                                    </tbody>
                                </table>
                            </div>
                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-12 col-12">
                                        <h4>Total, ton CO2-e: <input type="text" readonly name="PSST8O8" value="<?php echo  $PSST8O8; ?>"></h4>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-12">
                                <div class="row head3" style="background-color: #c0c5cb; color: black;">
                                    <div class="col-md-5">
                                        <h3 title="Indkøb af produkter kan opgøres i både fysiske enheder og monetære enheder (beløb i DKK). Det er vigtigt at det samme indkøb ikke indtastes begge steder, idet det vil give en dobbelttælling. Indberetning i fysiske enheder giver et mere præcist resultat end ved monetære enheder.

                                            Indkøb af services og tjenesteydelser indtastes i monetære enheder.">Indkøb af produkter og services</h3>
                                    </div>
                                    <div class="col-md-3">
                                        <h3 style="white-space: nowrap; ">Samlet udledning: </h3>
                                    </div>
                                    <div class="col-md-1">
                                        <h3 id="subtb5"><?php echo number_format(floatval($PSST9O9) +floatval( $PSST10O10), 1); ?></h3>
                                    </div>
                                    <div class="col-md-3">
                                        <h3 style="white-space: nowrap; ">Ton CO2-e</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-10 col-12">
                                        <br>
                                        <h4>Indkøb af produkter i fysiske enheder
                                        </h4>
                                    </div>
                                    <br>
                                    <div class="col-12  col-md-2">
                                        <br>
                                        <div class="row dflex flex-row" style="color:#27b939;">
                                            <p style="color:#27b939;">Tilføj række&nbsp; &nbsp;</p>
                                            <button type="button" class="btn btn-danger btn-circle btn3" onclick="adrow1('.adtable14')">
                                                <i class="fab fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-12 table-responsive-md">
                                <table class="table addtable1" id="tab_logic">
                                    <thead>
                                        <tr class="trset">
                                            <th style="text-align: start;" scope="col">Beskrivelse</th>
                                            <th style="text-align: start;" scope="col">Produktgruppe</th>
                                            <th style="text-align: start;" scope="col">Specifikke produkter</th>
                                            <th style="text-align: start;" scope="col">Mængde</th>
                                            <th style="text-align: start;" scope="col">Enhed</th>
                                            <th style="text-align: start;" scope="col">Scope 3</th>
                                            <th style="text-align: start;" scope="col">Bemærkning</th>
                                        </tr>
                                    </thead>
                                    <tbody class="stytb adtable14">
                                        <?php if (isset($_SESSION['PSST9DE'])) {
                                            for ($i = 0; $i < count($PSST9DE); $i++) { ?>
                                                <tr class="row1">
                                                    <td><input type="text" name="PSST9DE[]" value="<?php echo $PSST9DE[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="changecol1('PSST9PG[]','PSST9SP[]','PSST9Q[]','PSST9UN[]','PSST9SC3[]','PSST9O9','PSST10O10','subtb5','subtb4','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" name="PSST9PG[]" style="height:42px; max-width: 100% !important; width: 100%;">
                                                            <option value="<?php echo $PSST9PG[$i] ?>"><?php echo $PSST9PG[$i]; ?></option>
                                                            <option value="Kontor elektronik">Kontor elektronik</option>
                                                            <option value="Fødevarer">Fødevarer</option>
                                                            <option value="Vandforbrug">Vandforbrug</option>
                                                            <option value="Kunstgødning">Kunstgødning</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="" name="PSST9SP[]" onchange="cal7('PSST9SP[]','PSST9Q[]','PSST9UN[]','PSST9SC3[]','PSST9O9','PSST10O10','subtb5','subtb4','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" style="height:42px;max-width: 100% !important; width: 100%;">
                                                            <option value="<?php echo $PSST9SP[$i] ?>"><?php echo $PSST9SP[$i]; ?></option>
                                                            <option value="Generelt">Generelt</option>
                                                        </select></td>
                                                    <td><input type="text" name="PSST9Q[]" value="<?php echo $PSST9Q[$i]; ?>" onchange="cal7('PSST9SP[]','PSST9Q[]','PSST9UN[]','PSST9SC3[]','PSST9O9','PSST10O10','subtb5','subtb4','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" name="PSST9UN[]" onchange="cal7('PSST9SP[]','PSST9Q[]','PSST9UN[]','PSST9SC3[]','PSST9O9','PSST10O10','subtb5','subtb4','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" style="height:42px;max-width: 100% !important; width: 100%;">
                                                            <option value="<?php echo $PSST9UN[$i]; ?>"><?php echo $PSST9UN[$i]; ?></option>
                                                            <option value="KG">Kg </option>
                                                            <option value="Antal">Antal</option>
                                                            <option value="L">L</option>
                                                        </select></td>
                                                    <td><input type="text" readonly name="PSST9SC3[]" value="<?php echo $PSST9Q[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="PSST9OTC[]" value="<?php echo $PSST9OTC[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>

                                            <?php }
                                        } else { ?>
                                            <tr class="row1">
                                                <td><input type="text" name="PSST9DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="changecol1('PSST9PG[]','PSST9SP[]','PSST9Q[]','PSST9UN[]','PSST9SC3[]','PSST9O9','PSST10O10','subtb5','subtb4','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" name="PSST9PG[]" style="height:42px; max-width: 100% !important; width: 100%;">
                                                        <option value="Kontor elektronik">Kontor elektronik</option>
                                                        <option value="Fødevarer">Fødevarer</option>
                                                        <option value="Vandforbrug">Vandforbrug</option>
                                                        <option value="Kunstgødning">Kunstgødning</option>
                                                    </select>
                                                </td>
                                                <td><select class="" name="PSST9SP[]" onchange="cal7('PSST9SP[]','PSST9Q[]','PSST9UN[]','PSST9SC3[]','PSST9O9','PSST10O10','subtb5','subtb4','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" style="height:42px;max-width: 100% !important; width: 100%;">
                                                        <option value="Generelt">Generelt</option>
                                                    </select></td>
                                                <td><input type="text" onchange="cal7('PSST9SP[]','PSST9Q[]','PSST9UN[]','PSST9SC3[]','PSST9O9','PSST10O10','subtb5','subtb4','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" name="PSST9Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="cal7('PSST9SP[]','PSST9Q[]','PSST9UN[]','PSST9SC3[]','PSST9O9','PSST10O10','subtb5','subtb4','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" name="PSST9UN[]" style="height:42px;max-width: 100% !important; width: 100%;">
                                                        <option value="KG">Kg </option>
                                                        <option value="Antal">Antal</option>
                                                        <option value="L">L</option>
                                                    </select></td>
                                                <td><input type="text" readonly name="PSST9SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PSST9OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            </tr>
                                            <tr class="row1">
                                                <td><input type="text" name="PSST9DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="changecol1('PSST9PG[]','PSST9SP[]','PSST9Q[]','PSST9UN[]','PSST9SC3[]','PSST9O9','PSST10O10','subtb5','subtb4','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" name="PSST9PG[]" style="height:42px;max-width: 100% !important; width: 100%;">
                                                        <option value="Kontor elektronik">Kontor elektronik</option>
                                                        <option value="Fødevarer">Fødevarer</option>
                                                        <option value="Vandforbrug">Vandforbrug</option>
                                                        <option value="Kunstgødning">Kunstgødning</option>
                                                    </select>
                                                </td>
                                                <td><select class="" onchange="cal7('PSST9SP[]','PSST9Q[]','PSST9UN[]','PSST9SC3[]','PSST9O9','PSST10O10','subtb5','subtb4','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" name="PSST9SP[]" style="height:42px;max-width: 100% !important; width: 100%;">
                                                        <option value="Generelt">Generelt</option>
                                                    </select></td>
                                                <td><input type="text" onchange="cal7('PSST9SP[]','PSST9Q[]','PSST9UN[]','PSST9SC3[]','PSST9O9','PSST10O10','subtb5','subtb4','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" name="PSST9Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="cal7('PSST9SP[]','PSST9Q[]','PSST9UN[]','PSST9SC3[]','PSST9O9','PSST10O10','subtb5','subtb4','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" name="PSST9UN[]" style="height:42px;max-width: 100% !important; width: 100%;">
                                                        <option value="KG">Kg </option>
                                                        <option value="Antal">Antal</option>
                                                        <option value="L">L</option>
                                                    </select></td>
                                                <td><input type="text" readonly name="PSST9SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PSST9OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            </tr>
                                            <tr class="row1">
                                                <td><input type="text" name="PSST9DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="changecol1('PSST9PG[]','PSST9SP[]','PSST9Q[]','PSST9UN[]','PSST9SC3[]','PSST9O9','PSST10O10','subtb5','subtb4','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" name="PSST9PG[]" style="height:42px;max-width: 100% !important; width: 100%;">
                                                        <option value="Kontor elektronik">Kontor elektronik</option>
                                                        <option value="Fødevarer">Fødevarer</option>
                                                        <option value="Vandforbrug">Vandforbrug</option>
                                                        <option value="Kunstgødning">Kunstgødning</option>
                                                    </select>
                                                </td>
                                                <td><select class="" onchange="cal7('PSST9SP[]','PSST9Q[]','PSST9UN[]','PSST9SC3[]','PSST9O9','PSST10O10','subtb5','subtb4','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" name="PSST9SP[]" style="height:42px;max-width: 100% !important; width: 100%;">
                                                        <option value="Generelt">Generelt</option>
                                                    </select></td>
                                                <td><input type="text" onchange="cal7('PSST9SP[]','PSST9Q[]','PSST9UN[]','PSST9SC3[]','PSST9O9','PSST10O10','subtb5','subtb4','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" name="PSST9Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="cal7('PSST9SP[]','PSST9Q[]','PSST9UN[]','PSST9SC3[]','PSST9O9','PSST10O10','subtb5','subtb4','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" name="PSST9UN[]" style="height:42px;max-width: 100% !important; width: 100%;">
                                                        <option value="KG">Kg </option>
                                                        <option value="Antal">Antal</option>
                                                        <option value="L">L</option>
                                                    </select></td>
                                                <td><input type="text" readonly name="PSST9SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PSST9OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-12 col-12">
                                        <h4>Total, ton CO2-e: <input type="text" readonly name="PSST9O9" value="<?php echo $PSST9O9; ?>"></h4>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-10 col-12">
                                        <br>
                                        <h4>Indkøb af produkter og services i monetære enheder (beløb i DKK)
                                        </h4>
                                    </div>
                                    <br>
                                    <div class="col-12  col-md-2">
                                        <br>
                                        <div class="row dflex flex-row" style="color:#27b939;">
                                            <p style="color:#27b939;">Tilføj række&nbsp; &nbsp;</p>
                                            <button type="button" class="btn btn-danger btn-circle btn3" onclick="adrow1('.adtable15')">
                                                <i class="fab fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-12 table-responsive-md">
                                <table class="table addtable1" id="tab_logic">
                                    <thead>
                                        <tr class="trset">
                                            <th style="text-align: start;" scope="col">Beskrivelse</th>
                                            <th style="text-align: start;" scope="col">Produktgruppe</th>
                                            <th style="text-align: start;" scope="col">Specifikke produkter</th>
                                            <th style="text-align: start;" scope="col">Mængde</th>
                                            <th style="text-align: start;" scope="col">Enhed</th>
                                            <th style="text-align: start;" scope="col">Scope 3</th>
                                            <th style="text-align: start;" scope="col">Bemærkning</th>
                                        </tr>
                                    </thead>
                                    <tbody class="stytb adtable15">
                                        <?php if (isset($_SESSION['PSST10DE'])) {
                                            for ($i = 0; $i < count($PSST10DE); $i++) {
                                        ?>
                                                <tr class="row1">
                                                    <td><input type="text" name="PSST10DE[]" value="<?php echo $PSST10DE[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" name="PSST10PG[]" onchange="changecol2('PSST10PG[]','PSST10SP[]');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" style="height:42px;max-width: 100% !important; width: 100%;">
                                                            <option value="<?php echo $PSST10PG[$i]; ?>"><?php echo $data4[$PSST10PG[$i]]; ?></option>
                                                            <option value="0">Kontor elektronik</option>
                                                            <option value="1">Fødevarer</option>
                                                            <option value="2">Service og tjenesteydelser</option>
                                                            <option value="3">Byggeri og vedligeholdelse</option>
                                                            <option value="4">Møbler og inventar</option>
                                                            <option value="5">Vandforbrug</option>
                                                            <option value="6">Arbejdstøj o.lign.</option>
                                                            <option value="7">Kontor artikler</option>
                                                            <option value="8">Transportmidler</option>
                                                            <option value="9">Events/personale aktiviteter</option>
                                                            <option value="10">Kurser og uddannelse</option>
                                                            <option value="11">IT services / softwares</option>
                                                            <option value="12">Post (pakkepost og breve)</option>
                                                            <option value="13">Netværk / abonnementer</option>
                                                            <option value="14">Hårde hvidevarer</option>
                                                            <option value="15">Plast og gummi komponenter</option>
                                                            <option value="16">Metal komponenter</option>
                                                            <option value="17">Glas komponenter</option>
                                                            <option value="18">Reparation og vedligehold af motorkøretøjer</option>
                                                            <option value="19">Kunstgødning</option>
                                                            <option value="20">Køb af høj teknologisk- og medicinsk udstyr</option>
                                                            <option value="21">Leje af maskiner</option>
                                                            <option value="22">Køb af maskiner</option>
                                                            <option value="23">Blomster og planter</option>
                                                            <option value="24">Forsikringer</option>
                                                            <option value="25">Forskning og udvikling</option>
                                                            <option value="26">Genbrugte produkter</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="" name="PSST10SP[]" onchange="cal8('PSST10SP[]','PSST10AE[]','PSST10SC3[]','PSST10O10','PSST9O9','subtb5','subtb4','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" style="height:42px; max-width: 100% !important; width: 100%;">
                                                            <option value="<?php echo $PSST10SP[$i]; ?>"><?php echo $data5[$PSST10SP[$i]]; ?></option>
                                                            <option value="0.06">Generelt</option>
                                                        </select></td>
                                                    <td><input type="text" name="PSST10AE[]" value="<?php echo $PSST10AE[$i]; ?>" onchange="cal8('PSST10SP[]','PSST10AE[]','PSST10SC3[]','PSST10O10','PSST9O9','subtb5','subtb4','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" name="PSST10UN[]" onchange="cal8('PSST10SP[]','PSST10AE[]','PSST10SC3[]','PSST10O10','PSST9O9','subtb5','subtb4','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" style="height:42px;max-width: 100% !important; width: 100%;">
                                                            <option value="<?php echo $PSST10UN[$i]; ?>"><?php echo $PSST10UN[$i]; ?></option>
                                                            <option value="DKK">DKK</option>

                                                        </select></td>
                                                    <td><input type="text" readonly name="PSST10SC3[]" value="<?php echo $PSST10SC3[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="PSST10OTC[]" value="<?php echo $PSST10OTC[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>


                                            <?php }
                                        } else { ?>
                                            <tr class="row1">
                                                <td><input type="text" name="PSST10DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" name="PSST10PG[]" onchange="changecol2('PSST10PG[]','PSST10SP[]');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" style="height:42px;max-width: 100% !important; width: 100%;">
                                                        <option value="0">Kontor elektronik</option>
                                                        <option value="1">Fødevarer</option>
                                                        <option value="2">Service og tjenesteydelser</option>
                                                        <option value="3">Byggeri og vedligeholdelse</option>
                                                        <option value="4">Møbler og inventar</option>
                                                        <option value="5">Vandforbrug</option>
                                                        <option value="6">Arbejdstøj o.lign.</option>
                                                        <option value="7">Kontor artikler</option>
                                                        <option value="8">Transportmidler</option>
                                                        <option value="9">Events/personale aktiviteter</option>
                                                        <option value="10">Kurser og uddannelse</option>
                                                        <option value="11">IT services / softwares</option>
                                                        <option value="12">Post (pakkepost og breve)</option>
                                                        <option value="13">Netværk / abonnementer</option>
                                                        <option value="14">Hårde hvidevarer</option>
                                                        <option value="15">Plast og gummi komponenter</option>
                                                        <option value="16">Metal komponenter</option>
                                                        <option value="17">Glas komponenter</option>
                                                        <option value="18">Reparation og vedligehold af motorkøretøjer</option>
                                                        <option value="19">Kunstgødning</option>
                                                        <option value="20">Køb af høj teknologisk- og medicinsk udstyr</option>
                                                        <option value="21">Leje af maskiner</option>
                                                        <option value="22">Køb af maskiner</option>
                                                        <option value="23">Blomster og planter</option>
                                                        <option value="24">Forsikringer</option>
                                                        <option value="25">Forskning og udvikling</option>
                                                        <option value="26">Genbrugte produkter</option>
                                                    </select>
                                                </td>
                                                <td><select class="" name="PSST10SP[]" onchange="cal8('PSST10SP[]','PSST10AE[]','PSST10SC3[]','PSST10O10','PSST9O9','subtb5','subtb4','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" style="height:42px; max-width: 100% !important; width: 100%;">
                                                        <option value="0.06">Generelt</option>
                                                    </select></td>
                                                <td><input type="text" name="PSST10AE[]" onchange="cal8('PSST10SP[]','PSST10AE[]','PSST10SC3[]','PSST10O10','PSST9O9','subtb5','subtb4','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" name="PSST10UN[]" onchange="cal8('PSST10SP[]','PSST10AE[]','PSST10SC3[]','PSST10O10','PSST9O9','subtb5','subtb4','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" style="height:42px;max-width: 100% !important; width: 100%;">
                                                        <option value="DKK">DKK</option>

                                                    </select></td>
                                                <td><input type="text" readonly name="PSST10SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PSST10OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            </tr>
                                            <tr class="row1">
                                                <td><input type="text" name="PSST10DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="changecol2('PSST10PG[]','PSST10SP[]');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" name="PSST10PG[]" style="height:42px;max-width: 100% !important; width: 100%;">
                                                        <option value="0">Kontor elektronik</option>
                                                        <option value="1">Fødevarer</option>
                                                        <option value="2">Service og tjenesteydelser</option>
                                                        <option value="3">Byggeri og vedligeholdelse</option>
                                                        <option value="4">Møbler og inventar</option>
                                                        <option value="5">Vandforbrug</option>
                                                        <option value="6">Arbejdstøj o.lign.</option>
                                                        <option value="7">Kontor artikler</option>
                                                        <option value="8">Transportmidler</option>
                                                        <option value="9">Events/personale aktiviteter</option>
                                                        <option value="10">Kurser og uddannelse</option>
                                                        <option value="11">IT services / softwares</option>
                                                        <option value="12">Post (pakkepost og breve)</option>
                                                        <option value="13">Netværk / abonnementer</option>
                                                        <option value="14">Hårde hvidevarer</option>
                                                        <option value="15">Plast og gummi komponenter</option>
                                                        <option value="16">Metal komponenter</option>
                                                        <option value="17">Glas komponenter</option>
                                                        <option value="18">Reparation og vedligehold af motorkøretøjer</option>
                                                        <option value="19">Kunstgødning</option>
                                                        <option value="20">Køb af høj teknologisk- og medicinsk udstyr</option>
                                                        <option value="21">Leje af maskiner</option>
                                                        <option value="22">Køb af maskiner</option>
                                                        <option value="23">Blomster og planter</option>
                                                        <option value="24">Forsikringer</option>
                                                        <option value="25">Forskning og udvikling</option>
                                                        <option value="26">Genbrugte produkter</option>
                                                    </select>
                                                </td>
                                                <td><select class="" onchange="cal8('PSST10SP[]','PSST10AE[]','PSST10SC3[]','PSST10O10','PSST9O9','subtb5','subtb4','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" name="PSST10SP[]" style="height:42px;max-width: 100% !important; width: 100%;">
                                                        <option value="0.06">Generelt</option>
                                                    </select></td>
                                                <td><input type="text" onchange="cal8('PSST10SP[]','PSST10AE[]','PSST10SC3[]','PSST10O10','PSST9O9','subtb5','subtb4','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" name="PSST10AE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="cal8('PSST10SP[]','PSST10AE[]','PSST10SC3[]','PSST10O10','PSST9O9','subtb5','subtb4','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" name="PSST10UN[]" style="height:42px;max-width: 100% !important; width: 100%;">
                                                        <option value="DKK">DKK</option>
                                                    </select>
                                                </td>
                                                <td><input type="text" readonly name="PSST10SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PSST10OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            </tr>
                                            <tr class="row1">
                                                <td><input type="text" name="PSST10DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="changecol2('PSST10PG[]','PSST10SP[]');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" name="PSST10PG[]" style="height:42px; max-width: 100% !important; width: 100%;">
                                                        <option value="0">Kontor elektronik</option>
                                                        <option value="1">Fødevarer</option>
                                                        <option value="2">Service og tjenesteydelser</option>
                                                        <option value="3">Byggeri og vedligeholdelse</option>
                                                        <option value="4">Møbler og inventar</option>
                                                        <option value="5">Vandforbrug</option>
                                                        <option value="6">Arbejdstøj o.lign.</option>
                                                        <option value="7">Kontor artikler</option>
                                                        <option value="8">Transportmidler</option>
                                                        <option value="9">Events/personale aktiviteter</option>
                                                        <option value="10">Kurser og uddannelse</option>
                                                        <option value="11">IT services / softwares</option>
                                                        <option value="12">Post (pakkepost og breve)</option>
                                                        <option value="13">Netværk / abonnementer</option>
                                                        <option value="14">Hårde hvidevarer</option>
                                                        <option value="15">Plast og gummi komponenter</option>
                                                        <option value="16">Metal komponenter</option>
                                                        <option value="17">Glas komponenter</option>
                                                        <option value="18">Reparation og vedligehold af motorkøretøjer</option>
                                                        <option value="19">Kunstgødning</option>
                                                        <option value="20">Køb af høj teknologisk- og medicinsk udstyr</option>
                                                        <option value="21">Leje af maskiner</option>
                                                        <option value="22">Køb af maskiner</option>
                                                        <option value="23">Blomster og planter</option>
                                                        <option value="24">Forsikringer</option>
                                                        <option value="25">Forskning og udvikling</option>
                                                        <option value="26">Genbrugte produkter</option>
                                                    </select>
                                                </td>
                                                <td><select class="" onchange="cal8('PSST10SP[]','PSST10AE[]','PSST10SC3[]','PSST10O10','PSST9O9','subtb5','subtb4','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" name="PSST10SP[]" style="height:42px;max-width: 100% !important; width: 100%;">
                                                        <option value="0.06">Generelt</option>
                                                    </select></td>
                                                <td><input type="text" onchange="cal8('PSST10SP[]','PSST10AE[]','PSST10SC3[]','PSST10O10','PSST9O9','subtb5','subtb4','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" name="PSST10AE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="cal8('PSST10SP[]','PSST10AE[]','PSST10SC3[]','PSST10O10','PSST9O9','subtb5','subtb4','subtb6','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" name="PSST10UN[]" style="height:42px;max-width: 100% !important; width: 100%;">
                                                        <option value="DKK">DKK </option>
                                                    </select>
                                                </td>
                                                <td><input type="text" readonly name="PSST10SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="PSST10OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            </tr>
                                        <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-12 col-12">
                                        <h4>Total, ton CO2-e: <input type="text" name="PSST10O10" value="<?php echo $PSST10O10; ?>"></h4>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-12">
                                <div class="row head3" style="background-color: #c0c5cb; color: black;">
                                    <div class="col-md-5">
                                        <h3 title="Under Andet kan du indtaste forbrug, som ikke er blevet fanget af alle ovenstående tabeller, i relation til indkøb af hjælpematerialer og serviceydelser, eller du kan tilføjes egne og mere specifikke beregninger. ">
                                            Andet
                                        </h3>
                                    </div>
                                    <div class="col-md-3">
                                        <h3 style="white-space: nowrap; ">Samlet udledning: </h3>
                                    </div>
                                    <div class="col-md-1">
                                        <h3 id="subtb6"><?php echo  number_format(floatval($POTT11O11)+floatval($POTT12O12), 1); ?></h3>
                                    </div>
                                    <div class="col-md-3">
                                        <h3 style="white-space: nowrap; ">Ton CO2-e</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-10 col-12">
                                        <br>
                                        <h4>Fysiske enheder
                                        </h4>
                                    </div>
                                    <br>
                                    <div class="col-12  col-md-2">
                                        <br>
                                        <div class="row dflex flex-row" style="color:#27b939;">
                                            <p style="color:#27b939;">Tilføj række&nbsp; &nbsp;</p>
                                            <button type="button" class="btn btn-danger btn-circle btn3" onclick="adrow1('.adtable16')">
                                                <i class="fab fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-12 table-responsive-md">
                                <table class="table addtable1" id="tab_logic">
                                    <thead>
                                        <tr class="trset">
                                            <th style="text-align: start;" scope="col">Beskrivelse</th>
                                            <th style="text-align: start;" scope="col">Indkøb</th>
                                            <th style="text-align: start;" scope="col">Mængde</th>
                                            <th style="text-align: start;" scope="col">Enhed</th>
                                            <th style="text-align: start;" scope="col">Emissionsfaktor</th>
                                            <th style="text-align: start;" scope="col">Scope 3</th>
                                            <th style="text-align: start;" scope="col">Bemærkning</th>
                                        </tr>
                                    </thead>
                                    <tbody class="stytb adtable16">
                                        <?php if (isset($_SESSION['POTT11DE'])) {
                                            for ($i = 0; $i < count($POTT11DE); $i++) { ?>
                                                <tr class="row1">
                                                    <td><input type="text" name="POTT11DE[]" value="<?php echo $POTT11DE[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="POTT11P[]" value="<?php echo $POTT11P[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="POTT11Q[]" value="<?php echo $POTT11Q[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="POTT11UN[]" value="<?php echo $POTT11UN[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="POTT11EF[]" value="<?php echo $POTT11EF[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="POTT11SC3[]" value="<?php echo $POTT11SC3[$i]; ?>" onchange="totalother('POTT11SC3[]','POTT11O11','POTT12O12','subtb6','subtb4','subtb5','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="POTT11OTC[]" value="<?php echo $POTT11OTC[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>
                                            <?php }
                                        } else { ?>
                                            <tr class="row1">
                                                <td><input type="text" name="POTT11DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="POTT11P[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="POTT11Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="POTT11UN[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="POTT11EF[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="POTT11SC3[]" onchange="totalother('POTT11SC3[]','POTT11O11','POTT12O12','subtb6','subtb4','subtb5','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="POTT11OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            </tr>
                                            <tr class="row1">
                                                <td><input type="text" name="POTT11DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="POTT11P[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="POTT11Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="POTT11UN[]" style="max-width: 100% !important; width: 100%;" class="form-contcarol"></td>
                                                <td><input type="text" name="POTT11EF[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" onchange="totalother('POTT11SC3[]','POTT11O11','POTT12O12','subtb6','subtb4','subtb5','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" name="POTT11SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="POTT11OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            </tr>
                                            <tr class="row1">
                                                <td><input type="text" name="POTT11DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="POTT11P[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="POTT11Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="POTT11UN[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="POTT11EF[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" onchange="totalother('POTT11SC3[]','POTT11O11','POTT12O12','subtb6','subtb4','subtb5','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" name="POTT11SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="POTT11OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            </tr>
                                        <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-12 col-12">

                                        <h4>Total, ton CO2-e: <input type="text" name="POTT11O11" value="<?php echo $POTT11O11; ?>" readonly></h4>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-10 col-12">
                                        <br>
                                        <h4>Monetære enheder (beløb i DKK)
                                        </h4>
                                    </div>
                                    <br>
                                    <div class="col-12  col-md-2">
                                        <br>
                                        <div class="row dflex flex-row" style="color:#27b939;">
                                            <p style="color:#27b939;">Tilføj række&nbsp; &nbsp;</p>
                                            <button type="button" class="btn btn-danger btn-circle btn3" onclick="adrow1('.adtable17')">
                                                <i class="fab fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-12 table-responsive-md">
                                <table class="table addtable1" id="tab_logic">
                                    <thead>
                                        <tr class="trset">
                                            <th style="text-align: start;" scope="col">Beskrivelse</th>
                                            <th style="text-align: start;" scope="col">Indkøb</th>
                                            <th style="text-align: start;" scope="col">Beløb (ekskl. moms)</th>
                                            <th style="text-align: start;" scope="col">Enhed</th>
                                            <th style="text-align: start;" scope="col">Emissionsfaktor</th>
                                            <th style="text-align: start;" scope="col">Scope 3</th>
                                            <th style="text-align: start;" scope="col">Bemærkning</th>
                                        </tr>
                                    </thead>
                                    <tbody class="stytb adtable17">
                                        <?php if (isset($_SESSION['POTT12DE'])) {
                                            for ($i = 0; $i < count($POTT12DE); $i++) { ?>
                                                <tr class="row1">
                                                    <td><input type="text" name="POTT12DE[]" value="<?php echo $POTT12DE[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="POTT12P[]" value="<?php echo $POTT12P[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="POTT12AE[]" value="<?php echo $POTT12AE[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="POTT12UN[]" value="<?php echo $POTT12UN[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="POTT12EF[]" value="<?php echo $POTT12EF[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="POTT12SC3[]" value="<?php echo $POTT12SC3[$i]; ?>" onchange="totalother('POTT12SC3[]','POTT12O12','POTT11O11','subtb6','subtb4','subtb5','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="POTT12OTC[]" value="<?php echo $POTT12OTC[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>

                                            <?php }
                                        } else { ?>
                                            <tr class="row1">
                                                <td><input type="text" name="POTT12DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="POTT12P[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="POTT12AE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="POTT12UN[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="POTT12EF[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="POTT12SC3[]" onchange="totalother('POTT12SC3[]','POTT12O12','POTT11O11','subtb6','subtb4','subtb5','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="POTT12OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            </tr>
                                            <tr class="row1">
                                                <td><input type="text" name="POTT12DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="POTT12P[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="POTT12AE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="POTT12UN[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="POTT12EF[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" onchange="totalother('POTT12SC3[]','POTT12O12','POTT11O11','subtb6','subtb4','subtb5','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" name="POTT12SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="POTT12OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            </tr>
                                            <tr class="row1">
                                                <td><input type="text" name="POTT12DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="POTT12P[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="POTT12AE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="POTT12UN[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="POTT12EF[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" onchange="totalother('POTT12SC3[]','POTT12O12','POTT11O11','subtb6','subtb4','subtb5','table7');addtotalheader(['PSST7O7','PSST8O8','PSST9O9','PSST10O10','POTT11O11','POTT12O12'],'table7')" name="POTT12SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="POTT12OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-12 col-12">
                                        <h4>Total, ton CO2-e: <input type="text" name="POTT12O12" value="<?php echo $POTT12O12; ?>" readonly></h4>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                        <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">

                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 4 - 6</h2>
                                </div>
                            </div>
                            <div class="col-12">
                                <br>
                                <h2 class="fs-title logr">Transport</h2>
                                <h5 class="fs-title short">"I denne fane kan du indtaste data for de fire overordnede transportkategorier:
                                    Egne og leasede transportmidler, Medarbejdertransport, Varetransport til virksomheden fra eksterne
                                    leverandører, Varetransport fra virksomheden til kunden og Andet.
                                </h5>
                                <br>
                                <h4>Tryk på "+" i venstre side for at folde rækkerne ud.</h4>
                                <br>
                                <br>
                                <h2 class="fs-title shgr1" title="Hvis flytransport indgår i din virksomheds transportforbrug, skal du angive om din virksomheds klimaaftryk skal beregnes med eller uden Radiative Forcing Index (RFI). RFI tager hensyn til specifikke flyudledninger i højere luftlag, og resultatet for CO2e-udledningen vil derfor være højere hvis RFI inkluderes. Sagt med andre ord skyldes anvendelsen af RFI faktoren, at drivhusgasser udledt højere oppe i atmosfæren har en større drivhusgaseffekt end tilsvarende mængder udledt ved landjorden. Der er dog stor usikkerhed forbundet med RFI faktoren, hvorfor der er varierende praksis i forhold til hvad RFI bør være.">
                                    Valg af Emissionsfaktor for Elektricitet
                                </h2>
                                <br>

                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <h2 class="fs-title shgr">Emissionsfaktor for flytransport:</h2>
                                </div>
                                <div class="col-md-3">
                                    <select class="selectpicker" name="select23">
                                        <option value="RFI">Inkluder RFI</option>
                                        <option value="ikkeRFI">Inkluder ikke RFI</option>
                                    </select>
                                </div>
                            </div>
                            <br>

                            <div class="col-12">
                                <div class="row head3">
                                    <div class="col-md-5">
                                        <h3 title="Her indtastes information omkring forbruget i forbindelse med virksomhedens egne køretøjer, hvad enten de er ejet eller leaset.

                                            Indberetning i fysiske enheder giver et mere præcis resultat, end i monetære enheder (beløb i DKK). Det anbefales at indtaste forbruget af drivmiddel hvor muligt. 

                                            Andelen af biobrændsel i motorbenzin og diesel kan specificeres hvis nødvendigt. Dette er kun muligt, hvis forbruget angives i liter, og virker dermed ikke for forbrug i km.

                                            Hvis forbruget af elkøretøjer allerede er inkluderet i fanen Energi og processer, skal det ikke indtastes her for at undgå dobbelttælling.">
                                            Egne og leasede transportmidler
                                        </h3>
                                    </div>
                                    <div class="col-md-3">
                                        <h3 style="white-space: nowrap; ">Samlet udledning: </h3>
                                    </div>
                                    <div class="col-md-1">
                                        <h3 id="table8"><?php echo number_format(floatval($TOTT1O1) + floatval($TOTT2O2), 1); ?></h3>
                                    </div>
                                    <div class="col-md-3">
                                        <h3 style="white-space: nowrap; ">Ton CO2-e</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-10 col-12">
                                        <br>
                                        <h4>Egne og leasede køretøjer
                                        </h4>
                                    </div>
                                    <br>
                                    <div class="col-12  col-md-2">
                                        <br>
                                        <div class="row dflex flex-row" style="color:#27b939;">
                                            <p style="color:#27b939;">Tilføj række&nbsp; &nbsp;</p>
                                            <button type="button" class="btn btn-danger btn-circle btn3" onclick="adrow1('.adtable18')">
                                                <i class="fab fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-12 table-responsive-md">
                                <table class="table addtable1" id="tab_logic">
                                    <thead>
                                        <tr class="trset">
                                            <th style="text-align: start;" scope="col">Beskrivelse </th>
                                            <th style="text-align: start;" scope="col">Transportmiddel </th>
                                            <th style="text-align: start;" scope="col">Drivmiddel </th>
                                            <th style="text-align: start;" scope="col">Biobrændstofsandel (%)</th>
                                            <th style="text-align: start;" scope="col">Mængde</th>
                                            <th style="text-align: start;" class="col-1" scope="col">Enhed</th>
                                            <th style="text-align: start;" scope="col">Scope 1</th>
                                            <th style="text-align: start;" scope="col">Scope 2</th>
                                            <th style="text-align: start;" scope="col">Scope 3</th>
                                            <th style="text-align: start;" scope="col">Udenfor scope</th>
                                            <th style="text-align: start;" scope="col">Bemærkning</th>
                                        </tr>
                                    </thead>
                                    <tbody class="stytb adtable18">
                                        <?php if (isset($_SESSION['TOTT1DE'])) {
                                            for ($i = 0; $i < count($TOTT1DE); $i++) { ?>
                                                <tr class="row1">
                                                    <td><input type="text" name="TOTT1DE[]" value="<?php echo $TOTT1DE[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal9();addtotalheader(['TOTT1O1','TOTT2O2'],'table8')" name="TOTT1TM[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="<?php echo $TOTT1TM[$i]; ?>"><?php echo $TOTT1TM[$i]; ?></option>
                                                            <option value="Personbiler">Personbiler</option>
                                                            <option value="Motorcykler">Motorcykler</option>
                                                            <option value="Varebiler">Varebiler</option>
                                                            <option value="Lastbiler">Lastbiler</option>
                                                            <option value="Busser">Busser</option>
                                                        </select></td>
                                                    <td><select class="" onchange="cal9();addtotalheader(['TOTT1O1','TOTT2O2'],'table8')" name="TOTT1P[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="<?php echo $TOTT1P[$i]; ?>"><?php echo $TOTT1P[$i]; ?></option>
                                                            <option value="Benzin">Benzin</option>
                                                            <option value="Diesel">Diesel</option>
                                                            <option value="El">El</option>
                                                            <option value="Hybrid ">Hybrid (ikke opladnings-hybrid)</option>
                                                            <option value="LNG">LNG</option>
                                                            <option value="CNG">CNG</option>
                                                        </select></td>
                                                    <td><input type="text" value="<?php echo $TOTT1BS[$i]; ?>" onchange="cal9();addtotalheader(['TOTT1O1','TOTT2O2'],'table8')" name="TOTT1BS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" value="<?php echo $TOTT1Q[$i]; ?>" onchange="cal9();addtotalheader(['TOTT1O1','TOTT2O2'],'table8')" name="TOTT1Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal9();addtotalheader(['TOTT1O1','TOTT2O2'],'table8')" name="TOTT1UN[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="<?php echo $TOTT1UN[$i]; ?>"><?php echo $TOTT1UN[$i]; ?></option>
                                                            <option value="Km">Km</option>
                                                            <option value="L">L</option>
                                                            <option value="KWh">KWh</option>
                                                        </select></td>
                                                    <td><input type="text" readonly name="TOTT1SC1[]" value="<?php echo $TOTT1SC1[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT1SC2[]" value="<?php echo $TOTT1SC2[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT1SC3[]" value="<?php echo $TOTT1SC3[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT1OTS[]" value="<?php echo $TOTT1OTS[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="TOTT1OTC[]" value="<?php echo $TOTT1OTC[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>
                                        <?php }
                                        }else{ ?>
                                        <tr class="row1">
                                            <td><input type="text" name="TOTT1DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            <td><select class="" onchange="cal9();addtotalheader(['TOTT1O1','TOTT2O2'],'table8')" name="TOTT1TM[]" style="max-width: 100% !important; width: 100%;">
                                                    <option value="Personbiler">Personbiler</option>
                                                    <option value="Motorcykler">Motorcykler</option>
                                                    <option value="Varebiler">Varebiler</option>
                                                    <option value="Lastbiler">Lastbiler</option>
                                                    <option value="Busser">Busser</option>
                                                </select></td>
                                            <td><select class="" onchange="cal9();addtotalheader(['TOTT1O1','TOTT2O2'],'table8')" name="TOTT1P[]" style="max-width: 100% !important; width: 100%;">
                                                    <option value="Benzin">Benzin</option>
                                                    <option value="Diesel">Diesel</option>
                                                    <option value="El">El</option>
                                                    <option value="Hybrid ">Hybrid (ikke opladnings-hybrid)</option>
                                                    <option value="LNG">LNG</option>
                                                    <option value="CNG">CNG</option>
                                                </select></td>
                                            <td><input type="text" onchange="cal9();addtotalheader(['TOTT1O1','TOTT2O2'],'table8')" name="TOTT1BS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            <td><input type="text" onchange="cal9();addtotalheader(['TOTT1O1','TOTT2O2'],'table8')" name="TOTT1Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            <td><select class="" onchange="cal9();addtotalheader(['TOTT1O1','TOTT2O2'],'table8')" name="TOTT1UN[]" style="max-width: 100% !important; width: 100%;">
                                                    <option value="Km">Km</option>
                                                    <option value="L">L</option>
                                                    <option value="KWh">KWh</option>
                                                </select></td>
                                            <td><input type="text" readonly name="TOTT1SC1[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            <td><input type="text" readonly name="TOTT1SC2[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            <td><input type="text" readonly name="TOTT1SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            <td><input type="text" readonly name="TOTT1OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            <td><input type="text" name="TOTT1OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                        </tr>
                                        <tr class="row1">
                                            <td><input type="text" name="TOTT1DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            <td><select class="" onchange="cal9();addtotalheader(['TOTT1O1','TOTT2O2'],'table8')" name="TOTT1TM[]" style="max-width: 100% !important; width: 100%;">
                                                    <option value="Personbiler">Personbiler</option>
                                                    <option value="Motorcykler">Motorcykler</option>
                                                    <option value="Varebiler">Varebiler</option>
                                                    <option value="Lastbiler">Lastbiler</option>
                                                    <option value="Busser">Busser</option>
                                                </select></td>
                                            <td><select class="" onchange="cal9();addtotalheader(['TOTT1O1','TOTT2O2'],'table8')" name="TOTT1P[]" style="max-width: 100% !important; width: 100%;">
                                                    <option value="Benzin">Benzin</option>
                                                    <option value="Diesel">Diesel</option>
                                                    <option value="El">El</option>
                                                    <option value="Hybrid">Hybrid (ikke opladnings-hybrid)</option>
                                                    <option value="LNG">LNG</option>
                                                    <option value="CNG">CNG</option>
                                                </select></td>
                                            <td><input type="text" onchange="cal9();addtotalheader(['TOTT1O1','TOTT2O2'],'table8')" name="TOTT1BS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            <td><input type="text" onchange="cal9();addtotalheader(['TOTT1O1','TOTT2O2'],'table8')" name="TOTT1Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            <td><select class="" onchange="cal9();addtotalheader(['TOTT1O1','TOTT2O2'],'table8')" name="TOTT1UN[]" style="max-width: 100% !important; width: 100%;">
                                                    <option value="Km">Km</option>
                                                    <option value="L">L</option>
                                                    <option value="KWh">KWh</option>
                                                </select></td>
                                            <td><input type="text" readonly name="TOTT1SC1[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            <td><input type="text" readonly name="TOTT1SC2[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            <td><input type="text" readonly name="TOTT1SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            <td><input type="text" readonly name="TOTT1OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            <td><input type="text" name="TOTT1OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                        </tr>
                                        <tr class="row1">
                                            <td><input type="text" name="TOTT1DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            <td><select class="" onchange="cal9();addtotalheader(['TOTT1O1','TOTT2O2'],'table8')" name="TOTT1TM[]" style="max-width: 100% !important; width: 100%;">
                                                    <option value="Personbiler">Personbiler</option>
                                                    <option value="Motorcykler">Motorcykler</option>
                                                    <option value="Varebiler">Varebiler</option>
                                                    <option value="Lastbiler">Lastbiler</option>
                                                    <option value="Busser">Busser</option>
                                                </select></td>
                                            <td><select class="" onchange="cal9();addtotalheader(['TOTT1O1','TOTT2O2'],'table8')" name="TOTT1P[]" style="max-width: 100% !important; width: 100%;">
                                                    <option value="Benzin">Benzin</option>
                                                    <option value="Diesel">Diesel</option>
                                                    <option value="El">El</option>
                                                    <option value="Hybrid ">Hybrid (ikke opladnings-hybrid)</option>
                                                    <option value="LNG">LNG</option>
                                                    <option value="CNG">CNG</option>
                                                </select></td>
                                            <td><input type="text" onchange="cal9();addtotalheader(['TOTT1O1','TOTT2O2'],'table8')" name="TOTT1BS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            <td><input type="text" onchange="cal9();addtotalheader(['TOTT1O1','TOTT2O2'],'table8')" name="TOTT1Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            <td><select class="" onchange="cal9();addtotalheader(['TOTT1O1','TOTT2O2'],'table8')" name="TOTT1UN[]" style="max-width: 100% !important; width: 100%;">
                                                    <option value="Km">Km</option>
                                                    <option value="L">L</option>
                                                    <option value="KWh ">KWh</option>
                                                </select></td>
                                            <td><input type="text" readonly name="TOTT1SC1[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            <td><input type="text" readonly name="TOTT1SC2[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            <td><input type="text" readonly name="TOTT1SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            <td><input type="text" readonly name="TOTT1OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            <td><input type="text" name="TOTT1OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                        </tr>
<?php }?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-12 col-12">

                                        <h4>Total, ton CO2-e: <input type="text" readonly name="TOTT1O1" value="<?php echo $TOTT1O1; ?>"></h4>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-10 col-12">
                                        <br>
                                        <h4>Fly og skibe</h4>
                                    </div>
                                    <br>
                                    <div class="col-12  col-md-2">
                                        <br>
                                        <div class="row dflex flex-row" style="color:#27b939;">
                                            <p style="color:#27b939;">Tilføj række&nbsp; &nbsp;</p>
                                            <button type="button" class="btn btn-danger btn-circle btn3" onclick="adrow1('.adtable19')">
                                                <i class="fab fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="row  table-responsive-md">
                                <div class="col-md-12 table-responsive-md">
                                    <table class="table addtable1 " id="tab_logic">
                                        <thead>
                                            <tr class="trset">
                                                <th style="text-align: start;" scope="col">Beskrivelse</th>
                                                <th style="text-align: start;" scope="col">Transportmiddel </th>
                                                <th style="text-align: start;" scope="col">Drivmiddel</th>
                                                <th style="text-align: start;" scope="col">Mængde</th>
                                                <th style="text-align: start;" class="col-1" scope="col">Enhed</th>
                                                <th style="text-align: start;" scope="col">Scope 1</th>
                                                <th style="text-align: start;" scope="col">Scope 2</th>
                                                <th style="text-align: start;" scope="col">Scope 3</th>
                                                <th style="text-align: start;" scope="col">Udenfor scope</th>
                                                <th style="text-align: start;" scope="col">Bemærkning</th>
                                            </tr>
                                        </thead>
                                        <tbody class="stytb adtable19">
                                            <?php if (isset($_SESSION['TOTT2DE'])) {
                                                for ($i = 0; $i < count($TOTT2DE); $i++) { ?>
                                                    <tr class="row1">
                                                        <td><input type="text" name="TOTT2DE[]" value="<?php echo $TOTT2DE[$i] ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><select class="" name="TOTT2TM[]" onchange="cal10();addtotalheader(['TOTT1O1','TOTT2O2'],'table8')" style="max-width: 100% !important; width: 100%;">
                                                                <option value="<?php echo $TOTT2TM[$i] ?>"><?php echo $TOTT2TM[$i] ?></option>
                                                                <option value="Skib">Skib</option>
                                                                <option value="Fly">Fly</option>
                                                            </select>
                                                        </td>
                                                        <td><select class="" name="TOTT2P[]" onchange="cal10();addtotalheader(['TOTT1O1','TOTT2O2'],'table8')" style="max-width: 100% !important; width: 100%;">
                                                                <option value="<?php echo $TOTT2P[$i] ?>"><?php echo $TOTT2P[$i] ?></option>
                                                                <option value="Flybenzin">Flybenzin</option>
                                                                <option value="Marine">Marine fuel oil</option>
                                                            </select>
                                                        </td>
                                                        <td> <input type="text" name="TOTT2Q[]" value="<?php echo $TOTT2Q[$i] ?>" onchange="cal10();addtotalheader(['TOTT1O1','TOTT2O2'],'table8')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><select class="" name="TOTT2UN[]" onchange="cal10();addtotalheader(['TOTT1O1','TOTT2O2'],'table8')" style="max-width: 100% !important; width: 100%;">
                                                                <option value="L">L</option>
                                                            </select></td>
                                                        <td><input type="text" value="<?php echo $TOTT2SC1[$i] ?>" readonly name="TOTT2SC1[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>

                                                        <td><input type="text" value="<?php echo $TOTT2SC2[$i] ?>" readonly name="TOTT2SC2[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><input type="text" readonly value="<?php echo $TOTT2SC3[$i] ?>" name="TOTT2SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><input type="text" readonly value="<?php echo $TOTT2OTS[$i] ?>" name="TOTT2OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td> <input type="text" name="TOTT2OTC[]" value="<?php echo $TOTT2OTC[$i] ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    </tr>
                                                <?php }
                                            } else { ?>
                                                <tr class="row1">
                                                    <td><input type="text" name="TOTT2DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" name="TOTT2TM[]" onchange="cal10();addtotalheader(['TOTT1O1','TOTT2O2'],'table8')" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Skib">Skib</option>
                                                            <option value="Fly">Fly</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="" name="TOTT2P[]" onchange="cal10();addtotalheader(['TOTT1O1','TOTT2O2'],'table8')" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Flybenzin">Flybenzin</option>
                                                            <option value="Marine">Marine fuel oil</option>
                                                        </select>
                                                    </td>
                                                    <td> <input type="text" name="TOTT2Q[]" onchange="cal10();addtotalheader(['TOTT1O1','TOTT2O2'],'table8')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" name="TOTT2UN[]" onchange="cal10();addtotalheader(['TOTT1O1','TOTT2O2'],'table8')" style="max-width: 100% !important; width: 100%;">
                                                            <option value="L">L</option>
                                                        </select></td>
                                                    <td><input type="text" readonly name="TOTT2SC1[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>

                                                    <td><input type="text" readonly name="TOTT2SC2[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT2SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT2OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td> <input type="text" name="TOTT2OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>
                                                <tr class="row1">
                                                    <td><input type="text" name="TOTT2DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal10();addtotalheader(['TOTT1O1','TOTT2O2'],'table8')" name="TOTT2TM[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Skib">Skib</option>
                                                            <option value="Fly">Fly</option>
                                                        </select></td>
                                                    <td><select class="" onchange="cal10();addtotalheader(['TOTT1O1','TOTT2O2'],'table8')" name="TOTT2P[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Flybenzin">Flybenzin</option>
                                                            <option value="Marine">Marine fuel oil</option>
                                                        </select></td>
                                                    <td> <input type="text" onchange="cal10();addtotalheader(['TOTT1O1','TOTT2O2'],'table8')" name="TOTT2Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>

                                                    <td><select class="" onchange="cal10();addtotalheader(['TOTT1O1','TOTT2O2'],'table8')" name="TOTT2UN[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="L">L</option>
                                                        </select></td>
                                                    <td><input type="text" readonly name="TOTT2SC1[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>

                                                    <td><input type="text" readonly name="TOTT2SC2[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT2SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT2OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td> <input type="text" name="TOTT2OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>

                                                <tr class="row1">
                                                    <td><input type="text" name="TOTT2DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal10();addtotalheader(['TOTT1O1','TOTT2O2'],'table8')" name="TOTT2TM[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Skib">Skib</option>
                                                            <option value="Fly">Fly</option>
                                                        </select></td>
                                                    <td><select class="" onchange="cal10();addtotalheader(['TOTT1O1','TOTT2O2'],'table8')" name="TOTT2P[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Flybenzin">Flybenzin</option>
                                                            <option value="Marine">Marine fuel oil</option>
                                                        </select></td>
                                                    <td> <input type="text" onchange="cal10();addtotalheader(['TOTT1O1','TOTT2O2'],'table8')" name="TOTT2Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>

                                                    <td><select class="" onchange="cal10();addtotalheader(['TOTT1O1','TOTT2O2'],'table8')" name="TOTT2UN[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="L">L</option>
                                                        </select></td>
                                                    <td><input type="text" readonly name="TOTT2SC1[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT2SC2[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT2SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT2OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td> <input type="text" name="TOTT2OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-12 col-12">
                                        <h4>Total, ton CO2-e: <input type="text" name="TOTT2O2" value="<?php echo $TOTT2O2 ?>" readonly> </h4>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-12">
                                <div class="row head3">
                                    <div class="col-md-5">
                                        <h3 title="Medarbejdertransport omhandler medarbejdernes rejser i forbindelse med arbejde med fx fly, bus, tog og biler, som ikke er ejet eller leaset af virksomheden.

                                        Andelen af biobrændsel i motorbenzin og diesel kan specificeres hvis nødvendigt. Dette er kun muligt, hvis forbruget angives i liter, og virker dermed ikke for forbrug i km.

                                        Indberetning i fysiske enheder giver et mere præcis resultat, end i monetære enheder (beløb i DKK). Det anbefales at indtaste forbruget af drivmiddel hvor muligt. ">
                                            Medarbejdertransport</h3>
                                    </div>
                                    <div class="col-md-3">
                                        <h3 style="white-space: nowrap; ">Samlet udledning: </h3>
                                    </div>
                                    <div class="col-md-1">
                                        <h3 id="table9"><?php echo number_format(floatval($TOTT3O3) + floatval($TOTT4O4) + floatval($TOTT5O5), 1); ?></h3>
                                    </div>
                                    <div class="col-md-3">
                                        <h3 style="white-space: nowrap; ">Ton CO2-e</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-10 col-12">
                                        <br>
                                        <h4 title="Hvis ingen data om pendling er tilgængelig, er det muligt at indtaste antal ansatte, dog udgør dette en større usikkerhed i resultater.">Pendling</h4>
                                    </div>
                                    <br>
                                    <div class="col-12  col-md-2">
                                        <br>
                                        <div class="row dflex flex-row" style="color:#27b939;">
                                            <p style="color:#27b939;">Tilføj række&nbsp; &nbsp;</p>
                                            <button type="button" class="btn btn-danger btn-circle btn3" onclick="adrow1('.adtable20')">
                                                <i class="fab fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="row  table-responsive-md">
                                <div class="col-md-12 table-responsive-md">
                                    <table class="table addtable1 " id="tab_logic">
                                        <thead>
                                            <tr class="trset">
                                                <th style="text-align: start;" scope="col">Beskrivelse</th>
                                                <th style="text-align: start;" scope="col">Transportmiddel </th>
                                                <th style="text-align: start;" scope="col">Drivmiddel</th>
                                                <th style="text-align: start;" scope="col" title="Hvis du kender andel af biobrændstof iblandet i dit brændstofforbrug så kan det indtastes her.">Biobrændstofsandel (%)</th>
                                                <th style="text-align: start;" scope="col">Mængde</th>
                                                <th style="text-align: start;" class="col-1" scope="col">Enhed</th>
                                                <th style="text-align: start;" scope="col">Scope 1</th>
                                                <th style="text-align: start;" scope="col">Scope 2</th>
                                                <th style="text-align: start;" scope="col">Scope 3</th>
                                                <th style="text-align: start;" scope="col">Udenfor scope</th>
                                                <th style="text-align: start;" scope="col">Bemærkning</th>
                                            </tr>
                                        </thead>
                                        <tbody class="stytb adtable20">
                                            <?php if (isset($_SESSION['T0TT3DE'])) {
                                                for ($i = 0; $i < count($TOTT3DE); $i++) { ?>
                                                    <tr class="row1">
                                                        <td><input type="text" name="TOTT3DE[]" value="<?php echo $TOTT3DE[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><select class="" name="TOTT3TM[]" onchange="cal11();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" style="max-width: 100% !important; width: 100%;">
                                                                <option value="<?php echo $TOTT3TM[$i]; ?>"><?php echo $TOTT3TM[$i]; ?></option>
                                                                <option value="Personbiler">Personbiler</option>
                                                                <option value="Busser">Busser</option>
                                                                <option value="Motorcykler">Motorcykler</option>
                                                                <option value="Tog">Tog</option>
                                                                <option value="Fly - nationalt">Fly - nationalt</option>
                                                                <option value="Fly - internationalt">Fly - internationalt</option>
                                                                <option value="Skib">Skib</option>
                                                            </select></td>
                                                        <td><select class="" name="TOTT3P[]" onchange="cal11();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" style="max-width: 100% !important; width: 100%;">
                                                                <option value="<?php echo $TOTT3P[$i]; ?>"><?php echo $TOTT3P[$i]; ?></option>
                                                                <option value="Benzin">Benzin</option>
                                                                <option value="Diesel">Diesel</option>
                                                                <option value="El">El</option>
                                                                <option value="Hybrid (ikke opladnings-hybrid)">Hybrid (ikke opladnings-hybrid)</option>
                                                                <option value="Flybenzin">Flybenzin</option>
                                                                <option value="Marine fuel oil">Marine fuel oil</option>
                                                                <option value="Uspecificeret">Uspecificeret</option>
                                                            </select></td>
                                                        <td> <input type="text" name="TOTT3BS[]" value="<?php echo $TOTT3BS[$i]; ?>" onchange="cal11();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><input type="text" name="TOTT3Q[]" value="<?php echo $TOTT3Q[$i]; ?>" onchange="cal11();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><select class="" name="TOTT3UN[]" onchange="cal11();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" style="max-width: 100% !important; width: 100%;">
                                                                <option value="<?php echo $TOTT3UN[$i]; ?>"><?php echo $TOTT3UN[$i]; ?></option>
                                                                <option value="Person.km">Person.km</option>
                                                                <option value="L">L</option>
                                                                <option value="KWh">KWh</option>
                                                                <option value="ntal ansatte pr. år">Antal ansatte pr. år</option>
                                                            </select></td>
                                                        <td><input type="text" readonly name="TOTT3SC1[]" value="<?php echo $TOTT3SC1[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><input type="text" readonly name="TOTT3SC2[]" value="<?php echo $TOTT3SC2[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><input type="text" readonly name="TOTT3SC3[]" value="<?php echo $TOTT3SC3[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><input type="text" readonly name="TOTT3OTS[]" value="<?php echo $TOTT3OTS[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td> <input type="text" name="TOTT3OTC[]" value="<?php echo $TOTT3OTC[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    </tr>
                                                <?php  }
                                            } else { ?>
                                                <tr class="row1">
                                                    <td><input type="text" name="TOTT3DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" name="TOTT3TM[]" onchange="cal11();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Personbiler">Personbiler</option>
                                                            <option value="Busser">Busser</option>
                                                            <option value="Motorcykler">Motorcykler</option>
                                                            <option value="Tog">Tog</option>
                                                            <option value="Fly - nationalt">Fly - nationalt</option>
                                                            <option value="Fly - internationalt">Fly - internationalt</option>
                                                            <option value="Skib">Skib</option>
                                                        </select></td>
                                                    <td><select class="" name="TOTT3P[]" onchange="cal11();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Benzin">Benzin</option>
                                                            <option value="Diesel">Diesel</option>
                                                            <option value="El">El</option>
                                                            <option value="Hybrid (ikke opladnings-hybrid)">Hybrid (ikke opladnings-hybrid)</option>
                                                            <option value="Flybenzin">Flybenzin</option>
                                                            <option value="Marine fuel oil">Marine fuel oil</option>
                                                            <option value="Uspecificeret">Uspecificeret</option>
                                                        </select></td>
                                                    <td> <input type="text" name="TOTT3BS[]" onchange="cal11();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="TOTT3Q[]" onchange="cal11();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" name="TOTT3UN[]" onchange="cal11();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Person.km">Person.km</option>
                                                            <option value="L">L</option>
                                                            <option value="KWh">KWh</option>
                                                            <option value="ntal ansatte pr. år">Antal ansatte pr. år</option>
                                                        </select></td>
                                                    <td><input type="text" readonly name="TOTT3SC1[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT3SC2[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT3SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT3OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td> <input type="text" name="TOTT3OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>
                                                <tr class="row1">
                                                    <td><input type="text" name="TOTT3DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal11();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" name="TOTT3TM[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Personbiler">Personbiler</option>
                                                            <option value="Busser">Busser</option>
                                                            <option value="Motorcykler">Motorcykler</option>
                                                            <option value="Tog">Tog</option>
                                                            <option value="Fly - nationalt">Fly - nationalt</option>
                                                            <option value="Fly - internationalt">Fly - internationalt</option>
                                                            <option value="Skib">Skib</option>
                                                        </select></td>
                                                    <td><select class="" onchange="cal11();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" name="TOTT3P[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Benzin">Benzin</option>
                                                            <option value="Diesel">Diesel</option>
                                                            <option value="El">El</option>
                                                            <option value="Hybrid (ikke opladnings-hybrid)">Hybrid (ikke opladnings-hybrid)</option>
                                                            <option value="Flybenzin">Flybenzin</option>
                                                            <option value="Marine fuel oil">Marine fuel oil</option>
                                                            <option value="Uspecificeret">Uspecificeret</option>
                                                        </select></td>
                                                    <td> <input type="text" onchange="cal11();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" name="TOTT3BS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" onchange="cal11();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" name="TOTT3Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal11();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" name="TOTT3UN[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Person.km">Person.km</option>
                                                            <option value="L">L</option>
                                                            <option value="KWh">KWh</option>
                                                            <option value="ntal ansatte pr. år">Antal ansatte pr. år</option>
                                                        </select></td>
                                                    <td><input type="text" readonly name="TOTT3SC1[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT3SC2[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT3SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT3OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td> <input type="text" name="TOTT3OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>
                                                <tr class="row1">
                                                    <td><input type="text" name="TOTT3DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal11();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" name="TOTT3TM[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Personbiler">Personbiler</option>
                                                            <option value="Busser">Busser</option>
                                                            <option value="Motorcykler">Motorcykler</option>
                                                            <option value="Tog">Tog</option>
                                                            <option value="Fly - nationalt">Fly - nationalt</option>
                                                            <option value="Fly - internationalt">Fly - internationalt</option>
                                                            <option value="Skib">Skib</option>
                                                        </select></td>
                                                    <td><select class="" onchange="cal11();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" name="TOTT3P[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Benzin">Benzin</option>
                                                            <option value="Diesel">Diesel</option>
                                                            <option value="El">El</option>
                                                            <option value="Hybrid (ikke opladnings-hybrid)">Hybrid (ikke opladnings-hybrid)</option>
                                                            <option value="Flybenzin">Flybenzin</option>
                                                            <option value="Marine fuel oil">Marine fuel oil</option>
                                                            <option value="Uspecificeret">Uspecificeret</option>
                                                        </select></td>
                                                    <td> <input type="text" onchange="cal11();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" name="TOTT3BS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" onchange="cal11();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" name="TOTT3Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal11();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" name="TOTT3UN[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Person.km">Person.km</option>
                                                            <option value="L">L</option>
                                                            <option value="KWh">KWh</option>
                                                            <option value="ntal ansatte pr. år">Antal ansatte pr. år</option>
                                                        </select></td>
                                                    <td><input type="text" readonly name="TOTT3SC1[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT3SC2[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT3SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT3OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td> <input type="text" name="TOTT3OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>
                                            <?php } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-12 col-12">
                                        <!-- <br> -->
                                        <h4>Total, ton CO2-e: <input type="text" name="TOTT3O3" value="<?php echo $TOTT3O3; ?>" readonly></h4>
                                    </div>
                                </div>
                                <br>
                            </div>

                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-10 col-12">
                                        <br>
                                        <h4>Rejser i forbindelse med arbejde - Fysiske enheder</h4>
                                    </div>
                                    <br>
                                    <div class="col-12  col-md-2">
                                        <br>
                                        <div class="row dflex flex-row" style="color:#27b939;">
                                            <p style="color:#27b939;">Tilføj række&nbsp; &nbsp;</p>
                                            <button type="button" class="btn btn-danger btn-circle btn3" onclick="adrow1('.adtable21')">
                                                <i class="fab fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="row  table-responsive-md">
                                <div class="col-md-12 table-responsive-md">
                                    <table class="table addtable1 " id="tab_logic">
                                        <thead>
                                            <tr class="trset">
                                                <th style="text-align: start;" scope="col">Beskrivelse</th>
                                                <th style="text-align: start;" scope="col">Transportmiddel </th>
                                                <th style="text-align: start;" scope="col">Drivmiddel</th>
                                                <th style="text-align: start;" scope="col" title="Hvis du kender andel af biobrændstof iblandet i dit brændstofforbrug så kan det indtastes her.">
                                                    Biobrændstofsandel (%)
                                                </th>
                                                <th style="text-align: start;" scope="col">Mængde</th>
                                                <th style="text-align: start;" scope="col">Enhed</th>
                                                <th style="text-align: start;" scope="col">Scope 1</th>
                                                <th style="text-align: start;" scope="col">Scope 2</th>
                                                <th style="text-align: start;" scope="col">Scope 3</th>
                                                <th style="text-align: start;" scope="col">Udenfor scope</th>
                                                <th style="text-align: start;" scope="col">Bemærkning</th>
                                            </tr>
                                        </thead>
                                        <tbody class="stytb adtable21">
                                            <?php if (isset($_SESSION['TOTT4DE'])) {
                                                for ($i = 0; $i < count($TOTT4DE); $i++) { ?>
                                                    <tr class="row1">
                                                        <td><input type="text" name="TOTT4DE[]" value="<?php echo $TOTT1DE[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><select class="" name="TOTT4TM[]" onchange="cal12();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" style="max-width: 100% !important; width: 100%;">
                                                                <option value="<?php echo $TOTT4TM[$i]; ?>"><?php echo $TOTT4TM[$i]; ?></option>
                                                                <option value="Personbiler">Personbiler</option>
                                                                <option value="Busser">Busser</option>
                                                                <option value="Motorcykler">Motorcykler</option>
                                                                <option value="Tog">Tog</option>
                                                                <option value="Fly - nationalt">Fly - nationalt</option>
                                                                <option value="Fly - internationalt">Fly - internationalt</option>
                                                                <option value="Skib">Skib</option>
                                                            </select></td>
                                                        <td><select class="" name="TOTT4P[]" onchange="cal12();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" style="max-width: 100% !important; width: 100%;">
                                                                <option value="<?php echo $TOTT4P[$i]; ?>"><?php echo $TOTT4P[$i]; ?></option>
                                                                <option value="Benzin">Benzin</option>
                                                                <option value="Diesel">Diesel</option>
                                                                <option value="El">El</option>
                                                                <option value="Hybrid (ikke opladnings-hybrid)">Hybrid (ikke opladnings-hybrid)</option>
                                                                <option value="Flybenzin">Flybenzin</option>
                                                                <option value="Marine fuel oil">Marine fuel oil</option>
                                                                <option value="Uspecificeret">Uspecificeret</option>
                                                            </select></td>
                                                        <td> <input type="text" name="TOTT4BS[]" value="<?php echo $TOTT4BS[$i]; ?>" onchange="cal12();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td> <input type="text" name="TOTT4Q[]" value="<?php echo $TOTT4Q[$i]; ?>" onchange="cal12();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><select class="" name="TOTT4UN[]" onchange="cal12();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" style="max-width: 100% !important; width: 100%;">
                                                                <option value="<?php echo $TOTT4UN[$i]; ?>"><?php echo $TOTT4UN[$i]; ?></option>

                                                                <option value="Person.km">Person.km</option>
                                                                <option value="L">L</option>
                                                                <option value="KWh">KWh</option>
                                                            </select></td>

                                                        <td><input type="text" readonly name="TOTT4SC1[]" value="<?php echo $TOTT4SC1[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><input type="text" readonly name="TOTT4SC2[]" value="<?php echo $TOTT4SC2[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><input type="text" readonly name="TOTT4SC3[]" value="<?php echo $TOTT4SC3[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><input type="text" readonly name="TOTT4OTS[]" value="<?php echo $TOTT4OTS[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td> <input type="text" name="TOTT4OTC[]" value="<?php echo $TOTT4OTC[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    </tr>
                                                <?php }
                                            } else { ?>
                                                <tr class="row1">
                                                    <td><input type="text" name="TOTT4DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" name="TOTT4TM[]" onchange="cal12();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Personbiler">Personbiler</option>
                                                            <option value="Busser">Busser</option>
                                                            <option value="Motorcykler">Motorcykler</option>
                                                            <option value="Tog">Tog</option>
                                                            <option value="Fly - nationalt">Fly - nationalt</option>
                                                            <option value="Fly - internationalt">Fly - internationalt</option>
                                                            <option value="Skib">Skib</option>
                                                        </select></td>
                                                    <td><select class="" name="TOTT4P[]" onchange="cal12();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Benzin">Benzin</option>
                                                            <option value="Diesel">Diesel</option>
                                                            <option value="El">El</option>
                                                            <option value="Hybrid (ikke opladnings-hybrid)">Hybrid (ikke opladnings-hybrid)</option>
                                                            <option value="Flybenzin">Flybenzin</option>
                                                            <option value="Marine fuel oil">Marine fuel oil</option>
                                                            <option value="Uspecificeret">Uspecificeret</option>
                                                        </select></td>
                                                    <td> <input type="text" name="TOTT4BS[]" onchange="cal12();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td> <input type="text" name="TOTT4Q[]" onchange="cal12();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" name="TOTT4UN[]" onchange="cal12();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Person.km">Person.km</option>
                                                            <option value="L">L</option>
                                                            <option value="KWh">KWh</option>
                                                        </select></td>

                                                    <td><input type="text" readonly name="TOTT4SC1[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT4SC2[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT4SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT4OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td> <input type="text" name="TOTT4OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>
                                                <tr class="row1">
                                                    <td><input type="text" name="TOTT4DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal12();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" name="TOTT4TM[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Personbiler">Personbiler</option>
                                                            <option value="Busser">Busser</option>
                                                            <option value="Motorcykler">Motorcykler</option>
                                                            <option value="Tog">Tog</option>
                                                            <option value="Fly - nationalt">Fly - nationalt</option>
                                                            <option value="Fly - internationalt">Fly - internationalt</option>
                                                            <option value="Skib">Skib</option>
                                                        </select></td>
                                                    <td><select class="" onchange="cal12();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" name="TOTT4P[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Benzin">Benzin</option>
                                                            <option value="Diesel">Diesel</option>
                                                            <option value="El">El</option>
                                                            <option value="Hybrid (ikke opladnings-hybrid)">Hybrid (ikke opladnings-hybrid)</option>
                                                            <option value="Flybenzin">Flybenzin</option>
                                                            <option value="Marine fuel oil">Marine fuel oil</option>
                                                            <option value="Uspecificeret">Uspecificeret</option>
                                                        </select></td>
                                                    <td> <input type="text" onchange="cal12();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" name="TOTT4BS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td> <input type="text" onchange="cal12();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" name="TOTT4Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal12();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" name="TOTT4UN[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Person.km">Person.km</option>
                                                            <option value="L">L</option>
                                                            <option value="KWh">KWh</option>
                                                        </select></td>

                                                    <td><input type="text" readonly name="TOTT4SC1[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT4SC2[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT4SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT4OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td> <input type="text" name="TOTT4OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>
                                                <tr class="row1">
                                                    <td><input type="text" name="TOTT4DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal12();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" name="TOTT4TM[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Personbiler">Personbiler</option>
                                                            <option value="Busser">Busser</option>
                                                            <option value="Motorcykler">Motorcykler</option>
                                                            <option value="Tog">Tog</option>
                                                            <option value="Fly - nationalt">Fly - nationalt</option>
                                                            <option value="Fly - internationalt">Fly - internationalt</option>
                                                            <option value="Skib">Skib</option>
                                                        </select></td>
                                                    <td><select class="" onchange="cal12();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" name="TOTT4P[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Benzin">Benzin</option>
                                                            <option value="Diesel">Diesel</option>
                                                            <option value="El">El</option>
                                                            <option value="Hybrid (ikke opladnings-hybrid)">Hybrid (ikke opladnings-hybrid)</option>
                                                            <option value="Flybenzin">Flybenzin</option>
                                                            <option value="Marine fuel oil">Marine fuel oil</option>
                                                            <option value="Uspecificeret">Uspecificeret</option>
                                                        </select></td>
                                                    <td> <input type="text" onchange="cal12();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" name="TOTT4BS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td> <input type="text" onchange="cal12();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" name="TOTT4Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal12();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" name="TOTT4UN[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Person.km">Person.km</option>
                                                            <option value="L">L</option>
                                                            <option value="KWh">KWh</option>
                                                        </select></td>

                                                    <td><input type="text" readonly name="TOTT4SC1[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT4SC2[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT4SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT4OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td> <input type="text" name="TOTT4OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-12 col-12">
                                        <!-- <br> -->
                                        <h4>Total, ton CO2-e: <input type="text" name="TOTT4O4" value="<?php echo $TOTT4O4; ?>" readonly></h4>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-10 col-12">
                                        <br>
                                        <h4>Rejser i forbindelse med arbejde - monetære enheder (beløb i DKK)</h4>
                                    </div>
                                    <br>
                                    <div class="col-12  col-md-2">
                                        <br>
                                        <div class="row dflex flex-row" style="color:#27b939;">
                                            <p style="color:#27b939;">Tilføj række&nbsp; &nbsp;</p>
                                            <button type="button" class="btn btn-danger btn-circle btn3" onclick="adrow1('.adtable22')">
                                                <i class="fab fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="row  table-responsive-md">
                                <div class="col-md-12 table-responsive-md">
                                    <table class="table addtable1 " id="tab_logic">
                                        <thead>
                                            <tr class="trset">
                                                <th style="text-align: start;" scope="col">Beskrivelse</th>
                                                <th style="text-align: start;" scope="col">Transportmiddel </th>
                                                <th style="text-align: start;" scope="col">Drivmiddel</th>
                                                <th style="text-align: start;" scope="col">Beløb (ekskl. moms) </th>
                                                <th style="text-align: start;" scope="col">Enhed</th>
                                                <th style="text-align: start;" scope="col">Scope 1</th>
                                                <th style="text-align: start;" scope="col">Scope 2</th>
                                                <th style="text-align: start;" scope="col">Scope 3</th>
                                                <th style="text-align: start;" scope="col">Udenfor scope</th>
                                                <th style="text-align: start;" scope="col">Bemærkning</th>
                                            </tr>
                                        </thead>
                                        <tbody class="stytb adtable22">
                                            <?php if (isset($_SESSION['TOTT5DE'])) {
                                                for ($i = 0; $i < count($TOTT5DE); $i++) { ?>
                                                    <tr class="row1">
                                                        <td><input type="text" name="TOTT5DE[]" value="<?php echo $TOTT5DE[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><select class="" name="TOTT5TM[]" onchange="cal13();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" style="max-width: 100% !important; width: 100%;">
                                                                <option value="<?php echo $TOTT5TM[$i]; ?>"><?php echo $TOTT5TM[$i]; ?></option>
                                                                <option value="Fly - nationalt">Fly - nationalt</option>
                                                                <option value="Fly - internationalt">Fly - internationalt</option>
                                                                <option value="Skib">Skib</option>
                                                                <option value="Tog">Tog</option>
                                                            </select></td>
                                                        <td><select class="" name="TOTT5P[]" onchange="cal13();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" style="max-width: 100% !important; width: 100%;">
                                                                <option value="<?php echo $TOTT5P[$i]; ?>"><?php echo $TOTT5P[$i]; ?></option>
                                                                <option value="Flybenzin">Flybenzin</option>
                                                                <option value="Marine fuel oil">Marine fuel oil</option>
                                                                <option value="Uspecificeret">Uspecificeret</option>
                                                            </select></td>
                                                        <td> <input type="text" name="TOTT5AE[]" value="<?php echo $TOTT5AE[$i]; ?>" onchange="cal13();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><select class="" name="TOTT5UN[]" onchange="cal13();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" style="max-width: 100% !important; width: 100%;">
                                                                <option value="<?php echo $TOTT5UN[$i]; ?>"><?php echo $TOTT5UN[$i]; ?></option>
                                                                <option value="DKK">DKK</option>
                                                            </select></td>
                                                        <td><input type="text" readonly name="TOTT5SC1[]" value="<?php echo $TOTT5SC1[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><input type="text" readonly name="TOTT5SC2[]" value="<?php echo $TOTT5SC2[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><input type="text" readonly name="TOTT5SC3[]" value="<?php echo $TOTT5SC3[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><input type="text" readonly name="TOTT5OTS[]" value="<?php echo $TOTT5OTS[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td> <input type="text" name="TOTT5OTC[]" value="<?php echo $TOTT5OTC[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    </tr>
                                                <?php }
                                            } else { ?>
                                                <tr class="row1">
                                                    <td><input type="text" name="TOTT5DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" name="TOTT5TM[]" onchange="cal13();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Fly - nationalt">Fly - nationalt</option>
                                                            <option value="Fly - internationalt">Fly - internationalt</option>
                                                            <option value="Skib">Skib</option>
                                                            <option value="Tog">Tog</option>
                                                        </select></td>
                                                    <td><select class="" name="TOTT5P[]" onchange="cal13();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Flybenzin">Flybenzin</option>
                                                            <option value="Marine fuel oil">Marine fuel oil</option>
                                                            <option value="Uspecificeret">Uspecificeret</option>
                                                        </select></td>
                                                    <td> <input type="text" name="TOTT5AE[]" onchange="cal13();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" name="TOTT5UN[]" onchange="cal13();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" style="max-width: 100% !important; width: 100%;">
                                                            <option value="DKK">DKK</option>
                                                        </select></td>
                                                    <td><input type="text" readonly name="TOTT5SC1[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT5SC2[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT5SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT5OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td> <input type="text" name="TOTT5OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>
                                                <tr class="row1">
                                                    <td><input type="text" name="TOTT5DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal13();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" name="TOTT5TM[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Fly - nationalt">Fly - nationalt</option>
                                                            <option value="Fly - internationalt">Fly - internationalt</option>
                                                            <option value="Skib">Skib</option>
                                                            <option value="Tog">Tog</option>
                                                        </select></td>
                                                    <td><select class="" onchange="cal13();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" name="TOTT5P[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Flybenzin">Flybenzin</option>
                                                            <option value="Marine fuel oil">Marine fuel oil</option>
                                                            <option value="Uspecificeret">Uspecificeret</option>
                                                        </select></td>
                                                    <td> <input type="text" onchange="cal13();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" name="TOTT5AE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal13();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" name="TOTT5UN[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="DKK">DKK</option>
                                                        </select></td>
                                                    <td><input type="text" readonly name="TOTT5SC1[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT5SC2[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT5SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT5OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td> <input type="text" name="TOTT5OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>
                                                <tr class="row1">
                                                    <td><input type="text" name="TOTT5DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal13();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" name="TOTT5TM[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Fly - nationalt">Fly - nationalt</option>
                                                            <option value="Fly - internationalt">Fly - internationalt</option>
                                                            <option value="Skib">Skib</option>
                                                            <option value="Tog">Tog</option>
                                                        </select></td>
                                                    <td><select class="" onchange="cal13();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" name="TOTT5P[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Flybenzin">Flybenzin</option>
                                                            <option value="Marine fuel oil">Marine fuel oil</option>
                                                            <option value="Uspecificeret">Uspecificeret</option>
                                                        </select></td>
                                                    <td> <input type="text" onchange="cal13();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" name="TOTT5AE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal13();addtotalheader(['TOTT3O3','TOTT4O4','TOTT5O5'],'table9')" name="TOTT5UN[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="DKK">DKK</option>
                                                        </select></td>
                                                    <td><input type="text" readonly name="TOTT5SC1[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT5SC2[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT5SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT5OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td> <input type="text" name="TOTT5OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>
                                            <?php } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-12 col-12">

                                        <h4>Total, ton CO2-e: <input type="text " name="TOTT5O5" value="<?php echo $TOTT5O5; ?>" readonly></h4>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-12">
                                <div class="row head3">
                                    <div class="col-md-5">
                                        <h3 title="Denne kategori omhandler transporten ved levering af virksomhedens indkøb af eksterne leverandører.

                                            Andelen af biobrændsel i motorbenzin og diesel kan specificeres hvis nødvendigt. Dette er kun muligt, hvis forbruget angives i liter, og virker dermed ikke for forbrug i km.

                                            Indberetning i fysiske enkeder giver et mere præcis resultat end ved monetære enheder (beløb i DKK).">
                                            Varetransport til virksomhed
                                        </h3>
                                    </div>
                                    <div class="col-md-3">
                                        <h3 style="white-space: nowrap; ">Samlet udledning: </h3>
                                    </div>
                                    <div class="col-md-1">
                                        <h3 id="table10"><?php echo number_format(floatval($TOTT6O6) +floatval( $TOTT7O7), 1); ?></h3>
                                    </div>
                                    <div class="col-md-3">
                                        <h3 style="white-space: nowrap; ">Ton CO2-e</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-10 col-12">
                                        <br>
                                        <h4>Varetransport i fysiske enheder</h4>
                                    </div>
                                    <br>
                                    <div class="col-12  col-md-2">
                                        <br>
                                        <div class="row dflex flex-row" style="color:#27b939;">
                                            <p style="color:#27b939;">Tilføj række&nbsp; &nbsp;</p>
                                            <button type="button" class="btn btn-danger btn-circle btn3" onclick="adrow1('.adtable23')">
                                                <i class="fab fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="row  table-responsive-md">
                                <div class="col-md-12 table-responsive-md">
                                    <table class="table addtable1 " id="tab_logic">
                                        <thead>
                                            <tr class="trset">
                                                <th style="text-align: start;" scope="col">Beskrivelse</th>
                                                <th style="text-align: start;" scope="col">Transportmiddel </th>
                                                <th style="text-align: start;" scope="col">Drivmiddel</th>
                                                <th style="text-align: start;" scope="col" title="Hvis du kender andel af biobrændstof iblandet i dit brændstofforbrug så kan det indtastes her.">Biobrændstofsandel (%)</th>
                                                <th style="text-align: start;" scope="col">Mængde</th>
                                                <th style="text-align: start;" scope="col" title="ton.km angiver vægt ganget med distance transporteret. Fx hvis en lastbil transporterer 24 tons 100 km, skal mængden være 2.400 ton.km.">Enhed</th>
                                                <th style="text-align: start;" scope="col">Scope 1</th>
                                                <th style="text-align: start;" scope="col">Scope 2</th>
                                                <th style="text-align: start;" scope="col">Scope 3</th>
                                                <th style="text-align: start;" scope="col">Udenfor scope</th>
                                                <th style="text-align: start;" scope="col">Bemærkning</th>
                                            </tr>
                                        </thead>
                                        <tbody class="stytb adtable23">
                                            <?php if (isset($_SESSION['TOTT6DE'])) {
                                                for ($i = 0; $i < count($TOTT6DE); $i++) { ?>
                                                    <tr class="row1">
                                                        <td><input type="text" name="TOTT6DE[]" value="<?php echo $TOTT6DE[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><select class="" name="TOTT6TM[]" onchange="cal14();addtotalheader(['TOTT6O6','TOTT7O7'],'table10')" style="max-width: 100% !important; width: 100%;">
                                                                <option value="<?php echo $TOTT6TM[$i]; ?>"><?php echo $TOTT6TM[$i]; ?></option>
                                                                <option value="Personbiler">Personbiler</option>
                                                                <option value="Varebiler">Varebiler</option>
                                                                <option value="Lastbiler">Lastbiler</option>
                                                                <option value="Fly - internationalt">Fly - internationalt</option>
                                                                <option value="Skib">Skib</option>
                                                                <option value="Tog">Tog</option>
                                                            </select></td>
                                                        <td><select class="" name="TOTT6P[]" onchange="cal14();addtotalheader(['TOTT6O6','TOTT7O7'],'table10')" style="max-width: 100% !important; width: 100%;">
                                                                <option value="<?php echo $TOTT6P[$i]; ?>"><?php echo $TOTT6P[$i]; ?></option>
                                                                <option value="Diesel">Diesel</option>
                                                                <option value="Hybrid (ikke opladnings-hybrid)">Hybrid (ikke opladnings-hybrid)</option>
                                                                <option value="LNG">LNG</option>
                                                                <option value="CNG">CNG</option>
                                                                <option value="Flybenzin">Flybenzin</option>
                                                                <option value="Marine fuel oil">Marine fuel oil</option>
                                                                <option value="Uspecificeret">Uspecificeret</option>
                                                            </select></td>
                                                        <td> <input type="text" name="TOTT6DEBS[]" value="<?php echo $TOTT6DEBS[$i]; ?>" onchange="cal14();addtotalheader(['TOTT6O6','TOTT7O7'],'table10')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td> <input type="text" name="TOTT6Q[]" value="<?php echo $TOTT6Q[$i]; ?>" onchange="cal14();addtotalheader(['TOTT6O6','TOTT7O7'],'table10')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><select class="" name="TOTT6UN[]" onchange="cal14();addtotalheader(['TOTT6O6','TOTT7O7'],'table10')" style="max-width: 100% !important; width: 100%;">
                                                                <option value="<?php echo $TOTT6UN[$i]; ?>"><?php echo $TOTT6UN[$i]; ?></option>
                                                                <option value="Km">Km</option>
                                                                <option value="L">L</option>
                                                                <option value="KWh">KWh</option>
                                                                <option value="Ton.Km">Ton.Km</option>
                                                            </select></td>
                                                        <td><input type="text" readonly name="TOTT6SC1[]" value="<?php echo $TOTT6SC1[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><input type="text" readonly name="TOTT6SC2[]" value="<?php echo $TOTT6SC2[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><input type="text" readonly name="TOTT6SC3[]" value="<?php echo $TOTT6SC3[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><input type="text" readonly name="TOTT6OTS[]" value="<?php echo $TOTT6OTS[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td> <input type="text" name="TOTT6OTC[]" value="<?php echo $TOTT6OTC[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    </tr>


                                                <?php }
                                            } else { ?>
                                                <tr class="row1">
                                                    <td><input type="text" name="TOTT6DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" name="TOTT6TM[]" onchange="cal14();addtotalheader(['TOTT6O6','TOTT7O7'],'table10')" style="max-width: 100% !important; width: 100%;">

                                                            <option value="Personbiler">Personbiler</option>
                                                            <option value="Varebiler">Varebiler</option>
                                                            <option value="Lastbiler">Lastbiler</option>
                                                            <option value="Fly - internationalt">Fly - internationalt</option>
                                                            <option value="Skib">Skib</option>
                                                            <option value="Tog">Tog</option>
                                                        </select></td>
                                                    <td><select class="" name="TOTT6P[]" onchange="cal14();addtotalheader(['TOTT6O6','TOTT7O7'],'table10')" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Diesel">Diesel</option>
                                                            <option value="Hybrid (ikke opladnings-hybrid)">Hybrid (ikke opladnings-hybrid)</option>
                                                            <option value="LNG">LNG</option>
                                                            <option value="CNG">CNG</option>
                                                            <option value="Flybenzin">Flybenzin</option>
                                                            <option value="Marine fuel oil">Marine fuel oil</option>
                                                            <option value="Uspecificeret">Uspecificeret</option>
                                                        </select></td>
                                                    <td> <input type="text" name="TOTT6DEBS[]" onchange="cal14();addtotalheader(['TOTT6O6','TOTT7O7'],'table10')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td> <input type="text" name="TOTT6Q[]" onchange="cal14();addtotalheader(['TOTT6O6','TOTT7O7'],'table10')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" name="TOTT6UN[]" onchange="cal14();addtotalheader(['TOTT6O6','TOTT7O7'],'table10')" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Km">Km</option>
                                                            <option value="L">L</option>
                                                            <option value="KWh">KWh</option>
                                                            <option value="Ton.Km">Ton.Km</option>
                                                        </select></td>
                                                    <td><input type="text" readonly name="TOTT6SC1[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT6SC2[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT6SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT6OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td> <input type="text" name="TOTT6OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>
                                                <tr class="row1">
                                                    <td><input type="text" name="TOTT6DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal14();addtotalheader(['TOTT6O6','TOTT7O7'],'table10')" name="TOTT6TM[]" style="max-width: 100% !important; width: 100%;">

                                                            <option value="Personbiler">Personbiler</option>
                                                            <option value="Varebiler">Varebiler</option>
                                                            <option value="Lastbiler">Lastbiler</option>
                                                            <option value="Fly - internationalt">Fly - internationalt</option>
                                                            <option value="Skib">Skib</option>
                                                            <option value="Tog">Tog</option>
                                                        </select></td>
                                                    <td><select class="" onchange="cal14();addtotalheader(['TOTT6O6','TOTT7O7'],'table10')" name="TOTT6P[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Diesel">Diesel</option>
                                                            <option value="Hybrid (ikke opladnings-hybrid)">Hybrid (ikke opladnings-hybrid)</option>
                                                            <option value="LNG">LNG</option>
                                                            <option value="CNG">CNG</option>
                                                            <option value="Flybenzin">Flybenzin</option>
                                                            <option value="Marine fuel oil">Marine fuel oil</option>
                                                            <option value="Uspecificeret">Uspecificeret</option>
                                                        </select></td>
                                                    <td> <input type="text" onchange="cal14();addtotalheader(['TOTT6O6','TOTT7O7'],'table10')" name="TOTT6DEBS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td> <input type="text" onchange="cal14();addtotalheader(['TOTT6O6','TOTT7O7'],'table10')" name="TOTT6Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal14();addtotalheader(['TOTT6O6','TOTT7O7'],'table10')" name="TOTT6UN[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Km">Km</option>
                                                            <option value="L">L</option>
                                                            <option value="KWh">KWh</option>
                                                            <option value="Ton.Km">Ton.Km</option>
                                                        </select></td>
                                                    <td><input type="text" readonly name="TOTT6SC1[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT6SC2[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT6SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT6OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td> <input type="text" name="TOTT6OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>
                                                <tr class="row1">
                                                    <td><input type="text" name="TOTT6DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal14();addtotalheader(['TOTT6O6','TOTT7O7'],'table10')" name="TOTT6TM[]" style="max-width: 100% !important; width: 100%;">

                                                            <option value="Personbiler">Personbiler</option>
                                                            <option value="Varebiler">Varebiler</option>
                                                            <option value="Lastbiler">Lastbiler</option>
                                                            <option value="Fly - internationalt">Fly - internationalt</option>
                                                            <option value="Skib">Skib</option>
                                                            <option value="Tog">Tog</option>
                                                        </select></td>
                                                    <td><select class="" onchange="cal14();addtotalheader(['TOTT6O6','TOTT7O7'],'table10')" name="TOTT6P[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Diesel">Diesel</option>
                                                            <option value="Hybrid (ikke opladnings-hybrid)">Hybrid (ikke opladnings-hybrid)</option>
                                                            <option value="LNG">LNG</option>
                                                            <option value="CNG">CNG</option>
                                                            <option value="Flybenzin">Flybenzin</option>
                                                            <option value="Marine fuel oil">Marine fuel oil</option>
                                                            <option value="Uspecificeret">Uspecificeret</option>
                                                        </select></td>
                                                    <td> <input type="text" onchange="cal14();addtotalheader(['TOTT6O6','TOTT7O7'],'table10')" name="TOTT6DEBS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td> <input type="text" onchange="cal14();addtotalheader(['TOTT6O6','TOTT7O7'],'table10')" name="TOTT6Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal14();addtotalheader(['TOTT6O6','TOTT7O7'],'table10')" name="TOTT6UN[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Km">Km</option>
                                                            <option value="L">L</option>
                                                            <option value="KWh">KWh</option>
                                                            <option value="Ton.Km">Ton.Km</option>
                                                        </select></td>
                                                    <td><input type="text" readonly name="TOTT6SC1[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT6SC2[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT6SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT6OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td> <input type="text" name="TOTT6OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-12 col-12">

                                        <h4>Total, ton CO2-e: <input type="text" name="TOTT6O6" value="<?php echo $TOTT6O6; ?>" readonly></h4>
                                    </div>
                                </div>
                                <br>
                            </div>

                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-10 col-12">
                                        <br>
                                        <h4>Varetransport i monetære enheder (beløb i DKK)</h4>
                                    </div>
                                    <br>
                                    <div class="col-12  col-md-2">
                                        <br>
                                        <div class="row dflex flex-row" style="color:#27b939;">
                                            <p style="color:#27b939;">Tilføj række&nbsp; &nbsp;</p>
                                            <button type="button" class="btn btn-danger btn-circle btn3" onclick="adrow1('.adtable24')">
                                                <i class="fab fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="row  table-responsive-md">
                                <div class="col-md-12 table-responsive-md">
                                    <table class="table addtable1 " id="tab_logic">
                                        <thead>
                                            <tr class="trset">
                                                <th style="text-align: start;" scope="col">Beskrivelse</th>
                                                <th style="text-align: start;" scope="col">Transportmiddel </th>
                                                <th style="text-align: start;" scope="col">Drivmiddel</th>
                                                <th style="text-align: start;" scope="col">Beløb (ekskl. moms) </th>
                                                <th style="text-align: start;" scope="col" title="ton.km angiver vægt ganget med distance transporteret. Fx hvis en lastbil transporterer 24 tons 100 km, skal mængden være 2.400 ton.km.">Enhed</th>
                                                <th style="text-align: start;" scope="col">Scope 1</th>
                                                <th style="text-align: start;" scope="col">Scope 2</th>
                                                <th style="text-align: start;" scope="col">Scope 3</th>
                                                <th style="text-align: start;" scope="col">Udenfor scope</th>
                                                <th style="text-align: start;" scope="col">Bemærkning</th>
                                            </tr>
                                        </thead>
                                        <tbody class="stytb adtable24">
                                            <?php if (isset($_SESSION['T0TT7DE'])) {
                                                for ($i = 0; $i < count($TOTT3DE); $i++) { ?>
                                                    <tr class="row1">
                                                        <td><input type="text" name="TOTT7DE[]" value="<?php echo $TOTT7DE[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><select class="" name="TOTT7TM[]" onchange="cal15();addtotalheader(['TOTT6O6','TOTT7O7'],'table10')" style="max-width: 100% !important; width: 100%;">
                                                                <option value="<?php echo $TOTT7TM[$i]; ?>"><?php echo $TOTT7TM[$i]; ?></option>
                                                                <option value="Fly - internationalt">Fly - internationalt</option>
                                                                <option value="Skib">Skib</option>
                                                                <option value="Tog">Tog</option>
                                                                <option value="Lastbiler">Lastbiler</option>
                                                            </select></td>
                                                        <td><select class="" name="TOTT7P[]" onchange="cal15();addtotalheader(['TOTT6O6','TOTT7O7'],'table10')" style="max-width: 100% !important; width: 100%;">
                                                                <option value="<?php echo $TOTT7P[$i]; ?>"><?php echo $TOTT7P[$i]; ?></option>
                                                                <option value="Flybenzin">Flybenzin</option>
                                                                <option value="Marine fuel oil">Marine fuel oil</option>
                                                                <option value="Diesel">Diesel</option>
                                                                <option value="CNG">CNG</option>
                                                                <option value="LNG">LNG</option>
                                                                <option value="Uspecificeret">Uspecificeret</option>
                                                            </select></td>
                                                        <td> <input type="text" name="TOTT7AE[]" value="<?php echo $TOTT7AE[$i]; ?>" onchange="cal15();addtotalheader(['TOTT6O6','TOTT7O7'],'table10')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><select class="" name="TOTT7UN[]" onchange="cal15();addtotalheader(['TOTT6O6','TOTT7O7'],'table10')" style="max-width: 100% !important; width: 100%;">
                                                                <option value="DKK">DKK</option>
                                                            </select></td>
                                                        <td><input type="text" readonly name="TOTT7SC1[]" value="<?php echo $TOTT7SC1[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><input type="text" readonly name="TOTT7SC2[]" value="<?php echo $TOTT7SC2[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><input type="text" readonly name="TOTT7SC3[]" value="<?php echo $TOTT7SC3[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><input type="text" readonly name="TOTT7OTS[]" value="<?php echo $TOTT7OTS[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td> <input type="text" name="TOTT7OTC[]" value="<?php echo $TOTT7OTC[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    </tr>
                                                <?php }
                                            } else { ?>
                                                <tr class="row1">
                                                    <td><input type="text" name="TOTT7DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" name="TOTT7TM[]" onchange="cal15();addtotalheader(['TOTT6O6','TOTT7O7'],'table10')" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Fly - internationalt">Fly - internationalt</option>
                                                            <option value="Skib">Skib</option>
                                                            <option value="Tog">Tog</option>
                                                            <option value="Lastbiler">Lastbiler</option>
                                                        </select></td>
                                                    <td><select class="" name="TOTT7P[]" onchange="cal15();addtotalheader(['TOTT6O6','TOTT7O7'],'table10')" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Flybenzin">Flybenzin</option>
                                                            <option value="Marine fuel oil">Marine fuel oil</option>
                                                            <option value="Diesel">Diesel</option>
                                                            <option value="CNG">CNG</option>
                                                            <option value="LNG">LNG</option>
                                                            <option value="Uspecificeret">Uspecificeret</option>
                                                        </select></td>
                                                    <td> <input type="text" name="TOTT7AE[]" onchange="cal15();addtotalheader(['TOTT6O6','TOTT7O7'],'table10')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" name="TOTT7UN[]" onchange="cal15();addtotalheader(['TOTT6O6','TOTT7O7'],'table10')" style="max-width: 100% !important; width: 100%;">
                                                            <option value="DKK">DKK</option>
                                                        </select></td>
                                                    <td><input type="text" readonly name="TOTT7SC1[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT7SC2[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT7SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT7OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td> <input type="text" name="TOTT7OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>
                                                <tr class="row1">
                                                    <td><input type="text" name="TOTT7DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal15();addtotalheader(['TOTT6O6','TOTT7O7'],'table10')" name="TOTT7TM[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Fly - internationalt">Fly - internationalt</option>
                                                            <option value="Skib">Skib</option>
                                                            <option value="Tog">Tog</option>
                                                            <option value="Lastbiler">Lastbiler</option>
                                                        </select></td>
                                                    <td><select class="" onchange="cal15();addtotalheader(['TOTT6O6','TOTT7O7'],'table10')" name="TOTT7P[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Flybenzin">Flybenzin</option>
                                                            <option value="Marine fuel oil">Marine fuel oil</option>
                                                            <option value="Diesel">Diesel</option>
                                                            <option value="CNG">CNG</option>
                                                            <option value="LNG">LNG</option>
                                                            <option value="Uspecificeret">Uspecificeret</option>
                                                        </select></td>
                                                    <td> <input type="text" onchange="cal15();addtotalheader(['TOTT6O6','TOTT7O7'],'table10')" name="TOTT7AE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal15();addtotalheader(['TOTT6O6','TOTT7O7'],'table10')" name="TOTT7UN[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="DKK">DKK</option>
                                                        </select></td>
                                                    <td><input type="text" readonly name="TOTT7SC1[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT7SC2[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT7SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT7OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td> <input type="text" readonly name="TOTT7OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>
                                                <tr class="row1">
                                                    <td><input type="text" name="TOTT7DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal15();addtotalheader(['TOTT6O6','TOTT7O7'],'table10')" name="TOTT7TM[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Fly - internationalt">Fly - internationalt</option>
                                                            <option value="Skib">Skib</option>
                                                            <option value="Tog">Tog</option>
                                                            <option value="Lastbiler">Lastbiler</option>
                                                        </select></td>
                                                    <td><select class="" onchange="cal15();addtotalheader(['TOTT6O6','TOTT7O7'],'table10')" name="TOTT7P[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Flybenzin">Flybenzin</option>
                                                            <option value="Marine fuel oil">Marine fuel oil</option>
                                                            <option value="Diesel">Diesel</option>
                                                            <option value="CNG">CNG</option>
                                                            <option value="LNG">LNG</option>
                                                            <option value="Uspecificeret">Uspecificeret</option>
                                                        </select></td>
                                                    <td> <input type="text" onchange="cal15();addtotalheader(['TOTT6O6','TOTT7O7'],'table10')" name="TOTT7AE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal15();addtotalheader(['TOTT6O6','TOTT7O7'],'table10')" name="TOTT7UN[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="DKK">DKK</option>
                                                        </select></td>
                                                    <td><input type="text" readonly name="TOTT7SC1[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT7SC2[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT7SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT7OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td> <input type="text" name="TOTT7OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-12 col-12">
                                        <h4>Total, ton CO2-e: <input type="text" name="TOTT7O7" value="<?php echo $TOTT7O7; ?>" readonly></h4>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-12">
                                <div class="row head3">
                                    <div class="col-md-5">
                                        <h3 title="Her betragtes nedstrømstransport, hvilket er transport af virksomhedens solgte vare hen til kunden.

                                            Andelen af biobrændsel i motorbenzin og diesel kan specificeres hvis nødvendigt. Dette er kun muligt, hvis forbruget angives i liter, og virker dermed ikke for forbrug i km.

                                                Indberetning i fysiske enkeder giver et mere præcis resultat end ved monetære enheder (beløb i DKK).">Sekundære indkøb af hjælpematerialer og serviceydelser</h3>
                                    </div>
                                    <div class="col-md-3">
                                        <h3 style="white-space: nowrap; ">Samlet udledning: </h3>
                                    </div>
                                    <div class="col-md-1">
                                        <h3 id="table11"><?php echo number_format(floatval($TOTT8O8) +floatval($TOTT9O9), 1); ?></h3>
                                    </div>
                                    <div class="col-md-3">
                                        <h3 style="white-space: nowrap; ">Ton CO2-e</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-10 col-12">
                                        <br>
                                        <h4>Varetransport i fysiske enheder</h4>
                                    </div>
                                    <br>
                                    <div class="col-12  col-md-2">
                                        <br>
                                        <div class="row dflex flex-row" style="color:#27b939;">
                                            <p style="color:#27b939;">Tilføj række&nbsp; &nbsp;</p>
                                            <button type="button" class="btn btn-danger btn-circle btn3" onclick="adrow1('.adtable25')">
                                                <i class="fab fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="row  table-responsive-md">
                                <div class="col-md-12 table-responsive-md">
                                    <table class="table addtable1 " id="tab_logic">
                                        <thead>
                                            <tr class="trset">
                                                <th style="text-align: start;" scope="col">Beskrivelse</th>
                                                <th style="text-align: start;" scope="col">Transportmiddel </th>
                                                <th style="text-align: start;" scope="col">Drivmiddel</th>
                                                <th style="text-align: start;" scope="col" title="Hvis du kender andel af biobrændstof iblandet i dit brændstofforbrug så kan det indtastes her.">Biobrændstofsandel (%)</th>
                                                <th style="text-align: start;" scope="col">Mængde</th>
                                                <th style="text-align: start;" scope="col">Enhed</th>
                                                <th style="text-align: start;" scope="col">Scope 1</th>
                                                <th style="text-align: start;" scope="col">Scope 2</th>
                                                <th style="text-align: start;" scope="col">Scope 3</th>
                                                <th style="text-align: start;" scope="col">Udenfor scope</th>
                                                <th style="text-align: start;" scope="col">Bemærkning</th>
                                            </tr>
                                        </thead>
                                        <tbody class="stytb adtable25">
                                            <?php if (isset($_SESSION['TOTT8DE'])) {
                                                for ($i = 0; $i < count($TOTT8DE); $i++) { ?>
                                                    <tr class="row1">
                                                        <td><input type="text" name="TOTT8DE[]" value="<?php echo $TOTT8DE[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><select class="" name="TOTT8TM[]" onchange="cal16();addtotalheader(['TOTT8O8','TOTT9O9'],'table11')" style="max-width: 100% !important; width: 100%;">
                                                                <option value="<?php echo $TOTT8TM[$i]; ?>"><?php echo $TOTT8TM[$i]; ?></option>
                                                                <option value="Personbiler">Personbiler</option>
                                                                <option value="Varebiler">Varebiler</option>
                                                                <option value="Lastbiler">Lastbiler</option>
                                                                <option value="Fly - internationalt">Fly - internationalt</option>
                                                                <option value="Skib">Skib</option>
                                                                <option value="Tog">Tog</option>
                                                            </select></td>
                                                        <td><select class="" name="TOTT8P[]" onchange="cal16();addtotalheader(['TOTT8O8','TOTT9O9'],'table11')" style="max-width: 100% !important; width: 100%;">
                                                                <option value="<?php echo $TOTT8P[$i]; ?>"><?php echo $TOTT8P[$i]; ?></option>
                                                                <option value="Benzin">Benzin</option>
                                                                <option value="Diesel">Diesel</option>
                                                                <option value="El">EL</option>
                                                                <option value="Hybrid (ikke opladnings-hybrid)">Hybrid (ikke opladnings-hybrid)</option>
                                                                <option value="Flybenzin">Flybenzin</option>
                                                                <option value="Marine fuel oil">Marine fuel oil</option>
                                                                <option value="CNG">CNG</option>
                                                                <option value="LNG">LNG</option>
                                                                <option value="Uspecificeret">Uspecificeret</option>
                                                            </select></td>
                                                        <td><input type="text" name="TOTT8BS[]" value="<?php echo $TOTT8BS[$i]; ?>" onchange="cal16();addtotalheader(['TOTT8O8','TOTT9O9'],'table11')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td> <input type="text" name="TOTT8Q[]" value="<?php echo $TOTT8Q[$i]; ?>" onchange="cal16();addtotalheader(['TOTT8O8','TOTT9O9'],'table11')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><select class="" name="TOTT8UN[]" onchange="cal16();addtotalheader(['TOTT8O8','TOTT9O9'],'table11')" style="max-width: 100% !important; width: 100%;">
                                                                <option value="<?php echo $TOTT8UN[$i]; ?>"><?php echo $TOTT8UN[$i]; ?></option>
                                                                <option value="km">KM</option>
                                                                <option value="L">L</option>
                                                                <option value="KWh">KWh</option>
                                                                <option value="ton.km">Ton.Km</option>
                                                            </select></td>
                                                        <td><input type="text" readonly name="TOTT8SC1[]" value="<?php echo $TOTT8SC1[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><input type="text" readonly name="TOTT8SC2[]" value="<?php echo $TOTT8SC2[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><input type="text" readonly name="TOTT8SC3[]" value="<?php echo $TOTT8SC3[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><input type="text" readonly name="TOTT8OTS[]" value="<?php echo $TOTT8OTS[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td> <input type="text" name="TOTT8OTC[]" value="<?php echo $TOTT8OTC[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    </tr>

                                                <?php }
                                            } else { ?>
                                                <tr class="row1">
                                                    <td><input type="text" name="TOTT8DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" name="TOTT8TM[]" onchange="cal16();addtotalheader(['TOTT8O8','TOTT9O9'],'table11')" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Personbiler">Personbiler</option>
                                                            <option value="Varebiler">Varebiler</option>
                                                            <option value="Lastbiler">Lastbiler</option>
                                                            <option value="Fly - internationalt">Fly - internationalt</option>
                                                            <option value="Skib">Skib</option>
                                                            <option value="Tog">Tog</option>
                                                        </select></td>
                                                    <td><select class="" name="TOTT8P[]" onchange="cal16();addtotalheader(['TOTT8O8','TOTT9O9'],'table11')" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Benzin">Benzin</option>
                                                            <option value="Diesel">Diesel</option>
                                                            <option value="El">EL</option>
                                                            <option value="Hybrid (ikke opladnings-hybrid)">Hybrid (ikke opladnings-hybrid)</option>
                                                            <option value="Flybenzin">Flybenzin</option>
                                                            <option value="Marine fuel oil">Marine fuel oil</option>
                                                            <option value="CNG">CNG</option>
                                                            <option value="LNG">LNG</option>
                                                            <option value="Uspecificeret">Uspecificeret</option>
                                                        </select></td>
                                                    <td><input type="text" name="TOTT8BS[]" onchange="cal16();addtotalheader(['TOTT8O8','TOTT9O9'],'table11')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td> <input type="text" name="TOTT8Q[]" onchange="cal16();addtotalheader(['TOTT8O8','TOTT9O9'],'table11')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" name="TOTT8UN[]" onchange="cal16();addtotalheader(['TOTT8O8','TOTT9O9'],'table11')" style="max-width: 100% !important; width: 100%;">
                                                            <option value="km">KM</option>
                                                            <option value="L">L</option>
                                                            <option value="KWh">KWh</option>
                                                            <option value="ton.km">Ton.Km</option>
                                                        </select></td>
                                                    <td><input type="text" readonly name="TOTT8SC1[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT8SC2[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT8SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT8OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td> <input type="text" name="TOTT8OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>
                                                <tr class="row1">
                                                    <td><input type="text" name="TOTT8DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal16();addtotalheader(['TOTT8O8','TOTT9O9'],'table11')" name="TOTT8TM[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Personbiler">Personbiler</option>
                                                            <option value="Varebiler">Varebiler</option>
                                                            <option value="Lastbiler">Lastbiler</option>
                                                            <option value="Fly - internationalt">Fly - internationalt</option>
                                                            <option value="Skib">Skib</option>
                                                            <option value="Tog">Tog</option>
                                                        </select></td>
                                                    <td><select class="" onchange="cal16();addtotalheader(['TOTT8O8','TOTT9O9'],'table11')" name="TOTT8P[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Benzin">Benzin</option>
                                                            <option value="Diesel">Diesel</option>
                                                            <option value="El">EL</option>
                                                            <option value="Hybrid (ikke opladnings-hybrid)">Hybrid (ikke opladnings-hybrid)</option>
                                                            <option value="Flybenzin">Flybenzin</option>
                                                            <option value="Marine fuel oil">Marine fuel oil</option>
                                                            <option value="CNG">CNG</option>
                                                            <option value="LNG">LNG</option>
                                                            <option value="Uspecificeret">Uspecificeret</option>
                                                        </select></td>

                                                    <td><input type="text" onchange="cal16();addtotalheader(['TOTT8O8','TOTT9O9'],'table11')" name="TOTT8BS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td> <input type="text" onchange="cal16();addtotalheader(['TOTT8O8','TOTT9O9'],'table11')" name="TOTT8Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal16();addtotalheader(['TOTT8O8','TOTT9O9'],'table11')" name="TOTT8UN[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="km">KM</option>
                                                            <option value="L">L</option>
                                                            <option value="KWh">KWh</option>
                                                            <option value="ton.km">Ton.Km</option>
                                                        </select></td>

                                                    <td><input type="text" readonly name="TOTT8SC1[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT8SC2[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT8SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT8OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td> <input type="text" name="TOTT8OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>
                                                <tr class="row1">
                                                    <td><input type="text" name="TOTT8DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal16();addtotalheader(['TOTT8O8','TOTT9O9'],'table11')" name="TOTT8TM[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Personbiler">Personbiler</option>
                                                            <option value="Varebiler">Varebiler</option>
                                                            <option value="Lastbiler">Lastbiler</option>
                                                            <option value="Fly - internationalt">Fly - internationalt</option>
                                                            <option value="Skib">Skib</option>
                                                            <option value="Tog">Tog</option>
                                                        </select></td>
                                                    <td><select class="" onchange="cal16();addtotalheader(['TOTT8O8','TOTT9O9'],'table11')" name="TOTT8P[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Benzin">Benzin</option>
                                                            <option value="Diesel">Diesel</option>
                                                            <option value="El">EL</option>
                                                            <option value="Hybrid (ikke opladnings-hybrid)">Hybrid (ikke opladnings-hybrid)</option>
                                                            <option value="Flybenzin">Flybenzin</option>
                                                            <option value="Marine fuel oil">Marine fuel oil</option>
                                                            <option value="CNG">CNG</option>
                                                            <option value="LNG">LNG</option>
                                                            <option value="Uspecificeret">Uspecificeret</option>
                                                        </select></td>

                                                    <td><input type="text" onchange="cal16();addtotalheader(['TOTT8O8','TOTT9O9'],'table11')" name="TOTT8BS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td> <input type="text" onchange="cal16();addtotalheader(['TOTT8O8','TOTT9O9'],'table11')" name="TOTT8Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal16();addtotalheader(['TOTT8O8','TOTT9O9'],'table11')" name="TOTT8UN[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="km">KM</option>
                                                            <option value="L">L</option>
                                                            <option value="KWh">KWh</option>
                                                            <option value="ton.km">Ton.Km</option>
                                                        </select></td>

                                                    <td><input type="text" readonly name="TOTT8SC1[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT8SC2[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT8SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT8OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td> <input type="text" name="TOTT8OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-12 col-12">
                                        <h4>Total, ton CO2-e: <input type="text" name="TOTT8O8" value="<?php echo $TOTT8O8; ?>" readonly></h4>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-10 col-12">
                                        <br>
                                        <h4>Varetransport i monetære enheder (beløb i DKK)</h4>
                                    </div>
                                    <br>
                                    <div class="col-12  col-md-2">
                                        <br>
                                        <div class="row dflex flex-row" style="color:#27b939;">
                                            <p style="color:#27b939;">Tilføj række&nbsp; &nbsp;</p>
                                            <button type="button" class="btn btn-danger btn-circle btn3" onclick="adrow1('.adtable26')">
                                                <i class="fab fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="row  table-responsive-md">
                                <div class="col-md-12 table-responsive-md">
                                    <table class="table addtable1 " id="tab_logic">
                                        <thead>
                                            <tr class="trset">
                                                <th style="text-align: start;" scope="col">Beskrivelse</th>
                                                <th style="text-align: start;" scope="col">Transportmiddel </th>
                                                <th style="text-align: start;" scope="col">Drivmiddel</th>
                                                <th style="text-align: start;" scope="col">Beløb (ekskl. moms)</th>
                                                <th style="text-align: start;" scope="col">Enhed</th>
                                                <th style="text-align: start;" scope="col">Scope 1</th>
                                                <th style="text-align: start;" scope="col">Scope 2</th>
                                                <th style="text-align: start;" scope="col">Scope 3</th>
                                                <th style="text-align: start;" scope="col">Udenfor scope</th>
                                                <th style="text-align: start;" scope="col">Bemærkning</th>
                                            </tr>
                                        </thead>
                                        <tbody class="stytb adtable26">
                                            <?php if (isset($_SESSION['TOTT9DE'])) {
                                                for ($i = 0; $i < count($TOTT9DE); $i++) { ?>
                                                    <tr class="row1">
                                                        <td><input type="text" name="TOTT9DE[]" value="<?php echo $TOTT9DE[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><select class="" name="TOTT9TT[]" onchange="cal17();addtotalheader(['TOTT8O8','TOTT9O9'],'table11')" style="max-width: 100% !important; width: 100%;">
                                                                <option value="<?php echo $TOTT9TT[$i]; ?>"><?php echo $TOTT9TT[$i]; ?></option>
                                                                <option value="Fly - internationalt">Fly - internationalt</option>
                                                                <option value="Skib">Skib</option>
                                                                <option value="Tog">Tog</option>
                                                                <option value="Lastbiler">Lastbiler</option>
                                                            </select></td>
                                                        <td><select class="" name="TOTT9DM[]" onchange="cal17();addtotalheader(['TOTT8O8','TOTT9O9'],'table11')" style="max-width: 100% !important; width: 100%;">
                                                                <option value="<?php echo $TOTT9DM[$i]; ?>"><?php echo $TOTT9DM[$i]; ?></option>
                                                                <option value="Flybenzin">Flybenzin</option>
                                                                <option value="Marine fuel oil">Marine fuel oil</option>
                                                                <option value="Diesel">Diesel</option>
                                                                <option value="CNG">CNG</option>
                                                                <option value="LNG">LNG</option>
                                                                <option value="Uspecificeret">Uspecificeret</option>
                                                            </select></td>
                                                        <td> <input type="text" name="TOTT9B[]" value="<?php echo $TOTT9B[$i]; ?>" onchange="cal17();addtotalheader(['TOTT8O8','TOTT9O9'],'table11')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><select class="" name="TOTT9UN[]" onchange="cal17();addtotalheader(['TOTT8O8','TOTT9O9'],'table11')" style="max-width: 100% !important; width: 100%;">
                                                                <option value="DKK">DKK</option>
                                                            </select></td>
                                                        <td><input type="text" readonly name="TOTT9SC1[]" value="<?php echo $TOTT9SC1[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><input type="text" readonly name="TOTT9SC2[]" value="<?php echo $TOTT9SC2[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><input type="text" readonly name="TOTT9SC3[]" value="<?php echo $TOTT9SC3[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><input type="text" readonly name="TOTT9OTS[]" value="<?php echo $TOTT9OTS[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td> <input type="text" name="TOTT9OTC[]" value="<?php echo $TOTT9OTC[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    </tr>
                                                <?php }
                                            } else { ?>
                                                <tr class="row1">
                                                    <td><input type="text" name="TOTT9DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" name="TOTT9TT[]" onchange="cal17();addtotalheader(['TOTT8O8','TOTT9O9'],'table11')" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Fly - internationalt">Fly - internationalt</option>
                                                            <option value="Skib">Skib</option>
                                                            <option value="Tog">Tog</option>
                                                            <option value="Lastbiler">Lastbiler</option>
                                                        </select></td>
                                                    <td><select class="" name="TOTT9DM[]" onchange="cal17();addtotalheader(['TOTT8O8','TOTT9O9'],'table11')" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Flybenzin">Flybenzin</option>
                                                            <option value="Marine fuel oil">Marine fuel oil</option>
                                                            <option value="Diesel">Diesel</option>
                                                            <option value="CNG">CNG</option>
                                                            <option value="LNG">LNG</option>
                                                            <option value="Uspecificeret">Uspecificeret</option>
                                                        </select></td>
                                                    <td> <input type="text" name="TOTT9B[]" onchange="cal17();addtotalheader(['TOTT8O8','TOTT9O9'],'table11')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" name="TOTT9UN[]" onchange="cal17();addtotalheader(['TOTT8O8','TOTT9O9'],'table11')" style="max-width: 100% !important; width: 100%;">
                                                            <option value="DKK">DKK</option>
                                                        </select></td>
                                                    <td><input type="text" readonly name="TOTT9SC1[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT9SC2[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT9SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT9OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td> <input type="text" name="TOTT9OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>
                                                <tr class="row1">
                                                    <td><input type="text" name="TOTT9DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal17();addtotalheader(['TOTT8O8','TOTT9O9'],'table11')" name="TOTT9TT[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Fly - internationalt">Fly - internationalt</option>
                                                            <option value="Skib">Skib</option>
                                                            <option value="Tog">Tog</option>
                                                            <option value="Lastbiler">Lastbiler</option>
                                                        </select></td>
                                                    <td><select class="" onchange="cal17();addtotalheader(['TOTT8O8','TOTT9O9'],'table11')" name="TOTT9DM[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Flybenzin">Flybenzin</option>
                                                            <option value="Marine fuel oil">Marine fuel oil</option>
                                                            <option value="Diesel">Diesel</option>
                                                            <option value="CNG">CNG</option>
                                                            <option value="LNG">LNG</option>
                                                            <option value="Uspecificeret">Uspecificeret</option>
                                                        </select></td>
                                                    <td> <input type="text" onchange="cal17();addtotalheader(['TOTT8O8','TOTT9O9'],'table11')" name="TOTT9B[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal17();addtotalheader(['TOTT8O8','TOTT9O9'],'table11')" name="TOTT9UN[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="DKK">DKK</option>
                                                        </select></td>
                                                    <td><input type="text" readonly name="TOTT9SC1[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT9SC2[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT9SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT9OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td> <input type="text" name="TOTT9OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>
                                                <tr class="row1">
                                                    <td><input type="text" name="TOTT9DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal17();addtotalheader(['TOTT8O8','TOTT9O9'],'table11')" name="TOTT9TT[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Fly - internationalt">Fly - internationalt</option>
                                                            <option value="Skib">Skib</option>
                                                            <option value="Tog">Tog</option>
                                                            <option value="Lastbiler">Lastbiler</option>
                                                        </select></td>
                                                    <td><select class="" onchange="cal17();addtotalheader(['TOTT8O8','TOTT9O9'],'table11')" name="TOTT9DM[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="Flybenzin">Flybenzin</option>
                                                            <option value="Marine fuel oil">Marine fuel oil</option>
                                                            <option value="Diesel">Diesel</option>
                                                            <option value="CNG">CNG</option>
                                                            <option value="LNG">LNG</option>
                                                            <option value="Uspecificeret">Uspecificeret</option>
                                                        </select></td>
                                                    <td> <input type="text" onchange="cal17();addtotalheader(['TOTT8O8','TOTT9O9'],'table11')" name="TOTT9B[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal17();addtotalheader(['TOTT8O8','TOTT9O9'],'table11')" name="TOTT9UN[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="DKK">DKK</option>
                                                        </select></td>
                                                    <td><input type="text" readonly name="TOTT9SC1[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT9SC2[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT9SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="TOTT9OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td> <input type="text" name="TOTT9OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-12 col-12">
                                        <h4>Total, ton CO2-e: <input type="text" name="TOTT9O9" value="<?php echo $TOTT9O9; ?>" readonly></h4>
                                    </div>
                                </div>
                                <br>
                            </div>

                            <div class="col-12">
                                <div class="row head3">
                                    <div class="col-md-5">
                                        <h3 title="Under Andet kan du indtaste forbrug, som ikke er blevet fanget af alle ovenstående tabeller i relation til transport, eller du kan tilføjes egne og mere specifikke beregninger. ">
                                            Andet
                                        </h3>
                                    </div>
                                    <div class="col-md-3">
                                        <h3 style="white-space: nowrap; ">Samlet udledning: </h3>
                                    </div>
                                    <div class="col-md-1">
                                        <h3 id="table12"><?php echo number_format(floatval($TOTT10O10), 1); ?></h3>
                                    </div>
                                    <div class="col-md-3">
                                        <h3 style="white-space: nowrap; ">Ton CO2-e</h3>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-10 col-12">
                                        <br>
                                        <h4>Andet</h4>
                                    </div>
                                    <br>
                                    <div class="col-12  col-md-2">
                                        <br>
                                        <div class="row dflex flex-row" style="color:#27b939;">
                                            <p style="color:#27b939;">Tilføj række&nbsp; &nbsp;</p>
                                            <button type="button" class="btn btn-danger btn-circle btn3" onclick="adrow1('.adtable27')">
                                                <i class="fab fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="row  table-responsive-md">
                                <div class="col-md-12 table-responsive-md">
                                    <table class="table addtable1 " id="tab_logic">
                                        <thead>
                                            <tr class="trset">
                                                <th style="text-align: start;" scope="col">Beskrivelse</th>
                                                <th style="text-align: start;" scope="col">Transportmiddel </th>
                                                <th style="text-align: start;" scope="col">Drivmiddel</th>
                                                <th style="text-align: start;" scope="col">Mængde</th>
                                                <th style="text-align: start;" scope="col">Enhed</th>
                                                <th style="text-align: start;" scope="col">Scope 1</th>
                                                <th style="text-align: start;" scope="col">Scope 2</th>
                                                <th style="text-align: start;" scope="col">Scope 3</th>
                                                <th style="text-align: start;" scope="col">Udenfor scope</th>
                                                <th style="text-align: start;" scope="col">Bemærkning</th>
                                            </tr>
                                        </thead>
                                        <tbody class="stytb adtable27">
                                            <?php if (isset($_SESSION['TOTT10DE'])) {
                                                for ($i = 0; $i < count($TOTT10DE); $i++) { ?>
                                                    <tr class="row1">
                                                        <td><input type="text" name="TOTT10DE[]" value="<?php echo $TOTT10DE[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><input type="text" name="TOTT10TM[]" value="<?php echo $TOTT10TM[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><input type="text" name="TOTT10Q[]" value="<?php echo $TOTT10Q[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td> <input type="text" name="TOTT10UN[]" value="<?php echo $TOTT10UN[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><input type="text" name="TOTT10EF[]" value="<?php echo $TOTT10EF[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><input type="text" name="TOTT10SC1[]" value="<?php echo $TOTT10SC1[$i]; ?>" onchange="totals3('TOTT10SC1[]','TOTT10SC2[]','TOTT10SC3[]','TOTT10OTS[]','TOTT10O10');addtotalheader(['TOTT10O10'],'table12')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><input type="text" name="TOTT10SC2[]" value="<?php echo $TOTT10SC2[$i]; ?>" onchange="totals3('TOTT10SC1[]','TOTT10SC2[]','TOTT10SC3[]','TOTT10OTS[]','TOTT10O10');addtotalheader(['TOTT10O10'],'table12')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><input type="text" name="TOTT10SC3[]" value="<?php echo $TOTT10SC3[$i]; ?>" onchange="totals3('TOTT10SC1[]','TOTT10SC2[]','TOTT10SC3[]','TOTT10OTS[]','TOTT10O10');addtotalheader(['TOTT10O10'],'table12')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td><input type="text" name="TOTT10OTS[]" value="<?php echo $TOTT10OTS[$i]; ?>" onchange="totals3('TOTT10SC1[]','TOTT10SC2[]','TOTT10SC3[]','TOTT10OTS[]','TOTT10O10');addtotalheader(['TOTT10O10'],'table12')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                        <td> <input type="text" name="TOTT10OTC[]" value="<?php echo $TOTT10OTC[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    </tr>
                                                <?php }
                                            } else { ?>
                                                <tr class="row1">
                                                    <td><input type="text" name="TOTT10DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="TOTT10TM[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="TOTT10Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td> <input type="text" name="TOTT10UN[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="TOTT10EF[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="TOTT10SC1[]" onchange="totals3('TOTT10SC1[]','TOTT10SC2[]','TOTT10SC3[]','TOTT10OTS[]','TOTT10O10');addtotalheader(['TOTT10O10'],'table12')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="TOTT10SC2[]" onchange="totals3('TOTT10SC1[]','TOTT10SC2[]','TOTT10SC3[]','TOTT10OTS[]','TOTT10O10');addtotalheader(['TOTT10O10'],'table12')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="TOTT10SC3[]" onchange="totals3('TOTT10SC1[]','TOTT10SC2[]','TOTT10SC3[]','TOTT10OTS[]','TOTT10O10');addtotalheader(['TOTT10O10'],'table12')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="TOTT10OTS[]" onchange="totals3('TOTT10SC1[]','TOTT10SC2[]','TOTT10SC3[]','TOTT10OTS[]','TOTT10O10');addtotalheader(['TOTT10O10'],'table12')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td> <input type="text" name="TOTT10OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>
                                                <tr class="row1">
                                                    <td><input type="text" name="TOTT10DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="TOTT10TM[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="TOTT10Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td> <input type="text" name="TOTT10UN[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="TOTT10EF[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" onchange="totals3('TOTT10SC1[]','TOTT10SC2[]','TOTT10SC3[]','TOTT10OTS[]','TOTT10O10');addtotalheader(['TOTT10O10'],'table12')" name="TOTT10SC1[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" onchange="totals3('TOTT10SC1[]','TOTT10SC2[]','TOTT10SC3[]','TOTT10OTS[]','TOTT10O10');addtotalheader(['TOTT10O10'],'table12')" name="TOTT10SC2[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" onchange="totals3('TOTT10SC1[]','TOTT10SC2[]','TOTT10SC3[]','TOTT10OTS[]','TOTT10O10');addtotalheader(['TOTT10O10'],'table12')" name="TOTT10SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" onchange="totals3('TOTT10SC1[]','TOTT10SC2[]','TOTT10SC3[]','TOTT10OTS[]','TOTT10O10');addtotalheader(['TOTT10O10'],'table12')" name="TOTT10OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td> <input type="text" name="TOTT10OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>
                                                <tr class="row1">
                                                    <td><input type="text" name="TOTT10DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="TOTT10TM[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="TOTT10Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td> <input type="text" name="TOTT10UN[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="TOTT10EF[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" onchange="totals3('TOTT10SC1[]','TOTT10SC2[]','TOTT10SC3[]','TOTT10OTS[]','TOTT10O10');addtotalheader(['TOTT10O10'],'table12')" name="TOTT10SC1[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" onchange="totals3('TOTT10SC1[]','TOTT10SC2[]','TOTT10SC3[]','TOTT10OTS[]','TOTT10O10');addtotalheader(['TOTT10O10'],'table12')" name="TOTT10SC2[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" onchange="totals3('TOTT10SC1[]','TOTT10SC2[]','TOTT10SC3[]','TOTT10OTS[]','TOTT10O10');addtotalheader(['TOTT10O10'],'table12')" name="TOTT10SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" onchange="totals3('TOTT10SC1[]','TOTT10SC2[]','TOTT10SC3[]','TOTT10OTS[]','TOTT10O10');addtotalheader(['TOTT10O10'],'table12')" name="TOTT10OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td> <input type="text" name="TOTT10OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-12 col-12">

                                        <h4>Total, ton CO2-e: <input type="text" name="TOTT10O10" value="<?php echo $TOTT10O10; ?>" readonly></h4>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                        <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />

                    </fieldset>

                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 5 - 6</h2>
                                </div>
                            </div>
                            <div class="col-md-5 col-12">
                                <br>
                                <h2 class="fs-title logr">Affald og genbrug</h2>
                                <h5 class="fs-title short">Her kan du indtaste mængder af internt genbrugt materiale samt affaldsmængder og håndteringen af disse. Affald og genbrug relateres til scope 3.


                                </h5>
                                <br>
                                <h4>Tryk på "+" i venstre side for at folde rækkerne ud. </h4>
                                <br>
                                <br>
                            </div>
                            <div class="col-12">
                                <div class="row head3">
                                    <div class="col-md-5">
                                        <h3 title="Her kan du indtastes de mængder af affald som virksomheden genererer og den efterfølgende affaldshåndtering. 
                                            Evt. undgået udledning fra genbrug, genanvendelse eller forbrænding med energi udvinding inkluderes ikke i Scope 1-3 ifølge GHG protokollen.
                                            De vurderedes dog her i kategorien Udenfor scopeEmissionerne udenfor scope skal tolkes som supplerende oplysninger og er ikke en del af virksomhedens klimaregnskab, jf. GHG protokollen.">
                                            Affald
                                        </h3>
                                    </div>
                                    <div class="col-md-3">
                                        <h3 style="white-space: nowrap; ">Samlet udledning: </h3>
                                    </div>
                                    <div class="col-md-1">
                                        <h3 id="table13"><?php echo number_format(floatval($WRRT1O1), 1); ?></h3>
                                    </div>
                                    <div class="col-md-3">
                                        <h3 style="white-space: nowrap; ">Ton CO2-e</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-10 col-12">
                                        <br>
                                        <h4>Affald</h4>
                                    </div>
                                    <br>
                                    <div class="col-12  col-md-2">
                                        <br>
                                        <div class="row dflex flex-row" style="color:#27b939;">
                                            <p style="color:#27b939;">Tilføj række&nbsp; &nbsp;</p>
                                            <button type="button" class="btn btn-danger btn-circle btn3" onclick="adrow1('.adtable28')">
                                                <i class="fab fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-12 table-responsive-md">
                                <table class="table addtable1" id="tab_logic">
                                    <thead>
                                        <tr class="trset">
                                            <th style="text-align: start;" scope="col">Beskrivelse</th>
                                            <th style="text-align: start;" scope="col">Affaldstype</th>
                                            <th style="text-align: start;" scope="col">Affaldshåndtering</th>
                                            <th style="text-align: start;" scope="col">Mængde</th>
                                            <th class="col-1" style="text-align: start;" scope="col" colspan="col-4">Enhed</th>
                                            <th style="text-align: start;" scope="col">Scope 1</th>
                                            <th style="text-align: start;" scope="col">Scope 2</th>
                                            <th style="text-align: start;" scope="col">Scope 3</th>
                                            <th style="text-align: start;" scope="col">Udenfor scope</th>
                                            <th style="text-align: start;" scope="col">Bemærkning</th>
                                        </tr>
                                    </thead>
                                    <tbody class="stytb adtable28">
                                        <?php if (isset($_SESSION['WRRT1DE'])) {
                                            for ($i = 0; $i < count($WRRT1DE); $i++) { ?>
                                                <tr class="row1">
                                                    <td><input type="text" name="WRRT1DE[]" value="<?php echo $WRRT1DE[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" name="WRRT1WT[]" onchange="cal18();addtotalheader(['WRRT1O1'],'table13')" style="max-width: 100% !important; width: 100%;">
                                                            <option value="<?php echo $WRRT1WT[$i]; ?>"><?php echo $WRRT1WT[$i]; ?></option>
                                                            <option value="Kobber">Kobber</option>
                                                            <option value="Aluminium">Aluminium</option>
                                                            <option value="Stål og jern">Stål og jern</option>
                                                            <option value="Ædelmetaller">Ædelmetaller</option>
                                                            <option value="Bly">Bly</option>
                                                            <option value="Ikke-jernholdige metaller">Ikke-jernholdige metaller</option>
                                                            <option value="Papir og pap">Papir og pap</option>
                                                            <option value="Plast">Plast</option>
                                                            <option value="Glas">Glas</option>
                                                            <option value="Beton">Beton</option>
                                                            <option value="Træ">Træ</option>
                                                            <option value="Fødevarer, organisk">Fødevarer, organisk</option>
                                                            <option value="Farligt affald">Farligt affald</option>
                                                            <option value="Tekstiler">Tekstiler</option>
                                                            <option value="Elektronisk">Elektronisk</option>
                                                            <option value="Dagrenovation">Dagrenovation</option>
                                                            <option value="Spildevand">Spildevand</option>
                                                        </select></td>
                                                    <td><select class="" name="WRRT1WM[]" onchange="cal18();addtotalheader(['WRRT1O1'],'table13')" style="max-width: 100% !important; width: 100%;">
                                                            <option value="<?php echo $WRRT1WM[$i]; ?>"><?php echo $WRRT1WM[$i]; ?></option>
                                                            <option value="Uspecificeret">Uspecificeret</option>
                                                            <option value="Deponi">Deponi</option>
                                                            <option value="Forbrænding">Forbrænding</option>
                                                            <option value="Genanvendelse">Genanvendelse</option>

                                                        </select></td>
                                                    <td><input type="text" name="WRRT1Q[]" value="<?php echo $WRRT1Q[$i]; ?>" onchange="cal18();addtotalheader(['WRRT1O1'],'table13')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" name="WRRT1UN[]" onchange="cal18();addtotalheader(['WRRT1O1'],'table13')" style="max-width: 100% !important; width: 100%;">
                                                            <option value="<?php echo $WRRT1UN[$i]; ?>"><?php echo $WRRT1UN[$i]; ?></option>
                                                            <option value="kg">Kg</option>
                                                            <option value="Ton">Ton</option>
                                                        </select></td>
                                                    <td><input type="text" readonly name="WRRT1SC1[]" value="<?php echo $WRRT1SC1[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="WRRT1SC2[]" value="<?php echo $WRRT1SC2[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="WRRT1SC3[]" value="<?php echo $WRRT1SC3[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="WRRT1OTS[]" value="<?php echo $WRRT1OTS[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="WRRT1OTC[]" value="<?php echo $WRRT1OTC[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>

                                                </tr>
                                            <?php }
                                        } else { ?>
                                            <tr class="row1">
                                                <td><input type="text" name="WRRT1DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" name="WRRT1WT[]" onchange="cal18();addtotalheader(['WRRT1O1'],'table13')" style="max-width: 100% !important; width: 100%;">
                                                        <option value="Kobber">Kobber</option>
                                                        <option value="Aluminium">Aluminium</option>
                                                        <option value="Stål og jern">Stål og jern</option>
                                                        <option value="Ædelmetaller">Ædelmetaller</option>
                                                        <option value="Bly">Bly</option>
                                                        <option value="Ikke-jernholdige metaller">Ikke-jernholdige metaller</option>
                                                        <option value="Papir og pap">Papir og pap</option>
                                                        <option value="Plast">Plast</option>
                                                        <option value="Glas">Glas</option>
                                                        <option value="Beton">Beton</option>
                                                        <option value="Træ">Træ</option>
                                                        <option value="Fødevarer, organisk">Fødevarer, organisk</option>
                                                        <option value="Farligt affald">Farligt affald</option>
                                                        <option value="Tekstiler">Tekstiler</option>
                                                        <option value="Elektronisk">Elektronisk</option>
                                                        <option value="Dagrenovation">Dagrenovation</option>
                                                        <option value="Spildevand">Spildevand</option>
                                                    </select></td>
                                                <td><select class="" name="WRRT1WM[]" onchange="cal18();addtotalheader(['WRRT1O1'],'table13')" style="max-width: 100% !important; width: 100%;">
                                                        <option value="Uspecificeret">Uspecificeret</option>
                                                        <option value="Deponi">Deponi</option>
                                                        <option value="Forbrænding">Forbrænding</option>
                                                        <option value="Genanvendelse">Genanvendelse</option>

                                                    </select></td>
                                                <td><input type="text" name="WRRT1Q[]" onchange="cal18();addtotalheader(['WRRT1O1'],'table13')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" name="WRRT1UN[]" onchange="cal18();addtotalheader(['WRRT1O1'],'table13')" style="max-width: 100% !important; width: 100%;">
                                                        <option value="kg">Kg</option>
                                                        <option value="Ton">Ton</option>
                                                    </select></td>
                                                <td><input type="text" readonly name="WRRT1SC1[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" readonly name="WRRT1SC2[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" readonly name="WRRT1SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" readonly name="WRRT1OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="WRRT1OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>

                                            </tr>
                                            <tr class="row1">
                                                <td><input type="text" name="WRRT1DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="cal18();addtotalheader(['WRRT1O1'],'table13')" name="WRRT1WT[]" style="max-width: 100% !important; width: 100%;">
                                                        <option value="Kobber">Kobber</option>
                                                        <option value="Aluminium">Aluminium</option>
                                                        <option value="Stål og jern">Stål og jern</option>
                                                        <option value="Ædelmetaller">Ædelmetaller</option>
                                                        <option value="Bly">Bly</option>
                                                        <option value="Ikke-jernholdige metaller">Ikke-jernholdige metaller</option>
                                                        <option value="Papir og pap">Papir og pap</option>
                                                        <option value="Plast">Plast</option>
                                                        <option value="Glas">Glas</option>
                                                        <option value="Beton">Beton</option>
                                                        <option value="Træ">Træ</option>
                                                        <option value="Fødevarer, organisk">Fødevarer, organisk</option>
                                                        <option value="Farligt affald">Farligt affald</option>
                                                        <option value="Tekstiler">Tekstiler</option>
                                                        <option value="Elektronisk">Elektronisk</option>
                                                        <option value="Dagrenovation">Dagrenovation</option>
                                                        <option value="Spildevand">Spildevand</option>
                                                    </select></td>
                                                <td><select class="" onchange="cal18();addtotalheader(['WRRT1O1'],'table13')" name="WRRT1WM[]" style="max-width: 100% !important; width: 100%;">
                                                        <option value="Uspecificeret">Uspecificeret</option>
                                                        <option value="Deponi">Deponi</option>
                                                        <option value="Forbrænding">Forbrænding</option>
                                                        <option value="Genanvendelse">Genanvendelse</option>
                                                    </select></td>
                                                <td><input type="text" onchange="cal18();addtotalheader(['WRRT1O1'],'table13')" name="WRRT1Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="cal18();addtotalheader(['WRRT1O1'],'table13')" name="WRRT1UN[]" style="max-width: 100% !important; width: 100%;">
                                                        <option value="Kg">Kg</option>
                                                        <option value="Ton">Ton</option>
                                                    </select></td>
                                                <td><input type="text" readonly name="WRRT1SC1[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" readonly name="WRRT1SC2[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" readonly name="WRRT1SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" readonly name="WRRT1OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="WRRT1OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>

                                            </tr>
                                            <tr class="row1">
                                                <td><input type="text" name="WRRT1DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="cal18();addtotalheader(['WRRT1O1'],'table13')" name="WRRT1WT[]" style="max-width: 100% !important; width: 100%;">
                                                        <option value="Kobber">Kobber</option>
                                                        <option value="Aluminium">Aluminium</option>
                                                        <option value="Stål og jern">Stål og jern</option>
                                                        <option value="Ædelmetaller">Ædelmetaller</option>
                                                        <option value="Bly">Bly</option>
                                                        <option value="Ikke-jernholdige metaller">Ikke-jernholdige metaller</option>
                                                        <option value="Papir og pap">Papir og pap</option>
                                                        <option value="Plast">Plast</option>
                                                        <option value="Glas">Glas</option>
                                                        <option value="Beton">Beton</option>
                                                        <option value="Træ">Træ</option>
                                                        <option value="Fødevarer, organisk">Fødevarer, organisk</option>
                                                        <option value="Farligt affald">Farligt affald</option>
                                                        <option value="Tekstiler">Tekstiler</option>
                                                        <option value="Elektronisk">Elektronisk</option>
                                                        <option value="Dagrenovation">Dagrenovation</option>
                                                        <option value="Spildevand">Spildevand</option>
                                                    </select></td>
                                                <td><select class="" onchange="cal18();addtotalheader(['WRRT1O1'],'table13')" name="WRRT1WM[]" style="max-width: 100% !important; width: 100%;">
                                                        <option value="Uspecificeret">Uspecificeret</option>
                                                        <option value="Deponi">Deponi</option>
                                                        <option value="Forbrænding">Forbrænding</option>
                                                        <option value="Genanvendelse">Genanvendelse</option>
                                                    </select></td>
                                                <td><input type="text" onchange="cal18();addtotalheader(['WRRT1O1'],'table13')" name="WRRT1Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="cal18();addtotalheader(['WRRT1O1'],'table13')" name="WRRT1UN[]" style="max-width: 100% !important; width: 100%;">
                                                        <option value="Kg">Kg</option>
                                                        <option value="Ton">Ton</option>
                                                    </select></td>
                                                <td><input type="text" readonly name="WRRT1SC1[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" readonly name="WRRT1SC2[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" readonly name="WRRT1SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" readonly name="WRRT1OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="WRRT1OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>

                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-12 col-12">
                                        <h4>Total, ton CO2-e: <input type="text" name="WRRT1O1" value="<?php echo $WRRT1O1; ?>" readonly></h4>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-12">
                                <div class="row head3">
                                    <div class="col-md-5">
                                        <h3 title="Under Andet kan du indtaste forbrug, som ikke er blevet fanget af alle ovenstående tabeller i relation til Affald & genbrug, eller der kan tilføjes egne og mere specifikke beregninger. ">Andet</h3>
                                    </div>
                                    <div class="col-md-3">
                                        <h3 style="white-space: nowrap; ">Samlet udledning: </h3>
                                    </div>
                                    <div class="col-md-1">
                                        <h3 id="table14"><?php echo number_format(floatval($WRRT2O2), 1); ?></h3>
                                    </div>
                                    <div class="col-md-3">
                                        <h3 style="white-space: nowrap; ">Ton CO2-e</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-10 col-12">
                                        <br>
                                        <h4>Andet
                                        </h4>
                                    </div>
                                    <br>
                                    <div class="col-12  col-md-2">
                                        <br>
                                        <div class="row dflex flex-row" style="color:#27b939;">
                                            <p style="color:#27b939;">Tilføj række&nbsp; &nbsp;</p>
                                            <button type="button" class="btn btn-danger btn-circle btn3" onclick="adrow1('.adtable29')">
                                                <i class="fab fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-12 table-responsive-md">
                                <table class="table addtable1" id="tab_logic">
                                    <thead>
                                        <tr class="trset">
                                            <th style="text-align: start;" scope="col">Beskrivelse</th>
                                            <th style="text-align: start;" scope="col">Materiale</th>
                                            <th style="text-align: start;" scope="col">Mængde </th>
                                            <th style="text-align: start;" scope="col">Enhed</th>
                                            <th style="text-align: start;" scope="col">Emissionsfaktor</th>
                                            <th style="text-align: start;" scope="col">Scope 1</th>
                                            <th style="text-align: start;" scope="col">Scope 2</th>
                                            <th style="text-align: start;" scope="col">Scope 3</th>
                                            <th style="text-align: start;" scope="col">Udenfor scope</th>
                                            <th style="text-align: start;" scope="col">Bemærkning</th>
                                        </tr>
                                    </thead>
                                    <tbody class="stytb adtable29">
                                        <?php if (isset($_SESSION['WRRT2DE'])) {
                                            for ($i = 0; $i < count($WRRT2DE); $i++) { ?>
                                                <tr class="row1">
                                                    <td><input type="text" name="WRRT2DE[]" value="<?php echo $WRRT2DE[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="WRRT2M[]" value="<?php echo $WRRT2M[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="WRRT2Q[]" value="<?php echo $WRRT2Q[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="WRRT2UN[]" value="<?php echo $WRRT2UN[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="WRRT2EF[]" value="<?php echo $WRRT2EF[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="WRRT2SC1[]" value="<?php echo $WRRT2SC1[$i]; ?>" onchange="totals3('WRRT2SC1[]','WRRT2SC2[]','WRRT2SC3[]','WRRT2DOTS[]','WRRT2O2');addtotalheader(['WRRT2O2'],'table14')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="WRRT2SC2[]" value="<?php echo $WRRT2SC2[$i]; ?>" onchange="totals3('WRRT2SC1[]','WRRT2SC2[]','WRRT2SC3[]','WRRT2DOTS[]','WRRT2O2');addtotalheader(['WRRT2O2'],'table14')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="WRRT2SC3[]" value="<?php echo $WRRT2SC3[$i]; ?>" onchange="totals3('WRRT2SC1[]','WRRT2SC2[]','WRRT2SC3[]','WRRT2DOTS[]','WRRT2O2');addtotalheader(['WRRT2O2'],'table14')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="WRRT2DOTS[]" value="<?php echo $WRRT2DOTS[$i]; ?>" onchange="totals3('WRRT2SC1[]','WRRT2SC2[]','WRRT2SC3[]','WRRT2DOTS[]','WRRT2O2');addtotalheader(['WRRT2O2'],'table14')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="WRRT2OTC[]" value="<?php echo $WRRT2OTC[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>
                                            <?php }
                                        } else { ?>
                                            <tr class="row1">
                                                <td><input type="text" name="WRRT2DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="WRRT2M[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="WRRT2Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="WRRT2UN[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="WRRT2EF[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="WRRT2SC1[]" onchange="totals3('WRRT2SC1[]','WRRT2SC2[]','WRRT2SC3[]','WRRT2DOTS[]','WRRT2O2');addtotalheader(['WRRT2O2'],'table14')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="WRRT2SC2[]" onchange="totals3('WRRT2SC1[]','WRRT2SC2[]','WRRT2SC3[]','WRRT2DOTS[]','WRRT2O2');addtotalheader(['WRRT2O2'],'table14')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="WRRT2SC3[]" onchange="totals3('WRRT2SC1[]','WRRT2SC2[]','WRRT2SC3[]','WRRT2DOTS[]','WRRT2O2');addtotalheader(['WRRT2O2'],'table14')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="WRRT2DOTS[]" onchange="totals3('WRRT2SC1[]','WRRT2SC2[]','WRRT2SC3[]','WRRT2DOTS[]','WRRT2O2');addtotalheader(['WRRT2O2'],'table14')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="WRRT2OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            </tr>
                                            <tr class="row1">
                                                <td><input type="text" name="WRRT2DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="WRRT2M[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="WRRT2Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="WRRT2UN[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="WRRT2EF[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" onchange="totals3('WRRT2SC1[]','WRRT2SC2[]','WRRT2SC3[]','WRRT2DOTS[]','WRRT2O2');addtotalheader(['WRRT2O2'],'table14')" name="WRRT2SC1[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" onchange="totals3('WRRT2SC1[]','WRRT2SC2[]','WRRT2SC3[]','WRRT2DOTS[]','WRRT2O2');addtotalheader(['WRRT2O2'],'table14')" name="WRRT2SC2[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" onchange="totals3('WRRT2SC1[]','WRRT2SC2[]','WRRT2SC3[]','WRRT2DOTS[]','WRRT2O2');addtotalheader(['WRRT2O2'],'table14')" name="WRRT2SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" onchange="totals3('WRRT2SC1[]','WRRT2SC2[]','WRRT2SC3[]','WRRT2DOTS[]','WRRT2O2');addtotalheader(['WRRT2O2'],'table14')" name="WRRT2DOTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="WRRT2OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            </tr>
                                            <tr class="row1">
                                                <td><input type="text" name="WRRT2DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="WRRT2M[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="WRRT2Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="WRRT2UN[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="WRRT2EF[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" onchange="totals3('WRRT2SC1[]','WRRT2SC2[]','WRRT2SC3[]','WRRT2DOTS[]','WRRT2O2');addtotalheader(['WRRT2O2'],'table14')" name="WRRT2SC1[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" onchange="totals3('WRRT2SC1[]','WRRT2SC2[]','WRRT2SC3[]','WRRT2DOTS[]','WRRT2O2');addtotalheader(['WRRT2O2'],'table14')" name="WRRT2SC2[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" onchange="totals3('WRRT2SC1[]','WRRT2SC2[]','WRRT2SC3[]','WRRT2DOTS[]','WRRT2O2');addtotalheader(['WRRT2O2'],'table14')" name="WRRT2SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" onchange="totals3('WRRT2SC1[]','WRRT2SC2[]','WRRT2SC3[]','WRRT2DOTS[]','WRRT2O2');addtotalheader(['WRRT2O2'],'table14')" name="WRRT2DOTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="WRRT2OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            </tr>
                                        <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-12 col-12">
                                        <h4>Total, ton CO2-e: <input type="text" name="WRRT2O2" value="<?php echo $WRRT2O2; ?>"></h4>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                        <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">

                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 6 - 6</h2>
                                </div>
                            </div>
                            <div class="col-md-5 col-12">
                                <br>
                                <h2 class="fs-title logr">Solgte produkter</h2>
                                <h5 class="fs-title short">Solgte produkter refererer til virksomhedens produkter, og dets klimapåvirkning
                                    efter produktet er solgt til en kunde. På denne side kan du indtaste informationer omkring udledning af
                                    drivhusgasser, som resultat af kundens anvendelse af produktet og bortskaffelsen af dette efter
                                    brugsfasen.
                                    <br>
                                    <br>
                                    VIGTIGT! <br>
                                    <span style="font-weight:700;"> Vær opmærksom på at Transport fra virksomhed til kunden skal indtastes under Transport.
                                    </span><br><br>
                                    Udledninger i forbindelse med Solgte produkter omhandler udelukkende scope 3 og udledning udenfor scope.
                                </h5>
                                <br>
                                <h4>Tryk på "+" i venstre side for at folde rækkerne ud. </h4>
                                <br>
                                <br>
                            </div>
                            <div class="col-12">
                                <div class="row head3">
                                    <div class="col-md-5">
                                        <h3 title="Her kan du indtaste information omkring energiforbruget i forbindelse med forarbejdning og processering af halvfabrikata varer solgt til kunder. 

                                            Det kan fx være maling, lakering, oliering, rengøring osv.Emissionsfaktorerne eller totale emissioner skal i selv vurdere og indtaste.">
                                            Forarbejdning og processering af solgte produkter
                                        </h3>
                                    </div>
                                    <div class="col-md-3">
                                        <h3 style="white-space: nowrap; ">Samlet udledning: </h3>
                                    </div>
                                    <div class="col-md-1">
                                        <h3 id="table15"><?php echo number_format(floatval($SPPT1O1), 1); ?></h3>
                                    </div>
                                    <div class="col-md-3">
                                        <h3 style="white-space: nowrap; ">Ton CO2-e</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-10 col-12">
                                        <br>
                                        <h4>Proces</h4>
                                    </div>
                                    <br>
                                    <div class="col-12  col-md-2">
                                        <br>
                                        <div class="row dflex flex-row" style="color:#27b939;">
                                            <p style="color:#27b939;">Tilføj række&nbsp; &nbsp;</p>
                                            <button type="button" class="btn btn-danger btn-circle btn3" onclick="adrow1('.adtable30')">
                                                <i class="fab fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-12 table-responsive-md">
                                <table class="table addtable1" id="tab_logic">
                                    <thead>
                                        <tr class="trset">
                                            <th style="text-align: start;" scope="col">Beskrivelse</th>
                                            <th style="text-align: start;" scope="col">Mængde</th>
                                            <th style="text-align: start;" scope="col">Enhed</th>
                                            <th style="text-align: start;" scope="col">Emissionsfaktor</th>
                                            <th style="text-align: start;" scope="col">Scope 3</th>
                                            <th style="text-align: start;" scope="col">Udenfor scope</th>
                                            <th style="text-align: start;" scope="col">Bemærkning</th>

                                        </tr>
                                    </thead>
                                    <tbody class="stytb adtable30">
                                        <?php if (isset($_SESSION['SPPT1DE'])) {
                                            for ($i = 0; $i < count($SPPT1DE); $i++) { ?>
                                                <tr class="row1">
                                                    <td><input type="text" name="SPPT1DE[]" value="<?php echo $SPPT1DE[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="SPPT1Q[]" value="<?php echo $SPPT1Q[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="SPPT1UN[]" value="<?php echo $SPPT1UN[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="SPPT1EF[]" value="<?php echo $SPPT1EF[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" value="<?php echo $SPPT1SC3[$i]; ?>" onchange="totalso('SPPT1SC3[]','SPPT1O1');addtotalheader(['SPPT1O1'],'table15')" name="SPPT1SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" value="<?php echo $SPPT1OTS[$i]; ?>" onchange="totalso('SPPT1SC3[]','SPPT1O1');addtotalheader(['SPPT1O1'],'table15')" name="SPPT1OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" value="<?php echo $SPPT1OTC[$i]; ?>" name="SPPT1OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>

                                                </tr>
                                            <?php }
                                        } else { ?>
                                            <tr class="row1">
                                                <td><input type="text" name="SPPT1DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="SPPT1Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="SPPT1UN[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="SPPT1EF[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" onchange="totalso('SPPT1SC3[]','SPPT1O1');addtotalheader(['SPPT1O1'],'table15')" name="SPPT1SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" onchange="totalso('SPPT1SC3[]','SPPT1O1');addtotalheader(['SPPT1O1'],'table15')" name="SPPT1OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="SPPT1OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>

                                            </tr>
                                            <tr class="row1">
                                                <td><input type="text" name="SPPT1DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="SPPT1Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="SPPT1UN[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="SPPT1EF[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" onchange="totalso('SPPT1SC3[]','SPPT1O1');addtotalheader(['SPPT1O1'],'table15')" name="SPPT1SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" onchange="totalso('SPPT1SC3[]','SPPT1O1');addtotalheader(['SPPT1O1'],'table15')" name="SPPT1OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="SPPT1OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>

                                            </tr>
                                            <tr class="row1">
                                                <td><input type="text" name="SPPT1DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="SPPT1Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="SPPT1UN[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="SPPT1EF[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" onchange="totalso('SPPT1SC3[]','SPPT1O1');addtotalheader(['SPPT1O1'],'table15')" name="SPPT1SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" onchange="totalso('SPPT1SC3[]','SPPT1O1');addtotalheader(['SPPT1O1'],'table15')" name="SPPT1OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="SPPT1OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>

                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-12 col-12">
                                        <h4>Total, ton CO2-e: <input type="text" name="SPPT1O1" value="<?php echo $SPPT1O1; ?>" readonly></h4>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-12">
                                <div class="row head3">
                                    <div class="col-md-5">
                                        <h3 title="Her kan du indtaste det solgte produkts forventede forbrug af brændsel, el og vand i løbet af dets levetid. ">
                                            Brug af solgte og udlejede produkter
                                        </h3>
                                    </div>
                                    <div class="col-md-3">
                                        <h3 style="white-space: nowrap; ">Samlet udledning: </h3>
                                    </div>
                                    <div class="col-md-1">
                                        <h3 id="table16"><?php echo number_format(floatval($SPPT2O2), 1); ?></h3>
                                    </div>
                                    <div class="col-md-3">
                                        <h3 style="white-space: nowrap; ">Ton CO2-e</h3>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="col-7">
                                <p>Her kan der indtastes det solgte eller udlejede produkts forventede forbrug af brændsel, el og vand i
                                    løbet af levetiden. Af eksempel kan nævnes en køleskabsproducerende virksomhed, som her vil kunne
                                    indtaste det enkelte køleskabs forventede forbrug af elektricitet i løbet af levetiden.
                                </p>
                            </div>
                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-10 col-12">
                                        <br>
                                        <h4>Energiforbrug ved anvendelse af solgt produkt</h4>
                                    </div>
                                    <br>
                                    <div class="col-12  col-md-2">
                                        <br>
                                        <div class="row dflex flex-row" style="color:#27b939;">
                                            <p style="color:#27b939;">Tilføj række&nbsp; &nbsp;</p>
                                            <button type="button" class="btn btn-danger btn-circle btn3" onclick="adrow1('.adtable31')">
                                                <i class="fab fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-12 table-responsive-md">
                                <table class="table addtable1" id="tab_logic">
                                    <thead>
                                        <tr class="trset">
                                            <th style="text-align: start;" scope="col">Beskrivelse</th>
                                            <th style="text-align: start;" scope="col">Energitype</th>
                                            <th style="text-align: start;" scope="col">Mængde</th>
                                            <th class="col-1" style="text-align: start;" scope="col" colspan="col-4">Enhed</th>
                                            <th style="text-align: start;" scope="col">Scope 3</th>
                                            <th style="text-align: start;" scope="col">Udenfor scope</th>
                                            <th style="text-align: start;" scope="col">Bemærkning</th>
                                        </tr>
                                    </thead>
                                    <tbody class="stytb adtable31">
                                        <?php if (isset($_SESSION['SPPT2DE'])) {
                                            for ($i = 0; $i < count($SPPT2DE); $i++) { ?>
                                                <tr class="row1">
                                                    <td><input type="text" name="SPPT2DE[]" value="<?php echo $SPPT2DE[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal19();addtotalheader(['SPPT2O2'],'table16')" name="SPPT2ET[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="<?php echo $SPPT2ET[$i]; ?>"><?php echo $SPPT2ET[$i]; ?></option>
                                                            <option value="Vand">Vand</option>
                                                            <option value="Elektricitet">Elektricitet</option>
                                                            <option value="Benzin">Benzin</option>
                                                            <option value="Diesel">Diesel</option>
                                                            <option value="Fyringsolie">Fyringsolie</option>
                                                            <option value="Naturgas">Naturgas</option>
                                                        </select></td>
                                                    <td><input type="text" value="<?php echo $SPPT2Q[$i]; ?>" onchange="cal19();addtotalheader(['SPPT2O2'],'table16')" name="SPPT2Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal19();addtotalheader(['SPPT2O2'],'table16')" name="SPPT2UN[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="<?php echo $SPPT2UN[$i]; ?>"><?php echo $SPPT2UN[$i]; ?></option>
                                                            <option value="kWh">KWh</option>
                                                            <option value="MWh">MWh</option>
                                                            <option value="MJ">MJ</option>
                                                            <option value="L">L</option>
                                                            <option value="Nm3">Nm3</option>
                                                        </select></td>
                                                    <td><input type="text" readonly name="SPPT2SC3[]" value="<?php echo $SPPT2SC3[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="SPPT2OTS[]" value="<?php echo $SPPT2OTS[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="SPPT2OTC[]" value="<?php echo $SPPT2OTC[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>
                                            <?php }
                                        } else { ?>
                                            <tr class="row1">
                                                <td><input type="text" name="SPPT2DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="cal19();addtotalheader(['SPPT2O2'],'table16')" name="SPPT2ET[]" style="max-width: 100% !important; width: 100%;">
                                                        <option value="Vand">Vand</option>
                                                        <option value="Elektricitet">Elektricitet</option>
                                                        <option value="Benzin">Benzin</option>
                                                        <option value="Diesel">Diesel</option>
                                                        <option value="Fyringsolie">Fyringsolie</option>
                                                        <option value="Naturgas">Naturgas</option>
                                                    </select></td>
                                                <td><input type="text" onchange="cal19();addtotalheader(['SPPT2O2'],'table16')" name="SPPT2Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="cal19();addtotalheader(['SPPT2O2'],'table16')" name="SPPT2UN[]" style="max-width: 100% !important; width: 100%;">
                                                        <option value="kWh">KWh</option>
                                                        <option value="MWh">MWh</option>
                                                        <option value="MJ">MJ</option>
                                                        <option value="L">L</option>
                                                        <option value="Nm3">Nm3</option>
                                                    </select></td>
                                                <td><input type="text" readonly name="SPPT2SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" readonly name="SPPT2OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="SPPT2OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            </tr>
                                            <tr class="row1">
                                                <td><input type="text" name="SPPT2DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="cal19();addtotalheader(['SPPT2O2'],'table16')" name="SPPT2ET[]" style="max-width: 100% !important; width: 100%;">
                                                        <option value="Vand">Vand</option>
                                                        <option value="Elektricitet">Elektricitet</option>
                                                        <option value="Benzin">Benzin</option>
                                                        <option value="Diesel">Diesel</option>
                                                        <option value="Fyringsolie">Fyringsolie</option>
                                                        <option value="Naturgas">Naturgas</option>
                                                    </select></td>
                                                <td><input type="text" onchange="cal19();addtotalheader(['SPPT2O2'],'table16')" name="SPPT2Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="cal19();addtotalheader(['SPPT2O2'],'table16')" name="SPPT2UN[]" style="max-width: 100% !important; width: 100%;">
                                                        <option value="KWh">KWh</option>
                                                        <option value="MWh">MWh</option>
                                                        <option value="MJ">MJ</option>
                                                        <option value="L">L</option>
                                                        <option value="Nm3">Nm3</option>
                                                    </select></td>
                                                <td><input type="text" readonly name="SPPT2SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" readonly name="SPPT2OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="SPPT2OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            </tr>
                                            <tr class="row1">
                                                <td><input type="text" name="SPPT2DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="cal19();addtotalheader(['SPPT2O2'],'table16')" name="SPPT2ET[]" style="max-width: 100% !important; width: 100%;">
                                                        <option value="Vand">Vand</option>
                                                        <option value="Elektricitet">Elektricitet</option>
                                                        <option value="Benzin">Benzin</option>
                                                        <option value="Diesel">Diesel</option>
                                                        <option value="Fyringsolie">Fyringsolie</option>
                                                        <option value="Naturgas">Naturgas</option>
                                                    </select></td>
                                                <td><input type="text" onchange="cal19();addtotalheader(['SPPT2O2'],'table16')" name="SPPT2Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="cal19();addtotalheader(['SPPT2O2'],'table16')" name="SPPT2UN[]" style="max-width: 100% !important; width: 100%;">
                                                        <option value="kWh">KWh</option>
                                                        <option value="MWh">MWh</option>
                                                        <option value="MJ">MJ</option>
                                                        <option value="L">L</option>
                                                        <option value="Nm3">Nm3</option>
                                                    </select></td>
                                                <td><input type="text" readonly name="SPPT2SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" readonly name="SPPT2OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="SPPT2OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-12 col-12">
                                        <h4>Total, ton CO2-e: <input type="text" name="SPPT2O2" value="<?php echo $SPPT2O2; ?>" readonly></h4>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-12">
                                <div class="row head3">
                                    <div class="col-md-5">
                                        <h3 title="I dette felt kan du indtaste den forventede bortskaffelse af det solgte produkt efter endt levetid. ">
                                            End-of-life behandling
                                        </h3>
                                    </div>
                                    <div class="col-md-3">
                                        <h3 style="white-space: nowrap; ">Samlet udledning: </h3>
                                    </div>
                                    <div class="col-md-1">
                                        <h3 id="table17"><?php echo number_format(floatval($SPPT3O3), 1); ?></h3>
                                    </div>
                                    <div class="col-md-3">
                                        <h3 style="white-space: nowrap; ">Ton CO2-e</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-10 col-12">
                                        <br>
                                        <h4>Håndtering af affaldsprodukt
                                        </h4>
                                    </div>
                                    <br>
                                    <div class="col-12  col-md-2">
                                        <br>
                                        <div class="row dflex flex-row" style="color:#27b939;">
                                            <p style="color:#27b939;">Tilføj række&nbsp; &nbsp;</p>
                                            <button type="button" class="btn btn-danger btn-circle btn3" onclick="adrow1('.adtable32')">
                                                <i class="fab fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-12 table-responsive-md">
                                <table class="table addtable1" id="tab_logic">
                                    <thead>
                                        <tr class="trset">
                                            <th style="text-align: start;" scope="col">Beskrivelse</th>
                                            <th style="text-align: start;" scope="col">Affaldstype</th>
                                            <th style="text-align: start;" scope="col">Affaldshåndtering</th>
                                            <th style="text-align: start;" scope="col">Mængde</th>
                                            <th class="col-1" style="text-align: start;" scope="col" colspan="col-4">Enhed</th>

                                            <th style="text-align: start;" scope="col">Scope 3</th>
                                            <th style="text-align: start;" scope="col">Udenfor scope</th>
                                            <th style="text-align: start;" scope="col">Bemærkning</th>
                                        </tr>
                                    </thead>
                                    <tbody class="stytb adtable32">
                                        <?php if (isset($_SESSION['SOOT3DE'])) {
                                            for ($i = 0; $i < count($SOOT3DE); $i++) { ?>
                                                <tr class="row1">
                                                    <td><input type="text" name="SOOT3DE[]" value="<?php echo $SOOT3DE[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal20();addtotalheader(['SPPT3O3'],'table17')" name="SOOT3WT[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="<?php echo $SOOT3WT[$i]; ?>"><?php echo $SOOT3WT[$i]; ?></option>
                                                            <option value="Kobber">Kobber</option>
                                                            <option value="Aluminium">Aluminium</option>
                                                            <option value="Stål og jern">Stål og jern</option>
                                                            <option value="Ædelmetaller">Ædelmetaller</option>
                                                            <option value="Bly">Bly</option>
                                                            <option value="Ikke-jernholdige metaller">Ikke-jernholdige metaller</option>
                                                            <option value="Papir og pap">Papir og pap</option>
                                                            <option value="Plast">Plast</option>
                                                            <option value="Glas">Glas</option>
                                                            <option value="Beton">Beton</option>
                                                            <option value="Træ">Træ</option>
                                                            <option value="Fødevarer, organisk">Fødevarer, organisk</option>
                                                            <option value="Farligt affald">Farligt affald</option>
                                                            <option value="Tekstiler">Tekstiler</option>
                                                            <option value="Elektronisk">Elektronisk</option>
                                                            <option value="Dagrenovation">Dagrenovation</option>
                                                            <option value="Spildevand">Spildevand</option>
                                                        </select></td>
                                                    <td><select class="" onchange="cal20();addtotalheader(['SPPT3O3'],'table17')" name="SOOT3WM[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="<?php echo $SOOT3WM[$i]; ?>"><?php echo $SOOT3WM[$i]; ?></option>
                                                            <option value="Uspecificeret">Uspecificeret</option>
                                                            <option value="Deponi">Deponi</option>
                                                            <option value="Forbrænding">Forbrænding</option>
                                                            <option value="Genanvendelse">Genanvendelse</option>

                                                        </select></td>
                                                    <td><input type="text" onchange="cal20();addtotalheader(['SPPT3O3'],'table17')" name="SOOT3Q[]" value="<?php echo $SOOT3Q[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><select class="" onchange="cal20();addtotalheader(['SPPT3O3'],'table17')" name="SOOT3UN[]" style="max-width: 100% !important; width: 100%;">
                                                            <option value="<?php echo $SOOT3UN[$i]; ?>"><?php echo $SOOT3UN[$i]; ?></option>
                                                            <option value="kg">Kg</option>
                                                            <option value="Ton">Ton</option>
                                                        </select></td>
                                                    <td><input type="text" readonly name="SOOT3SC3[]" value="<?php echo $SOOT3SC3[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" readonly name="SOOT3OTS[]" value="<?php echo $SOOT3OTS[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="SOOT3OTC[]" value="<?php echo $SOOT3OTC[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>

                                                </tr>
                                            <?php  }
                                        } else { ?>
                                            <tr class="row1">
                                                <td><input type="text" name="SOOT3DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="cal20();addtotalheader(['SPPT3O3'],'table17')" name="SOOT3WT[]" style="max-width: 100% !important; width: 100%;">
                                                        <option value="Kobber">Kobber</option>
                                                        <option value="Aluminium">Aluminium</option>
                                                        <option value="Stål og jern">Stål og jern</option>
                                                        <option value="Ædelmetaller">Ædelmetaller</option>
                                                        <option value="Bly">Bly</option>
                                                        <option value="Ikke-jernholdige metaller">Ikke-jernholdige metaller</option>
                                                        <option value="Papir og pap">Papir og pap</option>
                                                        <option value="Plast">Plast</option>
                                                        <option value="Glas">Glas</option>
                                                        <option value="Beton">Beton</option>
                                                        <option value="Træ">Træ</option>
                                                        <option value="Fødevarer, organisk">Fødevarer, organisk</option>
                                                        <option value="Farligt affald">Farligt affald</option>
                                                        <option value="Tekstiler">Tekstiler</option>
                                                        <option value="Elektronisk">Elektronisk</option>
                                                        <option value="Dagrenovation">Dagrenovation</option>
                                                        <option value="Spildevand">Spildevand</option>
                                                    </select></td>
                                                <td><select class="" onchange="cal20();addtotalheader(['SPPT3O3'],'table17')" name="SOOT3WM[]" style="max-width: 100% !important; width: 100%;">
                                                        <option value="Uspecificeret">Uspecificeret</option>
                                                        <option value="Deponi">Deponi</option>
                                                        <option value="Forbrænding">Forbrænding</option>
                                                        <option value="Genanvendelse">Genanvendelse</option>

                                                    </select></td>
                                                <td><input type="text" onchange="cal20();addtotalheader(['SPPT3O3'],'table17')" name="SOOT3Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="cal20();addtotalheader(['SPPT3O3'],'table17')" name="SOOT3UN[]" style="max-width: 100% !important; width: 100%;">
                                                        <option value="kg">Kg</option>
                                                        <option value="Ton">Ton</option>
                                                    </select></td>
                                                <td><input type="text" readonly name="SOOT3SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" readonly name="SOOT3OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="SOOT3OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>

                                            </tr>
                                            <tr class="row1">
                                                <td><input type="text" name="SOOT3DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="cal20();addtotalheader(['SPPT3O3'],'table17')" name="SOOT3WT[]" style="max-width: 100% !important; width: 100%;">
                                                        <option value="Kobber">Kobber</option>
                                                        <option value="Aluminium">Aluminium</option>
                                                        <option value="Stål og jern">Stål og jern</option>
                                                        <option value="Ædelmetaller">Ædelmetaller</option>
                                                        <option value="Bly">Bly</option>
                                                        <option value="Ikke-jernholdige metaller">Ikke-jernholdige metaller</option>
                                                        <option value="Papir og pap">Papir og pap</option>
                                                        <option value="Plast">Plast</option>
                                                        <option value="Glas">Glas</option>
                                                        <option value="Beton">Beton</option>
                                                        <option value="Træ">Træ</option>
                                                        <option value="Fødevarer, organisk">Fødevarer, organisk</option>
                                                        <option value="Farligt affald">Farligt affald</option>
                                                        <option value="Tekstiler">Tekstiler</option>
                                                        <option value="Elektronisk">Elektronisk</option>
                                                        <option value="Dagrenovation">Dagrenovation</option>
                                                        <option value="Spildevand">Spildevand</option>
                                                    </select></td>
                                                <td><select class="" onchange="cal20();addtotalheader(['SPPT3O3'],'table17')" name="SOOT3WM[]" style="max-width: 100% !important; width: 100%;">
                                                        <option value="Uspecificeret">Uspecificeret</option>
                                                        <option value="Deponi">Deponi</option>
                                                        <option value="Forbrænding">Forbrænding</option>
                                                        <option value="Genanvendelse">Genanvendelse</option>>
                                                    </select></td>
                                                <td><input type="text" onchange="cal20();addtotalheader(['SPPT3O3'],'table17')" name="SOOT3Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="cal20();addtotalheader(['SPPT3O3'],'table17')" name="SOOT3UN[]" style="max-width: 100% !important; width: 100%;">
                                                        <option value="kg">Kg</option>
                                                        <option value="Ton">Ton</option>
                                                    </select></td>
                                                <td><input type="text" readonly name="SOOT3SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" readonly name="SOOT3OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="SOOT3OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>

                                            </tr>
                                            <tr class="row1">
                                                <td><input type="text" name="SOOT3DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="cal20();addtotalheader(['SPPT3O3'],'table17')" name="SOOT3WT[]" style="max-width: 100% !important; width: 100%;">
                                                        <option value="Kobber">Kobber</option>
                                                        <option value="Aluminium">Aluminium</option>
                                                        <option value="Stål og jern">Stål og jern</option>
                                                        <option value="Ædelmetaller">Ædelmetaller</option>
                                                        <option value="Bly">Bly</option>
                                                        <option value="Ikke-jernholdige metaller">Ikke-jernholdige metaller</option>
                                                        <option value="Papir og pap">Papir og pap</option>
                                                        <option value="Plast">Plast</option>
                                                        <option value="Glas">Glas</option>
                                                        <option value="Beton">Beton</option>
                                                        <option value="Træ">Træ</option>
                                                        <option value="Fødevarer, organisk">Fødevarer, organisk</option>
                                                        <option value="Farligt affald">Farligt affald</option>
                                                        <option value="Tekstiler">Tekstiler</option>
                                                        <option value="Elektronisk">Elektronisk</option>
                                                        <option value="Dagrenovation">Dagrenovation</option>
                                                        <option value="Spildevand">Spildevand</option>
                                                    </select></td>
                                                <td><select class="" onchange="cal20();addtotalheader(['SPPT3O3'],'table17')" name="SOOT3WM[]" style="max-width: 100% !important; width: 100%;">
                                                        <option value="Uspecificeret">Uspecificeret</option>
                                                        <option value="Deponi">Deponi</option>
                                                        <option value="Forbrænding">Forbrænding</option>
                                                        <option value="Genanvendelse">Genanvendelse</option>
                                                    </select></td>
                                                <td><input type="text" onchange="cal20();addtotalheader(['SPPT3O3'],'table17')" name="SOOT3Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><select class="" onchange="cal20();addtotalheader(['SPPT3O3'],'table17')" name="SOOT3UN[]" style="max-width: 100% !important; width: 100%;">
                                                        <option value="kg">Kg</option>
                                                        <option value="Ton">Ton</option>
                                                    </select></td>
                                                <td><input type="text" readonly name="SOOT3SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" readonly name="SOOT3OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="SOOT3OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>

                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-12 col-12">
                                        <h4>Total, ton CO2-e: <input type="text" readonly name="SPPT3O3" value="<?php echo $SPPT3O3; ?>"></h4>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-12">
                                <div class="row head3">
                                    <div class="col-md-5">
                                        <h3 title="Under Andet kan du indtaste forbrug, som ikke er blevet fanget af alle ovenstående tabeller i relation til Downstream aktiviteter, eller du kan tilføje egne og mere specifikke beregninger. ">
                                            Andet
                                        </h3>
                                    </div>
                                    <div class="col-md-3">
                                        <h3 style="white-space: nowrap; ">Samlet udledning: </h3>
                                    </div>
                                    <div class="col-md-1">
                                        <h3 id="table18"><?php echo number_format(floatval($SPPT4O4), 1); ?></h3>
                                    </div>
                                    <div class="col-md-3">
                                        <h3 style="white-space: nowrap; ">Ton CO2-e</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-10 col-12">
                                        <br>
                                        <h4>Andet
                                        </h4>
                                    </div>
                                    <br>
                                    <div class="col-12  col-md-2">
                                        <br>
                                        <div class="row dflex flex-row" style="color:#27b939;">
                                            <p style="color:#27b939;">Tilføj række&nbsp; &nbsp;</p>
                                            <button type="button" class="btn btn-danger btn-circle btn3" onclick="adrow1('.adtable33')">
                                                <i class="fab fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-12 table-responsive-md">
                                <table class="table addtable1" id="tab_logic">
                                    <thead>
                                        <tr class="trset">
                                            <th style="text-align: start;" scope="col">Beskrivelse</th>

                                            <th style="text-align: start;" scope="col">Mængder </th>
                                            <th style="text-align: start;" scope="col">Enhed</th>
                                            <th style="text-align: start;" scope="col">Emissionsfaktor</th>


                                            <th style="text-align: start;" scope="col">Scope 3</th>
                                            <th style="text-align: start;" scope="col">Udenfor scope</th>

                                            <th style="text-align: start;" scope="col">Bemærkning</th>
                                        </tr>
                                    </thead>
                                    <tbody class="stytb adtable33">
                                        <?php if (isset($_SESSION['SPPT4DE'])) {
                                            for ($i = 0; $i < count($SPPT4DE); $i++) { ?>
                                                <tr class="row1">
                                                    <td><input type="text" name="SPPT4DE[]" value="<?php echo $SPPT4DE[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="SPPT4Q[]" value="<?php echo $SPPT4Q[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="SPPT4UN[]" value="<?php echo $SPPT4UN[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="SPPT4EF[]" value="<?php echo $SPPT4EF[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="SPPT4SC3[]" value="<?php echo $SPPT4SC3[$i]; ?>" onchange="totalso('SPPT4SC3[]','SPPT4O4');addtotalheader(['SPPT4O4'],'table18')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="SPPT4OTS[]" value="<?php echo $SPPT4OTS[$i]; ?>" onchange="totalso('SPPT4SC3[]','SPPT4O4');addtotalheader(['SPPT4O4'],'table18')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                    <td><input type="text" name="SPPT4OTC[]" value="<?php echo $SPPT4OTC[$i]; ?>" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                </tr>
                                            <?php }
                                        } else { ?>
                                            <tr class="row1">
                                                <td><input type="text" name="SPPT4DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="SPPT4Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="SPPT4UN[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="SPPT4EF[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="SPPT4SC3[]" onchange="totalso('SPPT4SC3[]','SPPT4O4');addtotalheader(['SPPT4O4'],'table18')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="SPPT4OTS[]" onchange="totalso('SPPT4SC3[]','SPPT4O4');addtotalheader(['SPPT4O4'],'table18')" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="SPPT4OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            </tr>
                                            <tr class="row1">
                                                <td><input type="text" name="SPPT4DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="SPPT4Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="SPPT4UN[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="SPPT4EF[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" onchange="totalso('SPPT4SC3[]','SPPT4O4');addtotalheader(['SPPT4O4'],'table18')" name="SPPT4SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" onchange="totalso('SPPT4SC3[]','SPPT4O4');addtotalheader(['SPPT4O4'],'table18')" name="SPPT4OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="SPPT4OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            </tr>
                                            <tr class="row1">
                                                <td><input type="text" name="SPPT4DE[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="SPPT4Q[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="SPPT4UN[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="SPPT4EF[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" onchange="totalso('SPPT4SC3[]','SPPT4O4');addtotalheader(['SPPT4O4'],'table18')" name="SPPT4SC3[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" onchange="totalso('SPPT4SC3[]','SPPT4O4');addtotalheader(['SPPT4O4'],'table18')" name="SPPT4OTS[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                                <td><input type="text" name="SPPT4OTC[]" style="max-width: 100% !important; width: 100%;" class="form-control"></td>
                                            </tr><?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-12">
                                <div class="row" style="border-bottom: 1px solid;">
                                    <div class="col-md-12 col-12">
                                        <h4>Total, ton CO2-e: <input type="text" name="SPPT4O4" readonly value="<?php echo $SPPT4O4; ?>"></h4>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                        <input type="submit" name="submit" class="next action-button" value="submit" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require_once('./COMPONENTS/footer.php'); ?>
<!-- <script>
    changenav('link3');
    let input = document.querySelector(".input");
let button = document.querySelector(".submits");
button.readonly = true;
input.addEventListener("change", stateHandle);
function stateHandle() {
    if(document.querySelector(".input").value === "") {
        button.readonly = true;
    } else {
        button.readonly = false;
    }
} -->
</script>
<script src="./assets/js/allformula.js"></script>
<script src="assets/js/script.js"></script>
<script>
    changenav('link3');
</script>
<script type="text/javascript">
    // set the value to this input
    /* Here you can add more inputs to set value. if it's saved */
    //Save the value function - save it to localStorage as (ID, VALUE)
    function saveValue(e) {
        var id = e.id; // get the sender's id to save it . 
        var val = e.value; // get the value. 
        localStorage.setItem(id, val); // Every time user writing something, the localStorage's value will override . 
    }

    //get the saved value function - return the value of "v" from localStorage. 
    function getSavedValue(v) {
        if (!localStorage.getItem(v)) {
            return ""; // You can change this to your defualt value. 
        }
        return localStorage.getItem(v);
    }
</script>