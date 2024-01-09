<!-- product/page -->
<style>

    .image_holder{
        width: 100%;
        height: 250px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .card_spec_image {
        margin-bottom: 0px;
        justify-content: center;
        align-items: center;
        max-width: 100%;
        max-height: 100%;
    }
</style>
<div class="container-fluid p-5 mt-3">
    <section class="py-10">
        <div>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">


                @foreach ($products as $item)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <h3 class="text-center font-weight-bold">{{ $item->name }}</h3>
                            <div class="image_holder">
                                <img class="card_spec_image" src="{{ url('/public/uploads/' . $item->image) }}"
                                    alt="..." />
                            </div>
                            <a class="text-center p-3 btn-success mt-auto"
                                href="{{ route('category.wise', $item->id) }}">
                                Tap to see more
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
