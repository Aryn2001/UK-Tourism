<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Railway-form</title>

    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        body{
            background-image: url(images/trainbg.jpeg);
            background-repeat: no-repeat;
            /* background-position: center;
            background-size:cover; */

             
        }
        .signup-form {
            height: 600px;
            width: 600px;
            margin-top: 5%;
            margin-left: 25%;
        }
        
        .signup-head {
            padding: 8px;
        }
        
        .signup-content .radio {
            margin: 10px 10px;
        }
        
        .signup-content2 .input {
            width: 400px;
            padding: 10px;
            margin: 10px;
            color: #fff;
        }
        
        .signup-content2 .tarikh {
            margin: 10px;
            padding: 10px;
            color: #fff;
        }
        
        .signup-content2 .person {
            padding: 10px;
            margin: 10px;
            color: #fff;
        }
        
        .signup-content2 .travel {
            margin: 20px 20px;
        }
        
        .signup-content2 .travel2 {
            padding: 5px;
        }
        
        .signup-content2 .submit-btn {
            width: 200px;
            border: none;
            outline: none;
            padding: 10px;
            margin-left: 200px;
        }
    </style>
</head>


<body>
    <form action="">
        <div class="signup-form bg-dark">
            <div class="signup-head bg-warning">
                <h1>Reserve your ticket</h1>
            </div>

            <div class="signup-content">
                <input type="radio" class="radio" name="r">
                <label class="text-white">One way</label>
                <input type="radio" class="radio" name="r">
                <label class="text-white">Return</label>
            </div>
            <div class="signup-content2">
                <input type="text" placeholder="From" class="input bg-dark">
                <input type="text" placeholder="To" class="input bg-dark">
                <label class="text-white" style="margin-left:10px;">Depart</label>
                <input type="date" class="tarikh bg-dark">
                <label class="text-white" style="margin-left:10px;">Return</label>
                <input type="date" class="tarikh bg-dark">

                <input type="number" class="bg-dark person" placeholder="Adults">
                <input type="number" class="bg-dark person" placeholder="Childeren">

                <label class="text-white travel">Travel Class</label>
                <select class="text-white bg-dark travel2">
                    <option></option>
                    <option>First Class/1A</option>
                    <option>AC 2tier/2A</option>
                    <option>AC 3tier/3A</option>
                    <option>AC 3tier/3A</option>
                    <option>Executive class chair car/Economy Class</option>
                    <option>AC chair car</option>
                    <option>Sleeper car</option>
                    <option>Second class</option>
                    <option>General</option>
                </select>

                <input type="submit" value="Check Availability" class="submit-btn bg-warning">

            </div>
        </div>
    </form>
</body>

</html>