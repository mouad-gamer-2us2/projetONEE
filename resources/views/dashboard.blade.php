
<x-app-layout>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
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
            <div class="page-header">
             
              
            </div>
              <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">TODO List</h4>
                     <form action="/dashboard" class="d-flex" method="post">
                            @csrf
                            <div class="flex-grow-1">
                                <input  name="title" type="text" class="form-control todo-list-input" placeholder="What do you need to do today?">
                            </div>
                            <button type="submit" class="add btn btn-success font-weight-bold ml-2" id="add-task">Add</button>
                        </form>
                        
                    <div class="table-responsive">
                       @if($todos)
                                  @foreach($todos as $todo)
                                    <table class="table">
                                     <thead>
                                      <tr>
                                          <td>
                                              <form action="/tasks/{{ $todo->id }}" method="POST" class="task-form">
                                                    @csrf
                                              <a href="{{ route('tasks.destroy', ['id' => $todo->id]) }}"  class="text-danger mr-2" ><ion-icon name="trash-outline" style="color: red;"></ion-icon></a>
                                              </form></td>
                                              @if($todo->isDone==true)
                                              <td > <p style="color:green">{{$todo->title}} </p></td>   
                                              @else
                                                  <td><p style="margin-right: 16px;">{{$todo->title}} </p></td>
                                              @endif
                                              
                                          </li>
                                      
                                      </tr>
                                       </tbody>
                                   </table>
                                    
                                  @endforeach
                                @endif
                    
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                   
                    <h4 class="font-weight-normal mb-3">Réclamations <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                    </h4>
                    
                    <h2 class="mb-5">{{ $reclamation->count()}}</h2>
                   
                  </div>
                </div>
              </div>
              
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                    
                    <h4 class="font-weight-normal mb-3">Réclamations traitées <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">{{App\Models\reclamationtraitee::count()}}</h2>
                    
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                  <div class="card-body">
                    
                    <h4 class="font-weight-normal mb-3">Réclamations non traitées <i class="mdi mdi-diamond mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">{{App\Models\reclamationaffectee::count()}}</h2>
                   
                  </div>
                </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                   <div class="card-body">
                    <h4 class="card-title">Etats des réclamations </h4>
                    <canvas id="reclamationetat" ></canvas>
                    <div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Urgences des réclamations </h4>
                    <canvas id="graphiqueReclamations" ></canvas>
                    <div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
                  </div>
                </div>
              </div>
            </div>
          
             
          
           
           


            </div>
          </div>
        

        </div>
      
      </div>
   
    </div>

    <script>
        var reclamations = @json($reclamations);
        var labels = Object.keys(reclamations);
        var data = Object.values(reclamations);

        var ctx = document.getElementById('graphiqueReclamations').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Répartition des réclamations par état',
                    data: data,
                    backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgb(54, 162, 235)',
                        'rgb(255, 205, 86)'
                        // Ajoutez plus de couleurs si nécessaire
                    ],
                }]
            },
            options: {
                // Ajoutez des options de configuration supplémentaires si nécessaire
            }
        });
        var reclamationetat = @json($reclamationetat);
        var labels = Object.keys(reclamationetat);
        var data = Object.values(reclamationetat);

        var ctx = document.getElementById('reclamationetat').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Répartition des réclamations par état',
                    data: data,
                    backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgb(54, 162, 235)',
                        'rgb(255, 205, 86)'
                        // Ajoutez plus de couleurs si nécessaire
                    ],
                }]
            },
            options: {
                // Ajoutez des options de configuration supplémentaires si nécessaire
            }
        });
    </script> 
</x-app-layout>


    
  

   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>

  
 

  