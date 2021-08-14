function isValid(){
    var Aid = document.forms['AForm']['Aid'].value;
    var Aname = document.forms['AForm']['Aname'].value;
    var Aemail = document.forms['AForm']['Aemail'].value;
    var Aphone = document.forms['AForm']['Aphone'].value;
    var A_pname = document.forms['AForm']['A_pname'].value;
    var A_buliding = document.forms['AForm']['A_buliding'].value;
    var A_area = document.forms['AForm']['A_area'].value;
    var A_price = document.forms['AForm']['A_price'].value;
    if(Aid === ""){
    document.getElementById('AidjsE').innerHTML = "*Applicaint  id empty";
    
    }
    if(Aname === ""){
    document.getElementById('AnamejsE').innerHTML = "*Applicaint name empty";
    
    }
    if(Aemail === ""){
    document.getElementById('AemailjsE').innerHTML = "*Email  empty";
    
    }
    if(Aphone === ""){
    document.getElementById('AphonejsE').innerHTML = "*Number empty";
    
    }
    if(A_pname === ""){
    document.getElementById('A_pnamejsE').innerHTML = "*Name empty";
    
    }
    if(A_buliding === ""){
    document.getElementById('A_bulidingjsE').innerHTML = "*Apartment Building No empty";
    
    }
    if(A_area === ""){
    document.getElementById('A_areajsE').innerHTML = "*Apartment area empty";
    
    }
 
    
    if(A_price === ""){
    document.getElementById('A_pricejsE').innerHTML = "*Apartment price empty";
    return false;
    }
    else{
        return true;
    }
    
    }