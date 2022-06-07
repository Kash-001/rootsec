<script>  
        function verifyPassword() {  
          alert('test');
          var pw = document.getElementById("pw").value;
          var usr = document.getElementById("usr").value;

          if(pw == "") {  
             alert("Password is correct");   
             return false;  
          }
          if(usr == "") {
              alert("Password is correct"); 
          }  
           
          if(pw.length < 8) {
             return false;  
          }  
          
          if(pw.length > 16) {
             return false;  
          } else {  
              return true;
          }  
        }  
        </script>