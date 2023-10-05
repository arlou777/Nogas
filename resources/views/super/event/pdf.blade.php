<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
    <title>Participants List</title>
    <!-- Add any CSS styles or links to external stylesheets here -->
    <style>
        /* Define your CSS styles for the PDF here */
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
  
    @inject('events', 'App\Models\Event') 

    <div class="col-12"><center>
        @foreach ($participants as $item)
        @foreach($events->where('id', $item->events_id)->get() as $items)
                   <h1><strong>{{ $items->title}}</strong></h1>
                    @endforeach

        </center>
        @endforeach</div>
    <table>
        <thead class="border border-2"  >
            <tr >
                            <th  class="font-weight-bold border border-1 text-success fs-6">Full Name</th>
                            <th  class="font-weight-bold border border-1 text-primary fs-6">Course & Year</th>
                            <th  class="font-weight-bold border border-1 text-primary fs-6">Email</th>
                            <th  class="font-weight-bold border border-1 text-primary fs-6">Contect</th>
                            <th  class="font-weight-bold border border-1 text-success fs-6">Signature</th>
                        
            </tr>
        </thead>
        <tbody>
           
            @foreach ($participants as $item)
            <tr>
                <td class="border ">{{ $item->startupname }}</td>
                <td class="border ">{{ $item->problem }}</td>
                <td class="border ">{{ $item->solution }}</td>
                <td class="border">{{ $item->target }}</td>
               
                
             
            </tr>
        @endforeach
        </tbody>
    </table>


</body>
</html>
