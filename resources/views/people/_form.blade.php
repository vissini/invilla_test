<div class="box-body">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name='name' id="name" placeholder="Name" value="{{ old('name',$person->name) }}">
    </div>
</div>
<!-- /.box-body -->