<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- <form action="seeproducts.php" method="post">
        <input type="text" name="product-name" placeholder="enter the product name" id="">
        <input type="file" onchange="readURL(this)" name="image" id="image" alt="">
        <img id="show-image" width="300" alt="image is ">
        <input type="submit" value="add product">
    </form> -->
    <div class="container mt-4">
        <h2 class="text-center text-uppercase">Product details</h2>
        <form method="post" action="addproducts.php" enctype="multipart/form-data">

            <!-- Text input -->
            <div class="form-outline mb-4">
                <input type="text" name="product-name" id="form6Example4" class="form-control" required />
                <label class="form-label" for="form6Example4">Name of the product</label>
            </div>
            <!-- Text input -->
            <div class="form-outline mb-4">
                <input type="text" name="company-name" id="form6Example3" class="form-control" required />
                <label class="form-label" for="form6Example3">Company name</label>
            </div>

            <!-- Number input -->
            <div class="mb-3">
                <div class=" input-group ">
                    <span class=" input-group-text ">₹</span>
                    <input type="number" name="price" class=" form-control " aria-label=" Amount (to the nearest rupees)" step="0.01" required>
                    <span class=" input-group-text ">.00</span>
                </div>
                <label for=" ">price per product</label>
            </div>
            <!-- Number input -->
            <div class=" form-outline mb-4 ">
                <input type="number" name="stock" id=" form6Example6 " class="form-control" required min="1" />
                <label class=" form-label " for=" form6Example6">stock</label>
            </div>
            <div class=" form-outline mb-4 ">
                <select class=" form-select " name="type" aria-label=" Default select example" required>
                    <option selected>Open this select menu</option>
                    <option value=" small ">small</option>
                    <option value=" medium ">medium</option>
                    <option value=" large ">Large</option>
                </select>
                <label class=" form-label " for=" form6Example6 ">Type of product</label>
            </div>


            <!-- Message input -->
            <div class=" form-outline mb-4 ">
                <textarea class=" form-control " name="desc" id=" form6Example7 " rows=" 4 "></textarea>
                <label class=" form-label " for=" form6Example7 ">Description</label>
            </div>
            <!-- upload image -->
            <div class="row py-4">
                <div class="col-lg-6 mx-auto">

                    <!-- Upload image input-->
                    <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                        <input id="upload" type="file" name="image" onchange="readURL(this)" class="form-control border-0" required>
                        <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose file</label>
                        <div class="input-group-append">
                            <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i
                                    class="fa fa-cloud-upload mr-2 text-muted"></i><small
                                    class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                        </div>
                    </div>

                    <!-- Uploaded image area-->
                    <p class="font-italic text-warning text-center">The image uploaded will be rendered inside the box below.
                    </p>
                    <div class="image-area mt-4"><img id="show-image" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>

                </div>
            </div>

            <!-- Submit button -->
            <button type=" submit " class=" btn btn-primary btn-block mb-4 m-auto ">Add product</button>
        </form>
    </div>
    <script type=" text/javascript " src=" https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js ">
    </script>

    <!-- uplaoding image -->
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#show-image').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $('#upload').change(function() {
            readURL(this)
        })
        var input = document.getElementById('upload');
        var infoArea = document.getElementById('upload-label');

        input.addEventListener('change', showFileName);

        function showFileName(event) {
            var input = event.srcElement;
            var fileName = input.files[0].name;
            infoArea.textContent = 'File name: ' + fileName;
        }
    </script>
</body>

</html>



<?php




?>