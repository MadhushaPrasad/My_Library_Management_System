function addUser() {
    var userName = $('#uName').val();
    var userEmail = $('#uEmail').val();
    var userPassword = $('#uPassword').val();
    var userConfirmPassword = $('#CPassword').val();
    var containerDiv = $('#container');

    if (userName === "" && userEmail === "" && userPassword === "" && userConfirmPassword === "") {
        swal("Error", "You cant Signup without any data enter..!", "error");
    } else if (userPassword !== userConfirmPassword) {
        swal("Error", "Your Confirm Password do not match with Password", "error");
    } else {

        var jsonConfig = {
            url: "api/services/UserService.php?action=addUser",
            method: "POST",
            data: {
                userName: userName,
                email: userEmail,
                password: userPassword
            },
            dataType: "JSON",
            async: true
        };
        $.ajax(jsonConfig).done(function (res) {
            if (res === "") {
                swal("Error", "Something wrong.\n Your Account not Create", "error");
            } else {
                swal("Good job!", "Your Account is Created..!", "success");
                containerDiv.removeClass("right-panel-active");
            }
        }).fail(function (xhr) {
            console.log(xhr.responseText);
        });
    }
}