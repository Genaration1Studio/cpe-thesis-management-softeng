function ShowPassword() {
  var pass = document.getElementById("pass");

  if (pass.type === "password") {
    pass.type = "text";
    document.getElementById("show-pass-icon").style.display = "none";
    document.getElementById("hide-pass-icon").style.display = "inline";
    document.getElementById("text_pass").innerHTML = "ซ่อนรหัสผ่าน";
  } else {
    pass.type = "password";
    document.getElementById("show-pass-icon").style.display = "inline";
    document.getElementById("hide-pass-icon").style.display = "none";
    document.getElementById("text_pass").innerHTML = "แสดงรหัสผ่าน";
  }
}
