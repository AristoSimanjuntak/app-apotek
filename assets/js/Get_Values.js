// JavaScript Document QAD
// window.onload = function(){
//     getValues_087();
// }

function getValues_087(){
                var tot_a=0;var tot_b=0;var tot_c=0;var tot_d=0;var tot_e=0;var tot_f=0;var tot_g=0;var tot_h=0;
                var tot_s=0;var tot_j=0;var tot_k=0;var tot_l=0;var tot_m=0;var tot_n=0;var tot_p=0;var tot_q=0;
                var na =0;var nb =0;var nc =0;var nd =0;var ne =0;var nf =0;var ng =0;var nh =0;
                var ns =0;var nj =0;var nk =0;var nl =0;var nm =0;var nn =0;var np =0;var nq =0;

                var dt_pack_kosong = document.getElementById('pack_kosong').value;
                if(isNaN(dt_pack_kosong)){var dt_pk=0;}else{var dt_pk=dt_pack_kosong;}

        var obj = document.getElementsByTagName('input');
            for(i=0; i<obj.length; i++){
                if(obj[i].name == "right_jaw1[]"){
                    if((obj[i]=="")||(obj[i]==null)||(obj[i]==" ")){a=0;}else{a=parseInt(obj[i].value)||0;}
                    var tot_a = tot_a + eval(a);
                                        if (a>0){na++;}
                }
                if(obj[i].name == "right_jaw2[]"){
                    if((obj[i]=="")||(obj[i]==null)||(obj[i]==" ")){b=0;}else{b=parseInt(obj[i].value)||0;}
                    var tot_b = tot_b + eval(b);
                                        if (b>0){nb++;}
                }
                                if(obj[i].name == "right_jaw3[]"){
                    if((obj[i]=="")||(obj[i]==null)||(obj[i]==" ")){c=0;}else{c=parseInt(obj[i].value)||0;}
                    var tot_c = tot_c + eval(c);
                                        if (c>0){nc++;}
                }
                                if(obj[i].name == "right_jaw4[]"){
                    if((obj[i]=="")||(obj[i]==null)||(obj[i]==" ")){d=0;}else{d=parseInt(obj[i].value)||0;}
                    var tot_d = tot_d + eval(d);
                                        if (d>0){nd++;}
                }
                                if(obj[i].name == "right_jaw5[]"){
                    if((obj[i]=="")||(obj[i]==null)||(obj[i]==" ")){e=0;}else{e=parseInt(obj[i].value)||0;}
                    var tot_e = tot_e + eval(e);
                                        if (e>0){ne++;}
                }
                                if(obj[i].name == "right_jaw6[]"){
                    if((obj[i]=="")||(obj[i]==null)||(obj[i]==" ")){f=0;}else{f=parseInt(obj[i].value)||0;}
                    var tot_f = tot_f + eval(f);
                                        if (f>0){nf++;}
                }
                                if(obj[i].name == "right_jaw7[]"){
                    if((obj[i]=="")||(obj[i]==null)||(obj[i]==" ")){g=0;}else{g=parseInt(obj[i].value)||0;}
                    var tot_g = tot_g + eval(g);
                                        if (g>0){ng++;}
                }
                                if(obj[i].name == "right_jaw8[]"){
                    if((obj[i]=="")||(obj[i]==null)||(obj[i]==" ")){h=0;}else{h=parseInt(obj[i].value)||0;}
                    var tot_h = tot_h + eval(h);
                                        if (h>0){nh++;}
                }
                                if(obj[i].name == "left_jaw1[]"){
                    if((obj[i]=="")||(obj[i]==null)||(obj[i]==" ")){s=0;}else{s=parseInt(obj[i].value)||0;}
                    var tot_s = tot_s + eval(s);
                                        if (s>0){ns++;}
                }
                if(obj[i].name == "left_jaw2[]"){
                    if((obj[i]=="")||(obj[i]==null)||(obj[i]==" ")){j=0;}else{j=parseInt(obj[i].value)||0;}
                    var tot_j = tot_j + eval(j);
                                        if (j>0){nj++;}
                }
                                if(obj[i].name == "left_jaw3[]"){
                    if((obj[i]=="")||(obj[i]==null)||(obj[i]==" ")){k=0;}else{k=parseInt(obj[i].value)||0;}
                    var tot_k = tot_k + eval(k);
                                        if (k>0){nk++;}
                }
                                if(obj[i].name == "left_jaw4[]"){
                    if((obj[i]=="")||(obj[i]==null)||(obj[i]==" ")){l=0;}else{l=parseInt(obj[i].value)||0;}
                    var tot_l = tot_l + eval(l);
                                        if (l>0){nl++;}
                }
                                if(obj[i].name == "left_jaw5[]"){
                    if((obj[i]=="")||(obj[i]==null)||(obj[i]==" ")){m=0;}else{m=parseInt(obj[i].value)||0;}
                    var tot_m = tot_m + eval(m);
                                        if (m>0){nm++;}
                }
                                if(obj[i].name == "left_jaw6[]"){
                    if((obj[i]=="")||(obj[i]==null)||(obj[i]==" ")){n=0;}else{n=parseInt(obj[i].value)||0;}
                    var tot_n = tot_n + eval(n);
                                        if (n>0){nn++;}
                }
                                if(obj[i].name == "left_jaw7[]"){
                    if((obj[i]=="")||(obj[i]==null)||(obj[i]==" ")){p=0;}else{p=parseInt(obj[i].value)||0;}
                    var tot_p = tot_p + eval(p);
                                        if (p>0){np++;}
                }
                                if(obj[i].name == "left_jaw8[]"){
                    if((obj[i]=="")||(obj[i]==null)||(obj[i]==" ")){q=0;}else{q=parseInt(obj[i].value)||0;}
                    var tot_q = tot_q + eval(q);
                                        if (q>0){nq++;}
                }

            }

                            var dt_avrj_1 = (tot_a/na).toFixed(2);
                            var dt_avrj_2 = (tot_b/nb).toFixed(2);
                            var dt_avrj_3 = (tot_c/nc).toFixed(2);
                            var dt_avrj_4 = (tot_d/nd).toFixed(2);
                            var dt_avrj_5 = (tot_e/ne).toFixed(2);
                            var dt_avrj_6 = (tot_f/nf).toFixed(2);
                            var dt_avrj_7 = (tot_g/ng).toFixed(2);
                            var dt_avrj_8 = (tot_h/nh).toFixed(2);
                            var dt_avlj_1 = (tot_s/ns).toFixed(2);
                            var dt_avlj_2 = (tot_j/nj).toFixed(2);
                            var dt_avlj_3 = (tot_k/nk).toFixed(2);
                            var dt_avlj_4 = (tot_l/nl).toFixed(2);
                            var dt_avlj_5 = (tot_m/nm).toFixed(2);
                            var dt_avlj_6 = (tot_n/nn).toFixed(2);
                            var dt_avlj_7 = (tot_p/np).toFixed(2);
                            var dt_avlj_8 = (tot_q/nq).toFixed(2);
                            if(isNaN(dt_avrj_1)){document.getElementById('avrj_1').value= "";}else{document.getElementById('avrj_1').value= dt_avrj_1;}
                            if(isNaN(dt_avrj_2)){document.getElementById('avrj_2').value= "";}else{document.getElementById('avrj_2').value= dt_avrj_2;}
                            if(isNaN(dt_avrj_3)){document.getElementById('avrj_3').value= "";}else{document.getElementById('avrj_3').value= dt_avrj_3;}
                            if(isNaN(dt_avrj_4)){document.getElementById('avrj_4').value= "";}else{document.getElementById('avrj_4').value= dt_avrj_4;}
                            if(isNaN(dt_avrj_5)){document.getElementById('avrj_5').value= "";}else{document.getElementById('avrj_5').value= dt_avrj_5;}
                            if(isNaN(dt_avrj_6)){document.getElementById('avrj_6').value= "";}else{document.getElementById('avrj_6').value= dt_avrj_6;}
                            if(isNaN(dt_avrj_7)){document.getElementById('avrj_7').value= "";}else{document.getElementById('avrj_7').value= dt_avrj_7;}
                            if(isNaN(dt_avrj_8)){document.getElementById('avrj_8').value= "";}else{document.getElementById('avrj_8').value= dt_avrj_8;}
                            if(isNaN(dt_avlj_1)){document.getElementById('avlj_1').value= "";}else{document.getElementById('avlj_1').value= dt_avlj_1;}
                            if(isNaN(dt_avlj_2)){document.getElementById('avlj_2').value= "";}else{document.getElementById('avlj_2').value= dt_avlj_2;}
                            if(isNaN(dt_avlj_3)){document.getElementById('avlj_3').value= "";}else{document.getElementById('avlj_3').value= dt_avlj_3;}
                            if(isNaN(dt_avlj_4)){document.getElementById('avlj_4').value= "";}else{document.getElementById('avlj_4').value= dt_avlj_4;}
                            if(isNaN(dt_avlj_5)){document.getElementById('avlj_5').value= "";}else{document.getElementById('avlj_5').value= dt_avlj_5;}
                            if(isNaN(dt_avlj_6)){document.getElementById('avlj_6').value= "";}else{document.getElementById('avlj_6').value= dt_avlj_6;}
                            if(isNaN(dt_avlj_7)){document.getElementById('avlj_7').value= "";}else{document.getElementById('avlj_7').value= dt_avlj_7;}
                            if(isNaN(dt_avlj_8)){document.getElementById('avlj_8').value= "";}else{document.getElementById('avlj_8').value= dt_avlj_8;}
    }

        function getValues_096(){

                var tot_a=0;var na=0;

                var dt_pack_kosong = document.getElementById('pack_kosong').value;
                if(isNaN(dt_pack_kosong)){var dt_pk=0;}else{var dt_pk=dt_pack_kosong;}

        var obj = document.getElementsByTagName('input');
            for(i=0; i<obj.length; i++){
                if(obj[i].name == "weight[]"){
                    if((obj[i]=="")||(obj[i]==null)||(obj[i]==" ")){a=0;}else{a=parseInt(obj[i].value)||0;}
                    var tot_a = tot_a + eval(a);
                                        if (a>0){na++;}

                }
            }
                            var ndt_total = tot_a;
                            var dt_avrj_1 = (tot_a/na).toFixed(2);
                            document.getElementById('html_total').innerHTML="text";
                            if(isNaN(dt_avrj_1)){document.getElementById('avg_gross').value= "";document.getElementById('avg_gross').value= "";}else{document.getElementById('avg_gross').value= dt_avrj_1;document.getElementById('avg_net').value= (dt_avrj_1 - dt_pk).toFixed(2);}

    }