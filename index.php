<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <title>Crud Operation</title>
</head>

<body>
  <div class="container">
    <div class="alert alert-info">
      <h2 class="text-center">Employee Management System (EMS)</h2>
    </div>
    <button type="button" class="btn btn-success" id="btnCreate" data-bs-toggle="modal" data-bs-target="#myModal"
      style="float: right; margin-bottom:10px;">
      Create Employee
    </button>
    <!-- Add Employee -->
    <!-- The Modal -->
    <div class="modal fade" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Add Employee</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <form action="" method="post" id="frm">

              <div class="form-group mt-4" >
                <input type="hidden" name="sid" id="vid">
                <input type="text" name="textName" id="name" class="form-control" placeholder="Enter Employee Name" required />
              </div>
              <div class="form-group mt-4">
                <input type="email" name="textEid" id="email" class="form-control" placeholder="Enter Employee Email" required />
              </div>
              <div class="form-group mt-4">
                <input type="Password" name="textPass" id="pass" class="form-control"
                  placeholder="Enter Employee Password" required />
              </div>
              <div class="form-group mt-4">
                <input type="text" name="textCmpName" id="cnm" class="form-control" placeholder="Enter Company Name" required/>
              </div>
              <br />
              <div class="form-group" style="float: right;" >
                <button type="button" id="btnAddEmployee" class="btn btn-success"> Add Employee </button>
                <button type="button" id="btnEditEmployee" class="btn btn-success"> Edit Employee </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Manage Employee -->
        <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Company Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody></tbody>
      </table>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<SCRipt src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/6.0.0/bootbox.min.js"></SCRipt>
<script src="index.js"></script>
</html>