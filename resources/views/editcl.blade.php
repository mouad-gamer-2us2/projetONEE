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
                          <span class="menu-title color1">Clients</span> 
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
                            src="https://cdn.lordicon.com/abvsilxn.json"
                            trigger="hover"
                            colors="primary:#0e46a3"
                            style="width:18px;height:18px">
                        </lord-icon>
                      </a>
                  </div>
                  <div class="col align-self-center">
                      <a class="nav-link color1" href="">
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
                      <a class="nav-link color1" href="">
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
                      <a class="nav-link color1" href="">
                          <span class="menu-title color1">Les rendez-vous</span> 
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
                            src="https://cdn.lordicon.com/ayhtotha.json"
                            trigger="hover"
                            colors="primary:#0e46a3"
                            style="width:18px;height:18px">
                        </lord-icon>
                      </a>
                  </div>
                  <div class="col align-self-center">
                      <a class="nav-link color1" href="">
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
                <h3 class="page-title">Informations sur clients </h3>
                
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Ajouter des clients  </h4>
                  <form action="{{ route('updatecl',$clients->NUM_CONTRAT) }}" method="POST">
                      @csrf
                      @method('PUT')
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Num du contract </label>
                        <input type="text" class="form-control" name="NUM_CONTRAT" aria-describedby="emailHelp" value="{{ $clients->NUM_CONTRAT}}">
                        @error('NUM_CONTRAT')
                        <div class="text-danger small">
                          {{ $message }}
                        </div>
                        @enderror

                        <label for="exampleInputEmail1" class="form-label">Nom du client </label>
                        <input type="text" class="form-control" name="NOM_CLIENT" aria-describedby="emailHelp" value="{{ $clients->NOM_CLIENT }}">
                        @error('NOM_CLIENT')
                        <div class="text-danger small">
                          {{ $message }}
                        </div>
                        @enderror

                        <label for="exampleInputEmail1" class="form-label">CIN </label>
                        <input type="text" class="form-control" name="prenomclie" aria-describedby="emailHelp" value="{{ $clients->CIN }}">
                        @error('CIN')
                        <div class="text-danger small">
                          {{ $message }}
                        </div>
                        @enderror

                        <label for="exampleInputEmail1" class="form-label"> ADRESSE </label>
                        <input type="text" class="form-control" name="ADRESSE" aria-describedby="emailHelp" value="{{ $clients->ADRESSE }}">
                        @error('ADRESSE')
                        <div class="text-danger small">
                          {{ $message }}
                        </div>
                        @enderror

                        <label for="exampleInputEmail1" class="form-label">TEL</label>
                        <input type="text" class="form-control" name="TEL" aria-describedby="emailHelp" value="{{ $clients->TEL }}">
                        @error('TEL')
                        <div class="text-danger small">
                          {{ $message }}
                        </div>
                        @enderror

                        <label for="exampleInputEmail1" class="form-label">EMAIL</label>
                        <input type="email" class="form-control"name="EMAIL" rows="3" aria-describedby="emailHelp" value="{{ $clients->EMAIL }}">
                        </input>
                        @error('EMAIL')
                        <div class="text-danger small">
                          {{ $message }}
                        </div>
                        @enderror

                       
                      </div>
                      <button type="submit" class="btn btn-success">Modifier</button>
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