<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Jennifer Ly</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <style>

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #aa80ff;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 5px;
  margin-bottom: 40px;
}

input[type=submit]:hover {
  background-color: #7769C3;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
  </head>
  <body>

    <div class="menu-container">

      <a class="active" href="contact.html">Contact</a>
      <a href="jennifer-ly-resume.pdf">Resume</a>
      <a href="about.html">About</a>
      <a href="index.html">Home</a>
    </div>

    <div class="top-container">
      <h1>Contact Me</h1>
      <h2>I'm happy to answer questions or chat.</h2>
    </div>

    <div class="main-container">

      <?php
      if ($_POST["email"]<>'') {
          $ToEmail = 'jennifer.ying.ly@gmail.com';
          $EmailSubject = $_POST["subject"];
          $mailheader = "From: ".$_POST["email"]."\r\n";
          $mailheader .= "Reply-To: ".$_POST["email"]."\r\n";
          $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
          $MESSAGE_BODY = "Name: ".$_POST["name"]."";
          $MESSAGE_BODY .= "Email: ".$_POST["email"]."";
          $MESSAGE_BODY .= "Message: ".nl2br($_POST["message"])."";
          mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure");
      ?>
      Your message was sent
      <?php
      } else {
      ?>

      <form action="contact.php" method="post">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Your name..">

        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Your email address..">
        </select>

        <label for="subject">Subject</label>
        <input type="text" id="subject" name="subject" placeholder="Email subject..">

        <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>

        <input type="submit" value="Submit">
      </form>

    </div>

    <div class="footer-container">
      <a class="footer-link" href="https://www.linkedin.com/in/jenniferyly/">LinkedIn</a>
      <a class="footer-link" href="https://instagram.com/jenerallyfiomay/">Instagram</a>
      <a class="footer-link" href="https://jenniferyly.github.io/">Website</a>
      <p class="copyright">© 2020 Jennifer Ly.</p>
    </div>

  </body>
</html>
