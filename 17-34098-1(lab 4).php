
<h1>submit option</h1>
First Name:<?php echo $_POST["fname"]; ?><br>
Last Name: <?php echo $_POST["lname"]; ?><br>
Company: <?php echo $_POST["company"]; ?><br>
Address 1 :<?php echo $_POST["add1"]; ?><br>
Address 2 :<?php echo $_POST["add2"]; ?><br>
City :<?php echo $_POST["ct"]; ?><br>
State: <?php echo $_POST["st"]; ?><br>
Zip Code: <?php echo $_POST["zip"]; ?><br>
Country:<?php echo $_POST["country"]; ?><br>
Fax: <?php echo $_POST["fx"]; ?><br>
Email: <?php echo $_POST["email"]; ?><br>
Donation Amount:<?php echo $_POST["donation"]; ?><br>
Recurring Donation: <?php echo $_POST["recur"]; ?><br>
Monthly Donation: <?php echo $_POST["mdona"]; ?><br>
I would like to make this donation : <?php echo $_POST["dontag"]; ?><br>
<?php echo $_POST["dname"]; ?><br>
Acknowledge donation to : <?php echo $_POST["dnameto"]; ?><br>
Addess: <?php echo $_POST["dadd"]; ?><br>
City: <?php echo $_POST["dcity"]; ?><br>
State:<?php echo $_POST["dstate"]; ?><br>
Zip Code: <?php echo $_POST["dzip"]; ?><br>
Name, company or organization Name : <?php echo $_POST["pname"]; ?><br>
Prefferce :<?php echo $_POST["pdes"]; ?> <br>
Comments: <?php echo $_POST["cmnt"]; ?><br>
Contact medium : <?php echo $_POST["pcont"]; ?> <br>
 <?php echo $_POST["iwould"]; ?>



<!DOCTYPE html>
<html>
<body>

    <h4>* - Denotes Required Information</h4>
    <p><b>> 1 Donation</b> &nbsp;&nbsp;>2 Confirmation &nbsp;&nbsp;>Thank You!</p>
<h2 style="color: red;">Donor Information</h2>
<form action="submit.php" method= post>
<table  align="center">
    <tr>
        <td><span> <b>First Name*</b> </span></td>
        <td><input type="text" name="fname" ></td>
    </tr>
    <tr>
        <td><span><b>Last Name*</b></span></td>
        <td><input type="text" name="lname"></td>
    </tr>
    <tr>
        <td><span><b>Company</b></span></td>
        <td><input type="text" name="company"></td>
    </tr>
    <tr>
        <td><span><b>Address 1*</b></span></td>
        <td><input type="text" name="add1"></td>
    </tr>
    <tr>
        <td><span><b>Address 2*</b></span></td>
        <td><input type="text" name="add2"></td>
    </tr>
    <tr>
        <td><span><b>City* </b></span></td>
        <td><input type="text" name="ct"></td>
    </tr>
    <tr>
        <td><span><b>State*</b></span></td>
        <td>
            <select name="st">
                <option value="Select a state">Select a state</option>
                <option value="Dhaka">Dhaka</option>
                <option value="Rangpur">Rangpur</option>
            </select>
        </td>
        <tr>
            <td><span><b>Zip Code*</b></span></td>
            <td><input type="text" name="zip"></td>
        </tr>
            <td><span><b>Country*</b></span></td>
             <td>
            
                <select name="country">
                    <option value="Select a Country">Select a Country</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="India">India</option>
                </select>
            </td>
        <tr>
            <td><span> <b>Fax</span></td></b> 
            <td><input type="text" name="fx"></td>
        </tr>
        <tr>
            <td><span><b>Email*</b></span></td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td><span><b>Donation Amount*</b></span></td>
            <td>
                <input type="radio" name="donation" value="None">None
                <input type="radio" name="donation" value="$50">$50
                <input type="radio"name="donation" value="$75">$75
                <input type="radio" name="donation" value="$100">$100
                <input type="radio" name="donation" value="$250">$250
                <input type="radio" name="donation" value="Other">Other
            </td>
            <tr>
                <td><span>(Check a button or type in your Amount)</span></td>
                <td><span><b>other amount $</b></span><input type="text" name="otheramount" value="other"></td>
            </tr>

        </tr>
        <tr>
            <td><span><b>Recurring&nbsp;Donation</b> <br>(check if yes)</span></td>
            
            <td><input type="checkbox" name="recur" value="I am interested in giving on a regular basis.">I am interested in giving on a regular basis.</td><br>
            
        </tr>

        <tr>
            <td><span></span></td>
            <td><span>Monthly Credit Card $ <input type="text" name="mdona"> for <input type="text">Months; </span></td>
        </tr>

