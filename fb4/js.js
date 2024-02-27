function hitung(){
    var nilai1 = document.getElementById("num1").value;
    var nilai2 = document.getElementById("num2").value;
    var opr = getElementById("operator").value;
    var hasil = "";

    if (nilai1 == "" || nilai2 == "" || opr == ""){
        hasil = "";
    } else {
        if (opr=="+"){
            hasil = parseInt(nilai1) + parseInt(nilai2);
        } else if (opr=="-"){
            hasil = parseInt(nilai1) - parseInt(nilai2);
        } else if (opr=="*"){
            hasil = parseInt(nilai1) * parseInt(nilai2);
        } else if (opr=="/"){
            hasil = parseInt(nilai1) / parseInt(nilai2);
        }
    }
    document.getElementBy("hasil").value = hasil;
}