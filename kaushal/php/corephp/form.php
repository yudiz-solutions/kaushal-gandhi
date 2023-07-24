<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <?php
    include "config.php";

    if (isset($_POST['submit'])) {
        $First_name = $_POST['First_name'];
        $Last_name = $_POST['Last_name'];
        $User_name = $_POST['User_name'];
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];
        $Gender = $_POST['Gender'];
        $Country = $_POST['Country'];
        $State = $_POST['State'];
        $City = $_POST['City'];
        $Bio = $_POST['Bio'];


        // $Profile = $_FILES['file']['Profile'];
        // $fileTempName = $_FILES['file']['tmp_name'];
        // $file_store = "userprofile/" . $ Profile;

        $ASM = $_POST['Active_social_media'];
        $soc = implode(',', $ASM);

        // $ASM = $_POST['Active_social_media'];
        // $Active_social_media = "";
        // foreach ($ASM as $temp) {
        //     $Active_social_media .= $temp;
        // }



        // $Isql = "INSERT INTO `form`(`First_name`, `Last_name`, `User_name`, `Email`, `Password`, `Gender`, `Country`, `State`, `City`, `Bio`, `Profile`, `Active_social_media`) VALUES ('$First_name','$Last_name','$User_name','$Email','$Password','$Gender','$Country','$State','$City','$Bio','$Profile','$soc')";
        $Isql = "INSERT INTO `form`(`First_name`, `Last_name`, `User_name`, `Email`, `Password`, `Gender`, `Country`, `State`, `City`, `Bio`, `Active_social_media`) VALUES ('$First_name','$Last_name','$User_name','$Email','$Password','$Gender','$Country','$State','$City','$Bio','$soc')";

        $result = mysqli_query($conn, $Isql);

        // if (move_uploaded_file($fileTempName, $file_store)) {
        //     header('location: form.php');
        // }

        if ($result) {
            echo "<script>
      alert('data inserted successfully')</script> ";
        } else {
            // die(mysqli_error($conn));
            echo "<script>
      alert('Something Wrong Went.')
  </script>";
        }
    }
    ?>
    <form action="#" method="post" enctype="multipart/form-data">
        <div>
            First-Name:-
            <input type="text" placeholder="Enter your Firstname" name="First_name" required>
        </div>
        <div>
            Last-name:-
            <input type="text" placeholder="Enter your Lastname" name="Last_name" required>

        </div>
        <div>
            User-name:-
            <input type="text" placeholder="Enter your Username" name="User_name" required>
        </div>
        <div>
            Email:-
            <input type="email" placeholder="Enter your Email" name="Email" required>
        </div>
        <div>
            Password:-
            <input type="password" placeholder="Enter your Password" name="Password" required>
        </div>
        <div>
            Gender:-
            Male:<input type="radio" name="Gender" value="Male">
            Female :<input type="radio" name="Gender" value="Female">
        </div>
        <div>
            <label for="">Country:-</label>
            <select name="Country" id="Country" required>
                <option value="">Select Country</option>
                <option value="Afghanistan">Afghanistan</option>
                <option value="Åland Islands">Åland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote D'ivoire">Cote D'ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernsey">Guernsey</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-bissau">Guinea-bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jersey">Jersey</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                <option value="Korea, Republic of">Korea, Republic of</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macao">Macao</option>
                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                <option value="Moldova, Republic of">Moldova, Republic of</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="Netherlands Antilles">Netherlands Antilles</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russian Federation">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Helena">Saint Helena</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                <option value="Taiwan">Taiwan</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                <option value="Thailand">Thailand</option>
                <option value="Timor-leste">Timor-leste</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Viet Nam">Viet Nam</option>
                <option value="Virgin Islands, British">Virgin Islands, British</option>
                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                <option value="Wallis and Futuna">Wallis and Futuna</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
            </select>
        </div>
        <div>
            <label for="">State:-</label>
            <select name="State" id="State" required>
                <option value="">Select State</option>

                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
                <option value="Chandigarh">Chandigarh</option>
                <option value="Chhattisgarh">Chhattisgarh</option>
                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                <option value="Daman and Diu">Daman and Diu</option>
                <option value="Delhi">Delhi</option>
                <option value="Lakshadweep">Lakshadweep</option>
                <option value="Puducherry">Puducherry</option>
                <option value="Goa">Goa</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                <option value="Jharkhand">Jharkhand</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Manipur">Manipur</option>
                <option value="Meghalaya">Meghalaya</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Nagaland">Nagaland</option>
                <option value="Odisha">Odisha</option>
                <option value="Punjab">Punjab</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Sikkim">Sikkim</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
                <option value="Telangana">Telangana</option>
                <option value="Tripura">Tripura</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="Uttarakhand">Uttarakhand</option>
                <option value="West Bengal">West Bengal</option>
            </select>
        </div>
        <div>
            <label for="">City:-</label>
            <select name="City" id="City" required>
                <option value="">Select City</option>
                <option value="Abrama">Abrama</option>
                <option value="Adalaj">Adalaj</option>
                <option value="Ahmedabad">Ahmedabad</option>
                <option value="Ahwa">Ahwa</option>
                <option value="Amod">Amod</option>
                <option value="Amreli">Amreli</option>
                <option value="Amroli">Amroli</option>
                <option value="Anand">Anand</option>
                <option value="Anjar">Anjar</option>
                <option value="Ankleshwar">Ankleshwar</option>
                <option value="Babra">Babra</option>
                <option value="Bagasara">Bagasara</option>
                <option value="Bagasra">Bagasra</option>
                <option value="Banas Kantha">Banas Kantha</option>
                <option value="Bantva">Bantva</option>
                <option value="Bardoli">Bardoli</option>
                <option value="Bedi">Bedi</option>
                <option value="Bhachau">Bhachau</option>
                <option value="Bhanvad">Bhanvad</option>
                <option value="Bharuch">Bharuch</option>
                <option value="Bhavnagar">Bhavnagar</option>
                <option value="Bhayavadar">Bhayavadar</option>
                <option value="Bhuj">Bhuj</option>
                <option value="Bilimora">Bilimora</option>
                <option value="Bilkha">Bilkha</option>
                <option value="Borsad">Borsad</option>
                <option value="Botad">Botad</option>
                <option value="Chaklasi">Chaklasi</option>
                <option value="Chalala">Chalala</option>
                <option value="Chanasma">Chanasma</option>
                <option value="Chhala">Chhala</option>
                <option value="Chhota Udepur">Chhota Udepur</option>
                <option value="Chikhli">Chikhli</option>
                <option value="Chotila">Chotila</option>
                <option value="Dabhoi">Dabhoi</option>
                <option value="Dahegam">Dahegam</option>
                <option value="Dahod">Dahod</option>
                <option value="Dakor">Dakor</option>
                <option value="Damnagar">Damnagar</option>
                <option value="Dangs (India)">Dangs (India)</option>
                <option value="Dayapar">Dayapar</option>
                <option value="Delvada">Delvada</option>
                <option value="Delwada">Delwada</option>
                <option value="Devbhumi Dwarka">Devbhumi Dwarka</option>
                <option value="Devgadh Bariya">Devgadh Bariya</option>
                <option value="Dhandhuka">Dhandhuka</option>
                <option value="Dhanera">Dhanera</option>
                <option value="Dharampur">Dharampur</option>
                <option value="Dhari">Dhari</option>
                <option value="Dhola">Dhola</option>
                <option value="Dholka">Dholka</option>
                <option value="Dhoraji">Dhoraji</option>
                <option value="Dhrangadhra">Dhrangadhra</option>
                <option value="Dhrol">Dhrol</option>
                <option value="Dhuwaran">Dhuwaran</option>
                <option value="Disa">Disa</option>
                <option value="Dohad">Dohad</option>
                <option value="Dungarpur">Dungarpur</option>
                <option value="Dwarka">Dwarka</option>
                <option value="Gadhada">Gadhada</option>
                <option value="Gandevi">Gandevi</option>
                <option value="Gandhidham">Gandhidham</option>
                <option value="Gandhinagar">Gandhinagar</option>
                <option value="Gariadhar">Gariadhar</option>
                <option value="Ghogha">Ghogha</option>
                <option value="Gir Somnath">Gir Somnath</option>
                <option value="Godhra">Godhra</option>
                <option value="Gondal">Gondal</option>
                <option value="Halol">Halol</option>
                <option value="Halvad">Halvad</option>
                <option value="Hansot">Hansot</option>
                <option value="Harij">Harij</option>
                <option value="Himatnagar">Himatnagar</option>
                <option value="Jalalpore">Jalalpore</option>
                <option value="Jalalpur">Jalalpur</option>
                <option value="Jambusar">Jambusar</option>
                <option value="Jamnagar">Jamnagar</option>
                <option value="Jasdan">Jasdan</option>
                <option value="Jetalsar">Jetalsar</option>
                <option value="Jetpur">Jetpur</option>
                <option value="Jhulasan">Jhulasan</option>
                <option value="Jodhpur">Jodhpur</option>
                <option value="Jodia">Jodia</option>
                <option value="Jodiya Bandar">Jodiya Bandar</option>
                <option value="Junagadh">Junagadh</option>
                <option value="Kachchh">Kachchh</option>
                <option value="Kadi">Kadi</option>
                <option value="Kadod">Kadod</option>
                <option value="Kalavad">Kalavad</option>
                <option value="Kalol">Kalol</option>
                <option value="Kandla">Kandla</option>
                <option value="Kanodar">Kanodar</option>
                <option value="Kapadvanj">Kapadvanj</option>
                <option value="Karamsad">Karamsad</option>
                <option value="Kathor">Kathor</option>
                <option value="Katpur">Katpur</option>
                <option value="Kavant">Kavant</option>
                <option value="Kawant">Kawant</option>
                <option value="Keshod">Keshod</option>
                <option value="Khambhalia">Khambhalia</option>
                <option value="Khambhat">Khambhat</option>
                <option value="Kheda">Kheda</option>
                <option value="Khedbrahma">Khedbrahma</option>
                <option value="Kheralu">Kheralu</option>
                <option value="Kodinar">Kodinar</option>
                <option value="Kosamba">Kosamba</option>
                <option value="Kundla">Kundla</option>
                <option value="Kutch district">Kutch district</option>
                <option value="Kutiyana">Kutiyana</option>
                <option value="Lakhtar">Lakhtar</option>
                <option value="Lalpur">Lalpur</option>
                <option value="Lathi">Lathi</option>
                <option value="Limbdi">Limbdi</option>
                <option value="Lunavada">Lunavada</option>
                <option value="Mahemdavad">Mahemdavad</option>
                <option value="Mahesana">Mahesana</option>
                <option value="Mahudha">Mahudha</option>
                <option value="Malpur">Malpur</option>
                <option value="Manavadar">Manavadar</option>
                <option value="Mandal">Mandal</option>
                <option value="Mandvi">Mandvi</option>
                <option value="Mandvi (Surat)">Mandvi (Surat)</option>
                <option value="Mangrol">Mangrol</option>
                <option value="Mansa">Mansa</option>
                <option value="Meghraj">Meghraj</option>
                <option value="Mehsana">Mehsana</option>
                <option value="Mendarda">Mendarda</option>
                <option value="Modasa">Modasa</option>
                <option value="Morbi">Morbi</option>
                <option value="Morva (Hadaf)">Morva (Hadaf)</option>
                <option value="Morwa">Morwa</option>
                <option value="Mundra">Mundra</option>
                <option value="Nadiad">Nadiad</option>
                <option value="Naliya">Naliya</option>
                <option value="Narmada">Narmada</option>
                <option value="Naroda">Naroda</option>
                <option value="Navsari">Navsari</option>
                <option value="Okha">Okha</option>
                <option value="Olpad">Olpad</option>
                <option value="Paddhari">Paddhari</option>
                <option value="Padra">Padra</option>
                <option value="Palanpur">Palanpur</option>
                <option value="Palitana">Palitana</option>
                <option value="Paliyad">Paliyad</option>
                <option value="Panch Mahals">Panch Mahals</option>
                <option value="Panchmahal district">Panchmahal district</option>
                <option value="Pardi">Pardi</option>
                <option value="Parnera">Parnera</option>
                <option value="Patan">Patan</option>
                <option value="Pavi Jetpur">Pavi Jetpur</option>
                <option value="Petlad">Petlad</option>
                <option value="Porbandar">Porbandar</option>
                <option value="Radhanpur">Radhanpur</option>
                <option value="Rajkot">Rajkot</option>
                <option value="Rajpipla">Rajpipla</option>
                <option value="Rajula">Rajula</option>
                <option value="Ranavav">Ranavav</option>
                <option value="Rapar">Rapar</option>
                <option value="Roha">Roha</option>
                <option value="Sabar Kantha">Sabar Kantha</option>
                <option value="Sachin">Sachin</option>
                <option value="Salaya">Salaya</option>
                <option value="Sanand">Sanand</option>
                <option value="Sankheda">Sankheda</option>
                <option value="Sarkhej">Sarkhej</option>
                <option value="Savarkundla">Savarkundla</option>
                <option value="Sayla">Sayla</option>
                <option value="Shahpur">Shahpur</option>
                <option value="Shivrajpur">Shivrajpur</option>
                <option value="Siddhpur">Siddhpur</option>
                <option value="Sihor">Sihor</option>
                <option value="Sikka">Sikka</option>
                <option value="Sinor">Sinor</option>
                <option value="Sojitra">Sojitra</option>
                <option value="Songadh">Songadh</option>
                <option value="Surat">Surat</option>
                <option value="Surendranagar">Surendranagar</option>
                <option value="Talaja">Talaja</option>
                <option value="Tankara">Tankara</option>
                <option value="Tapi">Tapi</option>
                <option value="Than">Than</option>
                <option value="Thangadh">Thangadh</option>
                <option value="Tharad">Tharad</option>
                <option value="Thasra">Thasra</option>
                <option value="The Dangs">The Dangs</option>
                <option value="Umrala">Umrala</option>
                <option value="Umreth">Umreth</option>
                <option value="Un">Un</option>
                <option value="Una">Una</option>
                <option value="Unjha">Unjha</option>
                <option value="Upleta">Upleta</option>
                <option value="Utran">Utran</option>
                <option value="Vadnagar">Vadnagar</option>
                <option value="Vadodara">Vadodara</option>
                <option value="Vaghodia">Vaghodia</option>
                <option value="Vallabh Vidyanagar">Vallabh Vidyanagar</option>
                <option value="Vallabhipur">Vallabhipur</option>
                <option value="Valsad">Valsad</option>
                <option value="Vansda">Vansda</option>
                <option value="Vapi">Vapi</option>
                <option value="Vartej">Vartej</option>
                <option value="Vasa">Vasa</option>
                <option value="Vaso">Vaso</option>
                <option value="Vejalpur">Vejalpur</option>
                <option value="Veraval">Veraval</option>
                <option value="Vijapur">Vijapur</option>
                <option value="Vinchhiya">Vinchhiya</option>
                <option value="Vinchia">Vinchia</option>
                <option value="Virpur">Virpur</option>
                <option value="Visavadar">Visavadar</option>
                <option value="Visnagar">Visnagar</option>
                <option value="Vyara">Vyara</option>
                <option value="Wadhai">Wadhai</option>
                <option value="Wadhwan">Wadhwan</option>
                <option value="Waghai">Waghai</option>
                <option value="Wankaner">Wankaner</option>

            </select>
        </div>
        <div>
            <label for="">Bio:-</label>
            <textarea name="Bio" id="" cols="30" rows="10" required></textarea>
        </div>
        <div>
            <label for="">Profile:-</label>
            <input type="file" name="Profile" required>
        </div>
        <div>
            <?php

            ?>
            <label for="">Active social media account:-</label>
            Instagram <input type="Checkbox" name="Active_social_media[]" value="Instagram">
            Twitter <input type="Checkbox" name="Active_social_media[]" value="Twitter">
            Facebook <input type="Checkbox" name="Active_social_media[]" value="Facebook">
            Whatsapp <input type="Checkbox" name="Active_social_media[]" value="Whatsapp">
            Linkedin <input type="Checkbox" name="Active_social_media[]" value="Linkedin">

        </div>
        <input type="submit" value="submit" name="submit">

        <button><a href="view.php">View </a></button>
    </form>


</body>

</html>