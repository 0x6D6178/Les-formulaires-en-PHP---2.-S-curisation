<!doctype html>
<head>
  <meta charset="utf-8">
  <title>Support</title>
</head>
<body>

<form  action="sent.php"  method="post">
  <div>
    <label  for="firstname">First Name :</label>
    <input  type="text"  id="firstname"  name="firstname" required="required">
  </div>
    <div>
    <label  for="lastname">Last Name :</label>
    <input  type="text"  id="lastname"  name="lastname" required="required">
  </div>
  <div>
    <label  for="email">Email :</label>
    <input  type="email"  id="email"  name="email" required="required">
  </div>
  <div>
    <label  for="phone">Phone Number :</label>
    <input  type="text"  id="phone"  name="phone" required="required">
  </div>
  <div>
     <label for="subject">Subject</label><br />
     <select id="subject" name="subject" required="required">
        <option value="Piratage de votre compte">My account has been hacked</option>
        <option value="Remboursement de votre commande">Refund a order</option>
      </select>
  </div>
  <div>
    <label  for="message">Message :</label>
    <textarea  id="message"  name="message" required="required"></textarea>
  </div>
  <div  class="button">
    <button  type="submit">Send</button>
  </div>
 </form>
</body>
</html>