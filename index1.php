<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awesome CSS Responsive Navigation menus </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <header>
        <input type="checkbox" name="" id="chk1">
        <div class="logo"><h1>Web Master</h1></div>
        <div class="search-box">
            <form action="">
                <input type="text" name="search" id="srch" placeholder="Search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <ul>
            <li><a href="index1.php?modul=home">HOME</a></li>
            <li><a href="index1.php?modul=product">PRODUCT</a></li>
            <li><a href="index1.php?modul=blog">BLOG</a></li>
            <li><a href="index1.php?modul=contact">CONTACT</a></li>
            <li>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </li>
        </ul>
        <div class="menu">
            <label for="chk1">
                <i class="fa fa-bars"></i>
            </label>
        </div>
    </header>
    <div id="main-content">

        <?php 
        if(isset($_GET['modul'])){
            $pages = $_GET['modul'];
        }else{
            $pages = "home";
        }
        if(!isset($_GET['modul']) || $pages == "home"){
            ?>
            <div id="content-home">
                <h1 id="">Title Home</h1><br>
                <p>Selamat datang untuk kamu,semoga betah disini  ya <br>
                saya jesica anastasya sitorus <br>
                aku suka makan bakso aku suka makan mie<br> 
                aku suka kamu aku suka semuanya loch
                </p>
            </div>
            <?php
        }
        if($pages == "product"){
            ?>
            <div id="content-product">
                <h1>Title Product</h1><br>
                <p>Selamat datang untuk kamu,semoga betah disini  ya <br>
                saya jesica anastasya sitorus <br>
                aku suka makan bakso aku suka makan mie<br> 
                aku suka kamu aku suka semuanya loch
                </p>
            </div>
            <a href="index1.php?modul=olahraga">PRODUK 1 </a>
            <a href="index1.php?modul=furnitur">PRODUK 2 </a>
            <a href="index1.php?modul=elektronik">PRODUK 3 </a>
            <?php
        }
        if($pages == "olahraga"){
            ?>
            <div id="content-olahraga">
                <h1>Produk Olahraga</h1><br>
                <label>Bola</label><br>
                <label>Bola Voli</label><br>
                <label>Bola Kaki</label>
            </div>
            <?php
        }
        if($pages == "furnitur"){
            ?>
            <div id="content-furnitur">
                <h1>Produk furnitur</h1><br>
                <label>Kursi</label><br>
                <label>Meja</label><br>
                <label>Meja Belajar</label>
            </div>
            <?php
        }
        if($pages == "elektronik"){
            ?>
            <div id="content-elektronik">
                <h1>Produk elektronik</h1><br>
                <label>Tv</label><br>
                <label>Mesin Cuci</label><br>
                <label>Kulkas</label>
            </div>
            <?php
        }
        if($pages == "blog"){
            ?>
            <div id="content-blog">
                <h1>Title Blog</h1><br>
                <p>Selamat datang untuk kamu,semoga betah disini  ya <br>
                saya jesica anastasya sitorus <br>
                aku suka makan bakso aku suka makan mie<br> 
                aku suka kamu aku suka semuanya loch
                </p>
            </div>
            <?php
        }
        if($pages == "contact"){
            ?>
            <div id="content-contact">
                <h1>Title Contact</h1><br>
                <p>Selamat datang untuk kamu,semoga betah disini  ya <br>
                saya jesica anastasya sitorus <br>
                aku suka makan bakso aku suka makan mie<br> 
                aku suka kamu aku suka semuanya loch
                </p>
                <a href="index1.php?modul=aboutme">Isi Data Anda di sini!!</a>
            </div>
            <?php
        }
        if($pages == "aboutme"){
            ?>
            <div class="container mt-5">
                <div class="text-center">
                    <h1 class="display-5 mb-5"><strong>CRUD Application</strong></h1>
                </div>
                <div class="main row justify-content-center">
                    <form action="" id="student-form" class="row justify-content-center mb-4" autocomplete="off">
                        <div class="col-10 col-md-8 mb-3 position-relative">
                            <label for="firstName">First Name</label>
                            <div class="position-relative">
                                <input class="form-control" id="firstName" type="text" placeholder="Enter First Name">
                                <i class="fas fa-check text-success position-absolute end-0 top-50 translate-middle-y me-2 d-none"></i>
                            </div>
                        </div>
                        <div class="col-10 col-md-8 mb-3 position-relative">
                            <label for="lastName">Last Name</label>
                            <div class="position-relative">
                                <input class="form-control" id="lastName" type="text" placeholder="Enter Last Name">
                                <i class="fas fa-check text-success position-absolute end-0 top-50 translate-middle-y me-2 d-none"></i>
                            </div>
                        </div>
                        <div class="col-10  col-md-8 mb-3 position-relative">
                            <label for="rollNo">Roll No</label>
                            <div class="position-relative">
                                <input class="form-control" id="rollNo" type="text" placeholder="Enter Roll No">
                                <i class="fas fa-check text-success position-absolute end-0 top-50 translate-middle-y me-2 d-none"></i>
                            </div>
                        </div>
                        <div class="col-10 col-md-8">
                            <input class="btn btn-success add-btn" type="submit" value="submit">
                        </div>
                    </form>
                    <div class="col-10 col-md-10 mt-5">
                        <table class="table table-striped table-dark">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Roll No</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody id="student-list">
                                <tr>
                                    <td>Dear</td>
                                    <td>Programmer</td>
                                    <td>25</td>
                                    <td>
                                        <a href="#" class="btn btn-warning btn-sm edit">Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm delete">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <script>
                 var selectedRow = null;

// Function to show alerts
function showAlert(message, className){
    const div = document.createElement("div");
    div.className = `alert alert-${className}`;

    div.appendChild(document.createTextNode(message));
    const container = document.querySelector(".container");
    const main = document.querySelector(".main");
    container.insertBefore(div, main);

    setTimeout(() => document.querySelector(".alert") .remove(), 3000);

}

// Function to clear all fields 
function clearFields(){
    document.querySelector("#firstName").value = "";
    document.querySelector("#lastName").value = "";
    document.querySelector("#rollNo").value = "";
}

// Function to validate name
function isValidName(name) {
    return /^[a-zA-Z]+$/.test(name);
}

// Function to add checkmark icon inside the input field
function addCheckmarkIcon(inputId) {
    const inputField = document.querySelector(inputId);
    const checkmarkIcon = inputField.nextElementSibling;
    checkmarkIcon.classList.remove("d-none");
}

// Function to remove checkmark icon inside the input field
function removeCheckmarkIcon(inputId) {
    const inputField = document.querySelector(inputId);
    const checkmarkIcon = inputField.nextElementSibling;
    checkmarkIcon.classList.add("d-none");
}

// Event listener for form submission
document.querySelector("#student-form").addEventListener("submit", (e) =>{
    e.preventDefault();

    // Get form values
    const firstName = document.querySelector("#firstName").value;
    const lastName = document.querySelector("#lastName").value;
    const rollNo = document.querySelector("#rollNo").value;

    // Remove checkmark icons
    removeCheckmarkIcon("#firstName");
    removeCheckmarkIcon("#lastName");
    removeCheckmarkIcon("#rollNo");

    // Validate
    if(firstName == "" || lastName == "" || rollNo == ""){
        showAlert("Please fill in all fields", "danger");
    } else if (!isValidName(firstName)) {
        showAlert("Please enter a valid first name", "danger");
    } else {
        // Add data
        if(selectedRow == null){
            const list = document.querySelector("#student-list");
            const row = document.createElement("tr")

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
            showAlert("Student Added", "success");
        } else {
            selectedRow.children[0].textContent = firstName;
            selectedRow.children[1].textContent = lastName;
            selectedRow.children[2].textContent = rollNo;
            selectedRow = null;
            showAlert("Student Info Edited", "info");
        }

        clearFields();
    }
});

// Event listener for editing data
document.querySelector("#student-list").addEventListener("click", (e) =>{
    target = e.target;
    if(target.classList.contains("edit")){
        selectedRow = target.parentElement.parentElement;
        document.querySelector("#firstName").value = selectedRow.children[0].textContent ;
        document.querySelector("#lastName").value = selectedRow.children[1].textContent ;
        document.querySelector("#rollNo").value = selectedRow.children[2].textContent; 
    }
});

// Event listener for deleting data
document.querySelector("#student-list").addEventListener("click", (e) =>{
    target = e.target;
    if(target.classList.contains("delete")){
        target.parentElement.parentElement.remove();
        showAlert("Student Data Deleted", "danger");
    }
});

// Event listener for input validation - First Name
document.querySelector("#firstName").addEventListener("input", (e) => {
    const firstName = e.target.value.trim();
    if (isValidName(firstName)) {
        addCheckmarkIcon("#firstName");
    } else {
        removeCheckmarkIcon("#firstName");
    }
});

// Event listener for input validation - Last Name
document.querySelector("#lastName").addEventListener("input", (e) => {
    const lastName = e.target.value.trim();
    if (isValidName(lastName)) {
        addCheckmarkIcon("#lastName");
    } else {
        removeCheckmarkIcon("#lastName");
    }
});

// Event listener for input validation - Roll No
document.querySelector("#rollNo").addEventListener("input", (e) => {
    const rollNo = e.target.value.trim();
    if (rollNo !== "") {
        addCheckmarkIcon("#rollNo");
    } else {
        removeCheckmarkIcon("#rollNo");
    }
});
            </script>
            <?php
        }
        ?>
    </div>
</body>
</html>
