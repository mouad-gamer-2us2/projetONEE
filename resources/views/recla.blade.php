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
                      <a class="nav-link color1" href="{{ route('showaffecte') }}">
                        <script src="https://cdn.lordicon.com/lordicon.js"></script>
                        <lord-icon
                            src="https://cdn.lordicon.com/hrjifpbq.json"
                            trigger="hover"
                            colors="primary:#0e46a3"
                            style="width:18px;height:18px">
                        </lord-icon>
                      </a>
                  </div>
                  <div class="col-8 align-self-center">
                      <a class="nav-link color1" href="{{ route('showaffecte') }}">
                          <span class="menu-title color1">Mes réclamations</span> 
                      </a>
                  </div>
              </div>
            </div>
          
          </li>
          <li class="nav-item">
            <div class="container-fluid">
              <div class="row">
                  <div class="col-auto">
                      <a class="nav-link color1" href="recla">
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
                      <a class="nav-link color1" href="recla">
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
                      <a class="nav-link color1" href="{{ route('showreclamationtraitee') }}">
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
                      <a class="nav-link color1" href="{{ route('showreclamationtraitee') }}">
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
                      <a class="nav-link color1" href="{{ route('showrendez') }}">
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
                      <a class="nav-link color1" href="{{ route('showrendez') }}">
                          <span class="menu-title color1">Rendez-vous</span> 
                      </a>
                  </div>
              </div>
          </div>
          
          </li>
            <li class="nav-item">
            <div class="container-fluid">
              <div class="row">
                  <div class="col-auto">
                      <a class="nav-link color1" href="{{ route('showaffecte') }}">
                        <script src="https://cdn.lordicon.com/lordicon.js"></script>
                        <lord-icon
                            src="https://cdn.lordicon.com/hrjifpbq.json"
                            trigger="hover"
                            colors="primary:#0e46a3"
                            style="width:18px;height:18px">
                        </lord-icon>
                      </a>
                  </div>
                  <div class="col-8 align-self-center">
                      <a class="nav-link color1" href="{{ route('showmesrendez') }}">
                          <span class="menu-title color1">Mes rendez-vous</span> 
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
          
        </div>
          
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-4">
                      <h4 class="card-title">Les réclamations </h4>
                  </div>
                 
                      </div>

                  
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="text-center"> ID </th>
                          <th class="text-center"> Client </th>
                          <th class="text-center"> Categorie </th>
                          <th class="text-center"> Agent Centre </th>
                        
                          <th class="text-center"> Description </th>
                          <th class="text-center"> URGENCE </th>
                          <th class="text-center"> Etat </th>
                          <th class="text-center" colspan="2"> Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                        @foreach ($reclamations as $recla)
                        @if($recla->ETAT=="pas encore traitée")
                        <tr>
                            <td class="text-center text-wrap" name="id_reclamations">{{ $recla->ID_RECLAMATION }}</td>
                            <td class="text-center text-wrap" >{{ $recla->client->NOM_CLIENT}}</td>
                            <td class="text-center text-wrap">{{ $recla->categorie_reclamation->NOM_CATEGORIE }}</td>
                            <td class="text-center text-wrap">{{ $recla->agent_centre->user->name }}</td>
                            
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
                          
                            <td>       
                           
                                 <form action="{{ route('ajoutreclama', $recla->ID_RECLAMATION) }}" method="POST">
                                     @csrf
                                   <input type="hidden" name="ID_RECLAMATION" value="{{ $recla->ID_RECLAMATION }}">

                                
                                    
                                    <button type="submit" class="btn blue btn-sm" title="Modifier">
                                        <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                          <lord-icon
                                              src="https://cdn.lordicon.com/oqdmuxru.json"
                                              trigger="hover"
                                              colors="primary:#ffffff"
                                              style="width:18px;height:18px">
                                          </lord-icon>
                                    </button>
                                </form>
                            
                      
                             </td>
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


