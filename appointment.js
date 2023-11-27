function dispdets(event) {

    event.preventDefault();

    var status = document.getElementById("status").value;

    localStorage.setItem('uname', document.getElementById("uname").value);
    localStorage.setItem('phno', document.getElementById("phno").value);
    localStorage.setItem('email', document.getElementById('email').value);
    localStorage.setItem('date', document.getElementById('date').value);
    localStorage.setItem('status', status);
    document.getElementById("doc").setAttribute('value', localStorage.getItem('cons'));
   
    var fee=400;
    if(status=="Student"){
        fee-=100;
    }
    else if(status=="Teacher"){
        fee-=200;
    }
    
    localStorage.setItem('fee',fee);
    window.open("payment.php", "_self");
}