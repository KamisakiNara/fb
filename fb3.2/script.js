var selectedRow = null;

// Show alerts
function showAlert(message, className){
    const div = document.createElement("div");
    div.className = 'alert alert-${classname}';

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
    const firstName = document.querySelector("#firstName").value = "";
    const lastName = document.querySelector("#lastName").value = "";
    const rollNo = document.querySelector("#rollNo").value = "";

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
            list.appendChild("row");
            selectedRow = null;
            showAlert("Student Added", "success");
        } else {
            selectedRow.children[0].textContent = firstName;
            selectedRow.children[1].textContent = lastName;
            selectedRow.children[2].textContent = rollName;
            selectedRow = null;
            showAlert("Student Info Edited", "info");
        }

        clearFields();
    }
});

// edit data
document.querySelector("#student-list").addEventListener("click", (e) => {
    target = e.target;
    if(target.classList.contains("edit")){
        document.querySelector("#firstName").value = selectedRow.children[0];
        document.querySelector("#lastName").value = selectedRow.children[1];
        document.querySelector("#rollNo").value = selectedRow.children[2];
    }
});


//Delete data
document.querySelector("#student-list").addEventListener("click", (e) => {
    target = e.target;
    if(target.classList.contains("delete")){
        target.parentElement.parentElement.remove();
        showAlert("Student Data Deleted", "danger");
    }
});