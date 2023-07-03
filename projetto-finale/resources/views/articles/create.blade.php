<x-layout>
    <div class="container text-center">
        <div class="row">
            <div class="col_12">
                <h1>Crea articolo</h1>
            </div>
        </div>
    </div>



    <div class="container ">
        <div class="row  ">
            <div class="col-12 col-md-6  align-content-center  ">


                    <form method="POST" action="{{ route('articles.store') }}" enctype="multipart/form-data">
                        <p>Ensert your article</p>
                        @csrf


                        <div class="form-outline mb-4">
                            <input type="text" id="form2Example11" class="form-control" name="title"
                                placeholder="Enter a title" />
                            <label class="form-label" for="form2Example11">Title</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="text" id="form2Example11" class="form-control" name="description"

                            <label class="form-label" for="form2Example11">description</label>
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label">Category</label>
                            <select name="category_id" id="" class="form-control">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label">image</label>
                            <input type="file" name="img" class="form-control">
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label">Body</label>
                            <textarea name="body" cols="30" class="form-control"></textarea>

                        </div>



                        <div class="d-flex align-items-center justify-content-center pb-4">

                            <button type="submit" class="btn btn-outline-danger">Submit</button>
                        </div>

                    </form>


                </section>
            </div>
        </div>
    </div>






</x-layout>
