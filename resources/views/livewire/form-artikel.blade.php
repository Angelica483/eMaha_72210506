<div>
<form wire:submit.prevent="simpan">
            <div class="form-group">
                <label>Judul</label>
                <input wire:model="judul" type="text" name=""
                class="form-control" placeholder="Masukan Judul">
            </div>

            <div class="form-group">
                <label>Deskripsi</label>
                <textarea wire:model="deskripsi" name="" id="" cols="30" rows="10"
                class="form-control"></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
                </div>
         
        </form>
</div>

