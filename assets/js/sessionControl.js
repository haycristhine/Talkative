/**
 * Created by Haydê on 02/11/2015.
 */

function login(user,pass){
    var usrForm = user;
    var passForm = pass;
    //var regra = /^[0-9]+$/;

    if(usrForm === "" && passForm === ""){
        alert('Preencha todos os campos!');
    }
    else {
        if (usrForm === "") {
            alert('Digite a matrícula!');
        }
        else {
            if (passForm === "") {
                alert('Digite a senha!');
            }
            else
                    var user;
                    $.ajax({
                        type: "GET",
                        url: 'service/Login/' + usrForm + '/' + passForm,
                        success: function (data) {
                            user = jQuery.parseJSON(data);
                            if (user) {
                                $.post("Login.php?acao=logar", {username: usrForm})
                                    .done(function (data) {
                                        if (data == 'ok')
                                            window.location.href = 'home.php';
                                    });
                            } else {
                                alert('Username ou senha incorreta!');
                            }
                        }
                    });
                }
            }
}

function logout(){
    $.post("Login.php?acao=sair")
        .done(function () {
            window.location.href = "index.php";
        });
}