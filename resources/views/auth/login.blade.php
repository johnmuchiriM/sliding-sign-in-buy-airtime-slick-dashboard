<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel= "stylesheet" href= "{{asset('bootstrap-5.0.0-dist/css/login.css')}}">
    <title>Digital Sacco</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form">
            <h2 class="title">Digital Sacco | Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Phone no" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
            <input type="submit" value="Login" class="btn solid" />
            <p class="social-text">Follow us on our social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form action="#" class="sign-up-form">
            <h2 class="title">Buy Airtime</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Phone no" />
            </div>
            <div class="input-field">
              <i class="fas fa-coins"></i>
              <input type="number" placeholder="Amount" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
            <input type="submit" class="btn" value="Buy" />
            <p class="social-text">Follow us on our social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          <!-- </form>
          <form action="#" class="sign-up-form">
            <h2 class="title">Loan Airtime</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Phone no" />
            </div>
            <div class="input-field">
              <i class="fas fa-coins"></i>
              <input type="number" placeholder="Amount" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
            <input type="submit" class="btn" value="Get Loan" />
            <p class="social-text">Follow us on our social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form> -->
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Buy or Loan some Airtime ?</h3>
            <p>
              Do you want to buy for self or a friend? Do it here.
               You can Loan some Airtime too!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Buy
            </button>
            <button class="btn transparent" id="loan-btn">
              Loan
            </button>
          </div>
          <img src="public/../../img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Welcome back. Need to check your personal details!
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="public/../../img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="{{asset('bootstrap-5.0.0-dist/js/login.js')}}"></script>
  </body>
</html>
