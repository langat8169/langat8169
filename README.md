
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
 
  <link rel="stylesheet" href="styles.css">

  <script src="script.js" defer></script>
</head>
<body>
<form id="incomeForm">
  <h2>Income Capture</h2>
  <label for="incomeType">Income Type:</label>
  <input type="text" id="incomeType" name="incomeType" required>

  <label for="incomeAmount">Amount:</label>
  <input type="number" id="incomeAmount" name="incomeAmount" required>

  <button type="submit">Submit</button>
</form>
  <header>
    <!-- Navigation menu -->
    <nav>
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#income">Income</a></li>
        <li><a href="#expenditure">Expenditure</a></li>
        <li><a href="#budget">Budget</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <section id="home">
    </section>
    <section id="income">
    </section>

    <section id="expenditure">
    </section>

    <section id="budget">
    </section>


  </main>
</body>
</html>
 

                                     style.css (part)
forms */
form {
  margin: 20px;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
input[type="number"] {
  width: 100%;
  padding: 8px;
  margin-bottom: 10px;
  border-radius: 3px;
  border: 1px solid #ccc;
}

button {
  padding: 10px 20px;
  background-color: #333;
  color: white;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}
nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  background-color: #333;
}

nav ul li {
  display: inline;
}

nav ul li a {
  display: block;
  color: white;
  text-decoration: none;
  padding: 10px 20px;
}

nav ul li a:hover {
  background-color: #555;
     

                      
 
     
       