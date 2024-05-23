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
                          <span class="menu-title color1">Espace clients</span> 
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
                      <a class="nav-link color1" href="">
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
                      <a class="nav-link color1" href="">
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
            <div class="page-header text-center">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center" style="font-size: 24px; font-family: monospace, sans-serif;">Ajouter une réclamation </h4>
                  <br>
                  <form action="{{ route('storerecla') }}" method="POST">
                      @csrf
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Description : </label>
                        <br>
                        <textarea type="text" class="form-control" name="description" aria-describedby="emailHelp">
                        </textarea>
                        @error('description')
                        <div class="text-danger small">
                          {{ $message }}
                        </div>
                        @enderror
                        <br>

                        <label for="exampleInputEmail1" class="form-label">Urgence :</label>
                        <br>
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
                      
                        <input type="text" class="form-control d-none" name="id_cli"  value="{{ $NUM_CONTRAT }}" aria-describedby="emailHelp">

                        <label for="exampleInputEmail1" class="form-label">Catégorie :</label>
                        <br>
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

                        <input type="text" class="form-control d-none" name="id_A_centre"  value="{{ $id }}" aria-describedby="emailHelp">

                        <label for="exampleInputEmail1" class="form-label">Services :</label>
                        <br>
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
                      
                      <button type="submit" class="btn btn-success">Ajouter</button>
                    </form>
                    <br>
                  <div class="d-flex justify-content-start">
                    
                    <form action="{{ route('choix',$NUM_CONTRAT) }}" method="GET">
                        @csrf
                        <button type="submit" class="btn btn-dark"> Retour </button>
                    </form>
                </div>
                    
                </div>
              </div>
            </div>


          </div>
        
          
        
        </div>
      

      </div>
    
    </div>
 
  </div>
</x-app-layout>


