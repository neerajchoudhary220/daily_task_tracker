<div class="row">
    <div class="col-12">
        <form wire:submit="save">
            <div class="row">
                <div class="col-6 form-group">
                    <label for="title" class="form-label">Tile</label>
                    <input type="text" id="title" name="title" class="form-control" wire:model="title">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-12 form-group">
                    <label for="description" class="form-label">Description</label>
                    <textarea id="description" name="description" class="form-control" cols="4" rows="5"
                        wire:model.live.debounce.250ms="description"></textarea>
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-12 form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
    </form>
</div>

<div class="col-12 p-3">
    @if ($message = Session::get('message'))
        <div class="alert alert-success">
            {{ $message }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">X</button>
        </div>
    @endif


</div>
</div>

</div>
