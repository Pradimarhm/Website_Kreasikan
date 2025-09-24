<section class="py-6 bg-white dark:bg-gray-900">
    <div class="max-w-screen-xl mx-auto px-4">
        <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white sectorPage2-textBoxUp">
            <span class="text-primary-500">Peta</span>
            <span>Lokasi</span>
            <span class="text-yellow-400">Usaha</span>
        </h2>
        <div id="map" class="rounded-lg shadow-md sectorPage2-cardUp" style="height: 400px; width: 100%;"></div>
    </div>
</section>

@vite('resources/js/visitor/sector/page2.js')

<script>
    const map = L.map('map').setView([-7.599676, 111.904380], 10);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);
</script>
