<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title> Control Base </title>

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

    a {
      color: black;
      text-decoration: none;

        }
        /*pasudo class*/
    a:hover {
      background-color: cornsilk;
      font-size:34px; 
		}
	    header div {
		   font-size: 30px;
		   margin-left: 580px;
           padding-top: 10px;
        }
  main {
    padding: 5% 0;
      width: 100%;
    box-sizing: border-box;
  }
        
 
  section {
    margin-top: 100px;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }
	   
 button {
	    
       min-width: 500px;
       height: 50px;
       vertical-align: top;
       margin:40px;
       background-color: white;
       border-radius: 20px;
       cursor: pointer;
       font-size: 30px;
    }
button:hover {
      box-shadow: 0 4px 3px gray;
     }


nav {
      display: flex;
    }
        p {
			font-size: 35px;
			font-weight: bold;
			margin-top: 5px;
            margin-left: 50px;
		}
        .top {
            margin-top: -140px;
            padding: 32px;
            box-sizing: border-box;
        }

	</style>
</head>

<body>
    
  <header id="topbar">
    <nav>
  	   <div id="menu">
		   <p><a href="control_arm.php"> Control Arm</a></p>
		   <p>|  Control Base </p>
       </div>
    </nav>
   </header>


  <main> 
   <form action="db.php" method="POST">
    <section>
            
  	  <div class="buttons">
  			  <div>
                  <button type="submit" name="left" >Left</button>
  		      </div>
      </div>
        
    <div class="buttons">
  			  <div class="top">
                  <button type="submit" name="forword" >Forword</button>
  		      </div>
      </div>
        
        
      <div class="buttons">
  			  <div>
                  <button type="submit" name="right" >Right</button>
  		      </div>
      </div>
      
     <div class="buttons">
  			  <div class=" down">
                  <button type="submit" name="backword" >Backword</button>
  		      </div>
      </div>
        
      </section>
      </form>
  </main>


</body>
</html>
