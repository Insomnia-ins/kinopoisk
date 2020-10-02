<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Кинопоиск</title>
    <style type="text/css">
    	body {
    		background-color: #e6e6e6
    	}
    	.main {
    		background-color: white;
    		
    		margin-top: 50px;
    	}
    	.main h3 {
    		color: #f60;
    	}
    </style>	
  </head>
  <body>
    <?php
        $fil = [

            ["img" => "1.jpg","name" => "Зеленая Миля","id" => "1 Фильм","des" => "djkflhejfhjkehfkljehfljkehfejhfjkhfehfkehfkeajhfehufhaewp;fheuphfek"],
            ["img" => "2.jpg","name" => "Побег из Шоушенка","id" => "2 Фильм","des" => "djkflhejfhjkehfkljehfljkehfejhfjkhfehfkehfkeajhfehufhaewp;fheuphfekjfhaefpuheawj"],
            ["img" => "3.jpg","name" => "Форест Гамп","id" => "3 Фильм","des" => "djkflhejfhjkehfkljehfljkehfejhfjkhfehfkehfkeajhfehufhaewp;fheuphfek"],
            ["img" => "4.jpg","name" => "Герой","id" => "4 Фильм","des" => "djkflhejfhjkehfkljehfljkehfejhfjkhfehfkehfkeajhfehufhaewp;fheuphfek"],
            ["img" => "5.jpg","name" => "Андройд","id" => "5 Фильм","des" => "djkflhejfhjkehfkljehfljkehfejhfjkhfehfkehfkeajhfehufhaewp;fheuphfek"],

        ]
    ?>
    <div class="" style="height: 100px; background-color: #444444">
    	<div class="container">
    		<div class="row">
	    		<div class="col-2">
	    			<img src="logo.png" class="w-100">
	    		</div>
	    		<div class="col-6 my-auto ">
	    			 <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Поиск">
	    		</div>
	    		<div class="col-4 my-auto text-right" style="color: #c7c7c7">
	    			<h4>Войти</h4>
	    		</div>
    		</div>
    	</div>
    	<div class="col-6 mx-auto shadow main px-0" >
            <div class="text-center bg-dark  my-auto" style="height: 100px;">
    		<h3  class="pt-4">5 лучших фильмов</h3>
    		</div>
    		<div class="text-center " style="">
               
                <div style="" class="col-8 mx-auto ">
                    <?php 

                    for ($i=0; $i < 5; $i++) { 
                       
                    echo "
                    <h1 style='margin-top:100px;color: #f60;'>
                    
                        ".$fil[$i]["id"]."
                   
                    </h1>
                    <h1>
                    
                        ".$fil[$i]["name"]."
                   
                    </h1>

                    <img src='".$fil[$i]["img"]."' class='col-8'>
                     <p>
                    
                        ".$fil[$i]["des"]."
                   
                    </p>";
                    }
                     ?>  
                </div>


    			 
    		</div>
    	</div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>