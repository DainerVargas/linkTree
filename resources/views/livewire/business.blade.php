<div class="conte_form">
    <form class="form" id="business">
        <div class="conte_image">
            @if ($image)
                <img class="logo" src="{{ $image->temporaryUrl() }}" alt="">
            @else
                <img class="logo" src="{{ asset('images/' . $user->businesses[0]->picture) }}" alt="">
            @endif

            <label for="image" class="file-label">
                <input hidden type="file" id="image" wire:model="image">
                <span class="material-symbols-outlined edit">
                    edit_square
                </span>
            </label>
        </div>

        <div class="flex ">
            <label>
                <input name="name" class="input" type="text" placeholder=""
                    value="{{ old('name') . $user->businesses[0]->name }}">
                <span>Business</span>
            </label>
        </div>
        <div class="flex">
            <textarea placeholder="Escribe una información" class="information" name="information" id="">{{ $user->businesses[0]->information }}</textarea>
        </div>
        <button class="submit">Save</button>
    </form>
</div>
