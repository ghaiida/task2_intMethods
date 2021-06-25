

<!DOCTYPE html>
<html>
<head>
	<title>control arm page</title>

	<style >

		body {
		   margin: 0;
		   background-color: black;
		}

		
    #topbar {
       padding: 10px 60px;
       background-color: lightgoldenrodyellow;
       height: 70px;
       margin-bottom: 0px;
       position: sticky;
       top:30px;
       box-shadow: 0px 4px 10px white ;
 
    }
    #menu {
      display: flex;
      align-items: center;
    }
    nav {
      display: flex;
    }
    header div {
		   font-size: 30px;
		   margin-left: 580px;
           padding-top: 10px;
        }
        
		table {
           border-collapse: collapse;
           width: 100%;
           margin-top: 100px;
        }
        td {
           padding: 8px;
           text-align: center;
           font-size:30px;
           border-style: none;
        }
        input {
        	width:50%;
        	outline: none;
        	box-shadow: 0px 1px 10px 1px gray;
            margin-bottom: 30px;
            
        }

        input:hover{
        	opacity: 1px;
        }
        
         a {
            color: black;
            text-decoration: none;
        }
        
         a:hover {
           background-color: cornsilk;
           font-size:34px; 
		}
        
         p {
			font-size: 35px;
			font-weight: bold;
			margin-top: 5px;
            margin-left: 50px;
        }
        span, label {
            color: white;
        }
        
        button{
            background-color: white;
			width: 150px;
			height: 60px;
			color: black;
			font-size: 20px;
			font-weight: bold;
			border: 0;
            border-radius: 14px;
			outline: none;
            cursor: pointer;

        }
	</style>

</head>

<body>
    <header id="topbar">
    <nav>
  	   <div id="menu">
		   <p>Control Arm</p>
           <p><a href="control_base.php">|  Control Base </a></p>
       </div>
    </nav>
   </header>
    <form action="db.php" method="POST">
       <table>
    	<tr>
    		<td>
    			<div>
    				<span id="output1"></span>
                    <input type="range" id="m1" name="volume1" min="0" max="180">
                    <label for="volume">motor 1</label>
                </div>
    		</td>
    	</tr>

    	<tr>
    		<td>
    			<div>
    				<span id="output2"></span>
                    <input type="range" id="m2" name="volume2" min="0" max="180">
                    <label for="volume">motor 2</label>
                </div>
    		</td>
    	</tr>

    	<tr>
    		<td>
    			<div>
    				<span id="output3"></span>
                    <input type="range" id="m3" name="volume3" min="0" max="180">
                    <label for="volume">motor 3</label>
                </div>
    		</td>
    	</tr>

    	<tr>
    		<td>
    			<div>
    				<span id="output4"></span>
                    <input type="range" id="m4" name="volume4" min="0" max="180">
                    <label for="volume4">motor 4</label>
                </div>
    		</td>
    	</tr>

    	<tr>
    		<td>
    			<div>
    				<span id="output5"></span>
                    <input type="range" id="m5" name="volume5" min="0" max="180">
                    <label for="volume5">motor 5</label>
                </div>
    		</td>
    	</tr>

    	<tr>
    		<td>
    			<div>
    				<span id="output6"></span>
                    <input type="range" id="m6" name="volume6" min="0" max="180">
                    <label for="volume6">motor 6</label>
                </div>
    		</td>
    	</tr>
    	
    	<tr>
    		<td>
    	      <button type="submit" name="submit">Save</button>
              <button type="submit" name="run">Run</button>
           </td>
      </tr>
    </table>
</form>
    

    <footer id="footer"></footer>
    
    <script src="Js.js" >
    
    </script>

</body>
</html>