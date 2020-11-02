<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <style>
        .profile{
            margin:100px auto;
            width: 600px;
            background-color: rgb(105, 230, 105);
        }
        
        .profile input{
            
            padding: 10px;
            
        }
        button{
            padding: 10px;
        }
        select{
            width: 100px;
            padding: 10px;
        }
        td{
            width: 100px;
        }
    </style>
</head>
<body>
    
        
    
    <div class="profile">
 
        <div class="tablet">
           
            
            <h2 style="text-align: center;color:white;margin-top:10px;">Enter License key</h2>
            @if (session('message'))
                            <h3 style="color: white;text-align:center">{{session('message')}}</h3>  
                          @endif
            <form action="{{url('UpdateKey')}}" method="post">
                @csrf
                <table>
                    <tr>
                        <td>
                            License Key
                        </td>
                        <td>
                            <input type="text" name="data" placeholder="Enter License key">
                            
                        </td>
                        <td>
                            
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            
                        </td>
                        <td>
                            <input type='submit' value='Save' >
                        </td>
                    </tr>
                </table>
            </form>
            
            
        </div>
        
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</body>
</html>