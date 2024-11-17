jQuery(document).ready(function () {
  // Get all Employee
  getAllEmployee();

  function getAllEmployee() {
    $.ajax({
      url: "./get_all_employee.php",
      method: "POST",
      dataType: "json",
      success: function (res) {
        getUser(res.userdata);
        // console.log(res);
      },
    });
  }

  function getUser(response) {
    let data = "";
    $.each(response, function (index, value) {
      data += "<tr>";
      data += "<td>" + (index + 1) + "</td>";
      data += "<td>" + value.name + "</td>";
      data += "<td>" + value.email + "</td>";
      data += "<td>" + value.password + "</td>";
      data += "<td>" + value.company_name + "</td>";
      data +=
        "<td data-attr=" +
        value.id +
        "><button type='button' class='btn btn-info btnEdit' id='edit'>Edit</button>  ";
      data +=
        "<button type='button' class='btn btn-danger btnDel' id='delete''>Delet</button></td>";
      data += "</tr>";
    });
    $("tbody").html(data);
  }

  jQuery("#btnAddEmployee").click(function () {
    $.ajax({
      type: "POST",
      url: "addemployee.php",
      data: $("#frm").serialize(),
      success: function (res) {
        toastr.success(res, "Success", { timeOut: 3000 });
        getAllEmployee();
        $("#myModal").modal("hide");
        $("#name").val("");
        $("#email").val("");
        $("#cnm").val("");
        $("#pass").val("");
      },
    });
  });

  // Delete Data
  $("body").on("click", ".btnDel", function () {
    let id = $(this).parent("td").data("attr");
    bootbox.confirm(
      "Are u sure want to delete this record !",
      function (result) {
        if (result) {
          $.ajax({
            url: "./delete_employee.php",
            method: "post",
            data: { uid: id },
            success: function (res) {
              $(this).parent("td").parent("tr").remove();
              toastr.success(res, "Success", { timeOut: 3000 });
              getAllEmployee();
            },
          });
        } else {
          bootbox.alert("Record not Deleted");
        }
      }
    );
  });

  // Edit
  $("body").on("click", ".btnEdit", function () {
    let id = $(this).parent("td").data("attr");
    let name = $(this)
      .parent("td")
      .prev("td")
      .prev("td")
      .prev("td")
      .prev("td")
      .text();
    let eid = $(this).parent("td").prev("td").prev("td").prev("td").text();
    let pass = $(this).parent("td").prev("td").prev("td").text();
    let cnm = $(this).parent("td").prev("td").text();
    $("#vid").val(id);
    $("#name").val(name);
    $("#email").val(eid);
    $("#pass").attr("type", "text");
    $("#pass").val(pass);
    $("#cnm").val(cnm);
    $("#myModal").modal("show");
    $("#btnAddEmployee").hide();
    $("#btnEditEmployee").show();
  });
  $("#btnEditEmployee").click(function () {
    $.ajax({
      url: "./edit_employee.php",
      method: "post",
      data: $("#frm").serialize(),
      success: function (res) {
        toastr.success(res, "Success", { timeOut: 3000 });
        getAllEmployee();
        $("#myModal").modal("hide");
        $("#name").val("");
        $("#email").val("");
        $("#cnm").val("");
        $("#pass").val("");
        location.reload();
      },
    });
  });
  // create button code
  $("#btnCreate").click(function () {
    $("#btnAddEmployee").show();
    $("#btnEditEmployee").hide();
  });
});
