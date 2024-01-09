<!-- CategoryWise/1 -->

<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">



            @foreach ($products as $item)


            <div class="col mb-5">
                <div class="card h-100">
                    <h2 class="text-center py-3">{{ $item->name }}</h2>
                    <!-- Product image-->
                    <img class="card-img-top" src="{{ url('/public/uploads/',$item->image) }}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h2 class="fw-bolder">{{ $item->name }}</h2>
                            <!-- Product price-->
                            <h6>Price: BDT {{ $item->price }} / hr</h6>
                            <h6> Availability: {{ $item->stock }} </h6>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{ route('product.details',$item->id) }}"></i>Details</a></div>
                    </div>
                </div>
            </div>


            @endforeach
        </div>
    </div>
</section>