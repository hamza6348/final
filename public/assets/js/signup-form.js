$(document).ready(function(){
	$('#cnic').keydown(function(){

  //allow  backspace, tab, ctrl+A, escape, carriage return
  if (event.keyCode == 8 || event.keyCode == 9 
                    || event.keyCode == 27 || event.keyCode == 13 
                    || (event.keyCode == 65 && event.ctrlKey === true) )
                        return;
  if((event.keyCode < 48 || event.keyCode > 57))
   event.preventDefault();

  var length = $(this).val().length; 
  
  if(length == 5 || length == 13)
   $(this).val($(this).val()+'-');

 });
 $("#RegForm").submit(function(){
        if(document.getElementById("first-name").value.match(/^[A-Za-z]+$/))  
      {  
      alert('Your name have accepted : you can try another');  
      return true;  
      }  
      else  
      {  
      alert('Please input alphabet characters only in Name');  
      return false;  
      }  
    });
	$("#signUpForm").submit(function(){
        if(document.getElementById("first-name").value.match(/^[A-Za-z]+$/))  
      {  
      alert('Your name have accepted : you can try another');  
      return true;  
      }  
      else  
      {  
      alert('Please input alphabet characters only in Name');  
      return false;  
      }  
    });
  
     document.getElementById("username").addEventListener("focus", myFunction);

function myFunction() {
    document.getElementById("username").value = document.getElementById("first-name").value + document.getElementById("cnic").value;
}
            
});