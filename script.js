$( document ).ready(function() {
  $('#submit').bind("click", function() {
    var email = $("#ll").val();
    var password = $("#pp").val();
  
    // отправляем данные на сервер
    $.ajax({
      type: "POST",
      url: "login.php",
      data: { 'email': email, 'password': password },
      success: function (response) {
        const obj = JSON.parse(response);
        // если авторизация успешна
        if (obj.status === "true") {
          window.location.href = "admin.php";
        } else {
          // иначе выводим ошибку
          alert(obj.message);
        }
      },
      error: function () {
        alert("Error sending request to server");
      },
    });
  });
});  