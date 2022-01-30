<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation receipt</title>
</head>

<style>
    .container {
        width: 100%;
        height: 40%;
        border: 1px solid red;
        margin-left: 8rem;
    }
    
    .heading {
        text-align: center;
    }
    
    .second-container {
        border: 2px solid black;
        width: 70%;
        margin-left: 10rem;
        margin-top: 1rem;
    }
    
    .date {
        margin-left: 10rem;
        margin-top: 4rem;
    }
    
    .info {
        background: #ecf0f1;
        margin-top: 0px;
        height: 25px;
        font-size: 18px;
        text-align: center;
    }
    
    .footer {
        background: #ecf0f1;
        margin-bottom: 0px;
        height: 25px;
        font-size: 18px;
        text-align: center;
    }
    
    .table {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }
    
    .table td,
    .table th {
        border: 1px solid #ddd;
        padding: 8px;
    }
</style>

<body>

    <div class="container">
        <h1 class="heading">Place Reservation Receipt.</h1>

        <span class="date">Date:{{date('d-m-y')}}</span>
        <div class="second-container">
            <h4 class="info">Information</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Place</th>
                        <th scope="col">From Date</th>
                        <th scope="col">To Date</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$booking->name}}</td>
                        <td>{{$booking->phone}}</td>
                        <td>{{$booking->email}}</td>
                        <td>{{$booking->fields_name}}</td>
                        <td>{{$booking->start_date}}</td>
                        <td>{{$booking->end_date}}</td>
                        <td>{{$booking->status}}</td>
                    </tr>

                </tbody>
            </table>
            <h4 class="footer">&#169All Rights Reserve To Daffodil International University</h4>
        </div>

    </div>
</body>

</html>