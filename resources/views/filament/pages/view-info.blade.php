<x-filament::page>
    @if ($record)
        <div class="grid gap-6 md:grid-cols-3">
            <!-- Projects Count Card -->
            <div class="rounded-xl border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                <div class="flex items-center space-x-3">
                    <x-heroicon-o-clipboard-document-list class="h-6 w-6 text-primary-500" />
                    <h3 class="text-lg font-medium text-gray-900 dark:text-white">Projects Completed</h3>
                </div>
                <p class="mt-4 text-3xl font-bold text-primary-600 dark:text-primary-400">
                    {{ number_format($record->projects_count) }}
                </p>
                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Total projects delivered</p>
            </div>

            <!-- Customers Count Card -->
            <div class="rounded-xl border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                <div class="flex items-center space-x-3">
                    <x-heroicon-o-users class="h-6 w-6 text-success-500" />
                    <h3 class="text-lg font-medium text-gray-900 dark:text-white">Happy Customers</h3>
                </div>
                <p class="mt-4 text-3xl font-bold text-success-600 dark:text-success-400">
                    {{ number_format($record->customers_count) }}
                </p>
                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Satisfied clients worldwide</p>
            </div>

            <!-- Tons Per Month Card -->
            <div class="rounded-xl border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                <div class="flex items-center space-x-3">
                    <x-heroicon-o-scale class="h-6 w-6 text-warning-500" />
                    <h3 class="text-lg font-medium text-gray-900 dark:text-white">Monthly Production</h3>
                </div>
                <p class="mt-4 text-3xl font-bold text-warning-600 dark:text-warning-400">
                    {{ number_format($record->tons_per_month) }} <span class="text-lg">tons</span>
                </p>
                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Average monthly output</p>
            </div>
        </div>

        <!-- Edit Button -->
        <div class="mt-8 flex justify-end">
            <x-filament::button
                :href="route('filament.admin.resources.infos.edit', ['record' => $record])"
                icon="heroicon-o-pencil-square"
                size="sm"
            >
                Edit Statistics
            </x-filament::button>
        </div>
    @else
        <!-- Empty State (unchanged) -->
        <div class="flex flex-col items-center justify-center py-12 text-center">
            <x-heroicon-o-information-circle class="mx-auto h-12 w-12 text-gray-400" />
            <h3 class="mt-2 text-lg font-medium text-gray-900">No statistics yet</h3>
            <p class="mt-1 text-gray-500">Click the button below to add company statistics.</p>
            <x-filament::button
                :href="route('filament.admin.resources.infos.create')"
                class="mt-4"
                icon="heroicon-o-plus"
            >
                Create Statistics
            </x-filament::button>
        </div>
    @endif
</x-filament::page>