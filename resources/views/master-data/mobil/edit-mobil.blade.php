

<!-- Modal -->
<div class="modal fade" id="editMobil{{$mobil->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Mobil</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('mobil.update', $mobil->id)}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
      <div class="modal-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Mobil</label>
            <input type="text" class="form-control" name="nama_mobil" value="{{$mobil->nama_mobil}}" placeholder="Tambahkan Nama Mobil" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Merk Mobil</label>
            <select name="merk_id" id="" class="form-control">
              <option value="{{$mobil->merk_id}}">{{$mobil->merk->merk}}</option>
              @foreach($merks as $merk)
              <option value="{{$merk->id}}">{{$merk->merk}}</option>
              @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Warna Mobil</label>
            <input type="text" class="form-control" name="warna_mobil" value="{{$mobil->warna_mobil}}" placeholder="Tambahkan warna Mobil" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Foto Mobil</label>
            <input type="file" class="form-control" name="foto" placeholder="Tambahkan Foto Mobil" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>