<!DOCTYPE html>
<html>
<head>
<title>employee details</title>
	 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
  
</head>
<body>     
    @if(Session::has('message'))
        <div class="alert">
            
        {{ Session ::get('message')}}
        </div>
        @endif
     <div class='container'>
		   <h2>employee details</h2>
                   <div class="div3">
                    <img src='{{ asset('/assets/images/compass.jpg')  }}  '/>
                   </div>
                    <table class='table table-bordered'>
    			<thead>
      			<tr>
							
                            <th>Employee_id</th>
                            <th>Employee_name</th>
                            <th>Employee_email</th>
                            <th>Employee_department</th>
                            <th colspan="2">Action</th>
			</tr>
                        </thead>
   
			<tbody>
                            
                            @foreach($response as $employeeData)
                            <tr>
                                <td> {{ $employeeData->id }} </td>
                                <td> {{ $employeeData->employee_name }} </td>
                                <td> {{ $employeeData->employee_email }} </td>
                                <td> {{ $employeeData->employee_dept }}</td>
                            
                                 
                               
                                       
                                       <td><a href='/emp/{{$employeeData->id}}/delete'> Delete</td>        
                                       
                               <td><a href='/emp/{{$employeeData->id}}/edit'> Edit </td>  
                                </tr>
                            @endforeach
                         </tbody>
                    </table>
     </div> 
    <div class="container">
        <form action="insert" method="GET">
            <input type="submit" value="Insert">
        </form> 
    </div>  
    
    
</body>