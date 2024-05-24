<x-app-layout>
  <div class="container-scroller">
    <div class="row p-0 m-0 " id="proBanner">
      <div class="col-md-12 p-0 m-0">
       
      </div>
    </div>
    <!-- partial:partials/_navbar.html -->
  
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
           
          </li>
          
          
          <li class="nav-item">
            <div class="container-fluid">
              <div class="row">
                  <div class="col-auto">
                      <a class="nav-link color1" href="{{ route('showclients') }}">
                        <script src="https://cdn.lordicon.com/lordicon.js"></script>
                        <lord-icon
                            src="https://cdn.lordicon.com/hrjifpbq.json"
                            trigger="hover"
                            colors="primary:#0e46a3"
                            style="width:18px;height:18px">
                        </lord-icon>
                      </a>
                  </div>
                  <div class="col align-self-center">
                      <a class="nav-link color1" href="{{ route('showclients') }}">
                          <span class="menu-title color1">Espace clients</span> 
                      </a>
                  </div>
              </div>
          </div>
          
          </li>
          <li class="nav-item">
            <div class="container-fluid">
              <div class="row">
                  <div class="col-auto">
                      <a class="nav-link color1" href="{{ route('showrecla') }}">
                        <script src="https://cdn.lordicon.com/lordicon.js"></script>
                        <lord-icon
                            src="https://cdn.lordicon.com/abvsilxn.json"
                            trigger="hover"
                            colors="primary:#0e46a3"
                            style="width:18px;height:18px">
                        </lord-icon>
                      </a>
                  </div>
                  <div class="col align-self-center">
                      <a class="nav-link color1" href="{{ route('showrecla') }}">
                          <span class="menu-title color1">Réclamations</span> 
                      </a>
                  </div>
              </div>
          </div>
          
          </li>
          <li class="nav-item">
            <div class="container-fluid">
              <div class="row">
                  <div class="col-auto">
                      <a class="nav-link color1" href="{{ route('showhistorique') }}">
                        <script src="https://cdn.lordicon.com/lordicon.js"></script>
                        <lord-icon
                            src="https://cdn.lordicon.com/dafdkyyt.json"
                            trigger="hover"
                            colors="primary:#0e46a3"
                            style="width:18px;height:18px">
                        </lord-icon>  
                      </a>
                  </div>
                  <div class="col align-self-center">
                      <a class="nav-link color1" href="{{ route('showhistorique') }}">
                          <span class="menu-title color1">Historique</span> 
                      </a>
                  </div>
              </div>
          </div>
          
          </li>
          <li class="nav-item">
            <div class="container-fluid">
              <div class="row">
                  <div class="col-auto">
                      <a class="nav-link color1" href="{{ route('showrendezvous') }}">
                        <script src="https://cdn.lordicon.com/lordicon.js"></script>
                        <lord-icon
                            src="https://cdn.lordicon.com/wmlleaaf.json"
                            trigger="hover"
                            colors="primary:#0e46a3"
                            style="width:18px;height:18px">
                        </lord-icon>
                      </a>
                  </div>
                  <div class="col align-self-center">
                      <a class="nav-link color1" href="{{ route('showrendezvous') }}">
                          <span class="menu-title color1">rendez-vous</span> 
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
                      <h4 class="card-title">Informations Sur les réclamations :</h4>
                  </div>
                  <div class="col-md-8">
                    <form method="POST" action="{{ route('searchrecla') }}" class="form-inline">
                      @csrf
                      <input class="form-control mr-sm-2" type="search" name="ID_RECLAMATION"placeholder="chercher par ID de reclamation" aria-label="Search">
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
                      </div>
                      <br>

                  
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="text-center col-1"> ID </th>
                          <th class="text-center col-2"> Client </th>
                          <th class="text-center col-1"> Categorie </th>
                          <th class="text-center col-1"> Agent Centre </th>
                          <th class="text-center col-1"> Service responsable</th>
                          <th class="text-center col-5"> Description </th>
                          <th class="text-center col-1"> URGENCE </th>
                          <th class="text-center col-1"> Etat </th>
                          <th class="text-center col-1" colspan="2"> Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                        @foreach ($reclamations as $recla)
                        <tr>
                            <td class="text-center text-wrap">{{ $recla->ID_RECLAMATION }}</td>
                            <td class="text-center text-wrap">{{ $recla->client->NOM_CLIENT}}</td>
                            <td class="text-center text-wrap">{{ $recla->categorie_reclamation->NOM_CATEGORIE }}</td>
                            <td class="text-center text-wrap">{{ $recla->agent_centre->user->name }}</td>
                            <td class="text-center text-wrap">{{ $recla->service->NOM_SERVICE }}</td>
                            <td class="text-center text-wrap">{{ $recla->DESCRIPTION }}</td>
                            <td class="text-center text-wrap @switch($recla->URGENCE)
                              @case('Très élevé')
                                  verybad
                                  @break
                              @case('élevé')
                                  bad
                                  @break
                              @case('moyenne')
                                  normal
                                  @break
                              @case('faible')
                                  low
                                  @break
                              @default
                                  verylow
                          @endswitch">
                              {{ $recla->URGENCE }}
                          </td>
                              <td class="text-center text-wrap">{{ $recla->ETAT}}</td>
                              @if( $recla->ETAT != 'traitée' && $recla->ETAT !='en cours')
                              <td >
                                   
                                       
                                <form action="{{ route('editrecla',$recla->ID_RECLAMATION) }}" method="GET">
                                 @csrf
                                    
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
                            </td>
                            <td>       
                                <form action="{{ route('destroyrecla',$recla->ID_RECLAMATION) }}" method="POST">
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
                       
                            
                      
                             </td>
                             
                                 
                             @else
                                 <td></td>
                                 <td></td>
                             @endif
                        @endforeach
 
                      </tbody>

                    </table>
                    <br>
                    {{ $reclamations->links() }}
                  </div>
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


