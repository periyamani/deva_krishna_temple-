// add value

$(document).ready(function() {
    $("#contact-form").submit(function(e) {
        e.preventDefault();
        var addcontact = {
            name: $("input[name='name']").val(),
            email: $("input[name='email']").val(),
            number: $("input[name='number']").val(),
            subject: $("input[name='subject']").val(),
            message: $("textarea[name='message']").val(),
        };
        console.log(addcontact);
        $.ajax({
            type: "POST",
            url: "/api/ContactSend",
            data: addcontact,
            success: function(data) {
                console.log(data);

                // $(".add_submit_btn").removeAttr("disabled");
                $(".add_submit_btn").html("Save");
                if (data && data.id) {
                    Swal.fire({
                        title: "Message Send!",
                        text: "You clicked the button!",
                        icon: "success",
                        customClass: {
                            confirmButton: "btn btn-warning",
                        },
                        buttonsStyling: false,
                    });
                    $("input[name='name']").val(" ");
                    $("input[name='email']").val(" ");
                    $("input[name='number']").val(" ");
                    $("input[name='subject']").val(" ");
                    $("textarea[name='message']").val(" ");
                } else {
                    Swal.fire({
                        title: "Error! Message not send..",
                        text: " You clicked the button!",
                        icon: "error",
                        customClass: {
                            confirmButton: "btn btn-danger",
                        },
                        buttonsStyling: false,
                    });
                }
            },
        });
        return false;
    });
});

// function success() {
//     Swal.fire({
//         title: "Success!",
//         text: "You clicked the button!",
//         icon: "success",
//         customClass: {
//             confirmButton: "btn btn-primary",
//         },
//         buttonsStyling: false,
//     });
// }

// function error() {
//     Swal.fire({
//         title: "Error!",
//         text: " You clicked the button!",
//         icon: "error",
//         customClass: {
//             confirmButton: "btn btn-primary",
//         },
//         buttonsStyling: false,
//     });
// }

$(document).ready(function() {
    $(".add_btn").on("click", function() {
        $("#addmodel").modal("show");
    });
});

$(document).ready(function() {
    $(".video_add").on("click", function() {
        $("#uploadInput").click();
    });
});

// document.getElementsByClassName("remove_option").addEventListener("click", myFunction);

function removeadd(classid) {
    // alert(classid);
    $(".addremove" + classid).remove();
}

// edit function in show in value
function editshowvalue(ID) {
    $.ajax({
        type: "get",
        url: "/api/RemarkValue",
        data: { id: ID },
        success: function(data) {
            console.log(data);
            $("#editmodel").modal("show");
            $.each(data, function(key, val) {
                $("input[name='id']").val(val.id);
                $("#edit_name").val(val.name);
                $("#edit_f_name").val(val.father_name);
                $("#edit_amount").val(val.amount);
                $("#edit_number").val(val.number);
                $("#edit_address").val(val.address);
            });
        },
    });
}

function removeedit(id) {
    alert(id);
    $(".remove" + id).remove();
    // $(".edit_input_old").append('<input type="hidden" name="oldphoto[]">');
}

$(document).ready(function() {
    var hshshsh = document.getElementsByClassName("edit_file_remove");
    hshshsh.onclick = function() {
        alert("Finaly!");
    };
    //   $(".video_add").on('click', function() {

    //    $("#uploadInput").click();

    // });
    $(".video_edit").on("click", function() {
        $("#uploadInputedit").click();
    });
});

$(document).ready(function() {
    $("#Editform").submit(function(e) {
        e.preventDefault();

        $(".edit_submit_btn").attr("disabled", "disabled");
        $(".edit_submit_btn").html(
            '<span class="spinner-border spinner_in" role="status" aria-hidden="true"></span> Loading...'
        );
        let formData = new FormData($("#Editform")[0]);
        console.log(formData);
        $.ajax({
            type: "post",
            url: "/api/editPayment",
            data: formData,
            processData: false,
            contentType: false,
            cache: false,
            dataType: "JSON",
            enctype: "multipart/form-data",
            success: function(data) {
                $("input[name='remark']").val(" ");
                $(".edit_submit_btn").removeAttr("disabled");
                $(".edit_submit_btn").html("Save");
                if (data && data.id) {
                    success();
                    $("#editmodel").modal("hide");

                    festivaltable();
                } else {
                    error();
                }
            },
        });
        return false;
    });
});

