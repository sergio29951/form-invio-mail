<x-layout>

        <section class="container-fluid bg-custom">
            <div class="row justify-content-center align-items-center">
                @foreach ($services as $service)
                    <div class="col-12 col-md-4 my-5 d-flex justify-content-center align-items-center">
                        <div data-aos="zoom-in-right"  data-aos-duration="2000">
                            <x-card 
                                title="{{ $service['title'] }}"
                                img="{{ $service['img'] }}"
                                description="{{ $service['description'] }}"
                                serviceId="{{ $service['id'] }}"
                            />
                        </div>    
                    </div>     
                @endforeach
            </div>
        </section> 

</x-layout>