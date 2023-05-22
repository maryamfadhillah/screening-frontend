<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Screening Frontend</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
    a {
      text-decoration: none;
    }
    </style>

</head>

<body>

    <section class="bg-primary text-dark bg-opacity-10">
        <div class="container d-flex flex-column">
          <div class="row align-items-center justify-content-center gx-0 min-vh-100">
            <div class="col col-md-5 col-lg-3 py-6 py-md-11" data-aos="fade-up">
    
              <div class="text-dark bg-transparent">
                <div class="row gx-0">
                  <div class="col-12">
    
                      <h2 class="fw-bold text-center">
                        Login
                      </h2>
    
                      <p class="fw-bold mb-0 mb-md-3 py-0 text-center">Place order here</p>

                      <form action="https://fe-screening.onrender.com/login" id="login-form">
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label text-muted">Username</label>
                            <input class="form-control" id="username-input" name="username" required>
                          </div>
    
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label text-muted">Password</label>
                            <input class="form-control" id="password-input" name="password" requireed>
                          </div>

                          <div class="d-flex flex-wrap justify-content-between">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" checked id="remember_me">
                              <label class="form-check-label" for="remember_me">Remember me</label>
                            </div><a class="">Forgot password?</a>
                          </div>

                          <hr class="my-3">
                          <div class="text-end">
                            <button class="btn btn-primary" type="submit" id="login-btn">Login</button>
                          </div>
                      </form>

                  </div>
    
                </div> <!-- / .row -->
              </div>
    
            </div>
          </div> <!-- / .row -->
        </div> <!-- / .container -->
      </section>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="login.js"></script>
</body>

</html>
