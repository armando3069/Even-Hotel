<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="icon" href="https://t3w8f2g9.stackpathcdn.com/wp-content/uploads/2018/01/Airbnb-Effect-1.png" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Even</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Patua+One">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
    color: rgb(112, 236, 11);
    background: #fbfcf9;
    background-image: url(https://eskipaper.com/images/brown-background-8.jpg);
    font-family: "Patua One", sans-serif;
}
.contact-form {
    padding: 50px;
    margin: 30px 0;
}
.contact-form h1 {
    color: #19bc9d;
    font-weight: bold;
    margin: 0 0 15px;
}
.contact-form .form-control, .contact-form .btn {
    min-height: 38px;
    border-radius: 2px;
}
.contact-form .form-control:focus {
    border-color: #19bc9d;
}
.contact-form .btn-primary, .contact-form .btn-primary:active {
    color: #fff;
    min-width: 150px;
    font-size: 16px;
    background: #19bc9d !important;
    border: none;
}
.contact-form .btn-primary:hover {
    background: #037011 !important; 
}
.contact-form .btn i {
    margin-right: 5px;
}
.contact-form label {
    opacity: 0.7;
}
.contact-form textarea {
    resize: vertical;
}
.hint-text {
    font-size: 15px;
    padding-bottom: 20px;
    opacity: 0.6;
}
</style>
</head>
<body>
<div class="container-lg">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="contact-form">
                <h1>Rezerva acum</h1>
                <p class="hint-text">Nu ezita sa ne scrii preferintele tale</p>       
                <form action="home.php" method="post">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="inputName">Nume</label>
                                <input type="text" class="form-control" name="Nume" required>
                            </div>
                        </div>                
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control" name="Email" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="inputPhone">Telefon</label>
                                <input type="number" class="form-control" name="Telefon" required>
                            </div>
                        </div>
                    </div>




                 <div class="row">
                    <div class="col-sm-4">        
                     <div class="form-group">
                        <label >Camera de Hotel</label>
                        <select name="camere"  class="form-control">
                            <option value="">Alege</option>
                            <option value="Double Bed">Double Bed</option>
                            <option value="Single Bed">Single Bed</option>
                    
                        </select>

                     </div>
                    </div>

                    <div class="col-sm-4">        
                        <div class="form-group">
                           <label >De la </label>
                           <?php
                             $Azi = date("d.m.Y");
                             $Maini = date("d.m.Y", strtotime("+1 day"));
                             $Poimani = date("d.m.Y", strtotime("+2 day"));
                             $Peste_3zile = date("d.m.Y", strtotime("+3 day"));
                             
                           echo "<select name= 'data_begin'  class='form-control'>n";
                               
                              echo"<option value=''> Alege </option>"; 
                              echo"<option value='$Azi'>$Azi</option>"; 
                              echo"<option value='$Maini'>$Maini</option>"; 
                              echo"<option value='$Poimani'>$Poimani</option>";
                              echo"<option value='$Peste_3zile'>$Peste_3zile</option>"; 
                       
                           echo"</select>";

                           ?>
                        </div>
                       </div>

                        

                       <div class="col-sm-4">        
                        <div class="form-group">
                           <label >Pana la </label>
                           <?php
                             $ziua2 = date("d.m.Y", strtotime("+1 day"));
                             $ziua3 = date("d.m.Y", strtotime("+2 day"));
                             $ziua4 = date("d.m.Y", strtotime("+3 day"));
                             $ziua5 = date("d.m.Y", strtotime("+4 day"));
                             $ziua6 = date("d.m.Y", strtotime("+5 day"));
                             
                           echo "<select name= 'data_end'  class='form-control'>n";
                               
                              echo"<option value=''> Alege </option>"; 
                              echo"<option value='$ziua2'>$ziua2</option>"; 
                              echo"<option value='$ziua3'>$ziua3</option>";
                              echo"<option value='$ziua4'>$ziua4</option>"; 
                              echo"<option value='$ziua5'>$ziua5</option>"; 
                              echo"<option value='$ziua6'>$ziua6</option>"; 
                       
                           echo"</select>";
                           ?>
                        </div>
                       </div>

 

                 </div>



                    <div class="form-group">
                        <label for="inputMessage">Mesaj</label>
                        <textarea class="form-control" name="Mesaje" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Trimite</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>