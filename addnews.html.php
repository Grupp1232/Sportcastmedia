<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add News</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f8f9fa;
      color: #333;
      line-height: 1.6;
    }

    header {
      background-color: #333;
      color: #fff;
      text-align: center;
      padding: 20px 0;
    }

    h2 {
      font-size: 24px;
      color: #333;
      text-align: center;
      margin-bottom: 30px;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 0 20px;
    }

    form {
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 20px;
      margin-bottom: 20px;
    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 10px;
    }

    textarea {
      width: 110%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
      height: 200px; /* Adjust height as needed */
    }

    input[type="submit"] {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <header>
    <h2>Add News</h2>
  </header>

  <div class="container">
    <form action="" method="post">
      <label for="newstext">Type your news here:</label>
      <textarea id="newstext" name="newstext" rows="10" cols="80"></textarea> <!-- Adjusted rows -->
      <input type="submit" name="submit" value="Add">
    </form>
  </div>
</body>
</html>
