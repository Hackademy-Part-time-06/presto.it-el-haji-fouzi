<x-layout>
    <div class="container  vh-100 shadow p-5  bg-body rounded mb-4">
        <div class="row">
            <h2 class="text-center my-5">Loggin</h2>


            <div class="card-body p-md-5 mx-md-4 ">

                <div class="text-center">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                        style="width: 185px;" alt="logo">
                    <h4 class="mt-1 mb-5 pb-1">We are The Aulab post</h4>
                </div>

                <form method="post" action="{{ route('login') }}">
                    @csrf
                    <p>Please login to your account</p>

                    <div class="form-outline mb-4">
                        <input type="email" id="form2Example11" class="form-control" placeholder="" name="email" />
                        <label class="form-label" for="form2Example11">Email address</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="password" id="form2Example22" class="form-control" name="password" />
                        <label class="form-label" for="form2Example22">Password</label>
                    </div>


                    <div class="d-flex align-items-center justify-content-center pb-4">
                        <p class="mb-0 me-2">Don't have an account?</p>
                        <button type="submit" class="btn btn-outline-danger">Submit</button>
                    </div>

                </form>

            </div>
        </div>
        <div class="text-red px-3 py-4 p-md-5 mx-md-4">
            <h4 class="mb-4"></h4>
            <p class="small mb-0">

            </p>
        </div>
    </div>
    </div>



</x-layout>
