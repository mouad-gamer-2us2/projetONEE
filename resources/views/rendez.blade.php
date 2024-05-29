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
                      <a class="nav-link color1" href="/dashboard">
                        <script src="https://cdn.lordicon.com/lordicon.js"></script>
                        <lord-icon
                            src="https://cdn.lordicon.com/jyjslctx.json"
                            trigger="hover"
                            colors="primary:#0e46a3"
                            style="width:18px;height:18px">
                        </lord-icon>
                      </a>
                  </div>
                  <div class="col align-self-center">
                      <a class="nav-link color1" href="/dashboard">
                          <span class="menu-title color1">Dashboard</span> 
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
          <li class="nav-item">
            <div class="container-fluid">
              <div class="row">
                  <div class="col-auto">
                      <a class="nav-link color1" href="{{ route('modify') }}">
                        <script src="https://cdn.lordicon.com/lordicon.js"></script>
                        <lord-icon
                            src="https://cdn.lordicon.com/wkvacbiw.json"
                            trigger="hover"
                            colors="primary:#0e46a3"
                            style="width:18px;height:18px">
                        </lord-icon>
                      </a>
                  </div>
                  <div class="col align-self-center">
                      <a class="nav-link color1" href="{{ route('modify') }}">
                          <span class="menu-title color1">Profile</span> 
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
                        <h4 class="card-title"> les Rendez-Vous du service </h4>
                    </div>
                   
                        </div>
  
                    
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th class="text-center col-1"> ID </th>
                            <th class="text-center col-5"> Informations Rendez-Vous </th>
                            <th class="text-center col-1"> Agent Centre </th>
                            <th class="text-center col-1"> Service responsable</th>
                            <th class="text-center col-1"> Client </th>
                            <th class="text-center col-1"> N° contrat </th>
                            <th class="text-center col-1"> Date de demande </th>
                            <th class="text-center col-1"> Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                          @foreach ($rendezvous as $R)
                          <tr>
                              <td class="text-center text-wrap">{{ $R->ID_RENDEZ_VOUS }}</td>
                              <td class="text-center text-wrap">{{ $R->INFORMATION_RENDEZ_VOUS}}</td>
                              <td class="text-center text-wrap">{{ $R->agent_centre->user->name }}</td>
                              <td class="text-center text-wrap">{{ $R->service->NOM_SERVICE }}</td>
                              <td class="text-center text-wrap">{{ $R->client->NOM_CLIENT}}</td>
                              <td class="text-center text-wrap">{{ $R->ID_CLI}}</td>
                              <td class="text-center text-wrap">{{ $R->created_at}}</td>
  
                                     
                              <td class="text-center text-wrap">
                                  
                                   <form action="{{ route('ajouterrendezvous',$R->ID_RENDEZ_VOUS,$R->ID_CLI ) }}" method="POST">
                                     @csrf
                                   <input type="hidden" name="ID_RENDEZ" value="{{ $R->ID_RENDEZ_VOUS }}">
                                   <input type="hidden" name="ID_CLI" value="{{ $R->ID_CLI }}">
                               
                                    <button type="button" class="btn blue btn-sm" data-toggle="modal" data-target="#exampleModal">
            
                                      <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                      <lord-icon
                                          src="https://cdn.lordicon.com/wmlleaaf.json"
                                          trigger="hover"
                                          colors="primary:#ffffff"
                                          style="width:18px;height:18px">
                                      </lord-icon>
                                    </button>

                               
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                      
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <label for="date_et_heure">choisir Date et heure:</label>
                                           <input type="datetime-local" name="date_et_heure" id="date_et_heure" class="form-control">
                                          </div>
                                          <div class="modal-footer">
                                            <button type="submit" title="Modifier" class="btn btn-success">Enregistrer</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                
                                    
                                   
                                </form>
                              </td>
                              
                          @endforeach
   
                        </tbody>
  
                      </table>
                      <br>
                      {{ $rendezvous->links() }}
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
   
    <script>
      @if($rendezvous->isEmpty())
      Swal.fire({
          title: "Remarque",
          text: "Pas de rendez-vous pour le moment",
          icon: "warning",
          confirmButtonColor: '#ff0000'
      });
    @endif
     </script>
  
  
   
  </x-app-layout>
  
  
  
  
