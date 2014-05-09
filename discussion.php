<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Discussion Forum</title>

        <script src="jquery-1.7.2.min.js"></script>
        <link rel="stylesheet" href="development-bundle/demos/demos.css">
        <link rel="stylesheet" type="text/css" href="style.css" />

        <style>
            body
            {
                color: black;
                font-family: calibri;
                font-size: 19px;

            }
            
            #some label
            {
               
                font-family: fruktur;
                font-size: 18px;
                
            }
          
            #questionbox
            {   position:absolute;
                left:25%;
                top:20%;
                padding: 20px;
                border: solid rgba(0,0,0,0.3) 15px;
                margin-left: auto;
                margin-right: auto;
                width: 600px;
box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.3);
            }
            #enterques 
            {
                background-color: rgba(0,0,0,0.8);
                border: solid white 5px;   
                width: 300px;
                height:25px;
                color: white;
            }
            #enterques:focus 
            {
                border: solid white 2px;   
            }
            b
            {
                color: red;
                font-weight: bold;
            }
            
            .questions p
            {
                margin-left: 10px; 
            }
            #queue
            {
                position: absolute;
                left: 250px;
                border: solid rgba(0,0,0,0.3) 10px;
                color: white;
                width: 900px;
                top:35%;
                height: auto;
            }
            #queue legend
            {
                font-weight: bold;
                color: red;
            }
            #hint
            {   
                color: black;
                font-size: 18px;
            }
            input
            {

                background-color: rgba(0,0,0,0.8); 
                color: white;
                border: solid white 2px;
            }
          
            #name
            {
                color: #444444;
            }
            #name :focus
            {
                color: white;
            }
            #comments
            {
                color: #444444;
            }
            #comments :focus
            {
                color: white;
            }
            .questions,#comment,.com
            {

                border: solid rgba(0,0,0,0.3) 3px;
                color: #222;
                width: auto;
                height: auto;

            }
           .questions
           {
               font-family: calibri;
               font-size: 20px;
               font-weight:bold;
           }
              .comment
            {
                border: solid rgba(0,0,0,0.3) 2px;
                display: none;
            }
            .que label
            { 
                margin-left: 5px;
                color: red;
                font-weight: bold;  
            }
            #test
            {
                border: solid rgba(0,0,0,0.3) 10px;
                width: 300px;
                height: 300px;
                
                position: absolute;
                top: 500px;
                left: 300px;
            }
            .com
            {
                background-color: rgba(0,0,0,0.1);
                margin-left: 20px;
                color: black;
                font-family: calibri;
                font-size: 17px;
            }
            div.bg
{position:absolute;
top:15%;
left:0;
width:100%;
height:85%;
background:#841357;
z-index:-3;
opacity:0.15;
}
div.back
{position:absolute;
top:17%;
left:0;
width:12%;
height:5%;
background:rgba(0,0,0,0.1);
color:#333;
}
            
        </style>
        <script>
      
            $(document).ready(function(){
            $("#some").submit(function(){
            var qu = $("#enterques").val();
            $("#queue").append('<div class="qbox"></br><p class="questions"><b>Q.</b>'+qu+'</p><div class="comment"><form class="que" action="#"><label>Comments:</label><br/><label>Name: </label><input type="text" class="name" name="name" value="Enter name..."/>&nbsp;<label>Comment: </label><input type="text" class="comments" name="comments" value="Enter comment..."/><button type="submit" id="sumit">Send</button></form></div>');
            $("#enterques").val("");
            return false;
        });
        
        $(document).on("dblclick",".qbox",function (){
           
            $(this).find(".comment").slideToggle("slow");
            
            
        });
         $(document).on("focus",".name",function (){
            $(this).val("");
            
        });
         $(document).on("focus",".comments",function (){
            $(this).val("");
            
        });
          $(document).on("submit",".que",function(){
            var name = $(this.name).val();
            var comments = $(this.comments).val();
            $(this).after('<p class="com"><b>'+name+':</b>'+comments+'</p>');
            return false;
           
    });
            });
        </script>
    </head>
    <body>
<div class="top2" align="center">
<font size="100%" color="#ffffff">piXels</font>
<div class="topp2">
</div>
<div class="logo">
<a href="slideshow.html"><font size="100%" color="#ffffff">X</font></a>
</div>

</div>
<div class="bg">
</div>
<a href="page2.php">
<div class="back">
--Back
</div></a>
        <div id="questionbox">
            <form id="some" action="#">
                <label for="enterques"><font face="calibri" size="4.5px"><strong>Enter a question for</strong> <b>Discussion</b>..</font></label>
                <input id="enterques" type="text"/>
            </form>
        </div>
        <fieldset id="queue">
            <legend>Questions</legend>
            <label id="hint"><font face="calibri"><strong>Double Click on a question to add/view comments...</strong></font></label>
          
        </fieldset>

       
      
    
    </body>
</html>
