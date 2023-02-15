<!DOCTYPE html>
<html>
   <head>
      <title>Boogle</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" type="image/x-icon" href="icon/icon.ico">
      <link href="css/bootstrap.min.css" rel="stylesheet"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="css/style.css"/>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/script.js"></script>
   </head>
   <body>
      <div id="overlayContent" onclick="removeSearchResult()"></div>
      <nav class="navbar navbar-light purple">
         <div class="container-fluid">
            <div class="d-flex justify-content-end w-100">
               <div class="p-2">
                  <button class="rounded-circle btn light-ripple" data-bs-toggle="modal" data-bs-target="#aboutModal"><i class="fas fa-info-circle"></i></button>
                  <button class="rounded-circle btn light-ripple" data-bs-toggle="modal" data-bs-target="#listModal"><i class="fa fa-list"></i></button>
               </div>
               <div class="p-2">
                  <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uploadModal" style="width: 125px !important; font-size: 17px !important;" onclick="clearForm();">Upload</button>
               </div>
               <div class="modal fade" id="aboutModal" tabindex="-1" aria-labelledby="aboutModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="aboutModalLabel">About Lab Activity #3</h5>
                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                           <b>Developed by:</b> Aldrian V. Barias & Nivea Rea A. Bernal
                           <br><b>Section:</b> BSIT-3D
                        </div>
                     </div>
                  </div>
               </div>
               <div class="modal fade" id="listModal" tabindex="-1" aria-labelledby="listModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="listModalLabel">List of Uploaded Word(s)</h5>
                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-lg-12">
                                 <table class="table">
                                    <thead>
                                       <tr>
                                          <th scope="col">#</th>
                                          <th scope="col">Word Name</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php require ("php/getWords.php"); ?>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" >
                     <form id="wordForm" action="php/upload.php" method="POST" autocomplete="off">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title" id="uploadModalLabel">Upload Word(s) to File</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                           </div>
                           <div class="modal-body">
                              <div class="row mb-3">
                                 <div class="col col-lg-6">
                                    <div class="input-group">
                                       <span class="input-group-text" id="inputNum1">Number 1</span>
                                       <input type="text" class="form-control" name="inputNum1" placeholder="Input Word for Number 1.." aria-label="inputNum1" aria-describedby="inputNum1" required>
                                    </div>
                                 </div>
                                 <div class="col col-lg-6">
                                    <div class="input-group">
                                       <span class="input-group-text" id="inputNum2">Number 2</span>
                                       <input type="text" class="form-control" name="inputNum2" placeholder="Input Word for Number 2.." aria-label="inputNum2" aria-describedby="inputNum2" required>
                                    </div>
                                 </div>
                              </div>
                              <div class="row mb-3">
                                 <div class="col col-lg-6">
                                    <div class="input-group">
                                       <span class="input-group-text" id="inputNum3">Number 3</span>
                                       <input type="text" class="form-control" name="inputNum3" placeholder="Input Word for Number 3.." aria-label="inputNum3" aria-describedby="inputNum3" required>
                                    </div>
                                 </div>
                                 <div class="col col-lg-6">
                                    <div class="input-group">
                                       <span class="input-group-text" id="inputNum4">Number 4</span>
                                       <input type="text" class="form-control" name="inputNum4" placeholder="Input Word for Number 4.." aria-label="inputNum4" aria-describedby="inputNum4" required>
                                    </div>
                                 </div>
                              </div>
                              <div class="row mb-3">
                                 <div class="col col-lg-6">
                                    <div class="input-group">
                                       <span class="input-group-text" id="inputNum5">Number 5</span>
                                       <input type="text" class="form-control" name="inputNum5" placeholder="Input Word for Number 5.." aria-label="inputNum5" aria-describedby="inputNum5" required>
                                    </div>
                                 </div>
                                 <div class="col col-lg-6">
                                    <div class="input-group">
                                       <span class="input-group-text" id="inputNum6">Number 6</span>
                                       <input type="text" class="form-control" name="inputNum6" placeholder="Input Word for Number 6.." aria-label="inputNum6" aria-describedby="inputNum6" required>
                                    </div>
                                 </div>
                              </div>
                              <div class="row mb-3">
                                 <div class="col col-lg-6">
                                    <div class="input-group">
                                       <span class="input-group-text" id="inputNum7">Number 7</span>
                                       <input type="text" class="form-control" name="inputNum7" placeholder="Input Word for Number 7.." aria-label="inputNum7" aria-describedby="inputNum7"required>
                                    </div>
                                 </div>
                                 <div class="col col-lg-6">
                                    <div class="input-group">
                                       <span class="input-group-text" id="inputNum8">Number 8</span>
                                       <input type="text" class="form-control" name="inputNum8" placeholder="Input Word for Number 8.." aria-label="inputNum8" aria-describedby="inputNum8"required>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col col-lg-6">
                                    <div class="input-group">
                                       <span class="input-group-text" id="inputNum9">Number 9</span>
                                       <input type="text" class="form-control" name="inputNum9" placeholder="Input Word for Number 9.." aria-label="inputNum9" aria-describedby="inputNum9" required>
                                    </div>
                                 </div>
                                 <div class="col col-lg-6">
                                    <div class="input-group">
                                       <span class="input-group-text" id="inputNum10">Number 10</span>
                                       <input type="text" class="form-control" name="inputNum10" placeholder="Input Word for Number 10.." aria-label="inputNumTen" aria-describedby="inputNum10" required>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col col-lg-12 mb-2">
                                 <div class="d-flex justify-content-center">
                                    <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" name="inlineRadioOptions" value="Overwrite" id="inlineRadio1" value="option1" required>
                                       <label class="form-check-label" for="inlineRadio1">Overwrite</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" name="inlineRadioOptions"  value="Append" id="inlineRadio2" value="option2">
                                       <label class="form-check-label" for="inlineRadio2">Append</label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="modal-footer">
                              <div class="d-flex justify-content-end">
                                 <button class="btn btn-primary" type="submit" value="submit" style="width: 125px !important; font-size: 17px !important;">Submit</button>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </nav>
      <div class="panel deep-purple shadow"></div>
      <main class="freeBird">
         <div class="container pb-3">
            <div class="d-flex justify-content-center">
               <img src="images/boogle.png" class="headerImage" alt="Responsive image">
            </div>
         </div>
      </main>
      <div class="container mt-0">
         <form method="POST" autocomplete="off">
            <div class="d-flex justify-content-center">
               <div class="dropdown has-search" style="width: 850px;">
                  <div class="controls">
                     <button type="reset" name="reset"  class="rounded-circle btn dark-ripple form-control-clear"><i class="fa-regular fa-x"></i></button>
                     <button type="button" data-bs-toggle="modal" data-bs-target="#uploadModal" class="rounded-circle btn dark-ripple form-control-upload" onclick="clearForm();"><i class="fa fa-upload"></i></button>
                     <button type="submit" name="submit" value="submit" class="rounded-circle btn dark-ripple form-control-search"><i class="fa fa-search"></i></button>
                  </div>
                  <input type="text" name="searchBox" class="form-control form-control-lg" placeholder="Search for..." id="searchBox"/>
                  <span id="search-result">
                  <?php require ("php/showSearchResults.php"); ?>
                  </span>
               </div>
            </div>
         </form>
      </div>
   </body>
</html>