<?php require_once('./COMPONENTS/header.php'); ?>
<?php require_once('./calculation.php') ?>
<nav class="nav nav_1 ">
    <div class="container nav">
        <a class="nav-link  nav1 nav_2 Active1" href="#" onclick="show(2)">Resultater</a>
        <a class="nav-link nav1 nav_3" href="#" onclick="show(1)">Resultater GHG</a>
    </div>
</nav>
<br />
<div id="overlay" class="container first show2">
    <div class="row">
        <div class="col-lg-12 " id="element1">
            <h4 class="head1">Resultat </h4>
            <div class="row sec1">
                <h5 class="head2">Main results</h5>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p>The company's total calculated CO2e emissions are given in Table 1 and are based on emission factors from 2019. The CO2e emissions are given in tonnes of CO2 equivalents, and the table shows the emissions divided into the individual links in the value chain. CO2e emissions are divided into actual emissions and emissions outside the scopes.
                        Emissions outside scopes are not included, but may include displaced emissions, for example through the use of recycled resources.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-11 col-12 table-responsive-md ">
                    <table class="table">
                        <thead>
                            <tr>
                                <p class="text1">Tabel 1</p>
                                <h2 class="head3">Overview of the company's CO2e emissions</h2>
                            </tr>
                            <tr style="text-align: center;">
                                <th scope="col" class="col-3"></th>
                                <th scope="col">Ton CO2-e</th>
                                <th scope="col">Ton CO2-e, udenfor scopes</th>
                                <th scope="col">Ton CO2-e inkl. udledning udenfor scopes</th>
                                <th scope="col">Fordeling af ton CO2-e (%)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-nowrap ">
                                <td>Energy and processes</td>
                                <td style="text-align: center;">
                                    <?php if ($totalelctricity > 0) {
                                        echo  round($totalelctricity, 1);
                                    } else {
                                        echo "0";
                                    } ?></td>
                                <td style="text-align: center;">
                                    <?php if ($totaloutside_scope_electricity > 0) {
                                        echo   round($totaloutside_scope_electricity, 1);
                                    } else {
                                        echo "0.0";
                                    } ?></td>
                                <td style="text-align: center;">
                                    <?php if (($totalelctricity + $totaloutside_scope_electricity) > 0) {
                                        echo  round($totalelctricity + $totaloutside_scope_electricity, 1);
                                    } else {
                                        echo "0.0";
                                    }
                                    ?></td>
                                <td style="text-align: center;">
                                    <?php if ($totalelctricity > 0) {
                                        $electricity = ($totalelctricity * 100) / $totalscope;
                                        echo  round($electricity, 1) . "%";
                                    } else {
                                        $electricity = 0;
                                        echo "0.0%";
                                    } ?></td>
                            </tr>
                            <tr class="text-nowrap ">
                                <td>Purchase</td>
                                <td style="text-align: center;">
                                    <?php if ($total_inkob > 0) {
                                        echo  round($total_inkob, 1);
                                    } else {
                                        echo "0.0";
                                    }
                                    ?></td>
                                <td style="text-align: center;">0.0</td>
                                <td style="text-align: center;">
                                    <?php if ($total_inkob > 0) {
                                        echo  round($total_inkob, 1);
                                    } else {
                                        echo "0.0";
                                    } ?></td>
                                <td style="text-align: center;">
                                    <?php
                                    if ($total_inkob > 0) {
                                        $inkob = ($total_inkob * 100) / $totalscope;
                                        echo  round($inkob, 1) . "%";
                                    } else {
                                        $inkob = 0;
                                        echo "0.0%";
                                    } ?></td>
                            </tr>
                            <tr class="text-nowrap ">
                                <td>Transport</td>
                                <td style="text-align: center;">
                                    <?php if ($total_transport_scopes > 0) {
                                        echo round($total_transport_scopes, 1);
                                    } else {
                                        echo "0.0";
                                    } ?></td>
                                <td style="text-align: center;">
                                    <?php if ($total_transport_outscopes > 0) {
                                        echo round($total_transport_outscopes, 1);
                                    } else {
                                        echo "0.0";
                                    } ?></td>
                                <td style="text-align: center;">
                                    <?php if ($total_transport_outscopes > 0 || $total_transport_scopes > 0) {
                                        echo round($total_transport_outscopes + $total_transport_scopes, 1);
                                    } else {
                                        echo "0.0";
                                    } ?></td>
                                <td style="text-align: center;">
                                    <?php if ($total_transport_scopes > 0) {
                                        $transport = ($total_transport_scopes * 100) / $totalscope;
                                        echo round($transport, 1);
                                    } else {
                                        $transport = 0;
                                        echo "0.0%";
                                    } ?></td>
                            </tr>
                            <tr class="text-nowrap ">
                                <td>Waste and recycling</td>
                                <td style="text-align: center;">
                                    <?php if ($total_affald_scopes > 0) {
                                        echo round($total_affald_scopes, 1);
                                    } else {
                                        echo "0.0";
                                    } ?></td>
                                <td style="text-align: center;">
                                    <?php if ($total_affald_outscopes > 0) {
                                        echo round($total_affald_outscopes, 1);
                                    } else {
                                        echo "0.0";
                                    } ?></td>
                                <td style="text-align: center;">
                                    <?php if ($total_affald_outscopes > 0 || $total_affald_scopes > 0) {
                                        echo round($total_affald_outscopes + $total_affald_scopes, 1);
                                    } else {
                                        echo "0.0";
                                    } ?>
                                </td>
                                <td style="text-align: center;">
                                    <?php if ($total_affald_scopes > 0) {
                                        $Affald = ($total_affald_scopes * 100) / $totalscope;
                                        echo round($Affald, 1);
                                    } else {
                                        $Affald = 0;
                                        echo "0.0%";
                                    } ?>
                                </td>
                            </tr>
                            <tr class="text-nowrap ">
                                <td>Sold products</td>
                                <td style="text-align: center;">
                                    <?php if ($Solgte_total_scopes > 0) {
                                        echo round($Solgte_total_scopes, 1);
                                    } else {
                                        echo "0.0";
                                    } ?></td>
                                <td style="text-align: center;">
                                    <?php if ($Solgte_total_outscopes > 0) {
                                        echo round($Solgte_total_outscopes, 1);
                                    } else {
                                        echo round($Solgte_total_outscopes, 1);
                                    } ?></td>
                                <td style="text-align: center;">
                                    <?php if ($Solgte_total_outscopes > 0 || $Solgte_total_scopes > 0) {
                                        echo round($Solgte_total_outscopes + $Solgte_total_scopes, 1);
                                    } else {
                                        echo "0.0";
                                    } ?></td>
                                <td style="text-align: center;">
                                    <?php if ($Solgte_total_scopes > 0) {
                                        $solgte = ($Solgte_total_scopes * 100) / $totalscope;
                                        echo round($solgte, 1);
                                    } else {
                                        $solgte = 0;
                                        echo "0.0%";
                                    } ?></td>
                            </tr>
                            <tr class="text-nowrap " style="border-top: solid;border-width: 2px;border-bottom-width: 1px !important;font-size: 20px;border-bottom: solid;">
                                <th style="    text-align: initial;">Total</th>
                                <th style="text-align: center;">
                                    <?php if ($totalscope > 0.1) {
                                        echo round($totalscope, 1);
                                    } else {
                                        echo "0.0";
                                    } ?></th>
                                <th style="text-align: center;">
                                    <?php if ($totaloutscopes > 0) {
                                        echo round($totaloutscopes, 1);
                                    } else {
                                        echo round($totaloutscopes, 1);
                                    } ?></th>
                                <th style="text-align: center;">
                                    <?php if ($totaloutscopes > 0 || $totalscope > 0.1) {
                                        echo round($totaloutscopes + $totalscope, 1);
                                    } else {
                                        echo "0.0";
                                    } ?></th>
                                <th style="text-align: center;">
                                    <?php $totalpercent = $electricity + $inkob + $transport + $Affald + $solgte;
                                    echo round($totalpercent, 1) . "%"; ?></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <br />
            <div class="row">
                <div class="col-12">
                    <p>The figures below summarize the company's calculated CO2e emissions. Figure 1 indicates the company's calculated absolute CO2e emissions in tonnes of CO2e equivalents distributed on the value chain links. Figure 2 shows the percentage distribution of the calculated CO2e emissions distributed on the value chain links.</p>
                </div>
            </div>
            <br />
            <div class="html2pdf__page-break"></div>
            <div class="row">
                <div class="col-lg-5 col-12">

                    <p class="text2">Figure 1-Distribution of total CO2e emissions in tonnes</p>
                    <h2 class="head4"> Virksomhedens totale CO2e-udledning fordelt på områder</h2>
                    <div>
                        <canvas id="myChart1" width="100" height="100"></canvas>
                        <!-- <canvas class="graphs" id="canvas"></canvas> -->
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5 col-12">
                    <p class="text2">Figure 1-Distribution of total CO2e emissions in tonnes</p>
                    <h2 class="head4"> Virksomhedens totale CO2e-udledning fordelt på områder</h2>
                    <div>
                        <canvas id="myChart" width="0" height="0"></canvas>
                    </div>
                </div>
            </div>

            <br />
            <div class="row">
                <div class="col-lg-12">
                    <p>Table 2 shows key figure calculations, if there is data for the number of employees in the company,
                        the company's turnover in mill. and the company's total heated area in m².</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-12 table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <p class="text1">Tabel 2</p>
                                <h2 class="head3">Key ratio calculations</h2>
                            </tr>
                            <tr class="" style="text-align: left;">
                                <th scope="col">Nøgletal</th>
                                <th scope="col">Ton CO2-e</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>CO2-e pr. ansat</td>
                                <td style="text-align: center;"></td>
                            </tr>
                            <tr>
                                <td>CO2-e pr. mio. kr. omsætning</td>
                                <td style="text-align: center;"></td>
                            </tr>
                            <tr>
                                <td>CO2-e pr. m2</td>
                                <td style="text-align: center;"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <br />
            <div class="row sec1">
                <h5 class="head2">Sub-results</h5>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p>Table 3 shows a more detailed result view. Table 3 shows all the subcategories for which data can be entered, the associated emissions in tonnes of CO2-e and the subcategory's total share of the total emissions.</p>
                </div>
            </div><div class="html2pdf__page-break"></div>
            <div class="row">
                <div class="col-lg-11 col-12 table-responsive ">
                    <table class="table ">
                        <thead>
                            <tr>
                                <p class="text1">Tabel 3</p>
                                <h2 class="head3">Overview of CO2e emissions in tonnes of CO2e e divided into subcategories</h2>
                            </tr>
                            <tr class="" style="text-align: center;">
                                <th scope="col" class="th-lg"></th>
                                <th scope="col">Ton CO2-e</th>
                                <th scope="col">Fordeling af udledning</th>
                                <th scope="col">Ton CO2-e, udenfor scopes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-active text-nowrap">
                                <th scope="col">Energy and processes</th>
                                <th scope="col" style="text-align: center;"><?php if ($totalelctricity > 0) {
                                                                                echo round($totalelctricity, 1);
                                                                            } else {
                                                                                $totalelctricity = 0;
                                                                                echo round($totalelctricity, 1);
                                                                            } ?></th>
                                <th scope="col" style="text-align: center;"><?php if ($totalelctricity > 0) {
                                                                                echo round(($totalelctricity * 100) / $totalscope, 1) . "%";
                                                                            } else {
                                                                                echo "0.0%";
                                                                            } ?></th>
                                <th scope="col" style="text-align: center;"><?php if ($totaloutside_scope_electricity > 0) {
                                                                                echo round($totaloutside_scope_electricity);
                                                                            } else {
                                                                                $totaloutside_scope_electricity = 0;
                                                                                echo round($totaloutside_scope_electricity);
                                                                            } ?></th>

                            </tr>
                            <tr class="text-nowrap">
                                <td>Electricity</td>
                                <td style="text-align: center;"><?php if ($electricity1 > 0) {
                                                                    echo round($electricity1, 1);
                                                                } else {
                                                                    echo round($electricity1, 1);
                                                                } ?></td>
                                <td style="text-align: center;"><?php echo round(($electricity1 * 100) / $totalscope, 1) . "%"; ?></td>
                                <td style="text-align: center;"><?php echo round($totaloutscope_elctricity_table1, 1); ?></td>

                            </tr>
                            <tr class=" text-nowrap">
                                <td>Heat and process energy</td>
                                <td style="text-align: center;"><?php echo    round(((float)$electricity2 + (float)$electricity3), 1); ?></td>
                                <td style="text-align: center;"><?php echo  round((((float)$electricity2 + (float)$electricity3) * 100) / $totalscope, 1) . "%"; ?></td>
                                <td style="text-align: center;"><?php echo  round(($totaloutscope_elctricity_table2 + $totaloutscope_elctricity_table2), 1); ?></td>

                            </tr>
                            <tr class=" text-nowrap">
                                <td>Process discharge</td>
                                <td style="text-align: center;"><?php echo  round((float)$electricity4, 1); ?></td>
                                <td style="text-align: center;"><?php echo  round(((float)$electricity4 * 100) / $totalscope, 1) . "%"; ?></td>
                                <td style="text-align: center;"><?php echo round((float)$totaloutscope_elctricity_table4, 1); ?></td>

                            </tr>
                            <tr>
                                <td>Other</td>
                                <td style="text-align: center;"> <?php echo   round((float)$electricity5, 1); ?></td>
                                <td style="text-align: center;"><?php echo    round(((float)$electricity5 * 100) / $totalscope, 1) . "%"; ?></td>
                                <td style="text-align: center;"><?php echo round((float)$totaloutscope_elctricity_table5, 1); ?></td>

                            </tr>
                            <tr class="table-active text-nowrap">
                                <th scope="col">Purcha</th>
                                <th scope="col" style="text-align: center;"><?php echo round((float)$total_inkob, 1); ?></th>
                                <th scope="col" style="text-align: center;"><?php echo round(((float)$total_inkob * 100) / $totalscope, 1) . "%"; ?></th>
                                <th scope="col" style="text-align: center;">0</th>

                            </tr>
                            <tr class="text-nowrap">
                                <td>Primary procurement of raw materials for production</td>
                                <td style="text-align: center;"><?php echo round((float)$total_Inkob_1, 1); ?></td>
                                <td style="text-align: center;"><?php echo round(((float)$total_Inkob_1 * 100) / $totalscope, 1) . "%"; ?></td>
                                <td style="text-align: center;">0</td>
                            </tr>
                            <tr class=" text-nowrap">
                                <td>Purchase of material</td>
                                <td style="text-align: center;"><?php echo round($total_indkob1, 1); ?></td>
                                <td style="text-align: center;"><?php echo round(($total_indkob1 * 100) / $totalscope, 1) . "%"; ?></td>
                                <td style="text-align: center;">0</td>
                            </tr>
                            <tr class=" text-nowrap">
                                <td>Purchasing products and services</td>
                                <td style="text-align: center;"><?php echo   round($total_indkob2, 1); ?></td>
                                <td style="text-align: center;"><?php echo round(($total_indkob2 * 100) / $totalscope, 1) . "%"; ?></td>
                                <td style="text-align: center;">0</td>
                            </tr>
                            <tr>
                                <td>Other things</td>
                                <td style="text-align: center;"> <?php echo round($total_indkob3, 1); ?></td>
                                <td style="text-align: center;"><?php echo round(($total_indkob3 * 100) / $totalscope, 1) . "%"; ?></td>
                                <td style="text-align: center;">0</td>
                            </tr>
                            <tr class="text-nowrap">
                                <td>Secondary purchases of consumables and services</td>
                                <td style="text-align: center;"><?php echo round((float)$total_Inkob_2, 1); ?></td>
                                <td style="text-align: center;"><?php echo round((float)($total_Inkob_2 * 100) / $totalscope, 1) . "%"; ?></td>
                                <td style="text-align: center;">0</td>
                            </tr>
                            <tr class=" text-nowrap">
                                <td>Indkøb of materialer</td>
                                <td style="text-align: center;"><?php echo round((float)$total_indkob4, 1); ?></td>
                                <td style="text-align: center;"><?php echo round((float)($total_indkob4 * 100) / $totalscope, 1) . "%"; ?></td>
                                <td style="text-align: center;">0</td>
                            </tr>
                            <tr class=" text-nowrap">
                                <td>Purchasing products and services</td>
                                <td style="text-align: center;"><?php echo round((float)$total_indkob5, 1); ?></td>
                                <td style="text-align: center;"><?php echo round((float)($total_indkob5 * 100) / $totalscope, 1) . "%"; ?></td>
                                <td style="text-align: center;">0</td>
                            </tr>
                            <tr>
                                <td>Other things</td>
                                <td style="text-align: center;"><?php echo round((float)$total_indkob6, 1); ?></td>
                                <td style="text-align: center;"><?php echo round((float)($total_indkob6 * 100) / $totalscope, 1) . "%"; ?></td>
                                <td style="text-align: center;">0</td>
                            </tr>
                            <tr class="table-active text-nowrap">
                                <th scope="col">Transport</th>
                                <th scope="col" style="text-align: center;"><?php echo round($total_transport_scopes, 1); ?></th>
                                <th scope="col" style="text-align: center;"><?php echo round(($total_transport_scopes * 100) / $totalscope, 1) . "%"; ?></th>
                                <th scope="col" style="text-align: center;"><?php echo round($total_transport_outscopes, 1); ?></th>

                            </tr>
                            <tr class="text-nowrap">
                                <td>Own and leased means of transport</td>
                                <td style="text-align: center;"><?php echo round($totalscopes_transport1_table1, 1); ?></td>
                                <td style="text-align: center;"><?php echo round(($totalscopes_transport1_table1 * 100) / $totalscope, 1) . "%"; ?></td>
                                <td style="text-align: center;"><?php echo round($totaloutscope_transport1_table1, 1); ?></td>

                            </tr>
                            <tr class=" text-nowrap">
                                <td>Employee transport </td>
                                <td style="text-align: center;"><?php echo round($totalscopes_transport2_table2, 1); ?></td>
                                <td style="text-align: center;"><?php echo round(($totalscopes_transport2_table2 * 100) / $totalscope, 1) . "%"; ?></td>
                                <td style="text-align: center;"><?php echo round($totaloutscope_transport2_table2, 1); ?></td>


                            </tr>
                            <tr class=" text-nowrap">
                                <td>Goods transport to company</td>
                                <td style="text-align: center;"><?php echo round($totalscopes_transport3_table3, 1); ?></td>
                                <td style="text-align: center;"><?php echo round(($totalscopes_transport3_table3 * 100) / $totalscope, 1) . "%"; ?></td>
                                <td style="text-align: center;"><?php echo round($totaloutscope_transport3_table3, 1); ?></td>


                            </tr>
                            <tr class=" text-nowrap">
                                <td>Goods transport from company to customer</td>
                                <td style="text-align: center;"><?php echo round($totalscopes_transport4_table4, 1); ?></td>
                                <td style="text-align: center;"><?php echo round(($totalscopes_transport4_table4 * 100) / $totalscope, 1) . "%"; ?></td>
                                <td style="text-align: center;"><?php echo round($totaloutscope_transport4_table4, 1); ?></td>


                            </tr>
                            <tr>
                                <td>Other things</td>
                                <td style="text-align: center;"><?php echo round($totalscopes_transport5_table5, 1); ?></td>
                                <td style="text-align: center;"><?php echo round(($totalscopes_transport5_table5 * 100) / $totalscope, 1) . "%"; ?></td>
                                <td style="text-align: center;"><?php echo round($totaloutscope_transport5_table5, 1); ?></td>


                            </tr>
                            <tr class="table-active text-nowrap">
                                <th scope="col">Waste and recycli</th>
                                <th style="text-align: center;"><?php echo round($total_affald_scopes, 1); ?></th>
                                <th style="text-align: center;"><?php echo round(($total_affald_scopes * 100) / $totalscope, 1) . "%"; ?></th>
                                <th style="text-align: center;"><?php echo round($total_affald_outscopes, 1); ?></th>


                            </tr>
                            <tr class="text-nowrap">
                                <td>Waste and recyvli</td>
                                <td style="text-align: center;"><?php echo round($totalscopes_Affald_table1, 1); ?></td>
                                <td style="text-align: center;"><?php echo round(($totalscopes_Affald_table1 * 100) / $totalscope, 1) . "%"; ?></td>
                                <td style="text-align: center;"><?php echo round($totaloutscope_Affald_table1, 1); ?></td>

                            </tr>
                            <tr>
                                <td>Other things</td>
                                <td style="text-align: center;"><?php echo round($totalscopes_Affald_table2, 1); ?></td>
                                <td style="text-align: center;"><?php echo round(($totalscopes_Affald_table2 * 100) / $totalscope, 1) . "%"; ?></td>
                                <td style="text-align: center;"><?php echo round($totaloutscope_Affald_table2, 1); ?></td>
                            </tr>
                            <tr class="table-active text-nowrap">
                                <th scope="col">Sold products</th>
                                <th scope="col" style="text-align: center;"><?php echo round($Solgte_total_scopes, 1); ?></th>
                                <th scope="col" style="text-align: center;"><?php echo round(($Solgte_total_scopes * 100) / $totalscope, 1) . "%"; ?></th>
                                <th scope="col" style="text-align: center;"><?php echo round($Solgte_total_outscopes, 1); ?></th>
                            </tr>
                            <tr class="text-nowrap">
                                <td>Processing and processing of sold products </td>
                                <td style="text-align: center;"><?php echo round($totalscopes_Solgte_table1, 1); ?></td>
                                <td style="text-align: center;"><?php echo round(($totalscopes_Solgte_table1 * 100) / $totalscope, 1) . "%"; ?></td>
                                <td style="text-align: center;"><?php echo round($totaloutscope_Solgte_table1, 1); ?></td>
                            </tr>
                            <tr class="text-nowrap">
                                <td>Brug af solgte og udlejede produkter</td>
                                <td style="text-align: center;"><?php echo round($totalscopes_Solgte_table2, 1); ?></td>
                                <td style="text-align: center;"><?php echo round(($totalscopes_Solgte_table2 * 100) / $totalscope, 1) . "%"; ?></td>
                                <td style="text-align: center;"><?php echo round($totaloutscope_Solgte_table2, 1); ?></td>
                            </tr>
                            <tr class="text-nowrap">
                                <td>End-of-life treatment </td>
                                <td style="text-align: center;"><?php echo round($totalscopes_Solgte_table3, 1); ?></td>
                                <td style="text-align: center;"><?php echo round(($totalscopes_Solgte_table3 * 100) / $totalscope, 1) . "%"; ?></td>
                                <td style="text-align: center;"><?php echo round($totaloutscope_Solgte_table3, 1); ?></td>
                            </tr>
                            <tr>
                                <td>Other things</td>
                                <td style="text-align: center;"><?php echo round($totalscopes_Solgte_table4, 1); ?></td>
                                <td style="text-align: center;"><?php echo round(($totalscopes_Solgte_table4 * 100) / $totalscope, 1) . "%"; ?></td>
                                <td style="text-align: center;"><?php echo round($totaloutscope_Solgte_table4, 1); ?></td>
                            </tr>
                            <tr style="border-top: solid;border-width: 2px;border-bottom-width: 1px !important;font-size: 20px;border-bottom: solid;">
                                <th>Total</th>
                                <th style="text-align: center;"><?php if ($totalscope > 0.1) {
                                                                    echo round($totalscope, 1);
                                                                } else {
                                                                    echo "0";
                                                                } ?></th>
                                <th style="text-align: center;"><?php if ($totalscope > 0.1) {
                                                                    echo round(($totalscope * 100) / $totalscope, 1) . "%";
                                                                } else {
                                                                    echo "0%";
                                                                } ?></th>
                                <th style="text-align: center;"><?php echo round($totaloutscopes, 1); ?></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <br>
            <br>
            <div class="row sec1">
                <div class="col-12">
                    <h5 class="head2">Method selection</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p>The results are an expression of some choices made in the calculations. Here, choices have been made regarding
                        the inclusion of the Radiative Forcing Index (RFI) in connection with emissions from air
                        transport, which means that differences in the impact of CO2 emissions on the ground and in the
                        air are taken into account. In addition, an overall methodological approach to emission factors
                        for electricity has been chosen. The choice is based on whether the sale of green certificates (electricity declaration)
                        is taken into account in the choice of emission factor or whether the actual electricity in the grid (environmental declaration) is considered
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-12 table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <p class="text1">Tabel 4</p>
                                <h2 class="head3">Metodevalg</h2>
                            </tr>
                            <tr class="">
                                <th scope="col">Emissionsfaktor</th>
                                <th scope="col">Metodevalg</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Valg af emissionsfaktor for elektricitet:</td>
                                <td>Ikke valgt</td>
                            </tr>
                            <tr>
                                <td>Emissionsfaktor for flytransport</td>
                                <td>Ikke valgt</td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <br>
                </div>
            </div>

        </div>
        <!-- <div class="col-lg-2"></div> -->
        <div class="col-lg-3">
            <button class="btn1" onclick="pdf()">Opret pdf</button>
        </div>
    </div>
    <div id="loader"></div>
