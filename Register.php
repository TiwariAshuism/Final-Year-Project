<!DOCTYPE html>
<html lang=en>

<head>
  <meta charset=utf-8 />
  <meta content="width=device-width, initial-scale=1.0" name=viewport />
  <title>Charity TRUST - Charitable Trust</title>
  <meta content name=description />
  <meta content name=keywords />
  <link href=assets/img/favicon.png rel=icon />
  <link href=assets/img/apple-touch-icon.png rel=apple-touch-icon />
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel=stylesheet />
  <link href=assets/vendor/aos/aos.css rel=stylesheet />
  <link href=assets/vendor/boxicons/css/boxicons.min.css rel=stylesheet />
  <link href=assets/vendor/glightbox/css/glightbox.min.css rel=stylesheet />
  <link href=assets/vendor/swiper/swiper-bundle.min.css rel=stylesheet />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel=stylesheet />
  <link href=./assets/css/nucleo-icons.css rel=stylesheet />
  <link href=./assets/css/nucleo-svg.css rel=stylesheet />
  <script src=https://kit.fontawesome.com/42d5adcbca.js crossorigin=anonymous></script>
  <link href=./assets/css/nucleo-svg.css rel=stylesheet />
  <link id=pagestyle href="./assets/css/soft-design-system.css?v=1.0.4" rel=stylesheet />
  <link href=./assets/css/style.css rel=stylesheet />
</head>

<body class=sign-in-illustration><?php include "./includes/header.php";?><section>
    <div class="page-header section-height-100">
      <div class=container>
        <div class=row>
          <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
            <div class="card card-plain">
              <div class="card-header pb-0 text-left">
                <h4 class=font-weight-bolder>Register With Us</h4>
                <p class=mb-0>Say Hello! Usually, we reply within 2 business days </p>
              </div>
              <div class=card-body>
                <div class="alert alert-warning" role=alert id=FormErr style=display:none></div>
                <div class="alert alert-success alert-dismissible" role=alert id=successReg style=display:none></div>
                <form action=./Register.php method=post role=form id=reg-form>
                  <div class=mb-3><input type=text class="form-control form-control-lg" id=reg-name placeholder=Name
                      aria-label=Email aria-describedby=email-addon name=name /></div>
                  <div class=mb-3><input type=email class="form-control form-control-lg" id=reg-email placeholder=Email
                      aria-label=Email aria-describedby=email-addon name=email /></div>
                  <div class=mb-3><input type=text class="form-control form-control-lg" id=reg-phone placeholder=Phone
                      aria-label=Password aria-describedby=password-addon name=phone /></div>
                  <div class=text-center><button class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0"
                      id="reg-submit-btn" onclick="register();return false">
                      Register
                    </button></div>
                </form>
              </div>
              <div class="card-footer text-center pt-0 px-lg-2 px-1"></div>
            </div>
          </div>
          <div
            class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
            <div
              class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center">
              <img src=./assets/img/shapes/pattern-lines.svg alt=pattern-lines
                class="position-absolute opacity-4 start-0" />
              <div class=position-relative><img class="max-width-500 w-100 position-relative z-index-2"
                  src=./assets/img/illustrations/sign-up.png /></div>
              <h4 class="mt-5 text-white font-weight-bolder">
                "Attention is the new currency"
              </h4>
              <p class=text-white>
                The more effortless the writing looks, the more effort the
                writer actually put into the process.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><?php 
include "./includes/footer.php"; 
include "./includes/links.php"; ?><script>
    function register() {
      var name = $("#reg-name").val();
      var mail = $("#reg-email").val();
      var mobile = $("#reg-phone").val();
      alert(1)
      var phoneno = /^\d{10}$/;
      var mailformat = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
      regName = /^[a-zA-Z]+ [a-zA-Z]+$/;
      console.log(name);
      $("#reg-form").show();
      $("#FormErr").show();
      $("#reg-submit-btn,#reg-form").attr('disabled', true);
      $("#reg-submit-btn").html('<i class="las la-spinner la-spin"></i>Creating Account...');
      if (!regName.test(name) && name.length < 5) {
        $("#FormErr").html("<i class='las la-times-circle'></i> Please enter your full name");
        $("#reg-submit-btn").html('Register');
        $("#reg-submit-btn").attr('disabled', false);
        return false;
      } else if (!mobile.match(phoneno)) {
        $("#FormErr").html("<i class='las la-times-circle'></i> Please enter valid Mobile No.");
        $("#reg-submit-btn").html('Register');
        $("#reg-submit-btn").attr('disabled', false);
        return false;
      } else if (!mail.match(mailformat)) {
        $("#FormErr").html("<i class='las la-times-circle'></i> Please enter valid email Address");
        $("#reg-submit-btn").html('Register');
        $("#reg-submit-btn").attr('disabled', false);
        return false;
      } else {
        $.post("connector/register.php", {
          name: name,
          email: mail,
          phone: mobile
        }, function (dt, s) {
          var d = dt;
          console.log(d);
          if (d['success'] == true) {
            $("#successReg").show();
            $("#successReg").html(
              "<i class='las la-check'></i> &nbsp;Registration Successful, We Will Contact You Soon"
            );
            $("#FormErr,#reg-form,#reg-submit-btn").hide();
          } else {
            $("#FormErr").show();
            $("#FormErr").html("<i class='las la-times-circle'></i> " + d['message'] + "");
            $("#reg-submit-btn").html('Register');
            $("#reg-submit-btn").attr('disabled', false);
          }
        });
        $("#FormErr").hide();
        $("#reg-submit-btn").attr('disabled', false);
        return true;
      }
    }
  </script>
</body>

</html>