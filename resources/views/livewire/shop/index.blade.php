<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="form-group">
                <input wire:model="search" type="text" class="form-control" placeholder="Search Product">
            </div>
        </div>
    </div>

    <div class="row">

        @foreach ($products as $product)
        <div class="col-sm-12 col-xs-12 col-md-4 col-lg-3 mb-4">
            <div class="card h-80 mt-5">
                <img class="card-img-top img-fluid" src="{{ $product->image ? asset('/storage/' . $product->image) : 'https://media.istockphoto.com/vectors/default-image-icon-vector-missing-picture-page-for-website-design-or-vector-id1357365823?k=20&m=1357365823&s=612x612&w=0&h=ZH0MQpeUoSHM3G2AWzc8KkGYRg4uP_kuu0Za8GFxdFc=' }}" alt="">
                <div class="card-img-overlay" style="background-color: rgba(54, 54, 54, 0.5);">
                    <h5 class="text-white">
                        <strong>{{ $product->title }}</strong>
                    </h5>
                    <h6 class="text-white">Rp{{ number_format($product->price,2,",",".") }}</h6>
                    <p class="text-white">
                        {{ $product->description }}
                    </p>
                    <div>
                        <button wire:click="addToCart({{ $product->id }})" type="button" class="btn btn-dark btn-sm btn-block btn-outline-secondary text-white">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
    <div class="mt-5">
        {{ $products->links() }}
    </div>
</div>