</div>
<!-- section2 to load after click resultater GHG -->
<div class="container sec show1">
    <div class="row">
        <div class="col-lg-12 " id="element2">
            <h4 class="head1">Resultat </h4>
            <div class="row sec1">
                <h5 class="head2">Hovedresultater</h5>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p>The company's total CO2e emissions are stated in Table 1 and are based on emission factors from 2019. The CO2e emissions are stated in tonnes of CO2 equivalents, and the table
                        shows the emissions divided into scope 1, 2 and 3, cf. the GHG protocol (see evt. Guide). Emissions outside scopes are not included, cf. the GHG protocol.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-11 col-12 table-responsive-md ">
                    <table class="table">
                        <thead>
                            <tr>
                                <p class="text1">Tabel 1</p>
                                <h2 class="head3">Overview of the company's CO2e emissions</h2>
                            </tr>
                            <tr style="text-align: center;">
                                <th scope="col"></th>
                                <th scope="col">Ton CO2-e</th>
                                <th scope="col">Distribution of tonnes of CO2-e (%)</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-nowrap ">
                                <td>Scope 1</td>
                                <td style="text-align: center;"><?php echo round($scope1, 1); ?></td>
                                <td style="text-align: center;"><?php echo round(($scope1 * 100) / $totalscope, 1) . "%"; ?></td>
                            </tr>
                            <tr class="text-nowrap ">
                                <td>Scope 2</td>
                                <td style="text-align: center;"><?php echo round($scope2, 1); ?></td>
                                <td style="text-align: center;"><?php echo round(($scope2 * 100) / $totalscope, 1) . "%"; ?></td>
                            </tr>
                            <tr class="text-nowrap ">
                                <td>Scope 3</td>
                                <td style="text-align: center;"><?php echo round($scope3, 1); ?></td>
                                <td style="text-align: center;"><?php echo round(($scope3 * 100) / $totalscope, 1) . "%"; ?></td>
                            </tr>


                            <tr class="text-nowrap " style="border-top: solid;border-width: 2px;">
                                <th style="padding: 0px !important;">Total</th>
                                <th style="text-align: center; padding: 0px !important;">
                                <?php if ($totalscope > 0.1) {
                                                                                                echo round($totalscope, 1);
                                                                                            } else {
                                                                                                echo "0";
                                                                                            } ?></th>
                                <th style="text-align: center;padding: 0px !important;"><?php
                                                                                        if ($totalscope > 0.1) {
                                                                                            echo round(($totalscope * 100 / $totalscope), 1) . "%";
                                                                                        } else {
                                                                                            echo "0%";
                                                                                        } ?></th>
                            </tr>
                            <tr class="text-nowrap ">
                                <td>Udenfor scopes</td>
                                <td style="text-align: center;"> <?php echo round($outscope, 1); ?></td>
                                <td style="text-align: center;"> </td>
                                <td style="text-align: center;"> </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <br />
            <div class="row">
                <div class="col-12">
                    <p>The figures below show graphical representations of the company's CO2e emissions. Figure 1 indicates the company's absolute CO2e emissions in tonnes of
                        CO2 equivalents divided into scopes. Figure 2 shows the percentage distribution of CO2e emissions by scope 1, 2 and 3.</p>
                </div>
            </div>
            <br />  <div class="html2pdf__page-break"></div>
            <div class="row">
                <div class="col-lg-5 col-12">

                    <p class="text2">Figure 1-Distribution of total CO2e emissions in tonnes</p>
                    <h2 class="head4"> Virksomhedens totale CO2e-udledning fordelt på områder</h2>
                    <div>
                        <canvas id="myChart2" width="400" height="400"></canvas>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5 col-12">
                    <p class="text2">Figure 1-Distribution of total CO2e emissions in tonnes</p>
                    <h2 class="head4"> Virksomhedens totale CO2e-udledning fordelt på områder</h2>
                    <div>
                        <canvas id="myChart3" width="400" height="400"></canvas>
                    </div>
                </div>
            </div>
            <br />
            <div class="row">
                <div class="col-lg-12">
                    <p>Table 2 shows key figure calculations, if data is given for
                        the number of employees in the company, the company's turnover in mill. and the
                        company's total number of heated area in m²..</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-12 table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <p class="text1">Tabel 2</p>
                                <h2 class="head3">Key ratio calculations</h2>
                            </tr>
                            <tr class="" style="text-align: left;">
                                <th scope="col">Nøgletal</th>
                                <th scope="col">Ton CO2-e</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>CO2-e pr. Employee</td>
                                <td style="text-align: center;"></td>
                            </tr>
                            <tr>
                                <td>CO2-e pr. mio. kr. Revenuue</td>
                                <td style="text-align: center;"></td>
                            </tr>
                            <tr>
                                <td>CO2-e pr. m2</td>
                                <td style="text-align: center;"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <br />
            <div class="row sec1">
                <h5 class="head2">Sub-results</h5>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p>Table 3 shows a more detailed result view. Table 3 shows all the subcategories
                        for which data can be entered, the associated emissions in tonnes of CO2-e and the subcategory's total share of the total emissions.</p>
                </div>
            </div>  <div class="html2pdf__page-break"></div>
            <div class="row">
                <div class="col-lg-11 col-12 table-responsive ">
                    <table class="table ">
                        <thead>
                            <tr>
                                <p class="text1">Tabel 3</p>
                                <h2 class="head3">Overview of CO2e emissions in tonnes of CO2e e divided into subcategories</h2>
                            </tr>
                            <tr class="" style="text-align: center;">
                                <th scope="col" class="th-lg"></th>
                                <th scope="col">Scope 1</th>
                                <th scope="col">Scope 2</th>
                                <th scope="col">Scope 3</th>
                                <th scope="col">Udenfor scope</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-active text-nowrap">
                                <th scope="col">Energy and processes</th>
                                <th scope="col" style="text-align: center;"><?php echo round($electricity_scope1, 1); ?></th>
                                <th scope="col" style="text-align: center;"><?php echo round($electricity_scope2, 1); ?></th>
                                <th scope="col" style="text-align: center;"><?php echo round($electricity_scope3, 1); ?></th>
                                <th scope="col" style="text-align: center;"><?php echo round($totaloutside_scope_electricity, 1); ?></th>

                            </tr>
                            <tr class="text-nowrap">
                                <td>Electricity</td>
                                <td style="text-align: center;"><?php echo round($totalscope1_elctricity_table1, 1); ?></td>
                                <td style="text-align: center;"><?php echo round($totalscope2_elctricity_table1, 1); ?></td>
                                <td style="text-align: center;"><?php echo round($totalscope3_elctricity_table1, 1); ?></td>
                                <td style="text-align: center;"><?php echo round($totaloutscope_elctricity_table1, 1); ?></td>

                            </tr>
                            <tr class=" text-nowrap">
                                <td>Heat and process energy</td>
                                <td style="text-align: center;"><?php echo round($total_scope1_electricity2, 1); ?></td>
                                <td style="text-align: center;"><?php echo round($total_scope2_electricity2, 1); ?></td>
                                <td style="text-align: center;"><?php echo round($total_scope3_electricity2, 1); ?></td>
                                <td style="text-align: center;"><?php echo round($total_outside_electricity2, 1); ?></td>

                            </tr>
                            <tr class=" text-nowrap">
                                <td>Process discharge</td>
                                <td style="text-align: center;"><?php echo round($totalscope1_elctricity_table4, 1); ?></td>
                                <td style="text-align: center;"><?php echo round($totalscope2_elctricity_table4, 1); ?></td>
                                <td style="text-align: center;"><?php echo round($totalscope3_elctricity_table4, 1); ?></td>
                                <td style="text-align: center;"><?php echo round($totaloutscope_elctricity_table4, 1); ?></td>

                            </tr>
                            <tr>
                                <td>Other</td>
                                <td style="text-align: center;"><?php echo round($totalscope1_elctricity_table5, 1); ?></td>
                                <td style="text-align: center;"><?php echo round($totalscope2_elctricity_table5, 1); ?></td>
                                <td style="text-align: center;"><?php echo round($totalscope3_elctricity_table5, 1); ?></td>
                                <td style="text-align: center;"><?php echo round($totaloutscope_elctricity_table5, 1); ?></td>

                            </tr>
                            <tr class="table-active text-nowrap">
                                <th scope="col">Purcha</th>
                                <th scope="col" style="text-align: center;">0</th>
                                <th scope="col" style="text-align: center;">0</th>
                                <th scope="col" style="text-align: center;"><?php echo round($total_inkob, 1); ?></th>
                                <th scope="col" style="text-align: center;">0</th>

                            </tr>
                            <tr class="text-nowrap">
                                <td>Primary procurement of raw materials for production</td>
                                <td style="text-align: center;">0</td>
                                <td style="text-align: center;">0</td>
                                <td style="text-align: center;"><?php echo round($total_Inkob_1, 1); ?></td>
                                <td style="text-align: center;">0</td>

                            </tr>
                            <tr class=" text-nowrap">
                                <td>Purchase of material</td>
                                <td style="text-align: center;">0</td>
                                <td style="text-align: center;">0</td>
                                <td style="text-align: center;"><?php echo round($total_scope3_table1 + $total_scope3_table2, 1); ?></td>
                                <td style="text-align: center;">0</td>
                            </tr>
                            <tr class=" text-nowrap">
                                <td>Purchasing products and services</td>
                                <td style="text-align: center;">0</td>
                                <td style="text-align: center;">0</td>
                                <td style="text-align: center;"><?php echo round($total_scope3_table3 + $total_scope3_table4, 1); ?></td>
                                <td style="text-align: center;">0</td>
                            </tr>
                            <tr>
                                <td>Other things</td>
                                <td style="text-align: center;"> 0</td>
                                <td style="text-align: center;">0</td>
                                <td style="text-align: center;"><?php echo round($total_scope3_table5 + $total_scope3_table6, 1); ?></td>
                                <td style="text-align: center;">0</td>
                            </tr>
                            <tr class="text-nowrap">
                                <td>Secondary purchases of consumables and services</td>
                                <td style="text-align: center;">0</td>
                                <td style="text-align: center;">0</td>
                                <td style="text-align: center;"><?php echo round($total_Inkob_2, 1); ?></td>
                                <td style="text-align: center;">0</td>
                            </tr>
                            <tr class=" text-nowrap">
                                <td>Indkøb of materialer</td>
                                <td style="text-align: center;">0</td>
                                <td style="text-align: center;">0</td>
                                <td style="text-align: center;"><?php echo round($total_scope3_table7 + $total_scope3_table8, 1); ?></td>
                                <td style="text-align: center;">0</td>
                            </tr>
                            <tr class=" text-nowrap">
                                <td>Purchasing products and services</td>
                                <td style="text-align: center;">0</td>
                                <td style="text-align: center;">0</td>
                                <td style="text-align: center;"><?php echo round($total_scope3_table9 + $total_scope3_table10, 1); ?></td>
                                <td style="text-align: center;">0</td>
                            </tr>
                            <tr>
                                <td>Other things</td>
                                <td style="text-align: center;"> 0</td>
                                <td style="text-align: center;">0</td>
                                <td style="text-align: center;"><?php echo round($total_scope3_table11 + $total_scope3_table12, 1); ?></td>
                                <td style="text-align: center;">0</td>
                            </tr>
                            <tr class="table-active text-nowrap">
                                <th scope="col">Transport</th>
                                <th scope="col" style="text-align: center;"><?php echo round($transport_scope1_total, 1); ?></th>
                                <th scope="col" style="text-align: center;"><?php echo round($transport_scope2_total, 1); ?></th>
                                <th scope="col" style="text-align: center;"><?php echo round($transport_scope3_total, 1); ?></th>
                                <th scope="col" style="text-align: center;"><?php echo round($transport_outscope_total, 1); ?></th>
                            </tr>
                            <tr class="text-nowrap">
                                <td>Own and leased means of transport</td>
                                <td style="text-align: center;"><?php echo round($totalscope1_transport_table1 + $totalscope1_transport_table2, 1); ?></td>
                                <td style="text-align: center;"><?php echo round($totalscope2_transport_table1 + $totalscope2_transport_table2, 1); ?></td>
                                <td style="text-align: center;"><?php echo round($totalscope3_transport_table1 + $totalscope3_transport_table2, 1); ?></td>
                                <td style="text-align: center;"><?php echo round($totaloutscope_transport_table1 + $totaloutscope_transport_table2, 1); ?></td>

                            </tr>
                            <tr class=" text-nowrap">
                                <td>Employee transport </td>
                                <td style="text-align: center;"><?php echo round($totalscope1_transport_table3 + $totalscope1_transport_table4 + $totalscope1_transport_table5, 1); ?></td>
                                <td style="text-align: center;"><?php echo round($totalscope2_transport_table3 + $totalscope1_transport_table4 + $totalscope2_transport_table5, 1); ?></td>
                                <td style="text-align: center;"><?php echo round($totalscope3_transport_table3 + $totalscope1_transport_table3 + $totalscope3_transport_table5, 1); ?></td>
                                <td style="text-align: center;"><?php echo round($totaloutscope_transport_table3 + $totaloutscope_transport_table4 + $totaloutscope_transport_table5, 1); ?></td>

                            </tr>
                            <tr class=" text-nowrap">
                                <td>Goods transport to company</td>
                                <td style="text-align: center;"><?php echo round($totalscope1_transport_table6 + $totalscope1_transport_table7, 1); ?></td>
                                <td style="text-align: center;"><?php echo round($totalscope2_transport_table6 + $totalscope2_transport_table7, 1); ?></td>
                                <td style="text-align: center;"><?php echo round($totalscope3_transport_table6 + $totalscope3_transport_table7, 1); ?></td>
                                <td style="text-align: center;"><?php echo round($totaloutscope_transport_table6 +  $totaloutscope_transport_table7, 1); ?></td>

                            </tr>
                            <tr class=" text-nowrap">
                                <td>Goods transport from company to customer</td>
                                <td style="text-align: center;"><?php echo round($totalscope1_transport_table8 + $totalscope1_transport_table9, 1); ?></td>
                                <td style="text-align: center;"><?php echo round($totalscope2_transport_table8 + $totalscope2_transport_table9, 1); ?></td>
                                <td style="text-align: center;"><?php echo round($totalscope3_transport_table8 + $totalscope3_transport_table9, 1); ?></td>
                                <td style="text-align: center;"><?php echo round($totaloutscope_transport_table8 + $totaloutscope_transport_table9, 1); ?></td>

                            </tr>
                            <tr>
                                <td>Other things</td>
                                <td style="text-align: center;"> <?php echo round($totalscope1_transport_table10, 1); ?></td>
                                <td style="text-align: center;"><?php echo round($totalscope2_transport_table10, 1); ?></td>
                                <td style="text-align: center;"><?php echo round($totalscope3_transport_table10, 1); ?></td>
                                <td style="text-align: center;"><?php echo round($totaloutscope_transport_table10, 1); ?></td>

                            </tr>
                            <tr class="table-active text-nowrap">
                                <th scope="col">Waste and recycli</th>
                                <th scope="col" style="text-align: center;"><?php echo round($total_scope1_affald, 1); ?></th>
                                <th scope="col" style="text-align: center;"><?php echo round($total_scope2_affald, 1); ?></th>
                                <th scope="col" style="text-align: center;"><?php echo round($total_scope3_affald, 1); ?></th>
                                <td style="text-align: center;"><?php echo round($total_outscope_affald, 1); ?></td>

                            </tr>
                            <tr class="text-nowrap">
                                <td>Waste and recyvli</td>
                                <td style="text-align: center;"><?php echo round($totalscope1_Affald_table1, 1); ?></td>
                                <td style="text-align: center;"><?php echo round($totalscope2_Affald_table1, 1); ?></td>
                                <td style="text-align: center;"><?php echo round($totalscope3_Affald_table1, 1); ?></td>
                                <td style="text-align: center;"><?php echo round($totaloutscope_Affald_table1, 1); ?></td>

                            </tr>
                            <tr>
                                <td>Other things</td>
                                <td style="text-align: center;"><?php echo round($totalscope1_Affald_table2, 1); ?></td>
                                <td style="text-align: center;"><?php echo round($totalscope2_Affald_table2, 1); ?></td>
                                <td style="text-align: center;"><?php echo round($totalscope3_Affald_table2, 1); ?></td>
                                <td style="text-align: center;"><?php echo round($totaloutscope_Affald_table2, 1); ?></td>

                            </tr>
                            <tr class="table-active text-nowrap">
                                <th scope="col">Sold products</th>
                                <th scope="col" style="text-align: center;">0</th>
                                <th scope="col" style="text-align: center;">0</th>
                                <th scope="col" style="text-align: center;"><?php echo round($total_scope3_solgte, 1); ?></th>
                                <td style="text-align: center;"><?php echo round($total_outscope_solgte, 1); ?></td>

                            </tr>
                            <tr class="text-nowrap">
                                <td>Processing and processing of sold products </td>
                                <td style="text-align: center;">0</td>
                                <td style="text-align: center;">0</td>
                                <td style="text-align: center;"><?php echo round($totalscope3_Solgte_table1, 1); ?></td>
                                <td style="text-align: center;"><?php echo round($totaloutscope_Solgte_table1, 1); ?></td>

                            </tr>
                            <tr class="text-nowrap">
                                <td>Brug af solgte og udlejede produkter</td>
                                <td style="text-align: center;">0</td>
                                <td style="text-align: center;">0</td>
                                <td style="text-align: center;"><?php echo round($totalscope3_Solgte_table2, 1); ?></td>
                                <td style="text-align: center;"><?php echo round($totaloutscope_Solgte_table2, 1); ?></td>

                            </tr>
                            <tr class="text-nowrap">
                                <td>End-of-life treatment </td>
                                <td style="text-align: center;">0</td>
                                <td style="text-align: center;">0</td>
                                <td style="text-align: center;"><?php echo round($totalscope3_Solgte_table3, 1); ?></td>
                                <td style="text-align: center;"><?php echo round($totaloutscope_Solgte_table3, 1); ?></td>

                            </tr>
                            <tr>
                                <td>Other things</td>
                                <td style="text-align: center;"> 0</td>
                                <td style="text-align: center;">0</td>
                                <td style="text-align: center;"><?php echo round($totalscope3_Solgte_table4, 1); ?></td>
                                <td style="text-align: center;"><?php echo round($totaloutscope_Solgte_table4, 1); ?></td>

                            </tr>
                            <tr style="border-top: solid;border-width: 2px;border-bottom-width: 1px !important;font-size: 20px;border-bottom: solid;">
                                <th>Total</th>
                                <th style="text-align: center;"><?php echo round($scope1, 1); ?></th>
                                <th style="text-align: center;"><?php echo round($scope2, 1); ?></th>
                                <th style="text-align: center;"><?php echo round($scope3, 1); ?></th>
                                <th style="text-align: center;"><?php echo round($outscope, 1); ?></th>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <br>
            <br>
            <div class="row sec1">
                <div class="col-12">
                    <h5 class="head2">Method selection</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p>The results are an expression of some choices made in the calculations. Here, choices have been made regarding the inclusion of
                        the Radiative Forcing Index (RFI) in connection with emissions from air transport, which means that differences in the impact of
                        CO2 emissions on the ground and in the air are taken into account. In addition, an overall methodological approach to emission factors
                        for electricity has been chosen. The choice depends on whether the sale of green certificates (electricity declaration) is taken into
                        account in the choice of emission factor, or whether the actual electricity in the grid (environmental declaration) is considered.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-12 table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <p class="text1">Tabel 4</p>
                                <h2 class="head3">Metodevalg</h2>
                            </tr>
                            <tr class="">
                                <th scope="col">Emissionsfaktor</th>
                                <th scope="col">Metodevalg</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Valg af emissionsfaktor for elektricitet:</td>
                                <td>Ikke valgt</td>
                            </tr>
                            <tr>
                                <td>Emissionsfaktor for flytransport</td>
                                <td>Ikke valgt</td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <br>
                </div>
            </div>
        </div>
        <!-- <div class="col-lg-2"></div> -->
        <div class="col-lg-3">
       
            <button class="btn1" onclick="pdf1()">Opret pdf</button>
        </div>
       
    </div>
    <div id="loader1"></div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.0/html2pdf.bundle.min.js"></script>
