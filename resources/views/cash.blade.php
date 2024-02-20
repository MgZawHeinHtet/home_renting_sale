<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            margin-top: 7px;
            box-sizing: border-box;
        }

        .container {
            width: 100%;
            overflow-x: hidden;
        }

        /* first section start*/
        .first-section {
            width: 700px;
            height: 70px;
            margin: 0 auto;
            background-color: #002349;
            position: relative;
            color: white;
        }

        .fbar {
            position: absolute;
            top: 15px;
            left: 20px;
            font-size: larger;
            font-weight: 600;

        }

        .sbar {
            position: absolute;
            top: 6px;
            right: 20px;
        }

        /* first section end*/
        /* second section start */
        .second-section {
            padding: 10px;
            width: 700px;
            margin: 0 auto;
            margin-bottom: 20px;

        }

        .second-section p {
            margin-top: 20px;
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .second-section .sec-d-1 {
            margin-bottom: 10px;
        }

        .second-section .sec-d-1 span {
            padding-left: 10px;
        }

        .second-section .sec-d-1 svg {
            color: green;
            transform: translateY(4px);
        }

        /* second second end */
        /*third section start  */

        .third-section {
            padding: 10px;
            width: 700px;
            margin: 0 auto;
            margin-bottom: 20px;


        }

        .third-section img {
            width: 391px;
            height: 220px;
            margin-top: 20px;
        }

        .third-section-img-1 {
            margin-right: 13px;
        }

        /* third section end */
        /* fourth section start */
        .fourth-section {

            width: 700px;
            margin: 0 auto;
            margin-bottom: 20px;
            padding: 15px 10px;
            padding-bottom: 25px;
            border: 2px solid;
            border-color: yellow;
            background-color: rgb(250, 250, 229);
        }

        .img-container {
            width: 100%;
        }

        .fourth-section svg {
            color: rgb(140, 140, 13);
            transform: translateY(7px);
            margin-right: 10px;
        }

        /* fourth section end */
        /* fifth section start */
        .fifth-section {
            padding: 10px;
            width: 700px;
            margin: 0 auto;
            margin-bottom: 20px;

        }

        .fifth-section h3 {
            margin-bottom: 15px;
        }

        .fifth-section table {
            width: 100%;
            border: 1px solid gray;

        }

        .fifth-section table tr .td1 {
            width: 20%;
            padding: 15px 9px;
        }

        .fifth-section table tr .td2 {
            width: 80%;
        }

        /* fifth section end */
    </style>
</head>

<body>
    <div class="container">
        <div class="first-section">
            <div class="fbar">Home-Renting</div>
            <div class="sbar">
                <p>Comfirmation: {{ $booking->booking_number }}</p>

            </div>
        </div>
        <div class="second-section">
            <p>Thanks {{ $booking->first_name . ' ' . $booking->last_name }}!your renting in
                {{ $booking->property->region }} is confirmed</p>
            <div class="sec-d-1">
                
                <span>-</span>
                <span>{{ $booking->property->agent->company_name }} is expectiong you on {{ date('d M',strtotime($booking->check_in)) }}</span>
            </div>
            <div class="sec-d-1">
                <span>-</span>
                <span>Your payment will be handled by {{ $booking->property->agent->company_name }}.The payment section below has more details</span>
            </div>
            <div class="sec-d-1">
                <span>-</span>
                <span>Price per month - {{ $booking->property->price }} kyats</span>
            </div>

            <div class="sec-d-1">
                <span>-</span>
                <span>Price for {{ $booking->total_days }} days - {{ $booking->booking_price }} kyats</span>
            </div>
          

        </div>
        <div class="third-section">
            <h2>{{ $booking->property->title }}</h3>
                @if($booking->property->rentPropertyImage->count())
                <div class="img-container">
                    <img style="width: 50%" class="third-section-img-1"
                        src="{{  public_path($booking->property->rentPropertyImage[0]->image) }}"
                        alt="">
                   
                </div>
                @endif
        </div>
        <div class="fourth-section">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M11 15h2v2h-2zm0-8h2v6h-2zm.99-5C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2M12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8s8 3.58 8 8s-3.58 8-8 8" />
            </svg>
            <span>You'll pay when you stay at {{ $booking->property->agent->company_name }}</span>
        </div>
        <div class="fifth-section">
            <h3>Reservation details</h3>
            <table class="fifth-section-table">
                <tr>
                    <td class="td1">Check-in</td>
                    <td class="td2">{{ date('D d M Y',strtotime($booking->check_in))  }} ({{ $booking->property->check_in }})</td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="td1">Check-out</td>
                    <td class="td2">{{ date('D d M Y',strtotime($booking->check_out))}} ({{ $booking->property->check_out }})</td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="td1">Your reservation</td>
                    <td class="td2">{{ $booking->total_days }} days,</td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="td1">You rented for</td>
                    <td class="td2">{{ $booking->property->people }} people</td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="td1">Location</td>
                    <td class="td2">{{ $booking->property->township . ','.$booking->property->region }}</td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="td1">Phone</td>
                    <td class="td2">+{{ $booking->property->agent->phone }}</td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="td1">Content</td>
                    <td class="td2">{{ $booking->property->agent->email }}</td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>
