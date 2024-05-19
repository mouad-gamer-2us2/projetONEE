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
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="container d-flex justify-content-center align-items-center">
            <div class="page-header text-center">
                <h3 class="page-title">Réclamations</h3>
                
            </div>
        </div>
          
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-4">
                      <h4 class="card-title">Informations Sur les réclamations </h4>
                  </div>
                  <div class="col-md-8">
                    <form method="POST" action="{{ route('searchrecla') }}" class="form-inline">
                      @csrf
                      <input class="form-control mr-sm-2" type="search" name="ID_RECLAMATION"placeholder="Search" aria-label="Search">
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

                  
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="text-center"> ID </th>
                          <th class="text-center"> Client </th>
                          <th class="text-center"> Categorie </th>
                          <th class="text-center"> Agent Centre </th>
                          <th class="text-center"> Service responsable</th>
                          <th class="text-center"> Description </th>
                          <th class="text-center"> URGENCE </th>
                          <th class="text-center"> Etat </th>
                          <th class="text-center" colspan="2"> Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                        @foreach ($reclamations as $recla)
                        <tr>
                            <td class="text-center text-wrap">{{ $recla->ID_RECLAMATION }}</td>
                            <td class="text-center text-wrap">{{ $recla->client->NOM_CLIENT}}</td>
                            <td class="text-center text-wrap">{{ $recla->categorie_reclamation->NOM_CATEGORIE }}</td>
                            <td class="text-center text-wrap">{{ $recla->agent_centre->user->name }}</td>
                            <td class="text-center text-wrap">{{ $recla->service->NOM_SERVICE }}</td>
                            <td class="text-center text-wrap">{{ $recla->DESCRIPTION }}</td>
                            <td class="text-center text-wrap @switch($recla->URGENCE)
                              @case('Très élevé')
                                  verybad
                                  @break
                              @case('élevé')
                                  bad
                                  @break
                              @case('moyenne')
                                  normal
                                  @break
                              @case('faible')
                                  low
                                  @break
                              @default
                                  verylow
                          @endswitch">
                              {{ $recla->URGENCE }}
                          </td>
                              <td class="text-center text-wrap">{{ $recla->ETAT}}</td>
                              <td >
                                   
                                       
                                <form action="{{ route('editrecla',$recla->ID_RECLAMATION) }}" method="GET">
                                
                                    
                                    <button type="submit" class="btn btn-info btn-sm" title="Modifier">
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
                                <form action="{{ route('destroyrecla',$recla->ID_RECLAMATION) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                            
                                    <button type="submit" class="btn btn-danger btn-sm" title="Supprimer">
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
 


 
</x-app-layout>




<script>

$(document).ready(function () {

  $.ajaxSetup({
      headers:{
          'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
      }
  });

  var calendar = $('#calendar').fullCalendar({
      editable:true,
      header:{
          left:'prev,next today',
          center:'title',
          right:'month,agendaWeek,agendaDay'
      },
      events:'/full-calender',
      selectable:true,
      selectHelper: true,
      select:function(start, end, allDay)
      {
          var title = prompt('Event Title:');

          if(title)
          {
              var start = $.fullCalendar.formatDate(start, 'Y-MM-DD HH:mm:ss');

              var end = $.fullCalendar.formatDate(end, 'Y-MM-DD HH:mm:ss');

              $.ajax({
                  url:"/full-calender/action",
                  type:"POST",
                  data:{
                      title: title,
                      start: start,
                      end: end,
                      type: 'add'
                  },
                  success:function(data)
                  {
                      calendar.fullCalendar('refetchEvents');
                      alert("Event Created Successfully");
                  }
              })
          }
      },
      editable:true,
      eventResize: function(event, delta)
      {
          var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');
          var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');
          var title = event.title;
          var id = event.id;
          $.ajax({
              url:"/full-calender/action",
              type:"POST",
              data:{
                  title: title,
                  start: start,
                  end: end,
                  id: id,
                  type: 'update'
              },
              success:function(response)
              {
                  calendar.fullCalendar('refetchEvents');
                  alert("Event Updated Successfully");
              }
          })
      },
      eventDrop: function(event, delta)
      {
          var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');
          var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');
          var title = event.title;
          var id = event.id;
          $.ajax({
              url:"/full-calender/action",
              type:"POST",
              data:{
                  title: title,
                  start: start,
                  end: end,
                  id: id,
                  type: 'update'
              },
              success:function(response)
              {
                  calendar.fullCalendar('refetchEvents');
                  alert("Event Updated Successfully");
              }
          })
      },

      eventClick:function(event)
      {
          if(confirm("Are you sure you want to remove it?"))
          {
              var id = event.id;
              $.ajax({
                  url:"/full-calender/action",
                  type:"POST",
                  data:{
                      id:id,
                      type:"delete"
                  },
                  success:function(response)
                  {
                      calendar.fullCalendar('refetchEvents');
                      alert("Event Deleted Successfully");
                  }
              })
          }
      }
  });

});

</script>
