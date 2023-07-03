


    <x-layout>
        <section class="h-100 gradient-form" style="background-color: #eee;">
            <h2 class="align-items-center"  >Register</h2>
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">We are The Aulab post</h4>
                </div>

                <form  method="post"  action="{{ route('register') }}">
                  <p>Please login to your account</p>
                  @csrf


                  <div class="form-outline mb-4">
                    <input type="text" id="form2Example11" class="form-control" name="name"
                      placeholder="Enter your name" />
                    <label class="form-label" for="form2Example11">Name</label>
                  </div>
                   <div class="form-outline mb-4">
                    <input type="email" id="form2Example11" class="form-control" name="email"
                      placeholder="Enter your email" />
                    <label class="form-label" for="form2Example11">Email</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example22" class="form-control"  name="password"/>
                    <label class="form-label" for="form2Example22">Password</label>
                  </div>
                   <div class="form-outline mb-4">
                    <input type="password" id="form2Example22" class="form-control" name="password_confirmation" />
                    <label class="form-label" for="form2Example22">Confirm Password</label>
                  </div>



                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Don't have an account?</p>
                    <button type="submit" class="btn btn-outline-danger">Submit</button>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4"></h4>
                <p class="small mb-0">
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    </x-layout>

