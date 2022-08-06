function cal1() {
    let frt = document.querySelectorAll('select[name="frt"]');
    let data1 = document.querySelectorAll('select[name="ENECT1UN[]"]');
    let data2 = document.querySelectorAll('input[name="ENECT1EG[]"]');
    let data3 = document.querySelectorAll('input[name="ENECT1EP[]"]');
    let data4 = document.querySelectorAll('input[name="ENECT1SC1[]"]');
    let data5 = document.querySelectorAll('input[name="ENECT1SC2[]"]');
    let data6 = document.querySelectorAll('input[name="ENECT1SC3[]"]');
    let data7 = document.querySelectorAll('input[name="ENECT1OTS[]"]');
    let data8 = document.querySelectorAll('input[name="ENECT1O1"]');
    let total_ton = 0;
    if (frt[0].value == "Miljødeklaration") {
        for (let i = 0; i < data1.length; i++) {
            if (data1[i].value == "KWH") {
                // console.log("kwh")
                let sc1 = 0.0;
                let sc2 = 0.15;
                let sc3 = 0.04;
                let unsc = 0;
                let valsc1 = sc1 * (data2[i].value / 1000) + (data3[i].value * 0);
                let valsc2 = sc2 * ((data2[i].value / 1000) + (data3[i].value * 0));
                let valsc3 = sc3 * ((data2[i].value / 1000) + (data3[i].value * 0));
                let valunsc = unsc * ((data2[i].value / 1000) + (data3[i].value * 0));
                if (data2[i].value == "") {
                    // console.log("null")
                    data4[i].value = null;
                    data5[i].value = null;
                    data6[i].value = null;
                    data7[i].value = null;

                } else {
                    total_ton = total_ton + valsc1 + valsc2 + valsc3 + valunsc;
                    // console.log(total_ton)
                    data8[0].value = total_ton
                    data4[i].value = valsc1;
                    data5[i].value = valsc2;
                    data6[i].value = valsc3;
                    data7[i].value = valunsc;
                }
            }
            else if (data1[i].value == "MWH") {
                // console.log("mwh")               
                let sc1 = 0.0;
                let sc2 = 148.88;
                let sc3 = 40.82;
                let unsc = 0.0;
                let valsc1 = sc1 * ((data2[i].value / 1000) + (data3[i].value * 0));
                let valsc2 = sc2 * ((data2[i].value / 1000) + (data3[i].value * 0));
                let valsc3 = sc3 * ((data2[i].value / 1000) + (data3[i].value * 0));
                let valunsc = unsc * ((data2[i].value / 1000) + (data3[i].value * 0));

                if (data2[i].value == "") {
                    // console.log("null")
                    data4[i].value = null;
                    data5[i].value = null;
                    data6[i].value = null;
                    data7[i].value = null;

                } else {
                    total_ton = total_ton + valsc1 + valsc2 + valsc3 + valunsc;
                    // console.log(total_ton);
                    data8[0].value = total_ton
                    data4[i].value = valsc1;
                    data5[i].value = valsc2;
                    data6[i].value = valsc3;
                    data7[i].value = valunsc;
                }

            }
            else if (data1[i].value == "GJ") {
                // console.log("mwh")               
                let sc1 = 0.0;
                let sc2 = 41.35;
                let sc3 = 11.34;
                let unsc = 0.0;
                let valsc1 = sc1 * ((data2[i].value / 1000) + (data3[i].value * 0));
                let valsc2 = sc2 * ((data2[i].value / 1000) + (data3[i].value * 0));
                let valsc3 = sc3 * ((data2[i].value / 1000) + (data3[i].value * 0));
                let valunsc = unsc * ((data2[i].value / 1000) + (data3[i].value * 0));

                if (data2[i].value == "") {
                    // console.log("null")
                    data4[i].value = null;
                    data5[i].value = null;
                    data6[i].value = null;
                    data7[i].value = null;

                } else {
                    total_ton = total_ton + valsc1 + valsc2 + valsc3 + valunsc;
                    // console.log(total_ton);
                    data8[0].value = total_ton
                    data4[i].value = valsc1;
                    data5[i].value = valsc2;
                    data6[i].value = valsc3;
                    data7[i].value = valunsc;
                }

            }
            else {
                console.log("null")
            }

        }
        document.getElementById("table1").innerHTML = total_ton.toFixed(1);
    }
    else if (frt[0].value == "Eldeklaration") {
        for (let i = 0; i < data1.length; i++) {
            if (data1[i].value == "KWH") {
                // console.log("kwh")
                let sc1 = 0.0;
                let sc2 = 0.37;
                let sc3 = 0.05;
                let unsc = 0;
                let valsc1 = sc1 * (data2[i].value / 1000) + (data3[i].value * 0);
                let valsc2 = sc2 * ((data2[i].value / 1000) + (data3[i].value * 0));
                let valsc3 = sc3 * ((data2[i].value / 1000) + (data3[i].value * 0));
                let valunsc = unsc * ((data2[i].value / 1000) + (data3[i].value * 0));
                if (data2[i].value == "") {
                    // console.log("null")
                    data4[i].value = null;
                    data5[i].value = null;
                    data6[i].value = null;
                    data7[i].value = null;

                } else {
                    total_ton = total_ton + valsc1 + valsc2 + valsc3 + valunsc;
                    // console.log(total_ton)
                    data8[0].value = total_ton
                    data4[i].value = valsc1;
                    data5[i].value = valsc2;
                    data6[i].value = valsc3;
                    data7[i].value = valunsc;
                }
            }
            else if (data1[i].value == "MWH") {
                // console.log("mwh")               
                let sc1 = 0.0;
                let sc2 = 365.14;
                let sc3 = 51.64;
                let unsc = 0.0;
                let valsc1 = sc1 * ((data2[i].value / 1000) + (data3[i].value * 0));
                let valsc2 = sc2 * ((data2[i].value / 1000) + (data3[i].value * 0));
                let valsc3 = sc3 * ((data2[i].value / 1000) + (data3[i].value * 0));
                let valunsc = unsc * ((data2[i].value / 1000) + (data3[i].value * 0));
                if (data2[i].value == "") {
                    // console.log("null")
                    data4[i].value = null;
                    data5[i].value = null;
                    data6[i].value = null;
                    data7[i].value = null;

                } else {
                    total_ton = total_ton + valsc1 + valsc2 + valsc3 + valunsc;
                    // console.log(total_ton);
                    data8[0].value = total_ton
                    data4[i].value = valsc1;
                    data5[i].value = valsc2;
                    data6[i].value = valsc3;
                    data7[i].value = valunsc;
                }
            }
            else if (data1[i].value == "GJ") {
                // console.log("mwh")               
                let sc1 = 0.0;
                let sc2 = 101.43;
                let sc3 = 14.34;
                let unsc = 0.0;
                let valsc1 = sc1 * ((data2[i].value / 1000) + (data3[i].value * 0));
                let valsc2 = sc2 * ((data2[i].value / 1000) + (data3[i].value * 0));
                let valsc3 = sc3 * ((data2[i].value / 1000) + (data3[i].value * 0));
                let valunsc = unsc * ((data2[i].value / 1000) + (data3[i].value * 0));
                if (data2[i].value == "") {
                    // console.log("null")
                    data4[i].value = null;
                    data5[i].value = null;
                    data6[i].value = null;
                    data7[i].value = null;

                } else {
                    total_ton = total_ton + valsc1 + valsc2 + valsc3 + valunsc;
                    console.log(total_ton);
                    data8[0].value = total_ton
                    data4[i].value = valsc1;
                    data5[i].value = valsc2;
                    data6[i].value = valsc3;
                    data7[i].value = valunsc;
                }
            }
            else {
                console.log("null")
            }
        }
        document.getElementById("table1").innerHTML = total_ton.toFixed(1);
    }
    else {
        alert("please select the emission factor");
    }
}
function cal21() {
    let data = document.querySelectorAll('select[name="ENHPT3FT[]"]');
    let data1 = document.querySelectorAll('input[name="ENHPT3FTPB[]"]');
    let data2 = document.querySelectorAll('input[name="ENHPT3Q[]"]');
    let data3 = document.querySelectorAll('select[name="ENHPT3UN[]"]');
    let data4 = document.querySelectorAll('input[name="ENHPT3S1[]"]');
    let data5 = document.querySelectorAll('input[name="ENHPT3S2[]"]');
    let data6 = document.querySelectorAll('input[name="ENHPT3S3[]"]');

    let data7 = document.querySelectorAll('input[name="ENHPT3OTS[]"]');
    let data8 = document.querySelectorAll('input[name="ENECT3O3"]');
    // let data8 = document.querySelectorAll('input[name=""]');
    let data9 = document.querySelectorAll('input[name="ENECT1O2"]');
let totalton = data9[0].value;

    let array = ["Naturgas|Nm3|2.00803662|0|0.36306041|0.13986719", "Naturgas (X% biogas)|Nm3|2.25605510|0|0.38894226|0", "Biogas|Nm3|0.00134167|0|0.15365278|1.27151992"
        , "Fyringsolie|L|3.15418256|0|0.60346|0"];
    let tr, dm, qn, un, sc1, sc2, sc3, os, totalsc = 0, demo;
    for (let i = 0; i < data1.length; i++) {
        sc1 = 0;
        sc2 = 0;
        sc3 = 0;
        os = 0;
        tr = data[i].value;
        dm = data1[i].value;
        un = data3[i].value;
        qn = data2[i].value;
        for (let j = 0; j < array.length; j++) {
            demo = array[j].split('|');
            if (tr == demo[0] && un == demo[1]) {
                sc1 = Number(demo[2]);
                sc2 = Number(demo[3]);
                sc3 = Number(demo[4]);
                os = Number(demo[5]);
                sc1 = (sc1 * qn) / 1000;
                sc2 = (sc2 * qn) / 1000;
                sc3 = (sc3 * qn) / 1000;
                os = (os * qn) / 1000;
                totalsc = totalsc + sc1 + sc2 + sc3;
                if (qn != 0) {
                    data4[i].value = sc3;
                    data5[i].value = sc3;
            
                    data6[i].value = sc3;
                    data7[i].value = os;
                    totalsc = totalsc + sc3;
                    data8[0].value = totalsc;
                    break;
                } else {
                    data4[i].value = null;
                    data5[i].value = null;
                    data6[i].value = null;
                    data7[i].value = null;
                    totalsc = totalsc + sc3;
                    data8[0].value = totalsc;
                }
            }else {
                data4[i].value = null;
                data5[i].value = null;
                data6[i].value = null;
                data7[i].value = null;
                totalsc = totalsc;
                data8[0].value = totalsc;
            }
            
        }
    }
        let total0 = Number(totalton)+ totalsc;
    data8[0].value = totalsc;
    document.getElementById("table2").innerHTML = total0.toFixed(1);


}
// TABLE 2 HEA
//HEAT TABLE 1
function cal2(A) {
    let data1 = document.querySelectorAll('select[name="ENHPT2UN[]"]');
    let data2 = document.querySelectorAll('input[name="ENHPT2Q[]"]');
    let data3 = document.querySelectorAll('input[name="ENHPT2EF[]"]');
    let data4 = document.querySelectorAll('input[name="ENHPT2S1[]"]');
    let data5 = document.querySelectorAll('input[name="ENHPT2S2[]"]');
    let data6 = document.querySelectorAll('input[name="ENHPT2S3[]"]');
    let data7 = document.querySelectorAll('input[name="ENHPT2OTS[]"]');
    let data8 = document.querySelectorAll('input[name="ENECT1O2"]');
    let data9 = document.querySelectorAll('input[name="ENECT3O3"]');

    let total_ton1 = 0;
    let total_ton = 0;
    let total_ton2 = data9[0].value;
    if (A == "a") {
        for (let i = 0; i < data1.length; i++) {
            if (data1[i].value == "KWH") {
                // console.log("kwh")
                let sc1 = 0.0;
                let sc2 = 0.09;
                let sc3 = 0.02;
                let unsc = 0.00;
                let total = sc1 + sc2 + sc3 + unsc;
                let valsc1 = ((sc1 / total) * (data2[i].value * data3[i].value)) / 1000;
                let valsc2 = ((sc2 / total) * (data2[i].value * data3[i].value)) / 1000;
                let valsc3 = ((sc3 / total) * (data2[i].value * data3[i].value)) / 1000;
                let valunsc = ((unsc / total) * (data2[i].value * data3[i].value)) / 1000;
                if (data2[i].value == "") {
                    // console.log("null")
                    data4[i].value = null;
                    data5[i].value = null;
                    data6[i].value = null;
                    data7[i].value = null;
                } else {
                    total_ton1 = total_ton1 + valsc1 + valsc2 + valsc3 + valunsc;
                    // console.log(total_ton)
                    data8[0].value = total_ton1
                    data4[i].value = valsc1;
                    data5[i].value = valsc2;
                    data6[i].value = valsc3;
                    data7[i].value = valunsc;
                }
            }
            else if (data1[i].value == "MWH") {
                // console.log("mwh")               
                let sc1 = 0.0;
                let sc2 = 86.40;
                let sc3 = 20.74;
                let unsc = 0.0;
                let total = sc1 + sc2 + sc3 + unsc;
                let valsc1 = ((sc1 / total) * (data2[i].value * data3[i].value)) / 1000;
                let valsc2 = ((sc2 / total) * (data2[i].value * data3[i].value)) / 1000;
                let valsc3 = ((sc3 / total) * (data2[i].value * data3[i].value)) / 1000;
                let valunsc = ((unsc / total) * (data2[i].value * data3[i].value)) / 1000;
                if (data2[i].value == "") {

                    data4[i].value = null;
                    data5[i].value = null;
                    data6[i].value = null;
                    data7[i].value = null;
                } else {
                    total_ton1 = total_ton1 + valsc1 + valsc2 + valsc3 + valunsc;

                    data8[0].value = total_ton1
                    data4[i].value = valsc1;
                    data5[i].value = valsc2;
                    data6[i].value = valsc3;
                    data7[i].value = valunsc;
                }
            }
            else if (data1[i].value == "GJ") {

                let sc1 = 0.0;
                let sc2 = 24.0;
                let sc3 = 5.76;
                let unsc = 0.0;
                let total = sc1 + sc2 + sc3 + unsc;
                let valsc1 = ((sc1 / total) * (data2[i].value * data3[i].value)) / 1000;
                let valsc2 = ((sc2 / total) * (data2[i].value * data3[i].value)) / 1000;
                let valsc3 = ((sc3 / total) * (data2[i].value * data3[i].value)) / 1000;
                let valunsc = ((unsc / total) * (data2[i].value * data3[i].value)) / 1000;

                if (data2[i].value == "") {

                    data4[i].value = null;
                    data5[i].value = null;
                    data6[i].value = null;
                    data7[i].value = null;

                } else {
                    total_ton1 = total_ton1 + valsc1 + valsc2 + valsc3 + valunsc;
                    ;
                    data8[0].value = total_ton1
                    data4[i].value = valsc1;
                    data5[i].value = valsc2;
                    data6[i].value = valsc3;
                    data7[i].value = valunsc;
                }
            }
            else {
                console.log("null")
            }

        }
        // document.getElementById("table2").innerHTML = total_ton;
    }
    else if (A == "b") {
        for (let i = 0; i < data1.length; i++) {
            if (data1[i].value == "KWH") {
                // console.log("kwh")
                let sc1 = 0.0;
                let sc2 = 0.37;
                let sc3 = 0.05;
                let unsc = 0.00;
                let valsc1 = sc1 * (data2[i].value / 1000) + (data3[i].value * 0);
                let valsc2 = sc2 * ((data2[i].value / 1000) + (data3[i].value * 0));
                let valsc3 = sc3 * ((data2[i].value / 1000) + (data3[i].value * 0));
                let valunsc = unsc * ((data2[i].value / 1000) + (data3[i].value * 0));
                if (data2[i].value == "") {

                    data4[i].value = null;
                    data5[i].value = null;
                    data6[i].value = null;
                    data7[i].value = null;

                } else {
                    total_ton = total_ton + valsc1 + valsc2 + valsc3 + valunsc;

                    data8[0].value = total_ton
                    data4[i].value = valsc1;
                    data5[i].value = valsc2;
                    data6[i].value = valsc3;
                    data7[i].value = valunsc;
                }
            }
            else if (data1[i].value == "MWH") {
                // console.log("mwh")               
                let sc1 = 0.0;
                let sc2 = 365.14;
                let sc3 = 51.64;
                let unsc = 0.0;
                let valsc1 = sc1 * ((data2[i].value / 1000) + (data3[i].value * 0));
                let valsc2 = sc2 * ((data2[i].value / 1000) + (data3[i].value * 0));
                let valsc3 = sc3 * ((data2[i].value / 1000) + (data3[i].value * 0));
                let valunsc = unsc * ((data2[i].value / 1000) + (data3[i].value * 0));
                if (data2[i].value == "") {
                    // console.log("null")
                    data4[i].value = null;
                    data5[i].value = null;
                    data6[i].value = null;
                    data7[i].value = null;

                } else {
                    total_ton = total_ton + valsc1 + valsc2 + valsc3 + valunsc;

                    data8[0].value = total_ton
                    data4[i].value = valsc1;
                    data5[i].value = valsc2;
                    data6[i].value = valsc3;
                    data7[i].value = valunsc;
                }
            }
            else if (data1[i].value == "GJ") {
                // console.log("mwh")               
                let sc1 = 0.0;
                let sc2 = 101.43;
                let sc3 = 14.34;
                let unsc = 0.0;
                let valsc1 = sc1 * ((data2[i].value / 1000) + (data3[i].value * 0));
                let valsc2 = sc2 * ((data2[i].value / 1000) + (data3[i].value * 0));
                let valsc3 = sc3 * ((data2[i].value / 1000) + (data3[i].value * 0));
                let valunsc = unsc * ((data2[i].value / 1000) + (data3[i].value * 0));
                if (data2[i].value == "") {
                    // console.log("null")
                    data4[i].value = null;
                    data5[i].value = null;
                    data6[i].value = null;
                    data7[i].value = null;

                } else {
                    total_ton = total_ton + valsc1 + valsc2 + valsc3 + valunsc;

                    data8[0].value = total_ton
                    data4[i].value = valsc1;
                    data5[i].value = valsc2;
                    data6[i].value = valsc3;
                    data7[i].value = valunsc;
                }
            }
            else {
                console.log("null")
            }
        }

    }
    else {
        alert("please select the emission factor");
    }
    total_ton = total_ton1 + Number(total_ton2);
    document.getElementById("table2").innerHTML = total_ton.toFixed(1);
}
//table 4
function cal4() {
    let data1 = document.querySelectorAll('select[name="ENPDT4GG[]"]');
    let data2 = document.querySelectorAll('input[name="ENPDT4Q[]"]');
    let data3 = document.querySelectorAll('select[name="ENPDT4UN[]"]');
    let data4 = document.querySelectorAll('input[name="ENPDT4SC1[]"]');
    let data5 = document.querySelectorAll('input[name="ENPDT4SC2[]"]');
    let data6 = document.querySelectorAll('input[name="ENPDT4SC3[]"]');
    let data7 = document.querySelectorAll('input[name="ENPDT4OTS[]"]');
    let total = 0;
    let totafiled = document.querySelectorAll('input[name="ENPDT4O4"]')
    for (let i = 0; i < data2.length; i++) {
        let sc1 = (data1[i].value * data2[i].value) / 1000;
        let sc2 = 0;
        if (data2[i].value == "") {
            data4[i].value = null;
            data5[i].value = null;
            data6[i].value = null;
            data7[i].value = null;
        } else {
            data4[i].value = sc1;
            data5[i].value = sc2;
            data6[i].value = sc2;
            data7[i].value = sc2;
            total = total + sc1;
            totafiled[0].value = total;
        }
    }
    document.getElementById("table4").innerHTML = total.toFixed(1);
}
// indkob
function cal5(a, b, c, d, e, f, g, h, i, j) {
    let data1 = document.querySelectorAll(`select[name="${a}"]`);
    let data2 = document.querySelectorAll(`input[name="${b}"]`);
    let data3 = document.querySelectorAll(`select[name="${c}"]`);
    let data4 = document.querySelectorAll(`input[name="${d}"]`);
    let data5 = document.querySelectorAll(`input[name="${e}"]`);
    let data6 = document.querySelectorAll(`input[name="${f}"]`);
    let z = data6[0].value;
    if (z == "") {
        z = 0;
        let f = z
    }
    let sc3 = 0, total = 0, valsc3, total2 = 0;
    for (let i = 0; i < data3.length; i++) {
        const b = data1[i].value;
        let k = b.split(",");
        if (data3[i].value == "KG") {
            sc3 = k[0];
        }
        else if (data3[i].value == "TON") {
            sc3 = k[1];
        }
        valsc3 = (sc3 * data2[i].value) / 1000;
        // console.log(k[1]);
        if (data2[i].value == "") {
            // console.log("null")
            data4[i].value = null;
        } else {
            total = total + valsc3;
            data5[0].value = total;
            data4[i].value = valsc3;
        }
    }
    total2 = Number(z) + total;
    document.getElementById(g).innerHTML = total2.toFixed(1);
    total1(g, h, i, j)
}
function cal6(a, b, c, d, e, f, g, h, i, j) {
    let data1 = document.querySelectorAll(`select[name="${a}"]`);
    let data2 = document.querySelectorAll(`input[name="${b}"]`);
    let data3 = document.querySelectorAll(`select[name="${c}"]`);
    let data4 = document.querySelectorAll(`input[name="${d}"]`);
    let data5 = document.querySelectorAll(`input[name="${e}"]`);
    let data6 = document.querySelectorAll(`input[name="${f}"]`);
    let z = data6[0].value;
    if (z == "") {
        z = 0;
        let f = z
    }
    let sc3 = 0, total = 0, valsc3, total2 = 0;
    for (let i = 0; i < data3.length; i++) {
        sc3 = data1[i].value;
        valsc3 = (sc3 * data2[i].value) / 1000;
        if (data2[i].value == "") {
            data4[i].value = null;
        }
        else {
            total = total + valsc3;
            data5[0].value = total;
            data4[i].value = valsc3;
        }
    }
    total2 = Number(z) + total;
    // console.log("total :"+total2)
    document.getElementById(g).innerHTML = total2.toFixed(1);
    total1(g, h, i, j);
}
function changecol1(a, b, c, d, e, f, g, h, i, j, k) {
    let item2 = ["Stationær PC", "Bærbar PC", "Smartphone", "Computer skærm"];
    let item3 = ["Kød, rødt", "Kød, lyst", "Fisk", "Frugt og grønt", "Brød, kartofler, pasta o.lign.", "Ris", "Mejeri produkter", "Drikkevarer"];
    let item4 = ["Generelt"];
    let data = document.querySelectorAll(`select[name="${a}"]`);
    let data11 = document.querySelectorAll(`select[name="${b}"]`);
    for (let v = 0; v < data.length; v++) {
        data11[v].innerHTML = "";
        if (data[v].value == "Kontor elektronik") {
            var a = item2;
        }
        else if (data[v].value == "Fødevarer") {
            var a = item3;
        }
        else if (data[v].value == "Vandforbrug") {
            var a = item4;
        }
        else if (data[v].value == "Kunstgødning") {
            var a = item4;
        }
        for (let i = 0; i < a.length; i++) {
            var newoption = document.createElement("option");
            newoption.value = a[i];
            newoption.innerHTML = a[i];
            data11[v].options.add(newoption);
        }
    } cal7(b, c, d, e, f, g, h, i, j, k);
}
function cal7(a, b, c, d, e, f, g, h, i, k) {
    let data1 = document.querySelectorAll(`select[name="${a}"]`);
    let data2 = document.querySelectorAll(`input[name="${b}"]`);
    let data3 = document.querySelectorAll(`select[name="${c}"]`);
    let data4 = document.querySelectorAll(`input[name="${d}"]`);
    let data5 = document.querySelectorAll(`input[name="${e}"]`);
    // let data6 = document.querySelectorAll('input[name="subtb2"]');
    let data7 = document.querySelectorAll(`input[name="${f}"]`);
    let sc3 = 0, valsc3 = 0, total = 0, s3, total2 = 0;
    s3 = data7[0].value;
    for (let i = 0; i < data2.length; i++) {
        valsc3 = 0;
        // console.log(data1[i],i);
        if (data1[i].value == "Stationær PC" && data3[i].value == "Antal") {
            sc3 = 375.00;
            valsc3 = (sc3 * data2[i].value) / 1000;
            data4[i].value = valsc3;
        }
        else if (data1[i].value == "Bærbar PC" && data3[i].value == "Antal") {
            sc3 = 270.00;
            valsc3 = (sc3 * data2[i].value) / 1000;
            data4[i].value = valsc3;
        }
        else if (data1[i].value == "Smartphone" && data3[i].value == "Antal") {
            sc3 = 65.00;
            valsc3 = (sc3 * data2[i].value) / 1000;
            data4[i].value = valsc3;
        }
        else if (data1[i].value == "Computer skærm" && data3[i].value == "Antal") {
            sc3 = 440.00;
            valsc3 = (sc3 * data2[i].value) / 1000;
            data4[i].value = valsc3;
        }
        else if (data1[i].value == "Kød, rødt" && data3[i].value == "KG") {
            sc3 = 20.66;
            valsc3 = (sc3 * data2[i].value) / 1000;
            data4[i].value = valsc3;
        }
        else if (data1[i].value == "Kød, lyst" && data3[i].value == "KG") {
            sc3 = 4.80;
            valsc3 = (sc3 * data2[i].value) / 1000;
            data4[i].value = valsc3;
        }
        else if (data1[i].value == "Fisk" && data3[i].value == "KG") {
            sc3 = 3.77;
            valsc3 = (sc3 * data2[i].value) / 1000;
            data4[i].value = valsc3;
        }
        else if (data1[i].value == "Frugt og grønt" && data3[i].value == "KG") {
            sc3 = 0.33;
            valsc3 = (sc3 * data2[i].value) / 1000;
            data4[i].value = valsc3;
        }
        else if (data1[i].value == "Brød, kartofler, pasta o.lign." && data3[i].value == "KG") {
            sc3 = 1.84;
            valsc3 = (sc3 * data2[i].value) / 1000;
            data4[i].value = valsc3;
        }
        else if (data1[i].value == "Ris" && data3[i].value == "KG") {
            sc3 = 2.71;
            valsc3 = (sc3 * data2[i].value) / 1000;
            data4[i].value = valsc3;
        }
        else if (data1[i].value == "Mejeri produkter" && data3[i].value == "KG") {
            sc3 = 4.69;
            valsc3 = (sc3 * data2[i].value) / 1000;
            data4[i].value = valsc3;
        }
        else if (data1[i].value == "Drikkevarer" && data3[i].value == "KG") {
            sc3 = 0.62;
            valsc3 = (sc3 * data2[i].value) / 1000;
            data4[i].value = valsc3;
        }
        else if (data1[i].value == "Generelt" && data3[i].value == "L") {
            sc3 = 0.00;
            valsc3 = (sc3 * data2[i].value) / 1000;
            data4[i].value = valsc3;
        }
        else if (data1[i].value == "Generelt" && data3[i].value == "KG") {
            sc3 = 0.64;
            valsc3 = (sc3 * data2[i].value) / 1000;
            data4[i].value = valsc3;
        }
        if (valsc3 == 0) {
            valsc3 = null;
            data4[i].value = null;
        }
        if (s3 == "") {
            s3 = 0;
            let f = s3
        }
        total = total + valsc3;
        data5[0].value = total;
        total2 = Number(s3) + total;
        document.getElementById(g).innerHTML = total2.toFixed(1);
    }
    total1(g, h, i, k);
}
function changecol2(a, b) {
    let data = document.querySelectorAll(`select[name="${a}"]`);
    let data1 = document.querySelectorAll(`select[name="${b}"]`)
    var item = ["0.10|Generelt", "0.46|Kød, rødt", "0.16|Kød, lyst", "0.04|Fisk", "0.07|Frugt og grønt", "0.23|Brød, kartofler, pasta o.lign.", "0.07|Ris", "0.10|Mejeri produkter", "0.06|Drikkevarer"];
    var item1 = ["0.04|Generelt", "0.04|Rengøring", "0.03|Trykkeri", "0.04|Lager og opbevaring", "0.06|Leje af lokaler", "0.10|Hotel og restaurant", "0.04|Renseri", "0.04|Rådgivning, revisor, advokat, vikar, markedsføring og andre forretningsaktiviteter"];
    var item2 = "Generelt";
    var values = ["0.06", "", "", "0.08", "0.07", "0.06", "0.06", "0.08", "0.09", "0.05", "0.03", "0.03", "0.05", "0.13", "0.14", "0.21", "0.10", "0.03", "0.48", "0.07", "0.07", "0.13", "0.07", "0.02", "0.05", "0.0"];
    var k = data[0].value;
    // console.log(values[0]);
    for (let i = 0; i < data.length; i++) {
        data1[i].innerHTML = "";
        if (k == 1) {
            for (var option in item) {
                var pair = item[option].split("|");
                var newoption = document.createElement("option");
                newoption.value = pair[0];
                newoption.innerHTML = pair[1];
                data1[i].options.add(newoption);
            }
        }
        if (k == 2) {
            for (var option in item1) {
                var pair = item[option].split("|");
                var newoption = document.createElement("option");
                newoption.value = pair[0];
                newoption.innerHTML = pair[1];
                data1[i].options.add(newoption);
            }
        }
        else {
            var newoption = document.createElement("option");
            newoption.value = values[k];
            newoption.innerHTML = item2;
            data1[i].options.add(newoption);
        }
    }
}
function cal8(a, b, c, d, e, f) {
    let data1 = document.querySelectorAll(`select[name="${a}"]`);
    let data2 = document.querySelectorAll(`input[name="${b}"]`);
    let data3 = document.querySelectorAll(`input[name="${c}"]`);
    let data4 = document.querySelectorAll(`input[name="${d}"]`);
    let total1 = 0, valsc3 = 0;
    let data6 = document.querySelectorAll(`input[name="${e}"]`);
    let z = data6[0].value;
    for (let i = 0; i < data3.length; i++) {
        sc3 = data1[i].value;
        valsc3 = (sc3 * data2[i].value) / 1000;
        if (data2[i].value == "") {
            data3[i].value = null;
        } else {
            total1 = total1 + valsc3;
            data4[0].value = total1;
            data3[i].value = valsc3;
        }
    } if (z == "") {
        z = 0;
        let f = z
    }
    total2 = Number(z) + total1;
    document.getElementById(f).innerHTML = total2.toFixed(1);
}
function totalother(a, b, c, d, e, f, g) {
    let data = document.querySelectorAll(`input[name="${a}"]`);
    let data1 = document.querySelectorAll(`input[name="${b}"]`);
    let data2 = document.querySelectorAll(`input[name=${c}]`);
    let sc3 = 0, total = 0, total2;
    let z = data2[0].value;
    if (z == "") {
        z = 0;
    }
    for (let i = 0; i < data.length; i++) {
        sc3 = data[i].value;
        if (sc3 == null) {
            sc3 = 0;
        }
        total = total + Number(sc3);
        data1[0].value = total;
    }
    total2 = Number(z) + total;
    document.getElementById(d).innerHTML = total2.toFixed(1);
    total1(d, e, f, g)
}
function total1(a, b, c, d) {
    //table4
    let data = document.getElementById(a).innerHTML;
    let data1 = document.getElementById(b).innerHTML;
    let data2 = document.getElementById(c).innerHTML;
    let total = Number(data) + Number(data1) + Number(data2);
    console.log(total)
    document.getElementById(d).innerHTML = total.toFixed(1);
}
function cal9() {
    let data1 = document.querySelectorAll('select[name="TOTT1TM[]"]');
    let data2 = document.querySelectorAll('select[name="TOTT1P[]"]');
    let data3 = document.querySelectorAll('input[name="TOTT1BS[]"]');
    let data4 = document.querySelectorAll('input[name="TOTT1Q[]"]');
    let data5 = document.querySelectorAll('select[name="TOTT1UN[]"]');
    let data6 = document.querySelectorAll('input[name="TOTT1SC1[]"]');
    let data7 = document.querySelectorAll('input[name="TOTT1SC2[]"]');
    let data8 = document.querySelectorAll('input[name="TOTT1SC3[]"]');
    let data9 = document.querySelectorAll('input[name="TOTT1OTS[]"]');
    let data10 = document.querySelectorAll('input[name="TOTT1O1"]');
    let data11 = document.querySelectorAll('input[name="TOTT2O2"]');
   

    let array = ["Lastbiler|Diesel|Km|0.77|0|0.18|0.02", "Lastbiler|Diesel|Km|0.11|0.|0.03|0", "Lastbiler|LNG|Km|0.633|0.60|0.121|0",
        "Lastbiler|CNG|Km|0.694|0|0.133|0", "Lastbiler|Diesel|L|2.6013|0.00|0.61727|0.0826", "Lastbiler|LNG|L|1.1504|0.0|0.39688|0.0",
        "Lastbiler|CNG|L|0.44327|0.0|0.085|0.0", "Motorcykler|Benzin|Km|0.11567|0|0.0314|0.008099", "Motorcykler|Benzin|L|2.1707|0.0|0.5903|0.152",
        "Personbiler|Benzin|Km|0.1652|0.0|0.0449|0.01156", "Personbiler|Diesel|Km|0.1342|0|0.03184|0.00426", "Personbiler|EL|Km|0|0.02461|0.0012|0",
        "Personbiler|Benzin|L|2.1707|0|0.5903|0.152", "Personbiler|Diesel|L|2.66134|0|0.6171|0.0826", "Personbiler|EL|KWh|0.|0.1488|0.0408|0",
        "Personbiler|Hybrid|Km|0.1209|0|0.032|0.0084004", "Personbiler|Hybrid|L|2.170701|0.00|0.59030|0.152", "Busser|Diesel|Km|0.8049|0|0.19100|0.02555",
        "Busser|Diesel|Km|0.08422|0|0.01998|0.0026744", "Busser|Diesel|L|2.60134|0|0.6172|0.0826", "Varebiler|Benzin|Km|0.17963|0|0.0445|0.012339", "Varebiler|Diesel|Km|0.20239|0|0.0480|0.0064265", "Varebiler|Benzin|L|2.1707|0|0.5903|0.152",
        "Varebiler|Diesel|L|2.6013|0|0.6172|0.0826", "Varebiler|El|KWh|0|0.1488|0.0408|0", "Varebiler|El|Km|0|0.03|0.01|0"];
    let tr, ft, per, qn, un, sc1, sc2, sc3, os, totalsc = 0, demo;
    for (let i = 0; i < data2.length; i++) {
        sc1 = 0;
        sc2 = 0;
        sc3 = 0;
        os = 0;
        tr = data1[i].value;
        ft = data2[i].value;
        per = data3[i].value;
        qn = data4[i].value;
        un = data5[i].value;
        if (data4[i] == null || data3[i] == null) {
            qn = 0;
            per = 0;
        }
        for (let j = 0; j < array.length; j++) {
            sc1 = 0;
            sc2 = 0;
            sc3 = 0;
            os = 0;
            demo = array[j].split('|');
            if (tr == demo[0] && ft == demo[1] && un == demo[2]) {
                sc1 = Number(demo[3]);
                sc2 = Number(demo[4]);
                sc3 = Number(demo[5]);
                os = Number(demo[6]);
                sc1 = (sc1 * qn) / 1000;
                sc2 = (sc2 * qn) / 1000;
                sc3 = (sc3 * qn) / 1000;
                os = (os * qn) / 1000;
                if (qn != 0 || per != 0) {
                    data6[i].value = sc1;
                    data7[i].value = sc2;
                    data8[i].value = sc3;
                    data9[i].value = os;
                    totalsc = totalsc + sc1 + sc2 + sc3;
                    data10[0].value = totalsc;
                    break;
                } else {
                    data6[i].value = null;
                    data7[i].value = null;
                    data8[i].value = null;
                    data9[i].value = null;
                    totalsc = totalsc + sc1 + sc2 + sc3;
                    data10[0].value = totalsc;
                }
            } else {
                data6[i].value = null;
                data7[i].value = null;
                data8[i].value = null;
                data9[i].value = null;
            }
        }
    }
    
}
function cal10() {
    let data1 = document.querySelectorAll('select[name="TOTT2TM[]"]');
    let data2 = document.querySelectorAll('select[name="TOTT2P[]"]');
    let data3 = document.querySelectorAll('input[name="TOTT2Q[]"]');
    let data4 = document.querySelectorAll('select[name="select23"]');
    let data5 = document.querySelectorAll('select[name="TOTT2UN[]"]');
    let data6 = document.querySelectorAll('input[name="TOTT2SC1[]"]');
    let data7 = document.querySelectorAll('input[name="TOTT2SC2[]"]');
    let data8 = document.querySelectorAll('input[name="TOTT2SC3[]"]');
    let data9 = document.querySelectorAll('input[name="TOTT2OTS[]"]');
    let data10 = document.querySelectorAll('input[name="TOTT2O2"]');
    //ikkeRFI
    let array = ["RFI|Skib|Marine|3.122|0|0.60346|0", "RFI|Fly|Flybenzin|2.295534|0|0.52644|0", "ikkeRFI|Skib|Marine|3.122|0|0.60346|0",
        "ikkeRFI|Fly|Flybenzin|4.3455|0|0.52644|0"];
    let a, tr, dm, qn, un, sc1, sc2, sc3, os, totalsc = 0, demo;
    for (let i = 0; i < data3.length; i++) {
        a = data4[0].value;
        tr = data1[i].value;
        dm = data2[i].value;
        qn = data3[i].value;
        un = data5[i].value;
        if (data3[i] == null) {
            qn = 0;
        }
        for (let j = 0; j < array.length; j++) {
            sc1 = 0;
            sc2 = 0;
            sc3 = 0;
            os = 0;
            demo = array[j].split('|');
            if (a == demo[0] && tr == demo[1] && dm == demo[2]) {
                sc1 = Number(demo[3]);
                sc2 = Number(demo[4]);
                sc3 = Number(demo[5]);
                os = Number(demo[6]);
                sc1 = (sc1 * qn) / 1000;
                sc2 = (sc2 * qn) / 1000;
                sc3 = (sc3 * qn) / 1000;
                os = (os * qn) / 1000;
                if (qn != 0) {
                    data6[i].value = sc1;
                    data7[i].value = sc2;
                    data8[i].value = sc3;
                    data9[i].value = os;
                    totalsc = totalsc + sc1 + sc2 + sc3;
                    data10[0].value = totalsc;
                    break;
                } else {
                    data6[i].value = null;
                    data7[i].value = null;
                    data8[i].value = null;
                    data9[i].value = null;
                    totalsc = totalsc + sc1 + sc2 + sc3;
                    data10[0].value = totalsc;
                }

            } else {
                data6[i].value = null;
                data7[i].value = null;
                data8[i].value = null;
                data9[i].value = null;

            }
        }
    }
}
function cal11() {
    let data1 = document.querySelectorAll('select[name="TOTT3TM[]"]');
    let data2 = document.querySelectorAll('select[name="TOTT3P[]"]');
    let data3 = document.querySelectorAll('input[name="TOTT3BS[]"]');
    let data4 = document.querySelectorAll('input[name="TOTT3Q[]"]');
    let data5 = document.querySelectorAll('select[name="TOTT3UN[]"]');
    let data6 = document.querySelectorAll('input[name="TOTT3SC1[]"]');
    let data7 = document.querySelectorAll('input[name="TOTT3SC2[]"]');
    let data8 = document.querySelectorAll('input[name="TOTT3SC3[]"]');
    let data9 = document.querySelectorAll('input[name="TOTT3OTS[]"]');
    let data10 = document.querySelectorAll('input[name="TOTT3O3"]');
    let data11 = document.querySelectorAll('select[name="select23"]');
    let array = ["Motorcykler|Benzin|Person.km|0|0|0.183820|0.080997", "Motorcykler|Benzin|L|0|0|3.44971|0.152",
        "Personbiler|Benzin|Person.km|0|0|0.265141|0.0080997", "Personbiler|Diesel|Person.km|0|0|0.22106644|0.0042617854",
        "Personbiler|El|Person.km|0|0|0.085599617|0", "Personbiler|Benzin|L|0|0|3.79313301|0.152", "Personbiler|Diesel|L|0|0|4.284610773|0.0826",
        "Personbiler|El|kWh|0|0|0.5306971|0", "Personbiler|Hybrid (ikke opladnings-hybrid)|Person.km|0|0|0.2087881|0.0084664",
        "Personbiler|Hybrid (ikke opladnings-hybrid)|L|0|0|3.748440675|0.152", "Busser|Diesel|person.km|0|0|0.188313174439078|0.00267443598548237",
        "Busser|Diesel|L|0|0|5.81605553212087|0.0826", "Personbiler|Uspecificeret|Antal ansatte pr. år|0|0|1917.32046342871|64.5278532295862",
        "Tog|Uspecificeret|person.km|0|0|0.054|0", "Skib|Marine fuel oil|person.km|0|0|0.134694|0", "Skib|Marine fuel oil|L|0|0|3.72551|0"];
    let array1 = ["ikkeRFI|Fly - internationalt|Flybenzin|Person.km|0|0|0.11592|0", "ikkeRFI|Fly - nationalt|Flybenzin|Person.km|0|0|0.15711|0",
        "RFI|Fly - internationalt|Flybenzin|Person.km|0|0|0.20161|0", "RFI|Fly - nationalt|Flybenzin|Person.km|0|0|0.27221|0",
        "ikkeRFI|Fly - internationalt|Flybenzin|L|0|0|2.821974|0", "ikkeRFI|Fly - nationalt|Flybenzin|L|0|0|2.821974|0",
        "RFI|Fly - internationalt|Flybenzin|L|0|0|4.8651126|0", "RFI|Fly - nationalt|Flybenzin|L|0|0|4.8651126|0"];
    let a, tr, dm, qn, un, sc1, sc2, sc3, os, totalsc = 0, demo;
    for (let i = 0; i < data3.length; i++) {
        a = data11[0].value;
        tr = data1[i].value;
        dm = data2[i].value;
        qn = data4[i].value;
        un = data5[i].value;
        if (tr == "Fly - nationalt" || tr == "Fly - internationalt") {
            for (let j = 0; j < array1.length; j++) {
                sc1 = 0;
                sc2 = 0;
                sc3 = 0;
                os = 0;
                demo = array1[j].split('|');
                if (a == demo[0] && tr == demo[1] && dm == demo[2] && un == demo[3]) {
                    sc1 = Number(demo[4]);
                    sc2 = Number(demo[5]);
                    sc3 = Number(demo[6]);
                    os = Number(demo[7]);
                    sc1 = (sc1 * qn) / 1000;
                    sc2 = (sc2 * qn) / 1000;
                    sc3 = (sc3 * qn) / 1000;
                    os = (os * qn) / 1000;
                    if (qn != 0) {
                        data6[i].value = sc1;
                        data7[i].value = sc2;
                        data8[i].value = sc3;
                        data9[i].value = os;
                        totalsc = totalsc + sc1 + sc2 + sc3;
                        data10[0].value = totalsc;
                        break;
                    } else {
                        data6[i].value = null;
                        data7[i].value = null;
                        data8[i].value = null;
                        data9[i].value = null;
                        totalsc = totalsc + sc1 + sc2 + sc3;
                        data10[0].value = totalsc;
                    }
                }
                else {
                    data6[i].value = null;
                    data7[i].value = null;
                    data8[i].value = null;
                    data9[i].value = null;
                }
            }
        }
        else {
            for (let k = 0; k < array.length; k++) {
                sc1 = 0;
                sc2 = 0;
                sc3 = 0;
                os = 0;
                demo = array[k].split('|');
                if (tr == demo[0] && dm == demo[1] && un == demo[2]) {
                    sc1 = Number(demo[3]);
                    sc2 = Number(demo[4]);
                    sc3 = Number(demo[5]);
                    os = Number(demo[6]);
                    sc1 = (sc1 * qn) / 1000;
                    sc2 = (sc2 * qn) / 1000;
                    sc3 = (sc3 * qn) / 1000;
                    os = (os * qn) / 1000;
                    if (qn != 0) {
                        data6[i].value = sc1;
                        data7[i].value = sc2;
                        data8[i].value = sc3;
                        data9[i].value = os;
                        totalsc = totalsc + sc1 + sc2 + sc3;
                        data10[0].value = totalsc;
                        break;
                    } else {
                        data6[i].value = null;
                        data7[i].value = null;
                        data8[i].value = null;
                        data9[i].value = null;
                        totalsc = totalsc + sc1 + sc2 + sc3;
                        data10[0].value = totalsc;
                    }
                }
                else {
                    data6[i].value = null;
                    data7[i].value = null;
                    data8[i].value = null;
                    data9[i].value = null;
                }
            }
        }
    }
}
function cal12() {
    let data1 = document.querySelectorAll('select[name="TOTT4TM[]"]');
    let data2 = document.querySelectorAll('select[name="TOTT4P[]"]');
    let data3 = document.querySelectorAll('input[name="TOTT4BS[]"]');
    let data4 = document.querySelectorAll('input[name="TOTT4Q[]"]');
    let data5 = document.querySelectorAll('select[name="TOTT4UN[]"]');
    let data6 = document.querySelectorAll('input[name="TOTT4SC1[]"]');
    let data7 = document.querySelectorAll('input[name="TOTT4SC2[]"]');
    let data8 = document.querySelectorAll('input[name="TOTT4SC3[]"]');
    let data9 = document.querySelectorAll('input[name="TOTT4OTS[]"]');
    let data10 = document.querySelectorAll('input[name="TOTT4O4"]');
    let data11 = document.querySelectorAll('select[name="select23"]');
    let array = ["Motorcykler|Benzin|Person.km|0|0|0.183820|0.080997", "Motorcykler|Benzin|L|0|0|3.44971|0.152",
        "Personbiler|Benzin|Person.km|0|0|0.265141|0.0080997", "Personbiler|Diesel|Person.km|0|0|0.22106644|0.0042617854",
        "Personbiler|El|Person.km|0|0|0.085599617|0", "Personbiler|Benzin|L|0|0|3.79313301|0.152", "Personbiler|Diesel|L|0|0|4.284610773|0.0826",
        "Personbiler|El|kWh|0|0|0.5306971|0", "Personbiler|Hybrid (ikke opladnings-hybrid)|Person.km|0|0|0.2087881|0.0084664",
        "Personbiler|Hybrid (ikke opladnings-hybrid)|L|0|0|3.748440675|0.152", "Busser|Diesel|person.km|0|0|0.188313174439078|0.00267443598548237",
        "Busser|Diesel|L|0|0|5.81605553212087|0.0826", "Personbiler|Uspecificeret|Antal ansatte pr. år|0|0|1917.32046342871|64.5278532295862",
        "Tog|Uspecificeret|person.km|0|0|0.054|0", "Skib|Marine fuel oil|person.km|0|0|0.134694|0", "Skib|Marine fuel oil|L|0|0|3.72551|0"];
    let array1 = ["ikkeRFI|Fly - internationalt|Flybenzin|Person.km|0|0|0.11592|0", "ikkeRFI|Fly - nationalt|Flybenzin|Person.km|0|0|0.15711|0",
        "RFI|Fly - internationalt|Flybenzin|Person.km|0|0|0.20161|0", "RFI|Fly - nationalt|Flybenzin|Person.km|0|0|0.27221|0",
        "ikkeRFI|Fly - internationalt|Flybenzin|L|0|0|2.821974|0", "ikkeRFI|Fly - nationalt|Flybenzin|L|0|0|2.821974|0",
        "RFI|Fly - internationalt|Flybenzin|L|0|0|4.8651126|0", "RFI|Fly - nationalt|Flybenzin|L|0|0|4.8651126|0"];
    let a, tr, dm, qn, un, sc1, sc2, sc3, os, totalsc = 0, demo;
    for (let i = 0; i < data3.length; i++) {
        a = data11[0].value;
        tr = data1[i].value;
        dm = data2[i].value;
        qn = data4[i].value;
        un = data5[i].value;
        if (tr == "Fly - nationalt" || tr == "Fly - internationalt") {
            for (let j = 0; j < array1.length; j++) {
                sc1 = 0;
                sc2 = 0;
                sc3 = 0;
                os = 0;
                demo = array1[j].split('|');
                if (a == demo[0] && tr == demo[1] && dm == demo[2] && un == demo[3]) {
                    sc1 = Number(demo[4]);
                    sc2 = Number(demo[5]);
                    sc3 = Number(demo[6]);
                    os = Number(demo[7]);
                    sc1 = (sc1 * qn) / 1000;
                    sc2 = (sc2 * qn) / 1000;
                    sc3 = (sc3 * qn) / 1000;
                    os = (os * qn) / 1000;
                    if (qn != 0) {
                        data6[i].value = sc1;
                        data7[i].value = sc2;
                        data8[i].value = sc3;
                        data9[i].value = os;
                        totalsc = totalsc + sc1 + sc2 + sc3;
                        data10[0].value = totalsc;
                        break;
                    } else {
                        data6[i].value = null;
                        data7[i].value = null;
                        data8[i].value = null;
                        data9[i].value = null;
                        totalsc = totalsc + sc1 + sc2 + sc3;
                        data10[0].value = totalsc;
                    }
                }
                else {
                    data6[i].value = null;
                    data7[i].value = null;
                    data8[i].value = null;
                    data9[i].value = null;
                }
            }
        }
        else {
            for (let k = 0; k < array.length; k++) {
                sc1 = 0;
                sc2 = 0;
                sc3 = 0;
                os = 0;
                demo = array[k].split('|');
                if (tr == demo[0] && dm == demo[1] && un == demo[2]) {
                    sc1 = Number(demo[3]);
                    sc2 = Number(demo[4]);
                    sc3 = Number(demo[5]);
                    os = Number(demo[6]);
                    sc1 = (sc1 * qn) / 1000;
                    sc2 = (sc2 * qn) / 1000;
                    sc3 = (sc3 * qn) / 1000;
                    os = (os * qn) / 1000;
                    if (qn != 0) {
                        data6[i].value = sc1;
                        data7[i].value = sc2;
                        data8[i].value = sc3;
                        data9[i].value = os;
                        totalsc = totalsc + sc1 + sc2 + sc3;
                        data10[0].value = totalsc;
                        break;
                    } else {
                        data6[i].value = null;
                        data7[i].value = null;
                        data8[i].value = null;
                        data9[i].value = null;
                        totalsc = totalsc + sc1 + sc2 + sc3;
                        data10[0].value = totalsc;
                    }
                }
                else {
                    data6[i].value = null;
                    data7[i].value = null;
                    data8[i].value = null;
                    data9[i].value = null;
                }
            }
        }
    }

}
function cal13() {
    let data1 = document.querySelectorAll('select[name="TOTT5TM[]"]');
    let data2 = document.querySelectorAll('select[name="TOTT5P[]"]');
    // let data3 = document.querySelectorAll('input[name="TOTT4BS[]"]');
    let data4 = document.querySelectorAll('input[name="TOTT5AE[]"]');
    let data5 = document.querySelectorAll('select[name="TOTT5UN[]"]');
    let data6 = document.querySelectorAll('input[name="TOTT5SC1[]"]');
    let data7 = document.querySelectorAll('input[name="TOTT5SC2[]"]');
    let data8 = document.querySelectorAll('input[name="TOTT5SC3[]"]');
    let data9 = document.querySelectorAll('input[name="TOTT5OTS[]"]');
    let data10 = document.querySelectorAll('input[name="TOTT5O5"]');
    let data11 = document.querySelectorAll('select[name="select23"]');
    //RFI
    //ikkeRFI
    let array = ["Skib|Marine fuel oil|DKK|0|0|0.52622045|0", "Tog|Uspecificeret|DKK|0|0|0.11326204|0"];
    let array1 = ["ikkeRFI|Fly - internationalt|Flybenzin|DKK|0|0|0.16884727|0", "ikkeRFI|Fly - nationalt|Flybenzin|DKK|0|0|0.16884727|0", "RFI|Fly - internationalt|Flybenzin|DKK|0|0|0.246417556861467|0",
        "RFI|Fly - nationalt|Flybenzin|DKK|0|0|0.24641756861467|0"];
    let a, tr, dm, qn, un, sc1, sc2, sc3, os, totalsc = 0, demo;
    for (let i = 0; i < data4.length; i++) {
        a = data11[0].value;
        tr = data1[i].value;
        dm = data2[i].value;
        qn = data4[i].value;
        un = data5[i].value;
        if (tr == "Fly - nationalt" || tr == "Fly - internationalt") {
            for (let j = 0; j < array1.length; j++) {
                sc1 = 0;
                sc2 = 0;
                sc3 = 0;
                os = 0;
                demo = array1[j].split('|');
                if (a == demo[0] && tr == demo[1] && dm == demo[2] && un == demo[3]) {
                    sc1 = Number(demo[4]);
                    sc2 = Number(demo[5]);
                    sc3 = Number(demo[6]);
                    os = Number(demo[7]);
                    sc1 = (sc1 * qn) / 1000;
                    sc2 = (sc2 * qn) / 1000;
                    sc3 = (sc3 * qn) / 1000;
                    os = (os * qn) / 1000;
                    if (qn != 0) {
                        data6[i].value = sc1;
                        data7[i].value = sc2;
                        data8[i].value = sc3;
                        data9[i].value = os;
                        totalsc = totalsc + sc1 + sc2 + sc3;
                        data10[0].value = totalsc;
                        break;
                    } else {
                        data6[i].value = null;
                        data7[i].value = null;
                        data8[i].value = null;
                        data9[i].value = null;
                        totalsc = totalsc + sc1 + sc2 + sc3;
                        data10[0].value = totalsc;
                    }
                }
                else {
                    data6[i].value = null;
                    data7[i].value = null;
                    data8[i].value = null;
                    data9[i].value = null;
                }
            }
        }
        else {
            for (let k = 0; k < array.length; k++) {
                sc1 = 0;
                sc2 = 0;
                sc3 = 0;
                os = 0;
                demo = array[k].split('|');
                if (tr == demo[0] && dm == demo[1] && un == demo[2]) {
                    sc1 = Number(demo[3]);
                    sc2 = Number(demo[4]);
                    sc3 = Number(demo[5]);
                    os = Number(demo[6]);
                    sc1 = (sc1 * qn) / 1000;
                    sc2 = (sc2 * qn) / 1000;
                    sc3 = (sc3 * qn) / 1000;
                    os = (os * qn) / 1000;
                    if (qn != 0) {
                        data6[i].value = sc1;
                        data7[i].value = sc2;
                        data8[i].value = sc3;
                        data9[i].value = os;
                        totalsc = totalsc + sc1 + sc2 + sc3;
                        data10[0].value = totalsc;
                        break;
                    } else {
                        data6[i].value = null;
                        data7[i].value = null;
                        data8[i].value = null;
                        data9[i].value = null;
                        totalsc = totalsc + sc1 + sc2 + sc3;
                        data10[0].value = totalsc;
                    }
                }
                else {
                    data6[i].value = null;
                    data7[i].value = null;
                    data8[i].value = null;
                    data9[i].value = null;
                }
            }
        }
    }
}
function cal14() {
    let data1 = document.querySelectorAll('select[name="TOTT6TM[]"]');
    let data2 = document.querySelectorAll('select[name="TOTT6P[]"]');
    let data3 = document.querySelectorAll('input[name="TOTT6DEBS[]"]');
    let data4 = document.querySelectorAll('input[name="TOTT6Q[]"]');
    let data5 = document.querySelectorAll('select[name="TOTT6UN[]"]');
    let data6 = document.querySelectorAll('input[name="TOTT6SC1[]"]');
    let data7 = document.querySelectorAll('input[name="TOTT6SC2[]"]');
    let data8 = document.querySelectorAll('input[name="TOTT6SC3[]"]');
    let data9 = document.querySelectorAll('input[name="TOTT6OTS[]"]');
    let data10 = document.querySelectorAll('input[name="TOTT6O6"]');
    let data11 = document.querySelectorAll('select[name="select23"]');
    let array = ["Lastbiler|Diesel|km|0|0|1.06260001231039|0", "Lastbiler|Diesel|ton.km|0|0|0.1612|0", "Lastbiler|Diesel|L|0|0|3.93360463651251|0",
        "Lastbiler|LNG|km|0|0|0.858904835|0", "Lastbiler|CNG|km|0|0|0.932051111111111|0", "Lastbiler|CNG|km|0|0|0.932051111111111|0",
        "Lastbiler|LNG|L|0|0|1.76045350424488|0", "Lastbiler|CNG|L|0|0|0.594798753404916|0", "Personbiler|El|Km|0|0|0.0855963170256068|0",
        "Personbiler|Benzin|L|0|0|3.79313301768202|0.152", "Personbiler|Diesel|L|0|0|4.28461077395923|0.0826", "Personbiler|El|KWH|0|0|0.244697165558762|0"
        , "Personbiler|Hybrid (ikke opladnings-hybrid)|Km|0|0|0.2087881456|0.0084664", "Personbiler|Hybrid (ikke opladnings-hybrid)|L|0|0|3.74844067504488|0.152"
        , "Skib|Marine fuel oil|ton.km|0|0|0.019264|0", "Skib|Marine fuel oil|L|0|0|3.72551|0", "Tog|Uspecificeret|ton.km|0|0|0.03159|0",
        "Varebiler|Benzin|L|0|0|3.27356989322913|0.152", "Varebiler|Diesel|L|0|0|3.82252018455532|0.0826", "Varebiler|El|KWH|0|0|0.41295297951225|0"
        , "Varebiler|Benzin|ton.km|0|0|0.77404939|0.0400235809820182", "Varebiler|Diesel|ton.km|0|0|0.66347865|0.0158197436866865",
        "Varebiler|El|ton.km|0|0|0.31978763|0", "Varebiler|Benzin|km|0|0|0.306560743103772|0.0142343785138519", "Varebiler|Diesel|km|0|0|0.303829480618122|0.00656538458592244",
        "Varebiler|El|km|0|0|0.0887848905951338|0"];
    let array1 = ["ikkeRFI|Fly - internationalt|Flybenzin|ton.km|0|0|0.72358|0", "ikkeRFI|Fly - internationalt|Flybenzin|L|0|0|2.821974|0",
        "RFI|Fly - internationalt|Flybenzin|ton.km|0|0|1.25797|0", "RFI|Fly - internationalt|Flybenzin|L|0|0|4.8879546|0"];
    //RFI
    //ikkeRFI   
    let a, tr, dm, qn, un, sc1, sc2, sc3, os, totalsc = 0, demo;
    for (let i = 0; i < data4.length; i++) {
        a = data11[0].value;
        tr = data1[i].value;
        dm = data2[i].value;
        qn = data4[i].value;
        un = data5[i].value;
        if (tr == "Fly - nationalt" || tr == "Fly - internationalt") {
            for (let j = 0; j < array1.length; j++) {
                sc1 = 0;
                sc2 = 0;
                sc3 = 0;
                os = 0;
                demo = array1[j].split('|');
                if (a == demo[0] && tr == demo[1] && dm == demo[2] && un == demo[3]) {
                    sc1 = Number(demo[4]);
                    sc2 = Number(demo[5]);
                    sc3 = Number(demo[6]);
                    os = Number(demo[7]);
                    sc1 = (sc1 * qn) / 1000;
                    sc2 = (sc2 * qn) / 1000;
                    sc3 = (sc3 * qn) / 1000;
                    os = (os * qn) / 1000;
                    if (qn != 0) {
                        data6[i].value = sc1;
                        data7[i].value = sc2;
                        data8[i].value = sc3;
                        data9[i].value = os;
                        totalsc = totalsc + sc1 + sc2 + sc3;
                        data10[0].value = totalsc;
                        break;
                    } else {
                        data6[i].value = null;
                        data7[i].value = null;
                        data8[i].value = null;
                        data9[i].value = null;
                        totalsc = totalsc;
                        data10[0].value = totalsc;
                    }
                }
                else {
                    data6[i].value = null;
                    data7[i].value = null;
                    data8[i].value = null;
                    data9[i].value = null;
                }
            }
        }
        else {
            for (let k = 0; k < array.length; k++) {
                sc1 = 0;
                sc2 = 0;
                sc3 = 0;
                os = 0;
                demo = array[k].split('|');
                if (tr == demo[0] && dm == demo[1] && un == demo[2]) {
                    sc1 = Number(demo[3]);
                    sc2 = Number(demo[4]);
                    sc3 = Number(demo[5]);
                    os = Number(demo[6]);
                    sc1 = (sc1 * qn) / 1000;
                    sc2 = (sc2 * qn) / 1000;
                    sc3 = (sc3 * qn) / 1000;
                    os = (os * qn) / 1000;
                    if (qn != 0) {
                        data6[i].value = sc1;
                        data7[i].value = sc2;
                        data8[i].value = sc3;
                        data9[i].value = os;
                        totalsc = totalsc + sc1 + sc2 + sc3;
                        data10[0].value = totalsc;
                        break;
                    } else {
                        data6[i].value = null;
                        data7[i].value = null;
                        data8[i].value = null;
                        data9[i].value = null;
                        totalsc = totalsc + sc1 + sc2 + sc3;
                        data10[0].value = totalsc;
                    }
                }
                else {
                    data6[i].value = null;
                    data7[i].value = null;
                    data8[i].value = null;
                    data9[i].value = null;
                }
            }
        }
    }
}
function cal15() {
    let data1 = document.querySelectorAll('select[name="TOTT7TM[]"]');
    let data2 = document.querySelectorAll('select[name="TOTT7P[]"]');
    // let data3 = document.querySelectorAll('input[name="TOTT6DEBS[]"]');
    let data4 = document.querySelectorAll('input[name="TOTT7AE[]"]');
    let data5 = document.querySelectorAll('select[name="TOTT7UN[]"]');
    let data6 = document.querySelectorAll('input[name="TOTT7SC1[]"]');
    let data7 = document.querySelectorAll('input[name="TOTT7SC2[]"]');
    let data8 = document.querySelectorAll('input[name="TOTT7SC3[]"]');
    let data9 = document.querySelectorAll('input[name="TOTT7OTS[]"]');
    let data10 = document.querySelectorAll('input[name="TOTT7O7"]');
    let data11 = document.querySelectorAll('select[name="select23"]');
    let array = ["Tog|Uspecificeret|DKK|0|0|0.11326204|0", "Skib|Marine fuel oil|DKK|0|0|0.52622045|0", "Lastbiler|CNG|DKK|0|0|0.066269139|0"
        , "Lastbiler|LNG|DKK|0|0|0.066269139|0", "Lastbiler|Diesel|DKK|0|0|0.066269139|0"];
    let array1 = ["RFI|Fly - internationalt|Flybenzin|DKK|0|0|0.24641756861467|0",
        "ikkeRFI|Fly - internationalt|Flybenzin|DKK|0|0|0.16884727|0"];
    let a, tr, dm, qn, un, sc1, sc2, sc3, os, totalsc = 0, demo;
    for (let i = 0; i < data4.length; i++) {
        a = data11[0].value;
        tr = data1[i].value;
        dm = data2[i].value;
        qn = data4[i].value;
        un = data5[i].value;
        if (tr == "Fly - internationalt") {
            for (let j = 0; j < array1.length; j++) {
                sc1 = 0;
                sc2 = 0;
                sc3 = 0;
                os = 0;
                demo = array1[j].split('|');

                if (a == demo[0] && tr == demo[1] && dm == demo[2] && un == demo[3]) {

                    sc1 = Number(demo[4]);
                    sc2 = Number(demo[5]);
                    sc3 = Number(demo[6]);
                    os = Number(demo[7]);
                    sc1 = (sc1 * qn) / 1000;
                    sc2 = (sc2 * qn) / 1000;
                    sc3 = (sc3 * qn) / 1000;
                    os = (os * qn) / 1000;
                    if (qn != 0) {
                        data6[i].value = sc1;
                        data7[i].value = sc2;
                        data8[i].value = sc3;
                        data9[i].value = os;
                        totalsc = totalsc + sc1 + sc2 + sc3;
                        data10[0].value = totalsc;
                        break;
                    } else {
                        data6[i].value = null;
                        data7[i].value = null;
                        data8[i].value = null;
                        data9[i].value = null;
                        totalsc = totalsc;
                        data10[0].value = totalsc;
                    }
                }
                else {
                    data6[i].value = null;
                    data7[i].value = null;
                    data8[i].value = null;
                    data9[i].value = null;
                    data10[0].value = totalsc;
                }
            }
        }
        else {
            for (let k = 0; k < array.length; k++) {
                sc1 = 0;
                sc2 = 0;
                sc3 = 0;
                os = 0;
                demo = array[k].split('|');
                if (tr == demo[0] && dm == demo[1] && un == demo[2]) {
                    sc1 = Number(demo[3]);
                    sc2 = Number(demo[4]);
                    sc3 = Number(demo[5]);
                    os = Number(demo[6]);
                    sc1 = (sc1 * qn) / 1000;
                    sc2 = (sc2 * qn) / 1000;
                    sc3 = (sc3 * qn) / 1000;
                    os = (os * qn) / 1000;
                    if (qn != 0) {
                        data6[i].value = sc1;
                        data7[i].value = sc2;
                        data8[i].value = sc3;
                        data9[i].value = os;
                        totalsc = totalsc + sc1 + sc2 + sc3;
                        data10[0].value = totalsc;
                        break;
                    } else {
                        data6[i].value = null;
                        data7[i].value = null;
                        data8[i].value = null;
                        data9[i].value = null;
                        totalsc = totalsc + sc1 + sc2 + sc3 + os;
                        data10[0].value = totalsc;
                    }
                }
                else {
                    data6[i].value = null;
                    data7[i].value = null;
                    data8[i].value = null;
                    data9[i].value = null;
                    totalsc = totalsc;
                    data10[0].value = totalsc;
                }
            }
        }
    }
}
function cal16() {
    let data1 = document.querySelectorAll('select[name="TOTT8TM[]"]');
    let data2 = document.querySelectorAll('select[name="TOTT8P[]"]');
    let data3 = document.querySelectorAll('input[name="TOTT8BS[]"]');
    let data4 = document.querySelectorAll('input[name="TOTT8Q[]"]');
    let data5 = document.querySelectorAll('select[name="TOTT8UN[]"]');
    let data6 = document.querySelectorAll('input[name="TOTT8SC1[]"]');
    let data7 = document.querySelectorAll('input[name="TOTT8SC2[]"]');
    let data8 = document.querySelectorAll('input[name="TOTT8SC3[]"]');
    let data9 = document.querySelectorAll('input[name="TOTT8OTS[]"]');
    let data10 = document.querySelectorAll('input[name="TOTT8O8"]');
    let data11 = document.querySelectorAll('select[name="select23"]');
    // Personbiler    Diesel     Km

    let array = ["Personbiler|Benzin|km|0|0|0.265141674433017|0.00809979397532203", "Personbiler|Diesel|km|0|0|0.221066488499553|0.00426178547210011",
        "Personbiler|El|km|0|0|0.0855963170256068|0", "Personbiler|Benzin|L|0|0|3.79313301768202|0.152", "Personbiler|Diesel|L|0|0|4.28461077395923|0.0826",
        "Personbiler|El|kWh|0|0|0.244697165558762|0", "Personbiler|Hybrid (ikke opladnings-hybrid)|km|0|0|0.2087881456|0.0084664",
        "Personbiler|Hybrid (ikke opladnings-hybrid)|L|0|0|3.74844067504488|0.152"
        , "Skib|Marine fuel oil|ton.km|0|0|0.019264|0", "Skib|Marine fuel oil|L|0|0|3.72551|0", "Tog|Uspecificeret|ton.km|0|0|0.03159|0",
        "Varebiler|Benzin|L|0|0|3.27356989322913|0.152", "Varebiler|Diesel|L|0|0|3.82252018455532|0.0826", "Varebiler|El|kWh|0|0|0.41295297951225|0",
        "Varebiler|Benzin|ton.km|0|0|0.77404939|0.0400235809820182", "Varebiler|Diesel|ton.km|0|0|0.66347865|0.0158197436866865", "Varebiler|El|ton.km|0|0|0.31978763|0"
        , "Varebiler|Benzin|km|0|0|0.306560743103772|0.0142343785138519", "Varebiler|Diesel|km|0||0|0.303829480618122|0.00656538458592244",
        "Varebiler|El|km|0|0|0.0887848905951338|0", "Lastbiler|Diesel|km|0|0|1.06260001231039|0", "Lastbiler|Diesel|ton.km|0|0|0.1612|0.0033849665206326",
        "Lastbiler|Diesel|L|0|0|3.93360463651251|0.0826", "Lastbiler|LNG|km|0|0|0.858904835|0", "Lastbiler|CNG|km|0|0|0.932051111111111|0",
        "Lastbiler|LNG|L|0|0|1.76045350424488|0", "Lastbiler|CNG|L|0|0|0.594798753404916|0"];
    let array1 = ["ikkeRFI|Fly - internationalt|Flybenzin|ton.km|0|0|0.72358|0", "ikkeRFI|Fly - internationalt|Flybenzin|L|0|0|2.821974|0",
        "RFI|Fly - internationalt|Flybenzin|ton.km|0|0|1.25797|0", "RFI|Fly - internationalt|Flybenzin|L|0|0|4.8879546|0"];
    let a, tr, dm, qn, un, sc1, sc2, sc3, os, totalsc = 0, demo;
    for (let i = 0; i < data3.length; i++) {
        a = data11[0].value;
        tr = data1[i].value;
        dm = data2[i].value;
        qn = data4[i].value;
        un = data5[i].value;
        if (tr == "Fly - internationalt") {
            for (let j = 0; j < array1.length; j++) {
                sc1 = 0;
                sc2 = 0;
                sc3 = 0;
                os = 0;
                demo = array1[j].split('|');
                if (a == demo[0] && tr == demo[1] && dm == demo[2] && un == demo[3]) {

                    sc1 = Number(demo[4]);
                    sc2 = Number(demo[5]);
                    sc3 = Number(demo[6]);
                    os = Number(demo[7]);
                    sc1 = (sc1 * qn) / 1000;
                    sc2 = (sc2 * qn) / 1000;
                    sc3 = (sc3 * qn) / 1000;
                    os = (os * qn) / 1000;
                    if (qn != 0) {
                        data6[i].value = sc1;
                        data7[i].value = sc2;
                        data8[i].value = sc3;
                        data9[i].value = os;
                        totalsc = totalsc + sc1 + sc2 + sc3;
                        data10[0].value = totalsc;
                        break;
                    } else {
                        data6[i].value = null;
                        data7[i].value = null;
                        data8[i].value = null;
                        data9[i].value = null;
                        totalsc = totalsc;
                        data10[0].value = totalsc;
                    }
                }
                else {
                    data6[i].value = null;
                    data7[i].value = null;
                    data8[i].value = null;
                    data9[i].value = null;
                    data10[0].value = totalsc;
                }
            }
        }
        else {
            for (let k = 0; k < array.length; k++) {
                sc1 = 0;
                sc2 = 0;
                sc3 = 0;
                os = 0;
                demo = array[k].split('|');
                if (tr == demo[0] && dm == demo[1] && un == demo[2]) {
                    sc1 = Number(demo[3]);
                    sc2 = Number(demo[4]);
                    sc3 = Number(demo[5]);
                    os = Number(demo[6]);
                    sc1 = (sc1 * qn) / 1000;
                    sc2 = (sc2 * qn) / 1000;
                    sc3 = (sc3 * qn) / 1000;
                    os = (os * qn) / 1000;
                    if (qn != 0) {
                        data6[i].value = sc1;
                        data7[i].value = sc2;
                        data8[i].value = sc3;
                        data9[i].value = os;
                        totalsc = totalsc + sc1 + sc2 + sc3;
                        data10[0].value = totalsc;
                        break;
                    } else {

                        data6[i].value = null;
                        data7[i].value = null;
                        data8[i].value = null;
                        data9[i].value = null;
                        totalsc = totalsc + sc1 + sc2 + sc3;
                        data10[0].value = totalsc;
                    }
                }
                else {

                    data6[i].value = null;
                    data7[i].value = null;
                    data8[i].value = null;
                    data9[i].value = null;
                    totalsc = totalsc;
                    data10[0].value = totalsc;
                }
            }
        }
    }
}
function cal17() {
    let data1 = document.querySelectorAll('select[name="TOTT9TT[]"]');
    let data2 = document.querySelectorAll('select[name="TOTT9DM[]"]');
    let data3 = document.querySelectorAll('input[name="TOTT9B[]"]');
    let data4 = document.querySelectorAll('input[name="TOTT9B[]"]');
    let data5 = document.querySelectorAll('select[name="TOTT9UN[]"]');
    let data6 = document.querySelectorAll('input[name="TOTT9SC1[]"]');
    let data7 = document.querySelectorAll('input[name="TOTT9SC2[]"]');
    let data8 = document.querySelectorAll('input[name="TOTT9SC3[]"]');
    let data9 = document.querySelectorAll('input[name="TOTT9OTS[]"]');
    let data10 = document.querySelectorAll('input[name="TOTT9O9"]');
    let data11 = document.querySelectorAll('select[name="select23"]');
    let array = ["Tog|Uspecificeret|DKK|0|0|0.11326204|0", "Skib|Marine fuel oil|DKK|0|0|0.52622045|0", "Lastbiler|CNG|DKK|0|0|0.066269139|0"
        , "Lastbiler|LNG|DKK|0|0|0.066269139|0", "Lastbiler|Diesel|DKK|0|0|0.066269139|0"];
    let array1 = ["RFI|Fly - internationalt|Flybenzin|DKK|0|0|0.24641756861467|0",
        "ikkeRFI|Fly - internationalt|Flybenzin|DKK|0|0|0.16884727|0"];
    let a, tr, dm, qn, un, sc1, sc2, sc3, os, totalsc = 0, demo;
    for (let i = 0; i < data3.length; i++) {
        a = data11[0].value;
        tr = data1[i].value;
        dm = data2[i].value;
        qn = data4[i].value;
        un = data5[i].value;
        if (tr == "Fly - internationalt") {
            for (let j = 0; j < array1.length; j++) {
                sc1 = 0;
                sc2 = 0;
                sc3 = 0;
                os = 0;
                demo = array1[j].split('|');

                if (a == demo[0] && tr == demo[1] && dm == demo[2] && un == demo[3]) {

                    sc1 = Number(demo[4]);
                    sc2 = Number(demo[5]);
                    sc3 = Number(demo[6]);
                    os = Number(demo[7]);
                    sc1 = (sc1 * qn) / 1000;
                    sc2 = (sc2 * qn) / 1000;
                    sc3 = (sc3 * qn) / 1000;
                    os = (os * qn) / 1000;
                    if (qn != 0) {
                        data6[i].value = sc1;
                        data7[i].value = sc2;
                        data8[i].value = sc3;
                        data9[i].value = os;
                        totalsc = totalsc + sc1 + sc2 + sc3;
                        data10[0].value = totalsc;
                        break;
                    } else {
                        data6[i].value = null;
                        data7[i].value = null;
                        data8[i].value = null;
                        data9[i].value = null;
                        totalsc = totalsc;
                        data10[0].value = totalsc;
                    }
                }
                else {
                    data6[i].value = null;
                    data7[i].value = null;
                    data8[i].value = null;
                    data9[i].value = null;
                    data10[0].value = totalsc;
                }
            }
        }
        else {
            for (let k = 0; k < array.length; k++) {
                sc1 = 0;
                sc2 = 0;
                sc3 = 0;
                os = 0;
                demo = array[k].split('|');
                if (tr == demo[0] && dm == demo[1] && un == demo[2]) {
                    sc1 = Number(demo[3]);
                    sc2 = Number(demo[4]);
                    sc3 = Number(demo[5]);
                    os = Number(demo[6]);
                    sc1 = (sc1 * qn) / 1000;
                    sc2 = (sc2 * qn) / 1000;
                    sc3 = (sc3 * qn) / 1000;
                    os = (os * qn) / 1000;
                    if (qn != 0) {
                        data6[i].value = sc1;
                        data7[i].value = sc2;
                        data8[i].value = sc3;
                        data9[i].value = os;
                        totalsc = totalsc + sc1 + sc2 + sc3;
                        data10[0].value = totalsc;
                        break;
                    } else {
                        data6[i].value = null;
                        data7[i].value = null;
                        data8[i].value = null;
                        data9[i].value = null;
                        totalsc = totalsc + sc1 + sc2 + sc3;
                        data10[0].value = totalsc;
                    }
                }
                else {
                    data6[i].value = null;
                    data7[i].value = null;
                    data8[i].value = null;
                    data9[i].value = null;
                    totalsc = totalsc;
                    data10[0].value = totalsc;
                }
            }
        }
    }

}
function totals3(a, b, c, d, e) {
    let data = document.querySelectorAll(`input[name="${a}"]`);
    let data1 = document.querySelectorAll(`input[name="${b}"]`);
    let data2 = document.querySelectorAll(`input[name="${c}"]`);
    let data3 = document.querySelectorAll(`input[name="${d}"]`);
    let data4 = document.querySelectorAll(`input[name="${e}"]`);
    let total = 0, sc1 = 0, sc2 = 0, sc3 = 0, os = 0;
    for (let i = 0; i < data1.length; i++) {
        sc1 = Number(data[i].value);
        sc2 = Number(data1[i].value);
        sc3 = Number(data2[i].value);
        os = Number(data3[i].value);
        if (sc1 == null) {
            sc1 = 0;
        }
        else if (sc2 == null) {
            sc2 = 0;
        }
        else if (sc3 == null) {
            sc3 = 0;
        }
        else if (os == null) {
            os = 0;
        }
        total = total + sc1 + sc2 + sc3;
    }
    data4[0].value = total;
}
function cal18() {
    let data1 = document.querySelectorAll('select[name="WRRT1WT[]"]');
    let data2 = document.querySelectorAll('select[name="WRRT1WM[]"]');
    // let data3 = document.querySelectorAll('input[name="TOTT6DEBS[]"]');
    let data4 = document.querySelectorAll('input[name="WRRT1Q[]"]');
    let data5 = document.querySelectorAll('select[name="WRRT1UN[]"]');
    let data6 = document.querySelectorAll('input[name="WRRT1SC1[]"]');
    let data7 = document.querySelectorAll('input[name="WRRT1SC2[]"]');
    let data8 = document.querySelectorAll('input[name="WRRT1SC3[]"]');
    let data9 = document.querySelectorAll('input[name="WRRT1OTS[]"]');
    let data10 = document.querySelectorAll('input[name="WRRT1O1"]');
    let array = ["Kobber|Uspecificeret|kg|0|0|0|-7.1161888855", "Aluminium|Uspecificeret|kg|0|0|0|-12.6168729955", "Stål og jern|Uspecificeret|kg|0|0|0|-2.4918533655",
        "Ædelmetaller|Uspecificeret|kg|0|0|0|-12111.6410954455", "Bly|Uspecificeret|kg|0|0|0|-0.830707893027895", "Ikke-jernholdige metaller|Uspecificeret|kg|0|0|0|-1.99410846102117",
        "Papir og pap|Uspecificeret|kg|0|0|0.0488978200775068|-0.782923136355443", "Plast|Uspecificeret|kg|0|0|0.0281574383069528|0.582516455148828",
        "Glas|Uspecificeret|kg|0|0|0.0000035313454324369|-0.950809807888521", "Beton|Uspecificeret|kg|0|0|0.0284507283279341|-0.00233559825762967",
        "Træ|Uspecificeret|kg|0|0|0.0291386577347764|-0.16664636176069", "Fødevarer, organisk|Uspecificeret|kg|0|0|0.198575636610147|-0.0315377758513439",
        "Farligt affald|Uspecificeret|kg|0|0|0.000282248003613742|2.03268096872954", "Tekstiler|Uspecificeret|kg|0|0|1.20120619682364|-0.0143956216138696",
        "Elektronisk|Uspecificeret|kg|0|0|0|-7.1317240408", "Dagrenovation|Uspecificeret|kg|0|0|0|0.12563314", "Kobber|Deponi|kg|0|0|0.076486342|0",
        "Aluminium|Deponi|kg|0|0|0.076486342|0", "Stål og jern|Deponi|kg|0|0|0.076486342|0", "Ædelmetaller|Deponi|kg|0|0|0.076486342|0", "Bly|Deponi|kg|0|0|0.076486342|0",
        "Ikke-jernholdige metaller|Deponi|kg|0|0|0.076486342|0", "Papir og pap|Deponi|kg|0|0|2.3080845|0", "Plast|Deponi|kg|0|0|0.44353942|0",
        "Glas|Deponi|kg|0|0|0.076486342|0", "Beton|Deponi|kg|0|0|0.076486342|0", "Træ|Deponi|kg|0|0|0.40805918|0", "Fødevarer, organisk|Deponi|kg|0|0|2.1468811|0",
        "Farligt affald|Deponi|kg|0|0|0.076486342|0", "Tekstiler|Deponi|kg|0|0|1.3781844|0", "Kobber|Forbrænding|kg|0|0|0|0.59109109",
        "Aluminium|Forbrænding|kg|0|0|0|0.59109109", "Stål og jern|Forbrænding|kg|0|0|0|0.59109109", "Ædelmetaller|Forbrænding|kg|0|0|0|0.59109109",
        "Bly|Forbrænding|kg|0|0|0|0.59109109", "Ikke-jernholdige metaller|Forbrænding|kg|0|0|0|0.59109109", "Papir og pap|Forbrænding|kg|0|0|0|-0.32076347",
        "Plast|Forbrænding|kg|0|0|0|1.16893810", "Glas|Forbrænding|kg|0|0|0|0.59109109", "Beton|Forbrænding|kg|0|0|0|0.59109109", "Træ|Forbrænding|kg|0|0|0|-0.20779107",
        "Fødevarer, organisk|Forbrænding|kg|0|0|0|-0.03581703", "Farligt affald|Forbrænding|kg|0|0|0|2.0402097", "Tekstiler|Forbrænding|kg|0|0|0|-0.11210319",
        "Dagrenovation|Forbrænding|kg|0|0|0|0.12563314", "Kobber|Genanvendelse|kg|0|0|0|-7.52183520", "Aluminium|Genanvendelse|kg|0|0|0|-13.3120290", "Stål og jern|Genanvendelse|kg|0|0|0|-2.65411360",
        "Ædelmetaller|Genanvendelse|kg|0|0|0|-12749.12700", "Bly|Genanvendelse|kg|0|0|0|-1.60468120", "Ikke-jernholdige metaller|Genanvendelse|kg|0|0|0-3367573800",
        "Papir og pap|Genanvendelse|kg|0|0|0|-0.9854448300", "Plast|Genanvendelse|kg|0.00|0.00|0.0|-1.7287130000", "Glas|Genanvendelse|kg|0.00|0.00|0|-0.3121083200",
        "Beton|Genanvendelse|kg|0.00|0.00|0|-0.0037189359", "Træ|Genanvendelse|kg|0.00|0.00|0|-0.140400550", "Elektronisk|Genanvendelse|kg|0.00|0.00|0|-2.9041816000",
        "Papir og pap|Bioforgasning|kg|0.00|0.00|2.029388100|0", "Fødevarer, organisk|Bioforgasning|kg|0.0|0|1.094877800|0", "Fødevarer, organisk|Kompostering|kg|0|0|1.250302800|0",
        "Spildevand|Spildevand rensning|kg|0|0.0|0.009146778|0", "Kobber|Uspecificeret|Ton|0|0|0|-7116.18888550", "Aluminium|Uspecificeret|Ton|0|0|0-12616.872995500",
        "Stål og jern|Uspecificeret|Ton|0|0|0|-2491.853365500", "Ædelmetaller|Uspecificeret|Ton|0.0|0|0|-12111641.0954455000", "Bly|Uspecificeret|Ton|0|0|0|-830.7078930279",
        "Ikke-jernholdige metaller|Uspecificeret|Ton|0|0|0.355044720|-1994.1084610212", "Papir og pap|Uspecificeret|Ton|0.00|0.00|48.897820078|-782.9231363554",
        "Plast|Uspecificeret|Ton|0|0|28.157438307|582.5164551488", "Glas|Uspecificeret|Ton|0.00|0.00|0.003531345|-950.8098078885", "Beton|Uspecificeret|Ton|0.00|0.00|28.450728328|-2.3355982576",
        "Træ|Uspecificeret|Ton|0.00|0.00|29.138657735|-166.6463617607", "Fødevarer, organisk|Uspecificeret|Ton|0.00|0.00|198.575636610|-31.5377758513",
        "Farligt affald|Uspecificeret|Ton|0.00|0.00|0.282248004|2032.6809687295", "Tekstiler|Uspecificeret|Ton|0.00|0.00|1,201.206196824|-14.3956216139",
        "Elektronisk|Uspecificeret|Ton|0.00|0.00|0|-7131.7240408000", "Dagrenovation|Uspecificeret|Ton|0.00|0.00|0|125.6331400000", "Kobber|Deponi|Ton|0.00|0.00|76.486342000|0",
        "Aluminium|Deponi|Ton|0.00|0.00|76.486342000|0", "Stål og jern|Deponi|Ton|0.00|0.00|76.486342000|0", "Ædelmetaller|Deponi|Ton|0|0|76.486342000|0",
        "Bly|Deponi|Ton|0|0|76.48634200|00", "Ikke-jernholdige metaller|Deponi|Ton|0|0|76.486342000|0", "Papir og pap|Deponi|Ton|0.00|0.00|2308.084500000|0",
        "Plast|Deponi|Ton|0|0|443.539420000|00", "Glas|Deponi|Ton|0|0|76.486342000|0", "Beton|Deponi|Ton|0|0|76.486342000|0", "Træ|Deponi|Ton|0|0|408.059180000|0",
        "Fødevarer, organisk|Deponi|Ton|0|0|2146.88110|0", "Farligt affald|Deponi|Ton|0|0|76.4863420|0", "Tekstiler|Deponi|Ton|0.00|0.00|1,378.184400000|0000",
        "Kobber|Forbrænding|Ton|0.00|0.00|0|591.0910900000", "Aluminium|Forbrænding|Ton|0.00|0.00|0|591.091090", "Stål og jern|Forbrænding|Ton|0|0|0|591.0910900000",
        "Ædelmetaller|Forbrænding|Ton|0|0|0|591.0910900000", "Bly|Forbrænding|Ton|0.00|0.00|00|591.091090", "Ikke-jernholdige metaller|Forbrænding|Ton|0.00|0.00|0|591.091090",
        "Papir og pap|ForbrændingTon|0.00|0.00|0|-320.7634700000", "Plast|Forbrænding|Ton|0.00|0.00|0|1168.938100",
        "Glas|Forbrænding|Ton|0.00|0.00|0.0|591.0910900", "Beton|Forbrænding|Ton|0.0|0|000|591.091090", "Træ|Forbrænding|Ton|0|0|0|-207.791070",
        "Fødevarer, organisk|Forbrænding|Ton|0.00|0.00|0|-35.8170380", "Farligt affald|Forbrænding|Ton|0.00|0.00|0|2040.2097000000",
        "Tekstiler|Forbrænding|Ton|0.00|0.00|000|-112.1031900000", "Dagrenovation|Forbrænding|Ton|0.00|0.00|0|125.6331400000",
        "Kobber|Genanvendelse|Ton|0.00|0.00|0|-7521.8352000000", "Aluminium|Genanvendelse|Ton|0.00|0.00|00|-13312.0290000",
        "Stål og jern|Genanvendelse|Ton|0.00|0.00|0|-2654.1136000000", "Ædelmetaller|Genanvendelse|Ton|0.00|0.00|0|-12749127.00",
        "Bly|Genanvendelse|Ton|0.00|0.00|0|-1604.6812000", "Ikke-jernholdige metaller|Genanvendelse|Ton|0.00|0.00|0|-3367.5738",
        "Papir og pap|Genanvendelse|Ton|0.00|0.00|0|-985.4448300000", "Plast|Genanvendelse|Ton|0.00|0.00|000|-1728.7130000",
        "Glas|Genanvendelse|Ton|0.00|0.00|0|-312.1083200", "Beton|Genanvendelse|Ton|0.00|0.00|0|-3.7189359000",
        "Træ|Genanvendelse|Ton|0.00|0.00|0|-140.4005500000", "Elektronisk|Genanvendelse|Ton|0.00|0.00|0|-2904.18160",
        "Papir og pap|Bioforgasning|Ton|0.00|0.00|2,029.388100000|0.0000", "Fødevarer, organisk|Bioforgasning|Ton|0.00|0.00|1,094.877800000|00",
        "Fødevarer, organisk|Kompostering|Ton|0.00|0.00|1,250.302800000|00", "Spildevand|Spildevand rensning|Ton|0.00|0.00|9.146778000|0.000",
        "Glas|Genbrug|kg|0|0|0|-1.00005320", "Tekstiler|Genbrug|kg|0|0|0|-13.98648900", "Elektronisk|Genbrug|kg|0.00|0.00|0|-22.3859440000",
        "Træ|Genbrug|kg|0|0|0|-1.6600259000", "Tekstiler|Genanvendelse|kg|0.00|0.00|0|-13.9864890", "Glas|Genbrug|Ton|0.00|0.00|0|-1000.053200",
        "Tekstiler|Genbrug|Ton|0|0|0|-13986.489000", "Elektronisk|Genbrug|Ton|0|0|0|-22385.944000", "Træ|Genbrug|Ton|0|0|0|-1660.02590",
        "Tekstiler|Genanvendelse|Ton|0|0|0|-13,986.49"];
    let tr, dm, qn, un, sc1, sc2, sc3, os, totalsc = 0, demo;
    for (let i = 0; i < data1.length; i++) {
        tr = data1[i].value;
        dm = data2[i].value;
        qn = data4[i].value;
        un = data5[i].value;
        for (let j = 0; j < array.length; j++) {
            sc1 = 0;
            sc2 = 0;
            sc3 = 0;
            os = 0;
            demo = array[j].split('|');
            if (tr == demo[0] && dm == demo[1] && un == demo[2]) {
                sc1 = Number(demo[3]);
                sc2 = Number(demo[4]);
                sc3 = Number(demo[5]);
                os = Number(demo[6]);
                sc1 = (sc1 * qn) / 1000;
                sc2 = (sc2 * qn) / 1000;
                sc3 = (sc3 * qn) / 1000;
                os = (os * qn) / 1000;
                if (qn != 0) {
                    data6[i].value = sc1;
                    data7[i].value = sc2;
                    data8[i].value = sc3;
                    data9[i].value = os;
                    totalsc = totalsc + sc1 + sc2 + sc3;
                    data10[0].value = totalsc;
                    break;
                } else {
                    data6[i].value = null;
                    data7[i].value = null;
                    data8[i].value = null;
                    data9[i].value = null;
                    totalsc = totalsc + sc1 + sc2 + sc3;
                    data10[0].value = totalsc;
                }
            }
            else {
                data6[i].value = null;
                data7[i].value = null;
                data8[i].value = null;
                data9[i].value = null;
                totalsc = totalsc;
                data10[0].value = totalsc;
            }
        }
    }
    data10[0].value = totalsc;
}
function totalso(a, b) {
    let data = document.querySelectorAll(`input[name="${a}"]`);
    let data1 = document.querySelectorAll(`input[name="${b}"]`);
    let sc3 = 0, total = 0;
    for (let i = 0; i < data.length; i++) {
        if (data[i] == null) {
            sc3 = 0;
        }
        else {
            sc3 = Number(data[i].value);
        }
        total = total + sc3;

    }
    data1[0].value = total;
}
function cal19() {
    let data = document.querySelectorAll('select[name="SPPT2ET[]"]');
    let data1 = document.querySelectorAll('input[name="SPPT2Q[]"]');
    let data2 = document.querySelectorAll('select[name="SPPT2UN[]"]');
    let data3 = document.querySelectorAll('input[name="SPPT2SC3[]"]');
    let data4 = document.querySelectorAll('input[name="SPPT2OTS[]"]');
    let data5 = document.querySelectorAll('input[name="SPPT2O2"]');
    let sc3 = 0, total = 0, un, tr, qn, demo, os;
    let array = ["Elektricitet|kWh|0|0|0.189697166|0", "Elektricitet|MWh|0|0|189.697165559|0", "Elektricitet|MJ|0|0|682.909796012|0",
        "Vand|L|0|0|0.000767822|0", "Diesel|L|2.601346130|0|0.617279500|0.08", "Benzin|L|2.170701000|0|0.590307000|0.15",
        "Fyringsolie|L|3.154182560|0|0.603460|0", "Naturgas|Nm3|2008.036622333|0|363.060412506|139.87"];
    for (let i = 0; i < data1.length; i++) {
        sc3 = 0;
        os = 0;
        tr = data[i].value;
        un = data2[i].value;
        for (let j = 0; j < array.length; j++) {
            demo = array[j].split('|');
            if (tr == demo[0] && un == demo[1]) {
                if (data1[i] == null) {
                    qn = 0;
                    data3[i].value = null
                    data4[i].value = null;
                }
                else {
                    qn = data1[i].value;
                }
                sc3 = (qn * demo[4]) / 1000;
                os = (qn * demo[5]) / 1000;
                data3[i].value = sc3;
                data4[i].value = os;
                total = total + sc3;
                break;
            }
            else if (data1[i] == null) {
                data3[i].value = null
                data4[i].value = null;
                total = total;
            }
            else {
                data3[i].value = null
                data4[i].value = null;
                total = total;
            }

        }
    }
    data5[0].value = total;
}
function cal20() {
    let data1 = document.querySelectorAll('select[name="SOOT3WT[]"]');
    let data2 = document.querySelectorAll('select[name="SOOT3WM[]"]');
    // let data3 = document.querySelectorAll('input[name="TOTT6DEBS[]"]');
    let data4 = document.querySelectorAll('input[name="SOOT3Q[]"]');
    let data5 = document.querySelectorAll('select[name="SOOT3UN[]"]');
    // let data6 = document.querySelectorAll('input[name="WRRT1SC1[]"]');
    // let data7 = document.querySelectorAll('input[name="WRRT1SC2[]"]');
    let data8 = document.querySelectorAll('input[name="SOOT3SC3[]"]');
    let data9 = document.querySelectorAll('input[name="SOOT3OTS[]"]');
    let data10 = document.querySelectorAll('input[name="SPPT3O3"]');
    let array = ["Kobber|Uspecificeret|kg|0|0|0|-7.1161888855", "Aluminium|Uspecificeret|kg|0|0|0|-12.6168729955", "Stål og jern|Uspecificeret|kg|0|0|0|-2.4918533655",
        "Ædelmetaller|Uspecificeret|kg|0|0|0|-12111.6410954455", "Bly|Uspecificeret|kg|0|0|0|-0.830707893027895", "Ikke-jernholdige metaller|Uspecificeret|kg|0|0|0|-1.99410846102117",
        "Papir og pap|Uspecificeret|kg|0|0|0.0488978200775068|-0.782923136355443", "Plast|Uspecificeret|kg|0|0|0.0281574383069528|0.582516455148828",
        "Glas|Uspecificeret|kg|0|0|0.0000035313454324369|-0.950809807888521", "Beton|Uspecificeret|kg|0|0|0.0284507283279341|-0.00233559825762967",
        "Træ|Uspecificeret|kg|0|0|0.0291386577347764|-0.16664636176069", "Fødevarer, organisk|Uspecificeret|kg|0|0|0.198575636610147|-0.0315377758513439",
        "Farligt affald|Uspecificeret|kg|0|0|0.000282248003613742|2.03268096872954", "Tekstiler|Uspecificeret|kg|0|0|1.20120619682364|-0.0143956216138696",
        "Elektronisk|Uspecificeret|kg|0|0|0|-7.1317240408", "Dagrenovation|Uspecificeret|kg|0|0|0|0.12563314", "Kobber|Deponi|kg|0|0|0.076486342|0",
        "Aluminium|Deponi|kg|0|0|0.076486342|0", "Stål og jern|Deponi|kg|0|0|0.076486342|0", "Ædelmetaller|Deponi|kg|0|0|0.076486342|0", "Bly|Deponi|kg|0|0|0.076486342|0",
        "Ikke-jernholdige metaller|Deponi|kg|0|0|0.076486342|0", "Papir og pap|Deponi|kg|0|0|2.3080845|0", "Plast|Deponi|kg|0|0|0.44353942|0",
        "Glas|Deponi|kg|0|0|0.076486342|0", "Beton|Deponi|kg|0|0|0.076486342|0", "Træ|Deponi|kg|0|0|0.40805918|0", "Fødevarer, organisk|Deponi|kg|0|0|2.1468811|0",
        "Farligt affald|Deponi|kg|0|0|0.076486342|0", "Tekstiler|Deponi|kg|0|0|1.3781844|0", "Kobber|Forbrænding|kg|0|0|0|0.59109109",
        "Aluminium|Forbrænding|kg|0|0|0|0.59109109", "Stål og jern|Forbrænding|kg|0|0|0|0.59109109", "Ædelmetaller|Forbrænding|kg|0|0|0|0.59109109",
        "Bly|Forbrænding|kg|0|0|0|0.59109109", "Ikke-jernholdige metaller|Forbrænding|kg|0|0|0|0.59109109", "Papir og pap|Forbrænding|kg|0|0|0|-0.32076347",
        "Plast|Forbrænding|kg|0|0|0|1.16893810", "Glas|Forbrænding|kg|0|0|0|0.59109109", "Beton|Forbrænding|kg|0|0|0|0.59109109", "Træ|Forbrænding|kg|0|0|0|-0.20779107",
        "Fødevarer, organisk|Forbrænding|kg|0|0|0|-0.03581703", "Farligt affald|Forbrænding|kg|0|0|0|2.0402097", "Tekstiler|Forbrænding|kg|0|0|0|-0.11210319",
        "Dagrenovation|Forbrænding|kg|0|0|0|0.12563314", "Kobber|Genanvendelse|kg|0|0|0|-7.52183520", "Aluminium|Genanvendelse|kg|0|0|0|-13.3120290", "Stål og jern|Genanvendelse|kg|0|0|0|-2.65411360",
        "Ædelmetaller|Genanvendelse|kg|0|0|0|-12749.12700", "Bly|Genanvendelse|kg|0|0|0|-1.60468120", "Ikke-jernholdige metaller|Genanvendelse|kg|0|0|0-3367573800",
        "Papir og pap|Genanvendelse|kg|0|0|0|-0.9854448300", "Plast|Genanvendelse|kg|0.00|0.00|0.0|-1.7287130000", "Glas|Genanvendelse|kg|0.00|0.00|0|-0.3121083200",
        "Beton|Genanvendelse|kg|0.00|0.00|0|-0.0037189359", "Træ|Genanvendelse|kg|0.00|0.00|0|-0.140400550", "Elektronisk|Genanvendelse|kg|0.00|0.00|0|-2.9041816000",
        "Papir og pap|Bioforgasning|kg|0.00|0.00|2.029388100|0", "Fødevarer, organisk|Bioforgasning|kg|0.0|0|1.094877800|0", "Fødevarer, organisk|Kompostering|kg|0|0|1.250302800|0",
        "Spildevand|Spildevand rensning|kg|0|0.0|0.009146778|0", "Kobber|Uspecificeret|Ton|0|0|0|-7116.18888550", "Aluminium|Uspecificeret|Ton|0|0|0-12616.872995500",
        "Stål og jern|Uspecificeret|Ton|0|0|0|-2491.853365500", "Ædelmetaller|Uspecificeret|Ton|0.0|0|0|-12111641.0954455000", "Bly|Uspecificeret|Ton|0|0|0|-830.7078930279",
        "Ikke-jernholdige metaller|Uspecificeret|Ton|0|0|0.355044720|-1994.1084610212", "Papir og pap|Uspecificeret|Ton|0.00|0.00|48.897820078|-782.9231363554",
        "Plast|Uspecificeret|Ton|0|0|28.157438307|582.5164551488", "Glas|Uspecificeret|Ton|0.00|0.00|0.003531345|-950.8098078885", "Beton|Uspecificeret|Ton|0.00|0.00|28.450728328|-2.3355982576",
        "Træ|Uspecificeret|Ton|0.00|0.00|29.138657735|-166.6463617607", "Fødevarer, organisk|Uspecificeret|Ton|0.00|0.00|198.575636610|-31.5377758513",
        "Farligt affald|Uspecificeret|Ton|0.00|0.00|0.282248004|2032.6809687295", "Tekstiler|Uspecificeret|Ton|0.00|0.00|1,201.206196824|-14.3956216139",
        "Elektronisk|Uspecificeret|Ton|0.00|0.00|0|-7131.7240408000", "Dagrenovation|Uspecificeret|Ton|0.00|0.00|0|125.6331400000", "Kobber|Deponi|Ton|0.00|0.00|76.486342000|0",
        "Aluminium|Deponi|Ton|0.00|0.00|76.486342000|0", "Stål og jern|Deponi|Ton|0.00|0.00|76.486342000|0", "Ædelmetaller|Deponi|Ton|0|0|76.486342000|0",
        "Bly|Deponi|Ton|0|0|76.48634200|00", "Ikke-jernholdige metaller|Deponi|Ton|0|0|76.486342000|0", "Papir og pap|Deponi|Ton|0.00|0.00|2308.084500000|0",
        "Plast|Deponi|Ton|0|0|443.539420000|00", "Glas|Deponi|Ton|0|0|76.486342000|0", "Beton|Deponi|Ton|0|0|76.486342000|0", "Træ|Deponi|Ton|0|0|408.059180000|0",
        "Fødevarer, organisk|Deponi|Ton|0|0|2146.88110|0", "Farligt affald|Deponi|Ton|0|0|76.4863420|0", "Tekstiler|Deponi|Ton|0.00|0.00|1,378.184400000|0000",
        "Kobber|Forbrænding|Ton|0.00|0.00|0|591.0910900000", "Aluminium|Forbrænding|Ton|0.00|0.00|0|591.091090", "Stål og jern|Forbrænding|Ton|0|0|0|591.0910900000",
        "Ædelmetaller|Forbrænding|Ton|0|0|0|591.0910900000", "Bly|Forbrænding|Ton|0.00|0.00|00|591.091090", "Ikke-jernholdige metaller|Forbrænding|Ton|0.00|0.00|0|591.091090",
        "Papir og pap|ForbrændingTon|0.00|0.00|0|-320.7634700000", "Plast|Forbrænding|Ton|0.00|0.00|0|1168.938100",
        "Glas|Forbrænding|Ton|0.00|0.00|0.0|591.0910900", "Beton|Forbrænding|Ton|0.0|0|000|591.091090", "Træ|Forbrænding|Ton|0|0|0|-207.791070",
        "Fødevarer, organisk|Forbrænding|Ton|0.00|0.00|0|-35.8170380", "Farligt affald|Forbrænding|Ton|0.00|0.00|0|2040.2097000000",
        "Tekstiler|Forbrænding|Ton|0.00|0.00|000|-112.1031900000", "Dagrenovation|Forbrænding|Ton|0.00|0.00|0|125.6331400000",
        "Kobber|Genanvendelse|Ton|0.00|0.00|0|-7521.8352000000", "Aluminium|Genanvendelse|Ton|0.00|0.00|00|-13312.0290000",
        "Stål og jern|Genanvendelse|Ton|0.00|0.00|0|-2654.1136000000", "Ædelmetaller|Genanvendelse|Ton|0.00|0.00|0|-12749127.00",
        "Bly|Genanvendelse|Ton|0.00|0.00|0|-1604.6812000", "Ikke-jernholdige metaller|Genanvendelse|Ton|0.00|0.00|0|-3367.5738",
        "Papir og pap|Genanvendelse|Ton|0.00|0.00|0|-985.4448300000", "Plast|Genanvendelse|Ton|0.00|0.00|000|-1728.7130000",
        "Glas|Genanvendelse|Ton|0.00|0.00|0|-312.1083200", "Beton|Genanvendelse|Ton|0.00|0.00|0|-3.7189359000",
        "Træ|Genanvendelse|Ton|0.00|0.00|0|-140.4005500000", "Elektronisk|Genanvendelse|Ton|0.00|0.00|0|-2904.18160",
        "Papir og pap|Bioforgasning|Ton|0.00|0.00|2,029.388100000|0.0000", "Fødevarer, organisk|Bioforgasning|Ton|0.00|0.00|1,094.877800000|00",
        "Fødevarer, organisk|Kompostering|Ton|0.00|0.00|1,250.302800000|00", "Spildevand|Spildevand rensning|Ton|0.00|0.00|9.146778000|0.000",
        "Glas|Genbrug|kg|0|0|0|-1.00005320", "Tekstiler|Genbrug|kg|0|0|0|-13.98648900", "Elektronisk|Genbrug|kg|0.00|0.00|0|-22.3859440000",
        "Træ|Genbrug|kg|0|0|0|-1.6600259000", "Tekstiler|Genanvendelse|kg|0.00|0.00|0|-13.9864890", "Glas|Genbrug|Ton|0.00|0.00|0|-1000.053200",
        "Tekstiler|Genbrug|Ton|0|0|0|-13986.489000", "Elektronisk|Genbrug|Ton|0|0|0|-22385.944000", "Træ|Genbrug|Ton|0|0|0|-1660.02590",
        "Tekstiler|Genanvendelse|Ton|0|0|0|-13,986.49"];
    let tr, dm, qn, un, sc1, sc2, sc3, os, totalsc = 0, demo;
    for (let i = 0; i < data1.length; i++) {
        tr = data1[i].value;
        dm = data2[i].value;
        qn = data4[i].value;
        un = data5[i].value;
        for (let j = 0; j < array.length; j++) {
            sc1 = 0;
            sc2 = 0;
            sc3 = 0;
            os = 0;
            demo = array[j].split('|');
            if (tr == demo[0] && dm == demo[1] && un == demo[2]) {
                // sc1 = Number(demo[3]);
                // sc2 = Number(demo[4]);
                sc3 = Number(demo[5]);
                os = Number(demo[6]);
                // sc1 = (sc1 * qn) / 1000;
                // sc2 = (sc2 * qn) / 1000;
                sc3 = (sc3 * qn) / 1000;
                os = (os * qn) / 1000;
                if (qn != 0) {
                    // data6[i].value = sc1;
                    // data7[i].value = sc2;
                    data8[i].value = sc3;
                    data9[i].value = os;
                    totalsc = totalsc + sc3;
                    data10[0].value = totalsc;
                    break;
                } else {
                    // data6[i].value = null;
                    // data7[i].value = null;
                    data8[i].value = null;
                    data9[i].value = null;
                    totalsc = totalsc + sc3;
                    data10[0].value = totalsc;
                }
            }
            else {
                // data6[i].value = null;
                // data7[i].value = null;
                data8[i].value = null;
                data9[i].value = null;
                totalsc = totalsc;
                data10[0].value = totalsc;
            }
        }
    }
    data10[0].value = totalsc;
}
function addtotalheader(a,b){
    let total=0,data;
    // console.log(a);
    for(let i =0;i<a.length;i++){
        data= document.querySelector(`input[name="${a[i]}"]`)
        total=total+Number(data.value);
    }
    // console.log(total);
    document.getElementById(b).innerHTML = total.toFixed(1);

}