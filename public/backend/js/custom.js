// Sweet Alert

// $("#example2").on("click", ".delete-form button", function (event) {
//     event.preventDefault();
//     var form = $(this).closest("form");
//     var id = $(this).data("id");

//     Swal.fire({
//         title: "Are you sure?",
//         text: "You won't be able to revert this!",
//         icon: "warning",
//         showCancelButton: true,
//         confirmButtonColor: "#3085d6",
//         cancelButtonColor: "#d33",
//         confirmButtonText: "Yes, delete it!",
//     }).then((result) => {
//         if (result.isConfirmed) {
//             form.submit();
//         }
//     });
// });

$(document).ready(function () {
    $("#example2").on("click", ".delete-form button", function (event) {
        event.preventDefault();
        var form = $(this).closest("form");
        var url = form.attr("action");
        var id = $(this).data("id");

        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!",
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: url,
                    type: "DELETE",
                    data: {
                        _token: $('meta[name="csrf-token"]').attr("content"),
                    },
                    success: function (response) {
                        if (response.success) {
                            Swal.fire(
                                "Deleted!",
                                "User has been deleted.",
                                "success"
                            );
                            // Refresh the DataTable
                            $("#example2").DataTable().ajax.reload();
                        } else {
                            Swal.fire(
                                "Error!",
                                "There was a problem deleting the user.",
                                "error"
                            );
                        }
                    },
                    error: function (xhr) {
                        Swal.fire(
                            "Error!",
                            "There was a problem deleting the user.",
                            "error"
                        );
                    },
                });
            }
        });
    });
});

// image preview

$(document).ready(function () {
    $("#image").change(function (e) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $("#showImage").attr("src", e.target.result);
        };
        reader.readAsDataURL(e.target.files["0"]);
    });
});

// Toggle Status
$("#example2").on("change", ".toggleswitch-checkbox", function () {
    var model = $(this).data("model");
    var id = $(this).data("id");
    var state = $(this).prop("checked");
    var checkbox = $(this);

    console.log(model, id, state);

    Swal.fire({
        title: "Are you sure?",
        text: "You want to change the status!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, change it!",
    }).then((result) => {
        if (result.isConfirmed) {
            axios
                .get(`/toggle-status/${model}/${id}`)
                .then((response) => {
                    Swal.fire({
                        icon: "success",
                        title: "Updated!",
                        text: "The status has been updated.",
                        timer: 2000,
                        showConfirmButton: false,
                        toast: true,
                        position: "top-end",
                    });
                })
                .catch((error) => {
                    Swal.fire({
                        icon: "error",
                        title: "Error!",
                        text: "There was an issue updating the status.",
                        timer: 2000,
                        showConfirmButton: false,
                        toast: true,
                        position: "top-end",
                    });
                    checkbox.prop("checked", !state); // Revert the toggle switch
                });
        } else {
            checkbox.prop("checked", !state); // Revert the toggle switch
        }
    });
});
// PDF Preview
