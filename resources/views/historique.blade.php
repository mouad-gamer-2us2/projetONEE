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
                          <div class="col-md-4">
                              <h4 class="card-title">Historique des Réclamations traitée </h4>
                          </div>
                          <div class="col-md-6">
                            <form method="POST" action="{{ route('searchHISTORY') }}" class="form-inline">
                              @csrf
                              <input class="form-control mr-sm-2" type="search" name="ID"placeholder="chercher par nom de service" aria-label="Search">
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
                            <th class="text-center col-1"> Client </th>
                            <th class="text-center col-1"> Categorie réclamation </th>
                            <th class="text-center col-1"> Agent centre</th>
                            <th class="text-center col-1"> Service responsable </th>
                            <th class="text-center col-4"> Description </th>
                            
                            <th class="text-center col-4"> procédure </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($reclamations as $rec)
                  
                        <tr>
                            <td class="text-center text-wrap" name="id_reclamations">{{$rec->ID_RECLAMATION}}</td>
                            <td class="text-center text-wrap" >{{ $rec->CLIENT}}</td>
                            <td class="text-center text-wrap">{{ $rec->AGENT_CENTRE }}</td>
                            <td class="text-center text-wrap">{{ $rec->CATEGORIE_RECLAMATION}}</td>
                            <td class="text-center text-wrap">{{ $rec->SERVICE_RESPONSABLE}}</td>
                            <td class="text-center text-wrap">{{ $rec->DESCRIPTION}}</td>
                          <td class="text-center text-wrap">
                         
                          <button type="button" class="btn blue btn-sm" data-toggle="modal" data-target="#exampleModal{{ $rec->ID_RECLAMATION }}">
                                            <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                            <lord-icon
                                                src="https://cdn.lordicon.com/yxczfiyc.json"
                                                trigger="hover"
                                                colors="primary:#ffffff"
                                                style="width:18px;height:18px">
                                            </lord-icon>
                          </button>
                            <div class="modal fade" id="exampleModal{{ $rec->ID_RECLAMATION }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel" name="procedure">procédure de résolution :</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <p >{{ $rec->PROCEDURE}}</p>
                                          </div>
                                          <div class="modal-footer">
                                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                          </div>
                                        </div>
                                      </div>
                            </div>
                        </td>
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

    <script>
      @if($reclamations->isEmpty())
      Swal.fire({
          title: "Remarque",
          text: "rien n a été enregistré",
          icon: "warning",
          confirmButtonColor: '#ff0000'
      });
    @endif
     </script>
  
  
  
   
  </x-app-layout>
  
  
  
  
  
  