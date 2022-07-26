
<link rel="stylesheet" href="{{ URL::asset('mdb.min.css') }}" />
<script src="mdb.min.js"></script>
  <link rel="stylesheet" href="{{ URL::asset('custom.css') }}" />
    <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">

        <div class="card">
          <div class="card-body p-5">
             <div class="text-center pt-3 pb-2">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp"
                alt="Check" width="60">
              <h2 class="my-4">Task List</h2>
            </div>
            <form action="/send" method="POST" enctype="multipart/form-data">@csrf
                <div class="form-outline flex-fill">
                <input type="text" class="form-control" name="name" ><br>
                <label class="form-label" for="name">Task Title...</label>
                </div>
                <div>

                <div class="form-outline flex-fill">
                <textarea id="form2" name="description" rows="4" cols="50" class="form-control" ></textarea>
                <label class="form-label" for="description">Description...</label>
                </div>
                <div class="form-outline flex-fill">
                    <input type="date" class="form-control" name="date" format="mm/dd/yyyy"><br><br>
                </div>
                <div>
              <button type="submit" class="btn btn-primary">Add</button>
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