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
                  <form action="{{ route('storecl') }}" method="POST">
                      @csrf
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Num du contract </label>
                        <input type="text" class="form-control" name="NUM_CONTRAT" aria-describedby="emailHelp">
                        @error('NUM_CONTRAT')
                        <div class="text-danger small">
                          {{ $message }}
                        </div>
                        @enderror

                        <label for="exampleInputEmail1" class="form-label">Nom du client </label>
                        <input type="text" class="form-control" name="NOM_CLIENT" aria-describedby="emailHelp">
                        @error('NOM_CLIENT')
                        <div class="text-danger small">
                          {{ $message }}
                        </div>
                        @enderror

                        <label for="exampleInputEmail1" class="form-label"> CIN </label>
                        <input type="text" class="form-control" name="CIN" aria-describedby="emailHelp">
                        @error('CIN')
                        <div class="text-danger small">
                          {{ $message }}
                        </div>
                        @enderror

                        <label for="exampleInputEmail1" class="form-label"> ADRESSE </label>
                        <input type="text" class="form-control" name="ADRESSE" aria-describedby="emailHelp">
                        @error('ADRESSE')
                        <div class="text-danger small">
                          {{ $message }}
                        </div>
                        @enderror

                        <label for="exampleInputEmail1" class="form-label">TEL</label>
                        <input type="text" class="form-control" name="TEL" aria-describedby="emailHelp">
                        @error('TEL')
                        <div class="text-danger small">
                          {{ $message }}
                        </div>
                        @enderror

                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" name="EMAIL" aria-describedby="emailHelp">
                        @error('EMAIL')
                        <div class="text-danger small">
                          {{ $message }}
                        </div>
                        @enderror
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
