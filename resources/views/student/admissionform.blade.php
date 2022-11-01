<x-dashboard-layout>

  
 
   

<style>

.file-upload {
  background-color: #ffffff;
  width: 600px;
  margin: 0 auto;
  padding: 20px;
}

.file-upload-btn {
  margin-top: 20px;
  margin-bottom: 40px;
  width: 24%;
    color: #fff;
  background: #1FB264;
  border: none;
  padding: 10px 8px;
  border-radius: 4px;
  border-bottom: 4px solid #15824B;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
}

.file-upload-btn:hover {
  background: #1AA059;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
}

.file-upload-btn:active {
  border: 0;
  transition: all .2s ease;
}

.file-upload-content {
  display: none;
  text-align: center;
}

.file-upload-input {
  position: absolute;
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  outline: none;
  opacity: 0;
  cursor: pointer;
}

.image-upload-wrap {
  margin-top: 20px;
  border: 4px dashed #1FB264;
  position: relative;
}

.image-dropping,
.image-upload-wrap:hover {
  background-color: #1FB264;
  border: 4px dashed #ffffff;
}

.image-title-wrap {
  padding: 0 15px 15px 15px;
  color: #222;
}

.drag-text {
  text-align: center;
}

.drag-text h3 {
  font-weight: 100;
  font-size: 1.5rem;
  text-transform: uppercase;
  color: #15824B;
  padding: 10px 0;
}

.file-upload-image {
  max-height: 200px;
  max-width: 200px;
  margin: auto;
  padding: 20px;
}

.remove-image {
  width: 200px;
  margin: 0;
  color: #fff;
  background: #cd4535;
  border: none;
  padding: 10px;
  border-radius: 4px;
  border-bottom: 4px solid #b02818;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
}

.remove-image:hover {
  background: #c13b2a;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
}

.remove-image:active {
  border: 0;
  transition: all .2s ease;
}









 .custom-file {
  position: relative;
  font-family: helvetica;
  overflow: hidden;
  margin-bottom: 30px;
  margin-top: 30px;
  width: auto;
  display: block;
  padding: 10px;  
}

.custom-file-input{
  width: 100%;
  height: 100%;
  cursor: pointer;
  color: #fff;
  background: #1FB264;
  border: none;
  padding: 10px;
  border-radius: 4px;
  border-bottom: 4px solid #15824B;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
}

.custom-file img{
  vertical-align: middle;
  margin-right: 10px;
}

ul.file-list{
  font-family: helvetica;
  list-style: none;
  padding: 0;
}

ul.file-list li{
  padding: 10px;
  background-color: #1df883;
  font-size: 1rem;
  position: relative;
  margin: 10px; 
}

.remove-list{
  cursor: pointer;
  margin-left: 10px;
  position: absolute;
  right: 20px;

}
    </style>

        <div class="page-wrapper">
            <div class="content container-fluid">


                <!-- progressbar -->
                <div class="stepper-wrapper">
                    
                    <div class="stepper-item active">
                      <div class="step1">1</div>
                      <div class="step-name">First</div>
                    </div>

                    <div class="stepper-item ">
                      <div class="step">2</div>
                      <div class="step-name">Second</div>
                    </div>
                    <div class="stepper-item ">
                      <div class="step">3</div>
                      <div class="step-name">Third</div>
                    </div>
                    <div class="stepper-item">
                      <div class="step">4</div>
                      <div class="step-name">Forth</div>
                    </div>
                    <div class="stepper-item">
                        <div class="step">5</div>
                        <div class="step-name">Fifth</div>
                      </div>
                      <div class="stepper-item">
                        <div class="step">6</div>
                        <div class="step-name">Sixth</div>
                      </div>
                </div>


                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Application For Admission <small class="fs-5" style="font-size:15px">(Higher Education Courses)</small></h3>
                            <small class="fs-5" style="font-size:15px">(Please read the collage prospectus and consult the website before completing this form)</small>

                           
                        </div>
                    </div>
                </div>
                
                

<div style  ="margin-top: 20px; margin-bottom: 20px; padding: 10px; background-color: rgb(207, 204, 204)">
<h2 style = "font-size: 1.5rem"> {{$courses->coursename}} </h2>
</div>




<form  action = "{{route('student.storeform')   }}" method = 'post'>
    
    @csrf
    <!-- //**admission form**// -->
    

    <!-- FORM START -->
    
                <!-- page 1st start -->
                
                
                <div class = "tab">
                    
                    
                    <div class="row">
                        <div class="col-sm-12">
                            
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-2 font-weight-bold">Personal Details</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm">
                                            











