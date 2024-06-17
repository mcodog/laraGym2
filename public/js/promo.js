$(document).ready(function () {
    $.ajax({
        type: "GET",
        url: "/api/promo",
        dataType: 'json',
        success: function (data) {
            console.log(data);
            $.each(data, function (key, value) {
                console.log(value);
                id = value.customer_id;
                var img = "<img src=" + value.image_path + " width='200px', height='200px'/>";
                var tr = $("<tr>");
                tr.append($("<td>").html(value.customer_id));
                tr.append($("<td>").html(img));
                tr.append($("<td>").html(value.lname));
                tr.append($("<td>").html(value.fname));
                tr.append($("<td>").html(value.addressline));
                tr.append("<td align='center'><a href='#' data-toggle='modal' data-target='#customerModal' id='editbtn' data-id=" + id + "><i class='fas fa-edit' aria-hidden='true' style='font-size:24px; color:blue'></i></a></td>");
                tr.append("<td><a href='#'  class='deletebtn' data-id=" + id + "><i  class='fa fa-trash' style='font-size:24px; color:red' ></a></i></td>");
                $("#cbody").append(tr);
            });
        },
        error: function () {
            console.log('AJAX load did not work');
            alert("error");
        }
    });

})