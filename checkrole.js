window.onload = function() {
    var role = String(getCookie("role"));
    var button1 = document.getElementById("button1");
    var button2 = document.getElementById("button2");
    if(role == "admin" || role == "teacher"){
        button1.style.display = "block";
        button2.style.display = "block";
    }
    else{
        if(role == "curator"){
            document.getElementById("buttond").remove();
            button2.style.display = "block";
        }
        else{
            button1.style.display = "block";
            button1.innerHTML = "Рейтинг шаныраков";
            document.getElementById("button2d").remove();
            button1.style.fontSize = "25px";
        }
    }
};

// возвращает куки с указанным name,
// или undefined, если ничего не найдено
function getCookie(name) {
    let matches = document.cookie.match(new RegExp(
      "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
  }

function doFunc(){
    var Role = String(getCookie("role"));
    if(Role == "student"){
        window.location.href = "rating.php";
    }
    else{
        window.location.href = "nagrada.php";
    }
}