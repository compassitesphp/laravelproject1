<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
    </head>
    <body>

        

        <h2>Enter the employee details</h2>
        <p><span class="error">* required field.</span></p>

        <form action="insert1" method="GET">
             
            employee_name:
            <input type="text" name="employee_name" required >
            <span class="error">* </span>
            <br><br>

            employee_email:
            <input type="text" name="employee_email" required>
            <span class="error">* </span>
            <br><br>

            employee_department: 
            <input type="text" name="employee_dept" >
            <br><br>

            <input type="submit" value="submit">
        </form> 

    </body>
</html>