{{-- This code break the logic of junkfill --}}
                                            {{-- <input type="file" class="form-control require" id="validationCustom01" style="width: 0px; height: 0px; padding: 0px" disabled/> --}}
    
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            <input type="text" value = "{{$courses->id}}" name = "courseid" class="form-control require" id="validationCustom01"/>
    
                                            <div class="form-row">
        
        <div class="col-md-6 mb-3">
            <label for="validationCustom01">Family name as appears in passport:</label>
            <input type="text" name = "firstname" class="form-control require" id="validationCustom01"
            placeholder=""  required>
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback">
                    This field is required.
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <label for="validationCustom02">First name as appears in passport:</label>
            <input type="text" name = "lastname" class="form-control require" id="validationCustom02"
                placeholder="" value="" required>
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback">
                This field is required.
        </div>
        </div>
        
    </div>
    
    <div class="form-row">
        <div class="form-group col-lg-3">
            <label class="col-lg- col-form-label">Select title(Mr/Mrs/Miss/Ms/etc) </label>
            <div class="col-lg-  ">
                <select class="form-control require" name = "title" >
                    <option value = "">- Select -</option>
                    <option value = "Mr">Mr</option>
                    <option value = "Mrs">Mrs</option>
                    <option value = "Miss">Miss</option>
                    <option value = "Ms">Ms</option>
                    
                </select>
            </div>
        </div> 

        <div class="form-group col-lg-4 px-4">
            <label class="col-lg- col-form-label">Previous family name(if aplicable): </label>
            <div class="col-lg-">
                <input type="text" name = "pfname" class="form-control">
            </div>
        </div> 


        <div class="form-group col-lg-3 ">
            <label class=" col-form-label">Date of Birth: </label>
            <div class="">
                <input type="date" name = "dob"  class="form-control require" required>
            </div>
            <div class="invalid-feedback">
                This field is required.
            </div>
            <div class="valid-feedback">
                Looks good.
            </div>
        </div>
        
        <div class="form-group col-lg-2" style = "width: 100px">
            <label class="col-lg- col-form-label">Gender </label>
            <div class="col-lg-  ">
                <select class="form-control require" name = "gender">
                    <option value = "">- Select -</option>
                    <option value = "Male">Male</option>
                    <option value = "Female">Female</option>
                    <option value = "Others">Others</option>
                </select>
            </div>
        </div> 
        
        
    </div>

    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="validationCustom03">Home/parmanent address</label>
            <input type="text" name = "paddress" class="form-control require" id="validationCustom03"
                placeholder="" required>
            <div class="invalid-feedback">
                Please provide a valid city.
            </div>
            <div class="invalid-feedback">
                This field is required.
            </div>
            <div class="valid-feedback">
                Looks good.
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationCustom04">City</label>
            <input type="text" name = "city" class="form-control require" id="validationCustom04"
                placeholder="" required>
                <div class="invalid-feedback">
                    This field is required.
                </div>
                <div class="valid-feedback">
                    Looks good.
                </div>

        </div>
        <div class="col-md-3 mb-3">
            <label for="validationCustom05">Postal Code</label>
            <input type="text" name = "postalcode" class="form-control require" id="validationCustom05"
                placeholder="" required>
                <div class="invalid-feedback">
                    This field is required.
                </div>
                <div class="valid-feedback">
                    Looks good.
                </div>
        </div>
    </div>
    
    <div class="form-row">
        <div class="col-md-3 mb-3">
            <label for="validationCustom03">Home Tel no:</label>
            <input type="text" name = "telno" class="form-control " id="validationCustom03"
                placeholder="">
        </div>


        <div class="col-md-3 mb-3">
            <label for="validationCustom04">Mobile:</label>
            <input type="text" name = "mobile" class="form-control require" id="validationCustom04"
                placeholder="" required>
                <div class="invalid-feedback">
                    This field is required.
                </div>
                <div class="valid-feedback">
                    Looks good.
                </div>
        </div>
        
        
        <div class="col-md-6 mb-3">
            <label for="validationCustom05">Email:</label>
            <input type="text" name = "email" class="form-control " id="validationCustom05"
                placeholder="" value = "test@gmail.com"  disabled >
                       </div>
    </div>



    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="validationCustom03">Country of Birth:</label>
            <div class="col-lg-  ">
                <select class="form-control require" name = "cob" type="country" >
                    <option value = "">- Select -</option>
                    <option>select country</option>
                    <option value="AF">Afghanistan</option>
                    <option value="AX">Aland Islands</option>
                    <option value="AL">Albania</option>
                    <option value="DZ">Algeria</option>
                    <option value="AS">American Samoa</option>
                    <option value="AD">Andorra</option>
                    <option value="AO">Angola</option>
                    <option value="AI">Anguilla</option>
                    <option value="AQ">Antarctica</option>
                    <option value="AG">Antigua and Barbuda</option>
                    <option value="AR">Argentina</option>
                    <option value="AM">Armenia</option>
                    <option value="AW">Aruba</option>
                    <option value="AU">Australia</option>
                    <option value="AT">Austria</option>
                    <option value="AZ">Azerbaijan</option>
                    <option value="BS">Bahamas</option>
                    <option value="BH">Bahrain</option>
                    <option value="BD">Bangladesh</option>
                    <option value="BB">Barbados</option>
                    <option value="BY">Belarus</option>
                    <option value="BE">Belgium</option>
                    <option value="BZ">Belize</option>
                    <option value="BJ">Benin</option>
                    <option value="BM">Bermuda</option>
                    <option value="BT">Bhutan</option>
                    <option value="BO">Bolivia</option>
                    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                    <option value="BA">Bosnia and Herzegovina</option>
                    <option value="BW">Botswana</option>
                    <option value="BV">Bouvet Island</option>
                    <option value="BR">Brazil</option>
                    <option value="IO">British Indian Ocean Territory</option>
                    <option value="BN">Brunei Darussalam</option>
                    <option value="BG">Bulgaria</option>
                    <option value="BF">Burkina Faso</option>
                    <option value="BI">Burundi</option>
                    <option value="KH">Cambodia</option>
                    <option value="CM">Cameroon</option>
                    <option value="CA">Canada</option>
                    <option value="CV">Cape Verde</option>
                    <option value="KY">Cayman Islands</option>
                    <option value="CF">Central African Republic</option>
                    <option value="TD">Chad</option>
                    <option value="CL">Chile</option>
                    <option value="CN">China</option>
                    <option value="CX">Christmas Island</option>
                    <option value="CC">Cocos (Keeling) Islands</option>
                    <option value="CO">Colombia</option>
                    <option value="KM">Comoros</option>
                    <option value="CG">Congo</option>
                    <option value="CD">Congo, Democratic Republic of the Congo</option>
                    <option value="CK">Cook Islands</option>
                    <option value="CR">Costa Rica</option>
                    <option value="CI">Cote D'Ivoire</option>
                    <option value="HR">Croatia</option>
                    <option value="CU">Cuba</option>
                    <option value="CW">Curacao</option>
                    <option value="CY">Cyprus</option>
                    <option value="CZ">Czech Republic</option>
                    <option value="DK">Denmark</option>
                    <option value="DJ">Djibouti</option>
                    <option value="DM">Dominica</option>
                    <option value="DO">Dominican Republic</option>
                    <option value="EC">Ecuador</option>
                    <option value="EG">Egypt</option>
                    <option value="SV">El Salvador</option>
                    <option value="GQ">Equatorial Guinea</option>
                    <option value="ER">Eritrea</option>
                    <option value="EE">Estonia</option>
                    <option value="ET">Ethiopia</option>
                    <option value="FK">Falkland Islands (Malvinas)</option>
                    <option value="FO">Faroe Islands</option>
                    <option value="FJ">Fiji</option>
                    <option value="FI">Finland</option>
                    <option value="FR">France</option>
                    <option value="GF">French Guiana</option>
                    <option value="PF">French Polynesia</option>
                    <option value="TF">French Southern Territories</option>
                    <option value="GA">Gabon</option>
                    <option value="GM">Gambia</option>
                    <option value="GE">Georgia</option>
                    <option value="DE">Germany</option>
                    <option value="GH">Ghana</option>
                    <option value="GI">Gibraltar</option>
                    <option value="GR">Greece</option>
                    <option value="GL">Greenland</option>
                    <option value="GD">Grenada</option>
                    <option value="GP">Guadeloupe</option>
                    <option value="GU">Guam</option>
                    <option value="GT">Guatemala</option>
                    <option value="GG">Guernsey</option>
                    <option value="GN">Guinea</option>
                    <option value="GW">Guinea-Bissau</option>
                    <option value="GY">Guyana</option>
                    <option value="HT">Haiti</option>
                    <option value="HM">Heard Island and Mcdonald Islands</option>
                    <option value="VA">Holy See (Vatican City State)</option>
                    <option value="HN">Honduras</option>
                    <option value="HK">Hong Kong</option>
                    <option value="HU">Hungary</option>
                    <option value="IS">Iceland</option>
                    <option value="IN">India</option>
                    <option value="ID">Indonesia</option>
                    <option value="IR">Iran, Islamic Republic of</option>
                    <option value="IQ">Iraq</option>
                    <option value="IE">Ireland</option>
                    <option value="IM">Isle of Man</option>
                    <option value="IL">Israel</option>
                    <option value="IT">Italy</option>
                    <option value="JM">Jamaica</option>
                    <option value="JP">Japan</option>
                    <option value="JE">Jersey</option>
                    <option value="JO">Jordan</option>
                    <option value="KZ">Kazakhstan</option>
                    <option value="KE">Kenya</option>
                    <option value="KI">Kiribati</option>
                    <option value="KP">Korea, Democratic People's Republic of</option>
                    <option value="KR">Korea, Republic of</option>
                    <option value="XK">Kosovo</option>
                    <option value="KW">Kuwait</option>
                    <option value="KG">Kyrgyzstan</option>
                    <option value="LA">Lao People's Democratic Republic</option>
                    <option value="LV">Latvia</option>
                    <option value="LB">Lebanon</option>
                    <option value="LS">Lesotho</option>
                    <option value="LR">Liberia</option>
                    <option value="LY">Libyan Arab Jamahiriya</option>
                    <option value="LI">Liechtenstein</option>
                    <option value="LT">Lithuania</option>
                    <option value="LU">Luxembourg</option>
                    <option value="MO">Macao</option>
                    <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
                    <option value="MG">Madagascar</option>
                    <option value="MW">Malawi</option>
                    <option value="MY">Malaysia</option>
                    <option value="MV">Maldives</option>
                    <option value="ML">Mali</option>
                    <option value="MT">Malta</option>
                    <option value="MH">Marshall Islands</option>
                    <option value="MQ">Martinique</option>
                    <option value="MR">Mauritania</option>
                    <option value="MU">Mauritius</option>
                    <option value="YT">Mayotte</option>
                    <option value="MX">Mexico</option>
                    <option value="FM">Micronesia, Federated States of</option>
                    <option value="MD">Moldova, Republic of</option>
                    <option value="MC">Monaco</option>
                    <option value="MN">Mongolia</option>
                    <option value="ME">Montenegro</option>
                    <option value="MS">Montserrat</option>
                    <option value="MA">Morocco</option>
                    <option value="MZ">Mozambique</option>
                    <option value="MM">Myanmar</option>
                    <option value="NA">Namibia</option>
                    <option value="NR">Nauru</option>
                    <option value="NP">Nepal</option>
                    <option value="NL">Netherlands</option>
                    <option value="AN">Netherlands Antilles</option>
                    <option value="NC">New Caledonia</option>
                    <option value="NZ">New Zealand</option>
                    <option value="NI">Nicaragua</option>
                    <option value="NE">Niger</option>
                    <option value="NG">Nigeria</option>
                    <option value="NU">Niue</option>
                    <option value="NF">Norfolk Island</option>
                    <option value="MP">Northern Mariana Islands</option>
                    <option value="NO">Norway</option>
                    <option value="OM">Oman</option>
                    <option value="PK">Pakistan</option>
                    <option value="PW">Palau</option>
                    <option value="PS">Palestinian Territory, Occupied</option>
                    <option value="PA">Panama</option>
                    <option value="PG">Papua New Guinea</option>
                    <option value="PY">Paraguay</option>
                    <option value="PE">Peru</option>
                    <option value="PH">Philippines</option>
                    <option value="PN">Pitcairn</option>
                    <option value="PL">Poland</option>
                    <option value="PT">Portugal</option>
                    <option value="PR">Puerto Rico</option>
                    <option value="QA">Qatar</option>
                    <option value="RE">Reunion</option>
                    <option value="RO">Romania</option>
                    <option value="RU">Russian Federation</option>
                    <option value="RW">Rwanda</option>
                    <option value="BL">Saint Barthelemy</option>
                    <option value="SH">Saint Helena</option>
                    <option value="KN">Saint Kitts and Nevis</option>
                    <option value="LC">Saint Lucia</option>
                    <option value="MF">Saint Martin</option>
                    <option value="PM">Saint Pierre and Miquelon</option>
                    <option value="VC">Saint Vincent and the Grenadines</option>
                    <option value="WS">Samoa</option>
                    <option value="SM">San Marino</option>
                    <option value="ST">Sao Tome and Principe</option>
                    <option value="SA">Saudi Arabia</option>
                    <option value="SN">Senegal</option>
                    <option value="RS">Serbia</option>
                    <option value="CS">Serbia and Montenegro</option>
                    <option value="SC">Seychelles</option>
                    <option value="SL">Sierra Leone</option>
                    <option value="SG">Singapore</option>
                    <option value="SX">Sint Maarten</option>
                    <option value="SK">Slovakia</option>
                    <option value="SI">Slovenia</option>
                    <option value="SB">Solomon Islands</option>
                    <option value="SO">Somalia</option>
                    <option value="ZA">South Africa</option>
                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                    <option value="SS">South Sudan</option>
                    <option value="ES">Spain</option>
                    <option value="LK">Sri Lanka</option>
                    <option value="SD">Sudan</option>
                    <option value="SR">Suriname</option>
                    <option value="SJ">Svalbard and Jan Mayen</option>
                    <option value="SZ">Swaziland</option>
                    <option value="SE">Sweden</option>
                    <option value="CH">Switzerland</option>
                    <option value="SY">Syrian Arab Republic</option>
                    <option value="TW">Taiwan, Province of China</option>
                    <option value="TJ">Tajikistan</option>
                    <option value="TZ">Tanzania, United Republic of</option>
                    <option value="TH">Thailand</option>
                    <option value="TL">Timor-Leste</option>
                    <option value="TG">Togo</option>
                    <option value="TK">Tokelau</option>
                    <option value="TO">Tonga</option>
                    <option value="TT">Trinidad and Tobago</option>
                    <option value="TN">Tunisia</option>
                    <option value="TR">Turkey</option>
                    <option value="TM">Turkmenistan</option>
                    <option value="TC">Turks and Caicos Islands</option>
                    <option value="TV">Tuvalu</option>
                    <option value="UG">Uganda</option>
                    <option value="UA">Ukraine</option>
                    <option value="AE">United Arab Emirates</option>
                    <option value="GB">United Kingdom</option>
                    <option value="US">United States</option>
                    <option value="UM">United States Minor Outlying Islands</option>
                    <option value="UY">Uruguay</option>
                    <option value="UZ">Uzbekistan</option>
                    <option value="VU">Vanuatu</option>
                    <option value="VE">Venezuela</option>
                    <option value="VN">Viet Nam</option>
                    <option value="VG">Virgin Islands, British</option>
                    <option value="VI">Virgin Islands, U.s.</option>
                    <option value="WF">Wallis and Futuna</option>
                    <option value="EH">Western Sahara</option>
                    <option value="YE">Yemen</option>
                    <option value="ZM">Zambia</option>
                    <option value="ZW">Zimbabwe</option>
                </select>
            </div>
            <div class="invalid-feedback">
                Please provide a valid city.
            </div>
        </div>


        <div class="col-md-4 mb-3">
            <label for="validationCustom04">Nationality:</label>
            <div class="col-lg-  ">
                <select class="form-control require" name = "nationality" type="country" >
                    <option value="">-Select-</option>
    <option value="AF">Afghanistan</option>
    <option value="AX">Aland Islands</option>
    <option value="AL">Albania</option>
    <option value="DZ">Algeria</option>
    <option value="AS">American Samoa</option>
    <option value="AD">Andorra</option>
    <option value="AO">Angola</option>
    <option value="AI">Anguilla</option>
    <option value="AQ">Antarctica</option>
    <option value="AG">Antigua and Barbuda</option>
    <option value="AR">Argentina</option>
    <option value="AM">Armenia</option>
    <option value="AW">Aruba</option>
    <option value="AU">Australia</option>
    <option value="AT">Austria</option>
    <option value="AZ">Azerbaijan</option>
    <option value="BS">Bahamas</option>
    <option value="BH">Bahrain</option>
    <option value="BD">Bangladesh</option>
    <option value="BB">Barbados</option>
    <option value="BY">Belarus</option>
    <option value="BE">Belgium</option>
    <option value="BZ">Belize</option>
    <option value="BJ">Benin</option>
    <option value="BM">Bermuda</option>
    <option value="BT">Bhutan</option>
    <option value="BO">Bolivia</option>
    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
    <option value="BA">Bosnia and Herzegovina</option>
    <option value="BW">Botswana</option>
    <option value="BV">Bouvet Island</option>
    <option value="BR">Brazil</option>
    <option value="IO">British Indian Ocean Territory</option>
    <option value="BN">Brunei Darussalam</option>
    <option value="BG">Bulgaria</option>
    <option value="BF">Burkina Faso</option>
    <option value="BI">Burundi</option>
    <option value="KH">Cambodia</option>
    <option value="CM">Cameroon</option>
    <option value="CA">Canada</option>
    <option value="CV">Cape Verde</option>
    <option value="KY">Cayman Islands</option>
    <option value="CF">Central African Republic</option>
    <option value="TD">Chad</option>
    <option value="CL">Chile</option>
    <option value="CN">China</option>
    <option value="CX">Christmas Island</option>
    <option value="CC">Cocos (Keeling) Islands</option>
    <option value="CO">Colombia</option>
    <option value="KM">Comoros</option>
    <option value="CG">Congo</option>
    <option value="CD">Congo, Democratic Republic of the Congo</option>
    <option value="CK">Cook Islands</option>
    <option value="CR">Costa Rica</option>
    <option value="CI">Cote D'Ivoire</option>
    <option value="HR">Croatia</option>
    <option value="CU">Cuba</option>
    <option value="CW">Curacao</option>
    <option value="CY">Cyprus</option>
    <option value="CZ">Czech Republic</option>
    <option value="DK">Denmark</option>
    <option value="DJ">Djibouti</option>
    <option value="DM">Dominica</option>
    <option value="DO">Dominican Republic</option>
    <option value="EC">Ecuador</option>
    <option value="EG">Egypt</option>
    <option value="SV">El Salvador</option>
    <option value="GQ">Equatorial Guinea</option>
    <option value="ER">Eritrea</option>
    <option value="EE">Estonia</option>
    <option value="ET">Ethiopia</option>
    <option value="FK">Falkland Islands (Malvinas)</option>
    <option value="FO">Faroe Islands</option>
    <option value="FJ">Fiji</option>
    <option value="FI">Finland</option>
    <option value="FR">France</option>
    <option value="GF">French Guiana</option>
    <option value="PF">French Polynesia</option>
    <option value="TF">French Southern Territories</option>
    <option value="GA">Gabon</option>
    <option value="GM">Gambia</option>
    <option value="GE">Georgia</option>
    <option value="DE">Germany</option>
    <option value="GH">Ghana</option>
    <option value="GI">Gibraltar</option>
    <option value="GR">Greece</option>
    <option value="GL">Greenland</option>
    <option value="GD">Grenada</option>
    <option value="GP">Guadeloupe</option>
    <option value="GU">Guam</option>
    <option value="GT">Guatemala</option>
    <option value="GG">Guernsey</option>
    <option value="GN">Guinea</option>
    <option value="GW">Guinea-Bissau</option>
    <option value="GY">Guyana</option>
    <option value="HT">Haiti</option>
    <option value="HM">Heard Island and Mcdonald Islands</option>
    <option value="VA">Holy See (Vatican City State)</option>
    <option value="HN">Honduras</option>
    <option value="HK">Hong Kong</option>
    <option value="HU">Hungary</option>
    <option value="IS">Iceland</option>
    <option value="IN">India</option>
    <option value="ID">Indonesia</option>
    <option value="IR">Iran, Islamic Republic of</option>
    <option value="IQ">Iraq</option>
    <option value="IE">Ireland</option>
    <option value="IM">Isle of Man</option>
    <option value="IL">Israel</option>
    <option value="IT">Italy</option>
    <option value="JM">Jamaica</option>
    <option value="JP">Japan</option>
    <option value="JE">Jersey</option>
    <option value="JO">Jordan</option>
    <option value="KZ">Kazakhstan</option>
    <option value="KE">Kenya</option>
    <option value="KI">Kiribati</option>
    <option value="KP">Korea, Democratic People's Republic of</option>
    <option value="KR">Korea, Republic of</option>
    <option value="XK">Kosovo</option>
    <option value="KW">Kuwait</option>
    <option value="KG">Kyrgyzstan</option>
    <option value="LA">Lao People's Democratic Republic</option>
    <option value="LV">Latvia</option>
    <option value="LB">Lebanon</option>
    <option value="LS">Lesotho</option>
    <option value="LR">Liberia</option>
    <option value="LY">Libyan Arab Jamahiriya</option>
    <option value="LI">Liechtenstein</option>
    <option value="LT">Lithuania</option>
    <option value="LU">Luxembourg</option>
    <option value="MO">Macao</option>
    <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
    <option value="MG">Madagascar</option>
    <option value="MW">Malawi</option>
    <option value="MY">Malaysia</option>
    <option value="MV">Maldives</option>
    <option value="ML">Mali</option>
    <option value="MT">Malta</option>
    <option value="MH">Marshall Islands</option>
    <option value="MQ">Martinique</option>
    <option value="MR">Mauritania</option>
    <option value="MU">Mauritius</option>
    <option value="YT">Mayotte</option>
    <option value="MX">Mexico</option>
    <option value="FM">Micronesia, Federated States of</option>
    <option value="MD">Moldova, Republic of</option>
    <option value="MC">Monaco</option>
    <option value="MN">Mongolia</option>
    <option value="ME">Montenegro</option>
    <option value="MS">Montserrat</option>
    <option value="MA">Morocco</option>
    <option value="MZ">Mozambique</option>
    <option value="MM">Myanmar</option>
    <option value="NA">Namibia</option>
    <option value="NR">Nauru</option>
    <option value="NP">Nepal</option>
    <option value="NL">Netherlands</option>
    <option value="AN">Netherlands Antilles</option>
    <option value="NC">New Caledonia</option>
    <option value="NZ">New Zealand</option>
    <option value="NI">Nicaragua</option>
    <option value="NE">Niger</option>
    <option value="NG">Nigeria</option>
    <option value="NU">Niue</option>
    <option value="NF">Norfolk Island</option>
    <option value="MP">Northern Mariana Islands</option>
    <option value="NO">Norway</option>
    <option value="OM">Oman</option>
    <option value="PK">Pakistan</option>
    <option value="PW">Palau</option>
    <option value="PS">Palestinian Territory, Occupied</option>
    <option value="PA">Panama</option>
    <option value="PG">Papua New Guinea</option>
    <option value="PY">Paraguay</option>
    <option value="PE">Peru</option>
    <option value="PH">Philippines</option>
    <option value="PN">Pitcairn</option>
    <option value="PL">Poland</option>
    <option value="PT">Portugal</option>
    <option value="PR">Puerto Rico</option>
    <option value="QA">Qatar</option>
    <option value="RE">Reunion</option>
    <option value="RO">Romania</option>
    <option value="RU">Russian Federation</option>
    <option value="RW">Rwanda</option>
    <option value="BL">Saint Barthelemy</option>
    <option value="SH">Saint Helena</option>
    <option value="KN">Saint Kitts and Nevis</option>
    <option value="LC">Saint Lucia</option>
    <option value="MF">Saint Martin</option>
    <option value="PM">Saint Pierre and Miquelon</option>
    <option value="VC">Saint Vincent and the Grenadines</option>
    <option value="WS">Samoa</option>
    <option value="SM">San Marino</option>
    <option value="ST">Sao Tome and Principe</option>
    <option value="SA">Saudi Arabia</option>
    <option value="SN">Senegal</option>
    <option value="RS">Serbia</option>
    <option value="CS">Serbia and Montenegro</option>
    <option value="SC">Seychelles</option>
    <option value="SL">Sierra Leone</option>
    <option value="SG">Singapore</option>
    <option value="SX">Sint Maarten</option>
    <option value="SK">Slovakia</option>
    <option value="SI">Slovenia</option>
    <option value="SB">Solomon Islands</option>
    <option value="SO">Somalia</option>
    <option value="ZA">South Africa</option>
    <option value="GS">South Georgia and the South Sandwich Islands</option>
    <option value="SS">South Sudan</option>
    <option value="ES">Spain</option>
    <option value="LK">Sri Lanka</option>
    <option value="SD">Sudan</option>
    <option value="SR">Suriname</option>
    <option value="SJ">Svalbard and Jan Mayen</option>
    <option value="SZ">Swaziland</option>
    <option value="SE">Sweden</option>
    <option value="CH">Switzerland</option>
    <option value="SY">Syrian Arab Republic</option>
    <option value="TW">Taiwan, Province of China</option>
    <option value="TJ">Tajikistan</option>
    <option value="TZ">Tanzania, United Republic of</option>
    <option value="TH">Thailand</option>
    <option value="TL">Timor-Leste</option>
    <option value="TG">Togo</option>
    <option value="TK">Tokelau</option>
    <option value="TO">Tonga</option>
    <option value="TT">Trinidad and Tobago</option>
    <option value="TN">Tunisia</option>
    <option value="TR">Turkey</option>
    <option value="TM">Turkmenistan</option>
    <option value="TC">Turks and Caicos Islands</option>
    <option value="TV">Tuvalu</option>
    <option value="UG">Uganda</option>
    <option value="UA">Ukraine</option>
    <option value="AE">United Arab Emirates</option>
    <option value="GB">United Kingdom</option>
    <option value="US">United States</option>
    <option value="UM">United States Minor Outlying Islands</option>
    <option value="UY">Uruguay</option>
    <option value="UZ">Uzbekistan</option>
    <option value="VU">Vanuatu</option>
    <option value="VE">Venezuela</option>
    <option value="VN">Viet Nam</option>
    <option value="VG">Virgin Islands, British</option>
    <option value="VI">Virgin Islands, U.s.</option>
    <option value="WF">Wallis and Futuna</option>
    <option value="EH">Western Sahara</option>
    <option value="YE">Yemen</option>
    <option value="ZM">Zambia</option>
    <option value="ZW">Zimbabwe</option>
                </select>
            </div>
            <div class="invalid-feedback">
                Please provide a valid state.
            </div>
        </div>


        <div class="col-md-4 mb-3">
            <label for="validationCustom05">Entry date to Uk:</label>
            <input type="date" name = "edtouk" class="form-control" id="validationCustom05"
                placeholder="" >
        
        </div>
    </div>
    


















     







    
    {{-- <div class="form-row">
        <div class="file-upload">
            <div class="image-upload-wrap">
              <div class="drag-text">
              <img src="/assets/img/uploadimg.png" alt="uploadimage" style = "margin-top: 40px; width: 160px; height: 100px">
                <h3>select File OR Multiple Files</h3>
                <input
              name = "filename" 
              type="file" 
              class="file-upload-btn" 
              id="file" 
              multiple 
              onchange="javascript:uploadaddRows()" 
              border=""
            />
              </div>
    




              <table id="emptbl4">
                <tr> 
                    <td id="col0"><div class="col-auto" style = "padding: 1px">
                        <input type="text" name="uploadfile[]" value="" class="form-control atName" id="fileupload" placeholder="" style = "width: 100%">
                      </div> </td>

                      <div class="col-auto" style = "padding: 1px">
                        <input type="text" name="uploadinput" value="0" id = "uploadnoinput" class="form-control" id="" placeholder="Phone #">
                      </div> 
    
                      <td id="col1"><button  type="button" onclick="uploaddeleteRows(this)" class="btn btn-danger "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                      </svg></button></td> 
    
    
        </tr>
        </table> --}}
    
















        
    

