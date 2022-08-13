let create = document.querySelector("#create");
let modal = document.querySelector("#create-user");
let update_model = document.querySelector("#update-user");
let close = document.querySelector("#close")
let update_close = document.querySelector("#update_close")
let save = document.querySelector("#save");
let update = document.querySelector("#update");
let success = document.querySelector(".alert-success")
let error = document.querySelector(".alert-danger")


create.addEventListener("click", () => {
    modal.style.display = "flex";
});
close.addEventListener("click", () => {
    modal.style.display = "none";
})
update_close.addEventListener("click", () => {
    update_model.style.display = "none";

})


// create user

save.addEventListener("click", async () => {
    try {
        let name = document.querySelector("#name").value;
        let email = document.querySelector("#email").value;
        let designation = document.querySelector("#designation").value;
        const res = await fetch("api/addUser.php", {
            method: "POST",
            body: JSON.stringify({ "name": name, "email": email, "designation": designation }),
            headers: {
                "Content-Type": "application/json"
            }
        });
        const output = await res.json();

        if (output.success) {
            success.style.display = "flex";
            success.innerText = output.messemail;
            name = "";
            email = "";
            designation = "";
            modal.style.display = "none";
            getUsers();
            getTotalCount();
            setTimeout(() => {
                success.style.display = "none";
                success.innerText = "";

            }, 1000)

        } else {
            error.style.display = "flex";
            error.innerText = output.messemail;
            setTimeout(() => {
                error.style.display = "none";
                error.innerText = "";

            }, 1000)
        }
    } catch (error) {
        error.style.display = "flex";
        error.innerText = error.messemail;
        setTimeout(() => {
            error.style.display = "none";
            error.innerText = "";

        }, 1000)
    }
    getUsers();
});

// select user

const getUsers = async () => {
    try {
        const tbody = document.querySelector("#tbody");
        let tr = "";
        const res = await fetch("api/readAll.php", {
            method: "GET",
            headers: {
                "Content-Type": "application/json"
            }
        });

        const output = await res.json();
        if (output.empty === "empty") {
            tr = "<tr>Record Not Found</td>"
        } else {
            for (var i in output) {
                tr += `
            <tr>
            <td>${parseInt(i) + 1}</td>
            <td>${output[i].name}</td>
            <td>${output[i].email}</td>
            <td>${output[i].designation}</td>
            <td><button onclick="editUser(${output[i].id})" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></button></td>
            <td><button onclick="deleteUser(${output[i].id})"  class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></td>
            </tr>`
            }
        }
        tbody.innerHTML = tr;
    } catch (error) {
        console.log("error " + error)
    }
}
getUsers();
// edit user

const editUser = async (id) => {
    update_model.style.display = "flex";

    const res = await fetch("api/edit.php?id=" + id, {
        method: "GET",
        headers: {
            "Content-Type": "application/json"
        }
    })
    const output = await res.json();
    if (output["empty"] !== "empty") {
        for (var i in output) {
            document.querySelector("#id").value = output[i].id
            document.querySelector("#edit_name").value = output[i].name
            document.querySelector("#edit_email").value = output[i].email
            document.querySelector("#edit_designation").value = output[i].designation
        }
    }

}

// update user

update.addEventListener("click", async () => {
    let id = document.querySelector("#id").value;
    let name = document.querySelector("#edit_name").value;
    let email = document.querySelector("#edit_email").value;
    let designation = document.querySelector("#edit_designation").value;

    const res = await fetch("api/update.php", {
        method: "POST",
        body: JSON.stringify({
            "id": id,
            "name": name,
            "email": email,
            "designation": designation
        })
    });

    const output = await res.json();
    if (output.success) {
        success.style.display = "flex";
        success.innerText = output.messemail;
        name = "";
        email = "";
        designation = "";
        update_model.style.display = "none";
        getUsers();
        setTimeout(() => {
            success.style.display = "none";
            success.innerText = "";

        }, 1000)
    } else {
        error.style.display = "flex";
        error.innerText = output.messemail;
        setTimeout(() => {
            error.style.display = "none";
            error.innerText = "";
        }, 1000)
    }

})

// delete user

const deleteUser = async (id) => {
    const res = await fetch("api/delete.php?id=" + id, {
        method: "GET",
    });
    const output = await res.json();
    if (output.success) {
        success.style.display = "flex";
        success.innerText = output.messemail;
        setTimeout(() => {
            success.style.display = "none";
            success.innerText = "";
        }, 1000)
        getUsers();
        getTotalCount();
    } else {
        error.style.display = "flex";
        error.innerText = output.messemail;
        setTimeout(() => {
            error.style.display = "none";
            error.innerText = "";
        }, 1000)
    }
    getUsers();
}

// get total count  users;

const getTotalCount = async () => {
    let total = document.querySelector("#total");
    const res = await fetch("api/totalCount.php", {
        method: "GET"
    })
    const output = await res.json();
    total.innerText = output;
}
getTotalCount();