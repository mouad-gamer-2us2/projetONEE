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
            <div class="page-header text-center">
                
                
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center" style="font-size: 24px; font-family: monospace, sans-serif;">Ajouter des clients  </h4>
                  <br>
                  <form action="{{ route('storecl') }}" method="POST">
                      @csrf
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Num du contract :</label>
                        <br>
                        <input type="text" class="form-control" name="NUM_CONTRAT" aria-describedby="emailHelp">
                        @error('NUM_CONTRAT')
                        <div class="text-danger small">
                          {{ $message }}
                        </div>
                        @enderror
                        <br>

                        <label for="exampleInputEmail1" class="form-label">Nom du client :</label>
                        <br>
                        <input type="text" class="form-control" name="NOM_CLIENT" aria-describedby="emailHelp">
                        @error('NOM_CLIENT')
                        <div class="text-danger small">
                          {{ $message }}
                        </div>
                        @enderror
                        <br>

                        <label for="exampleInputEmail1" class="form-label"> CIN :</label>
                        <br>
                        <input type="text" class="form-control" name="CIN" aria-describedby="emailHelp">
                        @error('CIN')
                        <div class="text-danger small">
                          {{ $message }}
                        </div>
                        @enderror
                        <br>

                        <label for="exampleInputEmail1" class="form-label"> ADRESSE :</label>
                        <br>
                        <input type="text" class="form-control" name="ADRESSE" aria-describedby="emailHelp">
                        @error('ADRESSE')
                        <div class="text-danger small">
                          {{ $message }}
                        </div>
                        @enderror
                        <br>

                        <label for="exampleInputEmail1" class="form-label">TEL :</label>
                        <br>
                        <input type="text" class="form-control" name="TEL" aria-describedby="emailHelp">
                        @error('TEL')
                        <div class="text-danger small">
                          {{ $message }}
                        </div>
                        @enderror
                        <br>

                        <label for="exampleInputEmail1" class="form-label">Email :</label>
                        <br>
                        <input type="email" class="form-control" name="EMAIL" aria-describedby="emailHelp">
                        @error('EMAIL')
                        <div class="text-danger small">
                          {{ $message }}
                        </div>
                        @enderror
                        <br>
                      </div>
                      <button type="submit" class="btn btn-success">Ajouter</button>
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