<script>
    function show(num) {
        var first = document.querySelector('.first');
        var sec = document.querySelector('.sec');
        var nav1 = document.querySelector('.nav_2');
        var nav2 = document.querySelector('.nav_3');
        if (num == 1) {
            first.classList.remove('show2');
            first.classList.add('show1');
            sec.classList.remove('show1');
            sec.classList.add('show2');
            nav1.classList.remove('Active1');
            nav2.classList.add('Active1');
            var barChartDemo = new Chart(ctx2).Bar(barChartData, {
                responsive: true,
                barValueSpacing: 1
            });
            var barChartDemo = new Chart(ctx3).Bar(barChartData, {
                responsive: true,
                barValueSpacing: 2
            });
        } else {
            first.classList.remove('show1');
            first.classList.add('show2');
            sec.classList.remove('show2');
            sec.classList.add('show1');
            nav2.classList.remove('Active1');
            nav1.classList.add('Active1');
            var barChartDemo = new Chart(ctx).Bar(barChartData, {
                responsive: true,
                barValueSpacing: 8
            });
            // var barChartDemo = new Chart(ctx1).Bar(barChartData, {
            //     responsive: true,
            //     barValueSpacing: 2
            // });
        }
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx11 = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx11, {
        type: 'pie',
        data: {
            labels: ['Energi og processer', 'Indkøb', 'Transport', 'Affald og genbrug', 'Solgte produkte'],
            datasets: [{
                label: '',
                data: [<?= $electricity ?>, <?= $inkob ?>, <?= $transport ?>, <?= $Affald ?>, <?= $solgte ?>],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {

        }
    });
    const ctx2 = document.getElementById('myChart1').getContext('2d');
    const ctx3 = document.getElementById('myChart2').getContext('2d');
    const ctx4 = document.getElementById('myChart3').getContext('2d');
    const myChart1 = new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: ['Energi og processer', 'Indkøb', 'Transport', 'Affald og genbrug', 'Solgte produkte'],
            datasets: [{
                label: '',
                data: [Number(<?= (int)$totalelctricity; ?>), Number(<?= $total_inkob ?>), Number(<?= $total_transport_scopes ?>), Number(<?= $total_affald_scopes ?>), Number(<?= $Solgte_total_scopes ?>)],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    const myChart4 = new Chart(ctx4, {
        type: 'pie',
        data: {
            labels: ['scope1', 'scope2', 'scope3'],
            datasets: [{
                label: '# of Votes',
                data: [<?= $scope1 ?>, <?= $scope2 ?>, <?= $scope3 ?>],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {

        }
    });
    const myChart3 = new Chart(ctx3, {
        type: 'bar',
        data: {
            labels: ['scope1', 'scope2', 'scope3'],
            datasets: [{

                data: [Number(<?= (int)$scope1; ?>), Number(<?= $scope2 ?>), Number(<?= $scope3 ?>)],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
<script>
   

    function pdf() {
        document.getElementById('loader').style.display="block";
        $('#overlay').removeClass('blur-out');

        $('#overlay').addClass('blur-in');
        var element = document.getElementById('element1');
        html2pdf(element, {
            margin: 0,
            filename: 'myfile.pdf',
            image: {
                type: 'canvas',
                quality: 0.99
            },
            html2canvas: {
                scale: 0.001,
                logging: true,
                dpi: 160,
                letterRendering: true
            },
            pagebreak: {
                mode: ['css', 'legacy']
            },      
            jsPDF: {
                unit: 'mm',
                format: 'A4',
                orientation: 'portrait'
            }
        });
        var myVar;
        myVar = setTimeout(showPage, 3000);
    }
    function pdf1() {
        var element = document.getElementById('element2');

        html2pdf(element, {
            margin: 0,
            filename: 'myfile.pdf',
            image: {
                type: 'canvas',
                quality: 0.99
            },
            html2canvas: {
                scale: 0.001,
                logging: true,
                dpi: 160,
                letterRendering: true
            },
            pagebreak: {
                mode: ['css', 'legacy']
            },      
            jsPDF: {
                unit: 'mm',
                format: 'A4',
                orientation: 'portrait'
            }
        });
    }
    
function showPage() {
  document.getElementById("loader").style.display = "none";

//   document.getElementById("myDiv").style.display = "block";
}
function showPage1() {
  document.getElementById("loader1").style.display = "none";

//   document.getElementById("myDiv").style.display = "block";
}
</script>
<?php require_once('./COMPONENTS/footer.php'); ?>
<script>
    changenav('link4');
</script>