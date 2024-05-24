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
                      <h4 class="card-title">Mes réclamations : </h4>
                  </div>
                  
                      </div>

                  
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="text-center col-1"> ID </th>
                          <th class="text-center col-1"> Client </th>
                          <th class="text-center col-1"> Categorie </th>
                          <th class="text-center col-1"> Agent Centre </th>
                          <th class="text-center col-5"> Description </th>
                          <th class="text-center col-1"> URGENCE </th>
                          <th class="text-center col-1"> Etat </th>
                          <th class="text-center col-1"> Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                       @foreach($reclamationAffectees as $reclamationAffectee)
                       @if($reclamationAffectee->reclamation->ETAT=="en cours")
                        <tr>
                            <td class="text-center text-wrap" name="id_reclamations">{{$reclamationAffectee->ID_REC_AFF}}</td>
                            <td class="text-center text-wrap" >{{ $reclamationAffectee->reclamation->client->NOM_CLIENT}}</td>
                            <td class="text-center text-wrap">{{ $reclamationAffectee->reclamation->categorie_reclamation->NOM_CATEGORIE }}</td>
                            <td class="text-center text-wrap">{{ $reclamationAffectee->reclamation->agent_centre->user->name }}</td>
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
                         
                              <td class="text-center text-wrap">{{ $reclamationAffectee->reclamation->ETAT}}</td>
                          
                              <td class="text-center text-wrap">      
                           
                                 <form action="{{ route('ajoutreclamatraitee', $reclamationAffectee->reclamation->ID_RECLAMATION) }}" method="POST">
                                     @csrf
                                   <input type="hidden" name="ID_RECLAMATION" value="{{  $reclamationAffectee->reclamation->ID_RECLAMATION }}">
                                  <!-- Button trigger modal -->
                                    <button type="button" class="btn blue btn-sm" data-toggle="modal" data-target="#exampleModal" title="enregistrer la procedure de traitement">
            
                                      <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                          <lord-icon
                                              src="https://cdn.lordicon.com/oqdmuxru.json"
                                              trigger="hover"
                                              colors="primary:#ffffff"
                                              style="width:18px;height:18px">
                                          </lord-icon>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel" name="procedure">procédure de résolution :</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <textarea name="procedure" id="procedure" cols=53 rows=10></textarea>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="submit" title="Modifier" class="btn btn-success">Enregistrer</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                
                                    
                                   
                                </form>
                            
                             </td>
                        @endif
                        @endforeach
 
                      </tbody>

                    </table>
                    <br>
                    
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


 


