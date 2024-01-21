

<!-- Modal -->
<div class="modal fade" id="editMerk{{$merk->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('merk-mobil.update',$merk->id)}}" method="post">
        {{csrf_field()}}
      <div class="modal-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Merk Mobil</label>
            <input type="text" class="form-control" name="merk-mobil" placeholder="Edit Merk Mobil" 
            value="{{$merk->merk}}" required>
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