</div>
</div>
</div>
</div>
</div>
</div>

    </div>












   











                                            <!-- page 1st end -->



                                            <!-- page 2nd start -->
<div class = "tab">
   

    <div class="row">
        <div class="col-sm-12">

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-2 font-weight-bold">Course:<small class="fs-5" style="font-size:15px">(Please indicate the code you wish to apply)</small></h3></h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm">

    <div class="form-row">
        {{-- <div class="form-group col-lg-4">
            <label class="col-lg- col-form-label">Foundation Courses:</label>
            <div class="col-lg-  ">
                <select name = "fcourse" class="form-control require" >
                    <option value=""> Select course </option>
                    <option value="1">business</option>
                    <option value="2">law</option>
                </select>
            </div>
        </div>  --}}

        <div class="col-md-4 mb-3">
            <label for="validationCustom05">Course Level</label>
            <input type="text" name = "fcourse" value="{{$courses->courselevel}}" class="form-control" placeholder="" >
        </div>

        <div class="col-md-4 mb-3">
            <label for="validationCustom05">Undergraduate Course</label>
            <input type="text" name = "ucourse" value="{{$courses->coursename}}" class="form-control" placeholder="" >
        </div>




        {{-- <div class="form-group col-lg-4">
            <label class="col-lg- col-form-label">Undergraduate Courses:</label>
            <div class="col-lg-  ">
                <select name = "ucourse" class="form-control require" >
                    <option value="">Select course </option>
                    @foreach ($courses as $value )
                    <option value="{{ $value->id }}">{{ $value->coursename }}</option>
                    @endforeach
                   
                    <option value="0">HNC L4 in Business</option>
                    <option value="1">HND L5 in Business</option>
                    <option value="2">HNC L4 in Computing</option>
                    <option value="3">HND L4 in Computing</option>
                    <option value="4">VTCT L4 in Eduacton & Training</option>
                    <option value="5">VTCT L5 in Eduacton & Training</option>
                    <option value="6">BTEC L4 in Eduacton & Training</option>
                  
                </select>
            </div>
        </div> --}}
        <div class="form-group col-lg-4">
            <label class="col-lg- col-form-label mb-2 p-0">Mode of studies:</label>
            <div class="col-lg-  ">
                <select name = "mofstudy" class="form-control require" >
                    <option value="">Select mode </option>
                    @foreach ($str_arr as $item)
                    <option value="{{$item}}">{{$item}}</option>
                    @endforeach
                </select>
            </div>
        </div>

    </div>
    <div class="form-row">
        <div class="form-group col-lg-4">
            <label class="col-lg- col-form-label">Commencement:</label>
            <div class="col-lg-  ">
                <select class="form-control require" name = "commencement">
                    <option value="">Select commencement </option>
                   
                    @foreach ($commencements as $items)
                    <option value="{{ $items->sessionname}}">{{ $items->sessionname }}</option>
                    @endforeach
                
                </select>
            </div>
        </div> 
        {{-- <div class="form-group col-lg-4">
            <label class="col-lg- col-form-label">Course Duration:</label>
            <div class="col-lg-  ">
                <select class="form-control require" name = "cduration" >
                    <option value="">Select duration </option>
                    <option value="0">1 term</option>
                    <option value="1">2 term</option>
                    <option value="2"> 3 term</option>

                </select>
            </div>
        </div> --}}
        <div class="form-group col-lg-4">
            <label class="col-lg- col-form-label">Who will pay your fees?:</label>
            <div class="col-lg-  ">
                <select class="form-control require" name = "feespaidby" >
                    <option value="">Select  </option>
                    <option value="0">Parents</option>
                    <option value="1">Family member</option>
                    <option value="2">Employer</option>
                    <option value="3">Self</option>
                </select>
            </div>
        </div>

    </div>
