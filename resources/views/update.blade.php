@extends("layouts");

@section('content')

<div class="form-check">
    <form action="" method="POST">
        <div class="row g-3 align-items-center">
            <div class="col-auto">
            <label for="inputPassword6" value="{{@user->name}}" class="col-form-label">name</label>
            </div>
            <div class="col-auto">
              <input name="name" type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
            </div>
            <div class="col-auto">
              <label  for="inputPassword6" class="col-form-label">address</label>
            </div>
            <div class="col-auto">
              <input name="address" type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
            </div>
            
          </div>
        <button type="submit" class="btn btn-success">Update</a>
    </form>
</div>
@endsection