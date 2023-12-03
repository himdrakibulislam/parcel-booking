<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env('APP_NAME')}}</title>
    <style>
        /* Add your custom styles here */
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        .invoice {
            border: 1px solid #ccc;
            padding: 20px;
            margin-top: 20px;
        }
        .sender, .receiver {
            margin-bottom: 20px;
        }
        .name{
            text-align: center;
        }
        .info{
            display:flex;
            
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="invoice">
            <h2 class="name"> {{env('APP_NAME')}}</h2>
            <h6 class="name">Invoice</h6>
            <h3>#ID {{$courier->booking_id}}</h3>
            <small>Invoice Date: {{ now()->format('d M Y') }}</small>

            @if ($courier->tran_id)
                <h3>Transection ID : {{$courier->tran_id}}</h3>
            @endif
            
            <div class="info">
                <div class="sender">
                    <h3>Sender Details</h3>
                    <p>Name: {{ $courier->sender_name }}</p>
                    <p>Phone: {{ $courier->sender_contact }}</p>
                    <p>Email: {{ $courier->sender_email }}</p>
                    <p>location: {{ $courier->sender_location }}</p>
                    <p>Address: {{ $courier->sender_address }}</p>
                </div>
    
                <div class="receiver">
                    <h3>Receiver Details</h3>
                    <p>Name: {{ $courier->receiver_name }}</p>
                    <p>Email: {{ $courier->receiver_email }}</p>
                    <p>Phone: {{ $courier->receiver_contact }}</p>
                    <p>Location: {{ $courier->receiver_location }}</p>
                    <p>Address: {{ $courier->receiver_address }}</p>
                </div>
            </div>

            <h3 class="name">Parcel Details</h3>
            <p>Category:  {{ $courier->category->Name }}</p>
            <p>Weight:  {{ $courier->weight->Weight_range }}</p>
            
            <p>Total Amount: BDT {{ $courier->price }}</p>
            <p>Payment :  {{ $courier->payment_type }}</p>
            <p>Delivary Time :  {{ $courier->time_slot }}</p>
            
           <br>
            <div>
                <small><b>Rider Information </b></small>
                <p>Name : {{$courier->rider->name}}</p>
                <p>Contact : {{$courier->rider->phone}}</p>
            </div>
        </div>
    </div>
</body>
</html>
