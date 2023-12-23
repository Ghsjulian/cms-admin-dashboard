<?php
session_start();
$session = $_SESSION['admin'];
if (isset($session['user_role'])) {
  include_once('header.php');
  ?>
  <body>
    <div class="hero">
      <div class="section">
        <div class="contact">
          <h2>Add A New Student</h2>
          <div class="contact-form">
            <div id="message"></div>
            <form id="application_form">
              <select id="select_bank">
                <option>Chose A Group</option>
                <option value="Science">Science</option>
                <option value="Humanity">Humanity</option>
                <option value="Commerce">Commerce</option>
                <option value="Others">Others</option>
                       </select>
              <input
              type="text"
              placeholder="Enter Student Full Name"
              id="student_name"
              name="student_name"
              />
            <input
            type="number"
            placeholder="Enter Roll Number"
            id="roll_number"
            name="roll_number"
            />
             <input
            type="number"
            placeholder="Enter EIN Number"
            id="ein_number"
            name="ein_number"
            />
          <input
          type="number"
          placeholder="Enter Registration Number"
          id="reg_number"
          name="reg_number"
          />
        <input
        type="text"
        placeholder="Enter Student Religion"
        id="religion"
        name="religion"
        />
        <input
        type="text"
        placeholder="Enter Optional Subject"
        id="optional_sub"
        name="optional_sub"
        />
      <input
      type="password"
      placeholder="Set Student Password"
      id="password"
      name="password"
      />
    <button
      onclick="AddStudent()"
      type="button"
      id="btn"
      name="contact-btn"
      >
      Add Student
    </button>
  </form>
</div>
</div>
</div>
</div>
<script src="js/index.js"></script>
</body>
</html>
<?php
} else {
include_once('login.php');
}
?>