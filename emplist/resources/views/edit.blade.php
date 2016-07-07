<!DOCTYPE html>
<html>
    <head>
        <style>
            .error {color: #FF0000;}

        </style>
    </head>
    <body>

        

        <h2>edit the employee details</h2>
        <p><span class="error">* required field.</span></p>

        <form action="/emp/edit1" method="GET">
            <input type="hidden" name="employee_id" value="{{ $employeeId }}"/>
            employee_name:
            <input type="text" name="employee_name" value="{{$employeeName}}" >
            <span class="error">* </span>
            <br><br>

            employee_email:
            <input type="text" name="employee_email" value="{{$employeeEmail}}" >
            <span class="error">* </span>
            <br><br>

            employee_department: 
            <input type="text" name="employee_dept" value="{{$employeeDepartment}}" >
            <br><br>

            <input type="submit" value="submit">
        </form> 

    </body>
</html>