</div>
</div>
</div>
</div>
</div>
</div>


    </div>

    <!-- page 2nd end -->




    <!-- page 3rd start -->

    <div class = "tab">

       
        <div class="row">
            <div class="col-sm-12">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-2 font-weight-bold">Academic Qualification - examination
                            achived</h5>
                        <small class="fs-5" style="font-size:15px">Please list all qualifications taken,whatever
                            the result, in chronological order, Documentary evidance of known result should be
                            submitted with this form. Only certified photocopies are acceptable</small>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm">


        <div class="myTable">
            <div class="form-row">
                <div class="form-group col-lg-2">
                    <label class="col-lg- col-form-label">Exams Date</label>


                </div>
                <div class="form-group col-lg-3">
                    <label class="col-lg- col-form-label">Examing Board/Institution:
                    </label>

                </div>
                <div class="form-group col-lg-2 ">
                    <label class=" col-form-label">Subjects: </label>

                </div>
                <div class="form-group col-lg-2 ">
                    <label class=" col-form-label">Qualification</label>

                </div>
                <div class="form-group col-lg-2 ">
                    <label class=" col-form-label">Result achived</label>

                </div>
            </div>



            <table id="emptbl1">
                <tr> 
                    <td id="colt0"><div class="col-auto" style = "padding: 1px">
                        <input type="date" name="examdate1[]" value="" class="form-control examvalidation" id="inputPassword2" placeholder="">
                      </div> </td>
    
    
                      <td id="colt1"><div class="col-auto" style = "padding: 1px">
                        <input type="text" name="examboard[]" value="" class="form-control examvalidation" id="inputPassword2" placeholder="">
                      </div></td> 
                    
    
                      <td id="colt2"><div class="col-auto" style = "padding: 1px">
                        <input type="text" name="subject[]" value="" class="form-control examvalidation" id="inputPassword2" placeholder="">
                      </div></td> 
                    
                      <td id="colt3"><div class="col-auto" style = "padding: 1px">
                        <input type="text" name="qualification[]" value="" class="form-control examvalidation" id="inputPassword2" placeholder="">
                      </div></td> 
    
                      <td id="colt4"><div class="col-auto" style = "padding: 1px">
                        <input type="text" name="result[]" value="" class="form-control examvalidation" id="inputPassword2" placeholder="">
                      </div></td> 
    
    
                      <div class="col-auto" style = "padding: 1px">
                        <input type="hidden" name="eanumberinput" value="0" id = "eanoinput" class="form-control" id="inputPassword2" placeholder="Phone #" >
                      </div> 
    
                      <td id="colt5"><button  type="button" onclick="eadeleteRows(this)" class="btn btn-danger "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                      </svg></button></td> 
    
                      <td id = "eaadd"> <button  type="button" value="Add Row" onclick="eaaddRows()" class="btn btn-success "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
                      </svg></button>
                      
        </tr>
        </table>
    



            {{-- <div class="form-row">
                <div class="form-group col-lg-2">
                    <input type="text" class="form-control" id="validationCustom01"
                        >
                </div>
                <div class="form-group col-lg-3">
                    <input type="text" class="form-control" id="validationCustom01"
                        placeholder="" >
                </div>
                <div class="form-group col-lg-2 ">
                    <input type="text" class="form-control" id="validationCustom01"
                        placeholder="" >
                </div>
                <div class="form-group col-lg-2 ">
                    <input type="text" class="form-control" id="validationCustom01"
                        placeholder="" >
                </div>
                <div class="form-group col-lg-2">
                    <input type="text" class="form-control" id="validationCustom01"
                        placeholder="" >
                </div>
                <div class="form-group col-lg-1">
                    <input type="button" class="form-control w-100 bg-success"
                        id="addrow" value="+">
                </div>
            </div> --}}
        </div>
            
            <h5 class="card-title mb-2 font-weight-bold">Academic Qualification -
                examination Pending</h5>
            <small class="fs-5" style="font-size:15px">Complete the section only if you are awaiting the results of any examination taken recently</small>
            <hr>





        <div class="mynewTable">
            <div class="form-row">
                <div class="form-group col-lg-2">
                    <label class="col-lg- col-form-label">Exams Date</label>


                </div>
                <div class="form-group col-lg-3">
                    <label class="col-lg- col-form-label">Examing Board/Institution:
                    </label>

                </div>
                <div class="form-group" style = "width: 22.333333%">
                    <label class=" col-form-label">Subjects: </label>

                </div>
                <div class="form-group col-lg-2 ">
                    <label class=" col-form-label">Qualification</label>

                </div>
               
            </div>



            <table id="emptbl2">
                <tr> 
                    <td id="cold0"><div class="col-auto" style = "padding: 1px">
                        <input type="date" name="examdate2[]" value="" class="form-control" id="inputPassword2" placeholder="">
                      </div> </td>
    
                      <td id="cold1"><div class="col-auto" style = "padding: 1px">
                        <input type="text" name="examboard2[]" value="" class="form-control" id="inputPassword2" placeholder="">
                      </div></td> 
                    
                      <td id="cold2"><div class="col-auto" style = "padding: 1px">
                        <input type="text" name="subject2[]" value="" class="form-control" id="inputPassword2" placeholder="">
                      </div></td> 
                    
                      <td id="cold3"><div class="col-auto" style = "padding: 1px">
                        <input type="text" name="qualification2[]" value="" class="form-control" id="inputPassword2" placeholder="">
                      </div></td> 
    
                      <div class="col-auto" style = "padding: 1px">
                        <input type="hidden" name="epnumberinput" value="0" id = "epnoinput" class="form-control" id="inputPassword2" placeholder="Phone #" >
                      </div> 
    
                      <td id="cold4"><button  type="button" onclick="epdeleteRows(this)" class="btn btn-danger "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                      </svg></button></td> 
    
                      <td id = "eaadd"> <button  type="button" value="Add Row" onclick="epaddRows()" class="btn btn-success "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
                      </svg></button>
                      
        </tr>
        </table>
    




            {{-- <div class="form-row">
                <div class="form-group col-lg-2">
                    <input type="text" class="form-control" id="validationCustom01"
                        >
                </div>
                <div class="form-group col-lg-3">
                    <input type="text" class="form-control" id="validationCustom01"
                        placeholder="" >
                </div>
                <div class="form-group col-lg-4 ">
                    <input type="text" class="form-control" id="validationCustom01"
                        placeholder="" >
                </div>
                <div class="form-group col-lg-2 ">
                    <input type="text" class="form-control" id="validationCustom01"
                        placeholder="" >
                </div>
                
                
                <div class="form-group col-lg-1">
                    <input type="button" class="form-control w-100 bg-success"
                        id="add" value="+">
                </div>
            </div> --}}


        </div>




    </div>
