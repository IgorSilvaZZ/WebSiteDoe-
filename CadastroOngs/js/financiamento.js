function addFinanciamento(){
    var nome = document.getElementById("txtNome").value;
    var n1 = document.getElementById("txtVC").value;
    var n2 = document.getElementById("txtEN").value;
        var c1 = document.getElementById("txt25").value;
        var c2 = document.getElementById("txt50").value;
        var c3 = document.getElementById("txt75").value;
    var n3 = document.getElementById("txtPA").value;
        var p1 = document.getElementById("txt12x").value;
        var p2 = document.getElementById("txt13x").value;
        var p3 = document.getElementById("txt14x").value;
        var p4 = document.getElementById("txt15x").value;
        var p5 = document.getElementById("txt16x").value;
        var p6 = document.getElementById("txt17x").value;
        var p7 = document.getElementById("txt18x").value;
        var p8 = document.getElementById("txt19x").value;
        var p9 = document.getElementById("txt20x").value;
        var p10 = document.getElementById("txt21x").value;
        var p11 = document.getElementById("txt22x").value;
        var p12 = document.getElementById("txt23x").value;
        var p13 = document.getElementById("txt24x").value;
        var p14 = document.getElementById("txt25x").value;
        var p15 = document.getElementById("txt26x").value;
        var p16 = document.getElementById("txt27x").value;
        var p17 = document.getElementById("txt28x").value;
    var tagTxtNome = document.querySelector("#txtNome");
    if(nome.length < 3){
        tagTxtNome.classList.add("invalida");
    r1 = 0;
    }else{
        tagTxtNome.classList.remove("invalida");
        document.getElementById("txtNome").value = "";
        document.getElementById("txtVC").value = "";
        document.getElementById("txtEN").value = "";
        if(n2 == c1){
        r1 = n1/4;
}else if(n2 == c2){
        r1 = n1/2;
}else if(n2 == c3){
        r1 = n1/3;
        }
        if(n3 == p1){
            r2 = r1/12;
        }
        else if(n3 == p2){
            r2 = r1/13;
        }
        else if(n3 == p3){
            r2 = r1/14;
        }
        else if(n3 == p4){
            r2 = r1/15;
        }
        else if(n3 == p5){
            r2 = r1/16;
        }
        else if(n3 == p6){
            r2 = r1/17;
        }
        else if(n3 == p7){
            r2 = r1/18;
        }
        else if(n3 == p8){
            r2 = r1/19;
        }
        else if(n3 == p9){
            r2 = r1/20;
        }
        else if(n3 == p10){
            r2 = r1/21;
        }
        else if(n3 == p11){
            r2 = r1/22;
        }
        else if(n3 == p12){
            r2 = r1/23;
        }
        else if(n3 == p13){
            r2 = r1/24;
        }
        else if(n3 == p14){
            r2 = r1/25;
        }
        else if(n3 == p15){
            r2 = r1/26;
        }
        else if(n3 == p16){
            r2 = r1/27;
        }
        else if(n3 == p17){
            r2 = r1/28;
        }
    }
    alert (nome+" a entrada vai ser de R$"+r1+" com parcelas de R$"+r2);
    
}