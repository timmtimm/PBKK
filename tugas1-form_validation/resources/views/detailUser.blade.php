<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

    <title>Detail User - Traditional Game!</title>
  </head>

  <style>
    body {
        color: #404E67;
        background: #F5F7FA;
        background-color: rgba(156, 131, 95, 1);
        font-family: 'Open Sans', sans-serif;
    }
    .table-wrapper {
        width: 1250px;
        margin: 30px auto;
        background: #fff;
        padding: 20px;	
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
    .table-title {
        padding-bottom: 10px;
        margin: 0 0 10px;
    }
    .table-title h2 {
        margin: 6px 0 0;
        font-size: 22px;
    }
    .table-title .add-new {
        float: right;
        height: 30px;
        font-weight: bold;
        font-size: 12px;
        text-shadow: none;
        min-width: 150px;
        border-radius: 50px;
        line-height: 13px;
        border: 0;
        background-color: #9A6F59;
    }
    .table-title .add-new i {
        margin-right: 4px;
    }
    table.table {
        table-layout: fixed;
    }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
    }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table th:last-child {
        width: 140px;
    }
    table.table td a {
        cursor: pointer;
        display: inline-block;
        margin: 0 5px;
        min-width: 24px;
    }    
    table.table td a.add {
        color: #27C46B;
    }
    table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #E34724;
    }
    table.table td i {
        font-size: 19px;
    }
    table.table td a.add i {
        font-size: 24px;
        margin-right: -1px;
        position: relative;
        top: 3px;
    }    
    table.table .form-control {
        height: 32px;
        line-height: 32px;
        box-shadow: none;
        border-radius: 2px;
    }
    table.table .form-control.error {
        border-color: #f50000;
    }
    table.table td .add {
        display: none;
    }
    </style>

  <body>
        <body data-new-gr-c-s-check-loaded="14.1049.0" data-gr-ext-installed="" style="display: flex; margin-left: 1rem; margin-right: 1rem">
        <!-- <div class="container-lg"> -->

            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Users Game <b>Detail</b></h2></div>
                    </div>
                </div>
                
                @isset($success)
                    <div class="alert alert-success alert-block">
                        <strong>{{ $success }}</strong>
                    </div>
                @endisset

                <h3 style="margin-top: 1rem;">Biodata</h3>
		        <hr style="margin-top: 0;"/>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td colspan="1" class="text-center">Full Name</td>
                            <td class="text-center">{{ $data["name"] }}</td>
                        </tr>
                        <tr>
                            <td colspan="1" class="text-center">Date of Birth</td>
                            <td class="text-center">{{ $data["dateOfBirth"] }}</td>
                        </tr>
                        <tr>
                            <td colspan="1" class="text-center">Address</td>
                            <td class="text-center">{{ $data["address"] }}</td>
                        </tr>
                        <tr>
                            <td colspan="1" class="text-center" >Image</td>
                            <td class="text-center"><img style="max-width: 250px" src="{{ $image }}" /></td>
                            {{-- <td class="text-center">{{ $data-> }}</td> --}}
                        </tr>
                    </tbody>
                </table>

                <h3 style="margin-top: 1rem;">Previous School Data</h3>
		        <hr style="margin-top: 0;"/>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td colspan="1" class="text-center">School Origin</td>
                            <td class="text-center">{{ $data["schoolOrigin"] }}</td>
                        </tr>
                        <tr>
                            <td colspan="1" class="text-center">Grade</td>
                            <td class="text-center">{{ $data["grade"] }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        <!-- </div> -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>