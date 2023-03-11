<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </head>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
            <form action="{{ route('register.custom') }}" method="POST" id="form-data">
            @csrf
              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                  <label class="form-label" for="firstName">First Name</label>
                    <input type="text" id="first_name" name="first_name" class="form-control form-control-lg" />
                    @if($errors->has('first_name'))
                      <span class="help-block">
                          <strong class="text-danger">{{ $errors->first('first_name') }}</strong>
                      </span>
                      @endif
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                  <label class="form-label" for="lastName">Last Name</label>
                    <input type="text" id="last_name" name="last_name" class="form-control form-control-lg" />
                    @if($errors->has('first_name'))
                      <span class="help-block">
                          <strong class="text-danger">{{ $errors->first('first_name') }}</strong>
                      </span>
                      @endif
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                  <label for="birthdayDate" class="form-label">DOB</label>
                    <input type="date" class="form-control form-control-lg" id="date" name="date"/>
                  </div>

                </div>
                <div class="col-md-6 mb-4">   
                <div class="form-outline">
                <label class="form-label" for="phoneNumber">Phone Number</label>
                    <input type="tel" id="number" name="number" class="form-control form-control-lg" />
                    @if($errors->has('number'))
                      <span class="help-block">
                          <strong class="text-danger">{{ $errors->first('number') }}</strong>
                      </span>
                      @endif
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                  <label class="form-label" for="emailAddress">Email</label>
                    <input type="email" id="email" name="email" class="form-control form-control-lg" />
                    @if($errors->has('email'))
                      <span class="help-block">
                          <strong class="text-danger">{{ $errors->first('email') }}</strong>
                      </span>
                      @endif
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">
                <div class="form-outline">
                <label class="form-label" for="emailAddress">Password</label>
                    <input type="password" id="password" name="password" class="form-control form-control-lg" />
                    @if($errors->has('password'))
                      <span class="help-block">
                          <strong class="text-danger">{{ $errors->first('password') }}</strong>
                      </span>
                      @endif
                  </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" autocomplete="current-password">
                    </div>
                </div>
              </div>
              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
        $(document).ready(function() {
            $("#form-data").validate({
                rules: {
                    first_name: "required",
                    last_name: "required",
                    email: "required",
                    number: "required",
                    password: "required",
                    
                }
            });
        });
    </script>
</html>

