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
                        <a class="nav-link color1" href="{{ route('showservices') }}">
                            <script src="https://cdn.lordicon.com/lordicon.js"></script>
                            <lord-icon
                                src="https://cdn.lordicon.com/sbrtyqxj.json"
                                trigger="hover"
                                colors="primary:#0e46a3"
                                style="width: 18px; height: 18px;">
                            </lord-icon>
                        </a>
                    </div>
                    <div class="col align-self-center">
                        <a class="nav-link color1" href="{{ route('showservices') }}">
                            <span class="menu-title color1">Services</span> 
                        </a>
                    </div>
                </div>
            </div>
            
            </li>
            <li class="nav-item">
              <div class="container-fluid">
                <div class="row">
                    <div class="col-auto">
                        <a class="nav-link color1" href="{{route('showcategories')}}">
                            <script src="https://cdn.lordicon.com/lordicon.js"></script>
                            <lord-icon
                                src="https://cdn.lordicon.com/keaiyjcx.json"
                                trigger="hover"
                                colors="primary:#0e46a3"
                                style="width: 18px; height: 18px;">
                            </lord-icon>
                        </a>
                    </div>
                    <div class="col align-self-center">
                        <a class="nav-link color1"href="{{route('showcategories')}}">
                            <span class="menu-title color1">Catégories</span> 
                        </a>
                    </div>
                </div>
            </div>
            
            </li>
            <li class="nav-item">
              <div class="container-fluid">
                <div class="row">
                    <div class="col-auto">
                        <a class="nav-link color1" href="{{route('showpersonnels')}}">
                            <script src="https://cdn.lordicon.com/lordicon.js"></script>
                            <lord-icon
                                src="https://cdn.lordicon.com/iazmohzf.json"
                                trigger="hover"
                                colors="primary:#0e46a3"
                                style="width: 18px; height: 18px;">
                            </lord-icon>
                        </a>
                    </div>
                    <div class="col align-self-center">
                        <a class="nav-link color1" href="{{route('showpersonnels')}}">
                            <span class="menu-title color1">Personnels</span> 
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
                    <h4 class="card-title text-center" style="font-size: 24px; font-family: monospace, sans-serif;">Ajouter des services   </h4>
                    <br>
                    <form action="{{ route('storeSER') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nom du service : </label>
                          <br>
                          <input type="text" class="form-control" name="NOM_SERVICE" aria-describedby="emailHelp">
                          @error('NOM_SERVICE')
                          <div class="text-danger small">
                            {{ $message }}
                          </div>
                          @enderror
                          <br>
                          <label for="exampleInputEmail1" class="form-label">la Catégorie du service : </label>
                          <br>
                          <input type="text" class="form-control" name="CATEGORIE_SERVICE" aria-describedby="emailHelp">
                          @error('CATEGORIE_SERVICE')
                          <div class="text-danger small">
                            {{ $message }}
                          </div>
                          @enderror
                          <br>

                          <label for="exampleInputEmail1" class="form-label"> Description du service :</label>
                          <br>
                          <textarea class="form-control left-aligned-textarea" name="DESCRIPTION" rows="3" aria-describedby="emailHelp">

                          </textarea>
                          @error('DESCRIPTION')
                          <div class="text-danger small">
                            {{ $message }}
                          </div>
                          @enderror
                          <br>

                          <label for="exampleInputEmail1" class="form-label">Appartenance du service :</label>
                          <br>
                          <input type="text" class="form-control" name="APPARTENANCE" aria-describedby="emailHelp">
                          @error('APPARTENANCE')
                          <div class="text-danger small">
                            {{ $message }}
                          </div>
                          @enderror
                          <br>
                        </div>
                        <button type="submit" class="btn btn-success"> Ajouter </button>
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





  