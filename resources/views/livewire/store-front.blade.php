<div class="grid grid-cols-4 gap-4 mt-12">
    @foreach ($this->products as $product)
        <div class="bg-white rounded-lg p-4 shadow-sm">
            <img
                src="{{ $product->image->path }}"
                alt=""
            >
            <div class="text-center">
                <h2 class="font-medium text-lg">
                    {{ $product->name }}
                </h2>
                <span class="text-gray-700 text-sm">
                    {{ $product->priceDisplay }}
                </span>
            </div>
        </div>
    @endforeach
</div>