</div>
</div>
</div>
</div>
</div>
        </div>
<!-- page 3rd end -->


<!-- page 4th start -->

<div class = "tab">

   

    <div class="row">
        <div class="col-sm-12">

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-2 font-weight-bold">English Language</h5>
                    <small class="fs-5" style="font-size:15px">You must submit proof of your English language prficiency with this application.</small>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm">

<div style = "display: flex">
    <div class="form-group col-lg-4">
        <label class="col-lg- col-form-label">Is English your first language?</label>
        <div class="col-lg-  ">
            <select class="form-control require" name = "flang" >
                <option value="">Select </option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
        </div>
    </div>

    <div class="form-group col-lg-4">
        <label class="col-lg- col-form-label">Have you attend any course in English language?</label>
        <div class="col-lg-  ">
            <select class="form-control require" name = "courseineng" >
                <option value="">Select </option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
        </div>
    </div>


    <div class="form-group col-lg-4">
        <label class="col-lg- col-form-label">Have you taken any English Languages proficiency test?</label>
        <div class="col-lg-  ">
            <select class="form-control require" name = "proftest" >
                <option value="">Select </option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
        </div>
    </div>
</div>


    <div class="">
        <h5 class="card-title mb-2 font-weight-bold">Work Experience<small class="fs-5" style="font-size:15px">(if any)</small></h5>
        <small style="font-size:15px">Please give details of work experience, training and employment.</small>
        <hr>
    </div>
    <div>
        
        




        <table >
            <tr style = "width: 100%"> 
                <td style = "width: 16%"><div class="col-auto" >
                    <label class="col-lg- col-form-label"> Date From<br><small style="font-size:12px">(dd/mm/yy)</small></label>
                </div> </td>


                  <td style = "width: 16%"><div class="col-auto" >
                    <label class="col-lg- col-form-label">Date to<br><small style="font-size:12px">(dd/mm/yy)</small></label>
                </div></td> 
                

                  <td  style = "width: 13%"><div class="col-auto">
                    <label class=" col-form-label">FT/PT </label>
                </div></td> 
                
                  <td style = "width: 7%"><div class="col-auto" >
                    <label class=" col-form-label">Post held</label>
                </div></td> 

                  <td  style = "width: 7%"><div class="col-auto">
                    <label class=" col-form-label">Organisation name and address</label>
                </div></td> 

                  <td style = "width: 16%"><div class="col-auto" >
                    <label class=" col-form-label">Brief description of duties</label>
                </div></td> 


    </tr>
    </table>




        
        <table id="emptbl">
            <tr> 
                <td id="col0"><div class="col-auto" style = "padding: 1px">
                    <input type="date" name="datefrom[]" value="" class="form-control require" id="inputPassword2" placeholder="" >
                  </div> </td>


                  <td id="col1"><div class="col-auto" style = "padding: 1px">
                    <input type="date" name="dateto[]" value="" class="form-control require" id="inputPassword2" placeholder="" >
                  </div></td> 
                

                  <td id="col2"><div class="col-auto" style = "padding: 1px">
                    <input type="text" name="ftptfrom[]" value="" class="form-control" id="inputPassword2" placeholder="">
                  </div></td> 
                
                  <td id="col3"><div class="col-auto" style = "padding: 1px">
                    <input type="text" name="postheld[]" value="" class="form-control" id="inputPassword2" placeholder="">
                  </div></td> 

                  <td id="col4"><div class="col-auto" style = "padding: 1px">
                    <input type="text" name="orgname2[]" value="" class="form-control" id="inputPassword2" placeholder="">
                  </div></td> 

                  <td id="col5"><div class="col-auto" style = "padding: 1px">
                    <input type="text" name="briefdis[]" value="" class="form-control" id="inputPassword2" placeholder="">
                  </div></td> 

                  <div class="col-auto" style = "padding: 1px">
                    <input type="hidden" name="numberinput" value="0" id = "noinput" class="form-control" id="inputPassword2" placeholder="Phone #">
                  </div> 

                  <td id="col6"><button  type="button" onclick="deleteRows(this)" class="btn btn-danger "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                  </svg></button></td> 

                  <td id = "add"> <button  type="button" value="Add Row" onclick="addRows()" class="btn btn-success "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
                    <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
                  </svg></button>
                  
    </tr>
    </table>












    </div>

    <div>
        <label for="">If curently employed,current employer details:</label>
    </div>
    <div> 
        <div class="form-row">
            <div class="form-group col-lg-1">
                <label class="col-lg- col-form-label">Date From<br><small style="font-size:12px">(dd/mm/yy)</small></label>
            </div> 
            
            <div class="form-group col-lg-2 ">
                <label class=" col-form-label">FT/PT </label>
                
            </div>
            <div class="form-group col-lg-2 ">
                <label class=" col-form-label">Post held</label>
                
            </div>
            <div class="form-group col-lg-3 ">
                <label class=" col-form-label">Organisation name</label>
                
            </div>
            
            <div class="form-group col-lg-3 ">
                <label class=" col-form-label">Organisation address</label>
                
            </div>
                
        </div>
        <div class="form-row">
            <div class="form-group col-lg-1">
                <input type="date" class="form-control" name="datef" id="validationCustom01"
                 >
            </div> 
            <div class="form-group col-lg-2 ">
                <input type="text" class="form-control" name="ftptf" id="validationCustom01"
                placeholder="" >                                                    
            </div>
            <div class="form-group col-lg-2 ">
                <input type="text" class="form-control" name="postheldf" id="validationCustom01"
                placeholder="" >                                                    
            </div>
            <div class="form-group col-lg-3">
                <input type="text" class="form-control" name="orgname" id="validationCustom01"
                placeholder="" >                                                    
            </div>
            <div class="form-group col-lg-3">
                <input type="text" class="form-control" name="orgaddress" id="validationCustom01"
                placeholder="" >                                                    
            </div>
          <div style = "display: flex; flex-direction: column">
            <div class="form-group col-lg-3 ">
                <label class=" col-form-label">Brief description of duties</label>
                
            </div>
            <div class="form-group col-lg-3">
                <textarea rows = "4" type="text" class="form-control" name="brief" style="width: 50vw" id="validationCustom01"
                placeholder=""  > </textarea>                                                    
            </div>
        </div>
        </div>
    </div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>

