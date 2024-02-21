<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>CRUD Application</title>
</head>
<body style="color: white; background-color: #1d2630">

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
</body>
</html>
