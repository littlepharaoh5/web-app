<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shop Homepage - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
  </head>
  <body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href='http://<?php echo $_SERVER['HTTP_HOST']; ?>'>Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#!">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#!">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item" href="#!">All Products</a>
                </li>
                <li>
                  <hr class="dropdown-divider" />
                </li>
                <li>
                  <a class="dropdown-item" href="#!">Popular Items</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#!">New Arrivals</a>
                </li>
              </ul>
            </li>
          </ul>
          <form action="/add-product" class="d-flex">
            <button class="btn btn-outline-dark" onclick="event.preventDefault(); location.href='add-product';">
              <i class="bi-plus-circle-dotted me-1"></i>ADD </button>
          </form>
          <form class="d-flex">
            <button id="delete-product-btn" class="btn btn-outline-dark">
              <i class="bi-trash-fill me-1"></i> MASS DELETE </button>
          </form>
        </div>
      </div>
    </nav>
    <!-- Header-->
    <header class="bg-dark py-5">
      <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
          <h1 class="display-4 fw-bolder">Shop in style</h1>
          <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
        </div>
      </div>
    </header>
    <!-- Section-->
    <section class="py-5">
      <div class="container px-4 px-lg-5 mt-5">
        <div class="row">
          <form id="product_form" class="form-horizontal">
            <fieldset>
              <!-- Form Name -->
              <legend>PRODUCTS</legend>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-4 control-label" for="sku">SKU</label>
                <div class="col-md-4">
                  <input id="sku" name="sku" placeholder="PRODUCT SKU" class="form-control input-md" required="" type="text">
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-4 control-label" for="name">NAME</label>
                <div class="col-md-4">
                  <input id="name" name="name" placeholder="PRODUCT NAME" class="form-control input-md" required="" type="text">
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-4 control-label" for="price">Price</label>
                <div class="col-md-4">
                  <input id="price" name="price" placeholder="PRODUCT Price" class="form-control input-md" required="" type="text">
                </div>
              </div>
              <!-- Select Basic -->
              <div class="form-group">
                <label class="col-md-4 control-label" for="productType">PRODUCT CATEGORY</label>
                <div class="col-md-4">
                  <select id="productType" name="productType" class="form-control">
                    <option value="DVD">DVD</option>
                    <option value="Book">Book</option>
                    <option value="Furniture">Furniture</option>
                  </select>
                </div>
              </div>
              <!-- Text input-->
              <div id="DVD" class="form-group" style="display: none;">
                <label class="col-md-4 control-label" for="size">Size in (MB)</label>
                <div class="col-md-4">
                  <input id="size" name="size" placeholder="Size in (MB)" class="form-control input-md" type="text">
                </div>
              </div>
              <!-- Text input-->
              <div id="Book" class="form-group" style="display: none;">
                <label class="col-md-4 control-label" for="weight">WEIGHT (KG)</label>
                <div class="col-md-4">
                  <input id="weight" name="weight" placeholder="WEIGHT (KG)" class="form-control input-md" type="text">
                </div>
              </div>
              <!-- Textarea -->
              <div id="Furniture" class="form-group" style="display: none;">
                <input id="dimension" name="dimension" placeholder=" (CM)" type="hidden">
                <label class="col-md-4 control-label" for="height">HEIGHT (CM)</label>
                <div class="col-md-4">
                  <input id="height" name="height" placeholder="HEIGHT (CM)" class="form-control input-md" type="text">
                </div>
                <label class="col-md-4 control-label" for="width">WIDTH (CM)</label>
                <div class="col-md-4">
                  <input id="width" name="width" placeholder="WIDTH (CM)" class="form-control input-md" type="text">
                </div>
                <label class="col-md-4 control-label" for="length">WIDTH (CM)</label>
                <div class="col-md-4">
                  <input id="length" name="length" placeholder="LENGTH (CM)" class="form-control input-md" type="text">
                </div>
              </div>
              <!-- Button -->
              <div class="form-group">
                <label class="col-md-4 control-label" for="Save"></label>
                <div class="col-md-4">
                  <input type="submit" value="Save" id="save" name="save" class="btn btn-primary"></input>
                  <input type="button" value="Cancel" id="cancel" name="cancel" class="btn btn-primary"></input>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p>
      </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script>
      (function() {
	  const mass_delete = document.getElementById('delete-product-btn');
		mass_delete.addEventListener('click', async function(e) {
			e.preventDefault();
			});
        const selectDropdown = document.querySelector('#productType');
        var Attribute;
        selectDropdown.value = '';
        selectDropdown.addEventListener('change', function(e) {
          const matches = document.querySelectorAll("#DVD, #Book,#Furniture");
          matches.forEach((select) => {
            select.style.display = 'none';
          });
          document.getElementById(e.srcElement.value).style.display = 'block';
          /*let div = document.getElementById(e.srcElement.value);
          div.style.display = 'block';
		  let inputs = div.querySelectorAll('input');
		  let unit;
          inputs.forEach((dinput,index) => {
            if(index==0){
			let finput = dinput.id;
			unit = dinput.getAttribute("placeholder").slice(-4);
		  Attribute = finput.charAt(0).toUpperCase() + finput.slice(1) +' '+ dinput.value +' ';
        }else{
          Attribute = Attribute + dinput.value + 'x';
        }
          });
		  console.log(Attribute.slice(0,Attribute.length-1) + ' ' + unit);
		  Attribute = Attribute.slice(0,Attribute.length-1) + ' ' + unit;
		  */
        });
        const cancel = document.querySelector('#cancel');
        cancel.addEventListener('click', function(e) {
          e.preventDefault();
          location.href = 'http://<?php echo $_SERVER['HTTP_HOST']; ?>';
        });
        const product_form = document.querySelector('#product_form');
        product_form.addEventListener('submit', async function(e) {
          e.preventDefault();
          let validateD = await validateDep();
          if (!validateD) {
            return;
          }
          Attribute = await prepAttribute();
          let saved = await save();
          if (saved) {
            location.href = 'http://<?php echo $_SERVER['HTTP_HOST']; ?>';
          }
        });
        async function validateDep() {
          var valid = true;
          var sku = document.getElementById("sku");
          var name = document.getElementById("name");
          var price = document.getElementById("price");
          var productType = document.getElementById("productType");
          if (!sku.value) {
            alert('Please provide valid sku');
            sku.style.backgroundColor = '#FFFFDF'
            valid = false;
          } else {
            valid = await new Promise(resolve => {
              var xhr = new XMLHttpRequest();
              xhr.open("GET", 'ValidSku/' + sku.value, true);
              xhr.responseType = 'json';
              xhr.onload = function() {
                if (this.status == 200) { // onload called even on 404 etc so check the status
                  resolve(xhr.response.valid);
                }
              };
              xhr.onerror = function() {
                resolve(false);
                console.error("** An error occurred during the XMLHttpRequest");
              };
              xhr.send();
            })
          }
          if (!name.value) {
            alert('Please provide valid name');
            name.style.backgroundColor = '#FFFFDF'
            valid = false;
          }
          if (!price.value) {
            alert('Please provide valid price');
            price.style.backgroundColor = '#FFFFDF'
            valid = false;
          }
          if (!productType.value) {
            alert('Please provide valid product Type');
            productType.style.backgroundColor = '#FFFFDF'
            valid = false;
          }
          let inputs = document.getElementById(productType.value).querySelectorAll('input');
          inputs.forEach((dinput, index) => {
            if (dinput.name != 'dimension' && !dinput.value) {
              alert('Please provide valid ' + dinput.name);
              dinput.style.backgroundColor = '#FFFFDF'
              valid = false;
            }
          });
          console.log(valid);
          return valid;
        }
        async function prepAttribute() {
          Attribute = false;
          var AttribStr;
          Attribute = await new Promise(resolve => {
            let div = document.getElementById(selectDropdown.value);
            let inputs = div.querySelectorAll('input');
            let unit;
            inputs.forEach((dinput, index) => {
              if (index == 0) {
                let finput = dinput.id;
                unit = dinput.getAttribute("placeholder").slice(-4);
                AttribStr = finput.charAt(0).toUpperCase() + finput.slice(1) + ' ' + dinput.value + ' ';
              } else {
                AttribStr = AttribStr + dinput.value + 'x';
              }
            });
            console.log(AttribStr.slice(0, AttribStr.length - 1) + ' ' + unit);
            AttribStr = AttribStr.slice(0, AttribStr.length - 1) + ' ' + unit;
            resolve(AttribStr);
          })
          console.log(Attribute);
          return Attribute;
        }
        async function save() {
          var valid = true;
          var sku = document.getElementById("sku");
          var name = document.getElementById("name");
          var price = document.getElementById("price");
          valid = await new Promise(resolve => {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", '', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
            xhr.responseType = 'json';
            xhr.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                console.log(this.response);
                resolve(xhr.response);
              }
            };
            xhr.onerror = function() {
              resolve(false);
              console.error("** An error occurred during the XMLHttpRequest");
            };
            var params = 'sku=' + sku.value + '&name=' + name.value + '&price=' + price.value + '&type=' + selectDropdown.value + '&attribute=' + Attribute;
            xhr.send(params);
          })
          console.log(valid);
          return valid;
        }
      })();
    </script>
  </body>
</html>