<!-- page 4th end -->

                                    



<!-- page 5th  START -->

                                            <div class="tab">


                                                <div class="row">
                                                    <div class="col-sm-12">
                                
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="card-title mb-2 font-weight-bold">Further Information</h5>
                                                                <small style="font-size:15px">Please use this section to tell us about yourself and your reasons for wanting to study this course.</small>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-sm">


                                            <div class="form-row">                                              
                                                <div class="col-md-12 mb-3">
                                                    <label for="validationCustom01">Please give reasons for choosing this programme of study?:</label>
                                                    <textarea rows="4" type="text" name = "reason" class="form-control require" id="validationCustom01"
                                                        placeholder=""> </textarea>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                            THis field is required.
                                                    </div>
                                                </div>                                                
                                            </div>

                                            

                                            <div class="form-row">
                                                
                                                <div class="col-md-12 mb-3">
                                                    <label for="validationCustom01">What are your future education plans?</label>
                                                    <textarea rows = "4" type="text" name = "futureplans" class="form-control require" id="validationCustom01"
                                                        placeholder=""> </textarea>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                            THis field is required.
                                                    </div>
                                                </div>
                                               
                                                
                                            </div>

                                            <div class="form-row">
                                                
                                                <div class="col-md-12 mb-3">
                                                    <label for="validationCustom01">What kind of employment do you intend to seek on completion of your studies?</label>
                                                    <textarea rows="4" type="text" name = "employment" class="form-control require" id="validationCustom01"
                                                        placeholder="" > </textarea>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                            THis field is required.
                                                    </div>
                                                </div>
                                               
                                                
                                            </div>

                                            <div class="form-row">
                                                
                                                <div class="col-md-12 mb-3">
                                                    <label for="validationCustom01">Please write brief statement about your interests and hobbies.</label>
                                                    <textarea rows="4" type="text" name = "interest" class="form-control require" id="validationCustom01"
                                                        placeholder="" > </textarea>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                            THis field is required.
                                                    </div>
                                                </div>
                                               
                                                
                                            </div>

                                            <div class="form-row">
                                                
                                                <div class="col-md-12 mb-3">
                                                    <label for="validationCustom01">To help us provide assistance wherever possible please state briefly if you have any special needs requiring support or facilities. </label>
                                                    <textarea rows="4" type="text" name = "facilities" class="form-control require" id="validationCustom01"
                                                        placeholder="" > </textarea>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                            THis field is required.
                                                    </div>
                                                </div>
                                               
                                                
                                            </div>

                                            <div class="form-row">
                                                <div class="col-md-12 mb-3">
                                                    <label for="validationCustom01">Are you currently on any state benifits? If so, please explain type of benifits:</label>
                                                    <textarea rows="4" type="text" name = "benifits" class="form-control " id="validationCustom01"
                                                        placeholder="" > </textarea>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                            THis field is required.
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-row">
                                                
                                                <div class="col-md-12 mb-3">
                                                    <label for="validationCustom01">Do you have any criminal record within or outside the UK? If yes, please state: </label>
                                                    <textarea rows="4" type="text" name = "criminalrecord" class="form-control " id="validationCustom01"
                                                        placeholder="" > </textarea>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                            THis field is required.
                                                    </div>
                                                </div>
                                               
                                                
                                            </div>

                                            <div class="">
                                                <h5 class="card-title mb-2 font-weight-bold">Reference:</h5>
                                                <small style="font-size:15px">This section must be completed by your present or past teacher, employer or a person who knows you well, academically and/or socially. <br>
                                                    Incomplete application forms will not be processed. An interview with the applicant will be required. </small>
                                                    <br>
                                                <small class="font-weight-bold" style="font-size:15px">Note to Referee:</small><br>  
                                                <small style="font-size:15px">As many potential candidates apply, selection is extremely competitive. Your comments will provide us with important information in assessing this application.
                                                    </small>  
                                                <hr>
                                            </div>

                                            <div class="form-row">
                                                
                                                <div class="col-md-12 mb-3">
                                                    <label for="validationCustom01">How long have you known the applicant and in what capacity? </label>
                                                    <textarea rows="4" type="text" name = "capacity" class="form-control require" id="validationCustom01"
                                                        placeholder="" > </textarea>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                            THis field is required.
                                                    </div>
                                                </div>
                                               
                                                
                                            </div>

                                            <div class="form-row">
                                                
                                                <div class="col-md-12 mb-3">
                                                    <label for="validationCustom01">What is your opinion of the Applicants suitability for the course chosen?</label>
                                                    <textarea rows = "4" type="text" name = "suitability" class="form-control require" id="validationCustom01"
                                                        placeholder="" > </textarea>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                            THis field is required.
                                                    </div>
                                                </div>
                                               
                                                
                                            </div>

                                            {{-- <div class="form-row">
                                                <label for="validationCustom01">Please tick appropriately - ONE tick per row: </label>                                        
                                            </div> --}}

                                            <div class="form-row">

                                                <div class="form-group col-lg-3">
                                                    <label class="col-lg- col-form-label">Intellectual / Academic ability:</label>
                                                    <div class="col-lg-  ">
                                                        <select class="form-control require" name = "intellectual">
                                                            <option value="">Select  </option>
                                                            <option value="0">Outstanding</option>
                                                            <option value="1">Excellent 90-94%</option>
                                                            <option value="2">Very Good 75-89%</option>
                                                            <option value="3">Good 60-74%</option>
                                                            <option value="4">Averege</option>
                                                            <option value="5">Below averege</option>
                                                            <option value="6">Not know</option>      
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-3">
                                                    <label class="col-lg- col-form-label">Ability to work hard:</label>
                                                    <div class="col-lg-  ">
                                                        <select class="form-control require" name = "ability" >
                                                            <option value="">Select  </option>
                                                            <option value="0">Outstanding</option>
                                                            <option value="1">Excellent 90-94%</option>
                                                            <option value="2">Very Good 75-89%</option>
                                                            <option value="3">Good 60-74%</option>
                                                            <option value="4">Averege</option>
                                                            <option value="5">Below averege</option>
                                                            <option value="6">Not know</option>      
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-3">
                                                    <label class="col-lg- col-form-label">Perseverance:</label>
                                                    <div class="col-lg-  ">
                                                        <select class="form-control require" name = "perseverance" >
                                                            <option value="">Select  </option>
                                                            <option value="0">Outstanding</option>
                                                            <option value="1">Excellent 90-94%</option>
                                                            <option value="2">Very Good 75-89%</option>
                                                            <option value="3">Good 60-74%</option>
                                                            <option value="4">Averege</option>
                                                            <option value="5">Below averege</option>
                                                            <option value="6">Not know</option>      
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-3">
                                                    <label class="col-lg- col-form-label">Leadership:</label>
                                                    <div class="col-lg-  ">
                                                        <select class="form-control require" name = "leadership" >
                                                            <option value="">Select  </option>
                                                            <option value="0">Outstanding</option>
                                                            <option value="1">Excellent 90-94%</option>
                                                            <option value="2">Very Good 75-89%</option>
                                                            <option value="3">Good 60-74%</option>
                                                            <option value="4">Averege</option>
                                                            <option value="5">Below averege</option>
                                                            <option value="6">Not know</option>      
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-3">
                                                    <label class="col-lg- col-form-label">Creativity:</label>
                                                    <div class="col-lg-  ">
                                                        <select class="form-control require" name = "creativity" >
                                                            <option value="">Select  </option>
                                                            <option value="0">Outstanding</option>
                                                            <option value="1">Excellent 90-94%</option>
                                                            <option value="2">Very Good 75-89%</option>
                                                            <option value="3">Good 60-74%</option>
                                                            <option value="4">Averege</option>
                                                            <option value="5">Below averege</option>
                                                            <option value="6">Not know</option>      
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-3">
                                                    <label class="col-lg- col-form-label">Concern for others:</label>
                                                    <div class="col-lg-  ">
                                                        <select class="form-control require" name = "concern" >
                                                            <option value="">Select  </option>
                                                            <option value="0">Outstanding</option>
                                                            <option value="1">Excellent 90-94%</option>
                                                            <option value="2">Very Good 75-89%</option>
                                                            <option value="3">Good 60-74%</option>
                                                            <option value="4">Averege</option>
                                                            <option value="5">Below averege</option>
                                                            <option value="6">Not know</option>      
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-3">
                                                    <label class="col-lg- col-form-label">Fluent and logical communication in English oral:</label>
                                                    <div class="col-lg-  ">
                                                        <select class="form-control require" name = "fluetoral" >
                                                            <option value="">Select  </option>
                                                            <option value="0">Outstanding</option>
                                                            <option value="1">Excellent 90-94%</option>
                                                            <option value="2">Very Good 75-89%</option>
                                                            <option value="3">Good 60-74%</option>
                                                            <option value="4">Averege</option>
                                                            <option value="5">Below averege</option>
                                                            <option value="6">Not know</option>      
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-3">
                                                    <label class="col-lg- col-form-label">Fluent and logical communication in English written:</label>
                                                    <div class="col-lg-  ">
                                                        <select class="form-control require" name = "fluewritten">
                                                            <option value="">Select  </option>
                                                            <option value="0">Outstanding</option>
                                                            <option value="1">Excellent 90-94%</option>
                                                            <option value="2">Very Good 75-89%</option>
                                                            <option value="3">Good 60-74%</option>
                                                            <option value="4">Averege</option>
                                                            <option value="5">Below averege</option>
                                                            <option value="6">Not know</option>      
                                                        </select>
                                                    </div>
                                                </div>

                                                <div style = "display: flex; flex-direction: column; gap: 10px; margin-top: 20px">
