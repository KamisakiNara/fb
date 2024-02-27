<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator sederhana</title>
    <style>
        #container {
            width: 300px;
           height: auto;
          margin: 0 auto;
         align-items: center;
         justify-content: center;
          /* border: 1px solid; */
        }
    </style>
</head>
<body>

    <div id="container">
        <form>
            <h1>Kalkulator sederhana</h1>
            <div>
                <label for="numa">Bilangan - A</label><br>
                <input type="number" id="num1" required>
            </div>
            <div>
                <label for="numb">Bilangan - B</label><br>
                <input type="number" id="num2">
            </div>
            <div>
                <label for="operator">Operator</label><br>
                <button type="button" name="hitung" onclick="tet1();">+</button>
                <button type="button" name="hitung" onclick="tet2();">-</button>
                <button type="button" name="hitung" onclick="tet3();">x</button>
                <button type="button" name="hitung" onclick="tet4();">/</button>
                <!-- <select id="operator">
                    <option disabled selected>- Pilih -</option>
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">x</option>
                    <option value="/">/</option>
                </select> -->
            </div>
            <div>
                <label for="hasil">Hasil perhitungan :</label><br>
                <input type="text" id="hasil"><br><br>
            </div>
            <div>
                <!-- <button type="button" name="hitung" onclick="tet();">hitung</button> -->
            </div>
        </form>
    </div>
    

<script>
    
    function tet1(){
        var nil1    = document.getElementById("num1").value;
        var nil2    = document.getElementById("num2").value;
        var total   = "";

        total = parseInt(nil1) + parseInt(nil2);
        document.getElementById("hasil").value = total;
    }

    function tet2(){
        var nil1    = document.getElementById("num1").value;
        var nil2    = document.getElementById("num2").value;
        var total   = "";

        total = parseInt(nil1) - parseInt(nil2);
        document.getElementById("hasil").value = total;
    }

    function tet3(){
        var nil1    = document.getElementById("num1").value;
        var nil2    = document.getElementById("num2").value;
        var total   = "";

        total = parseInt(nil1) * parseInt(nil2);
        document.getElementById("hasil").value = total;
    }
    
    function tet4(){
        var nil1    = document.getElementById("num1").value;
        var nil2    = document.getElementById("num2").value;
        var total   = "";

        total = parseInt(nil1) / parseInt(nil2);
        document.getElementById("hasil").value = total;
    }
    // function tet(){
    //     var nil1  = document.getElementById("num1").value;
    //     var nil2  = document.getElementById("num2").value;
    //     var oper     = document.getElementById("operator").value;
    //     var total  = "";

        // if (nil1 == "" || nil2 == "" || oper == ""){
        //     hasil = "harus berisi nilai";
        // } else {
        //     if (oper == "+"){
        //         total = parseInt(nil1) + parseInt(nil2);
    //         } else if (oper == "-"){
    //             total = parseInt(nil1) - parseInt(nil2);
    //         } else if (oper == "*"){
    //             total = parseInt(nil1) * parseInt(nil2);
    //         } else if (oper == "/"){
    //             total = parseInt(nil1) / parseInt(nil2);
    //         }
    //     }
    // document.getElementById("hasil").value = total;
    // }
</script>


</body>
</html>