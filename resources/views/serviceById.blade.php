<x-layout>



        <section class="container-fluid">
            <div class="row">
                    <div class="col-12 col-md-4 my-5 d-flex justify-content-center align-items-center">
                        <x-card 
                            title="{{ $service['title'] }}"
                            img="{{ $service['img'] }}"
                            description="{{ $service['description'] }}"
                            serviceId="{{ $service['id'] }}"

                        />
                    </div>     
            </div>
        </section>  
        


</x-layout>