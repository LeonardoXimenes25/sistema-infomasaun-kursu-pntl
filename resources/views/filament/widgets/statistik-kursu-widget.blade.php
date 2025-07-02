<x-filament::widget>
    <x-filament::card>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="p-4 bg-green-100 dark:bg-green-900 rounded-xl shadow">
                <div class="text-sm text-gray-600 dark:text-gray-300">Partisipante Rai Laran</div>
                <div class="text-2xl font-bold text-gray-800 dark:text-white">{{ \App\Models\artisipante::count() }}</div>
                <div class="text-xs text-gray-500 dark:text-gray-400">Total</div>
            </div>

            <div class="p-4 bg-blue-100 dark:bg-blue-900 rounded-xl shadow">
                <div class="text-sm text-gray-600 dark:text-gray-300">Kursu Rai Laran</div>
                <div class="text-2xl font-bold text-gray-800 dark:text-white">{{ \App\Models\Kursu::count() }}</div>
                <div class="text-xs text-gray-500 dark:text-gray-400">Total</div>
            </div>

            <div class="p-4 bg-yellow-100 dark:bg-yellow-900 rounded-xl shadow">
                <div class="text-sm text-gray-600 dark:text-gray-300">Partisipante Rai Liur</div>
                <div class="text-2xl font-bold text-gray-800 dark:text-white">{{ \App\Models\PartisipanteRaiLiur::count() }}</div>
                <div class="text-xs text-gray-500 dark:text-gray-400">Total</div>
            </div>

            <div class="p-4 bg-purple-100 dark:bg-purple-900 rounded-xl shadow">
                <div class="text-sm text-gray-600 dark:text-gray-300">Kursu Rai Liur</div>
                <div class="text-2xl font-bold text-gray-800 dark:text-white">{{ \App\Models\KursuRaiLiur::count() }}</div>
                <div class="text-xs text-gray-500 dark:text-gray-400">Total</div>
            </div>
        </div>
    </x-filament::card>
</x-filament::widget>
