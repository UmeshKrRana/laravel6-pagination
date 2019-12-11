<!doctype html>
<html lang="en">
  <head>
    <title>Pagination Example in Larvel 6</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container mt-2 mb-3">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h4 class="text-center mb-5"> Pagination Example in Laravel 6 </h4>
                <table class="table table-striped mt-2">
                    <thead>
                        <th> ID </th>
                        <th> Name </th>
                        <th> Email </th>
                        <th> Created at </th>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td> {{ $user->id }} </td>
                            <td> {{ $user->name }} </td>
                            <td> {{ $user->email }} </td>
                            <td> {{ $user->created_at }} </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $users->links() }}
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
