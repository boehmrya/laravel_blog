<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Posts</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/app.css">
    </head>

    <body class="antialiased">
      <main>
        <article>
          <h1><?= $post->title; ?></h1>
          <div><?= $post->body; ?></div>
        </article>

        <a href="/">Go Back</a>
      </main>
    </body>
</html>
