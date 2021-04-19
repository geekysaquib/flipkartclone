function myFunction() {	
  var img = document.getElementById("image");
  img.setAttribute("class", "rotated-image");
  document.getElementById("message1").innerHTML = "Drain Pipe Closed";
  document.getElementById('step2').style = "display:block";
  document.getElementById('arrow').style = "-webkit-animation: blink 0s;";
}
function myFunction2()
{
	var img2 = document.getElementById("imag");
  img2.setAttribute("class", "rotated-imag");
  document.getElementById("message2").innerHTML = "Inlet Pipe is Open";
  document.getElementById('step3').style = "display:block";
  document.getElementById('arrow2').style = "-webkit-animation: blink 0s;";
  
}
function myFunction3()
{
  document.getElementById("message3").innerHTML = "Weights have been put";
  document.getElementById('step4').style = "display:block";
  document.getElementById('arrow3').style = "-webkit-animation: blink 0s;";
  document.getElementById('imag3').src = "img/shipload.png";
}
function myFunction4()
{
  document.getElementById("message4").innerHTML = "Note Down the Angle";
  document.getElementById('step5').style = "display:block";
  document.getElementById('arrow4').style = "-webkit-animation: blink 0s;";
  document.getElementById('imag4').src = "img/angle.png";
  document.getElementById('imag4').style = "margin-right:-20px; margin-top:20px;";

}
function myFunction5()
{
  document.getElementById("message5").innerHTML = "Note Down the Angle";
  document.getElementById('step6').style = "display:block";
  document.getElementById('arrow5').style = "-webkit-animation: blink 0s;";
  document.getElementById('imag5').src = "img/distance.png";

}
   	  window.list = function(data){
   	  	  document.getElementById('d1').length=0;
   	  	  if(document.getElementById('d1').length>1)
   	  	  {
              document.getElementById('a1').length=0;
   	  	  }
   	  	  window.data1 = data;
   	  	  switch(data)
   	  	  {
   	  	    
   	  	     case "491": document.getElementById('d1').options[0]=new Option("Choose One","Choose One");
   	  	                 document.getElementById('d1').options[1]=new Option("5","5");
   	                     document.getElementById('d1').options[2]=new Option("10","10");
   	                     document.getElementById('d1').options[3]=new Option("-2.5","-2.5");
   	                     document.getElementById('d1').options[4]=new Option("-7.5","-7.5");
   	                     break;
   	         case "995": document.getElementById('d1').options[0]=new Option("Choose One","Choose One");
   	  	                 document.getElementById('d1').options[1]=new Option("-5","-5");
   	                     document.getElementById('d1').options[2]=new Option("-10","-10");
   	                     document.getElementById('d1').options[3]=new Option("2.5","2.5");
   	                     document.getElementById('d1').options[4]=new Option("7.5","7.5");
   	                     break;  
							
			 case "500": document.getElementById('d1').options[0]=new Option("Choose One","Choose One");
   	  	                 document.getElementById('d1').options[1]=new Option("-5","-5");
   	                     document.getElementById('d1').options[2]=new Option("-10","-10");
   	                     document.getElementById('d1').options[3]=new Option("2.5","2.5");
   	                     document.getElementById('d1').options[4]=new Option("7.5","7.5");
   	                     break; 				
   	      }
   	  }
   	  window.list1 = function(data){
   	  	  document.getElementById('a1').length=0;
   	  	  window.data2 = data;
   	  	  switch(data)
   	  	  {
   	  	     case "5": value1("5");
   	                     break;
   	         case "10": value1("10");
   	                     break;
   	         case "-2.5": value1("-2.5");
   	                     break;
   	         case "-7.5": value1("-7.5");
   	                     break;
		     case "-5": value1("-5");
   	                     break;
   	         case "-10": value1("-10");
   	                     break;
   	         case "2.5": value1("2.5");
   	                     break;
   	         case "7.5": value1("7.5");
   	                     break;
			 case "-5": value1("-5");
   	                     break;
   	         case "-10": value1("-10");
   	                     break;
   	         case "2.5": value1("2.5");
   	                     break;
   	         case "7.5": value1("7.5");
   	                     break;			 
   	      }
   	  }
   	  window.value1 = function(data){
   	  	  document.getElementById('a1').length=0;
   	  	  switch(data)
   	  	  {
   	  	     case "5": document.getElementById('a1').options[0]=new Option("Choose One","Choose One");
   	  	                 document.getElementById('a1').options[1]=new Option("14","14");
   	                     break;
   	         case "10": document.getElementById('a1').options[0]=new Option("Choose One","Choose One");
   	  	                 document.getElementById('a1').options[1]=new Option("21","21");
   	                  
   	                     break;
   	         case "-2.5": document.getElementById('a1').options[0]=new Option("Choose One","Choose One");
   	  	                 document.getElementById('a1').options[1]=new Option("10","10");
   	                     break; 
   	         case "-7.5": document.getElementById('a1').options[0]=new Option("Choose One","Choose One");
   	  	                 document.getElementById('a1').options[1]=new Option("17","17");
   	                     break;
   	         case "-5": document.getElementById('a1').options[0]=new Option("Choose One","Choose One");
   	  	                 document.getElementById('a1').options[1]=new Option("29","29");
   	                     break;
   	         case "-10": document.getElementById('a1').options[0]=new Option("Choose One","Choose One");
   	  	                 document.getElementById('a1').options[1]=new Option("37","37");
						 break;
   	         case "2.5": document.getElementById('a1').options[0]=new Option("Choose One","Choose One");
   	  	                 document.getElementById('a1').options[1]=new Option("25","25");
						 break;
   	         case "7.5": document.getElementById('a1').options[0]=new Option("Choose One","Choose One");
   	  	                 document.getElementById('a1').options[1]=new Option("33","33");
						 break;
			 case "-5": document.getElementById('a1').options[0]=new Option("Choose One","Choose One");
   	  	                 document.getElementById('a1').options[1]=new Option("-29","-29");
   	                     break;
   	         case "-10": document.getElementById('a1').options[0]=new Option("Choose One","Choose One");
   	  	                 document.getElementById('a1').options[1]=new Option("34","34");
						 break;
   	         case "2.5": document.getElementById('a1').options[0]=new Option("Choose One","Choose One");
   	  	                 document.getElementById('a1').options[1]=new Option("24","24");
						 break;
   	         case "7.5": document.getElementById('a1').options[0]=new Option("Choose One","Choose One");
   	  	                 document.getElementById('a1').options[1]=new Option("-33.5","-33.5");
						 break;			 
   	  
   	      }
   	  }
      window.value2 = function(data){
            window.data3 = data;
			if(Number(window.data1)==491){
            window.angle = Math.tan(Number(window.data3)*0.01744444444);
			window.data9 = (0.635);
			window.data10 = (11.095);
			window.data4 = (0.635*Number(window.data2));
			window.data5 = (11.095*Number(window.angle));
			window.metacentric = (Number(window.data4)/Number(window.data5));
			window.finally = (Number(window.metacentric).toFixed(2));
				if(Number(window.finally)> 0)
				{
					window.final = Number(window.finally);
					document.getElementById("summation").innerHTML =  "The Metacentric Height is:  "+window.final;
					
				}
				else{
					window.final = (Number(window.finally)*(-1));
					document.getElementById("summation").innerHTML = "The Metacentric Height is:  "+window.final;
					
				}
			}
			else if (Number(window.data1)==995){
			window.angle = Math.tan(Number(window.data3)*0.01744444444);
			window.data9 = (1.139);
			window.data10 = (11.599);
			window.data4 = (1.139*Number(window.data2));
			window.data5 = (11.599*Number(window.angle));
			window.metacentric = (Number(window.data4)/Number(window.data5));
			window.finally = (Number(window.metacentric).toFixed(2));
			if(Number(window.finally)> 0)
				{
					window.final = Number(window.finally);
					document.getElementById("summation").innerHTML =  "The Metacentric Height is:  "+window.final;
				}
				else{
					window.final = (Number(window.finally)*(-1));
					document.getElementById("summation").innerHTML = "The Metacentric Height is:  "+window.final;
					
				}
			}
			else{
			window.angle = Math.tan(Number(window.data3)*0.01744444444);
			window.data9 = (0.644);
			window.data10 = (11.104);
			window.data4 = (0.644*Number(window.data2));
			window.data5 = (11.104*Number(window.angle));
			window.metacentric = (Number(window.data4)/Number(window.data5));
			window.finally = (Number(window.metacentric).toFixed(2));
			if(Number(window.finally)> 0)
				{
					window.final = Number(window.finally);
					document.getElementById("summation").innerHTML =  "The Metacentric Height is:  "+window.final;
				}
				else{
					window.final = (Number(window.finally)*(-1));
					document.getElementById("summation").innerHTML = "The Metacentric Height is:  "+window.final;
					
				}
			}
            
      }
	  
	  window.firstpage = function(){
          document.getElementById('second').style = "display:none";
          document.getElementById('first').style = "display:block";
      }
      window.secondpage = function(){
          document.getElementById('first').style = "display:none";
          document.getElementById('second').style = "display:block";
          document.getElementById('third').style = "display:none";
      }
      window.thirdpage = function(){
          document.getElementById('second').style = "display:none";
          document.getElementById('third').style = "display:block";
      }
	  window.fourthpage = function(){
          document.getElementById('second').style = "display:none";
          document.getElementById('third').style = "display:none";
          document.getElementById('four').style = "display:block";
      }
	  window.fifthpage = function(){
          document.getElementById('second').style = "display:none";
          document.getElementById('third').style = "display:none";
          document.getElementById('four').style = "display:none";
          document.getElementById('five').style = "display:block";
      }
	  window.sixthpage = function(){
          document.getElementById('second').style = "display:none";
          document.getElementById('third').style = "display:none";
          document.getElementById('five').style = "display:none";
          document.getElementById('six').style = "display:block";
      }
	  window.seventhpage = function(){
          document.getElementById('six').style = "display:none";
          document.getElementById('seven').style = "display:block";
          document.getElementById('data1').innerHTML =Number(window.data1);
          document.getElementById('data9').innerHTML =Number(window.data9);
          document.getElementById('data10').innerHTML =Number(window.data10);
          document.getElementById('data2').innerHTML =Number(window.data2);
          document.getElementById('data3').innerHTML =Number(window.data3);
          document.getElementById('data4').innerHTML =Number(window.final);
		  
      }