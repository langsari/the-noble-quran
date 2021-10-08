
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
    <h1 class="mt-5">Infomation Page</h1>
    <a href="insert.php" class="btn btn-success">Go to Insert</a>
    <hr>
    <table id="mytable" class="table table-bordered table-striped">
        <thead>
            <th>#</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Phone number</th>
            <th>Address</th>
            <th>Posting Date</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>

        <tbody>
            
                <tr>
                    <td>1</td>
                    <td>Midtor</td>
                    <td>Jya</td>
                    <td>jya_ya@outlook.co.th</td>
                    <td>0961281399</td>
                    <td>Hatyai</td>
                    <td>2021-09-21 17:38:17</td>
                    <td><a href="crud-user/update.php?id=1" class="btn btn-primary">Edit</a></td>
                    <td><a href="crud-user/delete.php?del=1" class="btn btn-danger">Delete</a></td>
                </tr>

                    </tbody>
    </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>