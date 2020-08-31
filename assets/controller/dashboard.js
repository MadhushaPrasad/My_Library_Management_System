$(document).ready(function () {
    getAllBrrowedBooks();
});


function getAllBrrowedBooks() {
    console.log("Hello Test");
    $('#tBody').empty();

    $.ajax({

        url: "api/services/DashboardService.php?action=getAllBrrowed",
        method: "GET",
        async: true,
        dataType: "json"

    }).done(function (res) {

        for (var i in res) {
            $('#tBody').append("<tr class=\"table-info\"> " +
                "<td>res[i][0] </td> " +
                "<td>res[i][1]</td> " +
                "<td> res[i][2] </td> " +
                "<td> res[i][3] </td> " +
                "<td> res[i][4]</td> " +
                "<td> res[i][5] </td>\n" +
                "</tr>");
        }

    }).fail(function (xhr) {
        console.log(xhr);
    });

}