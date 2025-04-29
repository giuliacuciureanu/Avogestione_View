<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="login.css">
</head>
<body>
<heder> 
<h1>header</h1>
</header>
<br>
<h2>BENTORNATO</h2>
<h3>INSERISCI I TUOI DATI PER CONTINUARE</h3>


<form>
  <label for="username">Username:</label><br>
  <input type="text" id="username" name="username"><br>
  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password"><br>
  <label for="ruolo">Ruolo</label>
      <select name="ruolo" id="ruolo">
        <option value="Organizzatore">Organizzatore</option>
        <option value="Studente">Studente</option>
      </select>
  <input type="submit" value="Invio">
</form>


</body>
</html>