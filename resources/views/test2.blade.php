<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Fetch</title>
</head>
<body>
<form id="formElem">
    <input type="text" name="name">
    <input type="submit">
  </form>

  <script>
      const formElem = document.querySelector('#formElem');
    formElem.onsubmit = async (e) => {
      e.preventDefault();

      let response = await fetch('api/productos', {
        method: 'POST',
        body: new FormData(formElem)
      });

      let result = await response.json();
    };
  </script>
</body>
</html>
