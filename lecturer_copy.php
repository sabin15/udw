<!DOCTYPE html> 
<html> 
  
<body> 
    <button id="try">Click here</button> 
    <h1 id="text"></h1> 
    <script> 
    document.getElementById("try").addEventListener("click", function(){ 
    document.getElementById("text").innerText = "GeeksforGeeks"; 
}); 
    </script> 
</body> 
  
</html>   