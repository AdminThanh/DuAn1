window.addEventListener("scroll", function () {
  let headerMenu = document.querySelector("#menu-area");
  if (window.pageYOffset > 0) {
    headerMenu.classList.add("cus-nav");
  } else {
    headerMenu.classList.remove("cus-nav");
  }
});

function loginOnclick() {
  var x = document.querySelector(".login-children__list");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

function loginOnblur() {
  var x = document.querySelector(".login-children__list");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

$(document).ready(function () {
  //   On TOP
  $(window).scroll(function () {
    if ($(this).scrollTop() > 500) {
      $("#toTop").fadeIn();
    } else {
      $("#toTop").fadeOut();
    }
  });
  $("#toTop").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 600);
    return false;
  });

  //  Thanh toán
  $("input[type=radio][name=banking]").change(function () {
    if (this.value == "payLater") {
      $(".content-banking").addClass("content-banking-none");
    } else if (this.value == "banking") {
      $(".content-banking").removeClass("content-banking-none");
    }
  });

  // Mô tả và đánh giá.
  $("input[type=radio][name=desc][checked=checked]").change(function () {
    if (this.value == "desc") {
      $(".content-desc").removeClass("content-banking-none");
      $(".content-rate").addClass("content-banking-none");
    } else if (this.value == "rate") {
      $(".content-desc").addClass("content-banking-none");
      $(".content-rate").removeClass("content-banking-none");
    }
  });
  // Đăng nhập

  $("#login-tab").click(function () {
    $("#login").css("display", "block");
    $(".app").css("opacity", "0.8");
    $("html, body").animate({ scrollTop: 0 }, 100);
    return false;
    // $('html, body').css({
    //     overflow: 'hidden',
    //     height: '100%'
    // });
  });
  $(".close-login").click(function () {
    $("#login").css("display", "none");
    $(".app").css("opacity", "1");
  });

  // Đăng ký
  $(".regsiter-show").click(function () {
    $("#login").css("display", "none");
    $("#regsiter").css("display", "block");
  });
  $(".login-show").click(function () {
    $("#regsiter").css("display", "none");
    $("#login").css("display", "block");
  });
  $(".close-regsiter").click(function () {
    $("#regsiter").css("display", "none");
    $(".app").css("opacity", "1");
  });

  // Quên mật khẩu
  $(".forgot-show").click(function () {
    $("#login").css("display", "none");
    $("#regsiter").css("display", "none");
    $("#forgot").css("display", "block");
  });
  $(".login-show").click(function () {
    $("#regsiter").css("display", "none");
    $("#forgot").css("display", "none");
    $("#login").css("display", "block");
  });
  $(".close-forgot").click(function () {
    $("#forgot").css("display", "none");
    $(".app").css("opacity", "1");
    $("html, body").css({
      overflow: "auto",
      height: "auto",
    });
  });
});
// REGSITER VALIDATE
$("#form_regsiter").validate({
  rules: {
    email: {
      required: true,
      email: true,
    },
    phone: {
      required: true,
      number: true,
      minlength: 10,
    },
    password: {
      required: true,
      minlength: 6,
    },
    repassword: {
      equalTo: "#password",
    },
    name: {
      required: true,
    },
  },
  messages: {
    email: {
      required: "Bạn chưa nhập email",
      email: "Email chưa đúng định dạng",
      remote: "Email đã tồn tại trong hệ thống. Mời bạn chọn email khác",
    },
    phone: {
      required: "Bạn phải nhập số điện thoại",
      number: "Số điện thoại bắt buộc là số",
      minlength: "Số điện thoại không được dưới 10 ký tự",
    },
    password: {
      required: "Bạn phải nhập mật khẩu",
      minlength: "Mật khẩu tối thiểu là 6 ký tự",
    },
    repassword: {
      equalTo: "Mật khẩu không khớp",
    },
    name: {
      required: "Bạn phải nhập họ và tên",
    },
  },
  submitHandler: function (form) {
    $.ajax({
      type: "POST",
      url: "./Home/RegisterAction",
      data: $(form).serializeArray(),
      success: function (response) {
        response = JSON.parse(response);
        if (response.status == 0) {
          swal("Thất bại!", response.message, "error");
          $("#regsiter").css("display", "none");
          $("#forgot").css("display", "none");
        } else {
          swal("Thành công!", response.message, "success");
          $("#regsiter").css("display", "none");
          $("#forgot").css("display", "none");
          setTimeout("location.href = './login';", 2000);
        }
      },
    });
  },
});

// LOGIN VALIDATE
$("#form_login").validate({
  rules: {
    email: {
      required: true,
      email: true,
    },
    password: {
      required: true,
      minlength: 6,
    },
  },
  messages: {
    email: {
      required: "Bạn chưa nhập email",
      email: "Email chưa đúng định dạng",
    },
    password: {
      required: "Vui lòng nhập mật khẩu",
      minlength: "Password tối thiểu là 6 ký tự",
    },
  },
  submitHandler: function (form) {
    $.ajax({
      type: "POST",
      url: "./loginAction",
      data: $(form).serializeArray(),
      success: function (response) {
        response = JSON.parse(response);
        if (response.status == 0) {
          //Đăng nhập lỗi
          swal("Thất bại!", response.message, "error");
        } else {
          //Đăng nhập thành công
          swal("Thành công!", response.message, "success");
          setTimeout("location.href = './';", 1500);
        }
      },
    });
  },
});

/* Animated Navigation */
const toggle = document.querySelector("#toggle");
const nav = document.querySelector("#nav-tablet-mobile");

toggle.addEventListener("click", () => nav.classList.toggle("active"));
