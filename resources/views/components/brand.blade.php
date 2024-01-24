@if (count($brands) > 0)
<section id="brand" class="brands section">
    <div class="container mx-auto">
        <div class="flex flex-col xl:flex-row gap-y-12 xl:gap-y-0
             justify-between items-center">
            @foreach ( $brands as $brand )
            <img class="brands__logo" src="{{ Storage::url($brand->image) }}" alt="{{ $brand->name }}">
            @endforeach
        </div>
    </div>
</section>
@endif