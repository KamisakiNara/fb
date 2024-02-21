<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../fontawesome/css/all.min.css">
</head>
<body>
    <header>
        <input type="checkbox" name="" id="chk1">
        <div class="logo"><h1>Iris Project</h1></div>
        <div class="search-box">
            <form action="">
                <input type="text" name="search" id="srch" placeholder="Search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <ul>
            <li><a href="index.php?modul=home">HOME</a></li>
            <li><a href="index.php?modul=product">PRODUCT</a></li>
            <li><a href="index.php?modul=blog">BLOG</a></li>
            <li><a href="index.php?modul=contact">CONTACT</a></li>
            <li>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </li>
        </ul>
        <div class="menu">
            <label for="chk1">
                <i class="fa fa-bars"></i>
        </div>
    </header>
    <div id="main-content">
    <?php 
    if(isset($_GET['modul'])){
        $pages = $_GET['modul'];
    } else {
        $pages = "home";
    }
                
    if(!isset($_GET['modul']) || $pages == "home"){
    ?>
    <div id="content-home">
    <h1>Title Home</h1>
    <p> Ini halaman pertama<br>
    Have a great day all</p>
    </div>

    <?php
    } if ($pages == "product"){
    ?>
    <div id="content-product">
    <h1>Title Product</h1>
    <a href="index.php?modul=product1">Product1</a>
    <a href="index.php?modul=product2">Product2</a>
    <a href="index.php?modul=product3">Product3</a>
    </div>

    <?php
    } if ($pages == "product1") {
    ?>
    <div id="content-product1">
        <h1>Produk Olahraga</h1>
        <ul>
            <li>Bola</li>
            <li>Matras</li>
            <li>Tongkat</li>
            <li><a href="index.php?modul=product">Klik disini untuk kembali ke halaman Produk</a></li>
        </ul>
    </div>

    <?php
    } if ($pages == "product2") {
    ?>
    <div id="content-product2">
        <h1>Produk Elektronik</h1>
        <ul>
            <li>Kipas</li>
            <li>Televisi</li>
            <li>Kosmos</li>
            <li><a href="index.php?modul=product">Klik disini untuk kembali ke halaman Produk</a></li>
        </ul>
    </div>

    <?php
    } if ($pages == "product3") {
    ?>
    <div id="content-product3">
        <h1>Produk Furnitur</h1>
        <ul>
            <li>Meja</li>
            <li>Kursi</li>
            <li>Lemari</li>
            <li><a href="index.php?modul=product">Klik disini untuk kembali ke halaman Produk</a></li>
        </ul>
    </div>

    <?php
    } if ($pages == "blog"){
    ?>
    <div id="content-blog">
    <h1>Title Blog</h1>
    </div>

    <?php
    } if ($pages == "contact"){
    ?>
    <div id="content-contact" style="color: white; background-color: #1d2630;">
    <div class="container mt-5">
        <div class="text-center">
            <h1 class="display-5 mb-5"><strong>About Us</strong></h1>
        </div>
        <div class="main row justify-content-center">
            <form action="" id="student-form" target="_self" enctype="multipart/form-data" class="row justify-content-center mb-4" autocomplete="off">
                <div class="col-8 col-md-8 mb-3 test">
                    <label for="firstName">First Name</label>
                    <input class="form-control" id="firstName" type="text" placeholder="Input your first name"  name="firstname" onkeyup="validatefName()">
                    <span id="fname-error">Input your first name</span>
                </div>
                <div class="col-8 col-md-8 mb-3 test">
                    <label for="lastName">Last Name</label>
                    <input class="form-control" id="lastName" type="text" placeholder="Input your last name" name="lastname" onkeyup="validatelName()">
                    <span id="lname-error">Input your last name</span>
                </div>
                <div class="col-8 col-md-8 mb-3 test">
                    <label for="rollNo">Absent Number</label>
                    <input class="form-control" id="rollNo" type="tel" placeholder="Input your Roll Number" name="number" onkeyup="validateNum()">
                    <span id="num-error">Number Required</span>
                </div>
                <div class="col-8 col-md-8">
                    <input class="btn btn-success add-btn" type="submit" value="Submit" onclick="return validateForm()">
                    <span id="submit-error"></span>
                </div>
                <div class="col-12 col-md-10 mt-5">
                    <table class="table table-stripped table-dark">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Number</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="student-list">
                        <tr>
                            <td>Muhammad</td>
                            <td>Raihan</td>
                            <td>25</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm edit">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm delete">Delete</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </div>
    <div><a href="index.php?modul=aboutme" class="btn btn-success">Tentang saya</a></div>
    </div>
    

    <?php
    } if ($pages == "aboutme") {
    ?>
    <div id="content-about">
        <h1>Tentang Saya</h1>
        <label>Nama saya Muhammad Raihan Syahfitrah</label>
    </div>

    <?php
    }
    ?>
         
    </div>

