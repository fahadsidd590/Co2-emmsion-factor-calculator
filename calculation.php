<?php
require 'mongodb/vendor/autoload.php';
// echo $_SESSION['username'];


if (isset($_POST['submit'])) {
    $_oid = $_SESSION['username'];
    $client = new MongoDB\Client('mongodb+srv://fahad:pakarmy96@cluster0.ld6kp.mongodb.net/?retryWrites=true&w=majority');
    $companydb = $client->CO2;
    $empcollection = $companydb->datarecord;
    function calscopetotal($a)
    {
        $total = 0;
        for ($i = 0; $i < sizeof($a); $i++) {
            $total = $total + (float)$a[$i];
        }
        return $total;
    }
    //session value to save data
    $_SESSION['name'] = $_POST['Name'];
    $_SESSION['Stdate'] = $_POST['Stdate'];
    $_SESSION['Endate'] = $_POST['Endate'];
    $_SESSION['Position'] = $_POST['Position'];
    $_SESSION['Email'] = $_POST['Email'];
    $_SESSION['Comment'] = $_POST['Comment'];
    $_SESSION['country'] = $_POST['country'];
    $_SESSION['company'] = $_POST['Company'];
    $_SESSION['CVR'] = $_POST['CVR'];
    $_SESSION['P'] = $_POST['P'];
    $_SESSION['branche'] = $_POST['branche'];
    $_SESSION['Emp'] = $_POST['Emp'];
    $_SESSION['Revenue'] = $_POST['Revenue'];
    $_SESSION['Building'] = $_POST['Building'];
    // for electricity
    // 1
    $_SESSION['Forbrugscope1'] = $_POST['ENECT1SC1'];
    $_SESSION['Forbrugscope2'] = $_POST['ENECT1SC2'];
    $_SESSION['Forbrugscope3'] = $_POST['ENECT1SC3'];
    $_SESSION['Forbrugoutscope'] = $_POST['ENECT1OTS'];
    $_SESSION['ENECT1DE'] = $_POST['ENECT1DE'];
    $_SESSION['ENECT1EG'] = $_POST['ENECT1EG'];
    $_SESSION['ENECT1EP'] = $_POST['ENECT1EP'];
    $_SESSION['ENECT1UN'] = $_POST['ENECT1UN'];
    $_SESSION['ENECT1OTC'] = $_POST['ENECT1OTC'];
    $_SESSION['ENECT1O1'] = $_POST['ENECT1O1'];

    // 2)
    $_SESSION['Fjernvarmescope1'] = $_POST['ENHPT2S1'];
    $_SESSION['Fjernvarmescope2'] = $_POST['ENHPT2S2'];
    $_SESSION['Fjernvarmescope3'] = $_POST['ENHPT2S3'];
    $_SESSION['Fjernvarmeoutside'] = $_POST['ENHPT2OTS'];
    $_SESSION['ENHPT2DE'] = $_POST['ENHPT2DE'];
    $_SESSION['ENHPT2Q'] = $_POST['ENHPT2Q'];
    $_SESSION['ENHPT2UN'] = $_POST['ENHPT2UN'];
    $_SESSION['ENHPT2EF'] = $_POST['ENHPT2EF'];
    $_SESSION['ENHPT2OTC'] = $_POST['ENHPT2OTC'];
    $_SESSION['ENECT1O2'] = $_POST['ENECT1O2'];
    //3)
    $_SESSION['ENHPT3DE'] = $_POST['ENHPT3DE'];
    $_SESSION['ENHPT3FT'] = $_POST['ENHPT3FT'];
    $_SESSION['ENHPT3FTPB'] = $_POST['ENHPT3FTPB'];
    $_SESSION['ENHPT3Q'] = $_POST['ENHPT3Q'];
    $_SESSION['ENHPT3UN'] = $_POST['ENHPT3UN'];
    $_SESSION['Brændslerscope1'] = $_POST['ENHPT3S1'];
    $_SESSION['Brændslerscope2'] = $_POST['ENHPT3S2'];
    $_SESSION['Brændslerscope3'] = $_POST['ENHPT3S3'];
    $_SESSION['Brændsleroutside'] = $_POST['ENHPT3OTS'];
    $_SESSION['ENHPT3OTC'] = $_POST['ENHPT3OTC'];
    $_SESSION['ENECT3O3'] = $_POST['ENECT3O3'];
    //4
    $_SESSION['ENPDT4DE'] = $_POST['ENPDT4DE'];
    $_SESSION['ENPDT4GG'] = $_POST['ENPDT4GG'];
    $_SESSION['ENPDT4Q'] = $_POST['ENPDT4Q'];
    $_SESSION['ENPDT4UN'] = $_POST['ENPDT4UN'];
    $_SESSION['Procesudledningscope1'] = $_POST['ENPDT4SC1'];
    $_SESSION['Procesudledningscope2'] = $_POST['ENPDT4SC2'];
    $_SESSION['Procesudledningscope3'] = $_POST['ENPDT4SC3'];
    $_SESSION['Procesudledningoutside'] = $_POST['ENPDT4OTS'];
    $_SESSION['ENPDT4OTC'] = $_POST['ENPDT4OTC'];
    $_SESSION['ENPDT4O4'] = $_POST['ENPDT4O4'];
    //5
    $_SESSION['ENAFT5DE'] = $_POST['ENAFT5DE'];
    $_SESSION['ENAFT5Q'] = $_POST['ENAFT5Q'];
    $_SESSION['ENAFT5UN'] = $_POST['ENAFT5UN'];
    $_SESSION['ENAFT5EF'] = $_POST['ENAFT5EF'];
    $_SESSION['ENAFT5SC1'] = $_POST['ENAFT5SC1'];
    $_SESSION['ENAFT5SC2'] = $_POST['ENAFT5SC2'];
    $_SESSION['ENAFT5SC3'] = $_POST['ENAFT5SC3'];
    $_SESSION['ENAFT5OTS'] = $_POST['ENAFT5OTS'];
    $_SESSION['ENAFT5OTC'] = $_POST['ENAFT5OTC'];
    $_SESSION['ENAFT5O5'] = $_POST['ENAFT5O5'];
    //Indkøb
    // 1
    //1.1
    $_SESSION['PPRT1DE'] = $_POST['PPRT1DE'];
    $_SESSION['PPRT1MG'] = $_POST['PPRT1MG'];
    $_SESSION['PPRT1Q'] = $_POST['PPRT1Q'];
    $_SESSION['PPRT1UN'] = $_POST['PPRT1UN'];
    $_SESSION['PPRT1SC3'] = $_POST['PPRT1SC3'];
    $_SESSION['PPRT1OTC'] = $_POST['PPRT1OTC'];
    $_SESSION['PPRT1O1'] = $_POST['PPRT1O1'];
    //1.2
    $_SESSION['PPRT2DE'] = $_POST['PPRT2DE'];
    $_SESSION['PPRT2MG'] = $_POST['PPRT2MG'];
    $_SESSION['PPRT2AE'] = $_POST['PPRT2AE'];
    $_SESSION['PPRT2UN'] = $_POST['PPRT2UN'];
    $_SESSION['PPRT2SC3'] = $_POST['PPRT2SC3'];
    $_SESSION['PPRT2OTC'] = $_POST['PPRT2OTC'];
    $_SESSION['PPRT2O2'] = $_POST['PPRT2O2'];
    //1.3
    $_SESSION['PPRT3DE'] = $_POST['PPRT3DE'];
    $_SESSION['PPRT3PG'] = $_POST['PPRT3PG'];
    $_SESSION['PPRT3SP'] = $_POST['PPRT3SP'];
    $_SESSION['PPRT3Q'] = $_POST['PPRT3Q'];
    $_SESSION['PPRT3UN'] = $_POST['PPRT3UN'];
    $_SESSION['PPRT3SC3'] = $_POST['PPRT3SC3'];
    $_SESSION['PPRT3OTC'] = $_POST['PPRT3OTC'];
    $_SESSION['PPRT3O3'] = $_POST['PPRT3O3'];
    //1.4
    $_SESSION['PPRT4DE'] = $_POST['PPRT4DE'];
    $_SESSION['PPRT4PG'] = $_POST['PPRT4PG'];
    $_SESSION['PPRT4SP'] = $_POST['PPRT4SP'];
    $_SESSION['PPRT4AE'] = $_POST['PPRT4AE'];
    $_SESSION['PPRT4UN'] = $_POST['PPRT4UN'];
    $_SESSION['PPRT4SC3'] = $_POST['PPRT4SC3'];
    $_SESSION['PPRT4OTC'] = $_POST['PPRT4OTC'];
    $_SESSION['PPRT4O4'] = $_POST['PPRT4O4'];
    //1.5
    $_SESSION['PPRT5DE'] = $_POST['PPRT5DE'];
    $_SESSION['PPRT5P'] = $_POST['PPRT5P'];
    $_SESSION['PPRT5Q'] = $_POST['PPRT5Q'];
    $_SESSION['PPRT5UN'] = $_POST['PPRT5UN'];
    $_SESSION['PPRT5EF'] = $_POST['PPRT5EF'];
    $_SESSION['PPRT5SC3'] = $_POST['PPRT5SC3'];
    $_SESSION['PPRT5OTC'] = $_POST['PPRT5OTC'];
    $_SESSION['PPRT5O5'] = $_POST['PPRT5O5'];
    //1.6
    $_SESSION['PPRT6DE'] = $_POST['PPRT6DE'];
    $_SESSION['PPRT6P'] = $_POST['PPRT6P'];
    $_SESSION['PPRT6AE'] = $_POST['PPRT6AE'];
    $_SESSION['PPRT6UN'] = $_POST['PPRT6UN'];
    $_SESSION['PPRT6EF'] = $_POST['PPRT6EF'];
    $_SESSION['PPRT6SC3'] = $_POST['PPRT6SC3'];
    $_SESSION['PPRT6OTC'] = $_POST['PPRT6OTC'];
    $_SESSION['PPRT6O6'] = $_POST['PPRT6O6'];
    //2
    //2.1
    $_SESSION['PSST7DE'] = $_POST['PSST7DE'];
    $_SESSION['PSST7MG'] = $_POST['PSST7MG'];
    $_SESSION['PSST7Q'] = $_POST['PSST7Q'];
    $_SESSION['PSST7UN'] = $_POST['PSST7UN'];
    $_SESSION['PSST7SC3'] = $_POST['PSST7SC3'];
    $_SESSION['PSST7OTC'] = $_POST['PSST7OTC'];
    $_SESSION['PSST7O7'] = $_POST['PSST7O7'];
    // 2.2
    $_SESSION['PSST8DE'] = $_POST['PSST8DE'];
    $_SESSION['PSST8MG'] = $_POST['PSST8MG'];
    $_SESSION['PSST8AE'] = $_POST['PSST8AE'];
    $_SESSION['PSST8UN'] = $_POST['PSST8UN'];
    $_SESSION['PSST8SC3'] = $_POST['PSST8SC3'];
    $_SESSION['PSST8OTC'] = $_POST['PSST8OTC'];
    $_SESSION['PSST8O8'] = $_POST['PSST8O8'];
    //2.3
    $_SESSION['PSST9DE'] = $_POST['PSST9DE'];
    $_SESSION['PSST9PG'] = $_POST['PSST9PG'];
    $_SESSION['PSST9SP'] = $_POST['PSST9SP'];
    $_SESSION['PSST9Q'] = $_POST['PSST9Q'];
    $_SESSION['PSST9UN'] = $_POST['PSST9UN'];
    $_SESSION['PSST9SC3'] = $_POST['PSST9SC3'];
    $_SESSION['PSST9OTC'] = $_POST['PSST9OTC'];
    $_SESSION['PSST9O9'] = $_POST['PSST9O9'];
    //2.4
    $_SESSION['PSST10DE'] = $_POST['PSST10DE'];
    $_SESSION['PSST10PG'] = $_POST['PSST10PG'];
    $_SESSION['PSST10SP'] = $_POST['PSST10SP'];
    $_SESSION['PSST10AE'] = $_POST['PSST10AE'];
    $_SESSION['PSST10UN'] = $_POST['PSST10UN'];
    $_SESSION['PSST10SC3'] = $_POST['PSST10SC3'];
    $_SESSION['PSST10OTC'] = $_POST['PSST10OTC'];
    $_SESSION['PSST10O10'] = $_POST['PSST10O10'];

    //2.5
    $_SESSION['POTT11DE'] = $_POST['POTT11DE'];
    $_SESSION['POTT11P'] = $_POST['POTT11P'];
    $_SESSION['POTT11Q'] = $_POST['POTT11Q'];
    $_SESSION['POTT11UN'] = $_POST['POTT11UN'];
    $_SESSION['POTT11EF'] = $_POST['POTT11EF'];
    $_SESSION['POTT11SC3'] = $_POST['POTT11SC3'];
    $_SESSION['POTT11OTC'] = $_POST['POTT11OTC'];
    $_SESSION['POTT11O11'] = $_POST['POTT11O11'];
    //2.6
    $_SESSION['POTT12DE'] = $_POST['POTT12DE'];
    $_SESSION['POTT12P'] = $_POST['POTT12P'];
    $_SESSION['POTT12AE'] = $_POST['POTT12AE'];
    $_SESSION['POTT12UN'] = $_POST['POTT12UN'];
    $_SESSION['POTT12EF'] = $_POST['POTT12EF'];
    $_SESSION['POTT12SC3'] = $_POST['POTT12SC3'];
    $_SESSION['POTT12OTC'] = $_POST['POTT12OTC'];
    $_SESSION['POTT12O12'] = $_POST['POTT12O12'];
    //transport
    //1
    //1.1
    $_SESSION['TOTT1DE'] = $_POST['TOTT1DE'];
    $_SESSION['TOTT1TM'] = $_POST['TOTT1TM'];
    $_SESSION['TOTT1P'] = $_POST['TOTT1P'];
    $_SESSION['TOTT1BS'] = $_POST['TOTT1BS'];
    $_SESSION['TOTT1Q'] = $_POST['TOTT1Q'];
    $_SESSION['TOTT1UN'] = $_POST['TOTT1UN'];
    $_SESSION['TOTT1SC1'] = $_POST['TOTT1SC1'];
    $_SESSION['TOTT1SC2'] = $_POST['TOTT1SC2'];
    $_SESSION['TOTT1SC3'] = $_POST['TOTT1SC3'];
    $_SESSION['TOTT1OTS'] = $_POST['TOTT1OTS'];
    $_SESSION['TOTT1OTC'] = $_POST['TOTT1OTC'];
    $_SESSION['TOTT1O1'] = $_POST['TOTT1O1'];
    //1.2
    $_SESSION['TOTT2DE'] = $_POST['TOTT2DE'];
    $_SESSION['TOTT2TM'] = $_POST['TOTT2TM'];
    $_SESSION['TOTT2P'] = $_POST['TOTT2P'];
    $_SESSION['TOTT2Q'] = $_POST['TOTT2Q'];
    $_SESSION['TOTT2UN'] = $_POST['TOTT2UN'];
    $_SESSION['TOTT2SC1'] = $_POST['TOTT2SC1'];
    $_SESSION['TOTT2SC2'] = $_POST['TOTT2SC2'];
    $_SESSION['TOTT2SC3'] = $_POST['TOTT2SC3'];
    $_SESSION['TOTT2OTS'] = $_POST['TOTT2OTS'];
    $_SESSION['TOTT2OTC'] = $_POST['TOTT2OTC'];
    $_SESSION['TOTT2O2'] = $_POST['TOTT2O2'];
    //2
    //2.1
    $_SESSION['TOTT3DE'] = $_POST['TOTT3DE'];
    $_SESSION['TOTT3TM'] = $_POST['TOTT3TM'];
    $_SESSION['TOTT3P'] = $_POST['TOTT3P'];
    $_SESSION['TOTT3BS'] = $_POST['TOTT3BS'];
    $_SESSION['TOTT3Q'] = $_POST['TOTT3Q'];
    $_SESSION['TOTT3UN'] = $_POST['TOTT3UN'];
    $_SESSION['TOTT3SC1'] = $_POST['TOTT3SC1'];
    $_SESSION['TOTT3SC2'] = $_POST['TOTT3SC2'];
    $_SESSION['TOTT3SC3'] = $_POST['TOTT3SC3'];
    $_SESSION['TOTT3OTS'] = $_POST['TOTT3OTS'];
    $_SESSION['TOTT3OTC'] = $_POST['TOTT3OTC'];
    $_SESSION['TOTT3O3'] = $_POST['TOTT3O3'];
    //2.2
    $_SESSION['TOTT4DE'] = $_POST['TOTT4DE'];
    $_SESSION['TOTT4TM'] = $_POST['TOTT4TM'];
    $_SESSION['TOTT4P'] = $_POST['TOTT4P'];
    $_SESSION['TOTT4BS'] = $_POST['TOTT4BS'];
    $_SESSION['TOTT4Q'] = $_POST['TOTT4Q'];
    $_SESSION['TOTT4UN'] = $_POST['TOTT4UN'];
    $_SESSION['TOTT4SC1'] = $_POST['TOTT4SC1'];
    $_SESSION['TOTT4SC2'] = $_POST['TOTT4SC2'];
    $_SESSION['TOTT4SC3'] = $_POST['TOTT4SC3'];
    $_SESSION['TOTT4OTS'] = $_POST['TOTT4OTS'];
    $_SESSION['TOTT4OTC'] = $_POST['TOTT4OTC'];
    $_SESSION['TOTT4O4'] = $_POST['TOTT4O4'];

    //2.3
    $_SESSION['TOTT5DE'] = $_POST['TOTT5DE'];
    $_SESSION['TOTT5TM'] = $_POST['TOTT5TM'];
    $_SESSION['TOTT5P'] = $_POST['TOTT5P'];
    $_SESSION['TOTT5AE'] = $_POST['TOTT5AE'];
    $_SESSION['TOTT5UN'] = $_POST['TOTT5UN'];
    $_SESSION['TOTT5SC1'] = $_POST['TOTT5SC1'];
    $_SESSION['TOTT5SC2'] = $_POST['TOTT5SC2'];
    $_SESSION['TOTT5SC3'] = $_POST['TOTT5SC3'];
    $_SESSION['TOTT5OTS'] = $_POST['TOTT5OTS'];
    $_SESSION['TOTT5OTC'] = $_POST['TOTT5OTC'];
    $_SESSION['TOTT5O5'] = $_POST['TOTT5O5'];
    //3
    //3.1
    $_SESSION['TOTT6DE'] = $_POST['TOTT6DE'];
    $_SESSION['TOTT6TM'] = $_POST['TOTT6TM'];
    $_SESSION['TOTT6P'] = $_POST['TOTT6P'];
    $_SESSION['TOTT6DEBS'] = $_POST['TOTT6DEBS'];
    $_SESSION['TOTT6Q'] = $_POST['TOTT6Q'];
    $_SESSION['TOTT6UN'] = $_POST['TOTT6UN'];
    $_SESSION['TOTT6SC1'] = $_POST['TOTT6SC1'];
    $_SESSION['TOTT6SC2'] = $_POST['TOTT6SC2'];
    $_SESSION['TOTT6SC3'] = $_POST['TOTT6SC3'];
    $_SESSION['TOTT6OTS'] = $_POST['TOTT6OTS'];
    $_SESSION['TOTT6OTC'] = $_POST['TOTT6OTC'];
    $_SESSION['TOTT6O6'] = $_POST['TOTT6O6'];
    //3.2
    $_SESSION['TOTT7DE'] = $_POST['TOTT7DE'];
    $_SESSION['TOTT7TM'] = $_POST['TOTT7TM'];
    $_SESSION['TOTT7P'] = $_POST['TOTT7P'];
    $_SESSION['TOTT7AE'] = $_POST['TOTT7AE'];
    $_SESSION['TOTT7UN'] = $_POST['TOTT7UN'];
    $_SESSION['TOTT7SC1'] = $_POST['TOTT7SC1'];
    $_SESSION['TOTT7SC2'] = $_POST['TOTT7SC2'];
    $_SESSION['TOTT7SC3'] = $_POST['TOTT7SC3'];
    $_SESSION['TOTT7OTS'] = $_POST['TOTT7OTS'];
    $_SESSION['TOTT7OTC'] = $_POST['TOTT7OTC'];
    $_SESSION['TOTT7O7'] = $_POST['TOTT7O7'];
    //4
    //4.1
    $_SESSION['TOTT8DE'] = $_POST['TOTT8DE'];
    $_SESSION['TOTT8TM'] = $_POST['TOTT8TM'];
    $_SESSION['TOTT8P'] = $_POST['TOTT8P'];
    $_SESSION['TOTT8BS'] = $_POST['TOTT8BS'];
    $_SESSION['TOTT8Q'] = $_POST['TOTT8Q'];
    $_SESSION['TOTT8UN'] = $_POST['TOTT8UN'];
    $_SESSION['TOTT8SC1'] = $_POST['TOTT8SC1'];
    $_SESSION['TOTT8SC2'] = $_POST['TOTT8SC2'];
    $_SESSION['TOTT8SC3'] = $_POST['TOTT8SC3'];
    $_SESSION['TOTT8OTS'] = $_POST['TOTT8OTS'];
    $_SESSION['TOTT8OTC'] = $_POST['TOTT8OTC'];
    $_SESSION['TOTT8O8'] = $_POST['TOTT8O8'];
    //4.2
    $_SESSION['TOTT9DE'] = $_POST['TOTT9DE'];
    $_SESSION['TOTT9TT'] = $_POST['TOTT9TT'];
    $_SESSION['TOTT9DM'] = $_POST['TOTT9DM'];
    $_SESSION['TOTT9B'] = $_POST['TOTT9B'];
    $_SESSION['TOTT9UN'] = $_POST['TOTT9UN'];
    $_SESSION['TOTT9SC1'] = $_POST['TOTT9SC1'];
    $_SESSION['TOTT9SC2'] = $_POST['TOTT9SC2'];
    $_SESSION['TOTT9SC3'] = $_POST['TOTT9SC3'];
    $_SESSION['TOTT9OTS'] = $_POST['TOTT9OTS'];
    $_SESSION['TOTT9OTC'] = $_POST['TOTT9OTC'];
    $_SESSION['TOTT9O9'] = $_POST['TOTT9O9'];
    //5
    //5.1
    $_SESSION['TOTT10DE'] = $_POST['TOTT10DE'];
    $_SESSION['TOTT10TM'] = $_POST['TOTT10TM'];
    $_SESSION['TOTT10Q'] = $_POST['TOTT10Q'];
    $_SESSION['TOTT10UN'] = $_POST['TOTT10UN'];
    $_SESSION['TOTT10EF'] = $_POST['TOTT10EF'];
    $_SESSION['TOTT10SC1'] = $_POST['TOTT10SC1'];
    $_SESSION['TOTT10SC2'] = $_POST['TOTT10SC2'];
    $_SESSION['TOTT10SC3'] = $_POST['TOTT10SC3'];
    $_SESSION['TOTT10OTS'] = $_POST['TOTT10OTS'];
    $_SESSION['TOTT10OTC'] = $_POST['TOTT10OTC'];
    $_SESSION['TOTT10O10'] = $_POST['TOTT10O10'];
    // Affald
    //1
    $_SESSION['WRRT1DE'] = $_POST['WRRT1DE'];
    $_SESSION['WRRT1WT'] = $_POST['WRRT1WT'];
    $_SESSION['WRRT1WM'] = $_POST['WRRT1WM'];
    $_SESSION['WRRT1Q'] = $_POST['WRRT1Q'];
    $_SESSION['WRRT1UN'] = $_POST['WRRT1UN'];
    $_SESSION['WRRT1SC1'] = $_POST['WRRT1SC1'];
    $_SESSION['WRRT1SC2'] = $_POST['WRRT1SC2'];
    $_SESSION['WRRT1SC3'] = $_POST['WRRT1SC3'];
    $_SESSION['WRRT1OTS'] = $_POST['WRRT1OTS'];
    $_SESSION['WRRT1OTC'] = $_POST['WRRT1OTC'];
    $_SESSION['WRRT1O1'] = $_POST['WRRT1O1'];
    //2
    $_SESSION['WRRT2DE'] = $_POST['WRRT2DE'];
    $_SESSION['WRRT2M'] = $_POST['WRRT2M'];
    $_SESSION['WRRT2Q'] = $_POST['WRRT2Q'];
    $_SESSION['WRRT2UN'] = $_POST['WRRT2UN'];
    $_SESSION['WRRT2EF'] = $_POST['WRRT2EF'];
    $_SESSION['WRRT2SC1'] = $_POST['WRRT2SC1'];
    $_SESSION['WRRT2SC2'] = $_POST['WRRT2SC2'];
    $_SESSION['WRRT2SC3'] = $_POST['WRRT2SC3'];
    $_SESSION['WRRT2DOTS'] = $_POST['WRRT2DOTS'];
    $_SESSION['WRRT2OTC'] = $_POST['WRRT2OTC'];
    $_SESSION['WRRT2O2'] = $_POST['WRRT2O2'];
    // 6
    // 1
    $_SESSION['SPPT1DE'] = $_POST['SPPT1DE'];
    $_SESSION['SPPT1Q'] = $_POST['SPPT1Q'];
    $_SESSION['SPPT1UN'] = $_POST['SPPT1UN'];
    $_SESSION['SPPT1EF'] = $_POST['SPPT1EF'];
    $_SESSION['SPPT1SC3'] = $_POST['SPPT1SC3'];
    $_SESSION['SPPT1OTS'] = $_POST['SPPT1OTS'];
    $_SESSION['SPPT1OTC'] = $_POST['SPPT1OTC'];
    $_SESSION['SPPT1OTC'] = $_POST['SPPT1OTC'];
    $_SESSION['SPPT1O1'] = $_POST['SPPT1O1'];

    //2
    $_SESSION['SPPT2DE'] = $_POST['SPPT2DE'];
    $_SESSION['SPPT2ET'] = $_POST['SPPT2ET'];
    $_SESSION['SPPT2Q'] = $_POST['SPPT2Q'];
    $_SESSION['SPPT2UN'] = $_POST['SPPT2UN'];
    $_SESSION['SPPT2SC3'] = $_POST['SPPT2SC3'];
    $_SESSION['SPPT2OTS'] = $_POST['SPPT2OTS'];
    $_SESSION['SPPT2OTC'] = $_POST['SPPT2OTC'];
    $_SESSION['SPPT2O2'] = $_POST['SPPT2O2'];
    //3
    $_SESSION['SOOT3DE'] = $_POST['SOOT3DE'];
    $_SESSION['SOOT3WT'] = $_POST['SOOT3WT'];
    $_SESSION['SOOT3WM'] = $_POST['SOOT3WM'];
    $_SESSION['SOOT3Q'] = $_POST['SOOT3Q'];
    $_SESSION['SOOT3UN'] = $_POST['SOOT3UN'];
    $_SESSION['SOOT3SC3'] = $_POST['SOOT3SC3'];
    $_SESSION['SOOT3OTS'] = $_POST['SOOT3OTS'];
    $_SESSION['SOOT3OTC'] = $_POST['SOOT3OTC'];
    $_SESSION['SPPT3O3'] = $_POST['SPPT3O3'];
    //4
    $_SESSION['SPPT4DE'] = $_POST['SPPT4DE'];
    $_SESSION['SPPT4Q'] = $_POST['SPPT4Q'];
    $_SESSION['SPPT4UN'] = $_POST['SPPT4UN'];
    $_SESSION['SPPT4EF'] = $_POST['SPPT4EF'];
    $_SESSION['SPPT4SC3'] = $_POST['SPPT4SC3'];
    $_SESSION['SPPT4OTS'] = $_POST['SPPT4OTS'];
    $_SESSION['SPPT4OTC'] = $_POST['SPPT4OTC'];
    $_SESSION['SPPT4O4'] = $_POST['SPPT4O4'];  


    // basic information
    $name = $_POST['Name'];
    $stdate = $_POST['Stdate'];
    $eddate = $_POST['Endate'];
    $position = $_POST['Position'];
    $email = $_POST['Email'];
    $comment = $_POST['Comment'];
    $country = $_POST['country'];
    $company = $_POST['Company'];
    $cvr = $_POST['CVR'];
    $p = $_POST['P'];
    $branch = $_POST['branche'];
    $employ = $_POST['Emp'];
    $revenue = $_POST['Revenue'];
    $building = $_POST['Building'];
    // for electricity
    //1)Forbrug af elektricitet
    $Forbrugscope1 = $_POST['ENECT1SC1'];
    $Forbrugscope2 = $_POST['ENECT1SC2'];
    $Forbrugscope3 = $_POST['ENECT1SC3'];
    $Forbrugoutscope = $_POST['ENECT1OTS'];
    $totalscope1_elctricity_table1 = calscopetotal($Forbrugscope1);
    $totalscope2_elctricity_table1 = calscopetotal($Forbrugscope2);
    $totalscope3_elctricity_table1 = calscopetotal($Forbrugscope3);
    $totalscopes_table1 = (float)$totalscope1_elctricity_table1 + (float)$totalscope2_elctricity_table1 + (float)$totalscope3_elctricity_table1;
    $totaloutscope_elctricity_table1 = calscopetotal($Forbrugoutscope);
    $electricity1 = (float)$_POST['ENECT1O1'];
    //2)Fjernvarme
    $Fjernvarmescope1 = $_POST['ENHPT2S1'];
    $Fjernvarmescope2 = $_POST['ENHPT2S2'];
    $Fjernvarmescope3 = $_POST['ENHPT2S2'];
    $Fjernvarmeoutside = $_POST['ENHPT2OTS'];
    $totalscope1_elctricity_table2 = calscopetotal($Fjernvarmescope1);
    $totalscope2_elctricity_table2 = calscopetotal($Fjernvarmescope2);
    $totalscope3_elctricity_table2 = calscopetotal($Fjernvarmescope3);
    $totalscopes_table2 = (float)$totalscope1_elctricity_table2 + (float)$totalscope2_elctricity_table2 + (float)$totalscope3_elctricity_table2;
    $totaloutscope_elctricity_table2 = calscopetotal($Fjernvarmeoutside);
    $electricity2 = $_POST['ENECT1O2'];
    //3)Brændsler
    $Brændslerscope1 = $_POST['ENHPT3S1'];
    $Brændslerscope2 = $_POST['ENHPT3S2'];
    $Brændslerscope3 = $_POST['ENHPT3S3'];
    $Brændsleroutside = $_POST['ENHPT3OTS'];
    $totalscope1_elctricity_table3 = calscopetotal($Brændslerscope1);
    $totalscope2_elctricity_table3 = calscopetotal($Brændslerscope2);
    $totalscope3_elctricity_table3 = calscopetotal($Brændslerscope3);
    $totalscopes_table3 = (float)$totalscope1_elctricity_table3 + (float)$totalscope2_elctricity_table3 + (float)$totalscope3_elctricity_table3;
    $totaloutscope_elctricity_table3 = calscopetotal($Brændsleroutside);
    $electricity3 = $_POST['ENECT3O3'];
    //total of this section 
    $total_scope1_electricity2 = $totalscope1_elctricity_table2 + $totalscope1_elctricity_table3;
    $total_scope2_electricity2 = $totalscope2_elctricity_table2 + $totalscope2_elctricity_table3;
    $total_scope3_electricity2 = $totalscope3_elctricity_table2 + $totalscope3_elctricity_table3;
    $total_outside_electricity2 = $totaloutscope_elctricity_table2 + $totaloutscope_elctricity_table3;
    //4)Procesudledning
    $Procesudledningscope1 = $_POST['ENPDT4SC1'];
    $Procesudledningscope2 = $_POST['ENPDT4SC2'];
    $Procesudledningscope3 = $_POST['ENPDT4SC3'];
    $Procesudledningoutside = $_POST['ENPDT4OTS'];
    $totalscope1_elctricity_table4 = calscopetotal($Procesudledningscope1);
    $totalscope2_elctricity_table4 = calscopetotal($Procesudledningscope2);
    $totalscope3_elctricity_table4 = calscopetotal($Procesudledningscope3);
    $totalscopes_table4 = (float)$totalscope1_elctricity_table4 + (float)$totalscope2_elctricity_table4 + (float)$totalscope3_elctricity_table4;
    $totaloutscope_elctricity_table4 = calscopetotal($Procesudledningoutside);
    $electricity4 = $_POST['ENPDT4O4'];
    //5)Andet forbrug
    $Andeteclecscope1 = $_POST['ENAFT5SC1'];
    $Andeteclecscope2 = $_POST['ENAFT5SC2'];
    $Andeteclecscope3 = $_POST['ENAFT5SC3'];
    $Andeteclecoutside = $_POST['ENAFT5OTS'];
    $totalscope1_elctricity_table5 = calscopetotal($Andeteclecscope1);
    $totalscope2_elctricity_table5 = calscopetotal($Andeteclecscope2);
    $totalscope3_elctricity_table5 = calscopetotal($Andeteclecscope3);
    $totalscopes_table5 = (float)$totalscope1_elctricity_table5 + (float)$totalscope2_elctricity_table5 + (float)$totalscope3_elctricity_table5;
    $totaloutscope_elctricity_table5 = calscopetotal($Andeteclecoutside);
    $electricity5 = $_POST['ENAFT5O5'];
    //total out side scope
    $totaloutside_scope_electricity = (float)$totaloutscope_elctricity_table1 + (float)$totaloutscope_elctricity_table2 + (float)$totaloutscope_elctricity_table3 + (float)$totaloutscope_elctricity_table4 + (float)$totaloutscope_elctricity_table5;
    //total tone co2
    $totalelctricity =  (float)$electricity1 + (float)$electricity2 + (float)$electricity3 + (float)$electricity4 + (float)$electricity5;
    // echo $totalelctricity;
    //scopes of  electricity
    $electricity_scope1 = $totalscope1_elctricity_table1 + $totalscope1_elctricity_table2 + $totalscope1_elctricity_table3 + $totalscope1_elctricity_table4 + $totalscope1_elctricity_table5;
    $electricity_scope2 = $totalscope2_elctricity_table1 + $totalscope2_elctricity_table2 + $totalscope2_elctricity_table3 + $totalscope2_elctricity_table4 + $totalscope2_elctricity_table5;
    $electricity_scope3 = $totalscope3_elctricity_table1 + $totalscope3_elctricity_table2 + $totalscope3_elctricity_table3 + $totalscope3_elctricity_table4 + $totalscope3_elctricity_table5;
    //Primære indkøb af råvarer til produktion
    //Indkøb af materialer
    $Indkobmat_scope3_table1 = $_POST['PPRT1SC3'];
    $total_scope3_table1 = calscopetotal($Indkobmat_scope3_table1);
    $Indkob1 = $_POST['PPRT1O1'];
    //Indkøb af materialer i monetære enheder (beløb i DKK)
    $Indkobmat_scope3_table2 = $_POST['PPRT2SC3'];
    $total_scope3_table2 = calscopetotal($Indkobmat_scope3_table2);
    $Indkob2 = $_POST['PPRT2O2'];
    //sec1.1 total
    $total_indkob1 = (float)$Indkob1 + (float)$Indkob2;
    //Indkøb af materialer i monetære enheder
    $Indkobmat_scope3_table3 = $_POST['PPRT3SC3'];
    $total_scope3_table3 = calscopetotal($Indkobmat_scope3_table3);
    $Indkob3 = $_POST['PPRT3O3'];
    //Indkøb af produkter og services i monetære enheder (beløb i DKK)
    $Indkobmat_scope3_table4 = $_POST['PPRT4SC3'];
    $total_scope3_table4 = calscopetotal($Indkobmat_scope3_table4);
    $Indkob4 = $_POST['PPRT4O4'];
    // sec1.2 total
    $total_indkob2 = (float)$Indkob3 + (float)$Indkob4;
    //Andet
    $Indkobmat_scope3_table5 = $_POST['PPRT5SC3'];
    $total_scope3_table5 = calscopetotal($Indkobmat_scope3_table5);
    $Indkob5 = $_POST['PPRT5O5'];
    $Indkobmat_scope3_table6 = $_POST['PPRT6SC3'];
    $total_scope3_table6 = calscopetotal($Indkobmat_scope3_table6);
    $Indkob6 = $_POST['PPRT6O6'];


    // sce1.3 total
    $total_indkob3 = (float)$Indkob5 + (float)$Indkob6;
    $total_Inkob_1 = (float)$Indkob1 + (float)$Indkob2 + (float)$Indkob3 + (float)$Indkob4 + (float)$Indkob5 + (float)$Indkob6;
    //Sekundære indkøb af hjælpematerialer og serviceydelser
    //Indkøb af materialer
    $Indkobmat_scope3_table7 = $_POST['PSST7SC3'];
    $total_scope3_table7 = calscopetotal($Indkobmat_scope3_table7);
    $Indkob7 = $_POST['PSST7O7'];
    //Indkøb af materialer i monetære enheder (beløb i DKK)
    $Indkobmat_scope3_table8 = $_POST['PSST8SC3'];
    $total_scope3_table8 = calscopetotal($Indkobmat_scope3_table8);
    $Indkob8 = $_POST['PSST8O8'];
    // sec2.1 total 
    $total_indkob4 = (float)$Indkob7 + (float)$Indkob8;
    //Indkøb af produkter i fysiske enheder
    $Indkobmat_scope3_table9 = $_POST['PSST9SC3'];
    $total_scope3_table9 = calscopetotal($Indkobmat_scope3_table9);
    $Indkob9 = $_POST['PSST9O9'];
    //Indkøb af produkter og services i monetære enheder (beløb i DKK)
    $Indkobmat_scope3_table10 = $_POST['PSST10SC3'];
    $total_scope3_table10 = calscopetotal($Indkobmat_scope3_table10);
    $Indkob10 = $_POST['PSST10O10'];
    // sec2.2 total
    $total_indkob5 = (float)$Indkob9 + (float)$Indkob10;
    //Andet
    $Indkobmat_scope3_table11 = $_POST['POTT11SC3'];
    $total_scope3_table11 = calscopetotal($Indkobmat_scope3_table11);
    $Indkob11 = $_POST['POTT11O11'];
    $Indkobmat_scope3_table12 = $_POST['POTT12SC3'];
    $total_scope3_table12 = calscopetotal($Indkobmat_scope3_table12);
    $Indkob12 = $_POST['POTT12O12'];
    // sec2.3 total
    $total_indkob6 = (float)$Indkob11 + (float)$Indkob12;
    $total_Inkob_2 = (float)$Indkob7 + (float)$Indkob8 + (float)$Indkob9 + (float)$Indkob10 + (float)$Indkob11 + (float)$Indkob12;
    //TOTol inkob
    $total_inkob = $total_Inkob_1 + $total_Inkob_2;
    //tRANSPORT
    //Egne og leasede transportmidler
    //Egne og leasede køretøjer
    $transport_scope1_table1 = $_POST['TOTT1SC1'];
    $transport_scope2_table1 = $_POST['TOTT1SC2'];
    $transport_scope3_table1 = $_POST['TOTT1SC3'];
    $transport_outside_table1 = $_POST['TOTT1OTS'];
    $totalscope1_transport_table1 = calscopetotal($transport_scope1_table1);
    $totalscope2_transport_table1 = calscopetotal($transport_scope2_table1);
    $totalscope3_transport_table1 = calscopetotal($transport_scope3_table1);
    $totalscopes_transport_table1 = (float)$totalscope1_transport_table1 + (float)$totalscope2_transport_table1 + (float)$totalscope3_transport_table1;
    $totaloutscope_transport_table1 = calscopetotal($transport_outside_table1);
    $Transport1 = $_POST['TOTT1O1'];
    //Fly og skibe
    $transport_scope1_table2 = $_POST['TOTT2SC1'];
    $transport_scope2_table2 = $_POST['TOTT2SC2'];
    $transport_scope3_table2 = $_POST['TOTT2SC3'];
    $transport_outside_table2 = $_POST['TOTT2OTS'];
    $totalscope1_transport_table2 = calscopetotal($transport_scope1_table2);
    $totalscope2_transport_table2 = calscopetotal($transport_scope2_table2);
    $totalscope3_transport_table2 = calscopetotal($transport_scope3_table2);
    $totalscopes_transport_table2 = (float)$totalscope1_transport_table2 + (float)$totalscope2_transport_table2 + (float)$totalscope3_transport_table2;
    $totaloutscope_transport_table2 = calscopetotal($transport_outside_table2);
    $Transport2 = $_POST['TOTT2O2'];
    //total scope and outscope of sect 1
    $totalscopes_transport1_table1 = (float)$Transport1 + (float)$Transport2;
    $totaloutscope_transport1_table1 = (float)$totaloutscope_transport_table2 + (float)$totaloutscope_transport_table1;
    //Medarbejdertransport
    //Pendling
    $transport_scope1_table3 = $_POST['TOTT3SC1'];
    $transport_scope2_table3 = $_POST['TOTT3SC2'];
    $transport_scope3_table3 = $_POST['TOTT3SC3'];
    $transport_outside_table3 = $_POST['TOTT3OTS'];
    $totalscope1_transport_table3 = calscopetotal($transport_scope1_table3);
    $totalscope2_transport_table3 = calscopetotal($transport_scope2_table3);
    $totalscope3_transport_table3 = calscopetotal($transport_scope3_table3);
    $totalscopes_transport_table3 = (float)$totalscope1_transport_table3 + (float)$totalscope2_transport_table3 + (float)$totalscope3_transport_table3;
    $totaloutscope_transport_table3 = calscopetotal($transport_outside_table3);
    $Transport3 = $_POST['TOTT3O3'];
    //Rejser i forbindelse med arbejde - Fysiske enheder
    $transport_scope1_table4 = $_POST['TOTT4SC1'];
    $transport_scope2_table4 = $_POST['TOTT4SC2'];
    $transport_scope3_table4 = $_POST['TOTT4SC3'];
    $transport_outside_table4 = $_POST['TOTT4OTS'];
    $totalscope1_transport_table4 = calscopetotal($transport_scope1_table4);
    $totalscope2_transport_table4 = calscopetotal($transport_scope2_table4);
    $totalscope3_transport_table4 = calscopetotal($transport_scope3_table4);
    $totalscopes_transport_table4 = (float)$totalscope1_transport_table4 + (float)$totalscope2_transport_table4 + (float)$totalscope3_transport_table4;
    $totaloutscope_transport_table4 = calscopetotal($transport_outside_table4);
    $Transport4 = $_POST['TOTT4O4'];
    //Rejser i forbindelse med arbejde - monetære enheder (beløb i DKK)
    $transport_scope1_table5 = $_POST['TOTT5SC1'];
    $transport_scope2_table5 = $_POST['TOTT5SC2'];
    $transport_scope3_table5 = $_POST['TOTT5SC3'];
    $transport_outside_table5 = $_POST['TOTT5OTS'];
    $totalscope1_transport_table5 = calscopetotal($transport_scope1_table5);
    $totalscope2_transport_table5 = calscopetotal($transport_scope2_table5);
    $totalscope3_transport_table5 = calscopetotal($transport_scope3_table5);
    $totalscopes_transport_table5 = (float)$totalscope1_transport_table5 + (float)$totalscope2_transport_table5 + (float)$totalscope3_transport_table5;
    $totaloutscope_transport_table5 = calscopetotal($transport_outside_table5);
    $Transport5 = $_POST['TOTT5O5'];
    //total scope and outscope of sect 2
    $totalscopes_transport2_table2 = (float)$Transport3 + (float)$Transport4 + (float)$Transport5;
    $totaloutscope_transport2_table2 = (float)$totaloutscope_transport_table5 + (float)$totaloutscope_transport_table4 + (float)$totaloutscope_transport_table3;
    //Varetransport til virksomhed
    //Varetransport i fysiske enheder
    $transport_scope1_table6 = $_POST['TOTT6SC1'];
    $transport_scope2_table6 = $_POST['TOTT6SC2'];
    $transport_scope3_table6 = $_POST['TOTT6SC3'];
    $transport_outside_table6 = $_POST['TOTT6OTS'];
    $totalscope1_transport_table6 = calscopetotal($transport_scope1_table6);
    $totalscope2_transport_table6 = calscopetotal($transport_scope2_table6);
    $totalscope3_transport_table6 = calscopetotal($transport_scope3_table6);
    $totalscopes_transport_table6 = (float)$totalscope1_transport_table6 + (float)$totalscope2_transport_table6 + (float)$totalscope3_transport_table6;
    $totaloutscope_transport_table6 = calscopetotal($transport_outside_table6);
    $Transport6 = $_POST['TOTT6O6'];
    //Varetransport i monetære enheder (beløb i DKK)
    $transport_scope1_table7 = $_POST['TOTT7SC1'];
    $transport_scope2_table7 = $_POST['TOTT7SC2'];
    $transport_scope3_table7 = $_POST['TOTT7SC3'];
    $transport_outside_table7 = $_POST['TOTT7OTS'];
    $totalscope1_transport_table7 = calscopetotal($transport_scope1_table7);
    $totalscope2_transport_table7 = calscopetotal($transport_scope2_table7);
    $totalscope3_transport_table7 = calscopetotal($transport_scope3_table7);
    $totalscopes_transport_table7 = (float)$totalscope1_transport_table7 + (float)$totalscope2_transport_table7 + (float)$totalscope3_transport_table7;
    $totaloutscope_transport_table7 = calscopetotal($transport_outside_table7);
    $Transport7 = $_POST['TOTT7O7'];
    //total scope and outscope of sect 3
    $totalscopes_transport3_table3 = (float)$Transport6 + (float)$Transport7;
    $totaloutscope_transport3_table3 = (float)$totaloutscope_transport_table7 + (float)$totaloutscope_transport_table7;
    //Sekundære indkøb af hjælpematerialer og serviceydelser
    //Varetransport i fysiske enheder
    $transport_scope1_table8 = $_POST['TOTT8SC1'];
    $transport_scope2_table8 = $_POST['TOTT8SC2'];
    $transport_scope3_table8 = $_POST['TOTT8SC3'];
    $transport_outside_table8 = $_POST['TOTT8OTS'];
    $totalscope1_transport_table8 = calscopetotal($transport_scope1_table8);
    $totalscope2_transport_table8 = calscopetotal($transport_scope2_table8);
    $totalscope3_transport_table8 = calscopetotal($transport_scope3_table8);
    $totalscopes_transport_table8 = (float)$totalscope1_transport_table8 + (float)$totalscope2_transport_table8 + (float)$totalscope3_transport_table8;
    $totaloutscope_transport_table8 = calscopetotal($transport_outside_table8);
    $Transport8 = $_POST['TOTT8O8'];
    //Varetransport i monetære enheder (beløb i DKK)
    $transport_scope1_table9 = $_POST['TOTT9SC1'];
    $transport_scope2_table9 = $_POST['TOTT9SC2'];
    $transport_scope3_table9 = $_POST['TOTT9SC3'];
    $transport_outside_table9 = $_POST['TOTT9OTS'];
    $totalscope1_transport_table9 = calscopetotal($transport_scope1_table9);
    $totalscope2_transport_table9 = calscopetotal($transport_scope2_table9);
    $totalscope3_transport_table9 = calscopetotal($transport_scope3_table9);
    $totalscopes_transport_table9 = (float)$totalscope1_transport_table9 + (float)$totalscope2_transport_table9 + (float)$totalscope3_transport_table9;
    $totaloutscope_transport_table9 = calscopetotal($transport_outside_table9);
    $Transport9 = $_POST['TOTT9O9'];
    //total scope and outscope of sect 4
    $totalscopes_transport4_table4 = (float)$Transport8 + (float)$Transport9;
    $totaloutscope_transport4_table4 = (float)$totaloutscope_transport_table8 + (float)$totaloutscope_transport_table9;
    //Andet
    $transport_scope1_table10 = $_POST['TOTT10SC1'];
    $transport_scope2_table10 = $_POST['TOTT10SC2'];
    $transport_scope3_table10 = $_POST['TOTT10SC3'];
    $transport_outside_table10 = $_POST['TOTT10OTS'];
    $totalscope1_transport_table10 = calscopetotal($transport_scope1_table10);
    $totalscope2_transport_table10 = calscopetotal($transport_scope2_table10);
    $totalscope3_transport_table10 = calscopetotal($transport_scope3_table10);
    $totalscopes_transport_table10 = (float)$totalscope1_transport_table10 + (float)$totalscope2_transport_table10 + (float)$totalscope3_transport_table10;
    $totaloutscope_transport_table10 = calscopetotal($transport_outside_table10);
    $Transport10 = $_POST['TOTT10O10'];
    // total seach scope
    $transport_scope1_total = $totalscope1_transport_table1 + $totalscope1_transport_table2 + $totalscope1_transport_table3 + $totalscope1_transport_table4 + $totalscope1_transport_table5 + $totalscope1_transport_table6 + $totalscope1_transport_table7 + $totalscope1_transport_table8 + $totalscope1_transport_table9 + $totalscope1_transport_table10;
    $transport_scope2_total = $totalscope2_transport_table1 + $totalscope2_transport_table2 + $totalscope2_transport_table3 + $totalscope2_transport_table4 + $totalscope2_transport_table5 + $totalscope2_transport_table6 + $totalscope2_transport_table7 + $totalscope2_transport_table8 + $totalscope2_transport_table9 + $totalscope2_transport_table10;
    $transport_scope3_total = $totalscope3_transport_table1 + $totalscope3_transport_table2 + $totalscope3_transport_table3 + $totalscope3_transport_table4 + $totalscope3_transport_table5 + $totalscope3_transport_table6 + $totalscope3_transport_table7 + $totalscope3_transport_table8 + $totalscope3_transport_table9 + $totalscope3_transport_table10;
    $transport_outscope_total = $totaloutscope_transport_table1 + $totaloutscope_transport_table2 + $totaloutscope_transport_table3 + $totaloutscope_transport_table4 + $totaloutscope_transport_table5 + $totaloutscope_transport_table6 + $totaloutscope_transport_table7 + $totaloutscope_transport_table8 + $totaloutscope_transport_table9 + $totaloutscope_transport_table10;
    //total scope and outscope of sect 5
    $totalscopes_transport5_table5 = (float)$Transport10;
    $totaloutscope_transport5_table5 = (float)$totaloutscope_transport_table10;
    //total of transport
    $total_transport_scopes = $transport_scope1_total + $transport_scope2_total + $transport_scope3_total;
    $total_transport_outscopes = $totaloutscope_transport1_table1 + $totaloutscope_transport2_table2 + $totaloutscope_transport3_table3 + $totaloutscope_transport4_table4 + $totaloutscope_transport5_table5;
    //Affald og genbrug
    //Affald
    $Affald_scope1_table1 = $_POST['WRRT1SC1'];
    $Affald_scope2_table1 = $_POST['WRRT1SC2'];
    $Affald_scope3_table1 = $_POST['WRRT1SC3'];
    $Affald_outside_table1 = $_POST['WRRT1OTS'];
    $totalscope1_Affald_table1 = calscopetotal($Affald_scope1_table1);
    $totalscope2_Affald_table1 = calscopetotal($Affald_scope2_table1);
    $totalscope3_Affald_table1 = calscopetotal($Affald_scope3_table1);
    $totalscopes_Affald_table1 = (float)$totalscope1_Affald_table1 + (float)$totalscope2_Affald_table1 + (float)$totalscope3_Affald_table1;
    $totaloutscope_Affald_table1 = calscopetotal($Affald_outside_table1);
    $Affald1 = $_POST['WRRT1O1'];
    //Andet
    $Affald_scope1_table2 = $_POST['WRRT2SC1'];
    $Affald_scope2_table2 = $_POST['WRRT2SC2'];
    $Affald_scope3_table2 = $_POST['WRRT2SC3'];
    $Affald_outside_table2 = $_POST['WRRT2DOTS'];
    $totalscope1_Affald_table2 = calscopetotal($Affald_scope1_table2);
    $totalscope2_Affald_table2 = calscopetotal($Affald_scope2_table2);
    $totalscope3_Affald_table2 = calscopetotal($Affald_scope3_table2);
    $totalscopes_Affald_table2 = (float)$totalscope1_Affald_table2 + (float)$totalscope2_Affald_table2 + (float)$totalscope3_Affald_table2;
    $totaloutscope_Affald_table2 = calscopetotal($Affald_outside_table2);
    $Affald2 = $_POST['WRRT2O2'];
    //total scopes 
    $total_scope1_affald = $totalscope1_Affald_table1 + $totalscope1_Affald_table2;
    $total_scope2_affald = $totalscope2_Affald_table1 + $totalscope2_Affald_table2;
    $total_scope3_affald = $totalscope3_Affald_table1 + $totalscope3_Affald_table2;
    $total_outscope_affald = $totaloutscope_Affald_table1 + $totaloutscope_Affald_table2;
    //total affaid
    $total_affald_scopes = (float)$totalscopes_Affald_table1 + (float)$totalscopes_Affald_table2;
    $total_affald_outscopes = (float) $totaloutscope_Affald_table1 +  (float) $totaloutscope_Affald_table2;

    //Solgte produkter
    //Forarbejdning og processering af solgte produkter
    //Proces
    $Solgte_scope3_table1 = $_POST['SPPT1SC3'];
    $Solgte_outside_table1 = $_POST['SPPT1OTS'];
    $totalscope3_Solgte_table1 = calscopetotal($Solgte_scope3_table1);
    $totalscopes_Solgte_table1 = (float)$totalscope3_Solgte_table1;
    $totaloutscope_Solgte_table1 = calscopetotal($Solgte_outside_table1);
    $Solgte1 = $_POST['SPPT1O1'];

    //Energiforbrug ved anvendelse af solgt produkt
    $Solgte_scope3_table2 = $_POST['SPPT2SC3'];
    $Solgte_outside_table2 = $_POST['SPPT2OTS'];
    $totalscope3_Solgte_table2 = calscopetotal($Solgte_scope3_table2);
    $totalscopes_Solgte_table2 = (float)$totalscope3_Solgte_table2;
    $totaloutscope_Solgte_table2 = calscopetotal($Solgte_outside_table2);
    $Solgte2 = $_POST['SPPT2O2'];
    //Håndtering af affaldsprodukt
    $Solgte_scope3_table3 = $_POST['SOOT3SC3'];
    $Solgte_outside_table3 = $_POST['SOOT3OTS'];
    $totalscope3_Solgte_table3 = calscopetotal($Solgte_scope3_table3);
    $totalscopes_Solgte_table3 = (float)$totalscope3_Solgte_table3;
    $totaloutscope_Solgte_table3 = calscopetotal($Solgte_outside_table3);
    $Solgte3 = $_POST['SPPT3O3'];
    // Andet
    $Solgte_scope3_table4 = $_POST['SPPT4SC3'];
    $Solgte_outside_table4 = $_POST['SPPT4OTS'];
    $totalscope3_Solgte_table4 = calscopetotal($Solgte_scope3_table4);
    $totalscopes_Solgte_table4 = (float)$totalscope3_Solgte_table4;
    $totaloutscope_Solgte_table4 = calscopetotal($Solgte_outside_table4);
    $Solgte4 = $_POST['SPPT4O4'];
    // total each scope
    $total_scope3_solgte =  $totalscope3_Solgte_table1 + $totalscope3_Solgte_table2 + $totalscope3_Solgte_table3 + $totalscope3_Solgte_table4;
    $total_outscope_solgte = $totaloutscope_Solgte_table1 + $totaloutscope_Solgte_table2 + $totaloutscope_Solgte_table3 + $totaloutscope_Solgte_table4;
    //total solgte
    $Solgte_total_scopes = (float) $totalscopes_Solgte_table4 +  (float)$totalscopes_Solgte_table3 + (float)  $totalscopes_Solgte_table2 + (float)  $totalscopes_Solgte_table1;
    $Solgte_total_outscopes = (float)$totaloutscope_Solgte_table4 + (float) $totaloutscope_Solgte_table3 + (float) $totaloutscope_Solgte_table2 + (float) $totaloutscope_Solgte_table1;
    //total solgte 

    //total of all sections
    $totalscope = $Solgte_total_scopes + $total_affald_scopes + $total_transport_scopes + $total_inkob +     $totalelctricity;
    $totaloutscopes =  $Solgte_total_outscopes +  $total_affald_outscopes + $total_transport_outscopes + $totaloutside_scope_electricity;
    $total21 = $totalscope + $totaloutscopes;
    //scopes
    $scope1 = $electricity_scope1 + $transport_scope1_total +  $total_scope1_affald;
    $scope2 = $electricity_scope2 + $transport_scope2_total + $total_scope2_affald;
    $scope3 = $electricity_scope3 + $total_inkob + $transport_scope3_total + $total_scope3_affald + $total_scope3_solgte;
    $outscope = $totaloutside_scope_electricity + $total_transport_outscopes + $total_affald_outscopes + $total_outscope_solgte;

    $insertOneresult = $empcollection->insertOne([
        "user_id" => $_oid,
        "Basic-info" => array("Name" => $name, "Start-date" => $stdate, "End-date" => $eddate, "Position" => $position, "Email" => $email, "Comment" => $comment, "Country" => $country, "Company" => $company, "CVR-number" => $cvr, "P-number" => $p, "Branch" => $branch, "Number of Employee" => $employ, "Revenue" => $revenue, "Building" => $building),
        "Electricity" => array(
            "Consumption of electricity" => array("scope1" => $totalscope1_elctricity_table1, "scope2" => $totalscope2_elctricity_table1, "scope3" => $totalscope3_elctricity_table1, "outside-scope" => $totaloutscope_elctricity_table1),
            "District heating" => array("scope1" => $totalscope1_elctricity_table2, "scope2" => $totalscope2_elctricity_table2, "scope3" => $totalscope3_elctricity_table2, "outside-scope" => $totaloutscope_elctricity_table2),
            "Fuel" => array("scope1" => $totalscope1_elctricity_table3, "scope2" => $totalscope2_elctricity_table3, "scope3" => $totalscope3_elctricity_table3, "outside-scope" => $totaloutscope_elctricity_table3),
            "Procesudledning" => array("scope1" => $totalscope1_elctricity_table4, "scope2" => $totalscope2_elctricity_table4, "scope3" => $totalscope3_elctricity_table4, "outside-scope" => $totaloutscope_elctricity_table4),
            "Other" => array("scope1" => $totalscope1_elctricity_table5, "scope2" => $totalscope2_elctricity_table5, "scope3" => $totalscope3_elctricity_table5, "outside-scope" => $totaloutscope_elctricity_table5)
        ),
        "Purchase" => array(
            "Purchase of materials in physical units" => array("scope3" => $total_scope3_table1), "Purchase of materials in monetary units (amount in DKK)" => array("scope3" => $total_scope3_table2),
            "Purchase of products in physical units" => array("scope3" => $total_scope3_table3), "Purchase of products and services in monetary units (amount in DKK)" => array("scope3" => $total_scope3_table4),
            "Physical units" => array("scope3" => $total_scope3_table5), "Monetary units (amount in DKK)" => array("scope3" => $total_scope3_table6), "Secondary purchases of consumables and services" => array("scope3" => $total_scope3_table7), "Purchase of materials in monetary units (amount in DKK)" => array("scope3" => $total_scope3_table8), "Purchasing products and services" => array("scope3" => $total_scope3_table9), "Purchase of products and services in monetary units (amount in DKK)" => array("scope3" => $total_scope3_table10),
            "Physical units1" => array("scope3" => $total_scope3_table11), "Monetary units (amount in DKK)1" => array($total_scope3_table12)
        ),
        "Transport" => array(
            "Own and leased vehicles" => array("scope1" => $totalscope1_transport_table1, "scope2" => $totalscope2_transport_table1, "scope3" => $totalscope3_transport_table1, "outside-scope" => $totaloutscope_transport_table1),
            "Aircraft and ships" => array("scope1" => $totalscope1_transport_table2, "scope2" => $totalscope2_transport_table2, "scope3" => $totalscope3_transport_table2, "outside-scope" => $totaloutscope_transport_table2),
            "Commuting" => array("scope1" => $totalscope1_transport_table3, "scope2" => $totalscope2_transport_table3, "scope3" => $totalscope3_transport_table3, "outside-scope" => $totaloutscope_transport_table3),
            "Travel in connection with work - Physical units" => array("scope1" => $totalscope1_transport_table4, "scope2" => $totalscope2_transport_table4, "scope3" => $totalscope3_transport_table4, "outside-scope" => $totaloutscope_transport_table4),
            "Travel in connection with work - monetary units (amount in DKK)" => array("scope1" => $totalscope1_transport_table5, "scope2" => $totalscope2_transport_table5, "scope3" => $totalscope3_transport_table5, "outside-scope" => $totaloutscope_transport_table5),
            "Varetransport i fysiske enheder" => array("scope1" => $totalscope1_transport_table6, "scope2" => $totalscope2_transport_table6, "scope3" => $totalscope3_transport_table6, "outside-scope" => $totaloutscope_transport_table6),
            "Varetransport i monetære enheder (beløb i DKK)" => array("scope1" => $totalscope1_transport_table7, "scope2" => $totalscope2_transport_table7, "scope3" => $totalscope3_transport_table7, "outside-scope" => $totaloutscope_transport_table7),
            "Goods transport in physical units" => array("scope1" => $totalscope1_transport_table8, "scope2" => $totalscope2_transport_table8, "scope3" => $totalscope3_transport_table8, "outside-scope" => $totaloutscope_transport_table8),
            "Varetransport i monetære enheder (beløb i DKK)" => array("scope1" => $totalscope1_transport_table9, "scope2" => $totalscope2_transport_table9, "scope3" => $totalscope3_transport_table9, "outside-scope" => $totaloutscope_transport_table9),
            "Other things" => array("scope1" => $totalscope1_transport_table10, "scope2" => $totalscope2_transport_table10, "scope3" => $totalscope3_transport_table10, "outside-scope" => $totaloutscope_transport_table10)
        ),
        "Waste and recycling " => array(
            "Waste" => array("scope1" => $totalscope1_Affald_table1, "scope2" => $totalscope2_Affald_table1, "scope3" => $totalscope3_Affald_table1, "outside scope" => $totaloutscope_Affald_table1),
            "Andet" => array("scope1" => $totalscope1_Affald_table2, "scope2" => $totalscope2_Affald_table2, "scope3" => $totalscope3_Affald_table2, "outside scope" => $totaloutscope_Affald_table2)
        ),
        "Sold products" => array(
            "Proces" => array("scope3" => $totalscope3_Solgte_table1, "outside scope" => $totaloutscope_Solgte_table1), "Energy consumption when using sold product" => array("scope3" => $totalscope3_Solgte_table2, "outside scope" => $totaloutscope_Solgte_table2),
            "Waste product management" => array("scope3" => $totalscope3_Solgte_table3, "outside scope" => $totaloutscope_Solgte_table3), "Other things" => array("scope3" => $totalscope3_Solgte_table4, "outside scope" => $totaloutscope_Solgte_table4)
        )

    ]);
    //    printf("inserted %d document ",$insertOneresult->getInsertedCount());
} else {
    $outscope = 0;
    $electricity_scope1 = 0;
    $electricity_scope2 = 0;
    $electricity_scope3 = 0;
    $totaloutscope_elctricity_table1 = 0;
    $totalscope1_elctricity_table1 = 0;
    $totalscope2_elctricity_table1 = 0;
    $totalscope3_elctricity_table1 = 0;
    $totaloutscope_elctricity_table1 = 0;
    $totaloutside_scope_electricity = 0.0000;
    $total_scope1_electricity2 = 0;
    $total_scope2_electricity2 = 0;
    $total_scope3_electricity2 = 0;
    $total_outside_electricity2 = 0;
    $totalelctricity = 0.0000;
    $scope1 = 0;
    $scope2 = 0;
    $scope3 = 0;
    $total_inkob = 0;
    $total_Inkob_1 = 0;
    $total_Inkob_2 = 0;
    $total_indkob3 = 0;
    $total_indkob1 = 0;
    $total_indkob2 = 0;
    $total_indkob4 = 0;
    $total_indkob5 = 0;
    $total_indkob6 = 0;
    $total_scope3_table1 = 0;
    $total_scope3_table2 = 0;
    $total_scope3_table3 = 0;
    $total_scope3_table4 = 0;
    $total_scope3_table5 = 0;
    $total_scope3_table6 = 0;
    $total_scope3_table7 = 0;
    $total_scope3_table8 = 0;
    $total_scope3_table9 = 0;
    $total_scope3_table10 = 0;
    $total_scope3_table11 = 0;
    $total_scope3_table12 = 0;
    $transport_scope1_total = 0;
    $transport_scope2_total = 0;
    $transport_scope3_total = 0;
    $transport_outscope_total = 0;
    $totalscopes_transport1_table1 = 0;
    $totalscopes_transport2_table2 = 0;
    $totalscopes_transport3_table3 = 0;
    $totalscopes_transport4_table4 = 0;
    $totalscopes_transport5_table5 = 0;
    $totaloutscope_transport1_table1 = 0;
    $totaloutscope_transport2_table2 = 0;
    $totaloutscope_transport3_table3 = 0;
    $totaloutscope_transport4_table4 = 0;
    $totaloutscope_transport5_table5 = 0;
    $totalscope1_transport_table1 = 0;
    $totalscope2_transport_table1 = 0;
    $totalscope3_transport_table1 = 0;
    $totalscope1_transport_table2 = 0;
    $totalscope2_transport_table2 = 0;
    $totalscope3_transport_table2 = 0;
    $totalscope1_transport_table3 = 0;
    $totalscope2_transport_table3 = 0;
    $totalscope3_transport_table3 = 0;
    $totalscope1_transport_table4 = 0;
    $totalscope2_transport_table4 = 0;
    $totalscope3_transport_table4 = 0;
    $totalscope1_transport_table5 = 0;
    $totalscope2_transport_table5 = 0;
    $totalscope3_transport_table5 = 0;
    $totalscope1_transport_table6 = 0;
    $totalscope2_transport_table6 = 0;
    $totalscope3_transport_table6 = 0;
    $totalscope1_transport_table7 = 0;
    $totalscope2_transport_table7 = 0;
    $totalscope3_transport_table7 = 0;
    $totalscope1_transport_table8 = 0;
    $totalscope2_transport_table8 = 0;
    $totalscope3_transport_table8 = 0;
    $totalscope1_transport_table9 = 0;
    $totalscope2_transport_table9 = 0;
    $totalscope3_transport_table9 = 0;
    $totalscope1_transport_table10 = 0;
    $totalscope2_transport_table10 = 0;
    $totalscope3_transport_table10 = 0;
    $totaloutscope_transport_table1 = 0;
    $totaloutscope_transport_table2 = 0;
    $totaloutscope_transport_table3 = 0;
    $totaloutscope_transport_table4 = 0;
    $totaloutscope_transport_table5 = 0;
    $totaloutscope_transport_table6 = 0;
    $totaloutscope_transport_table7 = 0;
    $totaloutscope_transport_table8 = 0;
    $totaloutscope_transport_table9 = 0;
    $totaloutscope_transport_table10 = 0;
    $totaloutscopes = 0;
    $total21 = 0;
    $totalscope = 0.1;
    $Indkobmat_scope3_table5 = 0;
    $total_transport_scopes = 0;
    $total_transport_outscopes = 0;
    $total_affald_scopes = 0;
    $total_scope3_solgte = 0;
    $totalscope3_Solgte_table1 = 0;
    $totalscope3_Solgte_table2 = 0;
    $totalscope3_Solgte_table3 = 0;
    $totalscope3_Solgte_table4 = 0;
    $totaloutscope_Solgte_table1 = 0;
    $totaloutscope_Solgte_table2 = 0;
    $totaloutscope_Solgte_table3 = 0;
    $totaloutscope_Solgte_table4 = 0;
    $total_outscope_solgte = 0;
    $total_affald_outscopes = 0;
    $Solgte_total_scopes = 0;
    $Solgte_total_outscopes = 0;
    $totalscopes_Affald_table1 = 0;
    $totaloutscope_Affald_table1 = 0;
    $totaloutscope_transport_table = 0;
    $totalscopes_Affald_table2 = 0;
    $totaloutscope_Affald_table2 = 0;
    $electricity1 = 0;
    $electricity2 = 0;
    $electricity3 = 0;
    $electricity4 = 0;
    $electricity5 = 0;
    $totalscope1_elctricity_table5 = 0;
    $totalscope2_elctricity_table5 = 0;
    $totalscope3_elctricity_table5 = 0;
    $totaloutscope_elctricity_table5 = 0;
    $totalscope1_elctricity_table4 = 0;
    $totalscope2_elctricity_table4 = 0;
    $totalscope3_elctricity_table4 = 0;
    $totaloutscope_elctricity_table4 = 0;
    $totaloutscope_elctricity_table1 = 0;
    $totaloutscope_elctricity_table2 = 0;
    $totaloutscope_elctricity_table3 = 0;
    $totaloutscope_elctricity_table4 = 0;
    $totaloutscope_elctricity_table5 = 0;
    $totalscopes_Solgte_table1 = 0;
    $totaloutscope_Solgte_table1 = 0;
    $totalscopes_Solgte_table2 = 0;
    $totaloutscope_Solgte_table2 = 0;
    $totalscopes_Solgte_table3 = 0;
    $totaloutscope_Solgte_table3 = 0;
    $totalscopes_Solgte_table4 = 0;
    $totaloutscope_Solgte_table4 = 0;
    $total_scope1_affald = 0;
    $total_scope2_affald = 0;
    $total_scope3_affald = 0;
    $total_outscope_affald = 0;
    $totalscope1_Affald_table1 = 0;
    $totalscope2_Affald_table1 = 0;
    $totalscope3_Affald_table1 = 0;
    $totalscope1_Affald_table2 = 0;
    $totalscope2_Affald_table2 = 0;
    $totalscope3_Affald_table2 = 0;
    $totaloutscope_Affald_table1 = 0;
    $totaloutscope_Affald_table2 = 0;
}
