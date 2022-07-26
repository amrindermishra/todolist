
<link rel="stylesheet" href="{{ URL::asset('mdb.min.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('custom.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('mdb.min.js') }}" />
    <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">

        <div class="card">
          <div class="card-body p-5">
             <div class="text-center pt-3 pb-2">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp"
                alt="Check" width="60">
              <h2 class="my-4">Update Todo</h2>
            </div>
            <form action="/edit" method="POST" enctype="multipart/form-data">@csrf
            <input type="hidden" name="id" value="{{$data['id']}}"><br><br>
                <div class="form-outline flex-fill">
                Todo Title:<input type="text" class="" name="name"  value="{{$data['name']}}" require><br>
                <label class="form-label" for="name">...</label>
                </div>
                <div>

                <div class="form-outline flex-fill">
                Description:<textarea name="description" rows="4" cols="30" value="{{$data['description']}}" require></textarea><br>
                </div>
                <div class="form-outline flex-fill">
                    Date:<input type="date" class="" name="date" value="{{$data['date']}}" require><br><br>
                </div>
                <div>
              <button type="submit" class="btn btn-success">Update</button>
              <a href="/listview" class="btn btn-warning">Todo List</a>
              </div>
            </form>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>