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
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-3 ">
                            <h4 class="card-title">Informations Sur les clients </h4>
                        </div>
                        <div class="col-md-5 d-flex justify-content-center">
                            <form method="POST" action="{{ route('searchcli') }}" class="form-inline">
                                @csrf
                                <input class="form-control mr-sm-2" type="search" name="NUM_CONTRAT" placeholder="chercher par num contrat" aria-label="Search">
                                <button class="btn btn-dark btn-sm" type="submit"> 
                                    <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                    <lord-icon
                                        src="https://cdn.lordicon.com/kkvxgpti.json"
                                        trigger="hover"
                                        colors="primary:#ffffff"
                                        style="width:18px;height:18px">
                                    </lord-icon>
                                </button>
                            </form>
                        </div>
                        <div class="col-md-4 text-right">
                            <a href="{{ route('createcl') }}" class="btn btn-success" title="Ajouter un client">
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
                          <th class="text-center col-2"> Num de Contract </th>
                          <th class="text-center col-4"> Nom du client </th>
                          <th class="text-center col-4"> Telephone</th>
                          <th class="text-center col-2" colspan="4"> Actions </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($clients as $client)
                        <tr>
                          <td class="text-center text-wrap">{{ $client->NUM_CONTRAT }}</td>
                          <td class="text-center text wrap">{{ $client->NOM_CLIENT}}</td>
                          <td class="text-center text wrap">{{ $client->TEL }}</td>
                          <td class="text-center">
                              <div class="row">
                                  <div class="col-auto">
                                      <form action="{{ route('editcl',$client->NUM_CONTRAT) }}" method="GET">    
                                          <button type="submit" class="btn btn-info btn-sm" title="Modifier info client">
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
                      
                          
                        <td class="text-center text wrap">
                          
                          <div class="row">
                              <div class="col-auto">
                                  <form action="{{ route('destroycl', $client->NUM_CONTRAT) }}" method="POST">
                                      @method('DELETE')
                                      @csrf
                                      <button type="submit" class="btn verybad btn-sm" title="Supprimer Le client">
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
                          <td class="text-center text wrap">
                              <div class="row">
                                  <div class="col-auto">
                                      <form action="{{ route('voirpluscl', $client->NUM_CONTRAT) }}" method="get">
                                          <button type="submit" class="btn btn-dark btn-sm" title="Voir plus d'info">
                                              <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                              <lord-icon
                                                  src="https://cdn.lordicon.com/yxczfiyc.json"
                                                  trigger="hover"
                                                  colors="primary:#ffffff"
                                                  style="width:18px;height:18px">
                                              </lord-icon>
                                          </button>
                                      </form>
                                  </div>
                              </div>
                          </td>
                      
                          <td class="text-center text wrap">
                              <div class="row">
                                  <div class="col-auto">
                                      <form action="{{ route('showrecla_rdv',$client->NUM_CONTRAT) }}" method="GET">
                                          @csrf
                                          <button type="submit" class="btn btn-warning btn-sm" title="Saisir une reclamation">
                                              <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                              <lord-icon
                                                  src="https://cdn.lordicon.com/eouimtlu.json"
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
                    {{ $clients->links() }}
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





