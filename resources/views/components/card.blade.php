


  <div class="card card-custom" data-aos="fade-down" data-aos-duration="1500">
      <img src="{{ $img }}" class="card-img-top img-custom img-fluid" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>
        <p class="card-text">{{ $description }}</p>
        
      </div>
      <div class="card-footer ">
      <a href="{{ Route ('serviceById', ['id'=>$serviceId]) }}" class="btn btn-custom text-center"><h6>Altre informazioni</h6></a>
      </div>
    </div>
