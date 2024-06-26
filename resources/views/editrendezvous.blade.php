<x-app-layout>
    <div class="container-scroller">
      <div class="row p-0 m-0 " id="proBanner">
        <div class="col-md-12 p-0 m-0">
         
        </div>
      </div>
 
      <div class="container-fluid page-body-wrapper">
      
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
           
            
            
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
        <!------partials--------->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="container d-flex justify-content-center align-items-center">
              
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-center" style="font-size: 24px; font-family: monospace, sans-serif;">modifier le rendez-vous</h4>
                    <form action="{{ route('updaterendezvous') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Info Rendez-vous :</label>
                            <textarea type="text" class="form-control" name="info_rendez_vous" aria-describedby="emailHelp">
                                {{ $rendezvous->INFORMATION_RENDEZ_VOUS }}
                            </textarea>
                            @error('info_rendezvous')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                
                            <input type="text" class="form-control d-none" name="id_A_centre"  value="{{ $id }}" aria-describedby="emailHelp">
                
                            <label for="exampleInputEmail1" class="form-label">Services :</label>
                            <select class="form-control" name="id_serv" aria-describedby="emailHelp">
                                @foreach ( $services as $ser)
                                    <option value="{{ $ser->ID_SERVICE }}">{{ $ser->NOM_SERVICE }}</option>
                                @endforeach
                            </select>
                            @error('id_serv')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                
                            <input type="text" class="form-control d-none" name="id_cli"  value="{{ $rendezvous->client->NUM_CONTRAT }}" aria-describedby="emailHelp">
                            <input type="text" class="form-control d-none" name="id_rendez_vous"  value="{{ $ID_RENDEZ_VOUS }}" aria-describedby="emailHelp">
                        </div>
                
                        <button type="submit" class="btn btn-success mr-2">modifier</button>  
                    </form>
  
                    <br>
                    
                </div>
                
                
                </div>
              </div>
  
  
            </div>
          
            
          
          </div>
        
  
        </div>
      
      </div>
   
    </div>
  </x-app-layout>
  
  

  
  
  