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
                            <span class="menu-title color1"> Espace Clients</span> 
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
                            <span class="menu-title color1">réclamations</span> 
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
                      <div class="row ">
                          <div class="col-auto">
                              <h4 class="card-title">Historique des Réclamations traitée :</h4>
                          </div>
                          
                      </div>
                      <br>
                      
                      
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th class="text-center col-1"> ID </th>
                            <th class="text-center col-1"> Client </th>
                            <th class="text-center col-1"> Categorie réclamation </th>
                            <th class="text-center col-1"> Agent centre</th>
                            <th class="text-center col-2"> Service responsable </th>
                            <th class="text-center col-3"> Description </th>
                            <th class="text-center col-1"> Urgence </th>
                            <th class="text-center col-2"> procédure </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($reclamationAffectees as $reclamationAffectee)
                  
                          <tr>
                              <td class="text-center text-wrap" >{{$reclamationAffectee->ID_REC_AFF}}</td>
                              <td class="text-center text-wrap" >{{ $reclamationAffectee->reclamation->client->NOM_CLIENT}}</td>
                              <td class="text-center text-wrap">{{ $reclamationAffectee->reclamation->categorie_reclamation->NOM_CATEGORIE }}</td>
                              <td class="text-center text-wrap">{{ $reclamationAffectee->reclamation->agent_centre->user->name }}</td>
                              <td class="text-center text-wrap">{{ $reclamationAffectee->reclamation->service->NOM_SERVICE }}</td>
                              <td class="text-center text-wrap">{{ $reclamationAffectee->reclamation->DESCRIPTION }}</td>
                              <td class="text-center text-wrap @switch($reclamationAffectee->reclamation->URGENCE)
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
                                {{  $reclamationAffectee->reclamation->URGENCE }}
                            </td>
                           
                               
                            <td class="text-center text-wrap">
                                  {{ $reclamationAffectee->Procedure}}
                            </td>
                          @endforeach
                          
                            
                            
                           
                                   
                        </tbody>
                       
                      </table>
                      <br>
                      {{ $reclamationAffectees->links() }}
                      
                      
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
  
    @if(Session::has('new'))
    <script>
       Swal.fire({
            position: "center",
            icon: "success",
            title: "{{ Session::get('new') }}",
            showConfirmButton: true,
            
        });
  
      </script>
    @endif
  
  
  
   
  </x-app-layout>
  
  
  
  
  
  