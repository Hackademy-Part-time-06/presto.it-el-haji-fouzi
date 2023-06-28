





    <x-layout>
        <section class="h-100 gradient-form" style="background-color #eee;">
            <div>
                <p>
                    @if(session('message'))
                    <div class=""alert alert-success>
                        {{ session('message') }}
                    </div>
                    @endif
                </p>
            </div>
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="#"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">Aulab post</h4>
                </div>


              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">We are more than just a semple blog</h4>
                <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                  exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


</x-layout>



