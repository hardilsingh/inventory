@extends('layouts.admin')
@section('title')
Generate Bill
@stop

@section('heading')
Generate Bill
@stop

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <select required class="js-example-basic-single form-control item" autofocus name="product_code" id="product_code">
                <option value="" selected>Select a product or scan barcode</option>
                @foreach($products as $product)
                <option value="{{$product->id}}">{{$product->product_name}} | {{$product->product_code}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-lg-3">
        <div class="form-group">
            <div class="form-group">
                <label for="BillerName">Name</label>
                <input required type="text" placeholder="Enter Name" name="name" id="BillerName" onkeyup="getName()" class="form-control disable">
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="form-group">
            <div class="form-group">
                <div class="form-group">
                    <label for="BillerName">Telephone</label>
                    <input required type="tel" name="tel" placeholder="Enter Telephone number" id="BillerTel" onkeyup="getTel()" class="form-control disable">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="form-group">
            <div class="form-group">
                <div class="form-group">
                    <label for="BillerName">Address</label>
                    <textarea required type="text" name="address" id="BillerAddress" onkeyup="getAddress()" class="form-control disable"></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="form-group">
            <div class="form-group">
                <div class="form-group">
                    <label for="BillerCredit">Payment of</label>
                    <input required type="text" onkeyup="getPayment()" name="part_payment" placeholder="Enter Amount" id="BillerPayment" class="form-control disable">
                </div>
            </div>
        </div>
    </div>
</div>





<!--Author      : @arboshiki-->
<div id="invoice">
    <style>
        #invoice {
            padding: 30px;
        }

        .invoice {
            position: relative;
            background-color: #FFF;
            min-height: 680px;
            padding: 15px
        }

        .invoice header {
            padding: 10px 0;
            margin-bottom: 20px;
            border-bottom: 1px solid #3989c6
        }

        .invoice .company-details {
            text-align: right
        }

        .invoice .company-details .name {
            margin-top: 0;
            margin-bottom: 0
        }

        .invoice .contacts {
            margin-bottom: 20px
        }

        .invoice .invoice-to {
            text-align: left
        }

        .invoice .invoice-to .to {
            margin-top: 0;
            margin-bottom: 0
        }

        .invoice .invoice-details {
            text-align: right
        }

        .invoice .invoice-details .invoice-id {
            margin-top: 0;
            color: #3989c6
        }

        .invoice main {
            padding-bottom: 50px
        }

        .invoice main .thanks {
            margin-top: -100px;
            font-size: 2em;
            margin-bottom: 50px
        }

        .invoice main .notices {
            padding-left: 6px;
            border-left: 6px solid #3989c6
        }

        .invoice main .notices .notice {
            font-size: 1.2em
        }

        .invoice table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            margin-bottom: 20px
        }

        .invoice table td,
        .invoice table th {
            padding: 15px;
            background: #eee;
            border-bottom: 1px solid #fff
        }

        .invoice table th {
            white-space: nowrap;
            font-weight: 400;
            font-size: 16px
        }

        .invoice table td h3 {
            margin: 0;
            font-weight: 400;
            color: #3989c6;
            font-size: 1.2em
        }

        .invoice table .qty,
        .invoice table .total,
        .invoice table .unit {
            text-align: right;
            font-size: 1.2em
        }

        .invoice table .no {
            color: #fff;
            font-size: 1.6em;
            background: #3989c6
        }

        .invoice table .unit {
            background: #ddd
        }

        .invoice table .total {
            background: #3989c6;
            color: #fff
        }

        .invoice table tbody tr:last-child td {
            border: none
        }

        .invoice table tfoot td {
            background: 0 0;
            border-bottom: none;
            white-space: nowrap;
            text-align: right;
            padding: 10px 20px;
            font-size: 1.2em;
            border-top: 1px solid #aaa
        }

        .invoice table tfoot tr:first-child td {
            border-top: none
        }

        .invoice table tfoot tr:last-child td {
            color: #3989c6;
            font-size: 1.4em;
            border-top: 1px solid #3989c6
        }

        .invoice table tfoot tr td:first-child {
            border: none
        }

        .invoice footer {
            width: 100%;
            text-align: center;
            color: #777;
            border-top: 1px solid #aaa;
            padding: 8px 0
        }

        @media print {
            .invoice {
                font-size: 11px !important;
                overflow: hidden !important
            }

            .invoice footer {
                position: absolute;
                bottom: 10px;
                page-break-after: always
            }

            .invoice>div:last-child {
                page-break-before: always
            }
        }
    </style>
    <div class="invoice overflow-auto">
        <div style="min-width: 600px">
            <header>
                <div class="row">
                    <div class="col">
                        <a target="_blank" href="https://lobianijs.com">
                            <img src="/images/logo.jpg" height="50%" data-holder-rendered="true" />
                        </a>
                    </div>
                    <div class="col company-details">
                        <h2 class="name">
                            <a target="_blank" href="https://lobianijs.com">
                                Dr. MAC
                            </a>
                        </h2>
                        <div>SCO 48, 1st Floor, 20C, Chandigarh, 160020</div>
                        <div>094783 80056</div>
                        <div>company@example.com</div>
                    </div>
                </div>
            </header>
            <main>
                <div class="row contacts">
                    <div class="col invoice-to">
                        <div class="text-gray-light">INVOICE TO:</div>
                        <h2 class="to" id="to"></h2>
                        <div class="address" id="address"></div>
                        <div class="email" id="tel"></div>
                    </div>
                    <div class="col invoice-details">
                        <h1 class="invoice-id">INVOICE 3-2-1</h1>
                        <div class="date">Date of Invoice: {{now()}}</div>
                    </div>
                </div>
                <table border="0" id="billTable" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th class="text-left coll">Product Code</th>
                            <th class="text-right">Product Name</th>
                            <th class="text-right">Unit Cost</th>
                            <th class="text-right">Quantity</th>
                            <th class="text-right">TOTAL COST</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
                <hr class="hr">
                <div class="row">
                    <div class="col-lg-12 text-right display-4" style="font-size:25px; text-align:right">
                        Total - <span style="text-align:right" id="total"></span>
                    </div>
                    <div class="col-lg-12 text-right display-4" style="font-size:25px; text-align:right">
                        Paid - <span style="text-align:right" id="paid"></span>
                    </div>
                </div>
            </main>
            <footer>
                Invoice was created on a computer and is valid without the signature and seal.
            </footer>
        </div>
        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
        <div></div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 text-center">
        <button type="submit" style="margin-bottom:20px;" class="btn btn-lg btn-success" id="printInvoice" disabled="disabled">Print & Save &rarr;</button>
    </div>
