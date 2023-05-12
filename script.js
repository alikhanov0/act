function send() {
    // получаем значения из полей ввода
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
          // перенаправляем на страницу в зависимости от роли
          if (obj.role === "admin") {
            window.location.href = 'admin.php';
          } else if (obj.role === "teacher") {
            window.location.href = 'teacher.php';
          } else if (obj.role === "curator") {
            window.location.href = 'curator.php';
          } else if (obj.role === "student") {
            window.location.href = 'student.php';
          }
        } else {
          // иначе выводим ошибку
          alert("Error");
        }
      },
      error: function () {
        alert("Error sending request to server");
      },
    });
  }
  