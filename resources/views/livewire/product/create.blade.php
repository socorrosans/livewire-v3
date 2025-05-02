<div class="space-y-4">
    <h1 class="font-medium text-3xl mb-10">Criar produto</h1>

    <form action="" class="max-w-md" wire:submit="save">
        <div class="flex flex-col gap-2 mb-3">
            <label for="name">Name</label>
            <input id="name" type="text" class="p-1 border border-gray-600 rounded-md" wire:focus="clearSession" wire:model="form.name">
            @error('form.name') <span class="text-gray-400 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="flex flex-col gap-2 mb-3">
            <label for="description">Description</label>
            <input id="description" type="text" class="p-1 border border-gray-600 rounded-md" wire:model="form.description">
            @error('form.description') <span class="text-gray-400 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="flex flex-col gap-2 mb-3">
            <label for="price">Price</label>
            <input id="price" type="number" class="p-1 border border-gray-600 rounded-md" wire:model="form.price">
            @error('form.price') <span class="text-gray-400 text-sm">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-primary w-xs">Save</button>
    </form>

    @session('success')
        <p class="text-green-300 text-sm">{{ session()->get('success') }}</p>
    @endsession
</div>