</div>


<input type="hidden" id="postname" name="postname">
<input type="hidden" id="posttel" name="posttel">
<input type="hidden" id="postaddress" name="postaddress">
<input type="hidden" id="posttotal_sale" name="posttotal_sale">
<input type="hidden" id="postonCredit" name="postonCredit">



<script type='text/javascript'>
    (function() {
        $('.disable').keyup(function() {
            var empty = false;
            $('.disable').each(function() {
                if ($(this).val() == '') {
                    empty = true;
                }
            });

            if (empty) {
                $('#printInvoice').attr('disabled', 'disabled'); // updated according to http://stackoverflow.com/questions/7637790/how-to-remove-disabled-attribute-with-jquery-ie
            } else {
                $('#printInvoice').removeAttr('disabled'); // updated according to http://stackoverflow.com/questions/7637790/how-to-remove-disabled-attribute-with-jquery-ie
            }
        });
    })()






    function getPayment() {
        var payment = document.getElementById('BillerPayment').value;
        document.getElementById('postonCredit').value = payment;
        document.getElementById('paid').innerHTML = payment;
        console.log(payment);
    }

    function getName() {
        var name = document.getElementById('BillerName').value;
        var to = document.getElementById('to');
        to.innerHTML = name;
        document.getElementById('postname').value = name;
        console.log(name);
    }

    function getTel() {
        var tel = document.getElementById('BillerTel').value;
        var to = document.getElementById('tel');
        document.getElementById('posttel').value = tel;
        to.innerHTML = tel;
        console.log(tel);
    }

    function getAddress() {
        var address = document.getElementById('BillerAddress').value;
        var to = document.getElementById('address');
        document.getElementById('postaddress').value = address;
        to.innerHTML = address;
        console.log(address);
    }



    var sales_array = [];
    $(document).ready(function() {

        $('#printInvoice').click(function() {

            var name;
            var tel;
            var address;
            var paid;
            var total;

            name = document.getElementById('postname').value;
            tel = document.getElementById('posttel').value;
            address = document.getElementById('postaddress').value;
            paid = document.getElementById('postonCredit').value;
            total = document.getElementById('posttotal_sale').value;

            total = total.replace(/,/g, "");

            w = window.open();
            w.document.write($('#invoice').html());
            w.print();
            w.close();

            $.ajax({
                type: "POST",
                url: '/billing/add',
                data: {
                    _token: '{!!csrf_token()!!}',
                    name: name,
                    tel: tel,
                    address: address,
                    paid: paid,
                    total: total,
                },
                success: function(msg) {
                    window.location.replace('/billing');
                }
            });



        });

        // Department Change
        $('#product_code').change(function() {
            var qty = prompt('Enter Quantity', 1);
            // product id
            var id = $(this).val();
            // AJAX request 
            $.ajax({
                url: '/getProduct/' + id,
                type: 'get',
                dataType: 'json',
                success: function(response) {
                    var len = 0;
                    if (response['data'] != null) {
                        var id = response['data'].id;
                        var name = response['data'].product_name;
                        var code = response['data'].product_code;
                        var sale = response['data'].sale_price;
                        sales_array.push(sale * qty);
                        const sum = sales_array.reduce(add, 0).toLocaleString("en-IN");

                        function add(accumulator, a) {
                            return +accumulator + +a;
                        }
                        document.getElementById('posttotal_sale').value = sum;
                        // Find a <table> element with id="myTable":
                        var table = document.getElementById("billTable");
                        // Create an empty <tr> element and add it to the 1st position of the table:
                        var row = table.insertRow();
                        // Insert new cells (<td> elements) at the 1st and 2nd position of the "new" <tr> element:
                        var cell2 = row.insertCell();
                        var cell3 = row.insertCell();
                        var cell6 = row.insertCell();
                        var cell4 = row.insertCell();
                        var cell5 = row.insertCell();
                        var total = document.getElementById('total');
                        //Add css
                        cell2.className = 'text-left text-bold';
                        cell3.className = 'text-right';
                        cell4.className = 'qty';
                        cell5.className = 'total';
                        cell6.className = 'unit';
                        // Add some text to the new cells:
                        cell2.innerHTML = code;
                        cell3.innerHTML = name;
                        cell4.innerHTML = qty;
                        cell5.innerHTML = sale * qty;
                        cell6.innerHTML = sale;
                        total.innerHTML = sum;
                    }
                }
            });
        });
    });
</script>


@stop