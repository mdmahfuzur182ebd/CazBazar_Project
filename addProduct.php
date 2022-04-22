<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="input.css"> -->
    <?php include 'links.php' ?>

</head>

<body>
    <div class="container text-center">
        <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Add product</h1>
        <div class="d-flex justify-content-center">

            <!-- form starts here -->

        </div>

        <div class="form">
        <form class="w-50" action="insert.php" method="Post">
                <div class="py-2">
                    <div class="input-group mb-2">
                        <span class="input-group-text bg-warning" id="basic-addon1"><i class="fa-solid fa-id-badge"></i></span>

                        <input id="ad" name="ad" type="text" autocomplete="off" placeholder="ad_title" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>


                </div>
         

                <div class="pt-2">
                    <div class="input-group mb-2">
                        <span class="input-group-text bg-warning" id="basic-addon1"><i class="fa-solid fa-book"></i></span>
                        <input id="model" name="model" type="text" autocomplete="off" placeholder="model" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="pt-2">
                    <div class="input-group mb-2">
                        <span class="input-group-text bg-warning" id="basic-addon1"><i class="fa-solid fa-book"></i></span>
                        <input id="year" name="year" type="text" autocomplete="off" placeholder="year" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <!-- <div class="selectbox pt-4 pb-4">
                    <select required id="condition" name="condition" class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option selected>Used or new ?</option>
                        <option value="car">Used</option>
                        <option value="bike">New</option>

                    </select>
                </div> -->
                <div class="pt-2">
                    <div class="input-group mb-2">
                        <span class="input-group-text bg-warning" id="basic-addon1"><i class="fa-solid fa-book"></i></span>
                        <input id="year_used" name="year_used" type="text" autocomplete="off" placeholder="Year Used" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <!-- <div class="pt-2">
                    <div class="input-group mb-2">
                        <span class="input-group-text bg-warning" id="basic-addon1"><i class="fa-solid fa-book"></i></span>
                        <input id="vehicle_ran" name="vehicle_ran" type="text" autocomplete="off" placeholder="vehicle Ran For ? KM" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div> -->
                <div class="pt-2">
                    <div class="input-group mb-2">
                        <span class="input-group-text bg-warning" id="basic-addon1"><i class="fa-solid fa-book"></i></span>
                        <input id="company" name="company" type="text" autocomplete="off" placeholder="Name of the Company?" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="pt-2">
                    <div class="input-group mb-2">
                        <span class="input-group-text bg-warning" id="basic-addon1"><i class="fa-solid fa-book"></i></span>
                        <input id="subbrand" name="subbrand" type="text" autocomplete="off" placeholder="subbrand of the Company?" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="pt-2">
                    <div class="input-group mb-2">
                        <span class="input-group-text bg-warning" id="basic-addon1"><i class="fa-solid fa-book"></i></span>
                        <input id="cc" name="cc" type="text" autocomplete="off" placeholder="Vehicle CC?" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="pt-2">
                    <div class="input-group mb-2">
                        <span class="input-group-text bg-warning" id="basic-addon1"><i class="fa-solid fa-book"></i></span>
                        <input id="engine" name="engine" type="text" autocomplete="off" placeholder="Engine Type" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="pt-2">
                    <div class="input-group mb-2">
                        <span class="input-group-text bg-warning" id="basic-addon1"><i class="fa-solid fa-book"></i></span>
                        <input id="tyre" name="tyre" type="text" autocomplete="off" placeholder="Tyre used " class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="pt-2">
                    <div class="input-group mb-2">
                        <span class="input-group-text bg-warning" id="basic-addon1"><i class="fa-solid fa-book"></i></span>
                        <input id="license" name="license" type="text" autocomplete="off" placeholder="License Location" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>

                <div class="pt-2">
                    <div class="input-group mb-2">
                        <span class="input-group-text bg-warning" id="basic-addon1"><i class="fa-solid fa-book"></i></span>
                        <input id="asking_price" name="asking_price" type="text" autocomplete="off" placeholder="Asking Price?" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="pt-2">
                    <div class="input-group mb-2">
                        <span class="input-group-text bg-warning" id="basic-addon1"><i class="fa-solid fa-book"></i></span>
                        <input id="original_price" name="original_price" type="text" autocomplete="off" placeholder="original_price" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="pt-2">
                    <div class="input-group mb-2">
                        <span class="input-group-text bg-warning" id="basic-addon1"><i class="fa-solid fa-book"></i></span>
                        <input id="your_location" name="your_location" type="text" autocomplete="off" placeholder="your_location?" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <!-- <div class="selectbox pt-4 pb-7 mb-10">
                    <select required id="Price_nego" name="price_nego" class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option selected>Negotiable or non Negotiable ?</option>
                        <option value="Negotiable">Negotiable</option>
                        <option value="Non_Negotiable">Non Negotiable</option>

                    </select>
                </div> -->

                <!-- <div class="pt-2">
                    <div class="input-group mb-2">
                        <span class="input-group-text bg-warning" id="basic-addon1"><i class="fa-solid fa-book"></i></span>
                        <input name="user_raing" type="text" autocomplete="off" placeholder="Asking Price?" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div> -->
                <div class="pt-2">
                    <div class="input-group mb-2">
                        <span class="input-group-text bg-warning" id="basic-addon1"><i class="fa-solid fa-book"></i></span>
                        <input name="asking_price" type="text" autocomplete="off" placeholder="Asking Price?" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="py-4 pb-4">
                    <button class="btn btn-warning py-2 rounded" type="submit" name="submit" value="submit">Submit</button>
                </div>











            </form>

        </div>

        <!-- <form action="insert.php" method="post">
            <input type="text" name="ad" id="" placeholder="ad_title">
            <input type="text" name="model" id="model" placeholder="model">
            <input type="text" name="year" id="year" placeholder="year">
            <input type="text" name="year_used" id="year_used" placeholder="year_used">
            <input type="text" name="company" id="company" placeholder="company">
            <input type="text" name="subbrand" id="subbrand" placeholder="subbrand">
            
            <input type="text" name="cc" id="cc" placeholder="cc">
            <input type="text" name="engine" id="engine" placeholder="engine">
            <input type="text" name="tyre" id="tyre" placeholder="tyre">
            <input type="text" name="license" id="license" placeholder="license">
            <input type="text" name="asking_price" id="asking_price" placeholder="Asking price">
            <input type="text" name="original_price" id="original_price" placeholder="original_price">
            <input type="text" name="your_location" id="your_location" placeholder="your_location">

           
            <button class="submit_btn" type="submit" value="submit" name="submit">Submit</button>
        </form> -->



    </div>

</body>

</html>