<div>
<p>Any other Information that you feel is relevant</p>
</div>



                                          <div style = "display: flex; justify-content: center; gap: 10px">
                                                <div class="form-row">
                                                    <div class="col-md-12 mb-3">
                                                        <label for="validationCustom01">Referee's Name</label>
                                                        <input type="text" name = "rname" class="form-control require" id="validationCustom01"
                                                            placeholder=""  >
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                                THis field is required.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="col-md-12 mb-3">
                                                        <label for="validationCustom01">Referee's Signature</label>
                                                        <input type="text" name = "rsign" class="form-control require" id="validationCustom01"
                                                            placeholder=""  >
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                                THis field is required.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="col-md-12 mb-3">
                                                        <label for="validationCustom01">Date</label>
                                                        <input type="text" name = "rdate" class="form-control " id="validationCustom01"
                                                            placeholder=""  >
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                                THis field is required.
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                        </div>
                                        <!-- Page 5th End -->
                                        


                                        <!-- page 6th start -->
<div class = "tab">



    <div class="row">
        <div class="col-sm-12">

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-2 font-weight-bold">Marketing Information:<br><small>it would be
                            helpful if you could tell us about where you heard about the City of London
                            College by ticking the appropriate box.
                        </small>
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm">

    <div class="mb-4">




        {{-- <div style="width:200px;border-radius:6px;margin:0px auto">  
            <table border="1">  
               <tr>  
                  <td colspan="2">Select Technolgy:</td>  
               </tr>  
               <tr>  
                  <td>PHP</td>  
                  <td><input type="checkbox" name="techno[]" value="PHP"></td>  
               </tr>  
               <tr>  
                  <td>.Net</td>  
                  <td><input type="checkbox" name="techno[]" value=".Net"></td>  
               </tr>  
               <tr>  
                  <td>Java</td>  
                  <td><input type="checkbox" name="techno[]" value="Java"></td>  
               </tr>  
               <tr>  
                  <td>Javascript</td>  
                  <td><input type="checkbox" name="techno[]" value="javascript"></td>  
               </tr>  
              
            </table>  
            </div>   --}}


        <div class="col-md-12 row mb-3">
            <div class="col-lg-4 box">
                <input class="larger" name="techno[]" value="Newspaper/Magazine" type="checkbox" id="checkbox1">
                <label class="mt-1 ml-1" for="">Newspaper/Magazine
                </label>
            </div>
            <div class="col-lg-4 box">
                <input class="larger" name="techno[]" value = "Name of
                Newspaper/Magazine" type="checkbox" id="checkbox1">
                <label class="mt-1 ml-1" for="">Name of
                    Newspaper/Magazine </label>
            </div>
            <div class="col-lg-4 box">
                <input class="larger" name="techno[]" value = "Relative/Friend" type="checkbox" id="checkbox1">
                <label class="mt-1 ml-1" for="">Relative/Friend
                </label>
            </div>
            <div class="col-lg-4 box">
                <input class="larger" type="checkbox" name="techno[]" value = "Internet">
                <label class="mt-1 ml-1" for="">
                    Internet
                </label>
            </div>
            <div class="col-lg-4 box">
                <input class="larger" type="checkbox" name="techno[]" value = "Social Media" >
                <label class="mt-1 ml-1" for="">Social Media</label>
            </div>
            <div class="col-lg-3 box">
                <input class="larger" type="checkbox" name="techno[]" value = "Other sources">
                <label class="mt-1 ml-1" for="">
                    Other sources 
                </label>
            </div>
        </div>



    </div>


    <h5 class="card-title mb-2 font-weight-bold">Equal opportunities
        monitoring:<br><small>Your response will not influence the outcome of
        your application.You do not have to answer this question if you do
        not wish.</small>
    </h5>
    <br>


    <div class="form-row">

        <div class="form-group col-lg-6">
            <label class="col-lg- col-form-label">Ethnic origin:</label>
            <div class="col-lg-  ">
                <select name = "ethnic" class="form-control require" >
                    <option value="">Select</option>
                    <option value="0">White</option>
                    <option value="1">Asian or Asian British - Pakistani</option>
                    <option value="2">Mixed - white and Asian</option>
                    <option value="3">Gypsy or traveller</option>
                    <option value="4">Asian or Asian British - Bangladeshi</option>
                    <option value="5">Other mixed background</option>
                    <option value="6">Black or black British - Caribbean</option>
                    <option value="7">Chinese</option>
                    <option value="8">Arab</option>
                    <option value="9">Black or black British - African</option>
                    <option value="10">Other Asian background</option>
                    <option value="11">Other ethnic background</option>
                    <option value="12">Other black background </option>
                    <option value="13">Mixed - white and back Caribbean</option>
                    <option value="14">Prefer not to say</option>
                    <option value="15">Asian or Asian British - Indian</option>
                    <option value="16">Mixed - white and black African</option>
                    
                </select>
            </div>
        </div>
        <div class="form-group col-lg-6">
            <label class="col-lg- col-form-label">Religion:</label>
            <div class="col-lg-  ">
                <select class="form-control require" name = "religion">
                    <option value="">Select  </option>
                    <option value="0">Christian</option>
                    <option value="1">Muslim</option>
                    <option value="2">Buddhist</option>
                    <option value="3">Sikh</option>
                    <option value="4">Any other religion or belief</option>
                    <option value="5">Hindu</option>
                    <option value="6">Chinese</option>
                    <option value="7">baha'i faith</option>
                    <option value="8">Prefer not to say</option>
                    <option value="9">Jewish</option>
                    <option value="10">Pagan</option>
                    <option value="11">Other</option>
                    <option value="12">No religion</option>
                </select>
            </div>
        </div>

    </div>















{{--     
    <div class="form-row">
    <div class="file-upload">
        <input type="text" value = "0" id = "filesuploadarr">
        <div class="image-upload-wrap">
          <div class="drag-text">
          <img src="/assets/img/uploadimg.png" alt="uploadimage" style = "margin-top: 40px; width: 135px; height: 100px">
            <h3>select File OR Multiple Files</h3>
            <input 
          type="file" 
          class="file-upload-btn" 
          id="file" 
          multiple 
          onchange="javascript:updateList()" 
          border=""
        />
          </div>
          <ul id="fileList" class="file-list"></ul>
        </div>
    </div> 
</div> --}}












        {{-- <div class="row">
            <div class="col-lg-4">
                <label for="">Course title on which place offered</label>
            </div>
            <div class="col-lg-4">
                <label for="">Course Level(level 1-6)</label>
            </div>
            <div class="col-lg-4">
                <label for="">Course Duration <small>(please state START and END date )</small></label>
            </div>
        </div> --}}
        {{-- <div class="row">
            <div class="col-lg-4">
                <select class="custom-select"  required>
                    <option value="">- Select -</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                    <option value="4">Option 4</option>
                    <option value="5">Option 5</option>
                </select>
            </div>
            <div class="col-lg-3">
                <select class="custom-select"  required>
                    <option value="">- Select -</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                    <option value="4">Option 4</option>
                    <option value="5">Option 5</option>
                </select>
            </div>
            <div class="col-lg-2">
                <label for="">Start Date</label>
            </div>
            <div class="col-log-2">
                <input type="text" class="form-control" id="validationCustom01"
            placeholder=""  required>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-2">
                <label for="">Course Code</label>
            </div>
            <div class="col-lg-2">
                <label for="">Tuition Fee</label>
            </div>
            <div class="col-lg-4">
                <label for="">Date Received</label>
            </div>
            
        </div>
        <div class="row">
            <div class="col-lg-2">
                <input type="text" class="form-control" id="validationCustom01" required>
            </div>
            <div class="col-lg-2">
                <input type="text" class="form-control" id="validationCustom01" required>
            </div>
            <div class="col-lg-3">
                <input type="text" class="form-control" id="validationCustom01" required>
                
            </div>
            <div class="col-lg-2">
                <label for="">End Date</label>
            </div>
            <div class="col-log-2">
                <input type="text" class="form-control" id="validationCustom01"
            placeholder=""  required>
            </div>                                                  
        </div>
        <div class="row">
            <div class="col-lg-4">
                <label for="">Processed by</label>
            </div>
            <div class="col-lg-4">
                <label for="">Allocated SEN:</label>
            </div>                                                                                                   
        </div> --}}
        {{-- <div class="row">
            <div class="col-lg-4">
                <input type="text" class="form-control" id="validationCustom01">
            </div>
            <div class="col-lg-4">
                <input type="text" class="form-control" id="validationCustom01">
            </div> 
        </div>  --}}











        <input type="text" id = "uploadnoinput" name = "uploadinput"/>

        <div class="form-row">
            <div class="file-upload">

                <div class="image-upload-wrap">
                  <div class="drag-text">
                  <img src="/assets/img/uploadimg.png" alt="uploadimage" style = "margin-top: 40px; width: 160px; height: 100px">
                    <h3>select File OR Multiple Files</h3>
                    <input
                  name = "filename" 
                  type="file" 
                  class="file-upload-btn" 
                  id="file" 
                  multiple 
                  onchange="javascript:updateList()" 
                  border=""
                />
                  </div>
        
    
    
                  {{-- <table id="emptbl4">
                    <tr> 
                        <td id="col0"><div class="col-auto" style = "padding: 1px">
                            <input type="text" name="uploadfile[]" value = "" class="form-control atName" id="fileupload" placeholder="" style = "width: 100%">
                          </div> </td>
    
                          <div class="col-auto" style = "padding: 1px">
                            <input type="text" name="uploadinput" value="0" id = "uploadnoinput" class="form-control" id="" placeholder="Phone #">
                          </div> 
        
                          <td id="col1"><button  type="button" onclick="uploaddeleteRows(this)" class="btn btn-danger "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                          </svg></button></td> 
        
        
            </tr>
            </table> --}}

            <ul  id="fileList" > </ul>
    

        </div>
    
    
    </div> 
</div>











        
    </div> 
