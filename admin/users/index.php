<html>  
      <head>  
           <title>User Table Edit</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      </head>  
      <body>  
           <div class="container">  
                <br />  
                <br />  
                <br />  
                <div class="table-responsive">  
                     <h3 align="center">AJAX DATA TABLE</h3><br />
                     <p align="center"> Username Table Admin!</p>  
                     <div id="live_data"></div>                 
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      function fetch_data()  
      {  
           $.ajax({  
                url:"select.php",  
                method:"POST",  
                success:function(data){  
                     $('#live_data').html(data);  
                }  
           });  
      }  
      fetch_data();  
      $(document).on('click', '#btn_add', function(){  
           var USER_NAME = $('#USER_NAME').text();  
           var EMAIL = $('#EMAIL').text(); 
           var FULL_NAME = $('#FULL_NAME').text();  
           var TRIAL_DATE = $('#TRIAL_DATE').text();
           var IDGROUP = $('#IDGROUP').text(); 
            
           // if(HoTen == '' || HoTen.length <2 || HoTen.length > 40)  
           // {  
           //      alert("Enter name with range of 5-40 characters");  
           //      return false;  
           // }  
           // if(idGroup == '' || isNaN(year))  
           // {  
           //      alert("Enter idGroup in NUMBER ");  
           //      return false;  
           // }  
           $.ajax({  
                url:"insert.php",  
                method:"POST",  
                data:{USER_NAME:USER_NAME, EMAIL:EMAIL,FULL_NAME:FULL_NAME,TRIAL_DATE:IDGROUP,IDGROUP:IDGROUP},  
                dataType:"text",  
                success:function(data)  
                {  
                     alert(data);  
                     fetch_data();  
                }  
           })  
      });  
      function edit_data(USER_ID, text, column_name)  
      {  
           $.ajax({  
                url:"edit.php",  
                method:"POST",  
                data:{USER_ID:USER_ID, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                     alert(data);  
                }  
           });  
      }  
      $(document).on('blur', '.USER_NAME', function(){  
           var USER_ID = $(this).data("id1");  
           var Username = $(this).text();  
           edit_data(USER_ID, USER_ID, "USER_ID");  
      });      
      $(document).on('blur', '.EMAIL', function(){  
           var USER_ID = $(this).data("id2");  
           var EMAIL = $(this).text();  
           edit_data(USER_ID, EMAIL, "EMAIL");  
      });       
      $(document).on('blur', '.FULL_NAME', function(){  
           var USER_ID = $(this).data("id3");  
           var FULL_NAME = $(this).text(); 

           edit_data(USER_ID, FULL_NAME, "FULL_NAME");  
      });  
      $(document).on('blur', '.TRIAL_DATE', function(){  
           var USER_ID = $(this).data("id4");  
           var TRIAL_DATE = $(this).text();  
           edit_data(USER_ID, TRIAL_DATE, "TRIAL_DATE");  
      }); 

      $(document).on('blur', '.IDGROUP', function(){  
           var USER_ID = $(this).data("id5");  
           var IDGROUP = $(this).text();  
           edit_data(id,IDGROUP, "IDGROUP");  
      });  
      $(document).on('click', '.btn_delete', function(){  
           var USER_ID=$(this).data("id6");  
           if(confirm("Bạn muốn xoá hàng này?"))  
           {  
                $.ajax({  
                     url:"delete.php",  
                     method:"POST",  
                     data:{USER_ID:USER_ID},  
                     dataType:"text",  
                     success:function(data){  
                          alert(data);  
                          fetch_data();  
                     }  
                });  
           }  
      });  
 });  
 </script>