<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
</head>
<style>
    body {
  font-family: 'Anaheim';
  font-size: 1.2em;
}

#outside {
  background-color: lightgoldenrodyellow;
  padding-top: 25px;
  padding-bottom: 25px;
}

h1 {
  font-size: 1.5em;
  text-align: center;
  text-transform: capitalize;
}

form {
  /* Just to center the form on the page */
  margin: 0 auto;
  width: 70%;
  /* To see the limits of the form */
  padding: 1em;
  border: 1px solid #CCC;
  border-radius: 1em;

}
#survey-form {
  background-color: white;
}

fieldset {
  border:1px solid lightgray;
  margin: 10px;
 }

legend {
  font-weight: 700;
}

#number {
  width: 150px;
}


div + div {
  margin-top: 1em;
  }

/* label {
  /* To make sure that all label have the same size and are properly align */
  /* display: inline-block; */
  /* width: 80px; */
  /* text-align: right; */
} */

input, textarea {
  /* To make sure that all text field have the same font settings
     By default, textarea are set with a monospace font */
  /* font: 1em sans-serif; */

  /* To give the same size to all text field */
  width: 200px;

/*   -moz-box-sizing: border-box;
       box-sizing: border-box; */

  /* To harmonize the look & feel of text field border */
  border: 1px solid #999;
}

input:focus, textarea:focus {
  /* To give a little highligh on active elements */
  border-color: OrangeRed;
}

textarea {
  /* To properly align multiline text field with their label */
  vertical-align: top;

  /* To give enough room to type some text */
  height: 5em;

  /* To allow users to resize any textarea vertically
     It works only on Chrome, Firefox and Safari */
  resize: vertical;
}

.button {
  /* To position the buttons to the same position of the text fields */
  padding-left: 90px; /* same size as the label elements */
}

button {
  margin: .5em;
  font-size: 1em;
  text-transform: capitalize;
  background-color: red;
  color: white;
  border: none;
  padding: 5px;
  border-radius: 2px;

}

#submitbutton {
  display: flex;
  justify-content: center;
}


</style>
<body>
    @if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ session('success') }}',
            timer: 800,
            showConfirmButton: false
        })
    </script>
@endif
    <script src="https://cdn.freecodecamp.org/testable-projects-fcc/v1/bundle.js"></script>
    <!-- head - Googlefonts link -->

    <div id="outside">
    <form id="survey-form" action="/my-handling-form-page" method="post">
      <h1 id="title">Application for permission to date my daughter</h1>
      <p id="description"><b>Note:</b> Form is to be completed at least 21 days prior to date</p>

      <!-- ------------------Personal Details---------------------------- -->
      <fieldset>
        <!-- groups of widgets that share the same purpose, for styling and semantic purposes -->
        <legend>Personal Details</legend>
        <!-- formally describes the purpose of the fieldset it is included inside. -->
        <div>
          <label id="name-label" for="name">Name:</label>
          <input type="text" required id="name" name="user_name" placeholder="Enter name here">   </div>
        <div>
          <label for="address-label">Address:</label>
          <input type="Address" id="address" name="Address" placeholder="Enter address here">   </div>
        <div>
          <label id="email-label" for="Email">Email:</label>
          <input type="email" required id="email" name="user_email" placeholder="Enter email here">   </div>
        <div>
          <label id="number-label" for="phone">Phone Number:</label>
          <input type="number" id="number" name="user_name" placeholder="Enter 10 digit number" min="1" max="9">  </div>
        <div>
          <label id="iq-label" for="iq">IQ:</label>
          <input type="number" id="iq" name="iq" placeholder="Enter IQ here">   </div>

        <!-- ------------------Radio Buttons-------------------------------- -->
        <div>
          <label for="Gender">Gender</label>
          <p>
            <input type="radio" name="gender" value="male" checked> Male<br>
            <input type="radio" name="gender" value="female"> Female<br>
            <input type="radio" name="gender" value="other"> Other
          </p>
        </div>
        <label for="date-label">Date of Proposed Outing:</label>
        <input type="date" name="bday">

      </fieldset>
      <!-- ------------------Checkboxes-------------------------------- -->
      <fieldset>
        <label for="Gender">Check All That Apply</label>
        <p>
          <input type="checkbox" name="tattoo" value="tattoo"> I have tattoos and/or piercings<br>
          <input type="checkbox" name="age" value="Car"> I am more than 2 years older than my daughter<br>
          <input type="checkbox" name="car" value="car"> I own a panel van or V8 ute<br>
          <input type="checkbox" name="work" value="work" checked> I work full-time<br>
          <input type="checkbox" name="rich" value="rich" checked> My parents are rich<br>
          <input type="checkbox" name="loc" value="loc" checked> Is the date at a well lit public location<br>
        </p>
      </fieldset>

      <!-- -----------------Dropdown menus--------------------------------- -->

      <fieldset>
        <div>
          <label for="politics">Political Persuasion:</label>
          <select id="dropdown">
      <option value="left">Left Wing</option>
      <option value="right">Right Wing</option>
      <option value="conservative">Conservative</option>
      <option value="nazi">Nazi</option>
      </select>

          <label for="politics">Education Level Completed:</label>
          <select id="dropdown2">
      <option value="University">University</option>
      <option value="College">College</option>
      <option value="Secondary">High School</option>
      <option value="None">None</option>
      </select>
        </div>
      </fieldset>

      <!-- --------------------Text Areas------------------------------ -->

      <fieldset>
        <legend>Essay Section</legend>
        <div>
          <label for="msg"></label>
          <p> In 50 words or more explain why you want to date my daughter</p>
          <textarea id="msg" name="user_message" rows="4" cols="50" placeholder="Enter Text Here"></textarea>   </div>
        <div>
          <label for="msg">Please upload contact details for 2 references</label><br>
          <textarea id="msg2" name="user_message" rows="4" cols="50" placeholder="Enter Text Here"></textarea>   </div>
        <p>Upload Police Clearance Certificate, Bank Statement and Medical Certifiates here:
          <button>Attach Files</button></p>
      </fieldset>

      <div id="submitbutton">
        <button type="submit" id="submit">Send your application</button>   </div>

    </form>
      </div>

    <!-- https://developer.mozilla.org/en-US/docs/Learn/HTML/Forms/Form_validation -->
</body>
</html>
