<section class="relative bg-white dark:bg-gray-900 sm:px-6">
    <div class="flex flex-col max-w-screen-xl mx-auto px-2 pb-8 gap-8">
        <div class="flex w-full h-fit items-center justify-between">
            <div class="grid grid-cols-4 w-full h-1 rounded-full overflow-hidden">
                <div class="col-span-3 bg-primary-500"></div>
                <div class="bg-yellow-400"></div>
            </div>
            <h1 class="text-primary-800 text-2xl font-bold w-full text-center">Daftar Produk</h1>
            <div class="grid grid-cols-4 w-full h-1 rounded-full overflow-hidden">
                <div class="bg-yellow-400"></div>
                <div class="col-span-3 bg-primary-500"></div>
            </div>
        </div>
        <div class="mb-4 grid gap-4 md:mb-8 md:grid-cols-3 lg:grid-cols-4 xs:grid-cols-2 grid-cols-1">
            @for ($i = 0; $i < 12; $i++)
                <x-ui.card-product>

                </x-ui.card-product>
            @endfor
        </div>
    </div>
</section>
