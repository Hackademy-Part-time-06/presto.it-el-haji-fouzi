
<x-layout>
  <div class="container my-5 vh-100">
            <form method="post" action="{{ route('register') }}">
                @csrf
                <h2>Registration</h2>

                <div class="form-group">
                    <label for="Name" class="col-sm-3 control-label"> Username</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" placeholder=" Name" class="form-control" name="name">
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email address </label>
                    <div class="col-sm-9">
                        <input type="email" id="email" placeholder="Email" class="form-control" name= "email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password*</label>
                    <div class="col-sm-9">
                        <input type="password" id="password" placeholder="Password" name="password" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Confirm Password*</label>
                    <div class="col-sm-9">
                        <input type="password" id="password" placeholder="Password" name="password_confirmation" class="form-control">
                    </div>
                </div>



                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">

                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block my-5">Submit</button>
            </form> <!-- /form -->
        </div> <!-- ./container -->

</x-layout>
