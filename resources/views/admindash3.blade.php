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
                        <a class="nav-link color1" href="{{route('showcategories')}}">
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
            
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="container d-flex justify-content-center align-items-center">
              <div class="page-header text-center">
                  <h3 class="page-title">Personnels</h3>
                  
              </div>
          </div>
            
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <!-- -->
                            <h4 class="card-title">Le Personnels de l'ONEE</h4>
                        </div>
                        <div class="col-auto">
                           
                            <a href="{{ route('createPER') }}" class="btn btn-success" title="Ajouter un agent">
                                <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                <lord-icon
                                    src="https://cdn.lordicon.com/spukaklw.json"
                                    trigger="hover"
                                    colors="primary:#ffffff"
                                    style="width:20px;height:20px">
                                </lord-icon>
                            </a>
                        </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th  class="text-center"> # </th>
                            <th class="text-center"> Nom Complet </th>
                            <th class="text-center"> Email </th>
                            <th class="text-center"> mots de passe </th>
                            <th class="text-center"> role </th>
                            <th class="text-center" colspan="2">Action</th>
                            <th class="text-center"> Services</th>
                          </tr>
                        </thead>
                        <tbody>
                           @foreach ( $personnels as $personne )
                           @if($personne->info->ROLE != 'Admin')
                               <tr>
                                <td  class="text-center">{{ $personne->id }}</td>
                                <td class="text-center">{{ $personne->name }}</td>
                                <td class="text-center">{{ $personne->email }}</td>
                                <td class="text-center">{{ $personne->info->PWD }}</td>
                                <td class="text-center">{{ $personne->info->ROLE }}</td>
                                         <td >
                                   
                                       
                                            <form action="{{ route('editPER',$personne->id ) }}" method="GET">
                                            
                                                
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
                                            <form action="{{ route('destroyPER', $personne->id ) }}" method="POST">
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

                                <td class="text-center">

                                    @if ($personne->info->ROLE == 'agent ONEE')
                                        @if ($personne->agent_onee)
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <form action="{{ route('editAF',$personne->id) }}" method="GET">
                                                    <button type="submit" class="btn btn-info btn-sm text-wrap">{{ $personne->agent_onee->service->NOM_SERVICE }}</button>
                                                </form>
                                            </div>
                                        </div>
                                        @else
                                        <div class="row align-items-center"> 
                                            <div class="col-auto">
                                                <form action="{{ route('createAF',$personne->id) }}" method="GET">
                                                  
                                                <button type="submit" class="btn btn-success btn-sm" title="Affecter">
                                                    <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                                        <lord-icon
                                                            src="https://cdn.lordicon.com/gfgzffjw.json"
                                                            trigger="hover"
                                                            colors="primary:#ffffff"
                                                            style="width:18px;height:18px">
                                                        </lord-icon>
                                                </button>
                                                
                                                </form>
                                            </div> 
                                        </div>
                                        @endif
                                    @endif

                                </td>
                               </tr>
                               @endif
                           @endforeach
                        </tbody>
                      </table>
                      {{ $personnels->links() }}
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
            timer: 2000
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
  