<script>
    var selectedRow = null;
    var fnameError = document.getElementById('fname-error');
    var lnameError = document.getElementById('lname-error');
    var numError = document.getElementById('num-error');
    var submitError = document.getElementById('submit-error');

    function validatefName() {
    var name = document.getElementById('firstName').value;

    if (name.length == 0) {
        fnameError.innerHTML = 'Name Required';
        return false;
    }
    if (!name.match(/^[A-Za-z]*$/)) {
        fnameError.innerHTML = 'Please input your first name';
        return false;
    }
    fnameError.innerHTML = '<i class="fas fa-check-circle"></i>';
    return true;
}

function validatelName() {
    var name = document.getElementById('lastName').value;

    if (name.length == 0) {
        lnameError.innerHTML = 'Name Required';
        return false;
    }
    if (!name.match(/^[A-Za-z]*$/)) {
        lnameError.innerHTML = 'Please input your last name';
        return false;
    }
    lnameError.innerHTML = '<i class="fas fa-check-circle"></i>';
    return true;
}

function validateNum() {
    var num = document.getElementById('rollNo').value;

    if (num.length == 0) {
        numError.innerHTML = 'Roll Number Required';
        return false;
    }
    if (!num.match(/^[0-9]*$/)) {
        numError.innerHTML = 'Fill with number please';
        return false;
    }
    numError.innerHTML = '<i class="fas fa-check-circle"></i>';
    return true;
}

function validateForm() {
    if (!validatefName() || !validatelName() || !validateNum()) {
        submitError.style.display = 'block';
        submitError.innerHTML = 'Please check the error before submit';
        setTimeout(function () { submitError.style.display = 'none'; }, 3000);
        return false;
    }
}

// Show alerts
function showAlert(message, className){
    const div = document.createElement("div");
    div.className = 'alert alert-' + className;

    div.appendChild(document.createTextNode(message));
    const container = document.querySelector(".container");
    const main = document.querySelector(".main");
    container.insertBefore(div, main);

    setTimeout(() => document.querySelector(".alert").remove(), 3000);
}

//Clear All fields
function clearFields(){
    document.querySelector("#firstName").value = "";
    document.querySelector("#lastName").value = "";
    document.querySelector("#rollNo").value = "";
}

// Add Data
document.querySelector("#student-form").addEventListener("submit", (e) => {
    e.preventDefault();

    //Get form values
    const firstName = document.querySelector("#firstName").value;
    const lastName = document.querySelector("#lastName").value;
    const rollNo = document.querySelector("#rollNo").value;

    //validate
    if(firstName == "" || lastName == "" || rollNo == ""){
        showAlert("Please fill in all Fields", "danger")
    } else {
        if(selectedRow == null){
            const list = document.querySelector("#student-list");
            const row = document.createElement("tr");

            row.innerHTML = `
                <td>${firstName}</td>
                <td>${lastName}</td>
                <td>${rollNo}</td>
                <td>
                <a href="#" class="btn btn-warning btn-sm edit">Edit</a>
                <a href="#" class="btn btn-danger btn-sm delete">Delete</a>
                </td>
            `;
            list.appendChild(row);
            selectedRow = null;
            showAlert("Data Added", "success");
        } else {
            selectedRow.children[0].textContent = firstName;
            selectedRow.children[1].textContent = lastName;
            selectedRow.children[2].textContent = rollNo;
            selectedRow = null;
            showAlert("Data Info Edited", "info");
        }

        clearFields();
    }
});

// edit data
document.querySelector("#student-list").addEventListener("click", (e) => {
    target = e.target;
    if(target.classList.contains("edit")){
        selectedRow = target.parentElement.parentElement;
        document.querySelector("#firstName").value = selectedRow.children[0].textContent;
        document.querySelector("#lastName").value = selectedRow.children[1].textContent;
        document.querySelector("#rollNo").value = selectedRow.children[2].textContent;
    }
});


//Delete data
document.querySelector("#student-list").addEventListener("click", (e) => {
    target = e.target;
    if(target.classList.contains("delete")){
        target.parentElement.parentElement.remove();
        showAlert("Data Deleted", "danger");
    }
});
</script>

</body>
</html>