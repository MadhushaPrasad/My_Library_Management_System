function loginCheck() {
    var email = $("#email").val();
    var password = $("#password").val();
    if (email === "" && password === "") {
        swal("Error", "You cant Login without enter any Data..!", "error");
    } else if (email === "") {
        swal("Error", "You cant Login without enter Email..!", "error");
    } else if (password === "") {
        swal("Error", "You cant Login without enter Password..!", "error");
    } else {
        var jsonConfig = {
            url: "api/services/LoginService.php?action=checkUser",
            method: "GET",
            data: {
                email: email,
                password: password
            },
            dataTypes: "JSON",
            async: true
        };
        $.ajax(jsonConfig).done(function (res) {
            console.log(res);
            if (res === "") {
                swal("Error", "There is no any user Like That", "error");
            } else {
                document.location.href = "home.html";
            }
        }).fail(function (xhr) {
            alert(xhr);
        });
    }
}