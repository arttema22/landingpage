@if (count($data) > 0)
<section id="stats" class="stats section">
    <div class="container mx-auto">
        <!-- wrapper -->
        <div class="flex flex-col xl:flex-row gap-y-6 justify-between">
            <!-- item -->
            @foreach ( $data as $item)
            <div class="stats__item flex-1 xl:border-r last:xl:border-none flex flex-col items-center">
                <div class="text-4xl xl:text-[64px] font-semibold text-accent-tertiary
                               xl:mb-2">{{ $item->data }}</div>
                <div>{{ $item->text }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif