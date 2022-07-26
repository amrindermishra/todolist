<link rel="stylesheet" href="{{ URL::asset('mdb.min.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('resources/mdb.min.js') }}" />
<section class="vh-100" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-9 col-xl-7">
        <div class="card rounded-3">
          <div class="card-body p-4">

            <h4 class="text-center my-3 pb-3">Task List</h4>

            <form class="row row-cols-lg-auto g-3 justify-content-center align-items-center mb-4 pb-2">
              <div class="col-12">
              <a href="/view" class="btn btn-warning">Add Todo</a>
              </div>
            </form>
            <style>
                    table, th, td {
                    border:1px solid black;
                    }
                    </style>
            <table class="table mb-4">
              <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Task Title</th>
                <th scope="col">Description</th>
                <th scope="col">Date</th>
                <th scope="col">Operation</th>
              </tr>
              @foreach($list as $key =>  $in)
                <tr>
                    <th>{{$key+1}}</th>
                    <th>{{$in->name}}</th>
                    <th>{{$in->description}}</th>
                    <th>{{$in->date}}</th>
                    <th>
                    <a style="color:black" href="/dlduser/{{$in['id']}}" class="btn btn-danger">Delete</a>
                    <a style="color:black" href="/view-editing/{{$in['id']}}" class="btn btn-success">Edit</a>
                    </th>
                </tr>
                @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>