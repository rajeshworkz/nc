<?php include './includes/header.php' ?>
    <?php include './includes/nav.php' ?>


<section class="m-0">
<img class="img-fluid" src="common/images/innerimg.png">                        
</section>
<section>
    <div class="container">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb nutri-breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
</nav>
    </div>
</section>
            
<section class="nutri-listing-page">
    <div class="container">
        
        <div class="row">
        
           <div class="col-lg-8 m-auto">
    
<div class="input-group recipe-search">
  <input type="text" class="form-control pl-0" placeholder="Looking for something delicious?">
  <div class="input-group-append">
    <button class="btn btn-recipe-search pr-0" type="submit"><img src="common/images/icons/search.svg"></button>
  </div>
</div>
        
        
    
    </div>
        </div>
<div class="row">
    <div class="col-md-12">
    <h3 class="main-color">All recipes.</h3>
    </div>
    
    
 
<div class="col-md-4">
    <div class="nutri-filter">
        <h4>Filter by:</h4>
    
      <div id="accordion" class="accordion">
        <div class="card mb-0">
            <div class="card-header" data-toggle="collapse" href="#collapseOne">
                <a class="card-title">
                    Cuisine Type
                </a>
            </div>
            <div id="collapseOne" class="card-body collapse show" data-parent="#accordion" >
              <div class="filters-wrapper">
                
                <div class="form-check">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">Option 1
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">Option 2
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio" disabled>Option 3
  </label>
</div>
                  
                  
                </div>
                
                
            </div>
            <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                <a class="card-title">
                  Select by Product
                </a>
            </div>
            <div id="collapseTwo" class="card-body collapse" data-parent="#accordion" >
                       <div class="filters-wrapper">
                
                <div class="form-check">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">Option 1
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">Option 2
  </label>
</div>
<div class="form-check disabled">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio" disabled>Option 3
  </label>
</div>
                  
                  
                </div>
                
                
            </div>
            <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                <a class="card-title">
                  Dietary Preference
                </a>
            </div>
            <div id="collapseThree" class="collapse" data-parent="#accordion" >
         <div class="filters-wrapper">
                <div class="form-check">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="">Option 1
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="">Option 2
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="">Option 3
  </label>
</div>
                
                </div>
                
            </div>
        </div>
    </div>
          
           <div class="short">
                <h4>Sort by:</h4>
                   <div class="filters-wrapper">
                <div class="form-check">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">Option 1
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">Option 2
  </label>
</div>
               </div>

                  
                  
                </div>
        
    <button class="btn btn-nutri-1">Reset</button>    
        
    </div>
    
    
    
</div>

<div class="col-md-8">
    <div class="row">
    
<?php include 'includes/recipes-3.php' ?>
<?php include 'includes/recipes-3.php' ?>
<?php include 'includes/recipes-3.php' ?>
<?php include 'includes/recipes-3.php' ?>
<?php include 'includes/recipes-3.php' ?>
<?php include 'includes/recipes-3.php' ?>

        
        <?php include 'includes/recipes-3.php' ?>
<?php include 'includes/recipes-3.php' ?>
<?php include 'includes/recipes-3.php' ?>
<?php include 'includes/recipes-3.php' ?>
<?php include 'includes/recipes-3.php' ?>
<?php include 'includes/recipes-3.php' ?>

    
      
    </div>
    
<?php include 'includes/pagination.php' ?>
    
    </div>
</div>
    
</div>   
   
</section>            
            

            


            
    

 
            




<?php include './includes/footer.php' ?>