</div> 
</div> 
</div> 
</div> 
</div> 

    </div>























                                        <!-- page 6th end -->

                                        <div style="overflow:auto; margin-bottom: 50px;">
                                            <div style="float:right;">
                                              <button class="btn btn-primary" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                              <button class="btn btn-primary" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                              <button class="btn btn-primary" type="submit" id="submitBtn">Submit</button>
                                            </div>
                                        </div>
                                        
                                        
                                       

                                         


                                 

                                        </form>
                                        
                                        

                                        
                                        

                               

            </div>

            <footer>
                <p>Copyright © 2020.</p>
            </footer>

        </div>

    </div>


    {{-- <script src="../assets/js/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="../assets/js/form-validation.js"></script>
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/progressbar.js"></script> --}}
    {{-- <script src="../assets/js/addrow.js"></script> --}}











{{-- Academic qualification exams achieved --}}



















    <script type="text/javascript">

    function eaaddRows(){ 
        var table = document.getElementById('emptbl1');
        var rowCount = table.rows.length;
        
console.log(rowCount);

        // if(rowCount >= 1){
        //     document.getElementById('colt5').style.display = "flex";
        //     document.getElementById('eaadd').style.display = "none";
        // }
    

        // if(rowCount > 0){
        //     var firstP = document.getElementById("del");
        //     firstP.setAttribute("id","coll6");
        //     }
        //     else{
        //         var firstP = document.getElementById("del");
        //     firstP.setAttribute("id","coll6");
        //     }

        document.getElementById('eanoinput').value=rowCount ;
        document.getElementById('eanoinput').nodeValue = rowCount;
        var cellCount = table.rows[0].cells.length; 
        console.log(rowCount);
        var row = table.insertRow(rowCount);
        for(var i =0; i <= cellCount; i++){
            var cell = 'cell'+i;
            cell = row.insertCell(i);
            var copycel = document.getElementById('colt'+i).innerHTML;
            cell.innerHTML=copycel;
            if(i == 5){ 
                var radioinput = document.getElementById('colt3').getElementsByTagName('input'); 
                for(var j = 0; j <= radioinput.length; j++) { 
                    if(radioinput[j].type == 'radio') { 
                        var rownum = rowCount;
                        radioinput[j].name = 'gender['+rownum+']';
                    }
                }
            }
        }
    }
    function eadeleteRows(r){
    
        var table = document.getElementById('emptbl1');
        var rowCount = table.rows.length;

       
        if(rowCount > '1'){
            var i = r.parentNode.parentNode.rowIndex;
            document.getElementById('emptbl1').deleteRow(i);
            document.getElementById('eanoinput').value=rowCount-2 ;
        }
        
        else{
            alert('There should be atleast one row');
            window.location.reload(true);
        }
    }




    function epaddRows(){ 
        var table = document.getElementById('emptbl2');
        var rowCount = table.rows.length;
        
console.log(rowCount);

        // if(rowCount >= 1){
        //     document.getElementById('colt5').style.display = "flex";
        //     document.getElementById('eaadd').style.display = "none";
        // }
    

        // if(rowCount > 0){
        //     var firstP = document.getElementById("del");
        //     firstP.setAttribute("id","coll6");
        //     }
        //     else{
        //         var firstP = document.getElementById("del");
        //     firstP.setAttribute("id","coll6");
        //     }

        document.getElementById('epnoinput').value=rowCount ;
        document.getElementById('epnoinput').nodeValue = rowCount;
        var cellCount = table.rows[0].cells.length; 
        console.log(rowCount);
        var row = table.insertRow(rowCount);
        for(var i =0; i <= cellCount; i++){
            var cell = 'cell'+i;
            cell = row.insertCell(i);
            var copycel = document.getElementById('cold'+i).innerHTML;
            cell.innerHTML=copycel;
            if(i == 4){ 
                var radioinput = document.getElementById('cold3').getElementsByTagName('input'); 
                for(var j = 0; j <= radioinput.length; j++) { 
                    if(radioinput[j].type == 'radio') { 
                        var rownum = rowCount;
                        radioinput[j].name = 'gender['+rownum+']';
                    }
                }
            }
        }
    }
    function epdeleteRows(r){
    
        var table = document.getElementById('emptbl2');
        var rowCount = table.rows.length;
        if(rowCount > '1'){
            var i = r.parentNode.parentNode.rowIndex;
            document.getElementById('emptbl2').deleteRow(i);
            document.getElementById('epnoinput').value=rowCount-2 ;
        }
        
        else{
            alert('There should be atleast one row');
            window.location.reload(true);
        }
    }




















function addRows(){ 
            var table = document.getElementById('emptbl');
            var rowCount = table.rows.length;
            
console.log(rowCount);

            // if(rowCount >= 1){
            //     document.getElementById('col6').style.display = "flex";
            //     document.getElementById('add').style.display = "none";
            // }
        

            // if(rowCount > 0){
            //     var firstP = document.getElementById("del");
            //     firstP.setAttribute("id","col6");
            //     }
            //     else{
            //         var firstP = document.getElementById("del");
            //     firstP.setAttribute("id","col6");
            //     }

            document.getElementById('noinput').value=rowCount ;
            document.getElementById('noinput').nodeValue = rowCount;
            var cellCount = table.rows[0].cells.length; 
            console.log(rowCount);
            var row = table.insertRow(rowCount);
            for(var i =0; i <= cellCount; i++){
                var cell = 'cell'+i;
                cell = row.insertCell(i);
                var copycel = document.getElementById('col'+i).innerHTML;
                cell.innerHTML=copycel;
                if(i == 6){ 
                    var radioinput = document.getElementById('col3').getElementsByTagName('input'); 
                    for(var j = 0; j <= radioinput.length; j++) { 
                        if(radioinput[j].type == 'radio') { 
                            var rownum = rowCount;
                            radioinput[j].name = 'gender['+rownum+']';
                        }
                    }
                }
            }
        }
        function deleteRows(r){
        
            var table = document.getElementById('emptbl');
            var rowCount = table.rows.length;
            if(rowCount > '1'){
                var i = r.parentNode.parentNode.rowIndex;
                document.getElementById('emptbl').deleteRow(i);
                document.getElementById('noinput').value=rowCount-2 ;
            }
            
            else{
                alert('There should be atleast one row');
                window.location.reload(true);
            }
        }
        </script>











    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("submitBtn").style.display = "inline";
    document.getElementById("nextBtn").style.display = "none";
  } else {
    document.getElementById("submitBtn").style.display = "none";
    document.getElementById("nextBtn").style.display = "inline";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}



function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
  document.getElementById("regForm").submit();
   return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}












function validateForm() {
  // This function deals with validation of the form fields
  var x, y,z, i, j,k, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByClassName("require");

//   ..............................................................

  z = x[currentTab].getElementsByClassName("examvalidation");

  // A loop that checks every input field in the current tab:

// .................................................

  for (j = 0; j < z.length; j++) {
    // If a field is empty...
    if (z[j].value == "") {
      // add an "invalid" class to the field:
      z[j].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }


// //   .......................................................

  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}





function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}
</script>





<script>
      var i=1;
   updateList = function() {
      var input = document.getElementById('file');
      var output = document.getElementById('fileList');
      var li = document.createElement("li");
    //   li.className = "uploadedfilesys";
 
      li.innerHTML = 
        `
        <input value = "${input.files[input.files.length - 1].name}" name = 'filename[]' id = "file${i}"/>
     
        <span 
            class="remove-list" 
            onclick="return this.parentNode.remove()"
          >X</span>`;
          i++;
          var lastrecord = i-1;
          console.log(lastrecord);
      output.appendChild(li);
    //   const len2 = document.getElementsByClassName("uploadedfilesys");
    //   document.getElementById('filesuploadarr').value = len2.length;
    document.getElementById('uploadnoinput').value = lastrecord;
  }
























//   function uploadaddRows(){ 
//             alert('start');
//     var input = document.getElementById('file');
//       var output = document.getElementById('fileList');

    
//     var table = document.getElementById('emptbl4');
//             var rowCount = table.rows.length;
            


// console.log(rowCount);


//             document.getElementById('uploadnoinput').value=rowCount ;
//             document.getElementById('uploadnoinput').nodeValue = rowCount;
//             var cellCount = table.rows[0].cells.length; 
//             console.log(rowCount);
//             var row = table.insertRow(rowCount);
//             for(var i =0; i <= cellCount; i++){
//                 var cell = 'cell'+i;
//                 cell = row.insertCell(i);
//                 var copycel = document.getElementById('col'+i).innerHTML;
//                 cell.innerHTML=copycel;
            
//                 // console.log(rowCount);
//                 // var vvv  = rowCount-1;
//                 // console.log(vvv);

//                 document.getElementById("emptbl4").rows[rowCount].cells[0].querySelector('.atName').value = `${input.files[input.files.length - 1].name}`;
//                 // console.log(x);


//                 // document.getElementById('fileupload'+vvv).id = 'fileupload'+rowCount;
//                 // document.getElementById('fileupload'+rowCount).value = `${input.files[input.files.length - 1].name}`;
                
//                  if(i == 1){ 
//                     var radioinput = document.getElementById('col3').getElementsByTagName('input'); 
//                     for(var j = 0; j <= radioinput.length; j++) { 
//                         if(radioinput[j].type == 'radio') { 
//                             var rownum = rowCount;
//                             radioinput[j].name = 'gender['+rownum+']';
//                         }
//                     }
//                 }
//             }
//         }
//         function uploaddeleteRows(r){
        
//             var table = document.getElementById('emptbl4');
//             var rowCount = table.rows.length;
//             if(rowCount > '1'){
//                 var i = r.parentNode.parentNode.rowIndex;
//                 document.getElementById('emptbl4').deleteRow(i);
//                 document.getElementById('uploadnoinput').value=rowCount-2 ;
//             }
            
//             else{
//                 alert('There should be atleast one row');
//                 window.location.reload(true);
//             }
//         }














</script>












</x-dashboard-layout>