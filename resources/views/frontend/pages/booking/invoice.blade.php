<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>
    <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 15px;
            line-height: 15px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .invoice-box.rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .invoice-box.rtl table {
            text-align: right;
        }

        .invoice-box.rtl table tr td:nth-child(2) {
            text-align: left;
        }
    </style>

</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                
                                <b>{{ env('APP_NAME') }}</b>
                                <br>
                                <br>
                                <small>123 Street, Uttara,</small>
                                 <br>
                                <small>Dhaka, Bangladesh.</small>
                                 <br>
                                 <a href="tel:01580513838">01580513838</a>
                                 <br>
                                <small>shadeqtransport@gmail.com</small>
                               
                            </td>

                            <td>
                                Invoice #: {{ $courier->viewing_pin }}<br />
                                
                                Created: {{ $courier->created_at->format('M d, Y') }}<br />
                                Sending Date : {{ $courier->date }} <br />
                               #Tracking ID : {{ $courier->booking_id }}
                              
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                <h5>Sender Details</h5>
                                {{ $courier->sender_name }}<br />
                                {{ $courier->sender_email }}<br />

                                <b>Location</b>
                                <br />
                                {{ $courier->sender_location }} <br />
                                <b>Address</b>
                                <br />
                                {{ $courier->sender_address }} <br />
                            </td>

                            <td>
                                <h5>Receiver Details</h5>
                                {{ $courier->receiver_name }}<br />
                                {{ $courier->receiver_email }}<br />

                                <b>Location</b>
                                <br />
                                {{ $courier->receiver_location }} <br />
                                <b>Address</b>
                                <br />
                                {{ $courier->receiver_address }} <br />
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="heading">
                <td>Payment Method</td>

                <td>{{ $courier->payment_type }}</td>
            </tr>


            @if ($courier->tran_id)
                <tr class="details">
                    <td>Transection ID </td>

                    <td>{{ $courier->tran_id }}</td>
                </tr>
            @endif

            <tr class="heading">
                <td>Delivary Information</td>

                <td></td>
            </tr>



            <tr class="details">
                
                <td>Vehicle</td>
                <td>{{$courier->vehicle}}</td>
            </tr>
            <tr class="details">
                
                <td>Time Slot</td>
                <td>{{$courier->time_slot}}</td>
            </tr>

            <tr class="details">
                
                <td> Rider </td>

                <td>
                    {{ $courier->rider->name }}
                    <br>
                    {{ $courier->rider->phone }}
                    <br>
                    {{ $courier->rider->email }}
                </td>
            </tr>
            


            <tr class="heading">
                <td>Parcel Information</td>

                <td></td>
            </tr>

            <tr class="item">
                <td>Category</td>

                <td> {{ $courier->category->Name }}</td>
            </tr>

            <tr class="item">
                <td>Weight</td>

                <td>{{ $courier->weight->Weight_range }}</td>
            </tr>

            <tr class="item last">
                <td>Delivary Time :</td>

                <td>{{ $courier->time_slot }}</td>
            </tr>

            <tr class="item">
                <td>Packaging</td>
                <td><span class="badge bg-white"> {{ $courier->special_package ? 'SPECIAL' : 'REGULAR' }}</span></td>
            </tr>

            <tr class="total">
                <td></td>

                <td>Total: BDT {{ $courier->price }}</td>
            </tr>
        </table>
    </div>

</body>

</html>
