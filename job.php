
<html>
<head><title>JOB PORTAL</title>
<Style>
body
{
background-color:#FFC0CB;
}
</Style>
</head>
<body>
<h1><center> JOB LIST</center></h1>
<center>
<section id="dashboard">
    <form name="place" method="post" action="add.php">
      <table>
        <tr>
          <td><label for="company">Company</label></td>
          <td>
            <select id="company" name="t1">
              <option value="HCL">HCL</option>
              <option value="TCS">TCS</option>
              <option value="CTS">CTS</option>
              <option value="ZOHO">ZOHO</option>
               <option value="INFOSYS">INFOSYS</option>
            </select>
          </td>
        </tr>
        <tr>
          <td><label for="job-title">Job Title</label></td>
          <td><input type="text" id="job-title" name="t2"></td>
        </tr>
        <tr>
          <td><label for="salary">Salary</label></td>
          <td><input type="number" id="salary" name="t3"></td>
        </tr>
        <tr>
          <td><label for="posting">Number of Postings</label></td>
          <td><input type="number" id="posting" name="t4"></td>
        </tr>
        <tr>
          <td><label for="location">Location</label></td>
          <td>
            <select id="location" name="t5">
              <option value="Madurai">Madurai</option>
              <option value="Chennai">Chennai</option>
              <option value="Coimbatore">Coimbatore</option>
              <option value="Trichy">Trichy</option>
              <option value="Tirunelveli">Tirunelveli</option>
            </select>
          </td>
        </tr>
  <tr>
            <td><label for="id">ID</label></td>
            <td><input type="number" id="tid" name="tid"></td>
          </tr>
      </table>
      <button type="submit" name="submit">Submit</button>
     <button type="edit" name="edit">Edit</button>
     <button type="delete" name="delete">Delete</button>
    </form>
  </section>
</body>
</html>