<x-layout>

     <section class="container-fluid bg-cloud">
        <div class="row">
            <div class="col-12 col-md-4 mt-5 pt-3 mx-auto"data-aos="fade-left" data-aos-duration="1500">
                <form method="POST" action="{{ Route('contact.submit') }}">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label"><h6>Email</h6></label>
                      <input type="email" class="form-control" name ="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label"><h6>Nome</h6></label>
                      <input type="text" name ="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label"><h6>Telefono</h6></label>
                        <input type="tel" name ="phone" class="form-control">
                      </div>
                      <div class="mb-3">
                        <label  class="form-label"><h6>Messaggio</h6></label>
                        <textarea name="mex" id="" cols="30" rows="10"  class="form-control"></textarea>
                      </div>
                    <button type="submit" class="btn btn-custom mb-5">Invia</button>
                  </form>
            </div>
            <div class="col-12 col-md-4 py-5 mt-auto mx-auto mb-5" data-aos="fade-up" data-aos-duration="1500">
                <h3 class="text-center">Dove siamo</h3>
                <div class="mapouter"><div class="gmap_canvas"><embed width="600" height="500"  id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=7&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></embed><a href="https://fmovies-online.net"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">embed google maps wordpress</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
            </div>
        </div>
     </section>
        
</x-layout>