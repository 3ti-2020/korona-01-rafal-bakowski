const btn_1 = document.querySelector("#num_1");
const btn_2 = document.querySelector("#num_2");
const btn_3 = document.querySelector("#num_3");
const btn_4 = document.querySelector("#num_4");
const btn_5 = document.querySelector("#num_5");
const btn_6 = document.querySelector("#num_6");
const btn_7 = document.querySelector("#num_7");
const btn_8 = document.querySelector("#num_8");
const btn_9 = document.querySelector("#num_9");
const btn_0 = document.querySelector("#num_0");
const plus = document.querySelector("#plus");
const minus = document.querySelector("#minus");
const razy = document.querySelector("#razy");
const dzielenie = document.querySelector("#dzielenie");
const wyczysc = document.querySelector("#wyczysc");
const wynik = document.querySelector("#wynik");
const ekran = document.querySelector("#ekran");


let wartosc = 0;
let wyniki = '';
const num_1 = "1";
const num_2 = "2";
const num_3 = "3";
const num_4 = "4";
const num_5 = "5";
const num_6 = "6";
const num_7 = "7";
const num_8 = "8";
const num_9 = "9";
const num_0 = "0";
const num_minus = "-";
const num_razy = "*";
const num_plus = "+";
const num_dzielenie = "/";

btn_1.addEventListener("click",function(){
    wyniki = wyniki + num_1;
    ekran.innerHTML=wyniki;
})

btn_2.addEventListener("click",function(){
    wyniki = wyniki + num_2;
    ekran.innerHTML=wyniki;
})

btn_3.addEventListener("click",function(){
    wyniki = wyniki + num_3;
    ekran.innerHTML=wyniki;
})

btn_4.addEventListener("click",function(){
    wyniki = wyniki + num_4;
    ekran.innerHTML=wyniki;
})

btn_5.addEventListener("click",function(){
    wyniki = wyniki + num_5;
    ekran.innerHTML=wyniki;
})

btn_6.addEventListener("click",function(){
    wyniki = wyniki + num_6;
    ekran.innerHTML=wyniki;
})

btn_7.addEventListener("click",function(){
    wyniki = wyniki + num_7;
    ekran.innerHTML=wyniki;
})

btn_8.addEventListener("click",function(){
    wyniki = wyniki + num_8;
    ekran.innerHTML=wyniki;
})

btn_9.addEventListener("click",function(){
    wyniki = wyniki + num_9;
    ekran.innerHTML=wyniki;
})

btn_0.addEventListener("click",function(){
    wyniki = wyniki + num_0;
    ekran.innerHTML=wyniki;
})

plus.addEventListener("click",function(){
    wyniki = wyniki + num_plus;
    ekran.innerHTML=wyniki;
})

minus.addEventListener("click",function(){
    wyniki = wyniki + num_minus;
    ekran.innerHTML=wyniki;
})

razy.addEventListener("click",function(){
    wyniki = wyniki + num_razy;
    ekran.innerHTML=wyniki;
})

dzielenie.addEventListener("click",function(){
    wyniki = wyniki + num_dzielenie;
    ekran.innerHTML=wyniki;
})

wyczysc.addEventListener("click",function(){
    wyniki = "";
    ekran.innerHTML="";
   
})

wynik.addEventListener("click" , function(){
    
    var str = ekran.textContent;
    var r = /[+-.*./]/;
    var res = str.split(RegExp(r),2);
    var pierwsza = res[0];
    var druga = res[1];
    var znak = str.charAt(pierwsza.length);

    if(znak === "+")
        wyniki = parseInt(pierwsza) + parseInt(druga);
    
    else if(znak === "-")
        wyniki = parseInt(pierwsza) - parseInt(druga);
    
    else if(znak === "*")
        wyniki = parseInt(pierwsza) * parseInt(druga);
    
    else if(znak === "/")
        wyniki = parseInt(pierwsza) / parseInt(druga);;
    
    ekran.innerHTML = wyniki;
})




