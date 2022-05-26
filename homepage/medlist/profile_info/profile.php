
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        td, td {
            padding: 20px;
            border: 1px solid #dddddd;
        
            
        }
        a{
            text-decoration: none;
            color: inherit;
        }
        i{
            color: rgb(45, 160, 160);
        }

    </style>
    
    <title>Reports - Drugs.com</title>
    <link rel="icon" href="img/drugs1.png" type="image/png">
    <link rel="stylesheet" href="css/style1.css">
    <script src="https://kit.fontawesome.com/769f430edb.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
    include '../../layout/header.php';
    ?>
    <div class="container">
        <table style="width: 90%; border: 1px solid gray;  border-collapse:collapse; margin-top:80px" align="center" >
            <tr>
                <td style="width: 30%;"><a href="overviewAcc.php" style="color: blue;"> <i class="fa-solid fa-chevron-left"></i> Profiles</a> </td>
                <td  style="text-align: right;"  ><a href="Report.php" style="color: blue;">Report</a></td>
            </tr>
            <tr>
                <td style="width: 10%;;"><a href="../profile_info/profile.html"><i class="fa-solid fa-user"></i> Profil</a></td>
                <td style="border: none;  " rowspan="20"   >
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                    
                        </div>  
                        <p style="color: gray;">Edit details
                            <br>
                            <h4>Peniel</h4> <br> 
            
                            <label for="peniel"><h6>Profile Name</h6></label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="peniel" placeholder="Profil name">
                            </div>
                            <h6>Pregnancy/Lactation Warnings</h6> 
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Disabled  <span style="color: grey;">- pregnancy/lactation warnings not included</span>
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Enabled <span style="color: grey;">- all relevant pregnancy/lactation warnings will be included in reports</span>
                                </label> 
                              </div> <br>
                              <label for="okok">Emergency Contact <span style="color: gray;">(optional)</span> </label>
                              <div class="input-group mb-3">
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="okok" placeholder="Contact Name">
                              </div>
                              <div class="input-group mb-3">
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="okok" placeholder="Contact Phone Number">
                              </div> <br>
                              <label for="okok">Primary Physician <span style="color: gray;">(optional)</span> </label>
                              <div class="input-group mb-3">
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="okok" placeholder="Physician Name">
                              </div>
                              <div class="input-group mb-3">
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="okok" placeholder="Physician Phone Number">
                              </div>
                              <label for="okok">Other Details <span style="color: gray;">(optional)</span> </label>
                              <div class="form-floating">
                                <textarea class="form-control" placeholder="Add additional information" id="floatingTextarea2" style="height: 150px"></textarea>
                                <label for="floatingTextarea2">Add additional information</label>
                              </div>
                              <span style="color: gray;"> E.g. other physicians, specialists, pharmacists, medical history, blood type, etc</span>
                            </p> 
                            <button type="button" class="btn btn-primary">Save</button> <br> <br>
                            <span style="color: red;">Delete this Profile</span>
                        </div>
                    
                    </div>
                </td>
        
                
            </tr> 
            <tr>
                <td>
                    <a href="medlistdetails.php"><i class="fa-solid fa-clipboard-list"></i> Medlist</a>
                </td>
            </tr>

            
        
            <tr>
                <td style="width: 30%;"><a href="report.php"><i class="fa-solid fa-print"></i> Reports</a></td>
            </tr>
            <tr>
                <td style="width: 30%;"><a href="../notes/notes.html"><i class="fa-solid fa-clipboard"></i> Notes</a></td>
            </tr>
        
            </table>
    </div>
    
    <?php
    include '../../layout/footer.php';
    ?>
    

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>