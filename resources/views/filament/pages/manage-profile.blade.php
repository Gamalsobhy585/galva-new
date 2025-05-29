<x-filament-panels::page>
    <div class="space-y-6">
        <x-filament-panels::form wire:submit="updatePassword">
            {{ $this->form }}
            
            <x-filament-panels::form.actions 
                :actions="$this->getHeaderActions()"
                :full-width="false"
            />
        </x-filament-panels::form>
    </div>
</x-filament-panels::page>