<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>InFoo | {{ Auth::user()->name }}</title>

  <link rel="stylesheet" href="{{ asset('userprofile_assets/userprofile_style.css') }}">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Jost:wght@600;900&family=Poppins:wght@400;500;600;700&display=swap"
    rel="stylesheet">
    <style>
      .footer-bottom{
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .del-user{
        color: white;
        text-decoration: underline;
      }
    </style>
</head>

<body id="top">

    {{$slot}}


    <script src="{{ asset('userprofile_assets/userprofile_script.js') }}"></script>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>