<x-jet-form-section submit="updatePassword">
    <x-slot name="title">
        @lang('public.Update_Password')
    </x-slot>

    <x-slot name="description">
        @lang('public.Update_Password_exp')
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="current_password">
                @lang('public.Current_Password')
            </label>
            <x-jet-input id="current_password" type="password" class="mt-1 block w-full" wire:model.defer="state.current_password" autocomplete="current-password" />
            <x-jet-input-error for="current_password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="password">
                @lang('public.New_Password')
            </label>
            <x-jet-input id="password" type="password" class="mt-1 block w-full" wire:model.defer="state.password" autocomplete="new-password" />
            <x-jet-input-error for="password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="password">
                @lang('public.Confirm_Password')
            </label>
            <x-jet-input id="password_confirmation" type="password" class="mt-1 block w-full" wire:model.defer="state.password_confirmation" autocomplete="new-password" />
            <x-jet-input-error for="password_confirmation" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            @lang('public.Saved')
        </x-jet-action-message>

        <x-jet-button>
            @lang('public.Save')
        </x-jet-button>
    </x-slot>
</x-jet-form-section>