</table>
    <h4 style="color: red;">Honorarium and Memorial Donation Information</h4>
    <table align="center">
        <tr>
            <td>
                <span><b>I would like to make this donation</b></span>
            
                <input type="radio" name="dontag" value="To Honor"> To Honor
                <input type="radio" name="dontag" value="In Memory Of"> In Memory of
            </td>
        </tr>
        <tr>
            <td>
                <span><b>Name</b></span>
            </td>
            <td><input type="text" name="dname"></td>
        </tr>
        <tr>
            <td><span><b>Acknowledge Donation to</b></span></td>
            <td><input type="text" name="dnameto"></td>
        </tr>
        <tr>
            <td><span><b>Address</b></span></td>
            <td><input type="text" name="dadd" ></td>
        </tr>
        <tr>
            <td><span><b>City</b></span></td>
            <td><input type="text" name="dcity"></td>
        </tr>
        <tr>
            <td><span><b>State</b></span></td>
            <td>
              <select name="dstate" id="">
                  <option value="Select a state">Select a state</option>
                  <option value="Dhaka">Dhaka</option>
                  <option value="Rangpur">Rangpur</option>
              </select>  
            </td>
        </tr>
        <tr>
            <td><b>Zip</b></td>
            <td><input type="text" name="dzip"></td>
        </tr>

    </table>
    <h4 style="color: red;">Additional Information</h4>
    <table align="center">
        
        <tr>
            <td>
                <span>Please enter your name, company or organization as you would like it to appear in our publlications:</span> <br>
            </td>
        </tr>
        <tr>
            <td><span><b>Name</b></span>
            <input type="text" name="pname"></td>
        </tr>

    </table>
    <span><input type="checkbox" name="pdes" value="I would like my gift to remain anonymous."> I would like my gift to remain anonymous.</span><br>
    <span><input type="checkbox" name="pdes" value="My employer offers a matching gift program.I will mail the matching gift form."> My employer offers a matching gift program.I will mail the matching gift form.</span><br>
    <span><input type="checkbox" name="pdes" value="Please save the cost of acknwoledgeing this gift by not mailing a thank you letter."> Please save the cost of acknwoledgeing this gift by not mailing a thank you letter.</span>


    <table align="center">
        <tr>
            <td style="text-align: right;"><span><b>Comments</b><br>
            (please type any questions or feedback here)</span></td>
            <td>
                <textarea cols="50" rows="5" name="cmnt"></textarea>
            </td>
        </tr>
        <tr>
            <td style="text-align: right;" >
                <span ><b>How may we contact you?</b></span></td>
                
                    <td>
                        <input type="checkbox" name="pcont" value="E-mail"> E-mail <br>
                    <input type="checkbox" name="pcont" value="Postal Mail"> Postal Mail <br>
                    <input type="checkbox" name="pcont" value="Telephone"> Telephone <br>
                    <input type="checkbox" name="pcont" value="Fax"> Fax
                    </td>
        </tr>
        <tr>
            <td>
                <span>I would like to receive newsletters and information about special events by:</span> 

            </td>
        </tr>
        <tr style="text-align: center;">
            <td>
                <input type="checkbox" value="E-mail"> E-mail <br>
                <input type="checkbox" value="Postal Mail"> Postal Mail 
            </td>

        </tr>
    </table>
        <tr style="text-align: left;">
            <td>
                <input type="checkbox" name="iwould" value="I would like information about volunteeraing with the "> I would like information about volunteeraing with the <br>

            </td>
        </tr>
     <table align="center">
         <tr>
             <td>
                
             <input type="submit" value="reset" >   
             <input type="submit" value="Continue" ><br>
             </td>
            </tr>
              
         </table>
     <span>you are on a secure server</span>
     </form>

</body>
</html> 

