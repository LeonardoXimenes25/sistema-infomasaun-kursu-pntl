<x-filament::widget>
    <x-filament::card>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <h3 class="text-center font-bold mb-2">Kursu (Rai Laran)</h3>
                <canvas id="kursuChart" class="w-full h-auto"></canvas>
            </div>
            <div>
                <h3 class="text-center font-bold mb-2">Kursu Rai Liur</h3>
                <canvas id="railiurChart" class="w-full h-auto"></canvas>
            </div>
        </div>
    </x-filament::card>
</x-filament::widget>

@once
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const kursuCanvas = document.getElementById('kursuChart');
                const raiLiurCanvas = document.getElementById('railiurChart');

                if (kursuCanvas) {
                    const kursuCtx = kursuCanvas.getContext('2d');
                    new Chart(kursuCtx, {
                        type: 'pie',
                        data: {
                            labels: ['Mane', 'Feto'],
                            datasets: [{
                                data: [{{ $kursu['mane'] ?? 0 }}, {{ $kursu['feto'] ?? 0 }}],
                                backgroundColor: ['#36A2EB', '#FF6384'],
                            }],
                        },
                        options: {
                            responsive: true,
                            plugins: {
                                legend: { position: 'bottom' },
                                title: { display: false },
                            },
                        }
                    });
                }

                if (raiLiurCanvas) {
                    const raiLiurCtx = raiLiurCanvas.getContext('2d');
                    new Chart(raiLiurCtx, {
                        type: 'pie',
                        data: {
                            labels: ['Mane', 'Feto'],
                            datasets: [{
                                data: [{{ $railiur['mane'] ?? 0 }}, {{ $railiur['feto'] ?? 0 }}],
                                backgroundColor: ['#4BC0C0', '#FF9F40'],
                            }],
                        },
                        options: {
                            responsive: true,
                            plugins: {
                                legend: { position: 'bottom' },
                                title: { display: false },
                            },
                        }
                    });
                }
            });
        </script>
    @endpush
@endonce
