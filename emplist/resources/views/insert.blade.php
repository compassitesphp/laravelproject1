<!DOCTYPE html>
<html>
    <head>
        <style>
            .error {color: #FF0000;}

        </style>
    </head>
    <body>

        

        <h2>Enter the employee details</h2>
        <p><span class="error">* required field.</span></p>

        <form action="insert1" method="POST">
             
            employee_name:
            <input type="text" name="employee_name" >
            <span class="error">* </span>
            <br><br>

            employee_email:
            <input type="text" name="employee_email" >
            <span class="error">* </span>
            <br><br>

            employee_department: 
            <input type="text" name="employee_dept" >
            <br><br>

            <input type="submit" value="submit">
        </form> 

    </body>
</html>
