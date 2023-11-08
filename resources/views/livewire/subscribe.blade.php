<form class="form-inline mt-2">
    <div class="form-group me-sm-3 mb-2" bis_skin_checked="1">
        <label for="inputPassword2" class="sr-only">Email</label>
        <input type="email" wire:model='email' class="form-control" id="inputPassword2" placeholder="Enter Your Email">
        @error('email')
            <span>{{ $message }}</span>
        @enderror
    </div>
    <button type="submit" class="btn btn-solid mb-2" wire:click.prevent='send'>
        <span wire:loading.remove>subscribe</span>
        <span wire:loading>Sending ...</span>
    </button>

        @if (session()->has('msg'))
            <div class="alert alert-success">
                {{ session('msg') }}
            </div>
        @endif
</form>
