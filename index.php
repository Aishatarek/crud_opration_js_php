<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curd with javascript fetch</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="alerts">
            <div class="alert alert-success">gg</div>
            <div class="alert alert-danger">ee</div>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h3>users ( <span id="total"></span> )</h4>
                    <button class="btn btn-primary" id="create">Create</button>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Job</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody id="tbody">
                   
                </tbody>
            </table>
        </div>
    </div>

    <!-- create user model -->

    <!-- <div class="container"> -->
    <div class="modal" id="create-user">
        <div class="modal-body">
            <h3>Create user</h3>
            <div class="form-group">
                <label for=""><b>Enter your Name</b></label>
                <input type="text" placeholder="Enter your name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for=""><b>Enter your Email</b></label>
                <input type="email" placeholder="Enter your email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for=""><b>Enter your job</b></label>
                <input type="text" placeholder="Enter your job" id="designation" class="form-control">
            </div>
            <div class="form-group buttons">
                <button class="btn btn-success" type="submit" id="save">Save</button>
                <button class="btn btn-danger" type="submit" id="close">Close</button>
            </div>
        </div>
    </div>
    <!-- </div> -->

    <!-- edit user -->
    <div class="modal" id="update-user">
        <div class="modal-body">
            <h3>Update user</h3>
            <div class="form-group">
                <label for=""><b>Enter your Name</b></label>
                <input type="text" placeholder="Enter your name" id="edit_name" class="form-control">
                <input type="hidden" placeholder="Id" id="id" class="form-control">
            </div>
            <div class="form-group">
                <label for=""><b>Enter your email</b></label>
                <input type="email" placeholder="Enter your email" id="edit_email" class="form-control">
            </div>
            <div class="form-group">
                <label for=""><b>Enter your job</b></label>
                <input type="text" placeholder="Enter your job" id="edit_designation" class="form-control">
            </div>
            <div class="form-group buttons">
                <button class="btn btn-success" id="update" type="submit">Update</button>
                <button class="btn btn-danger" type="submit" id="update_close">Close</button>
            </div>
        </div>
    </div>
    <script src="main.js"></script>
</body>

</html>