function Alert(ID) {
    // Delete_acti=checking.id;
    //  alert(Delete_acti);
    var permission_page = $(".delete_option_active").val();
    if (permission_page == "active") {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes, Delete it!",
            customClass: {
                confirmButton: "btn btn-primary me-3",
                cancelButton: "btn btn-label-secondary",
            },
            buttonsStyling: false,
        }).then(function(result) {
            if (result.value) {
                Deletefestivel(ID);
                Swal.fire({
                    icon: "success",
                    title: "Delete",
                    text: "Your payment has been deleted.",
                    customClass: {
                        confirmButton: "btn btn-success",
                    },
                });
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                Swal.fire({
                    title: "Cancelled",
                    text: "Your payment file is safe",
                    icon: "error",
                    customClass: {
                        confirmButton: "btn btn-success",
                    },
                });
            }
        });
    } else {
        permission_dlt();
    }
}

function permission_dlt() {
    Swal.fire({
        title: "Warning!",
        text: "Permission Denied",
        icon: "warning",
        customClass: {
            confirmButton: "btn btn-primary",
        },
        buttonsStyling: false,
    });
}

function Deletefestivel(ID) {
    $.ajax({
        type: "delete",
        url: "/api/DeleteContact",
        data: { user_id: ID },
        success: function(data) {
            console.log(data);
            festivaltable();
        },
    });
}

function success() {
    Swal.fire({
        title: "Success!",
        text: "You clicked the button!",
        icon: "success",
        customClass: {
            confirmButton: "btn btn-primary",
        },
        buttonsStyling: false,
    });
}

function error() {
    Swal.fire({
        title: "Error!",
        text: " You clicked the button!",
        icon: "error",
        customClass: {
            confirmButton: "btn btn-primary",
        },
        buttonsStyling: false,
    });
}

function warning() {
    Swal.fire({
        title: "Warning!",
        text: "You Select Minimum 50MB!",
        icon: "warning",
        customClass: {
            confirmButton: "btn btn-primary",
        },
        buttonsStyling: false,
    });
}

// data table

festivaltable();

function festivaltable() {
    $.ajax({
        type: "get",
        url: "/api/ShowContact",
        success: function(Vdata) {
            var fullValue;
            console.log(Vdata);
            var fullValue = Vdata;
            $(".dt-complex-header").DataTable({
                data: Vdata,
                bDestroy: true,
                // scrollX: false,

                columns: [{
                        data: "id",
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        },
                    },
                    { data: "name" },
                    { data: "email" },
                    { data: "number" },
                    { data: "subject" },
                    { data: "message" },
                    { data: "remark" },
                    {
                        data: null,
                        render: function(data) {
                            var fromedate = data.id;

                            fromefullvalue =
                                '<button class="btn btn-outline-success btn-icon me-3" onclick="editshowvalue(' +
                                fromedate +
                                ')"><i class="bx bxs-edit"></i></button>';
                            // +
                            // '<button class="btn btn-outline-danger btn-icon me-3" onclick="Alert(' +
                            // fromedate +
                            // ')"><i class="bx bx-trash me-1"></i></button>'
                            return fromefullvalue;
                        },
                    },
                ],

                dom: '<"row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end"f>><"table-responsive"t><"row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
                displayLength: 10,
                lengthMenu: [10, 25, 50, 75, 100],
            });
        },
    });
}

$(".dt-complex-header tbody").on("click", ".delete-record", function() {
    dt_basic.row($(this).parents("tr")).remove().draw();
    console.log(dt_basic.id);
});