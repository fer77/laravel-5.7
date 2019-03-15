<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <h1>Create a new Project</h1>

    <form method="POST" action="/projects">
    {{ csrf_field() }}
        <div>
            <input type="text" name="title" placeholder="Project title">
        </div>
        <div>
            <textarea name="description" placeholder="Project description"></textarea>
        </div>
        <div>
            <button type="submit">Create Project</button>
        </div>
    </form>
</body>
</html>