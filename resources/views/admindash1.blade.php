<x-app-layout>
    
    <div class="container-scroller">
      <div class="row p-0 m-0 " id="proBanner">
        <div class="col-md-12 p-0 m-0">
         
        </div>
      </div>
     
    
      
      <div class="container-fluid page-body-wrapper">
        
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
             
            </li>
            
            
            <li class="nav-item">
              <div class="container-fluid">
                <div class="row">
                    <div class="col-auto">
                        <a class="nav-link color1" href="{{ route('showservices') }}">
                            <script src="https://cdn.lordicon.com/lordicon.js"></script>
                            <lord-icon
                                src="https://cdn.lordicon.com/sbrtyqxj.json"
                                trigger="hover"
                                colors="primary:#0e46a3"
                                style="width: 18px; height: 18px;">
                            </lord-icon>
                        </a>
                    </div>
                    <div class="col align-self-center">
                        <a class="nav-link color1" href="{{ route('showservices') }}">
                            <span class="menu-title color1">Services</span> 
                        </a>
                    </div>
                </div>
            </div>
            
            </li>
            <li class="nav-item">
              <div class="container-fluid">
                <div class="row">
                    <div class="col-auto">
                        <a class="nav-link color1" href="{{route('showcategories')}}">
                            <script src="https://cdn.lordicon.com/lordicon.js"></script>
                            <lord-icon
                                src="https://cdn.lordicon.com/keaiyjcx.json"
                                trigger="hover"
                                colors="primary:#0e46a3"
                                style="width: 18px; height: 18px;">
                            </lord-icon>
                        </a>
                    </div>
                    <div class="col align-self-center">
                        <a class="nav-link color1" href="{{route('showcategories')}}">
                            <span class="menu-title color1">Catégories</span> 
                        </a>
                    </div>
                </div>
            </div>
            
            </li>
            <li class="nav-item">
              <div class="container-fluid">
                <div class="row">
                    <div class="col-auto">
                        <a class="nav-link color1" href="{{route('showpersonnels')}}">
                            <script src="https://cdn.lordicon.com/lordicon.js"></script>
                            <lord-icon
                                src="https://cdn.lordicon.com/iazmohzf.json"
                                trigger="hover"
                                colors="primary:#0e46a3"
                                style="width: 18px; height: 18px;">
                            </lord-icon>
                        </a>
                    </div>
                    <div class="col align-self-center">
                        <a class="nav-link color1" href="{{route('showpersonnels')}}">
                            <span class="menu-title color1">Personnels</span> 
                        </a>
                    </div>
                </div>
            </div>
            
            </li>
            <li class="nav-item">
              <div class="container-fluid">
                <div class="row">
                    <div class="col-auto">
                        <a class="nav-link color1" href="/chatify">
                          <script src="https://cdn.lordicon.com/lordicon.js"></script>
                          <lord-icon
                              src="https://cdn.lordicon.com/ayhtotha.json"
                              trigger="hover"
                              colors="primary:#0e46a3"
                              style="width:18px;height:18px">
                          </lord-icon>
                        </a>
                    </div>
                    <div class="col align-self-center">
                        <a class="nav-link color1" href="/chatify">
                            <span class="menu-title color1">Chat</span> 
                        </a>
                    </div>
                </div>
              </div>
            
            </li>
            
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="container d-flex justify-content-center align-items-center">
              <div class="page-header text-center">
               
            </div>
            
          </div>
            
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <!-- -->
                            <h4 class="card-title " >Services de l'ONEE </h4>
                        </div>
                        <div class="col-md-6">
                          <form method="POST" action="{{ route('searchSER') }}" class="form-inline">
                            @csrf
                            <input class="form-control mr-sm-2" type="search" name="NOM_SERVICE"placeholder="chercher par nom de service" aria-label="Search">
                            <button class="btn btn-dark btn-sm" type="submit"> 
                              <script src="https://cdn.lordicon.com/lordicon.js"></script>
                              <lord-icon
                                  src="https://cdn.lordicon.com/kkvxgpti.json"
                                  trigger="hover"
                                  colors="primary:#ffffff"
                                  style="width:18px;height:18px">
                              </lord-icon></button>
                          </form>
                        </div>
                        <div class="col-auto">
                           
                            <a href="{{ route('createSER') }}" class="btn btn-success" title="Ajouter un service">
                                <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                <lord-icon
                                    src="https://cdn.lordicon.com/hqymfzvj.json"
                                    trigger="hover"
                                    colors="primary:#ffffff"
                                    style="width:20px;height:20px">
                                </lord-icon>
                            </a>
                        </div>
                    </div>
                    <br>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th class="text-center col-1"> # </th>
                            <th class="text-center col-1"> Nom Services </th>
                            <th class="text-center col-2"> Categories </th>
                            <th class="text-center col-5"> Description </th>
                            <th class="text-center col-1"> Appartenance </th>
                            <th class="text-center" colspan="2"> Actions </th>
                          </tr>
                        </thead>
                        <tbody>
                            
                            
                            
                            @foreach ($SERVICES as $S)
                            <tr>
                                <td class="text-center text-wrap ">{{ $S->ID_SERVICE }}</td>
                                <td class="text-center text-wrap ">{{ $S->NOM_SERVICE }}</td>
                                <td class="text-center text-wrap ">{{ $S->CATEGORIE_SERVICE }}</td>
                                <td class="text-center text-wrap ">{{ $S->DESCRIPTION }}</td>
                                <td class="text-center text-wrap ">{{ $S->APPARTENANCE }}</td>
                                <td class="text-center">
                                    <div class="row">
                                        <div class="col-auto">
                                            <form action="{{ route('editSER',$S->ID_SERVICE) }}" method="GET">
                                               
                                                
                                            <button type="submit" class="btn blue btn-sm" title="Modifier">
                                                <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                                <lord-icon
                                                    src="https://cdn.lordicon.com/pflszboa.json"
                                                    trigger="hover"
                                                    colors="primary:#ffffff"
                                                    style="width:18px;height:18px">
                                                </lord-icon>
                                            </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="col-auto">
                                            <form action="{{ route('destroySER',$S->ID_SERVICE) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                        
                                            <button type="submit" class="btn verybad btn-sm" title="Supprimer">
                                                <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                                <lord-icon
                                                    src="https://cdn.lordicon.com/wpyrrmcq.json"
                                                    trigger="hover"
                                                    colors="primary:#ffffff"
                                                    style="width:18px;height:18px">
                                                </lord-icon>
                                            </button>
                                            </form>
                                        </div>
                                </div>
                                </td>
                               
                                
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                      <br>
                      {{ $SERVICES->links() }}
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>
        

        </div>
      
      </div>
   
    </div>
    @if(Session::has('message'))
  <script>
     Swal.fire({
          position: "center",
          icon: "success",
          title: "{{ Session::get('message') }}",
          showConfirmButton: false,
          timer: 1500
      });

    </script>
  @endif

  @if(Session::has('error'))
  <script>
    Swal.fire({
  icon: "error",
  title: "Oops...",
  text: "{{ Session::get('error') }}",
  
});

    </script>
  @endif
   
</x-app-layout>




