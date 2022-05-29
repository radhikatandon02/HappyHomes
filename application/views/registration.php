<!DOCTYPE html> 
<html>   
    <head> 
        <title>Register Yourself</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

        <style>
            table{
                background-color: rgba(13, 12, 13, 0.22);
                padding: 10px;
                /*border: 1px solid black;*/
                border-radius: 10px;
            }
            tr{
                /*border: 1px solid black;*/
                padding: 20px;
            }

            td{ 
                 /*border: 1px solid black;*/
                padding: 20px;
                
            }

            /*label{
                width: 70%;
            }*/

            .container-fluid{
            width : 90%;
            }

            .imgtop{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }

            .card-body{
                width: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .card-header{
            background-color: black;
            color: white;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

            }

            .table{
                width: 90%;
                font-size: 20px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

            }





        </style>

        <script type="text/javascript">
            function check(){
              
              const fform=document.forms["myForm"]["fname"].value;
              const lform=document.forms["myForm"]["lname"].value;
              
              const eform=document.forms["myForm"]["email"].value;
              const phform=document.forms["myForm"]["phone"].value;
              const gform=document.forms["myForm"]["gender"].value;
              
              const aform=document.forms["myForm"]["address"].value;
              const dform=document.forms["myForm"]["birthday"].value;
              const pform=document.forms["myForm"]["pass"].value;
              const iform=document.forms["myForm"]["photograph"].value;
        if ( fform== "" || lform== "" || eform=="" || phform== "" || gform == "" || aform == "" || dform == "" || pform=="" || iform=="") {
            alert("Please enter the data in the form.");
            return false;
        }
        else
        {
            alert('The form has been submitted successfully.');
            return true;
        }
        }

        </script>

</head>
<body>
    <br><br>
        <center><img class="imgtop" src="https://firebasestorage.googleapis.com/v0/b/happyhomes-1234.appspot.com/o/0001-9127767020_20211002_123156_0000.jpg?alt=media&token=7d2df522-280e-491e-a7eb-52dad6e5e0bb" alt="test image" width="1100px" height="200px"></center>
        <br>
        <div class="container-fluid">
            <div class="card-header">
                <h1 style="font-size:25px; height: 20px; font-family:sans-serif;" ><b><center>Registration Form </center></b></h1>
            </div>

            <div class="card-body">
                <center><form id="myForm" method="post" action="<?php echo base_url()."Login/create"?>" onsubmit="return check()"  >
            <table class="table" >
                <tr>
                    <td><label for = "username">Username:</label></td>
                    <td><input type = "text" id = "username" name="uname" placeholder="Enter your Username" style="width:90%; border-radius: 10px;"></td>
                </tr>

                <tr>
                    <td><label for = "firstName">First Name:</label></td>
                    <td><input type = "text" id = "firstName" name="fname" placeholder="Enter your First Name" style="width:90%; border-radius:10px;"></td>
                </tr>

                <tr>
                    <td><label for = "lastName">Last Name:</label></td>
                    <td><input type = "text" id = "lastName" name="lname" placeholder="Enter your Last Name" style="width:90%; border-radius:10px;"></td>
                </tr>

                <tr>
                    <td><label for = "password">Create Password:</label></td>
                    <td><input type = "password" id = "password" name="pass" placeholder="Create Your Password" style="width:90%; border-radius:10px;"></td>
                </tr>

                <tr>
                    <td><label for ="email">Mail ID:</label></td>
                    <td><input type="email" id="email" name="email" placeholder="Enter your Mail Id" style="width:90%; border-radius:10px;"></td>
                </tr>

                <tr>
                    <td><label for="phone">Contact number:</label></td>
                    <td><input type="tel" id="phone" name="phone" placeholder="Enter your Contact Number"  style="width:90%; border-radius:10px;"></td>
                </tr>

                <tr>
                    <td><label>Gender:</label></td>
                    <td>            
                        Male  <input type = "radio" name = "gender" value = "male"> &nbsp
                        Female  <input type = "radio" name = "gender" value = "female"> &nbsp
                        Others  <input type = "radio" name = "gender" value = "transgender">
                    </td>
                </tr>

                <tr>
                    <td><label>Address:</label></td>
                    <td><textarea type="text" id="address" name="address" placeholder="Enter your Address" style="width:90%; border-radius:10px;"></textarea></td>
                </tr>

                

                <tr>
                    <td><label>Date Of Birth:</label></td>
                    <td><input type = "date" name = "birthday"></td>
                </tr>

                <!-- <tr>
                    <td><label>Upload Your Photograph:</label></td>
                    <td><input type = "file" name = "photograph"></td>
                </tr> -->
                <tr>
                    <td colspan="2" rowspan="1"><center><input type="submit" value="SUBMIT" style="background-color:black; color: white; border-radius:8px;"></center></td>
                </tr>

                </table>
        </form></center>

        </div>
        </div>

            
</body>
</html>