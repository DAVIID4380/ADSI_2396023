# ADSI_2396023

## Repositorio de Análisis y Desarrollo de Sistemas de Información (ADSI)

## themes:

![front-end](https://www.datocms-assets.com/14946/1590690720-frontend-and-backend-frameworks.png)

### 01-emmet

### 02-HTML

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/estilos_ejercicio6.css" media="all" />
    <script
      src="https://kit.fontawesome.com/6d5df60d71.js"
      crossorigin="anonymous"
    ></script>
    <title>Ángel David Botina Osorio</title>
  </head>
  <body onsubmit="alert('Bienvenido a mi web')">
    <form autocomplete="off">
      <section class="form-registro">
        <h4>Registrate</h4>
        <input
          class="form-registro__cajas"
          type="text"
          name="primer_nombre"
          placeholder="Primer Nombre"
          pattern="[a-zA-Z ]{2,254}"
          title="Solo letras, Mínimo 2"
          autofocus
          required
        />
        <input
          class="form-registro__cajas"
          type="text"
          name="Segundo nombre"
          placeholder="Segundo nombre"
          pattern="[a-zA-Z ]{2,254}"
          title="Solo letras, Mínimo 2"
        />
        <input
          class="form-registro__cajas"
          type="text"
          name="Primer apellido"
          placeholder="Primer apellido"
          pattern="[a-zA-Z ]{2,254}"
          title="Solo letras, Mínimo 2"
          required
        />
        <input
          class="form-registro__cajas"
          type="text"
          name="Segundo apellido"
          placeholder="Segundo apellido"
          pattern="[a-zA-Z ]{2,254}"
          title="Solo letras, Mínimo 2"
          required
        />
        <select class="form-registro__cajas" name="tipo de documento" required>
          <option disabled selected hidden>Tipo de documento</option>
          <option>Tarjeta de identidad</option>
          <option>Cédula de ciudadanía</option>
          <option>Cédula de extranjería</option>
        </select>
        <input
          class="form-registro__cajas"
          type="text"
          name="Numero de documento"
          placeholder="Número de documento"
          minlength="8"
          maxlength="10"
          pattern="^[0-9]+"
          title="Solo números. Mínimo 8, Máximo 10"
          required
        />
        <select class="form-registro__cajas" name="estado civil" required>
          <option disabled selected hidden>Estado civil</option>
          <option>Soltero</option>
          <option>Casado</option>
          <option>Divorciado</option>
          <option>Viudo</option>
        </select>
        <input
          class="form-registro__cajas"
          type="text"
          name="Direccion de residencia"
          placeholder="Dirección de residencia"
          minlength="5"
          required
        />
        <input
          class="form-registro__cajas"
          type="email"
          name="Correo electronico"
          placeholder="Correo electrónico"
          required
        />
        <input
          class="form-registro__cajas"
          type="tel"
          name="Telefono"
          pattern="[0-9]{3}-[0-9]{4}"
          title="Un número de teléfono válido debe tener 3 dígitos, un guión (-) y cuatro dígitos más"
          minlength="8"
          maxlength="8"
          placeholder="Teléfono"
        />
        <input
          class="form-registro__cajas"
          type="tel"
          name="Celular"
          placeholder="Celular"
          pattern="^[0-9]+"
          title="Solo números"
          minlength="10"
          required
        />
        <section class="form-registro__estrato">
          <h5>Selecciona tu estrato</h5>
          <label>
            1
            <input
              class="form-registro__botones--radio"
              type="radio"
              name="Estrato"
              value="1"
              checked
              required
            />
          </label>
          2
          <label>
            <input
              class="form-registro__botones--radio"
              type="radio"
              name="Estrato"
              value="2"
              required
            />
          </label>
          <label>
            3
            <input
              class="form-registro__botones--radio"
              type="radio"
              name="Estrato"
              value="3"
              required
            />
          </label>
          <label>
            4
            <input
              class="form-registro__botones--radio"
              type="radio"
              name="Estrato"
              value="4"
              required
            />
          </label>
          <label>
            5
            <input
              class="form-registro__botones--radio"
              type="radio"
              name="Estrato"
              value="5"
              required
            />
          </label>
          <label>
            6
            <input
              class="form-registro__botones--radio"
              type="radio"
              name="Estrato"
              value="6"
              required
            />
          </label>
        </section>
        <section class="form-registro__hobbies">
          <h5>Selecciona tus hobbies</h5>
          <label>
            Música
            <input
              class="form-registro__botones--checkbox"
              type="checkbox"
              name="Hobbies"
              value="Música"
            />
          </label>
          <label>
            Descansar
            <input
              class="form-registro__botones--checkbox"
              type="checkbox"
              name="Hobbies"
              value="Descansar"
            />
          </label>
          <label>
            Leer
            <input
              class="form-registro__botones--checkbox"
              type="checkbox"
              name="Hobbies"
              value="Leer"
            />
          </label>
          <br />
          <label>
            Deporte
            <input
              class="form-registro__botones--checkbox"
              type="checkbox"
              name="Hobbies"
              value="Deporte"
            />
          </label>
          <label>
            Ejercicio
            <input
              class="form-registro__botones--checkbox"
              type="checkbox"
              name="Hobbies"
              value="Ejercicio"
            />
          </label>
          <label>
            Otros
            <input
              class="form-registro__botones--checkbox"
              type="checkbox"
              name="Hobbies"
              value="Otros"
            />
          </label>
        </section>
        <textarea
          class="form-registro__cajas"
          placeholder="Escriba su proyecto de vida en 2 años"
          required
        ></textarea>
        <input
          class="form-registro__cajas"
          type="file"
          name="Adjuntar archivo"
        />
        <input
          class="form-registro__botones"
          type="reset"
          name="Resetear"
          value="Limpiar"
        />
        <p>
          <input type="checkbox" name="Terminos-condiciones" required />Estoy de
          acuerdo con los <a href="#">Terminos y Condiciones</a>
        </p>
        <input
          class="form-registro__botones"
          type="submit"
          name="Registrarse"
          value="Registrarse"
        />
      </section>
    </form>
    <div id="boton">
      <a href="http://127.0.0.1:5500/index.html">
        <button type="button" class="boton">
          <i class="fas fa-home"></i>&nbsp;<span>Menu</span>
        </button>
      </a>
    </div>
  </body>
</html>

### 03-CSS

\*{
margin: 0;
padding: 0;
box-sizing: border-box;
}
body {
background-color: black;
background-image: url(../img/6.jpg);
background-repeat: no-repeat;
background-position: center;
background-attachment: fixed;
background-size: 100% 100%;
}
.form-registro {
width: 500px;
background: #24303c;
padding: 30px;
margin: auto;
margin-top: 100px;
font-family: calibri;
color: white;
box-shadow: 7px 13px 37px #000;
}
.form-registro h4 {
font-size: 35px;
margin-bottom: 20px;
}
.form-registro**cajas {
width: 100%;
background: #24303c;
padding: 10px;
border-radius: 4px;
margin-bottom: 16px;
border: 1px solid #1f53c5;
font-family: 'calibri';
color: white;
}
.form-registro h5 {
font-size: 22px;
margin-top: 0;
margin-bottom: 20px;
}
.form-registro**estrato {
width: 100%;
background: #24303c;
padding: 10px;
border-radius: 4px;
margin-bottom: 16px;
border: 1px solid #1f53c5;
}
.form-registro**botones--radio {
margin-left: 0;
margin-right: 20px;
}
.form-registro**hobbies {
width: 100%;
background: #24303c;
padding: 10px;
border-radius: 4px;
margin-bottom: 16px;
border: 1px solid #1f53c5;
}
.form-registro**botones--checkbox {
margin: 0 50px 20px 0;
}
textarea {
resize: none;
}
.form-registro p {
height: 40px;
text-align: center;
font-size: 18px;
line-height: 40px;
}
.form-registro a {
color: white;
text-decoration: none;
}
.form-registro a:hover {
color: white;
text-decoration: underline;
}
.form-registro**botones {
width: 100%;
background: #1f53c5;
border: 4px soild;
border-radius: 10px;
transition-duration: 0.3s;
-webkit-transition-duration: 00.3s;
box-shadow: 0px 5px 10px 0px #0077ff;
padding: 12px;
color: white;
margin: 16px 0;
font-size: 16px;
}
.form-registro\_\_botones:hover {
cursor: pointer;
background: #010c6b;
}
#boton {
width: 188px;
margin: 0px auto;
margin-top: 50px;
margin-bottom: 20px;
}
.boton {
background-color: #0077ff;
color: white;
font-family: cursive;
font-size: 20px;
text-align: center;
padding: 5px 5px;
width: 200px;
border: 4px soild #00d9ff;
border-radius: 10px;
transition-duration: 0.3s;
-webkit-transition-duration: 00.3s;
box-shadow: 0px 5px 10px 0px #00e5ff;
}
.boton:hover {
background-color: #7abfe7;
color: rgb(247, 140, 0);
}
.boton span,
i {
cursor: pointer;
display: inline-block;
position: relative;
transition: 0.3s;
}
.boton span:after {
content: '>>';
position: absolute;
opacity: 0;
top: 0;
right: -20px;
transition: 0.3s;
}
.boton:hover span {
padding-right: 25px;
}
.boton:hover span:after {
opacity: 1;
right: 0;
}

### 04-JavaScript
