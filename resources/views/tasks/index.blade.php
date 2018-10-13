<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>
      @foreach ($tasks as $task)

          <li>
            <a href="/tasks/{{ $task->id }}">
              {{ $task->body }}
            </a>
          </li>

      @endforeach
    </ul>
  </body>
</html>
