function isValid(){
    var Aid = document.forms['RForm']['Aid'].value;
    var Aname = document.forms['RForm']['Aname'].value;
    var Aemail = document.forms['RForm']['Aemail'].value;
    var Aphone = document.forms['RForm']['Aphone'].value;
    var P_adress = document.forms['RForm']['P_adress'].value;
    var Pr_address = document.forms['RForm']['Pr_address'].value;
    var S_income = document.forms['RForm']['S_income'].value;
    var M_income = document.forms['RForm']['M_income'].value;
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
    if(P_adress === ""){
    document.getElementById('P_adressjsE').innerHTML = "*Present adress empty";
    
    }
    if(Pr_address === ""){
    document.getElementById('Pr_addressjsE').innerHTML = "*Pr_address No empty";
    
    }
    if(S_income === ""){
    document.getElementById('S_incomejsE').innerHTML = "*Source of income empty";
    
    }
 
    
    if(M_income === ""){
    document.getElementById('M_incomejsE').innerHTML = "*monthly income empty";
    return false;
    }
    else{
        return true;
    }
    
    }