<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}

.row::after {
  content: "";
  clear: both;
  display: table;
}

[class*="col-"] {
  float: left;
  padding: 15px;
}

html {
  font-family: "Lucida Sans", sans-serif;
}

.lol {
  color: black;
  padding: 15px;
  text-align: center;
}

.menu ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.menu li {
  padding: 8px;
  margin-bottom: 7px;
  background-color: #33b5e5;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.menu li:hover {
  background-color: #0099cc;
}

.aside {
  background-color: #33b5e5;
  padding: 15px;
  color: #ffffff;
  text-align: center;
  font-size: 14px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.footer {
  background-color: #0099cc;
  color: #ffffff;
  text-align: center;
  font-size: 12px;
  padding: 15px;
}

/* For mobile phones: */
[class*="col-"] {
  width: 100%;
}

@media only screen and (min-width: 768px) {
  /* For desktop: */
  .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
}
</style>
</head>
<body>

<div class="lol">
<img src="{{ asset('images/borrowtwee.jpg') }}" alt="Image" style="height: 400px;   border-radius: 50px;
">
</div>

<div class="row">
  <div class="col-3 menu">
  <ul>
      <li>Leen</li>
      <li>Bekijk</li>
      <li>Verleen</li>
    </ul>
</div>

  <div class="col-6">
    <h1>Probleem</h1>
    <br>
    <p>Iedereen kent het wel, je hebt iets uitgeleend maar weet niet meer aan wie. Of wellicht heb je iets uitgeleend maar krijg je het maar niet terug, wat nu? Wij bieden een oplossing!</p>
  </div>

  <div class="col-3 right">
    <div class="aside">
      <h2>Platform?</h2>
      <p>Time2share is een platform waar je jouw producten kan uitlenen en producten kan lenen van anderen.</p>
      <h2>Hoe?</h2>
      <p>Maak een account aan en login om te lenen en uitlenen van producten.</p>
      <h2>Functies?</h2>
      <p>Bij het lenen en uitlenen van produceten kan je de producten categoriseren en filteren.</p>
    </div>
  </div>
</div>

<div class="footer">
<div class=”footer-content”>
<p>My name is Perry and i am the founder of Time2share.</p>
</div>
<br>
<p>copyright &copy;2023 <a href=”#”>PerryjrRijaard</a>  </p></div>

</body>
</html>


