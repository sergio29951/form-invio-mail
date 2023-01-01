<x-layout>


    <x-header />

    <div class="container-fluid bg-custom">
        <section class="container-fluid">
            <div class="row">
                @foreach ($services as $service)
                    <div class="col-12 col-md-4 my-5 d-flex justify-content-center align-items-center">
                        <div data-aos="flip-left"  data-aos-duration="1500">

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

        <x-cloud/>
    </div>


   
</x-layout>

