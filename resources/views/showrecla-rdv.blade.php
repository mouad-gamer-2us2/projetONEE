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
                        <h3 class="page-title" style="font-size: 24px; font-family: monospace, sans-serif;">Client : {{ $NOM_CLIENT }} / contrat n°: {{ $NUM_CONTRAT }}</h3>
                    </div>
                </div>
                
                
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="card-title">réclamations du client </h4>
                                    </div>
                                    <div class="col-auto">
                                        <a href="{{ route('choix',$NUM_CONTRAT) }}" class="btn btn-success" title="Ajouter une reclamation ou rendez-vous">
                                            <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                            <lord-icon src="https://cdn.lordicon.com/hqymfzvj.json" trigger="hover" colors="primary:#ffffff" style="width:20px;height:20px"></lord-icon>
                                        </a>
                                    </div>
                                </div>
        
                                <div class="table-responsive">
                                    <table class="table">
                                        
                                        <thead>
                                            <tr>
                                                <th class="text-center col-1"> ID </th>
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
                                                <td class="text-center text-wrap">{{ $recla->categorie_reclamation->NOM_CATEGORIE }}</td>
                                                <td class="text-center text-wrap">{{ $recla->agent_centre->user->name }}</td>
                                                <td class="text-center text-wrap">{{ $recla->service->NOM_SERVICE }}</td>
                                                <td class="text-center text-wrap">{{ $recla->DESCRIPTION }}</td>
                                                <td class="text-center text-wrap @switch($recla->URGENCE)
                                                    @case('Très élevé') verybad @break
                                                    @case('élevé') bad @break
                                                    @case('moyenne') normal @break
                                                    @case('faible') low @break
                                                    @default verylow
                                                    @endswitch">{{ $recla->URGENCE }}
                                                </td>
                                                <td class="text-center text-wrap">{{ $recla->ETAT}}</td>
                                                @if($recla->ETAT != 'traite')
                                                <td>
                                                    <form action="{{ route('editrecla',$recla->ID_RECLAMATION) }}" method="GET">
                                                        <button type="submit" class="btn blue btn-sm" title="Modifier">
                                                            <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                                            <lord-icon src="https://cdn.lordicon.com/pflszboa.json" trigger="hover" colors="primary:#ffffff" style="width:18px;height:18px"></lord-icon>
                                                        </button>
                                                    </form>
                                                </td>
                                                <td>       
                                                    <form action="{{ route('destroyrecla',$recla->ID_RECLAMATION) }}" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn verybad btn-sm" title="Supprimer">
                                                            <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                                            <lord-icon src="https://cdn.lordicon.com/wpyrrmcq.json" trigger="hover" colors="primary:#ffffff" style="width:18px;height:18px"></lord-icon>
                                                        </button>
                                                    </form>
                                                </td>
                                                
                                                    
                                                @else
                                                   <td></td>
                                                   <td></td> 
                                                @endif
                                            </tr>
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
        
                
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="card-title">rendez-vous du client </h4>
                                    </div>
                                </div>
        
                                <div class="table-responsive">
                                    <table class="table">
                                        
                                        <thead>
                                            <tr>
                                                <th class="text-center col-1"> ID </th>
                                                <th class="text-center col-3"> Informations </th>
                                                <th class="text-center col-2"> Agent Centre </th>
                                                <th class="text-center col-3"> Service responsable</th>
                                                <th class="text-center col-2"> Date de la demande </th>
                                                <th class="text-center col-1" colspan="2"> Action</th>
                                            </tr>
                                        </thead>
        
                                        
                                        <tbody>
                                            @foreach ($rendezvous as $rdv)
                                            <tr>
                                                <td class="text-center  text-wrap">{{ $rdv->ID_RENDEZ_VOUS }}</td>
                                                <td class="text-center  text-wrap">{{ $rdv->INFORMATION_RENDEZ_VOUS }}</td>
                                                <td class="text-center  text-wrap">{{ $rdv->agent_centre->user->name }}</td>
                                                <td class="text-center  text-wrap">{{ $rdv->service->NOM_SERVICE }}</td>
                                                <td class="text-center  ">{{ $rdv->created_at }}</td>
                                                <td>
                                                    <form action="{{ route('editrendezvous',$rdv->ID_RENDEZ_VOUS ) }}" method="GET">
                                                    
                                                        
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
                                                    <form action="{{ route('destroyrendezvous',$rdv->ID_RENDEZ_VOUS ) }}" method="POST">
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
                                            </tr>
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
        @if($reclamations->isEmpty())
            Swal.fire({
                title: "Remarque",
                text: "Pas de réclamations pour ce client.",
                icon: "warning",
                confirmButtonColor: '#ff0000'
            }).then(() => {
                @if($rendezvous->isEmpty())
                    Swal.fire({
                        title: "Remarque",
                        text: "Pas de rendez-vous pour ce client.",
                        icon: "warning",
                        confirmButtonColor: '#ff0000'
                    });
                @endif
            });
        @else
            @if($rendezvous->isEmpty())
                Swal.fire({
                    title: "Remarque",
                    text: "Pas de rendez-vous pour ce client.",
                    icon: "warning",
                    confirmButtonColor: '#ff0000'
                });
            @endif
        @endif
    </script>
    
  
  
   
  </x-app-layout>
  
  
  
  
