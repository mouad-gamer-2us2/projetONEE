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
                  <h4 class="card-title text-center" style="font-size: 24px; font-family: monospace, sans-serif;"> modifier la réclamations  </h4>
                  <br>
                  <form action="{{ route('updaterecla') }}" method="POST">
                      @csrf
                      @method('PUT')
                      <input type="text" class="form-control d-none" name="ID_RECLAMATION"  value="{{ $ID_RECLAMATION }}" aria-describedby="emailHelp">
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Description </label>
                        <textarea type="text" class="form-control" name="description" aria-describedby="emailHelp">
                          {{ $reclamations->DESCRIPTION }} 
                        </textarea>
                        @error('description')
                        <div class="text-danger small">
                          {{ $message }}
                        </div>
                        @enderror
                        <br>

                        <label for="exampleInputEmail1" class="form-label">Urgence : actuellement :{{ $reclamations->URGENCE }}  </label>
                        <select class="form-control" name="urgence" aria-describedby="emailHelp">
                        <option value="Très élevé">très élevé</option>
                        <option value="élevé">élevé</option>
                        <option value="moyenne">moyenne</option>
                        <option value="faible">faible</option>
                        <option value="très faible">très faible</option>
                        </select>
                        @error('urgence')
                        <div class="text-danger small">
                          {{ $message }}
                        </div>
                        @enderror
                        <br>

                        <input type="text" class="form-control d-none" name="etat"  value="pas encore traitée" aria-describedby="emailHelp">
                      
                        <input type="text" class="form-control d-none" name="id_cli"  value="{{ $reclamations->ID_CLI }} " aria-describedby="emailHelp">

                        <label for="exampleInputEmail1" class="form-label">Catégorie : actuellement :{{ $reclamations->categorie_reclamation->NOM_CATEGORIE }}  </label>
                        <select class="form-control" name="id_cat" aria-describedby="emailHelp">
                        @foreach ( $categories as $cat)
                        <option value="{{ $cat->ID_CATEGORIE }}" >{{ $cat->NOM_CATEGORIE }}</option>
                        @endforeach
                        </select>
                        @error('id_cat')
                        <div class="text-danger small">
                          {{ $message }}
                        </div>
                        @enderror
                        <br>

                        <input type="text" class="form-control d-none" name="id_A_centre"  value="{{ $reclamations->ID_A_CENTRE }} " aria-describedby="emailHelp">

                        <label for="exampleInputEmail1" class="form-label">Services : actuellement :{{ $reclamations->service->NOM_SERVICE }}</label>
                        <select class="form-control" name="id_serv" aria-describedby="emailHelp">
                        @foreach ( $services as $ser)
                        <option value="{{ $ser->ID_SERVICE }}" >{{ $ser->NOM_SERVICE }}</option>
                        @endforeach
                        </select>
                        @error('id_serv')
                        <div class="text-danger small">
                          {{ $message }}
                        </div>
                        @enderror
                        <br>


                      </div>
                      <button type="submit" class="btn btn-success">modifier</button>
                    </form>
                </div>
              </div>
            </div>


          </div>
        
          
        
        </div>
      

      </div>
    
    </div>
 
  </div>
</x-app-layout>


