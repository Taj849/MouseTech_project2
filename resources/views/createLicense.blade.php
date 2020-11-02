<!doctype html>
<html>
    <head>
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
            <table border='1' id='userTable' style='border-collapse: collapse;margin:auto;background-color:white;'>
                <tbody>

                </tbody>
                 
              </table>
              <h2 style="text-align: center;color:white;margin-top:10px;">Create License</h2>
                     
                         <table>
                             <tr>
                                 <td>
                                     Client Id
                                 </td>
                                 <td>
                                 
                                    <input type='text' id='search' name='search' placeholder='Cilent ID'>
                                 </td>
                             </tr>
                             <tr>
                                 <td>
                                     License Key
                                 </td>
                                 <td>
                                     <input id="key" type="text" >
                                 </td>
                             </tr>
                             <tr>
                                 <td>
                                     
                                 </td>
                                 <td style="width: 100px;">
                                    <a href="{{url('addLicense')}}"><input type='button' value='Save License' ></a>
                                </td>
                             </tr>
                             <tr>
                                 <td>
                                     License For
                                 </td>
                                 <td></td>
                                 
                                 <td>
                                     <select name="month" id="cars">
                                         <option active value="1">1</option>
                                         <option active value="3">3</option>
                                         <option active value="6">6</option>
                                         <option active value="12">12</option>
                                       </select>
                                 </td>
                             </tr>
                             <tr>
                                 <td>
                                     
                                 </td>
                                 <td>
                                     
                                 </td>
                                 <td>
                                     
                                 </td>
                                 <td>
                               <button id="create">Create Key</button>    
                                 </td>
                             </tr>
                             <tr>
                                 <td>
                                     
                                 </td>
                                 <td>
                                     
                                 </td>
                                 <td>
                                    
                                 </td>
                                 <td>
                                    Return To <a href="{{url('login')}}">Login </a>Page
                                 </td>
                             </tr>
                            
                             
                         </table>
                         
         </div>
         
     </div>
     <!-- Script -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>

     <script type='text/javascript'>
        $(document).ready(function(){
          $('#search').keypress(function(){
             var userid = Number($('#search').val().trim());
                   
         if(userid > 0){
           fetchRecords(userid);
         }
   
          });
          $('#create').click(function(){
             var clientId = Number($('#search').val().trim());
             var month = Number($('#cars').val().trim());     
         if(clientId > 0){
           createKey(clientId ,month);
         }
   
          });
   
        });
   
        function fetchRecords(id){
          $.ajax({
            url: 'getUsers/'+id,
            type: 'get',
            dataType: 'json',
            success: function(response){
   
              var len = 0;
              $('#userTable tbody').empty(); // Empty <tbody>
              if(response['data'] != null){
                 len = response['data'].length;
              }
   
              if(len > 0){
                 for(var i=0; i<len; i++){
                    var fname = response['data'][i].fname;
                    var lname = response['data'][i].lname;
                    var organization = response['data'][i].organization;
                    var street = response['data'][i].street;
                    var city = response['data'][i].city;
                    var email = response['data'][i].email;
                    var phone = response['data'][i].phone_number;
                    var tr_str = "<tr>" +
                        "<td align='center'>" + "First Name" + "</td>" +
                      "<td align='center'>" + fname + "</td>" +"</tr>"+"<tr>"+
                      "<td align='center'>" + "Last Name" + "</td>" +
                      "<td align='center'>" + lname + "</td>" +"</tr>"+"<tr>"+
                      "<td align='center'>" + "Name Of organization" + "</td>" +
                      "<td align='center'>" + organization + "</td>" +"</tr>"+"<tr>"+
                      "<td align='center'>" + "Street" + "</td>" +
                      "<td align='center'>" + street + "</td>" +"</tr>"+"<tr>"+
                      "<td align='center'>" + "City" + "</td>" +
                      "<td align='center'>" + city + "</td>" +"</tr>"+"<tr>"+
                      "<td align='center'>" + "Email" + "</td>" +
                      "<td align='center'>" + email + "</td>" +"</tr>"+"<tr>"+
                      "<td align='center'>" + "Phone Number" + "</td>" +
                      "<td align='center'>" + phone + "</td>" +
                    "</tr>";
   
                    $("#userTable tbody").append(tr_str);
                 }
              }else{
                 var tr_str = "<tr>" +
                     "<td align='center' colspan='4'>No record found.</td>" +
                 "</tr>";
   
                 $("#userTable tbody").append(tr_str);
              }
   
            }
          });
        }

        function createKey(id,date){
          $.ajax({
            url: 'createKey/'+id+'/'+date,
            type: 'get',
            dataType: 'json',
            success: function(response){
              
              
                var keyCreate = response['key'];
               
                $('#key').val(keyCreate);
            }
          });
        }
        </script>
  </body>
</html>