
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>   

<title>Document</title>
</head>
<body>
 <!-- Table with panel -->
<div class="card card-cascade narrower">

<!--Card image-->
<div
  class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">

  <div>
    <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
      <i class="fas fa-th-large mt-0"></i>
    </button>
    <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
      <i class="fas fa-columns mt-0"></i>
    </button>
  </div>

  <h1>OUR MENU </h1>

  <div>
    <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
      <i class="fas fa-pencil-alt mt-0"></i>
    </button>
    <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
      <i class="far fa-trash-alt mt-0"></i>
    </button>
    <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
      <i class="fas fa-info-circle mt-0"></i>
    </button>
  </div>

</div>
<!--/Card image-->

<div class="px-4 container">

  <div class="table-wrapper">
    <!--Table-->
    <table class="table table-hover mb-0 table-dark">

      <!--Table head-->
      <thead>
        <tr>
          
          </th>
    
          <th class="th-lg">
            <a>
              <i class="fas fa-sort ml-1"></i>
            </a>
          </th>
          <th class="th-lg">
           Image
              <i class="fas fa-sort ml-1"></i>
            
          </th>
          <th class="th-lg">
           Name of dish
              <i class="fas fa-sort ml-1"></i>
           
          </th>
          <th class="th-lg">
           Description
              <i class="fas fa-sort ml-1"></i>
         
          </th>
          <th class="th-lg">
           Price
              <i class="fas fa-sort ml-1"></i>
         
          </th>
         
        </tr>
      </thead>
      <!--Table head-->

      <!--Table body-->
       <!--main menu-->
      <tbody>
     
        {{-- @foreach ($categories as $category) --}}
        {{-- {{$i=7}}; --}}
        @foreach ($menus as $menu)
        
        <form method="POST" action="{{ route('orders1.store'  ) }}" enctype="multipart/form-data">          
          @csrf
        <tr>
          <th scope="row">
            <input class="form-check-input" type="checkbox" id="checkbox1"  name="menus[]" value="{{ ($menu->id) }}">
            <label class="form-check-label" for="checkbox1" class="label-table"></label>
          </th>
          <td><img src="/public/cat/{{ $menu->image }}"style="width:60px; height:60px;"></td>
          <td>{{ $menu->name }}</td>
          <td>{{ $menu->description }}</td>
          <td>{{ $menu->price }}</td>
           
        </tr>
        {{-- @endforeach --}}
        {{-- {{$i++}}; --}}
        @endforeach
      </tbody>
        <button type="submit"
        class="px-4 py-2 mb-3 btn btn-success bg-success-500 hover:bg-indigo-700 rounded-lg text-white" style="float:right" >Submit</button>

      </form>
        
<!-- Table with panel -->   
</body>
</html>
